-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 10:21 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_thuctap`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
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

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `commenter_id`, `commenter_type`, `guest_name`, `guest_email`, `commentable_type`, `commentable_id`, `comment`, `approved`, `child_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, '1', 'App\\User', NULL, NULL, 'App\\Models\\db_tintuc', '2', '@@@', 1, NULL, NULL, '2020-08-11 19:04:55', '2020-08-11 19:04:55'),
(4, '11', 'App\\User', NULL, NULL, 'App\\Models\\db_tintuc', '2', 'Hjx', 1, 3, NULL, '2020-08-11 19:05:10', '2020-08-11 19:05:10'),
(5, '11', 'App\\User', NULL, NULL, 'App\\Models\\db_tintuc', '2', 'Hahahaha bài đánh giá hay quá', 1, NULL, NULL, '2020-08-11 19:06:34', '2020-08-11 19:06:34'),
(6, '1', 'App\\User', NULL, NULL, 'App\\Models\\db_tintuc', '2', '^^', 1, 5, NULL, '2020-08-11 19:10:50', '2020-08-11 19:10:50'),
(7, '11', 'App\\User', NULL, NULL, 'App\\Models\\db_tintuc', '2', '^^', 1, 6, NULL, '2020-08-11 19:11:56', '2020-08-11 19:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `db_baotri`
--

CREATE TABLE `db_baotri` (
  `id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay` date NOT NULL,
  `gio` time NOT NULL,
  `id_trangthai` int(10) UNSIGNED NOT NULL,
  `id_khachhang` int(10) UNSIGNED NOT NULL,
  `id_nhanvien` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_baotri`
--

INSERT INTO `db_baotri` (`id`, `tieude`, `noidung`, `ngay`, `gio`, `id_trangthai`, `id_khachhang`, `id_nhanvien`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Lỗi modernt', 'ádasdasdasd', '2020-08-02', '08:50:00', 1, 9, 7, NULL, '2020-08-01 09:49:57', '2020-08-11 20:17:48'),
(2, 'Lỗi máy tính', 'hello', '2020-08-20', '09:00:00', 3, 8, 3, NULL, '2020-08-01 10:02:14', '2020-08-01 10:02:14'),
(3, 'Mất mạng 123', 'Lỗi ko lên nguồn', '2020-08-20', '08:30:00', 3, 10, 7, NULL, '2020-08-03 11:26:44', '2020-08-11 07:21:49'),
(4, 'Cáp đứt', 'Cáp đứt sưa sớm giúp tui', '2020-08-01', '18:15:00', 4, 10, 11, '2020-08-11 20:17:33', '2020-08-10 17:10:04', '2020-08-11 20:17:33'),
(5, 'Hello', 'adasdadasd', '2020-08-06', '10:20:00', 3, 10, 11, NULL, '2020-08-11 11:19:54', '2020-08-11 11:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `db_diachi`
--

CREATE TABLE `db_diachi` (
  `id` int(10) UNSIGNED NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `dia_chi` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_quanhuyen` int(10) UNSIGNED NOT NULL,
  `id_phuongxa` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_diachi`
--

INSERT INTO `db_diachi` (`id`, `lat`, `lng`, `dia_chi`, `id_quanhuyen`, `id_phuongxa`, `id_user`) VALUES
(2, 10.0620577, 105.7633836, 'Trường Bùi Hữu Nghĩa, Đường Cách Mạng Tháng 8, Bùi Hữu Nghĩa, Bình Thủy, Cần Thơ, Vietnam', 163, 2339, 3),
(3, 10.0466602, 105.7678156, 'Trường Đại học Kỹ thuật - Công nghệ Cần Thơ, Đường Nguyễn Văn Cừ, An Hòa, Ninh Kiều, Cần Thơ, Vietnam', 166, 2375, 5),
(4, 10.0299337, 105.7706153, 'Đại học Cần Thơ - Can tho University, Đường 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ, Vietnam', 166, 2362, 6),
(5, 10.0275085, 105.7704009, 'mỳ cay omega, Ba Tháng Hai, Xuân Khánh, Ninh Kiều, Cần Thơ, Vietnam', 166, 2375, 7),
(6, 10.0266048, 105.7767294, 'Chợ Xuân Khánh, 30 Tháng 4, Xuân Khánh, Ninh Kiều, Cần Thơ, Vietnam', 166, 2375, 8),
(7, 10.040917, 105.784591, 'Vascara, Nguyễn Trãi, An Hội, Ninh Kiều, Cần Thơ, Vietnam', 166, 2375, 9),
(8, 10.0178629, 105.7666836, 'Đài Phát thanh & Truyền hình TP. Cần Thơ, Đường 30 Tháng 4, Hưng Lợi, Ninh Kiều, Cần Thơ, Vietnam', 166, 2372, 10),
(9, 10.0280761, 105.7800532, 'Trà sữa Chin - Quang Trung, Quang Trung, Xuân Khánh, Ninh Kiều, Cần Thơ, Vietnam', 166, 2375, 11),
(11, 10.0335761, 105.7641934, 'Hẻm 51, Xuân Khánh, Ninh Kiều, Cần Thơ, Vietnam', 166, 2375, 12);

-- --------------------------------------------------------

--
-- Table structure for table `db_taikhoan`
--

CREATE TABLE `db_taikhoan` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_vaitro` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_taikhoan`
--

INSERT INTO `db_taikhoan` (`id`, `username`, `password`, `trang_thai`, `id_user`, `id_vaitro`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$fJW0ODKueT5x3WPb6DYMgOJ6eJmzqI2/my3nYhU2BCvHR3/AYGFNK', 1, 1, 1, '2020-07-27 09:42:09', '2020-07-27 09:42:09'),
(3, 'db_kt_03', '$2y$10$ZrjqoGahdIe3rnya8YL4LeM9ceh6FkA3rrsp0qGg.j75OMX/brlLq', 1, 3, 3, '2020-07-26 10:42:34', '2020-07-27 10:42:34'),
(5, 'db_nv_05', '$2y$10$T5oi/GeMi.U8Brw4EeM97e6UhIX8Tn10ByvmpRuFUitBq28coaue.', 1, 5, 2, '2020-07-06 15:56:01', '2020-08-11 09:43:19'),
(6, 'db_nv_06', '$2y$10$occI8UC81OwXSUfSuvc1KO3CWm4t/8lYmmhGwz6rGbisaipdtKc6O', 1, 6, 2, '2020-08-01 08:26:00', '2020-08-01 08:26:00'),
(7, 'db_kt_07', '$2y$10$U0EMLYMSYqeaggUs270n5ehRCJ178IkN4IMSDPaODiTNvWPPleH86', 1, 7, 3, '2020-08-01 08:27:12', '2020-08-01 08:27:12'),
(8, 'db_user_08', '$2y$10$o2saAKVVPYxZhbQTpZ1ZjeI.NcBzKfaFdT.zINuP6roiMFMc2Z48e', 1, 8, 4, '2020-08-03 08:29:40', '2020-08-01 08:29:40'),
(9, 'db_user_09', '$2y$10$yqLvLqIOOH/4PUG5QzwBG.TGM1b2PxQb9f1/qXnGRHGAHSsTvDhi.', 1, 9, 4, '2020-08-03 08:32:38', '2020-08-01 08:32:38'),
(10, 'db_user_010', '$2y$10$oTkP/ktpB5TxhBsan5/Re.uY6ClNXi63oKFKxnG.NmHZsK8QWjkkW', 1, 10, 4, '2020-08-10 11:25:58', '2020-08-11 09:58:33'),
(11, 'db_kt_011', '$2y$10$uKtbD9a2qEt9lhZXmRQiHOnOE710kOotjeVK1DD/BuLOj1pX1CYZm', 1, 11, 3, '2020-08-09 19:35:56', '2020-08-11 09:53:07'),
(12, 'db_nv_012', '$2y$10$wNkSkMLqIML3TMoChT/92eMoFVakWYuhbrnI7zZI2eQKLnZb8jH8.', 1, 12, 2, '2020-08-11 05:58:55', '2020-08-11 05:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `db_tintuc`
--

CREATE TABLE `db_tintuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `views` int(11) NOT NULL,
  `hinhanh` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_trangthai` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_tintuc`
--

INSERT INTO `db_tintuc` (`id`, `tieude`, `noidung`, `views`, `hinhanh`, `id_trangthai`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ngày mới', '<p>ádasdasd</p>', 0, 'UUdp5_117380721_695925797805381_5791776059468599180_n.jpg', 2, 1, '2020-08-11 20:08:01', '2020-08-11 17:10:36', '2020-08-11 20:08:01'),
(2, 'Xiaomi sản xuất chip riêng cho smartphone', '<p>CEO Xiaomi Lei Jun cho biết vẫn tiếp tục thiết kế chip riêng cho thiết bị di động kể từ sau khi ra mắt mẫu Surge S1 năm 2017.</p><p>\"Những fan của Mi có thể yên tâm rằng kế hoạch vẫn đang được tiến hành\", ông Jun viết trên Weibo hôm 9/8. \"Khi có diễn tiến mới, chúng tôi sẽ thông báo rộng rãi\".</p><p>Xiaomi từng thiết kế chip xử lý của riêng mình có tên Surge S1, tích hợp trong mẫu smartphone giá rẻ Mi 5C và ra mắt năm 2017. Nhưng kể từ đó đến nay, không có thêm sản phẩm tương tự nào xuất hiện trên thị trường.</p><figure class=\"image\"><img src=\"https://i1-sohoa.vnecdn.net/2020/08/11/f24a7e56-dac7-11ea-b1d3-42d340-2896-7438-1597115500.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=eyK-gUJ2NR7dLkCfxvQwtw\" alt=\"Xiaomi vẫn sản xuất chip riêng cho smartphone\"></figure><p>&nbsp;</p><p>Surge S1 là chip xử lý cho smartphone duy nhất của Xiaomi. Ảnh: <i>Handout</i>.</p><p>Việc tự thiết kế và sản xuất bộ xử lý đang trở nên cấp thiết hơn tại Trung Quốc, nhất là sau khi chính quyền Tổng thống Donald Trump mở rộng lệnh trừng phạt với Huawei từ tháng 5. Tuần trước, Richard Yu - Giám đốc mảng Kinh doanh Tiêu dùng của Huawei - thừa nhận sẽ \"<a href=\"https://vnexpress.net/huawei-khai-tu-mang-chip-di-dong-4143555.html\">khai tử</a>\" mảng chip di động HiSilicon kể từ ngày 15/9 do nguồn cung ứng gặp khó khăn vì áp lực từ Mỹ.</p><p>Những năm gần đây, Trung Quốc bắt đầu tự chủ mảng bán dẫn nhằm tránh phụ thuộc vào nước ngoài bằng các ưu đãi thuế với các nhà sản xuất chip trong nước. Tuy vậy, các chuyên gia đánh giá rằng các công ty nội địa Trung Quốc khó có thể tạo ra những vi xử lý tốt cho smartphone cao cấp, ngoại trừ mẫu Kirin của Huawei.</p><p>Xiaomi thành lập bộ phận thiết kế chip riêng có tên Pinecone vào 2014 - 10 năm sau khi Huawei cho ra đời HiSilicon. Tuy nhiên, trong khi Huawei liên tục cho ra các mẫu Kirin với hiệu năng được đánh giá không thua kém Snapdragon của Qualcomm hay A-series của Apple, Xiaomi vẫn chưa trình làng chip nào ngoài Surge S1.</p><p>Năm ngoái, Xiaomi công bố một chip AI riêng do Pinecone sản xuất có tên Dayu. Tuy nhiên, sản phẩm này chủ yếu tập trung cho các thiết bị thông minh trong hệ sinh thái của hãng, chưa có trên điện thoại di động.</p>', 30, 'DF5sF_f24a7e56-dac7-11ea-b1d3-42d340-2896-7438-1597115500.jpg', 2, 1, NULL, '2020-08-11 17:36:13', '2020-08-11 19:14:46'),
(3, 'Kết nối 6G sẽ thay đổi tương lai thế nào', '<p>Công nghệ 6G sẽ là nền tảng cho một kỷ nguyên thông minh, nơi AI và robot trở thành một phần thiết yếu của cuộc sống.</p><p>Kết nối 6G trong tương lai không chỉ giúp con người tương tác với nhau mà còn giúp kết nối giữa thiết bị với thiết bị. Xu thế phát triển của công nghệ này sẽ còn mở rộng, tạo điều kiện cho việc chia sẻ nội dung và ý tưởng theo một cách mới và thú vị hơn rất nhiều.</p><p>Sunghyun Choi, Giáo sư ngành Kỹ thuật Điện và Máy tính tại Đại học Quốc gia Seoul, hiện là Giám đốc Trung tâm nghiên cứu công nghệ truyền thông tiên tiến của tập đoàn Samsung, cho biết, \"so với các thế hệ trước, công nghệ kết nối hiện tại đã có khả năng xử lý nhiều dữ liệu hơn trong thời gian ngắn\". Ông lý giải, hạ tầng thiết bị mạng đã trải qua bước \"tiến hóa\" để bắt kịp yêu cầu của xu hướng công nghệ mới. Đến cuối cùng, nền sản xuất phải hướng tới tự động hóa để thích ứng với các công nghệ kết nối hiện đại, cũng như tăng chất lượng dịch vụ cung cấp.</p><p>Công nghệ 5G đang được áp dụng vào hạ tầng lõi của rất nhiều ngành công nghiệp khác nhau, từ dịch vụ truyền thông chất lượng cao tới nhà máy thông minh, liên lạc giữa xe với xe và còn nhiều dịch vụ mới khác. Từ tốc độ truyền dữ liệu 20 Gb/giây - siêu nhanh, với độ trễ chỉ 1 mili giây - siêu thấp, cũng như độ ổn định 99,999% - siêu ổn định, có vẻ mọi thứ trong kỷ nguyên 5G đều \"siêu\". Tuy nhiên, 5G mới chỉ là bước khởi đầu của một thế giới \"siêu trải nghiệm\".</p><figure class=\"image\"><img src=\"https://i1-sohoa.vnecdn.net/2020/08/10/6G-7972-1597028307.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=0k1588THd70r4S9S5-YXHQ\" alt=\"Kết nối 6G sẽ thay đổi tương lai thế nào\"></figure><p>&nbsp;</p><p>Để đưa công nghệ 5G lên một tầm cao mới, Giáo sư Choi nhận định, sẽ cần lượng lớn nghiên cứu và phát triển. Lời giải cho những thách thức công nghệ nằm ở khả năng cải thiện hiệu suất phần mềm và đẩy mạnh áp dụng AI. Hệ thống mạng trong tương lai sẽ cần có khả năng xử lý một lượng thông tin khổng lồ, đồng nghĩa với nhu cầu các thiết bị mạng và khả năng phần mềm hóa tăng nhanh. Không chỉ vậy, việc phát triển các công nghệ lõi cho 6G với tầm nhìn dài hạn và định hướng tiêu chuẩn toàn cầu cũng hết sức cần thiết.</p><p>Công nghệ kết nối đang phát triển nhanh hơn bất kỳ ngành công nghiệp nào khác và đang chứng kiến sự cạnh tranh khốc liệt để làm chủ tương lai. Tuy nhiên, Giáo sư Choi cho rằng, trọng tâm của các nhà nghiên cứu không phải là sự cạnh tranh mà là mục tiêu dài hạn. Một số công nghệ đã sẵn sàng thay đổi cuộc sống con người, nhưng phải mất hàng thập kỷ mới có thể thương mại hóa. Ông nói: \"Những nghiên cứu chúng tôi đang tiến hành có vẻ khó thành sự thật lúc này, nhưng hoàn toàn có tiềm năng trong tương lai. Chúng tôi luôn phải suy nghĩ về những loại hình dịch vụ mà người dùng trong tương lai sẽ cần\".</p><p>Gần đây, Samsung đã công bố sách trắng 6G, bao gồm các khía cạnh khác nhau của công nghệ mạng mới, như xu hướng về kỹ thuật và xã hội, các dịch vụ mới, yêu cầu về công nghệ và tiến trình tiêu chuẩn hóa dự kiến.</p><p>Giáo sư Sunghyun Choi là một chuyên gia trong lĩnh vực mạng và kết nối không dây. Năm 2013, ông được vinh danh là một thành viên cấp cao của Viện Kỹ sư Điện và Điện tử (IEEE), tổ chức chuyên về kỹ thuật lớn nhất thế giới. Từ tháng 9/2019, ông là Giám đốc Trung tâm nghiên cứu công nghệ truyền thông tiên tiến của tập đoàn Samsung. Ở đây, ông và các đồng sự nghiên cứu, phát triển cũng như tiêu chuẩn hóa những công nghệ truyền thông không dây cốt lõi, nhằm cải thiện chất lượng 5G và hiện thực hóa 6G.</p>', 1, 'YYzlA_6G-7972-1597028307.jpg', 2, 1, NULL, '2020-08-11 17:41:10', '2020-08-11 19:15:36'),
(4, 'iPhone 12 gặp lỗi khi thử nghiệm', '<p>Lớp phủ ống kính camera cho iPhone 12 bị nứt trong quá trình thử nghiệm, khiến Apple phải làm việc lại với nhà cung ứng.</p><p>Theo nhà phân tích Ming-Chi Kuo, sự cố này xảy ra với nhà cung ứng ống kính camera điện thoại tên Yujingguang. Ống kính do đơn vị này cung cấp gặp hiện tượng nứt vỡ lớp phủ bên ngoài, khi thử nghiệm ở điều kiện nhiệt độ và độ ẩm cao. Đây là bài thử nghiệm dành cho iPhone, để có thể đáp ứng được điều kiện khí hậu vùng nhiệt đới.</p><p>Yujingguang là đơn vị cung ứng linh kiện cho hai phiên bản iPhone 12 và iPhone 12 Max, nên sự cố này không ảnh hưởng đến quá trình sản xuất của bản Pro. Ngoài ra, Apple còn có một nhà cung ứng ống kính khác là Largan, có thể bù đắp được sự chậm trễ do Yujingguang gây ra.</p><figure class=\"image\"><img src=\"https://i1-sohoa.vnecdn.net/2020/08/09/36564-68130-iphone-12-dummies-3458-4489-1596912353.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=EACwMERc8_ifDgMqQee6Wg\" alt=\"Mô hình iPhone 12. Ảnh: MacRumors\"></figure><p>&nbsp;</p><p>Mô hình iPhone 12. Ảnh: <i>MacRumors</i></p><p>Theo Ming-Chi Kuo, Apple thậm chí có thể biến sự cố này thành lợi thế cho mình. Đơn hàng của Apple có giá trị khoảng 2 - 2,2 USD cho mỗi ống kính, nhưng Yujingguang có thể \"bị ép\" phải cung cấp chúng với giá 1,5 USD nếu họ muốn tiếp tục \"làm ăn\" với Apple khi sự cố được khắc phục.</p><p>Việc gặp lỗi trong quá trình thử nghiệm có thể xảy ra với bất kỳ sản phẩm và nhà cung ứng nào. Tuy nhiên, sự cố xảy ra gần ngày ra mắt sản phẩm khiến nhiều người lo lắng về tiến độ của iPhone 12.</p><p>Apple đã thừa nhận năm nay sẽ giới thiệu iPhone 12 chậm hơn mọi năm. Vì vậy, hãng hoàn toàn có thể kiểm soát được sự cố với các nhà cung ứng. Tuy nhiên, nguồn tin từ DigiTimes cho biết, Apple có thể phải chia việc ra mắt bộ bốn iPhone 12 thành hai đợt, do bo mạch cho iPhone 12 và iPhone 12 Max Pro vẫn chưa sẵn sàng.</p><p>Theo các thông tin rò rỉ, sẽ có ít nhất bốn phiên bản iPhone 12, gồm iPhone 12, 12 Max, 12 Pro và 12 Pro Max, với kích thước màn hình từ 5,4 đến 6,7 inch. Sản phẩm mới sử dụng màn hình OLED, chip Apple A14 Bionic, có kết nối 5G hỗ trợ cả băng tần sub-6 và mmWave.</p>', 1, 'x03Cd_36564-68130-iphone-12-dummies-3458-4489-1596912353.jpg', 2, 1, NULL, '2020-08-11 17:42:27', '2020-08-11 19:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `db_trangthai`
--

CREATE TABLE `db_trangthai` (
  `id` int(10) UNSIGNED NOT NULL,
  `trangthai` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_trangthai`
--

INSERT INTO `db_trangthai` (`id`, `trangthai`) VALUES
(1, 'Chưa duyệt'),
(2, 'Đã duyệt'),
(3, 'Hoàn thành'),
(4, 'Hủy');

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `ma_user` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ho_ten` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `cmnd` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nam_sinh` date NOT NULL,
  `avatar` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`id`, `ma_user`, `ho_ten`, `sdt`, `cmnd`, `email`, `nam_sinh`, `avatar`) VALUES
(1, 'ADMIN-0001', 'Gia Hung', '0762999994', '331821579', 'admin@gmail.com', '1998-01-01', 'admin.png'),
(3, 'USER-03', 'Tuấn Long', '0762999994', '331821579', 'muhoalongvn@gmail.com', '2020-06-30', 'buSfj_112498473_956125371478128_4727617854906237490_n.jpg'),
(5, 'USER-05', 'Bánh Bao 1', '0762999994', '331821579', 'muhoalongvn@gmail.com', '2020-08-26', 'HMAfF_iPhone 11 Pro Max_iDevice Verification Report_000E1D203A22802E.png'),
(6, 'USER-06', 'Kiều Diễm', '0762999994', '123123123', 'muhoalongvn@gmail.com', '2020-08-12', '8KoIe_112498473_956125371478128_4727617854906237490_n.jpg'),
(7, 'USER-07', 'Thanh Phong', '0762999994', '123123123', 'muhoalongvn@gmail.com', '2020-08-19', '0nFHl_112498473_956125371478128_4727617854906237490_n.jpg'),
(8, 'USER-08', 'Nhăn Ốm Nhom', '0762999994', '123123123', 'muhoalongvn@gmail.com', '2020-08-12', '8CXBm_3.jpg'),
(9, 'USER-09', 'Mộng Tiền', '0762999994', '123123', 'muhoalongvn@gmail.com', '2020-08-18', 'KfgTZ_2.jpg'),
(10, 'USER-010', 'Ánh Nguyệt 2', '0762999994', '123123123', 'muhoalongvn@gmail.com', '2020-08-19', 'lDCn0_112498473_956125371478128_4727617854906237490_n.jpg'),
(11, 'USER-011', 'Phong Phú', '0913109273', '331825644', 'muhoalongvn@gmail.com', '2020-08-03', 'vwapA_3.jpg'),
(12, 'USER-012', 'Vi Cục', '0946012237', '330825789', 'muhoalongvn@gmail.com', '2020-08-03', 'cJvGL_117285602_974243839696573_5283924519128761928_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `db_vaitro`
--

CREATE TABLE `db_vaitro` (
  `id` int(10) UNSIGNED NOT NULL,
  `vt_ten` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_vaitro`
--

INSERT INTO `db_vaitro` (`id`, `vt_ten`) VALUES
(1, 'Admin'),
(2, 'Nhân viên'),
(3, 'Kỷ thuật'),
(4, 'Khách hàng');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(10) UNSIGNED NOT NULL,
  `district_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_prefix` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Quận huyện';

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`, `district_prefix`, `created_at`, `updated_at`, `deleted_at`) VALUES
(162, ' Thới Lai', 'Huyện', '0000-00-00 00:00:00', '2020-01-16 08:32:36', NULL),
(163, 'Bình Thủy', 'Quận', '0000-00-00 00:00:00', '2020-01-16 08:32:36', NULL),
(164, 'Cái Răng', 'Quận', '0000-00-00 00:00:00', '2020-01-16 08:32:36', NULL),
(165, 'Cờ Đỏ', 'Huyện', '0000-00-00 00:00:00', '2020-01-16 08:32:36', NULL),
(166, 'Ninh Kiều', 'Quận', '0000-00-00 00:00:00', '2020-01-16 08:32:36', NULL),
(167, 'Ô Môn', 'Quận', '0000-00-00 00:00:00', '2020-01-16 08:32:36', NULL),
(168, 'Phong Điền', 'Huyện', '0000-00-00 00:00:00', '2020-01-16 08:32:36', NULL),
(169, 'Thốt Nốt', 'Quận', '0000-00-00 00:00:00', '2020-01-16 08:32:36', NULL),
(170, 'Vĩnh Thạnh', 'Huyện', '0000-00-00 00:00:00', '2020-01-16 08:32:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2018_06_30_113500_create_comments_table', 1),
(20, '2020_06_10_083644_create_views_table', 1),
(21, '2020_07_13_214234_db_vaitro', 1),
(22, '2020_07_13_214656_db_user', 1),
(23, '2020_07_13_214657_db_taikhoan', 1),
(24, '2020_07_27_153914_db_diachi', 1),
(30, '2020_08_01_153804_db_trangthai', 2),
(31, '2020_08_01_153805_db_baotri', 2),
(33, '2020_08_11_231045_db_tintuc', 3);

-- --------------------------------------------------------

--
-- Table structure for table `views`
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
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `viewable_type`, `viewable_id`, `visitor`, `collection`, `viewed_at`) VALUES
(1, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:30:28'),
(2, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:32:16'),
(3, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:33:49'),
(4, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:35:05'),
(5, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:36:28'),
(6, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:38:11'),
(7, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:39:41'),
(8, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:42:18'),
(9, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:43:25'),
(10, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:44:53'),
(11, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:47:26'),
(12, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:48:28'),
(13, 'App\\Models\\db_tintuc', 2, 'mvzePbScbpoyEGwUlaYiYHUeKI8uxW4ciaWgR5zDRRmJL4RNnfQ0X2NQAszfETEjptK0AxoFQtd5QH3r', NULL, '2020-08-11 18:48:58'),
(14, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:50:27'),
(15, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:54:29'),
(16, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:56:39'),
(17, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:58:10'),
(18, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 18:59:11'),
(19, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 19:00:38'),
(20, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 19:01:43'),
(21, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 19:03:04'),
(22, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 19:04:05'),
(23, 'App\\Models\\db_tintuc', 2, 'mvzePbScbpoyEGwUlaYiYHUeKI8uxW4ciaWgR5zDRRmJL4RNnfQ0X2NQAszfETEjptK0AxoFQtd5QH3r', NULL, '2020-08-11 19:05:03'),
(24, 'App\\Models\\db_tintuc', 2, 'mvzePbScbpoyEGwUlaYiYHUeKI8uxW4ciaWgR5zDRRmJL4RNnfQ0X2NQAszfETEjptK0AxoFQtd5QH3r', NULL, '2020-08-11 19:06:34'),
(25, 'App\\Models\\db_tintuc', 2, 'mvzePbScbpoyEGwUlaYiYHUeKI8uxW4ciaWgR5zDRRmJL4RNnfQ0X2NQAszfETEjptK0AxoFQtd5QH3r', NULL, '2020-08-11 19:07:48'),
(26, 'App\\Models\\db_tintuc', 2, 'mvzePbScbpoyEGwUlaYiYHUeKI8uxW4ciaWgR5zDRRmJL4RNnfQ0X2NQAszfETEjptK0AxoFQtd5QH3r', NULL, '2020-08-11 19:10:37'),
(27, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 19:10:45'),
(28, 'App\\Models\\db_tintuc', 2, 'mvzePbScbpoyEGwUlaYiYHUeKI8uxW4ciaWgR5zDRRmJL4RNnfQ0X2NQAszfETEjptK0AxoFQtd5QH3r', NULL, '2020-08-11 19:11:42'),
(29, 'App\\Models\\db_tintuc', 2, 'mvzePbScbpoyEGwUlaYiYHUeKI8uxW4ciaWgR5zDRRmJL4RNnfQ0X2NQAszfETEjptK0AxoFQtd5QH3r', NULL, '2020-08-11 19:13:15'),
(30, 'App\\Models\\db_tintuc', 2, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 19:14:46'),
(31, 'App\\Models\\db_tintuc', 4, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 19:15:32'),
(32, 'App\\Models\\db_tintuc', 3, 'mEysjBilbMSvmQTz5J8hXnk8cdICxzcZsky6QAzx9lSYQgRYQbIk67ZMmV5GRWMMv6UI3yyc6AGxUoIw', NULL, '2020-08-11 19:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `id` int(10) UNSIGNED NOT NULL,
  `ward_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward_prefix` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Phường xã';

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`id`, `ward_name`, `ward_prefix`, `district_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2322, 'Định Môn', 'Xã', 162, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2323, 'Đông Bình', 'Xã', 162, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2324, 'Đông Thuận', 'Xã', 162, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2325, 'Tân Thạnh', 'Xã', 162, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2326, 'Thới Lai', 'Thị trấn', 162, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2327, 'Thới Tân', 'Xã', 162, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2328, 'Thới Thạnh', 'Xã', 162, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2329, 'Trường Thắng', 'Xã', 162, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2330, 'Trường Thành', 'Xã', 162, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2331, 'Trường Xuân', 'Xã', 162, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2332, 'Trường Xuân A', 'Xã', 162, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2333, 'Trường Xuân B', 'Xã', 162, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2334, 'Xuân Thắng', 'Xã', 162, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2335, '8', 'Phường', 163, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2336, 'An Thới', 'Phường', 163, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2337, 'An Thới', 'Phường', 163, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2338, 'Bình Thủy', 'Phường', 163, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2339, 'Bùi Hữu Nghĩa', 'Phường', 163, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2340, 'Long Hòa', 'Phường', 163, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2341, 'Long Tuyền', 'Phường', 163, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2342, 'Thới An Đông', 'Phường', 163, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2343, 'Trà An', 'Phường', 163, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2344, 'Trà Nóc', 'Phường', 163, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2345, 'Ba Láng', 'Phường', 164, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2346, 'Hưng Phú', 'Phường', 164, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2347, 'Hưng Thạnh', 'Phường', 164, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2348, 'Lê Bình', 'Phường', 164, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2349, 'Phú Thứ', 'Phường', 164, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2350, 'Tân Phú', 'Phường', 164, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2351, 'Thường Thạnh', 'Phường', 164, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2352, 'Cờ Đỏ', 'Thị trấn', 165, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2353, 'Đông Hiệp', 'Xã', 165, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2354, 'Đông Thắng', 'Xã', 165, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2355, 'Thạnh Phú', 'Xã', 165, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2356, 'Thới Đông', 'Xã', 165, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2357, 'Thới Hưng', 'Xã', 165, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2358, 'Thới Xuân', 'Xã', 165, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2359, 'Trung An', 'Xã', 165, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2360, 'Trung Hưng', 'Xã', 165, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2361, 'Trung Thạnh', 'Xã', 165, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2362, 'An Bình', 'Phường', 166, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2363, 'An Cư', 'Phường', 166, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2364, 'An Hòa', 'Phường', 166, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2365, 'An Hội', 'Phường', 166, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2366, 'An Khánh', 'Phường', 166, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2367, 'An Lạc', 'Phường', 166, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2368, 'An Nghiệp', 'Phường', 166, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2369, 'An Phú', 'Phường', 166, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2370, 'An Thạnh', 'Phường', 166, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2371, 'Cái Khế', 'Phường', 166, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2372, 'Hưng Lợi', 'Phường', 166, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2373, 'Tân An', 'Phường', 166, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2374, 'Thới Bình', 'Phường', 166, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2375, 'Xuân Khánh', 'Phường', 166, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2376, 'Châu Văn Liêm', 'Phường', 167, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2377, 'Long Hưng', 'Phường', 167, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2378, 'Phước Thới', 'Phường', 167, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2379, 'Thới An', 'Phường', 167, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2380, 'Thới Hòa', 'Phường', 167, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2381, 'Thới Long', 'Phường', 167, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2382, 'Trường Lạc', 'Phường', 167, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2383, 'Giai Xuân', 'Xã', 168, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2384, 'Mỹ Khánh', 'Xã', 168, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2385, 'Nhơn Ái', 'Xã', 168, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2386, 'Nhơn Nghĩa', 'Xã', 168, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2387, 'Phong Điền', 'Thị trấn', 168, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2388, 'Tân Thới', 'Xã', 168, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2389, 'Trường Long', 'Xã', 168, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2390, 'Tân Hưng', 'Phường', 169, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2391, 'Tân Lộc', 'Phường', 169, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2392, 'Thạnh Hòa', 'Phường', 169, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2393, 'Thạnh Lộc', 'Xã', 169, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2394, 'Thới Thuận', 'Phường', 169, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2395, 'Thốt Nốt', 'Phường', 169, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2396, 'Thuận An', 'Phường', 169, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2397, 'Thuận Hưng', 'Phường', 169, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2398, 'Trung Kiên', 'Phường', 169, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2399, 'Trung Nhứt', 'Phường', 169, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2400, 'Thạnh An', 'Thị trấn', 170, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2401, 'Thạnh An', 'Xã', 170, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2402, 'Thạnh Lộc', 'Xã', 170, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2403, 'Thạnh Lợi', 'Xã', 170, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2404, 'Thạnh Mỹ', 'Xã', 170, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2405, 'Thạnh Quới', 'Xã', 170, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2406, 'Thạnh Thắng', 'Xã', 170, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2407, 'Thạnh Tiến', 'Xã', 170, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2408, 'Vĩnh Bình', 'Xã', 170, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2409, 'Vĩnh Thạnh', 'Thị trấn', 170, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL),
(2410, 'Vĩnh Trinh', 'Xã', 170, '2020-02-13 14:10:48', '2020-02-13 14:10:48', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commenter_id_commenter_type_index` (`commenter_id`,`commenter_type`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `comments_child_id_foreign` (`child_id`);

--
-- Indexes for table `db_baotri`
--
ALTER TABLE `db_baotri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `db_baotri_id_trangthai_foreign` (`id_trangthai`),
  ADD KEY `db_baotri_id_khachhang_foreign` (`id_khachhang`),
  ADD KEY `db_baotri_id_nhanvien_foreign` (`id_nhanvien`);

--
-- Indexes for table `db_diachi`
--
ALTER TABLE `db_diachi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `db_diachi_id_quanhuyen_foreign` (`id_quanhuyen`),
  ADD KEY `db_diachi_id_phuongxa_foreign` (`id_phuongxa`),
  ADD KEY `db_diachi_id_user_foreign` (`id_user`);

--
-- Indexes for table `db_taikhoan`
--
ALTER TABLE `db_taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `db_taikhoan_id_user_foreign` (`id_user`),
  ADD KEY `db_taikhoan_id_vaitro_foreign` (`id_vaitro`);

--
-- Indexes for table `db_tintuc`
--
ALTER TABLE `db_tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `db_tintuc_id_trangthai_foreign` (`id_trangthai`),
  ADD KEY `db_tintuc_id_user_foreign` (`id_user`);

--
-- Indexes for table `db_trangthai`
--
ALTER TABLE `db_trangthai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_vaitro`
--
ALTER TABLE `db_vaitro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_district_name_index` (`district_name`),
  ADD KEY `district_district_prefix_index` (`district_prefix`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_viewable_type_viewable_id_index` (`viewable_type`,`viewable_id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ward_ward_name_index` (`ward_name`),
  ADD KEY `ward_ward_prefix_index` (`ward_prefix`),
  ADD KEY `ward_district_id_index` (`district_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `db_baotri`
--
ALTER TABLE `db_baotri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `db_diachi`
--
ALTER TABLE `db_diachi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `db_taikhoan`
--
ALTER TABLE `db_taikhoan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `db_tintuc`
--
ALTER TABLE `db_tintuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `db_trangthai`
--
ALTER TABLE `db_trangthai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `db_vaitro`
--
ALTER TABLE `db_vaitro`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=710;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11284;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `db_baotri`
--
ALTER TABLE `db_baotri`
  ADD CONSTRAINT `db_baotri_id_khachhang_foreign` FOREIGN KEY (`id_khachhang`) REFERENCES `db_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `db_baotri_id_nhanvien_foreign` FOREIGN KEY (`id_nhanvien`) REFERENCES `db_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `db_baotri_id_trangthai_foreign` FOREIGN KEY (`id_trangthai`) REFERENCES `db_trangthai` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `db_diachi`
--
ALTER TABLE `db_diachi`
  ADD CONSTRAINT `db_diachi_id_phuongxa_foreign` FOREIGN KEY (`id_phuongxa`) REFERENCES `ward` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `db_diachi_id_quanhuyen_foreign` FOREIGN KEY (`id_quanhuyen`) REFERENCES `district` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `db_diachi_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `db_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `db_taikhoan`
--
ALTER TABLE `db_taikhoan`
  ADD CONSTRAINT `db_taikhoan_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `db_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `db_taikhoan_id_vaitro_foreign` FOREIGN KEY (`id_vaitro`) REFERENCES `db_vaitro` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `db_tintuc`
--
ALTER TABLE `db_tintuc`
  ADD CONSTRAINT `db_tintuc_id_trangthai_foreign` FOREIGN KEY (`id_trangthai`) REFERENCES `db_trangthai` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `db_tintuc_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `db_user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
