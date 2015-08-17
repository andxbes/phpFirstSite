<! DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="http://<?=$_SERVER['HTTP_HOST']?>/resources/css/style.css">
        <link type="text/javascript" href="http://<?=$_SERVER['HTTP_HOST']?>/resources/js/script.js" >
        
    </head>        
    <body>
                
        <h1> header </h1>
        <h3>Привет мир </h3>
            <?php
            
            include ($contentPage);
            ?>
        <h1> footer </h1>   
        
    </body>
</html>
