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
    <script src="../JS/perfil.js"></script>

     <!--Icone favicon-->
     <link rel="shortcut icon" href="../IMAGENS/UVS-.ico" type="image/x-icon">
    
</head>
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
        <form id = "form1" name="form1" action="../banco/dbcadastro.php"  method="post" enctype="multipart/form-data" >
        <div class="input-field">
        <div id="div-1">
          <p>Sua senha está muito fraca, ela deve ter um número de digitos superior a 8, sendo
            recomendado o uso de caracteres especiais como "*" ou "#". </p>
        </div>
        <div id="div-2">
          <p>Sua senha está adequada!!</p>
        </div>
                <label class="labtext">Nome do Usuário:</label>
                <input class="form-control" type="text" name="nome" id="nome"
                    placeholder="insira o nome" required>
                 <label class="labtext">Data de Nascimento:</label>
                <input class="form-control" type="date" name="data" id="data" 
                    placeholder="Insira a data" required >
                 <label class="labtext">Email do Usuário:</label>
                <input class="form-control" type="text" name="email" id="email"
                    placeholder="insira o email" required>
                 <label class="labtext">Senha do Usuário:</label>
                <input class="form-control" type="password" name="senha" id="senha"
                    placeholder="insira uma senha" required>
                    <button type="button" class="btn btn-primary" onclick = "most()">Conferir Senha</button> <br><br>
                    
                 <label class="labtext">Imagem de Perfil:</label>
                 <img  name="perfiluser" style="width: 150px; height: 150px">
                 <input class="form-control" type="file" name="imagem" id="imagem" onchange="previewImagem()" required><br>
                
            </div>

            <input type="submit" name="submit" id="submit" value="Cadastrar-se">
        </form>
    </main>

</body>
</html>

<script>

    document.getElementById('div-1').style.visibility = 'hidden';
    document.getElementById('div-2').style.visibility = 'hidden';
    function most(){
        var input = document. querySelector ("#senha");
        var texto = input.value;
        if(texto.length < 9 ){
            document.getElementById('div-1').style.visibility = 'visible';
            document.getElementById('div-2').style.visibility = 'hidden';
            return false;    
        }else{
            document.getElementById('div-1').style.visibility = 'hidden';
            document.getElementById('div-2').style.visibility = 'visible';
        }
    }
</script>