-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 déc. 2023 à 23:05
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
-- Base de données : `mychat`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(17, 'mehdi', 'azerty@gmail.com', '$2y$10$OdLKda1.MW0NihIYCQLQau6Cejk0jDci.9lAdVrORB7yE2Fr3Cryi'),
(18, 'mohammed', 'mohammed12345@gmail.com', '$2y$10$aySd2RxvmwGG7iej0uj62uBwvUfTbHe8RDyz5wpZgfKpSCLLCFmTy'),
(19, 'mouhcine', 'MEHDIELFARI210@GMAIL.COM', '$2y$10$RBAt5tBcoNNkBTvQWg7zGOAVggdBhcP6nvaqqySr4ULIUQVzlTvmO'),
(20, 'moaduser', 'admin@gmail.com', '$2y$10$oJzQz.kamJZVuJxxf8mvWewAjz0URynUmI7Fp7yuCtlPA02dPvUmS'),
(21, 'oussama', 'oussama20@GMAIL.COM', '$2y$10$iPgKF0zsb.qB.gs4NP2dNeACZxa.mAK1OGJHDepjx7t24G5B2gSC.'),
(22, 'ilyas', 'ilyasrihani34@gmail.com', '$2y$10$vf7DH263eV1u8ZKBWMB53.3x9PynK6hPxdyWk9xgHRndE5p3TBUYq'),
(23, 'noguqinoh', 'wewetocewa@mailinator.com', '$2y$10$BYgy86FUgDcKJPQ2IFLJdeOVbmhMRTS77b/9/kzkERP4dYue8YxVy'),
(24, 'zksk', 'skksks@jsjks', '$2y$10$Qa6GmfPZo..rXbMTY6EgW.8KC0fsmnWgzY6nhSbfjaE30hWfDTjlC'),
(25, 'telomuc', 'qynucuvo@mailinator.com', '$2y$10$d6FBD9DLg2wf7SLvLinjbOMcuyq/9x1ELggQrP/YDo4Cj24/HAiWS'),
(26, 'lalikivu', 'selef@mailinator.com', '$2y$10$ThOF9dO5OgImSS1yN5ySTOIFvb3gAPyHOpSKnsAVrJNCOPKeAXOIC'),
(27, 'gepisy', 'lyvazap@mailinator.com', '$2y$10$vCFHaLKPeFAZ1.V6LOJqeOJypf/Bj5dt.bCSCs5w0hUTj3omWbHSa'),
(28, 'lalikivu', 'selef1@mailinator.com', '$2y$10$2lUMdaXJU7Q1RJ6paBQLRukYaqFyj12/NY9cJeFXsGJhTnd8pc/hK');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
