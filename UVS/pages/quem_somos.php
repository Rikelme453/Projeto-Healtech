<!--Código fonte do site UVS - Unidade Virtual de Saúde 2023 Versão 5 do HTML WC3-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="../CSS/style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- Menu formatação-->
     <link rel="stylesheet" href="../CSS/menu.css">

     <link rel="stylesheet" href="../CSS/style.css">
      <!--Icone favicon-->
    <link rel="shortcut icon" href="../IMAGENS/UVS-.ico" type="image/x-icon">
  

    <title>Quem somos</title>
</head>
<body>

    
<nav class="menu3">
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <img class="img" src="../IMAGENS/UVS +.svg" ></img>
        <p id="text">Mais Vida! Mais Saúde!<p>
       <div class="nav-links"> 
       <ul class="links">
          <li><a href="../index.php">HOME</a></li>       
          <li>
            <a href="#">CONTA</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="../pages/conta.php">CONTA</a></li>
              <li><a href="../pages/login.php">LOGIN</a></li>
              <li><a href="../pages/cadastro.php">CADASTRO</a></li>
          </li>
        </ul>
      </div>
    </div>
  </nav>


   <!--Menu para celular-->
   <div class="menu-mobile">

<ul>
   <li><a class="nav-item" href="../index.php"><i class="fa-solid fa-house" style="color: #dedede;"></i> Home</a></li>
   <hr class="mobile-barra">
     <ul>
     <li><a class="user-mobile" href="#"><i class="fa-solid fa-file-user" style="color: #dedede;"></i> Conta</a></li>
       <hr class="mobile-barra">
       <li><a class="user-mobile" href="conta.php"> <i class="fa-solid fa-user"></i> Perfil</a></li>
       <li><a class="user-mobile" href="login.php"><i class="fa-solid fa-right-to-bracket" style="color: #dedede;"></i> Login</a></li>
       <li><a class="user-mobile" href="cadastro.php"><i class="fa-solid fa-user-pen" style="color: #dedede;"></i> Cadastrar</a></li>
   </li>
 </ul>
</ul>>
</div>




    <div class="texto-sobre">
      <h1 class="quem-somos">Quem somos?</h1>
      <br>

      <h3 class="sob-projeto">Sobre o projeto</h3>
      <br>

      <p class="textos-apresentativos">O site Unidade Virtaul de Saúde (UVS) é um projeto que tem a finalidade de ajudar a população no ramo da saúde.<br>
    Este projeto está sendo desenvolvido pelos alunos do 3ºC do Curso Técnico de Informática da EEEP Paulo Barbosa<br>
  Leite da cidade de Cariraçu, Ceará. </p>
    <img src="../IMAGENS/eeep.png" class="foto-banner">

  <br>

  <h3 class="sob-projeto">Professor Orientador</h3>
  <br>
  <p class="textos-apresentativos">Francisco Sérgio Lavor Lucena</p>

  <br>

  <h3 class="sob-projeto">Equipe do projeto: </h3>
  <br>
  <p class="textos-apresentativos">Aurélio Pereira da Silva</p>
  <p class="textos-apresentativos">Cicera Fernanda Laurindo do Nascimento</p>
  <p class="textos-apresentativos">Cicero Rikelme Lopes Batista</p>
  <p class="textos-apresentativos">Davi Álves Ferreira</p>
  <p class="textos-apresentativos">Ênio Vidal Duarte</p>
  <p class="textos-apresentativos">Luan Silva de Melo</p>
  <p class="textos-apresentativos">Rayane Machado do Nascimento</p>
  <p class="textos-apresentativos">Yago Nascimento Dantas</p>
  

  <img src="../IMAGENS/healtec_logo.png" class="foto-banner">
  <p><i>Healtech é um nome ficticio de uma empresa criada para esse projeto.</i></p>
  <h3>COPYRIGHT &copy; 2023 Healtech, 3ºC Informática - Direitos Reservados</h3>
  
    </div>

  
  <style>
      #btn-voltar-topo {
        position: fixed;
        bottom: 20px;
        right: 20px;
        cursor: pointer;
        user-select: none;
        
      }
      </style>
      <img id="btn-voltar-topo" src="../IMAGENS/up.svg" width="5%" height="5%" draggable="false">
    
    <script>
      document.getElementById("btn-voltar-topo").addEventListener("click", function(){
        window.scrollTo({top: 0, behavior: "smooth"});
      });
    </script>
</body>
</html>