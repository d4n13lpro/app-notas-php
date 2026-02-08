<?php
$heading = "Create Note";
$currentUserId = 2;
$errors = []; // Inicializamos el contenedor de errores

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Validación: ¿Está vacío?
    if (strlen($_POST['body']) === 0) {
        $errors['body'] = 'A body is required.';
    }

    // Validación: ¿Es demasiado largo? (Ejemplo: máximo 1000 caracteres)
    if (strlen($_POST['body']) > 1000) {
        $errors['body'] = 'The body cannot be more than 1,000 characters.';
    }

    // Si NO hay errores, procedemos a guardar
    if (empty($errors)) {
        $db->query(
            "INSERT INTO notes(body, user_id) VALUES(:body, :user_id)",
            [
                'body' => $_POST['body'],
                'user_id' => $currentUserId
            ]
        );
        header('Location: /app_notas_pract/notes');
        exit();
    }
}

require 'views/note-create.view.php';
