-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 05 2017 г., 23:19
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
  `note` varchar(300) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `title`, `price`, `quantity`, `note`, `id_category`) VALUES
(1, 'Vacum cleaner', '150', 5, 'It is a long established fact that a reader will be distracted by the readable content', 1),
(5, 'Fridge', '200', 10, 'It is a long established fact that a reader will be distracted by the readable content', 1),
(6, 'Microwave oven', '120', 15, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of ', 1),
(7, 'Toaster', '100', 15, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt n', 1),
(8, 'Kettle', '80', 20, ' the 1500s, when an unknown printer took a galley of type and scrambled it to make a', 1),
(9, 'Smoothing-iron', '110', 20, ' the 1500s, when an unknown printer took a galley of type and scrambled it to make a', 1),
(10, 'Mixer', '95', 10, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explic', 1),
(11, 'Bike', '160', 14, 'nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?', 2),
(12, 'Skates', '169', 15, 'nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?', 2),
(13, 'Skateboard', '145', 6, 'nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?', 2),
(14, 'Footbal ball', '145', 20, 'nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?', 2),
(15, 'Sport shoes', '134', 18, 'nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?', 2),
(16, 'Sport suit', '157', 25, 'nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?', 2),
(17, 'Smartphones', '185', 30, 'nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?', 3),
(18, 'Digital camera', '200', 20, 'nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?', 3),
(19, 'Net book', '189', 45, 'nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?', 3),
(20, 'Printer', '210', 11, 'nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?', 3),
(21, 'Scanner', '170', 5, 'nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?', 3),
(22, 'Monitor', '180', 17, 'nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?', 3);

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
(1, 'Household appliances'),
(2, 'Sport\r\n'),
(3, 'Electrical engineering');

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product_history`
--

INSERT INTO `product_history` (`id`, `date`, `id_product`, `title`, `quantity`, `price`, `note`, `id_category`) VALUES
(6, '2017-10-03', 1, 'vacuum cleaners', 100, 5, 'It is a long established fact that a reader will be distracted by the readable content', 1),
(7, '2017-10-03', 1, 'vacuum cleaners аваываываыва', 100, 5, 'It is a long established fact that a reader will be distracted by the readable content', 1),
(18, '2017-10-05', 1, 'Vacuum cleaners', 5, 100, 'It is a long established fact that a reader will be distracted by the readable content', 1),
(19, '2017-10-05', 1, 'Vacuum cleaners', 5, 150, 'It is a long established fact that a reader will be distracted by the readable content', 1),
(20, '2017-10-05', 8, 'kettle', 20, 80, ' the 1500s, when an unknown printer took a galley of type and scrambled it to make a', 1),
(21, '2017-10-05', 7, 'toaster', 15, 100, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt n', 1),
(22, '2017-10-05', 1, 'Vacum cleaners', 5, 150, 'It is a long established fact that a reader will be distracted by the readable content', 1),
(23, '2017-10-05', 10, 'mixer', 10, 95, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explic', 1),
(24, '2017-10-05', 14, 'Footbal ball', 20, 105, 'nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?', 2),
(25, '2017-10-05', 13, 'Skateboard', 6, 185, 'nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?', 2),
(26, '2017-10-05', 11, 'Bike', 14, 200, 'nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `product_history`
--
ALTER TABLE `product_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
