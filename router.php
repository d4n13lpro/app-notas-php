<?php

$routes = require 'routes.php';

/**
 * Captura la URI actual ignorando parámetros query (como ?id=1) 
 * para poder compararla con nuestro mapa de rutas.
 */
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


/**
 * Detiene la ejecución y carga una vista de error (404, 403, etc).
 */
function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

/**
 * Verifica si la URI existe en el mapa y carga el controlador correspondiente.
 * Se inyecta $db para que el controlador tenga acceso a la base de datos.
 */
function routeToController($uri, $routes, $db)
{
    if (array_key_exists($uri, $routes)) {
        if (file_exists($routes[$uri])) {
            require $routes[$uri];
        } else {
            abort(Response::NOT_FOUND);
        }
    } else {
        abort(Response::NOT_FOUND);
    }
}

// Ejecución del ruteo
routeToController($uri, $routes, $db);
