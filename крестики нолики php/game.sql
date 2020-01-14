-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 23 2019 г., 18:46
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `game`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cross_zero`
--

CREATE TABLE `cross_zero` (
  `id` int(255) NOT NULL,
  `blockOne` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blockTwo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blockTree` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blockFor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blockFive` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blockSix` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blockSeven` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blockEight` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blockNine` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cross_zero`
--

INSERT INTO `cross_zero` (`id`, `blockOne`, `blockTwo`, `blockTree`, `blockFor`, `blockFive`, `blockSix`, `blockSeven`, `blockEight`, `blockNine`) VALUES
(1, 'x', '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', 'o', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', 'x', '', '', ''),
(6, '', '', '', '', 'o', '', '', '', ''),
(7, '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', 'x', '', ''),
(9, '', '', '', 'x', '', '', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cross_zero`
--
ALTER TABLE `cross_zero`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cross_zero`
--
ALTER TABLE `cross_zero`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
