-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 06:03 PM
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
-- Database: `calventer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_type` varchar(20) NOT NULL DEFAULT 'admin',
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `admin_type`, `image`) VALUES
(42, 'RID', 'k.r@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'admin', 'collaborator.jpg'),
(51, 'qwe', 'qwe@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', 'calendar.png'),
(52, 'rfv', 'rfv@gmail.com', 'c8ffe9a587b126f152ed3d89a146b445', 'admin', 'clock.png'),
(53, 'edc', 'edc@gmail.com', '94f0ef2cc4bc3e9b4f00b63198685150', 'admin', 'global.png'),
(54, 'vf', 'vf@gmail.com', '12345', 'admin', 'calendar.png'),
(55, 'marini', 'et@gmail.com', '12345', 'admin', 'contacticon.png'),
(56, 'Norii', 'nor@gmail.com', '$2y$10$0Uz3jZjGesGnioW5d9RZ4ObyheK1PvQQoK7tCYhYVguiaTi130A96', 'admin', 'contacticon.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
