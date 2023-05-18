-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 08:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `adduser`
--

CREATE TABLE `adduser` (
  `id` int(5) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `verified` varchar(10) NOT NULL,
  `otp` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adduser`
--

INSERT INTO `adduser` (`id`, `uname`, `email`, `mobile`, `verified`, `otp`, `created`) VALUES
(60719, 'Lovely Kumari', 'lovelykt9525@gmail.com', '7370988456', 'verified', ' ', '2023-05-16 18:11:59'),
(60845, 'Saurabh Kumar', 's9955037382@gmail.com', '7488944009', 'verified', ' ', '2023-05-16 18:14:59'),
(62584, 'Bhawna Kumari', 'bhavna678@gmail.com', '8976889088', '', ' bb099c1dcb5f635fd484a4df6683baa2', '2023-05-16 18:16:59'),
(68545, 'Rahul Kumar', 'rahulkr456@gmail.com', '9122104070', '', ' bw099c1scb5f458fd484a4df6683bsa1', '2023-05-16 18:18:59'),
(69055, 'Rakesh Kumar', 'rakesh66@gmail.com', '9876897860', 'verified', ' ', '2023-05-16 18:20:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adduser`
--
ALTER TABLE `adduser`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
