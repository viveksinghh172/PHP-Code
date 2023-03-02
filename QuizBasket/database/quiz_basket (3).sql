-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 04:05 PM
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
-- Table structure for table `add_questions`
--

CREATE TABLE `add_questions` (
  `q_id` int(11) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `Ques` varchar(250) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `right_ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_questions`
--

INSERT INTO `add_questions` (`q_id`, `cate_name`, `Ques`, `ans1`, `ans2`, `ans3`, `ans4`, `right_ans`) VALUES
(1, 'Php', 'What is full form of php ?', 'Personal home page', 'Personal home2 page', 'Personal home1 page', 'Personal pakage', 'Personal home page'),
(2, 'Php', 'What is work of echo in php ?', 'For print data', 'for print array data', 'for print aa', 'other', 'For print data'),
(3, 'Html', 'What is full form of html ?', 'Hyper text markup language', 'Hyper text meanlanguage', 'Hyper text pro language', 'Hyper text matchlanguage', 'Hyper text markup language'),
(4, 'Html', 'what is br tag in html ?', 'bold', 'line underline', 'line break', 'line state', 'line break');

-- --------------------------------------------------------

--
-- Table structure for table `add_silder`
--

CREATE TABLE `add_silder` (
  `slider_id` mediumint(9) NOT NULL,
  `silder_img` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_silder`
--

INSERT INTO `add_silder` (`slider_id`, `silder_img`) VALUES
(1, '26660'),
(2, '30018'),
(3, '14675');

-- --------------------------------------------------------

--
-- Table structure for table `categoery`
--

CREATE TABLE `categoery` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_details` varchar(200) NOT NULL,
  `cat_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoery`
--

INSERT INTO `categoery` (`cat_id`, `cat_name`, `cat_details`, `cat_pic`) VALUES
(1, 'Php', ' PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development, but also used as a general-purpose programming language. It was originally created by Ras', 'php.png'),
(2, 'Html', '  PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development, but also used as a general-purpose programming language. It was originally created by Ra', 'html1.jpg'),
(3, 'Css', '  PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development, but also used as a general-purpose programming language. It was originally created by Ra', 'css.jpg'),
(4, 'java', '  PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development, but also used as a general-purpose programming language. It was originally created by Ra', 'java1.jpg'),
(5, 'Anguler Js', '  PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development, but also used as a general-purpose programming language. It was originally created by Ra', 'angulerjs.jpg'),
(6, 'C', '  PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development, but also used as a general-purpose programming language. It was originally created by Ra', 'c.png'),
(7, 'C++', '  PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development, but also used as a general-purpose programming language. It was originally created by Ra', 'c++.png'),
(8, 'Jquery', '  PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development, but also used as a general-purpose programming language. It was originally created by Ra', 'jquery.png'),
(9, 'Python', '  PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development, but also used as a general-purpose programming language. It was originally created by Ra', 'paython.png'),
(10, 'R Langange', ' PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development, but also used as a general-purpose programming language. It was originally created by Ras', 'r.jpg'),
(11, 'Ruby ', 'PHP: Hypertext Preprocessor (or simply PHP) is a server-side scripting language designed for Web development, but also used as a general-purpose programming language. It was originally created by Rasm', 'ruby.jpg');

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
(7, 'Chandan', 'Kumar', 7834969211, 'chandan@gmail.com', 'chandan', 'chandan@gmail.com', 'user', 0, '03-10-2018', '18:36:pm'),
(9, 'h', 'h', 555, 'h', 'h', 'h', 'user', 0, '10-10-2018', '18:57:pm');

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
-- Indexes for table `add_questions`
--
ALTER TABLE `add_questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `add_silder`
--
ALTER TABLE `add_silder`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `categoery`
--
ALTER TABLE `categoery`
  ADD PRIMARY KEY (`cat_id`);

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
-- AUTO_INCREMENT for table `add_questions`
--
ALTER TABLE `add_questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `add_silder`
--
ALTER TABLE `add_silder`
  MODIFY `slider_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categoery`
--
ALTER TABLE `categoery`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `home_menu`
--
ALTER TABLE `home_menu`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
