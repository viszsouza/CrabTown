<?php 
header('Content-Type: text/html; charset=utf-8');

    require_once "./lib/class_pergunta.php";

    session_start();

    function avaliar_alternativa($alternativa, $alternativa_escolhida, $resposta_certa): string {
        if ($alternativa === $resposta_certa) {
            return "certa";
        } else if ($alternativa === $alternativa_escolhida) {
            return "errada";
        } else {
            return "";
        }
    }

    if (!isset($_SESSION["quiz-concluido"])) {

        header("Location: quiz.php");

    }

    $lista_de_perguntas = unserialize($_SESSION["perguntas"]);
    $lista_de_respostas = $_SESSION["alternativas-escolhidas"];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/LogoCarangueijo.png" type="image/x-icon">
  <title>CrabTown | Quiz Respostas</title>

  <!-- META TAG -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="CrabTown" />
  <meta property="og:image" content="image" />
  <meta property="og:description" content="CrabTown" />
  <meta property="og:site_name" content="CrabTown" />

  <link rel="stylesheet" href="css/quizRespostas.css">
  <script src="js/scripts.js" defer></script>
</head>

<body>
  <!-- Navbar -->
  <nav class="nav">
        <a href="index.php" class="logo"><img src="images/LogoVertical.png" alt="Logo CrabTown"></a>

        <button class="hamburguer"></button>

        <ul class="nav-list">
            <li><a href="recicle.php" class="roxo">Recicle</a></li>
            <li><a href="mapa.html" class="roxo">Mapa</a></li>
            <li><a href="classificacao.html" class="roxo">Classificações</a></li>
            <li><a href="noticias.php" class="roxo">Notícias</a></li>
            <li><a href="https://colab.research.google.com/drive/1LSmD46PSEJAgoQfNN8NhVhmvbYju7xPR#scrollTo=zE6sgclKypoU" class="roxo" target="_blank">Dashboard</a></li>
            <li><a href="equipe.html" class="roxo">Equipe</a></li>
            <li><a href="quiz.php" class="roxo">Quiz</a></li>
        </ul>
    </nav>

  <!-- Quiz Container -->
  <div class="quiz-container">
    <h1>Quiz CrabTown | Respostas</h1>

    <!-- Pergunta e Respostas -->
    <div class="quiz-content">
      <?php foreach ($lista_de_perguntas as $indice => $pergunta):?>
      <!-- Pergunta -->
      <div class="question-container">
        <p id="question"><?=$pergunta->get_texto()?></p>


      </div>

      <!-- Respostas -->
      <form action="" class="answers">
        <div class="resposta <?=avaliar_alternativa(1, $lista_de_respostas[$indice], $pergunta->get_resposta())?>">
          <input type="radio" name="answer" id="A"> <label for="A"><?=$pergunta->get_alternativa_1()?></label>
        </div>

        <div class="resposta <?=avaliar_alternativa(2, $lista_de_respostas[$indice], $pergunta->get_resposta())?>">
          <input type="radio" name="answer" id="B"> <label for="B"><?=$pergunta->get_alternativa_2()?></label>
        </div>

        <div class="resposta <?=avaliar_alternativa(3, $lista_de_respostas[$indice], $pergunta->get_resposta())?>">
          <input type="radio" name="answer" id="C"> <label for="C"><?=$pergunta->get_alternativa_3()?></label>
        </div>

        <div class="resposta <?=avaliar_alternativa(4, $lista_de_respostas[$indice], $pergunta->get_resposta())?>">
          <input type="radio" name="answer" id="D"> <label for="D"><?=$pergunta->get_alternativa_4()?></label>
        </div>

      </form>
      <?php endforeach; ?>

      <!-- Botões -->
      <div class="buttons">
        <!-- Botão de confirmar -->
        <a href="quiz.php"><button id="confirm-btn">Reiniciar Quiz</button></a>

        <a href="noticias.php"><button id="confirm-btn">Artigos</button></a>

        <a href="index.php"><button id="confirm-btn">Página inicial</button></a>

      </div>

    </div>
  </div>

  <!-- Footer -->
  <footer>
    <!-- Primeira parte -->
    <section class="footer-sec">
      <div class="footer-content">
        <h3 class="footer-h3">Contato</h3>

        <div>
          <p class="footer-info">Instagram: @crabtown</p>
          <p class="footer-info">WhatsApp: (81) 9 0000-0000</p>
          <p class="footer-info">E-mail: contatocrabtown@gmail.com</p>
        </div>
      </div>
      <div class="footer-content">
        <h3 class="footer-h3">Localização</h3>

        <div>
          <p class="footer-info">Recife, Pernambuco</p>
          <!-- <p class="footer-info">CEP: 52050-280</p> -->
        </div>
      </div>
    </section>

    <!-- Linha divisória -->
    <div id="footer-linha-divisoria"></div>

    <!-- Segunda parte -->
    <section class="footer-sec" id="footer-sec2">
      <a href="https://www.instagram.com/visz.dev/" target="_blank">
        <p class="footer-copy">&copy; 2024 Visz, Inc.</p>
      </a>

      <div class="footer-redes-sociais">
        <!-- Instagram 
        <a href="https://www.instagram.com/visz.dev/" target="_blank">
          <img src="images/FeInstagram.png" class="footer-icon" alt="">
        </a> -->
      </div>
    </section>
  </footer>
</body>

</html>