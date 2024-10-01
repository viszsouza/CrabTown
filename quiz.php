<?php
    require_once "./lib/class_pergunta.php";

    session_start();

    if (!isset($_SESSION["perguntas"])) {

        require_once "./lib/conexao.php";
        require_once "./lib/quiz_funcoes_banco.php";

        $_SESSION["perguntas"] = serialize(selecionar_perguntas($pdo));
        $_SESSION["pergunta-atual-index"] = 0;

    }

    $array_de_perguntas = unserialize($_SESSION["perguntas"]);
    $pergunta_atual = $array_de_perguntas[$_SESSION["pergunta-atual-index"]];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/LogoCarangueijo.png" type="image/x-icon">
    <title>CrabTown | Quiz</title>

    <!-- META TAG -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="CrabTown" />
    <meta property="og:image" content="image" />
    <meta property="og:description" content="CrabTown" />
    <meta property="og:site_name" content="CrabTown" />

    <link rel="stylesheet" href="css/quiz.css">
    <!-- <script src="./js/quiz.js" defer></script> -->
</head>

<body>
    <!-- Navbar -->
    <nav class="nav">
        <a href="index.php" class="logo"><img src="images/LogoVertical.png" alt="Logo CrabTown"></a>

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

    <!-- Quiz Container -->
    <div class="quiz-container">
        <h1>Quiz CrabTown</h1>

        <!-- Barra de progresso -->
        <div class="progress-container">
            <div class="progress-bar" id="progress-bar"></div>
            <span id="question-number">1/10</span>
        </div>

        <!-- Pergunta e Respostas -->
        <div class="quiz-content">
            <!-- Pergunta -->
            <div class="question-container">
                <p id="question"><?=$pergunta_atual->get_texto()?></p>

                
            </div>

            <!-- Respostas -->
            <form action="" class="answers" method="POST">
                <div class="resposta">
                    <input type="radio" name="answer" id="A" value="1"> <label for="A"><?=$pergunta_atual->get_alternativa_1()?></label>
                </div>

                <div class="resposta">
                    <input type="radio" name="answer" id="B" value="2"> <label for="B"><?=$pergunta_atual->get_alternativa_2()?></label>
                </div>

                <div class="resposta">
                    <input type="radio" name="answer" id="C" value="3"> <label for="C"><?=$pergunta_atual->get_alternativa_3()?></label>
                </div>

                <div class="resposta">
                    <input type="radio" name="answer" id="D" value="4"> <label for="D"><?=$pergunta_atual->get_alternativa_4()?></label>
                </div>

                <!-- Botão de confirmar -->
                <button id="confirm-btn" type="submit">Confirmar</button>
            </form>
            <!--
            <div class="answers">
                <button class="answer">Resposta 1</button>
                <button class="answer">Resposta 2</button>
                <button class="answer">Resposta 3</button>
                <button class="answer">Resposta 4</button>
            </div>  -->
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
    <!-- <script src="./js/quiz.js"></script> -->
</body>
</html>