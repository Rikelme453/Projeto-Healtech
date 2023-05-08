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
        else{
         echo "<p>Vixe Maria</p>";
        }
      
      
   }
   header('Location:../pages/medicamentos.php');
   

  ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>

    
      
     
    
 </body>
 </html>

  