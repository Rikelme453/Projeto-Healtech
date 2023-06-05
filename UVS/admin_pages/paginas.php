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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="../dist/trumbowyg.min.js"></script>
    <link rel="stylesheet" href="../dist/ui/trumbowyg.min.css">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/7cdd971c93.js" crossorigin="anonymous"></script>
    <title>UVS| ADMINISTRATOR</title>

     <!--Icone favicon-->
     <link rel="shortcut icon" href="../IMAGENS/UVS-.ico" type="image/x-icon">
</head>
<body>

<header>
        <div class="info-cabecalho">
           
                <img class="logo"src="../IMAGENS/UVS +.svg" alt="uvs logo">
                <h5>UVS Usuário</h5>
                <p>Olá, User</p>  
        </div>

        </div>
    </header>

    <section class="main">
        <div class="sidebar">

            <div class="perfil-adm">
             
            </div>

            <h4>Bem Vindo de Volta!</h4>
           <p><?php include "../PHP/logado.php";
                echo "<br>" . $logado; if($user != ""){
                echo "<br>" . "Usúario: " .  $user;
                }else{
                    
                }?></p>

            <a class="nome-colorido" href="administrador.php"> <i class="fa-solid fa-house" style="color: #076470;"></i> Dashboard</a>
                <hr>
            <a href="usuarios.php"> <i class="fa-solid fa-users" style="color: #076470;"></i>Usuários</a>
                <hr>
            <a href="tabelas.php">  <i class="fa-solid fa-table" style="color: #076470;"></i> Tabelas</a>
                <hr>
            <a href="../pages/sair.php"> <i class="fa-solid fa-right-from-bracket" style="color: #076470;"></i> Sair</a>
            <hr>
        </div>

        <!--Link de páginas disponíveis-->
        <div class="container">
            <div class="titulo-secao">
                <h3>Páginas disponivies</h3>
                <hr><br>
                <a class="link-paginas" href="../index.php">Página Inicial</a>
                <br>
                <a class="link-paginas" href="../pages/medicos.php">Página Rotina de Médicos</a>
                <br>
                <a class="link-paginas" href="../pages/medicamentos.php">Página de Medicamentos</a>
                <br>
                <a class="link-paginas" href="../pages/noticias.php">Página de Notícias</a>
            </div>

            <div class="mapa-ubs">
                <h3>Editor de páginas</h3>
                <hr><br>

              
            
			               
                <form method="POST" action="">

                <label for="">Título</label>
                <input type="text" name="artigo" id="titulo" placeholder="Título do Artigo"><br><br>

                <label for="">Conteúdo</label>
                <textarea name="conteudo" id="trumbowyg-conteudo" rows="5" placeholder="Conteúdo do Artigo">

                </textarea><br><br>

                <input type="submit" value="Enviar Alterações" name="sendCardArt">

                <script>
                $('#trumbowyg-conteudo').trumbowyg({
                btns: [
                ['viewHTML'],
                ['undo', 'redo'], // Only supported in Blink browsers
                ['formatting'],
                ['strong', 'em', 'del'],
                ['superscript', 'subscript'],
                ['link'],
                ['insertImage'],
                ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                ['unorderedList', 'orderedList'],
                ['horizontalRule'],
                ['removeformat'],
                ['fullscreen']
                            ],
                    autogrow: true
                    });
                </script>
                </form>			
					
        </div>
        
    </section>

    
</body>
</html>