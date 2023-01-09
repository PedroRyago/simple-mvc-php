<?php
    require_once __DIR__ . '/../../config/config.php';

    class Database{

        // atributo para armazenar a conexão com o banco de dados
        private static $connection;

        public static function getConnection(){

            // atribuindo a conexão com o banco de dados a variável $connection
            self::$connection = new PDO("mysql:host=". HOST. ";dbname=" . DBNAME, USER, PASSWORD);

            // retornando a conexão com o banco de dados
            return self::$connection;

        }

    }
?>