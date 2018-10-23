<?php
session_start();
include_once("conecta.inc.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$nick = $_POST['nick'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


$query = "INSERT INTO faleconosco(nome,email,nick,assunto,mensagem) VALUES ('$nome','$email','$nick','$assunto','$mensagem');";

$result = mysqli_query($conexao,$query);

if($result){
	$_SESSION['msg'] = "<p style='color:green;'>Mensagem Enviada!</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Erro ao enviar</p>";
	header("Location: index.php");
}





?>