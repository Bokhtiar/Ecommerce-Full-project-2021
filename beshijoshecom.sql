-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 05:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beshijoshecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_category_id` int(11) NOT NULL,
  `tegs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_des` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `title`, `slug`, `artist_category_id`, `tegs`, `image`, `short_des`, `body`, `posted_by`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry', 2, 'esd1', '[\"uploads\\/artist\\/photos\\/vxkLZFzRlep6TYFRnQRuL1N0yihdSTJRRNmxKeIt.jpg\"]', '<p>It is a long established fact that a reader will be distracted by the readable content of a page ]</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum i</p>', '1', 1, '2021-01-13 22:44:13', '2021-01-13 22:45:44'),
(3, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum i', 'it-is-a-long-established-fact-that-a-reader-will-be-distracted-by-the-readable-content-of-a-page-when-looking-at-its-layout-the-point-of-using-lorem-ipsum-i', 3, 'esd1', '[\"uploads\\/artist\\/photos\\/5Iif09n6wo2TL85nW6MZh8Fea6rnvDYZYoDJkSYx.jpg\"]', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum i', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum i', '1', 1, '2021-01-13 22:44:37', '2021-01-13 22:45:50'),
(5, 'ing it look like readable English. Many desktop publishing packages and web page editors no', 'ing-it-look-like-readable-english-many-desktop-publishing-packages-and-web-page-editors-no', 4, 'good', '[\"uploads\\/artist\\/photos\\/r2YE1rBiPwTeF2J1u2ZoJAayTm28MIEH2Mk7ziZq.jpg\"]', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1', 1, '2021-01-13 22:45:34', '2021-01-13 22:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `artist_categories`
--

CREATE TABLE `artist_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artist_cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artist_categories`
--

INSERT INTO `artist_categories` (`id`, `artist_cat_name`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Drummers', 'drummers', '[\"uploads\\/Artist\\/category\\/photos\\/6c9DBJU0qAnIFgRjzWcWC7lvQ4pdTBSj60UMRDWg.jpg\"]', '1', '2021-01-12 03:05:47', '2021-01-12 03:07:52'),
(3, 'Guitarists', 'guitarists', '[\"uploads\\/Artist\\/category\\/photos\\/jWKX6afKfl2ljMmglA1wXT8tgDoMoERSDhUPO4KR.jpg\"]', '1', '2021-01-12 03:05:59', '2021-01-12 03:06:44'),
(4, 'Cajonists', 'cajonists', '[\"uploads\\/Artist\\/category\\/photos\\/TCAwjKfyRfx9Agym9rIbAFX1qtLt5LbgIj0zmvUT.jpg\"]', '1', '2021-01-12 03:06:14', '2021-01-12 03:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_id` int(11) NOT NULL,
  `tegs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_des` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `love` int(11) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `blog_category_id`, `tegs`, `featured_image`, `short_des`, `body`, `posted_by`, `love`, `view`, `status`, `created_at`, `updated_at`) VALUES
(6, '<p><strong>Lorem Ipsum</strong> <strong>is simply dummy text of the printing and typesetting industry</strong></p>', 'pstronglorem-ipsumstrong-strongis-simply-dummy-text-of-the-printing-and-typesetting-industrystrongp', 1, 'good', '[\"uploads\\/blog\\/photos\\/AGj19FYw93lhyGcravLGX5oDCeZpFd73kGjJBhdx.jpg\"]', '<p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s</p>', '<p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s</p>', '1', NULL, NULL, 0, '2021-01-10 04:42:09', '2021-01-13 01:16:52'),
(7, '<p><strong>It is a long established fact that a reader will be distracted by the readable </strong></p>', 'pstrongit-is-a-long-established-fact-that-a-reader-will-be-distracted-by-the-readable-strongp', 1, 'esd1', '[\"uploads\\/blog\\/photos\\/0rKSs39D4ROET58Tm5dPcVEWa3P9lvhM9q1Qqvy1.jpg\"]', '<p>content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>', '<p>content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,content of a page when looking at its layout. The point of usingLorem Ipsum is that it has a more-or-less normal distribution of letters,</p>', '1', NULL, NULL, 0, '2021-01-10 04:43:23', '2021-01-13 01:17:19'),
(8, '<p><strong>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots</strong></p>', 'pstrongcontrary-to-popular-belief-lorem-ipsum-is-not-simply-random-text-it-has-rootsstrongp', 2, 'good', '[\"uploads\\/blog\\/photos\\/aPV4ommA4O7njgQ6OqFAP8f4r9w4Bcg6IF5IPAu1.jpg\"]', '<p>roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,&nbsp;</p>', '<p>roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,&nbsp;</p>', '1', NULL, NULL, 1, '2021-01-10 04:44:19', '2021-01-10 05:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_Name`, `category_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fruit', '[\"uploads\\/blogcategory\\/photos\\/C3UGZsyggbBd5M45qV3YZvEH0oQlIwvdOaCYtzva.jpg\"]', 1, '2021-01-09 23:33:17', '2021-01-13 00:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Drums', '[\"uploads\\/category\\/photos\\/BYYEMMoVSfgfvzMwmYJ92bNJLZxqGwAQfSTcrPuy.jpg\"]', 1, '2021-01-12 02:14:34', '2021-01-12 23:50:23'),
(7, 'Electric Guitars', '[\"uploads\\/category\\/photos\\/wtGlPfUO9gMUJLE6ezKz7Khc515QOeQS7xt9Y5nE.jpg\"]', 1, '2021-01-12 02:15:16', '2021-01-12 23:50:29'),
(8, 'Bass Guiters', '[\"uploads\\/category\\/photos\\/BJWX232Bprcqv93OOtLigPaj7fABovKUYOWXo250.jpg\"]', 1, '2021-01-12 02:16:05', '2021-01-12 23:50:35'),
(9, 'Cajons', '[\"uploads\\/category\\/photos\\/gHfCuMn0tKtu358opQutRIluwx3m9QiEl0wYEgg4.jpg\"]', 1, '2021-01-12 02:16:44', '2021-01-12 23:50:40'),
(10, 'Drums and Percussion', '[\"uploads\\/category\\/photos\\/efJaVmCAgha4JzTITjVCqHjL8MyLmFItjPjiGYHG.jpg\"]', 1, '2021-01-12 02:17:23', '2021-01-12 23:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dealer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dealer_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dealer_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` (`id`, `dealer_name`, `slug`, `dealer_location`, `dealer_image`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(2, '<p>guiters&nbsp;</p>', 'pguitersnbspp', 'ashulia', '[\"uploads\\/dealer\\/photos\\/nTsp33LHmWK2hDkx8vpd6qvRfSyybruUeEpQaDgB.jpg\"]', '<p>asdasdasdf</p>', '0', '2021-01-12 03:59:02', '2021-01-12 03:59:02');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(4, '2021_01_07_062129_create_roles_table', 1),
(5, '2021_01_08_061249_create_categories_table', 1),
(6, '2021_01_09_160511_create_sub_categories_table', 2),
(7, '2021_01_10_050303_create_blogs_table', 3),
(8, '2021_01_10_051117_create_blog_categories_table', 3),
(9, '2021_01_12_083417_create_artist_categories_table', 4),
(10, '2021_01_12_091403_create_dealers_table', 5),
(11, '2021_01_12_112435_create_artists_table', 6),
(12, '2021_01_13_053821_create_videos_table', 7),
(13, '2021_01_13_083815_create_products_table', 8);

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
  `category_id` int(11) NOT NULL,
  `subCategory_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_type` tinyint(1) NOT NULL DEFAULT 0,
  `discount_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock_amount` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(255) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subCategory_id`, `title`, `slug`, `code`, `sell_price`, `discount_type`, `discount_amount`, `stock_amount`, `description`, `featured_image`, `video`, `status`, `created_at`, `updated_at`) VALUES
(5, 7, NULL, 'rice', 'rice', '1232', '3', 0, NULL, 2332, '<p>fasdad</p>', '[\"uploads\\/product\\/photos\\/lQB9XSSgmOFtA4wNYECVGiQdMfZxJDccosWzuvq0.jpg\",\"uploads\\/product\\/photos\\/y7WsBZ8cnpfGUuNO6zo4kbfFY5RN9z6vlcbaRUGf.jpg\"]', '[\"uploads\\/video\\/photos\\/11ULfIYu5SX6rLBhBO6R7V2yXcuh7vDd4hFpuRKQ.jpg\"]', 1, '2021-01-13 05:05:31', '2021-01-14 03:38:28'),
(6, 7, NULL, 'Lorem Ipsum is simply dummy text of', 'lorem-ipsum-is-simply-dummy-text-of', '1232', '21.00', 1, '2', 2, 'Lorem Ipsum is simply dummy text of Lorem Ipsum is simply dummy text of', '[\"uploads\\/product\\/photos\\/wKRZSarMNtBq4oP79v3HbEuP39OrsWqG447ibESx.jpg\",\"uploads\\/product\\/photos\\/YwIS4WITo0lniWdNB2Nwk2ySmj0WI8Q9yxQWkmml.jpg\"]', '', 1, '2021-01-14 02:20:52', '2021-01-14 03:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `subcategory_image`, `status`, `created_at`, `updated_at`) VALUES
(3, 6, 'Apple', '[\"uploads\\/subcategory\\/photos\\/Cd5fZDqkEpyw25oS6OGmkl2hVK6tOjLlOKGeZ5zZ.jpg\"]', 0, '2021-01-13 04:32:22', '2021-01-13 04:32:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$ybxkTt8/Tqmw2G2r.knMfucx.Qsn3wQbeQqWF3oSyJQXZgF1GZT/.', '1', NULL, NULL, '2021-01-12 23:29:20'),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$z44fz8r6aTbSsuMzQ2qN8ubr6Cl6lnsvqXTZPQtxlyrZMsnqoHVq6', '2', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artist_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `artist_name`, `video`, `des`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Nafiz Iqbal', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/UFaZS-f7biY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unkn</p>', 1, '2021-01-14 04:47:08', '2021-01-14 06:04:54'),
(3, 'Nafiz Iqbal sir,', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/V-1bFSh9Obs\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unkn', 1, '2021-01-14 04:47:18', '2021-01-14 06:07:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artists_title_unique` (`title`),
  ADD UNIQUE KEY `artists_slug_unique` (`slug`);

--
-- Indexes for table `artist_categories`
--
ALTER TABLE `artist_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_name_unique` (`category_name`);

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `artist_categories`
--
ALTER TABLE `artist_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
