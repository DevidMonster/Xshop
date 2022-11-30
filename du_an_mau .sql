-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 07:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an_mau`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'anhkienphuly', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(21, 'Laptop', 'laptop.png'),
(22, 'Balo', 'balo.png'),
(23, 'Đồng hồ', 'dongho.png'),
(24, 'Mũ', 'mu.png'),
(25, 'Nữ trang', 'nutrang.png'),
(26, 'Điện thoại', 'phone.png'),
(27, 'Nước hoa', 'nuochoa.png'),
(28, 'Camera', 'camera.png');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `product_id` varchar(250) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `username`, `product_id`, `date`) VALUES
(1, 'alo', 'test2', '34', '2022-10-23'),
(2, 'san pham tốt', 'test2', '34', '2022-10-23'),
(3, 'san pham tốt', 'test2', '34', '2022-10-23'),
(4, 'san pham tốt', 'test2', '34', '2022-10-23'),
(5, 'good chop', 'test2', '29', '2022-10-23'),
(6, 'hao lo ', 'test2', '29', '2022-10-23'),
(7, 'qua tot', 'test2', '28', '2022-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `discount` double(10,2) NOT NULL DEFAULT 0.00,
  `image` varchar(250) DEFAULT NULL,
  `cate_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `discount`, `image`, `cate_id`, `description`, `view`) VALUES
(11, 'MacBook Air M2(2022)', 29000000.00, 0.00, 'macbook_air_m2.png', 21, 'Wow', 0),
(12, 'Laptop Nitro', 25000000.00, 0.00, 'laptop nitro.png', 21, 'wow', 0),
(13, 'Laptop Asus Gaming', 35000000.00, 0.00, 'laptop asus gaming rog strix g15.png', 21, 'wow', 0),
(22, 'Laptop 1 ', 20000000.00, 20.00, '1.png', 21, '', 1),
(23, 'Laptop 2', 20000000.00, 10.00, '2.png', 21, '', 2),
(24, 'Laptop 3', 30000000.00, 3.00, '3.png', 21, '', 3),
(25, 'Laptop 4', 40000000.00, 4.00, '4.png', 21, '4', 4),
(26, 'Laptop 5', 5.00, 5.00, '5.png', 21, '5', 5),
(27, 'Laptop 6', 60000000.00, 6.00, '6.png', 21, '6', 6),
(28, 'Laptop 7', 70000000.00, 7.00, '7.png', 21, '7', 7),
(29, 'Điện thoại 1', 10000000.00, 1.00, 'dt1.png', 26, 'Điện thoại 1', 1),
(30, 'Điện thoại 2', 20000000.00, 2.00, 'dt2.png', 26, '2', 2),
(31, 'Điện thoại 3', 30000000.00, 3.00, 'dt3.png', 26, '3', 3),
(32, 'Điện thoại 4', 40000000.00, 4.00, 'dt4.png', 26, '4', 4),
(33, 'Điện thoại 5', 50000000.00, 5.00, 'dt5.png', 26, 'điện thoại 5', 5),
(34, 'Điện thoại 6', 60000000.00, 6.00, 'dt6.png', 26, '6', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `address`, `telephone`, `role`) VALUES
(1, 'anhkienphuly', '123456', 'anhkienphuly@gmail.com', NULL, NULL, 1),
(2, 'test2', '123456', 'test2@gmail.com', NULL, NULL, 0),
(3, 'test3', '123456', 'test3@gmail.com', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relation_product_category` (`cate_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `relation_product_category` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
