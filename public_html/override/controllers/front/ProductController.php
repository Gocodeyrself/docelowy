<?php
/**
* Ten plik nadpisuje klasę ProductController. Nie modyfikuj tego pliku, jeśli chcesz w przyszłości aktualizować moduł.
* 
* @author    Globo Software Solution JSC
* @copyright 2017 Globo., Jsc
* @license   Proszę przeczytać licencję w pliku license.txt
* @link	     http://www.globosoftware.net
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
        if(Module::isInstalled('gformbuilderpro') && Module::isEnabled('gformbuilderpro'))
        {
            $formObj = Module::getInstanceByName('gformbuilderpro');
            $this->product->description = $formObj->getFormByShortCode($this->product->description);
            $this->product->description_short = $formObj->getFormByShortCode($this->product->description_short);
        }

        // BEGIN: Nowy kod do przekazania metod wysyłki do szablonu
        // Sprawdź, czy waluta to PLN
        if ($this->context->currency->iso_code == 'PLN') {
            // Pobierz ID kraju dla Polski
            $id_country = Country::getByIso('PL'); // Zakładamy, że 'PL' to kod ISO dla Polski

            // Pobierz listę przewoźników dostępnych dla kraju
            $carriers = Carrier::getCarriersForOrder($id_country);

            // Inicjalizuj tablicę do przechowywania metod wysyłki i cen
            $shipping_methods = [];

            // Iteruj przez każdego przewoźnika i pobierz cenę dostawy
            foreach ($carriers as $carrier_data) {
                $carrier = new Carrier($carrier_data['id_carrier']);

                // Oblicz cenę dostawy dla produktu
                $delivery_price = $this->getDeliveryPrice($carrier, $id_country);

                // Dodaj metodę wysyłki do tablicy
                $shipping_methods[] = [
                    'name' => $carrier->name,
                    'price' => Tools::displayPrice($delivery_price, $this->context->currency),
                ];
            }

            // Przekaż metody wysyłki do szablonu
            $this->context->smarty->assign('shipping_methods', $shipping_methods);
        }
        // END: Nowy kod

        // Upewnij się, że wywołujesz parent::initContent() po swoich modyfikacjach
        parent::initContent();
    }

    private function getDeliveryPrice($carrier, $id_country)
    {
        // Pobierz całkowitą wagę produktu (uwzględniając ilość)
        $total_weight = $this->product->weight * 1; // Zakładamy ilość 1

        // Pobierz cenę dostawy na podstawie wagi
        $delivery_price = $carrier->getDeliveryPriceByWeight($total_weight, $id_country);

        // Jeśli cena dostawy według wagi nie jest zdefiniowana, spróbuj według ceny
        if ($delivery_price === false) {
            $product_price = $this->product->getPrice(); // Pobierz cenę produktu
            $delivery_price = $carrier->getDeliveryPriceByPrice($product_price, $id_country);
        }

        return $delivery_price;
    }
}
