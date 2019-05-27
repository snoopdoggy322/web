-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2019 г., 16:05
-- Версия сервера: 5.6.41
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
-- База данных: `phpshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `about_ru` text NOT NULL,
  `about_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`about_ru`, `about_en`) VALUES
(' <p>Информация о магазине</p><p>Ghbdtn</p><p>Интернет-магазин &laquo;Вся техника&raquo; был создан в 2011-м году.</p><p>Товарный ассортимент представлен только качественной техникой ведущих производителей, отвечающей требованиям, предъявляемым как российским, так и иностранным стандартами качества.</p><p>&nbsp;</p><p>Доставка по Нижнему Новгороду и области осуществляется собственной службой доставки Интернет-магазина &laquo;Вся техника&raquo;. Заказ в магазине можно оформить как по телефону, так и с помощью корзины покупателя. Все сведения о покупателе являются строго конфиденциальными и требуются только для безошибочной работы службы доставки. Все реализуемые через интернет-магазин &laquo;Вся техника&raquo; товары сертифицированы, имеют инструкцию по эксплуатации на русском языке и обеспечиваются фирменной гарантией компании производителя. Срок гарантии и адреса сервисных центров указаны в гарантийных талонах или Вы можете найти их на нашем сайте. Компания строго следует всем требованиям действующего Российского Законодательства, а именно Закона о Защите Прав Потребителей, Гражданского Кодекса РФ, а также законодательных актов РФ регулирующих отношения продавца с покупателями. Интернет-магазин &laquo;Вся техника&raquo; постоянно улучшает свой сервис для того, чтобы облегчить покупателю процесс приобретения товара и его доставки.</p>', ' <p>Store Information <!-- p--></p><p>Привет)<!-- p--></p><p>Online Store &amp; laquo; All appliances &amp; raquo; was created in 2011. <!-- p--></p><p>The product range is represented only by high-quality equipment of leading manufacturers that meets the requirements of both Russian and foreign quality standards. <!-- p--></p><p>&nbsp; <!-- p--></p><p>Delivery in Nizhny Novgorod and the region is carried out by its own online store delivery service, &amp; laquo; All appliances &amp; raquo ;. Order in the store can be issued both by phone and using the shopping cart. All customer information is strictly confidential and is required only for error-free delivery service. All sold through the online store &amp; laquo; All appliances &amp; raquo; The products are certified, have instructions for use in Russian and are provided with a company warranty of the manufacturer. The warranty period and the addresses of service centers are listed on the warranty card or you can find them on our website. The company strictly follows all the requirements of the current Russian Legislation, namely the Law on Protection of Consumer Rights, the Civil Code of the Russian Federation, as well as legislative acts of the Russian Federation governing the relationship of the seller with buyers. Online store &amp; laquo; All appliances &amp; raquo; constantly improves its service in order to facilitate the buyer the process of purchasing goods and their delivery. <!-- p--></p>'),
(' <p>Информация о магазине</p><p>Ghbdtn</p><p>Интернет-магазин &laquo;Вся техника&raquo; был создан в 2011-м году.</p><p>Товарный ассортимент представлен только качественной техникой ведущих производителей, отвечающей требованиям, предъявляемым как российским, так и иностранным стандартами качества.</p><p>&nbsp;</p><p>Доставка по Нижнему Новгороду и области осуществляется собственной службой доставки Интернет-магазина &laquo;Вся техника&raquo;. Заказ в магазине можно оформить как по телефону, так и с помощью корзины покупателя. Все сведения о покупателе являются строго конфиденциальными и требуются только для безошибочной работы службы доставки. Все реализуемые через интернет-магазин &laquo;Вся техника&raquo; товары сертифицированы, имеют инструкцию по эксплуатации на русском языке и обеспечиваются фирменной гарантией компании производителя. Срок гарантии и адреса сервисных центров указаны в гарантийных талонах или Вы можете найти их на нашем сайте. Компания строго следует всем требованиям действующего Российского Законодательства, а именно Закона о Защите Прав Потребителей, Гражданского Кодекса РФ, а также законодательных актов РФ регулирующих отношения продавца с покупателями. Интернет-магазин &laquo;Вся техника&raquo; постоянно улучшает свой сервис для того, чтобы облегчить покупателю процесс приобретения товара и его доставки.</p>', ' <p>Store Information <!-- p--></p><p>Привет)<!-- p--></p><p>Online Store &amp; laquo; All appliances &amp; raquo; was created in 2011. <!-- p--></p><p>The product range is represented only by high-quality equipment of leading manufacturers that meets the requirements of both Russian and foreign quality standards. <!-- p--></p><p>&nbsp; <!-- p--></p><p>Delivery in Nizhny Novgorod and the region is carried out by its own online store delivery service, &amp; laquo; All appliances &amp; raquo ;. Order in the store can be issued both by phone and using the shopping cart. All customer information is strictly confidential and is required only for error-free delivery service. All sold through the online store &amp; laquo; All appliances &amp; raquo; The products are certified, have instructions for use in Russian and are provided with a company warranty of the manufacturer. The warranty period and the addresses of service centers are listed on the warranty card or you can find them on our website. The company strictly follows all the requirements of the current Russian Legislation, namely the Law on Protection of Consumer Rights, the Civil Code of the Russian Federation, as well as legislative acts of the Russian Federation governing the relationship of the seller with buyers. Online store &amp; laquo; All appliances &amp; raquo; constantly improves its service in order to facilitate the buyer the process of purchasing goods and their delivery. <!-- p--></p>');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
(13, 'Ноутбуки', 1, 1),
(14, 'Планшеты', 2, 1),
(15, 'Мониторы', 3, 1),
(16, 'Игровые компьютеры', 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `description`, `is_new`, `is_recommended`, `status`) VALUES
(34, 'Ноутбук Asus X200MA (X200MA-KX315D)', 13, 1839707, 39500, 1, 'Asus', 'Экран 11.6\" (1366x768) HD LED, глянцевый / Intel Pentium N3530 (2.16 - 2.58 ГГц) / RAM 4 ГБ / HDD 750 ГБ / Intel HD Graphics / без ОД / Bluetooth 4.0 / Wi-Fi / LAN / веб-камера / без ОС / 1.24 кг / синий', 0, 0, 1),
(35, 'Ноутбук HP Stream 11-d050nr', 13, 2343847, 30500, 0, 'Hewlett Packard', 'Экран 11.6” (1366x768) HD LED, матовый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / eMMC 32 ГБ / Intel HD Graphics / без ОД / Wi-Fi / Bluetooth / веб-камера / Windows 8.1 + MS Office 365 / 1.28 кг / синий', 1, 1, 1),
(36, 'Ноутбук Asus X200MA White ', 13, 2028027, 27000, 1, 'Asus', 'Экран 11.6\" (1366x768) HD LED, глянцевый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / Bluetooth 4.0 / Wi-Fi / LAN / веб-камера / без ОС / 1.24 кг / белый', 0, 1, 1),
(37, 'Ноутбук Acer Aspire E3-112-C65X', 13, 2019487, 32500, 1, 'Acer', 'Экран 11.6\'\' (1366x768) HD LED, матовый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / Linpus / 1.29 кг / серебристый', 0, 1, 1),
(38, 'Ноутбук Acer TravelMate TMB115', 13, 1953212, 27500, 1, 'Acer', 'Экран 11.6\'\' (1366x768) HD LED, матовый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / Linpus / 1.32 кг / черный', 0, 0, 1),
(39, 'Ноутбук Lenovo Flex 10', 13, 1602042, 37000, 0, 'Lenovo', 'Экран 10.1\" (1366x768) HD LED, сенсорный, глянцевый / Intel Celeron N2830 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / Wi-Fi / Bluetooth / веб-камера / Windows 8.1 / 1.2 кг / черный', 0, 0, 1),
(40, 'Ноутбук Asus X751MA', 13, 2028367, 43000, 1, 'Asus', 'Экран 17.3\" (1600х900) HD+ LED, глянцевый / Intel Pentium N3540 (2.16 - 2.66 ГГц) / RAM 4 ГБ / HDD 1 ТБ / Intel HD Graphics / DVD Super Multi / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / DOS / 2.6 кг / белый', 0, 1, 1),
(41, 'Samsung Galaxy Tab S 10.5 16GB', 14, 1129365, 78000, 1, 'Samsung', 'Samsung Galaxy Tab S создан для того, чтобы сделать вашу жизнь лучше. Наслаждайтесь своим контентом с покрытием 94% цветов Adobe RGB и 100000:1 уровнем контрастности, который обеспечивается sAmoled экраном с функцией оптимизации под отображаемое изображение и окружение. Яркий 10.5” экран в ультратонком корпусе весом 467 г порадует вас высоким уровнем портативности. Работа станет проще вместе с Hancom Office и удаленным доступом к вашему ПК. E-Meeting и WebEx – отличные помощники для проведения встреч, когда вы находитесь вне офиса. Надежно храните ваши данные благодаря сканеру отпечатка пальцев.', 1, 1, 1),
(42, 'Samsung Galaxy Tab S 8.4 16GB', 14, 1128670, 64000, 1, 'Samsung', 'Экран 8.4\" Super AMOLED (2560x1600) емкостный Multi-Touch / Samsung Exynos 5420 (1.9 ГГц + 1.3 ГГц) / RAM 3 ГБ / 16 ГБ встроенной памяти + поддержка карт памяти microSD / Bluetooth 4.0 / Wi-Fi 802.11 a/b/g/n/ac / основная камера 8 Мп, фронтальная 2.1 Мп / GPS / ГЛОНАСС / Android 4.4.2 (KitKat) / 294 г / белый', 0, 0, 1),
(43, 'Gazer Tegra Note 7', 14, 683364, 21000, 1, 'Gazer', 'Экран 7\" IPS (1280x800) емкостный Multi-Touch / NVIDIA Tegra 4 (1.8 ГГц) / RAM 1 ГБ / 16 ГБ встроенной памяти + поддержка карт памяти microSD / Wi-Fi / Bluetooth 4.0 / основная камера 5 Мп, фронтальная - 0.3 Мп / GPS / ГЛОНАСС / Android 4.4.2 (KitKat) / вес 320 г', 0, 0, 1),
(44, 'Монитор 23\" Dell E2314H Black', 15, 355025, 17500, 1, 'Dell', 'С расширением Full HD Вы сможете рассмотреть мельчайшие детали. Dell E2314H предоставит Вам резкое и четкое изображение, с которым любая работа будет в удовольствие. Full HD 1920 x 1080 при 60 Гц разрешение (макс.)', 0, 0, 1),
(45, 'Компьютер Everest Game ', 16, 1563832, 132000, 1, 'Everest', 'Everest Game 9085 — это компьютеры премимум класса, собранные на базе эксклюзивных компонентов, тщательно подобранных и протестированных лучшими специалистами нашей компании. Это топовый сегмент систем, который отвечает наилучшим характеристикам показателей качества и производительности.', 0, 0, 1),
(46, '14', 13, 99, 50, 1, 'Honor', 'MagicBook оснащен экраном IPS LCD с разрешением 1920 x 1080 пикселей, поддержкой цветовой гаммы NTSC 45% NTSC и максимальной яркостью 250 нит. Отношение экрана к крышке ноутбука составляет 81%, а угол обзора достигает 178 градусов. Ноутбук также оснащен фронтальной камерой 1 МП. Используйте MagicBook как в работе, так и для развлечений. Стильный тонкий металлический корпус позволяет легко носить с собой ноутбук MagicBook.', 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(49, 'admin', '+79787771031', 'ррр', 4, '2019-05-20 14:46:26', '{\"44\":18,\"43\":1}', 1),
(47, 'рррр', '+79787771031', 'ррр', 0, '2019-04-29 12:14:38', '{\"35\":1,\"45\":1}', 1),
(48, 'Покупатель очень крутой', '+79787710312', '154456', 3, '2019-05-10 13:30:34', '{\"44\":1,\"43\":1,\"42\":1,\"41\":1}', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(3, 'Покупатель очень крутой', 'user@user.ru', 'user', ''),
(4, 'admin', 'admin@admin.ru', 'admin', 'admin'),
(5, 'Сергей', 'serg@mail.com', '111111', ''),
(6, 'Владислав', 'e.15.15@mail.ru', '123456', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
