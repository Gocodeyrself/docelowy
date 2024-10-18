<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class Pi_gusloader extends Module
{
    public function __construct()
    {
        $this->name = 'pi_gusloader';
        $this->tab = 'front_office_features';
        $this->version = '1.0.1';
        $this->author = '4AD STUDIO';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.6',
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Pobieranie danych z GUSu');
        $this->description = $this->l('Pobiera dane do firmy z bazy GUS w trakcie składanie zamówienia');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
        $this->registerHook('displayShoppingCartFooter');
    }

    public function install()
    {
        return parent::install() && $this->registerHook('actionFrontControllerSetMedia')
            && $this->registerHook('displayCheckoutSummaryTop')
            && $this->registerHook('displayGus')
            && $this->registerHook('displayShoppingCartFooter');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookActionFrontControllerSetMedia()
    {
        Media::addJsDef(array(
            'loadGusUrl' => Context::getContext()->link->getModuleLink('pi_gusloader', 'asgusload', array('ajax' => true))
        ));
        $this->context->controller->addJS($this->_path . 'pi_gusloader.js');
        $this->context->controller->addCSS($this->_path . 'pi_gusloader.css');
    }
    public function hookDisplayCheckoutSummaryTop()
    {
        return $this->display(__FILE__, 'pi_gusloader.tpl');
    }
    public function hookDisplayGus()
    {
        return $this->display(__FILE__, 'pi_gusloader.tpl');
    }
    public function hookDisplayShoppingCartFooter()
    {
        return $this->display(__FILE__, 'pi_gusloader.tpl');
    }
}
