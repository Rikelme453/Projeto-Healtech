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

	if($senha_tmp && $nome_tmp && $data_tmp != "" && isset($_FILES["imagem"]) && !empty($_FILES["imagem"])){
      $imagem= "../upload/".$_FILES["imagem"]["name"];
      move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);  
   
      $senha = $_POST['senha'];
      $nome = $_POST['nome'];
      $data = $_POST['data'];

      $sql= "INSERT INTO tbubs(nome, email, senha, data , imagem) values('$nome','$email', '$senha', '$data', '$imagem')";

      mysqli_query($conexao, $sql);
      mysqli_close($conexao);
  }
}
header('Location:../pages/login.php');
?>
 $sql= "INSERT INTO tbubs(nome, email, senha, data , imagem) values('$nome','$email', '$senha', '$data', '$imagem')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);

<?php /*
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
      
    
      if($extensao !="jpg" && $extensao != "png"){
          die("Arquivo incompativel");
         }

         $home = move_uploaded_file($arquivo["tmp_name"], $pasta .$novonomeArquivo . "." .$extensao);
         $imagem = $pasta .$novonomeArquivo . "." .$extensao;

         if($home){ 
          
			$senha = $_POST['senha'];
			$nome = $_POST['nome'];
			$data = $_POST['data'];
			$email = $_POST['email'];


			$sql= "INSERT INTO tbubs(nome, email, senha, data, imagem) values('$nome','$email', '$senha', '$data', '$imagem')";
            
           mysqli_query($conexao, $sql);
           mysqli_close($conexao);
        }    
   }
   header('Location:../pages/login.php');
?>*/

  

