-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 30, 2022 lúc 09:29 AM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `pass`) VALUES
(1, 'vanbao', 'bao@gmail', 'vanbao'),
(4, 'hieu', 'truongvanbao.tdc2223@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `buy`
--

DROP TABLE IF EXISTS `buy`;
CREATE TABLE IF NOT EXISTS `buy` (
  `maDonHang` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `diaChi` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_vietnamese_ci,
  `ngay` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`maDonHang`,`uid`) USING BTREE,
  KEY `uid` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `buy`
--

INSERT INTO `buy` (`maDonHang`, `uid`, `diaChi`, `phone`, `note`, `ngay`) VALUES
(17, 11, 'tdc', 1223123, '', '2022-12-30 07:14:23'),
(18, 11, 'tdc', 2133213213, '', '2022-12-30 07:17:38'),
(19, 11, 'tdc', 849577357, '', '2022-12-30 07:18:55'),
(20, 11, '3', 3, '', '2022-12-30 07:19:33'),
(21, 14, 'tdc', 849577357, '', '2022-12-30 07:54:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  PRIMARY KEY (`uid`,`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`uid`, `id`, `soLuong`) VALUES
(11, 8, 1),
(11, 11, 2),
(11, 21, 5),
(11, 22, 4),
(11, 23, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotdeal`
--

DROP TABLE IF EXISTS `hotdeal`;
CREATE TABLE IF NOT EXISTS `hotdeal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hotdeal`
--

INSERT INTO `hotdeal` (`id`, `discount`) VALUES
(1, 10),
(2, 12),
(3, 12),
(4, 11),
(5, 13),
(6, 25),
(7, 26),
(8, 24),
(9, 27),
(10, 6),
(11, 20),
(12, 0),
(13, 0),
(14, 0),
(15, 30),
(16, 0),
(17, 0),
(18, 0),
(19, 12),
(20, 32),
(21, 23),
(22, 25),
(23, 27),
(24, 21),
(25, 12),
(26, 13),
(27, 16),
(28, 17),
(29, 16),
(30, 15),
(31, 16),
(32, 0),
(33, 5),
(34, 0),
(35, 0),
(36, 0),
(37, 0),
(38, 13),
(39, 15),
(40, 15),
(41, 13),
(42, 13),
(43, 13),
(44, 15),
(45, 17),
(46, 12),
(47, 12),
(48, 11),
(49, 1),
(50, 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `logoManu` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`, `logoManu`) VALUES
(1, 'Apple', 'apple.png'),
(2, 'Oppo', 'oppo logo.png'),
(3, 'Samsung', 'samsung logo.png'),
(4, 'Xiaomi', 'xiaomi logo.jfif'),
(5, 'Nokia', 'nokia logo.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discountproducts` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `image-1` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `image-2` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `image-3` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `desciption` text COLLATE utf8_vietnamese_ci NOT NULL,
  `screen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cpu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ram` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `graphics` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `osystem` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `type_id` (`type_id`),
  KEY `manu_id` (`manu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `discountproducts`, `image`, `image-1`, `image-2`, `image-3`, `desciption`, `screen`, `cpu`, `ram`, `graphics`, `osystem`, `feature`, `created_at`) VALUES
(1, 'Laptop_Gaming', 1, 1, 17000000, 10, 'lapGaming1.jpg', 'lapGaming1 - Copy (2).jpg', 'lapGaming1 - Copy (3).jpg', 'lapGaming1 - Copy.jpg', 'ROG Zephyrus S GX502: Laptop gaming siêu mỏng vượt trội trong việc chơi game và sáng tạo nội dung với màn hình tuỳ chọn lên đến 240Hz PANTONE Validated và công nghệ chuyển đổi GPU độc quyền với G-SYNC 128GB', '15.6 inch, Full HD.', 'Home SL, AMD Ryzen 5 - 5500U.', '8 GB', 'Card rời - NVIDIA GeForce GTX 1650 4 GB.', 'Windows 11', 1, '2016-10-04 17:00:00'),
(2, 'LapDell-i3', 2, 1, 13000000, 12, 'lapDell1.jpg', 'lapDell1 - Copy (2).jpg', 'lapDell1 - Copy (3).jpg', 'lapDell1 - Copy.jpg', 'Dell Inspiron 3458 i3', '15.6 inch, Full HD.', 'Home SL, AMD Ryzen 5 - 5500U.', '8 GB', 'Card tích hợp - Intel Iris Xe Graphics.', 'Windows 11', 0, '2015-10-22 17:00:00'),
(3, 'Laptop-Dell-i5', 3, 1, 23000000, 12, 'lapDell2.png', 'lapDell2 - Copy (2).png', 'lapDell2 - Copy (3).png', 'lapDell2 - Copy.png', 'Tình trạng: New 100%, Fullbox\nCPU: 11th Gen Intel 2.4GHz Quad-Core i5- 1135G7 (8MB cache, Upto 4.2GHz)\nRAM:16GB DDR4 3200MHz memory \nStorage: 512GB M.2 PCIe NVMe Class 35 SSD\nMàn hình: 14\" FHD (1920x1080) , Anti-Glare\nVGA: Intel Iris Xe graphics\nOS: Windows 10 Pro\nTrọng lượng: 1.37Kg', '15.6 inch, Full HD.', 'Home SL, AMD Ryzen 5 - 5500U.', '8 GB', 'Card rời - NVIDIA GeForce MX350', 'Windows 11', 1, '2017-10-17 17:00:00'),
(4, 'Lap-Dell-i7', 4, 1, 30000000, 11, 'lapDell3.png', 'lapDell3 - Copy (2).png', 'lapDell3 - Copy (3).png', 'lapDell3 - Copy.png', 'Tình trạng: New 100%, Fullbox\r\nCPU: Intel Core i7-1265U (10 Cores, 12 Threads, 8-E-Core 3.6GHz, 2-P-Core 4.8GHz, 12MB Cache)\r\nRAM: 16GB DDR4 3200MHz memory (Onboard)\r\nStorage: 512GB M.2 PCIe NVMe Class 35 SSD\r\nMàn hình: 13.3\" FHD (1920x1080) Anti-Glare, Non-Touch, WVA, 250 nits, HD Camera, WWAN\r\nVGA: Intel Iris Xe graphics\r\nTrọng lượng: 1.32Kg', '15.6 inch, Full HD.', 'Home SL, AMD Ryzen 5 - 5500U.', '8 GB', 'Card tích hợp - 7 nhân GPU', 'Windows 11', 1, '2022-10-17 17:00:00'),
(5, 'Lap-Dell-i9', 5, 1, 100000000, 13, 'lapDell4.png', 'lapDell4 - Copy (3).png', 'lapDell4 - Copy (2).png', 'lapDell4 - Copy.png', 'Tình trạng: New, Fullbox\r\nCPU: Intel 12th Gen Core i9-12900H (14 Core, 20 Thread,  8 E-cores 1.8GHz (Upto 3.8GHz), 6 P-cores 2.5GHz (Upto 5.0GHz) 24MB level 3 Cache)\r\nRAM: 32GB DDR5 4800MHz\r\nỔ cứng: 1TB PCIe Gen4 NVMe \r\nMàn hình: 15.6\" IPS-Grade UHD 144Hz, 100% DCI-P3, 4ms, individually factory calibrated\r\nĐồ hoạ: NVIDIA GeForce RTX 3080 Ti (16GB GDDR6 VRAM)\r\nTrọng lượng: Từ 2.01Kg', '15.6 inch, Full HD.', 'Home SL, Intel Core i5 Tiger Lake - 1135G7', '8 GB', 'Card tích hợp - Intel UHD Graphics', 'Windows 11', 1, '2022-10-11 08:54:32'),
(6, 'Lap-Asus', 1, 1, 100000000, 25, 'lapAsus.jpg', 'lapAsus - Copy (2).jpg', 'lapAsus - Copy (3).jpg', 'lapAsus - Copy.jpg', 'Bộ vi xử lí : i9-12900H\r\nRam : 32GB DDR4\r\nĐĩa cứng : 1TB SSD PCIe\r\nMàn hình : 16\' WQXGA IPS 165Hz\r\nCard đồ họa : RTX3070ti 8GB\r\nHệ Điều Hành : Windows® 11 home', '15.6 inch, Full HD.', 'Home SL, Intel Core i5 Tiger Lake - 1135G7', '8 GB', 'Card tích hợp - Intel Iris Xe Graphics', 'Windows 11', 1, '2017-10-18 08:57:04'),
(7, 'Microsoft Pro 8 – Core i7', 2, 1, 50000000, 26, 'lapMic.jpg', 'lapMic - Copy (3).jpg', 'lapMic - Copy (2).jpg', 'lapMic - Copy.jpg', 'Tình trạng: New, Nguyên Seal\r\nMàu: Xám (Platinum)\r\nCPU: 3.0GHz Quad-core 11th Gen Intel Core i7-1185G7 (8MB cache, Up to 4.8GHz)\r\nRAM: 16GB LPDDR4x memory\r\nStorage: 1TB (Removable SSD)\r\nMàn hình: 13” PixelSense Flow Display with 2880 x 1920 (267 PPI), 120Hz\r\nVGA: Intel Iris® Xe Graphics\r\nInterface: 2x USB-C with USB 4.0/Thunderbolt 4, SurfaceConnect, 3.5mm headphone jack\r\nConnectivity: Wi-Fi 6: 802.11ax compatible, Bluetooth 5..1\r\nTrọng Lượng: 889g', '15.6 inch, Full HD.', 'Home SL, Intel Core i3 Tiger Lake - 1115G4', '8 GB', 'Card rời - NVIDIA GeForce GTX 1650 4 GB', 'Windows 11', 1, '2018-10-22 08:59:25'),
(8, 'Lap-HP', 3, 1, 17000000, 24, 'lapHp.png', 'laphp - Copy (3).png', 'laphp - Copy (2).png', 'laphp - Copy.png', 'Tình trạng: New 100%, Fullbox\r\nCPU: 4 Core i5-1135G7 (8MB Cache, 2.4GHz up to 4.2GHz)\r\nRAM: 8GB DDR4\r\nStorage: 512GB SSD\r\nMàn hình: 15.6″ diagonal, FHD (1920 x 1080), multitouch-enabled, IPS, edge-to-edge glass, micro-edge, 250 nits, 45% NTSC\r\nVGA: Intel Iris Xe Graphics\r\n3-cell, 43Wh Li-ion polymer\r\nTrọng lượng: 1.81Kg', '15.6 inch, Full HD.', 'Home SL, Intel Core i3 Tiger Lake - 1115G4', '8 GB', 'Card tích hợp - Intel Iris Xe Graphics', 'Windows 11', 0, '2022-10-12 09:01:22'),
(9, 'Laptop-ThinkPad', 4, 1, 30000000, 27, 'thinkPad.png', 'thinkPad - Copy (2).png', 'thinkPad - Copy (3).png', 'thinkPad - Copy.png', 'Tình trạng: New 100%, Fullbox\r\nCPU: Intel 12th Gen Core i5-1235U (10 Core, 12 Thread, 8-E-core 3.4GHz, 2-P-core 4.4GHz, 12MB L3 Cache)\r\nRAM: 16GB LPDDR4 3200MHz\r\nỔ cứng: 256GB PCIe NMVe SSD\r\nMàn hình: 14\" WUXGA (1920 x 1200) IPS\r\nGPU: Intel UHD Graphics\r\nInterface: 2x USB-A 3.2, 2x USB-C (Thunderbolt 4), HDMI, jack 3.5mm\r\n4 Cell 39.3Wh internal battery\r\nOS: FreeDOS\r\nCân nặng: 1.22Kg ', '15.6 inch, Full HD.', 'Home SL, Intel Core i3 Tiger Lake - 1115G4', '8 GB', 'Card tích hợp - Intel Iris Xe Graphics', 'Windows 11', 1, '2017-10-25 09:03:01'),
(10, 'Microsoft Surface Pro 8', 5, 1, 100000000, 6, 'Surface-Pro-8-with-keyboard-600x600.png', 'Surface-Pro-8-with-keyboard-600x600 - Copy (2).png', 'Surface-Pro-8-with-keyboard-600x600 - Copy (3).png', 'Surface-Pro-8-with-keyboard-600x600 - Copy.png', 'Tình trạng: New, Nguyên Seal\r\nMàu: Xám Đen (Graphite)\r\nCPU: 2.4GHz Quad-core 11th Gen Intel® Core™ i5-1135G7 (8MB cache, Up to 4.2GHz)\r\nRAM: 8GB LPDDR4x memory\r\nStorage: 256GB (Removable SSD)\r\nMàn hình: 13” PixelSense Flow Display with 2880 x 1920 (267 PPI), 120Hz\r\nVGA: Intel Iris® Xe Graphics\r\nInterface: 2x USB-C with USB 4.0/Thunderbolt 4, SurfaceConnect, 3.5mm headphone jack\r\nConnectivity: Wi-Fi 6: 802.11ax compatible, Bluetooth 5..1\r\nTrọng Lượng: 889g', '15.6 inch, Full HD.', 'Home SL, Intel Core i3 Tiger Lake - 1115G4', '8 GB', 'Card tích hợp - Intel UHD Graphics 600', 'Windows 11', 1, '2022-10-12 09:04:54'),
(11, 'Xiaomi Redmi Note 11', 1, 2, 5290000, 0, 'Xiaomi-Note-11.jpg', 'Xiaomi-Note-11 - Copy (2).jpg', 'Xiaomi-Note-11 - Copy (3).jpg', 'Xiaomi-Note-11 - Copy.jpg', '- Thiết kế & Chất liệu: Nguyên khối, Khung thép không gỉ & Mặt lưng kính cường lực.\r\n\r\n- Màn hình: OLED, 6.7 inch, Super Retina XDR.\r\n\r\n- Camera:\r\n\r\n+ Trước: 12 MP.\r\n\r\n+ Sau: 3 camera 12 MP.\r\n\r\n- HĐH & Chip CPU: iOS 15, Apple A15 Bionic.\r\n\r\n- Bộ nhớ: 128 GB.\r\n\r\n- Kết nối: Lightning.\r\n\r\n- Pin, Sạc: 4352 mAh, 20 W.\r\n\r\n- Tiện ích: Mở khoá khuôn mặt Face ID.', 'InfinityO', 'MediaTek Helio G96 8 nhân', '8 GB', 'Xiaomi Redmi Note 11 Pro 8GB/128GB', 'Androind 11', 1, '2016-11-09 07:59:30'),
(12, 'iPhone 11', 2, 2, 12000000, 20, 'Iphone-11.jpg', 'Iphone-11 - Copy (3).jpg', 'Iphone-11 - Copy (2).jpg', 'Iphone-11 - Copy.jpg', '- Thiết kế & Chất liệu: Nguyên khối, Khung nhôm & Mặt lưng kính cường lực.\r\n\r\n- Màn hình: IPS LCD, 6.1 inch, Liquid Retina.\r\n\r\n- Camera:\r\n\r\n+ Trước: 12 MP.\r\n\r\n+ Sau: 2 camera 12 MP.\r\n\r\n- HĐH & Chip CPU: iOS 15, Apple A13 Bionic.\r\n\r\n- Bộ nhớ: 64 GB.\r\n\r\n- Kết nối: Lightning.\r\n\r\n- Pin, Sạc: 3110 mAh, 18 W\r\n\r\n- Tiện ích: Apple Pay, Âm thanh Dolby Audio.', 'InfinityO', 'MediaTek Helio G96 8 nhân', '8 GB', 'Xiaomi Redmi Note 11 Pro 8GB/128GB', 'Androind 11', 1, '2020-11-24 08:02:23'),
(13, 'Iphone-13', 3, 2, 20000000, 0, 'Iphone-13.jpg', 'Iphone-13 - Copy (2).jpg', 'Iphone-13 - Copy (3).jpg', 'Iphone-13 - Copy.jpg', '- Thiết kế & Chất liệu: Nguyên khối, Khung nhôm & Mặt lưng kính cường lực.\r\n\r\n- Màn hình: OLED, 6.1 inch, Super Retina XDR.\r\n\r\n- Camera:\r\n\r\n+ Trước: 12 MP.\r\n\r\n+ Sau: 2 camera 12 MP.\r\n\r\n- HĐH & Chip CPU: iOS 15, Apple A15 Bionic.\r\n\r\n- Bộ nhớ: 128 GB.\r\n\r\n- Kết nối: Lightning.\r\n\r\n- Pin, Sạc: 3240 mAh, 20 W.\r\n\r\n- Tiện ích: Mở khoá khuôn mặt Face ID.', 'InfinityO', 'MediaTek Helio G96 8 nhân', '8 GB', 'Xiaomi Redmi Note 11 Pro 8GB/128GB', 'Androind 11', 1, '2020-11-30 08:02:23'),
(14, 'Samsung Galaxy A03 4GB\n', 4, 2, 3500000, 0, 'Samsung-Galaxy-A03.jpg', 'Samsung-Galaxy-A03 - Copy (3).jpg', 'Samsung-Galaxy-A03 - Copy (2).jpg', 'Samsung-Galaxy-A03 - Copy.jpg', '- Thiết kế & Chất liệu: Nguyên khối, Khung & Mặt lưng nhựa.\r\n\r\n- Màn hình: PLS LCD, 6.5 inch, HD+.\r\n\r\n- Camera:\r\n\r\n+ Trước: 5 MP.\r\n\r\n+ Sau: Chính 48 MP & Phụ 2 MP.\r\n\r\n- HĐH & Chip CPU: Android 11, Unisoc T606.\r\n\r\n- Bộ nhớ: 64 GB.\r\n\r\n- Kết nối: Micro USB.\r\n\r\n- Pin, Sạc: 5000 mAh, 7.8 W.\r\n\r\n- Tiện ích: Âm thanh Dolby Atmos.', '6.6inches', 'MediaTek Helio G96 8 nhân', '8 GB', 'Xiaomi Redmi Note 11S 8GB/128GB', 'Androind 11', 1, '2022-11-16 08:12:32'),
(15, 'Samsung Galaxy A12 6GB', 5, 2, 4000000, 30, 'Samsung-Galaxy-A12.jpg', 'Samsung-Galaxy-A12 - Copy (2).jpg', 'Samsung-Galaxy-A12 - Copy (3).jpg', 'Samsung-Galaxy-A12 - Copy.jpg', '- Thiết kế & Chất liệu: Nguyên khối, Khung & Mặt lưng nhựa.\r\n\r\n- Màn hình: PLS TFT LCD, 6.5 inch, HD+.\r\n\r\n- Camera:\r\n\r\n+ Trước: 8 MP.\r\n\r\n+ Sau: Chính 48 MP & Phụ 5 MP, 2 MP, 2 MP.\r\n\r\n- HĐH & Chip CPU: Android 11, Exynos 850.\r\n\r\n- Bộ nhớ: 128 GB.\r\n\r\n- Kết nối: Micro USB.\r\n\r\n- Pin, Sạc: 5000 mAh, 7.8 W.\r\n\r\n- Tiện ích: Âm thanh Dolby Atmos.', '6.6inches', 'MediaTek Helio G96 8 nhân', '8 GB', 'Xiaomi Redmi Note 11S 8GB/128GB', 'Androind 11', 1, '2021-11-02 08:12:32'),
(16, 'Điện thoại OPPO A16K', 1, 2, 3199000, 0, 'Oppo-A16K.jpg', 'Oppo-A16K - Copy (2).jpg', 'Oppo-A16K - Copy (3).jpg', 'Oppo-A16K - Copy.jpg', '- Thiết kế & Chất liệu: Nguyên khối, Khung nhựa & Mặt lưng thuỷ tinh hữu cơ.\r\n\r\n- Màn hình: IPS LCD, 6.52 inch, HD+.\r\n\r\n- Camera:\r\n\r\n+ Trước: 5 MP.\r\n\r\n+ Sau: 13 MP.\r\n\r\n- HĐH & Chip CPU: Android 11, MediaTek Helio G35.\r\n\r\n- Bộ nhớ: 32 GB.\r\n\r\n- Kết nối: Micro USB.\r\n\r\n- Pin, Sạc: 4230 mAh, 10 W.\r\n\r\n- Tiện ích: Mở khoá khuôn mặt.', '6.6inches', 'MediaTek Helio G96 8 nhân', '8 GB', 'Xiaomi Redmi Note 11S 8GB/128GB', 'Androind 11', 1, '2020-11-26 08:16:58'),
(17, 'Xiaomi Redmi 9A', 2, 2, 2299000, 0, 'Xiaomi-RedMi-9A.jpg', 'Xiaomi-RedMi-9A - Copy (2).jpg', 'Xiaomi-RedMi-9A - Copy (3).jpg', 'Xiaomi-RedMi-9A - Copy.jpg', '- Thiết kế & Chất liệu: Nguyên khối, Khung & Mặt lưng nhựa.\r\n\r\n- Màn hình: IPS LCD, 6.53 inch, HD+.\r\n\r\n- Camera:\r\n\r\n+ Trước: 5 MP.\r\n\r\n+ Sau: 13 MP.\r\n\r\n- HĐH & Chip CPU: Android 10, MediaTek Helio G25.\r\n\r\n- Bộ nhớ: 32 GB.\r\n\r\n- Kết nối: Micro USB.\r\n\r\n- Pin, Sạc: 5000 mAh, 10 W.\r\n\r\n- Tiện ích: Chạm 2 lần sáng màn hình, Chặn cuộc gọi, Chặn tin nhắn', '6.43 inches', 'MediaTek Helio G96 8 nhân', '8 GB', 'Xiaomi Redmi Note 11 Pro 8GB/128GB', 'Androind 11', 1, '2019-11-13 08:16:58'),
(18, 'Samsung Galaxy A13 6GB', 3, 2, 4799000, 0, 'Samsung-Galaxy-A13.jpg', 'Samsung-Galaxy-A13 - Copy (2).jpg', 'Samsung-Galaxy-A13 - Copy (3).jpg', 'Samsung-Galaxy-A13 - Copy.jpg', '- Thiết kế & Chất liệu: Nguyên khối, Khung & Mặt lưng nhựa.\r\n\r\n- Màn hình: PLS TFT LCD, 6.6 inch, Full HD+.\r\n\r\n- Camera:\r\n\r\n+ Trước: 8 MP.\r\n\r\n+ Sau: Chính 50 MP & Phụ 5 MP, 2 MP, 2 MP.\r\n\r\n- HĐH & Chip CPU: Android 12, Exynos 850.\r\n\r\n- Bộ nhớ: 128 GB.\r\n\r\n- Kết nối: Type-C.\r\n\r\n- Pin, Sạc: 5000 mAh,15 W.\r\n\r\n- Tiện ích: Mở khoá khuôn mặ, tMở khoá vân tay cạnh viền.', '6.43 inches', 'MediaTek Helio G96 8 nhân', '8 GB', 'Xiaomi Redmi Note 11 Pro 8GB/128GB', 'Androind 11', 1, '2020-11-18 08:16:58'),
(19, 'Điện thoại OPPO A55', 4, 2, 4190000, 12, 'Oppo-A55.jpg', 'Oppo-A55 - Copy (3).jpg', 'Oppo-A55 - Copy (2).jpg', 'Oppo-A55 - Copy.jpg', '- Thiết kế & Chất liệu: Nguyên khối, Khung & Mặt lưng nhựa.\r\n\r\n- Màn hình: IPS LCD, 6.5 inch, HD+.\r\n\r\n- Camera:\r\n\r\n+ Trước: 16 MP.\r\n\r\n+ Sau: Chính 50 MP & Phụ 2 MP, 2 MP.\r\n\r\n- HĐH & Chip CPU: Android 11, MediaTek Helio G35.\r\n\r\n- Bộ nhớ: 64 GB.\r\n\r\n- Kết nối: Type-C.\r\n\r\n- Pin, Sạc: 5000 mAh, 18 W.\r\n\r\n- Tiện ích: Ứng dụng kép (Nhân bản ứng dụng).', '6.67inches', 'MediaTek Helio G96 8 nhân', '8 GB', 'Xiaomi Redmi Note 11 Pro 8GB/128GB', 'Androind 11', 1, '2019-11-21 08:22:20'),
(20, 'iPhone 14 Plus 128GB', 5, 2, 25750000, 32, 'iphone-14-black.jpg', 'iphone-14-black - Copy (2).jpg', 'iphone-14-black - Copy (3).jpg', 'iphone-14-black - Copy.jpg', 'Màn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\n2 camera 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A15 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n128 GB\r\nSIM:\r\n\r\n1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:\r\n\r\n4325 mAh20 W', '6.67inches', 'Snapdragon 690', '8 GB', 'Xiaomi Redmi Note 11 Pro 8GB/128GB', 'Androind 11', 1, '2020-11-27 08:38:11'),
(21, 'Loa Marshall Kilburn 2', 1, 3, 7500000, 23, 'Loa-Marshall Kilburn.jpg', 'Loa-Marshall Kilburn - Copy (3).jpg', 'Loa-Marshall Kilburn - Copy (2).jpg', 'Loa-Marshall Kilburn - Copy.jpg', '\r\nCấu tạo	3 loa, 2 đường tiếng\r\nThời gian sạc pin	2,5 giờ\r\nThời gian pin dùng được	tối đa 20 giờ\r\nTần số	52-20.000Hz\r\nKết nối không dây	Bluetooth 5.0 Qualcomm aptX, AUX 3.5mm\r\nKích thước	243 x 162 x 140 mm\r\nTrọng lượng	2.5 kg\r\nCông suất	36W', 'None', 'TF / BT / USB / AUX / FM / TWS', 'None', 'None', 'None', 1, '2018-11-15 08:40:58'),
(22, 'Loa Sony SRS-XP500', 2, 3, 8790000, 25, 'SRS-XP500.jpg ', 'SRS-XP500 - Copy (2).jpg', 'SRS-XP500 - Copy (3).jpg', 'SRS-XP500 - Copy.jpg', 'Cấu tạo	4 loa 2 đường tiếng\r\nThời gian pin dùng được	20 giờ\r\nKết nối không dây	Bluetooth, AUX, USB\r\nCông nghệ	Clear Audio+, DSEE, LIVE SOUND...\r\nKích thước	275 x 572 x 295 mm\r\nTrọng lượng	11.2 kg\r\nLoa bass	2 loa bass 14 cm\r\nLoa treble	2 loa tweeter 5 cm\r\nKết nối khác	Micro, nhạc cụ', 'None', 'A2DP 1.3, AVRCP 1.6 ', 'None', 'None', 'None', 1, '2022-11-16 08:40:58'),
(23, 'Loa Fender Newport 2', 3, 3, 8880000, 27, 'Loa-Fender-Newport-2', 'Loa-Fender-Newport-2 - Copy (2).jpg', 'Loa-Fender-Newport-2 - Copy (3).jpg', 'Loa-Fender-Newport-2 - Copy.jpg', 'Phân loại	Loa di động, loa Bluetooth\r\nCông suất đầu ra	30W\r\nCủ loa	2 full-range, 1 tweeter\r\nDung lượng pin	12 giờ\r\nKết nối	Aux 3,5mm, Bluetooth V4.2, aptX, AAC, SBC\r\nKích thước	13.3 x 18.41 x 7.5 cm\r\nKhối lượng	1.5kg\r\nPhụ kiện kèm theo	AC adapter, 3.5mm audio cable, USB charging cable.', 'None', 'A2DP 1.3, AVRCP 2.0', 'None', 'None', 'None', 1, '2019-11-14 08:40:58'),
(24, 'Loa JBL Flip 6', 4, 3, 2100000, 21, 'Loa-JBL-Flip-6.jpg', 'Loa-JBL-Flip-6 - Copy (2).jpg', 'Loa-JBL-Flip-6 - Copy (3).jpg', 'Loa-JBL-Flip-6 - Copy.jpg', 'Cấu tạo	subwoofer dạng racetrack, gồm 1 tweeter tách rời và 2 loa bass thụ động\r\nTổng công suất	30W\r\nLoại pin	Pin Li-ion dung lượng 4800mAh\r\nThời gian pin dùng được	12 giờ\r\nKết nối không dây	Bluetooth 5.1', 'None', 'A2DP 1.3, AVRCP 2.0', 'None', 'None', 'None', 1, '2018-11-22 08:40:58'),
(25, 'Loa JBL PartyBox On The Go', 5, 3, 3990000, 12, 'Loa -JBL-PartyBo.jpg', 'Loa -JBL-PartyBo - Copy (3).jpg', 'Loa -JBL-PartyBo - Copy (2).jpg', 'Loa -JBL-PartyBo - Copy.jpg', 'Cấu tạo	1 củ bass 13.3cm và 2 củ treble 4.4cm\r\nCông suất	100W\r\nLoại pin	Lithium-ion 18Wh (7.2V @ 2500mAh)\r\nThời gian sạc pin	3.5 giờ\r\nThời gian pin dùng được	6 giờ\r\nCổng kết nối vào	Bluetooth/ USB-9BFS\r\nTần số	50Hz - 20KHz (-6 dB)\r\nNguồn vào	100 - 240V 50/60Hz\r\nKết nối không dây	Bluetooth® 4.2', 'None', 'A2DP 1.3, AVRCP 2.0', 'None', 'None', 'None', 1, '2018-11-14 08:40:58'),
(26, 'Loa JBL Xtreme 3', 1, 3, 9990000, 13, 'Loa-JBL-Xtreme-3.jpg', 'Loa-Jbl-xtreme-3 - Copy (3).jpg', 'Loa-Jbl-xtreme-3 - Copy (2).jpg', 'Loa-Jbl-xtreme-3 - Copy.jpg', '\r\nThời gian pin dùng được	15 giờ\r\nKết nối đầu ra	Kết nối USB-C\r\nNguồn vào	Smartphone, máy tính bảng\r\nCông nghệ	Bluetooth 5.1\r\nKết nối khác	Bốn trình điều khiển và hai bộ tản nhiệt JBL Bass', 'None', 'A2DP 1.3, AVRCP 2.0', 'None', 'None', 'None', 1, '2017-11-23 08:40:58'),
(27, 'Loa Sony SRS-XG300', 2, 3, 5990000, 16, 'Loa-Sony-SRS-XG300.jpg', 'Loa-Sony-SRS-XG300 - Copy (2).jpg', 'Loa-Sony-SRS-XG300 - Copy (3).jpg', 'Loa-Sony-SRS-XG300 - Copy.jpg', 'Loa bass	61mm x 68mm\r\nLoa treble	20mm\r\nEQ tùy chỉnh	Bass / Mid / Treble\r\nKích thước (R x C x S)	318mm x 138mm x 136mm\r\nTrọng lượng	3kg\r\nBluetooth	Phiên bản 5.2\r\nPhạm vi	30m\r\nCấu hình tương thích	A2DP, AVRCP, HFP, SSP\r\nTần số	20 Hz - 20.000 Hz (lấy mẫu 44,1 kHz) TUỔI THỌ PIN', 'None', 'A2DP 1.3, AVRCP 2.0', 'None', 'None', 'None', 1, '2018-11-21 08:40:58'),
(28, 'Loa Bose S1 Pro', 3, 3, 4990000, 17, 'Loa-Bose-S1-Pro.jpg', 'Loa-Bose-S1-Pro - Copy (2).jpg', 'Loa-Bose-S1-Pro - Copy (3).jpg', 'Loa-Bose-S1-Pro - Copy.jpg', 'Loại pin	Lithium-ion\r\nThời gian sạc pin	5 giờ (3 giờ sạc nhanh)\r\nThời gian pin dùng được	11 giờ\r\nCổng kết nối vào	2 canon + 6 li đầu vào, Đầu vào 3.5mm, Đầu vào input\r\nKết nối đầu ra	Cổng 6 li\r\nNguồn vào	220V~50/60Hz\r\nKết nối không dây	Bluetooth\r\nCông nghệ	Practice Amp (PA) đa-vị trí mới nhất do hãng tự nghiên cứu\r\nLoa Bass	20cm', 'None', 'A2DP 1.3, AVRCP 2.0', 'None', 'None', 'None', 1, '2018-11-28 08:40:58'),
(29, 'Loa B&O Beolit 20', 4, 3, 11990000, 16, 'Loa-B&O-Beolit-20.jpg', 'Loa-B&O-Beolit-20 - Copy (2).jpg', 'Loa-B&O-Beolit-20 - Copy (3).jpg', 'Loa-B&O-Beolit-20 - Copy.jpg', 'Cấu tạo	3 x 1,5 ” củ loa full; 1 x 5,5” củ loa bass; 2 x 4 ” Bộ tản âm trầm thụ động\r\nCông suất	2 x 35W\r\nThời gian sạc pin	3 giờ ở 15V - 3A\r\nThời gian pin dùng được	Lên đến 37 giờ với âm thanh nhạc nền; Tối đa 8 giờ với âm thanh bình thường\r\nTần số	37 - 20.000 Hz\r\nNguồn vào	15V DC / 3A Qua đầu nối USB-C\r\nKích thước	135 W x 230 H x 189 D mm\r\nTrọng lượng	2,7 kg\r\nHãng loa	B&O', 'None', 'A2DP 1.3, AVRCP 2.0', 'None', 'None', 'None', 1, '2019-11-21 08:40:58'),
(30, 'Loa JBL PartyBox 310', 5, 3, 14990000, 15, 'Loa-JBL-PartyBox-310.jpg', 'Loa-JBL-PartyBox-310 - Copy (3).jpg', 'Loa-JBL-PartyBox-310 - Copy (2).jpg', 'Loa-JBL-PartyBox-310 - Copy.jpg', 'Loại pin	Lithium-ion 74.88Wh\r\nThời gian sạc pin	5 giờ\r\nThời gian pin dùng được	18 tiếng\r\nNguồn vào	00-240V AC và 12V DC\r\nKết nối không dây	Bluetooth\r\nCông nghệ	TWS (True Wireless Stereo) kết nối tới 2 loa Party qua Bluetooth, Bass Boost\r\nCông suất	240W RMS\r\nTần số	45Hz - 20kHz (-6 dB)\r\nLoa bass	2 loa đường kính 6,5 inch', 'None', 'A2DP 1.3, AVRCP 2.0', 'None', 'None', 'None', 1, '2019-11-14 08:40:58'),
(31, 'PC Đồ Họa Rocket Lake I7 VNC11 – I7 11700F', 1, 4, 24000000, 16, 'Docketlake-i7-vnc11-i7-11700f.jpg', 'Docketlake-i7-vnc11-i7-11700f - Copy (3).jpg', 'Docketlake-i7-vnc11-i7-11700f - Copy (2).jpg', 'Docketlake-i7-vnc11-i7-11700f - Copy.jpg', 'MAINBOARD: GIGABYTE B560M AORUS PRO (Socket 1200)\r\n\r\nCPU: Intel® Core™ i7 11700F (2.5GHz turbo up to 4.9Ghz, 8 nhân 16 luồng, 16MB Cache, 65W)\r\n\r\nTẢN NHIỆT: Tản khí ID COOLING SE 224 RGB ( 4 ỐNG ĐỒNG )\r\n\r\nVGA: GeForce MSI GTX1650 4G GDDR6\r\n\r\nRAM: 16GB/3200MHz Kingston Fury Beast Black DDR4 ( 2 * 8G )\r\n\r\nỔ CỨNG: SSD 500G Samsung 980 PCIe NVMe M.2 2280 ( 3100Mb/s – 2600Mb/s)\r\n\r\nMÀN HÌNH: 24inch Dell E2422H IPS Full HD', '6.83inches', 'SSD ', '8GB', 'Card VGA Gigabyte GTX 750Ti 2G GDDR5', 'Windown 11', 1, '2019-11-21 09:21:03'),
(32, 'Dell Inspiron (3891)', 2, 4, 20990000, 0, 'Dell-Inspiron-(3891).jpg', 'Dell-Inspiron-(3891) - Copy.jpg', 'Dell-Inspiron-(3892) - Copy.jpg', 'Dell-Inspiron-(3893) - Copy.jpg', 'Bộ vi xử lý :	Intel Core i3 -10105	\r\nTốc độ CPU :  3,7GHz\r\nRam :	8GB\r\nỔ cứng: 256GB SSD\r\nCard đồ họa : Intel UHD 630\r\nHệ điều hành : Windown11', '6.83inches', 'HDD', '8GB', 'Card VGA Gigabyte GTX 750Ti 2G GDDR5', 'Windown 11', 1, '2020-11-19 12:36:07'),
(33, 'Lenovo Legion Tower', 3, 4, 23990000, 5, 'Lenovo-Legion-Tower.jpg', 'Lenovo-Legion-Tower - Copy (2).jpg', 'Lenovo-Legion-Tower - Copy (3).jpg', 'Lenovo-Legion-Tower - Copy.jpg', 'Bộ vi xử lý :Intel Core i5 - 11400	\r\nTốc độ CPU : 2,6GHz\r\nRam :	8GB\r\nỔ cứng: 256GB SSD\r\nCard đồ họa : Nvidia Geforce GTX 1660 Super\r\nHệ điều hành : Windown10', '6.83inches', 'SDD', '8GB', 'Card VGA Gigabyte GTX 750Ti 2G GDDR5', 'Windown 11', 1, '2019-11-13 12:36:07'),
(34, 'Falcon Northwest', 4, 4, 40000000, 0, 'Falcon-Northwest.jpg', 'Falcon-Northwest - Copy (3).jpg', 'Falcon-Northwest - Copy (2).jpg', 'Falcon-Northwest - Copy.jpg', 'Bộ vi xử lý :AMD Ryzen 7 5800 	\r\nTốc độ CPU :3,4GHz\r\nRam : 32 GB\r\nỔ cứng: 2TB\r\nCard đồ họa : 	Nvidia Geforce GTX 3090 Super\r\nHệ điều hành : Windown 11 Pro', '6.83inches', 'HDD, WD UL Gold', '8GB', 'Card VGA Gigabyte GTX 750Ti 2G GDDR5', 'Windown 11', 1, '2018-11-14 12:36:07'),
(35, 'Alienware Aurora', 5, 4, 50000000, 0, 'Alienware-Aurora.jfif', 'Alienware-Aurora - Copy (2).jfif', 'Alienware-Aurora - Copy (3).jfif', 'Alienware-Aurora -4.jfif', 'Bộ vi xử lý :Intel Core i9 - 12900K 	\r\nTốc độ CPU :3,2GHz\r\nRam : 	64GB\r\nỔ cứng: 1TB\r\nCard đồ họa : 	Nvidia Geforce GTX 3090 Super\r\nHệ điều hành : Windown 11 ', '6.83inches', 'SDD', '8GB', 'Card VGA Gigabyte GTX 750Ti 2G GDDR5', 'Windown 11', 1, '2017-11-08 12:36:07'),
(36, 'Velocity Rapto Z55', 1, 4, 49000000, 0, 'Velocity-Rapto-Z55.jfif', 'Velocity-Rapto-Z55.jfif', 'Velocity-Rapto-Z55.jfif', 'Velocity-Rapto-Z55.jfif', 'Bộ vi xử lý :Intel Core i9 - 12900K 	\r\nTốc độ CPU :3,19GHz\r\nRam : 	16GB\r\nỔ cứng: 2TB\r\nCard đồ họa : 	Nvidia Geforce GTX 3080 Ti\r\nHệ điều hành : Windown 11 ', '6.83inches', 'SDD, UL', '8GB', 'Card VGA Gigabyte GTX 750Ti 2G GDDR5', 'Windown 11', 1, '2019-11-14 12:36:07'),
(37, 'Dell Precision 7920 Tower (2020) ', 2, 4, 80000000, 0, 'Dell-Precision-7920-Tower.jpg', 'Dell-Precision-7920-Tower - Copy (2).jpg', 'Dell-Precision-7920-Tower - Copy (3).jpg', 'Dell-Precision-7920-Tower - Copy.jpg', 'Bộ vi xử lý :Dual Intel Xeon Platinum 8260 	\r\nTốc độ CPU :2,4 GHz\r\nRam : 	96GB\r\nỔ cứng: 512GB\r\nCard đồ họa : Nvidia Quadro RTX 8000\r\nHệ điều hành : Windown 10 cho máy trạm', '6.83inches', 'HDD UL', '8GB', 'Card VGA Gigabyte GTX 750Ti 2G GDDR5', 'Windown 11', 1, '2020-11-19 12:36:07'),
(38, 'MSI AM241P 11M ', 3, 4, 60000000, 13, 'MSI-AM241P-11M.png\r\n', 'MSI-AM241P-11M - Copy (2).png', 'MSI-AM241P-11M - Copy (3).png', 'MSI-AM241P-11M - Copy.png', 'Bộ vi xử lý :Intel Core i5 - 1135G7 	\r\nTốc độ CPU :2,4 GHz\r\nRam : 8GB\r\nỔ cứng: 256GB SSD\r\nCard đồ họa : Inter Iris Xe Graphic \r\nHệ điều hành : Windown 10', '6.83inches', 'SDD,WD', '8GB', 'Card VGA Gigabyte GTX 750Ti 2G GDDR5', 'Windown 11', 1, '2017-11-09 12:36:07'),
(39, 'HP Envy 34 (2022)', 4, 4, 80000000, 15, 'HP-Envy-34.jpg', 'HP-Envy-34 - Copy (2).jpg', 'HP-Envy-34 - Copy (3).jpg', 'HP-Envy-34 - Copy.jpg', 'Bộ vi xử lý :	Intel Core i7 - 11700 	\r\nTốc độ CPU :2,5GHz\r\nRam :32Gb\r\nỔ cứng: 1TB\r\nCard đồ họa : Nvidia Geforce GTX 3060 \r\nHệ điều hành : Windown 11 Pro', '6.83inches', 'HDD, WD Untrastar', '8GB', 'Card VGA Gigabyte GTX 750Ti 2G GDDR5', 'Windown 11', 1, '2019-11-13 12:36:07'),
(40, 'HP Chromebase ', 5, 4, 78900000, 15, 'HP-Chromebase.jpg', 'HP-Chromebase - Copy (3).jpg', 'HP-Chromebase - Copy (2).jpg', 'HP-Chromebase - Copy.jpg', 'Bộ vi xử lý : Intel Pentium Gold 6405U 	\r\nTốc độ CPU : 2,4 GHz\r\nRam : 4GB\r\nỔ cứng: 64GB\r\nCard đồ họa : Intel UHD\r\nHệ điều hành : Google Chrome', '6.83inches', 'SSD', '8GB', 'Card VGA Gigabyte GTX 750Ti 2G GDDR5', 'Windown 11', 1, '2014-11-12 12:36:07'),
(41, 'Máy tính bảng iPad Pro M1 11 inch WiFi Cellular 1TB', 1, 5, 20990000, 13, 'iPad-Pro-M1-11-inch-WiFi-Cellular-1TB', 'iPad-Pro-M1-11-inch-WiFi-).jpg', 'iPad-Pro-M1-11-inch-WiFi- Copy.jpg', 'iPad-Pro-M1-11-inch-WiFi-Cellular-1TB - Copy.jpg', '- Thiết kế & Chất liệu: Nhôm nguyên khối.\r\n\r\n- Màn hình: 11\", Liquid Retina.\r\n\r\n- HĐH & Chip CPU: iPadOS 15 & Apple M1 8 nhân.\r\n\r\n- Bộ nhớ: RAM 16 GB, bộ nhớ trong 1 TB.\r\n\r\n- Camera: Chính 12 MP & Phụ 10 MP, TOF 3D LiDAR (sau), 12 MP (trước).\r\n\r\n- Pin, sạc: 7538 mAh, 20 W.\r\n\r\n- Tiện ích: Âm thanh Dolby Atmos, kết nối Apple Pencil 2, mở khóa bằng khuôn mặt (Face ID), 4 loa, Dolby Vision.\r\n\r\n- Kết nối: WiFi, GPS, Bluetooth v5.0, Type-C, OTG.', '8.7 inch, HD+', 'Quad Core 1.3GHz', '8GB', 'GALAXY TAB E T561Y', 'Android', 1, '2020-03-19 13:13:16'),
(42, 'Máy tính bảng Samsung Galaxy Tab S7 FE 4G', 2, 5, 70000000, 13, 'Samsung-Galaxy-Tab-S7-FE-4G.jpg', 'Samsung-Galaxy-Tab-S7-FE-4G - Copy (3).jpg', 'Samsung-Galaxy-Tab-S7-FE-4G - Copy (2).jpg', 'Samsung-Galaxy-Tab-S7-FE-4G - Copy.jpg', '- Thiết kế & Chất liệu: Khung & Mặt lưng kim loại.\r\n\r\n- Màn hình: 12.4\", TFT LCD.\r\n\r\n- HĐH & Chip CPU: Android 11 & Snapdragon 750G.\r\n\r\n- Bộ nhớ: RAM 4 GB, bộ nhớ trong 64 GB.\r\n\r\n- Camera: 8 MP (sau), 5 MP (trước).\r\n\r\n- Pin, sạc: 10090 mAh, 45 W.\r\n\r\n- Tiện ích: Mở khóa bằng khuôn mặt, Samsung DeX (Giao diện tương tự PC), chế độ trẻ em (Samsung Kids).\r\n\r\n- Kết nối: WiFi, GPS, Bluetooth v5.0, Type-C, OTG.', '8.7 inch, HD+', 'Quad Core 1.3GHz', '8GB', 'Đang cập nhật', 'Android', 1, '2019-08-21 13:13:16'),
(43, 'Máy tính bảng Samsung Galaxy Tab S8', 3, 5, 50000000, 13, 'Samsung-Galaxy-Tab-S8.jpg', 'Samsung-Galaxy-Tab-S8+ - Copy (2).jpg', 'Samsung-Galaxy-Tab-S8+.jpg', 'Samsung-Galaxy-Tab-S8.jpg', '- Thiết kế & Chất liệu: Kim loại nguyên khối.\r\n\r\n- Màn hình: 11\", LTPS.\r\n\r\n- HĐH & Chip CPU: Android 12 & Snapdragon 8 Gen 1 8 nhân.\r\n\r\n- Bộ nhớ: RAM 8 GB, bộ nhớ trong 128 GB.\r\n\r\n- Camera: Chính 13 MP & Phụ 6 MP (sau), 12 MP (trước).\r\n\r\n- Pin, sạc: 8000 mAh, 45 W.\r\n\r\n- Tiện ích: Mở khóa bằng khuôn mặt, Samsung DeX (Giao diện tương tự PC), chế độ trẻ em (Samsung Kids).\r\n\r\n- Kết nối: WiFi, GPS, Bluetooth v5.2, Type-C.', '8.7 inch, HD+', 'Quad Core 1.3GHz', '8GB', 'Đang cập nhật', 'Android', 1, '2018-01-04 13:13:16'),
(44, 'Máy tính bảng iPad Pro M1 11 inch WiFi Cellular 2TB', 4, 5, 50000000, 15, 'iPad-Pro-M1-11-inch-WiFi-Cellular-2TB.jpg', 'iPad-Pro-M1-11-inch-WiFi-.jpg', 'iPad-Pro-M1-11-inch-.jpg', 'iPad-Pro-M1-11-inch-.jpg', '- Thiết kế & Chất liệu: Nhôm nguyên khối.\r\n\r\n- Màn hình: 11 inch, Liquid Retina.\r\n\r\n- HĐH & Chip CPU: iPadOS 15, Apple M1 8 nhân.\r\n\r\n- Bộ nhớ: RAM: 16 GB, bộ nhớ trong: 128 GB.\r\n\r\n- Camera: Chính 12 MP & Phụ 10 MP, TOF 3D LiDAR (sau), 12 MP (trước).\r\n\r\n- Pin, sạc: 7538 mAh, 20 W.\r\n\r\n- Tiện ích: Kết nối Apple Pencil 2, mở khóa bằng khuôn mặt (Face ID).\r\n\r\n- Kết nối: Hỗ trợ 5G, 1 Nano SIM hoặc eSIM, Bluetooth v5.0.', '8.7 inch, HD+', 'Quad Core 1.3GHz', '8GB', 'Đang cập nhật', 'Android', 1, '2017-08-11 13:13:16'),
(45, 'Máy tính bảng Samsung Galaxy Tab A7 Lite', 5, 5, 56660000, 17, 'Samsung-Galaxy-Tab-A7-Lite.jpg', 'Samsung-Galaxy-Tab-A7-Lite - Copy (3).jpg', 'Samsung-Galaxy-Tab-A7-Lite - Copy (2).jpg', 'Samsung-Galaxy-Tab-A7-Lite - Copy.jpg', '- Thiết kế & Chất liệu: Nhôm nguyên khối.\r\n\r\n- Màn hình: 8.7\", TFT LCD.\r\n\r\n- HĐH & Chip CPU: Android 11 & MediaTek MT8768T 8 nhân.\r\n\r\n- Bộ nhớ: RAM 3 GB, bộ nhớ trong 32 GB.\r\n\r\n- Camera: 8 MP (sau), 2 MP (trước).\r\n\r\n- Pin, sạc: 5100 mAh, 15 W.\r\n\r\n- Tiện ích: Thu nhỏ màn hình sử dụng một tay, âm thanh Dolby Atmos, chế độ trẻ em (Samsung Kids).\r\n\r\n- Kết nối: WiFi, GPS, Bluetooth, Type-C, OTG.', '8.7 inch, HD+', 'Quad Core 1.5GHz', '8GB', 'Đang cập nhật', 'Android', 1, '2017-01-19 13:13:16'),
(46, 'Máy tính bảng Samsung Galaxy Tab S8 Ultra', 1, 4, 80000000, 12, 'Samsung-Galaxy-Tab-S8-Ultra.jpg', 'Samsung-Galaxy-Tab-S8-Ultra - Copy (3).jpg', 'Samsung-Galaxy-Tab-S8-Ultra - Copy (2).jpg', 'Samsung-Galaxy-Tab-S8-Ultra - Copy.jpg', '- Thiết kế & Chất liệu: Nhôm nguyên khối.\r\n\r\n- Màn hình: 14.6\", Super AMOLED.\r\n\r\n- HĐH & Chip CPU: Android 12 & Snapdragon 8 Gen 1 8 nhân.\r\n\r\n- Bộ nhớ: RAM 8 GB, bộ nhớ trong 128 GB.\r\n\r\n- Camera: Chính 13 MP & Phụ 6 MP (sau), 2 Camera 12 MP (trước).\r\n\r\n- Pin, sạc: 5100 mAh, 15 W.\r\n\r\n- Tiện ích: Chạm 2 lần mở màn hình, kết nối bàn phím rời, ứng dụng kép (Dual Messenger).\r\n\r\n- Kết nối: Hỗ trợ 5G, 1 Nano SIM, WiFi, GPS, Bluetooth v5.2.', '8.76inches', 'Quad Core 1.5GHz', '8GB', 'Đang cập nhật', 'Android', 1, '2019-12-21 13:13:16'),
(47, 'Máy tính bảng iPad 9 WiFi 64GB', 2, 5, 60000000, 12, 'IiPad-9-WiFi-64GB.jpg', 'IiPad-9-WiFi-64GB - Copy (2).jpg', 'IiPad-9-WiFi-64GB - Copy (3).jpg', 'IiPad-9-WiFi-64GB - Copy.jpg', '- Thiết kế & Chất liệu: Nhôm nguyên khối.\r\n\r\n- Màn hình: 10.2 inch, 1620 x 2160 Pixels.\r\n\r\n- HĐH & Chip CPU: iPadOS 15, Apple A13 Bionic 6 nhân.\r\n\r\n- Bộ nhớ: RAM: 3 GB, bộ nhớ trong: 64 GB.\r\n\r\n- Camera: Camera sau: 8 MP, camera trước: 12 MP.\r\n\r\n- Pin, sạc: 8600 mAh, 20 W.\r\n\r\n- Tiện ích: Kết nối Apple Pencil, mở khóa bằng vân tay.\r\n\r\n- Kết nối: FaceTime, WiFi, GPS, Bluetooth, Lightning.', '8.76inches', 'Quad Core 1.5GHz', '8GB', 'Đang cập nhật', 'Android', 1, '2020-01-17 13:13:16'),
(48, 'Máy tính bảng Samsung Galaxy Tab S8+', 3, 5, 89000000, 11, 'Samsung-Galaxy-Tab-S8+.jpg', 'Samsung-Galaxy-Tab-S8+ - Copy (2).jpg', 'Samsung-Galaxy-Tab-S8+ - Copy.jpg', 'Samsung-Galaxy-Tab-S8+.jpg', '- Thiết kế & Chất liệu: Kim loại nguyên khối.\r\n\r\n- Màn hình: 12.4 inch, Super AMOLED.\r\n\r\n- HĐH & Chip CPU: Android 12, Snapdragon 8 Gen 1 8 nhân.\r\n\r\n- Bộ nhớ: RAM: 8 GB, bộ nhớ trong: 128 GB.\r\n\r\n- Camera: Chính 13 MP & Phụ 6 MP (sau), 12 MP (trước).\r\n\r\n- Pin, sạc: 10090 mAh, 45 W.\r\n\r\n- Tiện ích: Kết nối bút S Pen, ghi âm cuộc gọi, không gian thứ hai (thư mục bảo mật).\r\n\r\n- Kết nối: Hỗ trợ 5G, 1 Nano SIM, Bluetooth v5.0.', '8.76inches', 'Quad Core 1.5GHz', '8GB', 'Đang cập nhật', 'Android', 1, '2018-12-21 13:13:16'),
(49, 'Máy tính bảng iPad Pro M1 12.9 inch WiFi Cellular 128GB', 4, 5, 78900000, 1, 'IPad-Pro-M1-12.9-inch-WiFi-Cellular-128GB.jpg', 'IPad-Pro-M1-12.9-inch-WiFi-Cellular-).jpg', 'IPad-Pro-M1-12.9-inch-Wy.jpg', 'IPad-Pro-M1-12.9-inch-WiFi-Cellular-128GB.jpg', '- Thiết kế & Chất liệu: Nhôm nguyên khối.\n\n- Màn hình: 12.9\", Liquid Retina XDR.\n\n- HĐH & Chip CPU: iPadOS 15 & Apple M1.\n\n- Bộ nhớ: RAM 8 GB & ROM 128 GB.\n\n- Camera: Chính 12 MP & Phụ 10 MP, TOF 3D LiDAR (sau) & 12 MP (trước).\n\n- Pin, sạc: 40.88 Wh (~ 10.835 mAh), 20 W.\n\n- Tiện ích: 4 loa, Dolby Vision, kết nối Apple Pencil 2, mở khóa bằng khuôn mặt (Face ID).\n\n- Kết nối: Hỗ trợ 5G, 1 Nano SIM hoặc 1 eSIM, Bluetooth v5.0, Type-C.', '8.72inches', 'Quad Core 1.5GHz', '8GB', 'Đang cập nhật', 'Android', 1, '2015-11-05 13:13:16'),
(50, '2', 1, 3, 3, 25, 'Picture1.png', '', '', '', '2223', '31', '321', '312', 'Äang cáº­p 312', '321', 1, '2017-11-08 13:13:16'),
(114, '1', 2, 3, 4, 6, '7', '', '', '', '8', '9', '10', '11', '12', '13', 14, '2022-12-17 04:21:50'),
(132, 'Trương Văn Bảodsads', 2, 3, 312312, 10, 'Picture1.png', NULL, NULL, NULL, 'asdasd', 'asdasd', 'asdasd', 'asdsad', 'asdasd', 'asdasd', 0, '2022-12-30 08:26:40'),
(133, 'Trương Văn Bảosasdcccc', 4, 3, 312312, 10, 'Picture1.png', NULL, NULL, NULL, 'asdasd', 'asdsd', 'sdsad', 'sddsd', 'sadasd', 'asdasd', 0, '2022-12-30 08:50:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `logoProtypes` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`, `logoProtypes`) VALUES
(0, 'HOTHOT', 'Screenshot 2021-12-20 110244.png'),
(1, 'Laptop', 'Logo-Laptop.jpg'),
(2, 'Điện thoại', 'Logo-SmartPhone.jpg'),
(3, 'Loa', 'Logo-Loudspeaker.jpg'),
(4, 'PC', 'Logo-PC.jpg'),
(5, 'tablet', 'Logo-Tablet.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `idproducts` int(11) NOT NULL,
  `nameuser` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `emailuser` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `reviewuser` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `rating` tinyint(6) NOT NULL,
  `sub_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`),
  KEY `idproducts` (`idproducts`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `review`
--

INSERT INTO `review` (`iduser`, `idproducts`, `nameuser`, `emailuser`, `reviewuser`, `rating`, `sub_time`) VALUES
(1, 14, 'zxzxzxxz', 'zxxz', 'zxxzzxzxzxzxzxxzzxzx', 1, '2022-12-08 18:19:46'),
(9, 14, 'Bảo Văn', 'Bao@gmail.com', '1 sao', 1, '2022-12-08 23:29:03'),
(10, 14, 'Hiếu', 'ginhieu1@gmail.com', 'ads', 1, '2022-12-08 23:30:59'),
(11, 14, 'Hiếu', 'ginhieu1@gmail.com', 'q', 5, '2022-12-08 23:31:59'),
(12, 14, 'Minh Anh', 'ma@gmail.com', 'hahaahahah', 4, '2022-12-09 00:39:30'),
(13, 4, 'Hiếu', '1@aa', '1', 2, '2022-12-09 00:46:06'),
(14, 20, 'Hiếu', 'ginhieu1@gmail.com', 'giiid', 3, '2022-12-16 00:23:57'),
(15, 1, '2332', '234324@gm', '234324', 2, '2022-12-29 10:42:55'),
(16, 1, '23', '3123@aasda', 'sadasd', 3, '2022-12-30 14:50:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinhang`
--

DROP TABLE IF EXISTS `thongtinhang`;
CREATE TABLE IF NOT EXISTS `thongtinhang` (
  `maDonHang` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  PRIMARY KEY (`maDonHang`,`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinhang`
--

INSERT INTO `thongtinhang` (`maDonHang`, `id`, `soLuong`) VALUES
(18, 1, 4),
(18, 2, 4),
(19, 3, 1),
(19, 4, 4),
(20, 8, 1),
(21, 3, 1),
(21, 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topsell`
--

DROP TABLE IF EXISTS `topsell`;
CREATE TABLE IF NOT EXISTS `topsell` (
  `id` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `topsell`
--

INSERT INTO `topsell` (`id`, `soLuong`) VALUES
(3, 14),
(6, 3),
(12, 65),
(13, 65),
(32, 14),
(34, 8),
(37, 8),
(44, 125),
(46, 65),
(114, 65);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(12) NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`uid`, `fullname`, `username`, `password`, `sdt`, `email`) VALUES
(2, '3243', '1423242', '202cb962ac59075b964b07152d234b70', 1234, 'phamduykhiem113@gmail.com'),
(4, 'báº£o', '21211tt4355', '202cb962ac59075b964b07152d234b70', 938778719, 'phamduykhiem113@gmail.com'),
(5, 'phÃ¡ÂºÂ¡m duy khiÃƒÂªm', '21211tt4355', '202cb962ac59075b964b07152d234b70', 938778719, 'phamduykhiem113@gmail.com'),
(6, '1', '2', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 5, '6'),
(7, '1', '2', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 5, '6'),
(8, 'pháº¡m duy khiÃªm', '21211tt4355', '202cb962ac59075b964b07152d234b70', 938778719, 'phamduykhiem113@gmail.com'),
(9, 'pháº¡m duy khiÃªm', '21211tt4355', '202cb962ac59075b964b07152d234b70', 938778719, 'phamduykhiem113@gmail.com'),
(11, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', 1, '1'),
(12, '1', '2', '2', 22, '2'),
(13, '333', '333', '310dcbbf4cce62f762a2aaa148d556bd', 333, '333'),
(14, 'truongvanbao', 'baobao', 'b4e1c6620073acda217d807627a78dae', 1203912301, 'bao@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`uid`,`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `wishlist`
--

INSERT INTO `wishlist` (`uid`, `id`) VALUES
(14, 2),
(14, 3),
(11, 8),
(11, 9),
(11, 12),
(11, 18),
(11, 21),
(11, 27),
(11, 34),
(11, 40),
(11, 44);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `buy`
--
ALTER TABLE `buy`
  ADD CONSTRAINT `buy_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Các ràng buộc cho bảng `hotdeal`
--
ALTER TABLE `hotdeal`
  ADD CONSTRAINT `hotdeal_ibfk_1` FOREIGN KEY (`id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `protypes` (`type_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`manu_id`) REFERENCES `manufactures` (`manu_id`);

--
-- Các ràng buộc cho bảng `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`idproducts`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `thongtinhang`
--
ALTER TABLE `thongtinhang`
  ADD CONSTRAINT `thongtinhang_ibfk_1` FOREIGN KEY (`id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thongtinhang_ibfk_2` FOREIGN KEY (`maDonHang`) REFERENCES `buy` (`maDonHang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `topsell`
--
ALTER TABLE `topsell`
  ADD CONSTRAINT `topsell_ibfk_1` FOREIGN KEY (`id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
