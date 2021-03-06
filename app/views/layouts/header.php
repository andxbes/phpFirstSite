<! DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/resources/css/style.css"/>
        <script type="text/javascript" src="http://<?= $_SERVER['HTTP_HOST'] ?>/resources/js/script.js"></script>
        <script type="text/javascript" src="http://<?= $_SERVER['HTTP_HOST'] ?>/resources/js/jquery-2.1.4.min.js"></script>
    </head>        
    <body>
        <?php
        $options = '';
        $name = '';
        if (isset($_SESSION['USER'])) {
            $name = $_SESSION['USER']->getName();
             $options = '<a href="/?route=account&param=account">Личный кабинет</a><br>'
                    . '<a href="/?route=account&param=out">Выход</a>';
        }
        else {
            $name = Model_User::DEFAULT_NAME;
              $options = '<a href="/?route=account&param=up">Регистрация</a><br>'
                    . '<a href="/?route=account&param=in">Вход</a>';
        }


        ?>

        <div class="page-header"> 

            <div id='sitename'><a href="/">My site</a> </div>
            <div id="user">
                <input class="hide" id="userNick" type="checkbox">
                <label for="userNick"> <?= $name ?> </label> 
                <div id="userProperty"> <?= $options ?> </div>
            </div>

        </div>

