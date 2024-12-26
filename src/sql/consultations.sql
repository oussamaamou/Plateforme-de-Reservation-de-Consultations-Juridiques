SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `consultations`
--

-- --------------------------------------------------------

--
-- Structure de la table `indisponibilite`
--

CREATE TABLE `indisponibilite` (
  `ID` int NOT NULL,
  `ID_Avocat` int NOT NULL,
  `Date_Debut` date NOT NULL,
  `Date_Fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Déchargement des données de la table `indisponibilite`
--

INSERT INTO `indisponibilite` (`ID_Avocat`, `Date_Debut`, `Date_Fin`)
VALUES (1, '2024-12-28', '2024-12-30');

-- ---------------------------------------------------------

--
-- Modification des données de la table `indisponibilite`
--

UPDATE `indisponibilite`
SET `Date_Fin` = '2024-12-31'
WHERE `ID_Avocat` = 1 AND `Date_Debut` = '2024-12-28';



--
-- Suppression des données de la table `indisponibilite`
--

ALTER TABLE `indisponibilite`
DROP FOREIGN KEY `indisponibilite_ibfk_1`;





-----------------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `ID` int NOT NULL,
  `ID_Client` int NOT NULL,
  `ID_Avocat` int NOT NULL,
  `Date_Consultation` datetime NOT NULL,
  `Statut` enum('Confirmee','Annulee') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`ID_Client`, `ID_Avocat`, `Date_Consultation`, `Statut`)
VALUES (2, 1, '2025-01-01 10:30:00', 'Confirmée');



-- ---------------------------------------------------------

--
-- Modification des données de la table `reservation`
--

UPDATE `reservation`
SET `Statut` = 'Annulée'
WHERE `ID` = 1;



--
-- Suppression des données de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;


----------------------------------------------------



--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID` int NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `Role` enum('Client','Avocat') NOT NULL,
  `Photo` mediumblob NOT NULL,
  `Biographie` text,
  `Telephone` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- ------------------------------------------------------

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Nom`, `Prenom`, `Role`, `Photo`, `Biographie`, `Telephone`, `Email`, `Mot_de_passe`) 
VALUES ('Rachad', 'Ahmed', 'Avocat', NULL, 'Spécialisé en Droit Commercial.', '0658941230', 'rachad@example.com', 'hashed_password');
       ('Ali', 'Mohamed', 'Client', NULL, NULL, '0745896521', 'mohamed@example.com', 'hashed_password');


-- ---------------------------------------------------------

--
-- Modification des données de la table `utilisateur`
--

UPDATE `utilisateur`
SET `Email` = 'ahmed@example.com', `Telephone` = '0787654321'
WHERE `ID` = 1;



--
-- Suppression des données de la table `utilisateur`
--

ALTER TABLE `utilisateur`
DROP COLUMN `Photo`;


----------------------------------------------------

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `indisponibilite`
--
ALTER TABLE `indisponibilite`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Avocat` (`ID_Avocat`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Client` (`ID_Client`),
  ADD KEY `ID_Avocat` (`ID_Avocat`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `indisponibilite`
--
ALTER TABLE `indisponibilite`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `indisponibilite`
--
ALTER TABLE `indisponibilite`
  ADD CONSTRAINT `indisponibilite_ibfk_1` FOREIGN KEY (`ID_Avocat`) REFERENCES `utilisateur` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`ID_Client`) REFERENCES `utilisateur` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`ID_Avocat`) REFERENCES `utilisateur` (`ID`) ON DELETE CASCADE;
COMMIT;

