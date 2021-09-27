-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 27 2021 г., 10:34
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yaroslavloc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Ноутбуки'),
(2, 'Телевизоры'),
(3, 'Мобильные телефоны');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `orders_status`
--

CREATE TABLE `orders_status` (
  `id` int NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders_status`
--

INSERT INTO `orders_status` (`id`, `name`) VALUES
(1, 'Новый'),
(2, 'Обрабатывается'),
(3, 'Передан в службу доставки'),
(4, 'Выполнен');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` varchar(564) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `category_id` int NOT NULL,
  `created_at` datetime NOT NULL,
  `img` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `rating` int NOT NULL,
  `featured` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `category_id`, `created_at`, `img`, `url`, `rating`, `featured`) VALUES
(1, 'Ноутбук New 2', 'Ноутбук 14 дюймов,новая модель 2021г.', '32000', 3, '2021-02-24 15:47:56', 'notebook.jpeg', '', 0, 0),
(3, 'TV SMART', 'New model', '12000', 1, '2021-02-24 15:47:56', 'tv.jpg', '', 45, 1),
(4, 'Coffee machine', 'Coffee machine office model', '22000', 1, '2021-02-24 15:47:56', 'coffee.jpg', '', 55, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `mark` int NOT NULL,
  `comment` varchar(564) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `second_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `login` varchar(40) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ava` varchar(255) NOT NULL,
  `group_id` int NOT NULL,
  `created_at` datetime NOT NULL,
  `address` varchar(255) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `visited_at` datetime DEFAULT NULL,
  `status_id` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `second_name`, `last_name`, `login`, `password`, `ava`, `group_id`, `created_at`, `address`, `ip`, `updated_at`, `visited_at`, `status_id`) VALUES
(1, 'Иван', 'Никовский', 'Алексеевич', 'admin', '$2y$10$RVyBk0ltY/oh1XXwlOVwU.PI9F6rvFNE1JX49QtGS0eY1tnWOGTCa', '55.jpg', 1, '2021-03-10 15:30:01', 'Киевская 27', '255.25.75.223', NULL, '2021-03-10 15:30:01', 1),
(2, 'Елена', 'Авраменко', 'Николаевна', 'elena', '$2y$10$RVyBk0ltY/oh1XXwlOVwU.PI9F6rvFNE1JX49QtGS0eY1tnWOGTCa', '66.jpg', 3, '2021-03-10 17:04:47', 'ул Лыбедская', '100.233.23.32', NULL, '2021-03-24 20:53:26', 2),
(4, 'Иван', 'Стрый', 'Алексеевич', '', '', '', 3, '2021-02-24 15:47:56', '', '', NULL, NULL, 1),
(6, 'Иван', 'Стрый', 'Алексеевич', '', '', '', 3, '2021-02-24 15:47:56', 'jgffffffffffffff', '255.25.75.223', '2021-04-12 15:23:21', '2021-04-20 15:23:21', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users_groups`
--

INSERT INTO `users_groups` (`id`, `name`) VALUES
(1, 'Администратор'),
(2, 'Зарегистрированный'),
(3, 'Покупатель');

-- --------------------------------------------------------

--
-- Структура таблицы `users_status`
--

CREATE TABLE `users_status` (
  `id` int NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users_status`
--

INSERT INTO `users_status` (`id`, `name`) VALUES
(1, 'Активирован'),
(2, 'Не в сети'),
(3, 'В сети'),
(4, 'Заблокирован');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders_status`
--
ALTER TABLE `orders_status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_status`
--
ALTER TABLE `users_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders_status`
--
ALTER TABLE `orders_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users_status`
--
ALTER TABLE `users_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
