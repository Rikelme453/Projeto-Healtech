<?php
    date_default_timezone_set('America/Sao_Paulo');
    include_once('../banco/dbconnect.php');

    if(isset($_POST['submit'])){
        //print_r($_POST['imagem']);
        //print_r($_POST['nome']);
        //print_r($_POST['email']);

       if(isset($_FILES["imagem"]) && !empty($_FILES["imagem"])){
            $imagem= "upload".$_FILES["imagem"]["name"];
            move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
       }
    
       
        $nome_adm = $_POST['nome'];
        $email_adm = $_POST['email'];


        $query = "INSERT INTO tbadmin (imagem, nome, email) VALUES ('$imagem', 
        '$nome_adm', '$email_adm')";
        
        $resultado = mysqli_query($conexao, $query);
    }
?>