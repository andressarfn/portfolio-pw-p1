<?php
session_start();
include_once("servidor.php");
if(isset($_POST['enviar'])){
    if (!empty($_POST['login']) || !empty($_POST['senha']) || !empty($_POST['email'])) {
        $login = $_POST['login'];
        $senha = MD5($_POST['senha']);
        $email = $_POST['email'];

        $comando = "INSERT INTO usuarios (login, senha, email) VALUES ('$login', '$senha', '$email')";
        $enviar = mysqli_query($conn, $comando);
	    if ($enviar) {
				$_SESSION['mensagem']="Cadastrado com sucesso!";
				header("location:index.php");
				exit;
		    }else{
				$_SESSION['mensagem']="Erro ao cadastrar!";
				header("location:cadastro.php");
				exit;
			}
		}else{
			$_SESSION['mensagem']="Preencha todos os campos!";
			header("location:cadastro.php");
			exit;
		}
    }else{
		header("location:index.php");
		exit;
	}
?>