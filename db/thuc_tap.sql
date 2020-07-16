-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 14, 2020 lúc 02:27 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuc_tap`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commenter_id` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `commenter_type` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `guest_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `guest_email` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `commentable_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `commentable_id` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 1,
  `child_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_taikhoan`
--

CREATE TABLE `db_taikhoan` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `id_vaitro` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_taikhoan`
--

INSERT INTO `db_taikhoan` (`id`, `username`, `password`, `trang_thai`, `id_vaitro`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$mFeuskjJaKJeEsJwWnv.H./uMJHaA77E502J3FWiuXFaJtLgghSOy', 1, 1, '2020-07-13 15:16:02', '2020-07-13 15:16:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_user`
--

CREATE TABLE `db_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `ma_user` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ho_ten` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `cmnd` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nam_sinh` date NOT NULL,
  `id_taikhoan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_user`
--

INSERT INTO `db_user` (`id`, `ma_user`, `ho_ten`, `sdt`, `cmnd`, `email`, `dia_chi`, `nam_sinh`, `id_taikhoan`) VALUES
(1, 'ADMIN-0001', 'Admin', '0762999994', '331821579', 'admin@gmail.com', 'Vĩnh Long', '1998-01-01', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_vaitro`
--

CREATE TABLE `db_vaitro` (
  `id` int(10) UNSIGNED NOT NULL,
  `vt_ten` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_vaitro`
--

INSERT INTO `db_vaitro` (`id`, `vt_ten`) VALUES
(1, 'Admin'),
(2, 'Nhan vien'),
(3, 'Khach hang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2018_06_30_113500_create_comments_table', 1),
(7, '2020_06_10_083644_create_views_table', 1),
(8, '2020_07_13_214234_db_vaitro', 1),
(9, '2020_07_13_214333_db_taikhoan', 1),
(10, '2020_07_13_214656_db_user', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `views`
--

CREATE TABLE `views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `viewable_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `viewable_id` bigint(20) UNSIGNED NOT NULL,
  `visitor` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `collection` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commenter_id_commenter_type_index` (`commenter_id`,`commenter_type`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `comments_child_id_foreign` (`child_id`);

--
-- Chỉ mục cho bảng `db_taikhoan`
--
ALTER TABLE `db_taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `db_taikhoan_id_vaitro_foreign` (`id_vaitro`);

--
-- Chỉ mục cho bảng `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `db_user_id_taikhoan_foreign` (`id_taikhoan`);

--
-- Chỉ mục cho bảng `db_vaitro`
--
ALTER TABLE `db_vaitro`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_viewable_type_viewable_id_index` (`viewable_type`,`viewable_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_taikhoan`
--
ALTER TABLE `db_taikhoan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `db_vaitro`
--
ALTER TABLE `db_vaitro`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `db_taikhoan`
--
ALTER TABLE `db_taikhoan`
  ADD CONSTRAINT `db_taikhoan_id_vaitro_foreign` FOREIGN KEY (`id_vaitro`) REFERENCES `db_vaitro` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `db_user`
--
ALTER TABLE `db_user`
  ADD CONSTRAINT `db_user_id_taikhoan_foreign` FOREIGN KEY (`id_taikhoan`) REFERENCES `db_taikhoan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
