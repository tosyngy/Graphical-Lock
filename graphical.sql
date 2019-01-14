-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 12:03 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graphicalpassword`
--
CREATE DATABASE IF NOT EXISTS `graphicalpassword` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `graphicalpassword`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupation` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `company` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `position` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `year` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `pix` mediumtext COLLATE utf8_unicode_ci,
  `status` int(1) NOT NULL DEFAULT '0',
  `salary` decimal(12,2) NOT NULL,
  `level` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `user_id`, `name`, `occupation`, `email`, `facebook`, `phone`, `address`, `about`, `company`, `position`, `year`, `pix`, `status`, `salary`, `level`) VALUES
(1, 1, 'oginni tosin', 'student', 'tosyngy@rocketmail.com', 'tosyngy', '08012345678', 'isale igbehin', 'am me and me ever', 'Federal Health Organization Lagos', 'Dentist', '2008 - 2013', 'usr_profile/1.png', 0, '25000.00', ''),
(9, 6, 'Bashiru', 'Surgen', 'Bash@ru.com', 'Bash', '09089788934', 'onike str, lagos', 'Am good at what am good at', 'Health Go,Albert Surgery Point,', 'Surgeon,Surgeon,', '2013 - 2015,2015 - Till Date,', 'usr_profile/6.png', 0, '50000.00', ''),
(22, 19, 'Abiola Taiwo', 'Computer Analyst', 'too@me.com', 'Computer', '09087673734', '12, lekki oguntosho str, ikeja, lagos', 'am cool gentle and me', 'Elegu Local Government,', 'Computer Tech,', '2001 - 2014,', 'usr_profile/.png', 0, '500000.00', ''),
(21, 18, 'oginni tolulope', 'doctor', 'dc@ba.fe', 'mydoc', '09012345678', '23, yaba road, yaba, lagos', 'am me', 'Health Go,General Hospital,', 'doctor,Doctor,', '2001 - 2012,2013 - 2016,', 'usr_profile/18.png', 0, '200000.00', ''),
(23, 20, 'Akinleye Joseph', 'Accountant', 'Akin@gmail.com', 'AkinJos', '09087765653', 'yabatech', 'i am me', 'Agege Local govt,', 'Chief auditor,', '2001 - Till Date,', 'usr_profile/.png', 0, '500000.00', ''),
(24, 21, 'oginni', 'Accountant', 'tosyngy@rocketmail.com', 'accOg', '09087809889', 'here or there', 'ok', 'bureau of cash  igbesa,', 'chief accountant,', '2002 - 2017,', 'usr_profile/21.png', 0, '25000.00', 'Level 1');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(3) NOT NULL,
  `userid` int(3) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `period` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `userid`, `amount`, `period`, `status`) VALUES
(1, 21, '50000.00', '2018-02-20 02:14:38', 1),
(3, 21, '60000.00', '2018-02-20 02:22:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'yellow-black-purple-pink-', 0),
(20, 'Akin', 'red-blue-green-violet-', 0),
(19, 'Two', 'purple-yellow-lime-gold-', 0),
(18, 'root', 'purple-yellow-lime-gold-', 0),
(21, 'toto', 'purple-yellow-lime-gold-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `salaryhistory`
--

CREATE TABLE `salaryhistory` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `ClaimDate` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ClaimTime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `salaryhistory`
--

INSERT INTO `salaryhistory` (`id`, `userid`, `amount`, `ClaimDate`, `ClaimTime`, `status`) VALUES
(1, 18, '200000.00', 'Sun 12/0/2017', '10:58:16', 0),
(2, 18, '0.00', 'Sun: 12/Nov/2017', '11/00/29', 0),
(3, 19, '0.00', 'Sun: 12/0/2017', '13/52/12', 0),
(5, 19, '500000.00', 'Sun: 12/Nov/2017', '14/01/19', 0),
(6, 20, '0.00', 'Tue: 14/0/2017', '13/39/07', 0),
(7, 20, '500000.00', 'Tue: 14/OCT/2017', '13/49/20', 0),
(8, 20, '500000.00', 'Tue: 14/Nov/2017', '13/50/31', 0),
(9, 21, '0.00', 'Fri: 12/0/2018', '16/38/26', 0),
(11, 21, '250000.00', 'Fri: 12/Jan/2018', '16/55/12', 0),
(13, 21, '25000.00', 'Tue: 20/Feb/2018', '02:52:12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaryhistory`
--
ALTER TABLE `salaryhistory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `salaryhistory`
--
ALTER TABLE `salaryhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
