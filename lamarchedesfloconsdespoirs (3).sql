-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 déc. 2023 à 11:10
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lamarchedesfloconsdespoirs`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `IdCompte` int(6) NOT NULL,
  `nom_utilisateur` varchar(50) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`IdCompte`, `nom_utilisateur`, `mdp`, `nom`, `prenom`, `email`, `telephone`) VALUES
(1, 'cc@g', 'cc', 'cc', 'cc', 'cc', 'cc'),
(2, 'a', '$2y$10$DwuMG3Z2fU1T1/M3vdUYKuvAxBUZmLVjIq6b.EY47u32GjW8jLfO6', 'ROBERTO', 'TUTURINHOOOO', 'rbtarthur.00@gmail.com', '0404040404'),
(3, 'stef', '$2y$10$9hJrlFVdCxttdCOxyudYuOzyM6HFx6N3g5VrBH2m51uq2nEerM7IG', 'ROBERT', 'STEPHANE', 'tut@gmail.com', '0404040404'),
(4, 'CR7', '$2y$10$gfnpjFcprQaxXuSqNJ4xL.ZiJ/Cf3CCzEJmXPeDDjv4Sren9q21fG', 'RONALDO', 'Cristiano', 'cr7@gmail.com', '0404040404'),
(5, 'concombre', '$2y$10$JKjlyJ.x1Gbk9b9vUoHMwu9KsDI7ABMk9L6Y7.I4mCIYIfdl/mDJm', 'FILHOL', 'Baptiste', 'SIU@gmail.com', '0404040404'),
(6, 'juju', '$2y$10$omMzFXJAgoL8vRUbMuv86Ojrbt.YedvprWXzkYzX4p3Fkk4xbQSyy', 'ouho', 'tv', 'ju@ju', '0101010101'),
(7, 'Titip', '$2y$10$VD0SI560WRkvGmjpFZ662.bobq2EnBrUlYUl.OOf00ggvoltj.x5C', 'PAYER', 'Titi', 'titi@titi', '0000000001'),
(8, 'vp', '$2y$10$Wo95OgTqcvUFj2.IQpoF2eI4HFJ3f905pbuikdBuqhNvFiuvEv.T6', 'PAR', 'VADOCHE', 'vp@vp', '0102020304'),
(9, 'ara', '$2y$10$yAxzKpP3AW51pKNXxT/xCetS/C9L0rmT0fm/rlMiTMfobC8MjPZru', 'zbi', 'sbo', 'popo@popo', '1234567890'),
(10, 'aze', '$2y$10$d07uGvSCNrl.9jvDADv55e4NqzLzIhZTLAUR7o9GIIeH7eRhyowoG', 'azerty', 'azerty', 'az@az', '1472583691'),
(11, 'aaa', '$2y$10$d1MRvxnnuHh547VnLMoaqukjlEi8IH1n5zircgVwdkcCwQF6DiBjK', 'aaa', 'aaa', 'aa@aa', '1231231231'),
(12, 'aaaa', '$2y$10$4AiOngCH4aUZVfDKg.e94.u.N6tyz7mdkYt3UVzHxavgD3dTf1aR2', 'aaaa', 'aaaa', 'aaaa@a', '1231231231'),
(13, 'azerty', '$2y$10$2N6o9q.bt5tIDCvq.QT17Og3T7QVj5HwgcpVmCMyMk8AKh3xn6sAu', 'aaaaaa', 'bbbbbb', 'azer@z', '0786924503'),
(14, 'azazaa', '$2y$10$H/eavCPUkyulZwm4qT0iP.9.LwcUYDXQOMCUgXJGVmvkIdHaBTR5S', 'azeeee', 'aeeee', 'aaza@a', '7894563210'),
(15, 'bbbbbbb', '$2y$10$TkP5t9OCBarMDqDhdYaRtOYKxxd2CFCVyz.oMaQM4b9hiihNiL4AS', 'azazaazaaz7', 'aaaaaaaa9', 'rkgjrejhre@8', '1236985470'),
(16, 'apaejbfef', '$2y$10$IjhlQ/TBr9qxCcdzGk6sy.1.VRBR7Zeg9ejm/IZ/tJqR.iS83mvT.', 'popopo', 'papapapap', 'papapa@aa', '8989898989'),
(17, 'azerpoi', '$2y$10$0K9kPadj1rA8HP.Y3WTsuu743H6GK3LzpIxleA3d97jNlL2R725/S', 'poiuy', 'aerty', 'poiu@azer', '147852963');

-- --------------------------------------------------------

--
-- Structure de la table `dons`
--

CREATE TABLE `dons` (
  `idDons` int(6) NOT NULL,
  `Montant` decimal(10,2) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `idCompte` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parcours`
--

CREATE TABLE `parcours` (
  `idParcours` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `distance` float DEFAULT NULL,
  `temps_estime` time DEFAULT NULL,
  `denivele` int(6) DEFAULT NULL,
  `Tarifs` decimal(10,2) DEFAULT NULL,
  `Horaires` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `parcours`
--

INSERT INTO `parcours` (`idParcours`, `nom`, `description`, `distance`, `temps_estime`, `denivele`, `Tarifs`, `Horaires`) VALUES
(1, 'Parcours 1', 'Description parcours 1', 15, '00:06:00', 450, 10.00, '12');

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `idParticipant` int(6) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `age` int(6) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `cle_unique` varchar(10) DEFAULT NULL,
  `statut_paiement` varchar(50) DEFAULT NULL,
  `idParcours` int(6) DEFAULT NULL,
  `idCompte` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`idParticipant`, `nom`, `prenom`, `age`, `genre`, `email`, `telephone`, `cle_unique`, `statut_paiement`, `idParcours`, `idCompte`) VALUES
(4, '', 'Arthur', 18, 'homme', 'rbtarthur.00@gmail.com', '0786924503', 'ART6590', 'non payé', 1, 7),
(9, '', 'Arthur', 65, 'homme', 'dacir67661@newnime.com', '0786924503', 'ART1243', 'non payé', 1, NULL),
(10, 'ROBERT', 'fifi', 62, 'femme', 'yhmdcut331@webdoctor.fr', '0786924503', 'FIFROB3331', 'non payé', 1, NULL),
(11, 'ROBERT', 'fifi', 62, 'femme', 'yhmdcut331@webdoctor.fr', '0786924503', 'FIFROB3494', 'non payé', 1, NULL),
(12, 'PAYER', 'ti', 21, 'autre', 'titi@titi', '3232323232', 'TIPAY8954', 'payé', 1, 7);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`IdCompte`);

--
-- Index pour la table `dons`
--
ALTER TABLE `dons`
  ADD PRIMARY KEY (`idDons`),
  ADD KEY `idCompte` (`idCompte`);

--
-- Index pour la table `parcours`
--
ALTER TABLE `parcours`
  ADD PRIMARY KEY (`idParcours`);

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`idParticipant`),
  ADD UNIQUE KEY `cle_unique` (`cle_unique`),
  ADD KEY `idParcours` (`idParcours`) USING BTREE,
  ADD KEY `idCompte` (`idCompte`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `IdCompte` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `dons`
--
ALTER TABLE `dons`
  MODIFY `idDons` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parcours`
--
ALTER TABLE `parcours`
  MODIFY `idParcours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `participant`
--
ALTER TABLE `participant`
  MODIFY `idParticipant` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `dons`
--
ALTER TABLE `dons`
  ADD CONSTRAINT `dons_ibfk_1` FOREIGN KEY (`idCompte`) REFERENCES `compte` (`IdCompte`);

--
-- Contraintes pour la table `participant`
--
ALTER TABLE `participant`
  ADD CONSTRAINT `participant_ibfk_1` FOREIGN KEY (`idParcours`) REFERENCES `parcours` (`idParcours`),
  ADD CONSTRAINT `participant_ibfk_2` FOREIGN KEY (`idCompte`) REFERENCES `compte` (`IdCompte`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
