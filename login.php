<?php
session_start();

if (isset($_SESSION['alert'])) {
    $alert = $_SESSION['alert'];
    unset($_SESSION['alert']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="IMG/controle-de-video-game.png">
    <title>Tela Inicial</title>
</head>
<body>
   <?php if (isset($alert)) : ?>
        <div class="alert"><?php echo $alert; ?></div>
    <?php endif; ?>

    <header class="header-index" id="header-login"> <i class="header-index" id="login-i">Omena's Room</i>
      <a id="cad-index" href="cad.php"> Cadastrar-se </a> </header>
    <div class="login-main">


        <div class="left-login">
            <h2>Seja bem-vindo a Omena's Room </h2>
            <img src="../IMG/Nerd.gif">
        </div>
        <div class = "right-login">
        <div class="card-login">
            <h1> LOGIN </h1>
          <form class= "card-login" method="POST" action="processa_login.php">
            <div class="text-field">
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario" placeholder="Usuário">
            </div>
            <div class="text-field">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Senha">
            </div class="btn-box">
            <button class="btn-login"  type="submit" class="submit-button-talkus">  Login </button>
        </div>
          </form>
    </div>
</div>
      <audio preload="metadata" controls loop autoplay>
     <source src="Undertale.mp3" type="audio/mp3">
    </audio>
      
<footer class="footer-index">
    <p class="parag-index">&copy; Thiago Luiz dos Santos. Todos os Direitos Reservados</p>
    <img class="footer-img-index" src="IMG/dev.jpeg" alt="dev-image">
  </footer>
</body>
</html>