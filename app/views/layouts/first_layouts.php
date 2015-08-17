<! DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://<?=$_SERVER['HTTP_HOST']?>/resources/css/style.css">
    </head>        
    <body>
                
        <h1> header </h1>
            <?php
            include ($contentPage);
            ?>
        <h1> footer </h1>   
        
    </body>
</html>
