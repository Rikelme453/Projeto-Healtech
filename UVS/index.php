<!--Código fonte do site UVS - Unidade Virtual de Saúde 2023 Versão 5 do HTML WC3-->
<!DOCTYPE html>
<!--Idioma do site-->
<html lang="pt-br">
<head>
  <!--Metatags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!--Título da página-->
    <title>UVS| Página Inicial</title>

    <!--CSS estilo e menu da página INDEX-->

    <link href="./CSS/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/menu.css">

    <!--Fontes do Google-->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
</head>
<body>

  <!--Menu de navegação-->
    
<nav class="menu3">
    <div class="navbar">
     <button class="botao-responsivo" onclick= "menuShow()"><img src="./IMAGENS/menu_white_36dp.svg" alt="botao responsivo"></button>

     
      <img class="img" src="./IMAGENS/UVS +.svg" alt="Logo da uvs" draggable="false" ></img>
      <script src="./JS/menu.js"></script>

       <p id="texto-faxada">Unidade Virtual de Sáude<p> 

       <div class="nav-links"> 
       <ul class="links">
          <li><a href="index.php">Home</a></li>
          <li><a href="./pages/medicos.php">Médicos</a></li>
          <li><a href="./pages/medicamentos.php">Medicamentos</a></li>
          <li><a href="./pages/noticias.php">Campanhas e públicações</li>
         
          <li>
            <a href="#">Conta</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
            <ul class="htmlCss-sub-menu sub-menu">

              <li><a href="pages/login.php">Login</a></li>
              <li><a href="pages/cadastro.php">Cadastro</a></li>
              <li><a href="./admin_pages/administrador.php">Usuário</a></li>

          </li>
        </ul>
      </div>
    </div>

  </nav>



  <!--Menu para celular-->
  <div class="menu-mobile">

       <ul>
          <li><a class="nav-item" href="index.php"><i class="fa-solid fa-house" style="color: #dedede;"></i> Home</a></li>
          <hr class="mobile-barra">

          <li><a class="nav-item" href="./pages/medicos.php"><i class="fa-solid fa-user-doctor"  style="color: #dedede;"></i> Médicos</a></li>
          <hr class="mobile-barra">

          <li><a class="nav-item" href="./pages/medicamentos.php"> <i class="fa-sharp fa-solid fa-tablets" style="color: #dedede;"></i> Medicamentos </a></li>
          <hr class="mobile-barra">

          <li><a class="nav-item" href="./pages/noticias.php"><i class="fa-solid fa-newspaper" style="color: #dedede;"></i> Campanhas e públicações</li>
          
          <hr class="mobile-barra">



            <ul>
            <li><a class="user-mobile" href="#"><i class="fa-solid fa-file-user" style="color: #dedede;"></i> Conta</a></li>
              <hr class="mobile-barra">
              <li><a class="user-mobile" href="../pages/conta.php"> <i class="fa-solid fa-user"></i> Perfil</a></li>
              <li><a class="user-mobile" href="../pages/login.php"><i class="fa-solid fa-right-to-bracket" style="color: #dedede;"></i> Login</a></li>
              <li><a class="user-mobile" href="../pages/cadastro.php"><i class="fa-solid fa-user-pen" style="color: #dedede;"></i> Cadastrar</a></li>
          </li>
        </ul>
       </ul>>
      </div>


  </div>

  <br><br>

  <!--Conteúdo principal-->

  <main class="conteudo-principal">
       <img class="index1" src="IMAGENS/indeximage.svg" alt="" draggable="false">
        <hr>
        <br>

        <!--Imagens e textos-->

        <section class="imagens">

          <div class="planos-img">
            <div class="plano-c">
            <img src="IMAGENS/idososimage.svg" width="100%" draggable="false">
            <a class="aqui1" href="#">Aqui</a>
            <hr>
            <br> 

                <p class="text1">A saúde é um dos pilares mais importantes da vida e isso é ainda mais<br>
                evidente na terceira idade.
                  Por isso, é fundamental cuidar da saúde dos<br> idosos de forma preventiva,
                  para garantir que eles possam aproveitar <br>
                  ao máximo essa fase da vida.<br>
                  <br>
                  Aqui na nossa Unidade Virtual de Saúde, oferecemos uma ampla gama<br>de serviços de saúde para os idosos, desde consultas médicas regulares<br> até 
                  tratamentos especializados para doenças crônicas. 
                  Nossos profissionais<br> são altamente qualificados e experientes em cuidar da saúde dos idosos com todo<br> o cuidado e carinho que eles merecem.</p>
                  <img class="idoso" src="IMAGENS/idoso.jpg" width="19%" height="19%" draggable="false">
            </div>
            <br>
            <hr>
            <div class="plano-c">
            <img src="IMAGENS/fisicaimage.svg" alt="" width="100%">
            <a class="aqui2" href="#">Aqui</a>
            <hr>
            <br>
            <p class="text2">As atividades físicas são fundamentais para manter a saúde em dia em todas as idades.<br>Elas trazem uma série de benefícios para o corpo e a mente, como aumento da disposição,<br> melhora do sono, controle do peso corporal, fortalecimento dos ossos e músculos, <br>redução do risco de doenças crônicas, como diabetes, hipertensão arterial e doenças cardiovasculares,<br> e ainda contribuem para a saúde mental, reduzindo o estresse e a ansiedade.
                      <br>
                      <br> 
                        Além disso, as atividades físicas podem ser uma ótima oportunidade para socialização,<br> já que muitas vezes são praticadas em grupo, o que pode aumentar o sentimento de <br>pertencimento e promover a interação social.</p>
            </div>
            <br>
            <br>
            <br>
            <hr>  

            <div class="plano-c">
            <img src="IMAGENS/mentalImage.svg" alt="" width="100%" draggable="false">
            <a class="aqui3" href="#">Aqui</a>
            <hr>
            <br>
            <p class="text2">A saúde mental é tão importante quanto a saúde física e deve ser cuidada com atenção e carinho. <br>Ela é essencial para o bem-estar geral, para a capacidade de lidar com desafios, <br>para manter relacionamentos saudáveis e para a produtividade e criatividade no trabalho.
                <br>
                <br>
              Manter uma boa saúde mental envolve o cuidado com as emoções, pensamentos e comportamentos. <br> É importante que as pessoas aprendam a reconhecer sinais de alerta,<br> como mudanças de humor, pensamentos negativos e dificuldade em realizar atividades cotidianas, <br>e busquem ajuda quando necessário.</p>
            </div>
            <br>
            <br>
            <br>
            <hr>  
            </div>
         </div>

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

      <!--Voltar ao topo do site com JavaScript-->
  <style>
      #btn-voltar-topo {
        position: fixed;
        bottom: 20px;
        right: 20px;
        cursor: pointer;
        user-select: none;
        
      }
      </style>
      <img id="btn-voltar-topo" src="IMAGENS/up.svg" width="5%" height="5%" draggable="false">
    
    <script>
      document.getElementById("btn-voltar-topo").addEventListener("click", function(){
        window.scrollTo({top: 0, behavior: "smooth"});
      });
    </script>
</body>
</html>
