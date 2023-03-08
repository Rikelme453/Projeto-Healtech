<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <link rel='icon' type='image/jpg' href="../imagens/iconsite1.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>UVS | Login</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
  <div class="login1">

   <img id="imagem1" src="../IMAGENS/healtec_logo.png" width="200px"></img>
    <hr>
    <img id="imagem2" src="../IMAGENS/site_logo.png" width="200px"></img>
     <h3>Seja Bem Vindo!!<h3>
     <p>Efetue o login para acessar o site</p>
  </div>
    <main class="container">
        <h2>UVS | Acesso</h2>

        <form name="form1" method="post" action="verificarLogin.php" onsubmit="return valida_form()">
            <div class="input-field">
                <input class="form-control"  type="text" name="email" id="username"
                    placeholder="Email do Usuário">
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <input class="form-control"  type="password" name="senha" id="password"
                    placeholder="Senha do Usuário">
                <div class="underline"></div>
            </div>

            <input type="submit" name="submit" value="Login">
            <p class="link">Não tem uma conta?<a href="cadastro.php">Registre-se</a></p> 
        </form>
    </main>

</body>
</html>