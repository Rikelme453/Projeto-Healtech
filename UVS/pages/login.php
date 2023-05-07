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

   <img id="imagem1" src="../IMAGENS/UVS +.svg"></img>
   <h3>Unidade Virtual de Saúde</h3>
   <br>
   <br>
   <br>     
     <h3>Seja Bem Vind@!<h3>
     <p>Efetue o login para acessar o site.</p>
  </div>
    <main class="container">
        <h2>UVS | Acesso</h2>

        <form name="form1" method="post" action="verificarLogin.php" onsubmit="return valida_form()">
            <div class="input-field">
                <input class="form-control"  type="text" name="email" id="username"
                    placeholder="Email do Usuário" required>
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <input class="form-control"  type="password" name="senha" id="password"
                    placeholder="Senha do Usuário" required>
                <div class="underline"></div>
            </div>

            <input type="submit" name="submit" value="Login" id="enviar" onclick="Apresentar()">
            <div class="reg"><div class="itens"><p class="link">Não tem uma conta?</p></div>
            <div class="itens"><a href="cadastro.php" class="link2">Registre-se</a></div><div>
        </form>
    </main>
</body>
</html>