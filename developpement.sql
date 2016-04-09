-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 09 Avril 2016 à 18:32
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `evolution`
--

INSERT INTO `evolution` (`id`, `personnageTypeId`, `palierInferieur`, `palierSuperieur`, `iconePersonnageId`) VALUES
(1, 2, 0, 10, 11),
(2, 2, 11, 20, 12),
(3, 2, 21, 30, 9),
(4, 1, 0, 10, 10),
(6, 1, 11, 20, 13),
(7, 1, 21, 31, 14);

-- --------------------------------------------------------

--
-- Structure de la table `iconepersonnage`
--

DROP TABLE IF EXISTS `iconepersonnage`;
CREATE TABLE IF NOT EXISTS `iconepersonnage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chemin` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

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
(60, 'img/personnage/cybfin.PNG'),
(61, 'img/personnage/road-1920-1080.jpg'),
(62, 'img/personnage/road-1024-768.jpg'),
(63, 'img/personnage/road-1024-768.jpg'),
(64, 'img/personnage/road-1024-768.jpg'),
(65, 'img/personnage/road-1920-1080-1.jpg'),
(66, 'img/personnage/road-1920-1080-1.jpg'),
(67, 'img/personnage/road-1920-1080-5.jpg'),
(68, 'img/personnage/road-1920-1080-3.jpg'),
(69, 'img/personnage/20140119_201412.jpg'),
(70, 'img/personnage/20140119_202854.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

DROP TABLE IF EXISTS `joueur`;
CREATE TABLE IF NOT EXISTS `joueur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`id`, `login`) VALUES
(1, 'joueur inconnu'),
(2, 'lamda'),
(3, 'choor'),
(4, 'bik'),
(5, 'john');

-- --------------------------------------------------------

--
-- Structure de la table `permission`
--

DROP TABLE IF EXISTS `permission`;
CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `permission`
--

INSERT INTO `permission` (`id`, `nom`) VALUES
(1, 'evolutionCreerModifier'),
(2, 'IconePersonnage'),
(3, 'personnageCreer'),
(4, 'permission'),
(5, 'role'),
(6, 'rolePermission'),
(7, 'roleJoueur'),
(8, 'i'),
(9, 'changeCompte');

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
  `tourDeJeu` datetime NOT NULL,
  `prochainTourDeJeu` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `personnage`
--

INSERT INTO `personnage` (`id`, `degat`, `experience`, `mouvement`, `nom`, `nombreAttaque`, `pointDeVie`, `planId`, `pointInvestissement`, `positionX`, `positionY`, `tourDeJeu`, `prochainTourDeJeu`) VALUES
(1, 10, 0, 0, 'ok', 0, 100, 1, 0, 5, 5, '2016-03-29 22:21:57', '2016-03-29 22:24:27'),
(2, 10, 0, 0, 'ko', 6, 100, 1, 0, 6, 5, '2016-03-29 22:23:32', '2016-03-29 22:26:02'),
(3, 10, 0, 0, 'jack', 0, 100, 1, 0, 5, 3, '2016-03-29 22:23:57', '2016-03-29 22:24:27'),
(4, 10, 0, 0, 'pm', 0, 100, 1, 0, 4, 7, '2016-03-30 11:53:37', '2016-03-30 11:56:07'),
(5, 10, 0, 0, 'pl', 0, 100, 1, 0, 3, 7, '2016-03-30 11:55:40', '2016-03-30 11:56:10');

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
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id`, `nom`) VALUES
(1, 'SuperAdmin'),
(2, 'admin'),
(3, 'modÃ©rateur'),
(4, 'Joueur'),
(5, 'p');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `_iconepersonnage_personnage`
--

INSERT INTO `_iconepersonnage_personnage` (`id`, `personnageId`, `iconePersonnageId`) VALUES
(1, 1, 11),
(2, 2, 11),
(3, 3, 10),
(4, 4, 11),
(5, 5, 11);

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
(1, 1, 1),
(2, 1, 2),
(3, 3, 3),
(4, 2, 4),
(5, 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `_joueur_role`
--

DROP TABLE IF EXISTS `_joueur_role`;
CREATE TABLE IF NOT EXISTS `_joueur_role` (
  `joueurId` int(2) NOT NULL,
  `roleId` int(2) NOT NULL,
  PRIMARY KEY (`joueurId`,`roleId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `_joueur_role`
--

INSERT INTO `_joueur_role` (`joueurId`, `roleId`) VALUES
(1, 4),
(2, 1),
(3, 3),
(4, 3),
(5, 2);

-- --------------------------------------------------------

--
-- Structure de la table `_permission_role`
--

DROP TABLE IF EXISTS `_permission_role`;
CREATE TABLE IF NOT EXISTS `_permission_role` (
  `roleId` int(3) NOT NULL,
  `permissionId` int(3) NOT NULL,
  PRIMARY KEY (`roleId`,`permissionId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `_permission_role`
--

INSERT INTO `_permission_role` (`roleId`, `permissionId`) VALUES
(0, 2),
(0, 3),
(0, 4),
(0, 5),
(0, 6),
(0, 7),
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(3, 1),
(3, 2),
(3, 3);

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
(1, 1, 2),
(2, 2, 2),
(3, 3, 1),
(4, 4, 2),
(5, 5, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
