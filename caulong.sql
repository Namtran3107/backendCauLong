-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 29, 2023 lúc 09:56 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `caulong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `user_email`, `password`) VALUES
(1, 'namtran', 'namtran0928@gmail.com', '$2y$10$iODnrr7EGClI1TqDwqpKcudX/TRvCsSPaLsHbkvIWYPDtGnuNXcfu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `id_customer` varchar(500) NOT NULL,
  `id_product` varchar(300) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `id_customer`, `id_product`, `updated_at`, `created_at`) VALUES
(2, '1', '3', '2023-05-26 03:57:34', '2023-05-26 03:57:34'),
(3, '1', '5', '2023-05-26 03:58:26', '2023-05-26 03:58:26'),
(11, '1', '5', '2023-05-26 03:58:26', '2023-05-26 03:58:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(200) NOT NULL,
  `name_contact` varchar(100) NOT NULL,
  `email_contact` varchar(50) NOT NULL,
  `phone_contact` varchar(50) NOT NULL,
  `message_contact` varchar(200) NOT NULL,
  `date_contact` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name_contact`, `email_contact`, `phone_contact`, `message_contact`, `date_contact`) VALUES
(1, 'sfasf', 'ấ', '23134', 'Sử dụng CSS display: block hoặc display: inline-block: Đặt thuộc tính display của phần tử HTML thành block hoặc inline-block để tạo mỗi phần tử trên một dòng riêng biệt.', '2023-05-28 20:13:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_fullname` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `customer_fullname`, `customer_email`, `password`, `customer_phone`, `created_at`, `updated_at`) VALUES
(1, 'Trần ngọc nam', 'namtran0928@gmail.com', '$2y$10$dUahdhsA/n6d/pxqn5EYDuE46D8mylgW0yoAy7RE/fStxO7wWZ71m', '2215446466', '2023-05-25 10:17:28', '2023-05-25 10:17:28'),
(3, 'Nam', 'namtran@gmail.com', '$2y$10$5S2fCSItvlc7h3tam.beK.rg9e.qaVvjmdtmNEHtXUV41rYRG5oVu', '05223555', '2023-05-25 19:23:23', '2023-05-25 19:23:23'),
(6, 'khánh', 'khanh@gmail.com', '$2y$10$8U3/SjWrbcVj3buMICLeFOGegCh63hvtQOEHHMT7XKxpnvSGhXG5q', '152165', '2023-05-28 00:58:30', '2023-05-28 00:58:30'),
(9, 'nam', 'khoa@gmail.com', '$2y$10$Y8IjRhxaPv1Ib91AzJXXWOgb23hfrYx6d/az6PzkQSbztZq7/WFSO', 'sầ', '2023-05-29 00:44:33', '2023-05-29 00:44:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_product`
--

CREATE TABLE `order_product` (
  `id_order` int(200) NOT NULL,
  `email_customer_order` varchar(100) NOT NULL,
  `phone_customer_order` varchar(50) NOT NULL,
  `id_product` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name_product` varchar(200) NOT NULL,
  `prices_product` varchar(20) NOT NULL,
  `img_product` varchar(100) NOT NULL,
  `quantity_product` varchar(100) NOT NULL,
  `brand_product` varchar(100) NOT NULL,
  `summary_product` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name_product`, `prices_product`, `img_product`, `quantity_product`, `brand_product`, `summary_product`) VALUES
(18, 'Vợt Cầu Lông Yonex Nanoflare 001C New 2023 Chính Hãng', '1190000', 'caulong.png', '1', 'Yonex', 'Là phiên bản mới nhất trong dòng sản phẩm vợt cầu lông Yonex Nanoflare. Được ra mắt trong năm 2023, sản phẩm này nhanh chóng thu hút được sự chú ý của cộng đồng cầu lông nhờ vào những tính năng nổi bật của mình.'),
(19, 'Vợt Cầu Lông Yonex Nanoflare 001F New 2023 Chính Hãng', '1190000', 'caulong.png', '1', 'Yonex', 'Kết hợp những công nghệ nổi bật với tốc độ tăng tốc của khung vợt, cơ năng trên sân yêu cầu nhờ vào trọng lượng siêu nhẹ.'),
(20, 'Vợt Cầu Lông Yonex Nanoflare 001A New 2023 Chính Hãng', '1190000', 'caulong.png', '1', 'Yonex', 'Là một phiên bản mới nhất trong dòng sản phẩm Nanoflare 001 tầm trung của hãng Yonex. Vợt này được thiết kế với trọng lượng nhẹ chỉ 5U.'),
(21, 'Vợt Cầu Lông Felet Vital 20 - Xanh Ngọc Chính Hãng', '849000', 'caulong.png', '1', 'Felet', 'Là siêu phẩm của dòng vợt giá rẻ, có điểm cân bằng 295 mm là một dòng vợt công thủ toàn diện rất thích hợp với đa số người chơi hiện nay.'),
(22, 'Vợt Cầu Lông Felet Voltage 300 (Red) Chính Hãng', '687000', 'caulong.png', '1', 'Felet', 'Là cây vợt giá rẻ đang được ưa chuộng hiện nay với độ cân bằng là 290 mm thì đây là một cây vợt nhẹ đầu rất thích hợp cho lối đánh tốc độ.'),
(23, 'Vợt Cầu Lông Felet Light Tech T3 (Blk) Chính Hãng', '1399000', 'caulong.png', '1', 'Felet', 'Là một cây vợt tầm trung được thiết kế tỉ mỉ, cẩn thận nên chất lượng và độ hoàn thiện cao, không thua kém gì so với các dòng vợt tầm trung khác.'),
(24, 'Vợt Cầu Lông Yonex Duora 55 Chính Hãng', '1290000', 'caulong.png', '1', 'Yonex', 'Là mẫu sản phẩm dòng trung cấp trong dòng Doura, đặc trưng của dòng vợt này sự kết hợp cân bằng giữa tốc độ, kiểm soát và sức mạnh.'),
(25, 'Vợt Cầu Lông Kawasaki Passion P23 Xanh - Xách Tay', '700000', 'caulong.png', '1', 'Kawasaki', 'Là một trong những mẫu vợt được đánh giá cao trong phân khúc vợt chất lượng giá rẻ. Với thiết kế màu xanh độc đáo, phối hợp hài hòa cùng các chi tiết tim trắng và đen.'),
(26, 'Vợt Cầu Lông Vicleo Thruster 560 Chính Hãng', '450000', 'caulong.png', '1', 'Vicleo', 'Là một chiếc vợt cầu lông dễ sử dụng và có trợ lực, được thiết kế để giúp người chơi mới bắt đầu dễ dàng làm quen với môn thể thao này.'),
(27, 'Vợt Cầu Lông Vicleo Aeronaut 3000 Chính Hãng', '450000', 'caulong.png', '1', 'Vicleo', 'Là một trong những chiếc vợt cầu lông đáng chú ý của thương hiệu Vicleo. Với trọng lượng 4U (85g).'),
(28, 'Vợt Cầu Lông Victor BS12 - 55TH SE', '3990000', 'caulong.png', '1', 'Victor', 'Là một cây vợt cầu lông chất lượng cao được ra mắt trong thời gian gần đây với phiên bản giới hạn vô cùng cuốn hút, được thiết kế với nhiều công nghệ tiên tiến để cải thiện sức mạnh và tốc độ đánh của người chơi.'),
(29, 'Vợt Cầu Lông Felet Light Tech T3 (RED) Chính Hãng', '1399000', 'caulong.png', '1', 'Felet', 'Được hãng Felet cho ra mắt thành công với khả năng điều cầu, kiểm soát cho lối chơi công thủ toàn diện cực kì tốt.'),
(30, 'Vợt Cầu Lông Felet Nano Fastex 800 (BLK/WHT) Chinh Hãng', '1299000', 'caulong.png', '1', 'Felet', 'Là một trong những cây vợt có giá ổn định nhưng chất lượng ngang bằng với những dòng vợt cao cấp. Được hãng thêm vào đó rất nhiều công nghệ hiện đại cũng như cách thiết kế đặc sắc.'),
(31, 'Vợt Cầu Lông Yonex Nanoflare Feel (NOR) Chính Hãng', '1680000', 'caulong.png', '1', 'Yonex', 'Là cây vợt mới ra mắt của thương hiệu Yonex. Đây là sản phẩm chính hãng, có phân khúc giá mềm, được thiết kế hướng tới người chơi mới bắt đầu với bộ môn cầu lông.'),
(32, 'Vợt Cầu Lông Yonex Nanoflare Ability (BKMG) Chính Hãng', '1680000', 'caulong.png', '1', 'Yonex', 'Là một trong những sản phẩm mới nhất của thương hiệu Yonex trong dòng Nanaflare. Vợt được thiết kế với khung có độ dẻo trung bình.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productssss`
--

CREATE TABLE `productssss` (
  `id` int(255) NOT NULL,
  `name_product` varchar(200) NOT NULL,
  `prices_product` varchar(20) NOT NULL,
  `img_product` varchar(100) NOT NULL,
  `quantity_product` varchar(100) NOT NULL,
  `brand_product` varchar(100) NOT NULL,
  `summary_product` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `productssss`
--

INSERT INTO `productssss` (`id`, `name_product`, `prices_product`, `img_product`, `quantity_product`, `brand_product`, `summary_product`) VALUES
(3, 'Vợt cầu lông Mizuno Swifter SP78 - Xanh trắng chính hãng', '1.400.000', '', '5', 'mizuno', 'hahhahaa'),
(5, 'Vợt Cầu Lông Yonex Voltric 50 E-tune chính hãng - Không bảo hành', '2.220.000', '', '3', 'kamito', 'áafsfsaf'),
(8, 'Vợt Cầu Lông Lining Windstorm 78-S Đen Nâu (Nội Địa Trung)', '1.555.000', '', '5', 'Lining', 'fasfsa\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_customer_email_unique` (`customer_email`);

--
-- Chỉ mục cho bảng `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `productssss`
--
ALTER TABLE `productssss`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id_order` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `productssss`
--
ALTER TABLE `productssss`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
