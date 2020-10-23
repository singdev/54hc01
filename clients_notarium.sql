-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 22 oct. 2020 à 18:24
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `clients_notarium`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `Adresse` varchar(70) NOT NULL,
  `Ville` varchar(30) NOT NULL,
  `Phone` char(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `TypeDossier` varchar(50) NOT NULL,
  `NotaireChoisi` varchar(50) NOT NULL,
  `DateInscription` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `Nom`, `prenom`, `Adresse`, `Ville`, `Phone`, `Email`, `TypeDossier`, `NotaireChoisi`, `DateInscription`) VALUES
(1, 'SAFOU', 'Poupouche', 'IAI', 'Libreville', 'ddddd', 'safoupoupouche@gmail.com', 'Immobilier', 'MaÃ®tre Bluenn OKELI GOURIOU OGOULA', '2020-10-22 13:20:46'),
(2, 'SAFOU1222', 'Poupouche0003', 'IAI536', 'Libreville', '066994362', 'poupouchesafou@gmail.com', 'Immobilier', 'MaÃ®tre Bluenn OKELI GOURIOU OGOULA', '2020-10-22 16:57:10'),
(3, 'glad', 'Poulotse', 'IAI', 'Libre', '06994362', 'lotse@gmail.com', 'Immobilier', 'MaÃ®tre Bluenn OKELI GOURIOU OGOULA', '2020-10-22 18:03:24'),
(4, 'dat', 'lots', 'IAI2', 'Libre', '099436258', 'go@gmail.com', 'Immobilier', 'MaÃ®tre Bluenn OKELI GOURIOU OGOULA', '2020-10-22 18:04:07');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Ville` varchar(30) NOT NULL,
  `Adresse` varchar(70) NOT NULL,
  `Phone` char(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DateInscription` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `clients_demandeur`
--

DROP TABLE IF EXISTS `clients_demandeur`;
CREATE TABLE IF NOT EXISTS `clients_demandeur` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `Phone` char(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `TypeDossier` varchar(50) NOT NULL,
  `NotaireChoisi` varchar(50) NOT NULL,
  `DateInscription` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `nouveau_dossier`
--

DROP TABLE IF EXISTS `nouveau_dossier`;
CREATE TABLE IF NOT EXISTS `nouveau_dossier` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `Phone` char(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `TypeDossier` varchar(50) NOT NULL,
  `NotaireChoisi` varchar(50) NOT NULL,
  `DateInscription` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
