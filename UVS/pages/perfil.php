<!DOCTYPE html>
<?php
  include_once "../banco/dbconnect.php";
  include "../PHP/logado.php";
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UVS| Pefil</title>
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <!-- Menu formatação-->
      <link rel="stylesheet" href="../CSS/menu.css">

      <link rel="stylesheet" href="../CSS/user.css">
       <!--Icone favicon-->
     <link rel="shortcut icon" href="../IMAGENS/UVS-.ico" type="image/x-icon">
</head>
<body>
<nav class="menu3">
<div class="navbar">
     <button class="botao-responsivo" onclick= "menuShow()"><img src="../IMAGENS/menu_white_36dp.svg" alt="botao responsivo"></button>
     <script src="../JS/menu.js"></script>

    
      <img class="img" src="../IMAGENS/UVS +.svg" ></img>
        <p id="texto-faxada">Unidade Virtual de Sáude<p>
       <div class="nav-links"> 
       <ul class="links">
       <li><a href="../z-index/index.php">Home</a></li>
          
            
         
      </div>
      <div class="perfil">
                    <!-- Informações referentes ao login do usuário associado aos dados do banco--> 
                                 
                    <a class="image-perfil"> 
                    <img class="img_per" src=<?php echo $caminho;?> name="perfiluser" style="width: 60px; height: 60px">
                    </a>
                    <script src="../JS/perfil.js"></script>
                    <p class="text_user"><?php echo nl2br("Olá, " . $nome);
                     ?></p>
                     <a class="sair-link" href="../pages/sair.php"> <i id="botao-sair" class="fa-solid fa-right-from-bracket" style="color: white;"></i></a>
            </div>
    </div>
  </nav>

  <!--Menu para celular-->
  <div class="menu-mobile">

       <ul>
          <li><a class="nav-item" href="../z-index/index.php"><i class="fa-solid fa-house" style="color: #dedede;"></i> Home</a></li>
          <hr class="mobile-barra">

          
       </ul>
      </div>


  </div>

    <div class="user-titulo">
    <h1>USERNAME</h1>
    <a href="">EDITAR</a> 
        <a href="sair.php">SAIR</a>
    </div>

    <div class="user-dados">
        
    <a href="perfil.php"><img class="img_perfil" src=<?php echo $caminho;?> name="perfiluser" style="width: 180px; height: 200px"></a>
        <legend class="nome-maior"><p><?php echo nl2br( $nome);
                     ?></p>
                      <a class='btn btn-sm btn-primary' href='../PHP/edit.php?id=$user_data[id]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a>  
                    </legend>
       <hr>
        <p class="letra-dados"><i class="fa-solid fa-cake-candles"></i>Data de Nascimento: <p><?php echo nl2br(  $data); ?></p> </p>
        <p class="letra-dados"><i class="fa-sharp fa-solid fa-envelope"></i>Email: <p><?php echo nl2br(  $logado); ?></p> </p>
        <br><br>
        <hr>
        <h2>Avalie nosso site <i class="fa-solid fa-star" style="color: #e8d245;"></i></h2>
        <br>
        <p>Envie uma mensagem de texto para a nossa equipe de desenvolvedores. 
        <br>Dê sugestões no que possamos melhorar no site</p><br>
        <form action="https://formsubmit.co/cb32f0ee80d23943b7c1355cceb4c21c" method="POST">

        <input type="text" class="caixa-nome" name="name" placeholder="Seu nome"><br><br>
        <input type="email" class="caixa-nome" name="email" placeholder="Seu email"/><br><br>
            <textarea name="message" rows = "15" cols = "30" placeholder="Envie sua mensagem de texto para healtecsuporte@gmail.com"></textarea>
            <br>
            <input type="submit" class="botao-de-enviar" value="ENVIAR">
        </form>

    </div>


</body>
</html>