-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2022 at 09:15 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadgets`
--

-- --------------------------------------------------------

--
-- Table structure for table `gadgets`
--

CREATE TABLE `gadgets` (
  `id` int NOT NULL,
  `category` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `specs` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gadgets`
--

INSERT INTO `gadgets` (`id`, `category`, `name`, `specs`, `description`, `color`, `stock`, `price`) VALUES
(1, 'Smartphone', 'Realme', '128GB', 'Became the fastest-growing 5G', 'Black', '50', '10,000'),
(2, 'Applegadgets', 'Iphone', 'Features 3.5 display 2MP primary camera 1400 MAH battery 16 GB storage', 'Iphone is a smartphone made by apple that combines a computer and ipod and digital camera', 'White', '50', '20,000'),
(3, 'Pcgadgets', 'Acer', 'Memory ram 8GB', 'Acer is a hardware + software + service company dedicated to the research and design and marketing', 'Grey', '100', '50,000'),
(4, 'Photography', 'Dslr', 'Canon EOS 250D', 'Digital single lens reflex camera', 'Black', '50', '15,000'),
(5, 'Wearable gadgets', 'Smart watch', '541 USD', 'Rechargeable', 'Blue', '100', '5,000'),
(6, 'Smartphone', 'Oppo', '150GB', 'Became the fastest-growing 5G', 'White', '200', '15,000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gadgets`
--
ALTER TABLE `gadgets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gadgets`
--
ALTER TABLE `gadgets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
