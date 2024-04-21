<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/vendor/autoload.php';

// Conexión a la base de datos
$db = connectToDatabase();

// Rutas de la API REST
$apiRoutes = [
    '/servicios' => ['GET' => 'getServicios', 'POST' => 'createServicio', 'PUT' => 'updateServicio', 'DELETE' => 'deleteServicio'],
    '/nosotros' => ['GET' => 'getNosotros', 'PUT' => 'updateNosotros'],
];

// Manejo de solicitudes de la API REST
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (array_key_exists($requestUri, $apiRoutes)) {
    $httpMethod = $_SERVER['REQUEST_METHOD'];
    $handler = $apiRoutes[$requestUri][$httpMethod];

    if (is_callable($handler)) {
        $data = json_decode(file_get_contents('php://input'), true);
        echo json_encode($handler($data));
    } else {
        handleError("Método no permitido: $httpMethod");
    }
} else {
    // Código para manejar otras solicitudes (opcional)
}

closeDatabaseConnection($db);
