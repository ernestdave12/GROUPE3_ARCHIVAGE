-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 05 juin 2022 à 17:36
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `archive`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `matriculee` varchar(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `niveau` varchar(10) NOT NULL,
  `Annee_academique` varchar(10) NOT NULL,
  `departement` varchar(15) NOT NULL,
  `releve` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`matriculee`, `nom`, `prenom`, `sexe`, `niveau`, `Annee_academique`, `departement`, `releve`) VALUES
('12B345FS', 'KLJL', 'KLQDJFQ', 'M', 'L3', '2020', 'math-info ', 'image/capture.png'),
('17A435FS', 'JULE', 'FERRAND', 'masculin', 'L3', '2021', 'MATH-INFO', 'pdf/'),
('19B456FS', 'ALEXI', 'TOM', 'M', 'L1', '2021/2022', 'MATH-INFO', 'image/master-ensai-001.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`matriculee`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
