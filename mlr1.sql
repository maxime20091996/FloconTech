drop database mlr1;
CREATE database mlr1;
use mlr1;
-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 23 Février 2017 à 13:51
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mlr1`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `appartements`
--

CREATE TABLE `appartements` (
  `NUMAPPARTEMENT` int(11) NOT NULL,
  `ADRESSE` varchar(120) DEFAULT NULL,
  `VILLE` varchar(120) DEFAULT NULL,
  `CODEPOSTAL` varchar(5) DEFAULT NULL,
  `NUMETAGE` int(11) DEFAULT NULL,
  `NUMPALIER` int(11) DEFAULT NULL,
  `COMPLEMENTADRESSE` varchar(120) DEFAULT NULL,
  `COEFPRIX` varchar(3) DEFAULT NULL,
  `IMAGE` varchar(255) DEFAULT NULL,
  `DESCRIPTIF` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `NUMTIERS` int(11) NOT NULL,
  `PRENOMTIERS` varchar(30) DEFAULT NULL,
  `NOMTIERS` varchar(30) DEFAULT NULL,
  `DATENAISSTIERS` date DEFAULT NULL,
  `VILLE` varchar(20) DEFAULT NULL,
  `CODEPOSTAL` varchar(5) DEFAULT NULL,
  `ADRESSE` varchar(120) DEFAULT NULL,
  `TELEPHONE` varchar(10) DEFAULT NULL,
  `MAIL` varchar(50) DEFAULT NULL,
  `PASS` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contrats`
--

CREATE TABLE `contrats` (
  `NUMCONTRAT` int(11) NOT NULL,
  `DATEDEBUT` date DEFAULT NULL,
  `DATEFIN` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contrats`
--

INSERT INTO `contrats` (`NUMCONTRAT`, `DATEDEBUT`, `DATEFIN`) VALUES
(1, '2017-01-03', '2017-01-05');

-- --------------------------------------------------------

--
-- Structure de la table `contratsgestionlocation`
--

CREATE TABLE `contratsgestionlocation` (
  `NUMCONTRAT` int(11) NOT NULL,
  `NUMAPPARTEMENT` int(11) NOT NULL,
  `NUMTIERS` int(11) NOT NULL,
  `PRIXGESTTRIMESTRE` varchar(10) DEFAULT NULL,
  `TARIFTRIMESTRE` varchar(10) DEFAULT NULL,
  `DATEDEBUT` date DEFAULT NULL,
  `DATEFIN` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contratsgestionlocation`
--

INSERT INTO `contratsgestionlocation` (`NUMCONTRAT`, `NUMAPPARTEMENT`, `NUMTIERS`, `PRIXGESTTRIMESTRE`, `TARIFTRIMESTRE`, `DATEDEBUT`, `DATEFIN`) VALUES
(52, 2651, 6513281, NULL, NULL, '2017-01-05', '2017-01-28'),
(2, 12312, 1215, '5000', '5000', '2017-01-03', '2017-01-28'),
(16513, 525252, 989, NULL, NULL, '2017-02-18', '2017-02-26');

-- --------------------------------------------------------

--
-- Structure de la table `contratslocation`
--

CREATE TABLE `contratslocation` (
  `NUMCONTRAT` int(11) NOT NULL,
  `NUMSAISON` int(11) NOT NULL,
  `NUMAPPARTEMENT` int(11) NOT NULL,
  `NUMTIERS` int(11) NOT NULL,
  `DATEDEBUT` date DEFAULT NULL,
  `DATEFIN` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

CREATE TABLE `options` (
  `IDOPTION` char(32) NOT NULL,
  `LIBELLE` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `proprietaires`
--

CREATE TABLE `proprietaires` (
  `NUMTIERS` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `PRENOMTIERS` varchar(30) DEFAULT NULL,
  `NOMTIERS` varchar(30) DEFAULT NULL,
  `DATENAISSTIERS` date DEFAULT NULL,
  `VILLE` varchar(20) DEFAULT NULL,
  `CODEPOSTAL` varchar(5) DEFAULT NULL,
  `ADRESSE` varchar(120) DEFAULT NULL,
  `TELEPHONE` varchar(10) DEFAULT NULL,
  `MAIL` varchar(50) DEFAULT NULL,
  `PASS` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `represantants`
--

CREATE TABLE `represantants` (
  `ID` int(11) NOT NULL,
  `NOM` varchar(255) DEFAULT NULL,
  `PRENOM` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `TELEPHONE` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `represantants`
--

INSERT INTO `represantants` (`ID`, `NOM`, `PRENOM`, `EMAIL`, `TELEPHONE`) VALUES
(1, 'Kapoor', 'Benjamin', 'benjaminkapoor@yahoo.fr', 621821781);

-- --------------------------------------------------------

--
-- Structure de la table `saison`
--

CREATE TABLE `saison` (
  `NUMSAISON` int(11) NOT NULL,
  `LIBELLE` varchar(255) DEFAULT NULL,
  `POURCENTAGESAISON` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tiers`
--

CREATE TABLE `tiers` (
  `NUMTIERS` int(11) NOT NULL,
  `PRENOMTIERS` varchar(30) DEFAULT NULL,
  `NOMTIERS` varchar(30) DEFAULT NULL,
  `DATENAISSTIERS` varchar(10) DEFAULT NULL,
  `VILLE` varchar(20) DEFAULT NULL,
  `CODEPOSTAL` int(5) DEFAULT NULL,
  `ADRESSE` varchar(120) DEFAULT NULL,
  `TELEPHONE` int(10) DEFAULT NULL,
  `MAIL` varchar(50) DEFAULT NULL,
  `PASS` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tiers`
--

INSERT INTO `tiers` (`NUMTIERS`, `PRENOMTIERS`, `NOMTIERS`, `DATENAISSTIERS`, `VILLE`, `CODEPOSTAL`, `ADRESSE`, `TELEPHONE`, `MAIL`, `PASS`) VALUES
(1, 'Benjamin', 'Kapoor', '1994-03-29', 'Charenton', '94220', '19 rue Arthur Croquette', '0621821781', 'benjaminkapoor@yahoo.fr', 'Azerty94');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `appartements`
--
ALTER TABLE `appartements`
  ADD PRIMARY KEY (`NUMAPPARTEMENT`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`NUMTIERS`);

--
-- Index pour la table `contrats`
--
ALTER TABLE `contrats`
  ADD PRIMARY KEY (`NUMCONTRAT`);

--
-- Index pour la table `contratsgestionlocation`
--
ALTER TABLE `contratsgestionlocation`
  ADD PRIMARY KEY (`NUMCONTRAT`),
  ADD KEY `FK_CONTRATSGESTIONLOCATION_PROPRIETAIRES` (`NUMTIERS`),
  ADD KEY `FK_CONTRATSGESTIONLOCATION_APPARTEMENTS` (`NUMAPPARTEMENT`);

--
-- Index pour la table `contratslocation`
--
ALTER TABLE `contratslocation`
  ADD PRIMARY KEY (`NUMCONTRAT`),
  ADD KEY `FK_CONTRATSLOCATION_CLIENTS` (`NUMTIERS`),
  ADD KEY `FK_CONTRATSLOCATION_SAISON` (`NUMSAISON`),
  ADD KEY `FK_CONTRATSLOCATION_APPARTEMENTS` (`NUMAPPARTEMENT`);

--
-- Index pour la table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`IDOPTION`);

--
-- Index pour la table `proprietaires`
--
ALTER TABLE `proprietaires`
  ADD PRIMARY KEY (`NUMTIERS`),
  ADD KEY `FK_PROPRIETAIRES_REPRESANTANTS` (`ID`);

--
-- Index pour la table `represantants`
--
ALTER TABLE `represantants`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `saison`
--
ALTER TABLE `saison`
  ADD PRIMARY KEY (`NUMSAISON`);

--
-- Index pour la table `tiers`
--
ALTER TABLE `tiers`
  ADD PRIMARY KEY (`NUMTIERS`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tiers`
--
ALTER TABLE `tiers`
  MODIFY `NUMTIERS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
