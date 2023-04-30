<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/admin.css">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

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
           
                <img class="logo"src="../IMAGENS/uvs-logo.png" alt="uvs logo">
                <h5>UVS ADMINISTRATOR</h5>
                <p>Ola, Admin</p>  
        </div>

        </div>
    </header>

    <section class="main">
        <div class="sidebar">

            <div class="perfil-adm">
             
            </div>

            <h3>Bem Vindo de volta!</h3>
            <a class="nome-colorido" href="administrador.php"> <i class="fa-solid fa-house" style="color: #076470;"></i> Dashboard</a>
                <hr>
            <a href=""> <i class="fa-sharp fa-solid fa-file-lines" style="color: #076470;"></i> Páginas </a>
                <hr>
            <a href=""> <i class="fa-solid fa-users" style="color: #076470;"></i>Usuários</a>
                <hr>
            <a href="">  <i class="fa-solid fa-table" style="color: #076470;"></i> Tabelas</a>
                <hr>
            <a href="../pages/sair.php"> <i class="fa-solid fa-right-from-bracket" style="color: #076470;"></i> Sair</a>
            <hr>
        </div>

        <!--Link de páginas disponíveis-->
        <div class="container">
            <div class="titulo-secao">
                <h3>Páginas disponivies</h3>
                <hr><br>
                <a class="link-paginas" href="../index-intro.php"></i> Página de Apresentação</a>
                <br>
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

                <nav class="menu">
            
			    <ul>
				<li><a href="#"> <i class="fa-solid fa-box" style="color: #cfcfcf;"></i> Conteúdo</a>
					<ul>
                                        
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
						</li>
					</ul>	
			</ul>

            <ul>
                <li><a href="">Artigos</a></li>
            </ul>

		</nav>
        </div>
        
    </section>

    
</body>
</html>