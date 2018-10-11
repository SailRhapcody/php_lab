-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 19 2017 г., 09:52
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mysite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `created` date NOT NULL,
  `author_id` smallint(6) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `art_id` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`,`art_id`),
  KEY `art_id` (`art_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `created`, `author_id`, `comment`, `art_id`) VALUES
(5, '2017-10-06', 1, 'sdfsfdsf', 15),
(6, '2017-10-12', 1, 'ssssssssssssssssssssssssssssssssssssss', 15),
(7, '2017-10-13', 2, 'sfdsfsdfsf', 6),
(8, '2017-10-07', 1, 'sdsssss', 6),
(9, '2017-10-14', 2, 'sfdsfsdfsf22222', 6),
(10, '2017-10-08', 1, 'sdsssss222222', 6),
(11, '2017-10-05', 3, 'rrrrrrrrrrrrrrr', 6),
(12, '2017-10-05', 2, 'rwwwwwwwwwwwwwwwwwwwwwwww', 6),
(13, '2017-09-15', 2, 'fff', 6),
(14, '2017-10-11', 3, 'dsf', 6),
(15, '2017-09-04', 1, 'fdgfdgdg', 6),
(16, '2017-09-03', 2, 'dgdfgfdgdfg', 7),
(17, '2017-12-07', 1, 'Wow thats greatt!!', 1),
(18, '2017-12-21', 2, 'Awesome!!', 2),
(19, '2017-12-07', 1, 'Wow thats greatt!!', 1),
(20, '2017-12-21', 2, 'Awesome!!', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
