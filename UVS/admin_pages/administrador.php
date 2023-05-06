<?php
    include "../banco/dbadmin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UVS| ADMINISTRATOR</title>
    <link rel="stylesheet" href="../CSS/admin.css">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

       <!-- Bootstrap -->
       <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/7cdd971c93.js" crossorigin="anonymous"></script>
    
    
    
</head>
<body>
    
<!--Dashboard administrator-->
    <header>
        <div class="info-cabecalho">
           
                <img class="logo"src="../IMAGENS/UVS +.svg" alt="uvs logo">
                <h5>UVS ADMINISTRATOR</h5>
                <p>Ola</p>
              
        </div>
    </header>

    <section class="main">
        <div class="sidebar">

            <div class="perfil-adm">
                <div class="image-perfil">

                <form action="">
                                   
                    <a class="image-perfil" href="user_admin.php"> 
                        
                    <img src=<?php echo $imagem ?> name="perfiluser" style="width: 60px; height: 60px">
                </a>
                    <script src="../JS/perfil.js"></script>
                    </form>

                    <h3>Bem Vindo de volta!</h3>
                    
                </div>
            </div>

           
            <a class="nome-colorido" href=""> <i class="fa-solid fa-house" style="color: #076470;"></i> Dashboard</a>
                <hr>
            <a href="paginas.php"> <i class="fa-sharp fa-solid fa-file-lines" style="color: #076470;"></i> Páginas </a>
                <hr>
            <a href="../pages/conta.php"> <i class="fa-solid fa-users" style="color: #076470;"></i>Usuários</a>
                <hr>
            <a href=""> <i class="fa-solid fa-table" style="color: #076470;"></i> Tabelas</a>
                <hr>
            <a href="../pages/sair.php"> <i class="fa-solid fa-right-from-bracket" style="color: #076470;"></i> Sair</a>
            <hr>
        </div>

        <div class="container">
            <div class="titulo-secao">
                <!--Data e hora-->
                <div class="data-hora">            
                        <input type="time" class="hora-caixa" id="rel">
                </div>
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
                    <img src="../ICONS/mensg.png" alt="novas mensagens" width="60px" height="60px">
                        <h3>00</h3>
                        <p>Novas Mensagens</p>

                        <div style="background-color: #6C1074;" class="cor-de-baixo"></div>
                       
                    </div>
                </div>
                
            </div>

            <div class="maps">
                <div class="mapa-ubs">
                    <h3>Localização UBS Google Maps</h3>
                    <div class="tablet-uvs">
                        
                        <iframe width="520" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Juazeiro%20do%20Norte+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href='https://maps-generator.com/'>Maps Generator</a>

                    </div>
                </div>
            </div>

            
       

    </section>
</body>
</html>