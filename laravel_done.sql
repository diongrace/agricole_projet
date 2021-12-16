-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 16 déc. 2021 à 13:05
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravel_done`
--

-- --------------------------------------------------------

--
-- Structure de la table `menbres`
--

CREATE TABLE `menbres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Specialite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menbres`
--

INSERT INTO `menbres` (`id`, `Nom`, `Prenom`, `Contact`, `Genre`, `Specialite`, `created_at`, `updated_at`) VALUES
(3, 'KOSSONOU', 'STEPHANIE', '0102234566', 'FEMME', 'ELEVAGE', '2021-12-09 15:05:44', '2021-12-09 15:05:44'),
(4, 'GNONLEBAT', 'WYLMAR', '0123455623', 'FEMME', 'PLANTEUR', '2021-12-09 15:06:33', '2021-12-09 15:06:33'),
(5, 'KAM', 'OBE', '0140032526', 'FEMME', 'PLANTEUR', '2021-12-09 15:07:24', '2021-12-09 15:07:24'),
(6, 'KOUYATE', 'OUSMANE', '0102254552', 'HOMME', 'PLANTEUR', '2021-12-09 15:08:04', '2021-12-09 15:08:04'),
(7, 'SON', 'LANCINE', '0129753688', 'HOMME', 'PLANTEUR', '2021-12-09 15:08:54', '2021-12-09 15:08:54'),
(8, 'DION', 'ANGE', '0142833325', 'HOMME', 'PLANTEUR', '2021-12-09 15:10:01', '2021-12-09 15:10:01'),
(9, 'ZOBO', 'ADRIEL', '0102254552', 'HOMME', 'ELEVAGE', '2021-12-09 15:10:54', '2021-12-09 15:10:54');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(48, '2014_10_12_000000_create_users_table', 1),
(49, '2014_10_12_100000_create_password_resets_table', 1),
(50, '2019_07_24_222403_create_students_table', 1),
(51, '2021_10_27_142047_create_menbres_table', 1),
(52, '2021_10_27_151552_create_utilsateurs_table', 1),
(53, '2021_11_18_155256_create_subventions_table', 1),
(54, '2021_12_02_153529_create_welcomes_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `subventions`
--

CREATE TABLE `subventions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `Montant` int(11) NOT NULL,
  `donateur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cooperative` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Motif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `subventions`
--

INSERT INTO `subventions` (`id`, `Date`, `Montant`, `donateur`, `cooperative`, `Motif`, `created_at`, `updated_at`) VALUES
(1, '2021-12-09', 1000000000, '1ER MINISTRE', 'CALAMA', 'pour renouvellement de l\' usine', '2021-12-09 16:13:14', '2021-12-09 16:13:14'),
(3, '2021-12-08', 3000000, '1er DAME', 'CALAMA', 'pour la construction du siège de la coopérative', '2021-12-09 16:15:34', '2021-12-09 16:15:34'),
(4, '2021-12-01', 1000000, 'MAIRE', 'CALAMA', 'pour la publicité de l\' entreprise', '2021-12-09 16:17:09', '2021-12-09 16:17:09'),
(5, '2021-12-06', 60000000, 'PRESIDENT', 'CALAMA', 'pour l\' achat des machines', '2021-12-09 16:18:46', '2021-12-09 16:18:46'),
(6, '2021-12-02', 1000000000, 'PRESIDENT', 'CALAMA', 'pour l\' achat des machines', '2021-12-09 16:20:11', '2021-12-09 16:20:11'),
(7, '2021-12-03', 2000000000, 'PRESIDENT', 'CALAMA', 'simple don a la coopérative', '2021-12-09 16:22:17', '2021-12-09 16:22:17');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilsateurs`
--

CREATE TABLE `utilsateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `Vehicule` int(11) NOT NULL,
  `Materiel` int(11) NOT NULL,
  `employés` int(11) NOT NULL,
  `Imprevue` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilsateurs`
--

INSERT INTO `utilsateurs` (`id`, `Date`, `Vehicule`, `Materiel`, `employés`, `Imprevue`, `Total`, `created_at`, `updated_at`) VALUES
(1, '2021-12-09', 800000, 200000, 100000, 7000000, 8000000, '2021-12-09 16:34:21', '2021-12-09 16:34:21'),
(2, '2021-12-03', 3000000, 2000000, 5000000, 1000000, 6500000, '2021-12-09 16:42:09', '2021-12-09 16:42:09'),
(3, '2021-12-03', 200000, 200000, 100000, 300000, 800000, '2021-12-09 16:44:09', '2021-12-09 16:44:09'),
(4, '2021-12-01', 800000, 100000, 5000000, 100000, 1000000, '2021-12-09 16:45:45', '2021-12-09 16:45:45'),
(5, '2021-12-05', 1000000, 1000000, 5000000, 1000000, 8000000, '2021-12-09 16:47:07', '2021-12-09 16:47:07'),
(6, '2021-12-05', 800000, 100000, 5000000, 100000, 1000000, '2021-12-09 16:48:21', '2021-12-09 16:48:21'),
(7, '2021-12-15', 200000, 1000000, 1000000, 1000000000, 8000000, '2021-12-14 20:58:07', '2021-12-14 20:58:07');

-- --------------------------------------------------------

--
-- Structure de la table `welcomes`
--

CREATE TABLE `welcomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `welcomes`
--

INSERT INTO `welcomes` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'moitoi@gmail.com', 12345678, '2021-12-10 21:48:08', '2021-12-10 21:48:08'),
(2, 'mnssendeer@gmail.com', 12345678, '2021-12-14 20:52:45', '2021-12-14 20:52:45'),
(3, 'moitoi@gmail.com', 12345678, '2021-12-15 15:30:13', '2021-12-15 15:30:13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `menbres`
--
ALTER TABLE `menbres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subventions`
--
ALTER TABLE `subventions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilsateurs`
--
ALTER TABLE `utilsateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `welcomes`
--
ALTER TABLE `welcomes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `menbres`
--
ALTER TABLE `menbres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `subventions`
--
ALTER TABLE `subventions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilsateurs`
--
ALTER TABLE `utilsateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `welcomes`
--
ALTER TABLE `welcomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
