<!--Código fonte do site UVS - Unidade Virtual de Saúde 2023 Versão 5 do HTML WC3-->
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
     <!--Icone favicon-->
     <link rel="shortcut icon" href="../IMAGENS/UVS-.ico" type="image/x-icon">
  
</head>
<body>

  <div class="login1">
  <img id="imagem1" src="../IMAGENS/UVS +.svg" width="70%" ></img>
     
     <p>Efetue o cadastro</p>
   </div>
    <main class="container">
        <h2>UVS | Cadastro</h2>

        <form name="form1" method="post" action="../banco/dbcadmed.php" onsubmit="return valida_form()">
        <div class="input-field">
                <label>Nome do Profissional:</label>
                <input class="form-control" type="text" name="nome" id="nome"
                    placeholder="insira o nome" required>
                <label>Formação/Especialização:</label>
                <input class="form-control" type="text" name="formacao" id="formacao" 
                    placeholder="Insira a especialização" required>
                <label>Dias de Atendimento:</label>
                <input class="form-control" type="text" name="dias" id="dias"
                    placeholder="insira os dias" required>
                <label>Horario de Atendimento:</label>
                <input class="form-control" type="text" name="horario" id="horario"
                    placeholder="insira os Horários" required>
                <div class="underline"></div>
            </div> 
            </div>

            <input type="submit" value="Cadastrar Informação">


        </form>

        
    </main>

</body>
</html>