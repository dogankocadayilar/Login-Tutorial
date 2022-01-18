<?php

class LoginController extends Login
{

    private $user;
    private $pwd;


    public function __construct($user, $pwd)
    {
        $this->user = htmlspecialchars($user);
        $this->pwd = htmlspecialchars($pwd);
    }


    public function loginUser(){
        if($this->invalidUser() === false){
            header('location:../index.php?error=invalidUser');
            exit();
        }

        header('location:../index.php?error=noerror');
    }


    private function invalidUser(): bool
    {
        if ($this->checkUser($this->user, $this->pwd) === false) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }
}
