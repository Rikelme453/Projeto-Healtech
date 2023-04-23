<?php
	include_once "dbconnect.php";
$nome_tmp = $_POST['nome'];
$data_tmp = $_POST['data'];
$email_tmp = $_POST['email'];
$senha_tmp = $_POST['senha'];
$img1 = "https://image.shutterstock.com/image-vector/check-list-button-icon-vector-260nw-1259364499.jpg";
$img2 = "https://compras.wiki.ufsc.br/images/5/56/Erro.png";


if($email_tmp != ""){
$email = $_POST['email'];

	if($senha_tmp && $nome_tmp && $data_tmp != ""){
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$data = $_POST['data'];

$sql= "INSERT INTO tbubs(nome, email, senha, data) values('$nome','$email', '$senha', '$data')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);
}
}
header('Location:../pages/conta.php');
?>


