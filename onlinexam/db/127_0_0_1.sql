-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2012 at 04:46 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cdcol`
--

-- --------------------------------------------------------

--
-- Table structure for table `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `titel` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `interpret` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `jahr` int(11) DEFAULT NULL,
`id` bigint(20) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cds`
--
ALTER TABLE `cds`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cds`
--
ALTER TABLE `cds`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;--
-- Database: `ismartexams`
--
--
-- Database: `oes`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `admname` varchar(32) NOT NULL,
  `admpassword` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`admname`, `admpassword`) VALUES
('root', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `testid` bigint(20) NOT NULL DEFAULT '0',
  `qnid` int(11) NOT NULL DEFAULT '0',
  `question` varchar(500) DEFAULT NULL,
  `optiona` varchar(100) DEFAULT NULL,
  `optionb` varchar(100) DEFAULT NULL,
  `optionc` varchar(100) DEFAULT NULL,
  `optiond` varchar(100) DEFAULT NULL,
  `correctanswer` enum('optiona','optionb','optionc','optiond') DEFAULT NULL,
  `marks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stdid` bigint(20) NOT NULL,
  `stdname` varchar(40) DEFAULT NULL,
  `stdpassword` varchar(40) DEFAULT NULL,
  `emailid` varchar(40) DEFAULT NULL,
  `contactno` varchar(20) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `pincode` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stdid`, `stdname`, `stdpassword`, `emailid`, `contactno`, `address`, `city`, `pincode`) VALUES
(1, 'vishal', '.»Å+', 'sd@gf.x', '9876543210', 'dfs', 'dfs', '248001');

-- --------------------------------------------------------

--
-- Table structure for table `studentquestion`
--

CREATE TABLE IF NOT EXISTS `studentquestion` (
  `stdid` bigint(20) NOT NULL DEFAULT '0',
  `testid` bigint(20) NOT NULL DEFAULT '0',
  `qnid` int(11) NOT NULL DEFAULT '0',
  `answered` enum('answered','unanswered','review') DEFAULT NULL,
  `stdanswer` enum('optiona','optionb','optionc','optiond') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studenttest`
--

CREATE TABLE IF NOT EXISTS `studenttest` (
  `stdid` bigint(20) NOT NULL DEFAULT '0',
  `testid` bigint(20) NOT NULL DEFAULT '0',
  `starttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `endtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `correctlyanswered` int(11) DEFAULT NULL,
  `status` enum('over','inprogress') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subid` int(11) NOT NULL,
  `subname` varchar(40) DEFAULT NULL,
  `subdesc` varchar(100) DEFAULT NULL,
  `tcid` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `testid` bigint(20) NOT NULL,
  `testname` varchar(30) NOT NULL,
  `testdesc` varchar(100) DEFAULT NULL,
  `testdate` date DEFAULT NULL,
  `testtime` time DEFAULT NULL,
  `subid` int(11) DEFAULT NULL,
  `testfrom` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `testto` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `duration` int(11) DEFAULT NULL,
  `totalquestions` int(11) DEFAULT NULL,
  `attemptedstudents` bigint(20) DEFAULT NULL,
  `testcode` varchar(40) NOT NULL,
  `tcid` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testconductor`
--

CREATE TABLE IF NOT EXISTS `testconductor` (
  `tcid` bigint(20) NOT NULL,
  `tcname` varchar(40) DEFAULT NULL,
  `tcpassword` varchar(40) DEFAULT NULL,
  `emailid` varchar(40) DEFAULT NULL,
  `contactno` varchar(20) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `pincode` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
 ADD PRIMARY KEY (`admname`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`testid`,`qnid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`stdid`), ADD UNIQUE KEY `stdname` (`stdname`), ADD UNIQUE KEY `emailid` (`emailid`);

--
-- Indexes for table `studentquestion`
--
ALTER TABLE `studentquestion`
 ADD PRIMARY KEY (`stdid`,`testid`,`qnid`), ADD KEY `testid` (`testid`,`qnid`);

--
-- Indexes for table `studenttest`
--
ALTER TABLE `studenttest`
 ADD PRIMARY KEY (`stdid`,`testid`), ADD KEY `testid` (`testid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
 ADD PRIMARY KEY (`subid`), ADD UNIQUE KEY `subname` (`subname`), ADD KEY `subject_fk1` (`tcid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
 ADD PRIMARY KEY (`testid`), ADD UNIQUE KEY `testname` (`testname`), ADD KEY `test_fk1` (`subid`), ADD KEY `test_fk2` (`tcid`);

--
-- Indexes for table `testconductor`
--
ALTER TABLE `testconductor`
 ADD PRIMARY KEY (`tcid`), ADD UNIQUE KEY `stdname` (`tcname`), ADD UNIQUE KEY `emailid` (`emailid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`testid`) REFERENCES `test` (`testid`);

--
-- Constraints for table `studentquestion`
--
ALTER TABLE `studentquestion`
ADD CONSTRAINT `studentquestion_ibfk_1` FOREIGN KEY (`stdid`) REFERENCES `student` (`stdid`),
ADD CONSTRAINT `studentquestion_ibfk_2` FOREIGN KEY (`testid`, `qnid`) REFERENCES `question` (`testid`, `qnid`);

--
-- Constraints for table `studenttest`
--
ALTER TABLE `studenttest`
ADD CONSTRAINT `studenttest_ibfk_1` FOREIGN KEY (`stdid`) REFERENCES `student` (`stdid`),
ADD CONSTRAINT `studenttest_ibfk_2` FOREIGN KEY (`testid`) REFERENCES `test` (`testid`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
ADD CONSTRAINT `subject_fk1` FOREIGN KEY (`tcid`) REFERENCES `testconductor` (`tcid`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
ADD CONSTRAINT `test_fk1` FOREIGN KEY (`subid`) REFERENCES `subject` (`subid`),
ADD CONSTRAINT `test_fk2` FOREIGN KEY (`tcid`) REFERENCES `testconductor` (`tcid`);
--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `pma_bookmark`
--

CREATE TABLE IF NOT EXISTS `pma_bookmark` (
`id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma_column_info`
--

CREATE TABLE IF NOT EXISTS `pma_column_info` (
`id` int(5) unsigned NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

--
-- Dumping data for table `pma_column_info`
--

INSERT INTO `pma_column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`) VALUES
(2, 'u573750671_ques', 'cs', 'sno', '', '', '_', ''),
(10, 'u573750671_vk', 'ans', 'sno', '', '', '_', ''),
(8, 'u573750671_vk', 'ans', 'user_name', '', '', '_', ''),
(5, 'u573750671_vk', 'ans', 'given_answer', '', '', '_', ''),
(7, 'u573750671_vk', 'ans', 'sessn_id', '', '', '_', ''),
(9, 'u573750671_vk', 'ans', 'subject', '', '', '_', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma_history`
--

CREATE TABLE IF NOT EXISTS `pma_history` (
`id` bigint(20) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_navigationhiding`
--

CREATE TABLE IF NOT EXISTS `pma_navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma_pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
`page_nr` int(10) unsigned NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_recent`
--

CREATE TABLE IF NOT EXISTS `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '{"0":{"db":"u573750671_vk","table":"ans"},"1":{"db":"quiz_new","table":"mst_useranswer"},"2":{"db":"u573750671_vk","table":"users"},"3":{"db":"quiz_new","table":"mst_admin"},"4":{"db":"quiz_new","table":"mst_result"},"6":{"db":"oes","table":"adminlogin"},"7":{"db":"oes","table":"question"},"8":{"db":"oes","table":"student"},"9":{"db":"oes","table":"studentquestion"}}');

-- --------------------------------------------------------

--
-- Table structure for table `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma_savedsearches`
--

CREATE TABLE IF NOT EXISTS `pma_savedsearches` (
`id` int(5) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_coords`
--

CREATE TABLE IF NOT EXISTS `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_info`
--

CREATE TABLE IF NOT EXISTS `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma_tracking`
--

CREATE TABLE IF NOT EXISTS `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_userconfig`
--

CREATE TABLE IF NOT EXISTS `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2012-10-12 14:45:40', '{"collation_connection":"utf8mb4_general_ci"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma_usergroups`
--

CREATE TABLE IF NOT EXISTS `pma_usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma_users`
--

CREATE TABLE IF NOT EXISTS `pma_users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma_column_info`
--
ALTER TABLE `pma_column_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma_designer_coords`
--
ALTER TABLE `pma_designer_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma_history`
--
ALTER TABLE `pma_history`
 ADD PRIMARY KEY (`id`), ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma_navigationhiding`
--
ALTER TABLE `pma_navigationhiding`
 ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
 ADD PRIMARY KEY (`page_nr`), ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma_recent`
--
ALTER TABLE `pma_recent`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma_relation`
--
ALTER TABLE `pma_relation`
 ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`), ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma_table_coords`
--
ALTER TABLE `pma_table_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma_table_info`
--
ALTER TABLE `pma_table_info`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma_table_uiprefs`
--
ALTER TABLE `pma_table_uiprefs`
 ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma_tracking`
--
ALTER TABLE `pma_tracking`
 ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma_userconfig`
--
ALTER TABLE `pma_userconfig`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma_usergroups`
--
ALTER TABLE `pma_usergroups`
 ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma_users`
--
ALTER TABLE `pma_users`
 ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_column_info`
--
ALTER TABLE `pma_column_info`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pma_history`
--
ALTER TABLE `pma_history`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
MODIFY `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT;--
-- Database: `quiz_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_admin`
--

CREATE TABLE IF NOT EXISTS `mst_admin` (
`id` int(11) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_admin`
--

INSERT INTO `mst_admin` (`id`, `loginid`, `pass`) VALUES
(1, 'sanjeev', 'sanjeev');

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

CREATE TABLE IF NOT EXISTS `mst_question` (
`que_id` int(5) NOT NULL,
  `test_id` int(5) DEFAULT NULL,
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_question`
--

INSERT INTO `mst_question` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(16, 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2),
(17, 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3),
(18, 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1),
(19, 9, 'Which of the follwing contexts are available in the add watch window?', 'Project', 'Module', 'Procedure', 'All', 4),
(20, 9, 'Which window will allow you to halt the execution of your code when a variable changes?', 'The call stack window', 'The immedite window', 'The locals window', 'The watch window', 4),
(22, 9, 'How can you print the object name associated with the last VB  error to the Immediate window?', 'Debug.Print Err.Number', 'Debug.Print Err.Source', 'Debug.Print Err.Description', 'Debug.Print Err.LastDLLError', 2),
(23, 9, 'How can you print the object name associated with the last VB  error to the Immediate window?', 'Debug.Print Err.Number', 'Debug.Print Err.Source', 'Debug.Print Err.Description', 'Debug.Print Err.LastDLLError', 2),
(24, 9, 'What function does the TabStop property on a command button perform?', 'It determines whether the button can get the focus', 'If set to False it disables the Tabindex property.', 'It determines the order in which the button will receive the focus', 'It determines if the access key swquence can be used', 1),
(25, 10, 'You application creates an instance of a form. What is the first event that will be triggered in the from?', 'Load', 'GotFocus', 'Instance', 'Initialize', 4),
(26, 10, 'Which of the following is Hungarian notation for a menu?', 'Menu', 'Men', 'mnu', 'MN', 3),
(27, 10, 'You are ready to run your program to see if it works.Which key on your keyboard will start the program?', 'F2', 'F3', 'F4', 'F5', 4),
(28, 10, 'Which of the following snippets of code will unload a form named frmFo0rm from memory?', 'Unload Form', 'Unload This', 'Unload Me', 'Unload', 3),
(29, 10, 'You want the text in text box named txtMyText to read My Text.In which property will you place this string?', 'Caption', 'Text', 'String', 'None of the above', 2),
(30, 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0),
(31, 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_result`
--

CREATE TABLE IF NOT EXISTS `mst_result` (
  `login` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_result`
--

INSERT INTO `mst_result` (`login`, `test_id`, `test_date`, `score`) VALUES
('raj', 8, '0000-00-00', 3),
('raj', 9, '0000-00-00', 3),
('raj', 8, '0000-00-00', 1),
('ashish', 10, '0000-00-00', 3),
('ashish', 9, '0000-00-00', 2),
('ashish', 10, '0000-00-00', 0),
('raj', 8, '0000-00-00', 0),
('ankur', 11, '0000-00-00', 0),
('raj', 9, '0000-00-00', 2),
('', 8, '0000-00-00', 1),
('raj', 9, '0000-00-00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mst_subject`
--

CREATE TABLE IF NOT EXISTS `mst_subject` (
`sub_id` int(5) NOT NULL,
  `sub_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_subject`
--

INSERT INTO `mst_subject` (`sub_id`, `sub_name`) VALUES
(1, 'VB'),
(2, 'Oracle'),
(3, 'Java'),
(4, 'PHP'),
(5, 'Computer Fundamental'),
(6, 'Networking'),
(7, 'mysql');

-- --------------------------------------------------------

--
-- Table structure for table `mst_test`
--

CREATE TABLE IF NOT EXISTS `mst_test` (
`test_id` int(5) NOT NULL,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_test`
--

INSERT INTO `mst_test` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(8, 1, 'VB Basic Test', '3'),
(9, 1, 'Essentials of VB', '5'),
(10, 1, 'Creating User Services', '5'),
(11, 7, 'function', '5');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE IF NOT EXISTS `mst_user` (
`user_id` int(5) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`user_id`, `login`, `pass`, `username`, `address`, `city`, `phone`, `email`) VALUES
(1, 'raj', 'raj', 'Rajen', 'limbdi', 'limbdi', 9999, 'raj@yahoo.com'),
(12, 'ashish', 'shah', 'ashish', 'laskdjf', 'S''nagar', 228585, 'ashish@yahoo.com'),
(14, 'Dhaval123', 'a', 'a', 'a', 'a', 0, 'dhaval@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer`
--

CREATE TABLE IF NOT EXISTS `mst_useranswer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_admin`
--
ALTER TABLE `mst_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_question`
--
ALTER TABLE `mst_question`
 ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `mst_subject`
--
ALTER TABLE `mst_subject`
 ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `mst_test`
--
ALTER TABLE `mst_test`
 ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_admin`
--
ALTER TABLE `mst_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mst_question`
--
ALTER TABLE `mst_question`
MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `mst_subject`
--
ALTER TABLE `mst_subject`
MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mst_test`
--
ALTER TABLE `mst_test`
MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;--
-- Database: `tech_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
`answer_id` int(11) NOT NULL,
  `replied` int(11) NOT NULL,
  `question_id` varchar(50) NOT NULL,
  `answer_detail` varchar(2000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `like` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `replied`, `question_id`, `answer_detail`, `datetime`, `user_id`, `like`) VALUES
(4, 0, '13', 'this is mehuls answer 1.... to the above asked question....', '2012-04-04 06:45:49', 0, 0),
(5, 0, '13', 'rgua ua nt BIRWGEA baWEQWEHkah', '2012-04-05 11:44:56', 0, 0),
(6, 0, '12', 'using the connectivity query', '2012-04-06 06:49:11', 8, 0),
(7, 0, '14', 'the various stages are \r\nNew,Ready,Running,Blocked,Terminate', '2012-04-07 07:33:43', 9, 2),
(8, 0, '16', 'In the star topology there is a centralized hub. The communication between various nodes through the hub.\r\nIn this type of network there is a bottleneck of the centralized hub.It is widely used in LAN connection.', '2012-04-08 06:14:09', 9, 0),
(9, 0, '16', 'In the star topology there is a centralized hub. The communication between various nodes through the hub.\r\nIn this type of network there is a bottleneck of the centralized hub.It is widely used in LAN connection.', '2012-04-09 13:45:22', 9, 0),
(11, 0, '17', 'You can do it withing Borland or VC++ IDE & Compiler.', '2012-04-11 01:15:51', 8, 0),
(12, 0, '17', 'this is reply 1. and this reply is not 2nd...', '2012-04-13 03:49:44', 8, 0),
(13, 0, '17', 'scheduling algorithm is carried out by various methods such as first come first schedule,round robin scheduling,etc;', '2012-04-11 13:33:46', 8, 0),
(15, 0, '17', 'It has many method to explain the sheduling ', '2012-04-12 20:18:28', 12, 0),
(16, 0, '21', 'swing is swing and applet is not swing.', '2012-04-13 12:20:50', 17, 0),
(17, 0, '17', 'scheduling is....', '2012-04-18 11:49:44', 8, 0),
(18, 0, '11', 'i got the answer', '2012-04-18 13:06:22', 9, 0),
(20, 0, '12', 'connectivity with use of execute query and non-execute query\r\n', '2012-04-19 02:27:14', 8, 0),
(21, 0, '17', '\r\n', '2012-04-21 12:30:38', 8, 0),
(22, 0, '29', 'the thread is sub process...', '2012-04-24 14:41:23', 30, 0),
(23, 0, '29', 'are vah', '2012-04-24 14:54:00', 8, 0),
(24, 0, '31', '>This problem is faced with several of people all you have to do is make it stop doing MIME sniffing. You can disable this MIME sniffing by selecting IE the go to tools then to internet options then click custom level after that select Miscellaneous section. After that scroll down in this section then check enable underâ€ open files based on content, not the file extensionâ€', '2012-04-25 13:48:39', 12, 0),
(25, 0, '32', 'The problem was with the theme. Actually it was customized video game theme that was causing the error. Now its working proper.', '2012-04-25 13:49:35', 12, 0),
(26, 0, '32', 'Can you post a screenshot of the problem ? Even I had never seen such problem that notifications turned black. If possible post the screenshot so that I can see what type of pop message in black color is coming in laptop. Till than you can try setting some another them and see if it works. Hope it will work.', '2012-04-25 13:50:25', 9, 0),
(27, 0, '33', 'As i have doubt if you could reset it from the safe mode. But you can surely do it with the help of an application called "Windows Password Key". Here is the step by step process for doing the same:\r\n\r\n\r\nâ€¢	Download Windows Password key from http://www.lostwindowspassword.com/downloads/Windows_Password_Key_Standard_Demo.exe.\r\nâ€¢	Install it on any other PC that you can access easily.\r\nâ€¢	Now you need to burn a bootable CD/DVD Or better create a USB Flash Drive.\r\nâ€¢	Connect this USB or insert bootable DVD to your Windows 8 system and recover the password.\r\nThats it. \r\n', '2012-04-25 13:50:59', 9, 0),
(28, 0, '34', 'C:WindowsSystem32shutdown.exe -s -t 0 -f', '2012-04-25 13:54:52', 9, 0),
(29, 0, '35', 'I have read your question and I would keen to tell you that you can use Mozilla Firefox 10 in Linux-32 bit but before you do that you have to visit official site of the Mozilla Firefox. After that you need to select system and language below download option and then choose Linux installed and download that in your machine. Now you have to install it in your machine. I guess this will bring an end to your problem.', '2012-04-25 14:07:16', 12, 0),
(30, 0, '36', 'Hi friends, as o know there are many users who are really in need of the Google chrome themes but are unable to install the same. So I have started this thread to give you people a fair idea regarding the same. So now to install the theme you just need to follow the below mentioned steps:\r\n\r\nStep 1: Start Google Chrome and go to this web address . Google runs its own themes, in fact online.\r\n\r\nStep 2: Navigate in the themes and click Apply Theme, once it is selected.\r\n\r\nStep 3: Downloading and installation are automatic, and your theme is applied instantly. However, you can cancel it by clicking the Cancel button in the upper right of the browser!', '2012-04-25 14:16:37', 9, 0),
(31, 0, '37', 'Happili.com is deeply infiltrated into victimsâ€™ system. To remove Happili.com, please follow below instruction:\r\n1.       reboot your system into safe mode with networking;\r\n2.       download Anvi Smart Defender and install it;\r\n3.       Fully scan your computer;\r\n4.       delete Happili.com Redirect Virus related file:\r\nQuote\r\n    * %AllUsersProfile%{random}\r\n    * %AllUsersProfile%{random}*.lnk\r\n    * HKEY_CURRENT_USERSoftwareMicrosoftWindowsCurrentVersionRunOnce [RANDOM]\r\n    * HKEY_CURRENT_USERSoftwareMicrosoftWindowsCurrentVersionRun [RANDOM]\r\n    * HKEY_LOCAL_MACHINESOFTWAREMicrosoftWindowsCurrentVersionRun [RANDOM].exe\r\n    * HKEY_CURRENT_USERSoftware[RANDOM]\r\n5.  restart your computer;\r\n', '2012-04-25 14:27:26', 15, 0),
(32, 0, '38', 'The Google Redirect Virus is a real and serious threat to PCs around the world.  The main symptom of this virus is that the search results of Google users will be diverted, and instead of being directed to legitimate sites will redirect to malicious websites distributing spyware to sell rogue security tools and distribution of viruses and infections.  The Google Redirect Virus is hidden in your PC, and once activated will make it nearly impossible for the user to use any search engine. What makes Google Redirect Virus hijackers even more dangerous than a normal search engine is the fact that you can use up to 100% of system resources, making the system almost impossible to operate.  Google Redirect Virus will also create a backdoor on the system that other types of malware that exploit the system for easy entry.\r\n\r\nAlthough it is popularly referred to by the title of the virus, the virus is more skillfully Google Redirect classified as a rootkit or Trojan.  This threat is caused by several types of TDSS rootkit, some of which goes by the name of: \r\nâ€¢	Alureon \r\nâ€¢	Tidserv \r\nâ€¢	Backdoor.Tidserv \r\nâ€¢	Trojan: WinNT / Alureon.D \r\nâ€¢	TrojanSpy: Win32/Chadem.A and many other\r\nGoogle Redirect Virus blocks ads and Google search pages show random ads that contain dubious and link spammers and malware sites.  In fact, Google search results are hijacked, making it impossible for the user to perform an online search.After the user is redirected to a website unrelated to their initial research, some websites you can use to generate false traffic to increase their payments to affiliate marketing, while others attempt to trick you to buy harmful rogue security tools. Another big problem with Google Redirect Virus is that you can hide from security tools installed.  It will not be picked up by many security tools, and then the user may find it difficult to detect and remove Google Redirect virus from the system.  It does this by injecting the same memory and processes to enabl', '2012-04-25 14:30:56', 15, 4),
(37, 0, '39', 'As for a listing on a wired network, it needs to be physically connected by Wi-Fi, anyone within range of the network can potentially connect to it.  And this is even more annoying than the intruder may not be visible: this can be a neighbor, passing in the street, in short, anyone.  Then he is free to browse the hard drive of your PC connected to the unprotected or using your Internet inappropriately, you yourself are responsible for the acts he might commit.  Fortunately, it is possible to prevent this. \r\n\r\nThe default settings for access points and wireless routers are not secure and allow anyone to connect to your network.  Thus, the majority of users switching to Wi-Fi, seeing that the wireless works straight start, do not go further and do not seek to secure it, which is extremely risky.  Here is how to properly configure your Wi-Fi to make it safer.\r\n\r\nIn our example, we used Orange Livebox. However, the features and options listed are present in most of the box, routers and access points Wi-Fi market.  Do not hesitate to refer to your hardware documentation for more information and find out how to access a specific feature.\r\n', '2012-04-25 14:45:57', 9, 0),
(40, 0, '40', 'If your broadband connection is slower than it should be, it may be due to the configuration of your network or computer.  If you tell your company that your Internet connection is slow, probably say that the problem is on your computer and will not be responsible.  This guide will show you what you can do to improve the speed of your connection. Before making any changes to your settings, turn off the router or access point to Internet and back on.  Sometimes the connection can be slow due to a failure point in the output device to the Internet. ', '2012-04-25 14:53:40', 15, 0),
(41, 0, '14', 'thre are 5 stages witch are ready,running,wait,block,release ', '2012-04-26 12:55:00', 15, 6),
(42, 0, '14', '1.ready\r\n2.running\r\n3.wait\r\n4.block\r\n5.release', '2012-04-26 12:56:15', 8, 9),
(43, 0, '7', 'jjjjjjj', '2012-04-27 04:44:09', 8, 0),
(44, 0, '41', 'THIS HAS FIVE STAPE', '2012-04-27 06:06:41', 8, 1),
(45, 0, '39', 'ddddddddd', '2015-10-25 07:11:16', 8, 0),
(46, 0, '39', 'dfdfdf', '2015-10-25 07:11:31', 8, 0),
(47, 0, '42', 'Rasmus Lerdorfffffffff', '2015-10-25 07:12:40', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
`chatdetail_id` int(11) NOT NULL,
  `cdatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatdetail_id`, `cdatetime`, `message`, `user_id`, `chat_id`) VALUES
(13, '2012-04-17 14:28:03', 'hi fabin im hardik', 8, 5),
(14, '2012-04-17 14:28:22', 'ka vikla', 8, 6),
(15, '2012-04-17 14:41:26', 'hi', 9, 5),
(16, '2012-04-17 14:42:12', 'how r u', 9, 5),
(17, '2012-04-17 14:42:55', 'hello', 9, 5),
(18, '2012-04-17 14:43:32', 'hi', 9, 5),
(19, '2012-04-17 14:43:52', 'kaise ho ?', 9, 5),
(20, '2012-04-17 14:43:58', 'm fine', 9, 5),
(21, '2012-04-17 14:44:36', 'this is hardik', 9, 5),
(22, '2012-04-17 14:46:39', 'now its fine', 9, 5),
(23, '2012-04-17 14:46:49', 'hardik here', 8, 5),
(24, '2012-04-18 09:37:31', 'shu karo 6o', 5, 7),
(25, '2012-04-18 09:41:37', 'are hardik hu hato ato', 12, 8),
(26, '2012-04-18 09:46:28', 'are shu photo mast mukyo 6e', 8, 9),
(27, '2012-04-19 12:12:32', 'are dipak avyo 6e ', 12, 8),
(28, '2012-04-21 11:53:43', 'hi\r\n', 8, 10),
(32, '2012-04-24 08:12:28', 'aaaaaaa', 5, 13),
(35, '2012-04-24 14:52:42', 'shu bhai', 30, 16),
(36, '2012-04-26 13:08:05', 'what is message passing system in the distributed application?', 9, 17),
(37, '2012-04-26 13:09:39', 'why synchronization require in the distributed system? ', 9, 18),
(38, '2012-04-27 04:46:00', 'how is your work going on?\r\n', 8, 19),
(39, '2015-10-25 07:08:31', 'ddddddddd', 5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `chatmaster`
--

CREATE TABLE IF NOT EXISTS `chatmaster` (
`chat_id` int(11) NOT NULL,
  `user_id_from` int(11) NOT NULL,
  `user_id_to` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatmaster`
--

INSERT INTO `chatmaster` (`chat_id`, `user_id_from`, `user_id_to`) VALUES
(5, 8, 9),
(6, 8, 12),
(7, 5, 8),
(8, 12, 8),
(9, 8, 5),
(10, 8, 9),
(11, 8, 5),
(12, 8, 5),
(13, 5, 8),
(14, 5, 8),
(15, 29, 8),
(16, 30, 5),
(17, 9, 15),
(18, 9, 12),
(19, 8, 15),
(20, 5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
`question_id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `question_detail` varchar(2000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `subtopic_id` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `heading`, `question_detail`, `datetime`, `user_id`, `subtopic_id`, `views`) VALUES
(7, 'table connectivity', 'query of the connecting table with form?', '2012-04-11 09:42:44', 8, 7, 9),
(8, 'Window Xp', 'how to debbuge the ble screen error?', '2012-04-11 00:25:00', 8, 5, 1),
(9, 'Window vista', 'hot to change the administrator password from cmd?', '2012-04-03 17:51:44', 8, 5, 0),
(10, 'Window 7', 'how to make uninstall set up? ', '2012-04-05 02:24:42', 8, 5, 3),
(11, 'linux', 'how to use the live source of l\r\n', '2012-04-07 00:51:42', 9, 5, 6),
(12, 'connectivity', 'how to connect form with database?', '2012-04-09 09:01:36', 8, 2, 5),
(14, 'Thread life cycle', 'What are the different stages of thread life cycle?\r\n', '2012-04-09 23:04:43', 9, 12, 189),
(15, 'applet controls ', 'how to create simple applet program? ', '2012-04-12 12:02:44', 9, 13, 6),
(16, 'STAR topology', 'how connection established in the star topology?\r\n', '2012-04-26 22:14:01', 9, 17, 1),
(17, 'Scheduling', 'Hello,\r\n\r\nI want to create a program that supports multi-threading with scheduling. The program must', '2012-04-17 15:41:54', 8, 12, 79),
(18, 'Sheduling algorithm', 'Explain the various scheduling algorithm?\r\n', '2012-04-11 13:13:25', 8, 0, 0),
(19, 'Sheduling algorithm', 'Explain the various scheduling algorithm?\r\n', '2012-04-11 13:13:54', 8, 0, 1),
(20, 'scheduling algorithm', 'Explain various scheduling algorithm used in the cpu scheduling?', '2012-04-11 13:18:47', 8, 12, 9),
(21, 'Swing Applet', 'I want to know the difference between normal Applet and Swing Applet.....\r\n\r\nAnd I also want to know', '2012-04-13 12:13:35', 16, 13, 12),
(22, 'Applet Class', 'What is applet class ?', '2012-04-13 13:13:37', 26, 13, 2),
(23, 'what is applet ?', 'what is applet ?\r\n\r\nIs it as class or package ?', '2012-04-13 13:18:45', 27, 13, 4),
(24, 'a', '', '2012-04-21 12:53:31', 8, 12, 0),
(25, 'thread ', 'explain the  various stages of thread', '2012-04-22 05:39:06', 8, 12, 6),
(26, '', '', '2012-04-24 04:15:11', 8, 12, 0),
(27, 'a', '', '2012-04-24 04:15:33', 8, 12, 0),
(28, 'a', '', '2012-04-24 04:17:32', 8, 12, 0),
(29, 'what', 'what is what', '2012-04-24 14:18:15', 28, 12, 7),
(30, 'What is thread ?', 'What is thread ?', '2012-04-24 14:38:03', 29, 12, 1),
(31, 'window 7', 'Windows 7, how can I open .jnlp extension in Internet Explorer 9?', '2012-04-25 13:25:05', 8, 12, 5),
(32, 'window vista', 'Unable to see taskbar notifications in Windows Vista SP2?', '2012-04-25 13:26:24', 8, 12, 5),
(33, 'window 8', 'How can i recover lost windows 8 Administrator password?', '2012-04-25 13:27:06', 8, 12, 4),
(34, 'windows 8', ' How to easily Shutdown Windows 8 Consumer preview?', '2012-04-25 13:52:35', 8, 12, 4),
(35, 'Mozila Browser', 'Operate Mozilla Firefox 10 in linux-32 Bit?', '2012-04-25 14:05:47', 9, 18, 11),
(36, 'Google Chrome Browser', 'How to install Google chrome themes?', '2012-04-25 14:14:33', 12, 18, 7),
(37, 'Happili ', 'How to remove Happili redirecting virus?', '2012-04-25 14:24:11', 9, 19, 22),
(38, 'Google Redirect Virus', 'How to remove Google redirect virus from Web browser?', '2012-04-25 14:29:52', 9, 19, 15),
(39, 'Secure Wi-Fi', 'Tips to create secure Wi-Fi', '2012-04-25 14:45:07', 15, 20, 9),
(40, 'Connection speed', 'How to increase the speed of your broadband connection?', '2012-04-25 14:53:08', 9, 20, 2),
(41, 'THREADING', 'WHAT IS THREADING?', '2012-04-27 06:05:09', 32, 12, 16),
(42, 'Who is the father of php', 'Any one tell me who is the father of php ???????', '2015-10-25 07:12:11', 8, 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `subtopic`
--

CREATE TABLE IF NOT EXISTS `subtopic` (
`subtopic_id` int(11) NOT NULL,
  `subtopic_name` varchar(50) NOT NULL,
  `subtopic_description` varchar(500) NOT NULL,
  `s_status` varchar(20) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subtopic`
--

INSERT INTO `subtopic` (`subtopic_id`, `subtopic_name`, `subtopic_description`, `s_status`, `topic_id`) VALUES
(2, 'php', 'web', 'tr', 10),
(3, 'connectivity', 'data table', 'ss', 11),
(4, 'html', 'web page design', 'ss', 13),
(6, 'Threading', 'Info about Thread & Runnable', 'tr', 7),
(7, 'file management', 'exception handling', 'tr', 8),
(8, 'i/o management', 'data string handler', 'tr', 8),
(11, 'Move', 'how to move file from one location to another', 'tr', 13),
(12, 'Threading', 'About Thread Life Cycle', 'true', 17),
(13, 'applet controls', 'discussion of the controls of applet', 'true', 18),
(14, 'ExecutingQuery in sql', 'types of sql queries', 'true', 19),
(15, 'Non Executing Query', 'Select Query', 'tr', 19),
(16, '8085 processor', 'block diagram discription', 'tr', 21),
(17, 'network types', 'types of topologies', 'tr', 22),
(18, 'Application Related', 'Any querys Related Apps', 'tr', 23),
(19, 'Virus Solution', 'How we solve virus problems', 'tr', 24),
(20, 'Network Related', 'Network Related Querys', 'tr', 25);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
`topic_id` int(11) NOT NULL,
  `topic_name` varchar(50) NOT NULL,
  `topic_type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `topic_name`, `topic_type`) VALUES
(17, 'Operating System', 'Threading'),
(18, 'Applet', 'JAVA'),
(19, 'Php Database connectivity', 'PHP'),
(21, 'Microprocessor', 'Processor'),
(23, 'Applications', 'Os Applications'),
(24, 'Virus', 'Virus solution'),
(25, 'Networks', 'Networks Related Querys');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_acc_active` tinyint(1) DEFAULT NULL,
  `dob` date NOT NULL,
  `e_mail` varchar(100) DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `uimg` varchar(255) NOT NULL,
  `isuser` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `country`, `state`, `address`, `user_type`, `username`, `fullname`, `password`, `user_acc_active`, `dob`, `e_mail`, `gender`, `uimg`, `isuser`) VALUES
(5, 'U.S.A', 'ahmedabad', '-', 'admin', 'admin', 'administrator', 'admin', NULL, '2012-04-17', 'admin@gmail.com', '1', 'ups/admin.jpg', 1),
(8, '-', '-', '-', 'user', 'hardik', 'hardik patel', '123', NULL, '0000-00-00', 'abcd@gmail.com', '1', 'ups/hardik.jpg', 0),
(9, 'India', 'Gujarat', 'mahesana', 'user', 'fabin', 'Christian Fabin Mathew', 'fabinlj', NULL, '0000-00-00', 'fabin.christian@gmail.com', '1', 'ups/124.jpg', 0),
(12, 'India', 'Gujarat', 'sant lilashah soc,bhargav soc,Ahmedabad', 'user', 'Vikas ', 'Vikas Patel', 'vikas', NULL, '1990-04-03', 'vikas.patel@gmail.com', '1', 'ups/1.jpg', 1),
(15, 'India', 'Gujarat', 'porbandar', 'user', 'mahesh', 'mahesh narvani', 'm', NULL, '1990-04-27', 'mahesh.narvani@gmail.com', '1', 'ups/Pink Rose For You-504352.jpeg', 0),
(27, 'India', 'Gujarat', '13-yamuna tenament,near bhargav soc.,kuber nagar ,bunglow area  ', 'user', 'Jasmin', 'Jasmin Patel', 'jasmin', NULL, '1986-11-25', 'jasmin.patel@gmail.com', '1', 'ups/7.jpg', 0),
(28, 'India', 'Gujarat', 'gdhjsbb', 'user', 'rushabh', 'rushabh joshi', 'rest', NULL, '0000-00-00', 'rushabh.joshi@gmail.com', '1', 'ups/', 0),
(30, 'j', 'j', 'j', 'user', 'Mehul', 'Mehul Varia', '123', NULL, '1986-11-25', 'ms.mainframe@gmail.com', '1', 'ups/1.jpg', 0),
(31, 'India', 'Gujarat', 'jamnagar', 'user', 'satish', 'Satish Babariya', 'satish', NULL, '0000-00-00', 'satish.babariya@gmail.com', '1', 'ups/Red Roses Love-262228.jpeg', 0),
(32, '-', '-', '-', 'user', 'abc', 'a', '123', NULL, '1986-11-25', 'ab@gmail.com', '1', 'ups/Colorized Heart-733225.jpeg', 0),
(33, 'in', 'uk', 'swadf', 'user', 'vk', 'vishal', '123456', NULL, '0000-00-00', 'vk98@f.cs', '1', 'ups/233271612387.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
 ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
 ADD PRIMARY KEY (`chatdetail_id`);

--
-- Indexes for table `chatmaster`
--
ALTER TABLE `chatmaster`
 ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `subtopic`
--
ALTER TABLE `subtopic`
 ADD PRIMARY KEY (`subtopic_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
 ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
MODIFY `chatdetail_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `chatmaster`
--
ALTER TABLE `chatmaster`
MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `subtopic`
--
ALTER TABLE `subtopic`
MODIFY `subtopic_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;--
-- Database: `test`
--
--
-- Database: `u573750671_ques`
--

-- --------------------------------------------------------

--
-- Table structure for table `aaaaaaaaa`
--

CREATE TABLE IF NOT EXISTS `aaaaaaaaa` (
  `sno` int(255) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `correct_answer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dj`
--

CREATE TABLE IF NOT EXISTS `dj` (
  `sno` int(255) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `correct_answer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dj`
--

INSERT INTO `dj` (`sno`, `question`, `a`, `b`, `c`, `d`, `correct_answer`) VALUES
(1, 'sdfdsfgdfg', 'dfgsdfgdsfgs', 'dfgsdfgsd', 'fgsdfgsdf', 'sdfgdsfgsd', 'fgsdfgsdfgdsfg'),
(2, 'dfgdsfg', 'dfgsd', 'fdgdsf', 'dfgdfg', 'dfgd', 'sfg'),
(3, 'aaaaaaaaaa  aaaaaaaaa  aaa  aaaaaaaaaaaaaaaaaaaaaaaaaaaaa        dddddddddddddddddddddddd                 aaaaaaaaaaaaaaaaaaaa', 'sfdsgd', '', 'dsfgdsfg', 'fdgdfg', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aaaaaaaaa`
--
ALTER TABLE `aaaaaaaaa`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `dj`
--
ALTER TABLE `dj`
 ADD PRIMARY KEY (`sno`);
--
-- Database: `u573750671_vk`
--

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE IF NOT EXISTS `ans` (
  `user_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sno` int(255) NOT NULL,
  `given_answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ans`
--

INSERT INTO `ans` (`user_name`, `subject`, `sno`, `given_answer`) VALUES
('user name', 'DJ', 1, 'b'),
('user name', 'DJ', 2, 'c'),
('user name', 'DJ', 3, 'd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_name` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_name` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_number` varchar(13) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `verification_code` varchar(100) NOT NULL,
  `verified` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `password`, `role_name`, `name`, `email`, `mobile_number`, `gender`, `question`, `answer`, `verification_code`, `verified`) VALUES
('vishal', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin', 'Vishal Kumar', 'vishalkumar.8193@gmail.com', '9897544995', 'Male', 'Favourite Movie', 'NO', '', 'Y'),
('user', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'member', 'user name', 'user@gmail.com', '9876543210', 'Male', 'Favourite Movie', 'user', 'jksdfsdjbfjsdkfavdasd7232r', 'Y'),
('user1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'member', 'user1', 'dsf@jdwh.fg', '9876543210', 'Male', 'hacker', '4dcc4173d80a2817206e196a38f0dbf7850188ff', 'gtNZx5MIcdT9YSyi3BXQ', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_name`);
--
-- Database: `webauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_pwd`
--

CREATE TABLE IF NOT EXISTS `user_pwd` (
  `name` char(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` char(32) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_pwd`
--

INSERT INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_pwd`
--
ALTER TABLE `user_pwd`
 ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
