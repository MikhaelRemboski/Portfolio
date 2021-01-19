<?php
if(isset($_POST["text"]) && isset($_POST["email"]) && isset($_POST["name"]) ){
$to = "mikhael@c0880319.ferozo.com";
$subject = "Mensaje Enviado";
$contenido .= "Nombre: ".$_POST["name"]."\n";
$contenido .= "Email: ".$_POST["email"]."\n\n";
$contenido .= "Mensaje: ".$_POST["text"]."\n\n";
$header = "From: mikhael@c0880319.ferozo.com\nReply-To:".$_POST["email"]."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido ,$header)){
echo "Mail Enviado.";
}else{
    echo "Mail rechazado", "Contenido: ", $contenido,"Header: ", $header,"To: ", $to,"subject: ", $subject;
}
}
?>