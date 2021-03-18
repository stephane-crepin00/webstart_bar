-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 18 mars 2021 à 16:06
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
-- Base de données : `webstart_bar`
--

-- --------------------------------------------------------

--
-- Structure de la table `Card`
--

CREATE TABLE `Card` (
  `id` int NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `active` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Card`
--

INSERT INTO `Card` (`id`, `title`, `description`, `active`, `created_at`, `deleted_at`) VALUES
(1, 'MIDI', 'Les dégustations recommandées lors du repas du midi', 1, '2021-03-16 14:40:24', NULL),
(2, 'SOIR', 'Les dégustations recommandées lors du repas du midi', 1, '2021-03-16 14:40:24', NULL),
(3, 'Happy Hour\'s', 'Venez profitez de promo le temps de l\'Happy Hour\'s', 1, '2021-03-16 14:41:59', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Card_has_Drink`
--

CREATE TABLE `Card_has_Drink` (
  `Card_id` int NOT NULL,
  `Drink_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Card_has_Drink`
--

INSERT INTO `Card_has_Drink` (`Card_id`, `Drink_id`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(2, 5),
(3, 7),
(3, 8),
(2, 9),
(3, 10);

-- --------------------------------------------------------

--
-- Structure de la table `Category`
--

CREATE TABLE `Category` (
  `id` int NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `active` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Category`
--

INSERT INTO `Category` (`id`, `title`, `description`, `active`, `created_at`, `deleted_at`) VALUES
(1, 'Boissons Fraiches', 'Eaux minérales ou gazifiées', 1, '2021-03-16 02:15:59', NULL),
(2, 'Jus de Fruit', 'Jus de fruits ou de légumes', 1, '2021-03-16 02:15:59', NULL),
(3, 'Cocktail', 'Alcools', 1, '2021-03-16 02:18:24', NULL),
(4, 'Boissons Chaudes', 'café, thé, chocolat.', 1, '2021-03-16 02:18:24', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Drink`
--

CREATE TABLE `Drink` (
  `id` int NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `prix` float NOT NULL,
  `vta` float NOT NULL,
  `active` tinyint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Drink`
--

INSERT INTO `Drink` (`id`, `title`, `description`, `prix`, `vta`, `active`, `created_at`, `deleted_at`) VALUES
(1, 'Evian', '50cl', 3.5, 0.5, 1, '2021-03-16 02:26:43', NULL),
(2, 'Badoit', '50cl', 3.8, 0.8, 1, '2021-03-16 02:26:43', NULL),
(3, 'Sprite', '33cl', 4.1, 1.1, 1, '2021-03-16 02:26:43', NULL),
(4, 'Perrier', '33cl', 4.1, 1.1, 1, '2021-03-16 02:26:43', NULL),
(5, 'Coca Cola', '33cl', 4.1, 1.1, 1, '2021-03-16 02:26:43', NULL),
(6, 'Vin', '50cl', 15, 2.5, 1, '2021-03-18 02:26:43', NULL),
(7, 'Rhum', '50cl', 20, 3, 1, '2021-03-18 02:26:43', NULL),
(8, 'Wishky', '33cl', 25, 5.5, 1, '2021-03-18 02:26:43', NULL),
(9, 'Rhum vanilla', '33cl', 15, 5, 1, '2021-03-18 02:26:43', NULL),
(10, 'Diabolo', '33cl', 5.5, 1.5, 1, '2021-03-18 02:26:43', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Drink_has_Category`
--

CREATE TABLE `Drink_has_Category` (
  `Drink_id` int NOT NULL,
  `Category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Drink_has_Category`
--

INSERT INTO `Drink_has_Category` (`Drink_id`, `Category_id`) VALUES
(1, 1),
(2, 1),
(5, 1),
(9, 3),
(10, 3);

-- --------------------------------------------------------

--
-- Structure de la table `Ingredient`
--

CREATE TABLE `Ingredient` (
  `id` int NOT NULL,
  `title` varchar(45) NOT NULL,
  `unit` varchar(45) NOT NULL,
  `quantity` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Drink_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Ingredient`
--

INSERT INTO `Ingredient` (`id`, `title`, `unit`, `quantity`, `created_at`, `Drink_id`) VALUES
(1, 'eau', 'cl', 33, '2021-03-16 17:01:24', 1),
(2, 'eau gazeuse', 'cl', 33, '2021-03-16 17:01:24', 4),
(3, 'Limonade', 'cl', 30, '2021-03-18 15:36:27', 10),
(4, 'Sirop Fraise', 'cl', 3, '2021-03-18 15:36:27', 10),
(5, 'Rhum', 'cl', 45, '2021-03-18 16:01:47', 9),
(6, 'Vanille', 'cl', 5, '2021-03-18 16:01:47', 9);

-- --------------------------------------------------------

--
-- Structure de la table `Server`
--

CREATE TABLE `Server` (
  `id` int NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `age` int NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `active` tinyint NOT NULL,
  `schedule` enum('MIDI','SOIR','MIDI ET SOIR') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Server`
--

INSERT INTO `Server` (`id`, `lastname`, `firstname`, `age`, `description`, `active`, `schedule`, `created_at`, `deleted_at`) VALUES
(1, 'defroyenne', 'gregory', 22, 'boy...', 1, 'SOIR', '2021-03-16 19:59:44', NULL),
(2, 'stephane', 'crep', 22, 'boy...', 1, 'SOIR', '2021-03-16 19:59:44', NULL),
(3, 'Jeam', 'Paul', 54, 'boy...', 1, 'MIDI ET SOIR', '2021-03-16 20:01:04', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `id` int NOT NULL,
  `login` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `active` tinyint NOT NULL,
  `role` enum('ADMIN','USER') NOT NULL,
  `last_connection_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Card`
--
ALTER TABLE `Card`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Index pour la table `Card_has_Drink`
--
ALTER TABLE `Card_has_Drink`
  ADD PRIMARY KEY (`Card_id`,`Drink_id`),
  ADD KEY `fk_Card_has_Drink_Drink1_idx` (`Drink_id`),
  ADD KEY `fk_Card_has_Drink_Card1_idx` (`Card_id`);

--
-- Index pour la table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Index pour la table `Drink`
--
ALTER TABLE `Drink`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Index pour la table `Drink_has_Category`
--
ALTER TABLE `Drink_has_Category`
  ADD PRIMARY KEY (`Drink_id`,`Category_id`),
  ADD KEY `fk_Drink_has_Category_Category1_idx` (`Category_id`),
  ADD KEY `fk_Drink_has_Category_Drink_idx` (`Drink_id`);

--
-- Index pour la table `Ingredient`
--
ALTER TABLE `Ingredient`
  ADD PRIMARY KEY (`id`,`Drink_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_Ingredient_Drink1_idx` (`Drink_id`);

--
-- Index pour la table `Server`
--
ALTER TABLE `Server`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `login_UNIQUE` (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Card`
--
ALTER TABLE `Card`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Category`
--
ALTER TABLE `Category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Drink`
--
ALTER TABLE `Drink`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `Ingredient`
--
ALTER TABLE `Ingredient`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Server`
--
ALTER TABLE `Server`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Card_has_Drink`
--
ALTER TABLE `Card_has_Drink`
  ADD CONSTRAINT `fk_Card_has_Drink_Card1` FOREIGN KEY (`Card_id`) REFERENCES `Card` (`id`),
  ADD CONSTRAINT `fk_Card_has_Drink_Drink1` FOREIGN KEY (`Drink_id`) REFERENCES `Drink` (`id`);

--
-- Contraintes pour la table `Drink_has_Category`
--
ALTER TABLE `Drink_has_Category`
  ADD CONSTRAINT `fk_Drink_has_Category_Category1` FOREIGN KEY (`Category_id`) REFERENCES `Category` (`id`),
  ADD CONSTRAINT `fk_Drink_has_Category_Drink` FOREIGN KEY (`Drink_id`) REFERENCES `Drink` (`id`);

--
-- Contraintes pour la table `Ingredient`
--
ALTER TABLE `Ingredient`
  ADD CONSTRAINT `fk_Ingredient_Drink1` FOREIGN KEY (`Drink_id`) REFERENCES `Drink` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
