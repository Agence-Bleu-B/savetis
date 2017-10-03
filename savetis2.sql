-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 03 Octobre 2017 à 13:14
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `savetis`
--

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

CREATE TABLE `slider` (
  `sl1fr` int(11) NOT NULL,
  `sl2fr` int(11) NOT NULL,
  `sl3fr` int(11) NOT NULL,
  `sl4fr` int(11) NOT NULL,
  `sl1en` int(11) NOT NULL,
  `sl2en` int(11) NOT NULL,
  `sl3en` int(11) NOT NULL,
  `sl4en` int(11) NOT NULL,
  `sl1du` int(11) NOT NULL,
  `sl2du` int(11) NOT NULL,
  `sl3du` int(11) NOT NULL,
  `sl4du` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `slider`
--

INSERT INTO `slider` (`sl1fr`, `sl2fr`, `sl3fr`, `sl4fr`, `sl1en`, `sl2en`, `sl3en`, `sl4en`, `sl1du`, `sl2du`, `sl3du`, `sl4du`) VALUES
(9, 10, 11, 27, 9, 10, 11, 27, 9, 10, 11, 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
