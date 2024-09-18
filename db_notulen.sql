-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 11:34 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_notulen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `KdAdmin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NamaAdmin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoTlp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jabatan` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `KdAdmin`, `NamaAdmin`, `Email`, `NoTlp`, `Jabatan`, `created_at`, `updated_at`) VALUES
(4, 'KA001', 'Aminah Tri Rahayu', 'aminahtri123@gmail.com', '089629428453', 5, '2019-08-06 22:06:36', '2019-08-07 23:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `KdAnggota` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NamaAnggota` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id`, `KdAnggota`, `NamaAnggota`, `Status`, `created_at`, `updated_at`) VALUES
(2, 'KM001', 'Najma Assyifa Khairunnisa', 2, '2019-08-06 02:53:25', '2019-08-07 21:44:51'),
(7, 'KM002', 'Yunisah Yulianingsih', 2, '2019-08-06 22:02:50', '2019-08-06 22:03:45'),
(8, 'KM003', 'Sipa Siti Sarah', 2, '2019-08-06 22:03:09', '2019-08-06 22:03:54'),
(9, 'KA004', 'Indah Shalsa Putri', 2, '2019-08-06 22:04:12', '2019-08-06 22:04:12'),
(10, 'KA005', 'Linda Cahya Permata Sari', 2, '2019-08-06 22:04:34', '2019-08-06 22:04:34'),
(11, 'KA006', 'Komala Sari', 2, '2019-08-06 22:04:48', '2019-08-06 22:04:48'),
(12, 'KM007', 'Siswa/i Magang', 2, '2019-08-14 23:50:57', '2019-08-14 23:50:57'),
(13, 'KM008', 'Karyawan', 1, '2019-08-14 23:51:15', '2019-08-14 23:51:15'),
(16, 'gwgfaw', 'gasga', 1, '2019-08-21 21:46:21', '2019-08-21 21:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `historys`
--

CREATE TABLE `historys` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_historydone` int(10) UNSIGNED NOT NULL,
  `id_historyprob` int(10) UNSIGNED NOT NULL,
  `id_historytodo` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jabatans`
--

CREATE TABLE `jabatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `Jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatans`
--

INSERT INTO `jabatans` (`id`, `Jabatan`, `created_at`, `updated_at`) VALUES
(1, 'CEO', NULL, NULL),
(2, 'CTO', NULL, NULL),
(3, 'Front End', NULL, NULL),
(4, 'Developer', NULL, NULL),
(5, 'Bendahara', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id` int(10) UNSIGNED NOT NULL,
  `KdLaporan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TglLaporan` date NOT NULL,
  `KdAnggota` int(10) UNSIGNED NOT NULL,
  `HistoryDone` int(10) DEFAULT NULL,
  `HistoryProblem` int(10) DEFAULT NULL,
  `HistoryTodo` int(10) DEFAULT NULL,
  `done` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `todo` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KdAdmin` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporans`
--

INSERT INTO `laporans` (`id`, `KdLaporan`, `TglLaporan`, `KdAnggota`, `HistoryDone`, `HistoryProblem`, `HistoryTodo`, `done`, `problem`, `todo`, `KdAdmin`, `created_at`, `updated_at`) VALUES
(15, 'KL001', '2019-08-22', 2, NULL, NULL, NULL, 'Yang sudah dikerjakan: merancang database', 'Kendala: -', 'Yang akan dikerjakan: membuat database', 4, '2019-08-21 21:43:10', '2019-08-21 21:43:10'),
(30, 'KL002', '2019-08-22', 10, 15, 15, 15, 'Yang sudah dikerjakan: ert', 'Kendala: et', 'Yang akan dikerjakan: ed', 4, '2019-08-22 01:14:22', '2019-08-22 01:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_08_01_031145_create_table_rapat', 1),
(8, '2019_08_05_062730_create_table_rapat', 3),
(9, '2019_08_05_064157_create_table_jabatan', 3),
(10, '2019_08_05_064217_create_table_admin', 3),
(11, '2019_08_05_064240_create_table_anggota', 3),
(12, '2019_08_05_064443_create_table_level', 3),
(27, '2014_10_12_100000_create_password_resets_table', 4),
(28, '2019_08_05_173942_create_table_jabatan', 5),
(29, '2019_08_05_174006_create_table_status', 5),
(31, '2019_08_05_173928_create_table_anggota', 6),
(32, '2019_08_01_033619_create_table_notulen', 7),
(33, '2019_08_09_035824_create_table_laporan', 8),
(34, '2019_08_05_173912_create_table_admin', 9),
(36, '2014_10_12_000000_create_users_table', 10),
(37, '2019_08_16_073137_create_table_peserta', 11),
(38, '2019_08_22_073540_create_table_history', 12);

-- --------------------------------------------------------

--
-- Table structure for table `notulens`
--

CREATE TABLE `notulens` (
  `id` int(10) UNSIGNED NOT NULL,
  `KdNotulen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JudulNotulen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TglNotulen` date NOT NULL,
  `KdAnggota` int(10) UNSIGNED NOT NULL,
  `IsiNotulen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KdAdmin` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notulens`
--

INSERT INTO `notulens` (`id`, `KdNotulen`, `JudulNotulen`, `TglNotulen`, `KdAnggota`, `IsiNotulen`, `KdAdmin`, `created_at`, `updated_at`) VALUES
(5, 'KN003', 'Rapat Internal', '2019-08-13', 9, 'sdsdf', 4, '2019-08-13 07:56:37', '2019-08-14 00:26:15'),
(6, 'KN004', 'Rapat biasa', '2019-12-31', 10, 'jihoi', 4, '2019-08-13 07:59:30', '2019-08-13 07:59:30'),
(7, 'KN005', 'Rapat Internal', '2019-11-25', 8, 'bgui', 4, '2019-08-13 08:01:16', '2019-08-13 08:01:16'),
(8, 'KN006', 'Rapat biasa', '2018-11-29', 2, 'hbhih', 4, '2019-08-13 08:02:49', '2019-08-13 08:02:49'),
(10, 'KN008', 'Rapat Internal', '2019-11-28', 9, ',m kmlmkm', 4, '2019-08-13 08:15:07', '2019-08-13 08:15:07'),
(12, 'KN0010', 'Rapat', '2019-10-29', 7, 'jnjknl', 4, '2019-08-13 08:18:20', '2019-08-13 08:18:20'),
(13, 'KN011', 'Rapat', '2019-09-28', 11, 'jnjhil', 4, '2019-08-13 08:19:13', '2019-08-13 08:19:13'),
(14, 'KN0012', 'Rapat biasa', '2019-12-31', 9, 'n j', 4, '2019-08-13 08:20:29', '2019-08-13 08:20:29'),
(15, 'KN0060', 'Rapat Internal', '2019-08-13', 9, 'nbjh', 4, '2019-08-13 09:49:25', '2019-08-13 09:49:25'),
(16, 'KN0020', 'Rapat', '2019-08-27', 8, 'mkmk', 4, '2019-08-13 10:25:24', '2019-08-13 10:25:24'),
(17, 'KN0021', 'Rapat Internal', '2019-09-28', 9, 'bj', 4, '2019-08-13 10:26:02', '2019-08-13 10:26:02'),
(18, 'KN002', 'Rapat', '2019-08-14', 8, 'vsvs', 4, '2019-08-13 20:01:29', '2019-08-13 20:01:29'),
(21, 'KN0026', 'Rapat biasa', '2019-08-14', 2, 'jgku', 4, '2019-08-13 22:02:06', '2019-08-14 08:27:15'),
(22, 'KN00208', 'Rapat biasa', '2019-08-15', 7, 'jkb', 4, '2019-08-14 12:12:25', '2019-08-14 12:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('najmaassyifa574@gmail.com', '$2y$10$7yJwygbyszrd9DpcuQSjiuWIdsE.51nYwAIajEi/dQzwPX3G7BNCe', '2019-08-14 11:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `pesertas`
--

CREATE TABLE `pesertas` (
  `id` int(10) UNSIGNED NOT NULL,
  `anggota_id` int(10) UNSIGNED NOT NULL,
  `laporan_id` int(10) UNSIGNED NOT NULL,
  `notulen_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuss`
--

CREATE TABLE `statuss` (
  `id` int(10) UNSIGNED NOT NULL,
  `Status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuss`
--

INSERT INTO `statuss` (`id`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'Karyawan', NULL, NULL),
(2, 'Magang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Najma', 'najmaassyifa574@gmail.com', '$2y$10$LojzhMIBHjHjh2ld9qNDPOb9CLPnUQRXtEhh1/YzJgfvkE3ju86SO', '6u0PeTCQZ6u7rCp4d1zt0MucUtM8jmgjw3BliYrohm6Ql1v9tkCYAHrorGpf', '2019-08-09 00:10:39', '2019-08-09 00:10:39'),
(2, 'franco', 'franco@gmail.com', '$2y$10$2I1/PZ5Xvw628IgWcffwj.mJvKgMx.9cJA3ssOj2YczW.Q7kl79Qy', 'kjYiagKBaQkAn9p9FTa23VKRMsfYwQycrVFvc7FNGonyzXigSbdmhv2qkeiH', '2019-08-11 20:17:03', '2019-08-11 20:17:03'),
(3, 'zilong', 'zilong@gmail.com', '$2y$10$jAySKqfwzCzKxcWFEwrr7e.27WQDgkQjGO8mHeuMlqL3FfmLjTu6.', 'XqXEBfCnAi0UOSivZjpneui3AHVikMDggR3Q1bM4WyCaWNvhwvrLVgglV8P7', '2019-08-12 00:28:00', '2019-08-12 00:28:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `admins_jabatan_unique` (`Jabatan`) USING BTREE,
  ADD KEY `Jabatan` (`Jabatan`),
  ADD KEY `Jabatan_2` (`Jabatan`),
  ADD KEY `KdAdmin` (`KdAdmin`) USING BTREE;

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `KdAnggota` (`KdAnggota`),
  ADD KEY `anggotas_status_unique` (`Status`) USING BTREE;

--
-- Indexes for table `historys`
--
ALTER TABLE `historys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historys_id_historyprob_foreign` (`id_historyprob`),
  ADD KEY `historys_id_historytodo_foreign` (`id_historytodo`),
  ADD KEY `laporans_HistoryDone_foreign` (`id_historydone`);

--
-- Indexes for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `KdLaporan` (`KdLaporan`),
  ADD UNIQUE KEY `HistoryProblem` (`HistoryProblem`),
  ADD UNIQUE KEY `HistoryTodo` (`HistoryTodo`),
  ADD KEY `laporans_kdadmin_unique` (`KdAdmin`) USING BTREE,
  ADD KEY `laporans_kdanggota_unique` (`KdAnggota`) USING BTREE,
  ADD KEY `HistoryDone` (`HistoryDone`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notulens`
--
ALTER TABLE `notulens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `KdNotulen` (`KdNotulen`),
  ADD KEY `notulens_kdanggota_unique` (`KdAnggota`) USING BTREE,
  ADD KEY `notulens_kdadmin_unique` (`KdAdmin`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pesertas`
--
ALTER TABLE `pesertas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pesertas_anggota_id_unique` (`anggota_id`),
  ADD UNIQUE KEY `pesertas_laporan_id_unique` (`laporan_id`),
  ADD UNIQUE KEY `pesertas_notulen_id_unique` (`notulen_id`);

--
-- Indexes for table `statuss`
--
ALTER TABLE `statuss`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `historys`
--
ALTER TABLE `historys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `notulens`
--
ALTER TABLE `notulens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pesertas`
--
ALTER TABLE `pesertas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuss`
--
ALTER TABLE `statuss`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_jabatan_foreign` FOREIGN KEY (`Jabatan`) REFERENCES `jabatans` (`id`);

--
-- Constraints for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD CONSTRAINT `anggotas_status_foreign` FOREIGN KEY (`Status`) REFERENCES `statuss` (`id`);

--
-- Constraints for table `historys`
--
ALTER TABLE `historys`
  ADD CONSTRAINT `historys_id_historydone_foreign` FOREIGN KEY (`id_historydone`) REFERENCES `laporans` (`id`),
  ADD CONSTRAINT `historys_id_historyprob_foreign` FOREIGN KEY (`id_historyprob`) REFERENCES `laporans` (`id`),
  ADD CONSTRAINT `historys_id_historytodo_foreign` FOREIGN KEY (`id_historytodo`) REFERENCES `laporans` (`id`),
  ADD CONSTRAINT `laporans_HistoryDone_foreign` FOREIGN KEY (`id_historydone`) REFERENCES `laporans` (`id`);

--
-- Constraints for table `laporans`
--
ALTER TABLE `laporans`
  ADD CONSTRAINT `laporans_kdadmin_foreign` FOREIGN KEY (`KdAdmin`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `laporans_kdanggota_foreign` FOREIGN KEY (`KdAnggota`) REFERENCES `anggotas` (`id`);

--
-- Constraints for table `notulens`
--
ALTER TABLE `notulens`
  ADD CONSTRAINT `notulens_kdadmin_foreign` FOREIGN KEY (`KdAdmin`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `notulens_kdanggota_foreign` FOREIGN KEY (`KdAnggota`) REFERENCES `anggotas` (`id`);

--
-- Constraints for table `pesertas`
--
ALTER TABLE `pesertas`
  ADD CONSTRAINT `pesertas_anggota_id_foreign` FOREIGN KEY (`anggota_id`) REFERENCES `anggotas` (`id`),
  ADD CONSTRAINT `pesertas_laporan_id_foreign` FOREIGN KEY (`laporan_id`) REFERENCES `laporans` (`id`),
  ADD CONSTRAINT `pesertas_notulen_id_foreign` FOREIGN KEY (`notulen_id`) REFERENCES `notulens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
