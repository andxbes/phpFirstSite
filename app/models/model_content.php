<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Content
 *
 * @author Andr
 */
class Model_Content {

    public function __construct() {
        $this->dbo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, array(
            PDO::FETCH_ASSOC => true
        ));
    }

    public function getContent() {

        //TODO работаем с бд 
        return array('header'=>'Первая статья ',
            'text' => ' Hello Word!!! ');
    }

}

