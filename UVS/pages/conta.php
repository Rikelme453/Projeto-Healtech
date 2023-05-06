<?php 
     /* include_once('../banco/dbconnect.php');

    if(isset($_POST['mandar'])){
     $arquivo = $_FILES['pegar'];
     $arquivoNovo = explode(".",$arquivo['name']);
     
     move_uploaded_file($arquivo['tmp_name'],'../upload/'.$arquivo['name']);
     $img = $arquivo['name'];
     
     $sql= "INSERT INTO tbupload(id, arquivo, data_upload) values(null, '$img' ,NOW() )";
      
     
     }else{
      
     }
    
 */ ?>

  <?php 
     include_once('../banco/dbconnect.php');

     $sql = "SELECT * FROM tbubs";
     $conn = $conexao ->query($sql) or die($conexao -> error);
    
  ?>
<!-- Teste -->
<!DOCTYPE html>
<html>
  <html lang="pt-br" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!-- <title> Responsive Drop Down Navigation Menu | CodingLab </title>-->
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="stylesheet" href="../CSS/conta.css">
    <!-- Boxicons CDN Link -->
    <link rel='icon' type='image/jpg' href="../imagens/iconsite1.jpg">
    <title>UVS | Conta</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    
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
  </form>
  
  <br><br><br><br><br>


  <div class="email">
    <h1 class="txt"><?php include "../PHP/logado.php";
      echo "<br>" . $logado; if($user != ""){
      echo "<br>" . "Usúario: " .  $user;
      }else{
          
      }?></h1>
    <h3 class="txt2">Você está logado!</h3>
</div>

   <div class="box-search">
     
      <input type="search" placeholder="Pesquisar" class="form-control"  id="pesquisar">

      <button class= "btn btn-primary" onclick="Apresentar()">
       <svg btn btn-primary xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
       <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
       </svg>
      </button>

   </div>

<br><br>

   
<br><br>

   <form class="img" action="conta.php" method="POST" enctype="multipart/form-data"> 
   <label for= "pegar" class="form-control" id="select">Selecionar Arquivo</label>
   <input type="file" id="pegar" name="pegar" accept="image/*" placeholder="Selecionar">    
   <input  type="submit" class="btn btn-primary" name="mandar" value="Enviar imagem" >

</form>




 
  </body>
</html>
