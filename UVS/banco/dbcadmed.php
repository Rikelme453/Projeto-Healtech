<?php
	include_once "dbconnect.php";
$nomep_tmp = $_POST['nome'];
$formacao_tmp = $_POST['formacao'];
$dias_tmp = $_POST['dias'];
$horarios_tmp = $_POST['horario'];
$img1 = "https://image.shutterstock.com/image-vector/check-list-button-icon-vector-260nw-1259364499.jpg";
$img2 = "https://compras.wiki.ufsc.br/images/5/56/Erro.png";


if($dias_tmp != ""){
$dias = $_POST['dias'];

	if($nomep_tmp && $formacao_tmp && $horarios_tmp != ""){
$nomep = $_POST['nome'];
$formacao = $_POST['formacao'];
$horarios = $_POST['horario'];

$sql= "INSERT INTO tbmedicos(profissional, formacao, dias, horarios) values('$nomep','$formacao', '$dias', '$horarios')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);
}
}
header('Location:../admin_pages/administrador.php');
?>


