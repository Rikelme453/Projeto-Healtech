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

    <title>Quem somos</title>
</head>
<body>

    
<nav class="menu3">
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <img class="img" src="../IMAGENS/uvs-logo.png" ></img>
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