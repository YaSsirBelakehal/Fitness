-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 29 juin 2024 à 22:05
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
-- Base de données : `reservation2`
--

-- --------------------------------------------------------

--
-- Structure de la table `rsrv2`
--

CREATE TABLE `rsrv2` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `tel` int(30) NOT NULL,
  `cin` varchar(30) NOT NULL,
  `birth` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `rsrv2`
--

INSERT INTO `rsrv2` (`id`, `nom`, `prenom`, `genre`, `adresse`, `tel`, `cin`, `birth`, `email`, `password`) VALUES
(25, 'yassir', 'belakehal', 'MALE', 'av rue', 632514568, 'L732654', '1996-02-21', 'yassir@yassir.com', '123'),
(26, 'yousra', 'belakehal', 'FEMALE', 'av rue', 638742513, 'L752354', '1996-02-21', 'yousra@yousra.com', '456');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `rsrv2`
--
ALTER TABLE `rsrv2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `rsrv2`
--
ALTER TABLE `rsrv2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
