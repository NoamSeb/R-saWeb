-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 04 avr. 2022 à 12:43
-- Version du serveur : 5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `DB_EVASIO`
--

-- --------------------------------------------------------

--
-- Structure de la table `PRODUIT`
--

CREATE TABLE `PRODUIT` (
  `id_produit` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `ext_genre` int(10) NOT NULL,
  `prix` int(10) NOT NULL,
  `nbr_joueur_min` int(3) NOT NULL,
  `nbr_joueur_max` int(3) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `PRODUIT`
--

INSERT INTO `PRODUIT` (`id_produit`, `nom`, `ext_genre`, `prix`, `nbr_joueur_min`, `nbr_joueur_max`, `description`, `value`) VALUES
(1, 'Time Break', 1, 0, 2, 6, '', 'Time'),
(2, 'Werewolf', 3, 0, 2, 6, '', 'Wolf'),
(3, 'L\'hôpital', 2, 0, 3, 10, '', 'Hosp'),
(4, 'Guantánamo', 2, 0, 2, 6, '', 'Guanta'),
(5, 'Le Tableau', 3, 0, 2, 6, '', 'Table');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `PRODUIT`
--
ALTER TABLE `PRODUIT`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `PRODUIT`
--
ALTER TABLE `PRODUIT`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
