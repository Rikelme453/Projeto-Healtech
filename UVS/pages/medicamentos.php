<!--Código fonte do site UVS - Unidade Virtual de Saúde 2023 Versão 5 do HTML WC3-->
<!DOCTYPE html>
<?php
    include "../PHP/logado.php";
?>
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
    <link rel="stylesheet" href="../CSS/style.css">
    <title>UVS|Medicamentos</title>

     <!--CSS estilo e menu-->

     <link href="./CSS/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/menu.css">

     <!-- JavaScript-->
     <script src="../JS/janela.js"></script>
      <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
          <li><a href="medicos.php">Médicos</a></li>
          <li><a href="medicamentos.php">Medicamentos</a></li>
          <li><a href="noticias.php">Campanhas e públicações</li>
           
          <li>



          <a href="#">Conta</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>

            <ul class="htmlCss-sub-menu sub-menu">

              <li><a href="login.php">Login</a></li>
              <li><a href="cadastro.php">Cadastro</a></li>
              <li><button class="butao" onclick="user()"><a>Usuário</a></button></li>
          </li>
        </ul>
      </div>
      <div class="perfil">
                    <!-- Informações referentes ao login do usuário associado aos dados do banco--> 
                                 
                    <a class="image-perfil" href="user_admin.php"> 
                    <img class="img_per" src=<?php echo $caminho;?> name="perfiluser" style="width: 60px; height: 60px">
                    </a>
                    <script src="../JS/perfil.js"></script>
                    <p class="text_user"><?php echo nl2br("Olá, " . $nome);
                     ?></p><a class="sair-link" href="../pages/sair.php"> <i class="fa-solid fa-right-from-bracket" style="color: white;"></i></a>
            </div>
  </nav>

  <!--Menu para celular-->
  <div class="menu-mobile">

       <ul>
          <li><a class="nav-item" href="../index.php"><i class="fa-solid fa-house" style="color: #dedede;"></i> Home</a></li>
          <hr class="mobile-barra">

          <li><a class="nav-item" href="medicos.php"><i class="fa-solid fa-user-doctor"  style="color: #dedede;"></i> Médicos</a></li>
          <hr class="mobile-barra">

          <li><a class="nav-item" href="noticias.php"><i class="fa-solid fa-newspaper" style="color: #dedede;"></i> Campanhas e públicações</li>
          
          <hr class="mobile-barra">



            <ul>
            <li><a class="user-mobile" href="#"><i class="fa-solid fa-file-user" style="color: #dedede;"></i> Conta</a></li>
              <hr class="mobile-barra">
              <li><a class="user-mobile" href="conta.php"> <i class="fa-solid fa-user"></i> Perfil</a></li>
              <li><a class="user-mobile" href="login.php"><i class="fa-solid fa-right-to-bracket" style="color: #dedede;"></i> Login</a></li>
              <li><a class="user-mobile" href="cadastro.php"><i class="fa-solid fa-user-pen" style="color: #dedede;"></i> Cadastrar</a></li>
          </li>
        </ul>
       </ul>
      </div>


  </div>

    <br><br>
    
    <main>
       <div class="banner-remedios">
           <img src="../IMAGENS/remedios-planta.svg" alt="medicamentos aqui" class="index1">
       </div>
       <hr>

       <div class="titulo-1">
       <h1><b>MEDICAMENTOS DISPONÍVEIS <br> NO SISTEMA</b></h1>
       </div>
        
       <form class="pesquisa">
         <input type="search" id="texto-btn" placeholder="Pesquisar remédios">
         <img src="../IMAGENS/lupa1.png" class="btn-lupa">

         <datalist id="historico">
           <option value="DI">Dipirona</option>
           <option value="IB">Ibuprofeno</option>
           <option value="HI">Hidroclotiazida</option>
        
           
           
         </datalist>
       </form>
       <br>
       
  
       <br>

       
          <section class="remedios">
               <div class="medicamentos">
                <?php  
                  include_once('../banco/dbconnect.php');

                  $sql = 'SELECT * FROM tbmedicamentos ORDER BY arquivo';
                  

                  if($res = mysqli_query($conexao,$sql)){
                     $nomeMed = array();
                     $quantMed = array();
                     $imgMed = array();
                     $a = 0;
                     $quant = mysqli_num_rows($res);

                    while($valor = mysqli_fetch_assoc($res)){
                      
                      $nomeMed[$a] = $valor["nome"];
                      $quantMed[$a]= $valor["quant"];
                      $imgMed[$a]= $valor["caminho"];
                      
                ?>
                 <div class="remedio-c">
                  <img class="caixa-remedio" src= <?php echo $imgMed[$a]; ?> >
                  <div class="descricao-remedio">
                    <?php  echo $nomeMed[$a]; ?>
                  </div>
                  <div class="botao-remedio">
                  <button class="botao-remedio" onclick="abrirDescricao('vis-descricao-<?php echo $valor['ID']?>')">Mais Detalhes</button>
                  </div>
              

                    <div id="vis-descricao-<?php echo $valor['ID'];?>" class="janela-remedio">
                          <div class="conteudo-janela">

                            <div class="remedio-descricao-imagem">
                              <img height="100px" src=<?php echo $imgMed[$a]; ?>>
                            </div>

                            <div class="remedio-dados">
                              <p>Nome do medicamento: <?php  echo $nomeMed[$a]; ?> </p>
                              <p>Fabricante: </p>
                              <p>Quantidade disponivel: <?php echo $quantMed[$a]; ?></p>
                            </div>
                         
                            <div class="botao-reservar">
                              <button class="botao-reservar" href="medicamentos.php"  onclick="reservarDescricao('vis-descricao-<?php echo $valor['ID']?>')">Voltar</button>
                            </div>
                      </div>
                     </div>
                  </div>
                  </div>
            
                  <?php  $a++; } }   ?>    
       </section>
    </main>

     <!--Rodapé do site-->

     <footer>

<div class="rodape-conteudo">
  <div class="rodape-contatos">

      <h1>UVS.COM</h1>
     <p>UVS+, o portal de acesso rápido e fácil! <br> Informações relacionadas à unidade<br> basica de sua localidade</p>
       
        <div class="rodape-redes">
          <a href="#" class="rodape-links" id="instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" class="rodape-links" id="facebook"><i class="fa-brands fa-square-facebook"></i></a>
          <a href="#" class="rodape-links" id="zap"><i class="fa-brands fa-whatsapp"></i></a>

        </div>
    </div>

    <div  class="rodape-lista">

      <ul>
        <h3>Saiba mais sobre o projeto</h3>

        <li class="lista"><a class="lista-link" href="../UVS/pages/quem_somos.php">Quem somos?</a></li>
        <li class="lista"><a class="lista-link" href="">Política da Empresa</a></li>
      </ul>
    </div>
 </div>
 
 <div class="rodape-copyright">
      &copy; 2023 Healtech direitos reservados
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

<script>
       function user(){
        var receber = prompt('Digite a senha de Usuário ADM para acessar a página!!'); 
        if( receber == "ADM16210023£5&*3#s"){
          
          location.href ='../admin_pages/administrador.php';

        }else{
           alert("Senha incorreta.Acesso Restrito!!")
        }
       }
      
    </script>
</body>
</html>