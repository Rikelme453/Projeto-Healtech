<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./CSS/style.css" rel="stylesheet">
    <title>UVS</title>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/menu.css">
    
</head>
<body>

<nav class="menu3">
    <div class="navbar">
      <i class='bx bx-menu'></i>
       <div class="logo" ><img class="img" src="./IMAGENS/site_logo.png" ></img></div>
        <p id="text">Unidade Virtual de Saúde<p>
       <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">UVS</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="#">HOME</a></li>
          <li><a href="#">MEDICAMENTOS</a></li>
          <li><a href="#">MÉDICOS</li>
          <li><a href="#">CAMPANHAS E PÚBLICAÇÕES</li>
           
          <li>
            <a href="#">CONTA</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="pages/conta.php">CONTA</a></li>
              <li><a href="pages/login.php">LOGIN</a></li>
              <li><a href="pages/cadastro.php">CADASTRO</a></li>
          </li>
        </ul>
      </div>
      <div class="search-box">
      </div>
    </div>
  </nav>
  

  <br><br><br><br><br>

  <main class="conteudo-principal">
    <div class="banner">
      <img class="index1" src="IMAGENS/Banner_index.png" alt="">
    </div>

    <?php 
    if(isset($_POST['mandar'])){
     $arquivo = $_FILES['pegar'];
     $arquivoNovo = explode(".",$arquivo['name']);
     if($arquivoNovo[sizeof($arquivoNovo)-1]!='jpg'){
         echo('Não é possivel enviar esse tipo de arquivo');
     }else{
        echo 'Vamos proseguir';
        move_uploaded_file($arquivo['tmp_name'],'uploads/'.$arquivo['name']);
     }
    }
?>

<form action="" method="POST" enctype="multipart/form-data"> 
   <label for="conteudo">Enviar imagem:</label>
   <input type="file" name="pegar" accept="image/*">    
   <button type="submit" name="mandar">Enviar imagem</button>
</form>

  </main>
</body>
</html>