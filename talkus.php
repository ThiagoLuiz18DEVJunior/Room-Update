<?php
session_start();
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
  <header class="header-index"> <i class="header-index">Omena's Room</i> 
    <?php echo '<a class="cad-index" href="user.php">' . $_SESSION['usuario'] . '</a>'; ?> 
  </header>

  <nav class="navbar-index">
    <a href="index.php" class="nav-link-index">Home</a>
    <a href="game.php" class="nav-link-index">Jogos</a>
    <a href="dev.php" class="nav-link-index">Sobre o Desenvolvimento</a>
    <a href="#" class="nav-link-index">Fale Conosco</a>
  </nav>
 
  <div class="container-talkus">
    <div class="sidebar-talkus">
      <h1 class="page-title-talkus">Fale Conosco</h1> <br>
      <p class="contact-info-talkus">Telefone: <br> (11) 1234-5678</p>
      <p class="contact-info-talkus">E-mail: <br> thiago.luiz@aluno.ifsertao-pe.edu.br</p>
      <p class="contact-info-talkus">GitHub: <br> <a class="link-talkus" href="https://github.com/ThiagoLuiz18DEVJunior" target="_blank"> https://github.com/ThiagoLuiz18DEVJunior </a></p>
      <p class="contact-info-talkus">Linkedin: <br> <a class="link-talkus" href="https://www.linkedin.com/in/thiago-santos-b79679268/" target="_blank">https://www.linkedin.com/in/thiago-santos-b79679268/</a></p>
      <p class="contact-info-talkus">Lattes: <br> <a class="link-talkus" href="https://lattes.cnpq.br/6935560056501801" target="_blank">https://lattes.cnpq.br/6935560056501801</a></p>
    </div>

    <!DOCTYPE html>
<html>
<head>
  <title>Formulário de Contato</title>
</head>
<body>
  <div class="content-talkus">
    <div class="form-container-talkus">
      <form method="POST" action="enviar_email.php">
        <div class="form-input-talkus">
          <label for="name">Nome:</label>
          <input type="text" id="name" name="name" autocomplete="off" required>
        </div>

        <div class="form-input-talkus">
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" autocomplete="off" required>
        </div>

        <div class="form-input-talkus">
          <label for="message">Mensagem:</label>
          <textarea id="message" name="message" required></textarea>
        </div>

        <button type="submit" class="submit-button-talkus">Enviar</button>
      </form>
    </div>
  </div>
</body>
</html>

      </div>
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