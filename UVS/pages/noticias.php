<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UVS| Noticias</title>
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
   
    

</head>
<body class="noticias-body">

<header>
<nav class="menu3">

    <div class="navbar">

      <i class='bx bx-menu'></i>

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
    </div>
  </nav>
</header>

  
  <br><br>
  
  <hr class="divisao-elementos">

  <div class="uvs-noticias-abertura">
                <h2 class="uvs-noticia">UVS NOTÍCIAS| </h2>
                <img class="logo-noticias" src="../IMAGENS/uvs-noticias alt="uvs notícias logomarca">

               
            </div>

             <!--Slides-->

      <div class="slideshow">
        <div class="slides">
            <input class="caixas-display" type="radio" name="slide" id="slide1" checked>
            <input class="caixas-display" type="radio" name="slide" id="slide2">
            <input class="caixas-display" type="radio" name="slide" id="slide3">

            <div class="slide s1">
                <img src="../IMAGENS/campanha-1.png" alt="">
            </div>

            <div class="slide">
                <img src="../IMAGENS/campanha-2.png" alt="">
            </div>

            <div class="slide">
                <img src="../IMAGENS/campanha-3.png" alt="">
            </div>

            <div class="barra-navegacao">
                <label class="bar" for="slide1"></label>
                <label class="bar" for="slide2"></label>
                <label class="bar" for="slide3"></label>
                
            </div>

        </div>

    </div>
    <br><br>
      <!--Notícias-->

      <main>
        <div class="texto-principais-noticias">
            <h2>Confira as principais notícias</h2>
            <div class="barra-horizontal"></div>
               
        </div>
      
        <section class="noticias-1">
          <div class="center">

            <div class="noticias-wraper">

              <div class="noticia-chave">
              http://servicodados.ibge.gov.br/api/v3/noticias/


                  <div class="noticia-preview">
                    <div class="categoria">
                      SAÚDE
                      <span class="borda-catego"></span>
                    </div>

                    <div class="legenda-noticia">
                        Veja algumas dicas de como se cuidar bem
                      </div>
                   <div> 
                    </div>  
                  </div>        
              </div>

              <div class="barra-vertical"></div>
                   <!--Outras notícias-->

              <div class="outras-noticias">
              
              <div class="outra-noticia-1">
              <h3>Uma Noticia</h3>
            
              </div>

              <div class="outra-noticia-1">
              <h3>Uma noticias</h3>
              </div>

              <div class="outra-noticia-1">
              <h3>Uma notícia</h3>
              </div>

              <div class="outra-noticia-1">
              <h3>Uma notícia</h3>
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

        <section class="enquetes-1">
          <h1>ENQUETE</h1>
          <ce:enquete id="12930010" question_size="5" option_size="6" img_option_size="5" font="Roboto, sans-serif" primary_color="#ff9f1c" secondary_color="#ffffff" height="804" ></ce:enquete>
<script async type="text/javascript" src="https://www.criarenquete.com.br/user.js"></script>

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

              <li class="lista"><a class="lista-link" href="../UVS/pages/quem_somos.php">Quem somos?</a></li>
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