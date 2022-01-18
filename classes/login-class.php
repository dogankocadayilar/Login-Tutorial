<?php

class Login extends Database
{

    protected function checkUser($user, $pwd)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE username = ? OR email = ?");

        if (!$stmt->execute([$user, $user])) {
            header('location:../index.php?error=' . $stmt->errno);
            $stmt = null;
            exit();
        }

        if (!$stmt->rowCount() > 0) {
            $result = false;
        } else {
            $hashed_password = $stmt->fetch(PDO::FETCH_ASSOC)["password"];
            if (!password_verify($pwd, $hashed_password)) {
                $result = false;
            } else {
                $result = true;
            }
        }

        return $result;
    }
}
