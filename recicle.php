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
  <script src="js/recicle.js" defer></script>
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
      <li><a href="quiz.html" class="roxo">Quiz</a></li>
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
        <div class="block">
          <img src="images/metaisDeposito.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando uma lata num objeto para guardar itens</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Ateliê Sagitário</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-amarelo" id="btnMetais1">ACESSAR</button>
            <span class="identificador amarelo"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/metaisLixeira.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando uma lata de tinta numa lixeira</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Cristiany Viana</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-amarelo" id="btnMetais2">ACESSAR</button>
            <span class="identificador amarelo"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/metaisPortaTalheres.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando uma lata num porta talheres</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Show de Artesanato</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-amarelo" id="btnMetais3">ACESSAR</button>
            <span class="identificador amarelo"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/metaisPortaTalheres2.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando uma lata num porta talheres</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Show de Artesanato</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-amarelo" id="btnMetais4">ACESSAR</button>
            <span class="identificador amarelo"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/metaisVaso.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando uma lata de tinta num vaso de plantas</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong> Eu Fiz Tu Faz</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-amarelo" id="btnMetais5">ACESSAR</button>
            <span class="identificador amarelo"></span>
          </div>
        </div>
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
        <div class="block">
          <img src="images/plasticoCarteira.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando embalagem de shampoo numa carteira</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>IDEIAS INCRÍVEIS</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-vermelho" id="btnPlastico1">ACESSAR</button>
            <span class="identificador vermelho"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/plasticoJarro.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando a embalagem de amaciante num jarro para planta</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Ider Alves - DIY Moda Fashion
          </span>

          <div class="block-acessarIdentifica">
            <button class="acessar-vermelho" id="btnPlastico2">ACESSAR</button>
            <span class="identificador vermelho"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/plasticoSaboneteira2.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando uma embalagem de amaciante numa saboneteira</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Ider Alves - DIY Moda Fashion</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-vermelho" id="btnPlastico3">ACESSAR</button>
            <span class="identificador vermelho"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/plasticoPortaPapelHigienico.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando um galão num porta papel higiênico</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Ider Alves - DIY Moda Fashion</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-vermelho" id="btnPlastico4">ACESSAR</button>
            <span class="identificador vermelho"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/plasticoPortaToalha.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando uma embalagem de amaciante num porta toalha</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Ider Alves - DIY Moda Fashion</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-vermelho" id="btnPlastico5">ACESSAR</button>
            <span class="identificador vermelho"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/plasticoSaboneteira.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando uma embalagem de amaciante numa saboneteira</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Ider Alves - DIY Moda Fashion</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-vermelho" id="btnPlastico6">ACESSAR</button>
            <span class="identificador vermelho"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/plasticoSaboneteira3.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando um galão numa saboneteira</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Ider Alves - DIY Moda Fashion</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-vermelho" id="btnPlastico7">ACESSAR</button>
            <span class="identificador vermelho"></span>
          </div>
        </div>
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
        <div class="block">
          <img src="images/papeisDecoracao.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando rolo de papel higiênico em objeto decorativo</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Ider Alves - DIY Moda Fashion</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-azul" id="btnPapeis1">ACESSAR</button>
            <span class="identificador azul"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/papeisDecoracaoParede.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando rolo de papel higiênico em decoração de parede</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Ider Alves - DIY Moda Fashion</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-azul" id="btnPapeis2">ACESSAR</button>
            <span class="identificador azul"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/papeisDecoracaoParede2.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando rolo de papel higiênico em decoração de parede</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Mostrando ComoseFaz</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-azul" id="btnPapeis3">ACESSAR</button>
            <span class="identificador azul"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/papeisGaveta.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando caixa de café em gaveta</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Viviane Magalhães</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-azul" id="btnPapeis4">ACESSAR</button>
            <span class="identificador azul"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/papeisPortaPulseiras.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando rolo de papel higiênico num porta pulseiras</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Ider Alves - DIY Moda Fashion</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-azul" id="btnPapeis5">ACESSAR</button>
            <span class="identificador azul"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/papeisVasoPlanta.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando rolo de papel higiênico num vaso de planta decorativo
          </h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Ider Alves - DIY Moda Fashion</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-azul" id="btnPapeis6">ACESSAR</button>
            <span class="identificador azul"></span>
          </div>
        </div>
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
        <div class="block">
          <img src="images/vidroDecoracao.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando uma garrafa grande de vidro num objeto decorativo</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Decoranna</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-verde" id="btnVidro1">ACESSAR</button>
            <span class="identificador verde"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/vidroEsmalteDecorativo.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando um esmalte num objeto decorativo da casa</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Nay Dias - Artesanatos com Reciclagem</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-verde" id="btnVidro2">ACESSAR</button>
            <span class="identificador verde"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/vidroGarrafaDecorativa.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando uma garrafa de cerveja num objeto decorativo da casa
          </h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Artesanato Maria Figueiredo</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-verde" id="btnVidro3">ACESSAR</button>
            <span class="identificador verde"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/vidroLuminaria.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando um pote grande de vidro numa luminária</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Viviane Magalhães</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-verde" id="btnVidro4">ACESSAR</button>
            <span class="identificador verde"></span>
          </div>
        </div>

        <div class="block">
          <img src="images/vidroPerfumeDecorativo.jpeg" alt="" class="block-Img">

          <h3 class="block-tituloProjeto">Transformando frascos de perfume em objetos decorativos da casa</h3>

          <div class="block-linhaDivisoria"></div>

          <span class="block-span"><strong>AUTO(A):</strong>Kêu Mercês</span>

          <div class="block-acessarIdentifica">
            <button class="acessar-verde" id="btnVidro5">ACESSAR</button>
            <span class="identificador verde"></span>
          </div>
        </div>
      </div>

      <!-- Carrossel - Botão direita -->
      <div class="btn-right" onclick="carrosselVidro(2)">
        <i class="bi bi-arrow-right-circle-fill"></i>
      </div>
    </section>

    <!-- Section Contato -->
    <section class="contato">
      <h2>Quer entrar em contato?</h2>
      <form action="https://formsubmit.co/caiombmonteiro@gmail.com" method="POST">
        <h3>Nos envie um e-mail</h3>
        <div class="formCampos">
          <!-- nome -->
          <input type="text" name="Nome" placeholder="Seu nome aqui" required>

          <!-- e-mail -->
          <input type="text" name="E-mail" placeholder="Seu e-mail aqui" required>

          <!-- assunto -->
          <input type="text" name="Assunto" placeholder="Assunto do e-mail" required>

          <!-- mensagem -->
          <textarea rows="7" style="resize: none" maxlength="500" name="Mensagem" placeholder="Digite aqui sua mensagem"
            required></textarea>
        </div>
        <button type="submit">ENVIAR</button>
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
        <!-- Instagram -->
        <a href="https://www.instagram.com/visz.dev/" target="_blank">
          <img src="images/FeInstagram.png" class="footer-icon" alt="">
        </a>
      </div>
    </section>
  </footer>
</body>

</html>