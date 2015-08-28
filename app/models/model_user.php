<?php

// модель
class Model_User {

    const DEFAULT_Login = "Гость";

    private $login,
            $user_email,
            $user_registred;

    public function __construct($login = null, $password = null) {
        if (isset($login) || isset($password)) {
            $pdoData = Model_User::pdo()->query('SELECT * FROM users WHERE users.login=' . $login);
        }
        else {

            $this->login = Model_User::DEFAULT_Login;
        }
    }

    public function getLogin() {
        return $this->login;
    }

    public function addUser($arr) {
      
        
    }

    public function getUserInfo() {

        return array(
            'login' => $this->login,
            'e-mail' => $this->user_email
        );
    }

    private static function pdo() {
        $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, array(
            PDO::FETCH_ASSOC => true
                )
        );
        return $pdo;
    }

}
