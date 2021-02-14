-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2021 at 07:07 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `try_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bidang_studi` varchar(200) NOT NULL,
  `mata_pelajaran` varchar(200) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tanggal_lulus` varchar(100) NOT NULL,
  `keterangan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `id_user`, `bidang_studi`, `mata_pelajaran`, `nilai`, `tanggal_lulus`, `keterangan`) VALUES
(1, 2, 'Bidang studi 1', 'Mata Pelajaran 1', 9, '2021-02-04', 'hfghh'),
(2, 2, 'Bidang studi 3', 'Mata Pelajaran 3', 7, '2021-02-26', 'mmmkmkmmk');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(256) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `level` varchar(10) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `bidang_ilmu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `foto`, `level`, `is_active`, `date_created`, `bidang_ilmu`) VALUES
(1, 'Admin satu', 'admin1@gmail.com', '$2y$10$NcQ1re5XpgMKeniDmEndiO553uPJdSUxNZ2jktSdkxopxEas5yWvK', 'default.jpg', 'admin', 1, 0, NULL),
(2, 'User satu', 'user1@gmail.com', '$2y$10$cyXmYCZLh.EYARDP06krc.eClilsfDm8s7jKOVwP6nMLBWV7MFMYG', 'default.jpg', 'user', 1, 0, 'Bidang Ilmu satu'),
(3, 'Kadarisman, S.Kom', 'fromzerocode@gmail.com', '$2y$10$k6QfJIHAL6SNZXMbMSJfLOJiNzDZNB.MxF0IOMfujUNht1ibSjZ/C', 'default.jpg', 'user', 1, 1613282422, '$2y$10$x2nGKw1vEWYgVxnq/bmCcuNjng6TfpwSZxYeecMHUN4CRQxzpMiRK');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
