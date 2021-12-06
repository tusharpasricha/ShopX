-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 07:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopx6502`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buyer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gstin` varchar(200) NOT NULL,
  `state` varchar(2000) NOT NULL,
  `city` varchar(2000) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `image_id` int(11) NOT NULL,
  `purpose` varchar(20) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `seller_id` int(11) NOT NULL,
  `msg_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `msg` mediumtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `caption` longtext NOT NULL,
  `photo` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL,
  `comment` mediumtext NOT NULL,
  `user_id` varchar(235) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `caption`, `photo`, `likes`, `comment`, `user_id`, `timestamp`) VALUES
(2, 'sxdcfvg', 's-1638189986.s', 0, '', '1103', '2021-11-29 13:03:25'),
(3, 'hgcvuyyiiuuhoijoi', 'w-1638190381.w', 0, '', '1103', '2021-11-29 13:03:25'),
(4, 'hgcvuyyiiuuhoijoi', 's-1638190564.s', 0, '', '1103', '2021-11-29 13:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `shop_id` int(15) NOT NULL,
  `product_desc` varchar(2000) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `shop_id`, `product_desc`, `product_title`, `price`, `status`, `image`, `timestamp`) VALUES
(110014, 1103, 'ewdwrvgerb', 'abxcd', 599, 1, 'p-1638019378.p', '2021-11-27 13:22:58'),
(110015, 1103, 'naman', 'naman', 58, 1, 's-1638019378.s', '2021-11-27 13:22:58'),
(110017, 1103, 'naman', 'naman', 58, 1, 's-1638019562.s', '2021-11-27 13:26:02'),
(110018, 1103, 'ewdwrvgerb', 'abxcd', 599, 1, 'p-1638019563.p', '2021-11-27 13:26:03'),
(110019, 1103, 'ewdwrvgerb', 'abxcd', 599, 1, 'p-1638020108.p', '2021-11-27 13:35:08'),
(110020, 1103, 'ewdwrvgerb', 'abxcd', 599, 1, 'd-1638020532.d', '2021-11-27 13:42:12'),
(110021, 1106, 'ewdwrvgerb', 'fwfr', 649, 1, 'u-1638020801.u', '2021-11-27 13:46:41'),
(110022, 1106, 'ewdwrvgerb', 'ebtt4h', 699, 1, 't-1638020838.t', '2021-11-27 13:47:18'),
(110023, 1107, 'ewdwrvgerb', 'fwfr', 999, 1, 'i-1638021178.i', '2021-11-27 13:52:58'),
(110024, 1108, 'ewdwrvgerb', 'abxcd', 599, 1, 'w-1638022074.w', '2021-11-27 14:07:54'),
(110025, 1108, 'ewdwrvgerb', 'fwfr', 649, 1, 's-1638101326.s', '2021-11-28 12:08:46'),
(110026, 0, 'vgvutibonpi', 'jnoinip', 999, 1, 's-1638101514.s', '2021-11-28 12:11:54'),
(110027, 1110, 'ewdwrvgerb', 'ebtt4h', 599, 1, 'g-1638101949.g', '2021-11-28 12:19:09'),
(110028, 1110, 'ewdwrvgerb', 'fwfr', 999, 1, 'k-1638102259.k', '2021-11-28 12:24:19'),
(110029, 1103, 'vgvutibonpi', 'ebtt4h', 699, 1, 'k-1638541555.k', '2021-12-03 14:25:55'),
(110030, 1103, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est consectetur facilis laboriosam itaque maxime aliquid!', 'abxcd', 1505, 1, 'g-1638545638.g', '2021-12-03 15:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `owner_id` varchar(25) NOT NULL,
  `gst_in` varchar(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `state` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pincode` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_id`, `owner_id`, `gst_in`, `shop_name`, `state`, `city`, `pincode`, `address`) VALUES
(1103, 'abcd', '123bhg34', 'fashion store', 'Delhi', 'New delhi', 110007, 'abcd'),
(1104, 'wxyz', '123bhg343e', 'c fashion store', 'Delhi', 'New delhi', 110007, 'cwfdqf'),
(1106, 'tushar', '165165verv', 'tushar traders', 'Uttar Pradesh', 'Meerut', 250404, 'abcd'),
(1107, 'cdjwnjevbw', '123bhg34', 'fashion store', 'Delhi', 'New delhi', 110007, 'abcd'),
(1108, 'sarthak', '123bhg34', 'fashion store', 'Delhi', 'New delhi', 110007, 'abcd'),
(1110, 'pqrs', '123bhg34', 'fashion store', 'Delhi', 'New delhi', 110007, 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL,
  `acc_type` int(5) NOT NULL DEFAULT 1102,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `name`, `password`, `cpassword`, `acc_type`, `time`) VALUES
(1239, 'abcd', 'abcd@gmail.com', 'abcd', '12345678', '12345678', 1101, '2021-11-26 14:02:25'),
(6, 'akshat11', 'akshat@gmail.com', 'akshat', 'akshat', 'akshat', 1101, '2021-11-07 14:04:55'),
(1200, 'bhavey', 'bhavey@gmail.com', 'bhavey', 'bhavey', 'bhavey', 1102, '2021-11-21 08:49:49'),
(1242, 'cdjwnjevbw', 'acbj@gmail.com', 'bihwebciw', '12345678', '12345678', 1101, '2021-11-27 13:52:05'),
(5, 'naman', 'namangupta@gmail.com', 'namangupta28', 'naman', 'naman', 1102, '2021-11-07 13:56:21'),
(4, 'naman111', 'namangupta990@gmail.com', 'NAMAN', 'nnnn', 'nnnn', 1101, '2021-11-07 13:29:55'),
(9, 'nnnn', 'nnn@gmail.com', 'NAMAN', 'nnnnn', 'nnnnn', 1101, '2021-11-19 08:13:07'),
(1243, 'pqrs', 'pqrs@gmail.com', 'pqrs', '12345678', '12345678', 1101, '2021-11-28 12:09:54'),
(1233, 'qazxsw', 'qazxsw@gmail.com', 'qazxsw', '12345678', '12345678', 1101, '2021-11-23 09:14:40'),
(1230, 'qwerty', '12@gmail.com', 'qwerty', '12345678', '12345678', 1101, '2021-11-23 08:56:34'),
(1229, 'sarthak', 'sarthak@gmail.com', 'sarthak', '12345678', '12345678', 1101, '2021-11-23 08:37:34'),
(1241, 'tushar', 'tushar@gmail.com', 'Tushar', '12345678', '12345678', 1101, '2021-11-27 13:43:47'),
(1232, 'vbnm', 'vnmb@gmail.com', 'vbnm', '12345678', '12345678', 1101, '2021-11-23 09:04:07'),
(1240, 'wxyz', 'wxyz@gmail.com', 'xyz', '12345678', '12345678', 1101, '2021-11-26 15:27:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `fk2` (`product_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`),
  ADD UNIQUE KEY `shop_id` (`shop_id`),
  ADD KEY `Foreign_key` (`owner_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`),
  ADD UNIQUE KEY `UNIQUE` (`email`),
  ADD UNIQUE KEY `PRI` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1101;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110031;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1244;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `img`
--
ALTER TABLE `img`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `Foreign_key` FOREIGN KEY (`owner_id`) REFERENCES `users` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
