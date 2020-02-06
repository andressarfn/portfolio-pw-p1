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
  <link href="css/style1.css" rel="stylesheet">
</head>
<body>

<?php
require_once("servidor.php");
$comando = "SELECT * FROM produtos";
$enviar = mysqli_query($conn, $comando);
$resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
?>

                    <ul class="nav justify-content-end #f85032 lighten-4 py-4">
                        <li class="nav-item">
                          <a class="nav-link amber accent-2" href="index.php">VOLTAR</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link amber accent-2" href="sair.php">SAIR</a>
                        </li>
                      </ul>
<div id="corpo-form">
<table>
  <tr>
    <th>Nome</th>
    <th>Preço</th>
    <th>Quantidade em Estoque</th>
    <th>Código</th>
  </tr>
<?php
    foreach ($resultado as $produto) {
        $nome=$produto['nome'];
        $preco=$produto['preco'];
        $QuantEstoque=$produto['QuantEstoque'];
        $codigo=$produto['codigo'];
    
?>
  <tr>
    <td><?=$nome?></td>
    <td><?=$preco?></td>
    <td><?=$QuantEstoque?></td>
    <td><?=$codigo?></td>

  </tr>
  <?php
    }
  ?>
</table>
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