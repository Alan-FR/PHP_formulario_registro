<?php

require '../models/user.php';
require '../controllers/db-connection-controller.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $conexion = new Conexion('localhost','db_form_register_test','root','');
    $user = new User($conexion);
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $show_message = $user->register($username,$email,$password);

    echo $show_message;

}