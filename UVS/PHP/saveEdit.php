<?php 
       include_once('../banco/dbconnect.php');
       if(isset($_POST['alterar'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data = $_POST['data'];
        $senha =$_POST['senha'];
        
        $sqlInsert = "UPDATE tbubs
        SET nome='$nome',senha='$senha',email='$email',data='$data'
        WHERE id=$id";
        

        $result = $conexao->query($sqlInsert);  
        
     
       }else if(isset($_POST['alterar2'])) {

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $formacao = $_POST['formacao'];
        $dias = $_POST['dias'];
        $horario =$_POST['horarios'];
         
        $sqlInsert2 = "UPDATE tbmedicos
        SET profissional='$nome',formacao='$formacao',dias='$dias',horarios='$horario'
        WHERE Id=$id"; 
        
        $result2 = $conexao->query($sqlInsert2);  
       
       }
       header('Location: ../pages/conta.php');
     ?>