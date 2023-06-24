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
        <a href="#" class="nav-link-index">Jogos</a>
        <a href="dev.php" class="nav-link-index">Sobre o Desenvolvedor </a>
        <a href="talkus.php" class="nav-link-index">Fale Conosco</a>
      </nav>

      <center> <h2> Divirta-se </h2> 

      <div class="navbar-games">
        <button class="filter-btn active" onclick="filterItems('all')">Todos</button>
        <button class="filter-btn" onclick="filterItems('item-action')"> Ação </button>
        <button class="filter-btn" onclick="filterItems('item-cards')"> Cartas </button>
        <button class="filter-btn" onclick="filterItems('item-car')"> Corrida </button>
        <button class="filter-btn" onclick="filterItems('item-puzzle')"> Enigmas </button>
        <button class="filter-btn" onclick="filterItems('item-est')"> Estratégia </button>
        <button class="filter-btn" onclick="filterItems('item-coop')"> Multiplayer </button>
        <button class="filter-btn" onclick="filterItems('item-rpg')"> RPG </button>
        <button class="filter-btn" onclick="filterItems('item-platform')"> Plataforma </button>
    </div>
  </center>
  

    
    <script>
        function filterItems(className) {
            var items = document.getElementsByClassName('item');
            var filterBtns = document.getElementsByClassName('filter-btn');
    
            // Remover a classe 'active' de todos os botões
            for (var i = 0; i < filterBtns.length; i++) {
                filterBtns[i].classList.remove('active');
            }
    
            // Mostrar apenas os elementos com a classe selecionada e adicionar a classe 'active' ao botão
            if (className === 'all') {
                for (var i = 0; i < items.length; i++) {
                    items[i].style.display = 'inline-block';
                }
                document.querySelector('.filter-btn:first-child').classList.add('active');
            } else {
                for (var i = 0; i < items.length; i++) {
                    if (items[i].classList.contains(className)) {
                        items[i].style.display = 'inline-block';
                    } else {
                        items[i].style.display = 'none';
                    }
                }
                document.querySelector('.filter-btn[data-class="' + className + '"]').classList.add('active');
            }
        }
    </script>


     <iframe data-jogo="Nome do Jogo" class="item item-cards" src="https://play.famobi.com/matching-card-heroes" title="Matching Card Heroes" width="220" height="300" frameborder="0" allowfullscreen></iframe> 
     
     <iframe class="item item-puzzle" src="https://play.famobi.com/fruit-ninja" title="Fruit Ninja" width="220" height="300" frameborder="0" allowfullscreen></iframe>
     
     <iframe class="item item-action" src="https://play.famobi.com/the-little-giant" title="The Little Giant" width="220" height="300" frameborder="0" allowfullscreen></iframe>
     
     <iframe class="item item-cards" src="https://play.famobi.com/pirate-cards" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-cards" src="https://play.famobi.com/mafia-poker" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-cards" src="https://play.famobi.com/duo-cards" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-cards" src="https://play.famobi.com/blackjack-bet" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-action" src="https://play.famobi.com/jetpack-joyride" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-coop" src="https://play.famobi.com/defly" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-platform" src="https://play.famobi.com/knightower" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-car" src="https://play.famobi.com/dont-crash" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-est"src="https://play.famobi.com/cubito" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-car" src="https://play.famobi.com/high-hills" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-car" src="https://play.famobi.com/rival-rush" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-car" src="https://play.famobi.com/2cars" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-car" src="https://play.famobi.com/turbotastic" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-puzzle" src="https://play.famobi.com/find-in-mind" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-puzzle" src="https://play.famobi.com/maze" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-est" src="https://play.famobi.com/3d-chess" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-puzzle" src="https://play.famobi.com/jewel-duel" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-action" src="https://play.famobi.com/boat-battles" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-action" src="https://play.famobi.com/birdy-rush" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-rpg" src="https://play.famobi.com/vikings-vs-monsters" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-est" src="https://play.famobi.com/sea-battleship" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-action" src="https://play.famobi.com/spect" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-est" src="https://play.famobi.com/tiny-rifles" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-rpg" src="https://play.famobi.com/dragons-trail" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-rpg" src="https://play.famobi.com/pocket-rpg" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-action" src="https://play.famobi.com/angry-necromancer" width="220" height="300" frameborder="0" allowfullscreen></iframe>

    <iframe class="item item-est"  src="https://play.famobi.com/burger-maker" width="220" height="300" frameborder="0" allowfullscreen></iframe>
   

  <audio preload="metadata" controls loop autoplay>
      <source src="Zelda.mp3" type="audio/mp3">
    </audio>
  
      <footer class="footer-index">
        <p class="parag-index">&copy; Thiago Luiz dos Santos. Todos os Direitos Reservados</p>
        <img class="footer-img-index" src="../IMG/dev.jpeg" alt="dev-image">
      </footer>
</body>
</html>