-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2022 at 10:15 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkatama`
--

-- --------------------------------------------------------

--
-- Table structure for table `arkatama_test`
--

CREATE TABLE `arkatama_test` (
  `id_arkatama` int(11) NOT NULL,
  `your_name` varchar(50) NOT NULL,
  `your_age` int(11) NOT NULL,
  `your_city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arkatama_test`
--

INSERT INTO `arkatama_test` (`id_arkatama`, `your_name`, `your_age`, `your_city`) VALUES
(1, 'ha', 0, 'malang'),
(2, 'ta', 0, 'malang'),
(3, 'a', 0, 'we'),
(4, 'q', 0, 'fs'),
(5, 'Arhan', 0, 'Malang'),
(6, 'Nomi', 21, 'Malang'),
(7, 'Nomilop', 21, 'Malang'),
(8, 'Nomilop Argu', 21, 'Malang'),
(9, 'Nomilop Argu Steven', 21, 'Malang'),
(10, 'Doni', 21, 'Bandung'),
(11, 'Doni', 21, 'Bandung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arkatama_test`
--
ALTER TABLE `arkatama_test`
  ADD PRIMARY KEY (`id_arkatama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arkatama_test`
--
ALTER TABLE `arkatama_test`
  MODIFY `id_arkatama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
