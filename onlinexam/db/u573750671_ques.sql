-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2009 at 06:08 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u573750671_ques`
--

-- --------------------------------------------------------

--
-- Table structure for table `gk`
--

CREATE TABLE IF NOT EXISTS `gk` (
  `sno` int(255) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `correct_answer` varchar(255) DEFAULT NULL,
  `given_answer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gk`
--

INSERT INTO `gk` (`sno`, `question`, `a`, `b`, `c`, `d`, `correct_answer`, `given_answer`) VALUES
(1, 'What is GK?', 'Good Knowledge', 'General Knowledge', 'General King', 'Good KingDom', 'b', 'b'),
(2, 'dsfdfgsdfgfg', 'hfsdfhsfdgh', 'hsdfhsdfhsdfhsd', 'fhsdfgsdgf ', ' dfgdf dfg', 'a', 'a'),
(3, 'dfgdsfgdfshdfshf', 'dshsdfhs', 'fdhhsfhds', 'dfhsdfhsdf dfh', ' dfh df fd hh', 'b', 'a'),
(4, 'dskfdjf', 'fasf', 'sfafafs', 'fasf', 'fsf', 'c', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `hacking`
--

CREATE TABLE IF NOT EXISTS `hacking` (
  `sno` int(255) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `correct_answer` varchar(255) DEFAULT NULL,
  `given_answer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hacking`
--

INSERT INTO `hacking` (`sno`, `question`, `a`, `b`, `c`, `d`, `correct_answer`, `given_answer`) VALUES
(1, 'Welcome to the quiz..', 'Thanks', 'dfg', 'dgg', 'dggd', 'a', 'a'),
(2, 'How to Hack FB?', 'Using Phishing ', 'Using Camera', 'Using Account Name', 'Using Mobile No. Or Email Address', 'a', 'a'),
(3, 'who r u?', 'Hacker', 'thief', 'sdfhsdfh', 'fake', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

CREATE TABLE IF NOT EXISTS `pic` (
  `sno` int(255) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `correct_answer` varchar(255) DEFAULT NULL,
  `given_answer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pic`
--

INSERT INTO `pic` (`sno`, `question`, `a`, `b`, `c`, `d`, `correct_answer`, `given_answer`) VALUES
(1, 'dsgsdgsdgsdxxdcfbvf cd', 'xz', 'fgvf', 'xv', 'cxvc', 'c', 'No Selected'),
(2, 'dfhfgh', 'sfghsfgf', 'shfh', 'dfhdf', 'dfhh', 'a', 'No Selected'),
(3, 'xcbgxfdgdxfg', 'sxgfg', 'dsg', 'sfdg', 'dgsdg', 'b', 'No Selected');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gk`
--
ALTER TABLE `gk`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hacking`
--
ALTER TABLE `hacking`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `pic`
--
ALTER TABLE `pic`
 ADD PRIMARY KEY (`sno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
