<?php

    if(!empty($_GET['id']))
    {
        include_once('../banco/dbconnect.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM tbubs WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM tbubs WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location:../pages/conta.php');
   
?>