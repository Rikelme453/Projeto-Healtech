<?php
session_start();

if(isset($_SESSION['email']) && isset($_SESSION['senha'])){
    $logado = $_SESSION['email'];
    if($logado == "luan924@gmail.com"){
      $user = "ADM";
      if($logado == "rikelme@gmail.com"){
        $user = "ADM";
      }
    }else{
      $user = null;
    }
}else{
    header('Location: login.php');
}
?>