<?php
if (function_exists('ioncube_loader_version')) {
    echo 'IonCube Loader version: ' . ioncube_loader_version();
} else {
    echo 'IonCube Loader is not installed.';
}
?>
