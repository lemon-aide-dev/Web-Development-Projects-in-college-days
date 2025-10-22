-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 01:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paws_claws`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `customer_Id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`customer_Id`, `customer_name`, `email`, `password`, `address`) VALUES
(3, 'LEMON', 'royvincentdonila@yahoo.com', 'Abcd1234', 'sdfghjk'),
(4, 'EARLREAL', 'earl.real@cvsu.edu.ph', 'RealEarl12', '[[PASONG KAWAYAN 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `customer_Id` int(50) NOT NULL,
  `item_Id` int(100) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `item_Id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_stock` int(100) NOT NULL,
  `item_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`item_Id`, `item_name`, `item_stock`, `item_price`) VALUES
(1, 'Top Breed Supremo', 10, 1500),
(2, 'GoodBoy Original', 10, 1660),
(3, 'Royal Canin Starter', 20, 700),
(4, 'Nutrichunks 20kg', 15, 1680),
(5, 'Goodboy Classic', 25, 1250),
(6, 'Pet One', 20, 900),
(7, '5kg Ideal catfood', 30, 700),
(8, 'Maxime Salmon 7kg', 20, 900),
(9, 'Aozi catfood', 25, 2000),
(10, 'Special cat Premium', 35, 1300),
(11, 'Kit cat classic', 10, 900),
(12, 'Kit Cat Premium', 55, 1200),
(13, 'Triple Crown Canary Mix', 35, 1200),
(14, 'Peckish Pellet', 65, 500),
(15, 'Wooden Birdhouse', 25, 1700),
(16, 'Vita Seed Natural', 45, 300),
(17, 'Glennwood Seed Mix', 45, 450),
(18, 'Kaytee Pro Health', 55, 700),
(19, 'Exo Terra Gecko Food', 75, 600),
(20, 'Reptile Lamp 50W', 95, 200),
(21, 'Dried Mealworms', 45, 400),
(22, 'Zoo Med Calcium', 75, 890),
(23, 'Jurassic Naturals ', 45, 500),
(24, 'Exo terra Silkworms ', 85, 800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`customer_Id`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`item_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `item_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
