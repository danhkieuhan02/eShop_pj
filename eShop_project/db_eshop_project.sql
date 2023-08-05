-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 06:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
(3, 'Vans', '2023-06-22 09:31:37', '2023-06-23 04:23:17'),
(4, 'Jordan', '2023-06-22 09:31:43', '2023-06-23 04:23:11'),
(5, 'Adidas', '2023-06-25 08:38:09', '2023-06-25 08:38:09'),
(6, 'New Balance', '2023-06-25 08:38:19', '2023-06-25 08:38:19'),
(7, 'Bitis Hunter', '2023-06-25 08:55:04', '2023-06-25 08:55:04'),
(8, 'Converse', '2023-06-25 08:55:30', '2023-06-25 08:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Hanie', 'admin1@gmail.com', 'abc', '2023-08-03 08:06:05', '2023-08-03 08:06:05'),
(3, 'Han', 'test3@gmail.com', 'abc', '2023-08-03 08:12:48', '2023-08-03 08:12:48'),
(4, 'tin', 'test2@gmail.com', 'anh tin thich an tom', '2023-08-03 08:18:18', '2023-08-03 08:18:18'),
(5, 'test', 'dkh@gmail.com', 'test', '2023-08-03 08:36:10', '2023-08-03 08:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_14_093807_create_categories_table', 1),
(6, '2023_06_14_094133_create_products_table', 1),
(7, '2023_07_28_161514_create_contacts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prod_name` varchar(200) DEFAULT NULL,
  `price` decimal(20,0) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `cover_img` varchar(500) DEFAULT NULL,
  `id_maker` bigint(20) UNSIGNED DEFAULT NULL,
  `id_cat` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prod_name`, `price`, `content`, `cover_img`, `id_maker`, `id_cat`, `created_at`, `updated_at`) VALUES
(1, 'Nike Air Jordan 1 Blue', '3700', 'test', '/file/TGJgeqaMLkMcoAyAigkOTdzU9k4dP7DP1l0RgXwD.jpg', NULL, 4, '2023-06-24 02:59:23', '2023-06-28 05:18:43'),
(2, 'Adidas Superstar', '2000', 'test', '/file/SaFc936P9F9vpxWFpBeagziQern8jbL1c4WXrolY.jpg', NULL, 5, '2023-06-25 08:38:01', '2023-06-28 05:18:33'),
(3, 'Adidas Originals Milano OG', '3000', 'test', '/file/Lg2MFEG0TmNth34hothJUaneXiMZyZHRNGTdAMhZ.jpg', NULL, 5, '2023-06-25 08:39:49', '2023-06-28 05:17:44'),
(4, 'Nike Air Jordan 4 Retro', '3700', 'test', '/file/UL0jVrCrOfNR6DxQUMYIfV3JEygYimmGuqNf4XaU.jpg', NULL, 4, '2023-06-25 08:40:24', '2023-06-25 08:40:50'),
(5, 'Nike Air Jordan 1 Mid Pink', '3700', 'test', '/file/E0klwcJJxCdItwIq6V0Lq44NX7dqkevP8WrGpKC6.jpg', NULL, 4, '2023-06-25 08:47:59', '2023-06-28 05:18:10'),
(6, 'New Balance 530', '3200', 'test', '/file/omjWrTXbqfIriNaIj5RjBD8eYwC2Jz33T4adGB2P.jpg', NULL, 6, '2023-06-25 08:50:24', '2023-06-28 05:18:20'),
(7, 'Nike Air Jordan 1 Mid Pink Black test', '32009', 'test3', '/file/ZOwIx3IEvvnQQ5EDYXo2mviKcblvILDW1jBe8vgv.jpg', NULL, 4, '2023-06-25 08:56:37', '2023-07-29 09:45:09'),
(9, 'Nike Air Jordan 1 Mid', '50000', 'test', '/file/1m8LLLmQB9nEKAMA7hPdussNeEcgO455Mg5uLdj1.jpg', NULL, 4, '2023-08-03 23:57:21', '2023-08-03 23:57:21'),
(10, 'Nike Air Jordan 1 Mid Pink Black', '50000', 'test1', '/file/qEzux7SpVV8QfSMRtd4xbtzIz6dVknVKjKofkZgV.jpg', NULL, 4, '2023-08-03 23:57:52', '2023-08-03 23:58:04'),
(11, 'Adidas Superstar', '500000', 'test1', '/file/CPwREj2KEZCDOFiBG0sXC82R4xi1zYvA3ATpbEF0.jpg', NULL, 4, '2023-08-03 23:59:00', '2023-08-03 23:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$RyWzGYDp5WBtoMKtFNHgu.ZkNAyU4L5jb/CyngJUtiXT1UCmm9pEK', NULL, '2023-06-22 08:53:11', '2023-06-28 10:05:36'),
(2, 'Admin', 'admin2@gmail.com', NULL, '$2y$10$4rEQlCxx3pfwrVH0hvtZa.KVHREMIcu5LOa/3F/dZ2PDrDfwcOusG', NULL, '2023-06-24 07:16:43', '2023-06-24 07:16:43'),
(3, 'Admin3', 'admin3@gmail.com', NULL, '$2y$10$ErcimHmb5q/8WviXL79jt.R3q1f8UigUZ70NAN2WOXSbByGZw70xe', NULL, '2023-06-25 10:00:13', '2023-06-25 10:00:13'),
(4, 'Admin4', 'admin4@gmail.com', NULL, '$2y$10$XoFMAXCAdIp6fGyHlE2ch.CGpztEpact19TxqN9PWIQFH8V4Y0ana', NULL, '2023-06-25 10:00:46', '2023-06-25 10:00:46'),
(5, 'test1', 'test1@gmail.com', NULL, '$2y$10$RAZOSUqCGuEV31GEyccmNOlKrRE/tZoboqRG2thhnXuQ8uvH/wHx.', NULL, '2023-06-25 10:06:24', '2023-06-25 10:06:24'),
(6, 'test1', 'test2@gmail.com', NULL, '$2y$10$yhe5e2oNkVgB0NG2suWbUeef.tjNWyDdVWlaTbzIQ8JUpun5wDVUC', NULL, '2023-07-25 23:44:08', '2023-07-25 23:44:08'),
(7, 'test3', 'test3@gmail.com', NULL, '$2y$10$sNJhxTjsDxKvjRWf/BDWJucADTY6Tzjen7Mi8CUgQYB7uZrvadl8q', NULL, '2023-07-29 09:35:28', '2023-07-29 09:46:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_products_id_maker` (`id_maker`),
  ADD KEY `idx_products_id_cat` (`id_cat`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
