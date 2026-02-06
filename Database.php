<?php

/**
 * Gestor de conexión y consultas a la base de datos mediante PDO.
 * Centraliza la lógica de acceso a datos para toda la aplicación.
 */
class Database
{
    public $connection;

    /**
     * Establece la conexión inicial con el servidor de BD.
     */
    public function __construct($config, $username, $password)
    {
        // Convierte el arreglo de configuración en una cadena DSN (host=...;dbname=...)
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            // Configura el modo de obtención de datos a arreglos asociativos por defecto
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            // Habilita el lanzamiento de excepciones para errores de SQL
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }

    /**
     * Ejecuta una consulta segura y retorna el objeto de la sentencia (statement).
     * El uso de execute($params) previene ataques de SQL Injection automáticamente.
     */
    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}
