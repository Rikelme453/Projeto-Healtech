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
  $result = $conexao -> query($sql);

  ?>

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
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../CSS/conta.css">
  

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
                <h5>UVS ADMINISTRATOR</h5>
                <p>Ola, Admin</p>  
        </div>

        </div>
    </header>

    <section class="main">
        <div class="sidebar">

            <div class="perfil-adm">
             
            </div>

            <h4>Bem Vindo de Volta!</h4>
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

   <table class="tabela">
   
      <th class="tdDark">Email do Usuário</th>
      <th class="tdDark">Nome do Usuário</th>
      <th class="tdDark">Data de Nascimento</th>
      <th class="tdDark">Id</th>
      <th class="tdDark">Ação</th>
      
    <?php
    
    while($user_data = mysqli_fetch_assoc($result)) {

                            echo "<tr>";
                            echo "<td>".$user_data['email']."</td>";
                            echo "<td>".$user_data['nome']."</td>";
                            echo "<td>".$user_data['data']."</td>";
                            echo "<td>".$user_data['id']."</td>";
                            echo "<td>

                            <a class='btn btn-sm btn-primary' href='../PHP/edit.php?id=$user_data[id]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='../PHP/alterar.php?id=$user_data[id]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                        echo "</tr>";
                }      
            ?>
</table>

</div>

<script>
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
