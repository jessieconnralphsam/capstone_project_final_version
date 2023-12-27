-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 06:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hydro`
--

-- --------------------------------------------------------

--
-- Table structure for table `acidity`
--

CREATE TABLE `acidity` (
  `acid_id` int(11) NOT NULL,
  `sensor_name` varchar(12) NOT NULL DEFAULT 'Acidity',
  `acid_cdate` datetime NOT NULL DEFAULT current_timestamp(),
  `acid_readings` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acidity`
--

INSERT INTO `acidity` (`acid_id`, `sensor_name`, `acid_cdate`, `acid_readings`, `status`, `action`) VALUES
(29, 'Acidity', '2023-08-19 15:37:48', 4, 0, 'sample'),
(30, 'Acidity', '2023-08-19 15:37:58', 7, 0, ''),
(31, 'Acidity', '2023-08-19 15:38:37', 4, 0, ''),
(32, 'Acidity', '2023-08-19 15:38:50', 6, 0, ''),
(33, 'Acidity', '2023-08-19 15:39:01', 4, 0, ''),
(34, 'Acidity', '2023-08-19 15:42:12', 7, 0, ''),
(35, 'Acidity', '2023-08-19 15:44:01', 9, 0, ''),
(36, 'Acidity', '2023-08-19 15:50:10', 10, 0, ''),
(37, 'Acidity', '2023-08-19 16:22:29', 2, 0, ''),
(38, 'Acidity', '2023-08-19 16:24:32', 0, 0, ''),
(39, 'Acidity', '2023-08-19 16:34:06', 7, 0, ''),
(40, 'Acidity', '2023-08-19 16:35:27', 10, 0, ''),
(41, 'Acidity', '2023-08-19 17:01:44', 7, 0, ''),
(42, 'Acidity', '2023-08-19 17:24:36', 7, 0, ''),
(43, 'Acidity', '2023-08-19 17:26:32', 7, 0, ''),
(44, 'Acidity', '2023-08-19 17:27:54', 7, 0, ''),
(45, 'Acidity', '2023-08-20 08:10:49', 9, 0, ''),
(46, 'Acidity', '2023-08-20 08:11:48', 10, 0, ''),
(47, 'Acidity', '2023-08-20 08:15:04', 10, 0, ''),
(48, 'Acidity', '2023-08-20 08:26:57', 10, 0, ''),
(49, 'Acidity', '2023-08-20 08:27:07', 10, 0, ''),
(50, 'Acidity', '2023-08-20 08:27:37', 10, 0, ''),
(51, 'Acidity', '2023-08-20 08:56:08', 7, 0, ''),
(52, 'Acidity', '2023-08-20 08:56:34', 10, 0, ''),
(53, 'Acidity', '2023-08-20 09:08:26', 10, 0, ''),
(54, 'Acidity', '2023-08-20 09:08:55', 7, 0, ''),
(55, 'Acidity', '2023-08-20 09:09:09', 7, 0, ''),
(56, 'Acidity', '2023-11-13 09:59:35', 7, 0, ''),
(57, 'Acidity', '2023-11-13 09:59:50', 7, 0, ''),
(58, 'Acidity', '2023-11-13 12:15:37', 1, 0, ''),
(59, 'Acidity', '2023-11-13 12:16:12', 7, 0, ''),
(60, 'Acidity', '2023-11-13 12:34:21', 2, 0, ''),
(61, 'Acidity', '2023-11-13 12:34:49', 7, 0, ''),
(62, 'Acidity', '2023-11-14 06:58:40', 2, 0, ''),
(63, 'Acidity', '2023-11-15 11:07:17', 10, 0, ''),
(64, 'Acidity', '2023-11-15 11:33:55', 7, 0, ''),
(65, 'Acidity', '2023-11-15 11:36:07', 3, 0, ''),
(66, 'Acidity', '2023-11-20 18:53:28', 7, 0, ''),
(67, 'Acidity', '2023-11-20 19:12:14', 7, 0, ''),
(68, 'Acidity', '2023-11-20 19:28:14', 7, 0, ''),
(69, 'Acidity', '2023-11-20 19:32:32', 7, 0, ''),
(70, 'Acidity', '2023-11-20 19:32:41', 7, 0, ''),
(71, 'Acidity', '2023-11-20 19:33:27', 2, 0, ''),
(72, 'Acidity', '2023-11-20 19:37:19', 7, 0, ''),
(73, 'Acidity', '2023-11-20 20:45:35', 1, 0, ''),
(74, 'Acidity', '2023-11-20 21:02:02', 7, 0, ''),
(75, 'Acidity', '2023-11-20 21:16:19', 2, 0, ''),
(76, 'Acidity', '2023-11-21 11:26:45', 7, 0, ''),
(77, 'Acidity', '2023-12-26 02:32:16', 7, 0, 'None'),
(78, 'Acidity', '2023-12-26 18:46:57', 7, 0, 'None'),
(79, 'Acidity', '2023-12-27 12:05:19', 8, 0, 'Added 2ml of pH-Down Solution'),
(80, 'Acidity', '2023-12-27 12:06:54', 4, 0, 'Added 2ml of pH-Up Solution'),
(81, 'Acidity', '2023-12-27 12:07:16', 7, 0, 'No Action'),
(82, 'Acidity', '2023-12-27 12:07:38', 8, 0, 'Added 2ml of pH-Down Solution'),
(83, 'Acidity', '2023-12-27 12:07:53', 8, 0, 'Added 2ml of pH-Down Solution'),
(84, 'Acidity', '2023-12-27 12:08:11', 7, 0, 'No Action');

--
-- Triggers `acidity`
--
DELIMITER $$
CREATE TRIGGER `action_insert` BEFORE INSERT ON `acidity` FOR EACH ROW BEGIN
    IF NEW.acid_readings <= 6.4 THEN
        SET NEW.action = 'Added 2ml of pH-Up Solution';
    ELSEIF NEW.acid_readings >= 6.5 AND NEW.acid_readings <= 7.5 THEN
        SET NEW.action = 'No Action';
    ELSEIF NEW.acid_readings > 7.5 THEN
        SET NEW.action = 'Added 2ml of pH-Down Solution';
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_into_acidity_notif_table` AFTER INSERT ON `acidity` FOR EACH ROW BEGIN
  IF NEW.acid_readings > 7 THEN
    INSERT INTO notifications (notif_sname, cdate, readings, status) 
    VALUES (NEW.sensor_name, NEW.acid_cdate, NEW.acid_readings, NEW.status);
  END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertdata_acid` AFTER INSERT ON `acidity` FOR EACH ROW BEGIN
  IF NEW.acid_readings < 7 THEN
    INSERT INTO notifications (notif_sname, cdate, readings, status) 
    VALUES (NEW.sensor_name, NEW.acid_cdate, NEW.acid_readings, NEW.status);
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `average`
--

CREATE TABLE `average` (
  `id` int(25) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `acidity` int(11) NOT NULL,
  `tds` int(11) NOT NULL,
  `temperature` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `combined_readings_view`
-- (See below for the actual view)
--
CREATE TABLE `combined_readings_view` (
`reading_id` int(11)
,`sensor_name` varchar(12)
,`reading_cdate` datetime
,`reading_value` int(11)
,`reading_type` varchar(22)
,`weighted_value` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `notif_sname` varchar(12) NOT NULL,
  `cdate` datetime NOT NULL,
  `readings` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `notif_sname`, `cdate`, `readings`, `status`) VALUES
(48, 'waterlevel', '2023-08-19 15:37:48', 3, 1),
(49, 'Acidity', '2023-08-19 15:37:48', 4, 1),
(50, 'Conductivity', '2023-08-19 15:37:48', 5, 1),
(51, 'waterlevel', '2023-08-19 15:37:58', 5, 1),
(52, 'Conductivity', '2023-08-19 15:37:58', 9, 1),
(53, 'Acidity', '2023-08-19 15:38:37', 4, 1),
(54, 'Conductivity', '2023-08-19 15:38:38', 6, 1),
(55, 'Temperature', '2023-08-19 15:38:38', 78, 1),
(56, 'Acidity', '2023-08-19 15:38:50', 6, 1),
(57, 'Conductivity', '2023-08-19 15:38:50', 8, 1),
(58, 'Temperature', '2023-08-19 15:38:50', 90, 1),
(59, 'Acidity', '2023-08-19 15:39:01', 4, 1),
(60, 'Conductivity', '2023-08-19 15:39:01', 5, 1),
(61, 'Temperature', '2023-08-19 15:39:01', 67, 1),
(62, 'waterlevel', '2023-08-19 15:42:12', 6, 1),
(63, 'Conductivity', '2023-08-19 15:42:12', 8, 1),
(64, 'waterflow', '2023-08-19 15:44:01', 0, 1),
(65, 'waterlevel', '2023-08-19 15:44:01', 0, 1),
(66, 'Acidity', '2023-08-19 15:44:01', 9, 1),
(67, 'Conductivity', '2023-08-19 15:44:01', 1000, 1),
(68, 'Temperature', '2023-08-19 15:44:01', 78, 1),
(69, 'waterflow', '2023-08-19 15:50:10', 0, 1),
(70, 'waterlevel', '2023-08-19 15:50:10', 9, 1),
(71, 'Acidity', '2023-08-19 15:50:10', 10, 1),
(72, 'Conductivity', '2023-08-19 15:50:10', 950, 1),
(73, 'Temperature', '2023-08-19 15:50:11', 30, 1),
(74, 'waterlevel', '2023-08-19 16:22:28', 2, 1),
(75, 'Acidity', '2023-08-19 16:22:29', 2, 1),
(76, 'Conductivity', '2023-08-19 16:22:29', 2, 1),
(77, 'waterflow', '2023-08-19 16:24:32', 0, 1),
(78, 'waterlevel', '2023-08-19 16:24:32', 0, 1),
(79, 'Acidity', '2023-08-19 16:24:32', 0, 1),
(80, 'Conductivity', '2023-08-19 16:24:32', 0, 1),
(81, 'waterlevel', '2023-08-19 16:34:06', 10, 1),
(82, 'Conductivity', '2023-08-19 16:34:06', 0, 1),
(83, 'waterlevel', '2023-08-19 16:35:26', 7, 1),
(84, 'Acidity', '2023-08-19 16:35:27', 10, 1),
(85, 'Temperature', '2023-08-19 16:35:27', 89, 1),
(86, 'waterflow', '2023-08-19 17:24:35', 0, 1),
(87, 'Conductivity', '2023-08-19 17:26:32', 1000, 1),
(88, 'waterlevel', '2023-08-19 17:27:54', 0, 1),
(89, 'Conductivity', '2023-08-19 17:27:54', 1000, 1),
(90, 'Acidity', '2023-08-20 08:10:49', 9, 1),
(91, 'Conductivity', '2023-08-20 08:10:49', 1000, 1),
(92, 'waterlevel', '2023-08-20 08:11:48', 0, 1),
(93, 'Acidity', '2023-08-20 08:11:48', 10, 1),
(94, 'Conductivity', '2023-08-20 08:11:48', 1000, 1),
(95, 'Acidity', '2023-08-20 08:15:04', 10, 1),
(96, 'Conductivity', '2023-08-20 08:15:04', 1000, 1),
(97, 'Acidity', '2023-08-20 08:26:57', 10, 1),
(98, 'Conductivity', '2023-08-20 08:26:57', 1000, 1),
(99, 'Acidity', '2023-08-20 08:27:07', 10, 1),
(100, 'Conductivity', '2023-08-20 08:27:07', 1000, 1),
(101, 'waterlevel', '2023-08-20 08:27:37', 0, 1),
(102, 'Acidity', '2023-08-20 08:27:37', 10, 1),
(103, 'Conductivity', '2023-08-20 08:27:37', 1000, 1),
(104, 'waterlevel', '2023-08-20 08:56:08', 0, 1),
(105, 'Conductivity', '2023-08-20 08:56:08', 1000, 1),
(106, 'waterlevel', '2023-08-20 08:56:34', 0, 1),
(107, 'Acidity', '2023-08-20 08:56:34', 10, 1),
(108, 'Conductivity', '2023-08-20 08:56:34', 800, 1),
(109, 'waterlevel', '2023-08-20 09:08:26', 0, 1),
(110, 'Acidity', '2023-08-20 09:08:26', 10, 1),
(111, 'Conductivity', '2023-08-20 09:08:26', 1000, 1),
(112, 'Conductivity', '2023-08-20 09:08:55', 800, 1),
(113, 'waterlevel', '2023-08-20 09:09:09', 0, 1),
(114, 'Conductivity', '2023-08-20 09:09:10', 1000, 1),
(115, 'waterlevel', '2023-11-13 09:59:35', 9, 1),
(116, 'Conductivity', '2023-11-13 09:59:35', 6, 1),
(117, 'waterlevel', '2023-11-13 09:59:50', 9, 1),
(118, 'Conductivity', '2023-11-13 09:59:50', 6, 1),
(119, 'Acidity', '2023-11-13 12:15:37', 1, 1),
(120, 'Acidity', '2023-11-13 12:34:21', 2, 1),
(121, 'waterlevel', '2023-11-14 06:58:40', 5, 1),
(122, 'Acidity', '2023-11-14 06:58:40', 2, 1),
(123, 'Conductivity', '2023-11-14 06:58:40', 50, 1),
(124, 'waterlevel', '2023-11-15 11:07:17', 5, 1),
(125, 'Acidity', '2023-11-15 11:07:17', 10, 1),
(126, 'Conductivity', '2023-11-15 11:07:17', 20, 1),
(127, 'waterlevel', '2023-11-15 11:33:55', 3, 1),
(128, 'Conductivity', '2023-11-15 11:33:55', 100, 1),
(129, 'waterlevel', '2023-11-15 11:36:07', 3, 1),
(130, 'Acidity', '2023-11-15 11:36:07', 3, 1),
(131, 'Conductivity', '2023-11-15 11:36:07', 50, 1),
(132, 'waterlevel', '2023-11-20 18:53:28', 3, 1),
(133, 'Conductivity', '2023-11-20 18:53:28', 50, 1),
(134, 'waterlevel', '2023-11-20 19:12:14', 5, 1),
(135, 'waterlevel', '2023-11-20 19:28:14', 3, 1),
(136, 'waterlevel', '2023-11-20 19:32:32', 3, 1),
(137, 'waterlevel', '2023-11-20 19:32:41', 2, 1),
(138, 'Temperature', '2023-11-20 19:32:41', 100, 1),
(139, 'waterlevel', '2023-11-20 19:33:27', 3, 1),
(140, 'Acidity', '2023-11-20 19:33:27', 2, 1),
(141, 'Conductivity', '2023-11-20 19:33:27', 900, 1),
(142, 'Temperature', '2023-11-20 19:33:27', 100, 1),
(143, 'waterlevel', '2023-11-20 19:37:19', 4, 1),
(144, 'waterlevel', '2023-11-20 20:45:35', 3, 1),
(145, 'Acidity', '2023-11-20 20:45:35', 1, 1),
(146, 'Conductivity', '2023-11-20 20:45:35', 900, 1),
(147, 'Temperature', '2023-11-20 20:45:35', 30, 1),
(148, 'waterlevel', '2023-11-20 21:02:02', 3, 1),
(149, 'waterlevel', '2023-11-20 21:16:19', 3, 1),
(150, 'Acidity', '2023-11-20 21:16:19', 2, 1),
(151, 'Conductivity', '2023-11-20 21:16:19', 50, 1),
(152, 'Temperature', '2023-11-20 21:16:19', 30, 1),
(153, 'waterlevel', '2023-11-21 11:26:45', 3, 1),
(154, 'waterlevel', '2023-12-26 18:46:57', 1, 1),
(155, 'Conductivity', '2023-12-26 18:46:57', 100, 1),
(156, 'Acidity', '2023-12-27 12:05:19', 8, 1),
(157, 'Conductivity', '2023-12-27 12:05:19', 100, 1),
(158, 'waterlevel', '2023-12-27 12:06:54', 1, 1),
(159, 'Acidity', '2023-12-27 12:06:54', 4, 1),
(160, 'Conductivity', '2023-12-27 12:06:54', 100, 1),
(161, 'waterlevel', '2023-12-27 12:07:16', 1, 1),
(162, 'Conductivity', '2023-12-27 12:07:16', 100, 1),
(163, 'waterlevel', '2023-12-27 12:07:38', 1, 1),
(164, 'Acidity', '2023-12-27 12:07:38', 8, 1),
(165, 'Conductivity', '2023-12-27 12:07:38', 100, 1),
(166, 'waterlevel', '2023-12-27 12:07:53', 1, 1),
(167, 'Acidity', '2023-12-27 12:07:53', 8, 1),
(168, 'Conductivity', '2023-12-27 12:07:53', 100, 1),
(169, 'waterlevel', '2023-12-27 12:08:11', 1, 1),
(170, 'Conductivity', '2023-12-27 12:08:11', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `temperature`
--

CREATE TABLE `temperature` (
  `temp_id` int(11) NOT NULL,
  `sensor_name` varchar(12) NOT NULL DEFAULT 'Temperature',
  `temp_cdate` datetime NOT NULL DEFAULT current_timestamp(),
  `temp_readings` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `temperature`
--

INSERT INTO `temperature` (`temp_id`, `sensor_name`, `temp_cdate`, `temp_readings`, `status`) VALUES
(22, 'Temperature', '2023-08-19 15:37:48', 6, 0),
(23, 'Temperature', '2023-08-19 15:37:58', 12, 0),
(24, 'Temperature', '2023-08-19 15:38:38', 78, 0),
(25, 'Temperature', '2023-08-19 15:38:50', 90, 0),
(26, 'Temperature', '2023-08-19 15:39:01', 67, 0),
(27, 'Temperature', '2023-08-19 15:42:12', 9, 0),
(28, 'Temperature', '2023-08-19 15:44:01', 78, 0),
(29, 'Temperature', '2023-08-19 15:50:11', 30, 0),
(30, 'Temperature', '2023-08-19 16:22:29', 2, 0),
(31, 'Temperature', '2023-08-19 16:24:32', 6, 0),
(32, 'Temperature', '2023-08-19 16:34:06', 0, 0),
(33, 'Temperature', '2023-08-19 16:35:27', 89, 0),
(34, 'Temperature', '2023-08-19 17:01:44', 25, 0),
(35, 'Temperature', '2023-08-19 17:24:36', 24, 0),
(36, 'Temperature', '2023-08-19 17:26:32', 25, 0),
(37, 'Temperature', '2023-08-19 17:27:55', 25, 0),
(38, 'Temperature', '2023-08-20 08:10:50', 25, 0),
(39, 'Temperature', '2023-08-20 08:11:48', 25, 0),
(40, 'Temperature', '2023-08-20 08:15:04', 25, 0),
(41, 'Temperature', '2023-08-20 08:26:57', 25, 0),
(42, 'Temperature', '2023-08-20 08:27:08', 25, 0),
(43, 'Temperature', '2023-08-20 08:27:37', 20, 0),
(44, 'Temperature', '2023-08-20 08:56:08', 25, 0),
(45, 'Temperature', '2023-08-20 08:56:34', 25, 0),
(46, 'Temperature', '2023-08-20 09:08:26', 25, 0),
(47, 'Temperature', '2023-08-20 09:08:55', 2, 0),
(48, 'Temperature', '2023-08-20 09:09:10', 2, 0),
(49, 'Temperature', '2023-11-13 09:59:35', 9, 0),
(50, 'Temperature', '2023-11-13 09:59:50', 9, 0),
(51, 'Temperature', '2023-11-14 06:58:40', 25, 0),
(52, 'Temperature', '2023-11-15 11:07:17', 5, 0),
(53, 'Temperature', '2023-11-15 11:33:55', 25, 0),
(54, 'Temperature', '2023-11-15 11:36:07', 25, 0),
(55, 'Temperature', '2023-11-20 18:53:28', 25, 0),
(56, 'Temperature', '2023-11-20 19:12:14', 25, 0),
(57, 'Temperature', '2023-11-20 19:28:14', 18, 0),
(58, 'Temperature', '2023-11-20 19:32:32', 18, 0),
(59, 'Temperature', '2023-11-20 19:32:41', 100, 0),
(60, 'Temperature', '2023-11-20 19:33:27', 100, 0),
(61, 'Temperature', '2023-11-20 19:37:19', 25, 0),
(62, 'Temperature', '2023-11-20 20:45:35', 30, 0),
(63, 'Temperature', '2023-11-20 21:02:02', 25, 0),
(64, 'Temperature', '2023-11-20 21:16:19', 30, 0),
(65, 'Temperature', '2023-11-21 11:26:45', 25, 0),
(66, 'Temperature', '2023-12-26 18:46:57', 19, 0),
(67, 'Temperature', '2023-12-27 12:05:19', 3, 0),
(68, 'Temperature', '2023-12-27 12:06:54', 19, 0),
(69, 'Temperature', '2023-12-27 12:07:16', 19, 0),
(70, 'Temperature', '2023-12-27 12:07:38', 19, 0),
(71, 'Temperature', '2023-12-27 12:07:53', 19, 0),
(72, 'Temperature', '2023-12-27 12:08:11', 19, 0);

--
-- Triggers `temperature`
--
DELIMITER $$
CREATE TRIGGER `insert_temp_into_notif_table` AFTER INSERT ON `temperature` FOR EACH ROW BEGIN
  IF NEW.temp_readings > 25 THEN
    INSERT INTO notifications (notif_sname, cdate, readings, status) 
    VALUES (NEW.sensor_name, NEW.temp_cdate, NEW.temp_readings, NEW.status);
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `total_dissolved_solids`
--

CREATE TABLE `total_dissolved_solids` (
  `tds_id` int(11) NOT NULL,
  `sensor_name` varchar(12) NOT NULL DEFAULT 'Conductivity',
  `tds_cdate` datetime NOT NULL DEFAULT current_timestamp(),
  `tds_readings` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `total_dissolved_solids`
--

INSERT INTO `total_dissolved_solids` (`tds_id`, `sensor_name`, `tds_cdate`, `tds_readings`, `status`) VALUES
(7, 'Conductivity', '2023-08-19 15:37:48', 5, 1),
(8, 'Conductivity', '2023-08-19 15:37:58', 9, 1),
(9, 'Conductivity', '2023-08-19 15:38:38', 6, 1),
(10, 'Conductivity', '2023-08-19 15:38:50', 8, 1),
(11, 'Conductivity', '2023-08-19 15:39:01', 5, 1),
(12, 'Conductivity', '2023-08-19 15:42:12', 8, 1),
(13, 'Conductivity', '2023-08-19 15:44:01', 1000, 1),
(14, 'Conductivity', '2023-08-19 15:50:10', 950, 0),
(15, 'Conductivity', '2023-08-19 16:22:29', 2, 0),
(16, 'Conductivity', '2023-08-19 16:24:32', 0, 0),
(17, 'Conductivity', '2023-08-19 16:34:06', 0, 0),
(18, 'Conductivity', '2023-08-19 16:35:27', 400, 0),
(19, 'Conductivity', '2023-08-19 17:01:44', 450, 0),
(20, 'Conductivity', '2023-08-19 17:24:36', 500, 0),
(21, 'Conductivity', '2023-08-19 17:26:32', 1000, 0),
(22, 'Conductivity', '2023-08-19 17:27:54', 1000, 0),
(23, 'Conductivity', '2023-08-20 08:10:49', 1000, 0),
(24, 'Conductivity', '2023-08-20 08:11:48', 1000, 0),
(25, 'Conductivity', '2023-08-20 08:15:04', 1000, 0),
(26, 'Conductivity', '2023-08-20 08:26:57', 1000, 0),
(27, 'Conductivity', '2023-08-20 08:27:07', 1000, 0),
(28, 'Conductivity', '2023-08-20 08:27:37', 1000, 0),
(29, 'Conductivity', '2023-08-20 08:56:08', 1000, 0),
(30, 'Conductivity', '2023-08-20 08:56:34', 800, 0),
(31, 'Conductivity', '2023-08-20 09:08:26', 1000, 0),
(32, 'Conductivity', '2023-08-20 09:08:55', 800, 0),
(33, 'Conductivity', '2023-08-20 09:09:10', 1000, 0),
(34, 'Conductivity', '2023-11-13 09:59:35', 6, 0),
(35, 'Conductivity', '2023-11-13 09:59:50', 6, 0),
(36, 'Conductivity', '2023-11-14 06:58:40', 50, 0),
(37, 'Conductivity', '2023-11-15 11:07:17', 20, 0),
(38, 'Conductivity', '2023-11-15 11:33:55', 100, 0),
(39, 'Conductivity', '2023-11-15 11:36:07', 50, 0),
(40, 'Conductivity', '2023-11-20 18:53:28', 50, 0),
(41, 'Conductivity', '2023-11-20 19:12:14', 300, 0),
(42, 'Conductivity', '2023-11-20 19:28:14', 300, 0),
(43, 'Conductivity', '2023-11-20 19:32:32', 300, 0),
(44, 'Conductivity', '2023-11-20 19:32:41', 300, 0),
(45, 'Conductivity', '2023-11-20 19:33:27', 900, 0),
(46, 'Conductivity', '2023-11-20 19:37:19', 500, 0),
(47, 'Conductivity', '2023-11-20 20:45:35', 900, 0),
(48, 'Conductivity', '2023-11-20 21:02:02', 500, 0),
(49, 'Conductivity', '2023-11-20 21:16:19', 50, 0),
(50, 'Conductivity', '2023-11-21 11:26:45', 500, 0),
(51, 'Conductivity', '2023-12-26 18:46:57', 100, 0),
(52, 'Conductivity', '2023-12-27 12:05:19', 100, 0),
(53, 'Conductivity', '2023-12-27 12:06:54', 100, 0),
(54, 'Conductivity', '2023-12-27 12:07:16', 100, 0),
(55, 'Conductivity', '2023-12-27 12:07:38', 100, 0),
(56, 'Conductivity', '2023-12-27 12:07:53', 100, 0),
(57, 'Conductivity', '2023-12-27 12:08:11', 100, 0);

--
-- Triggers `total_dissolved_solids`
--
DELIMITER $$
CREATE TRIGGER `insert_into_tds` AFTER INSERT ON `total_dissolved_solids` FOR EACH ROW BEGIN
  IF NEW.tds_readings < 300 THEN
    INSERT INTO notifications (notif_sname, cdate, readings, status) 
    VALUES (NEW.sensor_name, NEW.tds_cdate, NEW.tds_readings, NEW.status);
  END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_into_tds_notif_table` AFTER INSERT ON `total_dissolved_solids` FOR EACH ROW BEGIN
  IF NEW.tds_readings > 500 THEN
    INSERT INTO notifications (notif_sname, cdate, readings, status) 
    VALUES (NEW.sensor_name, NEW.tds_cdate, NEW.tds_readings, NEW.status);
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Jessie Conn Ralph M. Sam', 'jessiesam@gmail.com', '$2y$10$Nqq/y251QX2Ccvb1Ax7hUuMqQSkG3yRLCxN2KPdetnSP3oaXVH70a'),
(6, 'sample', 'sample@gmail.com', '$2y$10$.uIjDB3CBBgmvcfkQ0hHO.QIpWzAck81Ms5SY.AC2XArwxoIXFRCG'),
(7, 'dianne', 'dianne@gmail.com', '$2y$10$EhyqbPNpWYDIhv1VXzFEiuO7/EuQV1/e5Ta1KeOLiG0M2oWAFHvAi');

-- --------------------------------------------------------

--
-- Table structure for table `waterflow`
--

CREATE TABLE `waterflow` (
  `flow_id` int(11) NOT NULL,
  `sensor_name` varchar(12) NOT NULL DEFAULT 'waterflow',
  `flow_cdate` datetime NOT NULL DEFAULT current_timestamp(),
  `flow_readings` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `waterflow`
--

INSERT INTO `waterflow` (`flow_id`, `sensor_name`, `flow_cdate`, `flow_readings`, `status`) VALUES
(11, 'waterflow', '2023-08-19 15:37:47', 2, 1),
(12, 'waterflow', '2023-08-19 15:37:58', 4, 1),
(13, 'waterflow', '2023-08-19 15:38:37', 10, 1),
(14, 'waterflow', '2023-08-19 15:38:50', 23, 1),
(15, 'waterflow', '2023-08-19 15:39:01', 2, 1),
(16, 'waterflow', '2023-08-19 15:42:12', 5, 1),
(17, 'waterflow', '2023-08-19 15:44:01', 0, 1),
(18, 'waterflow', '2023-08-19 15:50:10', 0, 0),
(19, 'waterflow', '2023-08-19 16:22:28', 2, 0),
(20, 'waterflow', '2023-08-19 16:24:32', 0, 0),
(21, 'waterflow', '2023-08-19 16:34:06', 7, 0),
(22, 'waterflow', '2023-08-19 16:35:26', 4, 0),
(23, 'waterflow', '2023-08-19 17:01:44', 4, 0),
(24, 'waterflow', '2023-08-19 17:24:35', 0, 0),
(25, 'waterflow', '2023-08-19 17:26:32', 14, 0),
(26, 'waterflow', '2023-08-19 17:27:54', 7, 0),
(27, 'waterflow', '2023-08-20 08:10:49', 4, 0),
(28, 'waterflow', '2023-08-20 08:11:48', 4, 0),
(29, 'waterflow', '2023-08-20 08:15:04', 2, 0),
(30, 'waterflow', '2023-08-20 08:26:57', 2, 0),
(31, 'waterflow', '2023-08-20 08:27:07', 4, 0),
(32, 'waterflow', '2023-08-20 08:27:36', 4, 0),
(33, 'waterflow', '2023-08-20 08:56:08', 4, 0),
(34, 'waterflow', '2023-08-20 08:56:34', 4, 0),
(35, 'waterflow', '2023-08-20 09:08:26', 4, 0),
(36, 'waterflow', '2023-08-20 09:08:55', 2, 0),
(37, 'waterflow', '2023-08-20 09:09:09', 4, 0),
(38, 'waterflow', '2023-11-13 09:59:35', 3, 0),
(39, 'waterflow', '2023-11-13 09:59:50', 9, 0),
(40, 'waterflow', '2023-11-14 06:58:40', 3, 0),
(41, 'waterflow', '2023-11-15 11:07:17', 4, 0),
(42, 'waterflow', '2023-11-15 11:33:55', 2, 0),
(43, 'waterflow', '2023-11-15 11:36:07', 3, 0),
(44, 'waterflow', '2023-11-20 18:53:28', 3, 0),
(45, 'waterflow', '2023-11-20 19:12:14', 5, 0),
(46, 'waterflow', '2023-11-20 19:28:14', 3, 0),
(47, 'waterflow', '2023-11-20 19:32:32', 3, 0),
(48, 'waterflow', '2023-11-20 19:32:41', 3, 0),
(49, 'waterflow', '2023-11-20 19:33:27', 3, 0),
(50, 'waterflow', '2023-11-20 19:37:19', 3, 0),
(51, 'waterflow', '2023-11-20 20:45:35', 3, 0),
(52, 'waterflow', '2023-11-20 21:02:02', 3, 0),
(53, 'waterflow', '2023-11-20 21:16:19', 3, 0),
(54, 'waterflow', '2023-11-21 11:26:45', 3, 0),
(55, 'waterflow', '2023-12-26 18:46:57', 3, 0),
(56, 'waterflow', '2023-12-27 12:05:19', 2, 0),
(57, 'waterflow', '2023-12-27 12:06:54', 3, 0),
(58, 'waterflow', '2023-12-27 12:07:16', 3, 0),
(59, 'waterflow', '2023-12-27 12:07:38', 3, 0),
(60, 'waterflow', '2023-12-27 12:07:53', 3, 0),
(61, 'waterflow', '2023-12-27 12:08:11', 3, 0);

--
-- Triggers `waterflow`
--
DELIMITER $$
CREATE TRIGGER `insert_into_waterflow_notif_table` AFTER INSERT ON `waterflow` FOR EACH ROW BEGIN
  IF NEW.flow_readings <= 1 THEN
    INSERT INTO notifications (notif_sname, cdate, readings, status) 
    VALUES (NEW.sensor_name, NEW.flow_cdate, NEW.flow_readings, NEW.status);
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `waterlevel`
--

CREATE TABLE `waterlevel` (
  `level_id` int(11) NOT NULL,
  `sensor_name` varchar(12) NOT NULL DEFAULT 'waterlevel',
  `level_cdate` datetime NOT NULL DEFAULT current_timestamp(),
  `level_readings` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `waterlevel`
--

INSERT INTO `waterlevel` (`level_id`, `sensor_name`, `level_cdate`, `level_readings`, `status`) VALUES
(11, 'waterlevel', '2023-08-19 15:37:48', 3, 1),
(12, 'waterlevel', '2023-08-19 15:37:58', 5, 1),
(13, 'waterlevel', '2023-08-19 15:38:37', 13, 1),
(14, 'waterlevel', '2023-08-19 15:38:50', 34, 1),
(15, 'waterlevel', '2023-08-19 15:39:01', 12, 1),
(16, 'waterlevel', '2023-08-19 15:42:12', 6, 1),
(17, 'waterlevel', '2023-08-19 15:44:01', 0, 1),
(18, 'waterlevel', '2023-08-19 15:50:10', 9, 0),
(19, 'waterlevel', '2023-08-19 16:22:28', 2, 0),
(20, 'waterlevel', '2023-08-19 16:24:32', 0, 0),
(21, 'waterlevel', '2023-08-19 16:34:06', 10, 0),
(22, 'waterlevel', '2023-08-19 16:35:26', 7, 0),
(23, 'waterlevel', '2023-08-19 17:01:44', 30, 0),
(24, 'waterlevel', '2023-08-19 17:24:35', 15, 0),
(25, 'waterlevel', '2023-08-19 17:26:32', 13, 0),
(26, 'waterlevel', '2023-08-19 17:27:54', 0, 0),
(27, 'waterlevel', '2023-08-20 08:10:49', 12, 0),
(28, 'waterlevel', '2023-08-20 08:11:48', 0, 0),
(29, 'waterlevel', '2023-08-20 08:15:04', 12, 0),
(30, 'waterlevel', '2023-08-20 08:26:57', 12, 0),
(31, 'waterlevel', '2023-08-20 08:27:07', 12, 0),
(32, 'waterlevel', '2023-08-20 08:27:37', 0, 0),
(33, 'waterlevel', '2023-08-20 08:56:08', 0, 0),
(34, 'waterlevel', '2023-08-20 08:56:34', 0, 0),
(35, 'waterlevel', '2023-08-20 09:08:26', 0, 0),
(36, 'waterlevel', '2023-08-20 09:08:55', 12, 0),
(37, 'waterlevel', '2023-08-20 09:09:09', 0, 0),
(38, 'waterlevel', '2023-11-13 09:59:35', 9, 0),
(39, 'waterlevel', '2023-11-13 09:59:50', 9, 0),
(40, 'waterlevel', '2023-11-14 06:58:40', 5, 0),
(41, 'waterlevel', '2023-11-15 11:07:17', 5, 0),
(42, 'waterlevel', '2023-11-15 11:33:55', 3, 0),
(43, 'waterlevel', '2023-11-15 11:36:07', 3, 0),
(44, 'waterlevel', '2023-11-20 18:53:28', 3, 0),
(45, 'waterlevel', '2023-11-20 19:12:14', 5, 0),
(46, 'waterlevel', '2023-11-20 19:28:14', 3, 0),
(47, 'waterlevel', '2023-11-20 19:32:32', 3, 0),
(48, 'waterlevel', '2023-11-20 19:32:41', 2, 0),
(49, 'waterlevel', '2023-11-20 19:33:27', 3, 0),
(50, 'waterlevel', '2023-11-20 19:37:19', 4, 0),
(51, 'waterlevel', '2023-11-20 20:45:35', 3, 0),
(52, 'waterlevel', '2023-11-20 21:02:02', 3, 0),
(53, 'waterlevel', '2023-11-20 21:16:19', 3, 0),
(54, 'waterlevel', '2023-11-21 11:26:45', 3, 0),
(55, 'waterlevel', '2023-12-26 18:46:57', 1, 0),
(56, 'waterlevel', '2023-12-27 12:05:19', 22, 0),
(57, 'waterlevel', '2023-12-27 12:06:54', 1, 0),
(58, 'waterlevel', '2023-12-27 12:07:16', 1, 0),
(59, 'waterlevel', '2023-12-27 12:07:38', 1, 0),
(60, 'waterlevel', '2023-12-27 12:07:53', 1, 0),
(61, 'waterlevel', '2023-12-27 12:08:11', 1, 0);

--
-- Triggers `waterlevel`
--
DELIMITER $$
CREATE TRIGGER `insert_into_level_notif_table` AFTER INSERT ON `waterlevel` FOR EACH ROW BEGIN
  IF NEW.level_readings <= 10 THEN
    INSERT INTO notifications (notif_sname, cdate, readings, status) 
    VALUES (NEW.sensor_name, NEW.level_cdate, NEW.level_readings, NEW.status);
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure for view `combined_readings_view`
--
DROP TABLE IF EXISTS `combined_readings_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `combined_readings_view`  AS SELECT `total_dissolved_solids`.`tds_id` AS `reading_id`, `total_dissolved_solids`.`sensor_name` AS `sensor_name`, `total_dissolved_solids`.`tds_cdate` AS `reading_cdate`, `total_dissolved_solids`.`tds_readings` AS `reading_value`, 'Total Dissolved Solids' AS `reading_type`, CASE WHEN `total_dissolved_solids`.`tds_readings` <= 50 THEN 15 WHEN `total_dissolved_solids`.`tds_readings` >= 51 AND `total_dissolved_solids`.`tds_readings` <= 100 THEN 38 WHEN `total_dissolved_solids`.`tds_readings` >= 101 AND `total_dissolved_solids`.`tds_readings` <= 200 THEN 49 WHEN `total_dissolved_solids`.`tds_readings` >= 201 AND `total_dissolved_solids`.`tds_readings` <= 300 THEN 56 WHEN `total_dissolved_solids`.`tds_readings` >= 301 AND `total_dissolved_solids`.`tds_readings` <= 400 THEN 73 WHEN `total_dissolved_solids`.`tds_readings` >= 401 AND `total_dissolved_solids`.`tds_readings` <= 500 THEN 86 WHEN `total_dissolved_solids`.`tds_readings` >= 501 AND `total_dissolved_solids`.`tds_readings` <= 600 THEN 93 WHEN `total_dissolved_solids`.`tds_readings` >= 601 AND `total_dissolved_solids`.`tds_readings` <= 650 THEN 96 WHEN `total_dissolved_solids`.`tds_readings` >= 651 AND `total_dissolved_solids`.`tds_readings` <= 710 THEN 95 ELSE 17 END AS `weighted_value` FROM `total_dissolved_solids`union all select `acidity`.`acid_id` AS `reading_id`,`acidity`.`sensor_name` AS `sensor_name`,`acidity`.`acid_cdate` AS `reading_cdate`,`acidity`.`acid_readings` AS `reading_value`,'Acidity' AS `reading_type`,case when `acidity`.`acid_readings` = 1 then 10 when `acidity`.`acid_readings` = 2 then 20 when `acidity`.`acid_readings` = 3 then 30 when `acidity`.`acid_readings` = 4 then 60 when `acidity`.`acid_readings` = 5 then 80 when `acidity`.`acid_readings` = 6 then 90 when `acidity`.`acid_readings` = 7 then 97 when `acidity`.`acid_readings` = 8 then 90 when `acidity`.`acid_readings` = 9 then 80 when `acidity`.`acid_readings` = 10 then 60 when `acidity`.`acid_readings` = 11 then 40 when `acidity`.`acid_readings` = 12 then 30 when `acidity`.`acid_readings` = 13 then 20 when `acidity`.`acid_readings` = 14 then 10 else 0 end AS `weighted_value` from `acidity` union all select `temperature`.`temp_id` AS `reading_id`,`temperature`.`sensor_name` AS `sensor_name`,`temperature`.`temp_cdate` AS `reading_cdate`,`temperature`.`temp_readings` AS `reading_value`,'Temperature' AS `reading_type`,case when `temperature`.`temp_readings` = 25 then 95 when `temperature`.`temp_readings` >= 21 and `temperature`.`temp_readings` < 25 then 90 when `temperature`.`temp_readings` >= 18 and `temperature`.`temp_readings` < 21 then 75 when `temperature`.`temp_readings` > 15 and `temperature`.`temp_readings` <= 18 then 35 when `temperature`.`temp_readings` < 15 then 15 when `temperature`.`temp_readings` >= 26 and `temperature`.`temp_readings` <= 30 then 92 when `temperature`.`temp_readings` >= 31 and `temperature`.`temp_readings` <= 35 then 87 when `temperature`.`temp_readings` >= 36 and `temperature`.`temp_readings` <= 40 then 45 else 14 end AS `weighted_value` from `temperature`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acidity`
--
ALTER TABLE `acidity`
  ADD PRIMARY KEY (`acid_id`);

--
-- Indexes for table `average`
--
ALTER TABLE `average`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temperature`
--
ALTER TABLE `temperature`
  ADD PRIMARY KEY (`temp_id`);

--
-- Indexes for table `total_dissolved_solids`
--
ALTER TABLE `total_dissolved_solids`
  ADD PRIMARY KEY (`tds_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waterflow`
--
ALTER TABLE `waterflow`
  ADD PRIMARY KEY (`flow_id`);

--
-- Indexes for table `waterlevel`
--
ALTER TABLE `waterlevel`
  ADD PRIMARY KEY (`level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acidity`
--
ALTER TABLE `acidity`
  MODIFY `acid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `average`
--
ALTER TABLE `average`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `temperature`
--
ALTER TABLE `temperature`
  MODIFY `temp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `total_dissolved_solids`
--
ALTER TABLE `total_dissolved_solids`
  MODIFY `tds_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `waterflow`
--
ALTER TABLE `waterflow`
  MODIFY `flow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `waterlevel`
--
ALTER TABLE `waterlevel`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
