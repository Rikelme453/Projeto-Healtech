<!--Código fonte do site UVS - Unidade Virtual de Saúde 2023 Versão 5 do HTML WC3-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UVS|ADMINISTRATOR</title>
    <link rel="stylesheet" href="../CSS/admin.css">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
        <script src="../JS/perfil.js"></script>
       

        <!--Icone favicon-->
     <link rel="shortcut icon" href="../IMAGENS/UVS-.ico" type="image/x-icon">
       
</head>
<body>
<header>
        <div class="info-cabecalho">
           
                <img  class="logo" src="../IMAGENS/UVS +.svg" alt="uvs logo">
                <h5>UVS Usuário</h5>
                <p>Olá, User</p>
              
        </div>
    </header>

    <section class="main">
        <div class="sidebar">
           
            <a class="nome-colorido" href="administrador.php"> Dashboard</a>
                <hr>
            <a href="../pages/sair.php"> Sair</a>
            <hr>
        </div>

        <!--Editar perfil-->

        <div class="container-edit">
            <div class="titulo-secao">
                <h2>Editar Pefil</h2>
                <hr>
            </div>

            <div class="mapa-ubs">
                    <h3>Perfil</h3>
                    
                        <br>
                    <div class="informacoes">
                        <div class="foto-perfil">
                            <p>Foto: </p>

                            <form action="administrador.php" method="POST" enctype="multipart/form-data" name="cad_admin">
                             
                                <input type="file" name="imagem" id="imagem" onchange="previewImagem()" required><br><br>

                                    <img  name="perfiluser" style="width: 150px; height: 150px">
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                                <br>
                                <p>Nome:</p>
                                <input type="text" name="nome" id="nome" autofocus required>
                                <br>
                                <p>Email: </p>
                                <input type="Email" id="email" name="email" required><br><br>
                                <input type="submit" value="Salvar" name="submit" id="submit">
                            </form>
                        </div>
                    </div>
            </div>
</body>
</html>