-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2015 at 10:13 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoso`
--

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE IF NOT EXISTS `sach` (
  `IDSach` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tensach` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `IDTacGia` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NXB` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NamXB` int(4) NOT NULL,
  `Gia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`IDSach`, `Tensach`, `IDTacGia`, `NXB`, `NamXB`, `Gia`) VALUES
('s3', 'Lap trinh PHP', 'ttb', 'Thong ke', 2007, 80000),
('s4', 'Toan cao cap', 'nva', 'Giao duc', 1989, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE IF NOT EXISTS `tacgia` (
  `IDTacGia` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tuoi` int(3) NOT NULL,
  `Dienthoai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`IDTacGia`, `Hoten`, `Tuoi`, `Dienthoai`) VALUES
('nva', 'Nguyen Van A', 24, 969754340),
('ttb', 'Tran Thi B', 25, 963099043);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`IDSach`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`IDTacGia`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
