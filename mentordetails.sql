-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 09:43 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connections`
--

-- --------------------------------------------------------

--
-- Table structure for table `mentordetails`
--

CREATE TABLE `mentordetails` (
  `mid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(15) NOT NULL,
  `year` int(11) NOT NULL,
  `domain` int(11) NOT NULL,
  `description` text NOT NULL,
  `display` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentordetails`
--

INSERT INTO `mentordetails` (`mid`, `email`, `name`, `password`, `year`, `domain`, `description`, `display`) VALUES
(1, 'y@mail.com', 'jueh', '4343', 4, 2, 'bhalllll', 1),
(2, 'u@mai.com', 'njendkjnejkdn', '23', 1, 3, 'jkdjhfjrhnfjirf', 1),
(3, 'bmspr1502@gmail.com', 'Preeti krishnaveni', 'asdfasdfasd', 3, 4, 'asdfasdfasgsfgfgasfgaf', 1),
(4, 'fadsf', 'aefdf', 'fasdfasdf', 3, 2, 'fdasfasf', 1),
(5, 'r@gmail.com', 'Pinky', 'rat@123456', 2, 1, 'uuuuuuuu', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentordetails`
--
ALTER TABLE `mentordetails`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mentordetails`
--
ALTER TABLE `mentordetails`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
