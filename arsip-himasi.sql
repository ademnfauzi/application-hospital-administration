-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 01:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip-himasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `npm` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `id_divisi` bigint(20) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `periode` varchar(100) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `npm`, `email`, `phone`, `jabatan`, `id_divisi`, `image`, `periode`, `status`, `created_by_id`, `created_at`, `updated_at`, `updated_by_id`) VALUES
(12, 'Della Diniyati', 173112700650056, '', '', 'Ketua Himpunan', 1, 'default.png', '2020/2021', 'Tidak Aktif', 12, '2021-07-17 09:36:02', '2021-07-17 09:36:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `arsip_dokumen`
--

CREATE TABLE `arsip_dokumen` (
  `id_arsip_dokumen` bigint(20) UNSIGNED NOT NULL,
  `kode_dokumen` bigint(20) DEFAULT NULL,
  `nama_dokumen` varchar(100) NOT NULL,
  `id_proker` bigint(20) DEFAULT NULL,
  `id_divisi` bigint(20) NOT NULL,
  `periode` varchar(100) DEFAULT NULL,
  `status_dokumen` enum('Terverifikasi','Tidak Terverifikasi') NOT NULL,
  `file` varchar(100) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `arsip_pengurus`
--

CREATE TABLE `arsip_pengurus` (
  `id_arsip_anggota` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `npm` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `id_divisi` bigint(20) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `periode` varchar(100) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `arsip_pengurus`
--

INSERT INTO `arsip_pengurus` (`id_arsip_anggota`, `nama`, `npm`, `email`, `phone`, `jabatan`, `id_divisi`, `image`, `periode`, `status`, `created_by_id`, `created_at`, `updated_at`, `updated_by_id`) VALUES
(8, 'Della Diniyati', 173112700650056, '', '', 'Ketua Himpunan', 1, 'default.png', '2020/2021', 'Tidak Aktif', 12, '2021-07-17 09:36:02', '2021-07-17 09:36:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama`, `status`, `created_by_id`, `created_at`, `updated_at`, `updated_by_id`) VALUES
(1, 'Badan Pengurus Harian', 'Aktif', NULL, '2021-07-10 14:03:20', '2021-07-10 14:03:20', NULL),
(2, 'Penelitian Dan Pengembangan', 'Aktif', NULL, '2021-07-10 14:03:20', '2021-07-10 14:03:20', NULL),
(3, 'Minat Dan Bakat', 'Aktif', NULL, '2021-07-10 14:03:20', '2021-07-10 14:03:20', NULL),
(4, 'Media Kreatif', 'Aktif', NULL, '2021-07-10 14:03:20', '2021-07-10 14:03:20', NULL),
(5, 'Humas Internal', 'Aktif', NULL, '2021-07-10 14:03:20', '2021-07-10 14:03:20', NULL),
(6, 'Humas Eksternal', 'Aktif', NULL, '2021-07-10 14:03:20', '2021-07-10 14:03:20', NULL),
(7, 'Dana Usaha', 'Aktif', NULL, '2021-07-10 14:03:20', '2021-07-10 14:03:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` bigint(20) UNSIGNED NOT NULL,
  `kode_dokumen` bigint(20) DEFAULT NULL,
  `nama_dokumen` varchar(100) NOT NULL,
  `id_proker` bigint(20) DEFAULT NULL,
  `id_divisi` bigint(20) NOT NULL,
  `periode` varchar(100) DEFAULT NULL,
  `status_dokumen` enum('Terverifikasi','Tidak Terverifikasi') NOT NULL,
  `keterangan` text DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `kode_dokumen`, `nama_dokumen`, `id_proker`, `id_divisi`, `periode`, `status_dokumen`, `keterangan`, `file`, `created_by_id`, `created_at`, `updated_at`, `updated_by_id`) VALUES
(17, 4922197, 'Webinar & Workshop', 6, 5, '2021/2022', 'Terverifikasi', '', 'Diawanti_183112700650030 kulon 12 olahraga R.03.pdf', 12, '0000-00-00 00:00:00', '2021-07-17 09:15:05', 12);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` bigint(20) UNSIGNED NOT NULL,
  `id_dokumen` bigint(20) NOT NULL,
  `id_divisi` bigint(20) NOT NULL,
  `id_proker` bigint(20) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `keterangan` text NOT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-05-23-132051', 'App\\Database\\Migrations\\User', 'default', 'App', 1625719061, 1),
(2, '2021-05-23-132100', 'App\\Database\\Migrations\\Anggota', 'default', 'App', 1625719061, 1),
(3, '2021-05-23-132107', 'App\\Database\\Migrations\\Divisi', 'default', 'App', 1625719061, 1),
(4, '2021-05-23-132112', 'App\\Database\\Migrations\\Proker', 'default', 'App', 1625719061, 1),
(5, '2021-05-23-132719', 'App\\Database\\Migrations\\Laporan', 'default', 'App', 1625719061, 1),
(6, '2021-05-23-132818', 'App\\Database\\Migrations\\Arsip', 'default', 'App', 1625719061, 1),
(7, '2021-05-23-132951', 'App\\Database\\Migrations\\Dokumen', 'default', 'App', 1625719061, 1),
(8, '2021-05-25-131920', 'App\\Database\\Migrations\\ArsipDokumen', 'default', 'App', 1625719061, 1);

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id_proker` bigint(20) UNSIGNED NOT NULL,
  `kode_kegiatan` bigint(20) DEFAULT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `id_divisi` bigint(20) NOT NULL,
  `periode` varchar(100) DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `keterangan` text DEFAULT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id_proker`, `kode_kegiatan`, `nama_kegiatan`, `id_divisi`, `periode`, `status`, `keterangan`, `created_by_id`, `created_at`, `updated_at`, `updated_by_id`) VALUES
(6, 4460265, 'Webinar & Workshop', 5, '2021/2022', 'Aktif', '', 12, '2021-07-16 06:34:35', '2021-07-16 06:34:35', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `kode_user` bigint(20) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('Admin','BPH','User') NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `created_by_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `kode_user`, `username`, `nama`, `email`, `password`, `level`, `status`, `created_by_id`, `created_at`, `updated_at`, `updated_by_id`) VALUES
(12, 2936707, 'admin', 'admin', 'ademuhammadnurfauzi@ymail.com', '$2y$10$IJSd33aMqrWG.HVHDlCcIOzCUFPtssnM6K.Wdg9kXr6mG1vHoodXC', 'Admin', 'Aktif', 10, '2021-07-13 07:37:41', '2021-07-17 09:14:16', 12),
(13, 8715567, 'bph', 'bph', 'bph@gmail.com', '$2y$10$JM.4vXJUJ/0zNStOhcSXvOAmCYNGXK9TXA0K912Q95lw350vfLS8C', 'BPH', 'Aktif', 12, '2021-07-16 06:54:51', '2021-07-16 06:54:51', NULL),
(14, 9252728, 'user', 'user', 'user@gmail.com', '$2y$10$1qexp.qjS.mLtTS4yD.c/Otly43h/u9BN0QKL7OkfJDSK6Zq98RHm', 'User', 'Aktif', 12, '2021-07-16 07:32:20', '2021-07-16 07:32:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `arsip_dokumen`
--
ALTER TABLE `arsip_dokumen`
  ADD PRIMARY KEY (`id_arsip_dokumen`);

--
-- Indexes for table `arsip_pengurus`
--
ALTER TABLE `arsip_pengurus`
  ADD PRIMARY KEY (`id_arsip_anggota`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id_proker`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `arsip_dokumen`
--
ALTER TABLE `arsip_dokumen`
  MODIFY `id_arsip_dokumen` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `arsip_pengurus`
--
ALTER TABLE `arsip_pengurus`
  MODIFY `id_arsip_anggota` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id_proker` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
