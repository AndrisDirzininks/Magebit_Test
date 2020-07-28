-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 02:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magebit_datubaze`
--

-- --------------------------------------------------------

--
-- Table structure for table `lietotaju_atributi`
--

CREATE TABLE `lietotaju_atributi` (
  `id` int(11) NOT NULL,
  `virsraksts` text NOT NULL,
  `saraksts` text NOT NULL,
  `epasts` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mans_magebit`
--

CREATE TABLE `mans_magebit` (
  `id` int(11) NOT NULL,
  `vards` text NOT NULL,
  `epasts` text NOT NULL,
  `parole` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lietotaju_atributi`
--
ALTER TABLE `lietotaju_atributi`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mans_magebit`
--
ALTER TABLE `mans_magebit`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `epasts` (`epasts`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lietotaju_atributi`
--
ALTER TABLE `lietotaju_atributi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `mans_magebit`
--
ALTER TABLE `mans_magebit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
