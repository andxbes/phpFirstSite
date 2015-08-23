<! DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="http://<?=$_SERVER['HTTP_HOST']?>/resources/css/style.css"/>
        <link type="text/javascript" href="http://<?=$_SERVER['HTTP_HOST']?>/resources/js/script.js"/>

    </head>        
    <body>
        <div class="page-header"> 
          
            <div id='sitename'><h1>My site</h1> </div>
            <div id="user">
                <input class="hide" id="userNick" type="checkbox">
                <label for="userNick"> <?=$userField['userLogin']?> </label> 
                <div id="userProperty"> <?=$userField['userProperty']?> </div>
            </div>
              
        </div>

