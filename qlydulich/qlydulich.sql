-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2015 at 06:11 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlydulich`
--

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE IF NOT EXISTS `tour` (
  `id` int(10) unsigned NOT NULL,
  `tour_name` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `tour_time` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `tour_price` int(11) NOT NULL,
  `tour_start` date NOT NULL,
  `tour_begin` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `tour_end` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `tour_image` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `tour_name`, `tour_time`, `tour_price`, `tour_start`, `tour_begin`, `tour_end`, `tour_image`) VALUES
(15, 'ÄÃ  Náºµng - Há»™i An - BÃ  NÃ  - SÆ¡n TrÃ  - Má»¹ SÆ¡n', '3 ngÃ y', 5790000, '2015-12-01', 'TP. Há»“ ChÃ­ Minh', 'ÄÃ  Náºµng', 'tf_151019_Cau Rong 2.JPG'),
(16, 'Ban MÃª Thuá»™t - ThÃ¡c Daynur - CÆ°á»¡i Voi Báº£n ÄÃ´n - Há»“ Láº¯k - BuÃ´n KÃ´tam ', '4 ngÃ y', 2790000, '2015-12-04', 'TP. Há»“ ChÃ­ Minh', 'ÄÃ  Náºµng', 'tf_150508_ban me thuoc- thac bnu.-1.jpg'),
(17, 'HÃ  Ná»™i - ÄÃ´ng Báº¯c: Báº¯c Káº¡n - Ba Bá»ƒ - Cao Báº±ng - ThÃ¡c Báº£n Giá»‘c - ChÃ¹a Pháº­t TÃ­ch - TrÃºc LÃ¢m Báº£n Giá»‘c - Láº¡ng SÆ¡n - NÃºi NÃ ng TÃ´ Thá»‹', '5 ngÃ y', 7390000, '2015-12-08', 'TP. Há»“ ChÃ­ Minh', 'HÃ  Ná»™i', 'tf_141216_71610595.jpg'),
(18, 'HÃ nh TrÃ¬nh KhÃ¡m PhÃ¡ Miá»n Trung:Nha Trang-KDL White Sand Dá»‘c Láº¿t-ÄÃ  Náºµng-Huáº¿-Äá»™ng ThiÃªn ÄÆ°á»ng&Phong Nha-BÃ  NÃ -Há»™i An', '8 ngÃ y', 13990000, '2015-12-06', 'TP. Há»“ ChÃ­ Minh', 'ÄÃ  Náºµng', '091213106-nha-trang-6.jpg'),
(19, 'HÃ  Ná»™i-Sapa-LÃ o Cai-HÃ  Kháº©u-CÃ´n Minh-Tháº¡ch LÃ¢m: Má»™t HÃ nh TrÃ¬nh XuyÃªn Hai Quá»‘c Gia', '6 ngÃ y', 12390000, '2015-12-06', 'TP. Há»“ ChÃ­ Minh', 'HÃ  Ná»™i', 'tf_150707_Con minh- hinh nen.gif'),
(20, 'ÄÃ  Láº¡t-Rá»±c Rá»¡ MÃ¹a Hoa DÃ£ QÃ¹y-ThÃ¡c Äambri-ThiÃªn ÄÆ°á»ng Äáº¥t SÃ©t-VÆ°á»n DÃ¢u TÆ°Æ¡i 3*CC', '4 ngÃ y', 2790000, '2015-11-27', 'TP. Há»“ ChÃ­ Minh', 'ÄÃ  Láº¡t', 'tf_150706_da lat - rung thong.jpg'),
(21, 'ÄÃ  Náºµng-BÃ  NÃ -Há»™i An (SiÃªu tiáº¿t kiá»‡m)', '4 ngÃ y', 3690000, '2015-11-21', 'HÃ  Ná»™i', 'ÄÃ  Náºµng', '2103140138-hoi-an.jpg'),
(22, 'Há»“ Ba Bá»ƒ - ChÃ¹a Pháº­t tÃ­ch TrÃºc LÃ¢m- ThÃ¡c Báº£n Giá»‘c', '4 ngÃ y', 3150000, '2015-11-05', 'HÃ  Ná»™i', 'ThÃ¡i NguyÃªn', '0710133337-thac-ban-gioc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_520_ci NOT NULL,
  `password` char(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `level` int(2) NOT NULL DEFAULT '2',
  `hoten` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `gioitinh` varchar(3) COLLATE utf8_unicode_520_ci NOT NULL,
  `diachi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `level`, `hoten`, `gioitinh`, `diachi`) VALUES
(1, 'Tuoi', '', 'admin', 1, 'Hong Tuoi', '2', 'Thai Nguyen'),
(12, 'admin', '', 'admin', 1, 'TrungHieu', '1', 'Tuyen quang'),
(13, 'admin1', '', 'admin1', 2, 'nghÄ©a', '2', 'BK'),
(16, 'admin2', 'hhhhh@gmai.com', 'admin2', 2, 'Ninh', '1', 'HN'),
(17, 'trongnghia', '', 'nghia1994', 1, 'LÃª Trá»ng NghÄ©a', '2', 'BK'),
(18, 'manhninh1994', 'fskfhsk@gmail.com', 'ninh1994', 1, 'Tráº§n Ninh', '1', 'hÃ  nam'),
(19, 'admin3', 'kkkk@gmail.com', 'admin3', 1, 'Tráº§n Ninh', '1', 'HÃ  nam'),
(20, 'admin5', 'ggggg@gmail.com', 'admin5', 1, 'Trá»ng NghÄ©a', '2', 'BK'),
(21, 'fjskfjs', 'afasdasf@gmail.com', '123', 1, '', '', ''),
(22, 'dfafa', 'fakfhkak@gmail.com', '123', 1, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
