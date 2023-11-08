-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 05:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal-blog-app-auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 1),
(1, 2),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 5),
(2, 5),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(21, '::1', 'admin_member@gmail.com', 5, '2023-08-08 06:45:43', 1),
(22, '::1', 'admin_member@gmail.com', 5, '2023-08-08 07:03:06', 1),
(23, '::1', 'user_member@gmail.com', 6, '2023-08-08 07:19:42', 1),
(24, '::1', 'admin_member@gmail.com', 5, '2023-08-08 07:20:28', 1),
(25, '::1', 'user_member@gmail.com', 6, '2023-08-08 07:26:14', 1),
(26, '::1', 'admin_member@gmail.com', 5, '2023-08-08 07:37:49', 1),
(27, '::1', 'dummy_member@gmail.com', 7, '2023-08-08 07:53:09', 1),
(28, '::1', 'admin_member@gmail.com', 5, '2023-08-08 07:53:28', 1),
(29, '::1', 'user_member@gmail.com', 6, '2023-08-08 08:19:59', 1),
(30, '::1', 'user_member@gmail.com', 6, '2023-08-08 08:21:03', 1),
(31, '::1', 'admin_member@gmail.com', 5, '2023-08-08 08:23:22', 1),
(32, '::1', 'admin_member@gmail.com', 5, '2023-08-08 08:37:48', 1),
(33, '::1', 'user_member@gmail.com', 6, '2023-08-08 08:56:01', 1),
(34, '::1', 'admin_member@gmail.com', 5, '2023-08-08 09:06:07', 1),
(35, '::1', 'admin_member@gmail.com', 5, '2023-08-15 02:07:36', 1),
(36, '::1', 'user_member@gmail.com', 6, '2023-08-15 02:08:31', 1),
(37, '::1', 'admin_member@gmail.com', 5, '2023-08-15 04:29:40', 1),
(38, '::1', 'admin_member@gmail.com', 5, '2023-08-17 09:41:45', 1),
(39, '::1', 'user_member@gmail.com', 6, '2023-08-17 10:15:26', 1),
(40, '::1', 'admin_member@gmail.com', 5, '2023-08-17 10:36:11', 1),
(41, '::1', 'user_member@gmail.com', 6, '2023-08-17 10:50:52', 1),
(42, '::1', 'admin_member@gmail.com', 5, '2023-08-17 10:51:18', 1),
(43, '::1', 'admin_member@gmail.com', 5, '2023-08-17 16:04:29', 1),
(44, '::1', 'user_member@gmail.com', 6, '2023-08-17 16:09:24', 1),
(45, '::1', 'admin_member@gmail.com', 5, '2023-10-08 19:23:51', 1),
(46, '::1', 'user_member@gmail.com', 6, '2023-10-08 19:24:42', 1),
(47, '::1', 'admin_member@gmail.com', 5, '2023-10-08 19:35:08', 1),
(48, '::1', 'admin_member@gmail.com', 5, '2023-10-09 05:30:26', 1),
(49, '::1', 'admin_member@gmail.com', 5, '2023-10-10 01:51:14', 1),
(50, '::1', 'admin_member@gmail.com', 5, '2023-10-10 02:07:05', 1),
(51, '::1', 'admin_member@gmail.com', 5, '2023-10-10 08:15:33', 1),
(52, '::1', 'admin_member@gmail.com', 5, '2023-10-11 02:51:34', 1),
(53, '::1', 'admin_member@gmail.com', 5, '2023-10-12 03:28:29', 1),
(54, '::1', 'admin_member@gmail.com', 5, '2023-10-13 10:42:00', 1),
(55, '::1', 'admin_member@gmail.com', 5, '2023-10-13 10:45:25', 1),
(56, '::1', 'admin_member@gmail.com', 5, '2023-10-13 11:26:49', 1),
(57, '::1', 'admin_member@gmail.com', 5, '2023-10-13 11:30:40', 1),
(58, '::1', 'admin_member@gmail.com', 5, '2023-10-13 11:57:22', 1),
(59, '::1', 'admin_member@gmail.com', 5, '2023-10-14 15:21:26', 1),
(60, '::1', 'admin_member@gmail.com', 5, '2023-10-14 15:24:39', 1),
(61, '::1', 'admin_member@gmail.com', 5, '2023-10-14 15:29:27', 1),
(62, '::1', 'admin_member@gmail.com', 5, '2023-10-19 03:02:52', 1),
(63, '::1', 'admin_member@gmail.com', 5, '2023-10-25 10:27:36', 1),
(64, '::1', 'admin_member@gmail.com', 5, '2023-10-25 12:41:02', 1),
(65, '::1', 'admin_member@gmail.com', 5, '2023-10-31 04:11:15', 1),
(66, '::1', 'admin_member@gmail.com', 5, '2023-10-31 04:43:48', 1),
(67, '::1', 'admin_member@gmail.com', 5, '2023-10-31 07:22:27', 1),
(68, '::1', 'admin_member@gmail.com', 5, '2023-11-08 03:22:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage User\'s Profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(4, '2023-09-29-075857', 'App\\Database\\Migrations\\Posting', 'db_post', 'App', 1696792837, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'admin_member@gmail.com', 'admin112', NULL, 'default.svg', '$2y$10$OgobRUV2wiU7ibI4DFMoM.XzrAFd8Dx60ngDJw1ZXQbnCoWfh61GS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-08-08 06:33:08', '2023-08-08 06:33:08', NULL),
(6, 'user_member@gmail.com', 'user112', NULL, 'default.svg', '$2y$10$NpGphWUjgayXfR.wsOP0ue.EhXCQPtDUnFv8J2hr8N0I9hsDKvcQi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-08-08 07:19:33', '2023-08-08 07:19:33', NULL),
(8, 'Arizal@gmail.com', 'Arizal', NULL, 'default.svg', '$2y$10$zqENjzolcor/GmYTzbVUYOn82JkaTJb655URahoylALzYeyl/9V96', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-10-10 02:06:19', '2023-10-10 02:06:19', NULL),
(9, 'Sabila@gmail.com', 'Sabila', NULL, 'default.svg', '$2y$10$SIhc9SF1Xvr2jhrwTyK3LenomJOAcbZC.VNdgkmexdvKgHGyYsmuK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-10-10 02:06:35', '2023-10-10 02:06:35', NULL),
(10, 'Nurhikam@gmail.com', 'Nurhikam', NULL, 'default.svg', '$2y$10$C0SgWmpfHoDlxoZOdQxbX.C2o8r1NI2u94LPvh6Ag6Yz0M.L85IIi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-10-10 02:06:58', '2023-10-10 02:06:58', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
