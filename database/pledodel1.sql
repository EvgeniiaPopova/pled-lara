-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 21 2016 г., 12:39
-- Версия сервера: 10.0.17-MariaDB
-- Версия PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pledodel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `counter`
--

CREATE TABLE `counter` (
  `clients` int(5) DEFAULT NULL,
  `metres` int(10) DEFAULT NULL,
  `colors` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `counter`
--

INSERT INTO `counter` (`clients`, `metres`, `colors`) VALUES
(85, 230, 25);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `namepled` varchar(255) NOT NULL DEFAULT '',
  `photopled` varchar(255) NOT NULL DEFAULT '',
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `orderid` varchar(50) NOT NULL DEFAULT '',
  `datetime` int(11) DEFAULT NULL,
  `orderstatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `namepled`, `photopled`, `price`, `quantity`, `orderid`, `datetime`, `orderstatus`) VALUES
(17, 'Зеленый', '', 1700, 1, '573a142e86c36', 1463424270, 'allow'),
(18, 'Городские цветы', '', 2100, 1, '573a142e86c36', 1463424270, 'allow'),
(19, 'Желтый', '', 1700, 1, '573a15581343c', 1463424530, 'allow'),
(20, 'Шервудский лес', '', 2100, 1, '573a15581343c', 1463424530, 'allow'),
(21, '5 минут, турецкий', '', 2100, 1, '573a15581343c', 1463424530, 'allow'),
(22, 'Зеленый', '', 1700, 1, '573a15581343c', 1463424530, 'allow'),
(25, 'Бордовый', '', 1700, 1, '573ad45b1bd61', 1463473376, 'allow'),
(26, 'Желтый', '', 1700, 1, '573ad6dabd376', 1463474142, 'allow'),
(27, 'Шервудский лес', '', 2100, 3, '573ad6dabd376', 1463474142, 'allow'),
(28, 'Плед-конструктор', '', 1900, 2, '573ad7ee35cd2', 1463474363, 'allow'),
(29, 'Инь-Ян', '', 1900, 2, '573ad7ee35cd2', 1463474363, 'allow'),
(30, 'Для болельщиков', '', 1900, 2, '573ad7ee35cd2', 1463474363, 'allow'),
(31, 'Желтый', '', 1700, 3, '573ad8e5d9ae2', 1463483505, 'allow'),
(32, 'Шервудский лес', '', 2100, 2, '573ad8e5d9ae2', 1463483505, 'allow'),
(33, '5 минут, турецкий', '', 2100, 1, '573ad8e5d9ae2', 1463483505, 'allow'),
(34, 'Желтый', '', 1700, 4, '573afd4cd3db5', 1463499165, 'allow'),
(35, 'Шервудский лес', '', 2100, 6, '573afd4cd3db5', 1463499165, 'allow'),
(36, '5 минут, турецкий', '', 2100, 1, '573afd4cd3db5', 1463499165, 'allow'),
(37, 'Бордовый', '', 1700, 2, '573afd4cd3db5', 1463499165, 'allow'),
(38, 'Я уеду жить в Лондон', '', 2100, 1, '573afd4cd3db5', 1463499165, 'allow'),
(39, 'Бордовый', '', 1700, 3, '572f5082e75e1', 1463499878, 'allow'),
(40, 'Желтый', '', 1700, 2, '573b3ac47b75d', 1463500167, 'allow'),
(41, 'Шервудский лес', '', 2100, 1, '573b3e2401e91', 1465161653, 'allow'),
(42, 'Городские цветы', '', 2100, 2, '573b3e2401e91', 1465161653, 'allow'),
(43, 'Бордовый', '', 1700, 5, '573b3e2401e91', 1465161653, 'allow'),
(44, 'Инь-Ян', '', 1900, 2, '573b3e2401e91', 1465161653, 'allow'),
(45, 'Желтый', '', 1700, 1, '575497b8f1fd6', 1465161765, 'allow'),
(46, 'Плед-конструктор', '', 1900, 1, '575497b8f1fd6', 1465161765, 'allow'),
(47, 'Я уеду жить в Лондон', '', 2100, 1, '575497b8f1fd6', 1465161765, 'allow'),
(48, 'Желтый', '', 1700, 3, '5754982989597', 1465170251, 'allow'),
(49, 'Городские цветы', '', 2100, 1, '5754982989597', 1465170251, 'allow'),
(50, 'Городские цветы', '', 2100, 1, '5754ba3819e1e', 1465170522, 'allow'),
(51, 'Для болельщиков', '', 1900, 1, '5754ba3819e1e', 1465170522, 'allow'),
(52, 'Шервудский лес', '', 2100, 1, '576bdc36d45d4', 1466772106, 'allow'),
(53, '5 минут, турецкий', '', 2100, 3, '576bdc36d45d4', 1466772106, 'allow'),
(54, 'Бордовый', '', 1700, 1, '576bdc36d45d4', 1466772106, 'allow'),
(55, 'Шервудский лес', '', 2100, 2, '5814cfa9bd687', 1477761148, 'new'),
(56, 'Плед-конструктор', '', 1900, 2, '5814cfa9bd687', 1477761148, 'new'),
(57, 'Бордовый', '', 1700, 2, '5814cfa9bd687', 1477761148, 'new'),
(58, 'Я уеду жить в Лондон', '', 2100, 5, '5814cfa9bd687', 1477761148, 'new'),
(59, 'Зеленый', '', 1700, 3, '5814d8ca0bc3c', 1478200647, 'allow'),
(60, 'Бордовый', '', 1700, 6, '5814d8ca0bc3c', 1478200647, 'allow'),
(61, 'Я уеду жить в Лондон', '', 2100, 4, '5814d8ca0bc3c', 1478200647, 'allow'),
(62, 'Бордовый', '', 1700, 5, '581b919f45407', 1478201800, 'new'),
(63, 'Я уеду жить в Лондон', '', 2100, 1, '581b919f45407', 1478201800, 'new'),
(64, 'Я уеду жить в Лондон', '', 2100, 1, '581b91cbb193e', 1478202478, 'new'),
(65, 'пояс', '', 30, 1, '581b91cbb193e', 1478202478, 'new'),
(66, 'карман', '', 30, 1, '581b91cbb193e', 1478202478, 'new'),
(67, 'капюшон', '', 30, 2, '581b91cbb193e', 1478202478, 'new'),
(68, 'Шервудский лес', '', 2100, 1, '581b983797321', 1478206581, 'new'),
(69, 'подушка', '', 50, 1, '581b983797321', 1478206581, 'new'),
(70, 'Шервудский лес', '', 2100, 2, '581ba4779e8d3', 1481833842, 'new'),
(71, 'Я уеду жить в Лондон', '', 2100, 1, '581ba4779e8d3', 1481833842, 'new'),
(72, 'капюшон', '', 30, 1, '581ba4779e8d3', 1481833842, 'new'),
(73, 'подушка', '', 50, 1, '581ba4779e8d3', 1481833842, 'new');

-- --------------------------------------------------------

--
-- Структура таблицы `otzivi`
--

CREATE TABLE `otzivi` (
  `id` int(250) NOT NULL,
  `photo` text NOT NULL,
  `otziv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `pledodelcatalog`
--

CREATE TABLE `pledodelcatalog` (
  `id_pled` int(10) NOT NULL,
  `namepled` text NOT NULL,
  `price` int(255) NOT NULL DEFAULT '0',
  `photopled` varchar(255) NOT NULL,
  `typepled` set('konstruktor','onetone','pictures','dopolnit') NOT NULL,
  `instock` enum('instock','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pledodelcatalog`
--

INSERT INTO `pledodelcatalog` (`id_pled`, `namepled`, `price`, `photopled`, `typepled`, `instock`) VALUES
(1, 'Желтый', 1700, 'images/works/1462532969-L-YrgoK37kQ.jpg', 'onetone', 'instock'),
(2, 'Белый', 1700, 'images/works/1462533106-1UaQcM_O7cI.jpg', 'onetone', 'no'),
(3, 'Шервудский лес', 2100, 'images/works/1462535609-IMG_67022.jpg', 'pictures', 'instock'),
(5, 'Зеленый', 1700, 'images/works/1462536596-IMG_6716.jpg', 'onetone', 'instock'),
(6, 'Городские цветы', 2100, 'images/works/1462536814-v5nX57_xfc8.jpg', 'pictures', 'instock'),
(7, 'Плед-конструктор', 1900, 'images/works/1462537061-Purpur_2.jpg', 'konstruktor', 'instock'),
(8, 'Бордовый', 1700, 'images/works/1462537347-Purpur-people_RGB.jpg', 'onetone', 'instock'),
(9, 'Я уеду жить в Лондон', 2100, 'images/works/1462537456-4NUSQg4auSo.jpg', 'pictures', 'instock'),
(10, 'Инь-Ян', 1900, 'images/works/1462537894-blackwhite_RGB.jpg', 'konstruktor', 'instock'),
(11, 'Для болельщиков', 1900, 'images/works/1462537913-DSCF6864.jpg', 'konstruktor', 'instock'),
(12, 'пояс', 30, 'images/works/1475267269-1462537894-blackwhite_RGB.jpg', 'dopolnit', 'instock'),
(13, 'карман', 30, 'images/works/1475267294-1462537347-Purpur-people_RGB.jpg', 'dopolnit', 'instock'),
(14, 'капюшон', 30, 'images/works/1475267310-1462533907-eY2pnHyl0qM.jpg', 'dopolnit', 'instock'),
(15, 'подушка', 50, 'images/works/1475267342-1462536596-IMG_6716.jpg', 'dopolnit', 'instock');

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(10) NOT NULL,
  `photoslider` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id_slider`, `photoslider`) VALUES
(17, 'images/carousel/1467308116-IMG_5853.jpg'),
(19, 'images/carousel/1467308134-IMG_5861.jpg'),
(20, 'images/carousel/1467308139-IMG_5850.jpg'),
(21, 'images/carousel/1467308149-IMG_5865.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `otzivi`
--
ALTER TABLE `otzivi`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pledodelcatalog`
--
ALTER TABLE `pledodelcatalog`
  ADD PRIMARY KEY (`id_pled`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT для таблицы `otzivi`
--
ALTER TABLE `otzivi`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `pledodelcatalog`
--
ALTER TABLE `pledodelcatalog`
  MODIFY `id_pled` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
