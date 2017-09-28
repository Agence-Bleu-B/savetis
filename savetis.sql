-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 27 Septembre 2017 à 16:28
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
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(10) NOT NULL,
  `mail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `categorie` text,
  `entext` text,
  `dutext` text,
  `frtext` text,
  `frapp` int(11) NOT NULL,
  `enapp` int(11) NOT NULL,
  `duapp` int(11) NOT NULL,
  `image` text NOT NULL,
  `frpdf` text NOT NULL,
  `enpdf` text NOT NULL,
  `dupdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `categorie`, `entext`, `dutext`, `frtext`, `frapp`, `enapp`, `duapp`, `image`, `frpdf`, `enpdf`, `dupdf`) VALUES
(1, 'drenchlact', 'drench', 'A drenching solution dedicated to supporting dairy cows suffering from infection or endotoxemic shock.', 'Een optimale ondersteuning voor verzwakte en liggende runderen, bij infectie, toxische chock en na een chirurgische ingreep.', 'Le soutien optimal des vaches en situation d\'infectieux/de choc toxinique', 1, 1, 1, '1.png', 'DRENCH_LACT_-FR-2015-1.pdf', 'DRENCH_LACT_2015-1.pdf', ''),
(2, 'drenchdig', 'drench', 'The benefits of oral fluid and electrolyte therapy associated with the efficiency of tonic and laxative components.', 'Herstel van verstoorde darmpassage, stimuleert de penscontractie en darmperistaltiek, werkt laxerend.', 'Des composés toniques et laxatifs pour relancer le transit digestif', 1, 1, 1, '2.png', 'DRENCH_DIG-FR-1.pdf', 'DRENCH_DIG-EN-1.pdf', ''),
(3, 'drenchpart', 'drench', 'A thoughtful combination of minerals and trace elements to support the rapid recovery of downer cows.', 'Snel herstel van Ca-,P-,Mg-en K-tekort na het afkalven, beperkt het risico op melkziekte en bevordert de recuperatie na zware verlossingen en keizersnedes.', 'Une formulation adéquate pour gérer les déficits en macro-éléments et assurer un bon démarrage en lactation', 1, 1, 1, '3.png', 'DRENCH_PART-FR-2015-1.pdf', 'DRENCH_PART-2015-1.pdf', ''),
(4, 'drenchcarbo', 'drench', 'A thoughtful combination of minerals and trace elements to support the rapid recovery of downer cows.', NULL, 'Une association bénéfique de charbon, montmorillonite et électrolytes pour réguler les troubles du transit intestinal', 1, 1, 1, '4.png', 'DRENCH_CARBO-FR-1.pdf', 'DRENCH_CARBO-2015.pdf', ''),
(5, 'cetolact', 'cetose', NULL, 'Glucosevormende samenstelling aangevuld met niacine om het risico op ketose te beperken', 'Apport de composés glucoformateurs et de niacine pour réduire le risque de cétose', 1, 1, 1, '1.png', '', '', ''),
(6, 'cetobyon', 'cetose', NULL, NULL, 'Apport de composés glucoformateurs, de niacine et de levures pour réduire le risque de cétose', 1, 1, 1, '2.png', '', '', ''),
(7, 'propalact', 'cetose', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(8, 'hepalact', 'cetose', NULL, 'Combinatie van leverbeschermende bestanddelen om het risico op steatose te beperken', 'L’association de facteurs hépatoprotecteurs pour gérer les troubles hépatiques (stéatose…)', 1, 1, 1, '3.png', '', '', ''),
(9, 'cforcal', 'macro-elements', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(10, 'cforphos', 'macro-elements', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(11, 'cforkalium', 'macro-elements', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(12, 'kactiv', 'macro-elements', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(13, 'calcilact', 'macro-elements', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(14, 'calcilactphos', 'macro-elements', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(15, 'b2cal', 'macro-elements', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(16, 'magactiv', 'macro-elements', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(17, 'rumiactif', 'digest', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(18, 'rumic3', 'digest', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(19, 'entelact', 'digest', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(20, 'montmorilonitelpg', 'digest', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(21, 'kryptophyt', 'digest', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(22, 'carbophyt', 'digest', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(23, 'hydraflo', 'digest', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(24, 'hydeaclean', 'hygiene', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(25, 'cleanombyl', 'hygiene', NULL, NULL, NULL, 1, 1, 1, '', '', '', ''),
(26, 'hydeachlorhex', 'hygiene', NULL, NULL, NULL, 1, 1, 1, '', '', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
