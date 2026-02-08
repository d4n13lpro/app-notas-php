<?php

/**
 * Determina si la URL actual coincide con el valor dado.
 * * Ejemplo de flujo:
 * Si la URL es: http://localhost/app_notas_pract/notes
 * parse_url devolverá: "/app_notas_pract/notes"
 * $value debe ser exactamente: "/app_notas_pract/notes"
 */
function urlIs($value)
{
    // Obtenemos solo el path de la URL (ej: /app_notas_pract/about)
    $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    return $currentPath === $value;
}


function authorize($condition)
{
    if (!$condition) {
        abort(Response::FORBIDDEN);
    }
}

/**
 * Dump and Die: Imprime una variable de forma legible y detiene la ejecución.
 * Útil para debuggear el estado de los datos en medio del flujo.
 */
function dd($value)
{
    echo "<pre style='background:#18181b; color:#fbbf24; padding:20px; border-radius:8px; overflow:auto; line-height:1.5; border:1px solid #3f3f46;'>";
    var_dump($value);
    echo "</pre>";

    die();
}
