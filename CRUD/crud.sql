-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 12 2024 г., 00:25
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crud`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `comment` varchar(535) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `comment`) VALUES
(5, '- Вы хотите рыбов?\r\n\r\n             ／＞   フ\r\n            | 　_　_| \r\n          ／` ミ＿xノ \r\n         /　　　　 |\r\n        /　 ヽ　　 ﾉ\r\n        │　　|　|　|\r\n／￣|　　 |　|　|\r\n(￣ヽ＿_ヽ_)__)\r\n＼二)\r\n\r\n- Хочу\r\n\r\n ╱|、\r\n(˚ˎ 。7  \r\n|、 ˜〵          \r\nじしˍ,)ノ\r\n\r\n- Берите\r\n- Спасибо\r\n\r\n⠀ ⠀     へ   ♡   ╱|、 \r\n     ૮ - ՛ )     (` -  7  \r\n     /  \\ ៸|      |、⁻ 〵  \r\n 乀 (ˍ, ل ل       じしˍ,)ノ ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
