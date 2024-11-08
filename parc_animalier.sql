-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 08 nov. 2024 à 09:30
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `parc animalier`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

DROP TABLE IF EXISTS `animaux`;
CREATE TABLE IF NOT EXISTS `animaux` (
  `id` int NOT NULL AUTO_INCREMENT,
  `animaux` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id`, `animaux`) VALUES
(1, 'Python'),
(2, 'Tortue'),
(3, 'Iguane'),
(4, 'Ara Perroquet'),
(5, 'Grand Hocco'),
(6, 'Panthère'),
(7, 'Panda roux'),
(8, 'Lémurien'),
(9, 'Chèvre naine'),
(10, 'Tortue'),
(11, 'Mouflon'),
(12, 'Binturong'),
(13, 'Loutre'),
(14, 'Vautour'),
(15, 'Cerf'),
(16, 'Macaque crabier'),
(17, 'Daim'),
(18, 'Antilope'),
(19, 'Nilgaut'),
(20, 'Loup d\'Europe'),
(21, 'Rhinocéros'),
(22, 'Oryx beisa'),
(23, 'Fennec'),
(24, 'Suricate'),
(25, 'Coati'),
(26, 'Saïmiri'),
(27, 'Gnou'),
(28, 'Tapir'),
(29, 'Autruche'),
(30, 'Gazelle'),
(31, 'Guépard'),
(32, 'Casoar'),
(33, 'Crocodile nain'),
(34, 'Tamarin'),
(35, 'Ouistiti Gibbon'),
(36, 'Varan de Komodo'),
(37, 'Grivet Cercopithèque'),
(38, 'Éléphant '),
(39, 'Girafe'),
(40, 'Hyène'),
(41, 'Loup à crinière'),
(42, 'Zèbre'),
(43, 'Lion'),
(44, 'Hippopotame'),
(45, 'Marabout'),
(46, 'Cigogne'),
(47, 'Oryx algazelle'),
(48, 'Watusi'),
(49, 'Âne de Somalie'),
(50, 'Yack'),
(51, 'Mouton noir'),
(52, 'Ibis'),
(53, 'Tortue'),
(54, 'Pécari'),
(55, 'Tamanoir'),
(56, 'Flamant rose'),
(57, 'Nandou'),
(58, 'Émeu'),
(59, 'Wallaby'),
(60, 'Porc-épic'),
(61, 'Lynx'),
(62, 'Serval'),
(63, 'Chien des buissons '),
(64, 'Tigre'),
(65, 'Bison'),
(66, 'Dromadaire'),
(67, 'Âne de provence');

-- --------------------------------------------------------

--
-- Structure de la table `biomes`
--

DROP TABLE IF EXISTS `biomes`;
CREATE TABLE IF NOT EXISTS `biomes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `biome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `biomes`
--

INSERT INTO `biomes` (`id`, `biome`) VALUES
(1, 'le Plateau'),
(2, 'le Bois des pins'),
(3, 'les Clairières'),
(4, 'le Vallon des cascades'),
(5, 'la bergerie des reptiles'),
(6, 'le belvédère');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `services` varchar(255) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`services`, `id`) VALUES
('Toilettes', 1),
('Point d\'eau', 2),
('Boutique', 3),
('Gare', 4),
('Trajet train', 5),
('Lodge', 6),
('Tente pédagogique', 7),
('Paillote', 8),
('Café nomade', 9),
('Petit Café', 10),
('Plateau des jeux', 11),
('Espace Pique-nique', 12),
('Point de vue', 13);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
