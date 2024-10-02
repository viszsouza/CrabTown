<?php
$caminho_vendor = dirname(__DIR__) . "/vendor/autoload.php";
require_once $caminho_vendor;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['enviarNoticia'])) {
    $mail = new PHPMailer(true);

    $pagina_origem = $_SERVER['HTTP_REFERER'] ?? '../index.php';

    try {
        // Configuração do servidor
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true; 
        $mail->Username = $_ENV['EMAIL']; 
        $mail->Password = $_ENV['PASSWORD_EMAIL']; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configurações do E-mail
        $mail->setFrom($_ENV['EMAIL'], 'Mailer');
        $mail->addAddress($_ENV['EMAIL'], 'Crab Town');
        $mail->addReplyTo($_ENV['EMAIL'], 'Information');
        $mail->CharSet = 'UTF-8';

        // Carregando o template HTML
        $template = file_get_contents(__DIR__ . '/../email_noticia_template.html');

        // Declara as variáveis com os dados do formulário
        $nomeNoticia = htmlspecialchars($_POST['nomeNoticia']);
        $assuntoNoticia = htmlspecialchars($_POST['assuntoNoticia']);
        $editoraNoticia = htmlspecialchars($_POST['editoraNoticia']);
        $dataNoticia = htmlspecialchars($_POST['dataNoticia']);
        $localNoticia = htmlspecialchars($_POST['localNoticia']);
        $linkNoticia = htmlspecialchars($_POST['linkNoticia']);

        // Substituindo os placeholders no template HTML com as variáveis do formulário
        $mailBody = str_replace(
            ['{{nomeNoticia}}', '{{assuntoNoticia}}', '{{editoraNoticia}}', '{{dataNoticia}}', '{{localNoticia}}', '{{linkNoticia}}'],
            [$nomeNoticia, $assuntoNoticia, $editoraNoticia, $dataNoticia, $localNoticia, $linkNoticia],
            $template
        );

        // Configuração do email
        $mail->isHTML(true);
        $unique_id = uniqid('', true);
        $mail->Subject = "$assuntoNoticia - Notícia CrabTown ( $unique_id )";
        $mail->Body = $mailBody;

        $mail->send();

        header("Location: $pagina_origem");
        exit();
    } catch (Exception $e) {
        header("Location: $pagina_origem");
        exit();
    }
} else {
    echo "Não foi possível enviar seu e-mail, acesso não foi via formulário";
    
    header("Location: $pagina_origem");
    exit();
}
?>
