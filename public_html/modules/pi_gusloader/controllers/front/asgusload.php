<?php

require_once _PS_MODULE_DIR_ . "pi_gusloader/classes/GusRegonApi.php";

class pi_gusloaderAsgusloadModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
    }

    public function postProcess()
    {
        if (Tools::getIsset("nip") && Tools::getValue("nip") != "") {

            $nip = Tools::getValue("nip");
            $nip = str_replace(" ", "", $nip);

            if (!preg_match('/[0-9]{10}/', $nip)) {
                echo json_encode(array(
                    'error' => $this->module->l("NIP jest niepoprawny")
                ));
                die();
            }

            $gus = new GusRegonApi();
            $result = $gus->checkNip($nip);
            $result = json_decode($result);
            $xml = simplexml_load_string($result->d);
            $json = json_encode($xml);
            $array = json_decode($json, TRUE);

            if (!isset($array["dane"])) {
                echo json_encode(array(
                    'error' => $this->module->l("Nie znaleziono wyników")
                ));

                die();
            }
            if ($array["dane"]["Ulica"]) {
                $address = $array["dane"]["Ulica"] . " " . $array["dane"]["NrNieruchomosci"];
            } else $address = $array["dane"]["NrNieruchomosci"];
            echo json_encode(array(
                "company" => $array["dane"]["Nazwa"],
                "address" => $address,
                "city" => $array["dane"]["Miejscowosc"],
                "postcode" => $array["dane"]["KodPocztowy"]
            ));
        } else {
            echo json_encode(array(
                'error' => $this->module->l("NIP jest pusty lub niepoprawny")
            ));
        }
    }

    public function setMedia()
    {
        parent::setMedia();
    }
}
