-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th5 16, 2023 lúc 05:57 PM
-- Phiên bản máy phục vụ: 5.7.41-cll-lve
-- Phiên bản PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tadminkdvcom_chanle`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangchung`
--

CREATE TABLE `bangchung` (
  `id` int(11) NOT NULL,
  `code` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bangchung`
--

INSERT INTO `bangchung` (`id`, `code`, `image`) VALUES
(21, 'fbdfhdfgdf', '/storage/BC_7082.png'),
(22, 'fbdfhdfgdf', '/storage/BC_7360.png'),
(23, 'le-thanh-lam', '/storage/BC_0817.png'),
(24, 'le-thanh-lam', '/storage/BC_3482.png'),
(25, 'le-thanh-lam', '/storage/BC_7253.png'),
(26, 'le-thanh-lam', '/storage/BC_6048.png'),
(27, 'nguyen-nam-anh', '/storage/BC_8901.png'),
(28, 'nguyen-nam-anh', '/storage/BC_0634.png'),
(29, 'pham-cong-vinh', '/storage/BC_8209.png'),
(30, 'pham-cong-vinh', '/storage/BC_4670.png'),
(31, 'pham-cong-vinh', '/storage/BC_4387.png'),
(32, 'ta-giang-thanh', '/storage/BC_9834.png'),
(33, 'ta-giang-thanh', '/storage/BC_9452.png'),
(34, 'ta-giang-thanh', '/storage/BC_4309.png'),
(35, 'ta-giang-thanh', '/storage/BC_1502.png'),
(36, 'nguyen-long-nhat', '/storage/BC_5198.png'),
(37, 'nguyen-duc-nam', '/storage/BC_1720.png'),
(38, 'nguyen-duc-nam', '/storage/BC_2490.png'),
(39, 'tran-ba-quoc-quyen', '/storage/BC_9316.png'),
(40, 'tran-ba-quoc-quyen', '/storage/BC_8452.png'),
(41, 'bui-minh-khoa', '/storage/BC_4263.png'),
(42, 'chich', '/storage/BC_5491.png'),
(43, 'huynh-ngoc-nhat', '/storage/BC_7052.png'),
(44, 'duudududjd', '/storage/BC_4503.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `username` text NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `number` text,
  `sdt` text,
  `telegram` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `id_fb` text,
  `website` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `dich_vu` text,
  `money` text,
  `gmail` text,
  `ngan_hang` text,
  `dichvucungcap` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `mota` text,
  `trunggian` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `cards`
--

INSERT INTO `cards` (`id`, `code`, `username`, `image`, `number`, `sdt`, `telegram`, `id_fb`, `website`, `dich_vu`, `money`, `gmail`, `ngan_hang`, `dichvucungcap`, `mota`, `trunggian`) VALUES
(160, 'nguyen-hoang-manh', 'Nguyễn Hoàng Mạnh ', 'Cc', '1', '0764369600', 'Không có ', '1', 'AdminKdv.com', 'QUẢN LÝ VÀ ĐIỀU HÀNH', '1000000000000', NULL, 'MOMO', 'Cc', 'AdminKdv.com', '10-200 2k , 200-1m 5k , ->1m 10k');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `code` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `code`) VALUES
(11, 'QUẢN LÝ VÀ ĐIỀU HÀNH'),
(30, 'GDV MMO UY TÍN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `link` varchar(225) CHARACTER SET utf8mb4 NOT NULL,
  `image-news` varchar(225) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tieude` text CHARACTER SET utf8mb4,
  `noidung` varchar(225) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ngaydang` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `status` text CHARACTER SET utf8mb4,
  `luotxem` varchar(225) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `site_domain` text,
  `site_logo` text,
  `site_tenweb` text,
  `site_mota` text,
  `facebook` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci,
  `sdt_admin` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `modal` text,
  `news` text,
  `token_tele` text,
  `chatid_tele` text,
  `banner` text,
  `gmail_ad` text,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `colorhover` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `site_domain`, `site_logo`, `site_tenweb`, `site_mota`, `facebook`, `sdt_admin`, `modal`, `news`, `token_tele`, `chatid_tele`, `banner`, `gmail_ad`, `color`, `colorhover`) VALUES
(1, '/', 'https://i.imgur.com/d0M8a2j.png', 'ADMINKDV', '[ADMINKDV.COM]- QUỸ BẢO HIỂM GDV UY TIN', 'https://www.facebook.com/hmanhcuti', '0777165380', '<p open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\" style=\"\"></p><h1 style=\"text-align: center; \"><font face=\"Roboto, Arial, Helvetica, sans-serif\"><font color=\"#333333\" style=\"font-weight: bold;\">&nbsp;</font><span style=\"font-family: &quot;Times New Roman&quot;;\" times=\"\" new=\"\" roman\";\"=\"\" roman\";=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\" rgb(0,=\"\" 0);\"=\"\"><font color=\"#9c00ff\" style=\"\"><b>ADMINKDV.COM</b></font></span></font></h1><h6><font color=\"#9c00ff\" style=\"background-color: rgb(255, 255, 255);\">•</font><font color=\"#9c00ff\" style=\"background-color: rgb(255, 255, 255);\">Lưu ý link cọc là link ảo ko cọc thật nên check kĩ hoặc gdtg!</font><font color=\"#ce0000\" style=\"\"><span style=\"\" times=\"\" new=\"\" roman\";\"=\"\">[scam=xoá link...]</span></font></h6><h5><font style=\"\" color=\"#9c00ff\">Facebook</font><font style=\"background-color: rgb(255, 255, 255);\" color=\"#9c00ff\">:</font><font color=\"#6ba54a\" style=\"font-weight: bold;\"> </font><a href=\"HTTPS://facebook.com/hmanhcuti/\" target=\"_blank\">Nguyễn Hoàng Mạnh</a>,&nbsp;<a href=\"https://www.facebook.com/TranMinhThanh.X.Developed\" target=\"_blank\">Trần Minh Thành</a><font color=\"#ce0000\" style=\"\"></font></h5><p open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\" style=\"text-align: center; \"><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(51, 51, 51); font-family: Roboto, Arial, Helvetica, sans-serif; font-weight: 700;\">► </span><span style=\"font-family: Roboto, Arial, Helvetica, sans-serif;\"><font color=\"#9c00ff\" style=\"\">MỌI CHI TIẾT VỀ QUỸ BẢO HIỂM LIÊN HỆ</font></span><span style=\"color: rgb(51, 51, 51); font-family: Roboto, Arial, Helvetica, sans-serif;\"> :&nbsp; &nbsp;&nbsp;</span><font color=\"#232323\" style=\"color: rgb(35, 35, 35);\">&nbsp;</font></span></p><p open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\" style=\"\"><span style=\"background-color: rgb(255, 255, 255);\"><font color=\"#232323\" style=\"color: rgb(35, 35, 35);\"><img src=\"https://adminmmo.vn/icon/zalo.png\" height=\"15\" style=\"\">&nbsp; <a href=\"HTTPS://zalo.me/0777165380\" target=\"_blank\"><u>0777165380</u></a>&nbsp;</font></span></p><p open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\" style=\"\"><font color=\"#232323\" style=\"font-size: 1rem; color: rgb(35, 35, 35);\"><img src=\"https://adminmmo.vn/icon/zalo.png\" height=\"15\">&nbsp;&nbsp;</font><a href=\"HTTPS://zalo.me/0342657084\" target=\"_blank\"><u>0342657084</u></a>&nbsp;</p><p open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\" style=\"\"><img src=\"https://i.imgur.com/vm7SdgJ.png\" style=\"width: 357.344px;\"><br></p>', '<p>Helo</p>', '<br /><b>Notice</b>:  Undefined variable: token_tele in <b>/home/admincss/public_html/adminvietnam/cai-dat.php</b> on line <b>95</b><br />', '1', '<br /><b>Notice</b>:  Undefined variable: banner in <b>/home/admincss/public_html/adminvietnam/cai-dat.php</b> on line <b>67</b><br />', '<br /><b>Notice</b>:  Undefined variable: gmail in <b>/home/admincss/public_html/adminvietnam/cai-dat.php</b> on line <b>88</b><br />', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `ly_do` text,
  `status` varchar(32) NOT NULL,
  `sdt` text,
  `ngan_hang` text,
  `stk` text,
  `hoten_np` text,
  `sdt_np` text,
  `code` text,
  `view` varchar(225) DEFAULT NULL,
  `ngay` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `ticket`
--

INSERT INTO `ticket` (`id`, `username`, `ly_do`, `status`, `sdt`, `ngan_hang`, `stk`, `hoten_np`, `sdt_np`, `code`, `view`, `ngay`) VALUES
(62, 'Phạm Công Vinh', 'Scam', 'scam', 'Không có', 'Mb', '99127200699999', 'Duy phú', '0859936209', 'pham-cong-vinh', '95', '10-02-2023'),
(63, 'Tạ Giang Thành', 'Scam rác ', 'scam', '222220122007', 'MB', '222220122007', 'ĐẶNG QUANG SANG ', '0832146609', 'ta-giang-thanh', '85', '16-02-2023'),
(65, 'Nguyễn thanh dũng', 'Lừa đảo chiếm đoạt tài sản của người khác.', 'scam', '0394227433', 'MB bank', '44500330882005', 'Thào mí toả ', '0345064052', 'nguyen-thanh-dung', '73', '07-03-2023'),
(69, 'Đỗ chí dũng', 'Scam 55k', 'scam', 'Ko có', 'Mb bank', '8666888888368', 'Quốc Vinh', '0702916681', 'do-chi-dung', '12', '06-05-2023'),
(70, 'Bùi Minh Khoa', 'scam 198', 'scam', '0769070109', 'momo', '0769070109', 'Huy Bảo', '0987949481', 'bui-minh-khoa', '5', '08-05-2023'),
(72, 'Huynh Ngoc Nhat ', 'Scam ', 'scam', '0388702317', 'Zalo Pay ', '0775082174', 'Nguyễn Hoàng Đang ', '0347963634', 'huynh-ngoc-nhat', '27', '09-05-2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `token` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `token`, `username`, `password`) VALUES
(1, '2030', 'hmanhcuti', 'hmanhcuti');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bangchung`
--
ALTER TABLE `bangchung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`link`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bangchung`
--
ALTER TABLE `bangchung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
