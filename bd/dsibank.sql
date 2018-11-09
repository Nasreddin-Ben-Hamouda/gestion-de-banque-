-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 03 oct. 2018 à 18:24
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dsibank`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateN` date NOT NULL,
  `tel` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `adresse`, `dateN`, `tel`, `created_at`, `updated_at`) VALUES
(3, 'White', 'Frida', '9439 Fadel Well\nSouth Golda, DC 58812', '2012-02-02', 6876831, NULL, NULL),
(4, 'Bosco', 'Chloe', '8643 Porter Glens Apt. 672\nPricefort, PA 88463', '1971-12-19', 46851486, NULL, NULL),
(5, 'Krajcik', 'Donna', '7209 Windler Glen\nPaucekville, RI 62153-9242', '2002-10-26', 45504369, NULL, NULL),
(6, 'Roberts', 'Garret', '87788 Kobe Drive\nJacinthestad, GA 86277-8369', '1977-01-01', 61622357, NULL, NULL),
(7, 'Dare', 'Cloyd', '667 Reinger Ford\nSouth Karen, LA 51460-3210', '1989-02-03', 38141500, NULL, NULL),
(8, 'Kunde', 'Nikita', '2426 Delia Shoal\nWest Bernice, FL 98172-0107', '1988-01-23', 85122898, NULL, NULL),
(9, 'Stracke', 'Ervin', '6936 Arden Hill Suite 717\nPort Verlieland, TX 95771', '1994-04-28', 47954358, NULL, NULL),
(10, 'Lubowitz', 'Nikko', '75819 Renner Forks\nWest Summer, WV 47410', '2002-08-16', 61898547, NULL, NULL),
(12, 'Carroll', 'Eveline', '923 O\'Hara Island\nBrittanyport, RI 23629', '2007-04-26', 5733325, NULL, NULL),
(13, 'Hoeger', 'Cielo', '310 Cummerata Street\nBorershire, AR 39223', '2015-11-30', 16738662, NULL, NULL),
(14, 'Dickinson', 'Kirsten', '51785 Mitchell Ports\nZitaland, MS 94156-1166', '1970-07-31', 33429609, NULL, NULL),
(15, 'Schuster', 'Delaney', '97924 Koepp Villages\nTrantowland, IN 72614', '2001-03-27', 12411556, NULL, NULL),
(16, 'Heller', 'Kenneth', '83028 Woodrow Plains Suite 776\nWest Casperfort, HI 29811', '1998-11-24', 81061831, NULL, NULL),
(17, 'Kihn', 'Jarrett', '6810 Jazmyne Crossroad Apt. 896\nPort Marioland, SC 81167', '1975-05-06', 46846976, NULL, NULL),
(18, 'Feil', 'Leanne', '585 Blair Vista Suite 295\nJanickview, IL 30324-7912', '2009-10-01', 68545346, NULL, NULL),
(19, 'Luettgen', 'Kirk', '5193 Georgette Mountain Suite 357\nWest Gianni, MO 99503-1556', '1973-10-21', 11348711, NULL, NULL),
(20, 'Wisozk', 'Ahmad', '2918 Madelyn Freeway\nO\'Connerton, AR 45551-9285', '1977-01-04', 91808146, NULL, NULL),
(21, 'Marks', 'Ola', '6342 Brekke Tunnel\nEast Ethylhaven, ND 54164-6499', '2002-01-22', 10677908, NULL, NULL),
(22, 'Langworth', 'Malvina', '397 Wehner Tunnel\nLake Angelica, IN 37742-7468', '1992-01-07', 78496834, NULL, NULL),
(23, 'McKenzie', 'Luella', '85849 Clement Plain Apt. 520\nEast Waldo, AR 45678-6436', '1982-05-30', 19285941, NULL, NULL),
(24, 'Towne', 'Nels', '86708 Lesch Street Apt. 113\nStokesburgh, CA 18830-7158', '2012-02-21', 55287972, NULL, NULL),
(25, 'Jones', 'Zander', '21214 Runolfsdottir Coves\nEast Ellenton, NY 68177', '1991-02-20', 39596904, NULL, NULL),
(26, 'Cormier', 'Sydnie', '167 Kovacek Trace Apt. 561\nHermanview, PA 70602-1230', '2001-12-15', 68962802, NULL, NULL),
(27, 'Cronin', 'Heloise', '538 Kaylah Causeway Suite 945\nPort Bernardo, TN 04812', '1991-03-28', 48920738, NULL, NULL),
(28, 'Gerlach', 'Ervin', '6773 O\'Kon Village\nMarianbury, ND 94814-2598', '1986-06-05', 99812253, NULL, NULL),
(29, 'Gerhold', 'Ransom', '41999 Maida Burg Suite 795\nCamillehaven, VA 60841-6822', '1985-09-11', 62854866, NULL, NULL),
(30, 'Bailey', 'Dorothea', '900 Kristina Parks Suite 148\nGaylordberg, NH 44020', '1984-04-17', 28763732, NULL, NULL),
(31, 'Mayert', 'Diamond', '14744 McLaughlin Way\nNew Ethel, MT 00274', '1997-08-05', 74566916, NULL, NULL),
(32, 'Miller', 'Amelie', '12866 Dickens Rapid\nNorth Cindyside, KY 92117-2090', '2005-12-13', 56367124, NULL, NULL),
(33, 'Upton', 'Christian', '936 Hodkiewicz Ways Suite 548\nWatsicafurt, NH 62282-7853', '1979-10-27', 99679325, NULL, NULL),
(34, 'Sauer', 'Mauricio', '779 Stroman Burgs Apt. 499\nLake Cecilhaven, NM 33246', '1981-08-15', 6173234, NULL, NULL),
(35, 'Bailey', 'Jayne', '687 Hilpert Highway Apt. 704\nSouth Hans, NM 22166-6395', '2013-05-29', 80427387, NULL, NULL),
(36, 'Schoen', 'Lowell', '3052 Chanel Brooks\nWest Raymondside, NV 88783', '2003-05-10', 26560774, NULL, NULL),
(37, 'Huel', 'Jessyca', '5945 Toney Unions\nSouth Millerborough, NC 90144', '1975-01-31', 20535312, NULL, NULL),
(38, 'Runolfsdottir', 'Daron', '774 Rosalee Shoal\nSimeonchester, WY 21291-7667', '2000-05-12', 37323188, NULL, NULL),
(39, 'Kulas', 'Laurel', '187 Keeling Tunnel Apt. 161\nWisokyhaven, MT 34004', '1990-01-17', 22898487, NULL, NULL),
(40, 'Littel', 'Kali', '37522 Sandra Underpass\nSouth Cale, SC 74580-2718', '1996-02-26', 74693832, NULL, NULL),
(41, 'O\'Conner', 'Jakayla', '10895 Tromp Turnpike Suite 673\nNickolaschester, MA 11468-8197', '1980-02-26', 28972553, NULL, NULL),
(42, 'Koss', 'Maud', '952 Elenor Green Suite 862\nHermannmouth, LA 22398-6236', '2018-01-17', 44469384, NULL, NULL),
(43, 'Smith', 'Colten', '3017 Lamar Mountain Apt. 045\nEltashire, ND 93140-1736', '1993-11-23', 30407423, NULL, NULL),
(44, 'Schinner', 'Rickie', '6143 Herzog Circle Suite 862\nRomagueramouth, AR 08379-5990', '1975-10-13', 31087805, NULL, NULL),
(45, 'Lubowitz', 'Sigurd', '4624 Nathanial Throughway\nHandmouth, IA 02796', '1983-03-18', 20967309, NULL, NULL),
(46, 'Shanahan', 'Annamarie', '539 Schmitt Shoal Suite 571\nBoylemouth, AZ 38837-9700', '2015-08-01', 34730172, NULL, NULL),
(47, 'Mayert', 'Deondre', '6889 Sipes Dale\nAlexanderport, MS 36578', '1990-08-17', 16373703, NULL, NULL),
(48, 'Renner', 'Rick', '88244 Jeanne Rue\nSouth Jo, MN 87015-2092', '2018-02-05', 36341576, NULL, NULL),
(49, 'Halvorson', 'Chanelle', '56000 Zachary Estates\nStammtown, MD 26333', '1989-07-01', 28579261, NULL, NULL),
(50, 'Strosin', 'Orlando', '132 Stroman Route Apt. 463\nConcepcionhaven, SC 98812-1803', '1997-01-09', 13662770, NULL, NULL),
(51, 'nasreddine', 'ben hammouda', 'rue tastour el alia bizerte', '1996-07-06', 54808062, '2018-04-13 13:24:15', '2018-04-13 13:24:15'),
(52, 'brahim', 'ben hammouda', 'canes', '1987-12-01', 20154789, '2018-04-13 16:49:10', '2018-04-13 16:49:10'),
(53, 'saber', 'ben hammouda', 'rue turkish el alia', '1991-05-06', 58963258, '2018-04-13 17:03:09', '2018-04-13 17:03:09'),
(54, 'mohamed', 'ben hammouda', 'nice', '1989-10-02', 56458789, '2018-04-13 17:10:57', '2018-04-13 17:10:57'),
(55, 'radhia', 'ghzouzi', 'rue tastour el alia bizerte', '1885-03-10', 20123456, '2018-04-13 17:50:35', '2018-04-13 17:50:35'),
(56, 'ali', 'ben hammouda', 'rue tastour el alia bizerte', '1882-04-01', 57548489, '2018-04-13 17:52:43', '2018-04-13 17:52:43'),
(57, '4564848', '4544887', 'cdfghjklm%', '1996-03-02', 12365487, '2018-05-03 07:27:50', '2018-05-03 07:27:50'),
(58, 'oussama', 'abdelwahed', 'rue turkish', '1997-07-06', 5480806, '2018-05-03 07:41:20', '2018-05-03 07:41:20'),
(59, 'farah', 'ghzouzi', 'rue moutanabi', '1998-10-02', 25487963, '2018-05-03 17:28:11', '2018-05-03 17:28:11'),
(60, 'ahmed', 'lahbib', 'rue tastour', '2005-12-02', 58963147, '2018-05-03 17:30:45', '2018-05-03 17:30:45');

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

DROP TABLE IF EXISTS `comptes`;
CREATE TABLE IF NOT EXISTS `comptes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `codeBanq` bigint(20) UNSIGNED NOT NULL,
  `codeGuichet` mediumint(9) NOT NULL,
  `cleRib` mediumint(8) UNSIGNED NOT NULL,
  `solde` decimal(8,2) UNSIGNED NOT NULL,
  `devise` mediumint(9) NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comptes`
--

INSERT INTO `comptes` (`id`, `codeBanq`, `codeGuichet`, `cleRib`, `solde`, `devise`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 147852, 123654, 1254879, '300.00', 200, 3, '2018-05-25 23:00:00', '2018-05-26 23:18:11'),
(2, 856522, 563232, 63232, '63232.00', 3232, 4, '2018-05-26 15:28:15', '2018-05-26 15:28:15'),
(3, 565855, 12365, 1254, '500.00', 1478, 5, '2018-05-26 15:30:46', '2018-05-26 21:17:32');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_15_082306_create_clients_table', 1),
(8, '2018_05_17_081107_create_comptes_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nasreddine', 'nasreddinbenhammouda@gmail.com', '$2y$10$nzlvKXFplm4xFIPVSn82be5L2/wGDbJsWu3NSo.JbEQ8YzDqeDmyq', 'Rt6MWRMqfwkRyORPUfV4Q3mfY8NoQzuMQTKkpi0sfo8KF73MtiVmOJRkE3Re', '2018-05-06 22:30:40', '2018-05-06 22:30:40'),
(2, 'hamza', 'hamza@gmail.com', '$2y$10$qTK62/ffmyVlQXcWaraYt.56dUZrJeValG.BGscvNXRYNH/2Wrhli', 'NHPPSPBtrss4479URfG87JbfHy03pQ31b4GelsYWYa295dLEoClkhgm1xh31', '2018-05-06 23:45:03', '2018-05-06 23:45:03'),
(3, 'sdfghjklmlkjhg', 'hammouda@gmail.com', '$2y$10$Du5kAsprL988BvXcEfPOrOJvPF4HSAJOrmXqulyfOTLoTpgGaPzEC', '1RkhD6BGFOBVv24VIetJ9FbYK0F30MIZt533sOGRoKoAjQYVxIIkvf5uLYpS', '2018-05-06 23:46:53', '2018-05-06 23:46:53'),
(4, 'zertyuio', 'nasreddin@gmail.com', '$2y$10$AXcLBMM/n9NoMizMFSKkwuJ.LUa11GKkejBbNAl8i8/DqjSBsJAKO', 'gjlI1yfNqkrBvrO6mDnrLeOvPxByRGyRVl3ZkIyWyt84rcn2EU58aJSJgSQf', '2018-05-06 23:58:42', '2018-05-06 23:58:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
