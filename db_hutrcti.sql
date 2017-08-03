-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 06:07 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hutrcti`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'andre', 'andre', '1234'),
(2, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `barcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unix_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `merk_hp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipe_hp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text COLLATE utf8_unicode_ci,
  `no_iden` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `barcode`, `unix_code`, `gender`, `locale`, `picture_url`, `profile_url`, `no_hp`, `merk_hp`, `tipe_hp`, `tgl_lahir`, `alamat`, `no_iden`, `status`, `created`, `modified`) VALUES
(1280, 'Aming', NULL, '123456', '1501720880', NULL, NULL, NULL, NULL, '085715209286', NULL, NULL, '1988-02-24', 'Ciledug jaya', '353682990100', 0, '2017-08-03 07:41:20', '2017-08-03 07:41:20'),
(1281, 'Viko', NULL, '636344', '1501743090', NULL, NULL, NULL, NULL, '513155312', NULL, NULL, '0000-00-00', 'jogja', '001234', 0, '2017-08-03 13:51:30', '2017-08-03 13:51:30'),
(1282, 'Kakung Jati Pramono', NULL, '535353', '1501745146', NULL, NULL, NULL, NULL, '089692496692', NULL, NULL, '1994-07-05', 'Cengkareng', '', 0, '2017-08-03 14:25:46', '2017-08-03 14:25:46'),
(1283, 'Aries Ardiansyah', NULL, '046632', '1501747012', NULL, NULL, NULL, NULL, '08997150794', NULL, NULL, '1989-06-27', 'ciputat', '123', 0, '2017-08-03 14:56:52', '2017-08-03 14:56:52'),
(1284, 'Oktavianus', NULL, '243111', '1501751688', NULL, NULL, NULL, NULL, '081212172206', NULL, NULL, '1996-10-28', 'Jl. Pekapuran 2/7 tambora jakarta barat', '3173042810960006', 0, '2017-08-03 16:14:48', '2017-08-03 16:14:48'),
(1285, 'Oktavianus', NULL, '136777', '1501751693', NULL, NULL, NULL, NULL, '081212172206', NULL, NULL, '1996-10-28', 'Jl. Pekapuran 2/7 tambora jakarta barat', '3173042810960006', 0, '2017-08-03 16:14:53', '2017-08-03 16:14:53'),
(1286, 'Oktavianus', NULL, '456343', '1501751710', NULL, NULL, NULL, NULL, '081212172206', NULL, NULL, '1996-10-28', 'Jl. Pekapuran 2/7 tambora jakarta barat', '3173042810960006', 0, '2017-08-03 16:15:10', '2017-08-03 16:15:10'),
(1287, 'SASDASD', NULL, '918958', '1501773783', NULL, NULL, NULL, NULL, '234234234', NULL, NULL, '2422-03-24', 'sfsdfds', '23423423423', 0, '2017-08-03 22:23:03', '2017-08-03 22:23:03'),
(1288, '', NULL, '995471', '1501773916', NULL, NULL, NULL, NULL, '', NULL, NULL, '0000-00-00', '', '', 0, '2017-08-03 22:25:16', '2017-08-03 22:25:16'),
(1289, 'Mimi', NULL, '422619', '1501775238', NULL, NULL, NULL, NULL, '0121323', NULL, NULL, '2000-01-28', 'ASKJDASD', '12312312', 0, '2017-08-03 22:47:18', '2017-08-03 22:47:18'),
(1290, 'Missing', NULL, '304863', '1501775576', NULL, NULL, NULL, NULL, '089123123919', NULL, NULL, '1995-05-05', 'KJASKSAD', '12345655555', 0, '2017-08-03 22:52:56', '2017-08-03 22:52:56'),
(1291, 'Sender', NULL, '005693', '1501776279', NULL, NULL, NULL, NULL, '000000', NULL, NULL, '2000-06-06', 'Cengkareng', '0000122131231', 0, '2017-08-03 23:04:39', '2017-08-03 23:04:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1292;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
