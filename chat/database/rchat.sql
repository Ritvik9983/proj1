-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 08:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `msg_id` int(11) NOT NULL,
  `reciever_id` varchar(255) NOT NULL,
  `sender_id` varchar(255) NOT NULL,
  `msg` varchar(5000) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `sender_mac_addr` varchar(255) NOT NULL,
  `sender_ip_addr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`msg_id`, `reciever_id`, `sender_id`, `msg`, `filename`, `sender_mac_addr`, `sender_ip_addr`) VALUES
(1, '859107458', '285651734', 'U1oY', '', '00-FF-3E-67-88-CF', ''),
(2, '285651734', '859107458', 'U1oY', '', '00-FF-3E-67-88-CF', ''),
(3, '859107458', '285651734', 'B1JRN3hSxJshojfigk9gkLZbzKg/bOLJ1NSquXlp0xl0thp9ImuONVY2TV4FX9avXryEXfPToLdUnE74xTy0dcJ1HbOoRGZfdLp1YhcyZouPyuHWiYdqPgOGmpnQlaLGpQRXCF7Ywfe5DytXFVeYCQ==', '973969.jpg', '00-FF-3E-67-88-CF', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `unique_id` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`unique_id`, `fname`, `lname`, `phone`, `password`, `img`, `status`) VALUES
('285651734', 'Ritvik', 'Sharma', '9024770544', 'lsKHox8gn/LnCiE=', 'images/1677058266IMG_20200222_093938_edited.jpg', 'Offline Now'),
('859107458', 'zoro', 'roronova', '9983938108', 'lsKHox8gn/LnCiE=', 'images/1677058411assassins-creed-valhalla-4k-game-artwork-aq.jpg', 'Offline Now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
