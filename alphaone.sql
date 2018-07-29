-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 01:37 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alphaone`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_address` varchar(1000) NOT NULL,
  `user_message` text NOT NULL,
  `user_ip` varchar(20) DEFAULT NULL,
  `user_os` varchar(100) DEFAULT NULL,
  `user_browser` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`id`, `user_name`, `user_email`, `user_address`, `user_message`, `user_ip`, `user_os`, `user_browser`) VALUES
(1, 'Sir Don Bradman', 'bradman@gmail.com', 'Australia', 'This is Bradman\'s message', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(2, 'Sachin Tendulkar', 'sachin@yahoo.com', 'Mumbai, India', 'This is Sachin\'s message', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(3, 'Gary Sobers', 'sobers@gmail.com', 'Bridgetown, Barbados', 'This is Gary\'s message', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(4, 'Vivians Richard', 'richard@hotmail.com', 'Antigua and Barbuda', 'This is Richard\'s message', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(5, 'Kapil Dev', 'kapil@gmail.com', 'Chandigarh, India', 'This is Kapil\'s message', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(6, 'Imran Khan', 'imran@yahoo.com', 'Lahore, Pakistan', 'This is Imran\'s message', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(7, 'Ian Botham', 'ian@gmail.com', 'Cheshire, United Kingdom', 'This is Ion\'s message', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(8, 'Dennis Lillee', 'dennis@yahoo.com', 'Subiaco, Australia', 'This is Dennis\'s message', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(9, 'Jacques Kallis', 'kallis@gmail.com', 'Pinelands, Cape Town, South Africa', 'This is Kallis message', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(10, 'Muttiah Muralitharan', 'muttiah@gmail.com', 'Kandy, Sri Lanka', 'This is Muttiah\'s message', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(11, 'Brian Lara', 'lara@gmail.com', 'Santa Cruz, Trinidad and Tobago', 'This is Brian Lara\'s message', '::1', 'Windows 10', 'Chrome 67.0.3396.99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
