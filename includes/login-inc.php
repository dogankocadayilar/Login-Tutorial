<?php

if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];

    include '../classes/db-class.php';
    include '../classes/login-class.php';
    include '../classes/loginController-class.php';

    $login = new LoginController($user, $pwd);
    $login->loginUser();

}
