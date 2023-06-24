<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_nascimento = $_POST['data_nascimento'];

    if (empty($usuario) || empty($email) || empty($senha) || empty($data_nascimento)) {
        $_SESSION['alerta'] = 'Preencha todos os campos do formulário!';
        header('Location: cad.php');
        exit;
    }

    if (!preg_match('/^[a-zA-Z0-9_.+-]+@(gmail|hotmail)\.[a-zA-Z0-9-.]+$/', $email)) {
        $_SESSION['alerta'] = 'E-mail inválido!';
        header('Location: cad.php');
        exit;
    }
    $_SESSION['usuario'] = $usuario;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['data_nascimento'] = $data_nascimento;

    header('Location: login.php');
    exit;
} else {
    header('Location: cad.php');
    exit;
}
?>

