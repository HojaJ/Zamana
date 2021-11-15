-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2021 at 12:43 PM
-- Server version: 5.7.33
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zamana`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_tk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_tk` longtext COLLATE utf8mb4_unicode_ci,
  `content_ru` longtext COLLATE utf8mb4_unicode_ci,
  `content_en` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title_tk`, `title_ru`, `title_en`, `content_tk`, `content_ru`, `content_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Biz barada', 'Biz barada', 'Biz baradaas', '<p>\r\n                        Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. \r\n                      </p>\r\n                      <p>\r\n                        Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. <br/>\r\n                        Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. \r\n                      </p>', '<p>\r\n                        Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. \r\n                      </p>\r\n                      <p>\r\n                        Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. <br/>\r\n                        Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. \r\n                      </p>', '<p>\r\n                        Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. \r\n                      </p>\r\n                      <p>\r\n                        Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. <br/>\r\n                        Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. Bu ýerde Zaman H.K barada maglumat bolmaly. \r\n                      </p>', 'images/1636027842.jpg', '2021-11-04 07:10:42', '2021-11-04 07:24:00'),
(2, 'Address', 'Address', 'Address', 'Türkmenistan, Aşgabat ş. Änew şäherçesi Garaşsyzlyk köçesi jaý 7', 'Türkmenistan, Aşgabat ş. Änew şäherçesi Garaşsyzlyk köçesi jaý 8', 'Türkmenistan, Aşgabat ş. Änew şäherçesi Garaşsyzlyk köçesi jaý 7', NULL, '2021-11-04 07:27:05', '2021-11-04 07:29:44'),
(3, 'Email', 'Email', 'Email', 'zamana@gmail.com', 'zamana@gmail.com', 'zamana@gmail.com', NULL, '2021-11-04 07:32:19', '2021-11-08 08:38:32'),
(4, 'Tell', 'Tell', 'Tell', '+99365000000', '+99365000000', '+99365000000', NULL, '2021-11-04 07:33:24', '2021-11-04 07:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_tk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_tk`, `name_ru`, `name_en`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'Peýnir görnüşleri', 'Peýnir görnüşleri', 'Peýnir görnüşleri', 'Peýnir görnüşleri', '2021-11-08 09:10:12', '2021-11-08 09:10:12'),
(5, 'Süýt görnüşleri', 'Süýt görnüşleri', 'Süýt görnüşleri', 'Süýt görnüşleri', '2021-11-08 09:10:32', '2021-11-08 09:10:32'),
(6, 'Gatyk görnüşleri', 'Gatyk görnüşleri', 'Gatyk görnüşleri', 'Gatyk görnüşleri', '2021-11-08 09:10:48', '2021-11-08 09:10:48'),
(7, 'Gaýmak görnüşleri', 'Gaýmak görnüşleri', 'Gaýmak görnüşleri', 'Gaýmak görnüşleri', '2021-11-08 09:11:02', '2021-11-08 09:11:02'),
(8, 'Aýran görnüşleri', 'Aýran görnüşleri', 'Aýran görnüşleri', 'Aýran görnüşleri', '2021-11-08 09:11:17', '2021-11-08 09:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_02_122329_create_categories_table', 1),
(5, '2021_11_02_134455_create_products_table', 1),
(7, '2021_11_03_101623_create_moments_table', 2),
(9, '2021_11_03_104059_create_partners_table', 3),
(10, '2021_11_03_113849_create_suggests_table', 4),
(11, '2021_11_03_121152_create_abouts_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `moments`
--

CREATE TABLE `moments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `moments`
--

INSERT INTO `moments` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Pursat 1', 'images/1636380059.jpg', '2021-11-08 09:00:59', '2021-11-09 00:30:16'),
(2, 'Pursat 2', 'images/1636380081.jpg', '2021-11-08 09:01:21', '2021-11-08 09:01:21'),
(3, 'Pursat3', 'images/1636380106.jpg', '2021-11-08 09:01:45', '2021-11-08 09:01:46'),
(4, 'Pursat 4', 'images/1636435849.jpg', '2021-11-09 00:30:49', '2021-11-09 00:30:49'),
(5, 'Pursat 5', 'images/1636435869.jpg', '2021-11-09 00:31:09', '2021-11-09 00:31:09'),
(6, 'Pursat 6', 'images/1636435900.jpg', '2021-11-09 00:31:40', '2021-11-09 00:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_tk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_tk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `title_tk`, `title_ru`, `title_en`, `testimonial_tk`, `testimonial_ru`, `testimonial_en`, `image`, `created_at`, `updated_at`) VALUES
(1, '-Alp et steakhouse', '-Alp et steakhouse', '-Alp et steakhouse', '\"Zamana Süýdi Meniň Iň Halaýan Süýdüm! Diňe Bir Ajaýyp Tagamly Bolman, Bedenimiň Her Gün Güýçli Etýän Zady. Zamana Süýdüni Bilen Islendik Gün Meniň Üçin Gowy Gün\"', '\"Zamana Süýdi Meniň Iň Halaýan Süýdüm! Diňe Bir Ajaýyp Tagamly Bolman, Bedenimiň Her Gün Güýçli Etýän Zady. Zamana Süýdüni Bilen Islendik Gün Meniň Üçin Gowy Gün\"', '\"Zamana Süýdi Meniň Iň Halaýan Süýdüm! Diňe Bir Ajaýyp Tagamly Bolman, Bedenimiň Her Gün Güýçli Etýän Zady. Zamana Süýdüni Bilen Islendik Gün Meniň Üçin Gowy Gün\"', 'images/1636437549.png', '2021-11-09 00:59:08', '2021-11-09 00:59:09'),
(2, 'Kamil', 'Kamil', 'Kamil', '\"Zamana Süýdi Meniň Iň Halaýan Süýdüm! Diňe Bir Ajaýyp Tagamly Bolman, Bedenimiň Her Gün Güýçli Etýän Zady. Zamana Süýdüni Bilen Islendik Gün Meniň Üçin Gowy Gün\"', '\"Zamana Süýdi Meniň Iň Halaýan Süýdüm! Diňe Bir Ajaýyp Tagamly Bolman, Bedenimiň Her Gün Güýçli Etýän Zady. Zamana Süýdüni Bilen Islendik Gün Meniň Üçin Gowy Gün\"', '\"Zamana Süýdi Meniň Iň Halaýan Süýdüm! Diňe Bir Ajaýyp Tagamly Bolman, Bedenimiň Her Gün Güýçli Etýän Zady. Zamana Süýdüni Bilen Islendik Gün Meniň Üçin Gowy Gün\"', 'images/1636437662.png', '2021-11-09 01:01:02', '2021-11-09 01:01:02'),
(3, 'MB', 'MB', 'MB', NULL, NULL, NULL, 'images/1636437709.png', '2021-11-09 01:01:49', '2021-11-09 01:01:49'),
(4, 'Halk Market', 'Halk Market', 'Halk Market', NULL, NULL, NULL, 'images/1636437737.png', '2021-11-09 01:02:17', '2021-11-09 01:02:17'),
(5, 'Novada', 'Novada', 'Novada', NULL, NULL, NULL, 'images/1636437769.png', '2021-11-09 01:02:49', '2021-11-09 01:02:49'),
(6, 'Hezzet', 'Hezzet', 'Hezzet', NULL, NULL, NULL, 'images/1636437802.png', '2021-11-09 01:03:22', '2021-11-09 01:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_tk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title_tk`, `title_ru`, `title_en`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Peýnir duzly', 'Peýnir duzly', 'Peýnir duzly', 'images/1636380727.jpg', 4, '2021-11-08 09:12:07', '2021-11-08 09:12:07'),
(2, 'Peýnir duzly', 'Peýnir duzly', 'Peýnir duzly', 'images/1636380786.jpg', 4, '2021-11-08 09:13:06', '2021-11-08 09:13:06'),
(3, 'Peýnir duzly', 'Peýnir duzly', 'Peýnir duzly', 'images/1636380806.jpg', 4, '2021-11-08 09:13:26', '2021-11-08 09:13:26'),
(4, 'Pastezirlenen sygyr süýdi', 'Pastezirlenen sygyr süýdi', 'Pastezirlenen sygyr süýdi', 'images/1636380849.jpg', 5, '2021-11-08 09:14:09', '2021-11-08 09:14:09'),
(5, 'Pastezirlenen sygyr süýdi', 'Pastezirlenen sygyr süýdi', 'Pastezirlenen sygyr süýdi', 'images/1636380872.jpg', 5, '2021-11-08 09:14:32', '2021-11-08 09:14:32'),
(6, 'Pastezirlenen sygyr süýdi', 'Pastezirlenen sygyr süýdi', 'Pastezirlenen sygyr süýdi', 'images/1636380889.jpg', 5, '2021-11-08 09:14:49', '2021-11-08 09:14:49'),
(7, 'Ýagsyz kefir', 'Ýagsyz kefir', 'Ýagsyz kefir', 'images/1636380924.jpg', 6, '2021-11-08 09:15:24', '2021-11-08 09:15:24'),
(8, 'Ýagsyz kefir', 'Ýagsyz kefir', 'Ýagsyz kefir', 'images/1636380957.jpg', 6, '2021-11-08 09:15:57', '2021-11-08 09:15:57'),
(9, 'Ýagsyz kefir', 'Ýagsyz kefir', 'Ýagsyz kefir', 'images/1636380984.jpg', 6, '2021-11-08 09:16:24', '2021-11-08 09:16:24'),
(10, 'Gaýmak 250gr', 'Gaýmak 250gr', 'Gaýmak 250gr', 'images/1636381008.jpg', 7, '2021-11-08 09:16:48', '2021-11-08 09:16:48'),
(11, 'Gaýmak 250gr', 'Gaýmak 250gr', 'Gaýmak 250gr', 'images/1636381048.jpg', 7, '2021-11-08 09:17:27', '2021-11-08 09:17:28'),
(12, 'Gaýmak 250gr', 'Gaýmak 250gr', 'Gaýmak 250gr', 'images/1636381069.jpg', 7, '2021-11-08 09:17:48', '2021-11-08 09:17:49'),
(13, 'Aýran', 'Aýran', 'Aýran', 'images/1636381109.jpg', 8, '2021-11-08 09:18:29', '2021-11-08 09:18:29'),
(14, 'Aýran', 'Aýran', 'Aýran', 'images/1636381128.jpg', 8, '2021-11-08 09:18:48', '2021-11-08 09:18:48'),
(15, 'Aýran', 'Aýran', 'Aýran', 'images/1636381148.jpg', 8, '2021-11-08 09:19:08', '2021-11-08 09:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `suggests`
--

CREATE TABLE `suggests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_tk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_tk` longtext COLLATE utf8mb4_unicode_ci,
  `content_ru` longtext COLLATE utf8mb4_unicode_ci,
  `content_en` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suggests`
--

INSERT INTO `suggests` (`id`, `title_tk`, `title_ru`, `title_en`, `content_tk`, `content_ru`, `content_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Peýniriň peýdasy', 'Peýniriň peýdasy', 'Peýniriň peýdasy', 'Peýniriň adam üçin peýdasy gaty uly. Bu jadyky bir süýt önümidir. Münüň düzümindäki zatlar adamyň saglygyna uly täsirini ýetirýär. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. <br/><br/>\r\n                  &nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr.', 'Peýniriň adam üçin peýdasy gaty uly. Bu jadyky bir süýt önümidir. Münüň düzümindäki zatlar adamyň saglygyna uly täsirini ýetirýär. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. <br/><br/>\r\n                  &nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr.', 'Peýniriň adam üçin peýdasy gaty uly. Bu jadyky bir süýt önümidir. Münüň düzümindäki zatlar adamyň saglygyna uly täsirini ýetirýär. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. <br/><br/>\r\n                  &nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr.', 'images/1636437079.png', '2021-11-09 00:51:19', '2021-11-09 00:51:19'),
(2, 'Süýdiň Peýdaly Taraplary', 'Süýdiň Peýdaly Taraplary', 'Süýdiň Peýdaly Taraplary', '&nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. <br/><br/>\r\n                  &nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr.', '&nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. <br/><br/>\r\n                  &nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr.', '&nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. <br/><br/>\r\n                  &nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr.', 'images/1636382932.png', '2021-11-08 09:48:52', '2021-11-08 09:48:52'),
(3, 'Peýniriň peýdasy', 'Peýniriň peýdasy', 'Peýniriň peýdasy', 'Peýniriň adam üçin peýdasy gaty uly. Bu jadyky bir süýt önümidir. Münüň düzümindäki zatlar adamyň saglygyna uly täsirini ýetirýär. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. <br/><br/>\r\n                  &nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr.', 'Peýniriň adam üçin peýdasy gaty uly. Bu jadyky bir süýt önümidir. Münüň düzümindäki zatlar adamyň saglygyna uly täsirini ýetirýär. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. <br/><br/>\r\n                  &nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr.', 'Peýniriň adam üçin peýdasy gaty uly. Bu jadyky bir süýt önümidir. Münüň düzümindäki zatlar adamyň saglygyna uly täsirini ýetirýär. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. <br/><br/>\r\n                  &nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr.', 'images/1636383031.png', '2021-11-08 09:50:30', '2021-11-08 09:50:31'),
(5, 'Süýdiň Peýdaly Taraplary', 'Süýdiň Peýdaly Taraplary', 'Süýdiň Peýdaly Taraplary', '&nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. <br/><br/> &nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr.', '&nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. <br/><br/> &nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr.', '&nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. <br/><br/> &nbsp;&nbsp;&nbsp;&nbsp;Sygyr süýdi belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr. Şeýle hem süňküň ösmegi we myşsalaryň bekemeginde uly rol oýnaýar. Sygyr süýdü belok we kalsiý, şeýle hem b12 witamini we ýod ýaly ýokumly maddalardyr.', 'images/1636437347.png', '2021-11-09 00:55:47', '2021-11-09 00:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$9JTwIJamlCCFEL4PGcrHXuyWwDjBC0.nKRw34nAQTNFTbjc9R7UaO', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moments`
--
ALTER TABLE `moments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `suggests`
--
ALTER TABLE `suggests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `moments`
--
ALTER TABLE `moments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `suggests`
--
ALTER TABLE `suggests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
