<?php 
// включим отображение всех ошибок
error_reporting (E_ALL); 
// подключаем конфиг
include ('/app/config.php');
 


// подключаем ядро сайта
include (SITE_PATH . 'core' . DS . 'core.php'); 


//если у пользователя есть индификатор - начинаем сессию 
session_start();
if (!isset($_SESSION['USER'])){
    $user = new Model_User();
    $_SESSION['USER'] = $user;
}



// Загружаем router
$router = new Router($registry);
// записываем данные в реестр
$registry->set ('router', $router);
// задаем путь до папки контроллеров.
$router->setPath (SITE_PATH . 'controllers');
// запускаем маршрутизатор
$router->start();


