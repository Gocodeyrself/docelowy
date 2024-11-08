<?php
/**
 * Ten plik nadpisuje klasę ProductController. Nie modyfikuj tego pliku, jeśli chcesz w przyszłości aktualizować moduł.
 * 
 * @author    Globo Software
 * @copyright 2017 Globo
 * @license   Proszę przeczytać licencję w pliku license.txt
 * @link      http://www.globosoftware.net
 */
class ProductController extends ProductControllerCore
{
    /*
     * module: gformbuilderpro
     * date: 2024-08-13 09:22:56
     * version: 2.0.2
     */
    public function initContent()
    {
        if (Module::isInstalled('gformbuilderpro') && Module::isEnabled('gformbuilderpro')) {
            $formObj = Module::getInstanceByName('gformbuilderpro');
            $this->product->description = $formObj->getFormByShortCode($this->product->description);
            $this->product->description_short = $formObj->getFormByShortCode($this->product->description_short);
        }
        parent::initContent();
    }
}
