-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2015 at 11:59 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `el`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `cou_id` int(11) NOT NULL,
  `cou_dep_id` int(11) NOT NULL,
  `cou_stage` int(11) NOT NULL,
  `cou_name` varchar(50) NOT NULL,
  `cou_prof` int(11) NOT NULL,
  `cou_pdf` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(50) NOT NULL,
  `dep_stages` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dep_id`, `dep_name`, `dep_stages`) VALUES
(1, 'طب الاسنان', 5),
(2, 'الصيدلة', 5),
(3, 'هندسة تقنيات الحاسبات', 4),
(6, 'هندسة الأتصالات', 4),
(7, 'هندسة تبريد', 4),
(8, 'هندسة معمارية', 5),
(9, 'هندسة برمجيات', 4),
(10, 'علوم حاسبات', 4),
(11, 'القانون', 4),
(12, 'الاحصاء', 4),
(13, 'أدارة الاعمال', 4),
(14, 'علوم المحاسبة', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `use_id` int(11) NOT NULL,
  `use_username` varchar(40) NOT NULL,
  `use_password` char(32) NOT NULL,
  `use_first` varchar(20) NOT NULL,
  `use_second` varchar(20) NOT NULL,
  `use_last` varchar(20) NOT NULL,
  `use_permission` varchar(10) NOT NULL,
  `use_dep_id` int(11) NOT NULL DEFAULT '0',
  `use_stage` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`use_id`, `use_username`, `use_password`, `use_first`, `use_second`, `use_last`, `use_permission`, `use_dep_id`, `use_stage`) VALUES
(1, 'هيثم', '45ff5507fcb4fe18b7e8459f6d79fa84', 'هيثم', 'سعدون', '', 'admin', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cou_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`use_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cou_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `use_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
