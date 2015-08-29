<?php

// модель
class Model_User {

    const DEFAULT_Login = "Гость";

    private $login,
            $user_email,
            $user_registred;

    public function __construct($arr=null) {
        
        if (isset($arr) || isset($arr['login']) || isset($arr['password'])) {
           
            $pdoData = Model_User::pdo()->query('SELECT * FROM users WHERE users.login=' . $arr['login']);
            print_r($pdoData);
            $this->login = $arr['login'];
        }
        else {

            $this->login = Model_User::DEFAULT_Login;
        }
    }

    public function getLogin() {
        return $this->login;
    }

    public function addUser($arr) {

        $login = $arr['login'];
        $email = $arr['email'];
        $password = $arr['password'];
        $r_password = $arr['r_password'];
        
        $gender = isset($arr['gender']) ? $gender = $arr['gender']:null;
        
        
        if (strcmp($password, $r_password) == 0) {

            $pass = md5($password);
            try {
                $query = Model_User::pdo()->prepare('INSERT INTO users (  login, email, password, gender) '
                        . 'VALUES ( :login, :email, :pass , :gender )');
                $query->execute(array(
                    ':login' => $login,
                    ':pass' => $pass,
                    ':email' => $email,
                    ':gender' => $gender
                ));
                
                print_r($query->errorInfo());
                
            } catch (PDOException $e) {
                echo $e;
            }
        }
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
