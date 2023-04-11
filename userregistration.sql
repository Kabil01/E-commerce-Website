-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 09:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `total` varchar(50) NOT NULL,
  `noofproduct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`username`, `email`, `address`, `city`, `pincode`, `phonenumber`, `total`, `noofproduct`) VALUES
('kabileshwaran', 'kabilsrinivasan2004@gmail.com', '16,KONGU NAGAR', 'UTHANGARAI', '635207', '6380178240', '729', '2'),
('ganesh', 'ganesh@gmail.com', 'Government Astc Bus Depo opposite, Kongu Nagar', 'Uthangarai', '635207', '', '1397', '2'),
('kabil', 'kabileshwaransrinivasan2004@gmail.com', 'Government Astc Bus Depo opposite, Kongu', 'Uthangarai', '635207', '6380178240', '1047', '1'),
('kabil', 'kabileshwaransrinivasan2004@gmail.com', 'Government Astc Bus Depo opposite, Kongu', 'Uthangarai', '635207', '6380178240', '2645', '2'),
('kabil', 'kabileshwaransrinivasan2004@gmail.com', 'Government Astc Bus Depo opposite, Kongu', 'Uthangarai', '635207', '6380178240', '379', '1'),
('kabil', 'kabileshwaransrinivasan2004@gmail.com', 'Government Astc Bus Depo opposite, Kongu', 'Uthangarai', '635207', '6380178240', '1103', '3'),
('kabil', 'kabileshwaransrinivasan2004@gmail.com', 'Government Astc Bus Depo opposite, Kongu', 'Uthangarai', '635207', '6380178240', '349', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(12) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`) VALUES
(1, 'cement'),
(2, 'cement'),
(3, 'cement'),
(4, 'cement'),
(1, 'tiles'),
(2, 'tiles'),
(3, 'tiles'),
(4, 'tiles'),
(1, 'paint'),
(2, 'paint'),
(3, 'paint'),
(4, 'paint'),
(1, 'plywood'),
(2, 'plywood'),
(3, 'plywood'),
(4, 'plywood');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `phonenumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `password`, `email`, `address`, `city`, `pincode`, `phonenumber`) VALUES
('ganesh', '1233466789', 'ganesh@gmail.com', 'Government Astc Bus Depo opposite, Kongu Nagar', 'Uthangarai', '635207', ''),
('jay', '123456', 'jayaram060704@gmail.com', 'tirupur town iuhzfbvn  rw easo ginsx ', 'tirupur', '675645', ''),
('kabil', '123456', 'kabileshwaransrinivasan2004@gmail.com', 'Government Astc Bus Depo opposite, Kongu', 'Uthangarai', '635207', '6380178240'),
('kabileshwaran', '123456', 'kabilsrinivasan2004@gmail.com', '16,KONGU NAGAR', 'UTHANGARAI', '635207', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD UNIQUE KEY `name` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
