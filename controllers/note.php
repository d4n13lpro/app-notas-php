<?php

//dd(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$heading = "Note";

$currentUserId = 1;


// dd($id);
$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    'id' => $_GET['id']
])->fetch();
// $notes = $db->query("SELECT * FROM posts")->fetchAll();
// dd($notes);

if (!$note) {
    abort(Response::NOT_FOUND);
}

if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}


require 'views/note.view.php';
