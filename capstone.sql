-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 08:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `a_id` int(255) NOT NULL,
  `access_id` varchar(255) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `ac_id` int(255) NOT NULL,
  `loc_id` int(255) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `dept_id` int(255) NOT NULL,
  `a_person_incharge` varchar(255) NOT NULL,
  `a_date` date NOT NULL DEFAULT current_timestamp(),
  `a_effectivty_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`a_id`, `access_id`, `a_name`, `ac_id`, `loc_id`, `cat_id`, `dept_id`, `a_person_incharge`, `a_date`, `a_effectivty_date`) VALUES
(1, 'MU3006', 'Gtable Engine', 2, 3, 2, 2, 'Mr. Quiachon', '2021-09-14', '2021-09-20'),
(2, 'BT4560', 'Graphing Board TZ05', 6, 2, 1, 1, 'Mr. Bitly', '2021-09-14', '2021-09-22'),
(3, 'MT7756', 'Dell Ultra Screen 12062px', 1, 4, 1, 1, 'Mr. Datwo TPC', '2021-09-14', '2021-09-20'),
(4, 'MU3007', 'GTable 7445', 2, 6, 1, 1, 'Mr. Datwo TPCx', '2021-09-15', '2021-09-24'),
(5, 'MU3012', 'GTable 5426', 2, 1, 2, 2, 'Mr. Bitly', '2021-09-15', '2021-09-21'),
(6, 'ZTX3200', 'Mechanike Mircale Mouse', 12, 4, 1, 1, 'Mr. Datwo TPC', '2021-09-15', '2021-09-20'),
(7, 'BT4561', 'GTable12675', 3, 1, 1, 1, 'Mr. Bitly', '2021-09-15', '2021-09-20'),
(8, 'MT7711', 'GTablezxxvz', 2, 2, 2, 2, 'Mr. Datwo TPC', '2021-09-15', '2021-09-20'),
(9, 'MT7111', 'Mechanike Mircale MOuse', 11, 5, 1, 1, 'Mr. Datwo TPC', '2021-09-15', '2021-09-20'),
(10, 'BRM7451', 'Epson 3317', 8, 4, 1, 1, 'Mr. Tipsy', '2021-09-15', '2021-09-23'),
(11, 'MT7723', 'GTablezxczczc', 4, 1, 1, 1, 'Mr. Bitly', '2021-09-15', '2021-09-20'),
(12, 'MU3077', 'Mechanike Mircale Keyboard', 11, 5, 1, 1, 'Mr. Bitly', '2021-09-15', '2021-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `asset_cat`
--

CREATE TABLE `asset_cat` (
  `ac_id` int(255) NOT NULL,
  `ac_name` varchar(255) NOT NULL,
  `ac_status` varchar(255) NOT NULL DEFAULT 'USED' COMMENT 'USED or DISPOSED'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asset_cat`
--

INSERT INTO `asset_cat` (`ac_id`, `ac_name`, `ac_status`) VALUES
(1, 'Armed-chair', 'USED'),
(2, 'Table', 'USED'),
(3, 'Electric Fan', 'USED'),
(4, 'Curtain', 'USED'),
(5, 'Monoblock Chair', 'USED'),
(6, 'Graph Board', 'USED'),
(7, 'Monitor', 'USED'),
(8, 'Printer', 'USED'),
(9, 'AVR', 'USED'),
(10, 'System Unit', 'USED'),
(11, 'Keyboard', 'USED'),
(12, 'Mouse', 'USED'),
(13, 'Switch', 'USED'),
(14, 'Projector', 'USED');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(125) NOT NULL,
  `cat_name` varchar(599) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Laboratory Room'),
(2, 'Lecture Room');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(255) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_status` varchar(255) NOT NULL DEFAULT 'A' COMMENT 'A for Active\r\nP for Passive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `dept_status`) VALUES
(1, 'CSD Department', 'A'),
(2, 'EDUC Department', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `loc_id` int(255) NOT NULL,
  `loc_name` varchar(255) NOT NULL,
  `loc_status` varchar(255) NOT NULL DEFAULT 'A' COMMENT 'A for Active\r\nIN for Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loc_id`, `loc_name`, `loc_status`) VALUES
(1, 'SB-1', 'A'),
(2, 'SB-2', 'A'),
(3, 'SB-3', 'A'),
(4, 'ECB-15', 'A'),
(5, 'ECB-16', 'A'),
(6, 'ECB-17', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_username` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_usertype` varchar(255) NOT NULL COMMENT 'A = admin\r\nB = Stuffs'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_address`, `u_email`, `u_username`, `u_password`, `u_usertype`) VALUES
(1, 'Romel L. Silo', 'Delgado St. Sirangan Sorsogon City', 'admin@bicol-u.edu.ph', 'admin', '$2y$10$fu87IzlD1yPxSivYCj/aeOtbP3gAR1Hj94nAmADTBR8xfQdAkkKju', 'A'),
(2, 'Reymart Morco', 'Polangui Albay', 'reymart@dt.com', 'stf_admin2', '$2y$10$40nndds75lkxYnmhnXDWHOC65aVDCERDwAog6odKPah2UotfM7pkC', 'A'),
(3, 'Reymart C. Morco', 'Polangui Albay', 'reymart@bicol-u.edu.ph', 'stf_admin', '$2y$10$y0aImhlRQchjZ/LezjatwOsxMjBJUMnOn09IDvOpDUofY2wKN8dme', 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `asset_cat`
--
ALTER TABLE `asset_cat`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `asset_cat`
--
ALTER TABLE `asset_cat`
  MODIFY `ac_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `loc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
