<?php
    include "../banco/dbadmin.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UVS| ADMINISTRATOR</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/admin.css">


     <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Font Awesome-->

    <script src="https://kit.fontawesome.com/7cdd971c93.js" crossorigin="anonymous"></script>
    <!--JavaScript e Jquery-->
    <script src="../JS/remedio.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

     <!--Icone favicon-->
     <link rel="shortcut icon" href="../IMAGENS/UVS-.ico" type="image/x-icon">
</head>
<body>
    
<!--Dashboard administrator-->
    <header>
        <div class="info-cabecalho">
           
                <img class="logo"src="../IMAGENS/UVS +.svg" alt="uvs logo">
                <h5>UVS ADMINISTRATOR</h5>
                <p>Ola, Admin</p>
              
        </div>
    </header>

    <section class="main">
        <div class="sidebar">

            <div class="perfil-adm">
                <div class="image-perfil">

                <form action="">
                                   
                    <a class="image-perfil" href="user_admin.php"> 
                        
                    <img src=<?php ?> name="perfiluser" style="width: 60px; height: 60px">
                </a>
                    <script src="../JS/perfil.js"></script>
                    </form>

                    <h4>Bem Vindo de Volta!</h4>
                    <p><?php include "../PHP/logado.php";
                //echo "<br>" . $logado; if($user != ""){
                //echo "<br>" . "Usúario: " .  $user;
                //}else{
                    
                //}?></p>

                </div>
            </div>

           
            <a class="nome-colorido" href=""> <i class="fa-solid fa-house" style="color: #076470;"></i> Dashboard</a>
                <hr>
            <a href="paginas.php"> <i class="fa-sharp fa-solid fa-file-lines" style="color: #076470;"></i> Páginas </a>
                <hr>
            <a href="usuarios.php"> <i class="fa-solid fa-users" style="color: #076470;"></i>Usuários</a>
                <hr>
            <a href="tabelas.php"> <i class="fa-solid fa-table" style="color: #076470;"></i>Tabelas</a>
                <hr>
            <a href="../pages/sair.php"> <i class="fa-solid fa-right-from-bracket" style="color: #076470;"></i> Sair</a>
            <hr>
        </div>

        <div class="container">
            <div class="titulo-secao">
              
                <h2>Dashboard</h2>
                <hr>
                <p>Painel de controle</p>
            </div>

            <div class="caixa-info">
                <div class="caixa-info-primeira">
                    <div style="background-color: #0097B2; " class="caixa-info-primeira-texto">
                    <img src="../ICONS/mensg.png" alt="novas mensagens" width="60px" height="60px">
                        <h3>00</h3>
                        <p>Novas Mensagens</p>

                        <div style="background-color: #207180;" class="cor-de-baixo"></div>
                       
                    </div>

                    <div style="background-color:#E6C957" class="caixa-info-primeira-texto">
                    <img src="../ICONS/user.png" alt="novas mensagens" width="60px" height="60px">
                        <h3>00</h3>
                        <p>Usuários</p>
                        
                        <div style="background-color: #B29B3E;" class="cor-de-baixo"></div>

                    </div>

                    <div style="background-color: #7ED957;" class="caixa-info-primeira-texto">
                    <img src="../ICONS/remedio.png" alt="novas mensagens" width="60px" height="60px">
                        <h3>00</h3>
                        <p>Remédios</p>
                       
                        <div style="background-color: #79AF61;" class="cor-de-baixo"></div>


                    </div>

                    <div style="background-color: #B600C6;" class="caixa-info-primeira-texto">
                    <img src="../ICONS/form.png" alt="novas mensagens" width="60px" height="60px">
                        <h3>00</h3>
                        <p>Agenda</p>

                        <div style="background-color: #6C1074;" class="cor-de-baixo"></div>
                       
                    </div>
                </div>
                
            </div>

            <div class="maps">
                <div class="mapa-ubs">
                    <h3>Localização UBS Google Maps</h3>
                    <div class="tablet-uvs">
                        
                    <iframe class="mapa-da-ubs-formatado" width="508" height="578" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=696&amp;height=578&amp;hl=en&amp;q=%20Caririacu+(Carira%C3%A7u)&amp;t=k&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
  

                    </div>
                </div>
            </div>

     <div class="upload">
            <h3>Upload de Medicamentos no SISTEMA</h3>

            <form  action="../banco/dbmedicamentos.php" method="POST" enctype="multipart/form-data"> 
            <br>
            <input type="file" id="pegar" name="pegar" accept="image/*" placeholder="Selecionar" onchange="previewRemedio()" required><br><br>
            <img class="recebe-imagem" name="remedioimg" style="width: 300px; height: 300px">
            <br><br>
            <input type="nome" name="nomeMed" placeholder="Nome do Medicamento">
            <br><br>
            <input type="text" name="quantMed" placeholder="Quantidade de caixas em estoque">
            <br><br>
            <img class="botao-upload "src="../ICONS/upload.png">
            <input  type="submit" class="btn btn-primary" name="mandar" value="Enviar Informações">
            </form>
      </div>
      <br>
    </section>
</body>
</html>