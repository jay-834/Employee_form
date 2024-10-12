-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2024 at 04:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `country_code` varchar(100) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `hobby` varchar(200) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `email`, `country_code`, `mobile`, `address`, `gender`, `hobby`, `photo`, `created_date`, `update_date`) VALUES
(2, 'jay', 'parmar', 'jayr241024@gmail.com', '+91', 7490833731, '7/15, shahpur Darwaja ,Shahpur Chakla , Opp Darwaja No Khacho', 'Male', 'Reading, Writing', 'download (2).jpeg', '2024-10-12 19:44:14', '2024-10-12 19:44:14'),
(3, 'Mahesh', 'patel', 'mahesh@gmail.com', '+1', 372479834, 'USA', 'Male', 'Writing, Singing', 'download (1).png', '2024-10-12 19:44:57', '2024-10-12 19:44:57'),
(4, 'Rinkal', 'Patel', 'rinkal123@gmail.com', '+44', 823479834, 'New York', 'Female', 'Reading, Playing', 'download (2).jpeg', '2024-10-12 19:46:08', '2024-10-12 19:46:08'),
(5, 'jay', 'parmar', 'jayr241024@gmail.com', '+92', 827356782, '7/15, shahpur Darwaja ,Shahpur Chakla , Opp Darwaja No Khacho', 'Female', 'Reading, Writing, Playing, Singing', 'download (2).jpeg', '2024-10-12 19:47:59', '2024-10-12 19:47:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
