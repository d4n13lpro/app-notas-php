<?php

/**
 * Configuración global de la aplicación.
 * Centraliza las credenciales y parámetros del entorno.
 */
return [
    // Parámetros técnicos para la construcción del DSN de PDO
    'database' => [
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'pnotas',
        'charset' => 'utf8mb4'
    ],

    // Credenciales de acceso al motor de base de datos
    'user' => 'notesuser',
    'password' => ''
];
