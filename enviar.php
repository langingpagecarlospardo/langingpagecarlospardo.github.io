<?php
$para = 'carlospardo.sadoc@gmail.com';
$asunto = 'Busqueda Freelance';

$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$topic = $_POST['topic'];
$message = $_POST['message'];

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Telefono de contacto: " . $phone . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Tema de contratación: " . $topic . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$header="Enviado desde la pagina de Carlos Pardo";

mail($para, $asunto, utf8_decode($message), $header);
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>
