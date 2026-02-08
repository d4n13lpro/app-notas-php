<?php
// Generador de manifiesto de estructura para documentación técnica.

$dirToScan = __DIR__;
$outputFile = 'estructura_proyecto.txt';

// Lista negra: evitamos recursión infinita y ruido de dependencias/entorno.
$excluded = ['vendor', 'node_modules', '.git', '.idea', '.vscode', 'generar_mapa.php', 'generar.bat'];

/**
 * Construye una representación visual (ASCII tree) del sistema de archivos.
 * Emplea recursividad para resolver la jerarquía de directorios.
 */
function buildTree($dir, $prefix = '', $excluded = [])
{
    $result = "";

    // scandir() es eficiente para volúmenes moderados de archivos.
    $files = scandir($dir);

    // Normalización: removemos punteros de sistema y elementos excluidos.
    $files = array_filter($files, function ($file) use ($excluded) {
        return !in_array($file, $excluded) && $file !== '.' && $file !== '..';
    });

    // Reset de índices para garantizar que el cálculo de $isLast sea preciso.
    $files = array_values($files);
    $count = count($files);

    foreach ($files as $index => $file) {
        $path = $dir . DIRECTORY_SEPARATOR . $file;
        $isLast = ($index === $count - 1);

        // Lógica de dibujo: conectores Unicode para claridad visual en editores de texto.
        $connector = $isLast ? '└── ' : '├── ';
        $result .= $prefix . $connector . $file . PHP_EOL;

        if (is_dir($path)) {
            // Indentación dinámica: ajusta el prefijo según la profundidad y posición del nodo padre.
            $newPrefix = $prefix . ($isLast ? '    ' : '│   ');
            $result .= buildTree($path, $newPrefix, $excluded);
        }
    }
    return $result;
}

// Metadata del reporte para trazabilidad.
$header = "ESTRUCTURA DEL PROYECTO" . PHP_EOL;
$header .= "Generado el: " . date('Y-m-d H:i:s') . PHP_EOL;
$header .= str_repeat('=', 30) . PHP_EOL . PHP_EOL;
$header .= basename($dirToScan) . DIRECTORY_SEPARATOR . PHP_EOL;

// Inyección de la rama principal (Root).
$treeBody = buildTree($dirToScan, '', $excluded);

// Operación atómica de escritura: persistimos el resultado en disco.
file_put_contents($outputFile, $header . $treeBody);

echo "¡Listo! Estructura limpia generada en: $outputFile" . PHP_EOL;
