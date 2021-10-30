-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 01:56 PM
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
-- Database: `travel_display`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(5) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `price` varchar(500) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `destination`, `image1`, `price`, `description`) VALUES
(1, 'LONDON', './images/00782094034b09c81d7f376d3dbdb178london-.jpg', '85,000', 'London is a common stop on most backpacking trips, European vacations, or two-week holidays. Everyone wants to come to London! People are drawn to it by images of pubs, museums, history, attractions, theater, and diverse culture. I mean it’s London. It’s a big name. How can you not go, right?'),
(2, 'SPAIN', './images/1127dbd58709974eaf00f7f82a330baebenidorm.jpg', '90,000', 'Benidorm is one of the most popular choice of millions of holidaymakers every year in Spain and Europe. And it continues to be the ultimate holiday destination as there are lots of things to do in Benidorm.'),
(3, 'Sharm-El-Sheikh(EGYPT)', './images/8709e7fb5f9d70b3e726275ba1f9cf09Sharm-El-Sheikh..jpg', '65,000', 'Home to hidden gems with its popular beach resorts, rich underwater habitat, beautiful coral reefs and unique diving spots, Sharm El-Sheikh lays in between Egypt\'s Cairo and Jerusalem, Israel.'),
(4, 'BOSTON (USA)', './images/e5f3cc556b365f73b48a4d972cb5f808boston.jpg', '70,000', 'Want a city that mixes history with the hip, contemporary with the quaint? Where cobblestone streets meet glass-enclosed shopping galleries, where the Freedom Trail’s landmarks stand beside trendy restaurants, where new high-tech campuses brush shoulders with some of the USA’s most prestigious universities? Then Boston is a must.'),
(5, 'PARIS', './images/718e8d515393da7b408c1ed7df425e48paris.jpg', '50,000', 'Nowhere else on earth makes the heart swoon like the mention of Paris. The city lures with its magnificent art, architecture, culture, and cuisine, but there’s also a quieter magic waiting to be explored'),
(6, 'ITALY', './images/2836389c6735d2e3c0f8d666622bbefabenidorm.jpg', '75,000', 'The romantic city of Venice is located in the Veneto region of Italy — one of the northernmost states. This ancient and historically important city was originally built on 100 small islands in the Adriatic Sea. Instead or roads, Venice relies on a series of waterways and canals.');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
