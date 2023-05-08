<?php
  include_once('../banco/dbconnect.php');

  if(!empty($_GET['search']))
{
 
  $data_1 = $_GET['search'];
  $sql2 = "SELECT * FROM tbmedicos WHERE Id LIKE '%$data_1%' or profissional LIKE '%$data_1%' or formacao LIKE '%$data_1%'  or dias LIKE '%$data_1%' or horarios LIKE '%$data_1%'  ORDER BY profissional DESC";
}
else
{
  $sql2 = "SELECT * FROM tbmedicos ORDER BY profissional DESC";
}
$result2 = $conexao -> query($sql2);

  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!---Fontes do google-->
    
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../CSS/all-pages.css">
    
    <title>Médicos</title>

     <!--Menu formatação-->
     <link rel="stylesheet" href="../CSS/menu.css">
     
     <!--Rodapé formatação-->
     <link rel="stylesheet" href="../CSS/style.css">
     <!--Tabela Formatação-->
       <link rel="stylesheet" href="../CSS/all-pages.css">
       
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
     <button class="botao-responsivo" onclick= "menuShow()"><img src="../IMAGENS/menu_white_36dp.svg" alt="botao responsivo"></button>

     
      <img class="img" src="../IMAGENS/UVS +.svg" alt="Logo da uvs" ></img>
      <script src="../JS/menu.js"></script>

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

              <li><a href="conta.php">Conta</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="cadastro.php">Cadastro</a></li>

              <li><a href="pages/login.php">Login</a></li>
              <li><a href="pages/cadastro.php">Cadastro</a></li>
              <li><a href="../admin_pages/administrador.php">Usuário</a></li>


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

          <li><a class="nav-item" href="medicamentos.php"> <i class="fa-sharp fa-solid fa-tablets" style="color: #dedede;"></i> Medicamentos </a></li>
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
       </ul>>
      </div>


  </div>

  <br><br>

    <!--Conteúdo da página de médicos-->

    <main>
        <!--Banner-->

        <div class="banner-medicos">
           <img src="../IMAGENS/medica.svg" alt="medicos" class="index1" draggable="false">
       </div>

       <hr>

        <!--Texto informativo-->
        <div class="titulo-1">
          <img class="rotinaMed"src="../IMAGENS/rotinamed.svg" width="100%" draggable="false"></img>
       </div>

       <!-- <div class="texto-informativo">
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Praesent congue faucibus erat. 
           Cras tempus mauris dignissim ante accumsan, porta lacinia orci vestibulum.<br>
           Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
            Curabitur sapien metus, consequat quis condimentum vel, rhoncus ut nisi.<br> Vestibulum at nisi vehicula,
            dictum mauris non,<br> luctus sapien. Nullam quis elit diam. Suspendisse vitae mollis enim.<br>
            Integer tristique quam in gravida condimentum. Integer quam urna, <br>ultricies lobortis scelerisque vitae, 
            suscipit eget massa. Proin ultricies rutrum nisl nec venenatis. .</p>
       </div> -->

        <br>

        <!--Informações sobre os médicos -->
<!-- 
       <div class="titulo-1">
         <h1><b>INFORMAÇÕES</b></h1>
       </div>
       <br>

       <hr>

       <div class="titulo-1">
       <h1><b>Informações sobre a rotina dos profissionais de <br> saúde de sua unidade</b></h1>
       </div> -->
       
      <section>
          
      <table class="tabela">
      <th class="tdDark">Nome do Profissional</th>
      <th class="tdDark">Formação/Especialização</th>
      <th class="tdDark">Dias de Atendimento</th>
      <th class="tdDark">Horários de Atendimento</th>
      
  <?php
 
  
  while($user = mysqli_fetch_assoc($result2)) {

    echo "<tr>";
    echo "<td>".$user['profissional']."</td>";
    echo "<td>".$user['formacao']."</td>";
    echo "<td>".$user['dias']."</td>";
    echo "<td>".$user['horarios']."</td>";
    echo "</tr>";

  };       
         ?>
</table>
   

      </section>
     
    </main>
<br><br>

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

</body>
</html>