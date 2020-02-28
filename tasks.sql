-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 28 2020 г., 12:22
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `PANDA-MVC`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `task` text NOT NULL,
  `is_edit` tinyint(1) DEFAULT NULL,
  `is_task` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `user_name`, `email`, `task`, `is_edit`, `is_task`, `created_at`) VALUES
(6, 'name 01', 'email01@gmail.com', 'task011111111111117777777777', 1, 1, '2020-02-26 11:47:22'),
(7, 'name 02', 'email02@gmail.com', 'task 02', NULL, 1, '2020-02-24 14:21:18'),
(8, 'name 03', 'email03@gmail.com', 'task 03', NULL, 1, '2020-02-24 14:21:18'),
(9, 'name 04', 'email04@gmail.com', 'task 04', NULL, NULL, '2020-02-24 14:21:18'),
(10, 'name 05', 'email05@gmail.com', 'task 05', NULL, NULL, '2020-02-24 14:21:18'),
(11, 'name 06', 'email06@gmail.com', 'task 06', NULL, NULL, '2020-02-24 14:21:18'),
(12, 'name 07', 'email07@gmail.com', 'task 07', NULL, NULL, '2020-02-24 14:21:18'),
(13, 'name 08', 'email08@gmail.com', 'task 08', NULL, NULL, '2020-02-24 14:21:18'),
(14, 'name 09', 'email09@gmail.com', 'task 09', NULL, NULL, '2020-02-24 14:21:18'),
(15, 'name 10', 'email10@gmail.com', 'task10', NULL, NULL, '2020-02-24 14:21:18'),
(16, '777777777777777', '77777777777777777777@tttt.tt', '2222222222222222222222222222222222222222', 1, 1, '2020-02-28 12:21:21');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
