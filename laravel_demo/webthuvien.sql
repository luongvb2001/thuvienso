-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2015 at 02:55 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webthuvien`
--
CREATE DATABASE IF NOT EXISTS `webthuvien` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `webthuvien`;

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tailieu_id` int(11) NOT NULL,
  `ngaydownload` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `tailieu_id`, `ngaydownload`, `created_at`, `updated_at`) VALUES
(1, 1, '2014-10-27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, '2014-10-10', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, '2014-05-05', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `loaitailieu`
--

CREATE TABLE IF NOT EXISTS `loaitailieu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenloaitailieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `loaitailieu`
--

INSERT INTO `loaitailieu` (`id`, `tenloaitailieu`, `created_at`, `updated_at`) VALUES
(1, 'Công nghệ thông tin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Công nghệ phần mềm', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Kế toán - Tin học', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Hệ thống thông tin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'đồ án', '2015-06-07 01:41:46', '2015-06-07 01:41:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_04_24_094059_create_tailieu_table', 1),
('2015_04_24_130825_tailieu', 2),
('2015_04_24_132137_users', 2),
('2015_04_24_132154_loaitailieu', 2),
('2015_04_24_132205_tacgia', 2),
('2015_04_24_132216_tukhoa', 2),
('2015_04_24_132230_dowwnload', 2),
('2015_04_24_133433_chat_room', 2),
('2015_04_24_133448_message', 2),
('2015_05_16_134316_create_tailieu', 3),
('2015_05_31_144257_users', 4),
('2015_06_04_172851_tailieu', 5),
('2015_06_04_173057_tacgia', 6),
('2015_06_04_173536_table_tailieu', 7),
('2015_06_04_173926_tukhoa', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tailieu2`
--

CREATE TABLE IF NOT EXISTS `tailieu2` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TuaDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiFile` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoTrang` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `TacGia` text COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tailieu2`
--

INSERT INTO `tailieu2` (`id`, `TuaDe`, `image`, `LoaiFile`, `SoTrang`, `TacGia`, `link`, `intro`, `body`, `loaitailieu_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Ngữ pháp tiếng anh căn bản', '1.jpg', 'PDF', '50 trang', 'Nguyễn Thị Nhi', 'Grammar.pdf', 'Ôn tập ngữ pháp tiếng Anh là tài liệu giúp bạn luyện ngữ pháp tiếng Anh một cách thành thạo, phân loại mục lục rõ ràng dễ hiểu và dễ nhớ, giúp bạn mau chóng ôn lại kiến thức ngữ pháp đã quên. Tài liệu này có thể coi như cẩm nang cho các bạn học sinh, sinh viên và những người mới học tiếng Anh.', '<p style="text-align: justify;" align="justify"><strong>&Ocirc;n tập ngữ ph&aacute;p tiếng Anh&nbsp;l&agrave; t&agrave;i liệu gi&uacute;p bạn luyện ngữ ph&aacute;p tiếng Anh một c&aacute;ch th&agrave;nh thạo, ph&acirc;n loại mục lục r&otilde; r&agrave;ng dễ hiểu v&agrave; dễ nhớ, gi&uacute;p bạn mau ch&oacute;ng &ocirc;n lại kiến thức ngữ ph&aacute;p đ&atilde; qu&ecirc;n. T&agrave;i liệu n&agrave;y c&oacute; thể coi như cẩm nang cho c&aacute;c bạn học sinh, sinh vi&ecirc;n v&agrave; những người mới học tiếng Anh.</strong></p>\n<p style="text-align: justify;" align="justify"><strong>&gt;&gt;&gt; <a href="http://down.vn/grammar-download" rel="nofollow" target="_blank">Tải phần mềm học Tiếng Anh trọn bộ (miễn ph&iacute;)</a></strong></p>\n<h2 style="text-align: center;" align="justify"><strong>&Ocirc;n tập ngữ ph&aacute;p Tiếng Anh</strong></h2>\n<p style="text-align: justify;" align="justify">T&agrave;i liệu cung cấp c&aacute;c b&agrave;i học về c&aacute;c th&igrave;, mạo từ, giới từ tiếng Anh, c&acirc;u điều kiện... v&agrave; rất nhiều b&agrave;i học ngữ ph&aacute;p kh&aacute;c chắc chắn sẽ gi&uacute;p bạn củng cố kiến thức ngữ ph&aacute;p tiếng Anh hiệu quả. &Ocirc;n tập ngữ ph&aacute;p Tiếng Anh được sưu tầm v&agrave; bi&ecirc;n soạn bởi trường đại học Kinh Tế Đ&agrave; Nẵng, gồm l&yacute; thuyết v&agrave; v&iacute; dụ r&otilde; r&agrave;ng, dễ hiểu, dễ nhớ, gi&uacute;p c&aacute;c bạn chủ động học Tiếng Anh mọi nơi, mọi l&uacute;c.<strong><br /></strong></p>\n<p style="text-align: justify;" align="justify">Với chiếc điện thoại th&ocirc;ng minh, hay m&aacute;y t&iacute;nh để b&agrave;n hoặc laptop, m&aacute;y t&iacute;nh bảng, c&aacute;c bạn c&oacute; thể dễ d&agrave;ng mở t&agrave;i liệu ra học những l&uacute;c rảnh rỗi, điều đ&oacute; gi&uacute;p &iacute;ch c&aacute;c bạn rất nhiều khi h&agrave;ng ng&agrave;y c&oacute; qu&aacute; nhiều việc phải bận t&acirc;m, lo lắng v&agrave; giải quyết. C&aacute;c bạn cũng c&oacute; thể in ra cho dễ đọc, l&agrave;m t&agrave;i liệu tham khảo những khi l&agrave;m b&agrave;i tập về nh&agrave; hoặc khi cần tra cứu. Đ&acirc;y l&agrave; một t&agrave;i liệu qu&yacute; gi&aacute; để c&aacute;c bạn n&acirc;ng cao khả năng Tiếng Anh của m&igrave;nh.</p>\n<h3 style="text-align: center;" align="justify"><strong>Ngữ ph&aacute;p tiếng Anh</strong></h3>\n<p style="text-align: justify;" align="justify"><strong>1. Cấu tr&uacute;c chung của một c&acirc;u trong tiếng Anh:</strong></p>\n<p style="text-align: justify;" align="justify">Một c&acirc;u trong tiếng Anh thường bao gồm c&aacute;c th&agrave;nh phần sau đ&acirc;y:</p>\n<p style="text-align: justify;" align="justify"><img src="http://i.vietnamdoc.net/data/image/2015/02/06/on-tap-ngu-phap-tieng-anh1.jpg" alt="&Ocirc;n tập ngữ ph&aacute;p tiếng Anh" width="350" height="91" /></p>\n<p style="text-align: justify;" align="justify">V&iacute; dụ:</p>\n<p style="text-align: justify;" align="justify"><img src="http://i.vndoc.com/data/image/2015/02/06/on-tap-ngu-phap-tieng-anh2.jpg" alt="&Ocirc;n tập ngữ ph&aacute;p tiếng Anh" width="589" height="127" /></p>\n<p style="text-align: justify;"><strong>1.1 Subject (chủ ngữ):</strong></p>\n<p style="text-align: justify;">Chủ ngữ l&agrave; chủ thể của h&agrave;nh động trong c&acirc;u, thường đứng trước động từ (verb). Chủ ngữ thường l&agrave; một danh từ (noun) hoặc một ngữ danh từ (noun phrase - một nh&oacute;m từkết th&uacute;c bằng một danh từ, trong trường hợp n&agrave;y ngữ danh từ kh&ocirc;ng được bắt đầu bằng một giới từ). Chủ ngữ thường đứng ở đầu c&acirc;u v&agrave; quyết định việc chia động từ.</p>\n<p style="text-align: justify;">Ch&uacute; &yacute; rằng mọi c&acirc;u trong tiếng Anh đều c&oacute; chủ ngữ (Trong c&acirc;u mệnh lệnh, chủ ngữ được ngầm hiểu l&agrave; người nghe.</p>\n<p style="text-align: justify;">V&iacute; dụ:</p>\n<ul>\n<li><span style="line-height: 1.5em;">&ldquo;Don''t move!&rdquo; = đứng im!).</span></li>\n<li><span style="line-height: 1.5em;">Milk is delicious. (một danh từ)</span></li>\n<li><span style="line-height: 1.5em;">That new, red car is mine. (một ngữ danh từ)</span></li>\n</ul>\n<p style="text-align: justify;">Đ&ocirc;i khi c&acirc;u kh&ocirc;ng c&oacute; chủ ngữ thật sự, trong trường hợp đ&oacute;, It hoặc There đ&oacute;ng vai tr&ograve; chủ ngữ giả.</p>\n<ul>\n<li><span style="line-height: 1.5em;">It is a nice day today.</span></li>\n<li><span style="line-height: 1.5em;">There are a fire in that building.</span></li>\n<li><span style="line-height: 1.5em;">There were many students in the room.</span></li>\n<li><span style="line-height: 1.5em;">It is the fact that the earth goes around the sun.</span></li>\n</ul>\n<p style="text-align: justify;"><strong>1.2 Verb (động từ):</strong></p>\n<p style="text-align: justify;">Động từ l&agrave; từ chỉ h&agrave;nh động hoặc trạng th&aacute;i của chủ ngữ. Mọi c&acirc;u đều phải c&oacute; động từ.&nbsp;N&oacute; c&oacute; thểl&agrave; một từ đơn hoặc một ngữ động từ. Ngữ động từ(verb phrase) l&agrave; một nh&oacute;m từgồm một hoặc nhiều trợ động từ(auxiliary) v&agrave; một động từch&iacute;nh.</p>\n<ul>\n<li><span style="line-height: 1.5em;">I love you. (chỉ h&agrave;nh động)</span></li>\n<li><span style="line-height: 1.5em;">Chilli is hot. (chỉ trạng th&aacute;i)</span></li>\n<li><span style="line-height: 1.5em;">I have seen the movie three times before. (auxiliary: have; main verb: seen)</span></li>\n<li><span style="line-height: 1.5em;">I am going to Sai Gon tomorrow. (auxiliary: am; main verb: going)</span></li>\n</ul>\n<p style="text-align: justify;"><strong>1.3 Complement (vị ngữ):</strong></p>\n<p style="text-align: justify;">Vị ngữ l&agrave; từ hoặc cụm từ chỉ đối tượng t&aacute;c động của chủ ngữ. Cũng giống như chủ ngữ, vị ngữ thường l&agrave; danh từ hoặc ngữ danh từ kh&ocirc;ng bắt đầu bằng giới từ, tuy nhi&ecirc;n vị ngữ thường đứng sau động từ. Kh&ocirc;ng phải c&acirc;u n&agrave;o cũng c&oacute; complement. Vị ngữ trả lời cho c&acirc;u hỏi What? hoặc Whom?</p>\n<ul>\n<li><span style="line-height: 1.5em;">John bought a car yesterday. (What did John buy?)</span></li>\n<li><span style="line-height: 1.5em;">Jill wants to drink some water. (What does he want to drink?)</span></li>\n<li><span style="line-height: 1.5em;">She saw John at the movie last night. (Whom did she see at the movie?)</span></li>\n</ul>\n<p style="text-align: justify;"><strong>1.4 Modifier (trạng từ):</strong></p>\n<p style="text-align: justify;">Trạng từ l&agrave; từ hoặc cụm từ chỉ thời gian, địa điểm hoặc c&aacute;ch thức của h&agrave;nh động. Kh&ocirc;ng phải c&acirc;u n&agrave;o cũng c&oacute; trạng từ. Ch&uacute;ng thường l&agrave; c&aacute;c cụm giới từ (prepositional phrase), ph&oacute; từ (adverb) hoặc một cụm ph&oacute; từ (adverbial phrase). Ch&uacute;ng trả lời c&acirc;u hỏi When?,&nbsp;Where? hoặc How? Một cụm giới từl&agrave; một cụm từ bắt đầu bằng một giới từ v&agrave; kết th&uacute;c bằng một danh từ (VD: in the morning, on the table,...). Nếu c&oacute; nhiều trạng từ trong c&acirc;u&nbsp;th&igrave; trạng từ chỉ thời gian thường đi sau c&ugrave;ng.</p>\n<ul>\n<li><span style="line-height: 1.5em;">John bought a book at the bookstore. (Where did John buy a book?)</span></li>\n<li><span style="line-height: 1.5em;">She saw John at the movielast night. (Where did she see John? When did she see him?)</span></li>\n<li><span style="line-height: 1.5em;">She drives very fast. (How does she drive?)</span></li>\n</ul>\n<p style="text-align: justify;">Ch&uacute; &yacute; rằng trạng từ thường đi sau vị ngữ nhưng kh&ocirc;ng nhất thiết. Tuy nhi&ecirc;n trạng từ l&agrave; cụm giới từkh&ocirc;ng được nằm giữa động từ v&agrave; vị ngữ.</p>\n<ul>\n<li><span style="line-height: 1.5em;">She drove on the street her new car. (Sai)</span></li>\n<li><span style="line-height: 1.5em;">She drove her new car on the street. (đ&uacute;ng)</span></li>\n</ul>\n', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Nhập liệu và kiểm tra hợp lệ', '4.jpg', 'PDF', '90 trang', '', '', 'Mục đích của CSDL Lưu trữ lâu dài Khai thác hiệu quả Yêu cầu đ/v thiết kế CSDL Đảm bảo...', '', 3, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Phân tích và thiết kế hệ thống', '3.jpg', 'PDF', '50 trang', '', 'PTTKHT_Final.pdf', 'Phân tích và thiết kế ( PT & TK) là những phân việc cực kỳ quan trọng trong quá trình xây dựng một hệ thống tin học\n\n', '  <h3>Chương 1: Giới thiệu về hệ thống v&agrave; hệ thống th&ocirc;ng tin</h3>\n<p>B&agrave;i 1: Kh&aacute;i niệm về ph&acirc;n t&iacute;ch v&agrave; thiết kế hệ thống</p>\n<p>B&agrave;i 2. Kh&aacute;i niệm về hệ thống</p>\n<p>B&agrave;i 3. C&aacute;c đặc trưng của hệ thống</p>\n<p>B&agrave;i 4: Hệ thống th&ocirc;ng tin quản l&yacute;</p>\n<p>B&agrave;i 5. Ph&acirc;n loại c&aacute;c loại th&ocirc;ng tin</p>\n<h3>Chương 2. Ph&acirc;n t&iacute;ch v&agrave; thiết kế hệ thống</h3>\n<p>B&agrave;i 1. Đại cương về ph&acirc;n t&iacute;ch v&agrave; thiết kế hệ thống</p>\n<p>B&agrave;i 2. Khảo s&aacute;t sơ bộ v&agrave; x&aacute;c lập dự &aacute;n</p>\n<p>B&agrave;i 3. Ph&acirc;n t&iacute;ch hệ thống về chức năng</p>\n', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, ' phần mềm Kỹ Thuật A-Z', '9.jpg', 'PDF', '50 trang', '', '', 'Giới thiệu về phân tích và thiết kế hệ thống, chu kỳ phát triển hệ thống, nghiên cứu sơ bộ, mô...', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Sử dụng phần mềm phân tích và tính toán lưới điện ', '7.jpg', 'PDF', '100 trang', 'Lê Minh Thái', '', '', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Business and Administrator', '10.jpg', 'PDF', '150 trang', 'Nguyễn Thị Thảo', '', '', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Tiếng anh trong nghiệp vụ thương mại và kinh doanh', '11.jpg', 'PDF', '100 trang', 'Nguyễn Thị Mộng hảo', '25.pdf', '', '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Sửa chữa, nâng cấp và cài đặt máy tính xách tay', 'a.png\r\n', 'PDF', '200 trang', 'Nguyễn Xuân Trường', '', '', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'The Book of RuBy', 'b.jpg', 'Word', '300 trang', 'Mai Văn thảo', 'b.pdf', '', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Nguyên lý hệ điều hành', 'hedieuhanh.jpg\r\n', 'PDF', '150 trang', 'Phạm Tuấn Anh', 'hedieuhanh.pdf', '', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Kỹ thuật lập trình C', 'kythuatlaptrinhC.jpg\r\n', 'PDF', '100 trang', 'Nguyễn Đức Hiển', 'kythuatlaptrinhC.pdf', '', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'phần mềm phân tích và tính toán lưới điện', '1.jpg', 'PDF', '50 trang', '', '', 'Giới thiệu về phân tích và thiết kế hệ thống, chu kỳ phát triển hệ thống, nghiên cứu sơ bộ, mô...', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Nhập liệu và kiểm tra hợp lệ', '4.jpg', 'PDF', '90 trang', '', '', 'Mục đích của CSDL Lưu trữ lâu dài Khai thác hiệu quả Yêu cầu đ/v thiết kế CSDL Đảm bảo...', '', 3, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Phân tích và thiết kế hệ thống', '3.jpg', 'PDF', '50 trang', '', '', 'Giới thiệu về phân tích và thiết kế hệ thống, chu kỳ phát triển hệ thống, nghiên cứu sơ bộ, mô...', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, ' phần mềm Kỹ Thuật A-Z', '9.jpg', 'PDF', '50 trang', '', '', 'Giới thiệu về phân tích và thiết kế hệ thống, chu kỳ phát triển hệ thống, nghiên cứu sơ bộ, mô...', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'phần mềm phân tích và tính toán lưới điện', '1.jpg', 'PDF', '50 trang', '', '', 'Giới thiệu về phân tích và thiết kế hệ thống, chu kỳ phát triển hệ thống, nghiên cứu sơ bộ, mô...', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Nhập liệu và kiểm tra hợp lệ', '4.jpg', 'PDF', '90 trang', '', '', 'Mục đích của CSDL Lưu trữ lâu dài Khai thác hiệu quả Yêu cầu đ/v thiết kế CSDL Đảm bảo...', '', 3, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Phân tích và thiết kế hệ thống', '3.jpg', 'PDF', '50 trang', '', '', 'Giới thiệu về phân tích và thiết kế hệ thống, chu kỳ phát triển hệ thống, nghiên cứu sơ bộ, mô...', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, ' phần mềm Kỹ Thuật A-Z', '9.jpg', 'PDF', '50 trang', '', '', 'Giới thiệu về phân tích và thiết kế hệ thống, chu kỳ phát triển hệ thống, nghiên cứu sơ bộ, mô...', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Ruby', '2766a5.jpg', 'PDF', '100 trang', 'Nguyễn Đức Hiển', 'hedieuhanh.pdf', 'ruby', '', 2, 0, '2015-06-06 09:15:54', '2015-06-06 09:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `tukhoa`
--

CREATE TABLE IF NOT EXISTS `tukhoa` (
  `STT_TK` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tailieu_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TuKhoa` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`STT_TK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isadmin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `isadmin`, `created_at`, `updated_at`) VALUES
(1, 'Hoàng Nhi', 'nhi@gmail.com', '$2y$10$05jRlQtDoW2qSi0lWDt0H.vS35MbfGXd/LGzWbAGHeUlQIlAEjS.6', 'txuzRwBxrdkWE9oFujBBgbTQDBbvEZeq22thi7a3v0S4WoKd32VYOZqTKyh9', 1, '2015-05-31 07:44:25', '2015-06-07 08:31:43'),
(2, 'Trần Chánh Hiệp', 'hiepga@gmail.com', '$2y$10$u0diGIIWGKU7quc1iJvhSOzWzbTmg9/5i.0jJXVMRPbsogxyHMKoW', 'UFQcwP1qHqZBfuCxwrijnAduGB3Yes4T73XNf0b9w0WQXTf9K58ZbxU6Wsq4', 0, '2015-05-31 08:11:48', '2015-05-31 18:33:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
