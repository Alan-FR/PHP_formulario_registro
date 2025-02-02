<?php

# modelo para registrar usuarios a la base de datos

class User {

    private $conexion;

    public function __construct(Conexion $conexion) {

        $this->conexion = $conexion->getConexion();

    }

    public function register($username,$email,$password) {

        if ($this->userExists($email)) {

            return "Este email ya esta registrado";

        }

        $hash = password_hash($password,PASSWORD_BCRYPT);
        $sql = "INSERT INTO tbl_users (username,email,password)
        VALUES (:username, :email, :password)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => $hash,
        ]);

        return "Cuenta generada con exito";

    }

    private function userExists($email) {

        $sql = "SELECT * FROM tbl_users WHERE email = :email";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute([':email' => $email]);

        return $stmt->fetch() !== false;

    }

}