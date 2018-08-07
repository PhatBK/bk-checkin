-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 07, 2018 lúc 11:49 AM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `diem_danh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem_danh`
--

CREATE TABLE `diem_danh` (
  `ma_diem_danh` int(11) UNSIGNED NOT NULL,
  `ma_so` int(11) UNSIGNED NOT NULL,
  `ma_lop` int(11) UNSIGNED NOT NULL,
  `so_nghi` int(5) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ke_hoach`
--

CREATE TABLE `ke_hoach` (
  `id` int(11) UNSIGNED NOT NULL,
  `ma_so` int(11) UNSIGNED NOT NULL,
  `ma_lop` int(11) UNSIGNED NOT NULL,
  `hoc_ky` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ke_hoach`
--

INSERT INTO `ke_hoach` (`id`, `ma_so`, `ma_lop`, `hoc_ky`, `created_at`, `updated_at`) VALUES
(13, 20140002, 10001000, 1, '2018-08-06 09:33:49', '2018-08-06 09:33:49'),
(14, 20140001, 10001000, 1, '2018-08-06 09:33:52', '2018-08-06 09:33:52'),
(15, 20140003, 10001000, 1, '2018-08-06 09:33:56', '2018-08-06 09:33:56'),
(16, 20150001, 10001000, 1, '2018-08-06 09:33:59', '2018-08-06 09:33:59'),
(17, 20150002, 10001000, 1, '2018-08-06 09:34:02', '2018-08-06 09:34:02'),
(18, 20150003, 10001000, 1, '2018-08-06 09:34:05', '2018-08-06 09:34:05'),
(21, 20140007, 10001002, 1, '2018-08-06 09:32:41', '2018-08-06 09:32:41'),
(23, 20130001, 10001000, 1, '2018-08-06 09:35:01', '2018-08-06 09:35:01'),
(24, 20140009, 10001000, 1, '2018-08-06 09:41:46', '2018-08-06 09:41:46'),
(25, 20160008, 10001000, 1, '2018-08-06 09:59:26', '2018-08-06 09:59:26'),
(26, 20120001, 10001001, 1, '2018-08-06 11:01:26', '2018-08-06 11:01:26'),
(27, 20140001, 10001005, 1, '2018-08-06 14:42:29', '2018-08-06 14:42:29'),
(28, 20160008, 10001000, 1, '2018-08-07 03:27:33', '2018-08-07 03:27:33'),
(29, 20170001, 10001000, 1, '2018-08-07 03:33:45', '2018-08-07 03:33:45'),
(30, 20170002, 10001000, 1, '2018-08-07 06:24:59', '2018-08-07 06:24:59'),
(31, 20170004, 10001001, 1, '2018-08-07 06:26:30', '2018-08-07 06:26:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lich_su`
--

CREATE TABLE `lich_su` (
  `ma_lop` int(11) UNSIGNED NOT NULL,
  `ngay` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `so_nghi` int(5) NOT NULL,
  `so_di` int(5) NOT NULL,
  `ma_lich_su` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop_hoc`
--

CREATE TABLE `lop_hoc` (
  `ma_lop` int(11) UNSIGNED NOT NULL,
  `ma_mon` int(11) UNSIGNED NOT NULL,
  `thu` int(2) NOT NULL,
  `vi_tri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoi_luong` int(11) NOT NULL,
  `bat_dau` time NOT NULL,
  `ket_thuc` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop_hoc`
--

INSERT INTO `lop_hoc` (`ma_lop`, `ma_mon`, `thu`, `vi_tri`, `thoi_luong`, `bat_dau`, `ket_thuc`) VALUES
(10001000, 12345, 2, 'TC-201', 15, '06:45:00', '10:15:00'),
(10001001, 21324, 2, 'TC-201', 15, '09:15:00', '11:45:00'),
(10001002, 123123, 3, 'D5-207', 15, '12:30:00', '15:00:00'),
(10001005, 291830, 5, 'D3-201', 15, '06:45:00', '09:15:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon_hoc`
--

CREATE TABLE `mon_hoc` (
  `ma_mon` int(11) UNSIGNED NOT NULL,
  `ten_mon` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mon_hoc`
--

INSERT INTO `mon_hoc` (`ma_mon`, `ten_mon`) VALUES
(12342, 'Toán Rời Rạc'),
(12345, 'Cấu Trúc Dữ Liệu Và Giải Thuật'),
(21324, 'Cơ Sở Truyền Tin'),
(42324, 'Điện Tử Tưng Tự'),
(123123, 'Lý Thuyết Thông Tin'),
(291830, 'Thiết Kế Mạch'),
(543234, 'Vy Sử Lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngay_nghi`
--

CREATE TABLE `ngay_nghi` (
  `ma_ngay_nghi` int(11) UNSIGNED NOT NULL,
  `ma_diem_danh` int(11) UNSIGNED NOT NULL,
  `ngay` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin`
--

CREATE TABLE `thong_tin` (
  `id` int(11) UNSIGNED NOT NULL,
  `ma_so` int(11) UNSIGNED NOT NULL,
  `ho_ten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `khoa` int(5) NOT NULL,
  `vien` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_tin`
--

INSERT INTO `thong_tin` (`id`, `ma_so`, `ho_ten`, `khoa`, `vien`) VALUES
(1, 20140001, 'Bùi Như Lạc', 60, 'CNTT & TT'),
(2, 20140002, 'Nguyễn Văn Công', 59, 'CNTT & TT\r\n'),
(3, 20140003, 'Nguyễn Huy Phát', 59, 'CNTT & TT'),
(5, 20150002, 'Cao Bá Quát', 59, 'Dệt May'),
(6, 20150003, 'Hoàng Thị Thu Huyền', 59, 'Kinh tế và Quản Lý'),
(8, 20150001, 'Vũ Thu Hương', 59, 'Sư Phạm Kỹ Thuật');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ma_so` int(11) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ho_ten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `khoa_vien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khoa` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `ma_so`, `username`, `password`, `email`, `level`, `remember_token`, `created_at`, `updated_at`, `ho_ten`, `khoa_vien`, `khoa`) VALUES
(1, 20140001, '20140001', '$2y$10$ZtFMWSRHRnmTEMTz/a/7hegaPA0BS4iXSeqEGLKUM7kuUmH0rB2eK', '222@gmail.com', 3, 'iv5n6PEWKMoyAUitEIEnLWcBW7oIQd7iBEq5E80mQSob95AYF9Rm4NMY1KB9', '2018-08-03 03:49:53', '2018-08-03 03:49:53', 'Hoàng Xuân Vinh', 'CNTT&TT', 59),
(2, 20140002, '20140002', '$2y$10$yhMtMKRQ850Aeeofe.i/4uZBP8jH4olkK03cruPjmgL.EbLy/CLBK', '20140514@gmail.com', 3, NULL, '2018-08-03 04:09:34', '2018-08-03 04:09:34', 'Hoàng Cao Huyền', 'CNTT&TT', 59),
(3, 20140003, '2014003', '$2y$10$KHtpQYPGcYCLJEuaqtdlNe7MxUO8f3G3I.3zaFIoZozMQ.6h2tqJi', '20143397@gmail.com', 3, 'uFfsTStwIRNBWG7Ttxxes983qAvi4yGAK8TY9KPVcrq2KTemgIqWBvuAdg2R', '2018-08-03 04:10:05', '2018-08-03 04:10:05', 'Cao Bá Quát', 'CNTT&TT', 59),
(4, 10101010, 'quanly1', '$2y$10$nG6lMAgZCD1Pn6q0WRhFTuDxWHfZ84FShDbfQkRgEJHeEN7gVdpti', 'quanly.hust@gmail.com', 1, 'ycsKZI4Re4LQ5sTZ6ms1J9hyZn4mf3AWUuIntL9izQYXrx9uBH8WE808SegF', '2018-08-06 02:39:46', '2018-08-06 02:39:46', 'Vũ Trọng phụng', 'CNTT&TT', 0),
(5, 10102102, 'quanly2', '$2y$10$YYWJDHlF1lKhqOXYGxT70OyfZ3RJk/Hp6zu.x75QPVI0F/zKq5zJ.', 'quanly2@quanly.hust.edu.vn', 1, NULL, '2018-08-06 02:40:29', '2018-08-06 02:40:29', 'Ngô Tất Tố', 'CNTT&TT', 0),
(6, 20150001, '20150001', '$2y$10$4LPqJkV4mU0i7dSqR9EvZ.Ayleu4lhvZjlhore1CYelH6pXpc5Gnq', '20150001@gmail.com', 3, NULL, '2018-08-06 03:18:22', '2018-08-06 03:18:22', 'Nguyễn Du', 'CNTT&TT', 60),
(7, 20150002, '20150002', '$2y$10$F2JgaXdVhzmuWP47AEY7Z.DEiuZV/M05LaxiH5wqRlSizzy5IQsee', '20161234@sis.hust.edu.vn', 3, NULL, '2018-08-06 03:24:30', '2018-08-07 07:56:08', 'Nguyễn Nam Cao', 'CNTT&TT', 60),
(8, 20150003, '20150003', '$2y$10$NtBd/j7ROcWotCRNXdO6s.Inlbqd/nFuFZg4FJOZ38swonBcy5Rt6', '20163232@student.hust.edu.vn', 3, NULL, '2018-08-06 03:25:32', '2018-08-06 03:25:32', 'Hồ Xuân Hương', 'CNTT&TT', 60),
(14, 20140005, '20140005', '$2y$10$huRx.xsnpFEhLvxi4lh2p.789G7WS6ckNaYZqFROiRsil.bp/ajc2', '20140005@gmail.com', 3, NULL, '2018-08-06 09:31:56', '2018-08-06 09:31:56', 'Nguyễn Xuân Quỳnh', 'CNTT&TT', 59),
(15, 20140007, '20140007', '$2y$10$g4yA1MlcbyHk1NqMmblyceoGG/.zgw95y1wSTRi.8jiZBl3k4/BcW', '20140007@gmail.com', 3, NULL, '2018-08-06 09:32:41', '2018-08-06 09:32:41', 'Lưu Quang Vũ', 'CNTT&TT', 59),
(16, 20150006, '20150006', '$2y$10$X8RJfVVJQIcH3oEX9e87Ce.i2IcrGFS7B/.ooj6N3BWI/Ebe3FU0W', '20150006@student.hust.edu.vn', 3, NULL, '2018-08-06 09:33:17', '2018-08-06 09:33:17', 'Tố Hữu', 'CNTT&TT', 60),
(17, 20130001, '20130001', '$2y$10$gHZt.oqltUdDP4P1rAn7be8iSBPvztb7GMvhzKfnkYhu.qwHNB5E2', '20130001@sis.hust.edu.vn', 3, NULL, '2018-08-06 09:35:00', '2018-08-07 07:50:55', 'Nguyễn Tô Hoài', 'CNTT&TT', 58),
(18, 20140009, '20140009', '$2y$10$72f.X3DvEtt7EsbKXqbhRuUODb8HInCnDEJdcSp87mDfvDzV5Mfxu', '20140009@gmail.com', 3, NULL, '2018-08-06 09:41:45', '2018-08-06 09:41:45', 'Ngô Bảo Châu', 'CNTT&TT', 61),
(19, 20160008, '20160008', '$2y$10$iB68OftyiBqibYVsgcXZR.3f/3I11cwnujFJKqzkTr4jmGJXL8PmK', '20160008@sis.hust.edu.vn', 3, NULL, '2018-08-06 09:59:25', '2018-08-06 09:59:25', 'Lê Minh Khuya', 'DTVT', 61),
(20, 20120001, '20120001', '$2y$10$mZ.5tTQxivSzAZe80.28A.viPNIijxvr4NZXwQx3R13APIsPsNxh6', '20120001@sis.hust.edu.vn', 3, NULL, '2018-08-06 11:01:26', '2018-08-06 11:01:26', 'Nguyễn Xuân Phúc', 'Dệt May', 56),
(21, 20160008, '20160008', '$2y$10$9SmqubSzExjb0qepyQ3UMO5FdGT9GM7XarRQhWYQDJKlkEpn6VKY2', '20160008@gmail.com', 3, NULL, '2018-08-07 03:27:33', '2018-08-07 03:27:33', 'Nguyễn Phú Trọng', 'Cơ Điện Tử', 62),
(22, 20170001, '20170001', '$2y$10$BGM2V/NJjRXtv2otTLNDmOa5R1sjsvOWUEf0SoVFZf1gJBN6rPe2W', '20170001@sis.hust.edu.vn', 3, 'TWSIrsk7swwVPUOCviYffk2E6KdfdCwWRh05HP5W0lefqta9mp2N1RglfJJI', '2018-08-07 03:33:45', '2018-08-07 03:33:45', 'Nguyễn Thị Kim Ngân', 'Điện Tự Động Hóa', 62),
(23, 20170002, '20170002', '$2y$10$on1TVduOUtp62mNm9gr9he7v3xjz2ZWY32niSSscOkYaKSlqOI5Da', '20170002@sis.hust.edu.vn', 3, NULL, '2018-08-07 06:24:59', '2018-08-07 07:50:29', 'Cao Đức Phát', 'Hóa Dầu', 62),
(24, 20170004, '20170004', '$2y$10$1NTLsYUPwI5gVHNxSOGJvOBMRKcJkAwDvSEy4dQXobpVajDWphgn.', '20170004@gmail.com', 3, NULL, '2018-08-07 06:26:30', '2018-08-07 06:26:30', 'Hoàng Trung Hải', 'Kinh Tế Và Quản Lý', 62);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diem_danh`
--
ALTER TABLE `diem_danh`
  ADD PRIMARY KEY (`ma_diem_danh`),
  ADD KEY `user_diem_danh_forkey` (`ma_so`),
  ADD KEY `lop_hoc_diem_danh_forkey` (`ma_lop`);

--
-- Chỉ mục cho bảng `ke_hoach`
--
ALTER TABLE `ke_hoach`
  ADD PRIMARY KEY (`id`,`ma_so`,`ma_lop`),
  ADD KEY `user_forkey` (`ma_so`),
  ADD KEY `lop_hoc_forkey` (`ma_lop`);

--
-- Chỉ mục cho bảng `lich_su`
--
ALTER TABLE `lich_su`
  ADD PRIMARY KEY (`ma_lich_su`),
  ADD KEY `lich_su_lop_hoc_forkey` (`ma_lop`);

--
-- Chỉ mục cho bảng `lop_hoc`
--
ALTER TABLE `lop_hoc`
  ADD PRIMARY KEY (`ma_lop`),
  ADD KEY `mon_hoc_forgkey` (`ma_mon`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mon_hoc`
--
ALTER TABLE `mon_hoc`
  ADD PRIMARY KEY (`ma_mon`);

--
-- Chỉ mục cho bảng `ngay_nghi`
--
ALTER TABLE `ngay_nghi`
  ADD PRIMARY KEY (`ma_ngay_nghi`),
  ADD KEY `diem_danh_forkey` (`ma_diem_danh`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `thong_tin`
--
ALTER TABLE `thong_tin`
  ADD PRIMARY KEY (`id`,`ma_so`),
  ADD KEY `user_info_forkey` (`ma_so`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`ma_so`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `ma_so` (`ma_so`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ke_hoach`
--
ALTER TABLE `ke_hoach`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thong_tin`
--
ALTER TABLE `thong_tin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diem_danh`
--
ALTER TABLE `diem_danh`
  ADD CONSTRAINT `lop_hoc_diem_danh_forkey` FOREIGN KEY (`ma_lop`) REFERENCES `lop_hoc` (`ma_lop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_diem_danh_forkey` FOREIGN KEY (`ma_so`) REFERENCES `users` (`ma_so`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `ke_hoach`
--
ALTER TABLE `ke_hoach`
  ADD CONSTRAINT `lop_hoc_forkey` FOREIGN KEY (`ma_lop`) REFERENCES `lop_hoc` (`ma_lop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_forkey` FOREIGN KEY (`ma_so`) REFERENCES `users` (`ma_so`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lich_su`
--
ALTER TABLE `lich_su`
  ADD CONSTRAINT `lich_su_lop_hoc_forkey` FOREIGN KEY (`ma_lop`) REFERENCES `lop_hoc` (`ma_lop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lop_hoc`
--
ALTER TABLE `lop_hoc`
  ADD CONSTRAINT `mon_hoc_forgkey` FOREIGN KEY (`ma_mon`) REFERENCES `mon_hoc` (`ma_mon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `ngay_nghi`
--
ALTER TABLE `ngay_nghi`
  ADD CONSTRAINT `diem_danh_forkey` FOREIGN KEY (`ma_diem_danh`) REFERENCES `diem_danh` (`ma_diem_danh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thong_tin`
--
ALTER TABLE `thong_tin`
  ADD CONSTRAINT `user_info_forkey` FOREIGN KEY (`ma_so`) REFERENCES `users` (`ma_so`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
