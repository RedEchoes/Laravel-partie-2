-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 17 Mai 2019 à 17:32
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
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id`, `created_at`, `updated_at`, `location_id`, `user_id`, `name`) VALUES
(2, '2019-04-17 00:40:34', '2019-04-17 00:40:34', 2, 4, '5zoEddmwca52gwBfgLE431SP8QexdDd09U7ZG4vN.jpeg'),
(4, '2019-04-17 00:41:28', '2019-04-17 00:41:28', 3, 3, '6T8IU6U0Zo63CAn2p3SAvyKQBsZbiEAnURpmC3Vz.jpeg'),
(9, '2019-04-17 00:42:19', '2019-04-17 00:42:19', 2, 1, 'ntrNQe5iSLCM1sL7wlBC3elEc0fMfVaLPDwYLtGF.jpeg'),
(10, '2019-04-17 00:42:30', '2019-04-17 00:42:30', 2, 3, 'GUEYigTOXDrll082I3EaArl5LKkWwGezlfWbA32m.jpeg'),
(11, '2019-04-17 00:42:40', '2019-04-17 00:42:40', 4, 5, 'AIrUF3lbShhAnYBThReA2uZSKbZcN4LK0LbX08X5.jpeg'),
(12, '2019-04-17 00:42:53', '2019-04-17 00:42:53', 4, 1, '9LAYQevwPkOKE7JpSI5IfRAOYrxYqJBEPzeBYJ08.jpeg'),
(18, '2019-04-17 17:45:52', '2019-04-17 17:45:52', 4, 1, 'TqTLKgi2D1SYmuZoHWp5vOoecFROnIC61gO05lgp.jpeg'),
(19, '2019-04-23 14:26:52', '2019-04-23 14:26:52', 6, 2, 'Z7wOkZFrQcu6p2bFI5EkNMbZmAKiEy22iG3cdbgO.jpeg'),
(20, '2019-04-23 14:27:06', '2019-04-23 14:27:06', 6, 2, 'hT2xFG4cfgYUfI9uB0NkTx01oOJVcSuGHRPimeZB.jpeg'),
(21, '2019-04-27 00:27:58', '2019-04-27 00:27:58', 6, 1, 'earfwUnzk6JHsQZFbqexngncsLsapMIDxEJB0Hf2.jpeg'),
(22, '2019-04-27 00:28:08', '2019-04-27 00:28:08', 5, 4, 'ZrOkX2gOFm1OYuifwNJnBKzQMVx67w8Rh8i6yKUP.jpeg'),
(23, '2019-04-27 00:28:17', '2019-04-27 00:28:17', 4, 1, 'HYCpEe9QrhWSOvks0d9rY9MOnf1rQ09c1cv2nWEj.jpeg'),
(24, '2019-04-27 00:28:27', '2019-04-27 00:28:27', 3, 6, 'RcJxlWggrwrl0JbhQ7p8XQAA40nevvLX2O7gRNEP.jpeg'),
(25, '2019-04-27 00:28:38', '2019-04-27 00:28:38', 2, 1, 'tG47CBIY9OAFqcnVRNvJMXyhK0GVPvwvIjtaM5UB.jpeg'),
(28, '2019-04-27 01:30:24', '2019-04-27 01:30:24', 7, 1, 'caLmzCpqAsP0t0Y4nFluRuNP28PzvYt1KG6FvQb0.jpeg'),
(29, '2019-04-27 01:30:43', '2019-04-27 01:30:43', 7, 4, 'Rbf1D4pf2pwpmLYniAJcOUTCNxK4pPRMDiUIZf4Z.jpeg'),
(30, '2019-04-27 01:31:28', '2019-04-27 01:31:28', 7, 3, 'vNvUZKQUXl32fh9LdOkeo69or5BKisXnR0UN0Y0v.jpeg'),
(31, '2019-04-27 01:31:36', '2019-04-27 01:31:36', 3, 5, 'RrRiYu84x3RtEX30NLmrJtvk1dxdiEilQcsQnzxS.jpeg'),
(32, '2019-04-27 01:31:45', '2019-04-27 01:31:45', 6, 1, 'HHBawxrVuOwnkh6MtgO46T9pMylsax8vxiV5STzz.jpeg'),
(33, '2019-04-27 01:32:48', '2019-04-27 01:32:48', 7, 1, 'tWU9IhkC0fFQo88dWSBEsaiBsSrist5ZO0W9x8io.jpeg'),
(34, '2019-04-27 01:33:33', '2019-04-27 01:33:33', 7, 1, 'L4FpPOdaUDxt27Gnl8tvf2TGNgvhNjvcmPtuldhq.jpeg'),
(35, '2019-04-27 01:34:45', '2019-04-27 01:34:45', 7, 1, 'Y2Bvutx2OA9WgZPxDJ6avOCNeUK7XfLq3EjskCMl.jpeg'),
(37, '2019-04-27 02:03:57', '2019-04-27 02:03:57', 3, 1, 'DLb0MT697BkaZ04FlIBJrgrlpXeNY6txHhP6Ddah.jpeg'),
(39, '2019-04-27 02:45:01', '2019-04-27 02:45:01', 7, 1, 'VySiYduk920tL6Ci4BzbVY94LrN4LzROtcG0cfmk.jpeg'),
(40, '2019-04-27 02:54:29', '2019-04-27 02:54:29', 4, 1, 'dVtYJWFClthS84RUk3cMZmRbUJSq9UstF8TVKpgX.jpeg'),
(41, '2019-04-27 03:00:35', '2019-04-27 03:00:35', 7, 1, '7mtjsj0bZE16yK1jpAoZk6yIq1lmPxGVVzFtdpVK.jpeg'),
(42, '2019-04-27 03:10:12', '2019-04-27 03:10:12', 7, 2, 'cNS702VUOsyAtYKyQk7Qx6JITHfcYWpF23ujwuwE.jpeg'),
(43, '2019-04-27 03:10:41', '2019-04-27 03:10:41', 3, 1, 'cRSg4E3ubw20vjErfnhd8efPNVJhxikACiy9TpGb.jpeg'),
(44, '2019-04-27 03:19:52', '2019-04-27 03:19:52', 2, 1, 'SsuzP5Niw92LlUotkI3DuSGpusLHXaMKSDZQqNqT.jpeg'),
(47, '2019-04-27 03:20:18', '2019-04-27 03:20:18', 4, 5, 'cY6bJ7Mg4bI6OSIjiBjFv0RbdQqaNNWTJZbr1cKl.jpeg'),
(48, '2019-04-27 03:20:41', '2019-04-27 03:20:41', 6, 1, 'vkFawOAtBYSA9jjll8eLUC7zAdWB9JCDp54kVrFe.jpeg'),
(51, '2019-05-06 17:53:29', '2019-05-06 17:53:29', 3, 6, 'hnWVXcoMcSJvJV9SJB8UGimg3euFC3lnhxWxl3Vc.jpeg'),
(52, '2019-05-06 18:58:04', '2019-05-06 18:58:04', 5, 1, 'bBmTEH4OuTCbuY9gViCnrPHEFVApTGCfrfkXi2PA.jpeg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_location_id_index` (`location_id`),
  ADD KEY `images_user_id_index` (`user_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
