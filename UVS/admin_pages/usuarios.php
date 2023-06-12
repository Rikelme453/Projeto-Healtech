<!--Código fonte do site UVS - Unidade Virtual de Saúde 2023 Versão 5 do HTML WC3-->
<?php
  include_once('../banco/dbconnect.php');

      if(!empty($_GET['search']))
  {
      $data = $_GET['search'];
      $sql = "SELECT * FROM tbubs WHERE  id LIKE '%$data%' or nome LIKE '%$data%' or  email LIKE '%$data%'  ORDER BY email DESC";
  }
  else
  {
      $sql = "SELECT * FROM tbubs ORDER BY email DESC";
  }
  $resultn = $conexao -> query($sql);

  ?>

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
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../CSS/conta.css">

     <!--Icone favicon-->
     <link rel="shortcut icon" href="../IMAGENS/UVS-.ico" type="image/x-icon">
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="../dist/trumbowyg.min.js"></script>
    <link rel="stylesheet" href="../dist/ui/trumbowyg.min.css">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/7cdd971c93.js" crossorigin="anonymous"></script>
    <title>UVS| ADMINISTRATOR</title>
</head>
<body>

<header>
        <div class="info-cabecalho">
           
                <img class="logo"src="../IMAGENS/UVS +.svg" alt="uvs logo">
                <h5 style="white-space: nowrap; margin-top:5%">UVS ADMINISTRATOR</h5>
                    <p style="white-space: nowrap; margin-top:5%;" class="text_user"><?php echo nl2br("Olá Administrador, " . $nome);
                     ?></p>
        </div>

        </div>
    </header>

    <section class="main">
        <div class="sidebar">

        <div class="perfil-adm">
                <div class="image-perfil">

                <form action="">
                                   
                    <a class="image-perfil" href="../pages/perfil.php"> 
                        
                    <img src=<?php echo $caminho;?> name="perfiluser" style="width: 80px; height: 80px; border-radius: 40px">
                </a>
                    <script src="../JS/perfil.js"></script>
                    </form>
                   <!-- Informações referentes ao login do usuário associado aos dados do banco--> 
                    <h4>Administre o Sistema!</h4>
                    <p><?php echo nl2br("Usuário: " . $nome .
                              "\n". "Email: " . $logado);
                     ?></p>

                </div>
            </div>
               <br>  
               
            <a class="nome-colorido" href="administrador.php"> <i class="fa-solid fa-house" style="color: #076470;"></i> Dashboard</a>
                <hr>
            <a href="paginas.php"> <i class="fa-sharp fa-solid fa-file-lines" style="color: #076470;"></i> Páginas </a>
                <hr>
            <a href="tabelas.php">  <i class="fa-solid fa-table" style="color: #076470;"></i> Tabelas</a>
                <hr>
            <a href="../pages/sair.php"> <i class="fa-solid fa-right-from-bracket" style="color: #076470;"></i> Sair</a>
            <hr>
        </div>

 
 <div class="principal">
   
        <div class="box-search">
            
            <input type="search" placeholder="Pesquisar" class="form-control" id="pesquisar">

            <button class= "btn btn-primary" onclick="Apresentar()">
            <svg btn btn-primary xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            </button>
        </div>
<br>

  <!-- Chamado das tabelas presente no banco de dados para exposição no site-->
  <!-- Tabela de Usuário-->  
   <table class="tabela">
   
      <th class="tdDark">Email do Usuário</th>
      <th class="tdDark">Nome do Usuário</th>
      <th class="tdDark">Data de Nascimento</th>
      <th class="tdDark">Id</th>
      <th class="tdDark">Ação</th>
      
    <?php
    
    
            ?>
</table>

</div>

<script>
    //Código em script interno para realização da pesquisa dos registros no banco de dados
    var search = document.getElementById("pesquisar");

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            Apresentar();
        }
    });

        function Apresentar(){
            window.location ='usuarios.php?search='+search.value;
      }

  </script>

</body>
</html>
