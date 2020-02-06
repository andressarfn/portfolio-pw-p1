<?php
    $usuariolog = $_POST['usuariolog'];
    $senhalog = $_POST['senhalog'];

    session_start();
    
    if (($_SESSION['cadusuario'] == $usuariolog) && ($_SESSION['cadsenha'] == $senhalog)){
        header('location: paginaprincipal.php');
    } elseif(($_SESSION['cadusuario'] == $usuariolog) && ($_SESSION['cadsenha'] != $senhalog)){
        $_SESSION['erro'] = 1;
        header('location: projeto2.php');
    } else {
        $_SESSION['erro'] = 2;
        header('location: projeto2.php');
    }

?>