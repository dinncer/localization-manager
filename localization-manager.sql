-- SQL Dump
-- Host: localhost
-- Generation Time: Jan 30, 2019 at 06:50 AM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `localization-manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id_language` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id_language`, `name`, `language_code`, `country_code`, `created_at`, `updated_at`) VALUES
(1, 'Turkish', 'tr', 'tr-TR', '2019-01-30 02:26:00', NULL),
(2, 'English', 'en', 'en-US', '2019-01-30 02:26:00', NULL),
(3, 'Germany', 'de', 'de-DE', '2019-01-30 02:26:00', NULL),
(4, 'Italian', 'it', 'it-IT', '2019-01-30 02:26:00', NULL),
(5, 'Japanese', 'ja', 'ja-JP', '2019-01-30 02:26:00', NULL),
(6, 'Russian', 'ru', 'ru-RU', '2019-01-30 02:26:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_01_29_065723_create_languages_table', 1),
(9, '2019_01_29_070611_create_projects_table', 1),
(10, '2019_01_29_072254_create_projects_word_table', 1),
(13, '2019_01_29_175109_add_vocable_to_project_word_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id_project` int(10) unsigned NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id_project`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Test Project', '2019-01-30 02:31:28', '2019-01-30 02:31:28'),
(2, 'Other Project', '2019-01-30 02:31:34', '2019-01-30 02:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `projects_word`
--

CREATE TABLE IF NOT EXISTS `projects_word` (
  `id_word` int(10) unsigned NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vocable` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` smallint(6) NOT NULL,
  `project_id` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects_word`
--

INSERT INTO `projects_word` (`id_word`, `title`, `vocable`, `version`, `language_id`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 'page-title', 'Page Title', '0.0.1', 2, 2, '2019-01-30 02:32:22', '2019-01-30 02:32:22'),
(2, 'desc', 'Description', '0.0.1', 2, 2, '2019-01-30 02:32:51', '2019-01-30 02:32:51'),
(3, 'keyw', 'Keyword', '0.0.2', 3, 1, '2019-01-30 02:33:19', '2019-01-30 02:33:25'),
(4, 'web', 'Web Site', '0.0.3', 2, 1, '2019-01-30 02:35:52', '2019-01-30 02:35:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', 'administrator@test.com', '$2y$10$iQ8kb3YEL.sG0O8pMA96peaHYGIveIjiBKNG.nal7RENy/X4tsCyi', 1, 'zlEFtRqHrL3xPfPk42wXnC9x2dhQr2rB0DiAQNS4pCmQL6RH6mTMLBaFQdHC', '2019-01-30 02:26:00', '2019-01-30 02:26:00', NULL),
(2, 'John Doe', 'john@deo.com', '$2y$10$5cw29rCywpNjjtl9modInegR5nwE2qAF44BnPs..zi9r/iqtL983C', 2, 'CkLZZQLttV4YB5cnhxwsd0MRkGF1dooR6NkQnnM0c8RmkpQUX8oHNblhA2I1', '2019-01-30 02:31:14', '2019-01-30 02:31:14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id_language`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `projects_word`
--
ALTER TABLE `projects_word`
  ADD PRIMARY KEY (`id_word`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id_language` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id_project` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `projects_word`
--
ALTER TABLE `projects_word`
  MODIFY `id_word` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
