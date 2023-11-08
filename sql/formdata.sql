-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 11:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `std_image` varchar(400) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `caste` varchar(10) NOT NULL,
  `language` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `std_image`, `fname`, `lname`, `password`, `cpassword`, `country`, `email`, `phone`, `caste`, `language`, `address`) VALUES
(1, 'images/ayushi.jpeg', 'Ayushi', 'Detroja', 'Ayushi34$', 'Ayushi34$', 'India', 'ayushi98@gmail.com', '9435972320', 'General', 'Gujarati', 'Baroda'),
(2, 'images/bansi.jpeg', 'Bansi', 'Kanani', 'B456!', 'B456!', 'USA', 'Bansi12@gmail.com', '9843214893', 'OBC', 'English', 'Ahemdabad'),
(3, 'images/dhirav.jpg', 'Dhirav', 'Patel', 'dhirav123@', 'dhirav123@', 'India', 'dhiravpatel4@gmail.com', '9429125570', 'General', 'Gujarati', 'Morbi'),
(4, 'images/dipesh.jpeg', 'Dipesh', 'Bopaliya', 'Dips123#', 'Dips123#', 'India', 'dips7@gmail.com', '9998299800', 'ST', 'Hindi', 'Rajkot'),
(5, 'images/aditya.png', 'Aditya ', 'Vansdadiya', 'Aadi69!', 'Aadi69!', 'USA', 'aditya69@gmail.com', '9785861631', 'SC', 'English,Gujarati', 'Pune'),
(6, 'images/manav.png', 'Manav', 'Bhimani', 'Manav05$', 'Manav054', 'Canada', 'manav87@gmail.com', '9731321987', 'General', 'English,Hindi', 'Mumbai'),
(7, 'images/mitesh.png', 'Mitesh', 'Bediya', 'Mit123', 'Mit123', 'USA', 'mitesh12@gmail.com', '9761654961', 'General', 'Gujarati', 'Morbi'),
(8, 'images/gopi.jpeg', 'Gopi', 'Patel', 'Gopi#', 'Gopi#', 'India', 'gopipatel65@gmail.com', '9765287493', 'General', 'Gujarati', 'Rajkot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
