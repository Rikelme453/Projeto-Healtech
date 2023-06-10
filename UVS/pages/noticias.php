<!--Código fonte do site UVS - Unidade Virtual de Saúde 2023 Versão 5 do HTML WC3-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UVS|Noticias</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../CSS/all-pages.css">
    <link rel="stylesheet" href="../CSS/style.css">
     
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Menu formatação-->
    <link rel="stylesheet" href="../CSS/menu.css">
     <!--Icone favicon-->
     <link rel="shortcut icon" href="../IMAGENS/UVS-.ico" type="image/x-icon">
     <!-- Arquivos CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<!-- Arquivos JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

  
   
    

</head>
<body class="noticias-body">
<nav class="menu3">
<div class="navbar">
     <button class="botao-responsivo" onclick= "menuShow()"><img src="../IMAGENS/menu_white_36dp.svg" alt="botao responsivo"></button>
     <script src="../JS/menu.js"></script>

    
      <img class="logo-marca" src="../IMAGENS/UVS +.svg" ></img>
        <p id="texto-faxada">Unidade Virtual de Sáude<p>
       <div class="nav-links"> 
       <ul class="links">
       <li><a href="../index.php">Home</a></li>
          <li><a href="medicos.php">Médicos</a></li>
          <li><a href="medicamentos.php">Medicamentos</a></li>
          <li><a href="noticias.php">Campanhas e públicações</li>
           
          <li>



          <a href="#">Conta</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>

            <ul class="htmlCss-sub-menu sub-menu">

              <li><a href="login.php">Login</a></li>
              <li><a href="cadastro.php">Cadastro</a></li>
              <li><a href="../admin_pages/administrador.php">Usuário</a></li>
          </li>
        </ul>
      </div>
      <div class="perfil-adm">
             
             <div class="image-perfil">
 
                     <form action="">
                                     
                         <a class="image-perfil" href="#"> 
                             
                         <img src=<?php ?> name="perfiluser" style="width: 60px; height: 60px">
                         </a>
                     <script src="../JS/perfil.js"></script>
                    </form>
       </div>
     </div>
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
  
  <hr class="divisao-elementos">
  
  <div class="uvs-noticias-abertura">

            </div>
<br>
             <!--Slides-->
             <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../IMAGENS/campanha1.svg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../IMAGENS/campanha2.svg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../IMAGENS/campanha3.svg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      <main class="mainNot">
        <div class="texto-principais-noticias">
            <h2>Confira as principais notícias</h2>
            <div class="barra-horizontal"></div>
               
        </div>
      
        <section class="noticias-1">
          <div class="center">

            <div class="noticias-wraper">

              <div class="noticia-chave">
                  
                  <div class="noticia-preview">
                    <div class="categoria">
                      SAÚDE
                      <span class="borda-catego"></span>
                    </div>

                    <div class="legenda-noticia">
                    <a href="https://www12.senado.leg.br/radio/1/conexao-senado/2023/06/05/dedo-de-prosa-junho-vermelho">Junho Vermelho: mês de conscientização para a doação de sangue</a>
                      </div>
                   <div> 
                    </div>  
                  </div>        
              </div>

              <div class="barra-vertical"></div>

                   <!--Outras notícias-->

              <div class="outras-noticias">
              
              <div class="outra-noticia-1">

              <div class="noticia-preview-2">
             <a class="noticia-links" href="https://www.gov.br/saude/pt-br/assuntos/noticias/2023/junho/conselho-global-sobre-desigualdades-hiv-e-pandemias-e-lancado-no-brasil">Conselho Global sobre<br> Desigualdades, HIV e pandemias<br> é lançado no Brasil
              </a>
              </div>

              </div>

              <div class="outra-noticia-2">

              <div class="noticia-preview-2">
                <a class="noticia-links" href="https://www.gov.br/saude/pt-br/assuntos/noticias/2023/junho/ministerio-da-saude-incorpora-medicamento-inovador-para-malaria-ao-sus">Ministério da Saúde incorpora<br> medicamento inovador para<br> malária ao SUS
                </a>
              </div>
              </div>

              <div class="outra-noticia-3">
              <div class="noticia-preview-2">
              <a class="noticia-links" href="https://www.gov.br/saude/pt-br/assuntos/noticias/2023/junho/em-evento-no-chile-brasil-compartilha-experiencias-da-atencao-primaria-do-sus-como-referencia-internacional">Em evento no Chile,<br> Brasil compartilha experiências da atenção primária do SUS como referência internacional
                </a>
              </div>
              </div>

              <div class="outra-noticia-4">
              <div class="noticia-preview-2">
              <a class="noticia-links" href="https://www.gov.br/saude/pt-br/assuntos/noticias/2023/junho/hospital-federal-do-andarai-no-rio-de-janeiro-inaugura-novo-setor-de-oncologia">Hospital Federal do Andaraí, <br>no Rio de Janeiro, inaugura novo<br> setor de oncologia</a>
                </div>
              </div>
            </div>
            </div>
            
            <!--Subnotícias-->
            <div class="subnoticias">

              <div class="sub-noticias-1">
                <h3>Outras notícas</h3>
                <div class="sub-legendas">
                  Assunto
            </div>
              </div>

              <div class="sub-noticias-1">
                <h3>Outras notícas</h3>
                <div class="sub-legendas">
                  Assunto
            </div>
                
              </div>

              <div class="sub-noticias-1">
                <h3>Outras notícas</h3>
                <div class="sub-legendas">
                  Assunto
            </div>
                
              </div>
            </div>
            
          </div>
        </section>

        <section class="previsao-tempo">
          <div class="titul-tempo">
            <h1 class="titul-tempo">PREVISÃO DO TEMPO</h1>
          </div>

              <div class="barra-horizontal-previsao-tempo"></div>

            <div class="tempo-1">
              <div class="caixa-tempo">
              <!--Widget previsão do tempo-->
              <div id="ww_df8c506e10713" v='1.3' loc='auto' a='{"t":"horizontal","lang":"pt","sl_lpl":1,"ids":[],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'><a href="https://weatherwidget.org/pt/" id="ww_df8c506e10713_u" target="_blank">Previsão do tempo widget</a></div><script async src="https://app1.weatherwidget.org/js/?id=ww_df8c506e10713"></script>
              
              </div>
              <div class="barra-vertical-msg"></div>

              <!--<div class="confira-tempo">
          
                </div>-->

                <div class="barra-mensagem">
                
                <img class="previsao-sol" src="https://cdn-icons-png.flaticon.com/512/146/146199.png" alt="">
                <p class="texto-previsao">Confira a previsão do tempo em sua região<br>Beba água</p>
                </div>
                <br>
                <div class="botao-confirma">
            <a href="https://www.google.com/search?q=tempo+agora&rlz=1C1FCXM_pt-PTBR1008BR1008&sxsrf=APwXEdc5PWZ8dXJ98pmCWC-VLjvXLPNqhQ%3A1682295949467&ei=jcxFZJGHHLfW1sQP4eiiuAM&ved=0ahUKEwjRgebjoMH-AhU3q5UCHWG0CDcQ4dUDCA8&uact=5&oq=tempo+agora&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIMCCMQJxCdAhBGEIACMggIABCABBCSAzIICAAQgAQQkgMyBQgAEIAEMgsIABCKBRCxAxCDATIFCAAQgAQyBQgAEIAEMggIABCKBRCxAzILCAAQigUQsQMQgwEyBQgAEIAEOgoIABBHENYEELADOg0IABBHENYEEMkDELADOgsIABCKBRCSAxCwA0oECEEYAFD8BVjSDGCPE2gCcAF4AIAB0wKIAdIGkgEHMC4zLjAuMZgBAKABAcgBCsABAQ&sclient=gws-wiz-serp" class="myButton">CONFIRA</a>
            </div>
            </div>
           
        </section>

        
        <section class="chat-1">
          <div class="chat-comunitario">

            <div class="chat-titulo">
              <h1>CHAT COMUNITÁRIO</h1>
             
            </div>

            <div class="chat-all">
              <div class="barra-comentario">
                <h3>Comentários</h3>
                <!--Plugin de comentários do facebook-->

                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v16.0" 
                nonce="EobdiE7I"></script>

              <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" 
              data-width="600" data-numposts="5"></div>

          </div>
        </section>

        
      </main>

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

              <li class="lista"><a class="lista-link" href="../pages/quem_somos.php">Quem somos?</a></li>
              <li class="lista"><a class="lista-link" href="">Política da Empresa</a></li>
            </ul>
          </div>
       </div>
       
       <div class="rodape-copyright">
            &copy; 2023 Healtech direitos reservados
          </div>
  </footer>
   
  <style>
      #btn-voltar-topo {
        position: fixed;
        bottom: 20px;
        right: 20px;
        cursor: pointer;
        user-select: none;
        z-index: 100;
        
      }
      </style>
      <img id="btn-voltar-topo" src="../IMAGENS/up.svg" width="5%" height="5%" draggable="false">
    
    <script>
      document.getElementById("btn-voltar-topo").addEventListener("click", function(){
        window.scrollTo({top: 0, behavior: "smooth"});
      });
    </script>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>
</html>