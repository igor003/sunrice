-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 04 2017 г., 23:07
-- Версия сервера: 5.7.11
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sunrice`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `note` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `title`, `price`, `quantity`, `note`, `id_category`) VALUES
(1, 'Vacuum cleaners', '100', 5, 'It is a long established fact that a reader will be distracted by the readable content', 1),
(2, 'Coffe makerrrrrrdsdfsfdsfdsf', '1005', 8, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of ', 1),
(3, 'Electric kettel', '50', 50, 'Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product_category`
--

INSERT INTO `product_category` (`id`, `category`) VALUES
(1, 'Home improvement'),
(2, 'Sport\r\n'),
(3, 'Phones\r\n'),
(4, 'Computers');

-- --------------------------------------------------------

--
-- Структура таблицы `product_history`
--

CREATE TABLE IF NOT EXISTS `product_history` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_product` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `note` varchar(200) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product_history`
--

INSERT INTO `product_history` (`id`, `date`, `id_product`, `title`, `quantity`, `price`, `note`, `id_category`) VALUES
(1, '0000-00-00', 3, 'Electric kettles', 50, 5, 'Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from', 1),
(2, '0000-00-00', 3, 'Electric kettlesssssssssssssssssssssss', 50, 5, 'Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from', 1),
(3, '2017-01-03', 2, 'coffe maker', 150, 9, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of ', 1),
(4, '2017-10-03', 2, 'coffe makerrrrrrrrrrrrrrrrrr', 150, 9, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of ', 1),
(5, '2017-10-03', 2, 'coffe makerrrrrr', 15, 8, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of ', 1),
(6, '2017-10-03', 1, 'vacuum cleaners', 100, 5, 'It is a long established fact that a reader will be distracted by the readable content', 1),
(7, '2017-10-03', 1, 'vacuum cleaners аваываываыва', 100, 5, 'It is a long established fact that a reader will be distracted by the readable content', 1),
(8, '2017-10-03', 2, 'coffe makerrrrrr', 1005, 8, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of ', 1),
(9, '2017-10-04', 3, 'Electric kettel', 50, 5, 'Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from', 1),
(10, '2017-10-04', 3, 'Electric kettelkkkkk99999', 50, 5, 'Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from', 1),
(11, '2017-10-04', 3, 'Electric kettelkkkkk', 5, 50, 'Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from', 1),
(12, '2017-10-04', 3, 'Electric kettel', 59999999, 50, 'Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from', 1),
(13, '2017-10-04', 3, 'Electric kettel', 5, 50, 'Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_history`
--
ALTER TABLE `product_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `product_history`
--
ALTER TABLE `product_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
