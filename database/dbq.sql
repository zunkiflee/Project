-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2019 at 03:40 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbq`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(5) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', '12345', 'AdminZun');

-- --------------------------------------------------------

--
-- Table structure for table `qe_dp`
--

CREATE TABLE `qe_dp` (
  `id` int(5) NOT NULL,
  `dp_id` int(5) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qe_dp`
--

INSERT INTO `qe_dp` (`id`, `dp_id`, `department`) VALUES
(1, 1, 'แผนกผู้ป่วยใน\r\n'),
(2, 2, 'แผนกผู้ป่วยนอก\r\n'),
(3, 3, 'แผนกผู้สุงอายุ\r\n'),
(4, 4, 'แผนกผู้โรคร้ายแรง\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `qe_queue`
--

CREATE TABLE `qe_queue` (
  `id` int(11) NOT NULL,
  `qa` int(4) NOT NULL COMMENT 'คิว',
  `dp_id` tinyint(4) NOT NULL COMMENT 'แผนก',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0รอ 1 ดำเนินการแล้ว',
  `rtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qe_queue`
--

INSERT INTO `qe_queue` (`id`, `qa`, `dp_id`, `status`, `rtime`) VALUES
(1, 1, 1, 1, '2017-05-11 08:47:41'),
(2, 1, 2, 1, '2017-05-11 08:47:52'),
(3, 2, 1, 1, '2017-05-11 08:48:19'),
(4, 1, 3, 0, '2017-05-11 08:48:25'),
(5, 1, 4, 0, '2017-05-11 08:48:32'),
(6, 2, 3, 0, '2017-05-11 08:48:39'),
(7, 3, 1, 1, '2017-05-11 08:48:45'),
(8, 2, 2, 1, '2017-05-11 08:49:35'),
(9, 4, 1, 1, '2017-05-11 08:49:53'),
(10, 5, 1, 1, '2017-05-20 06:40:23'),
(11, 3, 2, 1, '2017-05-20 06:40:31'),
(12, 4, 2, 1, '2017-05-20 06:40:38'),
(13, 3, 3, 0, '2017-05-20 06:40:47'),
(14, 2, 4, 0, '2017-05-20 06:40:56'),
(15, 3, 4, 0, '2017-05-20 06:41:04'),
(16, 4, 3, 0, '2017-05-20 06:41:20'),
(17, 4, 4, 0, '2017-05-20 06:41:59'),
(18, 5, 2, 1, '2017-05-20 06:42:08'),
(19, 5, 3, 0, '2017-05-20 06:42:42'),
(20, 6, 1, 1, '2017-05-20 06:44:14'),
(21, 6, 2, 1, '2017-05-20 06:44:27'),
(22, 7, 1, 1, '2017-05-20 06:44:53'),
(23, 7, 2, 1, '2017-05-20 06:45:08'),
(24, 8, 1, 1, '2017-05-20 06:45:15'),
(25, 5, 4, 0, '2017-05-20 07:49:57'),
(26, 9, 1, 1, '2017-05-20 07:50:36'),
(27, 10, 1, 1, '2017-05-20 07:50:57'),
(28, 8, 2, 1, '2017-05-20 07:51:05'),
(29, 6, 3, 0, '2017-05-20 07:51:12'),
(30, 6, 4, 0, '2017-05-20 07:51:20'),
(31, 7, 3, 0, '2017-05-20 07:51:29'),
(32, 9, 2, 1, '2017-05-20 07:51:42'),
(33, 7, 4, 0, '2017-05-20 07:51:46'),
(34, 11, 1, 1, '2017-05-20 07:51:54'),
(35, 12, 1, 1, '2017-05-20 07:53:17'),
(36, 10, 2, 1, '2017-05-20 07:53:34'),
(37, 8, 3, 0, '2017-05-20 07:53:44'),
(38, 8, 4, 0, '2017-05-20 07:54:01'),
(39, 8, 1, 1, '2017-05-20 07:59:10'),
(40, 13, 1, 1, '2017-05-20 07:59:30'),
(41, 14, 1, 1, '2017-05-20 07:59:56'),
(42, 11, 2, 1, '2017-05-20 08:00:12'),
(43, 9, 3, 0, '2017-05-20 08:00:31'),
(44, 9, 4, 0, '2017-05-20 08:00:50'),
(45, 12, 2, 1, '2017-05-20 08:01:34'),
(46, 10, 3, 0, '2017-05-20 08:01:45'),
(51, 13, 2, 0, '2019-09-06 10:47:57'),
(48, 13, 2, 0, '2017-05-20 06:50:05'),
(50, 15, 1, 1, '2019-09-06 10:46:39'),
(52, 10, 4, 0, '2019-09-13 01:48:09'),
(53, 11, 4, 0, '2019-09-13 01:48:16'),
(54, 14, 2, 0, '2019-09-13 01:48:40'),
(55, 15, 2, 0, '2019-09-13 01:48:47'),
(56, 16, 1, 1, '2019-09-13 01:49:04'),
(57, 17, 1, 0, '2019-09-13 01:49:10'),
(58, 18, 1, 0, '2019-09-13 01:49:16'),
(59, 16, 2, 0, '2019-09-17 01:29:52'),
(60, 11, 4, 0, '2019-09-17 01:31:30'),
(61, 12, 4, 0, '2019-09-17 01:31:38'),
(62, 11, 3, 0, '2019-09-17 01:39:52'),
(63, 12, 3, 0, '2019-09-17 01:39:58'),
(64, 19, 1, 0, '2019-09-17 01:40:16'),
(65, 20, 1, 0, '2019-09-17 01:40:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qe_dp`
--
ALTER TABLE `qe_dp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qe_queue`
--
ALTER TABLE `qe_queue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qe_dp`
--
ALTER TABLE `qe_dp`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `qe_queue`
--
ALTER TABLE `qe_queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
