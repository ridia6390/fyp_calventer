-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 03:56 AM
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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`First_name`, `Last_name`, `Email`, `Subject`, `Message`) VALUES
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('Ridia', 'Kas', 'kas@gmail.com', 'tatu', 'regdbnbdndjmd'),
('rereyey', 'eds', 'sdcc', 'was', 'wwwe'),
('ydbdbbd', 'ddd', 'e', 'ewww', '234dsd'),
('Baccga', 'eedd', '3333', 'wsd', 'azxx'),
('ssdd', '2www', 'ssds@gmail.com', 'asss', '222'),
('ydbdbd', 'ddff', 'eee', '33edd', 'dddd'),
('dfff', 'eerr', 'ewee', 'ff', 'ffff'),
('gvh', 'yijnm', '7689uin', 'jjnbb', 'lmnhu'),
('Ridia', 'Kashmeri', 'ri@gmail.com', 'Login Issues', 'tddssndsdnddksdsdd'),
('eee', 'rrr', 'ttt', 'ttt', 'tttt'),
('', '', 'wwe', 'ww', 'wweerre'),
('', '', 'eef', 'ereeeee', 'eeffe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
