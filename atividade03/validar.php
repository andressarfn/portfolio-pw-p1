<?php
session_start();
include_once("servidor.php");
    if (isset($_POST['enviar'])) {
        if(!empty($_POST['login']) || !empty($_POST['senha'])) {
            $login = $_POST['login'];
            $senha = MD5($_POST['senha']);

            $comando = "SELECT * FROM usuarios WHERE login = '$login' and senha = '$senha'";
            $enviar = mysqli_query($conn, $comando);
            $resultado = mysqli_fetch_assoc($enviar);
            if ($resultado) {
                $_SESSION['email'] = $resultado['email'];
                $_SESSION['id'] = $resultado['id'];
                header("location:logado/");
                exit;
            } else {
                $_SESSION['mensagem'] = "Login ou senha incorreta!";
                header("location:index.php");
                exit;
            } 
        } else {  $_SESSION['mensagem'] = "Preencha todos os campos!";
        header("location:index.php");
        exit;
    }
    } else { 
    header("location:index.php");
    exit;
}
?>