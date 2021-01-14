-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2021 at 02:38 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idshop`
--
CREATE DATABASE IF NOT EXISTS `idshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `idshop`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `money` float(10,0) NOT NULL DEFAULT '0',
  `ip` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `money`, `ip`, `status`) VALUES
(1, 'test001', 'test001@gmail.com', '$2y$10$8Ev9zuDBHf3bEmP9rCjorOtkvREeSoF0dyRIbxvqmJ6KGTFz1OZfG', 0, '127.0.0.1', 'member'),
(2, 'test002', 'test002@gmail.com', '$2y$10$UA4IWcQOqyg84zB1zyDTzORjo7r3DnwQI5NEIc5Rz6cEhKI0EnZPW', 0, '127.0.0.1', 'member'),
(3, 'test003', 'test003@gmail.com', '$2y$10$a8tYY/LR7/wdX/LN.pFE/OA5ZcbwAQrw3rYLATc5vfRLk3EJ7kUmK', 0, '127.0.0.1', 'member'),
(4, 'test004', 'test004@gmail.com', '$2y$10$y1dbDcn6RhV4Xt2H/jHIrerJXJ1YNGbKMAq.rTz9VQVi50s2vYlO.', 0, '::1', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
