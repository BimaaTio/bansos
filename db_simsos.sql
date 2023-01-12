-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 01:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simsos`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_adm`
--

CREATE TABLE `tb_adm` (
  `uid` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `tgl_dibuat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_adm`
--

INSERT INTO `tb_adm` (`uid`, `full_name`, `email`, `password`, `ip`, `tgl_dibuat`) VALUES
(611130, 'Bima Tio Rachman', 'bima@bansos.com', '$2y$10$wjv5Otml/pvWyhGszk8eqecOMkzOvUsW3DMwINUBQtKgrwYGBntJK', '::1', '08-01-2023 12:12:40'),
(680124, 'Rizky Oe', 'rizky@bansos.com', '$2y$10$j6lGP3gTQj7mXcPOtnFjBefPK61ieUvWrfOlxc4W9sdcyaGz/g7Sa', '::1', '08-01-2023 12:12:40'),
(878922, 'Admin Bansos', 'admin@bansos.com', '$2y$10$Iq8QPxeeUS9GLP2Qrmfdne5IH4395BTozh7ehaUvNd48td7Sp8vre', '::1', '08-01-2023 12:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `tb_antrian`
--

CREATE TABLE `tb_antrian` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_form`
--

CREATE TABLE `tb_form` (
  `id` int(11) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `full_name` varchar(35) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(15) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `jb` varchar(15) NOT NULL,
  `tgl_confirm` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_form`
--

INSERT INTO `tb_form` (`id`, `nik`, `full_name`, `jk`, `alamat`, `agama`, `telp`, `jb`, `tgl_confirm`) VALUES
(257944, '23432234324324', 'Bima Tio Rachman', 'Laki-laki', 'Karangwatu , Pucungrejo, Muntilan', 'Islam', '62883243235496', 'PKH', '2023-01-27'),
(538288, '23432234324324', 'Bima Tio Rachman', 'Laki-laki', 'Karangwatu , Pucungrejo, Muntilan', 'Islam', '6288802791329', 'PKH', '2023-01-08'),
(590218, '3456323556234324', 'Rizky Berkah', 'Laki-laki', 'Karangwatu , Pucungrejo, Muntilan', 'Islam', '6285172343295', 'PKH', '2023-01-04'),
(911020, '234322342235443', 'Admin Bansos', 'Laki-laki', 'Karangwatu , Pucungrejo, Muntilan', 'Hindu', '62883243235496', 'PKH', '2023-01-03'),
(963746, '23432234324324', 'Bima Tio Rachman', 'Laki-laki', 'Karangwatu , Pucungrejo, Muntilan', 'Islam', '6288802791329', 'PKH', '2023-02-04'),
(974512, '23432234324324', 'Bima Tio Rachman', 'Laki-laki', 'Karangwatu , Pucungrejo, Muntilan', 'Islam', '6288802791329', 'PKH', '2023-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `uid` int(11) NOT NULL,
  `full_name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `tgl_dibuat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`uid`, `full_name`, `email`, `password`, `ip`, `tgl_dibuat`) VALUES
(141550, 'Bima Tio Rachman', 'bimatio@sos.com', '$2y$10$Hi3Wxdj9DGESU6GerMBeke1BJRd01uoDrSg0C8qUqFFExnKTlZCVm', '::1', '08-01-2023 12:16:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_adm`
--
ALTER TABLE `tb_adm`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tb_antrian`
--
ALTER TABLE `tb_antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_form`
--
ALTER TABLE `tb_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
