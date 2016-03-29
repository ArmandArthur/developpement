-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 29 Mars 2016 à 13:17
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `evolution`
--

INSERT INTO `evolution` (`id`, `personnageTypeId`, `palierInferieur`, `palierSuperieur`, `iconePersonnageId`) VALUES
(1, 2, 0, 10, 11),
(2, 2, 11, 20, 12),
(3, 2, 21, 30, 9),
(4, 1, 0, 12, 10),
(6, 1, 12, 20, 13),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

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
(68, 'img/personnage/road-1920-1080-3.jpg');

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
  `tourDeJeu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prochainTourDeJeu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `personnage`
--

INSERT INTO `personnage` (`id`, `degat`, `experience`, `mouvement`, `nom`, `nombreAttaque`, `pointDeVie`, `planId`, `pointInvestissement`, `positionX`, `positionY`, `tourDeJeu`, `prochainTourDeJeu`) VALUES
(1, 10, 0, 6, 'lamdange', 6, 100, 1, 0, 1, 1, '2016-03-28 20:03:36', '2016-03-28 20:04:06'),
(2, 10, 0, 0, 'lamdange2', 0, 100, 1, 0, 1, 1, '2016-03-28 20:04:01', '2016-03-28 20:04:31'),
(3, 10, 0, 6, 'ange3', 6, 100, 1, 0, 1, 1, '2016-03-28 20:04:38', '2016-03-28 20:05:08'),
(4, 10, 0, 5, 'choordemon1', 5, 100, 1, 0, 1, 1, '2016-03-28 20:16:28', '2016-03-28 20:16:58'),
(5, 10, 0, 0, 'choordemon1', 0, 100, 1, 0, 4, 4, '2016-03-28 20:16:32', '2016-03-28 20:17:02'),
(6, 10, 0, 5, 'ok', 5, 100, 1, 0, 1, 1, '2016-03-28 21:01:19', '2016-03-28 21:01:49'),
(7, 10, 0, 5, 'ok', 5, 100, 1, 0, 1, 1, '2016-03-28 21:01:28', '2016-03-28 21:01:58'),
(8, 10, 0, 5, 'ok', 5, 100, 1, 0, 1, 1, '2016-03-28 21:01:41', '2016-03-28 21:02:11'),
(9, 10, 0, 5, 'ok', 5, 100, 1, 0, 1, 1, '2016-03-28 21:04:08', '2016-03-28 21:04:38'),
(10, 10, 0, 6, 'pero', 6, 100, 1, 0, 1, 1, '2016-03-28 21:04:14', '2016-03-28 21:04:44'),
(11, 10, 0, 6, 'es', 6, 100, 1, 0, 1, 1, '2016-03-28 21:09:45', '2016-03-28 21:10:15'),
(12, 10, 0, 6, 'es', 6, 100, 1, 0, 1, 1, '2016-03-28 21:09:49', '2016-03-28 21:10:19'),
(13, 10, 0, 6, 'es', 6, 100, 1, 0, 1, 1, '2016-03-28 21:09:55', '2016-03-28 21:10:25'),
(14, 10, 0, 6, 'as', 6, 100, 1, 0, 1, 1, '2016-03-28 21:11:47', '2016-03-28 21:12:17'),
(15, 10, 0, 6, 'as', 6, 100, 1, 0, 1, 1, '2016-03-28 21:11:53', '2016-03-28 21:12:23'),
(16, 10, 0, 6, 'es', 6, 100, 1, 0, 1, 1, '2016-03-28 21:15:22', '2016-03-28 21:15:52'),
(17, 10, 0, 6, 'es', 6, 100, 1, 0, 1, 1, '2016-03-28 21:15:48', '2016-03-28 21:16:18'),
(18, 10, 0, 6, 'as', 6, 100, 1, 0, 1, 1, '2016-03-28 21:16:28', '2016-03-28 21:16:58'),
(19, 10, 0, 6, 'es', 6, 100, 1, 0, 1, 1, '2016-03-28 21:17:06', '2016-03-28 21:17:36'),
(20, 10, 0, 6, 'as', 6, 100, 1, 0, 1, 1, '2016-03-28 21:37:54', '2016-03-28 21:38:24'),
(21, 10, 0, 6, 'as', 6, 100, 1, 0, 1, 1, '2016-03-28 21:42:42', '2016-03-28 21:43:12'),
(22, 10, 0, 6, 'mat', 6, 100, 1, 0, 1, 1, '2016-03-29 12:10:15', '2016-03-29 12:10:45');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `_iconepersonnage_personnage`
--

INSERT INTO `_iconepersonnage_personnage` (`id`, `personnageId`, `iconePersonnageId`) VALUES
(1, 1, 11),
(2, 2, 11),
(3, 3, 11),
(4, 4, 10),
(5, 5, 10),
(6, 6, 10),
(7, 7, 10),
(8, 8, 10),
(9, 9, 10),
(10, 10, 11),
(11, 11, 11),
(12, 12, 11),
(13, 13, 11),
(14, 14, 11),
(15, 15, 11),
(16, 16, 11),
(17, 17, 11),
(18, 18, 11),
(19, 19, 11),
(20, 20, 11),
(21, 21, 11),
(22, 22, 11);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `_joueur_personnage`
--

INSERT INTO `_joueur_personnage` (`id`, `joueurId`, `personnageId`) VALUES
(2, 2, 1),
(3, 2, 2),
(4, 2, 3),
(5, 3, 4),
(6, 3, 5),
(7, 2, 6),
(8, 2, 7),
(9, 2, 8),
(10, 2, 9),
(11, 2, 10),
(12, 2, 11),
(13, 2, 12),
(14, 2, 13),
(15, 2, 14),
(16, 2, 15),
(17, 2, 16),
(18, 2, 17),
(19, 2, 18),
(20, 2, 19),
(21, 2, 20),
(22, 2, 21),
(23, 2, 22);

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
(3, 2),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `_personnage_personnagetype`
--

INSERT INTO `_personnage_personnagetype` (`id`, `personnageId`, `personnageTypeId`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 2),
(11, 11, 2),
(12, 12, 2),
(13, 13, 2),
(14, 14, 2),
(15, 15, 2),
(16, 16, 2),
(17, 17, 2),
(18, 18, 2),
(19, 19, 2),
(20, 20, 2),
(21, 21, 2),
(22, 22, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
