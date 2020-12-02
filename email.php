<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$msg = $_POST["mensagem"];

$template = "<p><b>Nome:</b> $nome</p>\r\n";
$template .= "<p><b>E-mail:</b> $email</p>\r\n";
$template .= "<p><b>Mensagem:</b></p>\r\n";
$template .= "<p>$msg</p>\r\n";

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: $email\r\n"; // remetente
$headers .= "Return-Path: $email\r\n"; // return-path
$envio = mail("thayana.cs@gmail.com", "Contato emcanto", $template, $headers);
 
if($envio){
    header('Location: thanks.php');
    exit;
} else {
    echo "A mensagem não pode ser enviada";
}
?>