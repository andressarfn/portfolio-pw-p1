<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>IRMÃO DO JOREL</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/estilo1.css" rel="stylesheet">
</head>

<body>
<div class="tudo">
            <div class="cabeçalho">
                <div class="container">
                <img src="https://i.ibb.co/w4WGDj4/2.png" alt="2" border="0">
                </div>
            </div><br>
        <div class="menu1">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- formulário -->
                        <section>
                        <h2>Cadastre-se</h2>
                        <form action="projeto2.php" onsubmit="return conferesenha()" method="POST">
                        <div class="form-group">
                        <label for="colocarusuario">Usuário:</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="usuarioajuda" placeholder="Usuário">
                        </div>
                        <div class="form-group">
                        <label for="colocarsenha">Senha:</label>
                        <input type="password" class="form-control" name="senha" id="senha1" placeholder="Senha">
                        <label for="confirmarsenha">Confirme a senha:</label>
                        <input type="password" class="form-control" name="confsenha" id="senha2" placeholder="Senha">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button><br>
                        <a class="btn btn-primary btn-lg btn-block" href="projeto2.php">Voltar</a><br>
                        </form>
                        </section><br>
                    </div>
                </div>
            </div>
        </div>
</div>
    <script>
    function conferesenha(){
        var usuario = document.getElementById('usuario').value;
        var senha1 = document.getElementById('senha1').value;
        var senha2 = document.getElementById('senha2').value;

        if (usuario == '' || senha1 == '' || senha2== ''){
            alert('Verifique se todos os campos estão preenchidos!');
            return false;
        } else {
            if (senha1 === senha2){
            alert('Cadastro realizado!');
            return true;
        }else {
            alert('Senhas não batem!');
            return false;
        }
    }
    return false;
    }
    </script>
</body>


</html>