<?php

$nombre = $_POST["Nome-completo"]
$telefono = $_POST["Telefono"]
$email = $_POST["E-mail"]
$adulti = $_POST["Adulti"]
$checkin = $_POST["Check-in"]
$checkout = $_POST["Check-out"]
$comentario = $_POST["Comment"]

$mensaje = "Questo messaggio è stato inviato da" . $nombre . ",\r\n";
$mensaje .= "Il suo telefono è" . $telefono . ",\r\n";
$mensaje .= "La sua e-mail è" . $email . ",\r\n";
$mensaje .= "Adulti" . $adulti . ",\r\n";
$mensaje .= "Il giorno del Check-in" . $checkin . ",\r\n";
$mensaje .= "Il giorno del Check-out" . $checkout . ",\r\n";
$mensaje .= "Commentario" . $_POST[comentario] . ",\r\n";
$mensaje .= "Inviato il" . date ("d/m/Y" ,time());


$destinatario = "mimosa.agaveblu@gmail.com";
$asunto = "Questa mail é stata inviata dalla pagina web Casa Vacanze Mimosa & Agave Blu";

mail($destinatario, $asunto, utf8_decode($mensaje), $header);

header ("Location: ../pages/formulario/exito.html");

>?