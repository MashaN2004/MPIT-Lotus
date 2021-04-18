-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 18 2021 г., 03:45
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hackaton`
--

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `heading` varchar(355) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `question` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`heading`, `user_id`, `question`) VALUES
('Ответ', '1', 'тебе нужно прыгнуть три раза'),
('Ответ', '1', 'тебе нужно прыгнуть три раза'),
('ХАКЕРЫ ПРЕСЛЕДУЮТ МЕНЯ?', '1', 'Большинство хакеров не заинтересованы в среднем пользователе, они преследуют более крупные цели, но вы можете стать целью по той или иной причине. Вообще, среднестатистический пользователь будет подвергаться масштабному нападению только при фишинговой или подобной атаке по всей стране.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(355) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(355) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `avatar`, `phone`) VALUES
(1, 'pro228', '12', 'fedya@mail.ru', 'img/1.jpg', '89148234526');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
