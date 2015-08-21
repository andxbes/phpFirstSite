<?php

// контролер
class Controller_Index Extends Controller_Base {    
    // шаблон
    public $layouts = "StartPage";
     
    // экшен
    function index() {
        
        $model = new Model_Users();
        $userInfo = $model->getUser(2);
        $userLogin ='Гость';
        
        //session_start();
        //$_SESSION['user'] = array('display_name'=> $userLogin);
        
        $this->template->vars('userInfo', $userInfo);
        $this->template->view('index');
    }   
} 

