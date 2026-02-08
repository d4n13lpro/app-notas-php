<?php

/**
 * Gestor de conexión y consultas a la base de datos mediante PDO.
 * Centraliza la lógica de acceso a datos para toda la aplicación.
 */
class Database
{
    public $connection;

    public $statement;
    /**
     * Establece la conexión inicial con el servidor de BD.
     */
    public function __construct($config, $username, $password)
    {
        // Convierte el arreglo de configuración en una cadena DSN (host=...;dbname=...)
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            // PDO::FETCH_ASSOC: Hace que los resultados sean arreglos con nombres de columnas ($nota['title']) en lugar de números ($nota[0]).
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            // PDO::ERRMODE_EXCEPTION: Obliga a PHP a mostrarte el error exacto de SQL (ej: "Error de sintaxis cerca de WHERE"). Sin esto, a veces las consultas fallan en silencio
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }

    /**
     * Ejecuta una consulta segura y retorna el objeto de la sentencia (statement).
     * El uso de execute($params) previene ataques de SQL Injection automáticamente.
     */
    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }
}
