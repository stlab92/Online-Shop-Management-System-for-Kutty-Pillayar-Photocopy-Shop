-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 07:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_dp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `quantity`, `image`) VALUES
(12, 2, 'Pro Mate Paper 80GSM A4, 1 Ream (500Sheets)', 2000, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `filesize` int(100) NOT NULL,
  `filetype` varchar(100) NOT NULL,
  `upload_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` int(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `completed` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `user_id`, `filename`, `filesize`, `filetype`, `upload_date`, `name`, `email`, `number`, `address`, `completed`) VALUES
(1, 0, '2.pdf', 428695, 'application/pdf', '0000-00-00 00:00:00.000000', '', '', 0, '', '1'),
(2, 0, '2.pdf', 428695, 'application/pdf', '0000-00-00 00:00:00.000000', 'ddsd', 'ssssssssss@gmil.com', 2147483647, 'ladhlhld dalihliahi hclahLhcpoh', '1'),
(3, 0, '2.pdf', 428695, 'application/pdf', '0000-00-00 00:00:00.000000', 'Makeshwaranathan Larusan', 'makeshlaru@gmail.com', 22, 'n/a\r\na/a', '1'),
(4, 0, 'pdfjoiner_4__3_.pdf', 631765, 'application/pdf', '2024-03-01 08:11:24.950011', 'Makeshwaranathan Larusan', 'makeshlaru@gmail.com', 22, 'villa 2, SEUSL', '1');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(2, 2, 'Thasan', 'Thasan@gmail.com', '0774958925', 'Hi how are you i like your web'),
(4, 2, 'Daya', 'ga@123.com', '0777', 'hi\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_product` varchar(100) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_product`, `total_price`, `placed_on`, `payment_status`) VALUES
(3, 2, 'Daya', '07735281', 'ga@123.com', 'cash on delivery', 'flat no. 33, villa 2, SEUSL, Ouvil, Sri Lanka - 111', '', 2310, '01-Mar-2024', 'pending'),
(4, 2, 'Makan', '07735281', 'mru@gmail.com', 'cash on delivery', 'flat no. 22, n/a, n/a, Sri Lanka - 00100', '', 2000, '01-Mar-2024', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(21, 'JADENS Pink Bluetooth Thermal', 45000, 'n6.jpg'),
(22, '24-80 Colors Oily Art Marker Pen Set', 2500, 'f7.jpg'),
(23, 'Pro Mate Paper 80GSM A4, 1 Ream (500Sheets)', 2000, 'n4.jpg'),
(24, '10 Colors Ballpoint Pen Cartoon Bear', 310, 'f6.jpg'),
(25, 'Cat Paw Pencil Sharpener', 150, 'f1.jpg'),
(26, 'Artline – Permanent Marker Ink', 299, 'n1.1.jpg'),
(27, 'Mini Colorful Folding Scissors', 199, 'f3.jpg'),
(28, 'A4 Colour Paper (Pack of 100 Sheets)', 800, 'n2.1.jpg'),
(29, ' Spy Pen with UV Light', 499, 'f2.jpg'),
(30, 'Briefcase Pocket File', 699, 'n5.jpg'),
(31, 'Pantum P2502W Wireless Laser Printer', 32000, 'n8.jpg'),
(32, 'Canon Pixma MG3620 Wireless All-In-One Color Inkjet Printer', 18000, 'n7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(2, 'raj', 'ra@123.tk', 'e10f82b5e26bce244365237522139bd3', 'user'),
(3, 'Boss', 'sss@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
