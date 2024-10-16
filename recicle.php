<?php
header('Content-Type: text/html; charset=utf-8');

    include_once 'lib/conexao.php';
    include_once 'lib/recicle_funcoes_banco.php';

    $exec_query_videos_metais = seleciona_informacoes_videos($pdo, 1);
    if($exec_query_videos_metais->rowCount() === 0) { die('Erro ao selecionar os vídeos com metais.'); }

    $exec_query_videos_plasticos = seleciona_informacoes_videos($pdo, 2);
    if($exec_query_videos_plasticos->rowCount() === 0) { die('Erro ao selecionar os vídeos com plásticos.'); }

    $exec_query_videos_papeis = seleciona_informacoes_videos($pdo, 3);
    if($exec_query_videos_papeis->rowCount() === 0) { die('Erro ao selecionar os vídeos com papéis.'); }
    
    $exec_query_videos_vidros = seleciona_informacoes_videos($pdo, 4);
    if($exec_query_videos_vidros->rowCount() === 0) { die('Erro ao selecionar os vídeos com vidros.'); }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/LogoCarangueijo.png" type="image/x-icon">
  <title>CrabTown | Recicle</title>

  <!-- META TAG -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="CrabTown" />
  <meta property="og:image" content="image" />
  <meta property="og:description" content="CrabTown" />
  <meta property="og:site_name" content="CrabTown" />

  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="css/recicle.css">

  <!-- JavaScript -->
  <script src="js/scripts.js" defer></script>
  <script src="js/recicle.js?v=<?php echo time()?>" defer></script>
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

  <main>
    <!-- Título da página -->
    <h1>Como reutilizar meu lixo o meu lixo?</h1>

    <!-- Section Metais -->
    <section class="materiasReciclaveis">
      <div class="materialReciclavel">
        <h2 id="metais">METAIS</h2>
      </div>

      <!-- CARROSSEL -->
      <!-- Carrossel - Botão esquerda -->
      <div class="btn-left" onclick="direcao(1)">
        <i class="bi bi-arrow-left-circle-fill"></i>
      </div>

      <!-- Carrossel - Conteúdo -->
      <div class="contentSlide" id="content">
        <?php $num = 1; ?>
        <?php foreach ($exec_query_videos_metais as $video_metal) { ?>
        <div class="block">
          <img src="<?php echo $video_metal['caminho_imagem']?>" alt="" class="block-Img">

          <h3 class="block-tituloProjeto"><?php echo $video_metal['titulo'] ?></h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTOR(A):</strong><?php echo trim($video_metal['nome_criador']) ?></span>

          <div class="block-acessarIdentifica">
            <button class="acessar-amarelo" id="btnMetais<?php echo $num?>">ACESSAR</button>
            <span class="identificador amarelo"></span>
          </div>
        </div>
        <?php $num++;?>
        <?php }?>
      </div>

      <!-- Carrossel - Botão direita -->
      <div class="btn-right" onclick="direcao(2)">
        <i class="bi bi-arrow-right-circle-fill"></i>
      </div>
    </section>

    <!-- Section Plástico -->
    <section class="materiasReciclaveis">
      <div class="materialReciclavel">
        <h2 id="plastico">PLÁSTICO</h2>
      </div>

      <!-- CARROSSEL -->
      <!-- Carrossel - Botão esquerda -->
      <div class="btn-left" onclick="carrosselPlastico(1)">
        <i class="bi bi-arrow-left-circle-fill"></i>
      </div>

      <!-- Carrossel - Conteúdo -->
      <div class="contentSlide" id="carrosselPlastico">
        <?php $num = 1; ?>
        <?php foreach ($exec_query_videos_plasticos as $video_plastico) { ?>
        <div class="block">
          <img src="<?php echo $video_plastico['caminho_imagem']?>" alt="" class="block-Img">

          <h3 class="block-tituloProjeto"><?php echo $video_plastico['titulo'] ?></h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTOR(A):</strong><?php echo trim($video_plastico['nome_criador']) ?></span>

          <div class="block-acessarIdentifica">
            <button class="acessar-vermelho" id="btnPlastico<?php echo $num; ?>">ACESSAR</button>
            <span class="identificador vermelho"></span>
          </div>
        </div>
        <?php $num++;?>
        <?php }?>
      </div>

      <!-- Carrossel - Botão direita -->
      <div class="btn-right" onclick="carrosselPlastico(2)">
        <i class="bi bi-arrow-right-circle-fill"></i>
      </div>
    </section>

    <!-- Section Papéis -->
    <section class="materiasReciclaveis">
      <div class="materialReciclavel">
        <h2 id="papeis">PAPÉIS</h2>
      </div>

      <!-- CARROSSEL -->
      <!-- Carrossel - Botão esquerda -->
      <div class="btn-left" onclick="carrosselPapeis(1)">
        <i class="bi bi-arrow-left-circle-fill"></i>
      </div>

      <!-- Carrossel - Conteúdo -->
      <div class="contentSlide" id="carrosselPapeis">
        <?php $num = 1; ?>
        <?php foreach ($exec_query_videos_papeis as $video_papel) { ?>
        <div class="block">
          <img src="<?php echo $video_papel['caminho_imagem'] ?>" alt="" class="block-Img">

          <h3 class="block-tituloProjeto"><?php echo $video_papel['titulo']?></h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTOR(A):</strong><?php echo trim($video_papel['nome_criador'])?></span>

          <div class="block-acessarIdentifica">
            <button class="acessar-azul" id="btnPapeis<?php echo $num; ?>">ACESSAR</button>
            <span class="identificador azul"></span>
          </div>
        </div>
        <?php $num++; ?>
        <?php } ?>
      </div>

      <!-- Carrossel - Botão direita -->
      <div class="btn-right" onclick="carrosselPapeis(2)">
        <i class="bi bi-arrow-right-circle-fill"></i>
      </div>
    </section>

    <!-- Section Vidro -->
    <section class="materiasReciclaveis">
      <div class="materialReciclavel">
        <h2 id="vidro">VIDRO</h2>
      </div>

      <!-- CARROSSEL -->
      <!-- Carrossel - Botão esquerda -->
      <div class="btn-left" onclick="carrosselVidro(1)">
        <i class="bi bi-arrow-left-circle-fill"></i>
      </div>

      <!-- Carrossel - Conteúdo -->
      <div class="contentSlide" id="carrosselVidro">
        <?php $num = 1; ?>
        <?php foreach ($exec_query_videos_vidros as $video_vidro) { ?>
        <div class="block">
          <img src="<?php echo $video_vidro['caminho_imagem']?>" alt="" class="block-Img">

          <h3 class="block-tituloProjeto"><?php echo $video_vidro['titulo']?></h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTOR(A):</strong><?php echo trim($video_vidro['nome_criador']) ?></span>

          <div class="block-acessarIdentifica">
            <button class="acessar-verde" id="btnVidro<?php echo $num; ?>">ACESSAR</button>
            <span class="identificador verde"></span>
          </div>
        </div>
        <?php $num++; ?>
        <?php } ?>
      </div>

      <!-- Carrossel - Botão direita -->
      <div class="btn-right" onclick="carrosselVidro(2)">
        <i class="bi bi-arrow-right-circle-fill"></i>
      </div>
    </section>

    <!-- Section Contato -->
    <section class="contato">
      <h2>Quer entrar em contato?</h2>
      <form action="lib/contato_envio_email.php" method="POST">
        <h3>Nos envie um e-mail</h3>
        <div class="formCampos">
          <!-- nome -->
          <input type="text" name="nome" placeholder="Seu nome aqui" required>

          <!-- e-mail -->
          <input type="text" name="email" placeholder="Seu e-mail aqui" required>

          <!-- assunto -->
          <input type="text" name="assunto" placeholder="Assunto do e-mail" required>

          <!-- mensagem -->
          <textarea rows="7" style="resize: none" maxlength="500" name="mensagem" placeholder="Digite aqui sua mensagem"
            required></textarea>
        </div>
        <button type="submit" name="enviar">ENVIAR</button>
        <input type="hidden" name="_subject" value="Novo Contato!">
        <!-- Isso é para quando enviar a mensagem, aparecer como título da mensagem "Novo Contato!" -->
        <input type="hidden" name="_honey" style="display: none;">
        <!-- Isso é para evitar que os enviados sejam enviados como spam -->
        <input type="hidden" name="_captcha" value="false">
        <!-- Isso é para desabilitar o captcha após o envio do formulário  -->
      </form>
    </section>
  </main>

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