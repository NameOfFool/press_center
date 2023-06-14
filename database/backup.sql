-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 14 2023 г., 11:31
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `press_center`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE `answers` (
  `question_id` bigint UNSIGNED NOT NULL,
  `id` bigint UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`question_id`, `id`, `answer`, `correct`, `created_at`, `updated_at`) VALUES
(1, 1, '16 лет', 1, NULL, NULL),
(1, 2, '18 лет', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Общие', NULL, '2023-06-12 10:38:43', '2023-06-12 10:38:43');

-- --------------------------------------------------------

--
-- Структура таблицы `category_news`
--

CREATE TABLE `category_news` (
  `category_id` bigint UNSIGNED NOT NULL,
  `news_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category_news`
--

INSERT INTO `category_news` (`category_id`, `news_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `documents`
--

CREATE TABLE `documents` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `documents_fields`
--

CREATE TABLE `documents_fields` (
  `field_id` bigint UNSIGNED NOT NULL,
  `document_id` bigint UNSIGNED NOT NULL,
  `pdf_field_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `documents_tags`
--

CREATE TABLE `documents_tags` (
  `document_id` bigint UNSIGNED NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `fields`
--

CREATE TABLE `fields` (
  `id` bigint UNSIGNED NOT NULL,
  `field_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto_field_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `i_n_n_s`
--

CREATE TABLE `i_n_n_s` (
  `id` bigint UNSIGNED NOT NULL,
  `INN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `k_p_p_s`
--

CREATE TABLE `k_p_p_s` (
  `id` bigint UNSIGNED NOT NULL,
  `KPP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lessons`
--

INSERT INTO `lessons` (`id`, `name`, `description`, `video`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Управление личными финансами', 'На каких этапах жизненного цикла человека возникают избыток и недостаток финансовых ресурсов? Какова цель личного финансового планирования? Какие задачи решает краткосрочное, среднесрочное и долгосрочное финансовое планирование?', '1', 'На каких этапах жизненного цикла человека возникают избыток и недостаток финансовых ресурсов? Какова цель личного финансового планирования? Какие задачи решает краткосрочное, среднесрочное и долгосрочное финансовое планирование?\r\nНиколай Берзон, заслуженный экономист РФ, д.э.н., профессор НИУ ВШЭ, руководитель Федерального методического центра по финансовой грамотности системы общего и среднего профессионального образования.', '2023-06-01 20:21:20', '2023-05-31 21:00:00'),
(2, 'Что изучает экономика. Потребности и блага', 'На каких этапах жизненного цикла человека возникают избыток и недостаток финансовых ресурсов? Какова цель личного финансового планирования? Какие задачи решает краткосрочное, среднесрочное и долгосрочное финансовое планирование?', '2', 'На каких этапах жизненного цикла человека возникают избыток и недостаток финансовых ресурсов? Какова цель личного финансового планирования? Какие задачи решает краткосрочное, среднесрочное и долгосрочное финансовое планирование?\r\nНиколай Берзон, заслуженный экономист РФ, д.э.н., профессор НИУ ВШЭ, руководитель Федерального методического центра по финансовой грамотности системы общего и среднего профессионального образования.', '2023-06-01 20:21:20', '2023-05-31 21:00:00'),
(3, 'Валовой внутренний продукт', 'На каких этапах жизненного цикла человека возникают избыток и недостаток финансовых ресурсов? Какова цель личного финансового планирования? Какие задачи решает краткосрочное, среднесрочное и долгосрочное финансовое планирование?', '3', 'На каких этапах жизненного цикла человека возникают избыток и недостаток финансовых ресурсов? Какова цель личного финансового планирования? Какие задачи решает краткосрочное, среднесрочное и долгосрочное финансовое планирование?\r\nНиколай Берзон, заслуженный экономист РФ, д.э.н., профессор НИУ ВШЭ, руководитель Федерального методического центра по финансовой грамотности системы общего и среднего профессионального образования.', '2023-06-01 20:21:20', '2023-05-31 21:00:00'),
(4, 'Экономический цикл', 'На каких этапах жизненного цикла человека возникают избыток и недостаток финансовых ресурсов? Какова цель личного финансового планирования? Какие задачи решает краткосрочное, среднесрочное и долгосрочное финансовое планирование?', '4', 'На каких этапах жизненного цикла человека возникают избыток и недостаток финансовых ресурсов? Какова цель личного финансового планирования? Какие задачи решает краткосрочное, среднесрочное и долгосрочное финансовое планирование?\r\nНиколай Берзон, заслуженный экономист РФ, д.э.н., профессор НИУ ВШЭ, руководитель Федерального методического центра по финансовой грамотности системы общего и среднего профессионального образования.', '2023-06-01 20:21:20', '2023-05-31 21:00:00'),
(5, 'Деньги и денежная масса', 'На каких этапах жизненного цикла человека возникают избыток и недостаток финансовых ресурсов? Какова цель личного финансового планирования? Какие задачи решает краткосрочное, среднесрочное и долгосрочное финансовое планирование?', '5', 'На каких этапах жизненного цикла человека возникают избыток и недостаток финансовых ресурсов? Какова цель личного финансового планирования? Какие задачи решает краткосрочное, среднесрочное и долгосрочное финансовое планирование?\r\nНиколай Берзон, заслуженный экономист РФ, д.э.н., профессор НИУ ВШЭ, руководитель Федерального методического центра по финансовой грамотности системы общего и среднего профессионального образования.', '2023-06-01 20:21:20', '2023-05-31 21:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2012_10_12_000000_create_users_table', 1),
(2, '2013_03_14_093354_create_organisations_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_01_19_074248_create_news_table', 1),
(7, '2023_01_19_115355_create_categories_table', 1),
(8, '2023_01_20_073516_create_category_news_table', 1),
(9, '2023_02_20_072717_create_documents_table', 1),
(10, '2023_02_21_075735_create_passports_table', 1),
(11, '2023_02_22_065008_create_i_n_n_s_table', 1),
(12, '2023_02_22_074239_create_tags_table', 1),
(13, '2023_03_14_095216_create_k_p_p_s_table', 1),
(14, '2023_03_14_130546_documents_tags', 1),
(15, '2023_03_29_093202_create_fields_table', 1),
(16, '2023_03_29_115853_create_documents_fields_table', 1),
(17, '2023_04_13_124135_create_lessons_table', 1),
(18, '2023_04_13_124157_create_questions_table', 1),
(19, '2023_04_13_124158_create_answers_table', 1),
(20, '2023_04_13_124333_tests_results', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_creation` datetime NOT NULL,
  `date_of_publication` datetime NOT NULL,
  `date_of_drop` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name`, `content`, `date_of_creation`, `date_of_publication`, `date_of_drop`) VALUES
(1, 'До 1 июля рекомендуется предоставить дорожную карту по переходу на налоговый мониторинг', 'PGRpdj7QpNCd0KEg0KDQvtGB0YHQuNC4INGA0LXQutC+0LzQtdC90LTRg9C10YIg0L7RgNCz0LDQvdC40LfQsNGG0LjRj9C8LCDQv9C70LDQvdC40YDRg9GO0YnQuNC8INC/0LXRgNC10YXQvtC0INC90LAg0L3QsNC70L7Qs9C+0LLRi9C5INC80L7QvdC40YLQvtGA0LjQvdCzINGBIDIwMjQg0LPQvtC00LAsINC00L4gMSDQuNGO0LvRjyDQv9GA0LXQtNGB0YLQsNCy0LjRgtGMINCyINC90LDQu9C+0LPQvtCy0YvQuSDQvtGA0LPQsNC9INC00L7RgNC+0LbQvdGD0Y4g0LrQsNGA0YLRgyDQv9C+INC/0L7QtNCz0L7RgtC+0LLQutC1INC4INC/0LXRgNC10YXQvtC00YMg0L3QsCDQvdC+0LLRi9C5INGE0L7RgNC80LDRgiDQuNC90YTQvtGA0LzQsNGG0LjQvtC90L3QvtCz0L4g0LLQt9Cw0LjQvNC+0LTQtdC50YHRgtCy0LjRjy48YnI+PGJyPjwvZGl2PjxkaXY+0JTQvtGA0L7QttC90LDRjyDQutCw0YDRgtCwINGA0LDQt9GA0LDQsdCw0YLRi9Cy0LDQtdGC0YHRjyDQutC+0LzQv9Cw0L3QuNC10Lkg0YHQvtCy0LzQtdGB0YLQvdC+INGBINC90LDQu9C+0LPQvtCy0YvQvCDQvtGA0LPQsNC90L7QvCDQuCDQv9GA0LXQtNC+0YHRgtCw0LLQu9GP0LXRgtGB0Y8g0L/QviDQvNC10YHRgtGDINC/0L7RgdGC0LDQvdC+0LLQutC4INC10ZEg0L3QsCDRg9GH0LXRgiDQuNC70Lgg0L/QviDQvNC10YHRgtGDINC/0L7RgdGC0LDQvdC+0LLQutC4INCyINC60LDRh9C10YHRgtCy0LUg0LrRgNGD0L/QvdC10LnRiNC10LPQviDQvdCw0LvQvtCz0L7Qv9C70LDRgtC10LvRjNGJ0LjQutCwLiDQntCx0YDQsNC30YbRiyDQtNC+0LrRg9C80LXQvdGC0L7QsiDRgNC10LPQu9Cw0LzQtdC90YLQuNGA0L7QstCw0L3RiyA8YSBocmVmPSJodHRwczovL3d3dy5uYWxvZy5nb3YucnUvcm43Ny9hYm91dF9mdHMvZG9jcy8xMDk5MDg3Ny8iPtC/0LjRgdGM0LzQvtC8INCk0J3QoSDQoNC+0YHRgdC40Lgg0L7RgiAwMS4wNi4yMDIxIOKEliDQodCULTQtMjMvNzYxNEA8L2E+IMKr0J4g0L/RgNC10LTRgdGC0LDQstC70LXQvdC40Lgg0LIg0KTQndChINCg0L7RgdGB0LjQuCDQtNC+0LrRg9C80LXQvdGC0L7Qsiwg0LjRgdC/0L7Qu9GM0LfRg9C10LzRi9GFINC/0YDQuCDQv9C10YDQtdGF0L7QtNC1INC90LAg0L3QsNC70L7Qs9C+0LLRi9C5INC80L7QvdC40YLQvtGA0LjQvdCzwrsuPGJyPjxicj48L2Rpdj48ZGl2PtCU0LvRjyDQutC+0LzQv9Cw0L3QuNC5INGBINCz0L7RgdGD0LTQsNGA0YHRgtCy0LXQvdC90YvQvCDRg9GH0LDRgdGC0LjQtdC8INC/0YDQtdC00L7RgdGC0LDQstC70LXQvdC40LUg0LTQvtGA0L7QttC90L7QuSDQutCw0YDRgtGLINC+0LHRj9C30LDRgtC10LvRjNC90L4sINC+0L3QsCDQtNC+0LvQttC90LAg0LHRi9GC0Ywg0YHQvtCz0LvQsNGB0L7QstCw0L3QsCDRgSDRhtC10L3RgtGA0LDQu9GM0L3Ri9C8INCw0L/Qv9Cw0YDQsNGC0L7QvCDQpNCd0KEg0KDQvtGB0YHQuNC4LiDQodC/0LXRhtC40LDQu9GM0L3Ri9C5INC/0LXRgNC10YfQtdC90Ywg0LDQutGG0LjQvtC90LXRgNC90YvRhSDQvtCx0YnQtdGB0YLQsiDRgSDQs9C+0YHRg9C00LDRgNGB0YLQstC10L3QvdGL0Lwg0YPRh9Cw0YHRgtC40LXQvCDRg9GC0LLQtdGA0LbQtNC10L0gPGEgaHJlZj0iaHR0cDovL2dvdmVybm1lbnQucnUvZG9jcy9hbGwvNDQzNjkvIj7RgNCw0YHQv9C+0YDRj9C20LXQvdC40LXQvCDQn9GA0LDQstC40YLQtdC70YzRgdGC0LLQsCDQoNC+0YHRgdC40LnRgdC60L7QuSDQpNC10LTQtdGA0LDRhtC40Lgg0L7RgiAyMyDRj9C90LLQsNGA0Y8gMjAwMyDQsy4g4oSWIDkxLdGAPC9hPi48YnI+PGJyPjwvZGl2PjxkaXY+0JTQvtGA0L7QttC90LDRjyDQutCw0YDRgtCwINC00L7Qu9C20L3QsCDRgdC+0LTQtdGA0LbQsNGC0Ywg0L/QvtGA0Y/QtNC+0Log0L/QvtC00LPQvtGC0L7QstC60Lgg0Lgg0L7QsdGB0YPQttC00LXQvdC40Y8g0YEg0L3QsNC70L7Qs9C+0LLRi9C8INC+0YDQs9Cw0L3QvtC8INGA0LXQs9C70LDQvNC10L3RgtCwINC40L3RhNC+0YDQvNCw0YbQuNC+0L3QvdC+0LPQviDQstC30LDQuNC80L7QtNC10LnRgdGC0LLQuNGPLCDQuNC90YTQvtGA0LzQsNGG0LjRjiDQvtCxINC+0YDQs9Cw0L3QuNC30LDRhtC40Lgg0YHQuNGB0YLQtdC80Ysg0LLQvdGD0YLRgNC10L3QvdC10LPQviDQutC+0L3RgtGA0L7Qu9GPINC+0YDQs9Cw0L3QuNC30LDRhtC40LgsINGA0LjRgdC60LDRhSDQuCDQutC+0L3RgtGA0L7Qu9GM0L3Ri9GFINC/0YDQvtGG0LXQtNGD0YDQsNGFLCDRgdGA0L7QutC4INC00LXQvNC+0L3RgdGC0YDQsNGG0LjQuCDQuCDRgtC10YHRgtC40YDQvtCy0LDQvdC40Y8g0LjQvdGE0L7RgNC80LDRhtC40L7QvdC90L7Qs9C+INCy0LfQsNC40LzQvtC00LXQudGB0YLQstC40Y8sINCwINGC0LDQutC20LUg0YHRgNC+0LrQuCDQv9C+0LTQs9C+0YLQvtCy0LrQuCDQuCDQv9GA0LXQtNGB0YLQsNCy0LvQtdC90LjRjyDQtNC+0LrRg9C80LXQvdGC0L7QsiDQsiDQvdCw0LvQvtCz0L7QstGL0Lkg0L7RgNCz0LDQvS48YnI+PGJyPjwvZGl2PjxkaXY+0J/QvtGB0LvQtSDRgdC+0LPQu9Cw0YHQvtCy0LDQvdC40Y8g0LTQvtGA0L7QttC90L7QuSDQutCw0YDRgtGLINC60L7QvNC/0LDQvdC40Y8g0LzQvtC20LXRgiDQv9C10YDQtdGF0L7QtNC40YLRjCDQuiDRjdGC0LDQv9GDINC/0L7QtNCw0YfQuCDQtNC+0LrRg9C80LXQvdGC0L7QsiDQtNC70Y8g0LLRgdGC0YPQv9C70LXQvdC40Y8g0LIg0L3QsNC70L7Qs9C+0LLRi9C5INC80L7QvdC40YLQvtGA0LjQvdCzLiDQlNC+IDEg0YHQtdC90YLRj9Cx0YDRjyDQvdC10L7QsdGF0L7QtNC40LzQviDQv9GA0LXQtNC+0YHRgtCw0LLQuNGC0Ywg0LIg0L3QsNC70L7Qs9C+0LLRi9C5INC+0YDQs9Cw0L0g0LfQsNGP0LLQu9C10L3QuNC1INC+INC/0YDQvtCy0LXQtNC10L3QuNC4INC90LDQu9C+0LPQvtCy0L7Qs9C+INC80L7QvdC40YLQvtGA0LjQvdCz0LAsINGA0LXQs9C70LDQvNC10L3RgiDQuNC90YTQvtGA0LzQsNGG0LjQvtC90L3QvtCz0L4g0LLQt9Cw0LjQvNC+0LTQtdC50YHRgtCy0LjRjywg0YHQstC10LTQtdC90LjRjyDQviDQstC30LDQuNC80L7Qt9Cw0LLQuNGB0LjQvNGL0YUg0LvQuNGG0LDRhSwg0YPRh9C10YLQvdGD0Y4g0L/QvtC70LjRgtC40LrRgyDQtNC70Y8g0YbQtdC70LXQuSDQvdCw0LvQvtCz0L7QvtCx0LvQvtC20LXQvdC40Y8g0L7RgNCz0LDQvdC40LfQsNGG0LjQuCDQuCDQtNC+0LrRg9C80LXQvdGC0Ysg0L4g0YHQuNGB0YLQtdC80LUg0LLQvdGD0YLRgNC10L3QvdC10LPQviDQutC+0L3RgtGA0L7Qu9GPLjwvZGl2Pg==', '2023-06-12 20:27:58', '2023-06-12 20:27:46', '5000-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `organisations`
--

CREATE TABLE `organisations` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `organisation_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisation_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `passports`
--

CREATE TABLE `passports` (
  `id` bigint UNSIGNED NOT NULL,
  `birth_date` date NOT NULL,
  `sex` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `series` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_issue` date NOT NULL,
  `issued_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` bigint UNSIGNED NOT NULL,
  `lesson_id` bigint UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `lesson_id`, `question`, `created_at`, `updated_at`) VALUES
(1, 1, 'С какого возраста за налоговые правонарушения могут привлечь к ответственности?', NULL, NULL),
(2, 1, 'Сколько лет необходимо хранить налоговые документы?', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tests_results`
--

CREATE TABLE `tests_results` (
  `user_id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `answer_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tests_results`
--

INSERT INTO `tests_results` (`user_id`, `question_id`, `answer_id`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `second_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `announcement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `second_name`, `name`, `announcement`, `email`, `admin`, `photo`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Тихонов', 'Иван ', NULL, 'ivan-pauk2002@mail.ru', 1, '1.png', '2023-06-02 07:11:30', '$2y$10$I.0DJYEvLmfcaXhyHjHakuWNS/bBGalNMR0f2Px1MeDZbSM3j/NWi', '5vscPLPl4p5jkAKyyyZUQuzPjzxe6IJ9qX9Fqpi9FvD93bHi36CvxSbn7NDq', '2023-06-02 07:11:30', '2023-06-02 07:11:30');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`question_id`,`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`news_id`,`category_id`),
  ADD KEY `category_news_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `documents_fields`
--
ALTER TABLE `documents_fields`
  ADD PRIMARY KEY (`field_id`,`document_id`),
  ADD KEY `documents_fields_document_id_foreign` (`document_id`);

--
-- Индексы таблицы `documents_tags`
--
ALTER TABLE `documents_tags`
  ADD PRIMARY KEY (`document_id`,`tag_id`),
  ADD KEY `documents_tags_tag_id_foreign` (`tag_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `i_n_n_s`
--
ALTER TABLE `i_n_n_s`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `k_p_p_s`
--
ALTER TABLE `k_p_p_s`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `organisations`
--
ALTER TABLE `organisations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `organisations_organisation_name_unique` (`organisation_name`),
  ADD KEY `organisations_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `passports`
--
ALTER TABLE `passports`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`,`lesson_id`),
  ADD KEY `lesson_id` (`lesson_id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tests_results`
--
ALTER TABLE `tests_results`
  ADD PRIMARY KEY (`user_id`,`answer_id`,`question_id`),
  ADD KEY `tests_results_question_id_answer_id_foreign` (`question_id`,`answer_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `fields`
--
ALTER TABLE `fields`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `organisations`
--
ALTER TABLE `organisations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `category_news`
--
ALTER TABLE `category_news`
  ADD CONSTRAINT `category_news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `category_news_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`);

--
-- Ограничения внешнего ключа таблицы `documents_fields`
--
ALTER TABLE `documents_fields`
  ADD CONSTRAINT `documents_fields_document_id_foreign` FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`),
  ADD CONSTRAINT `documents_fields_field_id_foreign` FOREIGN KEY (`field_id`) REFERENCES `fields` (`id`);

--
-- Ограничения внешнего ключа таблицы `documents_tags`
--
ALTER TABLE `documents_tags`
  ADD CONSTRAINT `documents_tags_document_id_foreign` FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`),
  ADD CONSTRAINT `documents_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Ограничения внешнего ключа таблицы `i_n_n_s`
--
ALTER TABLE `i_n_n_s`
  ADD CONSTRAINT `i_n_n_s_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `k_p_p_s`
--
ALTER TABLE `k_p_p_s`
  ADD CONSTRAINT `k_p_p_s_id_foreign` FOREIGN KEY (`id`) REFERENCES `organisations` (`id`);

--
-- Ограничения внешнего ключа таблицы `organisations`
--
ALTER TABLE `organisations`
  ADD CONSTRAINT `organisations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `passports`
--
ALTER TABLE `passports`
  ADD CONSTRAINT `passports_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `tests_results`
--
ALTER TABLE `tests_results`
  ADD CONSTRAINT `tests_results_question_id_answer_id_foreign` FOREIGN KEY (`question_id`,`answer_id`) REFERENCES `answers` (`question_id`, `id`),
  ADD CONSTRAINT `tests_results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
