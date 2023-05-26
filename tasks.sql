-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 26 2023 г., 13:39
-- Версия сервера: 5.7.36-39
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nbd121`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `topic` varchar(255) NOT NULL,
  `type` enum('встреча','звонок','совещание','дело') NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `comment` text,
  `status` enum('текущая задача','просроченная','готово') NOT NULL DEFAULT 'текущая задача'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `topic`, `type`, `location`, `date_time`, `duration`, `comment`, `status`) VALUES
(1, 'Купить хлеб', 'дело', 'Ближайший магазин', '2023-05-25 10:44:00', 2, 'Умру с голоду', 'готово'),
(2, 'Встретить маму', 'встреча', 'Автовокзал', '2023-06-14 10:50:00', 200, 'Подъехать к выходу автовокзала', 'текущая задача'),
(3, 'Купить ssd', 'дело', 'В днс на Сильвере', '2023-05-20 01:23:00', 12, 'Не забыть оплатить', 'готово'),
(4, 'Сделать англ', 'дело', '', '2023-04-30 10:25:00', 150, 'Главное не забыть', 'просроченная'),
(5, 'Выкинуть мусор', 'дело', '', '2023-05-27 08:30:00', 7, '', 'текущая задача'),
(6, 'финал', 'дело', 'Школа интернат номер 23', '2023-05-26 09:35:00', 3, '', 'готово'),
(7, 'финал', 'звонок', 'Школа интернат номер 23', '2023-05-25 10:31:00', 67, '', 'готово'),
(8, 'Посмотреть фильм', 'дело', 'Ближайший кинотеатр', '2023-06-02 18:36:00', 120, 'Надо посмотреть расписание', 'текущая задача');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
