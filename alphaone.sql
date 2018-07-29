-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 12:14 AM
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
(1, 'Harshana', 'harshanajayarathna@gmail.com', '10 King Street, Palmerston North, New Zealand', 'This is first test message.', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(2, 'Umani', 'umanishanika@gmail.com', '10 King Street Palmerston north, New Zealand', 'This is the second message', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(3, 'Ruchira', 'ruchir@gmail.com', '163, Anuradhapura Road, Galenbindunuwewa, Sri Lanka', 'test third message', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(4, 'Dhanushka', 'dhanushka@gmail.com', '123, king Street, Palmerston North, New Zealand', 'This message was written by Dhanushka', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(5, 'John', 'john@gmail.com', '10 King Street, PN, NZ', 'This message was written by John', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(6, 'xcv', 'harshanajayarathna@gmail.com', '10 King Street', 'xcv', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(7, 'Harshana 1', 'harshanajayarathna@gmail.com', '10 King Street', 'xgvsdgsdgsdg', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(8, 'Harshana 5', 'harshanajayarathna@gmail.com', '10 King Street', 'zzz vbnm hjkl;', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(9, 'Harshana 6', 'harshanajayarathna@gmail.com', '10 King Street', 'zxvxgdg', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(10, 'Harshana 7', 'harshanajayarathna@gmail.com', '10 King Street', 'dfdsf dsfdsfsdf dfssdfds', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(11, 'Harshana', 'harshanajayarathna@gmail.com', '10 King Street', '1233444', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(12, 'Harshana', 'harshanajayarathna@gmail.com', '10 King Street', 'dsf', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(13, 'Harshana gh', 'harshanajayarathna@gmail.com', '10 King Street', 'fgfdgdg', '::1', 'Windows 10', 'Chrome 67.0.3396.99'),
(14, 'abc', 'harshanajayarathna@gmail.com', '10 King Street', 'abc', '::1', 'Windows 10', 'Chrome 67.0.3396.99');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
