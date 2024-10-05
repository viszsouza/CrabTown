<?php

if(!isset($_SESSION)) {
  session_start();
}

if(!isset($_ENV)) {
  $caminho_vendor = dirname(__DIR__) . "/vendor/autoload.php";
  require_once $caminho_vendor;
  
  $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
  $dotenv->load();
}

$host = $_ENV['HOST'];
$user = $_ENV['USER'];
$password = $_ENV['PASSWORD'];
$database = $_ENV['DATABASE'];
$port = $_ENV['PORT'];

$dsn = "mysql:host=$host;port=$port;dbname=$database;charset=utf8mb4";
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);