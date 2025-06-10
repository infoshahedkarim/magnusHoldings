-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 10, 2025 at 11:04 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u618725666_magpie`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `quote` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `detail`, `quote`, `created_at`, `updated_at`) VALUES
(1, 'The Leading Real Estate Rental Marketplace', 'In the ever-evolving Bangladeshi real estate landscape, Magpie Holdings Ltd. is a paragon of integrity and preeminence. Our steadfast dedication to transparency encourages genuine, candid engagements with every client. We undertake each development with meticulous precision and fervor, reflecting our unwavering commitment to quality, which is similar to developing our abodes. Embodying our ethos, \"Designing Space, Defining Lifestyle,\" we assert that intentional design underpins a gratifying existence. We artfully conflate innovative architectural ingenuity with the unique aspirations of our clientele, curating spaces that are both visually captivating and life-enhancing. Understanding that property acquisitions transcend mere transactions, we prioritize nurturing enduring relationships rooted in trust and respect. Our cadre of seasoned experts is resolutely committed to ensuring your journey is not only seamless but profoundly rewarding. At Magpie Holdings Ltd., we exceed mere construction; we forge homes and cultivate communities, steadfastly reflecting our passion for excellence and transformative design that endures.', 'Designing Space, Defining Lifestyle', '2025-04-22 22:13:50', '2025-04-22 22:13:50'),
(2, 'asa', '<p style=\"text-align:center\"><strong>saa&nbsp;</strong></p>', 'asdfa', '2025-04-23 23:55:32', '2025-04-23 23:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_4b395aae7fc73c932b5916b09303a118', 'i:1;', 1745469264),
('laravel_cache_4b395aae7fc73c932b5916b09303a118:timer', 'i:1745469264;', 1745469264),
('laravel_cache_82e6574a06e6e5b0eb85801076f91f03', 'i:1;', 1747898842),
('laravel_cache_82e6574a06e6e5b0eb85801076f91f03:timer', 'i:1747898842;', 1747898842),
('laravel_cache_d5134b6aa4593ccb15c7c72b8231f957', 'i:1;', 1748094196),
('laravel_cache_d5134b6aa4593ccb15c7c72b8231f957:timer', 'i:1748094196;', 1748094196),
('laravel_cache_e233db74220b44d18e44aa4c7c65a4d6', 'i:1;', 1745503114),
('laravel_cache_e233db74220b44d18e44aa4c7c65a4d6:timer', 'i:1745503114;', 1745503114),
('laravel_cache_ridgebenitsolutions@gmail.com|103.178.67.30', 'i:1;', 1747898842),
('laravel_cache_ridgebenitsolutions@gmail.com|103.178.67.30:timer', 'i:1747898842;', 1747898842);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `email1` varchar(255) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `map` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `phone1`, `phone2`, `email1`, `email2`, `address`, `map`, `created_at`, `updated_at`) VALUES
(1, '01531542756', '01531542756', 'ridgebenitsolutions@gmail.com', 'ridgebenitsolutions@gmail.com', '752/2, Begum Rokeya Sarani, West Shewrapara', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7301.4524792676875!2d90.374469!3d23.792761000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2685d61fdfc08a97%3A0x1399fa63c4f39516!2sRidgeben%20IT%20Solutions!5e0!3m2!1sen!2sbd!4v1745381275333!5m2!1sen!2sbd\" width=\"1920\" height=\"720\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2025-04-22 22:08:03', '2025-04-22 22:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `logodark` varchar(255) DEFAULT NULL,
  `about` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `logo`, `logodark`, `about`, `address`, `phone`, `email`, `facebook`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, '_1_1747898896.png', '_2_1745328395.png', 'In the ever-evolving Bangladeshi real estate landscape, Magpie Holdings Ltd. is a paragon of integrity and preeminence. Our steadfast dedication to transparency encourages genuine, candid engagements with every client.', '752/2, Begum Rokeya Sarani, West Shewrapara', '01531542756', 'ridgebenitsolutions@gmail.com', 'https://www.facebook.com/info.shahedkarim', 'https://www.facebook.com/info.shahedkarim', 'https://www.linkedin.com/in/shahedkarim', 'https://www.facebook.com/info.shahedkarim', '2025-04-22 07:26:35', '2025-05-22 07:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `title1` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `title2` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `image`, `title`, `image1`, `title1`, `image2`, `title2`, `number`, `url`, `created_at`, `updated_at`) VALUES
(1, 'a_1_1745328524.jpg', 'a', 'a_2_1745328524.jpg', 'b', 'a_3_1745328524.jpg', 'c', '01898879912', 'https://youtu.be/QW_2CS0cc6I?si=YBKHc-NVlyAq2ol7', '2025-04-22 07:28:44', '2025-04-22 07:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_12_074659_add_two_factor_columns_to_users_table', 1),
(5, '2025_03_12_074725_create_personal_access_tokens_table', 1),
(6, '2025_04_10_091550_create_send_emails_table', 1),
(7, '2025_04_10_091808_create_contact_details_table', 1),
(8, '2025_04_12_061253_create_abouts_table', 1),
(9, '2025_04_12_071208_create_projects_table', 1),
(10, '2025_04_15_113144_create_banners_table', 1),
(11, '2025_04_20_051006_create_homes_table', 1),
(12, '2025_04_20_082607_create_footers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `address` varchar(255) NOT NULL,
  `squareft` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `floorplan` varchar(255) DEFAULT NULL,
  `detail` longtext NOT NULL,
  `map` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `slug`, `place`, `price`, `address`, `squareft`, `image1`, `image2`, `floorplan`, `detail`, `map`, `created_at`, `updated_at`) VALUES
(1, 'River Side Plot', 'river-side-plot', 'Uttara', 21000.00, 'Sector 18, Road 06', '1400', 'river-side-plot_1_1745328344.png', 'river-side-plot_2_1745328344.jpg', 'river-side-plot_3_1745328344.png', 'In the ever-evolving Bangladeshi real estate landscape, Magpie Holdings Ltd. is a paragon of integrity and preeminence. Our steadfast dedication to transparency encourages genuine, candid engagements with every client. We undertake each development with meticulous precision and fervor, reflecting our unwavering commitment to quality, which is similar to developing our abodes. Embodying our ethos, \"Designing Space, Defining Lifestyle,\" we assert that intentional design underpins a gratifying existence. We artfully conflate innovative architectural ingenuity with the unique aspirations of our clientele, curating spaces that are both visually captivating and life-enhancing. Understanding that property acquisitions transcend mere transactions, we prioritize nurturing enduring relationships rooted in trust and respect. Our cadre of seasoned experts is resolutely committed to ensuring your journey is not only seamless but profoundly rewarding. At Magpie Holdings Ltd., we exceed mere construction; we forge homes and', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7262312059393!2d90.3744692!3d23.7927613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2685d61fdfc08a97%3A0x1399fa63c4f39516!2sRidgeben%20IT%20Solutions!5e0!3m2!1sen!2sbd!4v1745215812680!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2025-04-22 07:25:44', '2025-04-22 07:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `send_emails`
--

CREATE TABLE `send_emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_emails`
--

INSERT INTO `send_emails` (`id`, `name`, `email`, `phone`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'John', 'oesbavka@formtest.guru', 'John', 'RCkwPY JAPOMKW KmPJnj rsW UTLz', '2025-05-10 18:47:35', '2025-05-10 18:47:35'),
(2, 'TestUser', 'kdgtpifz@formtest.guru', 'Hello', 'lDe bBoyMED uYKNKPi KqrRC EuJmKnT rQsIK', '2025-05-10 18:47:35', '2025-05-10 18:47:35'),
(3, 'lkjdretlvssss www.yandex.ru', 'john@protdskeit.ru', 'lkjdretlvssss www.yandex.ru', 'lkjdretlvssss www.yandex.ru', '2025-05-18 09:57:17', '2025-05-18 09:57:17'),
(4, 'lkjdretlvssss www.yandex.ru', 'john@protdskeit.ru', 'lkjdretlvssss www.yandex.ru', 'lkjdretlvssss www.yandex.ru', '2025-05-18 09:57:18', '2025-05-18 09:57:18'),
(5, 'Monique Bastyan', 'monique.bastyan@hotmail.com', '3213335537', 'Access ChatGPT, Claude, Gemini Pro , Kling AI, LLaMA, Mistral, DALL.E, LLaMa & more—all from a single dashboard.\r\n\r\nNo subscriptions or no monthly fees—pay once and enjoy lifetime access.\r\n\r\nAutomatically switch between AI models based on task requirements.\r\n\r\nAnd much more ... hamsterkombat.expert/AIIntelliKit', '2025-05-24 19:59:17', '2025-05-24 19:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0zT34ZAjZGH5VmUp5shJQj8EcIfjIVNgyvRE1Ygy', NULL, '35.155.66.123', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:89.0) Gecko/20100101 Firefox/89.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibVBTQWliTEY0SDJhZ2l5dTg2YU5kUG43NnBQWDUwZ05qbGFqZFg4bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL2NvbnRhY3Qtc2hvdyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749369204),
('2pakADDsyrE0m2MHb9aP71mo1GGCUw4GOadrR30X', NULL, '2a02:4780:2c:3::2', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRWRWbWtqd2s2bHNnM1NCWnpkZHZxR1lPckNYUTk4aE9WR3NLYmZTQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749525604),
('2QRIcbCmLSesrtIuGjC0iPgLu90uNKSc44lWAkMa', NULL, '42.236.17.118', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36; 360Spider', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTkswcUhPOW9MdWZNRk1xenkzd1RvQ0FIcG1XRnZsQmdCY3c1dW5GViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd3d3Lm1hZ3BpZWhvbGRpbmdzbHRkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749401103),
('3e3Y6zIBXUL93KG6Uzl3pBYt73bpkmjIR29FhXDZ', NULL, '43.157.82.252', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSDh3T3Q5eWd6Vk5ZZk1IMTBXQUdhQ2o5Wkhycng5Q1pjbzZpbjZCWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd3d3Lm1hZ3BpZWhvbGRpbmdzbHRkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749502832),
('3gHtQ1JML5QNpMbaflmt4LvF10kgHkgswIYMOQ1f', NULL, '64.233.173.64', 'Mozilla/5.0 (compatible; Google-Site-Verification/1.0)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoickNrbWwzMm0yRXBObkVtQzFaY25oek1wZEZUUHFyd2ZPcVlIZFlaMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749369357),
('4SjKi0uFAC9Z3Ev6TLH8iaIVS71wUI9P0D1Il8Uq', NULL, '35.155.66.123', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjFPU0V3TElKQXFXZGZSNUpLa3FaQmhtUGozTjRDVldiUzJmQms2TCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749369201),
('66rfePuOX8XD5lJVxWwUaU8QfjUzzGfmw9pzajnu', NULL, '162.43.236.96', 'Mozilla/5.0 (Windows NT 52.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU2hxdFBTNHpYVkk5SHA1VThSVmVQeUVDMzUyRk1XNzhpclZ3eU5RRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL2Fib3V0LXNob3ciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749541198),
('746OobDC6eKuNdWhXnLe5208sgfdbds8LseXJNbz', NULL, '101.128.108.158', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicE43UDhqa0E3UzFyVkhzVU1vNGRpNkFrc0lYOHlrN2tjRDYxWHRXMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749369117),
('97eFGLjUQsklFr1pPaeEZDDxHjvqYNHNdPuYCkzB', NULL, '2600:1f18:66cd:1a50:9d24:83d5:51c1:b563', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSDk3dFZCVmlPRVpRRkdYZ3pSaVdhdEVZWm9UTWVMeFVrT3hEZDJHcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL2Fib3V0LXNob3ciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749364883),
('9iIGnvBEhuSmCEXbE7aPAS6gVUGQZVMkWtsLdmmm', NULL, '152.39.251.147', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.9439.667 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiajJNOUlXMFB2SGRBYzBOTjNUTklNU3dRMWNIQjBOTHFFV2tQRjlQYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL2NvbnRhY3Qtc2hvdyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749541201),
('cba0MeKh3jAcU7xAiHayMXOOH2vr8kiLJAy4SW7r', NULL, '2001:4860:7:506::d3', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Mobile Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiNGxCWVU5RzRCdk1pV2lUSUhzOTJCQXVKaG5SUmdSRlhXbDFZUVRpdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749404656),
('CzlBjGKkIvSMsZpgbSj3mEsOOorLOOchK040Hcaa', NULL, '2a02:4780:2c:3::5', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVmtyaUllaU50a2hqT1JmWjJ2TlFVU2NYTkNLSkFlUEYyT2o0NFhIcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749439485),
('d74SkzZmrz19mNZ3uMPSbzLTZovtiB8wWf9M9GvF', NULL, '2a03:2880:f806:15::', 'meta-externalagent/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOHExRGkzejhvdXRHNElwalk0aVJ4SXJJVU15VGtMbGFkS0tRYUZEMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL2FsbHByb2plY3RzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749425063),
('DhQmqqBBCefuCqXyFhdwWHT5nhIAZmbbxzS1PWxS', NULL, '43.153.107.22', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQVFNSGswdEZGaU5va2xMU0ZHajM3Y1FpeWtMNlc5eEtUdUlRQ2pQayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749367175),
('dshF2IgW0B49khZTBEgaeofWljYEMnjuaYDEwllE', NULL, '43.153.107.22', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieDJTNml5WDhxRHFkNGhYNVZsSGtoTHA0czkyYUZ1bmZzR0hLVkM3NiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd3d3Lm1hZ3BpZWhvbGRpbmdzbHRkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749450124),
('dstA2yaibU958WJAJRiVMbbD9yYZUAHtEZjhWGne', NULL, '44.242.158.125', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidnNVMG5oVzU3c3lsMkJTTnpRRld1NjNQQ1NvT0paQ2dJa3loZUhYdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749435258),
('fCqCU1HNCtT8V2eKqquImr7PkWhM7J3wqhrhgR0w', NULL, '2001:bc8:1201:1d:ba2a:72ff:fee0:e46a', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNFViMWJtVm1kTTBUQjBmaUhBZ2c0aURPWjlWdWV0NWhMVWVpaDdaNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749489434),
('fLNTionuy6h8vcLgQblIjWC5WnIdSbdaoGerYnDi', NULL, '49.51.233.46', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMzhaQUVWeUVkU2Q2RzRvd0pBRjFsM2w1MnNHeUpHZEFMQzgyRWtKeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749443981),
('gTc2YflWwJtQOu2ASt1FjpzvbHjel0s6Q7fZb0GM', NULL, '121.4.97.180', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSjl6SG9uUjF4ZkxaNXE2QjdxejdzQmtEd1JOOGd2VEczZUU2ZGtRMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd3d3Lm1hZ3BpZWhvbGRpbmdzbHRkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749439899),
('GxXG4aiTJuyk9JpjQ2tjHvIFTSqxmmkiZPNxyBKe', NULL, '35.155.66.123', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV3NyMHhPMmY3djhwRUhjTEV3Q3hOQW1uQmFsR2k0TEFkMnlkVnVVaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL2NvbnRhY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749369203),
('hr8z34dGHmMgpSm5FPjV7J9pp0S8nxKZTHlsoQNI', NULL, '2a02:4780:2c:3::2', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWNDQnR0R2xPQndTQW9FRGJRUDRHcEt4THBiOWlyOWRVbjMzQmFFUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749441904),
('iJFbcjRASiNBfKdZ3mZSEeJZjnx8TVIUHbrt1Gnz', NULL, '64.233.173.69', 'Mozilla/5.0 (compatible; Google-Site-Verification/1.0)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUWpXWVB6NkphTlJhdm9GUE85Z254aThlQVVtcWZ2Q2h2YjR1bUNPUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749369357),
('ikLgoliLoRHTSDu5kmUyMqCE2ZEhUUtPwxVytgQa', NULL, '118.195.165.218', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMEFUV2RJTG5qeWJqUTJTb2Jrc0pUUTA4Q2FGdVR1ZW1Ja1pwZHVsVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd3d3Lm1hZ3BpZWhvbGRpbmdzbHRkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749418457),
('jq6Gz7SiUdw9oFbhhU8SeDRCAZggGrLGLlGTytzc', NULL, '49.51.183.15', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib1NTS05rMlRsaTBIRTFFZDRjVDR1WDJkb29YdVRwUnlNRnkzclRSSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL2NvbnRhY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749369190),
('K80n1TFzzZwA9RVm7TdhHFDv8UQEjgcgysL1MWIz', NULL, '64.233.173.72', 'Mozilla/5.0 (compatible; Google-Site-Verification/1.0)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUmpyemlDNmQxOE4yTk9JTlVlNTBsdkdNajZZRXpjRk9tSElCRjBqUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749369357),
('KDAIE1R6ULu99md8sfZfQhBR5DFvE5e1jFtV6rKk', NULL, '2a02:4780:2c:3::5', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidlhYOUlSWjFSTjJtM2JFZGM5b2puQnBFbTZHVVRsbmtnSDhibEE3MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749530162),
('LbAFSYIoCqYcF0YFqSFPot2dBBPgkqG6p9NIyxCk', NULL, '64.233.173.70', 'Mozilla/5.0 (compatible; Google-Site-Verification/1.0)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRmZ1bEJ5R3hadzFMMnkwY0ZSa2dxdHNaZHlEOWxHbUFQdTd4RTRuNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tLz9jYWNoZWJ1c3Rlcj05NzI5Njc4MzMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749369358),
('llKrksmAJqugR7rbevAmYeHuXWHWFez7uz4LnzS2', NULL, '198.240.78.45', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) GSA/218.0.456502374 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibERqQThXS0xJcVR4ZzV4Nmx6Yk9paVVMSFFCM2RsOTcwR2NXVDF1SCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749541193),
('lSsgqfBGwNG0AV03g1aKxvJN6a8zpI0DDDHieOWJ', NULL, '43.165.65.75', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0FtWWtIVjBwbzgwNzlQNHJ1eENUYmRZQnNBY1ZBRTJpYTZIVm5ZOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vd3d3Lm1hZ3BpZWhvbGRpbmdzbHRkLmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749451951),
('mmbQp5vAgCKpNO5bulh9PhUReCS8uQe5YwoUSgTg', NULL, '2001:4860:7:806::c2', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Mobile Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiN05FaWFlTnJpNno5bGE0MUxWR29BZUhwSEJiVnI5ZGdmdTIyN3VIciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749494906),
('mqFXpBvXwpGi8hTQ0wvmSU3NnTit72O2FPS8I6nh', NULL, '2a02:4780:2c:3::2', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTm5FNGJoYmNRS1g0Y0wwSUg2dWxENFBrVW91dWtaVWEwY2VieURUbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749373909),
('Nq9F2wmTrZjck69x0BzzdZiwRAjMYL5nt5pEAcBL', NULL, '2001:4860:7:506::ef', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Mobile Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoienJLcldsTWZYOFcyT1F5SmtUeWlKbXBtektwTDY0N3BSbGlhVVhIZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749494908),
('pAwnSXRf5mlIJC1YHW6Ho78whI1IAVmbrs2ScHVq', NULL, '35.155.66.123', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidnNZcmk5bzVBd2RWUXQ4Nm0zV1ZTRGhaY0R5eVBQb3lWVHVONnF3ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL2Fib3V0LXNob3ciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749369201),
('plMVcHueZRbo3Di36PXvxdcEkDocr6KcemAt01ug', NULL, '66.249.79.164', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.7103.113 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTBxalN1Y2hDdEQ4cnQ4cXp0RW5XSHhGMVRkN0t1MkttaEZNOXBuaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vd3d3Lm1hZ3BpZWhvbGRpbmdzbHRkLmNvbS9ibG9nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749488123),
('PLT8sivzuk4uEhujqmqOoLr70u2dzYSTUOyDHYOj', NULL, '66.207.179.88', 'Mozilla/5.0 (Windows NT 81.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieU1vU1BRR2Y3Vm1yZVdiWUQxTHNJNFcwMkR0bmpLYldwUmNjaG43ZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL2Fib3V0LXNob3ciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749541198),
('PQF7mK9HwJ9apDUbyiPWHG0mAg8IUbPqwirYvKLO', NULL, '66.249.70.136', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.7103.113 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVlZJUTFtZ2VjUlNCRDBnV3BmSUIzbkwyWHd0SEtYWE9yZ3FGb0Q1NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL2FsbHByb2plY3RzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749375026),
('PVhHEW9yWQT5QvPzHhFbViqdoaS2Is3hGugbOhNF', NULL, '168.151.126.101', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/19F77 [FBAN/FBIOS;FBAV/375.0.0.28.107;FBBV/382449820;FBDV/iPhone14,3;FBMD/iPhone;FBSN/iOS;FBSV/15.5;FBSS/3;FBID/phone;FBLC/en_Qaau_US;FBOP/5;FBRV/383303063]', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZjBPTHBxMms2VDlYeU5RNzhhU21xdnQwSHkxcjNyV3ZVVFEyRk5NaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL2NvbnRhY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749541200),
('PwLyYyhM16bqJvLXhnV2LdMeOb1Guy0bYkAddmN3', NULL, '162.14.197.180', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSThwODJjTW5UTnZ6a0xKNmJaTUw4Q09LNk43WDBFY09TbGMwam1hMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749407848),
('rAvwlMbFd0BojrDABqKI65uhuj0uA2vnOAmy1gUk', NULL, '66.249.79.169', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.7103.113 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU1ZkRmhiZHdyWmJySFV3bDJFQ1VWRTc0Y01jaVZWVFNONGMyN0hjaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vd3d3Lm1hZ3BpZWhvbGRpbmdzbHRkLmNvbS9hYm91dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749517281),
('RB2RkNChdsV0yVQV9e4yKF8TUKUvHOxoZ2bMaVFb', NULL, '35.155.66.123', 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_7_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/92.0.4515.159 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOFpKVmRMdHNTVncwaEhUZUx2MHBJMUdRN0xIZmF3SHZGNllWbEo0ZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749369196),
('RwcSxe6IDcn3Wfqgm7jI56uObo4zEix9QG3qPfDl', NULL, '84.32.139.127', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 Instagram 243.1.0.14.111 (iPhone10,6; iOS 15_5; es_ES; es-ES; scale=3.00; 1125x2436; 382468104) NW/3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicjgyZTZnZTZCOHl0MDJSbktMcTgzSHZLbmxTZVB5empKVzhkc2ZPbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL2NvbnRhY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749541199),
('soimm6PanOyT9OTrjTdU7FIDUDM2EHANKeSztbgV', NULL, '188.241.1.1', 'Mozilla/5.0 (Windows NT 16.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYXowSDN3dzROWmpTemxkOXNWV3Fqcm44UHUxQ1g4bDBhWEI3Q2NwTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749541195),
('SV1fL7HrLkkjf0h5bot0EN0P0viaMcDzvGT0WJnJ', NULL, '43.130.32.245', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic3hleDZKYmd4M3U2cTFpM21IVmNyY3VCMkM0bWU4U1JsTWZ4ejlHdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749392680),
('tctPYKPZfSVHosZiFFvc3lWAUAdePBLX97oGP12b', NULL, '2001:4ba0:cafe:c13::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.54', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidXdQdjdQaEhweVVuRldmY0pXZktIajRFdUtXRkxSR1pTVDVVQ2w3RSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749470288),
('TGAsGaoDjQLtcvd6f2f66YM78Y35wwVlxFf85rVB', NULL, '2001:bc8:701:1c:b283:feff:fee3:5ec4', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUXBJZlRzY1pIUjB4b3ZNYUxYNFNBb3lJRjdiUzc4aEtHSk95QjcyMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749397471),
('TWrt9CoEhT7txCmNIhtLAs7269kBn1BMcVphMilP', NULL, '35.155.66.123', 'Mozilla/5.0 (Linux; Android 10; Pixel 3 XL Build/QQ3A.200805.001) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMmJoZjdyczJXUmtzT2FBZTZvaUlCZ2FkV3FEdE1wUjhtTGNmR0tscSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjA6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL3Byb2plY3RkZXRhaWxzL3JpdmVyLXNpZGUtcGxvdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749369203),
('u78ra2tJMj6StHljTMpF6rpVzkHiViaZLmzhakBU', NULL, '2a03:2880:f806:c::', 'meta-externalagent/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejl1QWxXYlgyZ2JhdGNzSHNnTzNXdjVwNm9CMDFGYlFWQ2s0cHRHMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjA6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL3Byb2plY3RkZXRhaWxzL3JpdmVyLXNpZGUtcGxvdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749485554),
('U8ACVD3poCzbFjCBKijpGi2nHzEMgWhvG0GWFVdf', NULL, '2001:4860:7:806::c6', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Mobile Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTGk1WkZ6azB0ekJvNWVhM24yQXRrNXNQQjBhZGFRSkxuaXZDZlowSSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749404658),
('uTV4lGtCIKtoW46yHtD9eGoDlzJh65Lo7ZlFpqN5', NULL, '2a02:4780:2c:3::5', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjdNaG1pQTRUSVFkWnhSS1NmWlFjRktKckgyY0txODBCVFNEaFdsdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749375071),
('Uu11uZD7c34r2A5X44qfLFg0WZTO3AjeAENO8ta7', NULL, '154.17.130.242', 'Mozilla/5.0 (Linux; Android 13; SM-G981B Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/124.0.6367.159 Mobile Safari/537.36 Instagram 330.0.0.40.92 Android (33/13; 480dpi; 1080x2277; samsung; SM-G981B; x1s; exynos990; de_DE; 596227463)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUTNHbXJCb1JobG1WSlBVUmxvbmZPRThMc25WZndtamFOdFpVeXRDZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL2NvbnRhY3Qtc2hvdyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749541201),
('vUJu1UP7TNws1puXQgDZfUR4QVel0ogg9O0alNuQ', NULL, '42.236.17.69', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36; 360Spider', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUlQeUpobVcxVmNhSU1zQmlSN2pEOVB3RkdLSHl0bTZjcklkZ1pzYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749426245),
('vvyfDjRBdRyH0ySNxCt9lbc7RkRsopiNcAPpdPJ6', NULL, '101.42.117.179', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakRzV3RQcUMzTVUyMWZnOTdmY2pwUGcxVU9kNHFuRVBOeDFwd2xvNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd3d3Lm1hZ3BpZWhvbGRpbmdzbHRkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749550750),
('WBDdumgTM9IHdCDwhIHLdznNFAwKMCpuFaFwFk0B', NULL, '165.227.32.76', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVlDUnB1ZllFa3JBOThQaEVkOFE0M2FUTFkzd3I2WlpadXQ5b2JnNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749412907),
('WT8vdv50aCfa2bq6zyQ1FQWWdsHwe34D8AkHzE8i', NULL, '170.106.72.178', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidmdGTFlXYlo3bGc1cWx6S3U3RHVyNHRlbVQ2Q2w3UWlQOUNVaE9rZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd3d3Lm1hZ3BpZWhvbGRpbmdzbHRkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749441863),
('wYbZc1peOPtvtiODPCoSo0pyon0vKo0P4UyAEF22', NULL, '43.167.157.80', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoickU2UkR2TFZDbjhiWkNjU0s5WHhGcjB5QmM4aGpLWXc1ZWJvWHk0ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd3d3Lm1hZ3BpZWhvbGRpbmdzbHRkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749532529),
('X8iqaO0Wl5pmNTWaIgOQ7G1iL9JVMYbj9SG4pnEW', NULL, '66.249.73.101', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.7103.113 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWFMzdEVMb05CVHdvNlpOcFNSVTRrZGZEeXBvdXp5d0xzN2s4cHBBMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749502172),
('XbncrJJGpuLmRzuvwnllTsxMXIfbNKnJzegL0WXi', NULL, '35.155.66.123', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidjh0dEYxTDUyVjRQNVJWTHJNQ0ROc1BDOVpiWkdqV2ZxU05INWhWViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL2FsbHByb2plY3RzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749369201),
('xwyKUuTnNkuMARfl3CZVqEDbYqjd47ArgAwMH8sV', NULL, '66.249.79.161', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.7103.113 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicDVYMlBsQ1hidWMwQWM3b2EzcG8zRXJUb2tNV0tOdmM1ZUZNaFJQbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd3d3Lm1hZ3BpZWhvbGRpbmdzbHRkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749542338),
('YiHUrjdiLmhRJx1EXlHyMgwPkZ1qDG4ACBDOlTPj', NULL, '114.117.233.112', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWVpnUUJjT01hemhpdlFscHFaRnc0QUZWOVhCYXJwNkVINW96NUtYbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd3d3Lm1hZ3BpZWhvbGRpbmdzbHRkLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749528464),
('YPtaMHxiTdwpOMLndBcusYOftwJwvUsYEckjnQhE', NULL, '54.36.148.151', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZWZoZTZGOHBCVVI4eTk3VkNZUzhUVldJSlkwckZqS1E5V1pyMG42UyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL2NvbnRhY3Qtc2hvdyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749477860),
('Z6xbKwDrmMG0deBlGiKYwC9FGS0tpeOt8odk6FIk', NULL, '170.106.148.137', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTklWS1lQd1VNbEZPVjc3WmdRa2VheUJkY082dUJIR213QTczTkUzaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749449128),
('ZrJeR3l2i9VPwKWVtDFdJ3sH0rMNSTTFouH53HRn', NULL, '86.48.17.227', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSUpTaDhvUUpEdEVjb3hnSXlQV3NXaVRzdUY3dzdOcTdRV3lPQnR6QyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749503997),
('zWM4MuhmuVkT9udp8wv2q7ziNoFVP0NC7fjmtxHM', NULL, '66.249.70.128', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.7103.113 Mobile Safari/537.36 (compatible; GoogleOther)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidnlSNnJETmpLaEFYb2lpc290ajFZR2FscTVwZHVrMTFLSk5vdlJxMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749380426),
('zyZjEquO7If6vZM01Jdkq728IUixYmhDRuDTf4FI', NULL, '2a03:2880:f806::', 'meta-externalagent/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT0ZZWkVRNlZySmZWZlpDcDZjSHZCVmNzbDZwSERvckQwSDFWd0c4YiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjA6Imh0dHBzOi8vbWFncGllaG9sZGluZ3NsdGQuY29tL3Byb2plY3RkZXRhaWxzL3JpdmVyLXNpZGUtcGxvdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749390835);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_type`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'shahed karim', 'admin', 'shahed.ridgeben@gmail.com', NULL, '$2y$12$tua7pbt3bm5z4Hj213TNX.1wQYXcWM8ACLnsa5N84dyAwcKZzX6wq', NULL, NULL, NULL, '8V4qofwdKvgOhB7Iu51sXcwlaUkG1G5gJTKD1VBMqq98bsiJhilARluDIAhW', NULL, NULL, '2025-04-22 23:11:55', '2025-04-22 23:11:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_emails`
--
ALTER TABLE `send_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `send_emails`
--
ALTER TABLE `send_emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
