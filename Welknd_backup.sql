-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 30 2016 г., 17:56
-- Версия сервера: 5.7.12-0ubuntu1
-- Версия PHP: 7.0.4-7ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Weltkind_test`
--
CREATE DATABASE IF NOT EXISTS `Weltkind_test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Weltkind_test`;

-- --------------------------------------------------------

--
-- Структура таблицы `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `albums`
--

INSERT INTO `albums` (`id`, `name`, `description`, `date`) VALUES
(28, 'Первый тестовый альбом', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 10:37:11'),
(29, 'Второй тестовый альбом', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 10:37:24'),
(30, 'Третий тестовый альбом', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 10:37:31'),
(31, 'Третий тестовый альбом', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 10:41:04'),
(32, 'Четвертый тестовый альбом', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 10:41:13'),
(33, 'Пятый тестовый альбом', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 10:41:20'),
(34, 'Шестой тестовый альбом', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 10:41:26'),
(35, 'Седьмой тестовый альбом', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 10:41:33'),
(36, 'Восьмой тестовый альбом', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 10:41:40'),
(37, 'Девятый тестовый альбом', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 10:41:47'),
(38, 'Десятый тестовый альбом', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 10:41:54'),
(39, 'Одиннадцатый тестовый альбом', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 10:42:11'),
(40, 'Двенадцатый тестовый альбом', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 10:42:19'),
(41, 'Тринадцатый тестовый альбом', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 10:42:25'),
(42, 'Картиночки1', 'описание1', '2016-06-30 11:02:25'),
(44, 'Еще один тестовый альбом', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 11:48:37'),
(45, 'И еще', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt facere veritatis, deserunt eligendi magni enim, iusto sed atque esse asperiores, ipsum qui cupiditate quod saepe vero, quis inventore? Mollitia?', '2016-06-30 11:54:56');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `name`, `url`, `album_id`) VALUES
(9, 'tmp727110550026190849.png', '/staticfiles/img/album_1/tmp727110550026190849.png', 1),
(10, 'Сакура не сегун.jpeg', '/staticfiles/img/album_1/Сакура не сегун.jpeg', 1),
(13, 'asdsad.jpeg', '/staticfiles/img/album_4/asdsad.jpeg', 4),
(14, 'asdsad.jpeg', '/staticfiles/img/album_4/asdsad.jpeg', 4),
(15, 'b9718fe8dc4dd7ba217593ef0e768392.jpg', '/staticfiles/img/album_2/b9718fe8dc4dd7ba217593ef0e768392.jpg', 2),
(16, '7025-1920x1200.jpg', '/staticfiles/img/album_3/7025-1920x1200.jpg', 3),
(17, 'Но как же....jpeg', '/staticfiles/img/album_1/Но как же....jpeg', 1),
(18, 'compleate.png', '/staticfiles/img/album_1/compleate.png', 1),
(19, 'evok_full.jpg', '/staticfiles/img/album_1/evok_full.jpg', 1),
(20, '13473062893016.jpg', '/staticfiles/img/album_21/13473062893016.jpg', 21),
(21, '7025-1920x1200.jpg', '/staticfiles/img/album_21/7025-1920x1200.jpg', 21),
(22, 'N_6da9MY7sI.jpg', '/staticfiles/img/album_24/N_6da9MY7sI.jpg', 24),
(23, 'N_6da9MY7sI.jpg', '/staticfiles/img/album_24/N_6da9MY7sI.jpg', 24),
(24, 'evok_full.jpg', '/staticfiles/img/album_24/evok_full.jpg', 24),
(25, '13473062893016.jpg', '/staticfiles/img/album_24/13473062893016.jpg', 24),
(26, 'evok_full.jpg', '/staticfiles/img/album_21/evok_full.jpg', 21),
(27, 'evok_full.jpg', '/staticfiles/img/album_6/evok_full.jpg', 6),
(28, '7025-1920x1200.jpg', '/staticfiles/img/album_26/7025-1920x1200.jpg', 26),
(29, '7025-1920x1200.jpg', '/staticfiles/img/album_26/7025-1920x1200.jpg', 26),
(30, '7025-1920x1200.jpg', '/staticfiles/img/album_28/7025-1920x1200.jpg', 28),
(31, 'b9718fe8dc4dd7ba217593ef0e768392.jpg', '/staticfiles/img/album_28/b9718fe8dc4dd7ba217593ef0e768392.jpg', 28),
(32, 'cocaine.jpg', '/staticfiles/img/album_28/cocaine.jpg', 28),
(33, 'b9718fe8dc4dd7ba217593ef0e768392.jpg', '/staticfiles/img/album_29/b9718fe8dc4dd7ba217593ef0e768392.jpg', 29),
(34, 'tmp727110550026190849.png', '/staticfiles/img/album_29/tmp727110550026190849.png', 29),
(35, 'test.png', '/staticfiles/img/album_29/test.png', 29),
(36, 'photo_2016-06-03_11-37-34.jpg', '/staticfiles/img/album_29/photo_2016-06-03_11-37-34.jpg', 29),
(37, '7025-1920x1200.jpg', '/staticfiles/img/album_29/7025-1920x1200.jpg', 29),
(38, 'asdas.jpeg', '/staticfiles/img/album_29/asdas.jpeg', 29),
(39, 'Дасфывфы.jpeg', '/staticfiles/img/album_29/Дасфывфы.jpeg', 29),
(40, 'KelseyIsQueen.70641.jpg', '/staticfiles/img/album_29/KelseyIsQueen.70641.jpg', 29),
(41, '711161.jpg', '/staticfiles/img/album_42/711161.jpg', 42),
(42, '711164.jpg', '/staticfiles/img/album_42/711164.jpg', 42),
(46, '711152.jpg', '/staticfiles/img/album_42/711152.jpg', 42),
(47, '711218.jpg', '/staticfiles/img/album_42/711218.jpg', 42),
(48, '711166.jpg', '/staticfiles/img/album_42/711166.jpg', 42),
(49, '711144.jpg', '/staticfiles/img/album_42/711144.jpg', 42),
(50, '783686.jpg', '/staticfiles/img/album_42/783686.jpg', 42),
(51, '711224.jpg', '/staticfiles/img/album_42/711224.jpg', 42),
(52, '711343.jpg', '/staticfiles/img/album_42/711343.jpg', 42),
(54, '711341.jpg', '/staticfiles/img/album_42/711341.jpg', 42),
(55, '710860.jpg', '/staticfiles/img/album_42/710860.jpg', 42),
(56, '711319.jpg', '/staticfiles/img/album_42/711319.jpg', 42),
(57, '710856.jpg', '/staticfiles/img/album_43/710856.jpg', 43),
(58, '710857.jpg', '/staticfiles/img/album_43/710857.jpg', 43),
(59, '710862.jpg', '/staticfiles/img/album_43/710862.jpg', 43),
(60, '710861.jpg', '/staticfiles/img/album_43/710861.jpg', 43),
(61, '710870.jpg', '/staticfiles/img/album_43/710870.jpg', 43),
(62, '710869.jpg', '/staticfiles/img/album_43/710869.jpg', 43),
(63, '710871.jpg', '/staticfiles/img/album_43/710871.jpg', 43),
(64, '710872.jpg', '/staticfiles/img/album_43/710872.jpg', 43),
(65, '710874.jpg', '/staticfiles/img/album_43/710874.jpg', 43),
(66, '710873.jpg', '/staticfiles/img/album_43/710873.jpg', 43),
(67, '710866.jpg', '/staticfiles/img/album_43/710866.jpg', 43),
(68, '710867.jpg', '/staticfiles/img/album_43/710867.jpg', 43),
(69, '710875.jpg', '/staticfiles/img/album_43/710875.jpg', 43),
(70, '710876.jpg', '/staticfiles/img/album_43/710876.jpg', 43),
(71, '710877.jpg', '/staticfiles/img/album_43/710877.jpg', 43),
(72, '710872.jpg', '/staticfiles/img/album_43/710872.jpg', 43),
(73, '0.jpg', '/staticfiles/img/album_44/0.jpg', 44),
(74, '1.jpg', '/staticfiles/img/album_44/1.jpg', 44),
(75, '2.jpg', '/staticfiles/img/album_44/2.jpg', 44),
(76, '02c6704adf9408898_900.jpg', '/staticfiles/img/album_44/02c6704adf9408898_900.jpg', 44),
(77, '4.jpg', '/staticfiles/img/album_44/4.jpg', 44),
(78, '6.jpg', '/staticfiles/img/album_44/6.jpg', 44),
(79, '7.jpg', '/staticfiles/img/album_44/7.jpg', 44),
(80, '8.jpg', '/staticfiles/img/album_44/8.jpg', 44),
(81, '9.jpg', '/staticfiles/img/album_44/9.jpg', 44),
(82, '3731555-R3L8T8D-650-enhanced-buzz-wide-9033-1338402354-5.jpg', '/staticfiles/img/album_44/3731555-R3L8T8D-650-enhanced-buzz-wide-9033-1338402354-5.jpg', 44),
(83, '3737005-R3L8T8D-650-enhanced-buzz-wide-5453-1338324640-28.jpg', '/staticfiles/img/album_44/3737005-R3L8T8D-650-enhanced-buzz-wide-5453-1338324640-28.jpg', 44),
(84, '3732955-R3L8T8D-650-enhanced-buzz-wide-22552-1338324605-16.jpg', '/staticfiles/img/album_44/3732955-R3L8T8D-650-enhanced-buzz-wide-22552-1338324605-16.jpg', 44),
(85, 'a2d11194148057a23_900.jpg', '/staticfiles/img/album_44/a2d11194148057a23_900.jpg', 44),
(86, '7025-1920x1200.jpg', '/staticfiles/img/album_45/7025-1920x1200.jpg', 45),
(87, 'tmp727110550026190849.png', '/staticfiles/img/album_45/tmp727110550026190849.png', 45);

-- --------------------------------------------------------

--
-- Структура таблицы `sort`
--

CREATE TABLE `sort` (
  `id` int(11) NOT NULL,
  `album_sort` varchar(255) NOT NULL,
  `photo_sort` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sort`
--

INSERT INTO `sort` (`id`, `album_sort`, `photo_sort`) VALUES
(1, 'datedown', 'iddown');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sort`
--
ALTER TABLE `sort`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT для таблицы `sort`
--
ALTER TABLE `sort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
