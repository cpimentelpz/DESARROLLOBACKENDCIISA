<?php

require_once __DIR__ . '/../models/Servicio.php';

function getServicios() {
    $servicioModel = new Servicio();
    $servicios = $servicioModel->getAll();
    return json_encode($servicios);
}

function getServicioById($id) {
    $servicioModel = new Servicio();
    $servicio = $servicioModel->getById($id);

    if ($servicio) {
        return json_encode($servicio);
    } else {
        handleError("Servicio no encontrado");
    }
}

function createServicio($data) {
    $servicioModel = new Servicio();
    $errors = validateServicioData($data);

    if (empty($errors)) {
        $nombre = $data["nombre"];
        $descripcion = $data["descripcion"];
        $beneficios = $data["beneficios"];

        $servicio = $servicioModel->create($nombre, $descripcion, $beneficios);

        if ($servicio) {
            return json_encode($servicio);
        } else {
            handleError("Error al crear el servicio
