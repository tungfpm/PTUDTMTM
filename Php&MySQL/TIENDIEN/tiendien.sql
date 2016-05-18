-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2015 at 10:08 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiendien`
--

-- --------------------------------------------------------

--
-- Table structure for table `hdtiendien`
--

CREATE TABLE IF NOT EXISTS `hdtiendien` (
  `MaHD` varchar(10) COLLATE utf32_unicode_ci NOT NULL,
  `MaPhong` varchar(10) COLLATE utf32_unicode_ci NOT NULL,
  `ChiSoDau` int(10) NOT NULL,
  `ChiSoCuoi` int(10) NOT NULL,
  `ThanhTien` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `hdtiendien`
--

INSERT INTO `hdtiendien` (`MaHD`, `MaPhong`, `ChiSoDau`, `ChiSoCuoi`, `ThanhTien`) VALUES
('hd01', 'P02', 4, 10, 3000),
('hd02', 'P01', 5, 10, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE IF NOT EXISTS `phong` (
  `MaPhong` varchar(10) COLLATE utf32_unicode_ci NOT NULL,
  `TenPhong` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `SoSV` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`MaPhong`, `TenPhong`, `SoSV`) VALUES
('P01', 'Phong 01', 8),
('P02', 'Phong 02', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hdtiendien`
--
ALTER TABLE `hdtiendien`
  ADD PRIMARY KEY (`MaHD`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`MaPhong`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
