-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 31 2015 г., 17:37
-- Версия сервера: 5.6.22-log
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `my_site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `login` varchar(40) COLLATE utf8_general_mysql500_ci NOT NULL,
  `name` varchar(80) COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_general_mysql500_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_general_mysql500_ci NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `registred` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci AUTO_INCREMENT=44 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `email`, `password`, `gender`, `registred`) VALUES
(33, 'andxbes', 'Андрей', 'andxbes@ya.ru', '962710b25f18032ba47a950b7b175c03', 1, '2015-08-30 08:46:18'),
(41, 'andxbes2', 'ffffffffffffff', 'andxbes2@ya.ru', '962710b25f18032ba47a950b7b175c03', 1, '2015-08-30 09:59:28'),
(42, 'andxbes3', 'andxbes3', 'andxbes3@ya.ru', '962710b25f18032ba47a950b7b175c03', NULL, '2015-08-30 10:02:28'),
(43, 'andxbes444', 'Andr', 'andxbes444@ya.ru', 'bad39bc4b880830e51c3ffb45fd8eb8c', 1, '2015-08-31 14:08:24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
