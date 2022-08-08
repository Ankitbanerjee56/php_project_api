-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 05:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbit`
--

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `sno` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `other` varchar(255) NOT NULL,
  `dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES
(1, 'testname', 23, 'male', 'this@this', '9835687908', 'i am a good value', '2022-06-13 14:45:53'),
(11, 'Anshuman', 25, 'male', 'ansu34@gmail.com', '3556768456', 'hi there Im Anshuman', '2022-06-16 19:03:57'),
(48, 'Sajan Shaw', 45, 'male', 'sajan67@gmail.com', '9835687908', 'follow', '2022-08-06 15:45:14'),
(50, 'Prattyush Sharma', 35, 'male', 'pr23@gmail.com', '8888888888', 'hey', '2022-08-06 19:31:21'),
(52, 'Disha Adhwani', 27, 'female', 'disha23@gmail.com', '3333333333', 'Im fine', '2022-08-06 20:19:27'),
(53, 'Disha Adhwani', 27, 'female', 'disha23@gmail.com', '3333333333', 'Im fine', '2022-08-06 20:24:58'),
(54, 'Disha Adhwani', 27, 'female', 'disha23@gmail.com', '3333333333', 'Im fine', '2022-08-06 20:25:03'),
(55, 'Disha Adhwani', 27, 'female', 'disha23@gmail.com', '3333333333', 'Im fine', '2022-08-06 20:25:50'),
(56, 'Dhoni Singh', 24, 'male', 'dhon23@gmail.com', '9999999999', 'Hi', '2022-08-06 21:05:02'),
(57, 'Harry', 25, 'male', 'ahhiffjo@gmail.com', '9999999999', '', '2022-08-06 21:17:56'),
(58, 'Akash Mukherjee', 26, 'male', 'akash12@gmail.com', '1000000000', 'Akash here', '2022-08-06 22:17:35'),
(59, 'hanna', 25, 'male', 'ankitbanerjee730@gmail.com', '0744972907', 'vvfvfgbb', '2022-08-06 22:33:48'),
(60, 'Ankit Banerjee', 25, 'male', 'ankitbanerjee730@gmail.com', '0983118067', '', '2022-08-06 22:44:23'),
(61, 'Sohel Sen', 35, 'male', 'Sohel45@gmail.com', '9999999999', 'hey', '2022-08-07 08:18:53'),
(62, 'Ankit Banerjee', 25, 'male', 'ankitbanerjee730@gmail.com', '0744972907', 'hello', '2022-08-07 08:21:55'),
(63, 'Soham Majumdar', 25, 'male', 'soham123@gmail.com', '0744972907', 'hey', '2022-08-07 08:29:33'),
(64, 'hanna', 35, 'male', 'ankitbanerjee730@gmail.com', '0744972907', '', '2022-08-07 08:32:23'),
(65, 'Ankit Banerjee', 25, 'female', 'ankitbanerjee730@gmail.com', '0744972907', 'hi', '2022-08-07 08:34:45'),
(66, 'Ankit Banerjee', 25, 'male', 'ankitbanerjee730@gmail.com', '0983118067', 'hello', '2022-08-07 08:36:00'),
(67, 'Ankit Banerjee', 25, 'male', 'ankitbanerjee730@gmail.com', '0744972907', '', '2022-08-07 09:14:56'),
(68, 'Rounak Sadhukhan', 25, 'male', 'R@gmail.com', '1111111111', '', '2022-08-07 09:19:03'),
(69, 'Ankit Banerjee', 25, 'male', 'ankitbanerjee730@gmail.com', '0744972907', '', '2022-08-07 09:40:59'),
(70, 'Ankit Banerjee', 25, 'male', 'ankitbanerjee730@gmail.com', '0744972907', '', '2022-08-07 09:48:15'),
(71, 'Ankit Banerjee', 25, 'male', 'ankitbanerjee730@gmail.com', '0744972907', '', '2022-08-07 09:49:25'),
(72, '', 25, 'male', 'ankitbanerjee730@gmail.com', '0744972907', '', '2022-08-07 09:51:01'),
(73, '', 23, 'male', 'subham123@gmail.com', '9999999999', 'IM joining', '2022-08-07 09:54:58'),
(77, 'Asutosh Mukherjee', 36, 'male', 'ankitbanerjee658@gmail.com', '7449729078', 'I want to join', '2022-08-07 12:32:46'),
(78, 'Soham Sen', 23, 'male', 'ankitbanerjee658@gmail.com', '9198311806', '', '2022-08-07 18:30:41'),
(79, 'abc', 25, 'male', 'ankitbanerjee001@gmail.com', '+919831180', '', '2022-08-07 18:36:25'),
(80, 'Pratap Singh', 25, 'male', 'somabanerjee5623@gmail.com', '9831180676', 'hey there', '2022-08-08 20:29:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
