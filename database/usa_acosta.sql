-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 04:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usa_acosta`
--

-- --------------------------------------------------------

--
-- Table structure for table `timed`
--

CREATE TABLE `timed` (
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` int(12) NOT NULL,
  `messages` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timed`
--

INSERT INTO `timed` (`username`, `email`, `phone`, `messages`, `date`) VALUES
('hayaaaa', 'haya@gmail.com', 2147483647, 'rya', '2023-03-27'),
('kaye', 'kaye@gmail.com', 2147483647, ' hdshshass', '2023-03-27'),
('kjkhg', 'sgagas@gggg.com', 37346738, 'dhsh', '2023-03-27'),
('sgag', 'sgsdg@usa.edu.php', 9677524, ' sfsf', '2023-03-27'),
('vale', 'vale@gmail.com', 2147483647, 'hiiiiii', '2023-03-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timed`
--
ALTER TABLE `timed`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
