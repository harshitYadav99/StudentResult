-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 06:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_mark`
--

CREATE TABLE `user_mark` (
  `id` int(11) NOT NULL,
  `u_rollno` int(2) NOT NULL,
  `u_class` int(2) NOT NULL,
  `u_soft1` int(2) NOT NULL,
  `u_data1` int(2) NOT NULL,
  `u_web1` int(2) NOT NULL,
  `u_net1` int(2) NOT NULL,
  `u_minor1` int(2) NOT NULL,
  `u_soft2` int(2) NOT NULL,
  `u_data2` int(2) NOT NULL,
  `u_web2` int(2) NOT NULL,
  `u_net2` int(2) NOT NULL,
  `u_minor` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_mark`
--

INSERT INTO `user_mark` (`id`, `u_rollno`, `u_class`, `u_soft1`, `u_data1`, `u_web1`, `u_net1`, `u_minor1`, `u_soft2`, `u_data2`, `u_web2`, `u_net2`, `u_minor`) VALUES
(4, 101, 15, 18, 19, 15, 16, 18, 72, 68, 59, 65, 73);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_mark`
--
ALTER TABLE `user_mark`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_mark`
--
ALTER TABLE `user_mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
