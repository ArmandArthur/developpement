-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 23 Mars 2016 à 14:13
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
-- Structure de la table `evolution`
--

DROP TABLE IF EXISTS `evolution`;
CREATE TABLE IF NOT EXISTS `evolution` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `personnageTypeId` int(5) NOT NULL,
  `palierInferieur` int(10) NOT NULL,
  `palierSuperieur` int(10) NOT NULL,
  `iconePersonnageId` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `evolution`
--

INSERT INTO `evolution` (`id`, `personnageTypeId`, `palierInferieur`, `palierSuperieur`, `iconePersonnageId`) VALUES
(11, 2, 0, 10, 11),
(12, 2, 10, 20, 12),
(13, 2, 21, 30, 9),
(14, 1, 0, 10, 10),
(15, 1, 11, 20, 13),
(16, 1, 21, 30, 14),
(17, 1, 50, 60, 53),
(18, 2, 0, 0, 0),
(19, 1, 20, 50, 53),
(20, 1, 50, 60, 11),
(21, 1, 100, 120, 59),
(22, 1, 100, 120, 59),
(23, 1, 120, 120, 11);

-- --------------------------------------------------------

--
-- Structure de la table `iconepersonnage`
--

DROP TABLE IF EXISTS `iconepersonnage`;
CREATE TABLE IF NOT EXISTS `iconepersonnage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chemin` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Contenu de la table `iconepersonnage`
--

INSERT INTO `iconepersonnage` (`id`, `chemin`) VALUES
(9, 'img/personnage/ange3.gif'),
(10, 'img/personnage/demon1.gif'),
(11, 'img/personnage/ange1.gif'),
(12, 'img/personnage/ange2.gif'),
(13, 'img/personnage/demon2.gif'),
(14, 'img/personnage/demon3.gif'),
(53, 'img/personnage/humain1.gif'),
(54, 'img/personnage/humain2.gif'),
(55, 'img/personnage/humain3.gif'),
(58, 'img/personnage/cerbere_001.gif'),
(59, 'img/personnage/air_001.gif'),
(60, 'img/personnage/cybfin.PNG');

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
-- Structure de la table `personnage`
--

DROP TABLE IF EXISTS `personnage`;
CREATE TABLE IF NOT EXISTS `personnage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `degat` int(20) NOT NULL,
  `experience` int(10) NOT NULL,
  `mouvement` int(5) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `nombreAttaque` int(3) NOT NULL DEFAULT '2',
  `pointDeVie` int(10) NOT NULL,
  `planId` int(2) NOT NULL,
  `pointInvestissement` int(5) NOT NULL,
  `positionX` int(3) NOT NULL,
  `positionY` int(3) NOT NULL,
  `tourDeJeu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prochainTourDeJeu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `personnage`
--

INSERT INTO `personnage` (`id`, `degat`, `experience`, `mouvement`, `nom`, `nombreAttaque`, `pointDeVie`, `planId`, `pointInvestissement`, `positionX`, `positionY`, `tourDeJeu`, `prochainTourDeJeu`) VALUES
(1, 10, 20, 0, 'didi', 0, 50, 1, 400, 3, 3, '2016-03-23 12:32:17', '2016-03-23 12:34:47'),
(2, 10, 25, 3, 'dada', 0, 60, 1, 500, 2, 3, '2016-03-23 11:28:04', '2016-03-23 11:30:34'),
(3, 10, 0, 0, '', 0, 100, 1, 0, 1, 1, '2016-03-23 11:30:51', '2016-03-23 11:31:21'),
(4, 10, 0, 6, '', 6, 100, 1, 0, 1, 1, '2016-03-23 13:24:39', '2016-03-23 13:25:09'),
(5, 10, 0, 5, 'ert', 5, 100, 1, 0, 1, 1, '2016-03-23 13:35:54', '2016-03-23 13:36:24');

-- --------------------------------------------------------

--
-- Structure de la table `personnagetype`
--

DROP TABLE IF EXISTS `personnagetype`;
CREATE TABLE IF NOT EXISTS `personnagetype` (
  `id` int(5) NOT NULL,
  `degat` int(5) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `nombreAttaque` int(3) NOT NULL,
  `mouvement` int(5) NOT NULL,
  `pointDeVie` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `personnagetype`
--

INSERT INTO `personnagetype` (`id`, `degat`, `nom`, `nombreAttaque`, `mouvement`, `pointDeVie`) VALUES
(1, 10, 'D&eacutemon', 5, 5, 100),
(2, 10, 'Ange', 6, 6, 100);

-- --------------------------------------------------------

--
-- Structure de la table `_iconepersonnage_personnage`
--

DROP TABLE IF EXISTS `_iconepersonnage_personnage`;
CREATE TABLE IF NOT EXISTS `_iconepersonnage_personnage` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `personnageId` int(11) NOT NULL,
  `iconePersonnageId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `_iconepersonnage_personnage`
--

INSERT INTO `_iconepersonnage_personnage` (`id`, `personnageId`, `iconePersonnageId`) VALUES
(1, 1, 53),
(2, 2, 14),
(3, 3, 11),
(4, 4, 11),
(5, 4, 0),
(6, 5, 10);

-- --------------------------------------------------------

--
-- Structure de la table `_joueur_personnage`
--

DROP TABLE IF EXISTS `_joueur_personnage`;
CREATE TABLE IF NOT EXISTS `_joueur_personnage` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `joueurId` int(5) NOT NULL,
  `personnageId` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `_joueur_personnage`
--

INSERT INTO `_joueur_personnage` (`id`, `joueurId`, `personnageId`) VALUES
(1, 3, 1),
(2, 1, 2),
(3, 3, 3),
(4, 3, 4),
(5, 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `_personnage_personnagetype`
--

DROP TABLE IF EXISTS `_personnage_personnagetype`;
CREATE TABLE IF NOT EXISTS `_personnage_personnagetype` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `personnageId` int(3) NOT NULL,
  `personnageTypeId` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `_personnage_personnagetype`
--

INSERT INTO `_personnage_personnagetype` (`id`, `personnageId`, `personnageTypeId`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 2),
(5, 5, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
