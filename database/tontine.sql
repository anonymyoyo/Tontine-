-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2024 at 10:08 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tontine`
--

-- --------------------------------------------------------

--
-- Table structure for table `agences`
--

CREATE TABLE `agences` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `association_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agences`
--

INSERT INTO `agences` (`id`, `name`, `email`, `phone`, `ville`, `pays`, `user_id`, `association_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'TCA Douala', 'tcadouala@tca.com', '694865872', 'Douala', 'Cameroon', 5, 3, 'images/0I66RqrbpB0GA0MWuRY8nSe1S3biOY3lRdsErjHq.png', '2024-11-22 13:16:49', '2024-11-22 13:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `associations`
--

CREATE TABLE `associations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reglement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `associations`
--

INSERT INTO `associations` (`id`, `name`, `email`, `description`, `ville`, `pays`, `reglement`, `user_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Association', 'bitinza@association.com', 'fdgffgdfg', 'Douala', 'Cameroon', 'dfgdfgd', 2, 'images/xbQm5lFBaRSo7RbevOOf3N1vwmR9Xa5BYxLTrNXM.png', '2024-11-22 13:16:48', '2024-11-22 13:16:48'),
(2, 'BBP', 'bbp@gmail.com', 'sdfsdfdsf', 'Douala', 'Cameroon', 'sfsfsfsfsdf', 3, 'images/4Ky2OIfpwBonvhHtgyWd6QmHIkxVseVM9rWlV2pU.png', '2024-11-22 13:16:48', '2024-11-22 13:16:48'),
(3, 'TCA Miracle', 'tcabertoua@tca.com', 'adasadas', 'Bertoua', 'Cameroon', 'asdasds', 4, 'images/QRjj4iYewYT74BdX9XKHQqcdrXGgk8hCraQN4Dpn.png', '2024-11-22 13:16:49', '2024-11-22 13:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contributions`
--

CREATE TABLE `contributions` (
  `id` bigint UNSIGNED NOT NULL,
  `montant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode_paiement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `historiques`
--

CREATE TABLE `historiques` (
  `id` bigint UNSIGNED NOT NULL,
  `contribution_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `date_action` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_action` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_09_200502_create_contributions_table', 1),
(5, '2024_09_09_200539_create_tontines_table', 1),
(6, '2024_09_09_200625_create_transactions_table', 1),
(7, '2024_09_09_200643_create_historiques_table', 1),
(8, '2024_09_09_200734_create_roles_table', 1),
(9, '2024_09_09_200747_create_logs_table', 1),
(10, '2024_09_28_082925_create_agences_table', 1),
(11, '2024_09_30_124723_create_zones_table', 1),
(12, '2024_10_07_112552_create_associations_table', 1),
(13, '2024_11_07_092352_create_tontine_choisies_table', 1),
(14, '2024_11_18_132846_create_soldes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `permission`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Administrateur general de la plateforme', 'Gestion des tontines et/ou associations sur la plateforme, gestion des utilisateurs et des differentes transactions', '2024-11-22 13:16:42', '2024-11-22 13:16:42'),
(2, 'Agence', 'Administrateur de lagence', 'Gestion des membres , voir historique', '2024-11-22 13:16:43', '2024-11-22 13:16:43'),
(3, 'Commercial', 'Membre de la tontine et/ou de lassociation', 'Effectuer les versements, voir historique', '2024-11-22 13:16:43', '2024-11-22 13:16:43'),
(4, 'User', 'Visiteur du site', 'Visite les pages sans pouvoir integrer une tontine ou une association', '2024-11-22 13:16:43', '2024-11-22 13:16:43'),
(5, 'Association', 'Administrateur de lassociation', 'Gestion de sa tontine et/ou son association, gesion des membres associers, voir historique', '2024-11-22 13:16:43', '2024-11-22 13:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fNemo5StIE1MRzlr15npBmChIErCVFe7QiJWo5vx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic0FrM1YxdWhobWJCQ05UOFRvTGVHMFpGNjByYUdMNXBxRENrSDZpZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9DYXRhbG9ndWUiO319', 1733825074),
('Hu96WyXdoi8Yw9nTNdtIs7SoiJZVFuGvfHR9BENC', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZHJiU0p2MU4xQXBzaDVaemhjYjkyQkZXd082SkxoV0t5ZkRnVmZkSiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fX0=', 1733763239),
('ojopgBeJz4fcLZJ444dVlgsL08dwiNRmoTkmdEGn', 9, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1 Edg/130.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYnlLWmtMdWcyZk1GTTdhT3U4akhoQ3JlU0hBenFjNXo0RUFUc2c5dSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6OTt9', 1733783672);

-- --------------------------------------------------------

--
-- Table structure for table `soldes`
--

CREATE TABLE `soldes` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `solde` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soldes`
--

INSERT INTO `soldes` (`id`, `user_id`, `solde`, `created_at`, `updated_at`) VALUES
(1, 9, 7500, '2024-11-22 13:25:59', '2024-12-09 21:57:48'),
(2, 10, 50500, '2024-12-09 21:16:12', '2024-12-09 22:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `tontines`
--

CREATE TABLE `tontines` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reglement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tontines`
--

INSERT INTO `tontines` (`id`, `name`, `description`, `reglement`, `prix`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Tontine Electro-menager', 'fdgdfgdfg', 'dfgdfgdfgfdg', '5000', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php297F.tmp', '2024-11-22 13:16:50', '2024-11-22 13:16:50'),
(2, 'Tontine Simple', 'dfsdfsdfsd', 'fdsfsdfsdf', '500', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php951.tmp', '2024-11-22 13:16:50', '2024-11-22 13:16:50'),
(3, 'Tontine Scolaire', 'sdfsfsdfsdf', 'sdfsdfsdfsdf', '1000', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php75E6.tmp', '2024-11-22 13:16:50', '2024-11-22 13:16:50'),
(4, 'Tontine speciale fin d\'annee', 'gfdgdfgdf', 'gdfgdfgdfg', '500', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\phpF2E7.tmp', '2024-11-22 13:16:50', '2024-11-22 13:16:50');

-- --------------------------------------------------------

--
-- Table structure for table `tontine_choisies`
--

CREATE TABLE `tontine_choisies` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `tontine_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solde_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tontine_id` bigint UNSIGNED NOT NULL,
  `commercial_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `type`, `solde_id`, `tontine_id`, `commercial_id`, `montant`, `created_at`, `updated_at`) VALUES
(1, 'depot', '1', 2, '7', 500, '2024-11-22 13:30:04', '2024-11-22 13:30:04'),
(2, 'depot', '1', 2, '7', 1500, '2024-11-22 13:30:38', '2024-11-22 13:30:38'),
(3, 'retrait', '1', 2, '7', 500, '2024-11-22 13:31:05', '2024-11-22 13:31:05'),
(4, 'depot', '1', 2, '7', 2000, '2024-11-22 17:23:16', '2024-11-22 17:23:16'),
(5, 'depot', '1', 2, '1', 3000, '2024-11-25 18:42:33', '2024-11-25 18:42:33'),
(6, 'depot', '1', 2, '7', 2000, '2024-12-04 17:58:27', '2024-12-04 17:58:27'),
(7, 'depot', '1', 2, '7', 2500, '2024-12-04 17:58:39', '2024-12-04 17:58:39'),
(8, 'retrait', '1', 2, '7', 3000, '2024-12-04 17:59:01', '2024-12-04 17:59:01'),
(9, 'depot', '1', 2, '7', 3000, '2024-12-09 21:18:48', '2024-12-09 21:18:48'),
(10, 'depot', '1', 2, '7', 500, '2024-12-09 21:36:21', '2024-12-09 21:36:21'),
(11, 'depot', '2', 2, '1', 500, '2024-12-09 21:44:59', '2024-12-09 21:44:59'),
(12, 'retrait', '1', 2, '7', 4000, '2024-12-09 21:57:47', '2024-12-09 21:57:47'),
(13, 'depot', '2', 2, '7', 50000, '2024-12-09 22:09:00', '2024-12-09 22:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `association_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `com_association_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `com_agence_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mem_agence_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mem_com_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mem_tontine_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `ville`, `pays`, `image`, `association_id`, `com_association_id`, `com_agence_id`, `mem_agence_id`, `mem_com_id`, `mem_tontine_id`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'superadmin@icloud.com', '694865872', 'Douala', 'Cameroun', 'images/yoyo.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '$2y$12$Yw.97wa.hp7lI3lCnJ9weu03j28i4W1coKxbbyfu4W4lBWjlJSYRy', NULL, '2024-11-22 13:16:44', '2024-11-22 13:16:44'),
(2, 'BITINZA', 'bitinza@tca.com', '694865872', 'Douala', 'Cameroon', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php8AFE.tmp', '1', NULL, NULL, NULL, NULL, NULL, 5, NULL, '$2y$12$biRS9Rv2Ma0BwKaEYoVqQOGmLCh5h6J842FGByUKRzREcSMslRnDu', NULL, '2024-11-22 13:16:45', '2024-11-22 13:16:45'),
(3, 'Moussi Teng Pierre Dilan', 'moussidilan@gmail.com', '694865872', 'Kribi', 'Cameroon', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\phpC61C.tmp', '2', NULL, NULL, NULL, NULL, NULL, 5, NULL, '$2y$12$ba.SDEQ/Rq62/lOAWDj0uev7vP/uk18UEOn9Sv/adW2/px3EU8gSq', NULL, '2024-11-22 13:16:45', '2024-11-22 13:16:45'),
(4, 'BITINZA', 'superadmin@gmail.com', '694865872', 'Douala', 'Cameroon', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php33BF.tmp', '3', NULL, NULL, NULL, NULL, NULL, 5, NULL, '$2y$12$sFQPaEJQeVo6ArxlTDSktuot4ntMAxVokjbQiCNkQ9AlmRqOPayHy', NULL, '2024-11-22 13:16:46', '2024-11-22 13:16:46'),
(5, 'Marole', 'marole@tca.com', '694865872', 'Douala', 'Cameroon', 'images/IgOMR0TPOFHaTkaPUOw4lXJ3LrYaCGUQkwoal2hU.png', '3', NULL, NULL, NULL, NULL, NULL, 2, NULL, '$2y$12$CawoREZ82il6AUNHPCxBiuZkw4L2H3qOORqlmTPDhHCjYGN22.Swu', NULL, '2024-11-22 13:16:47', '2024-11-22 13:16:47'),
(6, 'Emauel', 'superadmi1@gmail.com', '694865872', 'Douala', 'Cameroon', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php1A3B.tmp', NULL, '3', NULL, NULL, NULL, NULL, 3, NULL, '$2y$12$pcejRdqpxkzidaZYDNu48uspEAxcgYVyg3rcBV0LfQSiX3qGgrRne', NULL, '2024-11-22 13:16:47', '2024-11-22 13:16:47'),
(7, 'Serges', 'serges@commercial.com', '694865872', 'Douala', NULL, 'images/iMfyVtIzrmD498AHvDIFJgf7FQieNWJE2QFdRiar.png', NULL, '3', '1', NULL, NULL, NULL, 3, NULL, '$2y$12$UV8zZxFFHe4CqJbXZgsZE.IIgwN8peVRkxJMWR4hQ1B8yA.vh/1ui', NULL, '2024-11-22 13:16:48', '2024-11-22 13:16:48'),
(8, 'Tantanpion', 'tantanpion@gmail.com', '694865872', 'Douala', 'Cameroon', 'images/9SO00rUXl8yhr10OV7UgjzY9QVyFiCyoUK4kNHtY.png', '1', NULL, NULL, NULL, NULL, '1', 4, NULL, '$2y$12$.pIwK47ATQU.QnDorw/75Oyy.EVu9rEvTZPcK1ZQnchCJPOLAKQlC', NULL, '2024-11-22 13:16:48', '2024-11-22 13:16:48'),
(9, 'Martin', 'martin@membre.com', '694865872', 'Douala', 'Cameroun', 'images/dOwckMuDFCxxUw56I7NNEI6nzOqSJhLtgEQdDA8G.png', '3', NULL, NULL, '1', '7', '2', 4, NULL, '$2y$12$jZbMq7gc4mm/gvS3bQ3D7OQYVlMgsLncyKGubS.K0dp.pGDzcw7Y.', NULL, '2024-11-22 13:25:59', '2024-11-22 13:25:59'),
(10, 'Idriss', 'idriss@tca.com', '5645645', 'Douala', 'Cameroun', 'images/igAe92qkDiHLsuR0kXiHxzRi6MhyDYlbeDfP0tLo.jpg', '3', NULL, NULL, '1', NULL, '2', 4, NULL, '$2y$12$NlYJAVjqluoZJNVD6QADyuLMr5eBJbqa3mQwvKejFcqQP2xMRDs8.', NULL, '2024-12-09 21:16:12', '2024-12-09 21:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `association_id` bigint UNSIGNED NOT NULL,
  `agence_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `name`, `association_id`, `agence_id`, `user_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Marcher DAKAR', 3, 1, 7, 'images/qnspdmYOiaHpsaI4szHTeUpqlJR6SAJGmvTqP3d0.png', '2024-11-22 13:16:49', '2024-11-22 13:16:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agences`
--
ALTER TABLE `agences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agences_email_unique` (`email`),
  ADD KEY `agences_user_id_foreign` (`user_id`),
  ADD KEY `agences_association_id_foreign` (`association_id`);

--
-- Indexes for table `associations`
--
ALTER TABLE `associations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `associations_email_unique` (`email`),
  ADD KEY `associations_user_id_foreign` (`user_id`);

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
-- Indexes for table `contributions`
--
ALTER TABLE `contributions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contributions_transaction_id_foreign` (`transaction_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `historiques`
--
ALTER TABLE `historiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historiques_contribution_id_foreign` (`contribution_id`),
  ADD KEY `historiques_user_id_foreign` (`user_id`);

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
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_user_id_foreign` (`user_id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `soldes`
--
ALTER TABLE `soldes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soldes_user_id_foreign` (`user_id`);

--
-- Indexes for table `tontines`
--
ALTER TABLE `tontines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tontine_choisies`
--
ALTER TABLE `tontine_choisies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tontine_choisies_user_id_foreign` (`user_id`),
  ADD KEY `tontine_choisies_tontine_id_foreign` (`tontine_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_tontine_id_foreign` (`tontine_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zones_association_id_foreign` (`association_id`),
  ADD KEY `zones_agence_id_foreign` (`agence_id`),
  ADD KEY `zones_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agences`
--
ALTER TABLE `agences`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `associations`
--
ALTER TABLE `associations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contributions`
--
ALTER TABLE `contributions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `historiques`
--
ALTER TABLE `historiques`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soldes`
--
ALTER TABLE `soldes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tontines`
--
ALTER TABLE `tontines`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tontine_choisies`
--
ALTER TABLE `tontine_choisies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agences`
--
ALTER TABLE `agences`
  ADD CONSTRAINT `agences_association_id_foreign` FOREIGN KEY (`association_id`) REFERENCES `associations` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `agences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `associations`
--
ALTER TABLE `associations`
  ADD CONSTRAINT `associations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `contributions`
--
ALTER TABLE `contributions`
  ADD CONSTRAINT `contributions_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `historiques`
--
ALTER TABLE `historiques`
  ADD CONSTRAINT `historiques_contribution_id_foreign` FOREIGN KEY (`contribution_id`) REFERENCES `contributions` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `historiques_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `soldes`
--
ALTER TABLE `soldes`
  ADD CONSTRAINT `soldes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `tontine_choisies`
--
ALTER TABLE `tontine_choisies`
  ADD CONSTRAINT `tontine_choisies_tontine_id_foreign` FOREIGN KEY (`tontine_id`) REFERENCES `tontines` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `tontine_choisies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_tontine_id_foreign` FOREIGN KEY (`tontine_id`) REFERENCES `tontines` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `zones`
--
ALTER TABLE `zones`
  ADD CONSTRAINT `zones_agence_id_foreign` FOREIGN KEY (`agence_id`) REFERENCES `agences` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `zones_association_id_foreign` FOREIGN KEY (`association_id`) REFERENCES `associations` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `zones_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
