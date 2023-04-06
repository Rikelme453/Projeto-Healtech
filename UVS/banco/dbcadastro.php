<?php
	include_once "dbconnect.php";
$nome_tmp = $_POST['nome'];
$data_tmp = $_POST['data'];
$email_tmp = $_POST['email'];
$senha_tmp = $_POST['senha'];
$img1 = "https://image.shutterstock.com/image-vector/check-list-button-icon-vector-260nw-1259364499.jpg";
$img2 = "https://compras.wiki.ufsc.br/images/5/56/Erro.png";


if($email_tmp != ""){
$email = $_POST['email'];

	if($senha_tmp && $nome_tmp && $data_tmp != ""){
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$data = $_POST['data'];

$sql= "INSERT INTO tbubs(nome, email, senha, data) values('$nome','$email', '$senha', '$data')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);
}
}

?>


<!DOCTYPE html>

<html>
  <head>
    <link href="../CSS/compras.css" rel="stylesheet" type="text/css" />
    <link href="../CSS/fundo.css" rel="stylesheet" type="text/css" />
    <link rel='icon' type='image/jpg' href="../imagens/iconsite.png">
    <title>UVS | Concluido</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    </head>
    <body>
      
      <main class="container1">
      <form name="form1" method="get" action="">
        <div class="finalizado"> <img class="fim" src="<?php

      		if($email_tmp != ""){
			if($senha_tmp != ""){
				echo $img1;
		}else{
			echo $img2;
		}
		}else{
			echo $img2;
		}

      		
      		?>

      		" height="50px" width="50px">

      <f1><?php


      		if($email_tmp != "" or $senha_tmp != ""){
      			if($email_tmp != ""){
							if($senha_tmp != ""){
								if($conn == "sim"){
      						echo $msg;
      						$caminho = "nlog";
      					}else{
      						echo $erro;
      			}

						}else{
							$msg = "É necessário ter uma senha!";
							$caminho = "log";
							echo $msg;
						}
						}else{
							$msg = "É necessário ter um email!";
							$caminho = "log";
							echo $msg;
				}
					}else{
						$msg = "É necessário ter um email e senha!";
							$caminho = "log";
							echo $msg;
					}


      		
      		?>
      </f1>


  </div>
        <div class="underline"></div>
        </div>
        
        
        <button class="bu"><a class="txt-button" href="

        	<?php

      		if($caminho == "log"){
      			echo "../pages/login.php";
      		}else{
      			echo "../index.php";
      		}


      		
      		?>"


      		style="text-decoration:none">


        	<?php

      		if($caminho == "log"){
      			echo "Tentar novamente?";
      		}else{
      			echo "Pronto!";
      		}


      		
      		?>
      			
      		</a></button>
        </div>
      </form>
      </main>

      
    </body>
</html>