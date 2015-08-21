<! DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="http://<?=$_SERVER['HTTP_HOST']?>/resources/css/style.css"/>
        <link type="text/javascript" href="http://<?=$_SERVER['HTTP_HOST']?>/resources/js/script.js"/>

    </head>        
    <body>
        <div class="page-header"> 
          
            <div id='sitename'>
            <h1>My site</h1> 
            </div>
            <?php
            
            //вынести в контроллер 
            $user = (array)$_SESSION['user'];
            
            
            $guest = 'Гость';

            $userCabinet = '/?route=user';
            $userName = $user['display_name'] ? $user['display_name'] : $guest;

            $useraction = '';
            $actionURL = '';

            if ($userName == $guest) {
                $useraction = 'Регистрация';
                $actionURL = '/?route=singUp';
            }
            else {
                $useraction = 'Выйти';
                $actionURL = '/index?route=logout';
            }
            ?>

            <div id="user">
            <a id="userNick" href="<?= $userName == $guest ? '#' : $userCabinet ?>" > <?= $userName ?> </a>
            <a href="<?= $actionURL ?>"> <?= $useraction ?> </a>
            </div>
              
        </div>

