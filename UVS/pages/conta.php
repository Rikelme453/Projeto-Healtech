<?php
session_start();
print_r($_SESSION);

if(isset($_SESSION['email']) && isset($_SESSION['senha'])){
    $logado = $_SESSION['email'];
    if($logado == "luan924@gmail.com"){
      $user = "ADM";
      if($logado == "rikelme@gmail.com"){
        $user = "ADM";
      }
    }else{
      $user = "";
    }
}else{
    header('Location: login.php');
}


?>

<!-- Teste -->
<!DOCTYPE html>
<html>
  <html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!-- <title> Responsive Drop Down Navigation Menu | CodingLab </title>-->
    <link rel="stylesheet" href="../CSS/fundo.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="stylesheet" href="../CSS/adm.css">
    <!-- Boxicons CDN Link -->
    <link rel='icon' type='image/jpg' href="../imagens/iconsite1.jpg">
    <title>UVS | Conta</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">



    
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">


    
   </head>
  <body backgound="imagens/fundo.jpg">

  <nav class="menu3">
    <div class="navbar" style="float: left;">
    <form action="../index.php">
    <input class="voltar" type="submit" name="voltar" value="Voltar">
</form>
    <p></p>
    <form action="sair.php">
      <input class="sair" type="submit" name="sair" value="Sair">
      <form>
    </div>
  </nav>

  <br><br><br><br><br>


  <div class="email">
    <h1 class="txt"><?php echo "<br>" . $logado; if($user != ""){
      echo "<br>" . "Usúario: " .  $user;
      }else{

      }?></h1>
    <h3 class="txt2">Você está logado!</h3>
</div>

<div>
<form method="POST" enctype="multipart/form-data"> 
   <label for="conteudo">Enviar imagem:</label>
   <input type="file" name="pegar" accept="image/*">    
     <button type="submit">Enviar imagem</button>
</form>
</div>

  </body>
</html>