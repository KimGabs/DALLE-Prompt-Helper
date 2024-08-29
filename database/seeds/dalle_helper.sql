-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2024 at 05:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- START TRANSACTION;
-- SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: "dalle_helper"
--

-- --------------------------------------------------------

--
-- Dumping data for table "parameters"
--

INSERT INTO "parameters" ("id", "user_id", "name", "type", "image", "text_color", "custom", "created_at", "updated_at") VALUES
(1, 1, 'Close-up', 'Camera: proximity', NULL, '', FALSE, '2024-08-09 04:41:08', '2024-08-09 04:41:08'),
(2, 1, 'Bright, Colorful, Vibrant', 'Vibes', 'parameters/0eKQWJjMCCE7r5sXgLD3HhNkDZiJoS7I8zubeDjV.png', NULL, FALSE, '2024-08-09 04:43:09', '2024-08-13 03:33:43'),
(3, 1, 'Low angle', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:44:23', '2024-08-09 04:44:23'),
(4, 1, 'Extreme Long Shot', 'Camera: proximity', NULL, '', FALSE, '2024-08-09 04:45:08', '2024-08-09 04:45:08'),
(5, 1, 'Long Shot', 'Camera: proximity', NULL, '', FALSE, '2024-08-09 04:45:44', '2024-08-09 04:45:44'),
(6, 1, 'Full Frame', 'Camera: proximity', NULL, '', FALSE, '2024-08-09 04:46:07', '2024-08-09 04:46:07'),
(7, 1, 'Medium Shot', 'Camera: proximity', NULL, '', FALSE, '2024-08-09 04:46:32', '2024-08-09 04:46:32'),
(8, 1, 'Eye Level Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:47:20', '2024-08-09 04:47:20'),
(9, 1, 'High Angle Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:47:29', '2024-08-09 04:47:29'),
(10, 1, 'Hip Level Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:47:47', '2024-08-09 04:47:47'),
(11, 1, 'Knee Level Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:48:02', '2024-08-09 04:48:02'),
(12, 1, 'Shoulder Level Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:48:17', '2024-08-09 04:48:17'),
(13, 1, 'Dutch Angle Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:48:24', '2024-08-09 04:48:24'),
(14, 1, 'Overhead Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:48:32', '2024-08-09 04:48:32'),
(15, 1, 'Aerial Shot', 'Camera: angle', NULL, '', FALSE, '2024-08-09 04:48:38', '2024-08-09 04:48:38'),
(16, 1, 'Fisheye', 'Camera: lens', NULL, '', FALSE, '2024-08-09 04:49:39', '2024-08-09 04:49:39'),
(17, 1, 'Wide angle', 'Camera: lens', NULL, '', FALSE, '2024-08-09 04:49:56', '2024-08-09 04:49:56'),
(18, 1, 'Standard lens', 'Camera: lens', NULL, '', FALSE, '2024-08-09 04:50:32', '2024-08-09 04:50:32'),
(19, 1, 'Medium telephoto', 'Camera: lens', NULL, '', FALSE, '2024-08-09 04:50:38', '2024-08-09 04:50:38'),
(20, 1, 'Super telephoto', 'Camera: lens', NULL, '', FALSE, '2024-08-09 04:51:00', '2024-08-09 04:51:00'),
(21, 1, 'Macro', 'Camera: lens', NULL, '', FALSE, '2024-08-09 04:51:08', '2024-08-09 04:51:08'),
(22, 1, 'Fast shutter speed', 'Camera: settings', NULL, '', FALSE, '2024-08-09 04:52:54', '2024-08-09 04:52:54'),
(23, 1, 'Slow shutter speed', 'Camera: settings', NULL, '', FALSE, '2024-08-09 04:53:10', '2024-08-09 04:53:10'),
(24, 1, 'Blur Background', 'Camera: settings', NULL, '', FALSE, '2024-08-09 04:54:43', '2024-08-09 04:54:43'),
(25, 1, 'Motion Blur', 'Camera: settings', NULL, '', FALSE, '2024-08-09 04:56:11', '2024-08-09 04:56:11'),
(26, 1, 'Kodachrome', 'Film types', 'parameters/IFI2SCjSDostTBLsvyPz7LpQ1kAjritL3d7vpV8D.png', NULL, FALSE, '2024-08-09 04:57:24', '2024-08-09 06:32:02'),
(27, 1, 'Autochrome', 'Film types', 'parameters/umoXMlqCi4hfKRiQYHHaFth3vvBId8J0qky7XOKy.png', NULL, FALSE, '2024-08-09 04:57:34', '2024-08-09 06:31:50'),
(28, 1, 'Lomography', 'Film types', 'parameters/W4DKp9yIsbHpep4uuzs0vMiM4yJZ1TJ7ShHQT8R6.png', NULL, FALSE, '2024-08-09 04:57:43', '2024-08-09 06:31:37'),
(29, 1, 'Polaroid', 'Film types', 'parameters/uzeWy8ZLGEobidcBOObrQnXfPMfFxvUW47sZbOUd.png', NULL, FALSE, '2024-08-09 04:57:53', '2024-08-09 06:31:26'),
(30, 1, 'Camera phone', 'Film types', 'parameters/IFGknmj7FNQoTJvok9CSaHkUGWg6jA2dsroOoNTS.png', NULL, FALSE, '2024-08-09 04:58:14', '2024-08-09 06:31:18'),
(31, 1, 'CCTV', 'Film types', 'parameters/8FpSAshljD38kmpd9LkahvoYWKJqj1AOvuZkSctZ.png', NULL, FALSE, '2024-08-09 04:58:35', '2024-08-09 06:31:05'),
(32, 1, 'Disposable Camera', 'Film types', 'parameters/DTU56RPv3SiKIYPmY8GFnFGN05i1trzMFpfHC09y.png', NULL, FALSE, '2024-08-09 04:58:53', '2024-08-09 06:30:56'),
(33, 1, 'Daguerrotype', 'Film types', 'parameters/5x10HF4yyhtR0C9xBe4mLr0onTmV4ilDsvCMTBX9.png', NULL, FALSE, '2024-08-09 04:59:11', '2024-08-09 06:30:46'),
(34, 1, 'Camera obscura', 'Film types', 'parameters/JGXPgFJdRfSGrh7JihBTzcK7ybQmHgAfPxME1wPN.png', NULL, FALSE, '2024-08-09 04:59:29', '2024-08-09 06:29:55'),
(35, 1, 'Cyanotype', 'Film types', 'parameters/ApZEvEby9HFjFBioGtehGogucZvB4v7FhBtIZs2J.png', NULL, FALSE, '2024-08-09 04:59:54', '2024-08-09 06:30:32'),
(36, 1, 'Black and white', 'Film types', 'parameters/0S0ZXCnBghnmD4YOxoPWghac15nVHLHyCsE3hSD2.png', NULL, FALSE, '2024-08-09 05:00:11', '2024-08-09 06:29:30'),
(37, 1, 'Redscale photography', 'Film types', 'parameters/D0CsVdtZVd3PM0ouEN8YFG15iwJiQjVzGCj1tTcC.png', NULL, FALSE, '2024-08-09 05:00:32', '2024-08-09 05:42:15'),
(38, 1, 'Infrared photography', 'Film types', 'parameters/OZXrayzi3aTtIIwo61egeLCJxOAUzsgGb5DPyCRR.png', NULL, FALSE, '2024-08-09 05:00:47', '2024-08-09 05:04:35'),
(39, 1, '3D Art Style', 'Styles', 'parameters/3d-art-style.png', '', FALSE, '2024-08-13 03:20:03', '2024-08-13 03:20:03'),
(40, 1, '1940s Fashion', 'Styles', 'parameters/1940s-fashion.png', '', FALSE, '2024-08-13 03:20:41', '2024-08-13 03:20:41'),
(41, 1, '1950s Fashion', 'Styles', 'parameters/1950s-fashion.png', '', FALSE, '2024-08-13 03:20:56', '2024-08-13 03:20:56'),
(42, 1, 'Anime', 'Styles', 'parameters/anime.png', '', FALSE, '2024-08-13 03:21:13', '2024-08-13 03:21:13'),
(43, 1, 'Blueprint style', 'Styles', 'parameters/blueprint-style.png', '', FALSE, '2024-08-13 03:21:29', '2024-08-13 03:21:29'),
(44, 1, 'Comic Style', 'Styles', 'parameters/comic-style.png', '', FALSE, '2024-08-13 03:21:45', '2024-08-13 03:21:45'),
(45, 1, 'Cubism', 'Styles', 'parameters/cubism.png', NULL, FALSE, '2024-08-13 03:21:51', '2024-08-13 03:21:59'),
(46, 1, 'Cyberpunk', 'Styles', 'parameters/cyberpunk.png', '', FALSE, '2024-08-13 03:25:44', '2024-08-13 03:25:44'),
(47, 1, 'Gothic Fashion', 'Styles', 'parameters/gothic-fashion.png', '', FALSE, '2024-08-13 03:25:58', '2024-08-13 03:25:58'),
(48, 1, 'Graffiti', 'Styles', 'parameters/graffiti.png', '', FALSE, '2024-08-13 03:26:06', '2024-08-13 03:26:06'),
(49, 1, 'Minimalist Style', 'Styles', 'parameters/minimalist-style.png', '', FALSE, '2024-08-13 03:26:22', '2024-08-13 03:26:22'),
(50, 1, 'Pixel art', 'Styles', 'parameters/pixel-art.png', '', FALSE, '2024-08-13 03:29:08', '2024-08-13 03:29:08'),
(51, 1, 'Pop art', 'Styles', 'parameters/pop-art.png', '', FALSE, '2024-08-13 03:29:21', '2024-08-13 03:29:21'),
(52, 1, 'Storybook Illustration', 'Styles', 'parameters/storybook-illustration.png', '', FALSE, '2024-08-13 03:29:52', '2024-08-13 03:29:52'),
(53, 1, 'Surrealism', 'Styles', 'parameters/surrealism.png', NULL, FALSE, '2024-08-13 03:30:02', '2024-08-13 03:30:09'),
(54, 1, 'Vienna Secession', 'Styles', 'parameters/vienna-secession.png', '', FALSE, '2024-08-13 03:30:20', '2024-08-13 03:30:20'),
(55, 1, 'Watercolor', 'Styles', 'parameters/watercolor.png', '', FALSE, '2024-08-13 03:30:33', '2024-08-13 03:30:33'),
(56, 1, 'Peaceful, Calm, Light, Serene', 'Vibes', 'parameters/peaceful,-calm,-light,-serene.png', '', FALSE, '2024-08-13 03:35:34', '2024-08-13 03:35:34'),
(57, 1, 'Dark, Ominous', 'Vibes', 'parameters/dark,-ominous.png', '', FALSE, '2024-08-13 04:03:41', '2024-08-13 04:03:41'),
(58, 1, 'Somber, Sad', 'Vibes', 'parameters/somber,-sad.png', '', FALSE, '2024-08-13 04:03:57', '2024-08-13 04:03:57'),
(59, 1, 'Detailed', 'Vibes', 'parameters/detailed.png', '', FALSE, '2024-08-13 04:04:05', '2024-08-13 04:04:05'),
(60, 1, 'Imposing', 'Vibes', 'parameters/imposing.png', '', FALSE, '2024-08-13 04:04:12', '2024-08-13 04:04:12'),
(61, 1, 'Swirling', 'Vibes', 'parameters/swirling.png', '', FALSE, '2024-08-13 04:04:23', '2024-08-13 04:04:23'),
(62, 1, 'Golden Hour Lighting', 'Lighting', 'parameters/golden-hour.png', NULL, FALSE, '2024-08-13 04:07:33', '2024-08-13 04:09:07'),
(63, 1, 'Blue Hour Lighting', 'Lighting', 'parameters/blue-hour.png', NULL, FALSE, '2024-08-13 04:07:48', '2024-08-13 04:08:59'),
(64, 1, 'Low key lighting', 'Lighting', 'parameters/low-key-lighting.png', '', FALSE, '2024-08-13 04:08:49', '2024-08-13 04:08:49'),
(65, 1, 'Natural Lighting', 'Lighting', 'parameters/natural-lighting.png', '', FALSE, '2024-08-13 04:09:26', '2024-08-13 04:09:26'),
(66, 1, 'Flat Lighting', 'Lighting', 'parameters/flat-lighting.png', '', FALSE, '2024-08-13 04:09:47', '2024-08-13 04:09:47'),
(67, 1, 'Alex Ross Style', 'Artists', 'parameters/alex-ross-style.png', '', FALSE, '2024-08-13 04:26:03', '2024-08-13 04:26:03'),
(68, 1, 'Banksy Style', 'Artists', 'parameters/banksy-style.png', '', FALSE, '2024-08-13 04:26:13', '2024-08-13 04:26:13'),
(69, 1, 'Basquiat Style', 'Artists', 'parameters/basquiat-style.png', '', FALSE, '2024-08-13 04:26:32', '2024-08-13 04:26:32'),
(70, 1, 'Edward Hopper Style', 'Artists', 'parameters/edward-hopper-style.png', NULL, FALSE, '2024-08-13 04:26:43', '2024-08-13 04:28:00'),
(71, 1, 'Hieronymus Bosch Style', 'Artists', 'parameters/hieronymus-bosch-style.png', NULL, FALSE, '2024-08-13 04:26:57', '2024-08-13 04:27:56'),
(72, 1, 'HR Giger Style', 'Artists', 'parameters/hr-giger-style.png', NULL, FALSE, '2024-08-13 04:27:12', '2024-08-13 04:27:44'),
(73, 1, 'Keith Haring Style', 'Artists', 'parameters/keith-haring.png', NULL, FALSE, '2024-08-13 04:27:21', '2024-08-13 04:27:51'),
(74, 1, 'Lisa Frank Style', 'Artists', 'parameters/lisa-frank-style.png', NULL, FALSE, '2024-08-13 04:27:35', '2024-08-13 04:27:46'),
(75, 1, 'Piet Mondrian Style', 'Artists', 'parameters/piet-mondrian-style.png', '', FALSE, '2024-08-13 04:28:15', '2024-08-13 04:28:15'),
(76, 1, 'Salvador Dali Style', 'Artists', 'parameters/salvador-dali-style.png', '', FALSE, '2024-08-13 04:28:30', '2024-08-13 04:28:30'),
(77, 1, 'Simon Stålenhag Style', 'Artists', 'parameters/simon-stålenhag-style.png', '', FALSE, '2024-08-13 04:29:01', '2024-08-13 04:29:01'),
(78, 1, 'Vincent Van Gogh Style', 'Artists', 'parameters/vincent-van-gogh-style.png', '', FALSE, '2024-08-13 04:29:13', '2024-08-13 04:29:13'),
(79, 1, 'Baby Blue Color', 'Colors', 'parameters/baby-blue-color.png', '', FALSE, '2024-08-13 04:37:44', '2024-08-13 04:37:44'),
(80, 1, 'Brown Color', 'Colors', 'parameters/brown-color.png', '', FALSE, '2024-08-13 04:37:52', '2024-08-13 04:37:52'),
(81, 1, 'Cyan Color', 'Colors', 'parameters/cyan-color.png', '', FALSE, '2024-08-13 04:37:59', '2024-08-13 04:37:59'),
(82, 1, 'Gold Color', 'Colors', 'parameters/gold-color.png', '', FALSE, '2024-08-13 04:38:07', '2024-08-13 04:38:07'),
(83, 1, 'Grayscale Color', 'Colors', 'parameters/grayscale-color.png', '', FALSE, '2024-08-13 04:38:17', '2024-08-13 04:38:17'),
(84, 1, 'Green Color', 'Colors', 'parameters/green-color.png', '', FALSE, '2024-08-13 04:38:28', '2024-08-13 04:38:28'),
(85, 1, 'Hot Pink Color', 'Colors', 'parameters/hot-pink-color.png', '', FALSE, '2024-08-13 04:38:37', '2024-08-13 04:38:37'),
(86, 1, 'Lavender Color', 'Colors', 'parameters/lavender-color.png', '', FALSE, '2024-08-13 04:38:45', '2024-08-13 04:38:45'),
(87, 1, 'Mint Color', 'Colors', 'parameters/mint-color.png', '', FALSE, '2024-08-13 04:38:51', '2024-08-13 04:38:51'),
(88, 1, 'Brick Material', 'Materials', 'parameters/brick-material.png', '', FALSE, '2024-08-13 04:48:13', '2024-08-13 04:48:13'),
(89, 1, 'Ceramic', 'Materials', 'parameters/ceramic-material.png', NULL, FALSE, '2024-08-13 04:48:23', '2024-08-16 23:25:29'),
(90, 1, 'Cotton Material', 'Materials', 'parameters/cotton-material.png', '', FALSE, '2024-08-13 04:48:32', '2024-08-13 04:48:32'),
(91, 1, 'Emerald Material', 'Materials', 'parameters/emerald-material.png', '', FALSE, '2024-08-13 04:48:47', '2024-08-13 04:48:47'),
(92, 1, 'Leather Material', 'Materials', 'parameters/leather-material.png', '', FALSE, '2024-08-13 04:49:05', '2024-08-13 04:49:05'),
(93, 1, 'Paper Material', 'Materials', 'parameters/paper-material.png', '', FALSE, '2024-08-13 04:49:13', '2024-08-13 04:49:13'),
(94, 1, 'Quartz Material', 'Materials', 'parameters/quartz-material.png', '', FALSE, '2024-08-13 04:49:23', '2024-08-13 04:49:23'),
(95, 1, 'Wood material', 'Materials', 'parameters/wood-material.png', '', FALSE, '2024-08-13 04:49:44', '2024-08-13 04:49:44');
--
-- Dumping data for table "posts"
--

INSERT INTO "posts" ("id", "user_id", "image", "title", "slug", "body", "category", "height", "width", "ai_model", "version", "published_at", "featured", "deleted_at", "created_at", "updated_at", "views") VALUES
(1, 1, 'uploads/hdtU6ii0UwGkLlSgiUq2zhITxnWYCA2cjEcCL7gP.png', 'Disneys Merida will-o-the-wisp', 'hdtu6ii0-niji-v6-disneys-merida-will-o-the-wisp-faerietale-couture-dramatis-personae-figures-made-of-swirling-mist-sparklecore-jean-maurice-tibbet-in-a-beautiful-sparkly', 'Disneys Merida will-o-the-wisp Faerietale Couture, dramatis personae, figures made of swirling mist, sparklecore, jean maurice tibbet in a beautiful sparkly wonder woman costume, in the style of ethereal symbolism, light indigo and silver, colorized ferrotype, clamp, 1920s, nell dorr, Corinthian, asymmetric designs --ar 2:3 --niji 6 --s 250** --Upscaled', 'Character Design', 1344, 896, 'Midjourney', 'Niji V6', '2024-08-13 04:54:55', FALSE, NULL, '2024-08-13 04:54:55', '2024-08-16 06:22:20', 60),
(2, 3, 'uploads/gMbWabTYEf2K7B9Gl1d4gM7D9DfjQD3iHP9VoJ21.png', NULL, 'gmbwabty-midjourney-6-sun-dog-my-neighbor-kikis-delivery-service-spirited-away-princess-mononoke-porco-rosso-the-red-turtle-studio-ghibli-by-hayao', 'Sun dog my neighbor kikis delivery service spirited away princess mononoke porco rosso the red turtle studio ghibli by hayao miyazaki --ar 2:3', 'Anime', 1344, 896, 'Midjourney', '6', '2024-08-13 04:57:29', FALSE, NULL, '2024-08-13 04:57:29', '2024-08-20 17:26:14', 16),
(3, 2, 'uploads/qn7L4tW8rFDes3WfuXnjXxVIXU74cozINmwOlISp.jpg', 'Dramatic Character', 'qn7l4tw8-dalle-2-central-figure-of-a-dramatic-character-rendered-in-black-and-white-appearing-heroic-after-an-adventure-photorealistic-illustration-woodcut-painting', 'Central figure of a dramatic character, rendered in black and white, appearing heroic after an adventure (photorealistic illustration woodcut-painting', 'Character Design', 1024, 1024, 'DALL•E', '2', '2024-08-13 05:01:50', FALSE, NULL, '2024-08-13 05:01:50', '2024-08-15 03:11:15', 7),


--
-- Dumping data for table "roles"
--

INSERT INTO "roles" ("id", "name", "created_at", "updated_at") VALUES
(1, 'admin', '2024-08-13 00:49:10', '2024-08-13 00:49:10'),
(2, 'editor', '2024-08-13 00:50:29', '2024-08-13 00:50:29'),
(3, 'author', '2024-08-13 00:53:43', '2024-08-13 00:53:43');

-- --------------------------------------------------------

--
-- Table structure for table "role_user"
--

--
-- Dumping data for table "role_user"
--

INSERT INTO "role_user" ("id", "user_id", "role_id", "created_at", "updated_at") VALUES
(1, 1, 1, NULL, NULL),
(2, 3, 3, NULL, NULL),
(3, 2, 3, NULL, NULL),
(4, 2, 2, NULL, NULL),
(5, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table "sessions"
--



--
-- Dumping data for table "sessions"
--

-- INSERT INTO "sessions" ("id", "user_id", "ip_address", "user_agent", "payload", "last_activity") VALUES
-- ('6CQh1i4Ud5xYIv9xm3GNWbXbsLmI1c0ySHnec6TL', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWERDbEVURHR1aDJJdDhIZEtORGQ2aVN1Z3ZnWndKNTlaMFhJRkx3WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3QvZGFsbGUtaGVscGVyLXByb2plY3QvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1724201908),
-- ('b6Yy6B9CtpnYPgmECyJvbo653zBFUIlKrXeNJ0nX', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibklmNDU3RmxlRGxMYUduakp2M2tvbTFrTG9iQ1d3V3pDNURIT2wzUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3QvZGFsbGUtaGVscGVyLXByb2plY3QvcHVibGljIjt9fQ==', 1724209795);

-- --------------------------------------------------------

--
-- Table structure for table "users"
--


--
-- Dumping data for table "users"
--

-- INSERT INTO "users" ("id", "name", "email", "email_verified_at", "password", "two_factor_secret", "two_factor_recovery_codes", "two_factor_confirmed_at", "remember_token", "current_team_id", "profile_photo_path", "created_at", "updated_at") VALUES
-- (1, 'Admin', 'admin@test.com', '2024-08-09 04:34:08', '$2y$12$FrBK7UKtl739ZfUoEDbdBOgOMcrLI8xe1/Wwweom1MDnF4dozazbW', NULL, NULL, NULL, 'DzL1DHcibQEVIJXhO144gqj9IBGBG5A4XsD30MVwun5QMeH42kGeGlK5h8pd', NULL, NULL, '2024-08-08 22:27:27', '2024-08-09 04:34:08'),
-- (2, 'Jane Doe', 'jdoe@test.com', NULL, '$2y$12$Enet7Cd7Pm3GJeUrAw56MOd/YBggRGmb7diQ0bOcKR6LGGfZB4x5y', NULL, NULL, NULL, NULL, NULL, 'profile-photos/3C3MgerdrGMKPwao3nCkEW4oMcv2dCgs1gjm8qtb.jpg', '2024-08-13 02:10:14', '2024-08-16 23:22:53'),
-- (3, 'Patty', 'patty@test.com', NULL, '$2y$12$IoSYEo2A1o/a29vkrn0mlOC0DvnC4MT1ppu5CKpTt2FN.ruQ7bNE2', NULL, NULL, NULL, NULL, NULL, 'profile-photos/n86k5q9t8Cz7dFwlMEpSGMiPjJBsuib034ioL1bI.jpg', '2024-08-13 02:12:16', '2024-08-15 20:36:37'),
-- (4, 'Stephan M.', 'steph@test.com', NULL, '$2y$12$vqmHvAFhzl1SdC/aySwvSuvZJ4BPbpktu7ZFTrsBtFKwlwmM/gCgm', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-13 05:16:33', '2024-08-13 21:19:15'),
-- (5, 'Jason', 'jason@test.com', NULL, '$2y$12$fiMCa7IQTEJ8TWCsvcFhIuxoCFXieMfprjopFaBV3NustdYyFEPWO', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-13 20:25:08', '2024-08-13 20:25:08');




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
