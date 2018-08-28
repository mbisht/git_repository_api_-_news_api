-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 07:49 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tweet`
--

CREATE TABLE `tweet` (
  `id` int(11) UNSIGNED NOT NULL,
  `user` varchar(255) NOT NULL,
  `money` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `ipaddress` varchar(255) NOT NULL,
  `date_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modify` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tweet`
--

INSERT INTO `tweet` (`id`, `user`, `money`, `result`, `comment`, `ipaddress`, `date_add`, `date_modify`) VALUES
(1, 'admin', '', '', 'sdsdsd', '', '2018-08-16 15:52:19', '2018-08-16 15:52:19'),
(2, 'user', '', '', 'Ram going to school', '', '2018-08-16 15:52:57', '2018-08-16 15:52:57'),
(3, 'admin', '', '', 'Afgan', '::1', '2018-08-16 15:58:07', '2018-08-16 15:58:07'),
(4, 'MAYANK', '', '', '', '', '2018-08-28 18:39:16', '2018-08-28 18:39:16'),
(5, 'MAYANK', '', '', '', '', '2018-08-28 18:39:29', '2018-08-28 18:39:29'),
(6, 'ewe', '.53.283008.', '0', '', '', '2018-08-28 19:26:42', '2018-08-28 19:26:42'),
(7, 'ewe', '.53.283008.', '0', '', '', '2018-08-28 19:26:49', '2018-08-28 19:26:49'),
(8, '111', '.53.283008.', '58.83', '', '', '2018-08-28 19:26:57', '2018-08-28 19:26:57'),
(9, '', '', '0', '', '', '2018-08-28 19:31:16', '2018-08-28 19:31:16'),
(10, '', '', '0', '', '', '2018-08-28 19:31:18', '2018-08-28 19:31:18'),
(11, '', '', '0', '', '', '2018-08-28 19:31:20', '2018-08-28 19:31:20'),
(12, '', '', '0', '', '', '2018-08-28 19:31:21', '2018-08-28 19:31:21'),
(13, '232', '53.283008', '12361.657856', '', '', '2018-08-28 19:31:30', '2018-08-28 19:31:30'),
(14, '232', '53.283008', '12361.657856', '', '', '2018-08-28 19:31:49', '2018-08-28 19:31:49'),
(15, '232', '53.283008', '12361.657856', '', '', '2018-08-28 19:32:32', '2018-08-28 19:32:32'),
(16, '1212', '53.283008', '64579.005696', '', '', '2018-08-28 19:32:40', '2018-08-28 19:32:40'),
(17, '232323', '53.283008', '12378868.267584', '', '', '2018-08-28 19:33:50', '2018-08-28 19:33:50'),
(18, '22323', '53.283008', '1189436.587584', '', '', '2018-08-28 19:33:56', '2018-08-28 19:33:56'),
(19, '121212', '53.283008', '6458539.965696', '', '', '2018-08-28 19:49:16', '2018-08-28 19:49:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
