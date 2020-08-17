-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 12:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybertrom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `personaltb`
--

CREATE TABLE `personaltb` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `image` text NOT NULL,
  `age` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personaltb`
--

INSERT INTO `personaltb` (`id`, `name`, `gender`, `phone`, `image`, `age`) VALUES
(1, 'Nidhi', 'Female', '11221122', 'img1.png', 11),
(6, 'John', 'Male', '19181', 'img2.png', 12),
(7, 'Maria', 'Female', '91991', 'img6.jpg', 14),
(8, 'Radha', 'Female', '199191', 'img8.png', 34),
(9, 'Krishna', 'Male', '9823949083', 'img2.png', 22),
(10, 'Nilkant', 'Male', '789789', 'img3.png', 34),
(11, 'Shreya', 'Female', '919919', 'img5.png', 25),
(12, 'Akash', 'Male', '9823949083', 'img8.png', 23),
(13, 'Surendra', 'Male', '292992', 'img10.jpg', 62),
(14, 'Smita', 'Female', '7282819119', 'img7.png', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personaltb`
--
ALTER TABLE `personaltb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personaltb`
--
ALTER TABLE `personaltb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
