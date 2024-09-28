<?php
require_once 'lib/conexao.php';
require_once 'lib/artigo_funcoes_banco.php';
require_once 'lib/funcoes_uteis.php';

    if(isset($_GET['id'])) {
        $id = intval($_GET['id']);

        $exec_query_artigo = selecionaArtigoPeloId($id, $pdo);
    } else {
        die('É preciso passar um parâmetro para o ID.');
    }

    if ($exec_query_artigo->rowCount() === 0) { die('Erro ao selecionar artigos do banco de dados.'); }

    $artigo = $exec_query_artigo->fetch(PDO::FETCH_ASSOC);
    $bandas_texto = dividirTextoComUltimaBandaCompleta($artigo['conteudo'], 3)
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/LogoCarangueijo.png" type="image/x-icon">
  <title>CrabTown | Notícias</title>

  <!-- META TAG -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="CrabTown" />
  <meta property="og:image" content="image" />
  <meta property="og:description" content="CrabTown" />
  <meta property="og:site_name" content="CrabTown" />

  <link rel="stylesheet" href="css/artigo.css">
  <script src="js/scripts.js" defer></script>
</head>

<body>
  <!-- Navbar -->
  <nav class="nav">
    <a href="index.html" class="logo"><img src="/images/LogoVertical.png" alt="Logo CrabTown"></a>

    <button class="hamburguer"></button>

    <ul class="nav-list">
      <li><a href="recicle.html" class="roxo">Recicle</a></li>
      <li><a href="mapa.html" class="roxo">Mapa</a></li>
      <li><a href="classificacao.html" class="roxo">Classificações</a></li>
      <li><a href="noticias.php" class="roxo">Notícias</a></li>
      <li><a href="dashboard.html" class="roxo">Dashboard</a></li>
      <li><a href="equipe.html" class="roxo">Equipe</a></li>
      <li><a href="quiz.html" class="roxo">Quiz</a></li>
    </ul>
  </nav>

  <!-- Artigos -->
  <section class="artigo-mangue">

    <div class="migalhas">
      <p>Notícias >>> <?php echo $artigo['titulo']?></p>
    </div>

    <div class="container-artigo-mangue hidden">
      <h1><?php echo $artigo['titulo']?></h1>
      <p></p>
    </div>

    <div class="container-info-mangue hidden">

      <div class="container-textos-mangue hidden">

        <div class="container-item-mangue hidden">
          <p><?php echo $bandas_texto[0] ?></p>
        </div>

      </div>

      <div class="container-imagem-mangue hidden">
        <img src="<?php echo $artigo['caminho_imagem'] ?>" alt="Imagem Sobre a notícia">
        <p>O Recife cresceu em uma planície costeira na qual o solo predominante era de manguezal. Foto: Peu Ricardo/DP.
        </p>
      </div>

    </div>

    <div class="container-textos-artigo hidden">
      <p> <?php echo $bandas_texto[1] ?></p>
    </div>

    <div class="container-textos-artigo hidden">
      <p><?php echo $bandas_texto[2]  ?></p>
    </div>

  </section>

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