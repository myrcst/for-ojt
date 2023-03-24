-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 10:44 PM
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
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `res`
--

CREATE TABLE `res` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `messages` varchar(45) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `res`
--

INSERT INTO `res` (`id`, `username`, `email`, `phone`, `messages`, `date`) VALUES
(0, 'jerhel', 'jerhel@gmail.com', '09653426754', '\"bay e nalang\"', '2023-03-23'),
(1, 'Mary', 'mary@gmail.com', '09123456789', '\"Sorry wla ko may naintindihan\"', '2023-03-22'),
(2, 'ericka', 'ericka@gmail.com', '09563427465', '“Ambot may error na nmn\"', '2023-03-22'),
(3, 'Myra', 'macosta@usa.edu.ph', '09565286096', '\"Ambot, katalaka a\"', '2023-03-22'),
(4, 'jenamel', 'jenamel@gmial.com', '09673542753', '\" tak-an na ko mag intindi\"', '2023-03-22'),
(5, 'mega', 'mega@gmail.com', '09763548273', '\"hala, pano to?\"', '2023-03-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `res`
--
ALTER TABLE `res`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
