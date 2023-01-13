<?php
if($_SERVER["REQUEST_METHOD"]!= "POST") {
	header("Location: index.html");
}


$nombre = $_POST["nombre"];
$fechae = $_POST["fecha_entrada"];
$fechas = $_POST["fecha_salida"];
$email = $_POST["email"];
$comentario = $_POST["comentario"];

if( empty(trim($nombre)))$nombre = "anonimo";

$body = <<<HTML
 <h1> Contacto desde el sitio web de Mar del plata </h1>
 <p> $nombre / $email </p>
 <h2> Mensaje</h2>
 $comentario
HTML;
$headers =  "MIME-Version: 1.0 /r/n";
$headers.=  "Content-type: text/html; charset=utf-8 \r\n";
$hearders.="From: $nombre <$email> \r\n";
$headers.= "Bcc: montani@corber.com.ar \r\n";

//remitente

//asunto

//cuerpo
var_dump($nombre);
var_dump($fechae);
var_dump($fechas);
var_dump($email);
var_dump($comentario);

//enviar mail 
 $rta = mail("marve1.mdq@gmail.com", "departamento mar del plata", $body, $headers);

 var_dump($rta);
header("Location: gracias.html");






