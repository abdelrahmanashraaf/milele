-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2023 at 05:35 PM
-- Server version: 10.4.19-MariaDB-1:10.4.19+maria~focal
-- PHP Version: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milele-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `quantities`
--

CREATE TABLE `quantities` (
  `supplier` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whole_seller` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `steering_type` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sfx` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variant` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quantities`
--

INSERT INTO `quantities` (`supplier`, `whole_seller`, `steering_type`, `model`, `sfx`, `variant`, `color`, `month`, `quantity`, `year`) VALUES
('Supplier', 'Whole', 'Left', 'Model', 'B1', 'SomeCar_2', 'White', 'Jan', 15, 2023),
('Supplier', 'Whole', 'Left', 'Model', 'B1', 'SomeCar_2', 'White', 'Oct', 20, 2023),
('Supplier One', 'Whole Seller Three', 'Right Hand Driven (RHD)', 'Model One', 'A1', 'SomeCar_2', 'Black', 'Dec', 10, 2023),
('Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_2', 'White', 'Apr', 30, 2023),
('Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_2', 'White', 'Aug', 10, 2023),
('Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_2', 'White', 'Dec', 26, 2023),
('Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_2', 'White', 'Jan', 10, 2023),
('Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_2', 'White', 'Jun', 99, 2023),
('Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_2', 'White', 'Mar', 15, 2023),
('Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_2', 'White', 'May', 20, 2023),
('Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_2', 'White', 'Nov', 6, 2023),
('Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_2', 'White', 'Oct', 25, 2023),
('Supplier Two', 'Whole Seller Three', 'Right Hand Driven (RHD)', 'Model One', 'A1', 'SomeCar_2', 'Black', 'Jun', 10, 2023);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quantities`
--
ALTER TABLE `quantities`
  ADD PRIMARY KEY (`supplier`,`whole_seller`,`steering_type`,`model`,`month`,`year`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
