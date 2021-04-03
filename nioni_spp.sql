-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2021 at 10:27 PM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nioni_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan_nioni`
--

CREATE TABLE `jurusan_nioni` (
  `id_jurusan` int UNSIGNED NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan_nioni`
--

INSERT INTO `jurusan_nioni` (`id_jurusan`, `jurusan`, `created_at`, `updated_at`) VALUES
(2, 'Mekatronika', '2021-03-19 07:04:58', '2021-03-19 07:04:58'),
(4, 'Multimedia', '2021-03-21 08:07:26', '2021-03-21 08:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_nioni`
--

CREATE TABLE `kelas_nioni` (
  `id_kelas` int UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kelas` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vocational_id_jurusan` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas_nioni`
--

INSERT INTO `kelas_nioni` (`id_kelas`, `kelas`, `nama_kelas`, `vocational_id_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'X', 'A', 2, '2021-03-19 07:05:14', '2021-03-19 07:05:14'),
(3, 'XI', 'C', 2, '2021-03-19 07:38:54', '2021-03-19 07:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2021_03_11_040045_create_petugas_nioni_table', 1),
(8, '2021_03_11_040550_create_spp_nioni_table', 1),
(9, '2021_03_11_040642_create_jurusan_nioni_table', 1),
(10, '2021_03_11_040727_create_kelas_nioni_table', 1),
(11, '2021_03_11_040845_create_siswa_nioni_table', 1),
(12, '2021_03_11_040925_create_pembayaran_nioni_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_nioni`
--

CREATE TABLE `pembayaran_nioni` (
  `id_pembayaran` int UNSIGNED NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_dibayar` int NOT NULL,
  `bulan_sudah_bayar` int NOT NULL DEFAULT '0',
  `sisa_bulan_bayar` int NOT NULL DEFAULT '12',
  `tahun_dibayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_bayar` double NOT NULL,
  `officers_id_petugas` int UNSIGNED NOT NULL,
  `students_id_siswa` int UNSIGNED NOT NULL,
  `tuition_id_spp` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran_nioni`
--

INSERT INTO `pembayaran_nioni` (`id_pembayaran`, `tgl_bayar`, `bulan_dibayar`, `bulan_sudah_bayar`, `sisa_bulan_bayar`, `tahun_dibayar`, `jumlah_bayar`, `officers_id_petugas`, `students_id_siswa`, `tuition_id_spp`, `created_at`, `updated_at`) VALUES
(63, '2021-04-03', 12, 12, 0, '2016', 2400000, 1, 2, 4, '2021-04-03 07:18:04', '2021-04-03 07:18:04'),
(64, '2021-04-03', 12, 12, 0, '2017', 2400000, 1, 2, 4, '2021-04-03 07:18:22', '2021-04-03 07:18:22'),
(65, '2021-04-03', 12, 12, 0, '2018', 2400000, 1, 2, 4, '2021-04-03 07:18:33', '2021-04-03 07:18:33'),
(66, '2021-04-03', 11, 11, 1, '2016', 2200000, 1, 6, 4, '2021-04-03 07:39:03', '2021-04-03 07:39:03'),
(67, '2021-04-03', 1, 12, 0, '2016', 200000, 1, 6, 4, '2021-04-03 07:57:54', '2021-04-03 07:57:54'),
(68, '2021-04-03', 2, 2, 10, '2017', 400000, 1, 6, 4, '2021-04-03 07:58:18', '2021-04-03 07:58:18'),
(70, '2021-04-03', 10, 12, 0, '2017', 2000000, 1, 6, 4, '2021-04-03 08:22:38', '2021-04-03 08:22:38'),
(71, '2021-04-03', 12, 12, 0, '2018', 2400000, 1, 6, 4, '2021-04-03 08:27:17', '2021-04-03 08:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_nioni`
--

CREATE TABLE `petugas_nioni` (
  `id_petugas` int UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas_nioni`
--

INSERT INTO `petugas_nioni` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin kan', '$2y$10$eAXAyzYp2PhdvgLUF96BQe6hSpcRk.ukareQbUYqwmRzcLVGWmjle', 'super', 'admin', NULL, '2021-03-18 02:33:48', '2021-03-19 07:10:11'),
(3, 'officer', '$2y$10$M7tQPGuKLeU4V99OS3UaD.57LyjhcAol4V5f9o5E2NMxixXljXN7W', 'officer', 'officer', NULL, '2021-03-19 07:10:32', '2021-03-19 07:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_nioni`
--

CREATE TABLE `siswa_nioni` (
  `id_siswa` int UNSIGNED NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id_kelas` int UNSIGNED NOT NULL,
  `tuition_id_spp` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa_nioni`
--

INSERT INTO `siswa_nioni` (`id_siswa`, `nisn`, `password`, `remember_token`, `nis`, `nama`, `no_telp`, `alamat`, `kelas_id_kelas`, `tuition_id_spp`, `created_at`, `updated_at`) VALUES
(2, '12345', '$2y$10$eAXAyzYp2PhdvgLUF96BQe6hSpcRk.ukareQbUYqwmRzcLVGWmjle', NULL, '123', 'Nioni Artha Putri', '087782044815', 'Jl Melong 1 No 11', 1, 4, '2021-03-20 08:48:53', '2021-03-25 10:51:33'),
(3, '0234985', NULL, NULL, '2344532', 'Fanni Febriani', '08323422123', 'Permata', 1, 1, '2021-03-22 09:26:21', '2021-03-22 09:26:21'),
(4, '0001', NULL, NULL, '0001', 'Putri Damayanti', '08232324423', 'Address', 1, 1, '2021-03-28 08:29:17', '2021-03-28 08:29:17'),
(5, '0002', NULL, NULL, '0002', 'Sania Amelia', '087666567621', 'Address', 1, 4, '2021-03-29 00:03:06', '2021-03-29 00:03:06'),
(6, '00003', NULL, NULL, '00003', 'Shelvia', '866378643779', 'Address', 1, 4, '2021-03-29 20:27:59', '2021-03-29 20:27:59'),
(7, '0004', NULL, NULL, '0004', 'Nopi Suci', '08765678654', 'Address', 3, 1, '2021-03-30 08:14:09', '2021-03-30 08:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `spp_nioni`
--

CREATE TABLE `spp_nioni` (
  `id_spp` int UNSIGNED NOT NULL,
  `tahun` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spp_nioni`
--

INSERT INTO `spp_nioni` (`id_spp`, `tahun`, `nominal`, `created_at`, `updated_at`) VALUES
(1, '2020', 200000, '2021-03-19 07:08:57', '2021-03-25 07:27:46'),
(4, '2016', 200000, '2021-03-25 10:47:40', '2021-03-25 10:47:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan_nioni`
--
ALTER TABLE `jurusan_nioni`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas_nioni`
--
ALTER TABLE `kelas_nioni`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `kelas_nioni_vocational_id_jurusan_foreign` (`vocational_id_jurusan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran_nioni`
--
ALTER TABLE `pembayaran_nioni`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `pembayaran_nioni_officers_id_petugas_foreign` (`officers_id_petugas`),
  ADD KEY `pembayaran_nioni_students_id_siswa_foreign` (`students_id_siswa`),
  ADD KEY `pembayaran_nioni_tuition_id_spp_foreign` (`tuition_id_spp`);

--
-- Indexes for table `petugas_nioni`
--
ALTER TABLE `petugas_nioni`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa_nioni`
--
ALTER TABLE `siswa_nioni`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `siswa_nioni_nisn_unique` (`nisn`),
  ADD KEY `siswa_nioni_kelas_id_kelas_foreign` (`kelas_id_kelas`),
  ADD KEY `siswa_nioni_tuition_id_spp_foreign` (`tuition_id_spp`);

--
-- Indexes for table `spp_nioni`
--
ALTER TABLE `spp_nioni`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan_nioni`
--
ALTER TABLE `jurusan_nioni`
  MODIFY `id_jurusan` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas_nioni`
--
ALTER TABLE `kelas_nioni`
  MODIFY `id_kelas` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pembayaran_nioni`
--
ALTER TABLE `pembayaran_nioni`
  MODIFY `id_pembayaran` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `petugas_nioni`
--
ALTER TABLE `petugas_nioni`
  MODIFY `id_petugas` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa_nioni`
--
ALTER TABLE `siswa_nioni`
  MODIFY `id_siswa` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `spp_nioni`
--
ALTER TABLE `spp_nioni`
  MODIFY `id_spp` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas_nioni`
--
ALTER TABLE `kelas_nioni`
  ADD CONSTRAINT `kelas_nioni_vocational_id_jurusan_foreign` FOREIGN KEY (`vocational_id_jurusan`) REFERENCES `jurusan_nioni` (`id_jurusan`) ON DELETE CASCADE;

--
-- Constraints for table `pembayaran_nioni`
--
ALTER TABLE `pembayaran_nioni`
  ADD CONSTRAINT `pembayaran_nioni_officers_id_petugas_foreign` FOREIGN KEY (`officers_id_petugas`) REFERENCES `petugas_nioni` (`id_petugas`) ON DELETE CASCADE,
  ADD CONSTRAINT `pembayaran_nioni_students_id_siswa_foreign` FOREIGN KEY (`students_id_siswa`) REFERENCES `siswa_nioni` (`id_siswa`) ON DELETE CASCADE,
  ADD CONSTRAINT `pembayaran_nioni_tuition_id_spp_foreign` FOREIGN KEY (`tuition_id_spp`) REFERENCES `spp_nioni` (`id_spp`) ON DELETE CASCADE;

--
-- Constraints for table `siswa_nioni`
--
ALTER TABLE `siswa_nioni`
  ADD CONSTRAINT `siswa_nioni_kelas_id_kelas_foreign` FOREIGN KEY (`kelas_id_kelas`) REFERENCES `kelas_nioni` (`id_kelas`) ON DELETE CASCADE,
  ADD CONSTRAINT `siswa_nioni_tuition_id_spp_foreign` FOREIGN KEY (`tuition_id_spp`) REFERENCES `spp_nioni` (`id_spp`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
