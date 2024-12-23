-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 05:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trekker`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `duration` int(11) NOT NULL,
  `bookingdate` date DEFAULT NULL,
  `traveldate` date DEFAULT NULL,
  `totalcost` decimal(10,2) NOT NULL,
  `paymentstatus` text NOT NULL DEFAULT 'paid,pending',
  `travelernameage` varchar(255) NOT NULL,
  `phones` varchar(255) NOT NULL,
  `tourid` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `detail`, `duration`, `bookingdate`, `traveldate`, `totalcost`, `paymentstatus`, `travelernameage`, `phones`, `tourid`, `created_at`, `updated_at`) VALUES
(2, '2', '11221', 0, '0001-01-25', NULL, 0.00, 'paid', 'RAG 34', '666', 2, '2022-07-25 14:53:55', '2024-12-22 22:22:42'),
(5, '5', 'asfad', 0, NULL, NULL, 0.00, 'paid,pending', 'jjjj 44', 'd777', 5, '2024-12-21 02:56:15', '2024-12-22 22:23:45'),
(6, 'soma', 'details', 5, '0001-01-24', '0005-05-25', 60000.00, 'pending', 'jjjj 44', '456666,7777', 4, '2024-12-22 06:29:47', '2024-12-22 22:44:35'),
(7, 'kumar sreyas', 'DTAILS', 7, '0001-01-24', '0005-05-25', 60000.00, 'paid', 'VISAK 55', '666', 4, '2024-12-22 06:30:43', '2024-12-22 22:44:04'),
(8, '4', 'DTAIL', 6, '0001-01-25', '0001-05-25', 7777.00, 'paid', 'RAO-55', '88888', 4, '2024-12-22 22:11:29', '2024-12-22 22:11:51'),
(9, 'RAGHU', 'RTT', 55, '0001-01-25', '0005-05-25', 6666.00, 'paid', 'jjjj 44', '88888', 4, '2024-12-22 22:26:39', '2024-12-22 22:26:39'),
(10, 'RAGHU', 'DRA', 55, NULL, NULL, 6666.00, 'paid', 'VISAK 55', '456666,7777', NULL, '2024-12-22 22:35:41', '2024-12-22 22:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(11, 'SANFRANCE', 'SF DTAILS', '2024-12-21 07:30:15', '2024-12-21 16:40:25'),
(12, 'LOS ANGELES', 'LA DTAILS', '2024-12-21 07:30:17', '2024-12-21 16:40:04'),
(13, 'MOSCOWIKA', 'MOSCOW DTAILSHAH', '2024-12-21 07:30:18', '2024-12-21 16:46:31'),
(14, 'SARIKAGA TIGER RESERVE', 'SARIKA DTAILS', '2024-12-21 16:40:57', '2024-12-21 16:40:57'),
(15, 'ICELAND', 'ICEDTAILS', '2024-12-21 16:44:31', '2024-12-21 16:44:31'),
(16, 'GREENLANG', 'ICE BEARS POLAR BEARS', '2024-12-21 16:56:26', '2024-12-21 16:56:26'),
(17, 'CHAPAN KOREA CHINA', 'DTAILS OF THAT COUNTRIES SHORTLY', '2024-12-21 23:31:20', '2024-12-21 23:32:11'),
(18, 'TIMPLE LIONS RESERVE', 'GERMANY RUSSIA', '2024-12-22 06:38:32', '2024-12-22 06:38:32');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `duration` int(11) NOT NULL,
  `destinationid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `name`, `price`, `detail`, `duration`, `destinationid`, `created_at`, `updated_at`) VALUES
(2, '2123', '3331', '11221', 0, 11, '2022-07-25 14:53:55', '2022-07-25 14:54:09'),
(3, 'prod1', '9999', 'destination', 0, 12, '2022-07-25 15:02:18', '2024-12-21 02:17:58'),
(4, 'ABUDOBY PACKS', '7777', 'WASHERIES FLYING SKYING TREKING', 77, 11, '2024-12-21 02:38:37', '2024-12-22 21:58:19'),
(5, 'PACKAGE ROMAN', '1,00000', 'ROME DELPHI ORACLE\r\nMTS TREKKING', 5, 12, '2024-12-21 02:56:15', '2024-12-22 21:56:26'),
(6, 'DUBAI PKG', '411', 'FLYING', 7, 12, '2024-12-22 05:04:24', '2024-12-22 21:58:02'),
(7, 'GOA PKG', '1000', 'GOA FLY SLIDING\r\n\r\nTREKKING MTS', 5, 12, '2024-12-22 05:09:38', '2024-12-22 21:57:50'),
(8, 'RAJASTHAN PKG', '555', 'DTAILS SKY FLYING', 77, 11, '2024-12-22 05:52:21', '2024-12-22 21:57:37');

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$xf9AWqjUta78rXRNzlpqJOZM3C.myaIkkAy7rDIi1Y7DR4xcVCw7i', NULL, '2022-07-26 13:22:32', '2022-07-26 13:22:32'),
(2, 'user1', 'user1@gmail.com', NULL, '$2y$10$hNdrS/rACmduF.DbQLRihOW5pB5vxoeFS.IMpON6M9dkv4EHBNutO', NULL, '2022-07-26 16:31:20', '2022-07-26 16:31:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tourid` (`tourid`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKDID` (`destinationid`) USING BTREE;

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`tourid`) REFERENCES `tours` (`id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`tourid`) REFERENCES `tours` (`id`);

--
-- Constraints for table `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_ibfk_1` FOREIGN KEY (`destinationid`) REFERENCES `destinations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
