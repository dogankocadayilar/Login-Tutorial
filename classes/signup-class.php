<?php

class Signup extends Database
{

    protected function setUser($first_name, $last_name, $username, $email, $pwd)
    {
        $stmt = $this->connect()->prepare("INSERT INTO users (`firstname`, `lastname`, `username`, `email`, `password`, `date`)
        VALUES (?, ?, ?, ?, ?, ?)");
        $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $date = date("Y-m-d H-i-s");

        if (!$stmt->execute([$first_name, $last_name, $username, $email, $hashed_pwd, $date])) {
            $stmt = null;
            header('location:../index.html?error=stmtfailed');
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($username, $email)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE username = ? OR email = ?");

        if (!$stmt->execute([$username, $email])) {
            header('location:../index.html?error=' . $stmt->errno);
            $stmt = null;
            exit();
        }

        if ($stmt->rowCount() > 0) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }
}
