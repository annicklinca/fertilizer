-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 03, 2022 at 02:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fertilizer`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `farmer_id` int(255) NOT NULL,
  `farmer_names` varchar(255) NOT NULL,
  `land_scale` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `sector` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `villages` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`farmer_id`, `farmer_names`, `land_scale`, `district`, `sector`, `cell`, `villages`, `user_id`) VALUES
(4, 'Kanakuze Delphine', '200hect', 'kavumu', 'kanombe', 'remera', '', 2),
(5, 'Phil Ndizeye', '200hect', 'samuduha', 'kanombe', 'remera', 'niboye', 2),
(7, 'Douce Ndizeye', '200hect', 'kavumu', 'rebero', 'remera', 'niboye', 3),
(9, 'Kanakuze Delphine', '200hect', 'samuduha', 'rebero', 'remera', 'niboye', 8),
(10, 'danny', '200hect', 'kavumu', 'rebero', 'remera', 'niboye', 9),
(11, 'ddfd', '32', 'huye', 'mazi', 'kage ', 'rug', 8),
(12, 'frank', '122', 'Gasabo', 'kk', 'k', 'k', 8);

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

CREATE TABLE `fertilizer` (
  `ferti_id` int(255) NOT NULL,
  `ferti_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fertilizer`
--

INSERT INTO `fertilizer` (`ferti_id`, `ferti_type`) VALUES
(5, 'npk'),
(6, 'qwe'),
(7, ''),
(8, 'kpd'),
(9, 'd'),
(10, 'wq'),
(11, 'nopos');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(255) NOT NULL,
  `sender_id` int(255) NOT NULL,
  `recieve_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `timesent` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `sender_id`, `recieve_id`, `message`, `timesent`) VALUES
(12, 1, 8, 'fye', '2022-08-08 07:51:59.000000'),
(13, 8, 1, 'welcome', '2022-08-08 08:24:45.000000'),
(18, 1, 3, 'kiri gute?', '2022-08-10 08:45:38.000000'),
(19, 9, 1, 'hello', '2022-08-15 07:12:45.000000'),
(20, 8, 2, 'vcv', '2022-09-27 18:45:08.000000');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(255) NOT NULL,
  `farmer_id` varchar(255) NOT NULL,
  `ferticategory` varchar(255) NOT NULL,
  `landscale` varchar(255) NOT NULL,
  `fertiquantity` varchar(255) NOT NULL,
  `fertilizerunit` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `sector` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `timesent` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `user_id` int(255) NOT NULL,
  `status` text NOT NULL DEFAULT 'Not Approved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `farmer_id`, `ferticategory`, `landscale`, `fertiquantity`, `fertilizerunit`, `district`, `sector`, `cell`, `village`, `timesent`, `user_id`, `status`) VALUES
(18, '9', 'npk', '2', '10', 'kg', 'Gasabo', 'mbazi', 'huyew', 'nmc', '2022-09-28 17:01:12.553596', 8, 'Approved'),
(19, '12', 'nopos', '212', '20', 'kg', 'Gasabo', 'dsd', 'dsd', 'dsd', '2022-09-29 08:45:49.387466', 8, 'Approved'),
(20, '12', 'nopos', '23', '', 'kg', 'Ruhango', '', 'kirehe', 'ewe', '2022-10-03 12:52:24.900986', 8, 'Approved'),
(21, '11', 'nopos', '23', '10', 'kg', 'Nyanza', 'ruba', 'ewer', 'reb', '2022-10-03 12:54:49.437300', 1, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `stockin`
--

CREATE TABLE `stockin` (
  `id` int(11) NOT NULL,
  `ferti_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `timeimported` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stockin`
--

INSERT INTO `stockin` (`id`, `ferti_id`, `quantity`, `timeimported`) VALUES
(1, 'npk', '678', '2022-09-28 17:01:12'),
(2, 'qwe', '80', '2022-09-27 20:34:28'),
(8, 'wq', '32', '2022-09-27 20:20:00'),
(9, 'nopos', '29273', '2022-10-03 12:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `stockout`
--

CREATE TABLE `stockout` (
  `id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `unit` text NOT NULL,
  `farmer_id` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stockout`
--

INSERT INTO `stockout` (`id`, `quantity`, `unit`, `farmer_id`, `district`, `user_id`) VALUES
(2, '10', '', '9', 'Gasabo', 8),
(3, '10', '', '9', 'Gasabo', 8),
(4, '10', 'kg', '9', 'Gasabo', 8),
(5, '20', 'kg', '12', 'Gasabo', 8),
(6, '', 'kg', '12', 'Ruhango', 8),
(7, '10', 'kg', '11', 'Nyanza', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `phone`, `address`, `password`, `role`) VALUES
(1, 'david', 'kay', 'davidkay@gmail.com', '078856789', '', '1212', 'admin'),
(2, 'annick', 'linca', 'lincaannick@gmail.com', '079087654', 'Kigali', '3434', 'retailer'),
(3, 'dinee', 'ishimwe', 'ishimwedinee@gmail.com', '078664545', 'North', '3636', 'retailer'),
(8, 'philbert', 'nyi', 'ndzphilbert@gmail.com', '0875422333', 'East', '1414', 'retailer'),
(9, 'elie', 'mugisha', 'elie@gmail.com', '0875422333', 'kigali', 'elie', 'retailer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`farmer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `fertilizer`
--
ALTER TABLE `fertilizer`
  ADD PRIMARY KEY (`ferti_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `id` (`sender_id`),
  ADD KEY `recieve_id` (`recieve_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `stockin`
--
ALTER TABLE `stockin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockout`
--
ALTER TABLE `stockout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `farmer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fertilizer`
--
ALTER TABLE `fertilizer`
  MODIFY `ferti_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `stockin`
--
ALTER TABLE `stockin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stockout`
--
ALTER TABLE `stockout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `farmers`
--
ALTER TABLE `farmers`
  ADD CONSTRAINT `farmers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
