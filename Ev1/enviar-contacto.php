<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $asunto = trim($_POST["asunto"]);
    $mensaje = trim($_POST["mensaje"]);

    // Validar datos y enviar correo electrónico (código no incluido)

    echo json_encode(["message" => "Mensaje enviado correctamente"]);
} else {
    echo json_encode(["message" => "Error al enviar el mensaje"]);
}
