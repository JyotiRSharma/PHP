-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2021 at 10:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `fldName` varchar(50) NOT NULL,
  `fldEmail` varchar(150) NOT NULL,
  `fldPhone` varchar(15) NOT NULL,
  `fldMessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES
(1, 'app dev', 'appdeveloper@gmail.com', '9087487157', 'app dev rocks!\r\n'),
(2, 'Rahul', 'rahu.l@gmail.com', '9009809831', 'The higher taste!'),
(3, 'Jyoti Ranjan Sharma', 'jyotiranjansharma@gmail.com', '9087487157', 'Hello there...!'),
(6, 'Ram', 'ram7j@gmail.com', '9078781717', 'Ram is fast!'),
(7, 'Shyam', 'shyam7j@gmail.com', '90787615', 'Shyam is black!'),
(8, 'Kalia', 'kalia8j@gmail.com', '09182773467', 'Kalia likes to eat!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
