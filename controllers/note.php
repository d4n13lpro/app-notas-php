<?php

//dd(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

/**
 * Controlador para visualizar una nota individual de forma segura.
 */
$heading = "Note";
$currentUserId = 2; // ID del usuario "logueado" (temporal)

/**
 * Buscamos la nota por el ID recibido en la URL ($_GET['id']).
 * Usamos fetch() porque esperamos un solo resultado, no un conjunto.
 */
$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    'id' => $_GET['id']
])->findOrFail();

/**
 * VALIDACIÓN 1: ¿Existe la nota?
 * Si el ID no existe en la BD, fetch() devuelve false.
 */
// if (! $note) {
//     abort(Response::NOT_FOUND);
// }

/**
 * VALIDACIÓN 2: ¿Le pertenece al usuario?
 * Evita que un usuario vea notas ajenas adivinando el ID en la URL.
 */
// if ($note['user_id'] !== $currentUserId) {
//     abort(Response::FORBIDDEN);
// }

authorize($note['user_id'] === $currentUserId);

// Si pasa ambas validaciones, cargamos la vista del detalle
require 'views/note.view.php';
