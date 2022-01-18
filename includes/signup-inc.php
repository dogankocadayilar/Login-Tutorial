<?php

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwdAgain = $_POST['pwd-2'];

    include "../classes/db-class.php";
    include "../classes/signup-class.php";
    include "../classes/signupController-class.php";

    $signup = new SignupController($first_name, $last_name, $username, $email, $pwd, $pwdAgain);
    $signup->createUser();
}
