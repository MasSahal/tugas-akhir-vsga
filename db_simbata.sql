-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2023 at 04:24 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simbata`
--

-- --------------------------------------------------------

--
-- Table structure for table `ms_lomba`
--

CREATE TABLE `ms_lomba` (
  `id_lomba` int NOT NULL,
  `nama_lomba` varchar(100) NOT NULL,
  `tgl_lomba` text NOT NULL,
  `hadiah` text NOT NULL,
  `detail` text NOT NULL,
  `aturan` text NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'image.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `ms_lomba`
--

INSERT INTO `ms_lomba` (`id_lomba`, `nama_lomba`, `tgl_lomba`, `hadiah`, `detail`, `aturan`, `gambar`) VALUES
(1, 'Badminton', '', '', 'Ada', 'belum', 'image.jpg'),
(4, 'Culpa exercitation o', '', '', 'Sit ut et elit con', 'Ut excepturi id tota', '64c7370f332f2.png'),
(5, 'Lomba Baca', '', '', 'Lorem aut accusantiu', 'Lorem aut accusantiu', '64c739e9f3219.jpg'),
(6, 'Minton', '2023-07-21', 'Emas 2 Kilo', 'Adawedwew', 'fwefwefwefwefew', '64c73fea5c894.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ms_select_lomba`
--

CREATE TABLE `ms_select_lomba` (
  `id` int NOT NULL,
  `kode` varchar(30) NOT NULL,
  `id_lomba` int NOT NULL,
  `id_user` int NOT NULL,
  `ket` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `ms_select_lomba`
--

INSERT INTO `ms_select_lomba` (`id`, `kode`, `id_lomba`, `id_user`, `ket`, `created_at`) VALUES
(6, '64C74558AD3DC', 1, 1, 'sw', '2023-07-31 12:23:36'),
(7, '64C7455D5FF52', 1, 1, 'ws', '2023-07-31 12:23:41'),
(8, '64C745800988D3.69258595', 1, 1, 'w', '2023-07-31 12:24:16'),
(9, '64C74590BE4BF', 1, 1, 'wdd', '2023-07-31 12:24:32'),
(10, 'SBTED6721', 1, 1, '', '2023-07-31 12:25:50'),
(11, 'SBT8B4B73', 1, 1, 'q', '2023-07-31 12:26:00'),
(12, 'SBTFBEBE34', 1, 1, '', '2023-07-31 12:26:19'),
(13, 'ST627BCBD9', 1, 1, '', '2023-07-31 12:27:03'),
(14, 'ST636EF9E5', 1, 1, '', '2023-07-31 12:27:18'),
(15, 'ST64DDA447', 1, 1, '', '2023-07-31 12:27:41'),
(16, 'ST466DB3BC3', 1, 1, '', '2023-07-31 12:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `ms_users`
--

CREATE TABLE `ms_users` (
  `id_user` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` text,
  `jk` varchar(20) NOT NULL,
  `role` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `ms_users`
--

INSERT INTO `ms_users` (`id_user`, `username`, `password`, `email`, `nama_lengkap`, `alamat`, `jk`, `role`) VALUES
(1, 'massahal', '12345', 'sapa@mail.com', 'Mas Sahal', NULL, 'L', 0),
(2, 'admin', '12345', 'cahya@mail.com', 'Administrator', NULL, 'L', 1),
(4, 'xygov', 'Pa$$w0rd!', 'vahidyq@mailinator.com', 'Temporibus non eu co', 'Excepteur consequatu', 'L', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_lomba`
--
ALTER TABLE `ms_lomba`
  ADD PRIMARY KEY (`id_lomba`);

--
-- Indexes for table `ms_select_lomba`
--
ALTER TABLE `ms_select_lomba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_users`
--
ALTER TABLE `ms_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ms_lomba`
--
ALTER TABLE `ms_lomba`
  MODIFY `id_lomba` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ms_select_lomba`
--
ALTER TABLE `ms_select_lomba`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ms_users`
--
ALTER TABLE `ms_users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
