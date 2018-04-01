-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 26, 2018 lúc 01:31 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_phongthuy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id_catalog` int(11) NOT NULL,
  `name_catalog` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id_catalog`, `name_catalog`) VALUES
(1, 'Linh vật phong thủy'),
(2, 'Trang sức phong thủy'),
(3, 'Đá quý phong thủy'),
(4, 'Tỳ hưu phong thủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `email`
--

INSERT INTO `email` (`id`, `email`) VALUES
(1, 'nhommis123@gmail.com'),
(2, 'chaphmisgoal9@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_header`
--

CREATE TABLE `image_header` (
  `id_img` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tittle` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image_header`
--

INSERT INTO `image_header` (`id_img`, `image`, `tittle`) VALUES
(1, 'banner-header.png', ''),
(2, 'purple-orchid-candle-stones-bamboo-black-mat-spa-background-33383704.jpg', NULL),
(3, 'Do phong thuy chinh hang.jpg', NULL),
(4, 'do-phong-thuy-1-1504308414504.jpg', NULL),
(5, 'xem_phong_thuy.jpg', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_oder` datetime DEFAULT NULL,
  `note` longtext COLLATE utf8_unicode_ci,
  `payment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgian` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numbers` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `sale` decimal(10,0) DEFAULT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_pr`
--

CREATE TABLE `order_pr` (
  `order_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_oder` datetime DEFAULT NULL,
  `note` longtext COLLATE utf8_unicode_ci,
  `payment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgian` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_pr`
--

INSERT INTO `order_pr` (`order_id`, `username`, `phone`, `address`, `email`, `date_oder`, `note`, `payment`, `tgian`, `status`) VALUES
(1, 'thuy', '0986856868', '123 tây sơn - hà nội', 'chaphmisgoal9@gmail.com', NULL, '', '2', '2018-03-03 15:37:41', 'Đã duyệt'),
(2, 'admin', '0986856868', '123 tây sơn - hà nội', 'chaphmisgoal9@gmail.com', NULL, '', 'ATM', '2018-03-03 15:48:54', 'Đã duyệt'),
(3, 'admin', '0986856868', '123 tây sơn - hà nội', 'chaphmisgoal9@gmail.com', NULL, '', 'ATM', '2018-03-03 15:49:35', 'Đã duyệt'),
(4, 'admin', '0986856868', '123 tây sơn - hà nội', 'chaphmisgoal9@gmail.com', NULL, '', 'ATM', '2018-03-03 15:51:16', 'Đã duyệt'),
(5, 'trang', '0986856868', 'khương trung -hn', 'ptthuy96@gmail.com', NULL, '', 'ATM', '2018-03-03 21:02:54', 'Đã duyệt'),
(6, 'trang', '0986856868', 'khương trung -hn', 'ptthuy96@gmail.com', NULL, '', 'ATM', '2018-03-03 21:03:20', 'Đã duyệt'),
(7, 'thủy', '0986856868', '123 tây sơn - hà nội', 'chaphmisgoal9@gmail.com', NULL, '', 'COD', '2018-03-03 22:20:00', 'Đã duyệt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_catalog` int(11) NOT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `sale` decimal(10,0) DEFAULT NULL,
  `describe_product` longtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_tags` int(11) DEFAULT NULL,
  `number_pr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `id_catalog`, `name_product`, `price`, `sale`, `describe_product`, `image`, `image1`, `image2`, `image3`, `tags`, `id_tags`, `number_pr`) VALUES
(1, 1, 'rùa vàng', '200000', '0', '', '751180_fce6d731caf0f9ab402bc5d0843bb84b.jpg', 'hinh-anh-cho-soi-dep-dung-manh-nhat-tren-mang-11.jpg', 'hinh-nen-cho-soi-wolf-dep-an-tuong-cho-may-tinh-08.jpg', NULL, NULL, 1, 200),
(2, 1, 'rùa vàng', '200000', '0', '', '751180_fce6d731caf0f9ab402bc5d0843bb84b.jpg', 'hinh-anh-cho-soi-dep-dung-manh-nhat-tren-mang-11.jpg', 'hinh-nen-cho-soi-wolf-dep-an-tuong-cho-may-tinh-08.jpg', NULL, NULL, 1, 200);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags_pr`
--

CREATE TABLE `tags_pr` (
  `id_tags` int(11) NOT NULL,
  `name_tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags_pr`
--

INSERT INTO `tags_pr` (`id_tags`, `name_tags`) VALUES
(1, 'da thach anh'),
(2, 'thuy tinh'),
(3, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pass`) VALUES
(1, 'admin', 'pttthuy96@gmail.com', '123456789'),
(2, 'nga', 'ngant420wru.vn', '123456789');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_catalog`);

--
-- Chỉ mục cho bảng `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image_header`
--
ALTER TABLE `image_header`
  ADD PRIMARY KEY (`id_img`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `order_pr`
--
ALTER TABLE `order_pr`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_catalog` (`id_catalog`),
  ADD KEY `id_tags` (`id_tags`);

--
-- Chỉ mục cho bảng `tags_pr`
--
ALTER TABLE `tags_pr`
  ADD PRIMARY KEY (`id_tags`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id_catalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `image_header`
--
ALTER TABLE `image_header`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_pr`
--
ALTER TABLE `order_pr`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tags_pr`
--
ALTER TABLE `tags_pr`
  MODIFY `id_tags` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_pr` (`order_id`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `id_catalog` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id_catalog`),
  ADD CONSTRAINT `id_tags` FOREIGN KEY (`id_tags`) REFERENCES `tags_pr` (`id_tags`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
