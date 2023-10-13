-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 03:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(12) NOT NULL,
  `name` varchar(234) NOT NULL,
  `email` varchar(234) NOT NULL,
  `phone` varchar(234) NOT NULL,
  `address` varchar(234) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_role` varchar(256) NOT NULL DEFAULT 'user',
  `created_at` varchar(5) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phone`, `address`, `password`, `user_role`, `created_at`, `updated_at`) VALUES
(10, 'nibha', 'biswasnibha1@gmail.com', '99876655', 'sector-59', 'nibha', 'admin', '2023-', ''),
(16, 'asd', 'ss@gmail.com', '1234', 'sss', '1234', 'user', '2023-', ''),
(17, 'rajeshkhanna', 'raj@gmail.com', '44444444', 'ffff', '12345', 'user', '2023-', ''),
(18, '1', '1', '3', '4', '1', 'user', '2023-', ''),
(19, 'nibha', 'biswasnibha1@gmail.com', '1234567890', 'sector59', 'nibha', 'user', '2023-', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
