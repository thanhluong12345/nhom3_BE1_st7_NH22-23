-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 04:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group3`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `manu_id` tinyint(3) NOT NULL,
  `manu_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'Apple'),
(2, 'Oppo'),
(3, 'Samsung'),
(4, 'Xiaomi'),
(5, 'Asus');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ship_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_notes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `ship_address`, `order_notes`, `order_date`) VALUES
(12, 1, 'ninh thuận,phước thuận, ninh phước,vạn phước', '', '2022-11-28 01:41:42');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `unit_price` float NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `unit_price`, `quantity`) VALUES
(10, 12, 16, 3990000, 1),
(11, 12, 14, 2200000, 2),
(12, 12, 5, 28490000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `manu_id` tinyint(3) NOT NULL,
  `type_id` tinyint(3) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `feature` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(1, 'Laptop Apple MacBook Pro M2 2022 8GB/256GB/10-core GPU (MNEH3SA/A) ', 1, 2, 7990000, 'laptop-macbook-pro-m2.jpg', 'CPU:\r\n\r\nApple M2100GB/s\r\nRAM:\r\n\r\n8 GB\r\nỔ cứng:\r\n\r\n256 GB SSD\r\nMàn hình:\r\n\r\n13.3\"Retina (2560 x 1600)\r\nCard màn hình:\r\n\r\nCard tích hợp10 nhân GPU\r\nCổng kết nối:\r\n\r\n2 x Thunderbolt 3Jack tai nghe 3.5 mm\r\nĐặc biệt:\r\n\r\nCó đèn bàn phím\r\nHệ điều hành:\r\n\r\nMac OS\r\nThiết kế:\r\n\r\nVỏ kim loại\r\nKích thước, khối lượng:\r\n\r\nDài 304.1 mm - Rộng 212.4 mm - Dày 15.6 mm - Nặng 1.4 kg\r\nThời điểm ra mắt:\r\n\r\n6/2022', 1, '2022-11-14 08:49:12'),
(2, 'Điện thoại iPhone 14 Pro Max 1TB', 1, 1, 55234200, 'iphone14-promax.jpg', 'Màn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic 6 nhân\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n1 TB\r\nSIM:\r\n\r\n1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:\r\n\r\n4323 mAh20 W', 1, '2022-11-14 08:54:30'),
(3, 'Laptop MacBook Pro 14 M1 Pro 2021 8-core CPU/16GB/512GB/14-core GPU (MKGP3SA/A)', 1, 2, 19990000, 'laptop-macbook-pro14-m1-pro-2021.jpg', 'CPU:\r\n\r\nApple M1 Pro200GB/s\r\nRAM:\r\n\r\n16 GB\r\nỔ cứng:\r\n\r\n512 GB SSD\r\nMàn hình:\r\n\r\n14.2\"Liquid Retina XDR display (3024 x 1964)120Hz\r\nCard màn hình:\r\n\r\nCard tích hợp14 nhân GPU\r\nCổng kết nối:\r\n\r\n3 x Thunderbolt 4 USB-CHDMIJack tai nghe 3.5 mm\r\nĐặc biệt:\r\n\r\nCó đèn bàn phím\r\nHệ điều hành:\r\n\r\nMac OS\r\nThiết kế:\r\n\r\nVỏ kim loại nguyên khối\r\nKích thước, khối lượng:\r\n\r\nDài 312.6 mm - Rộng 221.2 mm - Dày 15.5 mm - Nặng 1.6 kg\r\nThời điểm ra mắt:\r\n\r\n10/2021', 1, '2022-11-14 08:56:18'),
(4, 'Laptop Asus VivoBook 15X OLED A1503ZA i5 12500H/8GB/512GB/Win11 (L1290W)', 5, 2, 19790000, 'laptop-asus-vivobook-15x.jpg', 'CPU: i512500H2.5GHz\r\n\r\nRAM: 8 GBDDR4 2 khe (1 khe 8 GB onboard + 1 khe trống)3200 MHz\r\n\r\nỔ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác không giới hạn dung lượng)\r\n\r\nMàn hình: 15.6\"Full HD (1920 x 1080) OLED\r\n\r\nCard màn hình: Card tích hợpIntel UHD\r\n\r\nCổng kết nối: USB Type-CHDMIJack tai nghe 3.5 mm2 x USB 3.21 x USB 2.0\r\n\r\nĐặc biệt: Có đèn bàn phím\r\n\r\nHệ điều hành: Windows 11 Home SL\r\n\r\nThiết kế: Vỏ nhựa\r\n\r\nKích thước, khối lượng: Dài 356.8 mm - \r\nRộng 227.6 mm - Dày 19.9 mm - Nặng 1.7 kg\r\n\r\nThời điểm ra mắt: 2022', 1, '2022-11-14 08:56:38'),
(5, 'Laptop Asus TUF Gaming FX506HM i7 11800H/8GB/512GB/6GB RTX3060/144Hz/Win11 (HN366W)', 5, 2, 28490000, 'laptop-asus-TUF-gaming-FX506HM-i7-11800H.jpg', 'CPU: i711800H2.30 GHz\r\n\r\nRAM: 8 GBDDR4 2 khe (1 khe 8 GB + 1 khe rời)3200 MHz\r\n\r\nỔ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1TB)\r\n\r\nMàn hình: 15.6\"Full HD (1920 x 1080) 144Hz\r\n\r\nCard màn hình: Card rờiRTX 3060 6GB\r\n\r\nCổng kết nối: LAN (RJ45)3 x USB 3.2HDMIThunderbolt 4Jack tai nghe 3.5 mm\r\n\r\nĐặc biệt: Có đèn bàn phím\r\n\r\nHệ điều hành: Windows 11 Home SL\r\n\r\nThiết kế: Vỏ nhựa - nắp lưng bằng kim loại\r\n\r\nKích thước, khối lượng: Dài 359 mm - Rộng 256 mm - Dày 22.8 mm - Nặng 2.3 kg\r\n\r\nThời điểm ra mắt: 2022', 1, '2022-11-14 09:00:27'),
(6, 'Điện thoại Xiaomi Redmi Note 11 (6GB/128GB)', 2, 1, 4990000, 'xiaomi-redmi-note-11.jpg', 'Màn hình: AMOLED6.43\"Full HD+\n\nHệ điều hành: Android 11\n\nCamera sau: Chính 50 MP & Phụ 8 MP, 2 MP, 2 MP\n\nCamera trước: 13 MP\n\nChip: Snapdragon 680\n\nRAM: 6 GB\n\nDung lượng lưu trữ: 128GB\n\nSIM: 2 Nano SIMHỗ trợ 4G\n\nPin, Sạc: 5000 mAh33 W', 0, '2022-11-14 09:00:59'),
(7, 'Điện thoại Xiaomi 12T 128GB', 2, 1, 12490000, 'xiaomi-12T-128G.jpg', 'Màn hình: AMOLED6.67\"1.5K\n\nHệ điều hành: Android 12\n\nCamera sau: Chính 108 MP & Phụ 8 MP, 2 MP\n\nCamera trước: 20 MP\n\nChip: MediaTek Dimensity 8100 Ultra 8 nhân\n\nRAM: 8 GB\n\nDung lượng lưu trữ: 128GB\n\nSIM: 2 Nano SIMHỗ trợ 5G\n\nPin, Sạc: 5000 mAh120 W', 1, '2022-11-14 09:02:02'),
(8, 'Máy tính bảng Samsung Galaxy Tab A7 Lite', 3, 3, 3990000, 'samsung-galaxy-tab-A7-Lite.jpg', 'Màn hình: 8.7\"TFT LCD\r\n\r\nHệ điều hành: Android 11\r\n\r\nChip: MediaTek MT8768T\r\n\r\nRAM: 3 GB\r\n\r\nDung lượng lưu trữ: 32 GB\r\n\r\nKết nối: Hỗ trợ 4GCó nghe gọi\r\n\r\nSIM: 1 Nano SIM\r\n\r\nCamera sau: 8 MP\r\n\r\nCamera trước: 2 MP\r\n\r\nPin, Sạc: 5100 mAh15 W', 0, '2022-11-14 09:02:49'),
(9, 'Điện thoại OPPO Reno6 5G ', 2, 1, 65000100, 'reno6.jpg', 'Màn hình:\r\n\r\nAMOLED6.43\"Full HD+\r\nHệ điều hành:\r\n\r\nAndroid 11\r\nCamera sau:\r\n\r\nChính 64 MP & Phụ 8 MP, 2 MP\r\nCamera trước:\r\n\r\n32 MP\r\nChip:\r\n\r\nMediaTek Dimensity 900 5G\r\nRAM:\r\n\r\n8 GB\r\nDung lượng lưu trữ:\r\n\r\n128 GB\r\nSIM:\r\n\r\n2 Nano SIMHỗ trợ 5G\r\nPin, Sạc:\r\n\r\n4300 mAh65 W', 0, '2022-10-30 08:35:40'),
(10, 'Bàn Phím Cơ Có Dây Gaming Corsair K68 RGB Mechanical Đen', 5, 4, 2790000, 'Gaming-Corsair-K68 RGB.jpg', 'Tương thích: Windows\r\n\r\nCách kết nối: Dây cắm USB\r\n\r\nĐèn LED: RGB\r\n\r\nSố phím: 104 phím\r\n\r\nThương hiệu của: Mỹ', 1, '2022-11-14 09:04:19'),
(11, 'Chuột Có dây Gaming Corsair Harpoon RGB Pro Đen', 5, 5, 899000, 'Gaming-Corsair-Harpoon-RGB Pro.jpg', 'Tương thích: Windows\r\n\r\nĐộ phân giải mặc định: 12000 DPI\r\n\r\nCách kết nối: Dây cắm USB\r\n\r\nĐộ dài dây/Khoảng cách kết nối: Dây dài 185 \r\ncm\r\n\r\nĐèn LED: RGB\r\n\r\nỨng dụng điều khiển: iCUE\r\n\r\nKhối lượng: 85 g\r\n\r\nThương hiệu của: Mỹ\r\n\r\nSản xuất tại: Trung Quốc', 0, '2022-11-14 09:04:43'),
(12, 'Máy tính bảng OPPO Pad Air', 2, 3, 7547890, 'oppopadair.jpg', 'Màn hình:\r\n\r\n10.36\"IPS LCD\r\nHệ điều hành:\r\n\r\nAndroid 12\r\nChip:\r\n\r\nSnapdragon 680\r\nRAM:\r\n\r\n4 GB\r\nDung lượng lưu trữ:\r\n\r\n64 GB\r\nCamera sau:\r\n\r\n8 MP\r\nCamera trước:\r\n\r\n5 MP\r\nPin, Sạc:\r\n\r\n7100 mAh18 W', 0, '2022-10-30 08:33:18'),
(13, 'Điện thoại OPPO Reno8 Pro 5G ', 2, 1, 4500010, 'opporeno8.jpg', 'Màn hình:\r\n\r\nAMOLED6.7\"Full HD+\r\nHệ điều hành:\r\n\r\nAndroid 12\r\nCamera sau:\r\n\r\nChính 50 MP & Phụ 8 MP, 2 MP\r\nCamera trước:\r\n\r\n32 MP\r\nChip:\r\n\r\nMediaTek Dimensity 8100 Max 8 nhân\r\nRAM:\r\n\r\n12 GB\r\nDung lượng lưu trữ:\r\n\r\n256 GB\r\nSIM:\r\n\r\n2 Nano SIMHỗ trợ 5G\r\nPin, Sạc:\r\n\r\n4500 mAh80 W', 1, '2022-10-30 08:31:03'),
(14, 'Điện thoại Samsung Galaxy S21 FE 5G (8GB/128GB)', 3, 1, 2200000, 'galaxy-s21.jpg', 'Samsung Galaxy S21 FE 5G sở hữu khung viền kim loại bóng bẩy, mặt lưng bằng nhựa có độ nhám nhẹ chống bám vân tay và chống trượt tốt', 1, '2022-11-14 09:06:39'),
(15, 'Laptop Asus TUF Gaming FX506LHB i7 10300H/8GB/512GB/4GB GTX1650/144Hz/Win11 (HN188W)', 5, 2, 50000000, 'HN188W.jpg', 'CPU: i510300H2.5GHz\r\n\r\nRAM: 8 GBDDR4 2 khe (1 khe 8 GB + 1 khe rời)2933 MHz\r\n\r\nỔ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)\r\n\r\nMàn hình: 15.6\"Full HD (1920 x 1080) 144Hz\r\n\r\nCard màn hình: Card rờiGTX 1650 4GB\r\n\r\nCổng kết nối: LAN (RJ45)USB 2.01x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery / G-SYNCHDMIJack tai nghe 3.5 mm2 x USB 3.2\r\n\r\nĐặc biệt: Có đèn bàn phím\r\n\r\nHệ điều hành: Windows 11 Home SL\r\n\r\nThiết kế: Vỏ nhựa\r\n\r\nKích thước, khối lượng: Dài 359 mm - Rộng 256 mm - Dày 24.9 mm - Nặng 2.3 kg\r\n\r\nThời điểm ra mắt: 2021', 1, '2022-10-30 08:29:49'),
(16, 'Điện thoại Xiaomi Redmi Note 10 (6GB/128GB)', 4, 1, 3990000, 'Xiaomi-Redmi-Note-10.jpg', 'Màn hình: AMOLED6.43\"Full HD+\n\nHệ điều hành: Android 11\n\nCamera sau: Chính 50 MP & Phụ 8 MP, 2 MP, 2 MP\n\nCamera trước: 13 MP\n\nChip: Snapdragon 680\n\nRAM: 6 GB\n\nDung lượng lưu trữ: 128GB\n\nSIM: 2 Nano SIMHỗ trợ 4G\n\nPin, Sạc: 5000 mAh33 W', 0, '2022-11-14 09:07:49'),
(17, 'Tai nghe Bluetooth True Wireless Samsung Galaxy Buds 2 R177N', 3, 7, 4999670, 'tainghegalaxybuds.jpg', 'Thiết kế thời thượng, cá tính.\r\nChất âm chuẩn studio với loa 2 chiều.\r\nHiệu quả chống ồn lên đến 98%.\r\nĐàm thoại dễ dàng với 3 micro và bộ cảm biến nhận diện giọng nói.\r\nĐồng bộ với các thiết bị Samsung Galaxy.\r\nThời gian nghe nhạc: Khoảng 5 giờ (bật chống ồn), khoảng 7.5 giờ (tắt chống ồn).\r\nThời gian đàm thoại: Khoảng 3.5 giờ (bật chống ồn), khoảng 3.5 giờ (tắt chống ồn).\r\n5 phút sạc cho 1 giờ chơi nhạc.\r\nĐạt tiêu chuẩn chống nước IPX2.\r\nĐiều khiển cảm ứng dừng/phát, trả lời cuộc gọi, chuyển bài.', 0, '2022-10-30 08:13:57'),
(18, 'Tai nghe Bluetooth AirPods 2 Lightning Charge Apple MV7N2 Trắng', 1, 7, 45676500, 'appleairpods2.jpg ', 'Thiết kế đơn giản, thời trang và nhỏ gọn.\r\nTrang bị chip H1 hoàn toàn mới, cho tốc độ kết nối, chuyển đổi giữa các thiết bị nhanh chóng.\r\nKích hoạt nhanh trợ lý ảo Siri bằng cách nói \"Hey, Siri\".\r\nCó thể sử dụng nghe nhạc lên đến 5 giờ (âm lượng 50%) cho mỗi một lần sạc đầy.\r\nTích hợp công nghệ sạc nhanh hiện đại. Sạc nhanh 15 phút có thể nghe nhạc 2 - 3 giờ (âm lượng 50%).\r\nSử dụng song song với hộp sạc có thể dùng được lên đến 24 giờ.\r\nTính năng nhận cuộc gọi, kích hoạt Siri, nghe hoặc tạm dừng đoạn nhạc đang phát.\r\nSản phẩm chính hãng Apple, nguyên seal 100%.\r\nLưu ý: Thanh toán trước khi mở seal.', 1, '2022-10-30 08:13:57'),
(19, 'Tai nghe Bluetooth True Wireless Samsung Galaxy Buds 2 Pro R510N Trắng', 3, 7, 756543, 'tainghesamsungbudspro2.jpg', 'Điều mình chú ý đầu tiên chính là tổng quan thiết kế của bộ tai nghe này, toàn bộ hộp sạc và tai nghe đều được bao phủ bởi màu trắng trang nhã, thanh lịch. Phần logo Samsung in ở mặt trên hộp sạc càng làm thiết kế trở nên tinh tế hơn. Với mình, đây không chỉ là một chiếc tai nghe mà nó còn là một món phụ kiện thời trang sang chảnh.', 1, '2022-10-30 08:17:13'),
(20, 'Tai nghe Có Dây Samsung IA500 Đen', 3, 7, 34343400, 'samsungIA500.jpg', 'Trải nghiệm nghe phong phú, chất âm rõ nét với hệ thống loa 2 chiều.\r\nMỗi đầu nút đeo được thiết kế thích hợp với mọi dáng tai.\r\nJack 3.5 mm thông dụng tương thích với thiết bị có cổng 3.5 mm, dây dài 1.25 m.\r\nĐiều khiển bật/dừng phát nhạc, tăng giảm âm lượng với nút nhấn trên dây.\r\nTai nghe có tích hợp microphone, trong hộp đi kèm 3 cặp đệm với 3 size khác nhau để bạn thoải mái thay đổi.', 0, '2022-10-30 08:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `protypes`
--

CREATE TABLE `protypes` (
  `type_id` tinyint(3) NOT NULL,
  `type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_home` tinyint(1) NOT NULL DEFAULT 0,
  `pos` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`, `display_home`, `pos`) VALUES
(1, 'Điện thoại', 1, 1),
(2, 'Laptop', 1, 2),
(3, 'Máy tính bảng', 1, 3),
(4, 'Bàn phím', 0, 6),
(5, 'Chuột', 1, 7),
(6, 'USB', 0, 4),
(7, 'Tai nghe', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modifed_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `created_at`, `modifed_at`, `deleted_at`) VALUES
(1, 'thanhluong', '$2y$10$HKxr4GPsxURrqUf/2M9eJuLWx0sxy12yVdCxss0SeydbVqu2lmxm6', '2022-11-25 06:52:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `user_id` int(11) NOT NULL,
  `firstname` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `super_user` int(3) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_members`
--

CREATE TABLE `user_members` (
  `user_id` int(11) NOT NULL,
  `firstname` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `active_flg` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_members`
--

INSERT INTO `user_members` (`user_id`, `firstname`, `lastname`, `city`, `district`, `street`, `phone`, `email`, `created_at`, `updated_at`, `last_login`, `active_flg`) VALUES
(1, 'Nguyễn Thành', 'Lương', 'ninh thuận', 'phước thuận, ninh phước', 'vạn phước', 93874578, 'luong.nt1999@gmail.com', '0000-00-00 00:00:00', NULL, NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`manu_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manu_id` (`manu_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `protypes`
--
ALTER TABLE `protypes`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `unique_username` (`username`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_members`
--
ALTER TABLE `user_members`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `unique_phone_email` (`phone`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `manu_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `protypes`
--
ALTER TABLE `protypes`
  MODIFY `type_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_members` (`user_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`manu_id`) REFERENCES `manufactures` (`manu_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `protypes` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
