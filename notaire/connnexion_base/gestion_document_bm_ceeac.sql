-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2018 at 11:26 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gestion_document_bm_ceeac`
--
CREATE DATABASE IF NOT EXISTS `gestion_document_bm_ceeac` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gestion_document_bm_ceeac`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_activite_plan`
--

CREATE TABLE IF NOT EXISTS `tb_activite_plan` (
  `code_activite` int(10) NOT NULL AUTO_INCREMENT,
  `intitule_activite` varchar(200) NOT NULL,
  `iov_action` varchar(200) NOT NULL,
  `cible_activite` varchar(200) NOT NULL,
  `annee_activite` int(6) NOT NULL,
  `mois_activite` varchar(20) NOT NULL,
  `semaine_activite` int(4) NOT NULL,
  `etat_activite` int(4) NOT NULL,
  `source_verifica` varchar(200) NOT NULL,
  PRIMARY KEY (`code_activite`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_activite_plan`
--

INSERT INTO `tb_activite_plan` (`code_activite`, `intitule_activite`, `iov_action`, `cible_activite`, `annee_activite`, `mois_activite`, `semaine_activite`, `etat_activite`, `source_verifica`) VALUES
(1, 'Reunion de d&eacute;marrage de Consultations avec les Equipes CEEAC et Banque Mondiale', 'Le Staff de la CEEAC et de la Banque Mondiale est rencontr&eacute;', 'Staff CEEAC et BM Libreville', 2018, 'Février', 7, 0, 'Rapport de diff&eacute;rente r&eacute;union initi&eacute; et organis&eacute;'),
(2, 'Validation du Plan de travail et Elaboration du Plan de communication', 'Plan de travail et Plan de communication disponible', 'Staff Banque et CEEAC', 2018, 'Janvier', 8, 0, 'Document du plan de Travail et Draft du Plan de Com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `code_admin` int(10) NOT NULL AUTO_INCREMENT,
  `nom_admin` varchar(100) NOT NULL,
  `prenom_admin` varchar(200) NOT NULL,
  `institution_admin` varchar(200) NOT NULL,
  `mail_admin` varchar(100) NOT NULL,
  `mot_de_pass` varchar(100) NOT NULL,
  `etat` int(10) NOT NULL,
  `photo_admin` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`code_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`code_admin`, `nom_admin`, `prenom_admin`, `institution_admin`, `mail_admin`, `mot_de_pass`, `etat`, `photo_admin`) VALUES
(1, 'SAfou', 'Poupouche', 'CEEAC', 'constancesafou@gmail.com', '1234', 0, 'profile_small.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_document`
--

CREATE TABLE IF NOT EXISTS `tb_document` (
  `code_document` int(10) NOT NULL AUTO_INCREMENT,
  `intitule_document` varchar(200) NOT NULL,
  `code_type` int(10) NOT NULL,
  `fichier_document` varchar(100) NOT NULL,
  `description_document` text NOT NULL,
  `code_admin` int(10) NOT NULL,
  `source_document` varchar(200) NOT NULL,
  `photo_couverture` varchar(500) NOT NULL,
  `etat_document` int(4) NOT NULL,
  PRIMARY KEY (`code_document`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_document`
--

INSERT INTO `tb_document` (`code_document`, `intitule_document`, `code_type`, `fichier_document`, `description_document`, `code_admin`, `source_document`, `photo_couverture`, `etat_document`) VALUES
(3, 'fiche des activit&eacute;s d&rsquo;&eacute;tudes', 2, 'article congo brazzaville.pdf', 'cette fiche presente les travaux de Brazzaville', 1, 'CEEAC', 'cap.JPG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tache`
--

CREATE TABLE IF NOT EXISTS `tb_tache` (
  `code_tache` int(10) NOT NULL AUTO_INCREMENT,
  `statut_tache` int(10) NOT NULL,
  `intitule_tache` varchar(200) NOT NULL,
  `fichier_image` varchar(200) NOT NULL,
  `date_tache` varchar(20) NOT NULL,
  `heure_tache` varchar(10) NOT NULL,
  `lien_internet` text NOT NULL,
  `code_active` int(10) NOT NULL,
  PRIMARY KEY (`code_tache`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_type_document`
--

CREATE TABLE IF NOT EXISTS `tb_type_document` (
  `code_type` int(10) NOT NULL AUTO_INCREMENT,
  `intitule_type` varchar(200) NOT NULL,
  `description_type` varchar(500) DEFAULT NULL,
  `etat_type` int(4) NOT NULL,
  PRIMARY KEY (`code_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_type_document`
--

INSERT INTO `tb_type_document` (`code_type`, `intitule_type`, `description_type`, `etat_type`) VALUES
(1, 'Rapport de mission', 'tout rapport de mission en rapport avec la ceeac ou la banque mondiale.', 0),
(2, 'Rapport d''activite', 'tous les rapports d''activite', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
