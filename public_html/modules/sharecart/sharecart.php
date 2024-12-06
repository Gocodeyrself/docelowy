<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class ShareCart extends Module
{
    public function __construct()
    {
        $this->name = 'sharecart';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Your Name';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Share Cart');
        $this->description = $this->l('Allows sharing the cart contents via a link.');
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install()
{
    if (!parent::install()) {
        return false;
    }

    if (!$this->registerHook('displayShoppingCart') || !$this->registerHook('displayCartShareButton')) {
        return false;
    }

    if (!$this->addHookToCartTemplate()) {
        $this->_errors[] = $this->l('Failed to modify cart.tpl to add the Share Cart hook.');
        return false;
    }

    // Utworzenie tabeli w bazie danych
    $sql = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'sharecart_links` (
        `id_sharecart_link` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
        `cart_id` INT(11) UNSIGNED NOT NULL,
        `unique_id` VARCHAR(64) NOT NULL,
        `date_add` DATETIME NOT NULL,
        PRIMARY KEY (`id_sharecart_link`)
    ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';
    
    if (!Db::getInstance()->execute($sql)) {
        return false;
    }

    return true;
}


    public function uninstall()
    {
        // Usunięcie tabeli podczas deinstalacji modułu
        $sql = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'sharecart_links`;';

        if (!Db::getInstance()->execute($sql)) {
            return false;
        }

        return parent::uninstall();
    }

    public function hookDisplayShoppingCart($params)
{
    // Logowanie dla weryfikacji wywołania hooka
    PrestaShopLogger::addLog('hookDisplayShoppingCart called', 1);

    // Wymuszenie dodania pliku JavaScript
    echo '<script src="' . $this->_path . 'views/js/sharecart.js"></script>';
    
    // Wymuszenie dodania pliku CSS
    echo '<link rel="stylesheet" href="' . $this->_path . 'views/css/sharecart.css">';

    // Funkcja nie zwraca treści do wyświetlenia
    return '';
}



    public function getContent()
    {
        $html = '<div style="text-align: center;">';
        $html .= '<img src="' . $this->_path . 'logo.png" alt="ShareCart Logo" style="width: 100px;"/><br>';
        $html .= '<h2>' . $this->displayName . '</h2>';
        $html .= '<p>Version: ' . $this->version . '</p>';
        $html .= '<p>Created by: Your Name</p>';
        $html .= '</div>';

        return $html;
    }

    private function addHookToCartTemplate()
{
    // Ścieżka do głównego pliku szablonu koszyka
    $themePath = _PS_THEME_DIR_ . 'templates/checkout/cart.tpl';

    // Sprawdzenie, czy plik istnieje
    if (!file_exists($themePath)) {
        return false;
    }

    // Pobranie zawartości pliku
    $tplContent = file_get_contents($themePath);

    // Sprawdzenie, czy hook już istnieje
    if (strpos($tplContent, '{hook h=\'displayCartShareButton\'}') !== false) {
        return true; // Hook już istnieje
    }

    // Wstawienie hooka przed zamknięciem tagu koszyka (np. przed zamknięciem listy produktów)
    $updatedTplContent = str_replace(
        '</ul>', // Możesz dostosować miejsce, gdzie hook ma być wstawiony
        "{hook h='displayCartShareButton'}\n</ul>",
        $tplContent
    );

    // Zapisanie zmodyfikowanego pliku
    return file_put_contents($themePath, $updatedTplContent) !== false;
}

public function hookDisplayCartShareButton($params)
{
    $this->context->smarty->assign([
        'share_link' => '#', // Tymczasowo, link generuje się dynamicznie w JS
    ]);

    return $this->display(__FILE__, 'views/templates/hook/displayCartShareButton.tpl');
}


}
