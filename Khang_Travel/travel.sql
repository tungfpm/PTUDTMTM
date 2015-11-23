-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2015 at 03:37 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `user_id`, `cat_name`, `cat_description`) VALUES
(1, 8, 'Tour Vinh Ha Long', 'wq'),
(2, 8, 'Tour Hue 1', 'qÆ°er67890'),
(3, 8, 'Tour Mien TayNam Bo', 'sÃ´ng nÆ°á»›c miá»n tÃ¢y nÃªn thÆ¡ há»¯u tÃ¬nh'),
(4, 8, 'Tour Hue', 'cung ÄÃ¬nh Huáº¿'),
(5, 1, 'xuyen viet', '123'),
(6, 1, 'ffs', 'fdsf'),
(7, 8, 'Tour Tay Bac Bo', 'mien nui hunng vi phia bac');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `user_id`, `tour_id`, `image_name`, `image_description`) VALUES
(14, 8, 31, '/files/images/hoa-tam-giac-mach-.jpg', 'tmg'),
(15, 8, 33, '/files/images/camranh2 - Copy (2).jpg', 'cam ranh'),
(16, 8, 32, '/files/images/bg1.jpg', 'y ty');

-- --------------------------------------------------------

--
-- Table structure for table `locates`
--

CREATE TABLE IF NOT EXISTS `locates` (
  `locate_id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `locate_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `locate_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locates`
--

INSERT INTO `locates` (`locate_id`, `user_id`, `locate_name`, `locate_description`) VALUES
(5, 8, 'Dien Bien', 'pha luong mua sa khoi'),
(6, 8, 'Ha Giang', 'canh dep'),
(7, 8, 'Lao Cai', 'cah dep'),
(8, 8, 'Hue', 'Hoang thanh');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_tour`
--

CREATE TABLE IF NOT EXISTS `reservation_tour` (
  `reservation_tour_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `reservation_tour_amount` int(11) NOT NULL,
  `reservation_tour_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation_tour`
--

INSERT INTO `reservation_tour` (`reservation_tour_id`, `user_id`, `tour_id`, `reservation_tour_amount`, `reservation_tour_description`) VALUES
(1, 8, 1, 0, ''),
(2, 8, 1, 0, ''),
(3, 8, 1, 0, ''),
(4, 8, 1, 0, ''),
(5, 8, 1, 0, ''),
(6, 8, 26, 0, ''),
(7, 8, 26, 0, ''),
(8, 8, 26, 0, ''),
(9, 8, 26, 0, ''),
(10, 8, 26, 0, ''),
(11, 8, 26, 1, ''),
(12, 8, 26, 1, ''),
(13, 8, 26, 1, ''),
(14, 8, 26, 1, ''),
(15, 8, 26, 1, ''),
(16, 8, 26, 1, ''),
(17, 8, 20, 312, ''),
(18, 8, 20, 312, 'awdasdasd'),
(19, 8, 20, 312, 'awdasdasd'),
(20, 8, 26, 44, '324ewerw'),
(21, 8, 26, 123, 'tmmgd'),
(22, 8, 26, 123, 'tmmgd'),
(23, 8, 26, 123, 'tmmgd'),
(24, 8, 26, 123, 'tmmgd'),
(25, 8, 26, 123, 'tmmgd'),
(26, 8, 26, 123, 'tmmgd'),
(27, 8, 26, 123, 'tmmgd'),
(28, 8, 26, 123, 'tmmgd'),
(29, 8, 26, 123, 'tmmgd');

-- --------------------------------------------------------

--
-- Table structure for table `test123`
--

CREATE TABLE IF NOT EXISTS `test123` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test123`
--

INSERT INTO `test123` (`id`, `name`) VALUES
(2, 'ewq'),
(3, 'eqw'),
(4, 'eqwewqe'),
(5, 'eqwewq');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE IF NOT EXISTS `tours` (
  `tour_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `locate_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `tour_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_price` int(11) NOT NULL,
  `tour_amount` int(11) NOT NULL,
  `tour_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`tour_id`, `user_id`, `locate_id`, `cat_id`, `image_id`, `tour_name`, `tour_price`, `tour_amount`, `tour_description`) VALUES
(1, 8, 2, 1, 0, '12345678', 1, 1, '321eadasdasda'),
(18, 8, 1, 1, 0, '1e', 1, 1, '1'),
(19, 8, 1, 3, 0, 'eqwe', 1, 1, '1'),
(31, 8, 6, 7, 0, 'Tam giac mach', 1000, 10, 'tam giac mach '),
(32, 8, 7, 7, 0, 'Y tÃ½', 1000, 50, 'y ty'),
(33, 8, 8, 4, 0, 'Cam Ranh', 9000, 19, 'cam ranh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL,
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `sex` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_level` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_name`, `password`, `phone`, `address`, `birthday`, `sex`, `user_level`) VALUES
(1, 'dvkhang123@gamil.com', 'khang12345678', '1', 1234567, 'o dau do', '0002-01-31', 'Male', 2),
(8, 'khoaimonchien@gmail.com', 'ÃƒÂ¡dfuio', '1', 1243, '2453', '1003-12-03', 'Male', 2),
(9, 'dovankhsdaang14@yahoo.com.vn', 'khang_chiuchiu', '1', 123567, 'thai nugyen', '1995-10-12', 'Male', 0),
(10, 'fkida.cntt@gmail.com', 'Kham', '1', 1215141241, 'dsafsadsada', '1985-12-05', 'Male', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `locates`
--
ALTER TABLE `locates`
  ADD PRIMARY KEY (`locate_id`);

--
-- Indexes for table `reservation_tour`
--
ALTER TABLE `reservation_tour`
  ADD PRIMARY KEY (`reservation_tour_id`);

--
-- Indexes for table `test123`
--
ALTER TABLE `test123`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `locates`
--
ALTER TABLE `locates`
  MODIFY `locate_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `reservation_tour`
--
ALTER TABLE `reservation_tour`
  MODIFY `reservation_tour_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `test123`
--
ALTER TABLE `test123`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
