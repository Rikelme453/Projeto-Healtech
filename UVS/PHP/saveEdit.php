<?php 
       include_once('../banco/dbconnect.php');
       if(isset($_POST['alterar'])){

        $id = $_POST['id'];
        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $data = $_POST['data'];
        $senha =$_POST['senha'];
         

        $sqlInsert = "UPDATE tbubs
        SET nome='$nome',senha='$senha',email='$email',data='$data'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);  
     
       }
       else {
        header('Location: ../pages/conta.php');
       }
      
     ?>