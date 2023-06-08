<?php /*
    date_default_timezone_set('America/Sao_Paulo');
    include_once('../banco/dbconnect.php');

    if(isset($_POST['submit'])){
        //print_r($_POST['imagem']);
        //print_r($_POST['nome']);
        //print_r($_POST['email']);

       if(isset($_FILES["imagem"]) && !empty($_FILES["imagem"])){
            $imagem= "../upload/perfil".$_FILES["imagem"]["name"];
            move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
         }
    
       
       $senha = $_POST['senha'];
       $nome = $_POST['nome'];
       $data = $_POST['data'];
       $email = $_POST['email'];


       $sql= "INSERT INTO tbubs(nome, email, senha, data, imagem) values('$nome','$email', '$senha', '$data', '$imagem')";
        
        $resultado = mysqli_query($conexao, $query);
     
    }
    header('Location:../pages/login.php');
*/?>
 

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
      
    
      if($extensao !="jpg" && $extensao != "PNG"){
          die("Arquivo incompativel");
         }

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
   header('Location: ../admin_pages/administrador.php');
   
?>

  

