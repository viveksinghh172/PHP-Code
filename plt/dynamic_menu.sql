-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2018 at 02:59 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamic_menu`
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
(2, 'About'),
(3, 'Conatct'),
(4, 'play_quiz'),
(5, 'Help');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `sub_menu_id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `sub_menu_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`sub_menu_id`, `ref_id`, `sub_menu_name`) VALUES
(1, 4, 'php'),
(2, 4, 'html'),
(3, 4, 'css'),
(4, 2, 'my_team'),
(5, 4, 'Java'),
(6, 3, 'direc contact'),
(7, 3, 'by email'),
(8, 5, 'why ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_menu`
--
ALTER TABLE `home_menu`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`sub_menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_menu`
--
ALTER TABLE `home_menu`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sub_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
