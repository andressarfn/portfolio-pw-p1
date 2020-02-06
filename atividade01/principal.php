<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="content-type">
	<link rel="stylesheet" type"text/css" href="principal.css">
	<title>Cadastro</title>
</head>

<body>
	<header>
	 <h2>(DES)ENCANTO</h2>
	</header>
	<section>
		<div>
		<img src="desencanto2.gif" id="foto"/><br/>
		<h3>Crie uma nova conta</h3>
		<form action="valida.php" method="POST">
		<table>
		<tr><td>Nome usuário:</td><td><input type="text" placeholder="andressarfn" name="usuario"id="usuario"/><br/></tr></td>
		<tr><td>Data de nascimento:</td><td><input type="text" placeholder="15/06/1994" name="nascimento" id="nascimento"/><br/></tr></td>
		<tr><td>E-mail:</td><td><input type="email" placeholder="andressarfn@hotmail.com" name="email" id="email"/><br/></tr></td>
		<tr><td>Digite novamente seu e-mail:</td><td><input type="email" placeholder="andressarfn@hotmail.com" name="emailc" id="emailc" onBlur="checkemail()"/><br/></tr></td>
		<tr><td>Digite uma senha:</td><td><input type="password" name="senha" id="senha"/><br/></tr></td>
		<tr><td>DO IT, DO IT!:</td><td><input type="submit" id= "botao" value="Criar"/><br/></tr></td>
		</table>
		</form>
		</div>
	</section>
	
	<script>
		
		function checkemail(){
		var e1 = document.getElementById("email").value;
		var e2 = document.getElementById("emailc").value;
		if (e1 == e2){
				
			} else {
				alert("Os e-mails não coincidem! Digite novamente.");
			}
		}
	
	</script>
	
	     <footer>
		<p>&copy;Andressa Ribeiro</p> 
		 </footer>
</body>


</html>