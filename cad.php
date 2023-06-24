<?php
session_start();

if (isset($_SESSION['alerta'])) {
    $alerta = $_SESSION['alerta'];
    unset($_SESSION['alerta']);
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
    <title>Bem-vindo a Omena's Room</title>
</head>
<body>
  

    <header class="header-index" id="header-login"> <i class="header-index" id="login-i">Omena's Room</i> 
      <a id="cad-index" href="login.php"> Faça Login </a> 
    </header>

   <?php if (isset($alerta)) : ?>
        <div class="alerta"><?php echo $alerta; ?></div>
    <?php endif; ?>

  
    <div class="login-main">
        <div class="left-login">
          <h2> Faça Parte da Nossa Equipe </h2>
          <img src="IMG/Video game developer.gif">
        </div>
        <div class="right-login">
          <div class="card-login">
            <h1>CADASTRO</h1>
             <form class="card-login" method="post" action="processa_cadastro.php">
              <div class="text-field">
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario" placeholder="Usuário">
              </div>
              <div class="text-field">
                <label for="email"> E-mail </label>
                <input type="email" name="email" placeholder="email">
              </div>
              <div class="text-field">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Senha">
              </div>
              <div class="text-field">
                <label for="data_nascimento">Data de nascimento</label>
                <input type="date" name="data_nascimento">
              </div>
              <div class="btn-box">
                <button class="btn-login"  type="submit" class="submit-button-talkus"> Cadastrar-se </button>
              </div>
                </form>
          </div>
        </div>
    </div>

   <audio preload="metadata" controls loop autoplay>
      <source src="Pokemon.mp3" type="audio/mp3">
    </audio>
  
    <footer class="footer-index">
        <p class="parag-index">&copy; Thiago Luiz dos Santos. Todos os Direitos Reservados</p>
        <img class="footer-img-index" src="../IMG/dev.jpeg" alt="dev-image">
      </footer>
</body>
</html>