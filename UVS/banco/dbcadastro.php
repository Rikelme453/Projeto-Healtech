
<?php 
include_once('../banco/dbconnect.php');

   if(isset($_FILES["imagem"])){
      $arquivo = $_FILES["imagem"];

      if($arquivo["error"]){
        die('Erro ao enviar arquivo!!');
      }

      $pasta = "../upload/perfil/";
      $nomeArquivo = $arquivo["name"];
      $novonomeArquivo = uniqid();
      $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
   

         $home = move_uploaded_file($arquivo["tmp_name"], $pasta .$novonomeArquivo . "." .$extensao);
         $imagem = $pasta .$novonomeArquivo . "." .$extensao;

         if($home){ 
          
			$senha = $_POST['senha'];
			$nome = $_POST['nome'];
			$data = $_POST['data'];
			$email = $_POST['email'];


			$sql= "INSERT INTO tbubs(nome, email, senha, data, caminho , imagem) values('$nome','$email', '$senha', '$data', '$imagem', '$novonomeArquivo')";
            
           mysqli_query($conexao, $sql);
           mysqli_close($conexao);
        }    
   }
   header('Location:../pages/login.php');
   
?>

  

