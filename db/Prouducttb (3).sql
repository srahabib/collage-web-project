-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Dec 17, 2022 at 10:07 PM
-- Server version: 8.0.29
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_docker`
--

-- --------------------------------------------------------

--
-- Table structure for table `Prouducttb`
--

CREATE TABLE `Prouducttb` (
  `id` int NOT NULL,
  `product_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Prouducttb`
--

INSERT INTO `Prouducttb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'croissant', 23, 'img/c.jpg'),
(2, 'Sushi', 40, 'img/sushi.jpg'),
(3, 'chocolate brownies', 18, 'img/smol.jpg'),
(4, 'pan cake', 25, 'img/pan00.jpg'),
(5, 'Chewy Brownies', 16, 'img/Chewy-Brownies.jpg'),
(6, 'cupcake', 20, 'img/cup.jpg'),
(7, 'Pasta', 36, 'img/pa.jpg'),
(8, 'Cinnamon Rolls', 34, 'img/cc.jpg'),
(9, 'blueberry Cupcake', 19, 'img/c0.jpg'),
(10, 'Strawberry Pancake', 22, 'img/straw.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Prouducttb`
--
ALTER TABLE `Prouducttb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Prouducttb`
--
ALTER TABLE `Prouducttb`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
