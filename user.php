<?php
session_start();

// Verificar se o usuário está logado (verificando se as sessões existem)
if (!isset($_SESSION['usuario'], $_SESSION['email'], $_SESSION['senha'], $_SESSION['data_nascimento'])) {
    // Usuário não está logado, redirecionar para a página de login ou cadastro
    header('Location: login.php'); // ou cadastro.php
    exit;
}

// Obter os dados das sessões
$usuario = $_SESSION['usuario'];
$email = $_SESSION['email'];
$senha = $_SESSION['senha'];
$data_nascimento = $_SESSION['data_nascimento'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="IMG/controle-de-video-game.png">
    <title>Omena's Room</title>
</head>
<body>
  <style>
    .content {
      padding: 20px;
    }

  
  </style>
  <header class="header-index"> <i class="header-index">Omena's Room</i>
    <?php echo '<a class="cad-index" href="#">' . $_SESSION['usuario'] . '</a>'; ?> 
  </header>

    <nav class="navbar-index">
      <br>
        <a href="index.php" class="nav-link-index">Home</a>
        <a href="game.php" class="nav-link-index">Jogos</a>
        <a href="#" class="nav-link-index">Sobre o Desenvolvedor </a>
        <a href="talkus.php" class="nav-link-index">Fale Conosco</a>
      </nav>


  <center>
  <div class="content">
    <b>
    <h1>Usuário: <?php echo $usuario; ?></h1>
    <h3> E-mail: <?php echo $email; ?></h3>
    <h3>Data de Nascimento: <?php echo $data_nascimento; ?></h3>
    <h3>Senha: <?php echo $senha; ?></h3>
    </b>
  </div>
  <br><br><br><br>
  <p class="content"> <i> Lembre-se: "Carpe Diem, quam minimum credula postero!!"</i></p>
  <br><br><br><br><br><br><br><br><br><br>
  </center>
      
    <audio preload="metadata" controls loop autoplay>
       <source src="Zelda.mp3" type="audio/mp3">
    </audio>

    <footer class="footer-index" id="footer-user">
        <p class="parag-index" id="footer-user">&copy; Thiago Luiz dos Santos. Todos os Direitos Reservados</p>
        <img class="footer-img-index" src="../IMG/dev.jpeg" alt="dev-image">
      </footer>
</body>
</html>