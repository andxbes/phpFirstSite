<?php

// модель
class Model_Users {

    private $dbo;

    public function __construct() {
        $this->dbo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS,
                array(
                     PDO::FETCH_ASSOC=>true
        ));
        
        
    }

    public function getUser($id) {
        
        //получить данные из базы 
        
        
       
        return array('id' => $id, 'display_name' => 'test_name');
    }
    
   
    //TODO реализовать со всеми необходимыми полями 
    public function addUser($name) {
        array('id' => $id, 'display_name' => 'test_name');
        return true;
    }
    
    

  

}

class User{
    public  $id,
            $userLogin,
            $user_registred,
            $user_status,
            $display_name,
            $user_pass,
            $user_email,
            $session_id;
}