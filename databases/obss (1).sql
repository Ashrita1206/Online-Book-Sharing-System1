-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 08:02 PM
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
-- Database: `obss`
--

-- --------------------------------------------------------

--
-- Table structure for table `obss`
--

CREATE TABLE `obss` (
  `ID` int(3) NOT NULL,
  `First name` varchar(30) NOT NULL,
  `Last name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(5) NOT NULL,
  `number` varchar(10) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `create time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obss`
--

INSERT INTO `obss` (`ID`, `First name`, `Last name`, `email`, `password`, `number`, `Address`, `pincode`, `city`, `state`, `create time`) VALUES
(1, 'Mahesh', 'joss', 'mahesh@gmail.com', 'mahes', '5643299882', '12 hadpsar pune', 321453, 'pune', 'Maharashtra', '2022-03-13 00:29:01'),
(2, 'Mahesh', 'joss', 'mahesh@gmail.com', 'reena', '5643299882', '12 hadpsar pune', 321453, 'pune', 'Maharashtra', '2022-03-13 00:32:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obss`
--
ALTER TABLE `obss`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obss`
--
ALTER TABLE `obss`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
