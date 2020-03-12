-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 03:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eff_enquiry`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
-- this is dummy data provided for demo modified on friday

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `notifi_sent_uid` varchar(20) NOT NULL,
  `is_notified` varchar(20) NOT NULL,
  `notified_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `mobile`, `email`, `subject`, `message`, `notifi_sent_uid`, `is_notified`, `notified_dt`) VALUES
(1, 'deiveegan', '1234567891', 'dei@gmail.com', 'hi all ', 'neesd an website', '3', 'Yes', '0000-00-00 00:00:00'),
(2, 'deiveegan2', '1234567891', 'dei@gmail.com', 'hi all ', 'neesd an website', '3', 'Yes', '0000-00-00 00:00:00'),
(10, 'dfgdfg', '546456', 'gdgdg', 'gfdgfdg', 'dfgdfgfd', '3', 'Yes', '0000-00-00 00:00:00'),
(11, 'gfdgfdgg', '35434532', 'gdfgfdgfd', 'gfdgfdgdfg', 'gdfgdfgfdg', '3', 'Yes', '0000-00-00 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
