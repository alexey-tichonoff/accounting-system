-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 15 2015 г., 12:40
-- Версия сервера: 5.6.24
-- Версия PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_catcross`
--

DROP TABLE IF EXISTS `tbl_catcross`;
CREATE TABLE IF NOT EXISTS `tbl_catcross` (
  `teacherId` int(11) NOT NULL,
  `learnerId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tbl_catcross`
--

INSERT INTO `tbl_catcross` (`teacherId`, `learnerId`) VALUES
(1, 4),
(1, 3),
(15, 2),
(16, 1),
(16, 2),
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_learner`
--

DROP TABLE IF EXISTS `tbl_learner`;
CREATE TABLE IF NOT EXISTS `tbl_learner` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `birthday` datetime NOT NULL,
  `level` smallint(6) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tbl_learner`
--

INSERT INTO `tbl_learner` (`id`, `name`, `email`, `birthday`, `level`) VALUES
(1, 'Васин Михаил', '1@bk.ru', '2015-04-02 00:00:00', 1),
(2, 'Шунин Максим', 'qw@mai.ru', '2015-04-08 00:00:00', 2),
(3, 'Игонина Ольга', 'as@bk.ru', '2015-09-01 00:00:00', 2),
(4, 'Седов Андрей', '1234@nm.ru', '2015-09-08 00:00:00', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_teacher`
--

DROP TABLE IF EXISTS `tbl_teacher`;
CREATE TABLE IF NOT EXISTS `tbl_teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `gender` smallint(6) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`id`, `name`, `gender`, `phone`) VALUES
(1, 'Тихонов Алексей Борисович', 2, 252525),
(15, 'Астафьева Наталья Владимировна', 1, 123123),
(16, 'Григорьев Олег Андреевич', 2, 2321321);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tbl_learner`
--
ALTER TABLE `tbl_learner`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tbl_learner`
--
ALTER TABLE `tbl_learner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
