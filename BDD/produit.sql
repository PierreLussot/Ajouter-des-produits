-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 06 mars 2023 à 15:54
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `produits`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `titre`, `description`, `image`) VALUES
(6, 'Bordeaux ', 'Bordeaux (/bɔʁ.do/) est une commune française située dans le département de la Gironde, en région Nouvelle-Aquitaine.', '1678116939bordeaux.jpeg'),
(7, 'Avignon ', 'Avignon est une ville du Sud de la France, située au confluent du Rhône et de la Durance.', '1678116999avignon.jpeg'),
(8, 'Lyon ', 'Lyon (prononcé /ljɔ̃/ ou /liɔ̃/) est une commune française située dans le quart sud-est de la France, au confluent du Rhône et de la Saône.(prononcé /ljɔ̃/ ou /liɔ̃/) est une commune française située dans le quart sud-est de la France, au confluent du Rhône et de la Saône.\r\n', '1678117267lyon.jpeg'),
(10, 'Montpellier', 'Montpellier — prononcé  est une commune française et la préfecture du département de l’Hérault ', '1678117538monpellier.jpeg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
