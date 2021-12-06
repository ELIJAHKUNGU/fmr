-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2021 at 10:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fmr`
--

-- --------------------------------------------------------

--
-- Table structure for table `fmr`
--

CREATE TABLE `fmr` (
  `fmr_id` int(11) NOT NULL,
  `fmr_type` varchar(100) NOT NULL,
  `fmr_location` varchar(200) NOT NULL,
  `fmr_size` int(11) NOT NULL,
  `fmr_beds` int(11) NOT NULL,
  `fmr_baths` int(11) NOT NULL,
  `fmr_img` varchar(300) NOT NULL,
  `fmr_rating` int(9) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fmr`
--

INSERT INTO `fmr` (`fmr_id`, `fmr_type`, `fmr_location`, `fmr_size`, `fmr_beds`, `fmr_baths`, `fmr_img`, `fmr_rating`, `price`) VALUES
(1, 'Bedsitter', 'Juja, Gate c', 3000, 2, 2, 'images/prod4.jpeg', 2, 5000),
(2, 'One Bedroom', 'Kemyatta Road', 3000, 2, 2, 'images/prod3.jpg', 2, 5000),
(3, 'Hostel', 'Roysambu , Nairobi', 3000, 2, 2, 'images/prod1.jpg', 5, 10000),
(4, '2 Bedroom', 'Ruiru', 3000, 2, 2, 'images/prod2.jpg', 2, 15000),
(5, 'Bedsitter', 'Juja, Gate c', 3000, 2, 2, 'images/prod4.jpeg', 2, 5000),
(6, 'One Bedroom', 'Kemyatta Road', 3000, 2, 2, 'images/prod3.jpg', 2, 5000),
(7, 'Hostel', 'Roysambu , Nairobi', 3000, 2, 2, 'images/prod1.jpg', 5, 10000),
(8, '2 Bedroom', 'Ruiru', 3000, 2, 2, 'images/prod2.jpg', 2, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `fmr_houses`
--

CREATE TABLE `fmr_houses` (
  `fmrh_id` int(11) NOT NULL,
  `fmr_type` varchar(100) NOT NULL,
  `fmr_location` varchar(100) NOT NULL,
  `fmr_size` int(11) NOT NULL,
  `fmr_beds` int(11) NOT NULL,
  `fmr_baths` int(11) NOT NULL,
  `fmr_img` varchar(300) NOT NULL,
  `fmr_rating` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fmr_houses`
--

INSERT INTO `fmr_houses` (`fmrh_id`, `fmr_type`, `fmr_location`, `fmr_size`, `fmr_beds`, `fmr_baths`, `fmr_img`, `fmr_rating`, `price`) VALUES
(1, 'single', 'wajir', 2000, 0, 1, 'images/prod8.jpeg', 5, 4000),
(2, 'single', 'wajir', 2000, 0, 1, 'images/prod8.jpeg', 5, 4000),
(3, 'single', 'wajir', 2000, 0, 1, 'images/prod8.jpeg', 5, 4000),
(4, 'single', 'wajir', 2000, 0, 1, 'images/prod8.jpeg', 5, 4000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fmr`
--
ALTER TABLE `fmr`
  ADD PRIMARY KEY (`fmr_id`);

--
-- Indexes for table `fmr_houses`
--
ALTER TABLE `fmr_houses`
  ADD PRIMARY KEY (`fmrh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fmr`
--
ALTER TABLE `fmr`
  MODIFY `fmr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fmr_houses`
--
ALTER TABLE `fmr_houses`
  MODIFY `fmrh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
