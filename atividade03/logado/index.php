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
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
            <ul class="nav justify-content-end #f85032 lighten-4 py-4">
              <li class="nav-item">
                <a class="nav-link amber accent-2" href="listac.php">CRESCENTE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link amber accent-2" href="listad.php">DECRESCENTE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link amber accent-2" href="lista.php">PRODUTOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link amber accent-2" href="sair.php">SAIR</a>
              </li>
            </ul>

            <div id="corpo-form">
            <h5>CADASTRAR PRODUTOS</h5>
            <form action="listar.php" method="post">
            <table>
            <tr><td>PRODUTO:</td><td><input type="text" name="nomeproduto"><br></tr></td>
            <tr><td>PREÇO:</td><td> <input type="text" name="preco"><br></tr></td>
            <tr><td>QUANTIDADE:</td><td><input type="number" name="QuantEstoque"><br></tr></td>
            <tr><td>CÓDIGO:</td><td><input type="number" name="codigo"><br></tr></td>
            </table><br>
            <div id="php-txt">
                <?php
                session_start();
                    require_once("servidor.php");
                    if (!empty($_SESSION['mensagem'])){
                        echo $_SESSION['mensagem'];
                        unset($_SESSION['mensagem']);
                    }
                    if (!empty($_SESSION['email']) and !empty($_SESSION['id'])) {
                        $id = $_SESSION['id'];
                        $email = $_SESSION['email'];
                    }
                ?>
              </div>
            <button type="submit" class="btn btn-outline-danger btn-lg btn-block" name="enviar">Enviar</button>
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
