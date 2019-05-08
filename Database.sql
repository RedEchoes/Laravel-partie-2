-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 mai 2019 à 20:07
-- Version du serveur :  8.0.15
-- Version de PHP :  7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp2_laravel_mlaroche`
--
CREATE DATABASE IF NOT EXISTS `tp2_laravel_mlaroche` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tp2_laravel_mlaroche`;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `images_location_id_index` (`location_id`),
  KEY `images_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `created_at`, `updated_at`, `location_id`, `user_id`, `name`) VALUES
(52, '2019-05-06 18:58:04', '2019-05-06 18:58:04', 5, 1, 'bBmTEH4OuTCbuY9gViCnrPHEFVApTGCfrfkXi2PA.jpeg'),
(2, '2019-04-17 00:40:34', '2019-04-17 00:40:34', 2, 1, '5zoEddmwca52gwBfgLE431SP8QexdDd09U7ZG4vN.jpeg'),
(51, '2019-05-06 17:53:29', '2019-05-06 17:53:29', 3, 10, 'hnWVXcoMcSJvJV9SJB8UGimg3euFC3lnhxWxl3Vc.jpeg'),
(4, '2019-04-17 00:41:28', '2019-04-17 00:41:28', 3, 1, '6T8IU6U0Zo63CAn2p3SAvyKQBsZbiEAnURpmC3Vz.jpeg'),
(28, '2019-04-27 01:30:24', '2019-04-27 01:30:24', 7, 1, 'caLmzCpqAsP0t0Y4nFluRuNP28PzvYt1KG6FvQb0.jpeg'),
(44, '2019-04-27 03:19:52', '2019-04-27 03:19:52', 2, 1, 'SsuzP5Niw92LlUotkI3DuSGpusLHXaMKSDZQqNqT.jpeg'),
(9, '2019-04-17 00:42:19', '2019-04-17 00:42:19', 2, 1, 'ntrNQe5iSLCM1sL7wlBC3elEc0fMfVaLPDwYLtGF.jpeg'),
(10, '2019-04-17 00:42:30', '2019-04-17 00:42:30', 2, 1, 'GUEYigTOXDrll082I3EaArl5LKkWwGezlfWbA32m.jpeg'),
(11, '2019-04-17 00:42:40', '2019-04-17 00:42:40', 4, 1, 'AIrUF3lbShhAnYBThReA2uZSKbZcN4LK0LbX08X5.jpeg'),
(12, '2019-04-17 00:42:53', '2019-04-17 00:42:53', 4, 1, '9LAYQevwPkOKE7JpSI5IfRAOYrxYqJBEPzeBYJ08.jpeg'),
(47, '2019-04-27 03:20:18', '2019-04-27 03:20:18', 4, 1, 'cY6bJ7Mg4bI6OSIjiBjFv0RbdQqaNNWTJZbr1cKl.jpeg'),
(18, '2019-04-17 17:45:52', '2019-04-17 17:45:52', 4, 1, 'TqTLKgi2D1SYmuZoHWp5vOoecFROnIC61gO05lgp.jpeg'),
(19, '2019-04-23 14:26:52', '2019-04-23 14:26:52', 6, 1, 'Z7wOkZFrQcu6p2bFI5EkNMbZmAKiEy22iG3cdbgO.jpeg'),
(20, '2019-04-23 14:27:06', '2019-04-23 14:27:06', 6, 1, 'hT2xFG4cfgYUfI9uB0NkTx01oOJVcSuGHRPimeZB.jpeg'),
(21, '2019-04-27 00:27:58', '2019-04-27 00:27:58', 6, 1, 'earfwUnzk6JHsQZFbqexngncsLsapMIDxEJB0Hf2.jpeg'),
(22, '2019-04-27 00:28:08', '2019-04-27 00:28:08', 5, 1, 'ZrOkX2gOFm1OYuifwNJnBKzQMVx67w8Rh8i6yKUP.jpeg'),
(23, '2019-04-27 00:28:17', '2019-04-27 00:28:17', 4, 1, 'HYCpEe9QrhWSOvks0d9rY9MOnf1rQ09c1cv2nWEj.jpeg'),
(24, '2019-04-27 00:28:27', '2019-04-27 00:28:27', 3, 1, 'RcJxlWggrwrl0JbhQ7p8XQAA40nevvLX2O7gRNEP.jpeg'),
(25, '2019-04-27 00:28:38', '2019-04-27 00:28:38', 2, 1, 'tG47CBIY9OAFqcnVRNvJMXyhK0GVPvwvIjtaM5UB.jpeg'),
(43, '2019-04-27 03:10:41', '2019-04-27 03:10:41', 3, 1, 'cRSg4E3ubw20vjErfnhd8efPNVJhxikACiy9TpGb.jpeg'),
(42, '2019-04-27 03:10:12', '2019-04-27 03:10:12', 7, 1, 'cNS702VUOsyAtYKyQk7Qx6JITHfcYWpF23ujwuwE.jpeg'),
(29, '2019-04-27 01:30:43', '2019-04-27 01:30:43', 7, 1, 'Rbf1D4pf2pwpmLYniAJcOUTCNxK4pPRMDiUIZf4Z.jpeg'),
(30, '2019-04-27 01:31:28', '2019-04-27 01:31:28', 7, 1, 'vNvUZKQUXl32fh9LdOkeo69or5BKisXnR0UN0Y0v.jpeg'),
(31, '2019-04-27 01:31:36', '2019-04-27 01:31:36', 3, 1, 'RrRiYu84x3RtEX30NLmrJtvk1dxdiEilQcsQnzxS.jpeg'),
(32, '2019-04-27 01:31:45', '2019-04-27 01:31:45', 6, 1, 'HHBawxrVuOwnkh6MtgO46T9pMylsax8vxiV5STzz.jpeg'),
(33, '2019-04-27 01:32:48', '2019-04-27 01:32:48', 7, 1, 'tWU9IhkC0fFQo88dWSBEsaiBsSrist5ZO0W9x8io.jpeg'),
(34, '2019-04-27 01:33:33', '2019-04-27 01:33:33', 7, 1, 'L4FpPOdaUDxt27Gnl8tvf2TGNgvhNjvcmPtuldhq.jpeg'),
(35, '2019-04-27 01:34:45', '2019-04-27 01:34:45', 7, 1, 'Y2Bvutx2OA9WgZPxDJ6avOCNeUK7XfLq3EjskCMl.jpeg'),
(50, '2019-04-29 19:27:56', '2019-04-29 19:27:56', 2, 10, 'pq9WI1gwAvZUaRLGH8XWCf33h9UQroh7N30BvnJt.jpeg'),
(37, '2019-04-27 02:03:57', '2019-04-27 02:03:57', 3, 1, 'DLb0MT697BkaZ04FlIBJrgrlpXeNY6txHhP6Ddah.jpeg'),
(38, '2019-04-27 02:13:29', '2019-04-27 02:13:29', 7, 10, '4rG2aJhmYzsa2edftkW321jmhiyYDNqqk6QuMvOx.jpeg'),
(39, '2019-04-27 02:45:01', '2019-04-27 02:45:01', 7, 1, 'VySiYduk920tL6Ci4BzbVY94LrN4LzROtcG0cfmk.jpeg'),
(40, '2019-04-27 02:54:29', '2019-04-27 02:54:29', 4, 1, 'dVtYJWFClthS84RUk3cMZmRbUJSq9UstF8TVKpgX.jpeg'),
(41, '2019-04-27 03:00:35', '2019-04-27 03:00:35', 7, 1, '7mtjsj0bZE16yK1jpAoZk6yIq1lmPxGVVzFtdpVK.jpeg'),
(48, '2019-04-27 03:20:41', '2019-04-27 03:20:41', 6, 1, 'vkFawOAtBYSA9jjll8eLUC7zAdWB9JCDp54kVrFe.jpeg'),
(49, '2019-04-27 03:24:18', '2019-04-27 03:24:18', 7, 10, 'zXpbF3R92aMG0j66bbNNIs1JFUdoYTp2PuIkmy1a.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `image_user`
--

DROP TABLE IF EXISTS `image_user`;
CREATE TABLE IF NOT EXISTS `image_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `alert` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `image_user_user_id_index` (`user_id`),
  KEY `image_user_image_id_index` (`image_id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `image_user`
--

INSERT INTO `image_user` (`id`, `alert`, `user_id`, `created_at`, `updated_at`, `image_id`) VALUES
(62, 1, 7, '2019-05-07 19:17:36', '2019-05-07 19:17:36', 35),
(61, 1, 7, '2019-05-07 19:17:30', '2019-05-07 19:17:30', 28),
(60, 1, 10, '2019-05-07 19:10:12', '2019-05-07 19:10:12', 52),
(59, 1, 1, '2019-05-07 19:09:54', '2019-05-07 19:09:54', 52),
(58, 1, 1, '2019-05-07 01:38:27', '2019-05-07 01:38:27', 50),
(57, 1, 1, '2019-05-07 01:10:17', '2019-05-07 01:37:52', 19),
(56, 1, 10, '2019-05-06 17:52:30', '2019-05-06 17:52:30', 19),
(55, 1, 10, '2019-05-01 15:45:27', '2019-05-01 15:45:27', 48),
(54, 1, 1, '2019-05-01 15:45:16', '2019-05-01 15:45:16', 48),
(36, 1, 1, '2019-04-27 03:08:02', '2019-04-27 03:08:02', 26),
(37, 1, 1, '2019-04-30 15:12:11', '2019-04-30 15:12:11', 2),
(38, 1, 1, '2019-04-30 16:04:26', '2019-04-30 16:04:26', 42),
(39, 1, 1, '2019-04-30 16:04:28', '2019-04-30 16:04:28', 42),
(40, 1, 1, '2019-04-30 16:04:42', '2019-04-30 16:04:42', 41),
(41, 1, 1, '2019-04-30 16:04:43', '2019-04-30 16:04:43', 41),
(42, 1, 1, '2019-04-30 16:29:35', '2019-04-30 16:29:35', 38),
(53, 1, 10, '2019-05-01 15:44:17', '2019-05-01 15:44:17', 50);

-- --------------------------------------------------------

--
-- Structure de la table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `locations`
--

INSERT INTO `locations` (`id`, `created_at`, `updated_at`, `name`) VALUES
(7, '2019-04-27 01:30:17', '2019-04-27 01:30:17', 'Pont-rouge'),
(2, NULL, NULL, 'Québec'),
(3, '2019-04-17 00:40:52', '2019-04-17 00:40:52', 'Lévis'),
(4, '2019-04-17 00:40:55', '2019-04-17 00:40:55', 'Neuville'),
(5, '2019-04-17 00:41:03', '2019-04-17 00:41:03', 'St-raymond'),
(6, '2019-04-17 00:43:44', '2019-04-17 00:43:44', 'Sainte-foy'),
(8, '2019-04-27 02:44:47', '2019-04-27 02:44:47', 'Montréal'),
(9, '2019-05-07 20:25:26', '2019-05-07 20:25:26', 'Ottawa');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_04_08_203840_create_images_table', 1),
(3, '2019_04_08_204546_create_locations_table', 1),
(4, '2019_04_08_204645_create_image_user_table', 1),
(5, '2019_04_08_204830_create_users_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('user','admin') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maude Laroche', 'maudelarochee@gmail.com', NULL, '$2y$10$Kcsa.d0q9uG6c9DFTqehQeNDvmRqG9tQmAURsHbKPR5R.EOIp8o6C', 'user', NULL, '2019-04-17 00:35:05', '2019-04-17 00:35:05'),
(7, 'admin', 'admin@admin.ca', NULL, '$2y$10$9D6rK8aVv/Be77k/oWur3exeIsYQEPCaU2bnlRxw/UHmc1hQIM6Wq', 'admin', NULL, '2019-04-24 16:57:56', '2019-04-24 16:57:56'),
(6, 'Maudee', 'ml94_02cool@hotmail.com', '2019-04-24 16:40:08', '$2y$10$iVwGlvDH5WZTlJCXTLAdZOqZ2lOEFnKPA8FJ4IeElJicTbZeEx4jG', 'user', NULL, '2019-04-24 16:39:35', '2019-04-24 16:40:08'),
(11, 'user2', 'user2@user2.ca', NULL, '$2y$10$/jy9/KoU3gLLzi1T82N01.ExSGaBi/pRSVxd0wGuefyYdVGWtvtY.', 'user', NULL, '2019-04-27 00:40:45', '2019-04-27 00:40:45'),
(10, 'user1', 'user1@user1.ca', NULL, '$2y$10$zQLMEkSq3qQHRFax3qeMBuX7qsyZX9JMGQfxXdiJmrQzekjvwu0RW', 'user', NULL, '2019-04-27 00:39:55', '2019-04-27 00:39:55'),
(12, 'Rosalie', 'rosalie@gmail.com', NULL, '$2y$10$qo1zWg0aeL4Z/7zyqob85uKpBMhkrqxSyQsndD9/ILTJ4q51efzXa', 'user', NULL, '2019-05-08 00:02:09', '2019-05-08 00:02:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
