<?php
    include_once('../banco/dbconnect.php');
    
    if(!empty($_GET['id']))
    {

        $id = $_GET['id'];
        $sqlSelect2 = "SELECT *  FROM tbmedicos WHERE Id=$id";
        $result2 = $conexao->query($sqlSelect2);

        
     if($result2->num_rows > 0){

         while( $user_data2 = mysqli_fetch_assoc($result2)){

            $nome = $user_data2['profissional'];
            $formacao = $user_data2['formacao'];
            $dias = $user_data2['dias'];
            $horario = $user_data2['horarios'];
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

        <form name="form1" method="post" action="saveEdit.php" onsubmit="return valida_form()">
        <div class="input-field">
                <label>Nome do Profissional:</label>
                <input class="form-control" type="text" name="nome" id="nome"
                    placeholder="insira o nome" value=<?php echo $nome; ?>>
                <label>Formação/Especialização:</label>
                <input class="form-control" type="text" name="formacao" id="formacao" 
                    placeholder="Insira a formação" value=<?php echo $formacao; ?>>
                <label>Dias de Atendimento:</label>
                <input class="form-control" type="text" name="dias" id="dias"
                    placeholder="insira os dias" value=<?php echo $dias; ?>>
                <label>Horários de Atendimento:</label>
                <input class="form-control" type="text" name="horarios" id="horarios"
                    placeholder="insira os horários" value=<?php echo $horario; ?>>
                <div class="underline"></div>
            </div> 
            </div>
            <input type="hidden" name="id" value=<?php echo $id;?>>
            <input type="submit"  name="alterar2" value="Alterar">


        </form>   
    </main>
</body>
</html>