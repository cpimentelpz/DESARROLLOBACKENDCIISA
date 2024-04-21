<?php

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'SYSTEM');
define('DB_PASSWORD', 'ASDFASDFADF');
define('DB_NAME', 'bd_tuingenio');

function connectToDatabase() {
    $dbHost = DB_HOST;
    $dbUsername = DB_USERNAME;
    $dbPassword = DB_PASSWORD;
    $dbName = DB_NAME;

    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($db->connect_error) {
        die("Error de conexión a la base de datos: " . $db->connect_error);
    }

    return $db;
}

function closeDatabaseConnection($db) {
    $db->close();
}
