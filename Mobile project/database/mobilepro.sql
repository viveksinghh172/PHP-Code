-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 24, 2015 at 12:24 PM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `mobilepro`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `additem`
-- 

CREATE TABLE `additem` (
  `item_id` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `camera` varchar(50) NOT NULL,
  `sim` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `additem`
-- 

INSERT INTO `additem` (`item_id`, `category`, `model`, `price`, `camera`, `sim`, `type`, `image`, `des`, `date`) VALUES 
('a13105', 'micromax', 'M 5700', '5500', '3.0 Px', 'Double', 'Gsm + Gsm', 'm-5700.jpg', 'Nice Handset<br />\r\nMultidia<br />\r\nRadio <br />\r\nbluetooth<br />\r\nFM Radio', '2012-01-11 21:04:42'),
('a13134', 'nokia', 'Nokia 5228', '10000', '5.0 Px', 'Double', 'Gsm + Gsm', 'nokia-5228.jpg', 'Nice Handset<br />\r\nRadio <br />\r\nbluetooth<br />\r\nFM Radio', '2012-01-11 20:59:53'),
('a16565', 'nokia', 'Nokia 5530', '6500', '3.0 Px', 'Double', 'Gsm + Gsm', 'nokia5530.gif', 'Radio <br /><br /><br />\r\nbluetooth<br /><br /><br />\r\nFM Radio', '2012-01-11 21:01:39'),
('a16677', 'motorolla', 'M 147', '7854', '3.0 Px', 'Double', 'Gsm + Gsm', 'nokia-c2-01-ofic.jpg', 'Good Looking<br /><br />\r\nBluetooth<br /><br />\r\nRecording<br /><br />\r\nFull Multimedi', '2012-01-11 21:41:41'),
('a19567', 'nokia', 'Nokia c2', '16000', '2.0 Px', 'Singal', 'Gsm', 'nokia-c2-01-ofic.jpg', 'Nice Handset<br /><br />\r\nRadio <br /><br />\r\nbluetooth<br /><br />\r\nFM Radio', '2012-01-11 21:00:41'),
('a20764', 'motorolla', 'M 145', '4512', '2.0 Px', 'Singal', 'Gsm', 'micromax-x414.jpg', 'Good Looking<br />\r\nSlim set<br />\r\nFM Radio<br />\r\nBluetooth<br />\r\nRecording<br />\r\nFull Multimedi', '2012-01-11 21:41:16'),
('a20845', 'samsung', 'Samsung Galaxy', '8500', '3.0 Px', 'Double', 'Gsm + Gsm', 'samsung-galaxy.jpg', 'Mulimedia<br /><br />\r\nFM radio<br /><br />\r\nGood Looking<br /><br />\r\nBluetooth<br /><br />\r\nHigh S', '2012-01-11 21:31:39'),
('a21464', 'micromax', 'Micro x-414', '5000', '3.0 Px', 'Double', 'Gsm + Gsm', 'micromax-x414.jpg', '', '2012-01-11 21:04:00'),
('a21892', 'nokia', 'Nokia c7', '6000', '3.0 Px', 'Double', 'Gsm + Gsm', 'nokia-c7-ofic.jpg', 'Mulimedia<br />\r\nFM radio<br />\r\nGood Looking<br />\r\nBluetooth<br />\r\nHigh Speekar', '2012-01-11 21:27:08'),
('a23183', 'motorolla', ' m456', '8545', '3.0 Px', 'Double', 'Gsm + Gsm', 'nokia5530.gif', 'Good Looking<br />\r\nSlim set<br />\r\nFM Radio<br />\r\nBluetooth<br />\r\nRecording<br />\r\nFull Multimedi', '2012-01-11 21:40:56'),
('a25418', 'spice', 'spice D90', '4000', '2.0 Px', 'Double', 'Gsm + Gsm', 'Spice D-90.jpg', 'Nice Handset<br />\r\nRadio <br />\r\nFM Radio', '2012-01-11 21:02:33'),
('a267', 'motorolla', 'M 15', '5000', '3.0 Px', 'Double', 'Gsm + Gsm', 'm15.jpg', 'Mulimedia<br />\r\nFM radio<br />\r\nGood Looking<br />\r\nBluetooth<br />\r\nHigh Speekar', '2012-01-11 21:29:19'),
('a27158', 'sonyericson', 'Sony A8', '5560', '3.0 Px', 'Double', 'Gsm + Gsm', 'Sony-Ericsson-A8i.jpg', 'Nice Handset<br />\r\nRadio <br />\r\nbluetooth<br />\r\nFM Radio', '2012-01-11 21:05:29'),
('a31720', 'motorolla', 'Moto Atrix', '6000', '3.0 Px', 'Singal', 'Gsm', 'motorola-atrix-europe.jpg', 'Mulimedia<br />\r\nFM radio<br />\r\nGood Looking<br />\r\nBluetooth<br />\r\nHigh Speekar', '2012-01-11 21:30:26'),
('a31824', 'samsung', 'Samsung R17', '6000', '3.0 Px', 'Double', 'Gsm + Gsm', 'samsung-r710.jpg', 'Nice Handset<br />\r\nRadio <br />\r\nbluetooth<br />\r\nFM Radio', '2012-01-11 20:57:58'),
('a32329', 'samsung', 'Samsung m2201', '3500', '5.0 Px', 'Double', 'Gsm + Gsm', 'samsung-m220l.jpg', 'Nice Handset<br />\r\nRadio <br />\r\nbluetooth<br />\r\nFM Radio', '2012-01-11 20:58:33'),
('a3635', 'samsung', 'Samsung Wave', '4000', '3.0 Px', 'Double', 'Gsm + Gsm', 'samsung-wave.jpg', 'FM radio<br /><br />\r\nGood Looking<br /><br />\r\nBluetooth<br /><br />\r\nHigh Speekar', '2012-01-11 21:33:21'),
('a3991', 'nokia', 'Nokia X7', '6000', '3.0 Px', 'Singal', 'Gsm', 'nokia-x7-ofic.jpg', 'Mutimedia<br />\r\nFM Radio<br />\r\nBluetooth<br />\r\nHigh camera<br />\r\nXpress Music', '2012-01-11 21:24:49'),
('a4267', 'blackbarry', '1234 BLL', '10000', '3.0 Px', 'Double', 'Gsm + Gsm', 'm-5700.jpg', '', '2012-01-11 21:42:34'),
('a4514', 'samsung', 'Samsung S5670', '10000', '5.0 Px', 'Double', 'Gsm + Gsm', 'samsung-galaxy-fit-s5670.jpg', 'Mulimedia<br />\r\nFM radio<br />\r\nGood Looking<br />\r\nBluetooth<br />\r\nHigh Speekar', '2012-01-11 21:32:37'),
('a5993', 'lg', 'L 13', '7500', '5.0', 'Double', 'Gsm + Gsm', 'm9.jpg', 'Good One', '2012-01-11 21:37:02'),
('a699', 'spice', 'S-18', '4500', '2.0 Px', 'Double', 'Gsm + Gsm', 's18.jpg', 'Nice Handset<br />\r\nRadio <br />\r\nbluetooth<br />\r\nFM Radio', '2012-01-11 21:03:09'),
('a8723', 'nokia', 'Nokia c5', '5000', '2.0 Px', 'Singal', 'Gsm', 'nokia-c5-03.jpg', 'Nice Handset<br />\r\nRadio <br />\r\nbluetooth<br />\r\nFM Radio', '2012-01-11 20:57:08'),
('a9710', 'micromax', 'M 1122', '5456', '2.0 Px', 'Singal', 'Gsm', 'micromax-x414.jpg', 'Good Looking<br />\r\nSlim set<br />\r\nFM Radio<br />\r\nBluetooth<br />\r\nRecording<br />\r\nFull Multimedi', '2012-01-11 21:40:12'),
('a13043', 'lg', '1234', '6002', '1.3 Px', 'Singal', 'Cdma', 'motorola-atrix-europe.jpg', 'Many Features', '2012-03-21 21:52:41'),
('a18021', 'lg', 'Nice', '34000', '5.0 Px', 'Double', 'Gsm + Gsm', '5.jpg', 'asdasd', '2015-03-24 17:49:12');

-- --------------------------------------------------------

-- 
-- Table structure for table `contact`
-- 

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `massage` varchar(100) NOT NULL,
  `date/time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `contact`
-- 

INSERT INTO `contact` (`name`, `email`, `mobile`, `massage`, `date/time`) VALUES 
('pankaj', 'pankaj@gmail.com', '9928431090', 'hiiiii<br />\r\nhello<br />\r\n', '2011-07-19 00:41:04'),
('alok', 'alok@gmail.com', '9928431090', 'hello<br />\r\nhi', '2011-07-19 00:41:26'),
('pankaj', 'pankaj@gmail.com', '9928431090', '', '2011-07-19 00:48:00'),
('pankaj', 'pankaj@gmail.com', '9928431090', 'hiiiiiiiii', '2011-07-20 07:58:33'),
('', '', '', '', '2011-07-20 20:49:27'),
('pankaj', 'pankaj@gmail.com', '9928431090', 'i m pankaj.', '2012-02-10 13:17:25'),
('pankaj', 'pankaj@gmail.com', '9928431090', 'hiiiiiiiiiiii admin', '2012-03-21 22:47:23'),
('Pankaj', 'pankaj@gmail.com', '9928431090', '', '2012-04-04 04:06:44');

-- --------------------------------------------------------

-- 
-- Table structure for table `orders`
-- 

CREATE TABLE `orders` (
  `orderid` varchar(50) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `add` varchar(100) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `account` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `date/time` varchar(50) NOT NULL,
  PRIMARY KEY  (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `orders`
-- 

INSERT INTO `orders` (`orderid`, `item_id`, `category`, `model`, `price`, `name`, `contact`, `add`, `pin`, `account`, `bank`, `date/time`) VALUES 
('ord16712', 'a20845', 'samsung', 'Samsung Galaxy', '8500', 'Pankaj Garg', '9992222226', 'tgtr', 'tyrt6', '654', '', '2012-03-22 20:55:22'),
('ord29633', 'a13134', 'nokia', 'Nokia 5228', '10000', 'Pankaj Garg', '9928431090', 'RIET', '302026', 'xxxxxxxxxx', '', '2012-03-22 00:31:22');

-- --------------------------------------------------------

-- 
-- Table structure for table `registration`
-- 

CREATE TABLE `registration` (
  `uname` varchar(50) NOT NULL,
  `frstname` varchar(50) NOT NULL,
  `lstname` varchar(50) NOT NULL,
  `gen` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `add` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY  (`uname`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `registration`
-- 

INSERT INTO `registration` (`uname`, `frstname`, `lstname`, `gen`, `pass`, `email`, `add`, `city`, `state`, `country`, `mobile`, `date`) VALUES 
('alok92', 'Alok', 'Garg', 'male', '123456789', 'alok@gmail.com', 'Bhankrota', 'Jaipur', 'Rajasthan', 'India', '9999999999', '2012-03-22 01:42:37'),
('pankaj', 'Pankaj', 'Garg', 'male', 'pankaj123', 'pankaj@gmail.com', 'RIET College', 'Jaipur', 'Rajasthan', 'India', '9928431090', '2012-03-22 00:23:23');
