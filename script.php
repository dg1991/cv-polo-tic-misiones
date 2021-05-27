<?php 

// Llamando a los campos
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "denismauriciogauron@gmail.com";
$asunto = "Contacto desde nuestra web";
$carta = "De: $nombre" . "\r\n";
$carta .= "Correo: $email" . "\r\n";
$carta .= "Telefono: $tel" . "\r\n";
$carta .= "Mensaje: $mensaje" . "\r\n";
$carta .= "Enviado el " .date('d/m/Y', time());
// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>