-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 01:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_connection`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(5) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `firstname`, `email`, `contact`, `description`) VALUES
(1, 'Michael Scott', 'thatswhatshesaid@gmail.com', '123456789', 'more details on the travel medium'),
(2, 'Jake Peralta', 'noice@gmail.com', '345678865', 'more details regarding Paris Package'),
(3, 'Ross Geller', 'prof.geller@gmail.com', '7656753234', 'details on Jurassic period museum '),
(4, 'Ted Mosby', 'himym@gmail.com', '12345688', 'Discount offers'),
(5, 'Itachi Uchiha', 'uchiha.itachi@gmail.com', '9876543341', 'is there any travel packages for the hidden leaf?'),
(6, 'Sam Gardner', 'samgardner@yahoo.in', '123456787', 'I need to know more details on the antartica package '),
(7, 'joeypizza@yah0o.in', 'Joey Tribiani', '8765456543', 'Details on food services provision.'),
(8, 'joeypizza@yah0o.in', 'Joey Tribiani', '8765456543', 'Details on food services provision.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
