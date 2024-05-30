-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2024 at 11:49 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `drivingschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `classtbl`
--

CREATE TABLE IF NOT EXISTS `classtbl` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Studentid` varchar(100) NOT NULL,
  `Sname` varchar(100) NOT NULL,
  `Classdate` varchar(100) NOT NULL,
  `Classtime` varchar(100) NOT NULL,
  `Vnumber` varchar(100) NOT NULL,
  `Instructorid` varchar(100) NOT NULL,
  `Iname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `classtbl`
--

INSERT INTO `classtbl` (`id`, `Studentid`, `Sname`, `Classdate`, `Classtime`, `Vnumber`, `Instructorid`, `Iname`) VALUES
(4, 'nanda@gmail.com', 'nandakumar', '26/1/22', '9AM to 11AM', 'TN39AP2341', 'jeeva', 'jeevak'),
(5, 'rindhiyamanickam23@gmail.com', 'rindhi', '23/8/2001', '4.00pm', '456687786867', 'vk', 'vk'),
(6, 'demo@gmail.com', 'demo', '23/09/2024', '7am', 'tn32536547', 'sakshi', 'sakshi');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `fname` varchar(100) NOT NULL,
  `Uid` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `Age` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`fname`, `Uid`, `Pwd`, `email_id`, `address`, `mobile`, `DOB`, `Age`) VALUES
('sakshi', 'sakshi', '1234', 'shri@gmail.com', 'madurai', '9047872535', '23/08/2001', '22'),
('praveen', 'praveen', '1234', 'muhzsaa309@akaff.com', 'cbe', '9047872535', '23/06/2000', '24'),
('rindhiya', 'rindhi', '1234', 'rindhiyamanickam23@gmail.com', 'madurai', '9047872535', '23/08/2001', '22');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `P_id` int(4) NOT NULL AUTO_INCREMENT,
  `Studentid` varchar(100) NOT NULL,
  `Sname` varchar(100) NOT NULL,
  `Class` varchar(100) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Pdate` varchar(100) NOT NULL,
  PRIMARY KEY (`P_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`P_id`, `Studentid`, `Sname`, `Class`, `Amount`, `Status`, `Pdate`) VALUES
(2, 'nanda@gmail.com', 'nandakumar', 'Two Wheeler', '5000', 'Paid', '07-02-2024'),
(10, 'rindhi', 'rindhiya', 'Two Wheeler', '400', 'Pending', 'Null'),
(13, 'demo', 'demo', 'Four Wheeler', '688', 'Pending', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `fname` varchar(100) NOT NULL,
  `Uid` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `Age` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fname`, `Uid`, `Pwd`, `email_id`, `address`, `mobile`, `DOB`, `Age`) VALUES
('nandakumar', 'nanda', 'nanda', 'nanda@gmail.com', 'cbe', '9629595205', '22/4/1983', '39'),
('rindhiya', 'rindhi', '1234', 'rindhiyamanickam23@gmail.com', 'madurai', '9047872334', '23/08/2001', '22'),
('praveen', 'praveen', '1234', 'muhzsaa309@akaff.com', 'cbe', '9047872535', '23/08/2000', '24');
