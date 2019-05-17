-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 17 Mai 2019 à 17:38
-- Version du serveur :  5.7.11
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp2_2_mlaroche_vdesrosiers`
--

-- --------------------------------------------------------

--
-- Structure de la table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `locations`
--

INSERT INTO `locations` (`id`, `created_at`, `updated_at`, `name`) VALUES
(2, '2019-05-15 04:00:00', '2019-05-15 04:00:00', 'Québec'),
(3, '2019-04-17 00:40:52', '2019-04-17 00:40:52', 'Lévis'),
(4, '2019-04-17 00:40:55', '2019-04-17 00:40:55', 'Neuville'),
(5, '2019-04-17 00:41:03', '2019-04-17 00:41:03', 'St-raymond'),
(6, '2019-04-17 00:43:44', '2019-04-17 00:43:44', 'Sainte-foy'),
(7, '2019-04-27 01:30:17', '2019-04-27 01:30:17', 'Pont-rouge'),
(8, '2019-04-27 02:44:47', '2019-04-27 02:44:47', 'Montréal'),
(9, '2019-05-07 20:25:26', '2019-05-07 20:25:26', 'Ottawa');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
