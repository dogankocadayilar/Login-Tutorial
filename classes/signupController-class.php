<?php

class SignupController extends Signup
{

    private $first_name;
    private $last_name;
    private $username;
    private $email;
    private $pwd;
    private $pwdAgain;

    public function __construct($first_name, $last_name, $username, $email, $pwd, $pwdAgain)
    {
        $this->first_name = htmlspecialchars($first_name);
        $this->last_name = htmlspecialchars($last_name);
        $this->username = htmlspecialchars($username);
        $this->email = htmlspecialchars($email);
        $this->pwd = htmlspecialchars($pwd);
        $this->pwdAgain = htmlspecialchars($pwdAgain);
    }

    public function createUser()
    {
        if (!$this->emptyFields()) {
            header('location:../index.php?emptyFields');
            exit();
        }
        if (!$this->invalidEmail()) {
            header('location:../index.php?invalidEmail');
            exit();
        }
        if (!$this->nameCheck()) {
            header('location:../index.php?invalidName');
            exit();
        }
        if (!$this->pwdCheck()) {
            header('location:../index.php?pwd');
            exit();
        }

        $this->setUser($this->first_name, $this->last_name, $this->username, $this->email ,$this->pwd);

        header('location:../index.php?error=noerror');
    }

    private function emptyFields(): bool
    {
        if (
            empty($this->first_name) || empty($this->last_name) || empty($this->username)
            || empty($this->email) || empty($this->pwd) || empty($this->pwdAgain)
        ) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function nameCheck(): bool
    {
        if (!preg_match("/^[a-zA-ZÇŞĞÜÖİçşğüöı]*$/", $this->first_name) || !preg_match("/^[a-zA-ZÇŞĞÜÖİçşğüöı]*$/", $this->last_name)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function invalidEmail(): bool
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL) || $this->checkUser($this->username, $this->email) === false) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function pwdCheck(): bool
    {
        if ($this->pwd !== $this->pwdAgain) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }
}
