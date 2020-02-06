<?php
session_start();
    require_once("servidor.php");
    
if (isset($_POST['enviar'])) {
    if (!empty($_POST['nomeproduto']) || !empty($_POST['preco']) || !empty($_POST['QuantEstoque']) || !empty($_POST['codigo'])){
        $nome = $_POST['nomeproduto'];
        $preco = $_POST['preco'];
        $QuantEstoque = $_POST['QuantEstoque'];
        $codigo = $_POST['codigo'];

$comando = "INSERT INTO produtos (nome, preco, QuantEstoque, codigo) VALUES ('$nome', '$preco', '$QuantEstoque','$codigo')";
$enviar = mysqli_query($conn, $comando);

        if ($enviar) {
            $_SESSION['mensagem'] = "Produto cadastrado!";
            header("location:index.php");
            exit;
        }
        else {
            $_SESSION['mensagem'] = "Erro ao cadastrar produto!";
            header("location:index.php");
            exit;
        }
    }
}
?>
