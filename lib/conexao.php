<?php

if(!isset($_SESSION)) {
  session_start();
}

if(file_exists(dirname(__DIR__) . "/.env")) {
  $caminho_vendor = dirname(__DIR__) . "/vendor/autoload.php";
  require_once $caminho_vendor;
  
  $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
  $dotenv->load();

  $host = $_ENV['HOST'];
  $user = $_ENV['USER'];
  $password = $_ENV['PASSWORD'];
  $database = $_ENV['DATABASE'];
  $port = $_ENV['DB_PORT'];
} else {
  $host = 'junction.proxy.rlwy.net';
  $user = 'root';
  $password = 'PViSwkfVhNEWxTYnIRClrbYfyRgbEqgt';
  $database = 'railway';
  $port = 20642;
}

$dsn = "mysql:host=$host;port=$port;dbname=$database;charset=utf8mb4";
$pdo = new PDO($dsn, $user, $password);
$pdo->exec("SET NAMES 'utf8mb4'");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);