<?php
//dd(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$heading = "Home";
try {
    $db = new Database($config['database'], 'notesuser', '');
    $posts = $db->query("SELECT * FROM posts")->fetchAll();

    // Esto "imprime" el arreglo de forma legible en el navegador
    echo "<h1>Mis Notas</h1>";
    echo "<pre>";
    print_r($posts);
    echo "</pre>";
} catch (PDOException $e) {
    die("Error crítico: " . $e->getMessage());
}
require 'views/index.view.php';
