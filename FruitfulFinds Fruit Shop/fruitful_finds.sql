-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 09:42 AM
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
-- Database: `fruitful_finds`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `user_Id` int(11) NOT NULL,
  `item_Id` int(11) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`user_Id`, `item_Id`, `itemName`, `qty`, `price`, `image`) VALUES
(5, 4, 'Coconut', 1, 25, 'images/coconut_edit.png'),
(5, 5, 'Dragon Fruit', 1, 30, 'images/dragonfruit_edit.png'),
(5, 2, 'Avocado', 1, 20, 'images/avocado_edit.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `item_Id` int(11) NOT NULL,
  `item_Name` varchar(40) NOT NULL,
  `item_price` int(20) NOT NULL,
  `item_description` varchar(250) NOT NULL,
  `item_origin` varchar(30) NOT NULL,
  `item_Image` varchar(50) NOT NULL,
  `selling_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`item_Id`, `item_Name`, `item_price`, `item_description`, `item_origin`, `item_Image`, `selling_type`) VALUES
(1, 'Red Apple', 15, 'Crisp and juicy with a sweet-tart flavor. Also because of their deep crimson-colored skin, the Red Delicious apple is also higher in antioxidants than many other apple varieties.', 'Local', 'images/apple_edit.png', 'each'),
(2, 'Avocado', 20, 'Creamy texture with a nutty taste, often used in salads and spreads. \nAvocados are high in fat. But it\'s monounsaturated fat, which is \"good\" fat that helps lower bad cholesterol as long as you eat them in moderation.', 'Local', 'images/avocado_edit.png', 'each'),
(3, 'Banana', 70, 'Soft, sweet fruit with a yellow peel and creamy flesh.  A banana is a tropical fruit that\'s quite popular all over the world. It grows in bunches on a banana tree.', 'Local', 'images/banana_edit.png', 'per bundle'),
(4, 'Coconut', 25, 'Hard-shelled fruit with sweet water inside and white flesh used in cooking and desserts. They can be slightly sweet and nutty at the same time. The texture of white flesh is chewy and almost dry. It can have a taste of woodiness to it.', 'Local', 'images/coconut_edit.png', 'each'),
(5, 'Dragon Fruit', 30, 'Vibrant pink or yellow fruit with a mild, sweet flavor and crunchy seeds. It has a crunchy texture and sweet flavor like a kiwi or pear.\n', 'Imported', 'images/dragonfruit_edit.png', 'each'),
(6, 'Red Grapes', 180, 'Small, sweet, and juicy grapes often used fresh or in making wine. The characteristic gustatory sensation of grapes is their sweet-sour taste.', 'Imported', 'images/grapes_edit.png', 'per kilo'),
(7, 'Kiwi Fruit', 30, 'Small, fuzzy fruit with bright green flesh and a tangy-sweet flavor. The flavour is sometimes described as a mix of strawberry, banana and pineapple.', 'Imported', 'images/kiwi_edit.png', 'each'),
(8, 'Lemon', 20, '\nTart citrus fruit used in cooking, beverages, and as a garnish.  Lemon fruits colour range from greenish yellow to bright yellow. ', 'Imported', 'images/lemon_edit.png', 'each'),
(9, 'Mango', 15, 'Sweet, juicy fruit with a tropical flavor and smooth texture. Ripe mangoes are juicy, fleshy, and delicious.\n', 'Local', 'images/mango_edit.png', 'each'),
(10, 'Melon', 80, 'Sweet and juicy fruit with a soft, often green or orange flesh. It has an aromatic, juicy and sweet flesh, being an ideal fruit to fight thirst.\n', 'Imported', 'images/melon_edit.png', 'each'),
(11, 'Orange', 15, 'Round citrus fruit with a sweet-tart flavor and juicy flesh. The sweet, juicy flesh is usually deep red to pink, with many black seeds, although seedless varieties exist.\n', 'Local', 'images/orange_edit.png', 'each'),
(12, 'Watermelon', 150, 'Large, refreshing fruit with sweet, watery flesh and seeds. Watermelon boasts a triad of flavors—bitter, sweet, and sour', 'Local', 'images/pakwan.png', 'each'),
(13, 'Pineapple', 60, 'Tropical fruit with a spiky exterior, sweet yellow flesh, and tangy flavor. The flesh of the perfectly ripe fruit is firm, yet juicy, and has a light- to golden-yellow colour.', 'Local', 'images/pineapple_edit.png', 'each'),
(14, 'Pomelo', 120, 'Large citrus fruit similar to a grapefruit but milder and sweeter.', 'Local', 'images/pomelo_edit.png', 'each'),
(15, 'Santol Fruit', 15, 'Tropical fruit with a thick rind and sweet, tangy flesh surrounding large seeds. Inside the fruit are the seeds surrounded by a translucent or pale, acidy, edible pulp of good flavor, with a soft cottony-like texture.\n', 'Local', 'images/santol.png', 'each'),
(17, 'a', 0, 'khkhkhhjkhk', 'asdadada', '', 'asda');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `user_Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `order_list` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total_orders` int(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `user_Id`, `Name`, `order_list`, `address`, `total_orders`, `status`) VALUES
(1, 0, '', '', '', 0, 'pending'),
(80, 5, 'lyca Aborquez', ' Coconut[1pc/s], Red Apple[2pc/s], Mango[2pc/s]', 'Noveleta Cavite', 125, 'delivered'),
(81, 5, 'lyca Aborquez', ' Coconut[1pc/s], Avocado[1pc/s]', 'Noveleta Cavite', 85, 'pending'),
(83, 5, 'lyca Erlyn Aborquez', ' Coconut[10pc/s]', 'Noveleta Cavite', 650, 'pending'),
(84, 5, 'lyca Erlyn Aborquez', ' Dragon Fruit[1pc/s]', 'Noveleta Cavite', 70, 'pending'),
(85, 5, 'lyca Erlyn Aborquez', ' Avocado[10pc/s]', 'Biclatan, General Trias, Cavite', 600, 'pending'),
(86, 5, 'lyca Erlyn Aborquez', ' Mango[1pc/s], Avocado[1pc/s], Banana[1pc/s]', 'Noveleta Cavite', 145, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_Id` int(11) NOT NULL,
  `first_Name` varchar(20) NOT NULL,
  `last_Name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_Id`, `first_Name`, `last_Name`, `username`, `address`, `password`) VALUES
(4, 'Roy', 'Donila', 'royvincent@gmail.com', 'Santiago, General Trias Cavite', ' 8a2c6ced872dbb10f441c96d39b2d32b'),
(5, 'lyca Erlyn', 'Aborquez', 'Lyca@123', 'Noveleta Cavite', '7ac66c0f148de9519b8bd264312c4d64'),
(6, 'Admin', '---', 'trky@123', 'Biclatan, General Trias Cavite', '0e7517141fb53f21ee439b355b5a1d0a'),
(7, 'HAHAHAHA', 'awsdasdads', 'hahaahhaah', '', ' 7ac66c0f148de9519b8bd264312c4d64');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`item_Id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `item_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
