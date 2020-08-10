-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 02 2020 г., 17:22
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
-- База данных: `carcatalogdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `carinfo`
--

CREATE TABLE `carinfo` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `mileage` varchar(255) NOT NULL,
  `power` varchar(255) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `introimg` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `img6` varchar(255) NOT NULL,
  `img7` varchar(255) NOT NULL,
  `img8` varchar(255) NOT NULL,
  `img9` varchar(255) NOT NULL,
  `img10` varchar(255) NOT NULL,
  `img11` varchar(255) NOT NULL,
  `img12` varchar(255) NOT NULL,
  `img13` varchar(255) NOT NULL,
  `img14` varchar(255) NOT NULL,
  `img15` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carinfo`
--

INSERT INTO `carinfo` (`id`, `title`, `price`, `year`, `mileage`, `power`, `engine`, `body`, `transmission`, `introimg`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `img11`, `img12`, `img13`, `img14`, `img15`, `description`) VALUES
(1, 'Ford Focus', '22 000', '2014', '240 000', '107', 'Гибрид', 'Купе', 'Авто', 'focus1.jpg', 'focus2.jpg', 'focus3.jpg', 'focus4.jpg', 'focus1.jpg', 'focus2.jpg', 'focus3.jpg', '', '', '', '', '', '', '', '', '', 'ultrices eros in cursus turpis massa tincidunt dui ut ornare lectus sit amet est placerat in egestas erat imperdiet sed euismod nisi porta lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget felis'),
(2, 'Mercedes White', '6 000', '2004', '200 000', '100', 'Бензин', 'Седан', 'Ручная', 's1.jpg', 's1.jpg', 's1.jpg', 's1.jpg', 's1.jpg', 's1.jpg', '', '', '', '', '', '', '', '', '', '', 'imperdiet sed euismod nisi porta lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget felis eget nunc lobortis mattis aliquam faucibus purus in massa tempor nec feugiat nisl pretium fusce id velit ut'),
(3, 'Mercedes Red', '40 000', '2018', '4 000', '144', 'Бензин', 'Седан', 'Авто', 's2.png', 's2.png', 's2.png', 's2.png', 's2.png', 's2.png', '', '', '', '', '', '', '', '', '', '', 'velit laoreet id donec ultrices tincidunt arcu non sodales neque sodales ut etiam sit amet nisl purus in mollis nunc sed id semper risus in hendrerit gravida rutrum quisque non tellus orci ac auctor augue mauris augue neque gravida in fermentum et sollicitudin ac orci phasellus egestas tellus rutrum tellus'),
(4, 'Lamborghini Gray', '50 000', '2014', '2 000', '167', 'Бензин', 'Седан', 'Ручная', 's3.png', 's3.png', 's3.png', 's3.png', 's3.png', 's3.png', '', '', '', '', '', '', '', '', '', '', 'enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper eget duis at tellus at urna condimentum mattis pellentesque id nibh tortor id aliquet lectus proin nibh nisl condimentum id venenatis a condimentum vitae sapien pellentesque');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `carinfo`
--
ALTER TABLE `carinfo`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `carinfo`
--
ALTER TABLE `carinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
