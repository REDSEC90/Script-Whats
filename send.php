<?php
require 'vendor/autoload.php';
use Twilio\Rest\Client;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$sid = $_ENV['TWILIO_SID'];
$token = $_ENV['TWILIO_AUTH_TOKEN'];
$twilio_number = $_ENV['TWILIO_PHONE_NUMBER'];

$phone = $_POST['phone'];
$message = $_POST['message'];

$client = new Client($sid, $token);
try {
    $client->messages->create(
        $phone,
        ["from" => $twilio_number, "body" => $message]
    );
    echo json_encode(["success" => "Mensagem enviada com sucesso!"]);
} catch (Exception $e) {
    echo json_encode(["error" => "Falha no envio: " . $e->getMessage()]);
}
?>
