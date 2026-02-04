<?php

//dd(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$heading = "Notes";

$id = $_GET['id'] ?? 1;
// $notes = $db->query("SELECT * FROM posts WHERE id = ?", [$id])->fetchAll();
$notes = $db->query("SELECT * FROM posts")->fetchAll();



// dd($notes);


require 'views/notes.view.php';
