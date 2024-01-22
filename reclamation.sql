-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 jan. 2024 à 15:39
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
-- Base de données : `reclamation`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

CREATE TABLE `account` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` int(11) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `type` enum('admin','client','technicien') NOT NULL,
  `centre` varchar(30) NOT NULL,
  `matricule` varchar(30) NOT NULL,
  `status` enum('Verifie','enCours') NOT NULL,
  `gender` enum('male','female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `codeverif`
--

CREATE TABLE `codeverif` (
  `code` varchar(40) NOT NULL,
  `dateDeb` datetime NOT NULL,
  `dateFin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE `societe` (
  `Nom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `numTel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `DateHeure` datetime NOT NULL,
  `contact` varchar(30) NOT NULL,
  `demande` varchar(30) NOT NULL,
  `Diagnostic` varchar(30) NOT NULL,
  `Categorie` varchar(30) NOT NULL,
  `Priorite` varchar(30) NOT NULL,
  `Status` enum('enCours','Cloture') NOT NULL,
  `CloturePar` varchar(30) NOT NULL,
  `dateCloture` date NOT NULL,
  `HeureCloture` time NOT NULL,
  `ticketId` int(11) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `uniqueMat` (`matricule`),
  ADD KEY `fk_account1` (`centre`);

--
-- Index pour la table `codeverif`
--
ALTER TABLE `codeverif`
  ADD PRIMARY KEY (`code`);

--
-- Index pour la table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`Nom`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticketId`),
  ADD KEY `fk_ticket2` (`contact`),
  ADD KEY `fk_ticket1` (`CloturePar`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticketId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `fk_account1` FOREIGN KEY (`centre`) REFERENCES `societe` (`Nom`);

--
-- Contraintes pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fk_ticket1` FOREIGN KEY (`CloturePar`) REFERENCES `account` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ticket2` FOREIGN KEY (`contact`) REFERENCES `account` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
