-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2024 at 11:18 AM
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
(1, 'TCA Douala', 'tcadouala@tca.com', '694865872', 'Douala', 'Cameroon', 5, 3, 'images/0I66RqrbpB0GA0MWuRY8nSe1S3biOY3lRdsErjHq.png', '2024-11-19 21:36:13', '2024-11-19 21:36:13');

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
(1, 'Association', 'bitinza@association.com', 'fdgffgdfg', 'Douala', 'Cameroon', 'dfgdfgd', 2, 'images/xbQm5lFBaRSo7RbevOOf3N1vwmR9Xa5BYxLTrNXM.png', '2024-11-19 21:36:12', '2024-11-19 21:36:12'),
(2, 'BBP', 'bbp@gmail.com', 'sdfsdfdsf', 'Douala', 'Cameroon', 'sfsfsfsfsdf', 3, 'images/4Ky2OIfpwBonvhHtgyWd6QmHIkxVseVM9rWlV2pU.png', '2024-11-19 21:36:12', '2024-11-19 21:36:12'),
(3, 'TCA Miracle', 'tcabertoua@tca.com', 'adasadas', 'Bertoua', 'Cameroon', 'asdasds', 4, 'images/QRjj4iYewYT74BdX9XKHQqcdrXGgk8hCraQN4Dpn.png', '2024-11-19 21:36:12', '2024-11-19 21:36:12');

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
(1, 'Admin', 'Administrateur general de la plateforme', 'Gestion des tontines et/ou associations sur la plateforme, gestion des utilisateurs et des differentes transactions', '2024-11-19 21:36:07', '2024-11-19 21:36:07'),
(2, 'Agence', 'Administrateur de lagence', 'Gestion des membres , voir historique', '2024-11-19 21:36:07', '2024-11-19 21:36:07'),
(3, 'Commercial', 'Membre de la tontine et/ou de lassociation', 'Effectuer les versements, voir historique', '2024-11-19 21:36:07', '2024-11-19 21:36:07'),
(4, 'User', 'Visiteur du site', 'Visite les pages sans pouvoir integrer une tontine ou une association', '2024-11-19 21:36:07', '2024-11-19 21:36:07'),
(5, 'Association', 'Administrateur de lassociation', 'Gestion de sa tontine et/ou son association, gesion des membres associers, voir historique', '2024-11-19 21:36:07', '2024-11-19 21:36:07');

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
('93EoLtOXXo4a4WkfrLRItWfML12dVkbsoIx4tlJo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidEx5bTRHTHF0a1VNVGswSENSQ1Nrdll0b1pBMUJueXNJU0FMUEZZaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732185254),
('cVrU8MF2dhRVf4NYcdXBefeff04NblbysO9FjJzc', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibnplTkJQajRmaXJxY1RBY3VOUU1GUVp0RUN4S3hQREpKVlNoZndJYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9Db21tZXJjaWFsL1RyYW5zYWN0aW9ucyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7fQ==', 1732131507),
('e0hKspOb9nGgjhEwGwDWGU5Xue8M5o0yjE9WwkdE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ01qN1U2aHJ2NkQ2RTBibjhVbnlES1FFeXB2aEVVQ2RDZVZhNUd4RyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732185249),
('g819y32yw5CDivZ566iCuIn6avVozN3Nu2prAmfj', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiN3dBTWQzVmNGeUc1Mjc2YmFRVzZyNUhDaDZXRkdQSDExSzRlUkFFcSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0NToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL0NvbW1lcmNpYWwvVHJhbnNhY3Rpb25zIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9QYWdlL0NvbW1lcmNpYWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O30=', 1732184279);

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
(1, 9, 0, '2024-11-19 21:39:14', '2024-11-19 21:39:14'),
(2, 10, 0, '2024-11-19 22:33:00', '2024-11-19 22:33:00'),
(3, 9, 5000, '2024-11-21 00:01:31', '2024-11-21 00:01:31'),
(4, 9, 500, '2024-11-21 00:02:54', '2024-11-21 00:02:54'),
(5, 9, 5000, '2024-11-21 00:14:09', '2024-11-21 00:14:09'),
(6, 10, 1000, '2024-11-21 00:34:51', '2024-11-21 00:34:51'),
(7, 10, 2000, '2024-11-21 00:47:38', '2024-11-21 00:47:38'),
(8, 10, 500, '2024-11-21 01:00:27', '2024-11-21 01:00:27'),
(9, 10, 500, '2024-11-21 01:00:37', '2024-11-21 01:00:37'),
(10, 11, 1000, '2024-11-21 01:01:47', '2024-11-21 01:01:47'),
(11, 11, 2000, '2024-11-21 01:02:12', '2024-11-21 01:02:12'),
(12, 11, 2100, '2024-11-21 02:55:24', '2024-11-21 02:55:24'),
(13, 11, 6000, '2024-11-21 02:56:24', '2024-11-21 02:56:24'),
(14, 12, 1000, '2024-11-21 18:07:27', '2024-11-21 18:07:27'),
(15, 13, 1000, '2024-11-21 18:08:35', '2024-11-21 18:08:35');

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
(1, 'Tontine Electro-menager', 'fdgdfgdfg', 'dfgdfgdfgfdg', '5000', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php297F.tmp', '2024-11-19 21:36:13', '2024-11-19 21:36:13'),
(2, 'Tontine Simple', 'dfsdfsdfsd', 'fdsfsdfsdf', '500', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php951.tmp', '2024-11-19 21:36:13', '2024-11-19 21:36:13'),
(3, 'Tontine Scolaire', 'sdfsfsdfsdf', 'sdfsdfsdfsdf', '1000', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php75E6.tmp', '2024-11-19 21:36:13', '2024-11-19 21:36:13'),
(4, 'Tontine speciale fin d\'annee', 'gfdgdfgdf', 'gdfgdfgdfg', '500', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\phpF2E7.tmp', '2024-11-19 21:36:13', '2024-11-19 21:36:13');

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
(1, 'depot', '1', 1, '7', 506, '2024-11-19 21:43:16', '2024-11-19 21:43:16'),
(2, 'depot', '1', 1, '7', 506, '2024-11-19 22:06:20', '2024-11-19 22:06:20'),
(3, 'depot', '1', 1, '7', 506, '2024-11-19 22:08:51', '2024-11-19 22:08:51'),
(4, 'depot', '1', 1, '7', 506, '2024-11-19 22:15:49', '2024-11-19 22:15:49'),
(5, 'depot', '1', 1, '7', 506, '2024-11-19 22:24:43', '2024-11-19 22:24:43'),
(6, 'depot', '1', 1, '7', 506, '2024-11-19 22:25:42', '2024-11-19 22:25:42'),
(7, 'depot', '1', 1, '7', 506, '2024-11-19 22:25:54', '2024-11-19 22:25:54'),
(8, 'depot', '1', 1, '7', 506, '2024-11-19 22:28:52', '2024-11-19 22:28:52'),
(9, 'depot', '1', 1, '7', 506, '2024-11-19 22:29:23', '2024-11-19 22:29:23'),
(10, 'depot', '1', 1, '7', 506, '2024-11-19 22:30:00', '2024-11-19 22:30:00'),
(11, 'depot', '1', 1, '7', 506, '2024-11-19 22:30:15', '2024-11-19 22:30:15'),
(12, 'depot', '1', 1, '7', 506, '2024-11-19 22:30:34', '2024-11-19 22:30:34'),
(13, 'depot', '1', 1, '7', 506, '2024-11-19 22:31:00', '2024-11-19 22:31:00'),
(14, 'depot', '1', 1, '7', 506, '2024-11-19 22:33:21', '2024-11-19 22:33:21'),
(15, 'depot', '1', 1, '7', 506, '2024-11-19 22:42:55', '2024-11-19 22:42:55'),
(16, 'depot', '1', 1, '7', 5000, '2024-11-19 22:43:09', '2024-11-19 22:43:09'),
(17, 'depot', '1', 1, '7', 506, '2024-11-19 22:52:05', '2024-11-19 22:52:05'),
(18, 'depot', '1', 1, '7', 506, '2024-11-19 23:05:43', '2024-11-19 23:05:43'),
(19, 'depot', '1', 1, '7', 506, '2024-11-19 23:06:12', '2024-11-19 23:06:12'),
(20, 'depot', '1', 1, '7', 506, '2024-11-19 23:09:12', '2024-11-19 23:09:12'),
(21, 'depot', '1', 1, '7', 506, '2024-11-19 23:09:24', '2024-11-19 23:09:24'),
(22, 'depot', '1', 1, '7', 500, '2024-11-20 00:08:58', '2024-11-20 00:08:58'),
(23, 'depot', '1', 1, '7', 500, '2024-11-20 00:09:30', '2024-11-20 00:09:30'),
(24, 'depot', '1', 1, '7', 500, '2024-11-20 00:10:17', '2024-11-20 00:10:17'),
(25, 'depot', '1', 1, '7', 500, '2024-11-20 00:10:34', '2024-11-20 00:10:34'),
(26, 'depot', '1', 1, '7', 500, '2024-11-20 00:11:14', '2024-11-20 00:11:14'),
(27, 'depot', '1', 1, '7', 500, '2024-11-20 00:11:43', '2024-11-20 00:11:43'),
(28, 'depot', '1', 1, '7', 500, '2024-11-20 00:12:12', '2024-11-20 00:12:12'),
(29, 'depot', '1', 1, '7', 500, '2024-11-20 01:33:45', '2024-11-20 01:33:45'),
(30, 'depot', '1', 1, '7', 500, '2024-11-20 01:34:11', '2024-11-20 01:34:11'),
(31, 'depot', '1', 1, '7', 500, '2024-11-20 01:47:45', '2024-11-20 01:47:45'),
(32, 'depot', '1', 1, '7', 500, '2024-11-20 20:21:44', '2024-11-20 20:21:44'),
(33, 'depot', '1', 1, '7', 5000, '2024-11-20 21:10:24', '2024-11-20 21:10:24'),
(34, 'depot', '1', 1, '7', 5000, '2024-11-20 21:11:55', '2024-11-20 21:11:55'),
(35, 'depot', '1', 1, '7', 5000, '2024-11-20 21:12:38', '2024-11-20 21:12:38'),
(36, 'depot', '1', 1, '7', 5000, '2024-11-20 21:22:08', '2024-11-20 21:22:08'),
(37, 'depot', '1', 1, '7', 5000, '2024-11-20 21:23:16', '2024-11-20 21:23:16'),
(38, 'depot', '1', 1, '7', 5000, '2024-11-20 21:23:46', '2024-11-20 21:23:46'),
(39, 'depot', '1', 1, '7', 5000, '2024-11-20 21:26:14', '2024-11-20 21:26:14'),
(40, 'depot', '1', 3, '7', 5000, '2024-11-20 23:50:58', '2024-11-20 23:50:58'),
(41, 'depot', '1', 3, '7', 5000, '2024-11-20 23:55:01', '2024-11-20 23:55:01'),
(42, 'depot', '1', 3, '7', 5000, '2024-11-20 23:59:35', '2024-11-20 23:59:35'),
(43, 'depot', '1', 3, '7', 5000, '2024-11-21 00:01:31', '2024-11-21 00:01:31'),
(44, 'depot', '1', 3, '7', 500, '2024-11-21 00:02:54', '2024-11-21 00:02:54'),
(45, 'depot', '1', 3, '7', 5000, '2024-11-21 00:04:01', '2024-11-21 00:04:01'),
(46, 'depot', '1', 3, '7', 5000, '2024-11-21 00:14:09', '2024-11-21 00:14:09'),
(47, 'depot', '2', 3, '7', 1000, '2024-11-21 00:34:51', '2024-11-21 00:34:51'),
(48, 'depot', '2', 3, '7', 2000, '2024-11-21 00:47:37', '2024-11-21 00:47:37'),
(49, 'depot', '2', 3, '7', 500, '2024-11-21 00:58:48', '2024-11-21 00:58:48'),
(50, 'depot', '2', 3, '7', 500, '2024-11-21 01:00:26', '2024-11-21 01:00:26'),
(51, 'depot', '2', 3, '7', 500, '2024-11-21 01:00:36', '2024-11-21 01:00:36'),
(52, 'depot', '10', 1, '7', 1000, '2024-11-21 01:02:12', '2024-11-21 01:02:12'),
(53, 'depot', '10', 1, '7', 1100, '2024-11-21 02:55:23', '2024-11-21 02:55:23'),
(54, 'depot', '10', 1, '7', 5000, '2024-11-21 02:56:24', '2024-11-21 02:56:24');

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
(1, 'Admin', 'superadmin@icloud.com', '694865872', 'Douala', 'Cameroun', 'images/yoyo.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '$2y$12$mJXLQFCG1kF.TsvJnOoD5e5JN3fSILECWlaaW0KSFnlvKisUb9PZ2', NULL, '2024-11-19 21:36:08', '2024-11-19 21:36:08'),
(2, 'BITINZA', 'bitinza@tca.com', '694865872', 'Douala', 'Cameroon', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php8AFE.tmp', '1', NULL, NULL, NULL, NULL, NULL, 5, NULL, '$2y$12$AHqyC/ph5P3TEeJ3.ANCsuSLorG2BUiWCXm2Nz1z0GqWjeSyM41Sa', NULL, '2024-11-19 21:36:09', '2024-11-19 21:36:09'),
(3, 'Moussi Teng Pierre Dilan', 'moussidilan@gmail.com', '694865872', 'Kribi', 'Cameroon', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\phpC61C.tmp', '2', NULL, NULL, NULL, NULL, NULL, 5, NULL, '$2y$12$Ks7huq/uUiS8SrmaoucjzudZfUNfcmSErJ9i/WxtCmKksQBdRr0Iy', NULL, '2024-11-19 21:36:09', '2024-11-19 21:36:09'),
(4, 'BITINZA', 'superadmin@gmail.com', '694865872', 'Douala', 'Cameroon', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php33BF.tmp', '3', NULL, NULL, NULL, NULL, NULL, 5, NULL, '$2y$12$e8aUgtpT5HvgqZxH.XMcRuDUarOfESzexTPGVJgnxGkNxyZ9uvlsC', NULL, '2024-11-19 21:36:10', '2024-11-19 21:36:10'),
(5, 'Marole', 'marole@tca.com', '694865872', 'Douala', 'Cameroon', 'images/IgOMR0TPOFHaTkaPUOw4lXJ3LrYaCGUQkwoal2hU.png', '3', NULL, NULL, NULL, NULL, NULL, 2, NULL, '$2y$12$IOC8DFhWkNCuFPeK3Nvz3ule7Tff59OmMUIbW3UXYX/hfZCiDvXh2', NULL, '2024-11-19 21:36:10', '2024-11-19 21:36:10'),
(6, 'Emauel', 'superadmi1@gmail.com', '694865872', 'Douala', 'Cameroon', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php1A3B.tmp', NULL, '3', NULL, NULL, NULL, NULL, 3, NULL, '$2y$12$/fZS/RvbM5cE6x3hngPZNuIuqL1..CmlKcM0hELDJaZhK46QyNoK.', NULL, '2024-11-19 21:36:11', '2024-11-19 21:36:11'),
(7, 'Serges', 'serges@commercial.com', '694865872', 'Douala', NULL, 'images/iMfyVtIzrmD498AHvDIFJgf7FQieNWJE2QFdRiar.png', NULL, '3', '1', NULL, NULL, NULL, 3, NULL, '$2y$12$ixBfXasQbYovaZ/xwes2Xe33NK79XBmSC7dU68FYStmb8UhkzIuti', NULL, '2024-11-19 21:36:11', '2024-11-19 21:36:11'),
(8, 'Tantanpion', 'tantanpion@gmail.com', '694865872', 'Douala', 'Cameroon', 'images/9SO00rUXl8yhr10OV7UgjzY9QVyFiCyoUK4kNHtY.png', '1', NULL, NULL, NULL, NULL, '1', 4, NULL, '$2y$12$nCSZbTp7ll41bu1RbdkI1uxzDSY8RfYR65OGrD45YaTb3MYJ84.IK', NULL, '2024-11-19 21:36:12', '2024-11-19 21:36:12'),
(9, 'Kamga', 'kamga@membre.com', '694865872', 'Douala', 'Cameroun', 'images/WwpEAcSY4yn2lL7RcfduMLFyFXo2nYjwXfSBeI1c.png', '3', NULL, NULL, '1', '7', '3', 4, NULL, '$2y$12$52j4ZBVFanBa9GoU2UtDM.WgJD5SBs6F.mdz.WrXfICmPewVP/ZvC', NULL, '2024-11-19 21:39:14', '2024-11-19 21:39:14'),
(10, 'bafang', 'bafang@gmail.com', '694865872', 'Douala', 'Cameroun', 'images/6SRmvR3m0nd2X9WszCgglExCg5YSeXuSI3kDMcBN.png', '3', NULL, NULL, '1', '7', '3', 4, NULL, '$2y$12$BvgYvWBxMQMHL58hC9Ngxe7uCD0GhSl7R0e1/pEuKLlaEko.QGTei', NULL, '2024-11-19 22:33:00', '2024-11-19 22:33:00'),
(11, 'toto', 'toto@toto.com', '694865872', 'Douala', 'Cameroun', 'images/sE4e7paCrn4Go38kaf0WuQwv1Jh40v4nHI9ijdle.png', '3', NULL, NULL, '1', '7', '1', 4, NULL, '$2y$12$ApitGQk6KJ57QnLYCIxrjuXSLS5TSf1BaqHEmcU2J.qXAYf57Ldzu', NULL, '2024-11-21 01:01:47', '2024-11-21 01:01:47'),
(12, 'toto', 'totoland@toto.com', '694865872', 'Douala', 'Cameroun', 'images/SVkAgMrxZjRqquliRCiRCsKzhl6x9EOW9ZOKGpa3.png', '3', NULL, NULL, '1', '7', '2', 4, NULL, '$2y$12$7XkugLc6UELuHB4HC.eTZOC.b6rWFwhScktqvAk/9lGrhhkNKQexq', NULL, '2024-11-21 18:07:27', '2024-11-21 18:07:27'),
(13, 'toto', 'totoland1@toto.com', '694865872', 'Douala', 'Cameroun', 'images/2j2nIguNQHrymAghyy8imHQ1ruVr6hf6oVwuaHMz.png', '3', NULL, NULL, '1', '7', '3', 4, NULL, '$2y$12$5eAMagFj730x7m3FfIWud.4wbn5CcrGjQyUKpImL48nXTUgaKhV.O', NULL, '2024-11-21 18:08:35', '2024-11-21 18:08:35');

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
(1, 'Marcher DAKAR', 3, 1, 7, 'images/qnspdmYOiaHpsaI4szHTeUpqlJR6SAJGmvTqP3d0.png', '2024-11-19 21:36:13', '2024-11-19 21:36:13');

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
