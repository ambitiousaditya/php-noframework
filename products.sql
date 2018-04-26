-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2018 at 01:00 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noframework`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `type` enum('size','weight','dimension','') NOT NULL,
  `value` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `name`, `price`, `type`, `value`, `created_at`, `updated_at`) VALUES
(4, 'JVC2014', 'ACME DISC', 100, 'weight', '2 KG', '2018-04-26 04:46:51', '2018-04-26 04:46:51'),
(6, 'JVC2014', 'ACME DISC', 100, 'weight', '2 KG', '2018-04-26 04:46:51', '2018-04-26 04:46:51'),
(11, 'JVC2014', 'ACME DISC', 100, 'weight', '2 KG', '2018-04-26 04:48:07', '2018-04-26 04:48:07'),
(12, 'JVC2014', 'ACME DISC', 100, 'weight', '2 KG', '2018-04-26 04:46:51', '2018-04-26 04:46:51'),
(14, 'JVC2014', 'ACME DISC', 100, 'weight', '2 KG', '2018-04-26 04:46:51', '2018-04-26 04:46:51'),
(15, 'JVC2014', 'ACME DISC', 100, 'weight', '2 KG', '2018-04-26 04:48:07', '2018-04-26 04:48:07'),
(16, 'JVC2014', 'ACME DISC', 100, 'weight', '2 KG', '2018-04-26 04:46:51', '2018-04-26 04:46:51'),
(17, 'JVC1002014', 'SKRILL', 1520, 'dimension', '10x20x30', '2018-04-26 10:58:55', '2018-04-26 10:58:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
