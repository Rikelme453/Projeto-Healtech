<?php
  include_once('../banco/dbconnect.php');

      if(!empty($_GET['search']))
  {
      $data = $_GET['search'];
      $data_1 = $_GET['search'];
      $sql = "SELECT * FROM tbubs WHERE  id LIKE '%$data%' or nome LIKE '%$data%' or  email LIKE '%$data%'  ORDER BY email DESC";
      $sql2 = "SELECT * FROM tbmedicos WHERE Id LIKE '%$data_1%' or profissional LIKE '%$data_1%' or formacao LIKE '%$data_1%'  or dias LIKE '%$data_1%' or horarios LIKE '%$data_1%'  ORDER BY profissional DESC";
  }
  else
  {
      $sql = "SELECT * FROM tbubs ORDER BY email DESC";
      $sql2 = "SELECT * FROM tbmedicos ORDER BY profissional DESC";
  }
  $result = $conexao -> query($sql);
  $result2 = $conexao -> query($sql2);

  ?>