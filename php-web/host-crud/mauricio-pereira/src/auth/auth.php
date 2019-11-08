<?php
    require_once('../database/database.php');
    $banco = new Database();
    $senha = $banco->readByNameUser($_POST['login']);

<<<<<<< HEAD
    if (password_verify($_POST['senha'],$senha['password'])) {
=======
    if (hash('sha256', $_POST['senha']) == $senha['password']) {
>>>>>>> upstream/master
        session_start();
        $_SESSION['logado'] = true;
        header('location:../lib/listar.php');
    } else {
        header('location:../index.html');
    }
?>