-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 15 Janvier 2016 à 13:10
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
-- Structure de la table `joueur`
--

DROP TABLE IF EXISTS `joueur`;
CREATE TABLE IF NOT EXISTS `joueur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`id`, `login`) VALUES
(1, 'joueur inconnu'),
(2, 'lamda'),
(3, 'choor');

-- --------------------------------------------------------

--
-- Structure de la table `_joueur_personnage`
--

DROP TABLE IF EXISTS `_joueur_personnage`;
CREATE TABLE IF NOT EXISTS `_joueur_personnage` (
  `joueurId` int(5) NOT NULL,
  `personnageId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `_joueur_personnage`
--

INSERT INTO `_joueur_personnage` (`joueurId`, `personnageId`) VALUES
(3, 1),
(3, 5),
(2, 2),
(2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `_personnage_personnagetype`
--

DROP TABLE IF EXISTS `_personnage_personnagetype`;
CREATE TABLE IF NOT EXISTS `_personnage_personnagetype` (
  `personnageId` int(3) NOT NULL,
  `personnageTypeId` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `_personnage_personnagetype`
--

INSERT INTO `_personnage_personnagetype` (`personnageId`, `personnageTypeId`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

DROP TABLE IF EXISTS `personnage`;
CREATE TABLE IF NOT EXISTS `personnage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `degat` int(20) NOT NULL,
  `mouvement` int(5) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `nombreAttaque` int(3) NOT NULL DEFAULT '2',
  `pointDeVie` int(10) NOT NULL,
  `planId` int(2) NOT NULL,
  `positionX` int(3) NOT NULL,
  `positionY` int(3) NOT NULL,
  `tourDeJeu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prochainTourDeJeu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `personnage`
--

INSERT INTO `personnage` (`id`, `degat`, `mouvement`, `nom`, `nombreAttaque`, `pointDeVie`, `planId`, `positionX`, `positionY`, `tourDeJeu`, `prochainTourDeJeu`) VALUES
(1, 12, 0, 'Cerbère', 0, 100, 1, 19, 11, '2016-01-15 13:08:33', '2016-01-15 13:09:03'),
(2, 20, 0, 'Pourpre', 3, 208, 1, 19, 12, '2016-01-14 19:09:16', '2016-01-15 11:07:15'),
(3, 12, 42, 'Nashtoon', 3, 40, 0, 19, 13, '2016-01-14 19:09:16', '2016-01-15 11:07:15'),
(4, 13, 0, 'Lordx', 3, -66, 0, 19, 14, '2016-01-14 19:09:16', '2016-01-15 11:07:15'),
(5, 15, 0, 'Lord Bachourad', 0, -20, 1, 19, 9, '2016-01-15 13:04:52', '2016-01-15 13:05:22');

-- --------------------------------------------------------

--
-- Structure de la table `personnagetype`
--

DROP TABLE IF EXISTS `personnagetype`;
CREATE TABLE IF NOT EXISTS `personnagetype` (
  `id` int(5) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `nombreAttaque` int(3) NOT NULL,
  `mouvement` int(5) NOT NULL,
  `pointDeVie` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `personnagetype`
--

INSERT INTO `personnagetype` (`id`, `nom`, `nombreAttaque`, `mouvement`, `pointDeVie`) VALUES
(1, 'Démon', 5, 100, 100);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
