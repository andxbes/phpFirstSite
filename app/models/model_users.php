
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

        return array('id' => $id, 'name' => 'test_name');
    }

    public function addUser($name) {
        array('id' => $id, 'name' => 'test_name');
        return true;
    }

  

}
