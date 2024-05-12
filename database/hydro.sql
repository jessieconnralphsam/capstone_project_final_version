-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 08:47 AM
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
(119, 'Acidity', '2024-04-09 06:38:09', 2, 0, 'Added 2ml of pH-Up Solution'),
(120, 'Acidity', '2024-04-09 06:38:25', 4, 0, 'Added 2ml of pH-Up Solution'),
(121, 'Acidity', '2024-04-09 06:38:43', 7, 0, 'No Action'),
(122, 'Acidity', '2024-04-09 06:38:51', 3, 0, 'Added 2ml of pH-Up Solution'),
(123, 'Acidity', '2024-04-09 06:38:58', 3, 0, 'Added 2ml of pH-Up Solution'),
(124, 'Acidity', '2024-04-09 06:39:06', 5, 0, 'Added 2ml of pH-Up Solution'),
(125, 'Acidity', '2024-04-09 08:28:59', 9, 0, 'Added 2ml of pH-Down Solution'),
(126, 'Acidity', '2024-04-09 08:29:19', 6, 0, 'Added 2ml of pH-Up Solution'),
(127, 'Acidity', '2024-04-09 08:29:41', 7, 0, 'No Action'),
(128, 'Acidity', '2024-04-09 08:30:03', 9, 0, 'Added 2ml of pH-Down Solution'),
(129, 'Acidity', '2024-04-09 08:30:24', 5, 0, 'Added 2ml of pH-Up Solution'),
(130, 'Acidity', '2024-04-09 08:30:46', 4, 0, 'Added 2ml of pH-Up Solution'),
(131, 'Acidity', '2024-04-09 08:31:07', 9, 0, 'Added 2ml of pH-Down Solution'),
(132, 'Acidity', '2024-04-09 08:31:29', 4, 0, 'Added 2ml of pH-Up Solution'),
(133, 'Acidity', '2024-04-09 08:31:51', 7, 0, 'No Action'),
(134, 'Acidity', '2024-04-09 08:32:12', 7, 0, 'No Action'),
(135, 'Acidity', '2024-04-09 08:32:34', 4, 0, 'Added 2ml of pH-Up Solution'),
(136, 'Acidity', '2024-04-09 08:32:56', 7, 0, 'No Action'),
(137, 'Acidity', '2024-04-09 08:35:04', 7, 0, 'No Action'),
(138, 'Acidity', '2024-04-09 08:35:25', 7, 0, 'No Action'),
(139, 'Acidity', '2024-04-09 08:35:47', 10, 0, 'Added 2ml of pH-Down Solution'),
(140, 'Acidity', '2024-04-09 08:36:09', 8, 0, 'Added 2ml of pH-Down Solution'),
(141, 'Acidity', '2024-04-09 08:36:30', 5, 0, 'Added 2ml of pH-Up Solution'),
(142, 'Acidity', '2024-04-09 08:36:52', 9, 0, 'Added 2ml of pH-Down Solution'),
(143, 'Acidity', '2024-04-09 08:37:14', 14, 0, 'Added 2ml of pH-Down Solution'),
(144, 'Acidity', '2024-04-09 08:37:35', 14, 0, 'Added 2ml of pH-Down Solution'),
(145, 'Acidity', '2024-04-09 08:37:57', 10, 0, 'Added 2ml of pH-Down Solution'),
(146, 'Acidity', '2024-04-09 08:38:19', 10, 0, 'Added 2ml of pH-Down Solution'),
(147, 'Acidity', '2024-04-09 08:38:40', 6, 0, 'Added 2ml of pH-Up Solution'),
(148, 'Acidity', '2024-04-09 08:39:02', 13, 0, 'Added 2ml of pH-Down Solution'),
(149, 'Acidity', '2024-04-09 08:52:59', 10, 0, 'Added 2ml of pH-Down Solution'),
(150, 'Acidity', '2024-04-09 08:53:27', 8, 0, 'Added 2ml of pH-Down Solution'),
(151, 'Acidity', '2024-04-09 08:53:54', 13, 0, 'Added 2ml of pH-Down Solution'),
(152, 'Acidity', '2024-04-09 08:54:22', 12, 0, 'Added 2ml of pH-Down Solution'),
(153, 'Acidity', '2024-04-09 08:54:50', 6, 0, 'Added 2ml of pH-Up Solution'),
(154, 'Acidity', '2024-04-09 08:55:17', 14, 0, 'Added 2ml of pH-Down Solution'),
(155, 'Acidity', '2024-04-09 08:55:45', 7, 0, 'No Action'),
(156, 'Acidity', '2024-04-09 08:56:13', 9, 0, 'Added 2ml of pH-Down Solution'),
(157, 'Acidity', '2024-04-09 08:56:40', 15, 0, 'Added 2ml of pH-Down Solution'),
(158, 'Acidity', '2024-04-09 08:57:08', 7, 0, 'No Action'),
(159, 'Acidity', '2024-04-09 08:57:36', 13, 0, 'Added 2ml of pH-Down Solution'),
(160, 'Acidity', '2024-04-09 08:58:03', 11, 0, 'Added 2ml of pH-Down Solution'),
(161, 'Acidity', '2024-04-09 08:58:31', 10, 0, 'Added 2ml of pH-Down Solution'),
(162, 'Acidity', '2024-04-09 08:58:59', 8, 0, 'Added 2ml of pH-Down Solution'),
(163, 'Acidity', '2024-04-09 08:59:26', 8, 0, 'Added 2ml of pH-Down Solution'),
(164, 'Acidity', '2024-04-09 08:59:54', 8, 0, 'Added 2ml of pH-Down Solution'),
(165, 'Acidity', '2024-04-09 09:00:22', 8, 0, 'Added 2ml of pH-Down Solution'),
(166, 'Acidity', '2024-04-09 09:00:49', 8, 0, 'Added 2ml of pH-Down Solution'),
(167, 'Acidity', '2024-04-09 09:01:17', 8, 0, 'Added 2ml of pH-Down Solution'),
(168, 'Acidity', '2024-04-09 09:01:45', 8, 0, 'Added 2ml of pH-Down Solution'),
(169, 'Acidity', '2024-04-10 02:20:00', 8, 0, 'Added 2ml of pH-Down Solution'),
(170, 'Acidity', '2024-04-10 02:22:28', 7, 0, 'No Action'),
(171, 'Acidity', '2024-04-10 03:33:57', 8, 0, 'Added 2ml of pH-Down Solution'),
(172, 'Acidity', '2024-04-10 03:46:14', 4, 0, 'Added 2ml of pH-Up Solution'),
(173, 'Acidity', '2024-04-10 03:46:35', 4, 0, 'Added 2ml of pH-Up Solution'),
(174, 'Acidity', '2024-04-10 03:48:38', 3, 0, 'Added 2ml of pH-Up Solution'),
(175, 'Acidity', '2024-04-10 03:59:52', 3, 0, 'Added 2ml of pH-Up Solution'),
(176, 'Acidity', '2024-04-10 04:00:05', 3, 0, 'Added 2ml of pH-Up Solution'),
(177, 'Acidity', '2024-04-10 04:03:19', 4, 0, 'Added 2ml of pH-Up Solution'),
(178, 'Acidity', '2024-04-10 04:05:47', 2, 0, 'Added 2ml of pH-Up Solution'),
(179, 'Acidity', '2024-04-10 04:16:16', 4, 0, 'Added 2ml of pH-Up Solution'),
(180, 'Acidity', '2024-04-10 04:17:16', 4, 0, 'Added 2ml of pH-Up Solution'),
(181, 'Acidity', '2024-04-10 04:17:54', 4, 0, 'Added 2ml of pH-Up Solution'),
(182, 'Acidity', '2024-04-10 04:18:21', 4, 0, 'Added 2ml of pH-Up Solution'),
(183, 'Acidity', '2024-04-10 04:19:02', 4, 0, 'Added 2ml of pH-Up Solution'),
(184, 'Acidity', '2024-04-10 04:19:17', 4, 0, 'Added 2ml of pH-Up Solution'),
(185, 'Acidity', '2024-04-10 04:19:45', 4, 0, 'Added 2ml of pH-Up Solution'),
(186, 'Acidity', '2024-04-10 04:22:33', 4, 0, 'Added 2ml of pH-Up Solution'),
(187, 'Acidity', '2024-04-11 00:22:24', 8, 0, 'Added 2ml of pH-Down Solution'),
(188, 'Acidity', '2024-04-11 00:23:14', 8, 0, 'Added 2ml of pH-Down Solution'),
(189, 'Acidity', '2024-04-13 15:58:58', 7, 0, 'No Action'),
(190, 'Acidity', '2024-04-13 16:14:36', 8, 0, 'Added 2ml of pH-Down Solution'),
(191, 'Acidity', '2024-04-13 16:15:35', 4, 0, 'Added 2ml of pH-Up Solution'),
(192, 'Acidity', '2024-04-13 16:18:03', 4, 0, 'Added 2ml of pH-Up Solution'),
(193, 'Acidity', '2024-04-13 17:57:27', 8, 0, 'Added 2ml of pH-Down Solution'),
(194, 'Acidity', '2024-04-13 18:03:21', 7, 0, 'No Action'),
(195, 'Acidity', '2024-04-16 11:02:42', 8, 0, 'Added 2ml of pH-Down Solution'),
(196, 'Acidity', '2024-04-16 11:18:07', 8, 0, 'Added 2ml of pH-Down Solution'),
(197, 'Acidity', '2024-04-16 11:28:10', 7, 0, 'No Action'),
(198, 'Acidity', '2024-04-16 11:31:23', 9, 0, 'Added 2ml of pH-Down Solution'),
(199, 'Acidity', '2024-04-16 11:31:51', 8, 0, 'Added 2ml of pH-Down Solution'),
(200, 'Acidity', '2024-04-19 12:39:43', 7, 0, 'No Action'),
(201, 'Acidity', '2024-04-19 12:41:31', 7, 0, 'No Action'),
(202, 'Acidity', '2024-04-19 12:41:32', 7, 0, 'No Action'),
(203, 'Acidity', '2024-04-19 15:23:29', 7, 0, 'No Action'),
(204, 'Acidity', '2024-04-20 15:49:51', 21, 0, 'Added 2ml of pH-Down Solution'),
(205, 'Acidity', '2024-04-20 15:50:37', 21, 0, 'Added 2ml of pH-Down Solution'),
(206, 'Acidity', '2024-04-20 15:51:22', 21, 0, 'Added 2ml of pH-Down Solution'),
(207, 'Acidity', '2024-04-20 15:52:08', 21, 0, 'Added 2ml of pH-Down Solution'),
(208, 'Acidity', '2024-04-21 06:25:51', 7, 0, 'No Action'),
(209, 'Acidity', '2024-04-21 06:44:39', 20, 0, 'Added 2ml of pH-Down Solution'),
(210, 'Acidity', '2024-04-21 06:45:24', 20, 0, 'Added 2ml of pH-Down Solution'),
(211, 'Acidity', '2024-04-21 06:46:10', 20, 0, 'Added 2ml of pH-Down Solution'),
(212, 'Acidity', '2024-04-21 06:52:20', 20, 0, 'Added 2ml of pH-Down Solution'),
(213, 'Acidity', '2024-04-21 06:53:05', 20, 0, 'Added 2ml of pH-Down Solution'),
(214, 'Acidity', '2024-04-21 07:03:36', 20, 0, 'Added 2ml of pH-Down Solution'),
(215, 'Acidity', '2024-04-21 07:07:33', 20, 0, 'Added 2ml of pH-Down Solution'),
(216, 'Acidity', '2024-04-21 07:08:19', 20, 0, 'Added 2ml of pH-Down Solution'),
(217, 'Acidity', '2024-04-21 11:38:35', 21, 0, 'Added 2ml of pH-Down Solution'),
(218, 'Acidity', '2024-04-21 11:39:21', 21, 0, 'Added 2ml of pH-Down Solution'),
(219, 'Acidity', '2024-04-21 11:40:06', 21, 0, 'Added 2ml of pH-Down Solution'),
(220, 'Acidity', '2024-04-21 11:40:52', 21, 0, 'Added 2ml of pH-Down Solution'),
(221, 'Acidity', '2024-04-21 11:41:38', 21, 0, 'Added 2ml of pH-Down Solution'),
(222, 'Acidity', '2024-04-21 11:42:23', 21, 0, 'Added 2ml of pH-Down Solution'),
(223, 'Acidity', '2024-04-21 11:43:09', 21, 0, 'Added 2ml of pH-Down Solution'),
(224, 'Acidity', '2024-04-21 11:43:55', 21, 0, 'Added 2ml of pH-Down Solution'),
(225, 'Acidity', '2024-04-21 11:44:40', 21, 0, 'Added 2ml of pH-Down Solution'),
(226, 'Acidity', '2024-04-22 13:58:47', 21, 0, 'Added 2ml of pH-Down Solution'),
(227, 'Acidity', '2024-04-22 14:05:13', 21, 0, 'Added 2ml of pH-Down Solution'),
(228, 'Acidity', '2024-04-22 14:15:26', -11, 0, 'Added 2ml of pH-Up Solution'),
(229, 'Acidity', '2024-04-22 14:46:27', 6, 0, 'Added 2ml of pH-Up Solution'),
(230, 'Acidity', '2024-04-22 14:48:00', 6, 0, 'Added 2ml of pH-Up Solution'),
(231, 'Acidity', '2024-04-22 14:49:33', 6, 0, 'Added 2ml of pH-Up Solution'),
(232, 'Acidity', '2024-04-22 14:51:05', 6, 0, 'Added 2ml of pH-Up Solution'),
(233, 'Acidity', '2024-04-22 16:16:22', 23, 0, 'Added 2ml of pH-Down Solution'),
(234, 'Acidity', '2024-04-22 16:17:50', 23, 0, 'Added 2ml of pH-Down Solution'),
(235, 'Acidity', '2024-04-22 16:19:17', 23, 0, 'Added 2ml of pH-Down Solution'),
(236, 'Acidity', '2024-04-22 16:20:45', 23, 0, 'Added 2ml of pH-Down Solution'),
(237, 'Acidity', '2024-04-22 16:22:13', 23, 0, 'Added 2ml of pH-Down Solution'),
(238, 'Acidity', '2024-04-22 16:23:40', 23, 0, 'Added 2ml of pH-Down Solution'),
(239, 'Acidity', '2024-04-22 16:25:08', 23, 0, 'Added 2ml of pH-Down Solution'),
(240, 'Acidity', '2024-04-22 16:26:36', 23, 0, 'Added 2ml of pH-Down Solution'),
(241, 'Acidity', '2024-04-22 16:28:04', 23, 0, 'Added 2ml of pH-Down Solution'),
(242, 'Acidity', '2024-04-22 16:29:31', 23, 0, 'Added 2ml of pH-Down Solution'),
(243, 'Acidity', '2024-04-22 16:30:59', 23, 0, 'Added 2ml of pH-Down Solution'),
(244, 'Acidity', '2024-04-22 16:32:27', 23, 0, 'Added 2ml of pH-Down Solution'),
(245, 'Acidity', '2024-04-22 16:33:54', 23, 0, 'Added 2ml of pH-Down Solution'),
(246, 'Acidity', '2024-04-22 16:39:01', 6, 0, 'Added 2ml of pH-Up Solution'),
(247, 'Acidity', '2024-04-22 16:40:34', 6, 0, 'Added 2ml of pH-Up Solution'),
(248, 'Acidity', '2024-04-22 16:42:06', 6, 0, 'Added 2ml of pH-Up Solution'),
(249, 'Acidity', '2024-04-22 16:44:53', 6, 0, 'Added 2ml of pH-Up Solution'),
(250, 'Acidity', '2024-04-22 16:46:42', 6, 0, 'Added 2ml of pH-Up Solution'),
(251, 'Acidity', '2024-04-22 16:48:31', 6, 0, 'Added 2ml of pH-Up Solution'),
(252, 'Acidity', '2024-04-22 16:50:20', 6, 0, 'Added 2ml of pH-Up Solution'),
(253, 'Acidity', '2024-05-09 20:47:50', 9, 0, 'Added 2ml of pH-Down Solution'),
(254, 'Acidity', '2024-05-09 20:57:47', 9, 0, 'Added 2ml of pH-Down Solution');

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
(287, 'waterlevel', '2024-04-09 06:38:09', 2, 1),
(288, 'Acidity', '2024-04-09 06:38:09', 2, 1),
(289, 'Conductivity', '2024-04-09 06:38:09', 2, 1),
(290, 'waterlevel', '2024-04-09 06:38:25', 2, 1),
(291, 'Acidity', '2024-04-09 06:38:25', 4, 1),
(292, 'Conductivity', '2024-04-09 06:38:25', 31, 1),
(293, 'Temperature', '2024-04-09 06:38:25', 38, 1),
(294, 'waterlevel', '2024-04-09 06:38:43', 3, 1),
(295, 'Conductivity', '2024-04-09 06:38:43', 200, 1),
(296, 'Temperature', '2024-04-09 06:38:43', 35, 1),
(297, 'waterlevel', '2024-04-09 06:38:51', 3, 1),
(298, 'Acidity', '2024-04-09 06:38:51', 3, 1),
(299, 'Conductivity', '2024-04-09 06:38:51', 3, 1),
(300, 'waterlevel', '2024-04-09 06:38:58', 3, 1),
(301, 'Acidity', '2024-04-09 06:38:58', 3, 1),
(302, 'Conductivity', '2024-04-09 06:38:58', 3, 1),
(303, 'waterlevel', '2024-04-09 06:39:06', 5, 1),
(304, 'Acidity', '2024-04-09 06:39:06', 5, 1),
(305, 'Conductivity', '2024-04-09 06:39:06', 5, 1),
(306, 'waterlevel', '2024-04-09 08:28:59', 1, 1),
(307, 'Acidity', '2024-04-09 08:28:59', 9, 1),
(308, 'Conductivity', '2024-04-09 08:28:59', 0, 1),
(309, 'waterlevel', '2024-04-09 08:29:19', 0, 1),
(310, 'Acidity', '2024-04-09 08:29:19', 6, 1),
(311, 'Conductivity', '2024-04-09 08:29:19', 0, 1),
(312, 'waterlevel', '2024-04-09 08:29:41', 1, 1),
(313, 'Conductivity', '2024-04-09 08:29:41', 0, 1),
(314, 'waterlevel', '2024-04-09 08:30:03', 0, 1),
(315, 'Acidity', '2024-04-09 08:30:03', 9, 1),
(316, 'Conductivity', '2024-04-09 08:30:03', 0, 1),
(317, 'waterlevel', '2024-04-09 08:30:24', 1, 1),
(318, 'Acidity', '2024-04-09 08:30:24', 5, 1),
(319, 'Conductivity', '2024-04-09 08:30:24', 0, 1),
(320, 'waterlevel', '2024-04-09 08:30:46', 0, 1),
(321, 'Acidity', '2024-04-09 08:30:46', 4, 1),
(322, 'Conductivity', '2024-04-09 08:30:46', 0, 1),
(323, 'waterlevel', '2024-04-09 08:31:07', 0, 1),
(324, 'Acidity', '2024-04-09 08:31:07', 9, 1),
(325, 'Conductivity', '2024-04-09 08:31:07', 0, 1),
(326, 'waterlevel', '2024-04-09 08:31:29', 1, 1),
(327, 'Acidity', '2024-04-09 08:31:29', 4, 1),
(328, 'Conductivity', '2024-04-09 08:31:29', 0, 1),
(329, 'waterlevel', '2024-04-09 08:31:51', 0, 1),
(330, 'Conductivity', '2024-04-09 08:31:51', 0, 1),
(331, 'waterlevel', '2024-04-09 08:32:12', 1, 1),
(332, 'Conductivity', '2024-04-09 08:32:12', 0, 1),
(333, 'waterlevel', '2024-04-09 08:32:34', 1, 1),
(334, 'Acidity', '2024-04-09 08:32:34', 4, 1),
(335, 'Conductivity', '2024-04-09 08:32:34', 0, 1),
(336, 'waterlevel', '2024-04-09 08:32:56', 2, 1),
(337, 'Conductivity', '2024-04-09 08:32:56', 0, 1),
(338, 'waterlevel', '2024-04-09 08:35:04', 0, 1),
(339, 'Conductivity', '2024-04-09 08:35:04', 0, 1),
(340, 'waterlevel', '2024-04-09 08:35:25', 0, 1),
(341, 'Conductivity', '2024-04-09 08:35:25', 0, 1),
(342, 'waterlevel', '2024-04-09 08:35:47', 0, 1),
(343, 'Acidity', '2024-04-09 08:35:47', 10, 1),
(344, 'Conductivity', '2024-04-09 08:35:47', 0, 1),
(345, 'waterlevel', '2024-04-09 08:36:09', 0, 1),
(346, 'Acidity', '2024-04-09 08:36:09', 8, 1),
(347, 'Conductivity', '2024-04-09 08:36:09', 0, 1),
(348, 'waterlevel', '2024-04-09 08:36:30', 1, 1),
(349, 'Acidity', '2024-04-09 08:36:30', 5, 1),
(350, 'Conductivity', '2024-04-09 08:36:30', 0, 1),
(351, 'waterlevel', '2024-04-09 08:36:52', 1, 1),
(352, 'Acidity', '2024-04-09 08:36:52', 9, 1),
(353, 'Conductivity', '2024-04-09 08:36:52', 0, 1),
(354, 'waterlevel', '2024-04-09 08:37:14', 6, 1),
(355, 'Acidity', '2024-04-09 08:37:14', 14, 1),
(356, 'Conductivity', '2024-04-09 08:37:14', 0, 1),
(357, 'waterlevel', '2024-04-09 08:37:35', 5, 1),
(358, 'Acidity', '2024-04-09 08:37:35', 14, 1),
(359, 'Conductivity', '2024-04-09 08:37:35', 0, 1),
(360, 'waterlevel', '2024-04-09 08:37:57', 4, 1),
(361, 'Acidity', '2024-04-09 08:37:57', 10, 1),
(362, 'Conductivity', '2024-04-09 08:37:57', 0, 1),
(363, 'waterlevel', '2024-04-09 08:38:19', 3, 1),
(364, 'Acidity', '2024-04-09 08:38:19', 10, 1),
(365, 'Conductivity', '2024-04-09 08:38:19', 0, 1),
(366, 'waterlevel', '2024-04-09 08:38:40', 4, 1),
(367, 'Acidity', '2024-04-09 08:38:40', 6, 1),
(368, 'Conductivity', '2024-04-09 08:38:40', 0, 1),
(369, 'waterlevel', '2024-04-09 08:39:02', 4, 1),
(370, 'Acidity', '2024-04-09 08:39:02', 13, 1),
(371, 'Conductivity', '2024-04-09 08:39:02', 0, 1),
(372, 'waterlevel', '2024-04-09 08:52:59', 10, 1),
(373, 'Acidity', '2024-04-09 08:52:59', 10, 1),
(374, 'Conductivity', '2024-04-09 08:52:59', 0, 1),
(375, 'Temperature', '2024-04-09 08:52:59', 26, 1),
(376, 'waterlevel', '2024-04-09 08:53:27', 2, 1),
(377, 'Acidity', '2024-04-09 08:53:27', 8, 1),
(378, 'Conductivity', '2024-04-09 08:53:27', 0, 1),
(379, 'Temperature', '2024-04-09 08:53:27', 26, 1),
(380, 'waterlevel', '2024-04-09 08:53:54', 4, 1),
(381, 'Acidity', '2024-04-09 08:53:54', 13, 1),
(382, 'Conductivity', '2024-04-09 08:53:54', 0, 1),
(383, 'Temperature', '2024-04-09 08:53:54', 26, 1),
(384, 'waterlevel', '2024-04-09 08:54:22', 2, 1),
(385, 'Acidity', '2024-04-09 08:54:22', 12, 1),
(386, 'Conductivity', '2024-04-09 08:54:22', 0, 1),
(387, 'Temperature', '2024-04-09 08:54:22', 26, 1),
(388, 'waterlevel', '2024-04-09 08:54:50', 3, 1),
(389, 'Acidity', '2024-04-09 08:54:50', 6, 1),
(390, 'Conductivity', '2024-04-09 08:54:50', 0, 1),
(391, 'Temperature', '2024-04-09 08:54:50', 26, 1),
(392, 'waterlevel', '2024-04-09 08:55:17', 2, 1),
(393, 'Acidity', '2024-04-09 08:55:17', 14, 1),
(394, 'Conductivity', '2024-04-09 08:55:17', 0, 1),
(395, 'Temperature', '2024-04-09 08:55:17', 26, 1),
(396, 'waterlevel', '2024-04-09 08:55:45', 5, 1),
(397, 'Conductivity', '2024-04-09 08:55:45', 0, 1),
(398, 'Temperature', '2024-04-09 08:55:45', 26, 1),
(399, 'waterlevel', '2024-04-09 08:56:13', 9, 1),
(400, 'Acidity', '2024-04-09 08:56:13', 9, 1),
(401, 'Conductivity', '2024-04-09 08:56:13', 0, 1),
(402, 'Temperature', '2024-04-09 08:56:13', 26, 1),
(403, 'waterlevel', '2024-04-09 08:56:40', 10, 1),
(404, 'Acidity', '2024-04-09 08:56:40', 15, 1),
(405, 'Conductivity', '2024-04-09 08:56:40', 0, 1),
(406, 'Temperature', '2024-04-09 08:56:40', 26, 1),
(407, 'waterlevel', '2024-04-09 08:57:08', 1, 1),
(408, 'Conductivity', '2024-04-09 08:57:08', 0, 1),
(409, 'Temperature', '2024-04-09 08:57:08', 27, 1),
(410, 'Acidity', '2024-04-09 08:57:36', 13, 1),
(411, 'Conductivity', '2024-04-09 08:57:36', 0, 1),
(412, 'Temperature', '2024-04-09 08:57:36', 27, 1),
(413, 'Acidity', '2024-04-09 08:58:03', 11, 1),
(414, 'Conductivity', '2024-04-09 08:58:03', 0, 1),
(415, 'Temperature', '2024-04-09 08:58:03', 27, 1),
(416, 'Acidity', '2024-04-09 08:58:31', 10, 1),
(417, 'Conductivity', '2024-04-09 08:58:31', 0, 1),
(418, 'Temperature', '2024-04-09 08:58:31', 27, 1),
(419, 'waterlevel', '2024-04-09 08:58:59', 3, 1),
(420, 'Acidity', '2024-04-09 08:58:59', 8, 1),
(421, 'Conductivity', '2024-04-09 08:58:59', 0, 1),
(422, 'Temperature', '2024-04-09 08:58:59', 27, 1),
(423, 'waterlevel', '2024-04-09 08:59:26', 3, 1),
(424, 'Acidity', '2024-04-09 08:59:26', 8, 1),
(425, 'Conductivity', '2024-04-09 08:59:26', 0, 1),
(426, 'Temperature', '2024-04-09 08:59:26', 27, 1),
(427, 'waterlevel', '2024-04-09 08:59:54', 3, 1),
(428, 'Acidity', '2024-04-09 08:59:54', 8, 1),
(429, 'Conductivity', '2024-04-09 08:59:54', 563, 1),
(430, 'Temperature', '2024-04-09 08:59:54', 27, 1),
(431, 'waterlevel', '2024-04-09 09:00:22', 3, 1),
(432, 'Acidity', '2024-04-09 09:00:22', 8, 1),
(433, 'Conductivity', '2024-04-09 09:00:22', 1835, 1),
(434, 'Temperature', '2024-04-09 09:00:22', 27, 1),
(435, 'waterlevel', '2024-04-09 09:00:49', 4, 1),
(436, 'Acidity', '2024-04-09 09:00:49', 8, 1),
(437, 'Conductivity', '2024-04-09 09:00:49', 1835, 1),
(438, 'Temperature', '2024-04-09 09:00:49', 27, 1),
(439, 'waterlevel', '2024-04-09 09:01:17', 3, 1),
(440, 'Acidity', '2024-04-09 09:01:17', 8, 1),
(441, 'Conductivity', '2024-04-09 09:01:17', 1843, 1),
(442, 'Temperature', '2024-04-09 09:01:17', 27, 1),
(443, 'waterlevel', '2024-04-09 09:01:45', 2, 1),
(444, 'Acidity', '2024-04-09 09:01:45', 8, 1),
(445, 'Conductivity', '2024-04-09 09:01:45', 1843, 1),
(446, 'Temperature', '2024-04-09 09:01:45', 27, 1),
(447, 'waterlevel', '2024-04-10 02:20:00', 2, 1),
(448, 'Acidity', '2024-04-10 02:20:00', 8, 1),
(449, 'Conductivity', '2024-04-10 02:20:00', 1843, 1),
(450, 'Temperature', '2024-04-10 02:20:00', 32, 1),
(451, 'waterlevel', '2024-04-10 02:22:28', 2, 1),
(452, 'Conductivity', '2024-04-10 02:22:28', 1843, 1),
(453, 'Temperature', '2024-04-10 02:22:28', 30, 1),
(454, 'waterlevel', '2024-04-10 03:33:57', 4, 1),
(455, 'Acidity', '2024-04-10 03:33:57', 8, 1),
(456, 'Conductivity', '2024-04-10 03:33:57', 1843, 1),
(457, 'Temperature', '2024-04-10 03:33:57', 32, 1),
(458, 'waterlevel', '2024-04-10 03:46:14', 4, 1),
(459, 'Acidity', '2024-04-10 03:46:14', 4, 1),
(460, 'Conductivity', '2024-04-10 03:46:14', 1843, 1),
(461, 'Temperature', '2024-04-10 03:46:14', 32, 1),
(462, 'waterlevel', '2024-04-10 03:46:35', 4, 1),
(463, 'Acidity', '2024-04-10 03:46:35', 4, 1),
(464, 'Conductivity', '2024-04-10 03:46:35', 1843, 1),
(465, 'Temperature', '2024-04-10 03:46:35', 32, 1),
(466, 'waterlevel', '2024-04-10 03:48:38', 4, 1),
(467, 'Acidity', '2024-04-10 03:48:38', 3, 1),
(468, 'Conductivity', '2024-04-10 03:48:38', 1843, 1),
(469, 'Temperature', '2024-04-10 03:48:38', 32, 1),
(470, 'waterlevel', '2024-04-10 03:59:52', 4, 1),
(471, 'Acidity', '2024-04-10 03:59:52', 3, 1),
(472, 'Conductivity', '2024-04-10 03:59:52', 1843, 1),
(473, 'Temperature', '2024-04-10 03:59:52', 32, 1),
(474, 'waterlevel', '2024-04-10 04:00:05', 4, 1),
(475, 'Acidity', '2024-04-10 04:00:05', 3, 1),
(476, 'Conductivity', '2024-04-10 04:00:05', 1843, 1),
(477, 'Temperature', '2024-04-10 04:00:05', 32, 1),
(478, 'waterlevel', '2024-04-10 04:03:19', 2, 1),
(479, 'Acidity', '2024-04-10 04:03:19', 4, 1),
(480, 'Conductivity', '2024-04-10 04:03:19', 1843, 1),
(481, 'Temperature', '2024-04-10 04:03:19', 30, 1),
(482, 'waterlevel', '2024-04-10 04:05:47', 1, 1),
(483, 'Acidity', '2024-04-10 04:05:47', 2, 1),
(484, 'Conductivity', '2024-04-10 04:05:47', 1843, 1),
(485, 'Temperature', '2024-04-10 04:05:47', 30, 1),
(486, 'waterlevel', '2024-04-10 04:16:16', 2, 1),
(487, 'Acidity', '2024-04-10 04:16:16', 4, 1),
(488, 'Conductivity', '2024-04-10 04:16:16', 1843, 1),
(489, 'Temperature', '2024-04-10 04:16:16', 32, 1),
(490, 'waterlevel', '2024-04-10 04:17:16', 2, 1),
(491, 'Acidity', '2024-04-10 04:17:16', 4, 1),
(492, 'Conductivity', '2024-04-10 04:17:16', 1843, 1),
(493, 'Temperature', '2024-04-10 04:17:16', 32, 1),
(494, 'waterlevel', '2024-04-10 04:17:54', 2, 1),
(495, 'Acidity', '2024-04-10 04:17:54', 4, 1),
(496, 'Conductivity', '2024-04-10 04:17:54', 1843, 1),
(497, 'Temperature', '2024-04-10 04:17:54', 32, 1),
(498, 'waterlevel', '2024-04-10 04:18:21', 2, 1),
(499, 'Acidity', '2024-04-10 04:18:21', 4, 1),
(500, 'Conductivity', '2024-04-10 04:18:21', 1843, 1),
(501, 'Temperature', '2024-04-10 04:18:21', 32, 1),
(502, 'waterlevel', '2024-04-10 04:19:02', 2, 1),
(503, 'Acidity', '2024-04-10 04:19:02', 4, 1),
(504, 'Conductivity', '2024-04-10 04:19:02', 1843, 1),
(505, 'Temperature', '2024-04-10 04:19:02', 32, 1),
(506, 'waterlevel', '2024-04-10 04:19:17', 2, 1),
(507, 'Acidity', '2024-04-10 04:19:17', 4, 1),
(508, 'Conductivity', '2024-04-10 04:19:17', 1843, 1),
(509, 'Temperature', '2024-04-10 04:19:17', 32, 1),
(510, 'waterlevel', '2024-04-10 04:19:45', 2, 1),
(511, 'Acidity', '2024-04-10 04:19:45', 4, 1),
(512, 'Conductivity', '2024-04-10 04:19:45', 1843, 1),
(513, 'Temperature', '2024-04-10 04:19:45', 32, 1),
(514, 'waterlevel', '2024-04-10 04:22:33', 2, 1),
(515, 'Acidity', '2024-04-10 04:22:33', 4, 1),
(516, 'Conductivity', '2024-04-10 04:22:33', 1843, 1),
(517, 'Temperature', '2024-04-10 04:22:33', 32, 1),
(518, 'waterlevel', '2024-04-11 00:22:24', 2, 1),
(519, 'Acidity', '2024-04-11 00:22:24', 8, 1),
(520, 'Conductivity', '2024-04-11 00:22:24', 1843, 1),
(521, 'Temperature', '2024-04-11 00:22:24', 32, 1),
(522, 'waterlevel', '2024-04-11 00:23:14', 2, 1),
(523, 'Acidity', '2024-04-11 00:23:14', 8, 1),
(524, 'Conductivity', '2024-04-11 00:23:14', 1843, 1),
(525, 'Temperature', '2024-04-11 00:23:14', 52, 1),
(526, 'waterlevel', '2024-04-13 15:58:58', 4, 1),
(527, 'Conductivity', '2024-04-13 15:58:58', 1843, 1),
(528, 'Temperature', '2024-04-13 15:58:58', 30, 1),
(529, 'Acidity', '2024-04-13 16:14:36', 8, 1),
(530, 'Conductivity', '2024-04-13 16:14:36', 1843, 1),
(531, 'Temperature', '2024-04-13 16:14:36', 32, 1),
(532, 'waterlevel', '2024-04-13 16:15:35', 10, 1),
(533, 'Acidity', '2024-04-13 16:15:35', 4, 1),
(534, 'Conductivity', '2024-04-13 16:15:35', 1843, 1),
(535, 'Temperature', '2024-04-13 16:15:35', 32, 1),
(536, 'waterlevel', '2024-04-13 16:18:03', 10, 1),
(537, 'Acidity', '2024-04-13 16:18:03', 4, 1),
(538, 'Conductivity', '2024-04-13 16:18:03', 1843, 1),
(539, 'Temperature', '2024-04-13 16:18:03', 32, 1),
(540, 'waterlevel', '2024-04-13 17:57:27', 5, 1),
(541, 'Acidity', '2024-04-13 17:57:27', 8, 1),
(542, 'Conductivity', '2024-04-13 17:57:27', 1000, 1),
(543, 'Temperature', '2024-04-13 17:57:27', 34, 1),
(544, 'waterlevel', '2024-04-13 18:03:21', 5, 1),
(545, 'waterlevel', '2024-04-16 11:02:42', 5, 1),
(546, 'Acidity', '2024-04-16 11:02:42', 8, 1),
(547, 'Conductivity', '2024-04-16 11:02:42', 1000, 1),
(548, 'waterlevel', '2024-04-16 11:18:07', 5, 1),
(549, 'Acidity', '2024-04-16 11:18:07', 8, 1),
(550, 'Conductivity', '2024-04-16 11:18:07', 1000, 1),
(551, 'waterlevel', '2024-04-16 11:28:10', 5, 1),
(552, 'Conductivity', '2024-04-16 11:28:10', 1000, 1),
(553, 'Temperature', '2024-04-16 11:28:10', 34, 1),
(554, 'waterlevel', '2024-04-16 11:31:23', 5, 1),
(555, 'Acidity', '2024-04-16 11:31:23', 9, 1),
(556, 'Conductivity', '2024-04-16 11:31:23', 1000, 1),
(557, 'Temperature', '2024-04-16 11:31:23', 54, 1),
(558, 'waterlevel', '2024-04-16 11:31:51', 5, 1),
(559, 'Acidity', '2024-04-16 11:31:51', 8, 1),
(560, 'Conductivity', '2024-04-16 11:31:51', 1000, 1),
(561, 'Temperature', '2024-04-16 11:31:51', 54, 1),
(562, 'waterlevel', '2024-04-19 12:39:43', 5, 1),
(563, 'Conductivity', '2024-04-19 12:39:43', 200, 1),
(564, 'Temperature', '2024-04-19 12:39:43', 38, 1),
(565, 'waterlevel', '2024-04-19 12:41:31', 5, 1),
(566, 'Conductivity', '2024-04-19 12:41:31', 200, 1),
(567, 'Temperature', '2024-04-19 12:41:31', 38, 1),
(568, 'waterlevel', '2024-04-19 12:41:32', 5, 1),
(569, 'Conductivity', '2024-04-19 12:41:32', 200, 1),
(570, 'Temperature', '2024-04-19 12:41:32', 38, 1),
(571, 'waterlevel', '2024-04-19 15:23:29', 5, 1),
(572, 'Conductivity', '2024-04-19 15:23:29', 200, 1),
(573, 'Temperature', '2024-04-19 15:23:29', 75, 1),
(574, 'Acidity', '2024-04-20 15:49:51', 21, 1),
(575, 'Conductivity', '2024-04-20 15:49:51', 0, 1),
(576, 'Temperature', '2024-04-20 15:49:51', 36, 1),
(577, 'Acidity', '2024-04-20 15:50:37', 21, 1),
(578, 'Conductivity', '2024-04-20 15:50:37', 0, 1),
(579, 'Temperature', '2024-04-20 15:50:37', 36, 1),
(580, 'waterlevel', '2024-04-20 15:51:22', 0, 1),
(581, 'Acidity', '2024-04-20 15:51:22', 21, 1),
(582, 'Conductivity', '2024-04-20 15:51:22', 0, 1),
(583, 'Temperature', '2024-04-20 15:51:22', 35, 1),
(584, 'Acidity', '2024-04-20 15:52:08', 21, 1),
(585, 'Conductivity', '2024-04-20 15:52:08', 0, 1),
(586, 'Temperature', '2024-04-20 15:52:08', 35, 1),
(587, 'waterlevel', '2024-04-21 06:25:51', 5, 1),
(588, 'Conductivity', '2024-04-21 06:25:51', 200, 1),
(589, 'Temperature', '2024-04-21 06:25:51', 30, 1),
(590, 'Acidity', '2024-04-21 06:44:39', 20, 1),
(591, 'Conductivity', '2024-04-21 06:44:39', 0, 1),
(592, 'Temperature', '2024-04-21 06:44:39', 29, 1),
(593, 'Acidity', '2024-04-21 06:45:24', 20, 1),
(594, 'Conductivity', '2024-04-21 06:45:24', 0, 1),
(595, 'Temperature', '2024-04-21 06:45:24', 29, 1),
(596, 'Acidity', '2024-04-21 06:46:10', 20, 1),
(597, 'Conductivity', '2024-04-21 06:46:10', 0, 1),
(598, 'Temperature', '2024-04-21 06:46:10', 29, 1),
(599, 'Acidity', '2024-04-21 06:52:20', 20, 1),
(600, 'Conductivity', '2024-04-21 06:52:20', 0, 1),
(601, 'Temperature', '2024-04-21 06:52:20', 29, 1),
(602, 'Acidity', '2024-04-21 06:53:05', 20, 1),
(603, 'Conductivity', '2024-04-21 06:53:05', 0, 1),
(604, 'Temperature', '2024-04-21 06:53:05', 29, 1),
(605, 'Acidity', '2024-04-21 07:03:36', 20, 1),
(606, 'Conductivity', '2024-04-21 07:03:36', 0, 1),
(607, 'Temperature', '2024-04-21 07:03:36', 29, 1),
(608, 'Acidity', '2024-04-21 07:07:33', 20, 1),
(609, 'Conductivity', '2024-04-21 07:07:33', 0, 1),
(610, 'Temperature', '2024-04-21 07:07:33', 29, 1),
(611, 'Acidity', '2024-04-21 07:08:19', 20, 1),
(612, 'Conductivity', '2024-04-21 07:08:19', 0, 1),
(613, 'Temperature', '2024-04-21 07:08:19', 29, 1),
(614, 'Acidity', '2024-04-21 11:38:35', 21, 1),
(615, 'Conductivity', '2024-04-21 11:38:35', 0, 1),
(616, 'Temperature', '2024-04-21 11:38:35', 33, 1),
(617, 'Acidity', '2024-04-21 11:39:21', 21, 1),
(618, 'Conductivity', '2024-04-21 11:39:21', 0, 1),
(619, 'Temperature', '2024-04-21 11:39:21', 33, 1),
(620, 'Acidity', '2024-04-21 11:40:06', 21, 1),
(621, 'Conductivity', '2024-04-21 11:40:06', 0, 1),
(622, 'Temperature', '2024-04-21 11:40:06', 33, 1),
(623, 'Acidity', '2024-04-21 11:40:52', 21, 1),
(624, 'Conductivity', '2024-04-21 11:40:52', 0, 1),
(625, 'Temperature', '2024-04-21 11:40:52', 33, 1),
(626, 'Acidity', '2024-04-21 11:41:38', 21, 1),
(627, 'Conductivity', '2024-04-21 11:41:38', 0, 1),
(628, 'Temperature', '2024-04-21 11:41:38', 33, 1),
(629, 'Acidity', '2024-04-21 11:42:23', 21, 1),
(630, 'Conductivity', '2024-04-21 11:42:23', 0, 1),
(631, 'Temperature', '2024-04-21 11:42:23', 33, 1),
(632, 'Acidity', '2024-04-21 11:43:09', 21, 1),
(633, 'Conductivity', '2024-04-21 11:43:09', 0, 1),
(634, 'Temperature', '2024-04-21 11:43:09', 33, 1),
(635, 'Acidity', '2024-04-21 11:43:55', 21, 1),
(636, 'Conductivity', '2024-04-21 11:43:55', 0, 1),
(637, 'Temperature', '2024-04-21 11:43:55', 33, 1),
(638, 'Acidity', '2024-04-21 11:44:40', 21, 1),
(639, 'Conductivity', '2024-04-21 11:44:40', 0, 1),
(640, 'Temperature', '2024-04-21 11:44:40', 33, 1),
(641, 'Acidity', '2024-04-22 13:58:47', 21, 1),
(642, 'Conductivity', '2024-04-22 13:58:47', 0, 1),
(643, 'Temperature', '2024-04-22 13:58:47', 32, 1),
(644, 'Acidity', '2024-04-22 14:05:13', 21, 1),
(645, 'Conductivity', '2024-04-22 14:05:13', 0, 1),
(646, 'Temperature', '2024-04-22 14:05:13', 32, 1),
(647, 'Acidity', '2024-04-22 14:15:26', -11, 1),
(648, 'Conductivity', '2024-04-22 14:15:26', 0, 1),
(649, 'Temperature', '2024-04-22 14:15:26', 32, 1),
(650, 'Acidity', '2024-04-22 14:46:27', 6, 1),
(651, 'Conductivity', '2024-04-22 14:46:27', 800, 1),
(652, 'Temperature', '2024-04-22 14:46:27', 30, 1),
(653, 'Acidity', '2024-04-22 14:48:00', 6, 1),
(654, 'Conductivity', '2024-04-22 14:48:00', 800, 1),
(655, 'Temperature', '2024-04-22 14:48:00', 30, 1),
(656, 'Acidity', '2024-04-22 14:49:33', 6, 1),
(657, 'Conductivity', '2024-04-22 14:49:33', 800, 1),
(658, 'Temperature', '2024-04-22 14:49:33', 30, 1),
(659, 'Acidity', '2024-04-22 14:51:05', 6, 1),
(660, 'Conductivity', '2024-04-22 14:51:05', 800, 1),
(661, 'Temperature', '2024-04-22 14:51:05', 30, 1),
(662, 'Acidity', '2024-04-22 16:16:22', 23, 1),
(663, 'Conductivity', '2024-04-22 16:16:22', 800, 1),
(664, 'Temperature', '2024-04-22 16:16:22', 28, 1),
(665, 'Acidity', '2024-04-22 16:17:50', 23, 1),
(666, 'Conductivity', '2024-04-22 16:17:50', 800, 1),
(667, 'Temperature', '2024-04-22 16:17:50', 28, 1),
(668, 'Acidity', '2024-04-22 16:19:17', 23, 1),
(669, 'Conductivity', '2024-04-22 16:19:17', 800, 1),
(670, 'Temperature', '2024-04-22 16:19:17', 28, 1),
(671, 'Acidity', '2024-04-22 16:20:45', 23, 1),
(672, 'Conductivity', '2024-04-22 16:20:45', 800, 1),
(673, 'Temperature', '2024-04-22 16:20:45', 28, 1),
(674, 'Acidity', '2024-04-22 16:22:13', 23, 1),
(675, 'Conductivity', '2024-04-22 16:22:13', 800, 1),
(676, 'Temperature', '2024-04-22 16:22:13', 28, 1),
(677, 'Acidity', '2024-04-22 16:23:40', 23, 1),
(678, 'Conductivity', '2024-04-22 16:23:40', 800, 1),
(679, 'Temperature', '2024-04-22 16:23:40', 28, 1),
(680, 'Acidity', '2024-04-22 16:25:08', 23, 1),
(681, 'Conductivity', '2024-04-22 16:25:08', 800, 1),
(682, 'Temperature', '2024-04-22 16:25:08', 28, 1),
(683, 'Acidity', '2024-04-22 16:26:36', 23, 1),
(684, 'Conductivity', '2024-04-22 16:26:36', 800, 1),
(685, 'Temperature', '2024-04-22 16:26:36', 28, 1),
(686, 'Acidity', '2024-04-22 16:28:04', 23, 1),
(687, 'Conductivity', '2024-04-22 16:28:04', 800, 1),
(688, 'Temperature', '2024-04-22 16:28:04', 28, 1),
(689, 'Acidity', '2024-04-22 16:29:31', 23, 1),
(690, 'Conductivity', '2024-04-22 16:29:31', 800, 1),
(691, 'Temperature', '2024-04-22 16:29:31', 28, 1),
(692, 'Acidity', '2024-04-22 16:30:59', 23, 1),
(693, 'Conductivity', '2024-04-22 16:30:59', 800, 1),
(694, 'Temperature', '2024-04-22 16:30:59', 28, 1),
(695, 'Acidity', '2024-04-22 16:32:27', 23, 1),
(696, 'Conductivity', '2024-04-22 16:32:27', 800, 1),
(697, 'Temperature', '2024-04-22 16:32:27', 28, 1),
(698, 'Acidity', '2024-04-22 16:33:54', 23, 1),
(699, 'Conductivity', '2024-04-22 16:33:54', 800, 1),
(700, 'Temperature', '2024-04-22 16:33:54', 28, 1),
(701, 'Acidity', '2024-04-22 16:39:01', 6, 1),
(702, 'Conductivity', '2024-04-22 16:39:01', 800, 1),
(703, 'Temperature', '2024-04-22 16:39:01', 27, 1),
(704, 'Acidity', '2024-04-22 16:40:34', 6, 1),
(705, 'Conductivity', '2024-04-22 16:40:34', 800, 1),
(706, 'Temperature', '2024-04-22 16:40:34', 27, 1),
(707, 'Acidity', '2024-04-22 16:42:06', 6, 1),
(708, 'Conductivity', '2024-04-22 16:42:06', 800, 1),
(709, 'Temperature', '2024-04-22 16:42:06', 27, 1),
(710, 'Acidity', '2024-04-22 16:44:53', 6, 1),
(711, 'Conductivity', '2024-04-22 16:44:53', 800, 1),
(712, 'Temperature', '2024-04-22 16:44:53', 69, 1),
(713, 'Acidity', '2024-04-22 16:46:42', 6, 1),
(714, 'Conductivity', '2024-04-22 16:46:42', 800, 1),
(715, 'Temperature', '2024-04-22 16:46:42', 63, 1),
(716, 'Acidity', '2024-04-22 16:48:31', 6, 1),
(717, 'Conductivity', '2024-04-22 16:48:31', 800, 1),
(718, 'Temperature', '2024-04-22 16:48:31', 58, 1),
(719, 'Acidity', '2024-04-22 16:50:20', 6, 1),
(720, 'Conductivity', '2024-04-22 16:50:20', 800, 1),
(721, 'Temperature', '2024-04-22 16:50:20', 54, 1),
(722, 'Acidity', '2024-05-09 20:47:50', 9, 1),
(723, 'Acidity', '2024-05-09 20:57:47', 9, 1);

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
(107, 'Temperature', '2024-04-09 06:38:09', 2, 0),
(108, 'Temperature', '2024-04-09 06:38:25', 38, 0),
(109, 'Temperature', '2024-04-09 06:38:43', 35, 0),
(110, 'Temperature', '2024-04-09 06:38:51', 3, 0),
(111, 'Temperature', '2024-04-09 06:38:58', 3, 0),
(112, 'Temperature', '2024-04-09 06:39:06', 5, 0),
(113, 'Temperature', '2024-04-09 08:28:59', 23, 0),
(114, 'Temperature', '2024-04-09 08:29:19', 23, 0),
(115, 'Temperature', '2024-04-09 08:29:41', 23, 0),
(116, 'Temperature', '2024-04-09 08:30:03', 24, 0),
(117, 'Temperature', '2024-04-09 08:30:24', 23, 0),
(118, 'Temperature', '2024-04-09 08:30:46', 24, 0),
(119, 'Temperature', '2024-04-09 08:31:07', 24, 0),
(120, 'Temperature', '2024-04-09 08:31:29', 24, 0),
(121, 'Temperature', '2024-04-09 08:31:51', 24, 0),
(122, 'Temperature', '2024-04-09 08:32:12', 24, 0),
(123, 'Temperature', '2024-04-09 08:32:34', 24, 0),
(124, 'Temperature', '2024-04-09 08:32:56', 24, 0),
(125, 'Temperature', '2024-04-09 08:35:04', 24, 0),
(126, 'Temperature', '2024-04-09 08:35:25', 24, 0),
(127, 'Temperature', '2024-04-09 08:35:47', 24, 0),
(128, 'Temperature', '2024-04-09 08:36:09', 24, 0),
(129, 'Temperature', '2024-04-09 08:36:30', 24, 0),
(130, 'Temperature', '2024-04-09 08:36:52', 24, 0),
(131, 'Temperature', '2024-04-09 08:37:14', 24, 0),
(132, 'Temperature', '2024-04-09 08:37:35', 24, 0),
(133, 'Temperature', '2024-04-09 08:37:57', 24, 0),
(134, 'Temperature', '2024-04-09 08:38:19', 24, 0),
(135, 'Temperature', '2024-04-09 08:38:40', 24, 0),
(136, 'Temperature', '2024-04-09 08:39:02', 24, 0),
(137, 'Temperature', '2024-04-09 08:52:59', 26, 0),
(138, 'Temperature', '2024-04-09 08:53:27', 26, 0),
(139, 'Temperature', '2024-04-09 08:53:54', 26, 0),
(140, 'Temperature', '2024-04-09 08:54:22', 26, 0),
(141, 'Temperature', '2024-04-09 08:54:50', 26, 0),
(142, 'Temperature', '2024-04-09 08:55:17', 26, 0),
(143, 'Temperature', '2024-04-09 08:55:45', 26, 0),
(144, 'Temperature', '2024-04-09 08:56:13', 26, 0),
(145, 'Temperature', '2024-04-09 08:56:40', 26, 0),
(146, 'Temperature', '2024-04-09 08:57:08', 27, 0),
(147, 'Temperature', '2024-04-09 08:57:36', 27, 0),
(148, 'Temperature', '2024-04-09 08:58:03', 27, 0),
(149, 'Temperature', '2024-04-09 08:58:31', 27, 0),
(150, 'Temperature', '2024-04-09 08:58:59', 27, 0),
(151, 'Temperature', '2024-04-09 08:59:26', 27, 0),
(152, 'Temperature', '2024-04-09 08:59:54', 27, 0),
(153, 'Temperature', '2024-04-09 09:00:22', 27, 0),
(154, 'Temperature', '2024-04-09 09:00:49', 27, 0),
(155, 'Temperature', '2024-04-09 09:01:17', 27, 0),
(156, 'Temperature', '2024-04-09 09:01:45', 27, 0),
(157, 'Temperature', '2024-04-10 02:20:00', 32, 0),
(158, 'Temperature', '2024-04-10 02:22:28', 30, 0),
(159, 'Temperature', '2024-04-10 03:33:57', 32, 0),
(160, 'Temperature', '2024-04-10 03:46:14', 32, 0),
(161, 'Temperature', '2024-04-10 03:46:35', 32, 0),
(162, 'Temperature', '2024-04-10 03:48:38', 32, 0),
(163, 'Temperature', '2024-04-10 03:59:52', 32, 0),
(164, 'Temperature', '2024-04-10 04:00:05', 32, 0),
(165, 'Temperature', '2024-04-10 04:03:19', 30, 0),
(166, 'Temperature', '2024-04-10 04:05:47', 30, 0),
(167, 'Temperature', '2024-04-10 04:16:16', 32, 0),
(168, 'Temperature', '2024-04-10 04:17:16', 32, 0),
(169, 'Temperature', '2024-04-10 04:17:54', 32, 0),
(170, 'Temperature', '2024-04-10 04:18:21', 32, 0),
(171, 'Temperature', '2024-04-10 04:19:02', 32, 0),
(172, 'Temperature', '2024-04-10 04:19:17', 32, 0),
(173, 'Temperature', '2024-04-10 04:19:45', 32, 0),
(174, 'Temperature', '2024-04-10 04:22:33', 32, 0),
(175, 'Temperature', '2024-04-11 00:22:24', 32, 0),
(176, 'Temperature', '2024-04-11 00:23:14', 52, 0),
(177, 'Temperature', '2024-04-13 15:58:58', 30, 0),
(178, 'Temperature', '2024-04-13 16:14:36', 32, 0),
(179, 'Temperature', '2024-04-13 16:15:35', 32, 0),
(180, 'Temperature', '2024-04-13 16:18:03', 32, 0),
(181, 'Temperature', '2024-04-13 17:57:27', 34, 0),
(182, 'Temperature', '2024-04-13 18:03:21', 25, 0),
(183, 'Temperature', '2024-04-16 11:02:42', 25, 0),
(184, 'Temperature', '2024-04-16 11:18:07', 25, 0),
(185, 'Temperature', '2024-04-16 11:28:10', 34, 0),
(186, 'Temperature', '2024-04-16 11:31:23', 54, 0),
(187, 'Temperature', '2024-04-16 11:31:51', 54, 0),
(188, 'Temperature', '2024-04-19 12:39:43', 38, 0),
(189, 'Temperature', '2024-04-19 12:41:31', 38, 0),
(190, 'Temperature', '2024-04-19 12:41:32', 38, 0),
(191, 'Temperature', '2024-04-19 15:23:29', 75, 0),
(192, 'Temperature', '2024-04-20 15:49:51', 36, 0),
(193, 'Temperature', '2024-04-20 15:50:37', 36, 0),
(194, 'Temperature', '2024-04-20 15:51:22', 35, 0),
(195, 'Temperature', '2024-04-20 15:52:08', 35, 0),
(196, 'Temperature', '2024-04-21 06:25:51', 30, 0),
(197, 'Temperature', '2024-04-21 06:44:39', 29, 0),
(198, 'Temperature', '2024-04-21 06:45:24', 29, 0),
(199, 'Temperature', '2024-04-21 06:46:10', 29, 0),
(200, 'Temperature', '2024-04-21 06:52:20', 29, 0),
(201, 'Temperature', '2024-04-21 06:53:05', 29, 0),
(202, 'Temperature', '2024-04-21 07:03:36', 29, 0),
(203, 'Temperature', '2024-04-21 07:07:33', 29, 0),
(204, 'Temperature', '2024-04-21 07:08:19', 29, 0),
(205, 'Temperature', '2024-04-21 11:38:35', 33, 0),
(206, 'Temperature', '2024-04-21 11:39:21', 33, 0),
(207, 'Temperature', '2024-04-21 11:40:06', 33, 0),
(208, 'Temperature', '2024-04-21 11:40:52', 33, 0),
(209, 'Temperature', '2024-04-21 11:41:38', 33, 0),
(210, 'Temperature', '2024-04-21 11:42:23', 33, 0),
(211, 'Temperature', '2024-04-21 11:43:09', 33, 0),
(212, 'Temperature', '2024-04-21 11:43:55', 33, 0),
(213, 'Temperature', '2024-04-21 11:44:40', 33, 0),
(214, 'Temperature', '2024-04-22 13:58:47', 32, 0),
(215, 'Temperature', '2024-04-22 14:05:13', 32, 0),
(216, 'Temperature', '2024-04-22 14:15:26', 32, 0),
(217, 'Temperature', '2024-04-22 14:46:27', 30, 0),
(218, 'Temperature', '2024-04-22 14:48:00', 30, 0),
(219, 'Temperature', '2024-04-22 14:49:33', 30, 0),
(220, 'Temperature', '2024-04-22 14:51:05', 30, 0),
(221, 'Temperature', '2024-04-22 16:16:22', 28, 0),
(222, 'Temperature', '2024-04-22 16:17:50', 28, 0),
(223, 'Temperature', '2024-04-22 16:19:17', 28, 0),
(224, 'Temperature', '2024-04-22 16:20:45', 28, 0),
(225, 'Temperature', '2024-04-22 16:22:13', 28, 0),
(226, 'Temperature', '2024-04-22 16:23:40', 28, 0),
(227, 'Temperature', '2024-04-22 16:25:08', 28, 0),
(228, 'Temperature', '2024-04-22 16:26:36', 28, 0),
(229, 'Temperature', '2024-04-22 16:28:04', 28, 0),
(230, 'Temperature', '2024-04-22 16:29:31', 28, 0),
(231, 'Temperature', '2024-04-22 16:30:59', 28, 0),
(232, 'Temperature', '2024-04-22 16:32:27', 28, 0),
(233, 'Temperature', '2024-04-22 16:33:54', 28, 0),
(234, 'Temperature', '2024-04-22 16:39:01', 27, 0),
(235, 'Temperature', '2024-04-22 16:40:34', 27, 0),
(236, 'Temperature', '2024-04-22 16:42:06', 27, 0),
(237, 'Temperature', '2024-04-22 16:44:53', 69, 0),
(238, 'Temperature', '2024-04-22 16:46:42', 63, 0),
(239, 'Temperature', '2024-04-22 16:48:31', 58, 0),
(240, 'Temperature', '2024-04-22 16:50:20', 54, 0);

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
  `status` int(11) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `total_dissolved_solids`
--

INSERT INTO `total_dissolved_solids` (`tds_id`, `sensor_name`, `tds_cdate`, `tds_readings`, `status`, `action`) VALUES
(92, 'Conductivity', '2024-04-09 06:38:09', 2, 0, 'Nutrient Solution Added'),
(93, 'Conductivity', '2024-04-09 06:38:25', 31, 0, 'Nutrient Solution Added'),
(94, 'Conductivity', '2024-04-09 06:38:43', 200, 0, 'Nutrient Solution Added'),
(95, 'Conductivity', '2024-04-09 06:38:51', 3, 0, 'Nutrient Solution Added'),
(96, 'Conductivity', '2024-04-09 06:38:58', 3, 0, 'Nutrient Solution Added'),
(97, 'Conductivity', '2024-04-09 06:39:06', 5, 0, 'Nutrient Solution Added'),
(98, 'Conductivity', '2024-04-09 08:28:59', 0, 0, 'Nutrient Solution Added'),
(99, 'Conductivity', '2024-04-09 08:29:19', 0, 0, 'Nutrient Solution Added'),
(100, 'Conductivity', '2024-04-09 08:29:41', 0, 0, 'Nutrient Solution Added'),
(101, 'Conductivity', '2024-04-09 08:30:03', 0, 0, 'Nutrient Solution Added'),
(102, 'Conductivity', '2024-04-09 08:30:24', 0, 0, 'Nutrient Solution Added'),
(103, 'Conductivity', '2024-04-09 08:30:46', 0, 0, 'Nutrient Solution Added'),
(104, 'Conductivity', '2024-04-09 08:31:07', 0, 0, 'Nutrient Solution Added'),
(105, 'Conductivity', '2024-04-09 08:31:29', 0, 0, 'Nutrient Solution Added'),
(106, 'Conductivity', '2024-04-09 08:31:51', 0, 0, 'Nutrient Solution Added'),
(107, 'Conductivity', '2024-04-09 08:32:12', 0, 0, 'Nutrient Solution Added'),
(108, 'Conductivity', '2024-04-09 08:32:34', 0, 0, 'Nutrient Solution Added'),
(109, 'Conductivity', '2024-04-09 08:32:56', 0, 0, 'Nutrient Solution Added'),
(110, 'Conductivity', '2024-04-09 08:35:04', 0, 0, 'Nutrient Solution Added'),
(111, 'Conductivity', '2024-04-09 08:35:25', 0, 0, 'Nutrient Solution Added'),
(112, 'Conductivity', '2024-04-09 08:35:47', 0, 0, 'Nutrient Solution Added'),
(113, 'Conductivity', '2024-04-09 08:36:09', 0, 0, 'Nutrient Solution Added'),
(114, 'Conductivity', '2024-04-09 08:36:30', 0, 0, 'Nutrient Solution Added'),
(115, 'Conductivity', '2024-04-09 08:36:52', 0, 0, 'Nutrient Solution Added'),
(116, 'Conductivity', '2024-04-09 08:37:14', 0, 0, 'Nutrient Solution Added'),
(117, 'Conductivity', '2024-04-09 08:37:35', 0, 0, 'Nutrient Solution Added'),
(118, 'Conductivity', '2024-04-09 08:37:57', 0, 0, 'Nutrient Solution Added'),
(119, 'Conductivity', '2024-04-09 08:38:19', 0, 0, 'Nutrient Solution Added'),
(120, 'Conductivity', '2024-04-09 08:38:40', 0, 0, 'Nutrient Solution Added'),
(121, 'Conductivity', '2024-04-09 08:39:02', 0, 0, 'Nutrient Solution Added'),
(122, 'Conductivity', '2024-04-09 08:52:59', 0, 0, 'Nutrient Solution Added'),
(123, 'Conductivity', '2024-04-09 08:53:27', 0, 0, 'Nutrient Solution Added'),
(124, 'Conductivity', '2024-04-09 08:53:54', 0, 0, 'Nutrient Solution Added'),
(125, 'Conductivity', '2024-04-09 08:54:22', 0, 0, 'Nutrient Solution Added'),
(126, 'Conductivity', '2024-04-09 08:54:50', 0, 0, 'Nutrient Solution Added'),
(127, 'Conductivity', '2024-04-09 08:55:17', 0, 0, 'Nutrient Solution Added'),
(128, 'Conductivity', '2024-04-09 08:55:45', 0, 0, 'Nutrient Solution Added'),
(129, 'Conductivity', '2024-04-09 08:56:13', 0, 0, 'Nutrient Solution Added'),
(130, 'Conductivity', '2024-04-09 08:56:40', 0, 0, 'Nutrient Solution Added'),
(131, 'Conductivity', '2024-04-09 08:57:08', 0, 0, 'Nutrient Solution Added'),
(132, 'Conductivity', '2024-04-09 08:57:36', 0, 0, 'Nutrient Solution Added'),
(133, 'Conductivity', '2024-04-09 08:58:03', 0, 0, 'Nutrient Solution Added'),
(134, 'Conductivity', '2024-04-09 08:58:31', 0, 0, 'Nutrient Solution Added'),
(135, 'Conductivity', '2024-04-09 08:58:59', 0, 0, 'Nutrient Solution Added'),
(136, 'Conductivity', '2024-04-09 08:59:26', 0, 0, 'Nutrient Solution Added'),
(137, 'Conductivity', '2024-04-09 08:59:54', 563, 0, 'Nutrient Solution Added'),
(138, 'Conductivity', '2024-04-09 09:00:22', 1835, 0, 'No action'),
(139, 'Conductivity', '2024-04-09 09:00:49', 1835, 0, 'No action'),
(140, 'Conductivity', '2024-04-09 09:01:17', 1843, 0, 'No action'),
(141, 'Conductivity', '2024-04-09 09:01:45', 1843, 0, 'No action'),
(142, 'Conductivity', '2024-04-10 02:20:00', 1843, 0, 'No action'),
(143, 'Conductivity', '2024-04-10 02:22:28', 1843, 0, 'No action'),
(144, 'Conductivity', '2024-04-10 03:33:57', 1843, 0, 'No action'),
(145, 'Conductivity', '2024-04-10 03:46:14', 1843, 0, 'No action'),
(146, 'Conductivity', '2024-04-10 03:46:35', 1843, 0, 'No action'),
(147, 'Conductivity', '2024-04-10 03:48:38', 1843, 0, 'No action'),
(148, 'Conductivity', '2024-04-10 03:59:52', 1843, 0, 'No action'),
(149, 'Conductivity', '2024-04-10 04:00:05', 1843, 0, 'No action'),
(150, 'Conductivity', '2024-04-10 04:03:19', 1843, 0, 'No action'),
(151, 'Conductivity', '2024-04-10 04:05:47', 1843, 0, 'No action'),
(152, 'Conductivity', '2024-04-10 04:16:16', 1843, 0, 'No action'),
(153, 'Conductivity', '2024-04-10 04:17:16', 1843, 0, 'No action'),
(154, 'Conductivity', '2024-04-10 04:17:54', 1843, 0, 'No action'),
(155, 'Conductivity', '2024-04-10 04:18:21', 1843, 0, 'No action'),
(156, 'Conductivity', '2024-04-10 04:19:02', 1843, 0, 'No action'),
(157, 'Conductivity', '2024-04-10 04:19:17', 1843, 0, 'No action'),
(158, 'Conductivity', '2024-04-10 04:19:45', 1843, 0, 'No action'),
(159, 'Conductivity', '2024-04-10 04:22:33', 1843, 0, 'No action'),
(160, 'Conductivity', '2024-04-11 00:22:24', 1843, 0, 'No action'),
(161, 'Conductivity', '2024-04-11 00:23:14', 1843, 0, 'No action'),
(162, 'Conductivity', '2024-04-13 15:58:58', 1843, 0, 'No action'),
(163, 'Conductivity', '2024-04-13 16:14:36', 1843, 0, 'No action'),
(164, 'Conductivity', '2024-04-13 16:15:35', 1843, 0, 'No action'),
(165, 'Conductivity', '2024-04-13 16:18:03', 1843, 0, 'No action'),
(166, 'Conductivity', '2024-04-13 17:57:27', 1000, 0, 'No action'),
(167, 'Conductivity', '2024-04-13 18:03:21', 300, 0, 'Nutrient Solution Added'),
(168, 'Conductivity', '2024-04-16 11:02:42', 1000, 0, 'No action'),
(169, 'Conductivity', '2024-04-16 11:18:07', 1000, 0, 'No action'),
(170, 'Conductivity', '2024-04-16 11:28:10', 1000, 0, 'No action'),
(171, 'Conductivity', '2024-04-16 11:31:23', 1000, 0, 'No action'),
(172, 'Conductivity', '2024-04-16 11:31:51', 1000, 0, 'No action'),
(173, 'Conductivity', '2024-04-19 12:39:43', 200, 0, 'Nutrient Solution Added'),
(174, 'Conductivity', '2024-04-19 12:41:31', 200, 0, 'Nutrient Solution Added'),
(175, 'Conductivity', '2024-04-19 12:41:32', 200, 0, 'Nutrient Solution Added'),
(176, 'Conductivity', '2024-04-19 15:23:29', 200, 0, 'Nutrient Solution Added'),
(177, 'Conductivity', '2024-04-20 15:49:51', 0, 0, 'Nutrient Solution Added'),
(178, 'Conductivity', '2024-04-20 15:50:37', 0, 0, 'Nutrient Solution Added'),
(179, 'Conductivity', '2024-04-20 15:51:22', 0, 0, 'Nutrient Solution Added'),
(180, 'Conductivity', '2024-04-20 15:52:08', 0, 0, 'Nutrient Solution Added'),
(181, 'Conductivity', '2024-04-21 06:25:51', 200, 0, 'Nutrient Solution Added'),
(182, 'Conductivity', '2024-04-21 06:44:39', 0, 0, 'Nutrient Solution Added'),
(183, 'Conductivity', '2024-04-21 06:45:24', 0, 0, 'Nutrient Solution Added'),
(184, 'Conductivity', '2024-04-21 06:46:10', 0, 0, 'Nutrient Solution Added'),
(185, 'Conductivity', '2024-04-21 06:52:20', 0, 0, 'Nutrient Solution Added'),
(186, 'Conductivity', '2024-04-21 06:53:05', 0, 0, 'Nutrient Solution Added'),
(187, 'Conductivity', '2024-04-21 07:03:36', 0, 0, 'Nutrient Solution Added'),
(188, 'Conductivity', '2024-04-21 07:07:33', 0, 0, 'Nutrient Solution Added'),
(189, 'Conductivity', '2024-04-21 07:08:19', 0, 0, 'Nutrient Solution Added'),
(190, 'Conductivity', '2024-04-21 11:38:35', 0, 0, 'Nutrient Solution Added'),
(191, 'Conductivity', '2024-04-21 11:39:21', 0, 0, 'Nutrient Solution Added'),
(192, 'Conductivity', '2024-04-21 11:40:06', 0, 0, 'Nutrient Solution Added'),
(193, 'Conductivity', '2024-04-21 11:40:52', 0, 0, 'Nutrient Solution Added'),
(194, 'Conductivity', '2024-04-21 11:41:38', 0, 0, 'Nutrient Solution Added'),
(195, 'Conductivity', '2024-04-21 11:42:23', 0, 0, 'Nutrient Solution Added'),
(196, 'Conductivity', '2024-04-21 11:43:09', 0, 0, 'Nutrient Solution Added'),
(197, 'Conductivity', '2024-04-21 11:43:55', 0, 0, 'Nutrient Solution Added'),
(198, 'Conductivity', '2024-04-21 11:44:40', 0, 0, 'Nutrient Solution Added'),
(199, 'Conductivity', '2024-04-22 13:58:47', 0, 0, 'Nutrient Solution Added'),
(200, 'Conductivity', '2024-04-22 14:05:13', 0, 0, 'Nutrient Solution Added'),
(201, 'Conductivity', '2024-04-22 14:15:26', 0, 0, 'Nutrient Solution Added'),
(202, 'Conductivity', '2024-04-22 14:46:27', 800, 0, 'No action'),
(203, 'Conductivity', '2024-04-22 14:48:00', 800, 0, 'No action'),
(204, 'Conductivity', '2024-04-22 14:49:33', 800, 0, 'No action'),
(205, 'Conductivity', '2024-04-22 14:51:05', 800, 0, 'No action'),
(206, 'Conductivity', '2024-04-22 16:16:22', 800, 0, 'No action'),
(207, 'Conductivity', '2024-04-22 16:17:50', 800, 0, 'No action'),
(208, 'Conductivity', '2024-04-22 16:19:17', 800, 0, 'No action'),
(209, 'Conductivity', '2024-04-22 16:20:45', 800, 0, 'No action'),
(210, 'Conductivity', '2024-04-22 16:22:13', 800, 0, 'No action'),
(211, 'Conductivity', '2024-04-22 16:23:40', 800, 0, 'No action'),
(212, 'Conductivity', '2024-04-22 16:25:08', 800, 0, 'No action'),
(213, 'Conductivity', '2024-04-22 16:26:36', 800, 0, 'No action'),
(214, 'Conductivity', '2024-04-22 16:28:04', 800, 0, 'No action'),
(215, 'Conductivity', '2024-04-22 16:29:31', 800, 0, 'No action'),
(216, 'Conductivity', '2024-04-22 16:30:59', 800, 0, 'No action'),
(217, 'Conductivity', '2024-04-22 16:32:27', 800, 0, 'No action'),
(218, 'Conductivity', '2024-04-22 16:33:54', 800, 0, 'No action'),
(219, 'Conductivity', '2024-04-22 16:39:01', 800, 0, 'No action'),
(220, 'Conductivity', '2024-04-22 16:40:34', 800, 0, 'No action'),
(221, 'Conductivity', '2024-04-22 16:42:06', 800, 0, 'No action'),
(222, 'Conductivity', '2024-04-22 16:44:53', 800, 0, 'No action'),
(223, 'Conductivity', '2024-04-22 16:46:42', 800, 0, 'No action'),
(224, 'Conductivity', '2024-04-22 16:48:31', 800, 0, 'No action'),
(225, 'Conductivity', '2024-04-22 16:50:20', 800, 0, 'No action');

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
DELIMITER $$
CREATE TRIGGER `tds_action` BEFORE INSERT ON `total_dissolved_solids` FOR EACH ROW BEGIN
    IF NEW.tds_readings >= 800 THEN
        SET NEW.action = 'No action';
    ELSE
        SET NEW.action = 'Nutrient Solution Added';
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
(97, 'waterflow', '2024-04-09 06:38:09', 2, 0),
(98, 'waterflow', '2024-04-09 06:38:25', 2, 0),
(99, 'waterflow', '2024-04-09 06:38:43', 2, 0),
(100, 'waterflow', '2024-04-09 06:38:51', 3, 0),
(101, 'waterflow', '2024-04-09 06:38:58', 3, 0),
(102, 'waterflow', '2024-04-09 06:39:06', 5, 0),
(103, 'waterflow', '2024-04-09 08:28:59', 5, 0),
(104, 'waterflow', '2024-04-09 08:29:19', 5, 0),
(105, 'waterflow', '2024-04-09 08:29:41', 5, 0),
(106, 'waterflow', '2024-04-09 08:30:03', 5, 0),
(107, 'waterflow', '2024-04-09 08:30:24', 5, 0),
(108, 'waterflow', '2024-04-09 08:30:46', 5, 0),
(109, 'waterflow', '2024-04-09 08:31:07', 5, 0),
(110, 'waterflow', '2024-04-09 08:31:29', 5, 0),
(111, 'waterflow', '2024-04-09 08:31:51', 5, 0),
(112, 'waterflow', '2024-04-09 08:32:12', 5, 0),
(113, 'waterflow', '2024-04-09 08:32:34', 5, 0),
(114, 'waterflow', '2024-04-09 08:32:56', 5, 0),
(115, 'waterflow', '2024-04-09 08:35:04', 5, 0),
(116, 'waterflow', '2024-04-09 08:35:25', 5, 0),
(117, 'waterflow', '2024-04-09 08:35:47', 5, 0),
(118, 'waterflow', '2024-04-09 08:36:09', 5, 0),
(119, 'waterflow', '2024-04-09 08:36:30', 5, 0),
(120, 'waterflow', '2024-04-09 08:36:52', 5, 0),
(121, 'waterflow', '2024-04-09 08:37:14', 5, 0),
(122, 'waterflow', '2024-04-09 08:37:35', 5, 0),
(123, 'waterflow', '2024-04-09 08:37:57', 5, 0),
(124, 'waterflow', '2024-04-09 08:38:19', 5, 0),
(125, 'waterflow', '2024-04-09 08:38:40', 5, 0),
(126, 'waterflow', '2024-04-09 08:39:02', 5, 0),
(127, 'waterflow', '2024-04-09 08:52:59', 5, 0),
(128, 'waterflow', '2024-04-09 08:53:27', 5, 0),
(129, 'waterflow', '2024-04-09 08:53:54', 5, 0),
(130, 'waterflow', '2024-04-09 08:54:22', 5, 0),
(131, 'waterflow', '2024-04-09 08:54:50', 5, 0),
(132, 'waterflow', '2024-04-09 08:55:17', 5, 0),
(133, 'waterflow', '2024-04-09 08:55:45', 5, 0),
(134, 'waterflow', '2024-04-09 08:56:13', 5, 0),
(135, 'waterflow', '2024-04-09 08:56:40', 5, 0),
(136, 'waterflow', '2024-04-09 08:57:08', 5, 0),
(137, 'waterflow', '2024-04-09 08:57:36', 5, 0),
(138, 'waterflow', '2024-04-09 08:58:03', 5, 0),
(139, 'waterflow', '2024-04-09 08:58:31', 5, 0),
(140, 'waterflow', '2024-04-09 08:58:59', 5, 0),
(141, 'waterflow', '2024-04-09 08:59:26', 5, 0),
(142, 'waterflow', '2024-04-09 08:59:54', 5, 0),
(143, 'waterflow', '2024-04-09 09:00:22', 5, 0),
(144, 'waterflow', '2024-04-09 09:00:49', 5, 0),
(145, 'waterflow', '2024-04-09 09:01:17', 5, 0),
(146, 'waterflow', '2024-04-09 09:01:45', 5, 0),
(147, 'waterflow', '2024-04-10 02:20:00', 5, 0),
(148, 'waterflow', '2024-04-10 02:22:28', 5, 0),
(149, 'waterflow', '2024-04-10 03:33:57', 5, 0),
(150, 'waterflow', '2024-04-10 03:46:14', 5, 0),
(151, 'waterflow', '2024-04-10 03:46:35', 5, 0),
(152, 'waterflow', '2024-04-10 03:48:38', 5, 0),
(153, 'waterflow', '2024-04-10 03:59:52', 5, 0),
(154, 'waterflow', '2024-04-10 04:00:05', 5, 0),
(155, 'waterflow', '2024-04-10 04:03:19', 5, 0),
(156, 'waterflow', '2024-04-10 04:05:47', 5, 0),
(157, 'waterflow', '2024-04-10 04:16:16', 5, 0),
(158, 'waterflow', '2024-04-10 04:17:16', 5, 0),
(159, 'waterflow', '2024-04-10 04:17:54', 5, 0),
(160, 'waterflow', '2024-04-10 04:18:21', 5, 0),
(161, 'waterflow', '2024-04-10 04:19:02', 5, 0),
(162, 'waterflow', '2024-04-10 04:19:17', 5, 0),
(163, 'waterflow', '2024-04-10 04:19:45', 5, 0),
(164, 'waterflow', '2024-04-10 04:22:33', 5, 0),
(165, 'waterflow', '2024-04-11 00:22:24', 5, 0),
(166, 'waterflow', '2024-04-11 00:23:14', 5, 0),
(167, 'waterflow', '2024-04-13 15:58:58', 5, 0),
(168, 'waterflow', '2024-04-13 16:14:36', 5, 0),
(169, 'waterflow', '2024-04-13 16:15:35', 5, 0),
(170, 'waterflow', '2024-04-13 16:18:03', 5, 0),
(171, 'waterflow', '2024-04-13 17:57:27', 5, 0),
(172, 'waterflow', '2024-04-13 18:03:21', 5, 0),
(173, 'waterflow', '2024-04-16 11:02:42', 5, 0),
(174, 'waterflow', '2024-04-16 11:18:07', 5, 0),
(175, 'waterflow', '2024-04-16 11:28:10', 5, 0),
(176, 'waterflow', '2024-04-16 11:31:23', 5, 0),
(177, 'waterflow', '2024-04-16 11:31:51', 5, 0),
(178, 'waterflow', '2024-04-19 12:39:43', 5, 0),
(179, 'waterflow', '2024-04-19 12:41:31', 5, 0),
(180, 'waterflow', '2024-04-19 12:41:32', 5, 0),
(181, 'waterflow', '2024-04-19 15:23:29', 2, 0),
(182, 'waterflow', '2024-04-20 15:49:51', 5, 0),
(183, 'waterflow', '2024-04-20 15:50:37', 5, 0),
(184, 'waterflow', '2024-04-20 15:51:22', 5, 0),
(185, 'waterflow', '2024-04-20 15:52:08', 5, 0),
(186, 'waterflow', '2024-04-21 06:25:51', 2, 0),
(187, 'waterflow', '2024-04-21 06:44:39', 5, 0),
(188, 'waterflow', '2024-04-21 06:45:24', 5, 0),
(189, 'waterflow', '2024-04-21 06:46:10', 5, 0),
(190, 'waterflow', '2024-04-21 06:52:20', 5, 0),
(191, 'waterflow', '2024-04-21 06:53:05', 5, 0),
(192, 'waterflow', '2024-04-21 07:03:36', 5, 0),
(193, 'waterflow', '2024-04-21 07:07:33', 5, 0),
(194, 'waterflow', '2024-04-21 07:08:19', 5, 0),
(195, 'waterflow', '2024-04-21 11:38:35', 5, 0),
(196, 'waterflow', '2024-04-21 11:39:21', 5, 0),
(197, 'waterflow', '2024-04-21 11:40:06', 5, 0),
(198, 'waterflow', '2024-04-21 11:40:52', 5, 0),
(199, 'waterflow', '2024-04-21 11:41:38', 5, 0),
(200, 'waterflow', '2024-04-21 11:42:23', 5, 0),
(201, 'waterflow', '2024-04-21 11:43:09', 5, 0),
(202, 'waterflow', '2024-04-21 11:43:55', 5, 0),
(203, 'waterflow', '2024-04-21 11:44:40', 5, 0),
(204, 'waterflow', '2024-04-22 13:58:47', 5, 0),
(205, 'waterflow', '2024-04-22 14:05:13', 5, 0),
(206, 'waterflow', '2024-04-22 14:15:26', 5, 0),
(207, 'waterflow', '2024-04-22 14:46:27', 5, 0),
(208, 'waterflow', '2024-04-22 14:48:00', 5, 0),
(209, 'waterflow', '2024-04-22 14:49:33', 5, 0),
(210, 'waterflow', '2024-04-22 14:51:05', 5, 0),
(211, 'waterflow', '2024-04-22 16:16:22', 5, 0),
(212, 'waterflow', '2024-04-22 16:17:50', 5, 0),
(213, 'waterflow', '2024-04-22 16:19:17', 5, 0),
(214, 'waterflow', '2024-04-22 16:20:45', 5, 0),
(215, 'waterflow', '2024-04-22 16:22:13', 5, 0),
(216, 'waterflow', '2024-04-22 16:23:40', 5, 0),
(217, 'waterflow', '2024-04-22 16:25:08', 5, 0),
(218, 'waterflow', '2024-04-22 16:26:36', 5, 0),
(219, 'waterflow', '2024-04-22 16:28:04', 5, 0),
(220, 'waterflow', '2024-04-22 16:29:31', 5, 0),
(221, 'waterflow', '2024-04-22 16:30:59', 5, 0),
(222, 'waterflow', '2024-04-22 16:32:27', 5, 0),
(223, 'waterflow', '2024-04-22 16:33:54', 5, 0),
(224, 'waterflow', '2024-04-22 16:39:01', 5, 0),
(225, 'waterflow', '2024-04-22 16:40:34', 5, 0),
(226, 'waterflow', '2024-04-22 16:42:06', 5, 0),
(227, 'waterflow', '2024-04-22 16:44:53', 10, 0),
(228, 'waterflow', '2024-04-22 16:46:42', 10, 0),
(229, 'waterflow', '2024-04-22 16:48:31', 10, 0),
(230, 'waterflow', '2024-04-22 16:50:20', 10, 0);

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
(96, 'waterlevel', '2024-04-09 06:38:09', 2, 0),
(97, 'waterlevel', '2024-04-09 06:38:25', 2, 0),
(98, 'waterlevel', '2024-04-09 06:38:43', 3, 0),
(99, 'waterlevel', '2024-04-09 06:38:51', 3, 0),
(100, 'waterlevel', '2024-04-09 06:38:58', 3, 0),
(101, 'waterlevel', '2024-04-09 06:39:06', 5, 0),
(102, 'waterlevel', '2024-04-09 08:28:59', 1, 0),
(103, 'waterlevel', '2024-04-09 08:29:19', 0, 0),
(104, 'waterlevel', '2024-04-09 08:29:41', 1, 0),
(105, 'waterlevel', '2024-04-09 08:30:03', 0, 0),
(106, 'waterlevel', '2024-04-09 08:30:24', 1, 0),
(107, 'waterlevel', '2024-04-09 08:30:46', 0, 0),
(108, 'waterlevel', '2024-04-09 08:31:07', 0, 0),
(109, 'waterlevel', '2024-04-09 08:31:29', 1, 0),
(110, 'waterlevel', '2024-04-09 08:31:51', 0, 0),
(111, 'waterlevel', '2024-04-09 08:32:12', 1, 0),
(112, 'waterlevel', '2024-04-09 08:32:34', 1, 0),
(113, 'waterlevel', '2024-04-09 08:32:56', 2, 0),
(114, 'waterlevel', '2024-04-09 08:35:04', 0, 0),
(115, 'waterlevel', '2024-04-09 08:35:25', 0, 0),
(116, 'waterlevel', '2024-04-09 08:35:47', 0, 0),
(117, 'waterlevel', '2024-04-09 08:36:09', 0, 0),
(118, 'waterlevel', '2024-04-09 08:36:30', 1, 0),
(119, 'waterlevel', '2024-04-09 08:36:52', 1, 0),
(120, 'waterlevel', '2024-04-09 08:37:14', 6, 0),
(121, 'waterlevel', '2024-04-09 08:37:35', 5, 0),
(122, 'waterlevel', '2024-04-09 08:37:57', 4, 0),
(123, 'waterlevel', '2024-04-09 08:38:19', 3, 0),
(124, 'waterlevel', '2024-04-09 08:38:40', 4, 0),
(125, 'waterlevel', '2024-04-09 08:39:02', 4, 0),
(126, 'waterlevel', '2024-04-09 08:52:59', 10, 0),
(127, 'waterlevel', '2024-04-09 08:53:27', 2, 0),
(128, 'waterlevel', '2024-04-09 08:53:54', 4, 0),
(129, 'waterlevel', '2024-04-09 08:54:22', 2, 0),
(130, 'waterlevel', '2024-04-09 08:54:50', 3, 0),
(131, 'waterlevel', '2024-04-09 08:55:17', 2, 0),
(132, 'waterlevel', '2024-04-09 08:55:45', 5, 0),
(133, 'waterlevel', '2024-04-09 08:56:13', 9, 0),
(134, 'waterlevel', '2024-04-09 08:56:40', 10, 0),
(135, 'waterlevel', '2024-04-09 08:57:08', 1, 0),
(136, 'waterlevel', '2024-04-09 08:57:36', 36, 0),
(137, 'waterlevel', '2024-04-09 08:58:03', 28, 0),
(138, 'waterlevel', '2024-04-09 08:58:31', 156, 0),
(139, 'waterlevel', '2024-04-09 08:58:59', 3, 0),
(140, 'waterlevel', '2024-04-09 08:59:26', 3, 0),
(141, 'waterlevel', '2024-04-09 08:59:54', 3, 0),
(142, 'waterlevel', '2024-04-09 09:00:22', 3, 0),
(143, 'waterlevel', '2024-04-09 09:00:49', 4, 0),
(144, 'waterlevel', '2024-04-09 09:01:17', 3, 0),
(145, 'waterlevel', '2024-04-09 09:01:45', 2, 0),
(146, 'waterlevel', '2024-04-10 02:20:00', 2, 0),
(147, 'waterlevel', '2024-04-10 02:22:28', 2, 0),
(148, 'waterlevel', '2024-04-10 03:33:57', 4, 0),
(149, 'waterlevel', '2024-04-10 03:46:14', 4, 0),
(150, 'waterlevel', '2024-04-10 03:46:35', 4, 0),
(151, 'waterlevel', '2024-04-10 03:48:38', 4, 0),
(152, 'waterlevel', '2024-04-10 03:59:52', 4, 0),
(153, 'waterlevel', '2024-04-10 04:00:05', 4, 0),
(154, 'waterlevel', '2024-04-10 04:03:19', 2, 0),
(155, 'waterlevel', '2024-04-10 04:05:47', 1, 0),
(156, 'waterlevel', '2024-04-10 04:16:16', 2, 0),
(157, 'waterlevel', '2024-04-10 04:17:16', 2, 0),
(158, 'waterlevel', '2024-04-10 04:17:54', 2, 0),
(159, 'waterlevel', '2024-04-10 04:18:21', 2, 0),
(160, 'waterlevel', '2024-04-10 04:19:02', 2, 0),
(161, 'waterlevel', '2024-04-10 04:19:17', 2, 0),
(162, 'waterlevel', '2024-04-10 04:19:45', 2, 0),
(163, 'waterlevel', '2024-04-10 04:22:33', 2, 0),
(164, 'waterlevel', '2024-04-11 00:22:24', 2, 0),
(165, 'waterlevel', '2024-04-11 00:23:14', 2, 0),
(166, 'waterlevel', '2024-04-13 15:58:58', 4, 0),
(167, 'waterlevel', '2024-04-13 16:14:36', 11, 0),
(168, 'waterlevel', '2024-04-13 16:15:35', 10, 0),
(169, 'waterlevel', '2024-04-13 16:18:03', 10, 0),
(170, 'waterlevel', '2024-04-13 17:57:27', 5, 0),
(171, 'waterlevel', '2024-04-13 18:03:21', 5, 0),
(172, 'waterlevel', '2024-04-16 11:02:42', 5, 0),
(173, 'waterlevel', '2024-04-16 11:18:07', 5, 0),
(174, 'waterlevel', '2024-04-16 11:28:10', 5, 0),
(175, 'waterlevel', '2024-04-16 11:31:23', 5, 0),
(176, 'waterlevel', '2024-04-16 11:31:51', 5, 0),
(177, 'waterlevel', '2024-04-19 12:39:43', 5, 0),
(178, 'waterlevel', '2024-04-19 12:41:31', 5, 0),
(179, 'waterlevel', '2024-04-19 12:41:32', 5, 0),
(180, 'waterlevel', '2024-04-19 15:23:29', 5, 0),
(181, 'waterlevel', '2024-04-20 15:49:51', 584, 0),
(182, 'waterlevel', '2024-04-20 15:50:37', 22, 0),
(183, 'waterlevel', '2024-04-20 15:51:22', 0, 0),
(184, 'waterlevel', '2024-04-20 15:52:08', 314, 0),
(185, 'waterlevel', '2024-04-21 06:25:51', 5, 0),
(186, 'waterlevel', '2024-04-21 06:44:39', 623, 0),
(187, 'waterlevel', '2024-04-21 06:45:24', 331, 0),
(188, 'waterlevel', '2024-04-21 06:46:10', 329, 0),
(189, 'waterlevel', '2024-04-21 06:52:20', 614, 0),
(190, 'waterlevel', '2024-04-21 06:53:05', 329, 0),
(191, 'waterlevel', '2024-04-21 07:03:36', 622, 0),
(192, 'waterlevel', '2024-04-21 07:07:33', 641, 0),
(193, 'waterlevel', '2024-04-21 07:08:19', 408, 0),
(194, 'waterlevel', '2024-04-21 11:38:35', 587, 0),
(195, 'waterlevel', '2024-04-21 11:39:21', 311, 0),
(196, 'waterlevel', '2024-04-21 11:40:06', 296, 0),
(197, 'waterlevel', '2024-04-21 11:40:52', 300, 0),
(198, 'waterlevel', '2024-04-21 11:41:38', 306, 0),
(199, 'waterlevel', '2024-04-21 11:42:23', 358, 0),
(200, 'waterlevel', '2024-04-21 11:43:09', 332, 0),
(201, 'waterlevel', '2024-04-21 11:43:55', 296, 0),
(202, 'waterlevel', '2024-04-21 11:44:40', 348, 0),
(203, 'waterlevel', '2024-04-22 13:58:47', 31, 0),
(204, 'waterlevel', '2024-04-22 14:05:13', 13, 0),
(205, 'waterlevel', '2024-04-22 14:15:26', 49, 0),
(206, 'waterlevel', '2024-04-22 14:46:27', 135, 0),
(207, 'waterlevel', '2024-04-22 14:48:00', 128, 0),
(208, 'waterlevel', '2024-04-22 14:49:33', 126, 0),
(209, 'waterlevel', '2024-04-22 14:51:05', 125, 0),
(210, 'waterlevel', '2024-04-22 16:16:22', 121, 0),
(211, 'waterlevel', '2024-04-22 16:17:50', 128, 0),
(212, 'waterlevel', '2024-04-22 16:19:17', 129, 0),
(213, 'waterlevel', '2024-04-22 16:20:45', 129, 0),
(214, 'waterlevel', '2024-04-22 16:22:13', 129, 0),
(215, 'waterlevel', '2024-04-22 16:23:40', 129, 0),
(216, 'waterlevel', '2024-04-22 16:25:08', 129, 0),
(217, 'waterlevel', '2024-04-22 16:26:36', 128, 0),
(218, 'waterlevel', '2024-04-22 16:28:04', 128, 0),
(219, 'waterlevel', '2024-04-22 16:29:31', 126, 0),
(220, 'waterlevel', '2024-04-22 16:30:59', 125, 0),
(221, 'waterlevel', '2024-04-22 16:32:27', 125, 0),
(222, 'waterlevel', '2024-04-22 16:33:54', 124, 0),
(223, 'waterlevel', '2024-04-22 16:39:01', 124, 0),
(224, 'waterlevel', '2024-04-22 16:40:34', 122, 0),
(225, 'waterlevel', '2024-04-22 16:42:06', 123, 0),
(226, 'waterlevel', '2024-04-22 16:44:53', 122, 0),
(227, 'waterlevel', '2024-04-22 16:46:42', 122, 0),
(228, 'waterlevel', '2024-04-22 16:48:31', 122, 0),
(229, 'waterlevel', '2024-04-22 16:50:20', 122, 0);

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
  MODIFY `acid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `average`
--
ALTER TABLE `average`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=724;

--
-- AUTO_INCREMENT for table `temperature`
--
ALTER TABLE `temperature`
  MODIFY `temp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `total_dissolved_solids`
--
ALTER TABLE `total_dissolved_solids`
  MODIFY `tds_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `waterflow`
--
ALTER TABLE `waterflow`
  MODIFY `flow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `waterlevel`
--
ALTER TABLE `waterlevel`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
