-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2015 at 03:47 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlysach`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbsach`
--

CREATE TABLE IF NOT EXISTS `tbsach` (
  `masach` varchar(10) NOT NULL,
  `tensach` varchar(30) CHARACTER SET utf8 NOT NULL,
  `soluong` int(5) NOT NULL DEFAULT '1',
  `giathanh` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `tbsach`
--

INSERT INTO `tbsach` (`masach`, `tensach`, `soluong`, `giathanh`) VALUES
('Ms1', 'Tay Du Ky', 4, 3000),
('Ms2', 'Doremon', 5, 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbsach`
--
ALTER TABLE `tbsach`
  ADD PRIMARY KEY (`masach`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
