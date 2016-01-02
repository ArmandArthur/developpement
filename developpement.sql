-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 02 Janvier 2016 à 17:28
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
(1, 'Terre', 15, 10);

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE IF NOT EXISTS `personnage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `degats` int(20) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `pointDeVie` int(10) NOT NULL,
  `pointDeVieRestant` int(10) NOT NULL,
  `planId` int(2) NOT NULL,
  `positionX` int(3) NOT NULL,
  `positionY` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `personnage`
--

INSERT INTO `personnage` (`id`, `degats`, `nom`, `pointDeVie`, `pointDeVieRestant`, `planId`, `positionX`, `positionY`) VALUES
(1, 12, 'Cerbère', 100, 70, 1, 9, 15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
