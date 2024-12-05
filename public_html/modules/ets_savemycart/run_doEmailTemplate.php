<?php
// Załaduj kontekst PrestaShop
require_once dirname(__FILE__) . '/../../config/config.inc.php';
require_once dirname(__FILE__) . '/../../init.php';

// Załaduj plik modułu
require_once dirname(__FILE__) . '/ets_savemycart.php';

// Zainicjuj moduł
$module = Module::getInstanceByName('ets_savemycart');

// Sprawdź, czy moduł został poprawnie załadowany
if (!$module) {
    die('Moduł nie został znaleziony.');
}

// Wywołaj funkcję _doEmailTemplate()
$result = $module->_doEmailTemplate();

// Wyświetl wynik
if ($result) {
    echo 'Szablony e-mail zostały poprawnie skonfigurowane.';
} else {
    echo 'Wystąpił błąd podczas konfiguracji szablonów e-mail.';
}
