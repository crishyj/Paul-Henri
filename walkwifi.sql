-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 27 nov. 2019 à 16:46
-- Version du serveur :  5.7.23-23-log
-- Version de PHP :  7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `walkwifi`
--

-- --------------------------------------------------------

--
-- Structure de la table `code_correspondence`
--

CREATE TABLE `code_correspondence` (
  `code` varchar(30) NOT NULL,
  `boitier` varchar(30) NOT NULL,
  `carte` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `code_correspondence`
--

INSERT INTO `code_correspondence` (`code`, `boitier`, `carte`) VALUES
('123456789', '777777', '49494949'),
('987654321', '888888', '49494949'),
('112233445', '998877', '110220');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(255) NOT NULL,
  `code` varchar(30) DEFAULT NULL,
  `boitier` varchar(30) DEFAULT NULL,
  `carte` varchar(30) DEFAULT NULL,
  `tarif` int(2) DEFAULT NULL,
  `startingtime` datetime(6) DEFAULT NULL,
  `endingtime` datetime(6) DEFAULT NULL,
  `totaltime` int(5) DEFAULT NULL,
  `totalcost` int(5) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
