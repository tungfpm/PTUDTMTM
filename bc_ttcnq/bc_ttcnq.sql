-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2015 at 03:38 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baocao_ttcnquy`
--
CREATE DATABASE IF NOT EXISTS `baocao_ttcnquy` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `baocao_ttcnquy`;

-- --------------------------------------------------------

--
-- Table structure for table `chitiethd`
--

CREATE TABLE IF NOT EXISTS `chitiethd` (
  `mahd` int(10) NOT NULL,
  `id` int(20) NOT NULL,
  `soluong` int(20) NOT NULL,
  `dongia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `mahd` int(10) NOT NULL AUTO_INCREMENT,
  `ngayhd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`mahd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE IF NOT EXISTS `lienhe` (
  `id_lienhe` int(10) NOT NULL AUTO_INCREMENT,
  `hoten` text NOT NULL,
  `email` text NOT NULL,
  `dienthoai` int(20) NOT NULL,
  `diachi` text NOT NULL,
  `noidung` text NOT NULL,
  `ngaylienhe` datetime NOT NULL,
  PRIMARY KEY (`id_lienhe`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id_lienhe`, `hoten`, `email`, `dienthoai`, `diachi`, `noidung`, `ngaylienhe`) VALUES
(22, 'TA VAN NGOC', 'hongngocpc@gmail.com', 967228830, 'THAI NGUYEN', 'Hello admin ^^', '2014-10-10 04:44:37'),
(23, 'DO THI HUE', 'abc.com', 989037400, 'THAI NGUYEN', 'mua mÃ¡y tÃ­nh asus', '2014-10-18 10:17:42'),
(24, 'Nguyá»…n VÄƒn Thanh', 'thanhcnpmk9b@gmail.com', 989038400, 'HÃ  Ná»™i', 'Mua mÃ¡y tÃ­nh dell', '2014-10-18 10:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `id_loai` int(10) NOT NULL,
  `id_nhom` int(11) NOT NULL,
  `tenloaisp` text NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  PRIMARY KEY (`id_loai`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`id_loai`, `id_nhom`, `tenloaisp`, `ghichu`) VALUES
(3, 1, 'Acer', 'hienthi'),
(5, 1, 'ASUS', 'hienthi'),
(18, 1, 'DELL', 'hienthi'),
(19, 1, 'Lenovo', 'hienthi'),
(25, 1, 'Sony Vaio', 'hienthi'),
(26, 7, 'Man hinh', ''),
(27, 7, 'Ram - HDD', ''),
(28, 7, 'Main - bo mach chu', ''),
(29, 7, 'nguon - power', ''),
(30, 7, 'Ban phim', ''),
(31, 7, 'Chuot', ''),
(32, 7, 'Loa - Tai nghe', ''),
(33, 7, 'Cac loai phu kien khac', '');

-- --------------------------------------------------------

--
-- Table structure for table `nhomsanpham`
--

CREATE TABLE IF NOT EXISTS `nhomsanpham` (
  `id_nhom` int(10) NOT NULL AUTO_INCREMENT,
  `tennhom` varchar(255) NOT NULL,
  PRIMARY KEY (`id_nhom`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `nhomsanpham`
--

INSERT INTO `nhomsanpham` (`id_nhom`, `tennhom`) VALUES
(1, 'MÃ¡y TÃ­nh XÃ¡ch Tay'),
(2, 'MÃ¡y TÃ­nh Äá»ƒ BÃ n'),
(7, 'Linh Kiá»‡n MÃ¡y Vi TÃ­nh');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_loai` int(10) NOT NULL,
  `tensp` text NOT NULL,
  `mota` text NOT NULL,
  `hinh` text NOT NULL,
  `gia` int(15) NOT NULL,
  `giakm` int(15) NOT NULL,
  `ghichu` text NOT NULL,
  `soluongban` int(10) NOT NULL,
  `id_menu` int(10) NOT NULL,
  `baohanh` int(11) NOT NULL,
  `khuyenmai` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2147483648 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `id_loai`, `tensp`, `mota`, `hinh`, `gia`, `giakm`, `ghichu`, `soluongban`, `id_menu`, `baohanh`, `khuyenmai`) VALUES
(2, 3, 'Acer Aspire (006) S3_391_53314G52add', '', 'AcerAspire006S3_391_53314G52add.jpg', 16600000, 15000000, 'khuyenmai', 1, 0, 6, 1),
(11, 3, 'ACER AO725 - C7Ckk/ bb (002) ', '', 'ACERAO725C7Ckkbb002.jpg', 12000000, 9000000, 'khuyenmai', 4, 0, 24, 1),
(1349304537, 18, 'MÃY TÃNH XÃCH TAY DELL INSPIRON 3542-C15I3328P-BLACK', '', '2.jpg', 11000000, 10500000, 'khuyenmai', 0, 0, 12, 0),
(898288469, 3, 'Laptop Acer Aspire E1-472 (NX.M7VSV.001)', '', '4.png', 10000000, 0, 'chonmenu', 0, 0, 24, 0),
(514531071, 3, 'Laptop Acer Aspire E1-572G-54204G50Dnkk (NX.M8JSV.002)', 'HÃ£ng sáº£n xuáº¥t: Acer Aspire Series<br>\r\nÄá»™ lá»›n mÃ n hÃ¬nh: 15.6 inch<br>\r\nLoáº¡i á»• cá»©ng: HDD<br>\r\nDung lÆ°á»£ng HDD: 500GB<br>\r\nLoáº¡i CPU: Intel Core i5-4200U Haswell<br>\r\nTá»‘c Ä‘á»™ mÃ¡y: 1.60Ghz (3MB L3 cache, Max Turbo Frequency 2.6GHz)<br>\r\nDung lÆ°á»£ng Memory: 4GB<br>\r\nTrá»ng lÆ°á»£ng: 2.35Kg<br>', '5.jpg', 11550000, 0, 'new', 0, 0, 12, 0),
(1010515347, 3, 'Laptop Acer Aspire E5-471-35YP (NX.MN2SV.001)', 'HÃ£ng sáº£n xuáº¥t: Acer<br>\r\nÄá»™ lá»›n mÃ n hÃ¬nh: 14 inch<br>\r\nLoáº¡i á»• cá»©ng: HDD<br>\r\nDung lÆ°á»£ng HDD: 500GB<br>\r\nLoáº¡i CPU: Intel Core i3-4030U Haswell<br>\r\nTá»‘c Ä‘á»™ mÃ¡y: 1.90GHz (3MB L3 cache)<br>\r\nDung lÆ°á»£ng Memory: 2GB<br>\r\nBattery: 2.5giá»<br>\r\nTrá»ng lÆ°á»£ng: 2.3kg<br>', '6.jpg', 13000000, 12000000, 'khuyenmai', 0, 0, 12, 0),
(626198536, 5, 'Laptop Asus VivoBook S400CA-DH51T', '', '7.jpg', 12890000, 12000000, 'khuyenmai', 0, 0, 12, 1),
(0, 18, 'LAPTOP DELL Inspiron N4050 - I40325D', 'CPUIntel, Core i3, 2350M, 2.30 GHz<br>\r\nRAMDDR3, 2 GB (1 thanh)<br>\r\nÄÄ©a cá»©ngHDD, 500 GB<br>\r\nMÃ n hÃ¬nh rá»™ng14 inch, HD (1366 x 768 pixels)<br>\r\nCáº£m á»©ngKhÃ´ng<br>\r\nÄá»“ há»aAMD Radeon HD 7450M, 1 GB<br>\r\nÄÄ©a quangDVD Super Multi Double Layer<br>\r\nHÄH theo mÃ¡yUbuntu<br>\r\nPIN/BatteryLi-Ion 6 cell<br>\r\nTrá»ng lÆ°á»£ng (Kg)2.2<br>', 'LAPTOPDELLInspironN4050I40325D.jpg', 15000000, 0, 'chonmenu', 0, 0, 18, 0),
(3, 1, 'MAY BÃ€N ASUS CM6731 - VN001D', '', 'MAYBOASUSCM6731VN001D.jpg', 7500000, 6000000, 'khuyenmai', 15, 0, 12, 0),
(424293433, 18, 'MÃY TÃNH XÃCH TAY DELL N3542(P40F001)', '', '12.jpg', 9990000, 9700000, 'khuyenmai', 0, 0, 12, 0),
(853019039, 3, 'Acer Aspire AS4750', 'Äáº·c Ä‘iá»ƒm ná»•i báº­t<br>\r\n\r\nBá»™ xá»­ lÃ½: Intel Core i3 2330M - 2.2Ghz<br>\r\nRAM: 2GB - DDR3 - 1333Mhz<br>\r\nHDD: HDD - 500GB - 5400rpm<br>\r\nMÃ n hÃ¬nh: 14 inch - 1366 x 768 - HD LED<br>\r\nÄá»“ há»a: Intel HD Graphics 3000<br>\r\nHá»‡ Ä‘iá»u hÃ nh há»— trá»£: Windows 7, Windows 7 Professional, Windows 7 Ultimate<br>\r\nThá»i gian báº£o hÃ nh: 12 ThÃ¡ng<br>', '3.jpg', 11000000, 9000000, 'chonmenu', 0, 0, 12, 0),
(381993195, 5, 'ASUS G550JK-DS71', '', '11.jpg', 28000000, 25000000, 'khuyenmai', 0, 0, 24, 0),
(126943845, 25, 'Sony Vaio SVF1421ESGB ', '', '17.jpg', 9890000, 9500000, 'khuyenmai', 0, 0, 24, 1),
(467497338, 25, 'Sony Vaio SVF1521BYG ', '', '16.jpg', 10790000, 10000000, 'khuyenmai', 0, 0, 24, 0),
(1073513870, 25, 'Sony Vaio Flip SVF14A16CXB', '', '18.jpg', 20490000, 0, 'new', 0, 0, 24, 0),
(1011074760, 5, 'Asus Zenbook UX301LA-DH71T', '', '8.jpg', 32990000, 31000000, 'khuyenmai', 0, 0, 24, 1),
(461386825, 5, ' Asus X452LAV-VX208D', '', '9.jpg', 8790000, 8300000, 'khuyenmai', 0, 0, 24, 0),
(861022949, 31, 'Chuá»™t quang khÃ´ng dÃ¢y Targus', '', '24.jpg', 499000, 450000, 'khuyenmai', 0, 0, 12, 0),
(75090552, 33, 'Loa Microlab M223', '', '25.jpg', 500000, 450000, 'khuyenmai', 0, 0, 6, 0),
(486259193, 32, 'Loa Microlab M223', '', '25.jpg', 599000, 0, 'chonmenu', 0, 0, 12, 0),
(580541819, 5, 'Asus X452LDV-VX269D', '', '10.jpg', 11700000, 11000000, 'khuyenmai', 0, 0, 24, 1),
(1088618024, 27, 'RAMNB-kingston', 'Bá»™ nhá»› trong MTXT 4GB DDR3 bus 1600 Kingston - KVR16LS11/4 Haswell', 'ram1.jpg', 1199000, 0, 'new', 0, 0, 12, 0),
(157625503, 27, 'RAMNB-kingston', 'Bá»™ nhá»› trong MTXT 2GB DDR3 bus 1600 Kingston - KVR16S11/2 - KVR16S11S6/2', 'ram2.jpg', 699000, 0, 'new', 0, 0, 12, 0),
(1318751974, 28, 'Bo máº¡ch chá»§ BIOSTAR all in one NM70I-1037U', '', '21.jpg', 1595000, 1500000, 'khuyenmai', 0, 0, 12, 0),
(349073884, 29, 'Nguá»“n JeTek Q5350 - 350W', '', '22.jpg', 499000, 0, 'chonmenu', 0, 0, 6, 0),
(316326701, 30, 'BÃ n phÃ­m Genius KB110 cá»•ng USB', '', '23.jpg', 99000, 0, 'chonmenu', 0, 0, 12, 0),
(563759426, 26, 'MÃ n hÃ¬nh SAMSUNG LCD LED 19.5 S20D300', 'HÃƒNG SX	SAM SUNG<br>\r\nMODEL	S20D300<br>\r\nCÃ”NG NGHá»†	LED<br>\r\nKÃCH THÆ¯á»šC	19.5"<br>\r\nÄá»˜ PHÃ‚N GIáº¢I	1600x900<br>\r\nÄá»˜ SÃNG Cá»°C Äáº I	200cd/mÂ²<br>\r\nÄá»˜ TÆ¯Æ NG PHáº¢N	600:1<br>\r\nTHá»œI GIAN ÄÃP á»¨NG	5ms<br>\r\nGÃ“C NHÃŒN (NGANG/Dá»ŒC)	170Â° / 160Â°<br>\r\nCá»”NG Káº¾T Ná»I	D-Sub, HDMI<br>\r\nBáº¢O HÃ€NH	24 ThÃ¡ng<br>\r\nXUáº¤T Xá»¨	Viá»‡t Nam<br>', '19.jpg', 2699000, 0, 'new', 0, 0, 6, 0),
(863949110, 19, 'Lenovo G40', 'CPUIntel, Pentium Haswell, 3558U, 1.70 GHz<br>\r\nRAMDDR3L (2 khe RAM), 2 GB<br>\r\nÄÄ©a cá»©ngHDD, 500 GB<br>\r\nMÃ n hÃ¬nh rá»™ng14 inch, HD (1366 x 768 pixels)<br>\r\nCáº£m á»©ngKhÃ´ng<br>\r\nÄá»“ há»aIntelÂ® HD Graphics, 32 MB Share 972 MB<br>\r\nÄÄ©a quangDVD Super Multi Double Layer<br>\r\nHÄH theo mÃ¡yLinux<br>\r\nPIN/BatteryLi-Ion 4 cell<br>\r\nTrá»ng lÆ°á»£ng (Kg)2.05<br>', '13.jpg', 6990000, 0, 'chonmenu', 0, 0, 12, 0),
(941621470, 19, 'Lenovo G5070 ', '', '14.jpg', 9990000, 9000000, 'khuyenmai', 0, 0, 12, 0),
(577013213, 19, ' Lenovo G4070', '', '15.jpg', 10990000, 10100000, 'khuyenmai', 0, 0, 12, 0),
(421539399, 26, 'MÃ n hÃ¬nh SAMSUNG LCD LED 21.5 S22D300', 'Äá»˜ PHÃ‚N GIáº¢I	1920x1080<br>\r\nÄá»˜ SÃNG Cá»°C Äáº I	200cd/mÂ²<br>\r\nÄá»˜ TÆ¯Æ NG PHáº¢N	1000:1<br>\r\nTHá»œI GIAN ÄÃP á»¨NG	5ms<br>\r\nGÃ“C NHÃŒN (NGANG/Dá»ŒC)	170Â° / 160Â°<br>\r\nCá»”NG Káº¾T Ná»I	D-Sub<br>\r\nBáº¢O HÃ€NH	24 ThÃ¡ng<br>\r\nXUáº¤T Xá»¨	Trung Quá»‘c<br>" >', '20.jpg', 3299000, 0, 'chonmenu', 0, 0, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE IF NOT EXISTS `thanhvien` (
  `hoten` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` varchar(20) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `hieuluc` int(10) NOT NULL,
  `capquyen` int(10) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`hoten`, `diachi`, `email`, `dienthoai`, `user`, `pass`, `hieuluc`, `capquyen`) VALUES
('Duong Thi quy', 'THAI NGUYEN', 'hongngocpc@gmail.com', '0966805763', 'admin', '123', 1, 1),
('Duong Quy ', 'HA NOI', 'nguyenthanhcnttk9@gmail.com', '0966805763', 'admin1', '123', 1, 3),
('quyquy', 'bgiang', 'quy@gmail.com', '10234567890', 'quy', '345', 1, 3),
('quyquy', 'bgiang', 'quy@gmail.com', '10234567890', 'quyq', '456', 1, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
