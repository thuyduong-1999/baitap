-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2019 lúc 02:07 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `admin`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `cateid` mediumint(9) NOT NULL,
  `catename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`cateid`, `catename`, `icon`) VALUES
(2, 'Tuyển sinh', 'fa fa-graduation-cap'),
(3, 'Đào tạo', 'fa fa-book'),
(4, 'Nghiên cứu', '	fa fa-bookmark'),
(5, 'Hợp tác doanh nghiệp', 'fa fa-handshake-o');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `genre`
--

CREATE TABLE `genre` (
  `genid` mediumint(9) NOT NULL,
  `cateid` mediumint(9) NOT NULL,
  `genname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `genre`
--

INSERT INTO `genre` (`genid`, `cateid`, `genname`) VALUES
(1, 1, 'Giới thiệu chung'),
(2, 1, 'Toàn cảnh DH Nguyễn Tất Thành'),
(3, 1, 'Hệ thống Cơ sở vật chất'),
(4, 1, 'Thông tin công khai'),
(5, 1, '	Đảo bảo chất lượng'),
(6, 1, '	Phát triển bền vững'),
(7, 1, 'Môi trường học tập'),
(8, 2, 'Thông tin tuyển sinh'),
(9, 2, 'Các bậc đào tạo'),
(10, 2, 'Chính sách học bổng'),
(11, 2, 'Hướng nghiệp'),
(12, 2, 'Xét tuyển trực tuyến'),
(13, 3, 'Khối khoa học sức khỏe'),
(14, 3, 'Khối kinh tế quản trị'),
(15, 3, 'Khối kĩ thuật công nghệ'),
(16, 3, 'Khối khoa học xã hội nhân văn'),
(17, 3, 'Khối mỹ thuật nghệ thuật'),
(18, 3, 'Khối đào tạo quốc tế'),
(19, 4, 'Hoạt động khoa học công nghệ'),
(20, 4, 'Viện trung tâm nghiên cứu'),
(21, 4, 'Công bố khoa học'),
(22, 5, 'Giới thiệu việc làm'),
(23, 5, 'Giới thiệu thực tập'),
(24, 5, 'Câu lạc bộ doanh nghiệp'),
(25, 5, 'Ban liên kết cựu sinh viên'),
(26, 5, 'Liên kết hợp tác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `newid` mediumint(11) NOT NULL,
  `userid` mediumint(11) NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `descrip` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`newid`, `userid`, `title`, `descrip`, `img`) VALUES
(1, 1, 'Khoa Tài chính – Kế toán chào đón các \"tân binh\"', 'NTTU – Hòa chung không khí toàn trường ĐH Nguyễn Tất Thành chào đón năm học mới, hơn 200 tân sinh viên khoa Tài chính – Kết toán hào hứng tham gia Lễ chào đón tân sinh viên và Ngày hội tuyển dụng thực tập', '1.jpg'),
(2, 1, 'Nam diễn viên Đoàn Minh Tài tham gia giảng dạy tại ĐH Nguyễn Tất Thành', 'NTTU – Vừa qua, nam diễn viên/người mẫu/MC điển trai Đoàn Minh Tài đã chính thức trở thành Giảng viên doanh nhân của Trường ĐH Nguyễn Tất Thành', '2.jpg'),
(3, 1, 'ĐH Nguyễn Tất Thành tuyển sinh Thạc sỹ đợt 2 năm 2019', 'NTTU – Viện Nghiên cứu và Đào tạo sau đại học Trường ĐH Nguyễn Tất Thành thông báo tuyển sinh bậc sau đại học đợt 2 năm 2019. Hồ sơ nhận đến ngày 30/10/2019', '3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userid` mediumint(100) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `userlevel` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userid`, `fullname`, `username`, `password`, `email`, `phone`, `userlevel`) VALUES
(1, 'quach thuy duong', 'thuyduong', '$2y$10$CqH61fHWy/AgUORS.k2MKeAP/5ZuGI3z0wojQW1c7S6hp5s.jCD/2', 'duong@gmail.com', '0976543123', 1),
(2, 'do thi hai', 'dohai', '$2y$10$UWtNmyXCHiLe/Xf/6G9HQOdXQBqocjyptVRVZCUWnI92EmYXLQmRy', 'hai@gmail.com', '0912456379', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cateid`);

--
-- Chỉ mục cho bảng `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genid`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `cateid` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `genre`
--
ALTER TABLE `genre`
  MODIFY `genid` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `newid` mediumint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userid` mediumint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
