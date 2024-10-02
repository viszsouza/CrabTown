<?php
$caminho_vendor = dirname(__DIR__) . "/vendor/autoload.php";

require_once __DIR__ . '/funcoes_uteis.php';
require_once $caminho_vendor;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['enviar'])) {
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
        $template = file_get_contents(__DIR__ . '/../email_contato_template.html');

        // Declarando e validando variáveis com os dados do formulário
        $nome_completo = nomeCompleto(
            htmlspecialchars($_POST['nome']), 
            htmlspecialchars($_POST['sobrenome'] ?? '')
        );
        $email = htmlspecialchars($_POST['email']);
        $telefone = !empty($_POST['telefone']) 
            ? "<p><strong>Telefone:</strong> " . htmlspecialchars($_POST['telefone']) . "</p>" 
            : '';
        $mensagem = nl2br(htmlspecialchars($_POST['mensagem']));
        $assunto = htmlspecialchars($_POST['assunto']);

        // Substituindo os placeholders no template HTML com as variáveis do formulário
        $mailBody = str_replace(
            ['{{nome_completo}}', '{{email}}', '{{telefone}}', '{{mensagem}}', '{{assunto}}'],
            [$nome_completo, $email, $telefone, $mensagem, $assunto],
            $template
        );

        // Configuração do e-mail
        $mail->isHTML(true);
        $unique_id = uniqid('', true);
        $mail->Subject = "$assunto - Contato CrabTown ( $unique_id )";
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
