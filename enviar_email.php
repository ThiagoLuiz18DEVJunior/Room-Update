<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifique se os campos do formulário foram preenchidos
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
        // Redirecione de volta para o formulário com uma mensagem de erro
        header('Location: cad.php?error=empty_fields');
        exit;
    }

    // Verifique se o e-mail é válido usando uma expressão regular
    if (!preg_match('/^[a-zA-Z0-9_.+-]+@(gmail|hotmail)\.[a-zA-Z0-9-.]+$/', $_POST['email'])) {
      
        // Redirecione de volta para o formulário com uma mensagem de erro
        header('Location: cad.php?error=invalid_email');
        exit;
    }

    // Definir a mensagem de sucesso na sessão
    $_SESSION['success_message'] = '';

    // Redirecionar para a página de destino
    header('Location: destino.php');
    exit;
} else {
    // Redirecionar de volta para o formulário se o método da requisição não for POST
    header('Location: cad.php');
    exit;
}
?>
