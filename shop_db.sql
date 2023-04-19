-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 24, 2022 lúc 10:40 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `quantity`, `image`) VALUES
(100, 4, 'Harry Potter và Mệnh lệnh Phượng hoàng', 180000, 3, 'a09588c2dffd5dcc1471455570c62dc9.jpg'),
(101, 1, 'Harry Potter và Mệnh lệnh Phượng hoàng', 180000, 1, 'a09588c2dffd5dcc1471455570c62dc9.jpg'),
(102, 1, 'Harry Potter và Chiếc cốc lửa', 180000, 1, 'e8f3f59815e82a7b1cab64e5f8645414.jpg'),
(103, 1, 'Harry Potter và Phòng chứa bí mật', 180000, 2, 'df1510654d607ee8756dc1483c56b3cb.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categorys`
--

CREATE TABLE `categorys` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `describes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `describes`) VALUES
(3, 'Truyen', 'cvbnm'),
(4, 'asdfg', 'llllljh'),
(5, 'Kich', 'adafsf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(10, 1, 'yuki', 'yuki@gmail.com', '00000000000', 'zxcvbnm,');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `note` varchar(100) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `discount` int(100) NOT NULL,
  `newprice` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `describes` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `author`, `category`, `price`, `discount`, `newprice`, `quantity`, `describes`, `image`) VALUES
(20, 'Harry Potter và Hòn đá Phù thủy', 'J. K. Rowling', 'Truyen', 200000, 50, 100000, 5, 'Phần truyện khởi đầu của Harry Potter', '5d3b271fd6e04b8a56eae199bc272d96.jpg'),
(23, 'Harry Potter và Hoàng tử lai   ', 'J. K. Rowling', 'Truyen', 200000, 10, 180000, 99, 'Phần truyện tiếp theo của Harry Potter', '417adae4299fde008d775491d488e070.jpg'),
(24, 'Harry Potter và Phòng chứa bí mật', 'J. K. Rowling', 'Truyen', 200000, 10, 180000, 100, 'Phần truyện tiếp theo của Harry Potter', 'df1510654d607ee8756dc1483c56b3cb.jpg'),
(25, 'Harry Potter và Tù nhân Azkaban', 'J. K. Rowling', 'Truyen', 200000, 10, 180000, 100, 'Phần truyện tiếp theo của Harry Potter', '488c6d7f7096c5661bf63848ace6535c.jpg'),
(26, 'Harry Potter và Chiếc cốc lửa', 'J. K. Rowling', 'Truyen', 200000, 10, 180000, 100, 'Phần truyện tiếp theo của Harry Potter', 'e8f3f59815e82a7b1cab64e5f8645414.jpg'),
(27, 'Harry Potter và Mệnh lệnh Phượng hoàng', 'J. K. Rowling', 'Truyen', 200000, 10, 180000, 100, 'Phần truyện tiếp theo của Harry Potter', 'a09588c2dffd5dcc1471455570c62dc9.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'yuki', 'yuki@gmail.com', '8b72529ec356bfa60828b4da6c2cc610', 'user'),
(2, 'yuki', 'yukiisme@gmail.com', '8b72529ec356bfa60828b4da6c2cc610', 'admin'),
(3, 'Yuki', 'yukiyuki@gmail.com', '8b72529ec356bfa60828b4da6c2cc610', 'user'),
(4, 'chung', 'chung@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(5, 'chung', 'a@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(6, 'harry', 'harry@gmail.com', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
