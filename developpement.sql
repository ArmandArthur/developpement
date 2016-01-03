-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 03 Janvier 2016 à 16:31
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
  `degats` int(20) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `pointDeVie` int(10) NOT NULL,
  `pointDeVieRestant` int(10) NOT NULL,
  `planId` int(2) NOT NULL,
  `positionX` int(3) NOT NULL,
  `positionY` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `personnage`
--

INSERT INTO `personnage` (`id`, `degats`, `nom`, `pointDeVie`, `pointDeVieRestant`, `planId`, `positionX`, `positionY`) VALUES
(1, 12, 'Cerbère', 100, 70, 1, 14, 14),
(2, 20, 'Pourpre', 100, 50, 1, 5, 5),
(3, 12, 'Nashtoon', 100, 20, 1, 6, 6),
(4, 13, 'Lordx', 150, 20, 1, 15, 15),
(5, 15, 'Lord Bachourad', 10, 150, 1, 14, 10);
--
-- Base de données :  `symfony`
--
CREATE DATABASE IF NOT EXISTS `symfony` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `symfony`;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `adress`, `country`) VALUES
(9, 'Virginie', 'Ledine', '25 rue des orangers', 'France'),
(10, 'Paul', 'Verger', '44 rue du Prince', 'France'),
(11, 'Aketo', 'Le mic', '35 rue des Bobos', 'France');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
