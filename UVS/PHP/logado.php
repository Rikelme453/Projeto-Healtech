<?php
session_start();
include_once('../banco/dbconnect.php');

if(isset($_SESSION['email']) && isset($_SESSION['senha'])){
    
  $logado = $_SESSION['email'];
  $senha = $_SESSION['senha'];

  $sql = "SELECT * FROM tbubs WHERE email = '$logado' and senha = '$senha' ";
  $result = $conexao->query($sql);

  while($d = mysqli_fetch_array($result)){
         
    $logado = $d['email'];
    $senha = $d['senha'];
    $nome = $d['nome'];
    $data =  $d['data'];
    $caminho = $d['caminho'];
}
  
    if($logado == "luan924@gmail.com"){
      $user = "ADM";
      if($logado == "rikelme@gmail.com"){
        $user = "ADM";
      }
    }else{
      $user = null;
    }
  }
?>