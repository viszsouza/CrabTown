<?php
header('Content-Type: text/html; charset=utf-8');

require_once 'lib/conexao.php';
require_once 'lib/index_funcoes_banco.php';

$exec_query_artigos = selecionaUltimosTresArtigos($pdo);
if ($exec_query_artigos->rowCount() === 0) { die('Erro ao selecionar artigos do banco de dados.'); }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/LogoCarangueijo.png" type="image/x-icon">
  <title>CrabTown</title>

  <!-- META TAG -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="CrabTown" />
  <meta property="og:image" content="image" />
  <meta property="og:description" content="CrabTown" />
  <meta property="og:site_name" content="CrabTown" />

  <link rel="stylesheet" href="css/index.css?v=<?php echo time(); ?>">
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

  <!-- Inicio -->
  <section class="inicio">

    <div class="container-inicio hidden">
      <h1>Recicle Hoje, Construa o Futuro de Amanhã</h1>
      <p>Pequenas Ações, Grandes Impactos: Junte-se ao Movimento que está Transformando o Mundo.</p>

      <div class="buttons-inicio">
        <a href="mapa.html"><button>Vamos começar</button></a>
        <a href="recicle.php"><button>Saiba mais</button></a>
      </div>
    </div>

  </section>

  <!-- Mapa -->
  <section class="mapa">

    <div class="container-mapa hidden">

      <div class="container-mapa-img hidden">
        <img src="images/mapaHome.png" alt="Imagem mapa Brasil">
      </div>

      <div class="container-mapa-textos hidden">
        <h1>Onde posso reciclar meu lixo?</h1>
        <p> A reciclagem é um processo simples que começa em casa. Saiba como você pode separar seus resíduos,
          reduzir o desperdício e contribuir para um planeta mais saudável.<br><br>Descrubra os locais na sua
          região para descartar seus reciclaveis!</p>

        <div class="buttons-mapa hidden">
          <a href="mapa.html"><button>Saiba mais</button></a>
        </div>
      </div>
    </div>

  </section>

  <!-- Categorias -->
  <section class="mapa">

    <div class="container-mapa hidden">

      <div class="container-mapa-textos hidden">
        <h1>Categoria dos resíduos</h1>
        <p> Essas categorias ajudam a organizar e gerenciar os resíduos de forma eficaz, promovendo a
          reciclagem, compostagem e descarte seguro. Cada categoria é identificada por cores e nomes
          específicos para facilitar a separação correta dos materiais e garantir que sejam encaminhados para
          os processos adequados.</p>

        <div class="buttons-mapa hidden">
          <a href="classificacao.html"><button>Saiba mais</button></a>
        </div>
      </div>

      <div class="container-mapa-img hidden">
        <img src="images/pessoasHome.png" alt="Imagem pessoas com lixos">
      </div>

    </div>

  </section>

  <!-- Notícias -->
  <section class="noticias">

    <div class="noticias-inicio">
      <h1>Ultimas noticias</h1>
      <p>Fique por dentro de todas as ultimas noticias sobre reciclagem em Pernambuco!</p>
    </div>

    <div class="container-noticias hidden">

      <?php $i = 1;
      foreach($exec_query_artigos as $artigo) {
        ?>
      <div class="item-noticia hidden">
        <img src="<?php echo $artigo['caminho_imagem']?>" alt="Imagens da notícia">

        <div class="textos-noticia">
          <h1>
            <?php 
            echo "Notícia $i"; 
            $i++;
          ?>
          </h1>
          <p><?php echo mb_strimwidth($artigo['subtitulo'], 0, 32, "..."); ?></p>

          <div class="buttons-mapa">
            <a href="artigo.php?id=<?php echo $artigo['id_artigo']; ?>"><button>Saiba mais</button></a>
          </div>
        </div>
      </div>
      <?php }?>

    </div>

  </section>

  <!-- Contato -->
  <section class="contato">
    <h1 class="hidden">Quer entrar em contato?</h1>

    <div class="formulario hidden">

      <form action="lib/contato_envio_email.php" method="post">
        <h1>Preencha o formulário</h1>

        <div class="perguntas hidden">
          <input type="text" placeholder="Nome" required class="hidden" name="nome">
          <input type="text" placeholder="Sobrenome" required class="hidden" name="sobrenome">
          <input type="text" placeholder="E-mail" required class="hidden" name="email">
          <input type="text" placeholder="Telefone" required class="hidden" name="telefone">
          <input type="text" placeholder="Assunto" required class="hidden" name="assunto">
          <input type="text" placeholder="Menssagem" required class="hidden" name="mensagem">
        </div>


        <a class="hidden"><button type="submit" name="enviar">Enviar</button></a>
      </form>
    </div>

  </section>

  <!-- Sobre -->
  <section class="sobre">

    <div class="sobre-inicio">
      <h1>Conheça a CrabTown</h1>
      <p>Na CrabTown, nós acreditamos que o lixo é um erro de design. Buscamos constantemente novas soluções e
        diferentes usos para os resíduos há mais 20 anos. </p>
    </div>

    <div class="container-sobre hidden">

      <div class="item-sobre hidden">
        <img src="images/imagemMangue.png" alt="">

        <div class="textos-sobre">
          <h1>Sobre nós</h1>
          <p>Resumo notícia</p>
        </div>
      </div>

      <div class="item-sobre hidden">
        <img src="images/imagemMangue.png" alt="">

        <div class="textos-sobre">
          <h1>Nosso impacto</h1>
          <p>Resumo notícia</p>
        </div>
      </div>

      <div class="item-sobre hidden">
        <img src="images/imagemMangue.png" alt="">

        <div class="textos-sobre">
          <h1>Como ajudamos</h1>
          <p>Resumo notícia</p>
        </div>
      </div>

    </div>

  </section>

  <!-- Artigos -->
  <section class="artigo-mangue">

    <div class="container-artigo-mangue hidden">
      <h1>Problemas da falta de reciclagem</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
    </div>

    <div class="container-info-mangue hidden">

      <div class="container-textos-mangue hidden">

        <div class="container-item-mangue hidden">
          <h1>Problema</h1>
          <p>Problema</p>
        </div>

        <div class="container-item-mangue hidden">
          <h1>Problema</h1>
          <p>Problema</p>
        </div>

        <div class="container-item-mangue hidden">
          <h1>Problema</h1>
          <p>Problema</p>
        </div>

      </div>

      <div class="container-imagem-mangue hidden">
        <img src="images/imagemMangue.png" alt="Imagens Sobre os Mangues">
        <p>O Recife cresceu em uma planície costeira na qual o solo predominante era de manguezal. Foto: Peu
          Ricardo/DP.</p>
      </div>

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
        <!-- Instagram 
        <a href="https://www.instagram.com/visz.dev/" target="_blank">
          <img src="images/FeInstagram.png" class="footer-icon" alt="">
        </a> -->
      </div>
    </section>
  </footer>

</body>

</html>