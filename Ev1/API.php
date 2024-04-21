<?php

// Ruta: GET /nosotros
function getNosotros() {
    $db = connectToDatabase();
    $sql = "SELECT * FROM nosotros";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $nosotros = $result->fetch_assoc();
        return json_encode($nosotros);
    } else {
        return json_encode(["message" => "Información de la empresa no encontrada"]);
    }

    $db->close();
}

// Ruta: PUT /nosotros
function updateNosotros($data) {
    $mision = $data["mision"];
    $vision = $data["vision"];
    $valores = $data["valores"];

    $db = connectToDatabase();
    $sql = "UPDATE nosotros SET mision = '$mision', vision = '$vision', valores = '$valores
