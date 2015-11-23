-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2015 at 12:50 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_qltintuc`
--

-- --------------------------------------------------------

--
-- Table structure for table `cate_news`
--

CREATE TABLE IF NOT EXISTS `cate_news` (
  `cate_id` int(10) unsigned NOT NULL,
  `cate_title` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cate_news`
--

INSERT INTO `cate_news` (`cate_id`, `cate_title`) VALUES
(1, 'Van Hoa'),
(3, 'Hoc Duong'),
(5, 'The Thao'),
(6, 'Du Lich'),
(7, 'Am Thuc'),
(8, 'Gioi Tinh'),
(9, 'Thoi Trang'),
(10, 'Kinh Te'),
(11, 'Xa Hoi'),
(12, 'Phu Nu'),
(13, 'Nam Gioi');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(10) unsigned NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_author` varchar(100) NOT NULL,
  `news_info` text NOT NULL,
  `news_full` longtext NOT NULL,
  `news_check` char(1) NOT NULL DEFAULT 'N',
  `news_img` varchar(255) NOT NULL,
  `userid` int(10) unsigned NOT NULL,
  `cate_id` int(10) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_author`, `news_info`, `news_full`, `news_check`, `news_img`, `userid`, `cate_id`) VALUES
(1, 'Tranh cÃ£i vá» tiá»n phÃ­ cho 7 ká»³ quan tháº¿ giá»›i má»›i', 'vnexpress', 'Dá»±a vÃ o lan can trÆ°á»ng há»c, báº¥t ngá» máº£ng lan can Ä‘á»• sáº­p khiáº¿n 6 há»c sinh lá»›p 7 THCS Tráº§n NguyÃªn HÃ£n (TP Báº¯c Giang) rÆ¡i xuá»‘ng Ä‘áº¥t.', 'Dá»±a vÃ o lan can trÆ°á»ng há»c, báº¥t ngá» máº£ng lan can Ä‘á»• sáº­p khiáº¿n 6 há»c sinh lá»›p 7 THCS Tráº§n NguyÃªn HÃ£n (TP Báº¯c Giang) rÆ¡i xuá»‘ng Ä‘áº¥t.\r\n\r\nDá»±a vÃ o lan can trÆ°á»ng há»c, báº¥t ngá» máº£ng lan can Ä‘á»• sáº­p khiáº¿n 6 há»c sinh lá»›p 7 THCS Tráº§n NguyÃªn HÃ£n (TP Báº¯c Giang) rÆ¡i xuá»‘ng Ä‘áº¥t.\r\n\r\nDá»±a vÃ o lan can trÆ°á»ng há»c, báº¥t ngá» máº£ng lan can Ä‘á»• sáº­p khiáº¿n 6 há»c sinh lá»›p 7 THCS Tráº§n NguyÃªn HÃ£n (TP Báº¯c Giang) rÆ¡i xuá»‘ng Ä‘áº¥t.\r\n\r\nDá»±a vÃ o lan can trÆ°á»ng há»c, báº¥t ngá» máº£ng lan can Ä‘á»• sáº­p khiáº¿n 6 há»c sinh lá»›p 7 THCS Tráº§n NguyÃªn HÃ£n (TP Báº¯c Giang) rÆ¡i xuá»‘ng Ä‘áº¥t.', 'Y', 'cat_01.jpg', 1, 3),
(2, 'Ná»­a giá» giáº£i cá»©u ngÆ°á»i chÃ¬m phÃ  nÆ¡i cá»­a biá»ƒn', 'vnexpress', '"Chiáº¿c phÃ  Ä‘ang cháº¡y ngang qua cá»­a biá»ƒn bá»—ng dÆ°ng nghiÃªng háº³n rá»“i chÃ¬m chá»‰ trong 10 phÃºt. Tiáº¿ng ngÆ°á»i kÃªu cá»©u khÃ³c than tháº£m thiáº¿t, nhá»¯ng cÃ¡nh tay chá»›i vá»›i, vÃ¹ng váº«y trÃªn máº·t nÆ°á»›c", anh Äinh Táº¥n TÃ u chá»©ng kiáº¿n vá»¥ tai náº¡n chÃ¬m phÃ  á»Ÿ Quáº£ng Nam ká»ƒ.', '<p>\r\n	<strong>&quot;Chiáº¿c ph&agrave; Ä‘ang cháº¡y ngang qua cá»­a biá»ƒn bá»—ng dÆ°ng nghi&ecirc;ng háº³n rá»“i ch&igrave;m chá»‰ trong 10 ph&uacute;t. Tiáº¿ng ngÆ°á»i k&ecirc;u cá»©u kh&oacute;c than tháº£m thiáº¿t, nhá»¯ng c&aacute;nh tay chá»›i vá»›i, v&ugrave;ng váº«y tr&ecirc;n máº·t nÆ°á»›c&quot;, anh Äinh Táº¥n T&agrave;u chá»©ng kiáº¿n vá»¥ tai náº¡n ch&igrave;m ph&agrave; á»Ÿ Quáº£ng Nam ká»ƒ.</strong></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	hack 123 &quot;Chiáº¿c ph&agrave; Ä‘ang cháº¡y ngang qua cá»­a biá»ƒn bá»—ng dÆ°ng nghi&ecirc;ng háº³n rá»“i ch&igrave;m chá»‰ trong 10 ph&uacute;t. Tiáº¿ng ngÆ°á»i k&ecirc;u cá»©u kh&oacute;c than tháº£m thiáº¿t, nhá»¯ng c&aacute;nh tay chá»›i vá»›i, v&ugrave;ng váº«y tr&ecirc;n máº·t nÆ°á»›c&quot;, anh Äinh Táº¥n T&agrave;u chá»©ng kiáº¿n vá»¥ tai náº¡n ch&igrave;m ph&agrave; á»Ÿ Quáº£ng Nam ká»ƒ. :))</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&quot;Chiáº¿c ph&agrave; Ä‘ang cháº¡y ngang qua cá»­a biá»ƒn bá»—ng dÆ°ng nghi&ecirc;ng háº³n rá»“i ch&igrave;m chá»‰ trong 10 ph&uacute;t. Tiáº¿ng ngÆ°á»i k&ecirc;u cá»©u kh&oacute;c than tháº£m thiáº¿t, nhá»¯ng c&aacute;nh tay chá»›i vá»›i, v&ugrave;ng váº«y tr&ecirc;n máº·t nÆ°á»›c&quot;, anh Äinh Táº¥n T&agrave;u chá»©ng kiáº¿n vá»¥ tai náº¡n ch&igrave;m ph&agrave; á»Ÿ Quáº£ng Nam ká»ƒ.</p>\r\n', 'Y', 'abc.jpg', 1, 1),
(4, 'Chá»§ quáº£n Ã©p cÃ´ng nhÃ¢n Ä‘á»• keo 502 vÃ o tay ', 'Vnexpress.net', 'QuÃ¡ Ä‘au Ä‘á»›n vÃ  sá»£ hÃ£i vÃ¬ bá»‹ chá»§ quáº£n ngÆ°á»i Trung Quá»‘c Ã©p Ä‘á»• keo 502 dÃ­nh cháº·t hai bÃ n tay, chá»‹ PhÆ°Æ¡ng Ä‘Ã£ ngáº¥t lá»‹m pháº£i Ä‘i cáº¥p cá»©u táº¡i bá»‡nh viá»‡n. HÃ ng nghÃ¬n cÃ´ng nhÃ¢n bá»©c xÃºc liá»n tá»• chá»©c Ä‘Ã¬nh cÃ´ng.', '<h4>\r\n	Qu&aacute; Ä‘au Ä‘á»›n v&agrave; sá»£ h&atilde;i v&igrave; bá»‹ chá»§ quáº£n ngÆ°á»i Trung Quá»‘c &eacute;p Ä‘á»• keo 502 d&iacute;nh cháº·t hai b&agrave;n tay, chá»‹ PhÆ°Æ¡ng Ä‘&atilde; ngáº¥t lá»‹m pháº£i Ä‘i cáº¥p cá»©u táº¡i bá»‡nh viá»‡n. H&agrave;ng ngh&igrave;n c&ocirc;ng nh&acirc;n bá»©c x&uacute;c liá»n tá»• chá»©c Ä‘&igrave;nh c&ocirc;ng.</h4>\r\n<p>\r\n	&nbsp;</p>\r\n<p class="Normal">\r\n	TrÆ°a 26/11, chá»‹ Nguyá»…n Thá»‹ PhÆ°Æ¡ng, c&ocirc;ng nh&acirc;n C&ocirc;ng ty gi&agrave;y Hong Fu Viá»‡t Nam táº¡i khu c&ocirc;ng nghiá»‡p Ho&agrave;ng Long (Hoáº±ng H&oacute;a, Thanh H&oacute;a) Ä‘&atilde; bá»‹ chá»§ quáº£n cá»§a c&ocirc;ng ty t&ecirc;n l&agrave; A VÆ°Æ¡ng (ngÆ°á»i Trung Quá»‘c) &eacute;p Ä‘á»• keo 502 v&agrave;o tay rá»“i báº¯t chá»‹ d&iacute;nh 2 b&agrave;n tay v&agrave;o nhau.</p>\r\n<p class="Normal">\r\n	&nbsp;</p>\r\n<p class="Normal">\r\n	Khi tháº¥y chá»‹ PhÆ°Æ¡ng Ä‘au Ä‘á»›n k&ecirc;u kh&oacute;c tháº£m thiáº¿t, nhiá»u c&ocirc;ng nh&acirc;n Ä‘&atilde; cháº¡y láº¡i khuy&ecirc;n can nhÆ°ng kh&ocirc;ng Ä‘Æ°á»£c m&agrave; c&ograve;n bá»‹ vi&ecirc;n Ä‘á»‘c c&ocirc;ng lÄƒng máº¡. Nhiá»u c&ocirc;ng nh&acirc;n qu&aacute; sá»£ h&atilde;i Ä‘&atilde; ngáº¥t lá»‹m.</p>\r\n<p class="Normal">\r\n	&nbsp;</p>\r\n<p class="Normal">\r\n	Táº¡i Bá»‡nh viá»‡n Há»£p Lá»±c, chá»‹ L&ecirc; Thá»‹ H&ograve;a ká»ƒ, khoáº£ng 11h trÆ°a, c&ocirc;ng nh&acirc;n sáº¯p nghá»‰ Äƒn trÆ°a. V&igrave; thiáº¿u keo n&ecirc;n chá»‹ Ä‘&atilde; láº¥y th&ecirc;m keo 502 Ä‘á»ƒ d&aacute;n v&agrave;o gi&agrave;y. Vá»«a l&uacute;c Ä‘&oacute; &ocirc;ng VÆ°Æ¡ng Ä‘i Ä‘áº¿n, tháº¥y chá»‹ láº¥y keo &ocirc;ng ta cháº¡y láº¡i qu&aacute;t th&aacute;o v&agrave; lÄƒm lÄƒm tr&ecirc;n tay lá» 502 Ä‘á»ƒ Ä‘á»• v&agrave;o tay chá»‹.</p>\r\n<p class="Normal">\r\n	&nbsp;</p>\r\n<p class="Normal">\r\n	&ldquo;C&ugrave;ng l&uacute;c Ä‘&oacute;, chá»‹ PhÆ°Æ¡ng l&agrave; ca trÆ°á»Ÿng li&ecirc;n 7 Ä‘i Ä‘áº¿n, &ocirc;ng VÆ°Æ¡ng liá»n k&eacute;o láº¡i rá»“i tr&uacute;t giáº­n l&ecirc;n chá»‹ PhÆ°Æ¡ng. Ch&uacute;ng t&ocirc;i xin Ä‘á»«ng Ä‘á»• keo nhÆ°ng &ocirc;ng áº¥y cá»© &eacute;p chá»‹ PhÆ°Æ¡ng pháº£i Ä‘á»• keo l&ecirc;n tay v&agrave; báº¯t d&iacute;nh 2 b&agrave;n tay vá»›i nhau. Chá»‹ PhÆ°Æ¡ng kh&oacute;c l&oacute;c van xin, ch&uacute;ng t&ocirc;i cÅ©ng kh&oacute;c theo rá»“i t&ocirc;i ngáº¥t Ä‘i. L&uacute;c tá»‰nh dáº­y t&ocirc;i Ä‘&atilde; Ä‘Æ°á»£c c&aacute;c c&ocirc;ng nh&acirc;n kh&aacute;c Ä‘Æ°a Ä‘áº¿n bá»‡nh viá»‡n cáº¥p cá»©u&rdquo;, chá»‹ Ho&agrave; ká»ƒ.</p>\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" width="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<img height="379" src="http://vnexpress.net/Files/Subject/3b/bb/cc/e4/doccong.jpg" width="495" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image">\r\n				Chá»‹ Nguyá»…n Thá»‹ PhÆ°Æ¡ng Ä‘ang Ä‘Æ°á»£c chÄƒm s&oacute;c táº¡i Bá»‡nh viá»‡n HIá»‡p Lá»±c. áº¢nh: <em>L&ecirc; Ho&agrave;ng.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p class="Normal">\r\n	Kh&ocirc;ng ri&ecirc;ng chá»‹ H&ograve;a, chá»‹ Nguyá»…n Thá»‹ ThÆ¡m tháº¥y chuyá»‡n liá»n cháº¡y láº¡i can ngÄƒn, nhÆ°ng khi chá»©ng kiáº¿n h&agrave;nh Ä‘á»™ng cá»§a &ocirc;ng VÆ°Æ¡ng, chá»‹ ThÆ¡m Ä‘&atilde; qu&aacute; sá»£ h&atilde;i rá»“i ngáº¥t lá»‹m. Chá»‹ ThÆ¡m cÅ©ng pháº£i Ä‘iá»u trá»‹ táº¡i Bá»‡nh viá»‡n Há»£p Lá»±c v&igrave; tá»¥t huyáº¿t &aacute;p.</p>\r\n<p class="Normal">\r\n	&nbsp;</p>\r\n<p class="Normal">\r\n	UBND huyá»‡n Hoáº±ng H&oacute;a Ä‘&atilde; chá»‰ Ä‘áº¡o Li&ecirc;n Ä‘o&agrave;n Lao Ä‘á»™ng huyá»‡n l&agrave;m viá»‡c vá»›i Ä‘áº¡i diá»‡n nh&agrave; m&aacute;y. &Ocirc;ng H&agrave; Xu&acirc;n Th&agrave;nh, Chá»§ tá»‹ch Li&ecirc;n Ä‘o&agrave;n lao Ä‘á»™ng huyá»‡n cho biáº¿t, sau khi x&aacute;c minh chá»§ quáº£n C&ocirc;ng ty gi&agrave;y Hong Fu Viá»‡t Nam &eacute;p c&ocirc;ng nh&acirc;n d&iacute;nh keo 502 v&agrave;o tay l&agrave; c&oacute; tháº­t, ph&iacute;a Li&ecirc;n Ä‘o&agrave;n Ä‘&atilde; Ä‘á» nghá»‹ c&ocirc;ng ty Ä‘&igrave;nh chá»‰ c&ocirc;ng t&aacute;c vá»›i &ocirc;ng A VÆ°Æ¡ng.</p>\r\n<p class="Normal">\r\n	&nbsp;</p>\r\n<p class="Normal">\r\n	Li&ecirc;n Ä‘o&agrave;n cÅ©ng Ä‘á» nghá»‹ c&ocirc;ng ty c&oacute; tr&aacute;ch nhiá»‡m vá» má»i chi ph&iacute; cho 3 c&ocirc;ng nh&acirc;n cáº¥p cá»©u táº¡i bá»‡nh viá»‡n; c&ocirc;ng ty pháº£i t&iacute;nh lÆ°Æ¡ng cho táº¥t cáº£ c&ocirc;ng nh&acirc;n buá»•i chiá»u ng&agrave;y 26/11 (v&igrave; sau khi sá»± viá»‡c diá»…n ra c&ocirc;ng nh&acirc;n Ä‘&atilde; tá»• chá»©c Ä‘&igrave;nh c&ocirc;ng). Sau khi c&oacute; káº¿t quáº£ Ä‘iá»u tra r&otilde; r&agrave;ng cá»§a cÆ¡ quan chá»©c nÄƒng, c&ocirc;ng ty pháº£i c&oacute; h&igrave;nh thá»©c ká»· luáº­t Ä‘&uacute;ng má»©c vá»›i vi&ecirc;n chá»§ quáº£n.</p>\r\n<p class="Normal">\r\n	&nbsp;</p>\r\n<p class="Normal">\r\n	CÅ©ng theo &ocirc;ng Th&agrave;nh, Ä‘áº¡i diá»‡n l&atilde;nh Ä‘áº¡o C&ocirc;ng ty gi&agrave;y Hong Fu Ä‘&atilde; nháº­n viá»‡c l&agrave;m tr&ecirc;n cá»§a chá»§ quáº£n A VÆ°Æ¡ng l&agrave; sai, c&ocirc;ng ty Ä‘&atilde; Ä‘á»“ng &yacute; Ä‘&igrave;nh chá»‰ c&ocirc;ng viá»‡c vá»›i &ocirc;ng n&agrave;y Ä‘á»ƒ phá»¥c vá»¥ qu&aacute; tr&igrave;nh Ä‘iá»u tra sá»± viá»‡c.</p>\r\n', 'Y', 'aaa12345.jpg', 1, 3),
(5, 'Nga kÃ­ch hoáº¡t há»‡ thá»‘ng cáº£nh bÃ¡o tÃªn lá»­a', 'Vnexpress', 'Moscow hÃ´m qua kÃ­ch hoáº¡t má»™t há»‡ thá»‘ng radar cáº£nh bÃ¡o tÃªn lá»­a táº¡i vÃ¹ng cá»±c tÃ¢y cá»§a nÆ°á»›c nÃ y giÃ¡p biÃªn giá»›i vá»›i LiÃªn minh chÃ¢u Ã‚u, nháº±m Ä‘Ã¡p tráº£ káº¿ hoáº¡ch lÃ¡ cháº¯n tÃªn lá»­a cá»§a Má»¹.', '<h4>\r\n	Moscow h&ocirc;m qua k&iacute;ch hoáº¡t má»™t há»‡ thá»‘ng radar cáº£nh b&aacute;o t&ecirc;n lá»­a táº¡i v&ugrave;ng cá»±c t&acirc;y cá»§a nÆ°á»›c n&agrave;y gi&aacute;p bi&ecirc;n giá»›i vá»›i Li&ecirc;n minh ch&acirc;u &Acirc;u, nháº±m Ä‘&aacute;p tráº£ káº¿ hoáº¡ch l&aacute; cháº¯n t&ecirc;n lá»­a cá»§a Má»¹.<br />\r\n	&nbsp;</h4>\r\n<p class="Normal">\r\n	Tá»•ng thá»‘ng Nga Dmitry Medvedev th&ocirc;ng b&aacute;o ráº±ng tráº¡m radar Voronezh-DM táº¡i tá»‰nh Kaliningrad Ä‘&atilde; Ä‘Æ°á»£c Ä‘áº·t trong tráº¡ng th&aacute;i sáºµn s&agrave;ng chiáº¿n Ä‘áº¥u ngay láº­p tá»©c, <em>AFP</em> Ä‘Æ°a tin. Tuy&ecirc;n bá»‘ cá»§a &ocirc;ng Medvedev Ä‘Æ°á»£c Ä‘Æ°a ra tiáº¿p sau nhá»¯ng lá»i Ä‘e dá»a vá» viá»‡c triá»ƒn khai t&ecirc;n lá»­a táº¡i Kiliningrad, tá»‰nh cá»±c t&acirc;y náº±m t&aacute;ch rá»i ho&agrave;n to&agrave;n vá»›i pháº§n c&ograve;n láº¡i cá»§a l&atilde;nh thá»• Nga rá»™ng lá»›n.</p>\r\n<p class="Normal">\r\n	&nbsp;</p>\r\n<p class="Normal">\r\n	&quot;T&ocirc;i hy vá»ng ráº±ng bÆ°á»›c Ä‘i n&agrave;y sáº½ Ä‘Æ°á»£c c&aacute;c nÆ°á»›c nh&igrave;n nháº­n nhÆ° l&agrave; t&iacute;n hiá»‡u Ä‘áº§u ti&ecirc;n cho tháº¥y sá»± sáºµn s&agrave;ng cá»§a nÆ°á»›c Nga, trong viá»‡c Ä‘&aacute;p tráº£ th&iacute;ch Ä‘&aacute;ng vá»›i nhá»¯ng Ä‘e dá»a m&agrave; l&aacute; cháº¯n t&ecirc;n lá»­a cá»§a phÆ°Æ¡ng T&acirc;y nháº±m v&agrave;o c&aacute;c cÆ¡ sá»Ÿ háº¡t nh&acirc;n chiáº¿n lÆ°á»£c cá»§a ch&uacute;ng t&ocirc;i&quot;, &ocirc;ng Medvedev n&oacute;i.</p>\r\n<p class="Normal">\r\n	&nbsp;</p>\r\n<p class="Normal">\r\n	Sá»­ dá»¥ng nhá»¯ng tá»« ngá»¯ l&agrave;m gá»£i nhá»› láº¡i thá»i ká»³ Chiáº¿n tranh Láº¡nh, tá»•ng thá»‘ng Nga cho biáº¿t th&ecirc;m: &quot;Náº¿u t&iacute;n hiá»‡u n&agrave;y kh&ocirc;ng Ä‘Æ°á»£c c&aacute;c nÆ°á»›c nháº­n thá»©c má»™t c&aacute;ch Ä‘&uacute;ng má»©c, ch&uacute;ng t&ocirc;i sáº½ triá»ƒn khai nhá»¯ng biá»‡n ph&aacute;p báº£o vá»‡ kh&aacute;c, bao gá»“m nhá»¯ng biá»‡n ph&aacute;p Ä‘á»‘i ph&oacute; kh&ocirc;ng khoan nhÆ°á»£ng v&agrave; triá»ƒn khai c&aacute;c lá»±c lÆ°á»£ng táº¥n c&ocirc;ng&quot;.</p>\r\n<p class="Normal">\r\n	&nbsp;</p>\r\n<p class="Normal">\r\n	&Ocirc;ng Medvedev tuáº§n trÆ°á»›c cho hay Nga Ä‘&atilde; sáºµn s&agrave;ng triá»ƒn khai c&aacute;c t&ecirc;n lá»­a Iskander, vá»‘n Ä‘Æ°á»£c giá»›i chá»©c nÆ°á»›c n&agrave;y cho ráº±ng Ä‘áº¡t táº§m hoáº¡t Ä‘á»™ng l&ecirc;n tá»›i 500 km, táº¡i tá»‰nh Kaliningrad c&oacute; bi&ecirc;n giá»›i gi&aacute;p vá»›i c&aacute;c th&agrave;nh vi&ecirc;n EU l&agrave; Ba Lan v&agrave; Litva.</p>\r\n<p class="Normal">\r\n	&nbsp;</p>\r\n<p class="Normal">\r\n	Romania v&agrave; Ba Lan trÆ°á»›c Ä‘&acirc;y Ä‘&atilde; Ä‘á»“ng &yacute; Ä‘á»ƒ Má»¹ thiáº¿t láº­p má»™t pháº§n cá»§a l&aacute; cháº¯n t&ecirc;n lá»­a, vá»‘n Ä‘Æ°á»£c Washington cho ráº±ng chá»‰ Ä‘á» nháº±m v&agrave;o nhá»¯ng quá»‘c gia nhÆ° Iran, nhÆ°ng Moscow tin ráº±ng l&aacute; cháº¯n n&agrave;y cÅ©ng nháº±m v&agrave;o c&aacute;c má»¥c ti&ecirc;u tr&ecirc;n l&atilde;nh thá»• Nga. Thá»• NhÄ© Ká»³, má»™t th&agrave;nh vi&ecirc;n cá»§a Tá»• chá»©c Hiá»‡p Æ°á»›c Báº¯c Äáº¡i T&acirc;y DÆ°Æ¡ng (NATO), cÅ©ng vá»«a quyáº¿t Ä‘á»‹nh cho ph&eacute;p Má»¹ láº¯p Ä‘áº·t má»™t tráº¡m radar cáº£nh b&aacute;o sá»›m táº¡i má»™t cÄƒn cá»© qu&acirc;n sá»± gáº§n tá»‰nh Malatya á»Ÿ Ä‘&ocirc;ng nam nÆ°á»›c n&agrave;y, nhÆ° má»™t pháº§n trong há»‡ thá»‘ng ph&ograve;ng thá»§ t&ecirc;n lá»­a.</p>\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" width="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<img alt="Báº£n Ä‘á»“ nÆ°á»›c Nga vÃ  tá»‰nh Kaliningrad. Äá»“ há»a: Russialessons" height="274" src="http://vnexpress.net/Files/Subject/3b/bb/ce/3f/medvedev-kaliningrad5.jpg" width="480" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image">\r\n				Báº£n Ä‘á»“ nÆ°á»›c Nga v&agrave; tá»‰nh Kaliningrad. Äá»“ há»a: <em>Russianlessons</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p class="Normal">\r\n	Tá»•ng thá»‘ng Medvedev, tá»›i thÄƒm tá»‰nh Kaliningrad h&ocirc;m qua Ä‘á»ƒ k&yacute; sáº¯c lá»‡nh k&iacute;ch hoáº¡t tráº¡m radar cáº£nh b&aacute;o t&ecirc;n lá»­a táº¡i Ä‘&acirc;y, cho hay Nga muá»‘n nghe nhiá»u hÆ¡n l&agrave; chá»‰ nhá»¯ng lá»i há»©a tá»« c&aacute;c nÆ°á»›c phÆ°Æ¡ng T&acirc;y nháº±m thu háº¹p nhá»¯ng c&aacute;ch biá»‡t giá»¯a c&aacute;c b&ecirc;n.</p>\r\n<p class="Normal">\r\n	&nbsp;</p>\r\n<p class="Normal">\r\n	&quot;Nhá»¯ng tuy&ecirc;n bá»‘ miá»‡ng kh&ocirc;ng Ä‘áº£m báº£o Ä‘Æ°á»£c c&aacute;c lá»£i &iacute;ch cá»§a ch&uacute;ng t&ocirc;i. Náº¿u nhá»¯ng c&aacute;ch thá»ƒ hiá»‡n kh&aacute;c Ä‘Æ°á»£c Ä‘Æ°a ra, táº¥t nhi&ecirc;n ch&uacute;ng t&ocirc;i sáº½ sáºµn s&agrave;ng láº¯ng nghe&quot;, tá»•ng thá»‘ng Nga tuy&ecirc;n bá»‘ tr&ecirc;n k&ecirc;nh truyá»n h&igrave;nh cá»§a tá»‰nh Kaliningrad. &quot;Ch&uacute;ng t&ocirc;i kh&ocirc;ng thá»ƒ h&agrave;i l&ograve;ng vá»›i nhá»¯ng lá»i há»©a miá»‡ng ráº±ng há»‡ thá»‘ng l&aacute; cháº¯n t&ecirc;n lá»­a cá»§a Má»¹ kh&ocirc;ng nháº±m v&agrave;o nÆ°á»›c Nga. Ä&oacute; l&agrave; nhá»¯ng tuy&ecirc;n bá»‘ s&aacute;o rá»—ng v&agrave; kh&ocirc;ng Ä‘áº£m báº£o cho an ninh cá»§a ch&uacute;ng t&ocirc;i&quot;.</p>\r\n<p class="Normal">\r\n	&nbsp;</p>\r\n<p class="Normal">\r\n	Tuy nhi&ecirc;n, &ocirc;ng chá»§ Ä‘iá»‡n Kremlin cÅ©ng kháº³ng Ä‘á»‹nh viá»‡c k&iacute;ch hoáº¡t tráº¡m radar cáº£nh b&aacute;o t&ecirc;n lá»­a táº¡i tá»‰nh Kaliningrad kh&ocirc;ng Ä‘á»“ng nghÄ©a vá»›i viá»‡c Ä‘&oacute;ng láº¡i c&aacute;nh cá»­a Ä‘á»‘i thoáº¡i vá»›i Má»¹ vá» há»‡ thá»‘ng ph&ograve;ng thá»§ t&ecirc;n lá»­a.</p>\r\n<p class="Normal">\r\n	&nbsp;</p>\r\n<p class="Normal">\r\n	H&atilde;ng tin <em>RIA Novosti</em> tr&iacute;ch lá»i Bá»™ trÆ°á»Ÿng Quá»‘c ph&ograve;ng Nga Anatoly Serdyukov cho hay tráº¡m radar n&agrave;y c&oacute; thá»ƒ theo d&otilde;i hoáº¡t Ä‘á»™ng cá»§a 500 Ä‘á»‘i tÆ°á»£ng vá»›i táº§m phá»§ s&oacute;ng l&ecirc;n tá»›i 6.000 km.</p>\r\n<p class="Normal">\r\n	&nbsp;</p>\r\n<p class="Normal">\r\n	Má»™t chá»‰ huy qu&acirc;n Ä‘á»™i Ä‘á»‹a phÆ°Æ¡ng, trung tÆ°á»›ng Sergei Brotskov, cho biáº¿t hoáº¡t Ä‘á»™ng cá»§a tráº¡m radar n&agrave;y má»›i chá»‰ Ä‘Æ°á»£c báº¯t Ä‘áº§u v&agrave;o th&aacute;ng 6/2010 nhÆ°ng Ä‘&atilde; Ä‘Æ°á»£c tÄƒng c&ocirc;ng suáº¥t sau nhá»¯ng cÄƒng tháº³ng vá» há»‡ thá»‘ng ph&ograve;ng thá»§ t&ecirc;n lá»­a. &Ocirc;ng Brotskov cho biáº¿t th&ecirc;m ráº±ng tráº¡m radar Voronezh-DM c&oacute; thá»ƒ x&aacute;c Ä‘á»‹nh nguá»“n gá»‘c, kiá»ƒu v&agrave; Ä‘&iacute;ch Ä‘áº¿n cá»§a má»™t t&ecirc;n lá»­a Ä‘Æ°á»£c nháº±m v&agrave;o nÆ°á»›c Nga, tháº­m ch&iacute; cáº£ khi n&oacute; Ä‘Æ°á»£c báº¯n Ä‘i tá»« Äáº¡i T&acirc;y DÆ°Æ¡ng hay Äá»‹a Trung Háº£i.</p>\r\n', 'Y', 'bbb.jpg', 1, 3),
(6, 'Nhá»¯ng vá»¥ chÃ¡y ná»• xe mÃ¡y Honda', 'vnexpress', 'HÃ ng loáº¡t vá»¥ chÃ¡y, ná»• xe mÃ¡y Honda liÃªn tiáº¿p xáº£y ra táº¡i nhiá»u tá»‰nh, thÃ nh. Tang thÆ°Æ¡ng nháº¥t lÃ  vá»¥ ná»• xe Dream á»Ÿ Báº¯c Ninh lÃ m cháº¿t thai phá»¥, con gÃ¡i 4 tuá»•i sÃ¡ng nay cÅ©ng Ä‘Ã£ tá»­ vong.', '<p>\r\n	H&agrave;ng loáº¡t vá»¥ ch&aacute;y, ná»• xe m&aacute;y Honda li&ecirc;n tiáº¿p xáº£y ra táº¡i nhiá»u tá»‰nh, th&agrave;nh. Tang thÆ°Æ¡ng nháº¥t l&agrave; vá»¥ ná»• xe Dream á»Ÿ Báº¯c Ninh l&agrave;m cháº¿t thai phá»¥, con g&aacute;i 4 tuá»•i s&aacute;ng nay cÅ©ng Ä‘&atilde; tá»­ vong.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	H&agrave;ng loáº¡t vá»¥ ch&aacute;y, ná»• xe m&aacute;y Honda li&ecirc;n tiáº¿p xáº£y ra táº¡i nhiá»u tá»‰nh, th&agrave;nh. Tang thÆ°Æ¡ng nháº¥t l&agrave; vá»¥ ná»• xe Dream á»Ÿ Báº¯c Ninh l&agrave;m cháº¿t thai phá»¥, con g&aacute;i 4 tuá»•i s&aacute;ng nay cÅ©ng Ä‘&atilde; tá»­ vong.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	H&agrave;ng loáº¡t vá»¥ ch&aacute;y, ná»• xe m&aacute;y Honda li&ecirc;n tiáº¿p xáº£y ra táº¡i nhiá»u tá»‰nh, th&agrave;nh. Tang thÆ°Æ¡ng nháº¥t l&agrave; vá»¥ ná»• xe Dream á»Ÿ Báº¯c Ninh l&agrave;m cháº¿t thai phá»¥, con g&aacute;i 4 tuá»•i s&aacute;ng nay cÅ©ng Ä‘&atilde; tá»­ vong.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	H&agrave;ng loáº¡t vá»¥ ch&aacute;y, ná»• xe m&aacute;y Honda li&ecirc;n tiáº¿p xáº£y ra táº¡i nhiá»u tá»‰nh, th&agrave;nh. Tang thÆ°Æ¡ng nháº¥t l&agrave; vá»¥ ná»• xe Dream á»Ÿ Báº¯c Ninh l&agrave;m cháº¿t thai phá»¥, con g&aacute;i 4 tuá»•i s&aacute;ng nay cÅ©ng Ä‘&atilde; tá»­ vong.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	H&agrave;ng loáº¡t vá»¥ ch&aacute;y, ná»• xe m&aacute;y Honda li&ecirc;n tiáº¿p xáº£y ra táº¡i nhiá»u tá»‰nh, th&agrave;nh. Tang thÆ°Æ¡ng nháº¥t l&agrave; vá»¥ ná»• xe Dream á»Ÿ Báº¯c Ninh l&agrave;m cháº¿t thai phá»¥, con g&aacute;i 4 tuá»•i s&aacute;ng nay cÅ©ng Ä‘&atilde; tá»­ vong.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	H&agrave;ng loáº¡t vá»¥ ch&aacute;y, ná»• xe m&aacute;y Honda li&ecirc;n tiáº¿p xáº£y ra táº¡i nhiá»u tá»‰nh, th&agrave;nh. Tang thÆ°Æ¡ng nháº¥t l&agrave; vá»¥ ná»• xe Dream á»Ÿ Báº¯c Ninh l&agrave;m cháº¿t thai phá»¥, con g&aacute;i 4 tuá»•i s&aacute;ng nay cÅ©ng Ä‘&atilde; tá»­ vong.</p>\r\n', 'Y', 'Chay-AB-PVD-2.jpg', 1, 3),
(7, 'Má»¹ Ä‘Ã²i Iran tráº£ mÃ¡y bay tÃ ng hÃ¬nh', 'vnexpress', 'Tá»•ng thá»‘ng Má»¹ hÃ´m qua lÃªn tiáº¿ng Ä‘Ã²i Iran tráº£ láº¡i chiáº¿c mÃ¡y bay do thÃ¡m tÃ ng hÃ¬nh RQ-170 Sentinel bá»‹ Tehran thu giá»¯.', '<p>\r\n	Tá»•ng thá»‘ng Má»¹ h&ocirc;m qua l&ecirc;n tiáº¿ng Ä‘&ograve;i Iran tráº£ láº¡i chiáº¿c m&aacute;y bay do th&aacute;m t&agrave;ng h&igrave;nh RQ-170 Sentinel bá»‹ Tehran thu giá»¯.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Tá»•ng thá»‘ng Má»¹ h&ocirc;m qua l&ecirc;n tiáº¿ng Ä‘&ograve;i Iran tráº£ láº¡i chiáº¿c m&aacute;y bay do th&aacute;m t&agrave;ng h&igrave;nh RQ-170 Sentinel bá»‹ Tehran thu giá»¯.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Tá»•ng thá»‘ng Má»¹ h&ocirc;m qua l&ecirc;n tiáº¿ng Ä‘&ograve;i Iran tráº£ láº¡i chiáº¿c m&aacute;y bay do th&aacute;m t&agrave;ng h&igrave;nh RQ-170 Sentinel bá»‹ Tehran thu giá»¯.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Tá»•ng thá»‘ng Má»¹ h&ocirc;m qua l&ecirc;n tiáº¿ng Ä‘&ograve;i Iran tráº£ láº¡i chiáº¿c m&aacute;y bay do th&aacute;m t&agrave;ng h&igrave;nh RQ-170 Sentinel bá»‹ Tehran thu giá»¯.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Tá»•ng thá»‘ng Má»¹ h&ocirc;m qua l&ecirc;n tiáº¿ng Ä‘&ograve;i Iran tráº£ láº¡i chiáº¿c m&aacute;y bay do th&aacute;m t&agrave;ng h&igrave;nh RQ-170 Sentinel bá»‹ Tehran thu giá»¯.</p>\r\n', 'Y', 'rq170iran3.jpg', 1, 3),
(8, 'Äá»• xÃ´ mua thiáº¿t bá»‹ bÃ¡o Ä‘á»™ng rÃ² khÃ­ gas', 'dantri', 'Sau hÃ ng loáº¡t vá»¥ ná»•, chÃ¡y bÃ¬nh gas kinh hoÃ ng, khÃ´ng Ã­t ngÆ°á»i tiÃªu dÃ¹ng hoang mang, Ä‘i sáº¯m thiáº¿t bá»‹ bÃ¡o Ä‘á»™ng rÃ² rá»‰ khÃ­ gas cho gia Ä‘Ã¬nh, khiáº¿n máº·t hÃ ng nÃ y trá»Ÿ nÃªn hÃºt khÃ¡ch.', '<p>\r\n	Sau h&agrave;ng loáº¡t vá»¥ ná»•, ch&aacute;y b&igrave;nh gas kinh ho&agrave;ng, kh&ocirc;ng &iacute;t ngÆ°á»i ti&ecirc;u d&ugrave;ng hoang mang, Ä‘i sáº¯m thiáº¿t bá»‹ b&aacute;o Ä‘á»™ng r&ograve; rá»‰ kh&iacute; gas cho gia Ä‘&igrave;nh, khiáº¿n máº·t h&agrave;ng n&agrave;y trá»Ÿ n&ecirc;n h&uacute;t kh&aacute;ch.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Sau h&agrave;ng loáº¡t vá»¥ ná»•, ch&aacute;y b&igrave;nh gas kinh ho&agrave;ng, kh&ocirc;ng &iacute;t ngÆ°á»i ti&ecirc;u d&ugrave;ng hoang mang, Ä‘i sáº¯m thiáº¿t bá»‹ b&aacute;o Ä‘á»™ng r&ograve; rá»‰ kh&iacute; gas cho gia Ä‘&igrave;nh, khiáº¿n máº·t h&agrave;ng n&agrave;y trá»Ÿ n&ecirc;n h&uacute;t kh&aacute;ch.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Sau h&agrave;ng loáº¡t vá»¥ ná»•, ch&aacute;y b&igrave;nh gas kinh ho&agrave;ng, kh&ocirc;ng &iacute;t ngÆ°á»i ti&ecirc;u d&ugrave;ng hoang mang, Ä‘i sáº¯m thiáº¿t bá»‹ b&aacute;o Ä‘á»™ng r&ograve; rá»‰ kh&iacute; gas cho gia Ä‘&igrave;nh, khiáº¿n máº·t h&agrave;ng n&agrave;y trá»Ÿ n&ecirc;n h&uacute;t kh&aacute;ch.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Sau h&agrave;ng loáº¡t vá»¥ ná»•, ch&aacute;y b&igrave;nh gas kinh ho&agrave;ng, kh&ocirc;ng &iacute;t ngÆ°á»i ti&ecirc;u d&ugrave;ng hoang mang, Ä‘i sáº¯m thiáº¿t bá»‹ b&aacute;o Ä‘á»™ng r&ograve; rá»‰ kh&iacute; gas cho gia Ä‘&igrave;nh, khiáº¿n máº·t h&agrave;ng n&agrave;y trá»Ÿ n&ecirc;n h&uacute;t kh&aacute;ch.</p>\r\n', 'Y', 'ro-ri-khi-gas-4.jpg', 1, 3),
(9, 'MÆ°a sao bÄƒng xuáº¥t hiá»‡n vÃ o ngÃ y mai', 'dantri', 'Tráº­n mÆ°a sao bÄƒng lá»›n nháº¥t vÃ  Ä‘áº¹p nháº¥t trong nÄƒm sáº½ xuáº¥t hiá»‡n vÃ o ngÃ y mai. Náº¿u Ä‘iá»u kiá»‡n thá»i tiáº¿t thuáº­n lá»£i, nhá»¯ng ngÆ°á»i yÃªu thiÃªn vÄƒn táº¡i Viá»‡t Nam cÃ³ thá»ƒ chiÃªm ngÆ°á»¡ng hiá»‡n tÆ°á»£ng ká»³ thÃº nÃ y.', '<p>\r\n	Tráº­n mÆ°a sao bÄƒng lá»›n nháº¥t v&agrave; Ä‘áº¹p nháº¥t trong nÄƒm sáº½ xuáº¥t hiá»‡n v&agrave;o ng&agrave;y mai. Náº¿u Ä‘iá»u kiá»‡n thá»i tiáº¿t thuáº­n lá»£i, nhá»¯ng ngÆ°á»i y&ecirc;u thi&ecirc;n vÄƒn táº¡i Viá»‡t Nam c&oacute; thá»ƒ chi&ecirc;m ngÆ°á»¡ng hiá»‡n tÆ°á»£ng ká»³ th&uacute; n&agrave;y.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Tráº­n mÆ°a sao bÄƒng lá»›n nháº¥t v&agrave; Ä‘áº¹p nháº¥t trong nÄƒm sáº½ xuáº¥t hiá»‡n v&agrave;o ng&agrave;y mai. Náº¿u Ä‘iá»u kiá»‡n thá»i tiáº¿t thuáº­n lá»£i, nhá»¯ng ngÆ°á»i y&ecirc;u thi&ecirc;n vÄƒn táº¡i Viá»‡t Nam c&oacute; thá»ƒ chi&ecirc;m ngÆ°á»¡ng hiá»‡n tÆ°á»£ng ká»³ th&uacute; n&agrave;y.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Tráº­n mÆ°a sao bÄƒng lá»›n nháº¥t v&agrave; Ä‘áº¹p nháº¥t trong nÄƒm sáº½ xuáº¥t hiá»‡n v&agrave;o ng&agrave;y mai. Náº¿u Ä‘iá»u kiá»‡n thá»i tiáº¿t thuáº­n lá»£i, nhá»¯ng ngÆ°á»i y&ecirc;u thi&ecirc;n vÄƒn táº¡i Viá»‡t Nam c&oacute; thá»ƒ chi&ecirc;m ngÆ°á»¡ng hiá»‡n tÆ°á»£ng ká»³ th&uacute; n&agrave;y.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Tráº­n mÆ°a sao bÄƒng lá»›n nháº¥t v&agrave; Ä‘áº¹p nháº¥t trong nÄƒm sáº½ xuáº¥t hiá»‡n v&agrave;o ng&agrave;y mai. Náº¿u Ä‘iá»u kiá»‡n thá»i tiáº¿t thuáº­n lá»£i, nhá»¯ng ngÆ°á»i y&ecirc;u thi&ecirc;n vÄƒn táº¡i Viá»‡t Nam c&oacute; thá»ƒ chi&ecirc;m ngÆ°á»¡ng hiá»‡n tÆ°á»£ng ká»³ th&uacute; n&agrave;y.</p>\r\n', 'Y', 'muasaobang3.jpg', 1, 3),
(10, 'Doi tuyen the nao ....', 'abcs ', 'adafbasb,sabcfncn  c.sa', '<p>\r\n	ccbmndc m,c m, czm czx cznm</p>\r\n', 'Y', 'Chrysanthemum.jpg', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `page_id` int(10) unsigned NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_info` longtext NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_title`, `page_info`) VALUES
(1, 'Trang giá»›i thiá»‡u', ''),
(2, 'Trang dá»‹ch vá»¥', '\r\n'),
(3, 'Trang há»— trá»£', '\r\n'),
(4, 'Trang khÃ¡ch hÃ ng', '\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(10) unsigned NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `level` char(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `level`) VALUES
(1, 'admin', '37693cfc748049e45d87b8c7d8b9aacd', '2'),
(3, 'abc', '37693cfc748049e45d87b8c7d8b9aacd', '2'),
(4, 'k2cntt', 'c81e728d9d4c2f636f067f89cc14862c', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cate_news`
--
ALTER TABLE `cate_news`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cate_news`
--
ALTER TABLE `cate_news`
  MODIFY `cate_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
