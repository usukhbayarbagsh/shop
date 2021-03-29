-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 03:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `customerID` int(11) UNSIGNED NOT NULL,
  `userName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `userPassword` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`customerID`, `userName`, `userPassword`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) UNSIGNED NOT NULL,
  `userName` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `userPassword` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `customerName` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `customerAddress` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `customerPhone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `customerEmail` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `userName`, `userPassword`, `customerName`, `customerAddress`, `customerPhone`, `customerEmail`) VALUES
(1, 'q', '123', 'az', 'zaisan', '123456', 'a@yahoo.com'),
(2, 'az', '1234567890', 'az', 'zaisan', '12', 'ad@yahoo.com'),
(3, 'oz_0807@yahoo.com', '', 'az', 'zaisan', '123456', 'oz_0807@yahoo.com'),
(4, 'qa', '', 'az', 'zaisan', '123456', 'www@yahoo.com'),
(5, 'www', '123', 'ww', 'zaisan', '123', 'ww@yahoo.com'),
(6, 'rr', '$2y$10$WlNfqD8U2qwo9JGo0f937.Rh0HTr6aCR27TOUcaB9PbOycbGCkJ7C', 'rr', 'zaisan', '123456', 'qq@yahoo.com'),
(7, 'ss', '', 'wsa', 'zaisan', '123456', 'as@yahoo.com'),
(8, 'aaaa', '', 'aaaa', 'aaaa', '1112', 'aaa@yahoo.com'),
(9, 'zzz', '', 'zzz', 'zzz', '123456', 'za@yahoo.com'),
(10, 'zaza', 'zaza', 'az', 'zaisan', '123456', 'zaza@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) UNSIGNED NOT NULL,
  `userName` varchar(150) CHARACTER SET latin1 NOT NULL,
  `userPassword` varchar(150) CHARACTER SET latin1 NOT NULL,
  `customerName` varchar(150) CHARACTER SET latin1 NOT NULL,
  `customerAddress` varchar(250) CHARACTER SET latin1 NOT NULL,
  `customerPhone` varchar(25) CHARACTER SET latin1 NOT NULL,
  `customerEmail` varchar(150) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `userName`, `userPassword`, `customerName`, `customerAddress`, `customerPhone`, `customerEmail`) VALUES
(19, 'a', '123', 'az', 'zaisan', '123456', 'a@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) UNSIGNED NOT NULL,
  `productName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `productPrice` double(10,2) NOT NULL,
  `productImage` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `productType` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `productPrice`, `productImage`, `productType`) VALUES
(1, 'Ундаа', 1200.00, 'cola-zero.png', 'Түмний ундаа'),
(2, 'Iphone 7s', 799.00, 'iphone7s.png', 'Түмний ундаа'),
(3, 'Ipad Air', 599.00, 'ipadair.png', 'Жүүс'),
(4, 'Ipad Pro', 899.00, 'ipadpro.png', 'Түмний ундаа'),
(5, 'Macbook Air', 999.00, 'macbookair.png', 'Түмний ундаа'),
(6, 'Macbook Pro', 1399.00, 'macbookpro.png', 'Түмний ундаа'),
(7, 'undaa', 699.00, 'cola-zero.png', 'zero'),
(8, 'Ундаа le', 1200.00, 'cola-zero.png', 'Түмний ундаа'),
(9, 'Ундаа le', 1200.00, 'cola-zero.png', 'Түмний ундаа'),
(10, 'Ундаа le', 1200.00, 'cola-zero.png', 'Түмний ундаа'),
(11, 'Кола', 2900.00, 'cola-zero.png', 'Бидний ундаа'),
(12, 'Ундаа', 2300.00, 'cola-zero.png', 'Түмний ундаа');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `customerID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
