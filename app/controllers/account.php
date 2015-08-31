<?php

class Controller_Account extends Controller_Base {

    public $layouts = "account";

    public function index() {


 
        $this->initGetQuery();
        $this->initPostQuery();
        
       
    }

    private function initGetQuery() {

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
    }

    private function initPostQuery() {
       
        if (isset($_POST['submit'])) {
            if (isset($_POST['r_password'])) {
                $this->whenRegistration();
            }
            else {
                $this->whenEntering();
            }
        }
        
        
        if(isset($_POST['chek'])){
            unset($_POST['chek']);
            echo $this->checkField($_POST);
        }
        
        
        unset($_POST);
    }

    private function whenRegistration() {
        try {
            //создаем новую учетную запись 
            $request = Model_User::addUserToDB($_POST);
            if ($request->errorInfo()[1] == 0) {
                echo 'Поздравляем Вас с успешной регистрацией !';
            }
            else {
                $errorMessage = $request->errorInfo()[2];
                echo '<details>'
                . '<summary><strong> Такой пользователь или e-mail уже зарегестрированы <strong></summary>'
                . $errorMessage . '</details>';
            }
        } catch (ErrorException $e) {
            echo $e->getMessage();
        }
    }

    private function whenEntering() {
        //или выполняем вход
        try {
            $user = new Model_User($_POST);
            $_SESSION['USER'] = $user;
          
        } catch (ErrorException $e) {
            echo $e->getMessage();
        }
    }

    private function singOut() {
        session_unset();
        session_destroy();
        header('Location:' . '/');
        return;
    }

    private  function checkField($arr) {
        try {
            $contacts = Model_User::getUsersFromDB($arr);
            return true;
        } catch (ErrorException $e) {
            return false;
        }
    }

}
