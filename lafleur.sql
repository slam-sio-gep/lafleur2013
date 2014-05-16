-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.6.12-log - MySQL Community Server (GPL)
-- Serveur OS:                   Win64
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de la base pour lafleur
CREATE DATABASE IF NOT EXISTS `lafleur` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `lafleur`;


-- Export de la structure de table lafleur. administrateur
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` char(3) NOT NULL,
  `nom` char(32) NOT NULL,
  `mdp` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- L'exportation de données n'été pas sélectionné.


-- Export de la structure de table lafleur. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` char(32) NOT NULL,
  `libelle` char(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- L'exportation de données n'été pas sélectionné.


-- Export de la structure de table lafleur. commande
CREATE TABLE IF NOT EXISTS `commande` (
  `id` char(32) NOT NULL,
  `dateCommande` date DEFAULT NULL,
  `nomPrenomClient` char(32) DEFAULT NULL,
  `adresseRueClient` char(32) DEFAULT NULL,
  `cpClient` char(5) DEFAULT NULL,
  `villeClient` char(32) DEFAULT NULL,
  `mailClient` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- L'exportation de données n'été pas sélectionné.


-- Export de la structure de table lafleur. contenir
CREATE TABLE IF NOT EXISTS `contenir` (
  `idCommande` char(32) NOT NULL,
  `idProduit` char(32) NOT NULL,
  PRIMARY KEY (`idCommande`,`idProduit`),
  KEY `I_FK_CONTENIR_COMMANDE` (`idCommande`),
  KEY `I_FK_CONTENIR_Produit` (`idProduit`),
  CONSTRAINT `contenir_ibfk_1` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`id`),
  CONSTRAINT `contenir_ibfk_2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- L'exportation de données n'été pas sélectionné.


-- Export de la structure de table lafleur. produit
CREATE TABLE IF NOT EXISTS `produit` (
  `id` char(32) NOT NULL,
  `description` char(50) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `image` char(32) DEFAULT NULL,
  `idCategorie` char(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `I_FK_Produit_CATEGORIE` (`idCategorie`),
  CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- L'exportation de données n'été pas sélectionné.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
