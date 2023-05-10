<?php
  include_once('../banco/dbconnect.php');

  if(!empty($_GET['search']))
{
  $data = $_GET['search'];
  $data_1 = $_GET['search'];
  $sql = "SELECT * FROM tbmedicamentos WHERE  id LIKE '%$data%' or arquivo LIKE '%$data%' or  data_upload LIKE '%$data%' or nome LIKE '%$data%' or quant LIKE '%$data%' or caminho LIKE '%$data%' ORDER BY arquivo DESC";
  $sql2 = "SELECT * FROM tbmedicos WHERE Id LIKE '%$data_1%' or profissional LIKE '%$data_1%' or formacao LIKE '%$data_1%'  or dias LIKE '%$data_1%' or horarios LIKE '%$data_1%'  ORDER BY profissional DESC";
}
else
{
  $sql = "SELECT * FROM tbmedicamentos ORDER BY arquivo DESC";
  $sql2 = "SELECT * FROM tbmedicos ORDER BY profissional DESC";
}
$result = $conexao -> query($sql);
$result2 = $conexao -> query($sql2);

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
            <a href="usuarios.php"> <i class="fa-solid fa-users" style="color: #076470;"></i>Usuários</a>
                <hr>
            <a href="../pages/sair.php"> <i class="fa-solid fa-right-from-bracket" style="color: #076470;"></i> Sair</a>
            <hr>
        </div>


       <div class="principal">
   
        <div class="box-search">
            
            <input type="search2" placeholder="Pesquisar" class="form-control"  id="pesquisar">

            <button class= "btn btn-primary" onclick="Apresentar()">
            <svg btn btn-primary xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            </button>
        </div>
<br>

<table class="tabela">
      <th class="tdDark">Nome do Profissional</th>
      <th class="tdDark">Formação/Especialização</th>
      <th class="tdDark">Dias de Atendimento</th>
      <th class="tdDark">Horários de Atendimento</th>
      <th class="tdDark">Id</th>
      <th class="tdDark">Ação</th>
       
       <?php 
  
  while($user = mysqli_fetch_assoc($result2)) {

    echo "<tr>";
    echo "<td>".$user['profissional']."</td>";
    echo "<td>".$user['formacao']."</td>";
    echo "<td>".$user['dias']."</td>";
    echo "<td>".$user['horarios']."</td>";
    echo "<td>".$user['Id']."</td>";
    echo "<td>

            <a class='btn btn-sm btn-primary' href='../PHP/edit2.php?id=$user[Id]' title='Editar'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
            </svg>
            </a> 

            <a  class='btn btn-sm btn-danger' href='../PHP/alterar.php?Id=$user[Id]' title='Deletar'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                </svg>
            </a>
            </td>";
            
        echo "</tr>";
       }      
         ?>
          <th id="cad">

            <a  class='btn btn-sm btn-success'  href='cadmed.php' title='Cadastrar'>
             <svg xmlns='http://www.w3.org/2000/svg'  width='100' height='20'  fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
              <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                </svg>
                  Cadastrar
                 </a> 
                 
             </th>
</table>


<br><br>
<table class="tabela">
     <th class="tdDark">Id</th>
     <th class="tdDark">Arquivo de Imagem</th>
     <th class="tdDark">Data de Upload</th>
     <th class="tdDark">Nome do Medicamento</th>
     <th class="tdDark">Quantidade</th>
     <th class="tdDark">Caminho da Imagem</th>

     <?php 
     while($user = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>".$user['id']."</td>";
      echo "<td>".$user['arquivo']."</td>";
      echo "<td>".$user['data_upload']."</td>";
      echo "<td>".$user['nome']."</td>";
      echo "<td>".$user['quant']."</td>";
      echo "<td>".$user['caminho']."</td>";
      echo "<td>";
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
            window.location ='tabelas.php?search='+search.value;
      }

  </script>

</body>
</html>
   