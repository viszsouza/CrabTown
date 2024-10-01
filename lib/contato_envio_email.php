<?php
$caminho_vendor = dirname(__DIR__) . "/vendor/autoload.php";

require_once __DIR__ . '/funcoes_uteis.php';
require_once $caminho_vendor;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['enviar'])) {
    $mail = new PHPMailer(true);

    try {
        // Configuração do server.
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // Retirar posteriormente.
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['EMAIL']; // E-mail do Gmail
        $mail->Password = $_ENV['PASSWORD_EMAIL']; // Senha do Gmail 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encriptação TLS
        $mail->Port = 587; // Porta para TLS (Gmail)

        // Remetente e destinatário
        $mail->setFrom($_ENV['EMAIL'], 'Mailer'); // E-mail do remetente
        $mail->addAddress($_ENV['EMAIL'], 'Crab Town'); // E-mail do destinatário
        $mail->addReplyTo($_ENV['EMAIL'], 'Information'); // E-mail de resposta
        $mail->CharSet = 'UTF-8';

        $mail->isHTML(true); // E-mail HTML
        $unique_id = uniqid('', true);
        $mail->Subject = "{$_POST['assunto']} - Contato CrabTown ( $unique_id )"; // Assunto
        
        // Corpo do Email
        $mailBody = "";
        $mailBody .= "Nome: " . nomeCompleto($_POST['nome'], ($_POST['sobrenome']) ?? '') . "<br>" .
                     "E-mail: {$_POST['email']} <br>";
        

        if (!empty($_POST['telefone'])) {
            $mailBody .= "Telefone: {$_POST['telefone']} <br>";
        }
        
        $mailBody .= "Mensagem: <br> " . nl2br(htmlspecialchars($_POST['mensagem'])); 
        
        $mail->Body = $mailBody;

        // Envio do e-mail
        $mail->send();
        echo 'E-mail enviado com sucesso!';

    } catch(Exception $e) {
        echo "Não foi possível enviar seu e-mail: {$mail->ErrorInfo}";
    }
} else {
    echo "Não foi possível enviar seu e-mail, acesso não foi via formulário";
}
