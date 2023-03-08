<?php
$host = "localhost";
$user = "root";
$psw = "";
$dbname = "dbubs";

$conexao = mysqli_connect($host, $user, $psw, $dbname);

if(!$conexao){
	$conn = "nao";
	$erro = die("Falha".mysqli_connect_error());
}else{
	$conn = "sim";
	$msg = "Logado com sucesso!";
}

?>