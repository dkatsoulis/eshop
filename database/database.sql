-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2017 at 07:00 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--
CREATE DATABASE IF NOT EXISTS `eshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `eshop`;

-- --------------------------------------------------------

--
-- Table structure for table `orderproducts`
--

CREATE TABLE `orderproducts` (
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderproducts`
--

INSERT INTO `orderproducts` (`orderId`, `productId`) VALUES
(21, 32),
(21, 17),
(21, 34),
(21, 34),
(24, 17),
(24, 32),
(24, 2),
(25, 34),
(25, 34),
(25, 34),
(26, 32);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `price` decimal(20,2) NOT NULL,
  `offer` int(3) DEFAULT NULL,
  `main` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `price`, `offer`, `main`) VALUES
(1, 'Mens leather suede boot in navy colour', '50792-m05-1-migato-antriko-suede-mple-mpotaki-enlarge[1].jpg', 'Mens leather suede boots in navy blue colour, with white outer stiching, laces in red colour, brown leather detail on the upper and back side and sole in white colour with red detail.\r\n\r\nComposition: Leather outer, leather insole. ', '120.00', 30, b'0'),
(2, ' Mens blue loafer', 'hs477-m05-1-migato-mple-mokasini-lasercut-enlarge[1].jpg', 'Mens blue perforated shoes with cobalt blue decorative stitching and blue cleated sole.\r\n\r\nComposition: Synthetic outer, synthetic lining and leather insole. ', '100.00', 10, b'1'),
(17, ' Mens grey slip-on espadrille', 'lc176-m15-1-migato-gkri-ifasmatina-slipons-enlarge[1].jpg', 'Textile slip-ons in grey colour, with grey elastic detail on the sides, grey piping and white sole covered with grey rope.\r\n\r\nComposition: Textile outer, textile lining and leather insole. ', '90.00', 21, b'1'),
(32, ' Mens two-tone slip-on sneaker', 'ck035-m15-1-migato-antrika-gkri-ifasmatina-slipons-enlarge[1].jpg', 'Mens two-tone plaid slip-on sneakers in beige and grey colour with grey and brown piping, navy blue band and white sole.\r\n\r\nComposition: Textile outer, textile lining and insole. ', '90.00', 20, b'1'),
(33, 'Mens beige loafer', 'miami-m10-1-migato-mpez-mokasinia-lasercut-enlarge[1].jpg', 'Mens perforated loafers in beige colour with white stiching and white elastic sole.\r\n\r\nComposition: Synthetic outer, leather lining and leather insole. ', '110.00', 30, b'0'),
(34, 'Mens beige leather Oxford', 'jm233-m10-1-migato-mpez-antriko-papoutsi-kordonia-enlarge[1].jpg', 'Mens leather Oxfrord shoes in beige suede with orange laces, orange lining, white outer stiching and two-toned elastic sole.\r\n\r\nComposition: Leather outer, textile lining and leather insole. ', '130.00', 30, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `isAdmin`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@eshop.com', 1);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
