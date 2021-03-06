-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2019 at 11:20 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ci_online_product`
--
CREATE DATABASE IF NOT EXISTS `project_ci_online_product` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `project_ci_online_product`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counter`
--

CREATE TABLE `tbl_counter` (
  `c_id` int(10) NOT NULL,
  `c_ip` varchar(50) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_counter`
--

INSERT INTO `tbl_counter` (`c_id`, `c_ip`, `c_date`) VALUES
(1, '127.0.0.1', '2018-06-20 11:18:59'),
(2, '127.0.0.1', '2018-06-20 11:18:59'),
(3, '127.0.0.1', '2018-06-20 11:18:59'),
(4, '127.0.0.1', '2018-06-20 11:18:59'),
(5, '127.0.0.1', '2018-06-20 11:18:59'),
(6, '127.0.0.1', '2018-06-20 11:18:59'),
(7, '127.0.0.1', '2018-06-20 11:18:59'),
(8, '127.0.0.1', '2018-06-20 11:18:59'),
(9, '127.0.0.1', '2018-06-20 11:18:59'),
(10, '127.0.0.1', '2018-06-20 11:18:59'),
(11, '127.0.0.1', '2018-06-20 11:18:59'),
(12, '127.0.0.1', '2018-06-20 11:18:59'),
(13, '127.0.0.1', '2018-06-20 11:18:59'),
(14, '127.0.0.1', '2018-06-20 11:18:59'),
(15, '127.0.0.1', '2018-07-03 11:32:40'),
(16, '127.0.0.1', '2018-07-03 11:33:09'),
(17, '127.0.0.1', '2018-07-03 11:34:21'),
(18, '127.0.0.1', '2018-07-03 11:34:52'),
(19, '127.0.0.1', '2018-07-03 11:37:29'),
(20, '127.0.0.1', '2018-07-03 11:37:30'),
(21, '127.0.0.1', '2018-07-03 11:37:32'),
(22, '127.0.0.1', '2018-07-03 11:37:32'),
(23, '127.0.0.1', '2018-07-03 11:37:33'),
(24, '127.0.0.1', '2018-08-31 11:38:48'),
(25, '127.0.0.1', '2018-07-03 11:39:16'),
(26, '127.0.0.1', '2018-07-03 11:39:18'),
(27, '127.0.0.1', '2018-07-03 11:39:19'),
(28, '127.0.0.1', '2018-07-03 11:41:11'),
(29, '127.0.0.1', '2018-07-03 11:41:14'),
(30, '127.0.0.1', '2018-07-03 11:41:47'),
(31, '127.0.0.1', '2018-07-03 11:42:24'),
(32, '127.0.0.1', '2018-07-03 11:42:50'),
(33, '127.0.0.1', '2018-07-03 11:58:19'),
(34, '127.0.0.1', '2018-07-03 12:00:23'),
(35, '127.0.0.1', '2018-07-03 12:03:30'),
(36, '127.0.0.1', '2018-07-03 12:03:57'),
(37, '127.0.0.1', '2018-07-03 12:07:22'),
(38, '127.0.0.1', '2018-07-03 12:08:34'),
(39, '127.0.0.1', '2018-07-03 12:31:52'),
(40, '127.0.0.1', '2018-07-03 12:32:33'),
(41, '127.0.0.1', '2018-08-31 11:38:48'),
(42, '127.0.0.1', '2018-08-31 11:38:48'),
(43, '127.0.0.1', '2018-08-31 11:38:48'),
(44, '127.0.0.1', '2018-08-31 11:38:48'),
(45, '127.0.0.1', '2018-08-31 11:38:48'),
(46, '127.0.0.1', '2018-08-31 11:38:48'),
(47, '127.0.0.1', '2018-08-31 11:38:48'),
(48, '127.0.0.1', '2018-08-31 11:38:48'),
(49, '127.0.0.1', '2018-08-31 11:38:48'),
(50, '127.0.0.1', '2018-08-31 11:38:48'),
(51, '127.0.0.1', '2018-08-31 11:38:48'),
(52, '127.0.0.1', '2018-08-31 11:38:48'),
(53, '127.0.0.1', '2018-08-31 11:38:48'),
(54, '127.0.0.1', '2018-08-31 11:38:48'),
(55, '127.0.0.1', '2018-08-31 11:38:48'),
(56, '127.0.0.1', '2018-07-03 13:11:25'),
(57, '127.0.0.1', '2018-07-03 13:11:27'),
(58, '127.0.0.1', '2018-07-03 13:11:35'),
(59, '127.0.0.1', '2018-07-03 13:12:09'),
(60, '127.0.0.1', '2018-07-03 13:12:10'),
(61, '127.0.0.1', '2018-07-04 14:13:07'),
(62, '127.0.0.1', '2018-07-05 09:38:11'),
(63, '127.0.0.1', '2018-07-05 09:39:48'),
(64, '127.0.0.1', '2018-07-05 09:40:47'),
(65, '127.0.0.1', '2018-07-05 09:40:48'),
(66, '127.0.0.1', '2018-07-05 09:40:59'),
(67, '127.0.0.1', '2018-07-05 09:41:35'),
(68, '127.0.0.1', '2018-07-05 09:44:48'),
(69, '127.0.0.1', '2018-07-05 09:57:45'),
(70, '127.0.0.1', '2018-07-05 10:03:15'),
(71, '127.0.0.1', '2018-07-05 10:04:50'),
(72, '127.0.0.1', '2018-07-05 10:05:13'),
(73, '127.0.0.1', '2018-07-05 10:08:07'),
(74, '127.0.0.1', '2018-07-05 10:08:23'),
(75, '127.0.0.1', '2018-07-05 10:10:52'),
(76, '127.0.0.1', '2018-07-05 10:17:43'),
(77, '127.0.0.1', '2018-07-05 10:17:45'),
(78, '127.0.0.1', '2018-07-05 10:17:46'),
(79, '127.0.0.1', '2018-07-05 10:17:47'),
(80, '127.0.0.1', '2018-07-05 10:17:59'),
(81, '127.0.0.1', '2018-07-05 10:23:20'),
(82, '127.0.0.1', '2018-07-05 10:23:40'),
(83, '127.0.0.1', '2018-07-05 10:26:39'),
(84, '127.0.0.1', '2018-07-05 10:31:24'),
(85, '127.0.0.1', '2018-07-05 10:38:08'),
(86, '127.0.0.1', '2018-07-05 10:39:04'),
(87, '127.0.0.1', '2018-07-05 10:50:46'),
(88, '127.0.0.1', '2018-07-05 10:51:02'),
(89, '127.0.0.1', '2018-07-05 10:51:24'),
(90, '127.0.0.1', '2018-07-05 10:51:37'),
(91, '127.0.0.1', '2018-07-05 10:52:01'),
(92, '127.0.0.1', '2018-07-05 10:52:18'),
(93, '127.0.0.1', '2018-07-05 10:52:20'),
(94, '127.0.0.1', '2018-07-05 10:54:01'),
(95, '127.0.0.1', '2018-07-05 10:54:05'),
(96, '127.0.0.1', '2018-07-05 10:54:25'),
(97, '127.0.0.1', '2018-07-05 10:54:26'),
(98, '127.0.0.1', '2018-07-05 10:56:33'),
(99, '127.0.0.1', '2018-07-05 10:56:34'),
(100, '127.0.0.1', '2018-07-05 10:58:06'),
(101, '127.0.0.1', '2018-07-05 10:59:08'),
(102, '127.0.0.1', '2018-07-07 04:27:43'),
(103, '127.0.0.1', '2018-07-07 04:48:10'),
(104, '127.0.0.1', '2018-07-07 04:48:18'),
(105, '127.0.0.1', '2018-07-07 04:48:24'),
(106, '127.0.0.1', '2018-07-08 15:06:35'),
(107, '127.0.0.1', '2018-07-08 15:09:49'),
(108, '127.0.0.1', '2018-07-08 15:10:48'),
(109, '127.0.0.1', '2018-07-08 15:11:43'),
(110, '127.0.0.1', '2018-07-08 15:12:42'),
(111, '127.0.0.1', '2018-07-08 15:13:08'),
(112, '127.0.0.1', '2018-07-08 15:21:19'),
(113, '127.0.0.1', '2018-07-08 15:22:03'),
(114, '127.0.0.1', '2018-07-08 15:23:52'),
(115, '127.0.0.1', '2018-07-08 15:23:57'),
(116, '127.0.0.1', '2018-07-08 15:32:32'),
(117, '127.0.0.1', '2018-07-08 15:32:45'),
(118, '127.0.0.1', '2018-07-08 16:03:15'),
(119, '127.0.0.1', '2018-07-08 16:03:27'),
(120, '127.0.0.1', '2018-07-08 16:19:53'),
(121, '127.0.0.1', '2018-07-08 16:20:49'),
(122, '127.0.0.1', '2018-07-09 10:23:53'),
(123, '127.0.0.1', '2018-07-09 10:24:01'),
(124, '127.0.0.1', '2018-07-09 10:24:42'),
(125, '127.0.0.1', '2018-07-09 10:33:32'),
(126, '127.0.0.1', '2018-07-09 10:35:42'),
(127, '127.0.0.1', '2018-07-09 10:37:06'),
(128, '127.0.0.1', '2018-07-09 10:37:08'),
(129, '127.0.0.1', '2018-07-09 10:37:11'),
(130, '127.0.0.1', '2018-07-09 10:37:32'),
(131, '127.0.0.1', '2018-07-09 10:37:43'),
(132, '127.0.0.1', '2018-07-09 10:39:56'),
(133, '127.0.0.1', '2018-07-09 10:41:02'),
(134, '127.0.0.1', '2018-07-09 10:41:26'),
(135, '127.0.0.1', '2018-07-09 11:30:53'),
(136, '127.0.0.1', '2018-07-09 11:33:02'),
(137, '127.0.0.1', '2018-07-09 11:33:02'),
(138, '127.0.0.1', '2018-07-09 11:33:06'),
(139, '127.0.0.1', '2018-07-09 11:33:20'),
(140, '127.0.0.1', '2018-07-09 11:34:55'),
(141, '127.0.0.1', '2018-07-09 11:35:04'),
(142, '127.0.0.1', '2018-07-09 11:43:53'),
(143, '127.0.0.1', '2018-07-09 11:48:14'),
(144, '127.0.0.1', '2018-07-09 11:48:15'),
(145, '127.0.0.1', '2018-07-09 11:48:15'),
(146, '127.0.0.1', '2018-07-09 11:50:12'),
(147, '127.0.0.1', '2018-07-09 11:52:07'),
(148, '127.0.0.1', '2018-07-11 04:11:34'),
(149, '127.0.0.1', '2018-07-11 04:13:55'),
(150, '127.0.0.1', '2018-07-12 15:20:21'),
(151, '127.0.0.1', '2018-07-12 15:35:40'),
(152, '127.0.0.1', '2018-07-12 15:38:33'),
(153, '127.0.0.1', '2018-07-12 15:38:39'),
(154, '127.0.0.1', '2018-07-14 05:48:56'),
(155, '127.0.0.1', '2018-07-14 06:06:04'),
(156, '127.0.0.1', '2018-07-14 09:28:13'),
(157, '127.0.0.1', '2018-07-14 15:44:47'),
(158, '127.0.0.1', '2018-07-15 08:54:10'),
(159, '127.0.0.1', '2018-07-15 09:00:22'),
(160, '127.0.0.1', '2018-07-15 09:02:51'),
(161, '127.0.0.1', '2018-07-15 09:05:19'),
(162, '127.0.0.1', '2018-07-15 09:07:07'),
(163, '127.0.0.1', '2018-07-15 09:08:19'),
(164, '127.0.0.1', '2018-07-15 09:08:22'),
(165, '127.0.0.1', '2018-07-15 09:08:57'),
(166, '127.0.0.1', '2018-07-15 09:08:59'),
(167, '127.0.0.1', '2018-07-15 09:09:01'),
(168, '127.0.0.1', '2018-07-15 09:09:19'),
(169, '127.0.0.1', '2018-07-31 14:23:11'),
(170, '127.0.0.1', '2018-07-31 14:23:28'),
(171, '127.0.0.1', '2018-07-31 14:25:23'),
(172, '127.0.0.1', '2018-07-31 14:26:04'),
(173, '127.0.0.1', '2018-07-31 14:26:05'),
(174, '127.0.0.1', '2018-07-31 14:26:05'),
(175, '127.0.0.1', '2018-07-31 14:26:39'),
(176, '127.0.0.1', '2018-07-31 14:26:51'),
(177, '127.0.0.1', '2018-07-31 14:27:46'),
(178, '127.0.0.1', '2018-07-31 14:31:09'),
(179, '127.0.0.1', '2018-10-03 14:22:48'),
(180, '127.0.0.1', '2018-10-03 14:23:26'),
(181, '127.0.0.1', '2018-10-03 14:23:48'),
(182, '127.0.0.1', '2018-10-03 14:24:01'),
(183, '127.0.0.1', '2018-10-16 07:48:16'),
(184, '127.0.0.1', '2018-10-16 07:48:19'),
(185, '127.0.0.1', '2018-10-16 07:48:37'),
(186, '127.0.0.1', '2018-10-16 07:48:38'),
(187, '127.0.0.1', '2018-10-16 07:49:40'),
(188, '127.0.0.1', '2018-11-04 12:43:57'),
(189, '127.0.0.1', '2018-11-04 12:47:55'),
(190, '127.0.0.1', '2018-11-04 12:50:31'),
(191, '127.0.0.1', '2018-11-04 12:52:52'),
(192, '127.0.0.1', '2018-11-04 12:53:24'),
(193, '127.0.0.1', '2019-01-24 10:04:32'),
(194, '127.0.0.1', '2019-01-24 10:07:18'),
(195, '127.0.0.1', '2019-01-24 10:08:04'),
(196, '127.0.0.1', '2019-01-29 12:30:35'),
(197, '127.0.0.1', '2019-01-29 14:08:42'),
(198, '127.0.0.1', '2019-01-29 14:09:03'),
(199, '127.0.0.1', '2019-01-29 14:09:22'),
(200, '127.0.0.1', '2019-01-29 14:09:39'),
(201, '127.0.0.1', '2019-01-29 14:09:53'),
(202, '127.0.0.1', '2019-01-29 14:11:58'),
(203, '127.0.0.1', '2019-01-29 14:11:58'),
(204, '127.0.0.1', '2019-01-29 14:11:59'),
(205, '127.0.0.1', '2019-01-29 14:12:02'),
(206, '127.0.0.1', '2019-01-29 14:12:04'),
(207, '127.0.0.1', '2019-02-21 10:04:09'),
(208, '127.0.0.1', '2019-03-05 12:28:19'),
(209, '127.0.0.1', '2019-03-05 12:28:32'),
(210, '127.0.0.1', '2019-03-05 12:28:39'),
(211, '127.0.0.1', '2019-03-05 12:28:39'),
(212, '127.0.0.1', '2019-03-05 12:29:44'),
(213, '127.0.0.1', '2019-03-05 12:42:04'),
(214, '127.0.0.1', '2019-03-05 12:42:14'),
(215, '127.0.0.1', '2019-03-05 12:42:25'),
(216, '127.0.0.1', '2019-03-05 12:43:24'),
(217, '127.0.0.1', '2019-03-05 12:45:04'),
(218, '127.0.0.1', '2019-03-05 12:45:11'),
(219, '127.0.0.1', '2019-03-05 12:45:44'),
(220, '127.0.0.1', '2019-03-05 12:48:53'),
(221, '127.0.0.1', '2019-03-05 12:49:36'),
(222, '127.0.0.1', '2019-03-06 09:25:31'),
(223, '127.0.0.1', '2019-03-10 09:26:48'),
(224, '127.0.0.1', '2019-03-10 09:26:48'),
(225, '127.0.0.1', '2019-03-10 09:41:12'),
(226, '127.0.0.1', '2019-03-10 09:41:13'),
(227, '127.0.0.1', '2019-03-10 09:49:09'),
(228, '127.0.0.1', '2019-03-18 04:18:38'),
(229, '127.0.0.1', '2019-03-18 04:18:39'),
(230, '127.0.0.1', '2019-03-18 04:18:43'),
(231, '127.0.0.1', '2019-03-18 04:18:45'),
(232, '127.0.0.1', '2019-03-18 04:19:11'),
(233, '127.0.0.1', '2019-03-18 07:48:34'),
(234, '127.0.0.1', '2019-03-18 07:48:34'),
(235, '127.0.0.1', '2019-03-18 07:51:04'),
(236, '127.0.0.1', '2019-03-18 07:51:07'),
(237, '127.0.0.1', '2019-03-18 07:51:07'),
(238, '127.0.0.1', '2019-03-18 07:53:12'),
(239, '127.0.0.1', '2019-03-18 08:00:09'),
(240, '127.0.0.1', '2019-03-18 08:01:22'),
(241, '127.0.0.1', '2019-03-18 08:01:55'),
(242, '127.0.0.1', '2019-03-18 08:01:56'),
(243, '127.0.0.1', '2019-03-18 08:01:58'),
(244, '127.0.0.1', '2019-03-18 08:02:04'),
(245, '127.0.0.1', '2019-03-18 08:04:42'),
(246, '127.0.0.1', '2019-03-18 08:04:50'),
(247, '127.0.0.1', '2019-03-18 08:14:20'),
(248, '127.0.0.1', '2019-03-18 08:20:23'),
(249, '127.0.0.1', '2019-04-03 09:48:07'),
(250, '127.0.0.1', '2019-04-28 01:29:46'),
(251, '127.0.0.1', '2019-04-28 01:34:42'),
(252, '127.0.0.1', '2019-04-28 03:00:38'),
(253, '127.0.0.1', '2019-04-28 04:23:32'),
(254, '127.0.0.1', '2019-07-10 11:44:04'),
(255, '127.0.0.1', '2019-07-15 05:22:47'),
(256, '127.0.0.1', '2019-08-11 04:32:06'),
(257, '127.0.0.1', '2019-08-17 03:46:05'),
(258, '127.0.0.1', '2019-08-17 03:46:34'),
(259, '127.0.0.1', '2019-08-17 05:36:17'),
(260, '127.0.0.1', '2019-08-17 05:36:27'),
(261, '127.0.0.1', '2019-08-17 05:37:44'),
(262, '127.0.0.1', '2019-08-17 05:37:45'),
(263, '127.0.0.1', '2019-08-17 05:37:45'),
(264, '127.0.0.1', '2019-08-17 05:37:46'),
(265, '127.0.0.1', '2019-08-17 05:37:46'),
(266, '127.0.0.1', '2019-08-17 05:37:46'),
(267, '127.0.0.1', '2019-08-17 05:37:46'),
(268, '127.0.0.1', '2019-08-17 05:45:58'),
(269, '127.0.0.1', '2019-08-17 05:46:22'),
(270, '127.0.0.1', '2019-08-17 08:30:14'),
(271, '127.0.0.1', '2019-08-18 02:57:20'),
(272, '127.0.0.1', '2019-08-18 02:58:18'),
(273, '127.0.0.1', '2019-08-18 02:58:37'),
(274, '127.0.0.1', '2019-08-22 07:22:55'),
(275, '127.0.0.1', '2019-08-25 05:33:52'),
(276, '127.0.0.1', '2019-09-05 05:46:16'),
(277, '127.0.0.1', '2019-09-20 01:20:48'),
(278, '127.0.0.1', '2019-09-20 01:20:54'),
(279, '127.0.0.1', '2019-09-20 01:20:58'),
(280, '127.0.0.1', '2019-09-20 01:21:47'),
(281, '127.0.0.1', '2019-09-20 01:32:03'),
(282, '127.0.0.1', '2019-09-20 01:32:21'),
(283, '127.0.0.1', '2019-09-20 01:35:23'),
(284, '127.0.0.1', '2019-09-20 01:38:07'),
(285, '127.0.0.1', '2019-09-20 01:42:44'),
(286, '127.0.0.1', '2019-10-03 11:34:07'),
(287, '127.0.0.1', '2019-10-03 11:34:18'),
(288, '127.0.0.1', '2019-10-08 07:54:47'),
(289, '127.0.0.1', '2019-10-08 07:59:49'),
(290, '127.0.0.1', '2019-10-08 08:00:42'),
(291, '127.0.0.1', '2019-10-08 08:00:52'),
(292, '127.0.0.1', '2019-10-08 08:01:05'),
(293, '127.0.0.1', '2019-10-08 08:02:45'),
(294, '127.0.0.1', '2019-10-08 08:02:45'),
(295, '127.0.0.1', '2019-10-08 08:02:47'),
(296, '127.0.0.1', '2019-10-08 08:02:47'),
(297, '127.0.0.1', '2019-10-08 08:03:21'),
(298, '127.0.0.1', '2019-10-08 08:03:46'),
(299, '127.0.0.1', '2019-10-08 08:11:57'),
(300, '127.0.0.1', '2019-10-08 08:12:22'),
(301, '127.0.0.1', '2019-10-08 08:12:44'),
(302, '127.0.0.1', '2019-10-08 08:13:34'),
(303, '127.0.0.1', '2019-10-08 08:14:01'),
(304, '127.0.0.1', '2019-10-08 08:15:04'),
(305, '127.0.0.1', '2019-10-08 08:21:31'),
(306, '127.0.0.1', '2019-10-08 08:26:23'),
(307, '127.0.0.1', '2019-10-08 08:30:18'),
(308, '127.0.0.1', '2019-10-12 12:58:46'),
(309, '127.0.0.1', '2019-10-20 09:15:41'),
(310, '127.0.0.1', '2019-10-20 09:15:53'),
(311, '127.0.0.1', '2019-10-20 09:15:53'),
(312, '127.0.0.1', '2019-10-20 09:15:54'),
(313, '127.0.0.1', '2019-10-20 09:15:54'),
(314, '127.0.0.1', '2019-10-20 09:17:38'),
(315, '127.0.0.1', '2019-10-20 09:17:46'),
(316, '127.0.0.1', '2019-10-20 09:17:47'),
(317, '127.0.0.1', '2019-10-20 09:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `l_id` int(11) NOT NULL,
  `l_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`l_id`, `l_name`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `mem_id` int(8) NOT NULL,
  `l_id` int(11) NOT NULL,
  `mem_fname` varchar(30) NOT NULL,
  `mem_name` varchar(50) NOT NULL,
  `mem_lname` varchar(100) NOT NULL,
  `mem_tel` varchar(10) NOT NULL,
  `mem_username` varchar(20) NOT NULL,
  `mem_password` varchar(50) NOT NULL,
  `mem_email` varchar(20) NOT NULL,
  `img` varchar(50) NOT NULL,
  `dateinsert` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`mem_id`, `l_id`, `mem_fname`, `mem_name`, `mem_lname`, `mem_tel`, `mem_username`, `mem_password`, `mem_email`, `img`, `dateinsert`) VALUES
(1, 1, 'Mr.', 'admin', 'devanban', '0999999999', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'aa@g.com', '71e9e99e85fafccac615b4fb228efb5f.jpg', '2019-08-13 03:47:54'),
(2, 2, 'Mr.', 'member', 'm2', '0999999999', 'member', '6467baa3b187373e3931422e2a8ef22f3e447d77', 'aa@g.com', '71e9e99e85fafccac615b4fb228efb5f.jpg', '2019-08-13 03:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` float(10,2) NOT NULL,
  `p_unit` varchar(20) NOT NULL,
  `p_img` varchar(200) NOT NULL,
  `p_view` int(11) NOT NULL DEFAULT 0,
  `p_qty` int(11) DEFAULT 0,
  `p_status` int(1) NOT NULL DEFAULT 1,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `mem_id`, `t_id`, `p_name`, `p_detail`, `p_price`, `p_unit`, `p_img`, `p_view`, `p_qty`, `p_status`, `date_save`) VALUES
(1, 1, 1, 'สินค้า ', '<h3>Product details of กล้อง / กล้องถ่ายรูป Canon MIRRORLESS รุ่น EOS M50 EFM15-45 IS STM (สีดำ) (ประกันร้าน EC-MALL 1ปี)/ มิลเลอร์เลส</h3>\r\n\r\n<ul>\r\n <li>เซ็นเซอร์ APS-C CMOS ความละเอียด 24.1 ล้านพิกเซล (พร้อม Dual Pixel CMOS AF ปรับปรุงใหม่)</li>\r\n <li>ชิปประมวลผลภาพ DIGIC 8 รองรับ ISO 100 – 25,600 (ขยายได้ถึง ISO 51,200)</li>\r\n <li>ช่องมองภาพอิเล็กทรอนิกส์ OLED กว้าง 0.39 นิ้ว ความละเอียด 2.36 ล้านจุด พร้อมฟังก์ชัน Touch & Drag</li>\r\n <li>ถ่ายวิดีโอ 4K 23.98p / 25p & Slow Speed Shooting HD 120p / 100p</li>\r\n <li>ระบบป้องกันภาพสั่นไหว 7 แกน สำหรับการถ่ายวิดีโอ (Combination IS; 5 แกนในตัวกล้อง และ 2 แกนในเลนส์)</li>\r\n <li>ถ่ายโอนภาพนิ่งและวิดีโอไปยังสมาร์ทโฟนหรือคอมพิวเตอร์โดยอัตโนมัติผ่าน Wi-Fi</li>\r\n <li>อัพโหลดภาพจากกล้องไปยังโซเชียลมีเดียเช่น Facebook, INSTAGRAM, Youtube, Twitter ได้โดยตรง</li>\r\n</ul>', 3333.00, 'ชิ้น', '1e7fe8af7d52a9da7684ffd5f11728a9.jpg', 29, 0, 1, '2019-08-11 04:53:33'),
(2, 1, 4, 'สินค้า 3', '<h3>Product details of กล้อง / กล้องถ่ายรูป Canon MIRRORLESS รุ่น EOS M50 EFM15-45 IS STM (สีดำ) (ประกันร้าน EC-MALL 1ปี)/ มิลเลอร์เลส</h3>\r\n\r\n<ul>\r\n <li>เซ็นเซอร์ APS-C CMOS ความละเอียด 24.1 ล้านพิกเซล (พร้อม Dual Pixel CMOS AF ปรับปรุงใหม่)</li>\r\n <li>ชิปประมวลผลภาพ DIGIC 8 รองรับ ISO 100 – 25,600 (ขยายได้ถึง ISO 51,200)</li>\r\n <li>ช่องมองภาพอิเล็กทรอนิกส์ OLED กว้าง 0.39 นิ้ว ความละเอียด 2.36 ล้านจุด พร้อมฟังก์ชัน Touch & Drag</li>\r\n <li>ถ่ายวิดีโอ 4K 23.98p / 25p & Slow Speed Shooting HD 120p / 100p</li>\r\n <li>ระบบป้องกันภาพสั่นไหว 7 แกน สำหรับการถ่ายวิดีโอ (Combination IS; 5 แกนในตัวกล้อง และ 2 แกนในเลนส์)</li>\r\n <li>ถ่ายโอนภาพนิ่งและวิดีโอไปยังสมาร์ทโฟนหรือคอมพิวเตอร์โดยอัตโนมัติผ่าน Wi-Fi</li>\r\n <li>อัพโหลดภาพจากกล้องไปยังโซเชียลมีเดียเช่น Facebook, INSTAGRAM, Youtube, Twitter ได้โดยตรง</li>\r\n</ul>', 100.00, 'ชิ้น', '1e7fe8af7d52a9da7684ffd5f11728a9.jpg', 10, 100, 1, '2019-08-11 04:57:04'),
(3, 2, 5, 'สินค้า 1', '<h3>Product details of กล้อง / กล้องถ่ายรูป Canon MIRRORLESS รุ่น EOS M50 EFM15-45 IS STM (สีดำ) (ประกันร้าน EC-MALL 1ปี)/ มิลเลอร์เลส</h3>\r\n\r\n<ul>\r\n <li>เซ็นเซอร์ APS-C CMOS ความละเอียด 24.1 ล้านพิกเซล (พร้อม Dual Pixel CMOS AF ปรับปรุงใหม่)</li>\r\n <li>ชิปประมวลผลภาพ DIGIC 8 รองรับ ISO 100 – 25,600 (ขยายได้ถึง ISO 51,200)</li>\r\n <li>ช่องมองภาพอิเล็กทรอนิกส์ OLED กว้าง 0.39 นิ้ว ความละเอียด 2.36 ล้านจุด พร้อมฟังก์ชัน Touch & Drag</li>\r\n <li>ถ่ายวิดีโอ 4K 23.98p / 25p & Slow Speed Shooting HD 120p / 100p</li>\r\n <li>ระบบป้องกันภาพสั่นไหว 7 แกน สำหรับการถ่ายวิดีโอ (Combination IS; 5 แกนในตัวกล้อง และ 2 แกนในเลนส์)</li>\r\n <li>ถ่ายโอนภาพนิ่งและวิดีโอไปยังสมาร์ทโฟนหรือคอมพิวเตอร์โดยอัตโนมัติผ่าน Wi-Fi</li>\r\n <li>อัพโหลดภาพจากกล้องไปยังโซเชียลมีเดียเช่น Facebook, INSTAGRAM, Youtube, Twitter ได้โดยตรง</li>\r\n</ul>', 900.00, 'ชิ้น', '1e7fe8af7d52a9da7684ffd5f11728a9.jpg', 2, 100, 1, '2019-08-11 04:58:40'),
(4, 2, 5, 'สินค้า 1', '<h3>Product details of กล้อง / กล้องถ่ายรูป Canon MIRRORLESS รุ่น EOS M50 EFM15-45 IS STM (สีดำ) (ประกันร้าน EC-MALL 1ปี)/ มิลเลอร์เลส</h3>\r\n\r\n<ul>\r\n <li>เซ็นเซอร์ APS-C CMOS ความละเอียด 24.1 ล้านพิกเซล (พร้อม Dual Pixel CMOS AF ปรับปรุงใหม่)</li>\r\n <li>ชิปประมวลผลภาพ DIGIC 8 รองรับ ISO 100 – 25,600 (ขยายได้ถึง ISO 51,200)</li>\r\n <li>ช่องมองภาพอิเล็กทรอนิกส์ OLED กว้าง 0.39 นิ้ว ความละเอียด 2.36 ล้านจุด พร้อมฟังก์ชัน Touch & Drag</li>\r\n <li>ถ่ายวิดีโอ 4K 23.98p / 25p & Slow Speed Shooting HD 120p / 100p</li>\r\n <li>ระบบป้องกันภาพสั่นไหว 7 แกน สำหรับการถ่ายวิดีโอ (Combination IS; 5 แกนในตัวกล้อง และ 2 แกนในเลนส์)</li>\r\n <li>ถ่ายโอนภาพนิ่งและวิดีโอไปยังสมาร์ทโฟนหรือคอมพิวเตอร์โดยอัตโนมัติผ่าน Wi-Fi</li>\r\n <li>อัพโหลดภาพจากกล้องไปยังโซเชียลมีเดียเช่น Facebook, INSTAGRAM, Youtube, Twitter ได้โดยตรง</li>\r\n</ul>', 900.00, 'ชิ้น', '1e7fe8af7d52a9da7684ffd5f11728a9.jpg', 7, 100, 1, '2019-08-11 04:58:40'),
(5, 1, 5, 'สินค้า 4', '<h3>Product details of กล้อง / กล้องถ่ายรูป Canon MIRRORLESS รุ่น EOS M50 EFM15-45 IS STM (สีดำ) (ประกันร้าน EC-MALL 1ปี)/ มิลเลอร์เลส</h3>\r\n\r\n<ul>\r\n <li>เซ็นเซอร์ APS-C CMOS ความละเอียด 24.1 ล้านพิกเซล (พร้อม Dual Pixel CMOS AF ปรับปรุงใหม่)</li>\r\n <li>ชิปประมวลผลภาพ DIGIC 8 รองรับ ISO 100 – 25,600 (ขยายได้ถึง ISO 51,200)</li>\r\n <li>ช่องมองภาพอิเล็กทรอนิกส์ OLED กว้าง 0.39 นิ้ว ความละเอียด 2.36 ล้านจุด พร้อมฟังก์ชัน Touch & Drag</li>\r\n <li>ถ่ายวิดีโอ 4K 23.98p / 25p & Slow Speed Shooting HD 120p / 100p</li>\r\n <li>ระบบป้องกันภาพสั่นไหว 7 แกน สำหรับการถ่ายวิดีโอ (Combination IS; 5 แกนในตัวกล้อง และ 2 แกนในเลนส์)</li>\r\n <li>ถ่ายโอนภาพนิ่งและวิดีโอไปยังสมาร์ทโฟนหรือคอมพิวเตอร์โดยอัตโนมัติผ่าน Wi-Fi</li>\r\n <li>อัพโหลดภาพจากกล้องไปยังโซเชียลมีเดียเช่น Facebook, INSTAGRAM, Youtube, Twitter ได้โดยตรง</li>\r\n</ul>', 100.00, 'ชิ้น', '1e7fe8af7d52a9da7684ffd5f11728a9.jpg', 1, 100, 1, '2019-08-13 05:18:42'),
(6, 2, 1, 'สินค้า 8', '<h3>Product details of กล้อง / กล้องถ่ายรูป Canon MIRRORLESS รุ่น EOS M50 EFM15-45 IS STM (สีดำ) (ประกันร้าน EC-MALL 1ปี)/ มิลเลอร์เลส</h3>\r\n\r\n<ul>\r\n <li>เซ็นเซอร์ APS-C CMOS ความละเอียด 24.1 ล้านพิกเซล (พร้อม Dual Pixel CMOS AF ปรับปรุงใหม่)</li>\r\n <li>ชิปประมวลผลภาพ DIGIC 8 รองรับ ISO 100 – 25,600 (ขยายได้ถึง ISO 51,200)</li>\r\n <li>ช่องมองภาพอิเล็กทรอนิกส์ OLED กว้าง 0.39 นิ้ว ความละเอียด 2.36 ล้านจุด พร้อมฟังก์ชัน Touch & Drag</li>\r\n <li>ถ่ายวิดีโอ 4K 23.98p / 25p & Slow Speed Shooting HD 120p / 100p</li>\r\n <li>ระบบป้องกันภาพสั่นไหว 7 แกน สำหรับการถ่ายวิดีโอ (Combination IS; 5 แกนในตัวกล้อง และ 2 แกนในเลนส์)</li>\r\n <li>ถ่ายโอนภาพนิ่งและวิดีโอไปยังสมาร์ทโฟนหรือคอมพิวเตอร์โดยอัตโนมัติผ่าน Wi-Fi</li>\r\n <li>อัพโหลดภาพจากกล้องไปยังโซเชียลมีเดียเช่น Facebook, INSTAGRAM, Youtube, Twitter ได้โดยตรง</li>\r\n</ul>', 222.00, 'ชิ้น', '1e7fe8af7d52a9da7684ffd5f11728a9.jpg', 18, 100, 1, '2019-08-13 05:48:33'),
(7, 2, 1, 'สินค้า 777', '<h3>Product details of กล้อง / กล้องถ่ายรูป Canon MIRRORLESS รุ่น EOS M50 EFM15-45 IS STM (สีดำ) (ประกันร้าน EC-MALL 1ปี)/ มิลเลอร์เลส</h3>\r\n\r\n<ul>\r\n <li>เซ็นเซอร์ APS-C CMOS ความละเอียด 24.1 ล้านพิกเซล (พร้อม Dual Pixel CMOS AF ปรับปรุงใหม่)</li>\r\n <li>ชิปประมวลผลภาพ DIGIC 8 รองรับ ISO 100 – 25,600 (ขยายได้ถึง ISO 51,200)</li>\r\n <li>ช่องมองภาพอิเล็กทรอนิกส์ OLED กว้าง 0.39 นิ้ว ความละเอียด 2.36 ล้านจุด พร้อมฟังก์ชัน Touch & Drag</li>\r\n <li>ถ่ายวิดีโอ 4K 23.98p / 25p & Slow Speed Shooting HD 120p / 100p</li>\r\n <li>ระบบป้องกันภาพสั่นไหว 7 แกน สำหรับการถ่ายวิดีโอ (Combination IS; 5 แกนในตัวกล้อง และ 2 แกนในเลนส์)</li>\r\n <li>ถ่ายโอนภาพนิ่งและวิดีโอไปยังสมาร์ทโฟนหรือคอมพิวเตอร์โดยอัตโนมัติผ่าน Wi-Fi</li>\r\n <li>อัพโหลดภาพจากกล้องไปยังโซเชียลมีเดียเช่น Facebook, INSTAGRAM, Youtube, Twitter ได้โดยตรง</li>\r\n</ul>', 33.00, 'ชิ้น', '1e7fe8af7d52a9da7684ffd5f11728a9.jpg', 0, 100, 1, '2019-08-13 05:49:37'),
(8, 2, 1, 'สินค้า ', '<h3>Product details of กล้อง / กล้องถ่ายรูป Canon MIRRORLESS รุ่น EOS M50 EFM15-45 IS STM (สีดำ) (ประกันร้าน EC-MALL 1ปี)/ มิลเลอร์เลส</h3>\r\n\r\n<ul>\r\n <li>เซ็นเซอร์ APS-C CMOS ความละเอียด 24.1 ล้านพิกเซล (พร้อม Dual Pixel CMOS AF ปรับปรุงใหม่)</li>\r\n <li>ชิปประมวลผลภาพ DIGIC 8 รองรับ ISO 100 – 25,600 (ขยายได้ถึง ISO 51,200)</li>\r\n <li>ช่องมองภาพอิเล็กทรอนิกส์ OLED กว้าง 0.39 นิ้ว ความละเอียด 2.36 ล้านจุด พร้อมฟังก์ชัน Touch & Drag</li>\r\n <li>ถ่ายวิดีโอ 4K 23.98p / 25p & Slow Speed Shooting HD 120p / 100p</li>\r\n <li>ระบบป้องกันภาพสั่นไหว 7 แกน สำหรับการถ่ายวิดีโอ (Combination IS; 5 แกนในตัวกล้อง และ 2 แกนในเลนส์)</li>\r\n <li>ถ่ายโอนภาพนิ่งและวิดีโอไปยังสมาร์ทโฟนหรือคอมพิวเตอร์โดยอัตโนมัติผ่าน Wi-Fi</li>\r\n <li>อัพโหลดภาพจากกล้องไปยังโซเชียลมีเดียเช่น Facebook, INSTAGRAM, Youtube, Twitter ได้โดยตรง</li>\r\n</ul>', 2342.00, 'ชิ้น', '1e7fe8af7d52a9da7684ffd5f11728a9.jpg', 1, 100, 1, '2019-08-13 05:50:37'),
(9, 2, 2, 'สินค้า ', '<h3>Product details of กล้อง / กล้องถ่ายรูป Canon MIRRORLESS รุ่น EOS M50 EFM15-45 IS STM (สีดำ) (ประกันร้าน EC-MALL 1ปี)/ มิลเลอร์เลส</h3>\r\n\r\n<ul>\r\n <li>เซ็นเซอร์ APS-C CMOS ความละเอียด 24.1 ล้านพิกเซล (พร้อม Dual Pixel CMOS AF ปรับปรุงใหม่)</li>\r\n <li>ชิปประมวลผลภาพ DIGIC 8 รองรับ ISO 100 – 25,600 (ขยายได้ถึง ISO 51,200)</li>\r\n <li>ช่องมองภาพอิเล็กทรอนิกส์ OLED กว้าง 0.39 นิ้ว ความละเอียด 2.36 ล้านจุด พร้อมฟังก์ชัน Touch & Drag</li>\r\n <li>ถ่ายวิดีโอ 4K 23.98p / 25p & Slow Speed Shooting HD 120p / 100p</li>\r\n <li>ระบบป้องกันภาพสั่นไหว 7 แกน สำหรับการถ่ายวิดีโอ (Combination IS; 5 แกนในตัวกล้อง และ 2 แกนในเลนส์)</li>\r\n <li>ถ่ายโอนภาพนิ่งและวิดีโอไปยังสมาร์ทโฟนหรือคอมพิวเตอร์โดยอัตโนมัติผ่าน Wi-Fi</li>\r\n <li>อัพโหลดภาพจากกล้องไปยังโซเชียลมีเดียเช่น Facebook, INSTAGRAM, Youtube, Twitter ได้โดยตรง</li>\r\n</ul>', 2222.00, 'ชิ้น', '1e7fe8af7d52a9da7684ffd5f11728a9.jpg', 6, 100, 1, '2019-08-13 05:51:34'),
(10, 2, 1, 'สินค้า ', '<h3>Product details of กล้อง / กล้องถ่ายรูป Canon MIRRORLESS รุ่น EOS M50 EFM15-45 IS STM (สีดำ) (ประกันร้าน EC-MALL 1ปี)/ มิลเลอร์เลส</h3>\r\n\r\n<ul>\r\n <li>เซ็นเซอร์ APS-C CMOS ความละเอียด 24.1 ล้านพิกเซล (พร้อม Dual Pixel CMOS AF ปรับปรุงใหม่)</li>\r\n <li>ชิปประมวลผลภาพ DIGIC 8 รองรับ ISO 100 – 25,600 (ขยายได้ถึง ISO 51,200)</li>\r\n <li>ช่องมองภาพอิเล็กทรอนิกส์ OLED กว้าง 0.39 นิ้ว ความละเอียด 2.36 ล้านจุด พร้อมฟังก์ชัน Touch & Drag</li>\r\n <li>ถ่ายวิดีโอ 4K 23.98p / 25p & Slow Speed Shooting HD 120p / 100p</li>\r\n <li>ระบบป้องกันภาพสั่นไหว 7 แกน สำหรับการถ่ายวิดีโอ (Combination IS; 5 แกนในตัวกล้อง และ 2 แกนในเลนส์)</li>\r\n <li>ถ่ายโอนภาพนิ่งและวิดีโอไปยังสมาร์ทโฟนหรือคอมพิวเตอร์โดยอัตโนมัติผ่าน Wi-Fi</li>\r\n <li>อัพโหลดภาพจากกล้องไปยังโซเชียลมีเดียเช่น Facebook, INSTAGRAM, Youtube, Twitter ได้โดยตรง</li>\r\n</ul>', 2342.00, 'ชิ้น', '1e7fe8af7d52a9da7684ffd5f11728a9.jpg', 0, 100, 1, '2019-08-13 05:50:37'),
(11, 2, 2, 'สินค้า ', '<h3>Product details of กล้อง / กล้องถ่ายรูป Canon MIRRORLESS รุ่น EOS M50 EFM15-45 IS STM (สีดำ) (ประกันร้าน EC-MALL 1ปี<gwmw class=\"ginger-module-highlighter-mistake-type-3\" id=\"gwmw-15705214132042604507389\">)</gwmw>/ มิลเลอร์เลส</h3>\r\n\r\n<ul>\r\n <li>เซ็นเซอร์ APS-C CMOS ความละเอียด 24.1 ล้านพิกเซล (พร้อม Dual Pixel CMOS AF ปรับปรุงใหม่)</li>\r\n <li>ชิปประมวลผลภาพ DIGIC 8 รองรับ ISO 100 – 25,600 (ขยายได้ถึง ISO 51,200)</li>\r\n <li>ช่องมองภาพอิเล็กทรอนิกส์ OLED กว้าง 0.39 นิ้ว ความละเอียด 2.36 ล้านจุด พร้อมฟังก์ชัน Touch & Drag</li>\r\n <li>ถ่ายวิดีโอ 4K 23.98p / 25p & Slow Speed Shooting HD 120p / 100p</li>\r\n <li>ระบบป้องกันภาพสั่นไหว 7 แกน สำหรับการถ่ายวิดีโอ (Combination IS; 5 แกนในตัวกล้อง และ 2 แกนในเลนส์)</li>\r\n <li>ถ่ายโอนภาพนิ่งและวิดีโอไปยังสมาร์ทโฟนหรือคอมพิวเตอร์โดยอัตโนมัติผ่าน Wi-Fi</li>\r\n <li>อัพโหลดภาพจากกล้องไปยังโซเชียลมีเดียเช่น Facebook, INSTAGRAM, <gwmw class=\"ginger-module-highlighter-mistake-type-1\" id=\"gwmw-15705214156244241674218\">Youtube</gwmw>, Twitter ได้โดยตรง</li>\r\n</ul>', 2222.00, 'ชิ้น', '1e7fe8af7d52a9da7684ffd5f11728a9.jpg', 6, 100, 1, '2019-08-13 05:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`t_id`, `t_name`) VALUES
(1, 'ประเภท1'),
(2, 'ประเภท2'),
(3, 'ประเภท3'),
(4, 'ประเภท4'),
(5, 'ประเภท5'),
(6, 'อื่นๆ'),
(9, 'อื่นๆ'),
(15, 'อื่นๆ'),
(12, 'อื่นๆ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_counter`
--
ALTER TABLE `tbl_counter`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_counter`
--
ALTER TABLE `tbl_counter`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=318;

--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `mem_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
