-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2024 at 04:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dalle_helper`
--

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
('474b72cf0e89f4819360149a419b9bc3', 'i:1;', 1723126209),
('474b72cf0e89f4819360149a419b9bc3:timer', 'i:1723126209;', 1723126209),
('9ded0ce7971eaddacea462832c3278a4', 'i:2;', 1723126224),
('9ded0ce7971eaddacea462832c3278a4:timer', 'i:1723126224;', 1723126224),
('b2ec88d0c43df059b66b02dcbce52f2f', 'i:1;', 1723113533),
('b2ec88d0c43df059b66b02dcbce52f2f:timer', 'i:1723113533;', 1723113533),
('c6b4e85e89a2057c90df3589c56397ef', 'i:1;', 1723126198),
('c6b4e85e89a2057c90df3589c56397ef:timer', 'i:1723126198;', 1723126198);

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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(8, '0001_01_01_000000_create_users_table', 1),
(9, '0001_01_01_000001_create_cache_table', 1),
(10, '0001_01_01_000002_create_jobs_table', 1),
(11, '2024_05_19_233751_add_two_factor_columns_to_users_table', 1),
(12, '2024_05_19_233759_create_personal_access_tokens_table', 1),
(13, '2024_05_20_025432_create_posts_table', 1),
(14, '2024_05_20_030006_create_parameters_table', 1),
(15, '2024_08_02_042645_alter_posts_table_add_columns', 2),
(18, '2024_08_02_074616_remove_published_at_from_posts_table', 3),
(19, '2024_08_05_062659_add_reads_to_posts_table', 4),
(21, '2024_08_06_015735_create_post_like_table', 5),
(24, '2024_08_08_093657_create_comments_table', 6),
(25, '2024_08_08_131655_create_roles_table', 7),
(26, '2024_08_08_131655_create_role_user_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

CREATE TABLE `parameters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `text_color` varchar(255) DEFAULT NULL,
  `custom` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parameters`
--

INSERT INTO `parameters` (`id`, `user_id`, `name`, `type`, `image`, `text_color`, `custom`, `created_at`, `updated_at`) VALUES
(1, 1, 'Close-up', 'Camera: proximity', NULL, NULL, 0, '2024-07-24 22:07:39', '2024-07-24 22:07:39'),
(2, 1, 'Low angle', 'Camera: angle', NULL, NULL, 0, '2024-07-24 22:53:15', '2024-07-24 22:53:15'),
(3, 1, 'Fish-eye lens', 'Camera: lens', NULL, NULL, 0, '2024-07-24 22:55:22', '2024-07-24 22:55:22'),
(11, 1, '1960s', 'Styles', 'parameters/rWpyChiI2E12ZXqEWmdSbxqi69gdBiKYC0Y3ub4w.jpg', '', 0, '2024-07-27 23:58:29', '2024-07-27 23:58:29'),
(12, 1, 'Minimalism', 'Styles', 'parameters/sTh8RxqWSPFVhbt6Hj7fHsavUhAXVNSa2LUkPnit.jpg', '', 0, '2024-07-27 23:58:50', '2024-07-27 23:58:50'),
(13, 1, 'Vienna Secession', 'Styles', 'parameters/J4oFI93qgY449UMTyZXIzh68RJSZq3F0cZTQ1M3R.jpg', '', 0, '2024-07-27 23:59:08', '2024-07-27 23:59:08'),
(14, 1, 'Cyberpunk', 'Styles', 'parameters/OrWZGaHorG7JhTj9iXJVndHBQKNedBgZ62wk75gl.png', '', 0, '2024-07-28 00:17:04', '2024-07-28 00:17:04'),
(15, 1, 'Gothic', 'Styles', 'parameters/3Xere3yPBGzzU7lcGgDNXFkad1qaxr3M6CZWrC7F.png', '', 0, '2024-07-28 00:17:13', '2024-07-28 00:17:13'),
(16, 1, 'Anime', 'Styles', 'parameters/OqGuSgIPwwqDHHyN4X0V9lMHpZPp9enSmAjZN1d3.png', '', 0, '2024-07-28 00:20:53', '2024-07-28 00:20:53'),
(17, 1, 'Pop art', 'Styles', 'parameters/vbsHgV9XPgIy3am5exHjbNkvTRzq8mX6oY1stW0s.png', '', 0, '2024-07-28 00:31:12', '2024-07-28 00:31:12'),
(18, 1, 'Dark', 'Vibes', 'parameters/VWA1j0s0T7UGV1QebamoxLhdFChCCCxbUQqUaclU.png', '', 0, '2024-07-28 01:00:18', '2024-07-28 01:00:18'),
(19, 1, 'Calm', 'Vibes', 'parameters/MU1lg0Hdg7829dHUAtMeZD8kfR8PN3MXWh1pWk65.png', '', 0, '2024-07-28 01:00:28', '2024-07-28 01:00:28'),
(20, 1, 'Vibrant', 'Vibes', 'parameters/KQccKKJYfIIN8OzTS1jrXtvecyTZmCBo6kaCEjdz.png', '', 0, '2024-07-28 01:00:41', '2024-07-28 01:00:41'),
(21, 1, 'Melancholic', 'Vibes', 'parameters/tCsfe2xSgCULWpxq5RFTkHttmgWyzQIHA3PnxW4Z.png', '', 0, '2024-07-28 01:00:50', '2024-07-28 01:00:50'),
(22, 1, 'Fast shutter speed', 'Camera: settings', NULL, '', 0, '2024-07-28 21:47:46', '2024-07-28 21:47:46'),
(23, 1, 'Black and white', 'Film types', 'parameters/iCyqHTYd44ntakezR2MDu73rwqPVcIw8Hfnrtx6x.png', '', 0, '2024-07-28 23:01:01', '2024-07-28 23:01:01'),
(25, 1, 'Slide film', 'Film types', 'parameters/slide-film.png', '', 0, '2024-07-28 23:30:39', '2024-07-28 23:30:39'),
(26, 1, 'Polaroid', 'Film types', 'parameters/polaroid.png', '', 0, '2024-07-28 23:31:24', '2024-07-28 23:31:24'),
(27, 1, 'Cinematic', 'Film types', 'parameters/cinematic.png', '', 0, '2024-07-28 23:31:42', '2024-07-28 23:31:42'),
(28, 1, 'Blue hour', 'Lighting', 'parameters/blue-hour.png', '', 0, '2024-07-29 00:48:02', '2024-07-29 00:48:02'),
(29, 1, 'Golden hour', 'Lighting', 'parameters/golden-hour.png', '', 0, '2024-07-29 00:48:11', '2024-07-29 00:48:11'),
(30, 1, 'Flat lighting', 'Lighting', 'parameters/flat-lighting.png', NULL, 0, '2024-07-29 00:48:25', '2024-07-29 00:49:05'),
(31, 1, 'Low key', 'Lighting', 'parameters/low-key.png', NULL, 0, '2024-07-29 00:48:34', '2024-07-29 00:48:55'),
(32, 1, 'Natural', 'Lighting', 'parameters/natural.png', '', 0, '2024-07-29 00:48:45', '2024-07-29 00:48:45'),
(33, 1, 'Leonardo da Vinci', 'Artists', 'parameters/leonardo-da-vinci.png', '', 0, '2024-07-29 00:59:01', '2024-07-29 00:59:01'),
(34, 1, 'Banksy', 'Artists', 'parameters/banksy.png', '', 0, '2024-07-29 00:59:21', '2024-07-29 00:59:21'),
(35, 1, 'Piet Mondrian', 'Artists', 'parameters/piet-mondrian.png', '', 0, '2024-07-29 00:59:36', '2024-07-29 00:59:36'),
(36, 1, 'Salvador Dali', 'Artists', 'parameters/salvador-dali.png', '', 0, '2024-07-29 00:59:47', '2024-07-29 00:59:47'),
(37, 1, 'Green', 'Colors', 'parameters/green.png', '', 0, '2024-07-29 01:49:37', '2024-07-29 01:49:37'),
(38, 1, 'Hot Pink', 'Colors', 'parameters/hot-pink.png', '', 0, '2024-07-29 01:50:02', '2024-07-29 01:50:02'),
(39, 1, 'Indigo', 'Colors', 'parameters/indigo.png', '', 0, '2024-07-29 01:50:17', '2024-07-29 01:50:17'),
(40, 1, 'Gold', 'Colors', 'parameters/gold.png', '', 0, '2024-07-29 01:50:29', '2024-07-29 01:50:29'),
(41, 1, 'Baby Blue', 'Colors', 'parameters/baby-blue.png', '', 0, '2024-07-29 01:50:38', '2024-07-29 01:50:38'),
(42, 1, 'Brick', 'Materials', 'parameters/brick.png', '', 0, '2024-07-29 02:24:33', '2024-07-29 02:24:33'),
(43, 1, 'Ceramic', 'Materials', 'parameters/ceramic.png', '', 0, '2024-07-29 02:24:47', '2024-07-29 02:24:47'),
(44, 1, 'Cotton', 'Materials', 'parameters/cotton.png', '', 0, '2024-07-29 02:24:55', '2024-07-29 02:24:55'),
(45, 1, 'Quartz', 'Materials', 'parameters/quartz.png', '', 0, '2024-07-29 02:25:05', '2024-07-29 02:25:05'),
(46, 1, 'Emerald', 'Materials', 'parameters/emerald.png', '', 0, '2024-07-29 02:25:14', '2024-07-29 02:25:14'),
(47, 1, 'Skin', 'Materials', 'parameters/skin.png', '', 0, '2024-07-29 02:25:25', '2024-07-29 02:25:25');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `ai_model` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
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
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(3, 1, 1, NULL, NULL);

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
('pSjRfgVG1Bq3fYhk6tpDe8pX19hObIIpnRrFIf3g', 2, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVGRsb3FxZThWT21lQzRIT3lkSGFZNlZjN3BYbzNXcGRmdVpQbWpsTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly9sb2NhbGhvc3QvZGFsbGUtaGVscGVyLXByb2plY3QvcHVibGljL2hlbHBlciI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1723126181),
('SjlztxJA13lanBZnSTB4nh6XuoZumzKF8CfTI8EP', 62, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWmZaQjhQWVdKZkk3ZTk2RjdMYnoxSWV1M2ZYclZZZlhhYWFMdEJJTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHA6Ly9sb2NhbGhvc3QvZGFsbGUtaGVscGVyLXByb2plY3QvcHVibGljL3JlZ2lzdGVyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NjI7fQ==', 1723124330);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@test.com', NULL, '$2y$12$wwMM1gAjlIYZwtJ5/QHuWufAT.acRMVHfr1Q3HTyw4afDx4unYe7.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-08 06:00:25', '2024-08-08 06:00:25'),
(2, 'John Doe', 'jdoe@test.com', NULL, '$2y$12$KDDPKy1km4i5PNYrNkb1oOhJeXZBnCnLG0jOx3X/0SaUJS3znJhca', NULL, NULL, NULL, 'vYkJOqNjjt2LDAFEr3LAYxiJrsr1kakkHkwwEsaX400LKqz5z6HcXpU2kduf', NULL, NULL, '2024-08-08 06:04:40', '2024-08-08 06:04:40'),
(3, 'Patty', 'patty@test.com', NULL, '$2y$12$.IyJIOITlSDJzuENj3JfpOjZ6QNH4EYtRxUM6dGAwe5iRv96VPm0W', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-08 06:06:43', '2024-08-08 06:06:43'),
(4, 'Stephanie Messi', 'steph@test.com', NULL, '$2y$12$cI5PR1zBK54WXW4y9a1xRO/pwLqq3WOJzMZUuRAmmCwCChkfXh3GW', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-08 06:07:59', '2024-08-08 06:07:59');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `parameters`
--
ALTER TABLE `parameters`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_views_index` (`views`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_like_user_id_index` (`user_id`),
  ADD KEY `post_like_post_id_index` (`post_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `parameters`
--
ALTER TABLE `parameters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
