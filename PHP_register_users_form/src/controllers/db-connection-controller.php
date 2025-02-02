<?php

# archivo de conexion a la base de datos

class Conexion {

    private $pdo;

    public function __construct($host,$dbname,$username,$password) {

        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        $this->pdo = new PDO($dsn,$username,$password,$options);

    }

    public function getConexion() {

        return $this->pdo;

    }

}