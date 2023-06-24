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
  <style>

    p {
      padding:0px 10px;
    }
    .parag-dev {
      padding:0px 20px;
    }
  </style>
  <header class="header-index"> <i class="header-index">Omena's Room</i>
    <?php echo '<a class="cad-index" href="user.php">' . $_SESSION['usuario'] . '</a>'; ?>   </header>
    <nav class="navbar-index">
        <a href="index.php" class="nav-link-index">Home</a>
        <a href="game.php" class="nav-link-index">Jogos</a>
        <a href="#" class="nav-link-index">Sobre o Desenvolvedor </a>
        <a href="talkus.php" class="nav-link-index">Fale Conosco</a>
      </nav>

  <br>
          <p class="parag-dev">Me chamo Thiago Luiz dos Santos, sou o desenvolvedor dessa aplicação, atualmente sou estudante do curso de GTI pelo IFSertão Campus Floresta-PE, gostaria de contar um 
          </p>
  <p>
   pouco de quem sou e do que gosto de fazer, sou fascinado pela técnologia e as artes, e encontrei na programação uma mescla dessas duas paixões, com o uso dela posso conquistar cada vez mais espaço no mercado de trabalho e na divulgação da minha escrita, digamos que é um alimento para o bolso e para a alma. 
  </p>
  <br>
    <p class="parag-dev"> Infelizmente ainda não tenho muitos trabalhos publicados, nem muito saber ou reconhecimento, vai ser algo a ser adquirido com o tempo, mas enquanto o amanhã não  
    </p>
  <p>
     chega, não vou ficar aqui a encher muitas linhas, prefiro mostrar a vós a minha escrita: 
  </p>
  <br><br>
  <center>
    <pre> 
<b> Afago Célere </b>

Me envolva em seu afago,
Sinto-me como singelo rato,
Tu me és o gato,
Sua boca, seus lábios,
Suas palavras são facas, hábil,
Ao deleitar-me em seus seios fartos 
De amor, de ódio, de escarro. 

Sente por mim asco
Me embriago no álcool
De fino breu impacto
Me deleita em seus abraços,
E eu, animalesco, de porte alto,
Me torno mais uma vez rato,
Dessa vez serei devorado.

Como se a minha vida só tivesse sentido desse lado,
Reviro-me a fugir do escarrar do nosso pacto
Mesmo selado no âmago do espaço
Como as estrelas de finesse em arco 
É lindo, mas flagelado
Como se o rumo fosse andar embriagado 
Meu peito já não cabe o ego exacerbado.

Ah, se fôssemos conectados, selados,
A mão do desejo em ouro ou prata anelados,
Que o seu corpo de fino trato,
Me pertença ao longo do ato,
Não me escaparás, serás cativo,
Se ficar será devorado, se correr condenado,
No tribunal da mente assinar contrato,
Ajoelha-ti e reza para que não sejas maltratado.



      
    </pre>
  </center>
    
  
      
    <audio preload="metadata" controls loop autoplay>
       <source src="Pokemon.mp3" type="audio/mp3">
    </audio>
  
 <footer class="footer-index">
        <p class="parag-index">&copy; Thiago Luiz dos Santos. Todos os Direitos Reservados</p>
        <img class="footer-img-index" src="../IMG/dev.jpeg" alt="dev-image">
      </footer>
</body>
</html>