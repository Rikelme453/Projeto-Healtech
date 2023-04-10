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
      $user = "";
    }
}else{
    header('Location: login.php');
}
?>

<?php 
    if(isset($_POST['mandar'])){
     $arquivo = $_FILES['pegar'];
     $arquivoNovo = explode(".",$arquivo['name']);
     if($arquivoNovo[sizeof($arquivoNovo)-1]!='jpg'){
         echo('Não é possivel enviar esse tipo de arquivo');
     }else{
        echo 'Vamos proseguir';
        move_uploaded_file($arquivo['tmp_name'],'upload/'.$arquivo['name']);
     }
    }
  ?>

  <?php 
     include_once('../banco/dbconnect.php');

     $sql = "SELECT * FROM tbubs";
     $conn = $conexao ->query($sql) or die($conexao -> error);
    
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
  
  <br><br><br><br><br>


  <div class="email">
    <h1 class="txt"><?php echo "<br>" . $logado; if($user != ""){
      echo "<br>" . "Usúario: " .  $user;
      }else{
          
      }?></h1>
    <h3 class="txt2">Você está logado!</h3>
</div>
   
<table class="tabela">
        <tr>
          <td>Email do Usuário</td>
          <td>Nome do Usuário</td>
          <td>Data de Nascimento</td>
          <td>id<td>
        </tr>
            <?php while($dado = $conn -> fetch_array()){ ?>
        <tr>
          <td><?php echo $dado["email"]; ?></td>
          <td><?php echo $dado["nome"];  ?></td>
          <td><?php echo $dado["data"];  ?></td>
          <td><?php echo $dado["id"];  ?></td>
          <td> 
            <a class="btn btn-primary" type="submit" href="edit.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brush-fill" viewBox="0 0 16 16">
  <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04z"/>
</svg></a>
            <a class="btn btn-danger" type="submit" href="edit.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></a>
          <td>
        </tr>
        <?php }  ?>
</table>




<form action="#" method="POST" enctype="multipart/form-data"> 
   
   <input type="file" name="pegar" accept="image/*">    
   <input type="submit" name="mandar" value="Enviar imagem">

</form>
  </body>
</html>