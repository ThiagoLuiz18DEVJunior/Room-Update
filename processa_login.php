<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuarioLogin = $_POST['usuario'];
    $senhaLogin = $_POST['senha'];


    if (isset($_SESSION['usuario']) && isset($_SESSION['senha'])) {
        $usuarioCadastrado = $_SESSION['usuario'];
        $senhaCadastrada = $_SESSION['senha'];

        if ($usuarioLogin === $usuarioCadastrado && $senhaLogin === $senhaCadastrada) {
  
            header('Location: index.php');
            exit;
        }
    }

    $_SESSION['alert'] = 'Usuário ou senha inválidos.';
    header('Location: login.php');
    exit;
  
} else {
    header('Location: login.php');
    exit;
}

?>