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
    <header class="header-index"> 
      <a class="cad-index" href="cad.php"> Cadastrar-se </a>
      <i class="header-index">Omena's Room</i> 
      <?php echo '<a class="cad-index" href="user.php">' . $_SESSION['usuario'] . '</a>'; ?>
    </header>

    <nav class="navbar-index">
        <a href="#" class="nav-link-index">Home</a>
        <a href="game.php" class="nav-link-index">Jogos</a>
        <a href="dev.php" class="nav-link-index">Sobre o Desenvolvedor </a>
        <a href="talkus.php" class="nav-link-index">Fale Conosco</a>
      </nav>


      <p class="paragra-index"> 
        <strong id="s-index">S</strong>eja-Bem-vindo a Omena's Room, um salão de jogos para se divertir, aqui você vai conseguir jogar de forma gratuita,
        maravilhoso!
        Nossos jogos são simples, implementados de outro site, usando o processamento deles, jogos autorais são complexos e requerem muito tempo
        de desenvolvimento, o site utilizado em questão é FAMOBI:
      </p>
      <br>
        <center>
          <a href="https://games.famobi.com/">
            <img src="../IMG/famobi.png" width = "1200px" height="600px">
          </a>
        </center> 
        <br>
        <br>
          <p  class="paragra-index">
            São jogos para todos os gostos, experimente alguns na aba <a class= 'nav-link-index' id="jogar-index" href="game.html"> Jogos </a>
          </p>
        <br>
        <br>

        <div class="image-container-index">
          <div class="image-index">
            <img src="../IMG/famobiWebGL.png" alt="Imagem-1">
          </div>
          <div class="image-index">
            <img src="../IMG/famobiMultiplayer.png" alt="Imagem-2">
          </div>
          <div class="image-index">
            <img src="../IMG/famobiMatch.png" alt="Imagem-3">
          </div>
        </div>
        
        <br>
        
        <p  class="paragra-index">
          Venha e aproveite todas as possibilidades da Omena's Room 
       </p>

       <br>

        <a href="game.html">
          <img src="../IMG/gameDev.png" width="1348px" height="550px">
        </a>
    
        <br>
        <br>
        <br>

        <p  class="paragra-index"> Deixe o o seu feedback: </p>
        <center>
          <form>
            <div class="form-input-talkus" id="form-input-index">
              <label for="message"></label>
              <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="submit-button-talkus" id="submit-button-index">Enviar</button>
          </form>
        </center>
            <audio preload="metadata" controls loop autoplay>
       <source src="Lavander.mp3" type="audio/mp3">
    </audio>

    <footer class="footer-index">
      <p class="parag-index">&copy; Thiago Luiz dos Santos. Todos os Direitos Reservados</p>
      <img class="footer-img-index" src="../IMG/dev.jpeg" alt="dev-image">
    </footer>
    
</body>
</html>
