<?php

//dd(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$heading = "My Notes";
$currentUserId = 1;

// $notes = $db->query("SELECT * FROM posts WHERE id = ?", [$id])->fetchAll();
$notes = $db->query(
    "SELECT * FROM notes WHERE user_id = :user_id",
    ["user_id" => $currentUserId]
)->fetchAll();



// dd($notes);


require 'views/notes.view.php';
