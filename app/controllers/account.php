<?php

class Controller_Account extends Controller_Base {

    public $layouts = "account";

    public function index() {


        if (isset($_GET['param'])) {
            $param = $_GET['param'];
            unset($_GET['param']);
            switch ($param) {

                case'account': $this->template->view('account');
                    break;
                case'up': $this->template->view('up');
                    break;
                case'in': $this->template->view('in');
                    break;
                case'out': $this->singOut();
                    break;
                default : $this->template->view('account');
            }
        }

        $this->initPOSTParams();
    }

    private function initPOSTParams() {
        if (isset($_POST['submit'])) {

            if (isset($_POST['r_password'])) {
                //создаем новую учетную запись 
                $_SESSION['USER']->addUser($_POST);
            }
            else {
                //или выполняем вход
                $_SESSION['USER'] = new Model_User($_POST);
                
            }


            print_r($_POST);
        }
        unset($_POST);
    }

    private function singOut() {
        session_unset();
        session_destroy();
        header('Location:' . '/');
        return;
    }

}
