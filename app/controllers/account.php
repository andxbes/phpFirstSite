<?php

class Controller_Account extends Controller_Base {

    public $layouts = "account";

    public function index() {



        if (isset($_GET['param'])) {
            $param = $_GET['param'];
            unset( $_GET['param']);
            switch ($param) {

                case'up': default : $this->template->view('up');
                    break;
                case'in': default : $this->template->view('in');
                    break;
                case'out': default : $this->singOut();
                    break;
                default : $this->template->view('up');
            }
        }
        else {
            $this->template->view('account');
        }
        
       $this->initPOSTParams();
        
        
        
        
        
    }
    
    private function initPOSTParams(){
        if (isset($_POST['submit'])) {
//            $param = $_POST['submit'];
            
            //if()
            
            print_r($_POST);
          
            
//            switch ($param) {
//
//                case'up': default : $this->template->view('up');
//                    break;
//                case'in': default : $this->template->view('in');
//                    break;
//                case'out': default : $this->singOut();
//                    break;
//                default : $this->template->view('up');
//            }
        }
      //  unset($_POST);
    }

    private function singOut() {
        session_unset();
        session_destroy();
        header('Location:' . '/');
        return;
    }

}
