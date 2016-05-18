-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2015 at 01:00 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblnhaxb`
--

CREATE TABLE IF NOT EXISTS `tblnhaxb` (
  `manhaXB` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nhaXB` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `tblnhaxb`
--

INSERT INTO `tblnhaxb` (`manhaXB`, `nhaXB`) VALUES
('nxbt', 'NXB Trẻ'),
('nxbth', 'NXB Tổng Hợp');

-- --------------------------------------------------------

--
-- Table structure for table `tblsach`
--

CREATE TABLE IF NOT EXISTS `tblsach` (
  `masach` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tensach` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `namXB` varchar(7) NOT NULL,
  `manhaXB` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `tblsach`
--

INSERT INTO `tblsach` (`masach`, `tensach`, `tacgia`, `namXB`, `manhaXB`) VALUES
('01', 'Tony Buổi sáng', 'Tony', '08-2015', 'nxbt'),
('02', 'You Can Win', 'Shiv Khera', '12-2014', 'nxbth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblnhaxb`
--
ALTER TABLE `tblnhaxb`
  ADD PRIMARY KEY (`manhaXB`);

--
-- Indexes for table `tblsach`
--
ALTER TABLE `tblsach`
  ADD PRIMARY KEY (`masach`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
