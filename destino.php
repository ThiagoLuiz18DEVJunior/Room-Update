<?php
session_start();
?>

<!DOCTYPE html>
<html>
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
    <?php echo '<a class="cad-index" href="user.php">' . $_SESSION['usuario'] . '</a>'; ?>   </header>
    <nav class="navbar-index">
        <a href="index.php" class="nav-link-index">Home</a>
        <a href="game.php" class="nav-link-index">Jogos</a>
        <a href="#" class="nav-link-index">Sobre o Desenvolvedor </a>
        <a href="talkus.php" class="nav-link-index">Fale Conosco</a>
      </nav>

    <?php
    
    // Verificar se a mensagem de sucesso está definida na sessão
    if (isset($_SESSION['success_message'])) {
        // Exibir a mensagem de sucesso
        echo '<br><br><br><center><h2>Mensagem enviada com sucesso, agradeço ao feedback!!</h2> </center>';
        
        // Limpar a variável de sessão
        unset($_SESSION['success_message']);
    } else {
        echo '<br><br><br><center><h2> Oops!, tivemos um erro e sua mensagem não foi enviada como o esperado, :/</h2></center>';
    }

      
    ?>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  
    <audio preload="metadata" controls loop autoplay>
       <source src="Pokemon.mp3" type="audio/mp3">
    </audio>
  
 <footer class="footer-index">
        <p class="parag-index">&copy; Thiago Luiz dos Santos. Todos os Direitos Reservados</p>
        <img class="footer-img-index" src="../IMG/dev.jpeg" alt="dev-image">
      </footer>
</body>
</html>
