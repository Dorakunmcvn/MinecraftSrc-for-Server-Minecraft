-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th8 28, 2021 lúc 05:56 PM
-- Phiên bản máy phục vụ: 10.3.30-MariaDB-cll-lve
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tcceldoradoga_myproject`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gachthe`
--

CREATE TABLE `gachthe` (
  `id` int(10) NOT NULL,
  `code` text NOT NULL,
  `serial` text NOT NULL,
  `menhgia` int(11) NOT NULL,
  `loaithe` int(11) NOT NULL,
  `uid` varchar(32) NOT NULL,
  `tinhtrang` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `gachthe`
--

INSERT INTO `gachthe` (`id`, `code`, `serial`, `menhgia`, `loaithe`, `uid`, `tinhtrang`) VALUES
(42, '10007855176110', '45560733164551', 500000, 0, 'IzSansVN', 'Thành công');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `username` text DEFAULT NULL,
  `realname` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `ip` text DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `isLogged` text DEFAULT NULL,
  `hasSession` text DEFAULT NULL,
  `lastlogin` text DEFAULT NULL,
  `x` double NOT NULL DEFAULT 0,
  `y` double NOT NULL DEFAULT 0,
  `z` double NOT NULL DEFAULT 0,
  `world` varchar(255) NOT NULL DEFAULT 'world',
  `regdate` text DEFAULT NULL,
  `regip` text DEFAULT NULL,
  `yaw` float DEFAULT NULL,
  `pitch` float DEFAULT NULL,
  `totp` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`username`, `realname`, `password`, `email`, `ip`, `id`, `isLogged`, `hasSession`, `lastlogin`, `x`, `y`, `z`, `world`, `regdate`, `regip`, `yaw`, `pitch`, `totp`) VALUES
('admin', 'admin', '$SHA$ec56fe2ac07d9571$50215b3d60c503f748c256ca8f142152bddf6d8100bd454f33c15d5e26f8e8d1', 'your@email.com', '42.117.110.169', NULL, NULL, NULL, NULL, 0, 0, 0, 'world', NULL, NULL, NULL, NULL, NULL),
('adminx', 'adminx', '$SHA$bd02808ae5907fac$f80c05b531ff25a1690ddac532f68476deeb4c37fa5036221d92cc4d940f8350', 'aaaaa@gmail.com', '42.117.110.169', NULL, NULL, NULL, NULL, 0, 0, 0, 'world', NULL, NULL, NULL, NULL, NULL),
('administrator', 'administrator', '$SHA$91da65b1730b1117$2c6255fbfe4a203093c6ac05fe12271ba228232da72ffc8ac94d99ca92b83000', 'dorakunmcvn2@gmail.com', '42.117.110.169', NULL, NULL, NULL, NULL, 0, 0, 0, 'world', NULL, NULL, NULL, NULL, NULL),
('administratoraaaa', 'administratoraaaa', '$SHA$4432ae8f9c9a065d$9e0226f1c9ee8940f59089b2e21ff6793bc9574fd65001c8e505823f275bc850', 'skyblockjinma@gmail.comx', '42.117.110.169', NULL, NULL, NULL, NULL, 0, 0, 0, 'world', NULL, NULL, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `gachthe`
--
ALTER TABLE `gachthe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `gachthe`
--
ALTER TABLE `gachthe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
