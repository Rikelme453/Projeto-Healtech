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
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Página de medicamentos</title>

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

</head>
<body>

<nav class="menu3">

    <div class="navbar">

      <i class='bx bx-menu'></i>

      <img class="logo-marca" src="../IMAGENS/UVS +.svg" ></img>
        <p id="texto-faxada">Mais Vida!Mais Saúde!<p>
       <div class="nav-links"> 
       <ul class="links">
          <li><a href="../index.php">Home</a></li>
          <li><a href="medicos.php">Médicos</li>

          <li><a href="noticias.php">Camapanhas e publicações</li>

          <li><a href="noticias.php">Campanhas e Públicações</li>

           
          <li>
            <a href="#">Conta</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="conta.php">Conta</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="cadastro.php">Cadastro</a></li>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <br><br>
    
    <main>
       <div class="banner-remedios">
           <img src="../IMAGENS/remedios-planta.png" alt="medicamentos aqui" class="index1">
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
       
       <section class="remedios">
         <div class="remedios-disponiveis">

            <div clss="medicamentos">
                <div class="remedio-c">

                  <img class="caixa-remedio" src="../IMAGENS/dipirona.png" alt="dipirona">

                  <div class="descricao-remedio">
                    Dipirona sodica
                  </div>

                  <div class="botao-remedio">

                  <button class="botao-remedio" onclick="abrirDescricao('vis-descricao')"> DISPONÍVEL</button>

                    </div>

                    <div id="vis-descricao" class="janela-remedio">
                          <div class="conteudo-janela">

                            <div class="remedio-descricao-imagem">
                              <img src="../IMAGENS/dipirona.png" alt="dipirona">
                            </div>

                            <div class="remedio-dados">
                              <p>Nome do medicamento: </p>
                              <p>Fabricante: </p>
                              <p>Quantidade disponivel</p>
                            </div>

                            <div class="botao-reservar">
                              <button class="botao-reservar" onclick="reservarDescricao('vis-descricao')">RESERVAR MEDICAMENTO</button>
                            </div>
                          </div>
                  </div>
                 
                </div>
                </div>

               
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


   
</body>
</html>