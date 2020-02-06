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
                        <h2>Entrar</h2>
                        <form action="formulario.php" method="POST" onsubmit="return campos()">
                        <div class="form-group">
                        <label for="colocarusuario">Usuário:</label>
                        <input type="text" class="form-control" name="usuariolog" id="usuariolog" aria-describedby="usuarioajuda" placeholder="Seu Usuário">
                        </div>
                        <div class="form-group">
                        <label for="colocarsenha">Senha:</label>
                        <input type="password" class="form-control" name="senhalog" id="senhalog" aria-describedby="senhaajuda" placeholder="Senha">
                        <a href="redefinisenha.php">Esqueceu a senha?</a><br>
                        <?php
                                    session_start();
                                    if (isset($_SESSION["erro"])){
                                        if($_SESSION["erro"] == 1){
                                            echo "Senha inválida!";
                                        }elseif($_SESSION["erro"] == 2){
                                            echo "Usuário não encontrado!";
                                        }
                                    }
                        ?>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Entrar</button><br>
                        <a class="btn btn-primary btn-lg btn-block" href="cadastro.php">Cadastre-se</a><br>
                        <a class="btn btn-primary btn-sm" href="../index.html">Portfólio</a>
                        </form>
                        </section><br>
                        </div>
                    </div>
                </div>
            </div>
</div>
        <script>
            function campos(){
                var usuariolog = document.getElementById("usuariolog").value;
                var senhalog = document.getElementById("senhalog").value;
                if (usuariolog == '' || senhalog == ''){
                alert('Preencha todos os campos!');
                return false;
                } else {
                return true;

                }
                
            }
        </script>
        <?php
                if (isset($_POST['confsenha'])){
                $_SESSION['cadusuario'] = $_POST['usuario'];
                $_SESSION['cadsenha'] = $_POST['senha'];
                }
                if (isset($_SESSION['erro'])){
                    unset($_SESSION['erro']);
                }
        ?>   
    <!-- JS -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>