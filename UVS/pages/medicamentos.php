<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/all-pages.css">
    <title>Página de medicamentos</title>

    <!--Menu formatação-->
    <link rel="stylesheet" href="../CSS/menu.css">

     <!-- Bootstrap -->
     <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

<nav class="menu3">

    <div class="navbar">

      <i class='bx bx-menu'></i>

      <img class="logo-marca" src="../IMAGENS/uvs-logo.png" ></img>

        <p id="texto-faxada">Mais Vida! Mais Saúde!<p>
       <div class="nav-links"> 
       <ul class="links">
          <li><a href="../index.php">HOME</a></li>
           
          <li>
            <a href="#">CONTA</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="conta.php">CONTA</a></li>
              <li><a href="login.php">LOGIN</a></li>
              <li><a href="cadastro.php">CADASTRO</a></li>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <br><br>
    
    <main>
       <div class="banner-remedios">
           <img src="../IMAGENS/medicament.png" alt="medicamentos aqui" class="index1">
       </div>
       <hr>

       <div class="titulo-1">
       <h1><b>MEDICAMENTOS DISPONÍVEIS <br> NO SISTEMA</b></h1>
       </div>

       <br>

       <form class="pesquisa">
         <input type="search" id="text" placeholder="Pesquisar remédios">
         <img src="../IMAGENS/lupa1.png" class="btn-lupa">

         <datalist id="historico">
           <option value="Dipiriona"></option>
           <option value="Dipiriona"></option>
           <option value="Dipiriona"></option>
           <option value="Dipiriona"></option>
           <option value="Dipiriona"></option>
           <option value="Dipiriona"></option>
           <option value="Dipiriona"></option>
           
           
         </datalist>
       </form>
    </main>

   
</body>
</html>