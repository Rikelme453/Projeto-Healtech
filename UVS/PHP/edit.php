<?php
    if(!empty($_GET['id']))
    {
        include_once('../banco/dbconnect.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM tbubs WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
           
   while($user_data = mysqli_fetch_assoc($result)) {

     $email = $user_data['email'];
     $nome = $user_data['nome'];
     $data = $user_data['data'];
     $senha = $user_data['senha'];
  
    /* $sqlInsert = "UPDATE tbubs
     SET nome='$nome',senha='$senha',email='$email', data ='$data_nasc',cidade='$cidade',estado='$estado',endereco='$endereco'
     WHERE id=$id";
     $result = $conexao->query($sqlInsert);   */
     
        }
      }
    }else{
        header('Location:../pages/conta.php');
    }
 
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <link rel='icon' type='image/jpg' href="../imagens/iconsite1.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>UVS | Cadastro</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>

  <div class="login1">
  <img id="imagem1" src="../IMAGENS/logo.png" width="70%" ></img>
     <h3>Você é importante!<br>
         Junte-se a nós!
     <h3>
     <p>Efetue o cadastro para acessar o site</p>
   </div>
    <main class="container">
        <h2>UVS | Cadastro</h2>

        <form name="form1" method="post" action="../pages/conta.php" onsubmit="return valida_form()">
        <div class="input-field">
                <label>Nome do Usuário:</label>
                <input class="form-control" type="text" name="nome" id="nome"
                    placeholder="insira o nome" value=<?php echo $nome;?>>
                <label>Data de Nascimento:</label>
                <input class="form-control" type="date" name="data" id="data" 
                    placeholder="Insira a data" value=<?php echo $data;?>>
                <label>Email do Usuário:</label>
                <input class="form-control" type="text" name="email" id="email"
                    placeholder="insira o email" value=<?php echo $email;?>>
                <label>Senha do Usuário:</label>
                <input class="form-control" type="password" name="senha" id="senha"
                    placeholder="insira a senha" value=<?php echo $senha;?>>
                <div class="underline"></div>
            </div> 
            </div>
            <input type="hidden" name="id" value=<?php echo $id;?>>
            <input type="submit" value="Alterar">


        </form>   
    </main>
</body>
</html>