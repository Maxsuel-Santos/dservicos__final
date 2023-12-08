<?php
declare(strict_types=1);

session_start();

use Ifba\Core\Router;

require_once "./vendor/autoload.php";
require_once "./app/config.php";
require_once "./app/rotas.php";
require_once "./app/Core/Helpers.php";



$url = $_GET['url'] ?? '/';
unset($_GET['url']);
$metodoHTTP= $_SERVER["REQUEST_METHOD"];


Router::execute($url, $metodoHTTP);