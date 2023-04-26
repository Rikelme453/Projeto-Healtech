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

    }
    header('Location:../pages/conta.php');
   
?>
