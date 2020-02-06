<?php
    session_start();

    $_SESSION['cadusuario'] = $_POST['usuariolog'];
    $_SESSION['cadsenha'] = $_POST['senhalog'];

    header('location: projeto2.php');

?>