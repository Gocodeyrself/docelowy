<?php
// Nazwa pliku, który chcemy udostępnić
$filename = 'input.hex';
$filepath = '/plik/' . $filename;

// Dane do logowania (można zastąpić bardziej zaawansowanym mechanizmem)
$valid_username = 'user';
$valid_password = 'pass';

// Proste HTTP Basic Auth
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Authorization required';
    exit;
} else {
    if ($_SERVER['PHP_AUTH_USER'] == $valid_username && $_SERVER['PHP_AUTH_PW'] == $valid_password) {
        // Sprawdzenie, czy plik istnieje
        if (file_exists($filepath)) {
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . $filename . '"');
            header('Content-Length: ' . filesize($filepath));
            readfile($filepath); // Wysyłanie pliku
            exit;
        } else {
            header('HTTP/1.0 404 Not Found');
            echo 'File not found';
            exit;
        }
    } else {
        header('WWW-Authenticate: Basic realm="Restricted Area"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Invalid credentials';
        exit;
    }
}
?>
