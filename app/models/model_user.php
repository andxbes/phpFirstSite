<?php

// модель
class Model_User {

    const DEFAULT_NAME = "Гость";

    private $login,
            $user_email,
            $user_registred,
            $name;

    public function __construct($arr = null) {

        if (isset($arr) || isset($arr['login']) || isset($arr['password'])) {

            $request = Model_User::getUsersFromDB($arr);

            $res = $request[0];
            if ($res['password'] == md5($arr['password'])) {
                $this->login = $res['login'];
                $this->name = $res['name'];
                $this->user_email = $res['email'];
                $this->user_registred = $res['registred'];
            }
            else {
                throw new ErrorException('Пароль неверный !!!');
            }
        }else{
            throw new ErrorException('Не хватает данных для создания объекта ');
        }
      
    }

    

    public function getLogin() {
        return $this->login;
    }

    public function getName() {
        return $this->name;
    }

    public function getUserInfo() {

        return array(
            'login' => $this->login,
            'name' => $this->name,
            'e-mail' => $this->user_email,
            'registred' => $this->user_registred
        );
    }

    private static function pdo() {
        $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, array(
            PDO::FETCH_ASSOC => true
                )
        );
        $pdo->exec('SET NAMES utf8');
        return $pdo;
    }

    public static function addUserToDB($arr) {

        if (strcmp($arr['password'], $arr['r_password']) == 0) {

            $pass = md5($arr['password']);
            $query = Model_User::pdo()->prepare(
                    'INSERT INTO users (  login, name , email, password, gender) '
                    . 'VALUES ( :login, :name, :email, :pass , :gender )');
            $query->execute(array(
                ':login' => $arr['login'],
                ':pass' => $pass,
                ':email' => $arr['email'],
                ':gender' => isset($arr['gender']) ? $gender = $arr['gender'] : null,
                ':name' => $arr['name']
            ));
            return $query;
        }
        else {
            throw new ErrorException('Пароли не совпадают');
        }
    }

    public static function getUsersFromDB($arr=null) {

	
	 
        //дописать автоматическое определение поля для поиска 
        $arrFields = array_keys($arr);
        $field = $arrFields[0];
        $arrValues=array_values($arr);
        $val = $arrValues[0];
        
        //echo $field.'='.$val;
        
        

        $pdoData = Model_User::pdo()->prepare(
                'SELECT * FROM users WHERE users.'.$field.'="' . $val . '"');
        $pdoData->execute();

        if($pdoData->errorCode() != 0){
            $error = $pdoData-> errorInfo();
            throw new ErrorException($error[2]);
        }

        $request = $pdoData->fetchAll();

        if (!$request) {
            throw new ErrorException('Пользователя с таким логином не существует');
        }

        return $request;
    }
    

}
