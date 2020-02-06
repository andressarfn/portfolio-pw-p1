
<html>
	 <head>
		 <meta charset="utf-8">
		 <meta http-equiv="content-type">
		 <link rel="stylesheet" type"text/css" href="valida.css">
		 <title>Fim</title>
	 </head>
	 
	 <body>
	 <header>
		<h2>(DES)ENCANTO</h2>
	 </header>
	 <h3>Conta criada com sucesso!</h3>
		 <div id= "msg2">
		 <img src="desencanto3.gif"/><br>
		 </div>
	<div id="msg">
	 <?php

		$usuario = $_POST['usuario'];
		$nascimento = $_POST['nascimento'];
		$email = $_POST['email'];
		$emailc = $_POST['emailc'];
		$senha = $_POST['senha'];
		
		
		$dia = date('d');
		$mes = date('m');
		$ano = date ('Y');
		
		$nascimento = explode('/', $nascimento);
		$dianasc = ($nascimento[0]);
		$mesnasc = ($nascimento[1]);
		$anonasc = ($nascimento[2]);
		
		$idade = $ano - $anonasc;
		
		
		echo "<br>Você tem: ".$idade." anos"; 
		echo "<br>Seu usuário: ".$usuario;
		echo "<br>O e-mail cadastrado: ".$email;
		
	?>
	</div>
	 <footer>
		<p>&copy;Andressa Ribeiro</p> 
	 </footer>
	 </body>

</html>

