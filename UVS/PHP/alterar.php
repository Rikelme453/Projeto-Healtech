<?php
    include_once('../banco/dbconnect.php');
    if(!empty($_GET['id']))
    {

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM tbubs WHERE id=$id";
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM tbubs WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }

    }else if(!empty($_GET['Id'])){

    
        $id = $_GET['Id'];

        $sqlSelect2 = "SELECT *  FROM tbmedicos WHERE Id=$id";
        $result2 = $conexao->query($sqlSelect2);

        if($result2->num_rows > 0)
        {
            $sqlDelete2 = "DELETE FROM tbmedicos WHERE Id=$id";
            $resultDelete2 = $conexao->query($sqlDelete2);
        }

    }else if(!empty($_GET['ID'])){

        $id = $_GET['ID'];
      
        $sqlSelect3 = "SELECT *  FROM tbmedicamentos WHERE ID=$id";
        $result3 = $conexao->query($sqlSelect3);

        if($result3->num_rows > 0)
        {
            $sqlDelete3 = "DELETE FROM tbmedicamentos WHERE ID=$id";
            $resultDelete3 = $conexao->query($sqlDelete3);
        }

    }
    header('Location:../admin_pages/administrador.php');
   
?>
