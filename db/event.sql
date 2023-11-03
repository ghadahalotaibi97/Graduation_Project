-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 04:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noura`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `dateTo` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `Name`, `date`, `dateTo`, `city`, `Description`, `price`, `image`, `location`) VALUES
('1', 'kfldld', '2020-03-18', '2020-03-28', 'dddddd', 'dddd', '233', '22.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.2876740542233!2d46.72823543551069!3d24.751323934105518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f026dbbf7a31f%3A0xf8461675a7c66027!2z2YXYsdmD2LIg2KfZhNix2YrYp9i2INin2YTYr9mI2YTZiiDZhNmE2YXYpNiq2YXYsdin2Kog2YjYp9mE2YXYudin2LHYtg!5e0!3m2!1sar!2ssa!4v1583366725847!5m2!1sar!2ssa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
