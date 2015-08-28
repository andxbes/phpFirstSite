<?php

// контролер
class Controller_Index Extends Controller_Base {    
    // шаблон
    public $layouts = "StartPage";
     
    // экшен
    function index() {
        
        $model = new Model_Content();
        $content = $model->getContent(); 
        
        $this->template->vars('content', $content);
        $this->template->view('index');
    }   
} 

