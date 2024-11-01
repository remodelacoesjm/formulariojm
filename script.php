<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$contacto = $_POST["contacto"];
$mensagem = $_POST["mensagem"];
$data = date("d-m-Y");
$hora = date("H:i");
$ip = $_SERVER['REMOTE_ADDR'];

$dados = "\n"."Data: $data - $hora - IP: $ip"."\n"."  Nome: $nome"."\n"."  E-mail: $email"."\n"."  Contacto: $contacto"."\n"."  Mensagem: $mensagem"."\n";

//print "$dados";

$file = fopen("dados.txt", 'a');
fwrite($file, "$dados");
fclose($file);



//echo '<script>';
//echo 'alert("Dados enviados com sucesso")';
//echo '</script>';
echo '<script>window.location.replace("index.html")</script>';

//echo '<script type="text/javascript">';
//print ("Dados enviados com sucesso");
//header("Location: index.html");

?>
