<?php

// контролер
class Controller_Index Extends Controller_Base {    
    // шаблон
    public $layouts = "StartPage";
     
    // экшен
    function index() {
        
        $model = new Model_Content();
        $content = $model->getContent(); 
        $userlogin = 'Гость';
        $userProperty = '<a href="/?route=singUp">Регистрация</a><br>'
                . '<a href="/?route=singIn">Вход</a>';
        $userField = array("userLogin"=>$userlogin,
                           "userProperty"=>$userProperty);
        
        $this->template->vars('userField', $userField);
        $this->template->vars('content', $content);
        $this->template->view('index');
    }   
} 

