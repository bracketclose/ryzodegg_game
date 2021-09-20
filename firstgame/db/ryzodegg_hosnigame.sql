-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2021 at 04:39 PM
-- Server version: 10.3.31-MariaDB-cll-lve
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ryzodegg_hosnigame`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ryzodegg', '0e584a7e42b515bae0405c07235d77cd');

-- --------------------------------------------------------

--
-- Table structure for table `first_game`
--

CREATE TABLE `first_game` (
  `id` int(10) NOT NULL,
  `initial` varchar(8) NOT NULL,
  `score` varchar(20) NOT NULL DEFAULT '0',
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `first_game`
--

INSERT INTO `first_game` (`id`, `initial`, `score`, `Date`) VALUES
(1, 'QMDMâ€‹', '0', '2021-09-20 11:06:27'),
(2, 'SSSSâ€‹', '0', '2021-09-20 11:10:23'),
(3, 'QQQQâ€‹', '0', '2021-09-20 11:11:50'),
(4, 'ASCSâ€‹', '0', '2021-09-20 11:12:01'),
(5, 'HHBBâ€‹', '0', '2021-09-20 11:13:01'),
(6, 'NLSAâ€‹', '0', '2021-09-20 11:18:43'),
(7, 'QKMâ€‹', '0', '2021-09-20 11:19:06'),
(8, 'XJZSâ€‹', '0', '2021-09-20 11:19:52'),
(9, 'NRMSâ€‹', '0', '2021-09-20 11:20:30'),
(10, 'DPMâ€‹', '0', '2021-09-20 11:21:14'),
(11, 'HBMHâ€‹', '0', '2021-09-20 11:21:18'),
(12, 'AESLâ€‹', '0', '2021-09-20 11:22:11'),
(13, 'HELOâ€‹', '0', '2021-09-20 11:22:32'),
(14, 'CSDYâ€‹', '0', '2021-09-20 11:22:58'),
(15, 'QMRHâ€‹', '0', '2021-09-20 11:23:55'),
(16, 'ZSDMâ€‹', '0', '2021-09-20 11:24:56'),
(17, 'AEHYâ€‹', '0', '2021-09-20 11:25:13'),
(18, 'MMMYâ€‹', '0', '2021-09-20 11:25:28'),
(19, 'MRZYâ€‹', '0', '2021-09-20 11:26:30'),
(20, 'HELPâ€‹', '0', '2021-09-20 11:29:43'),
(21, 'EASHâ€‹', '0', '2021-09-20 11:32:00'),
(22, 'FFFFâ€‹', '89.188', '2021-09-20 11:34:57'),
(23, 'IIIIâ€‹', '0', '2021-09-20 11:35:57'),
(24, 'RGHâ€‹', '0', '2021-09-20 11:38:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `first_game`
--
ALTER TABLE `first_game`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `first_game`
--
ALTER TABLE `first_game`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
