-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 21 Février 2019 à 20:22
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `e-recrutement`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(250) NOT NULL,
  `mdp` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `pseudo`, `mdp`, `type`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'ghiles', 'ghil', 'sous_admin');

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

CREATE TABLE IF NOT EXISTS `candidat` (
  `id_cand` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `domicile` varchar(250) NOT NULL,
  `sexe` varchar(250) NOT NULL,
  `tel` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `ci` varchar(250) NOT NULL,
  `pseudo` varchar(250) NOT NULL,
  `mdp` varchar(250) NOT NULL,
  PRIMARY KEY (`id_cand`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `candidat`
--

INSERT INTO `candidat` (`id_cand`, `nom`, `prenom`, `age`, `domicile`, `sexe`, `tel`, `email`, `ci`, `pseudo`, `mdp`) VALUES
(4, 'g', 'g', 16, 'erg', 'ggg', '0555', 'g@g', '', 'g', 'aa');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id_cnt` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cnt` varchar(250) NOT NULL,
  `prenom_cnt` varchar(250) NOT NULL,
  `email_cnt` varchar(250) NOT NULL,
  `msg_cnt` text NOT NULL,
  PRIMARY KEY (`id_cnt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id_cnt`, `nom_cnt`, `prenom_cnt`, `email_cnt`, `msg_cnt`) VALUES
(3, 'ghgg', 'gggggg', 'ghilesonaldo@yahoo.fr', 'gggggg');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `username` varchar(300) NOT NULL,
  `date_naissance` date NOT NULL,
  `tel` text NOT NULL,
  `adresse` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `valide` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `username`, `date_naissance`, `tel`, `adresse`, `email`, `password`, `valide`) VALUES
(1, 'recruteur1', 'recruteur1', 'aa', '2017-05-02', '05555555', 'recruteur1', 'a@aaa', 'a', 1),
(38, 'a', 'a', 'aa', '2017-06-15', 'a', 'a', 'a@aaa', 'b', 1),
(39, 'g', 'gg', 'gh', '2017-06-17', '0555555555555555', 'sdfef', 'a@srg', 'a', 1);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_expediteur` int(11) NOT NULL DEFAULT '0',
  `id_destinataire` int(11) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  `titre` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `mooc`
--

CREATE TABLE IF NOT EXISTS `mooc` (
  `id_mooc` int(11) NOT NULL AUTO_INCREMENT,
  `des_mooc` varchar(250) NOT NULL,
  `domaine_mooc` int(250) NOT NULL,
  `duree_mooc` int(11) NOT NULL,
  PRIMARY KEY (`id_mooc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `organisme`
--

CREATE TABLE IF NOT EXISTS `organisme` (
  `id_org` int(11) NOT NULL AUTO_INCREMENT,
  `nom_org` varchar(250) NOT NULL,
  `des_org` varchar(250) NOT NULL,
  `domaine_org` varchar(250) NOT NULL,
  `adresse_org` varchar(250) NOT NULL,
  `email_org` text NOT NULL,
  `tel_org` text NOT NULL,
  `pseudo_org` varchar(250) NOT NULL,
  `mdp_org` varchar(250) NOT NULL,
  PRIMARY KEY (`id_org`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `organisme`
--

INSERT INTO `organisme` (`id_org`, `nom_org`, `des_org`, `domaine_org`, `adresse_org`, `email_org`, `tel_org`, `pseudo_org`, `mdp_org`) VALUES
(3, 'g', 'f', 'fg', 'f', 'cc@cc', '0', 'ghiles', 'f'),
(6, 'g', 'gg', 'g', 'gsef', 'fd@qdfqz', '0555733725', 'ghiles', 'admin'),
(7, 'r', 'r', 'r', 'rer', 're@ze', 'reer', 'zerzr', 't'),
(8, 'drg', 'rger', 'erge', 'erg', 'g@g', 'eerg', 'ghiles', 't'),
(9, 'h', 'h', 'g', 'g', 're@nnnnnnnn', 'nnnn', 'ghiles', 'a'),
(10, 'a', 'a', 'a', 'a', 'a@a', 'a', 'ghiles', 'z'),
(11, 'aa', 'a', 'a', 'azib ahemed', '', 'a', 'a', 'a'),
(12, 'a', 'a', 'a', 'a', 're@ze', 'aa', 'f', 'f'),
(13, 'a', 'a', 'a', 'a', 're@zeccccccccccc', 'a', 'a', 'a'),
(14, 'a', 'a', 'a', 'a', 're@zeccccccccccc', 'a', 'a', 'a'),
(15, 'a', 'a', 'a', 'a', 're@ze', 'a', 'add', 'd'),
(16, 'a', 'a', 'a', 'a', 're@ze', 'a', 'add', 'd'),
(17, 'a', 'a', 'aaa', 'a', 'g@g', 'ttttttt', 'tttttttttttttttttttttttttttttt', 't'),
(18, 'a', 'a', 'aaa', 'a', 'g@g', 'ttttttt', 'tttttttttttttttttttttttttttttt', 't');

-- --------------------------------------------------------

--
-- Structure de la table `table_utilisateur`
--

CREATE TABLE IF NOT EXISTS `table_utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `nbr_connect` int(11) NOT NULL,
  `dates` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `table_utilisateur`
--

INSERT INTO `table_utilisateur` (`id`, `user`, `pass`, `nbr_connect`, `dates`) VALUES
(1, 'a', 'a', 0, '2017-06-27'),
(2, 'b', 'b', 2, '2017-06-14');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `nbr_connect` int(11) NOT NULL,
  `dates` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
