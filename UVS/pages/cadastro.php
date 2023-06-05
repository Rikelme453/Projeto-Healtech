<!--Código fonte do site UVS - Unidade Virtual de Saúde 2023 Versão 5 do HTML WC3-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <link rel='icon' type='image/jpg' href="../imagens/iconsite1.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>UVS|Cadastro</title>
    <link rel="stylesheet" href="../CSS/login.css">

     <!--Icone favicon-->
     <link rel="shortcut icon" href="../IMAGENS/UVS-.ico" type="image/x-icon">

     <script> 
        function funcao1()
    {
        var input = document. querySelector("#password");
        var texto = input. value;
        
        if(texto.length < 8){
            alert("Sua senha deve ter no minímo 8 caracteres")
        }

}
    
    </script>
    
</head>
<script>
    /*
function funcao1()
    {
        var input = document. querySelector("#password");
        var texto = input. value;
        
        if(texto.length < 8){
            alert("Sua senha deve ter no minímo 8 caracteres")
        }

}*/
<script>

<body>

  <div class="login1">
  <img id="imagem1" src="../IMAGENS/UVS +.svg" ></img>
     <h3>Você é importante!<br>
         Junte-se a nós!
     <h3>
     <p>Efetue o cadastro para acessar o site</p>
   </div>
    <main class="container">
        <h2>UVS | Cadastro</h2>

        <form name="form1" method="post" action="../banco/dbcadastro.php" onsubmit="return valida_form()">
        <div class="input-field">
                <label class="labtext">Nome do Usuário:</label>
                <input class="form-control" type="text" name="nome" id="nome"
                    placeholder="insira o nome" required>
                 <label class="labtext">Data de Nascimento:</label>
                <input class="form-control" type="date" name="data" id="data" 
                    placeholder="Insira a data" required>
                 <label class="labtext">Email do Usuário:</label>
                <input class="form-control" type="text" name="email" id="email"
                    placeholder="insira o email" required>
                 <label class="labtext">Senha do Usuário:</label>
                <input class="form-control" type="password" name="senha" id="senha"
                    placeholder="insira a senha" required>
                <div class="underline"></div>
            </div> 
            </div>

            <input type="submit" value="Cadastrar-se" onclick="funcao1()">


        </form>

        
    </main>

</body>
</html>