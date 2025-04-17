-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 05:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`) VALUES
(1, 'MTDD058A', 'MT DD 058A', '98 tiles available in the stock\n\n', 'MTDD058A.jpg', '1750.00'),
(2, 'MTDD059A', 'MT DD 059A', '239 tiles available in the stock\n\n', 'MTDD059A.jpg', '1750.00'),
(3, 'MTDD060A', 'MT DD 060A', '79 tiles available in the stock\n', 'MTDD060A.jpg', '1750.00'),
(4, 'MTDD062A', 'MT DD 062A', '156 tiles available in the stock', 'MTDD062A.jpg', '1750.00'),
(5, 'MTDD065A', 'MT DD 065A', '73 tiles available in the stock', 'MTDD065A.jpg', '1750.00'),
(6, 'MTDD070A', 'MT DD 070A', '17 tiles available in the stock', 'MTDD070A.jpg', '1750.00'),
(7, 'MTDD072A', 'MT DD 072A', '224 tiles available in the stock', 'MTDD072A.jpg', '1550.00'),
(8, 'FDC028A', 'FDC 028A', '329 available in the stock', 'FDC028A.jpg', '850.00'),
(9, 'FDC028B', 'FDC 028B', '193 tiles available in the stock', 'FDC028B.jpg', '850.00'),
(10, 'GC12035A', 'GC 12 035A', '168 tiles available in the stock', 'GC 12 035A.jpg', '950.00'),
(11, 'GC12036A', 'GC 12 036A', '157 tiles available in the stock', 'GC 12 036A.jpg', '950.00'),
(12, 'GC12036B', 'GC 12 036B', '524 tiles available in the stock', 'GC 12 036B.jpg', '950.00'),
(13, 'GC12039A', 'GC 12 039A', '100 tiles available in the stock', 'GC 12 039A.jpg', '950.00'),
(14, 'GC22591A', 'GC 22 591A', '113 tiles available in the stock', 'GC 22 591A.jpg', '1550.00'),
(15, 'GC22617A', 'GC 22 617A', '115 tiles available in the stock', 'GC 22 617A.jpg', '1550.00'),
(16, 'DD319A', 'DD 319A', '59 tiles available in the stock', 'DD319A.png', '1550.00'),
(17, 'DD346C', 'DD 346C', '139 tiles available in the stock', 'DD346C.png', '1550.00'),
(18, 'DD476A', 'DD 476A', '144 tiles available in the stock', 'DD476A.png', '1550.00'),
(19, 'DD479A', 'DD 479A', '82 tiles available in the stock', 'DD479A.png', '1975.00'),
(20, 'DD482A', 'DD 482A', '350 tiles available in the stock', 'DD482A.png', '1950.00'),
(21, 'DD495B', 'DD 495B', '117 tiles available in the stock', 'DD495B.png', '1750.00'),
(22, 'DD528B', 'DD 528B', '129 tiles available in the stock', 'DD528B.png', '1350.00'),
(23, 'DD528C ', 'DD 528C ', '16 tiles available in the stock', 'DD528C .png', '1350.00'),
(24, 'DD536A', 'DD 536A', '104 tiles available in the stock', 'DD536A.png', '1550.00'),
(25, 'DD548A', 'DD 548A', '69 tiles available in the stock', 'DD548A.png', '1550.00'),
(26, 'DD573A 1', 'DD 573A ', '146 tiles available in the stock', 'DD573A 1.jpg', '1650.00'),
(27, 'DD573A 2', 'DD 573A ', '146 tiles available in the stock', 'DD573A 2.jpg', '1650.00'),
(28, 'DD573A 3', 'DD 573A ', '146 tiles available in the stock', 'DD573A 3.jpg', '1650.00'),
(29, 'DD573A 4', 'DD 573A ', '146 tiles available in the stock', 'DD573A 4.jpg', '1650.00'),
(30, 'DD578A', 'DD 578A', '126 tiles available in the stock', 'DD578A.jpg', '1850.00'),
(31, 'MFW013A', 'MFW 013A', '239 tiles available in the stock', 'MFW013A.png', '685.00'),
(32, 'MTFD017B', 'MTF D017B', '213 tiles available in the stock', 'MTFD017B.png', '850.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
