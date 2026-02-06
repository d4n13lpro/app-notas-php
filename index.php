<?php
// 1. Cargar herramientas y funciones
require "functions.php";
require 'Database.php';
// 1. Cargar configuración
$config = require 'config.php';

// 2. Instanciar la base de datos UNA SOLA VEZ
$db = new Database($config['database'], $config['user'], $config['password']);

require 'Response.php';

// 2. Cargar el ruteo AL FINAL
require "router.php";
