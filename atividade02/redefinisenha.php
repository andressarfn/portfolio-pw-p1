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
<body id="page-top">
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
                        <h2>Esqueceu a senha?</h2>
                        <form action="editsenha.php" method="POST" onsubmit="conferesenha()">
                        <div class="form-group">
                        <label for="colocarusuario">Usuário:</label>
                        <input type="text" class="form-control" id="usuario" name="usuariolog" aria-describedby="usuarioajuda" placeholder="Seu usuário">
                        </div>
                        <div class="form-group">
                        <label for="colocarsenha">Nova senha:</label>
                        <input type="password" class="form-control" id="senha1" name="senhalog" placeholder="Nova senha">
						<label for="colocarsenha">Confirmar nova senha:</label>
                        <input type="password" class="form-control" id="senha2" name="senhalog" placeholder="Confirmar nova senha">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Recuperar</button>
                        </form>
                        </section><br>
                        </div>
                    </div>
                </div>
            </div>
			<div class="menu2">
                <div class="container">
                    <div class="row">
                        <div class="col">
                        <img src="https://i.ibb.co/1zbbqkL/4.png" alt="4" border="0">
                        </div>
                    </div>        
                </div>
            </div>
</div>
    <script>
	function conferesenha() {
		const usuario = document.getElementById('usuario').value;
		const senha1 = document.getElementById('senha1').value;
		const senha2 = document.getElementById('senha2').value;
		
		if(usuario == '' || senha1 == '' || senha2 == ''){
			alert('Preencha todos os campos!');
			return false;
		}else{
			if(senha1 === senha2){
				alert('Senha atualizada com sucesso!');
				return true;
			}else{
				alert('Senhas não conferem!');
				return false;
			}
		}
		return false;
	}
    </script>
</body>








</html>