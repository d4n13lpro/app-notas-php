<?php

/**
 * Controlador para el listado de notas del usuario.
 */

// dd(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$heading = "My Notes";

// Simulamos el ID del usuario autenticado (más adelante vendrá de $_SESSION)
$currentUserId = 2;

/**
 * Consultamos solo las notas que pertenecen al usuario actual.
 * Usamos placeholders con nombre (:user_id) para mayor claridad.
 */
$notes = $db->query(
    "SELECT * FROM notes WHERE user_id = :user_id",
    ["user_id" => $currentUserId]
)->get();

// Carga de la vista con los datos filtrados
require 'views/notes.view.php';
