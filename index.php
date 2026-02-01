<?php
require "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// var_dump($uri);

$routes = [
    "/app_notas_pract/" => "controllers/index.php",
    "/app_notas_pract/about" => "controllers/about.php",
    "/app_notas_pract/contact" => "controllers/contact.php"
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
}
