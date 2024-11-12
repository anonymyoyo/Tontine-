-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour tontine
CREATE DATABASE IF NOT EXISTS `tontine` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `tontine`;

-- Listage de la structure de table tontine. agences
CREATE TABLE IF NOT EXISTS `agences` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `association_id` bigint unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `agences_email_unique` (`email`),
  KEY `agences_user_id_foreign` (`user_id`),
  KEY `agences_association_id_foreign` (`association_id`),
  CONSTRAINT `agences_association_id_foreign` FOREIGN KEY (`association_id`) REFERENCES `associations` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `agences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.agences : ~1 rows (environ)
INSERT INTO `agences` (`id`, `name`, `email`, `phone`, `ville`, `pays`, `user_id`, `association_id`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'TCA Douala', 'tcadouala@tca.com', '694865872', 'Douala', 'Cameroon', 5, 3, 'images/0I66RqrbpB0GA0MWuRY8nSe1S3biOY3lRdsErjHq.png', '2024-11-07 17:33:05', '2024-11-07 17:33:05');

-- Listage de la structure de table tontine. associations
CREATE TABLE IF NOT EXISTS `associations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reglement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `associations_email_unique` (`email`),
  KEY `associations_user_id_foreign` (`user_id`),
  CONSTRAINT `associations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.associations : ~4 rows (environ)
INSERT INTO `associations` (`id`, `name`, `email`, `description`, `ville`, `pays`, `reglement`, `user_id`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Association', 'bitinza@association.com', 'fdgffgdfg', 'Douala', 'Cameroon', 'dfgdfgd', 2, 'images/xbQm5lFBaRSo7RbevOOf3N1vwmR9Xa5BYxLTrNXM.png', '2024-11-07 17:33:04', '2024-11-07 17:33:04'),
	(2, 'BBP', 'bbp@gmail.com', 'sdfsdfdsf', 'Douala', 'Cameroon', 'sfsfsfsfsdf', 3, 'images/4Ky2OIfpwBonvhHtgyWd6QmHIkxVseVM9rWlV2pU.png', '2024-11-07 17:33:04', '2024-11-07 17:33:04'),
	(3, 'TCA Miracle', 'tcabertoua@tca.com', 'adasadas', 'Bertoua', 'Cameroon', 'asdasds', 4, 'images/QRjj4iYewYT74BdX9XKHQqcdrXGgk8hCraQN4Dpn.png', '2024-11-07 17:33:05', '2024-11-07 17:33:05'),
	(4, 'PME ASSOCIATION', 'pme-association@pme.com', 'jjkjjjjjjjjjjjjjj', 'Bertoua', 'Cameroon', 'jkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkbbbbbbbbbbbbbbb', 10, 'images/w5f1UGx3Kzj65ok57VTHxMuKqHkqWvOacadO1tf3.png', '2024-11-08 18:09:23', '2024-11-08 18:09:23');

-- Listage de la structure de table tontine. cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.cache : ~0 rows (environ)

-- Listage de la structure de table tontine. cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.cache_locks : ~0 rows (environ)

-- Listage de la structure de table tontine. contributions
CREATE TABLE IF NOT EXISTS `contributions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `montant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode_paiement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contributions_transaction_id_foreign` (`transaction_id`),
  CONSTRAINT `contributions_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.contributions : ~0 rows (environ)

-- Listage de la structure de table tontine. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.failed_jobs : ~0 rows (environ)

-- Listage de la structure de table tontine. historiques
CREATE TABLE IF NOT EXISTS `historiques` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contribution_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `date_action` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `historiques_contribution_id_foreign` (`contribution_id`),
  KEY `historiques_user_id_foreign` (`user_id`),
  CONSTRAINT `historiques_contribution_id_foreign` FOREIGN KEY (`contribution_id`) REFERENCES `contributions` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `historiques_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.historiques : ~0 rows (environ)

-- Listage de la structure de table tontine. jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.jobs : ~0 rows (environ)

-- Listage de la structure de table tontine. job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.job_batches : ~0 rows (environ)

-- Listage de la structure de table tontine. logs
CREATE TABLE IF NOT EXISTS `logs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_action` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `logs_user_id_foreign` (`user_id`),
  CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.logs : ~0 rows (environ)

-- Listage de la structure de table tontine. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.migrations : ~13 rows (environ)
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
	(13, '2024_11_07_092352_create_tontine_choisies_table', 1);

-- Listage de la structure de table tontine. password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.password_reset_tokens : ~0 rows (environ)

-- Listage de la structure de table tontine. roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.roles : ~5 rows (environ)
INSERT INTO `roles` (`id`, `name`, `description`, `permission`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'Administrateur general de la plateforme', 'Gestion des tontines et/ou associations sur la plateforme, gestion des utilisateurs et des differentes transactions', '2024-11-07 17:32:58', '2024-11-07 17:32:58'),
	(2, 'Agence', 'Administrateur de lagence', 'Gestion des membres , voir historique', '2024-11-07 17:32:58', '2024-11-07 17:32:58'),
	(3, 'Commercial', 'Membre de la tontine et/ou de lassociation', 'Effectuer les versements, voir historique', '2024-11-07 17:32:58', '2024-11-07 17:32:58'),
	(4, 'User', 'Visiteur du site', 'Visite les pages sans pouvoir integrer une tontine ou une association', '2024-11-07 17:32:58', '2024-11-07 17:32:58'),
	(5, 'Association', 'Administrateur de lassociation', 'Gestion de sa tontine et/ou son association, gesion des membres associers, voir historique', '2024-11-07 17:32:58', '2024-11-07 17:32:58');

-- Listage de la structure de table tontine. sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.sessions : ~2 rows (environ)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('d15D2pS0CiYmbMdwUusb9wozUNb7adjEnzDL1wdA', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZ0ZJYWg4eXBJUG9aMnBTVm1TOW51VjNnVVRxVWF3eGxDY29LZHBJQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9Vc2VyL0NyZWVyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1731063618),
	('MDovowt58hddDR3G5eamCW3nukzZzr4VVqTXcuc9', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVlhuNXJKcXRGb2VQOHNNemZpcXhwZ29ZR0dJd3FXYVpiSlkwMklQeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1731077048);

-- Listage de la structure de table tontine. tontines
CREATE TABLE IF NOT EXISTS `tontines` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reglement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.tontines : ~4 rows (environ)
INSERT INTO `tontines` (`id`, `name`, `description`, `reglement`, `prix`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Tontine Electro-menager', 'fdgdfgdfg', 'dfgdfgdfgfdg', '5000', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php297F.tmp', '2024-11-07 17:33:06', '2024-11-07 17:33:06'),
	(2, 'Tontine Simple', 'dfsdfsdfsd', 'fdsfsdfsdf', '500', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php951.tmp', '2024-11-07 17:33:06', '2024-11-07 17:33:06'),
	(3, 'Tontine Scolaire', 'sdfsfsdfsdf', 'sdfsdfsdfsdf', '1000', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php75E6.tmp', '2024-11-07 17:33:06', '2024-11-07 17:33:06'),
	(4, 'Tontine speciale fin d\'annee', 'gfdgdfgdf', 'gdfgdfgdfg', '500', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\phpF2E7.tmp', '2024-11-07 17:33:06', '2024-11-07 17:33:06');

-- Listage de la structure de table tontine. tontine_choisies
CREATE TABLE IF NOT EXISTS `tontine_choisies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `tontine_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tontine_choisies_user_id_foreign` (`user_id`),
  KEY `tontine_choisies_tontine_id_foreign` (`tontine_id`),
  CONSTRAINT `tontine_choisies_tontine_id_foreign` FOREIGN KEY (`tontine_id`) REFERENCES `tontines` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tontine_choisies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.tontine_choisies : ~3 rows (environ)
INSERT INTO `tontine_choisies` (`id`, `user_id`, `tontine_id`, `created_at`, `updated_at`) VALUES
	(1, 8, 3, '2024-11-07 17:33:49', '2024-11-07 17:33:49'),
	(2, 8, 1, '2024-11-07 17:35:53', '2024-11-07 17:35:53'),
	(3, 8, 1, '2024-11-07 18:48:53', '2024-11-07 18:48:53');

-- Listage de la structure de table tontine. transactions
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_user_id_foreign` (`user_id`),
  CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.transactions : ~0 rows (environ)

-- Listage de la structure de table tontine. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
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
  `role_id` bigint unsigned NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.users : ~10 rows (environ)
INSERT INTO `users` (`id`, `name`, `email`, `phone`, `ville`, `pays`, `image`, `association_id`, `com_association_id`, `com_agence_id`, `mem_agence_id`, `mem_com_id`, `mem_tontine_id`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'superadmin@icloud.com', '694865872', 'Douala', 'Cameroun', 'images/5QHTgvFln3hvqaTuFgIwdEzTGGwzhKgLf0dlqIsE.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '$2y$12$s7KpeK4JfEOStiLdQBfohuTRemR.sKBKUM9F46qpzVddL/Usw7D62', NULL, '2024-11-07 17:33:00', '2024-11-07 17:33:00'),
	(2, 'BITINZA', 'bitinza@tca.com', '694865872', 'Douala', 'Cameroon', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php8AFE.tmp', '1', NULL, NULL, NULL, NULL, NULL, 5, NULL, '$2y$12$FMXMVnYiDa7TQqBtVORDBuJVPBEoidwmMUj2Sju5ax07qCT.0gorC', NULL, '2024-11-07 17:33:00', '2024-11-07 17:33:00'),
	(3, 'Moussi Teng Pierre Dilan', 'moussidilan@gmail.com', '694865872', 'Kribi', 'Cameroon', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\phpC61C.tmp', '2', NULL, NULL, NULL, NULL, NULL, 5, NULL, '$2y$12$BjyBfIv.pLSnNSMvsD2aHOFP4EIDgqArvmZ854B4eibWcyDr5dVhu', NULL, '2024-11-07 17:33:01', '2024-11-07 17:33:01'),
	(4, 'BITINZA', 'superadmin@gmail.com', '694865872', 'Douala', 'Cameroon', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php33BF.tmp', '3', NULL, NULL, NULL, NULL, NULL, 5, NULL, '$2y$12$VV8IkJ22ssph0m4WJ3G/FOcIw6N/0LVB/zvv9ShQbJsCjvLklUi/6', NULL, '2024-11-07 17:33:01', '2024-11-07 17:33:01'),
	(5, 'Marole', 'marole@tca.com', '694865872', 'Douala', 'Cameroon', 'images/IgOMR0TPOFHaTkaPUOw4lXJ3LrYaCGUQkwoal2hU.png', '3', NULL, NULL, NULL, NULL, NULL, 2, NULL, '$2y$12$KlhamR.Tg5lLZgS9N2H7BeC53nruaY3ul76qidPEqYmgI/g.n76p2', NULL, '2024-11-07 17:33:02', '2024-11-07 17:33:02'),
	(6, 'Emauel', 'superadmi1@gmail.com', '694865872', 'Douala', 'Cameroon', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\php1A3B.tmp', NULL, '3', NULL, NULL, NULL, NULL, 3, NULL, '$2y$12$pVWJS2so7f0.isQ9/Ci2.ua2/xVljV1VMFYAGZ0Fwl3yveTA4KxpS', NULL, '2024-11-07 17:33:03', '2024-11-07 17:33:03'),
	(7, 'Serges', 'serges@commercial.com', '694865872', 'Douala', NULL, 'images/iMfyVtIzrmD498AHvDIFJgf7FQieNWJE2QFdRiar.png', NULL, '3', '1', NULL, NULL, NULL, 3, NULL, '$2y$12$68OJIhHA6vs.p.GPvJzKDOuDfk3XIkH0V9UjVP5lKHWs20/g6CnpS', NULL, '2024-11-07 17:33:03', '2024-11-07 17:33:03'),
	(8, 'Tantanpion', 'tantanpion@gmail.com', '694865872', 'Douala', 'Cameroon', 'images/9SO00rUXl8yhr10OV7UgjzY9QVyFiCyoUK4kNHtY.png', '1', NULL, NULL, NULL, NULL, '1', 4, NULL, '$2y$12$7a2GS5T/UBOG7t8TtBCDxunkkkl5stMnQv0quzUO6vSfbjKOAJe9q', NULL, '2024-11-07 17:33:04', '2024-11-07 17:33:04'),
	(9, 'Kamga', 'kamga@membre.com', '694865872', 'Douala', 'Cameroon', 'images/LDEDOZDCIAB7g2qBiM67vlB8etcRIrYwcDUV2C65.png', '3', NULL, NULL, '1', '7', '1', 4, NULL, '$2y$12$QWJnSZkqCPlwIvRwxqhgcOaNa4NmQOI/UEhcuRoMKJ6z7xpfQXIfC', NULL, '2024-11-07 23:25:01', '2024-11-07 23:25:01'),
	(10, 'Titi', 'titi@icloud.com', '694865872', 'Kribi', 'Cameroon', 'C:\\Users\\Administrator\\AppData\\Local\\Temp\\phpA7F4.tmp', NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, '$2y$12$oTCqgCHtTBpOycVnqo7rh.VGIj75hEQik3CLUdhUV6E9IYnZgmSsq', NULL, '2024-11-08 18:08:08', '2024-11-08 18:08:08');

-- Listage de la structure de table tontine. zones
CREATE TABLE IF NOT EXISTS `zones` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `association_id` bigint unsigned NOT NULL,
  `agence_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `zones_association_id_foreign` (`association_id`),
  KEY `zones_agence_id_foreign` (`agence_id`),
  KEY `zones_user_id_foreign` (`user_id`),
  CONSTRAINT `zones_agence_id_foreign` FOREIGN KEY (`agence_id`) REFERENCES `agences` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `zones_association_id_foreign` FOREIGN KEY (`association_id`) REFERENCES `associations` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `zones_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table tontine.zones : ~1 rows (environ)
INSERT INTO `zones` (`id`, `name`, `association_id`, `agence_id`, `user_id`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Marcher DAKAR', 3, 1, 7, 'images/qnspdmYOiaHpsaI4szHTeUpqlJR6SAJGmvTqP3d0.png', '2024-11-07 17:33:05', '2024-11-07 17:33:05');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
