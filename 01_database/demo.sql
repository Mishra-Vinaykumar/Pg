-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 08:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `id` int(10) NOT NULL,
  `day` varchar(10) NOT NULL,
  `meal` varchar(15) NOT NULL,
  `fooditems` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`id`, `day`, `meal`, `fooditems`, `status`) VALUES
(1, 'Monday', 'lunch', 'milkshak', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) NOT NULL,
  `clg` varchar(20) NOT NULL,
  `totalroom` int(20) NOT NULL,
  `post` varchar(255) NOT NULL,
  `facility` varchar(30) NOT NULL,
  `hosteltype` varchar(50) NOT NULL,
  `building` varchar(50) NOT NULL,
  `applyfess` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `clg`, `totalroom`, `post`, `facility`, `hosteltype`, `building`, `applyfess`, `status`, `post_date`) VALUES
(1, 'LJ University', 3, 'Screenshot (3).png', 'AC', 'Boys', 'lj dept btec', 'Yes', 'Active', '2024-01-16'),
(2, 'LJ University', 2, 'Screenshot (28).png', 'Non-AC', 'Girls', 'lj dept sci', 'No', 'Active', '0000-00-00'),
(3, 'LJ University', 2, 'Screenshot 2023-09-24 155854.png', 'AC', 'Both/non', 'lj dept politecnic', 'No', 'Active', '0000-00-00'),
(4, 'LJ University', 2, 'Screenshot 2023-11-17 154902.png', 'AC', 'Girls', 'lj dept physio', 'No', 'Active', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Id` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Id`, `fname`, `lname`, `dob`, `gender`, `email`, `phone`, `password`) VALUES
(1, 'viki', 'Raval', '2002-03-25', 'female', 'vikii@gmail.com', '7897898985', '$2y$10$DmXH3To4FW9Oo4KjwNGeq.PqaVcA30F7oHfKhtTqHIXP0GVmZM916'),
(2, 'viki', 'nil', '2001-04-25', 'male', 'admin@gmail.com', '0123456789', '$2y$10$MHrS3.gOAmJojbTwTVSSau0voqw6U6wnZZvjU5ly1bDR6k/.zowD2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mess`
--
ALTER TABLE `mess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mess`
--
ALTER TABLE `mess`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
