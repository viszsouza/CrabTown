<?php
header('Content-Type: text/html; charset=utf-8');

    session_start();
    if (isset($_SESSION["pontuacao"]) && $_SESSION["pergunta-atual-index"] >= 10) {

        $nota = $_SESSION["pontuacao"];
        $_SESSION["quiz-concluido"] = true;

    } else {

        header("Location: ./quiz.php");

    }

    $classificacao = match (true) {
        $nota <= 3 => "Bronze",
        $nota <= 7 => "Prata",
        $nota > 7 => "Ouro"
    };

    $imagem = strtolower($classificacao) . ".png";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/LogoCarangueijo.png" type="image/x-icon">
  <title>CrabTown | Quiz Nota</title>

  <!-- META TAG -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="CrabTown" />
  <meta property="og:image" content="image" />
  <meta property="og:description" content="CrabTown" />
  <meta property="og:site_name" content="CrabTown" />

  <link rel="stylesheet" href="css/quizNota.css">
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
      <li><a href="dashboard.html" class="roxo">Dashboard</a></li>
      <li><a href="equipe.html" class="roxo">Equipe</a></li>
      <li><a href="quiz.php" class="roxo">Quiz</a></li>
    </ul>
  </nav>

  <!-- Quiz Container -->
  <div class="quiz-container">
    <h1>Quiz CrabTown | Nota</h1>

    <!-- Pergunta e Respostas -->
    <div class="quiz-content">
      <!-- Pergunta -->
      <div class="question-container">
        <p id="question">Parabens por ter completado nosso quiz! Sua nota foi de <?=$nota?> e sua classificação foi
          <?=$classificacao?>!</p>
      </div>

      <!-- Respostas -->
      <div>
        <img src="<?=$imagem?>" alt="A imagem de uma medalha de <?=$classificacao?>">
      </div>

      <!-- Botões -->
      <div class="buttons">
        <!-- Botão de confirmar -->
        <a href="./quiz.php"><button id="confirm-btn">Reiniciar Quiz</button></a>

        <a href=""><button id="confirm-btn">Artigos</button></a>

        <a href="quizRespostas.php"><button id="confirm-btn">Ver respostas</button></a>

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
        <!-- Instagram -->
        <a href="https://www.instagram.com/visz.dev/" target="_blank">
          <img src="images/FeInstagram.png" class="footer-icon" alt="">
        </a>
      </div>
    </section>
  </footer>
</body>

</html>