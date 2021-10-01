-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 10 avr. 2021 à 19:05
-- Version du serveur :  8.0.23-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ZICADO`
--

-- --------------------------------------------------------

--
-- Structure de la table `Album`
--

CREATE TABLE `Album` (
  `idAlbum` int NOT NULL,
  `titre` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `prix` int NOT NULL,
  `stock` int NOT NULL,
  `quantite` int NOT NULL,
  `idGenre` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Album`
--

INSERT INTO `Album` (`idAlbum`, `titre`, `img`, `prix`, `stock`, `quantite`, `idGenre`) VALUES
(1, 'Aya Nakamura - Plus jamais', 'img/pop/aya_pop.jpg', 20, 10, 0, 0),
(4, 'Miley Cirus - Plastic Hearts', 'img/pop/mileyCirus.jpg', 20, 10, 0, 4),
(5, 'Steven Wilson - The Future Bites', 'img/pop/stevenWilson.jpg', 20, 10, 0, 4),
(6, 'Dua lipa - Future Nostalgia', 'img/pop/duaLipa.jpg', 20, 10, 0, 4),
(7, 'Kimberose - Out', 'img/pop/kimberose.jpg', 20, 10, 0, 4);

-- --------------------------------------------------------

--
-- Structure de la table `Genre`
--

CREATE TABLE `Genre` (
  `idGenre` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Genre`
--

INSERT INTO `Genre` (`idGenre`, `nom`) VALUES
('1', 'Reggae'),
('2', 'Rock'),
('3', 'R&B'),
('4', 'Pop'),
('5', 'Rap');

-- --------------------------------------------------------

--
-- Structure de la table `Personne`
--

CREATE TABLE `Personne` (
  `identifiant` varchar(30) NOT NULL,
  `motDePasse` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `dateNaissance` date NOT NULL,
  `sexe` varchar(30) NOT NULL,
  `pays` varchar(30) NOT NULL,
  `metier` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Personne`
--

INSERT INTO `Personne` (`identifiant`, `motDePasse`, `nom`, `prenom`, `dateNaissance`, `sexe`, `pays`, `metier`) VALUES
('$pseudo', '$pass', '$nom', '$prenom', '2000-10-25', '$sexe', '$pays', '$metier'),
('lala', '$pass', '$nom', '$prenom', '2555-10-10', '$sexe', '$pays', '$metier'),
('louve', 'louve', 'louve', 'louve', '2000-10-10', 'femme', 'france', 'etudiante');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `password` varchar(100) NOT NULL,
  `id` int NOT NULL,
  `pseudo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`password`, `id`, `pseudo`) VALUES
('$2y$10$YgnOe7X9eGoghm5FKXrBDOI9GTLz6WMeP7HF7BQGQRk1Z9qaarVNi', 8, 'gigi'),
('$2y$10$glMW8dSzsAft.uAQBKUcLutlu1SI5MYDJUVp4v5LTWMl6mXlYle6e', 9, 'lebroneclo'),
('$2y$10$dJoKPTtTH4UiM4lhx02/XOsN7fskuFRTM0xecg352ynEluTq3ydJW', 10, 'lebroneclo'),
('$2y$10$6uv8Kar7Bs3cJdcaxVsrHeyuxUP8fFaTDOsV8oOK15G4j27gxQ5FO', 11, 'lebroneclo'),
('$2y$10$3ouw/ttPfUBy7lYXXGI69eCQRn.UnB98PjUP8us63e/Kyoxk0M2V6', 12, 'lebroneclo'),
('brioche', 13, 'lebroneclo'),
('$2y$10$osdM.TTPhsm5IEDqpEdaI.giNtQ5vlA40yQbZto7t2UwnKv1t5A5O', 14, 'lebroneclo'),
('$2y$10$.kec.x//PjKMaGMzqwCkFuHkko0KIvBVCq8ic58J2caX8j.IidzSm', 15, 'lebroneclo'),
('$2y$10$wPdjdltzs.g7q9RwwkvvGeJ6blKkXoYahnf37f.BReAY5Alwe.Q6a', 16, 'jenna'),
('$2y$10$doDpNj1gGwv34oEnRmjGL.XsPpYcMA.2DUssv/1Lhman6qo3xlkHK', 17, 'jaja'),
('$2y$10$WA8yPjjlS/C5A2Zc0k9V7eRYTIUnLqrtlKEptWs5Mht6GTkK9gWB2', 18, 'grrr'),
('$2y$10$kGKtCaIAgMX9ctNGT0c9yOMr0Iczo5gI1JIq0fRpW2GeC9wXdCtTO', 19, 'pppppppppppp'),
('$2y$10$Sf93W/SaxmQFhoFbOYCjmOR8jHdJC9oXZrnVFD9RBGFVZt5D/NpzO', 20, 'louve'),
('$2y$10$EU/R2jKd8rM2TBf2CSk2PewH8ku24S.n37WnW2f0fnFky5L0XCsGm', 21, 'liliiiiiiii');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Album`
--
ALTER TABLE `Album`
  ADD PRIMARY KEY (`idAlbum`),
  ADD KEY `idGenre` (`idGenre`);

--
-- Index pour la table `Personne`
--
ALTER TABLE `Personne`
  ADD PRIMARY KEY (`identifiant`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Album`
--
ALTER TABLE `Album`
  MODIFY `idAlbum` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
