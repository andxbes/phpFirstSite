<?php


// Задаем константы:
define ('DS', DIRECTORY_SEPARATOR); // разделитель для путей к файлам
$sitePath = realpath(dirname(__FILE__)).DS;

define ('SITE_PATH', $sitePath); // путь к корневой папке сайта

// для подключения к бд
define('DB_USER', 'admin_ub');
define('DB_PASS', 'RtvvqJGQwESv3hDP');
define('DB_HOST', '127.0.0.1:3306');
define('DB_NAME', 'user_base');
