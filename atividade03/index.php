
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>SIRI CASCUDO</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Meu CSS -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

                      <ul class="nav justify-content-end #f85032 lighten-4 py-4">
                        <li class="nav-item">
                          <a class="nav-link amber accent-2" href="../index.html">PORTFÓLIO</a>
                        </li>
                      </ul>
                        <!-- formulário -->
                        <div id="corpo-form">
                        <h2>ENTRAR</h2>    
                        <div id="php-txt">
                        <?php
                            session_start();
                                require_once("servidor.php");
                                    if (!empty($_SESSION['mensagem'])){
                                        echo $_SESSION['mensagem'];
                                            unset($_SESSION['mensagem']);
                        }
                        ?>
                        </div>
                        <form action="validar.php" method="POST">
                        <div class="form-group">
                        <input type="text" class="form-control" name="login" placeholder="Login">
                        </div>
                        <div class="form-group">
                        <input type="password" class="form-control" name="senha" placeholder="Senha">
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-outline-danger btn-lg btn-block" name="enviar">Entrar</button>
                        </div>
                        <a class="btn btn-outline-danger btn-lg btn-block" href="cadastro.php">Cadastre-se</a><br>
                        </form>
                        </div>
 <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>