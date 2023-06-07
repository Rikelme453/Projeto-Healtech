<?php 
 include_once('../banco/dbconnect.php');

   if(isset($_FILES["pegar"])){
      $arquivo = $_FILES["pegar"];

      if($arquivo["error"]){
        die('Erro ao enviar arquivo!!');
      }

      $pasta = "../upload/medarquivos/";
      $nomeArquivo = $arquivo["name"];
      $novonomeArquivo = uniqid();
      $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
      
    
      if($extensao !="jpg" && $extensao != "png"){
          die("Arquivo incompativel");
         }

         $eita = move_uploaded_file($arquivo["tmp_name"], $pasta .$novonomeArquivo . "." .$extensao);
         $caminho = $pasta .$novonomeArquivo . "." .$extensao;

         if($eita){ 
          
           $nome = $_POST['nomeMed'];
           $quantidade = $_POST['quantMed'];


           $sql="INSERT INTO tbmedicamentos(arquivo, data_upload, nome , quant , caminho) values('$novonomeArquivo', NOW(), '$nome',' $quantidade', '$caminho')";
            
           mysqli_query($conexao, $sql);
           mysqli_close($conexao);
        }    
   }
   header('Location:../pages/medicamentos.php');
   

?>

  