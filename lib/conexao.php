<?php

if(!isset($_SESSION)) {
  session_start();
}

$caminho_vendor = dirname(__DIR__) . "/vendor/autoload.php";
require_once $caminho_vendor;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$host = $_ENV['HOST'];
$user = $_ENV['USER'];
$password = $_ENV['PASSWORD'];
$database = $_ENV['DATABASE'];

$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);