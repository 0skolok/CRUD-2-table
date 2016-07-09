-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 09 2016 г., 18:03
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `project3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `group`
--

INSERT INTO `group` (`id`, `name`, `date`) VALUES
(1, 'Группа №1 (Alta 1)', '2016-07-04'),
(2, 'Группа №2 (Teta)', '2016-07-04'),
(6, 'Группа №4', '2016-07-05'),
(7, 'Delta', '2016-07-08');

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_group` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`id`, `name`, `id_group`, `date`) VALUES
(2, 'Иванова Лариса Викторовна', 2, '2016-07-04'),
(3, 'Селезнева Алиса Борисовна', 7, '2016-07-04'),
(5, 'Шишкин Владимир Петрович', 1, '2016-07-05'),
(6, 'Петрова Елена Александровна', 7, '2016-07-05'),
(7, 'Калинин Сергей Викторович', 2, '2016-07-05'),
(8, 'Жаркова Евгения Александровна', 1, '2016-07-05'),
(13, 'Victor V.V.', 2, '2016-07-09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
