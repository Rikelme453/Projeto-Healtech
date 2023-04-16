<?php
  include_once('../banco/dbconnect.php');

      if(!empty($_GET['search']))
  {
      $data = $_GET['search'];
      $sql = "SELECT * FROM tbubs WHERE  id LIKE '%$data%' or nome LIKE '%$data%' or  email LIKE '%$data%'  ORDER BY email DESC";
  }
  else
  {
      $sql = "SELECT * FROM tbubs ORDER BY email DESC";
  }
  $result = $conexao -> query($sql);

  ?>