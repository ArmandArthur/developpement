-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 05 Janvier 2016 à 21:08
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `developpement`
--
CREATE DATABASE IF NOT EXISTS `developpement` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `developpement`;

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

DROP TABLE IF EXISTS `carte`;
CREATE TABLE IF NOT EXISTS `carte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `hauteur` int(10) NOT NULL,
  `largeur` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `carte`
--

INSERT INTO `carte` (`id`, `nom`, `hauteur`, `largeur`) VALUES
(1, 'Terre', 15, 20);

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

DROP TABLE IF EXISTS `personnage`;
CREATE TABLE IF NOT EXISTS `personnage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personnageTypeId` int(5) NOT NULL,
  `degat` int(20) NOT NULL,
  `mouvement` int(5) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `pointDeVie` int(10) NOT NULL,
  `planId` int(2) NOT NULL,
  `positionX` int(3) NOT NULL,
  `positionY` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `personnage`
--

INSERT INTO `personnage` (`id`, `personnageTypeId`, `degat`, `mouvement`, `nom`, `pointDeVie`, `planId`, `positionX`, `positionY`) VALUES
(1, 1, 12, 914, 'Cerbère', 100, 1, 17, 12),
(2, 1, 20, 0, 'Pourpre', 544, 1, 19, 12),
(3, 1, 12, 42, 'Nashtoon', 40, 0, 19, 13),
(4, 1, 13, 0, 'Lordx', -54, 0, 19, 14),
(5, 1, 15, 29, 'Lord Bachourad', -66, 0, 20, 7);

-- --------------------------------------------------------

--
-- Structure de la table `personnage_type`
--

DROP TABLE IF EXISTS `personnage_type`;
CREATE TABLE IF NOT EXISTS `personnage_type` (
  `id` int(5) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `mouvement` int(5) NOT NULL,
  `pointDeVie` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `personnage_type`
--

INSERT INTO `personnage_type` (`id`, `nom`, `mouvement`, `pointDeVie`) VALUES
(1, 'Démon', 100, 100);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
