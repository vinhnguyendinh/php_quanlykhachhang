-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 27, 2017 lúc 04:19 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `employee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` text,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `fullName`, `username`, `password`, `email`, `description`, `image`) VALUES
(1, 'Nguyễn Đình Vinh', 'admin1', '202cb962ac59075b964b07152d234b70', 'admin1@gmail.com', 'Tác giả bài tập lớn PHP', '1.JPG'),
(2, 'Vũ Phương Linh', 'admin2', '81dc9bdb52d04dc20036dbd8313ed055', 'admin2@gmail.com', 'Ô sin', '2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `tbldepartment`
--

INSERT INTO `tbldepartment` (`id`, `name`, `description`, `image`) VALUES
(1, 'Quản lý', '', '15005308161.PNG'),
(2, 'Nhân sự', 'Phòng nhân sự', '15005308252.jpg'),
(3, 'Tài vụ', '', '15005664518.jpg'),
(4, 'Phân tích', '', '15005664334.jpg'),
(5, 'Phát triển', '', '15005308475.jpg'),
(6, 'Tuyển dụng', '', '15005308536.jpg'),
(7, 'Kiểm thử', 'Phòng cho tester', '15005474939.jpg'),
(9, 'Thiết kế', 'Chuyên designer', '15006080617.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblemployee`
--

CREATE TABLE `tblemployee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birthYear` int(11) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `tblemployee`
--

INSERT INTO `tblemployee` (`id`, `name`, `birthYear`, `phone`, `email`, `department_id`, `position`) VALUES
(1, 'Nguyễn Thị Thu Quỳnh', 1990, '012345678', 'name1@gmail.com', 1, 'Trưởng phòng'),
(2, 'Đào Thị Mai Anh', 1991, '012345679', 'name2@gmail.com', 2, 'Phó phòng'),
(3, 'Nguyễn Thị Hương', 1992, '012345680', 'name3@gmail.com', 3, 'Nhân viên'),
(4, 'Nguyễn Thị Thùy Linh', 1990, '012345681', 'name4@gmail.com', 4, 'Trưởng phòng'),
(5, 'Nguyễn Trọng Dương', 1991, '012345682', 'name5@gmail.com', 5, 'Phó phòng'),
(6, 'Trần Thị Thanh', 1992, '012345683', 'name6@gmail.com', 6, 'Thời vụ'),
(7, 'Hà Việt Bắc', 1994, '012345684', 'name7@gmail.com', 1, 'Trưởng phòng'),
(8, 'Lương Thuý Phương', 1990, '012345685', 'name8@gmail.com', 2, 'Phó phòng'),
(9, 'Hoàng Văn Tiệp', 1993, '012345686', 'name9@gmail.com', 5, 'Nhân viên'),
(10, 'Hoàng Xuân Quý', 1994, '012345687', 'name10@gmail.com', 5, 'Trưởng phòng'),
(11, 'Lê Thị Liên', 1994, '012345688', 'name11@gmail.com', 5, 'Phó phòng'),
(12, 'Đặng Viết Lợi', 1990, '012345689', 'name12@gmail.com', 6, 'Nhân viên'),
(13, 'Nguyễn Thị Bích Diệp', 1990, '012345690', 'name13@gmail.com', 7, 'Trưởng phòng'),
(14, 'Phạm Tuấn Anh', 1994, '012345691', 'name14@gmail.com', 5, 'Phó phòng'),
(15, 'Ngô Văn Thành', 1996, '012345692', 'name15@gmail.com', 7, 'Thực tập');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblmessage`
--

CREATE TABLE `tblmessage` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tblmessage`
--

INSERT INTO `tblmessage` (`name`, `email`, `message`) VALUES
('Ngô Tiến Đức', 'tienduccorn@gmail.com', 'Dear,\r\nYou succeed!\r\n'),
('SQA', 'ductn95@gmail.com', 'qwueuiqeyi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblstudent`
--

CREATE TABLE `tblstudent` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthYear` varchar(10) NOT NULL,
  `university` varchar(200) NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tblstudent`
--

INSERT INTO `tblstudent` (`id`, `lastname`, `firstname`, `sex`, `birthYear`, `university`, `score`) VALUES
(1, 'Lê Việt', 'Anh', 'Nam', '1995', 'PTIT', 9),
(2, 'Nguyễn Quỳnh', 'Anh', 'Nữ', '1992', 'TLU', 7),
(3, 'Nguyễn Hữu', 'Chí', 'Nam', '1993', 'FTU', 9),
(4, 'Nguyễn Bá', 'Cương', 'Nam', '1994', 'HAU', 6),
(5, 'Vũ Hải', 'Đăng', 'Nam', '1995', 'NEU', 7),
(6, 'Nguyễn Tiến', 'Đạt', 'Nam', '1991', 'HANU', 5),
(7, 'Cao Thị', 'Diệp', 'Nữ', '1992', 'PTIT', 9),
(8, 'Tống Đình', 'Đồng', 'Nam', '1993', 'TLU', 10),
(9, 'Ngô Tiến', 'Đức', 'Nam', '1994', 'FTU', 8),
(10, 'Tiêu Quang', 'Duệ', 'Nam', '1995', 'HAU', 9),
(11, 'Nguyễn Thị', 'Dung', 'Nữ', '1991', 'NEU', 6),
(12, 'Lê Hữu', 'Dũng', 'Nam', '1992', 'HANU', 7),
(13, 'Trịnh Mạnh', 'Dũng', 'Nam', '1993', 'PTIT', 8),
(14, 'Lê Hoàng', 'Giang', 'Nam', '1994', 'TLU', 9),
(15, 'Bùi Hoàng', 'Hà', 'Nam', '1995', 'FTU', 10),
(16, 'Nguyễn Thị Thu', 'Hà', 'Nữ', '1991', 'HAU', 6),
(17, 'Nguyễn Hữu', 'Hiệp', 'Nam', '1992', 'NEU', 8),
(18, 'Nguyễn Văn', 'Hiếu', 'Nam', '1993', 'HANU', 9),
(19, 'Nguyễn Quốc', 'Hoàn', 'Nam', '1994', 'PTIT', 7),
(20, 'Nguyễn Nhật', 'Hồng', 'Nữ', '1995', 'TLU', 8),
(21, 'Đặng Đình', 'Hùng', 'Nam', '1991', 'FTU', 7),
(22, 'Nguyễn Văn', 'Hưng', 'Nam', '1992', 'HAU', 6),
(23, 'Nguyễn Quý', 'Hữu', 'Nam', '1993', 'NEU', 7),
(24, 'Nguyễn Hữu', 'Huy', 'Nam', '1994', 'HANU', 8),
(25, 'Phạm Đình', 'Khánh', 'Nam', '1995', 'PTIT', 9),
(26, 'Nguyễn Ngọc', 'Linh', 'Nam', '1991', 'TLU', 10),
(27, 'Phạm Hồng', 'Long', 'Nam', '1992', 'FTU', 7),
(28, 'Trịnh Kim', 'Long', 'Nam', '1993', 'HAU', 8),
(29, 'Nguyễn Hữu', 'Mạnh', 'Nam', '1994', 'NEU', 9),
(30, 'Lưu Thị Hồng', 'Minh', 'Nam', '1995', 'HANU', 8),
(31, 'Đặng Tuấn', 'Minh', 'Nam', '1991', 'PTIT', 7),
(32, 'Lương Thị Huyền', 'My', 'Nữ', '1992', 'TLU', 6),
(33, 'Chu Hoàng', 'Nam', 'Nam', '1993', 'FTU', 7),
(34, 'Đàm Hải', 'Nam', 'Nam', '1994', 'HAU', 8),
(35, 'Nguyễn Thành', 'Nam', 'Nam', '1995', 'NEU', 9),
(36, 'Nguyễn Văn', 'Ngọc', 'Nam', '1991', 'HANU', 10),
(37, 'Vũ Duy', 'Phúc', 'Nam', '1992', 'PTIT', 8),
(38, 'Nguyễn Xuân', 'Phương', 'Nam', '1993', 'TLU', 7),
(39, 'Phạm Văn', 'Quân', 'Nam', '1994', 'FTU', 9),
(40, 'Đào Ngọc', 'Quang', 'Nam', '1995', 'HAU', 6),
(41, 'Thái Minh', 'Quang', 'Nam', '1991', 'NEU', 7),
(42, 'Phạm Ngọc', 'Sơn', 'Nam', '1992', 'HANU', 5),
(43, 'Nguyễn Trung', 'Sơn', 'Nam', '1993', 'PTIT', 9),
(44, 'Trần Thị', 'Thiết', 'Nữ', '1994', 'TLU', 10),
(45, 'Nguyễn Thị', 'Thu', 'Nữ', '1995', 'FTU', 8),
(46, 'Dương Hà', 'Tín', 'Nam', '1991', 'HAU', 7),
(47, 'Hoàng Minh', 'Toàn', 'Nam', '1992', 'NEU', 9),
(48, 'Mai Đức', 'Toàn', 'Nam', '1993', 'HANU', 6),
(49, 'Đào Thị Thùy', 'Trang', 'Nữ', '1994', 'PTIT', 7),
(50, 'Phan Thị Hà', 'Trang', 'Nữ', '1995', 'TLU', 5),
(51, 'Nguyễn Ngọc', 'Triệu', 'Nam', '1991', 'FTU', 9),
(52, 'Vũ Minh', 'Tuấn', 'Nam', '1992', 'HAU', 10),
(53, 'Nguyễn', 'Tuấn', 'Nam', '1993', 'NEU', 8),
(54, 'Nguyễn Hưng', 'Tuấn', 'Nam', '1994', 'HANU', 7),
(55, 'Trần Thanh', 'Tùng', 'Nam', '1995', 'PTIT', 9),
(56, 'Vũ Công', 'Văn', 'Nam', '1991', 'TLU', 6),
(57, 'Bùi Thế', 'Vũ', 'Nam', '1992', 'FTU', 7),
(59, 'Nguyễn Văn ', 'Hậu', 'Nam', '1996', 'HAU', 10),
(60, 'John', 'Cena', 'Nam', '1990', 'PTIT', 10),
(61, 'Rafa', 'Nadal', 'Nam', '1991', 'TLU', 8),
(62, 'Roger', 'Federer', 'Nam', '1992', 'FTU', 7);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
