-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2025 at 09:00 AM
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
-- Database: `info`
--

-- --------------------------------------------------------

--
-- Table structure for table `users information`
--

CREATE TABLE `users information` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `highest education` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users information`
--

INSERT INTO `users information` (`id`, `name`, `email`, `phone`, `address`, `highest education`) VALUES
(0, 'Sobita', 'asha@gmail.com', 1877456787, 'Mirpur 6', 'MBA'),
(1, 'Farhana ', 'farhana@gmail.com', 1254787965, 'Mirpur 6', 'BBA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users information`
--
ALTER TABLE `users information`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
