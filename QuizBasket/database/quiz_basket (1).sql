-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 03:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_basket`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_menu`
--

CREATE TABLE `home_menu` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_menu`
--

INSERT INTO `home_menu` (`h_id`, `h_name`) VALUES
(1, 'Home'),
(2, 'About Us'),
(3, 'Play Quiz'),
(4, 'Feedback'),
(5, 'Contact Us'),
(8, 'Options');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `cli_id` int(11) NOT NULL,
  `f_name` varchar(500) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `user_type` varchar(15) NOT NULL DEFAULT 'user',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `c_date` varchar(15) NOT NULL,
  `c_time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`cli_id`, `f_name`, `l_name`, `mobile_no`, `email_id`, `password`, `pic`, `user_type`, `status`, `c_date`, `c_time`) VALUES
(2, 'Nimi', 'Rana', 7834969224, 'nimi@gmail.com', 'nimi', 'nimi@gmail.com', 'admin', 1, '26-09-2018', '17:39:pm'),
(3, 'Dilip', 'Singh', 7834969221, 'dilipkumar210205@gmail.com', 'pass', 'dilipkumar210205@gmail.com', 'user', 1, '03-10-2018', '16:42:pm'),
(4, 'Sanjeev', 'Singh', 783496920, 'sanjeev@gmail.com', 'yes', 'sanjeev@gmail.com', 'user', 0, '03-10-2018', '16:44:pm'),
(5, 'Rakesh', 'Kumar', 7834969218, 'r@gmail.com', 'no', 'r@gmail.com', 'user', 0, '03-10-2018', '16:45:pm'),
(6, 'Rajeev', 'Singh', 7834969225, 'rksinghdls@gmail.com', 'pass', 'rksinghdls@gmail.com', 'user', 1, '03-10-2018', '18:06:pm'),
(7, 'Chandan', 'Kumar', 7834969211, 'chandan@gmail.com', 'chandan', 'chandan@gmail.com', 'user', 0, '03-10-2018', '18:36:pm');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `s_id` int(11) NOT NULL,
  `h_id_ref` int(11) NOT NULL,
  `sub_menu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`s_id`, `h_id_ref`, `sub_menu`) VALUES
(1, 3, 'Php'),
(2, 3, 'Html'),
(3, 3, 'Css'),
(4, 8, 'Registration'),
(5, 8, 'Login'),
(6, 8, 'Logout');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_menu`
--
ALTER TABLE `home_menu`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`cli_id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_menu`
--
ALTER TABLE `home_menu`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
