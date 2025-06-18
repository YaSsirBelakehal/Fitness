-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 29 juin 2024 à 22:12
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reservation`
--

-- --------------------------------------------------------

--
-- Structure de la table `rsrv`
--

CREATE TABLE `rsrv` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `tel` int(30) NOT NULL,
  `cin` varchar(30) NOT NULL,
  `birth` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `package` varchar(20) NOT NULL,
  `pay` varchar(30) NOT NULL,
  `code` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `rsrv`
--

INSERT INTO `rsrv` (`id`, `nom`, `prenom`, `genre`, `adresse`, `tel`, `cin`, `birth`, `email`, `password`, `package`, `pay`, `code`) VALUES
(11, 'karim', 'mrabet', 'MALE', 'av rue', 732569421, 'M1326547', '2001-03-16', 'karim@karim.com', '789', 'basic', 'paypal', '001236845'),
(12, 'maryam', 'bakali', 'FEMALE', 'av rue', 63297134, 'M1385264', '1997-11-07', 'maryam@maryam.com', '789', 'diamond', 'paypal', '001235454');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `rsrv`
--
ALTER TABLE `rsrv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `rsrv`
--
ALTER TABLE `rsrv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
