-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 04:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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
(13, 'ETB0001', 'Teacher Table', 2, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(14, 'ETB0002', 'Teacher Table', 2, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(15, 'ETB0003', 'Teacher Table', 2, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(16, 'EAC0001', 'Uratex-Chair1', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(17, 'EAC0002', 'Uratex-Chair2', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(18, 'EAC0003', 'Uratex-Chair3', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(19, 'EAC0004', 'Uratex-Chair4', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(20, 'EAC0005', 'Uratex-Chair5', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(21, 'EAC0006', 'Uratex-Chair6', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(22, 'EAC0007', 'Uratex-Chair7', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(23, 'EAC0008', 'Uratex-Chair8', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(24, 'EAC0009', 'Uratex-Chair9', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(25, 'EAC0010', 'Uratex-Chair10', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(26, 'EAC0011', 'Uratex-Chair11', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(27, 'EAC0012', 'Uratex-Chair12', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(28, 'EAC0013', 'Uratex-Chair13', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(29, 'EAC0014', 'Uratex-Chair14', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(30, 'EAC0015', 'Uratex-Chair15', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(32, 'EAC0016', 'Uratex-Chair16', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(33, 'EAC0017', 'Uratex-Chair17', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(34, 'EAC0018', 'Uratex-Chair18', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(35, 'EAC0019', 'Uratex-Chair19', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(36, 'EAC0020', 'Uratex-Chair20', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(37, 'EAC0021', 'Uratex-Chair21', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(38, 'EAC0022', 'Uratex-Chair22', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(39, 'EAC0023', 'Uratex-Chair23', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(40, 'EAC0024', 'Uratex-Chair24', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(41, 'EAC0025', 'Uratex-Chair25', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(42, 'EAC0026', 'Uratex-Chair26', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(43, 'EAC0027', 'Uratex-Chair27', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(44, 'EAC0028', 'Uratex-Chair28', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(45, 'EAC0029', 'Uratex-Chair29', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(47, 'EAC0030', 'Uratex-Chair30', 1, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(48, 'EAC0031', 'Uratex-Chair1', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(49, 'EAC0032', 'Uratex-Chair2', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(50, 'EAC0033', 'Uratex-Chair3', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(51, 'EAC0034', 'Uratex-Chair4', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(52, 'EAC0035', 'Uratex-Chair5', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(53, 'EAC0036', 'Uratex-Chair6', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(54, 'EAC0037', 'Uratex-Chair7', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(55, 'EAC0038', 'Uratex-Chair8', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(56, 'EAC0039', 'Uratex-Chair9', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(57, 'EAC0040', 'Uratex-Chair10', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(58, 'EAC0041', 'Uratex-Chair11', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(59, 'EAC0042', 'Uratex-Chair12', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(60, 'EAC0043', 'Uratex-Chair13', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(61, 'EAC0044', 'Uratex-Chair14', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(62, 'EAC0045', 'Uratex-Chair15', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(63, 'EAC0046', 'Uratex-Chair16', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(64, 'EAC0047', 'Uratex-Chair17', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(65, 'EAC0048', 'Uratex-Chair18', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(66, 'EAC0049', 'Uratex-Chair19', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(67, 'EAC0050', 'Uratex-Chair20', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(68, 'EAC0051', 'Ichiban-Chair21', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(69, 'EAC0052', 'Ichiban-Chair22', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(70, 'EAC0053', 'Ichiban-Chair23', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(71, 'EAC0054', 'Ichiban-Chair24', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(72, 'EAC0055', 'Ichiban-Chair25', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(73, 'EAC0056', 'Ichiban-Chair26', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(74, 'EAC0057', 'Ichiban-Chair27', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(75, 'EAC0058', 'Ichiban-Chair28', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(76, 'EAC0059', 'Ichiban-Chair29', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(77, 'EAC0060', 'Ichiban-Chair30', 1, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(78, 'EAC0061', 'Ichiban-Chair1', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(79, 'EAC0062', 'Ichiban-Chair2', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(80, 'EAC0063', 'Ichiban-Chair3', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(81, 'EAC0064', 'Ichiban-Chair4', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(82, 'EAC0065', 'Ichiban-Chair5', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(83, 'EAC0066', 'Ichiban-Chair6', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(84, 'EAC0067', 'Ichiban-Chair7', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(87, 'EAC0068', 'Ichiban-Chair8', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(88, 'EAC0069', 'Ichiban-Chair9', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(89, 'EAC0070', 'Ichiban-Chair10', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(90, 'EAC0071', 'Ichiban-Chair11', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(91, 'EAC0072', 'Ichiban-Chair12', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(92, 'EAC0073', 'Ichiban-Chair13', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(93, 'EAC0074', 'Ichiban-Chair14', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(94, 'EAC0075', 'Ichiban-Chair15', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(95, 'EAC0076', 'Ichiban-Chair16', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(96, 'EAC0077', 'Ichiban-Chair17', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(97, 'EAC0078', 'Ichiban-Chair18', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(98, 'EAC0079', 'Ichiban-Chair19', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(99, 'EAC0080', 'Ichiban-Chair20', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(100, 'EAC0081', 'Uratex-Chair21', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(101, 'EAC0082', 'Uratex-Chair22', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(102, 'EAC0083', 'Uratex-Chair23', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(103, 'EAC0084', 'Uratex-Chair24', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(104, 'EAC0085', 'Uratex-Chair25', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(105, 'EAC0086', 'Uratex-Chair26', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(106, 'EAC0087', 'Uratex-Chair27', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(107, 'EAC0088', 'Uratex-Chair28', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(108, 'EAC0089', 'Uratex-Chair29', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(109, 'EAC0090', 'Uratex-Chair30', 1, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(110, 'EB0001', 'Board', 6, 1, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(111, 'EB0002', 'Board', 6, 2, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(112, 'EB0003', 'Board', 6, 3, 2, 2, 'Teacher A', '2021-09-17', '2021-09-17'),
(113, 'EEF0001', 'Electric Fan1', 3, 1, 2, 2, 'Teacher C', '2021-09-17', '2021-09-17'),
(114, 'EEF0002', 'Electric Fan2', 3, 1, 2, 2, 'Teacher C', '2021-09-17', '2021-09-17'),
(115, 'EEF0003', 'Electric Fan1', 3, 2, 2, 2, 'Teacher C', '2021-09-17', '2021-09-17'),
(116, 'EEF0004', 'Electric Fan2', 3, 2, 2, 2, 'Teacher C', '2021-09-17', '2021-09-17'),
(117, 'EEF0005', 'Electric Fan1', 3, 3, 2, 2, 'Teacher C', '2021-09-17', '2021-09-17'),
(118, 'EEF0006', 'Electric Fan2', 3, 3, 2, 2, 'Teacher C', '2021-09-17', '2021-09-17'),
(119, 'CTB0001', 'Student Table1', 2, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(120, 'CTB0002', 'Student Table2', 2, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(121, 'CTB0003', 'Student Table3', 2, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(122, 'CTB0004', 'Student Table4', 2, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(123, 'CTB0005', 'Student Table5', 2, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(124, 'CTB0006', 'Student Table6', 2, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(125, 'CTB0007', 'Student Table1', 2, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(126, 'CTB0008', 'Student Table2', 2, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(127, 'CTB0009', 'Student Table3', 2, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(128, 'CTB0010', 'Student Table4', 2, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(129, 'CTB0011', 'Student Table5', 2, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(130, 'CTB0012', 'Student Table6', 2, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(131, 'CTB0013', 'Student Table1', 2, 6, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(132, 'CTB0014', 'Student Table2', 2, 6, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(133, 'CTB0015', 'Student Table3', 2, 6, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(134, 'CTB0016', 'Student Table4', 2, 6, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(135, 'CTB0017', 'Student Table5', 2, 6, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(136, 'CTB0018', 'Student Table6', 2, 6, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(137, 'CTB0019', 'Teacher Table', 2, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(138, 'CTB0020', 'Teacher Table', 2, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(139, 'CTB0021', 'Teacher Table', 2, 6, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(140, 'CMC0001', 'Uratex-Chair1', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(141, 'CMC0002', 'Uratex-Chair2', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(142, 'CMC0003', 'Uratex-Chair3', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(143, 'CMC0004', 'Uratex-Chair4', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(144, 'CMC0005', 'Uratex-Chair5', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(145, 'CMC0006', 'Uratex-Chair6', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(146, 'CMC0007', 'Uratex-Chair7', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(147, 'CMC0008', 'Uratex-Chair8', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(148, 'CMC0009', 'Uratex-Chair9', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(149, 'CMC0010', 'Uratex-Chair10', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(150, 'CMC0011', 'Uratex-Chair11', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(151, 'CMC0012', 'Uratex-Chair12', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(152, 'CMC0013', 'Uratex-Chair13', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(153, 'CMC0014', 'Uratex-Chair14', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(154, 'CMC0015', 'Uratex-Chair15', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(155, 'CMC0016', 'Uratex-Chair16', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(156, 'CMC0017', 'Uratex-Chair17', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(157, 'CMC0018', 'Uratex-Chair18', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(158, 'CMC0019', 'Uratex-Chair19', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(159, 'CMC0020', 'Uratex-Chair20', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(160, 'CMC0021', 'Uratex-Chair21', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(161, 'CMC0022', 'Uratex-Chair22', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(162, 'CMC0023', 'Uratex-Chair23', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(163, 'CMC0024', 'Uratex-Chair24', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(164, 'CMC0025', 'Uratex-Chair25', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(165, 'CMC0026', 'Uratex-Chair26', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(166, 'CMC0027', 'Uratex-Chair27', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(167, 'CMC0028', 'Uratex-Chair28', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(168, 'CMC0029', 'Uratex-Chair29', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(169, 'CMC0030', 'Uratex-Chair30', 5, 4, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(170, 'CMC0031', 'Uratex-Chair1', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(171, 'CMC0032', 'Uratex-Chair2', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(172, 'CMC0033', 'Uratex-Chair3', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(173, 'CMC0034', 'Uratex-Chair4', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(174, 'CMC0035', 'Uratex-Chair5', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(175, 'CMC0036', 'Uratex-Chair6', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(176, 'CMC0037', 'Uratex-Chair7', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(177, 'CMC0038', 'Uratex-Chair8', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(178, 'CMC0039', 'Uratex-Chair9', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(179, 'CMC0040', 'Uratex-Chair10', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(180, 'CMC0041', 'Uratex-Chair11', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(181, 'CMC0042', 'Uratex-Chair12', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(182, 'CMC0043', 'Uratex-Chair13', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(183, 'CMC0044', 'Uratex-Chair14', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(184, 'CMC0045', 'Uratex-Chair15', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(185, 'CMC0046', 'Uratex-Chair16', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(186, 'CMC0047', 'Uratex-Chair17', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(187, 'CMC0048', 'Uratex-Chair18', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(188, 'CMC0049', 'Uratex-Chair19', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(189, 'CMC0050', 'Uratex-Chair20', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(190, 'CMC0051', 'Uratex-Chair21', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(191, 'CMC0052', 'Uratex-Chair22', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(192, 'CMC0053', 'Uratex-Chair23', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(193, 'CMC0054', 'Uratex-Chair24', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(194, 'CMC0055', 'Uratex-Chair25', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(195, 'CMC0056', 'Uratex-Chair26', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(196, 'CMC0057', 'Uratex-Chair27', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(197, 'CMC0058', 'Uratex-Chair28', 5, 5, 1, 1, 'Teacher B', '2021-09-17', '2021-09-17'),
(198, 'CMC0059', 'Uratex-Chair29', 5, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-17'),
(199, 'CMC0060', 'Uratex-Chair30', 5, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-17'),
(200, 'CMC0061', 'Uratex-Chair1', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-17'),
(201, 'CMC0062', 'Uratex-Chair2', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-17'),
(202, 'CMC0063', 'Uratex-Chair3', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-17'),
(203, 'CMC0064', 'Uratex-Chair4', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-17'),
(204, 'CMC0065', 'Uratex-Chair5', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-17'),
(205, 'CMC0066', 'Uratex-Chair6', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-17'),
(206, 'CMC0067', 'Uratex-Chair7', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-17'),
(207, 'CMC0068', 'Uratex-Chair8', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-17'),
(209, 'CMC0069', 'Uratex-Chair9', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(210, 'CMC0070', 'Uratex-Chair10', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(211, 'CMC0071', 'Uratex-Chair11', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(212, 'CMC0072', 'Uratex-Chair12', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(213, 'CMC0073', 'Uratex-Chair13', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(214, 'CMC0074', 'Uratex-Chair14', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(215, 'CMC0075', 'Uratex-Chair15', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(216, 'CMC0076', 'Uratex-Chair16', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(217, 'CMC0077', 'Uratex-Chair17', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(218, 'CMC0078', 'Uratex-Chair18', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(219, 'CMC0079', 'Uratex-Chair19', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(220, 'CMC0080', 'Uratex-Chair20', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(221, 'CMC0081', 'Uratex-Chair21', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(222, 'CMC0082', 'Uratex-Chair22', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(223, 'CMC0083', 'Uratex-Chair23', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(224, 'CMC0084', 'Uratex-Chair24', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(225, 'CMC0085', 'Uratex-Chair25', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(226, 'CMC0086', 'Uratex-Chair26', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(227, 'CMC0087', 'Uratex-Chair27', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(228, 'CMC0088', 'Uratex-Chair28', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(229, 'CMC0089', 'Uratex-Chair29', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(230, 'CMC0090', 'Uratex-Chair30', 5, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(231, 'CMT0001', 'Monitor1', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(232, 'CMT0002', 'Monitor2', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(233, 'CMT0003', 'Monitor3', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(234, 'CMT0004', 'Monitor4', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(235, 'CMT0005', 'Monitor5', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(236, 'CMT0006', 'Monitor6', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(237, 'CMT0007', 'Monitor7', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(238, 'CMT0008', 'Monitor8', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(239, 'CMT0009', 'Monitor9', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(240, 'CMT0010', 'Monitor10', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(241, 'CMT0011', 'Monitor11', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(242, 'CMT0012', 'Monitor12', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(243, 'CMT0013', 'Monitor13', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(244, 'CMT0014', 'Monitor14', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(247, 'CMT0015', 'Monitor15', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(248, 'CMT0016', 'Monitor16', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(249, 'CMT0017', 'Monitor17', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(250, 'CMT0018', 'Monitor18', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(251, 'CMT0019', 'Monitor19', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(252, 'CMT0020', 'Monitor20', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(253, 'CMT0021', 'Monitor21', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(254, 'CMT0022', 'Monitor22', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(255, 'CMT0023', 'Monitor23', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(256, 'CMT0024', 'Monitor24', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(257, 'CMT0025', 'Monitor25', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(258, 'CMT0026', 'Monitor26', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(259, 'CMT0027', 'Monitor27', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(260, 'CMT0028', 'Monitor28', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(261, 'CMT0029', 'Monitor29', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(262, 'CMT0030', 'Monitor30', 7, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(263, 'CMT0031', 'Monitor1', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(264, 'CMT0032', 'Monitor2', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(265, 'CMT0033', 'Monitor3', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(266, 'CMT0034', 'Monitor4', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(267, 'CMT0035', 'Monitor5', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(268, 'CMT0036', 'Monitor6', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(269, 'CMT0037', 'Monitor7', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(270, 'CMT0038', 'Monitor8', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(271, 'CMT0039', 'Monitor9', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(272, 'CMT0040', 'Monitor10', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(273, 'CMT0041', 'Monitor11', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(275, 'CMT0042', 'Monitor12', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(276, 'CMT0043', 'Monitor13', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(277, 'CMT0044', 'Monitor14', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(278, 'CMT0045', 'Monitor15', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(279, 'CMT0046', 'Monitor16', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(280, 'CMT0047', 'Monitor17', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(281, 'CMT0048', 'Monitor18', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(282, 'CMT0049', 'Monitor19', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(283, 'CMT0050', 'Monitor20', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(284, 'CMT0051', 'Monitor21', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(285, 'CMT0052', 'Monitor22', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(286, 'CMT0053', 'Monitor23', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(287, 'CMT0054', 'Monitor24', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(288, 'CMT0055', 'Monitor25', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(289, 'CMT0056', 'Monitor26', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(290, 'CMT0057', 'Monitor27', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(291, 'CMT0058', 'Monitor28', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(292, 'CMT0059', 'Monitor29', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(293, 'CMT0060', 'Monitor30', 7, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(294, 'CMT0061', 'Monitor1', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(295, 'CMT0062', 'Monitor2', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(296, 'CMT0063', 'Monitor3', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(297, 'CMT0064', 'Monitor4', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(298, 'CMT0065', 'Monitor5', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(299, 'CMT0066', 'Monitor6', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(300, 'CMT0067', 'Monitor7', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(301, 'CMT0068', 'Monitor8', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(302, 'CMT0069', 'Monitor9', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(303, 'CMT0070', 'Monitor10', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(304, 'CMT0071', 'Monitor11', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(305, 'CMT0072', 'Monitor12', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(306, 'CMT0073', 'Monitor13', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(307, 'CMT0074', 'Monitor14', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(308, 'CMT0075', 'Monitor15', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(309, 'CMT0076', 'Monitor16', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(310, 'CMT0077', 'Monitor17', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(311, 'CMT0078', 'Monitor18', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(312, 'CMT0079', 'Monitor19', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(313, 'CMT0080', 'Monitor20', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(314, 'CMT0081', 'Monitor21', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(315, 'CMT0082', 'Monitor22', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(316, 'CMT0083', 'Monitor23', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(317, 'CMT0084', 'Monitor24', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(318, 'CMT0085', 'Monitor25', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(319, 'CMT0086', 'Monitor26', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(320, 'CMT0087', 'Monitor27', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(321, 'CMT0088', 'Monitor28', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(322, 'CMT0089', 'Monitor29', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(323, 'CMT0090', 'Monitor30', 7, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(324, 'CKB0001', 'Mechanike Miracle Keyboard1', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(325, 'CKB0002', 'Mechanike Miracle Keyboard2', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(326, 'CKB0003', 'Mechanike Miracle Keyboard3', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(327, 'CKB0004', 'Mechanike Miracle Keyboard4', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(328, 'CKB0005', 'Mechanike Miracle Keyboard5', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(329, 'CKB0006', 'Mechanike Miracle Keyboard6', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(330, 'CKB0007', 'Mechanike Miracle Keyboard7', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(331, 'CKB0008', 'Mechanike Miracle Keyboard8', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(332, 'CKB0009', 'Mechanike Miracle Keyboard9', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(333, 'CKB0010', 'Mechanike Miracle Keyboard10', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(334, 'CKB0011', 'Mechanike Miracle Keyboard11', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(335, 'CKB0012', 'Mechanike Miracle Keyboard12', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(336, 'CKB0013', 'Mechanike Miracle Keyboard13', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(337, 'CKB0014', 'Mechanike Miracle Keyboard14', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(338, 'CKB0015', 'Mechanike Miracle Keyboard15', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(339, 'CKB0016', 'Mechanike Miracle Keyboard16', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(340, 'CKB0017', 'Mechanike Miracle Keyboard17', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(341, 'CKB0018', 'Mechanike Miracle Keyboard18', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(342, 'CKB0019', 'Mechanike Miracle Keyboard19', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(343, 'CKB0020', 'Mechanike Miracle Keyboard20', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(344, 'CKB0021', 'Mechanike Miracle Keyboard21', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(345, 'CKB0022', 'Mechanike Miracle Keyboard22', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(347, 'CKB0023', 'Mechanike Miracle Keyboard23', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(348, 'CKB0024', 'Mechanike Miracle Keyboard24', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(349, 'CKB0025', 'Mechanike Miracle Keyboard25', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(350, 'CKB0026', 'Mechanike Miracle Keyboard26', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(351, 'CKB0027', 'Mechanike Miracle Keyboard27', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(352, 'CKB0028', 'Mechanike Miracle Keyboard28', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(354, 'CKB0029', 'Mechanike Miracle Keyboard29', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(355, 'CKB0030', 'Mechanike Miracle Keyboard30', 11, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(356, 'CKB0031', 'Mechanike Miracle Keyboard1', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(357, 'CKB0032', 'Mechanike Miracle Keyboard2', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(358, 'CKB0033', 'Mechanike Miracle Keyboard3', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(359, 'CKB0034', 'Mechanike Miracle Keyboard4', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(360, 'CKB0035', 'Mechanike Miracle Keyboard5', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(361, 'CKB0036', 'Mechanike Miracle Keyboard6', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(362, 'CKB0037', 'Mechanike Miracle Keyboard7', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(363, 'CKB0038', 'Mechanike Miracle Keyboard8', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(364, 'CKB0039', 'Mechanike Miracle Keyboard9', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(365, 'CKB0040', 'Mechanike Miracle Keyboard10', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(366, 'CKB0041', 'Mechanike Miracle Keyboard11', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(367, 'CKB0042', 'Mechanike Miracle Keyboard12', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(368, 'CKB0043', 'Mechanike Miracle Keyboard13', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(369, 'CKB0044', 'Mechanike Miracle Keyboard14', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(370, 'CKB0045', 'Mechanike Miracle Keyboard15', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(371, 'CKB0046', 'Mechanike Miracle Keyboard16', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(372, 'CKB0047', 'Mechanike Miracle Keyboard17', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(373, 'CKB0048', 'Mechanike Miracle Keyboard18', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(374, 'CKB0049', 'Mechanike Miracle Keyboard19', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(375, 'CKB0050', 'Mechanike Miracle Keyboard20', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(376, 'CKB0051', 'Mechanike Miracle Keyboard21', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(377, 'CKB0052', 'Mechanike Miracle Keyboard22', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(378, 'CKB0053', 'Mechanike Miracle Keyboard23', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(379, 'CKB0054', 'Mechanike Miracle Keyboard24', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(380, 'CKB0055', 'Mechanike Miracle Keyboard25', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(381, 'CKB0056', 'Mechanike Miracle Keyboard26', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(382, 'CKB0057', 'Mechanike Miracle Keyboard27', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(383, 'CKB0058', 'Mechanike Miracle Keyboard28', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(384, 'CKB0059', 'Mechanike Miracle Keyboard29', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(385, 'CKB0060', 'Mechanike Miracle Keyboard30', 11, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(386, 'CKB0061', 'Mechanike Miracle Keyboard1', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(387, 'CKB0062', 'Mechanike Miracle Keyboard2', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(388, 'CKB0063', 'Mechanike Miracle Keyboard3', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(389, 'CKB0064', 'Mechanike Miracle Keyboard4', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(390, 'CKB0065', 'Mechanike Miracle Keyboard5', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(391, 'CKB0066', 'Mechanike Miracle Keyboard6', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(392, 'CKB0067', 'Mechanike Miracle Keyboard7', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(393, 'CKB0068', 'Mechanike Miracle Keyboard8', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(394, 'CKB0069', 'Mechanike Miracle Keyboard9', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(395, 'CKB0070', 'Mechanike Miracle Keyboard10', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(396, 'CKB0071', 'Mechanike Miracle Keyboard11', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(397, 'CKB0072', 'Mechanike Miracle Keyboard12', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(398, 'CKB0073', 'Mechanike Miracle Keyboard13', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(399, 'CKB0074', 'Mechanike Miracle Keyboard14', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(400, 'CKB0075', 'Mechanike Miracle Keyboard15', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(401, 'CKB0076', 'Mechanike Miracle Keyboard16', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(402, 'CKB0077', 'Mechanike Miracle Keyboard17', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(403, 'CKB0078', 'Mechanike Miracle Keyboard18', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(404, 'CKB0079', 'Mechanike Miracle Keyboard19', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(405, 'CKB0080', 'Mechanike Miracle Keyboard20', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(406, 'CKB0081', 'Mechanike Miracle Keyboard21', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(407, 'CKB0082', 'Mechanike Miracle Keyboard22', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(408, 'CKB0083', 'Mechanike Miracle Keyboard23', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(409, 'CKB0084', 'Mechanike Miracle Keyboard24', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(410, 'CKB0085', 'Mechanike Miracle Keyboard25', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(411, 'CKB0086', 'Mechanike Miracle Keyboard26', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(412, 'CKB0087', 'Mechanike Miracle Keyboard27', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(413, 'CKB0088', 'Mechanike Miracle Keyboard28', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(414, 'CKB0089', 'Mechanike Miracle Keyboard29', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(415, 'CKB0090', 'Mechanike Miracle Keyboard30', 11, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(416, 'CM0001', 'Mechanike Miracle Mouse1', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(417, 'CM0002', 'Mechanike Miracle Mouse2', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(418, 'CM0003', 'Mechanike Miracle Mouse3', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(419, 'CM0004', 'Mechanike Miracle Mouse4', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(420, 'CM0005', 'Mechanike Miracle Mouse5', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(421, 'CM0006', 'Mechanike Miracle Mouse6', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(422, 'CM0007', 'Mechanike Miracle Mouse7', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(423, 'CM0008', 'Mechanike Miracle Mouse8', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(424, 'CM0009', 'Mechanike Miracle Mouse9', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(425, 'CM0010', 'Mechanike Miracle Mouse10', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(426, 'CM0011', 'Mechanike Miracle Mouse11', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(427, 'CM0012', 'Mechanike Miracle Mouse12', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(428, 'CM0013', 'Mechanike Miracle Mouse13', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(431, 'CM0014', 'Mechanike Miracle Mouse14', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(432, 'CM0015', 'Mechanike Miracle Mouse15', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(433, 'CM0016', 'Mechanike Miracle Mouse16', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(434, 'CM0017', 'Mechanike Miracle Mouse17', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(436, 'CM0018', 'Mechanike Miracle Mouse18', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(437, 'CM0019', 'Mechanike Miracle Mouse19', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(438, 'CM0020', 'Mechanike Miracle Mouse20', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(439, 'CM0021', 'Mechanike Miracle Mouse21', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(440, 'CM0022', 'Mechanike Miracle Mouse22', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(441, 'CM0023', 'Mechanike Miracle Mouse23', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(442, 'CM0024', 'Mechanike Miracle Mouse24', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(443, 'CM0025', 'Mechanike Miracle Mouse25', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(444, 'CM0026', 'Mechanike Miracle Mouse26', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(445, 'CM0027', 'Mechanike Miracle Mouse27', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(446, 'CM0028', 'Mechanike Miracle Mouse28', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(447, 'CM0029', 'Mechanike Miracle Mouse29', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(448, 'CM0030', 'Mechanike Miracle Mouse30', 12, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(449, 'CM0031', 'Mechanike Miracle Mouse1', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(450, 'CM0032', 'Mechanike Miracle Mouse2', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(451, 'CM0033', 'Mechanike Miracle Mouse3', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(452, 'CM0034', 'Mechanike Miracle Mouse4', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(453, 'CM0035', 'Mechanike Miracle Mouse5', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(454, 'CM0036', 'Mechanike Miracle Mouse6', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(455, 'CM0037', 'Mechanike Miracle Mouse7', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(456, 'CM0038', 'Mechanike Miracle Mouse8', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(457, 'CM0039', 'Mechanike Miracle Mouse9', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(458, 'CM0040', 'Mechanike Miracle Mouse10', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(459, 'CM0041', 'Mechanike Miracle Mouse11', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(460, 'CM0042', 'Mechanike Miracle Mouse12', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(461, 'CM0043', 'Mechanike Miracle Mouse13', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(462, 'CM0044', 'Mechanike Miracle Mouse14', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(463, 'CM0045', 'Mechanike Miracle Mouse15', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(464, 'CM0046', 'Mechanike Miracle Mouse16', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(465, 'CM0047', 'Mechanike Miracle Mouse17', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(466, 'CM0048', 'Mechanike Miracle Mouse18', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(467, 'CM0049', 'Mechanike Miracle Mouse19', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(468, 'CM0050', 'Mechanike Miracle Mouse20', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(469, 'CM0051', 'Mechanike Miracle Mouse21', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(470, 'CM0052', 'Mechanike Miracle Mouse22', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(471, 'CM0053', 'Mechanike Miracle Mouse23', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(472, 'CM0054', 'Mechanike Miracle Mouse24', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(473, 'CM0055', 'Mechanike Miracle Mouse25', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(474, 'CM0056', 'Mechanike Miracle Mouse26', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(475, 'CM0057', 'Mechanike Miracle Mouse27', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(476, 'CM0058', 'Mechanike Miracle Mouse28', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(477, 'CM0059', 'Mechanike Miracle Mouse29', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(478, 'CM0060', 'Mechanike Miracle Mouse30', 12, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(479, 'CM0061', 'Mechanike Miracle Mouse1', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(480, 'CM0062', 'Mechanike Miracle Mouse2', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(481, 'CM0063', 'Mechanike Miracle Mouse3', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(482, 'CM0064', 'Mechanike Miracle Mouse4', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(483, 'CM0065', 'Mechanike Miracle Mouse5', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(484, 'CM0066', 'Mechanike Miracle Mouse6', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(485, 'CM0067', 'Mechanike Miracle Mouse7', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(486, 'CM0068', 'Mechanike Miracle Mouse8', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(487, 'CM0069', 'Mechanike Miracle Mouse9', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(488, 'CM0070', 'Mechanike Miracle Mouse10', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(489, 'CM0071', 'Mechanike Miracle Mouse11', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(490, 'CM0072', 'Mechanike Miracle Mouse12', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(491, 'CM0073', 'Mechanike Miracle Mouse13', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(492, 'CM0074', 'Mechanike Miracle Mouse14', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(493, 'CM0075', 'Mechanike Miracle Mouse15', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(494, 'CM0076', 'Mechanike Miracle Mouse16', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(495, 'CM0077', 'Mechanike Miracle Mouse17', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(496, 'CM0078', 'Mechanike Miracle Mouse18', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(497, 'CM0079', 'Mechanike Miracle Mouse19', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(498, 'CM0080', 'Mechanike Miracle Mouse20', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(499, 'CM0081', 'Mechanike Miracle Mouse21', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(500, 'CM0082', 'Mechanike Miracle Mouse22', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(501, 'CM0083', 'Mechanike Miracle Mouse23', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(502, 'CM0084', 'Mechanike Miracle Mouse24', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(503, 'CM0085', 'Mechanike Miracle Mouse25', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(504, 'CM0086', 'Mechanike Miracle Mouse26', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(505, 'CM0087', 'Mechanike Miracle Mouse27', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(506, 'CM0088', 'Mechanike Miracle Mouse28', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(507, 'CM0089', 'Mechanike Miracle Mouse29', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(508, 'CM0090', 'Mechanike Miracle Mouse30', 12, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(509, 'CB0001', 'Board', 6, 4, 1, 1, 'Teacher C', '2021-09-18', '2021-09-18'),
(510, 'CB0002', 'Board', 6, 5, 1, 1, 'Teacher C', '2021-09-18', '2021-09-18'),
(511, 'CB0003', 'Board', 6, 6, 1, 1, 'Teacher C', '2021-09-18', '2021-09-18'),
(512, 'CEF0001', 'Electric Fan1', 3, 4, 1, 1, 'Teacher C', '2021-09-18', '2021-09-18'),
(513, 'CEF0002', 'Electric Fan2', 3, 4, 1, 1, 'Teacher C', '2021-09-18', '2021-09-18'),
(514, 'CEF0003', 'Electric Fan1', 3, 5, 1, 1, 'Teacher C', '2021-09-18', '2021-09-18'),
(515, 'CEF0004', 'Electric Fan2', 3, 5, 1, 1, 'Teacher C', '2021-09-18', '2021-09-18'),
(516, 'CEF0005', 'Electric Fan1', 3, 6, 1, 1, 'Teacher C', '2021-09-18', '2021-09-18'),
(517, 'CEF0006', 'Electric Fan2', 3, 6, 1, 1, 'Teacher C', '2021-09-18', '2021-09-18'),
(518, 'CP0001', 'Canon PIXMA Printer', 8, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(519, 'CP0002', 'Canon PIXMA Printer', 8, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(520, 'CP0003', 'Canon PIXMA Printer', 8, 6, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(521, 'CSU0001', 'System Unit1', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(522, 'CSU0002', 'System Unit2', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(523, 'CSU0003', 'System Unit3', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(524, 'CSU0004', 'System Unit4', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(525, 'CSU0005', 'System Unit5', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(526, 'CSU0006', 'System Unit6', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(527, 'CSU0007', 'System Unit7', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(528, 'CSU0008', 'System Unit8', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(529, 'CSU0009', 'System Unit9', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(530, 'CSU0010', 'System Unit10', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(531, 'CSU0011', 'System Unit11', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(532, 'CSU0012', 'System Unit12', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(533, 'CSU0013', 'System Unit13', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(534, 'CSU0014', 'System Unit14', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(535, 'CSU0015', 'System Unit15', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(536, 'CSU0016', 'System Unit16', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(537, 'CSU0017', 'System Unit17', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(538, 'CSU0018', 'System Unit18', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(539, 'CSU0019', 'System Unit19', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(540, 'CSU0020', 'System Unit20', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(541, 'CSU0021', 'System Unit21', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(542, 'CSU0022', 'System Unit22', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(543, 'CSU0023', 'System Unit23', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(544, 'CSU0024', 'System Unit24', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(545, 'CSU0025', 'System Unit25', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(546, 'CSU0026', 'System Unit26', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(547, 'CSU0027', 'System Unit27', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(548, 'CSU0028', 'System Unit28', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(549, 'CSU0029', 'System Unit29', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(550, 'CSU0030', 'System Unit30', 10, 4, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(551, 'CSU0031', 'System Unit1', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(552, 'CSU0032', 'System Unit2', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(553, 'CSU0033', 'System Unit3', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(554, 'CSU0034', 'System Unit4', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(556, 'CSU0035', 'System Unit5', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(557, 'CSU0036', 'System Unit6', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(558, 'CSU0037', 'System Unit7', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(559, 'CSU0038', 'System Unit8', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(560, 'CSU0039', 'System Unit9', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(561, 'CSU0040', 'System Unit10', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(562, 'CSU0041', 'System Unit11', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(565, 'CSU0042', 'System Unit12', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(566, 'CSU0043', 'System Unit13', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(567, 'CSU0044', 'System Unit14', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(568, 'CSU0045', 'System Unit15', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(569, 'CSU0046', 'System Unit16', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(570, 'CSU0047', 'System Unit17', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(571, 'CSU0048', 'System Unit18', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(572, 'CSU0049', 'System Unit19', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(573, 'CSU0050', 'System Unit20', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(574, 'CSU0051', 'System Unit21', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(575, 'CSU0052', 'System Unit22', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(576, 'CSU0053', 'System Unit23', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(577, 'CSU0054', 'System Unit24', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(578, 'CSU0055', 'System Unit25', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(579, 'CSU0056', 'System Unit26', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(580, 'CSU0057', 'System Unit27', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(581, 'CSU0058', 'System Unit28', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(582, 'CSU0059', 'System Unit29', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18');
INSERT INTO `assets` (`a_id`, `access_id`, `a_name`, `ac_id`, `loc_id`, `cat_id`, `dept_id`, `a_person_incharge`, `a_date`, `a_effectivty_date`) VALUES
(583, 'CSU0060', 'System Unit30', 10, 5, 1, 1, 'Teacher B', '2021-09-18', '2021-09-18'),
(584, 'CSU0061', 'System Unit1', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-18'),
(585, 'CSU0062', 'System Unit2', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(586, 'CSU0063', 'System Unit3', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(587, 'CSU0064', 'System Unit4', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(588, 'CSU0065', 'System Unit5', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(589, 'CSU0066', 'System Unit6', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(590, 'CSU0067', 'System Unit7', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(591, 'CSU0068', 'System Unit8', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(592, 'CSU0069', 'System Unit9', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(593, 'CSU0070', 'System Unit10', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(594, 'CSU0071', 'System Unit11', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(595, 'CSU0072', 'System Unit12', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(596, 'CSU0073', 'System Unit13', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(597, 'CSU0074', 'System Unit14', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(598, 'CSU0075', 'System Unit15', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(599, 'CSU0076', 'System Unit16', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(600, 'CSU0077', 'System Unit17', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(601, 'CSU0078', 'System Unit18', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(602, 'CSU0079', 'System Unit19', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(603, 'CSU0080', 'System Unit20', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(604, 'CSU0081', 'System Unit21', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(605, 'CSU0082', 'System Unit22', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(606, 'CSU0083', 'System Unit23', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(607, 'CSU0084', 'System Unit24', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(608, 'CSU0085', 'System Unit25', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(609, 'CSU0086', 'System Unit26', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(610, 'CSU0087', 'System Unit27', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(611, 'CSU0088', 'System Unit28', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(612, 'CSU0089', 'System Unit29', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(613, 'CSU0090', 'System Unit30', 10, 6, 1, 1, 'Teacher B', '2021-09-19', '2021-09-19'),
(614, 'EAC0091', 'Uratex-Chair31', 1, 1, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(615, 'EAC0092', 'Uratex-Chair32', 1, 1, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(616, 'EAC0093', 'Uratex-Chair33', 1, 1, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(617, 'EAC0094', 'Uratex-Chair34', 1, 1, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(618, 'EAC0095', 'Uratex-Chair35', 1, 1, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(619, 'EAC0096', 'Uratex-Chair36', 1, 1, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(620, 'EAC0097', 'Uratex-Chair37', 1, 1, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(621, 'EAC0098', 'Uratex-Chair38', 1, 1, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(622, 'EAC0099', 'Uratex-Chair39', 1, 1, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(623, 'EAC0100', 'Uratex-Chair40', 1, 1, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(624, 'EAC0101', 'Uratex-Chair31', 1, 2, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(625, 'EAC0102', 'Ichiban-Chair32', 1, 2, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(626, 'EAC0103', 'Ichiban-Chair33', 1, 2, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(627, 'EAC0104', 'Ichiban-Chair34', 1, 2, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(628, 'EAC0105', 'Ichiban-Chair35', 1, 2, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(629, 'EAC0106', 'Ichiban-Chair36', 1, 2, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(636, 'EAC0107', 'Ichiban-Chair37', 1, 2, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(637, 'EAC0108', 'Ichiban-Chair38', 1, 2, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(638, 'EAC0109', 'Ichiban-Chair39', 1, 2, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(639, 'EAC0110', 'Ichiban-Chair40', 1, 2, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(640, 'EAC0111', 'Uratex-Chair31', 1, 3, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(641, 'EAC0112', 'Uratex-Chair32', 1, 3, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(642, 'EAC0113', 'Uratex-Chair33', 1, 3, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(643, 'EAC0114', 'Uratex-Chair34', 1, 3, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(644, 'EAC0115', 'Uratex-Chair35', 1, 3, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(645, 'EAC0116', 'Uratex-Chair36', 1, 3, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(646, 'EAC0117', 'Uratex-Chair37', 1, 3, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(648, 'EAC0118', 'Uratex-Chair38', 1, 3, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(649, 'EAC0119', 'Uratex-Chair39', 1, 3, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(651, 'EAC0120', 'Uratex-Chair40', 1, 3, 2, 2, 'Teacher A', '2021-09-19', '2021-09-19'),
(652, 'EP0001', 'HP Projector', 14, 1, 2, 2, 'Teacher B', '2021-09-19', '2021-09-19');

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
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=653;

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
