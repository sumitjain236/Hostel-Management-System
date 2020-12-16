-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2020 at 04:13 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `adminpassword` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `adminpassword`) VALUES
(1, 'admin@test.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `coursesinfo`
--

DROP TABLE IF EXISTS `coursesinfo`;
CREATE TABLE IF NOT EXISTS `coursesinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Course` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursesinfo`
--

INSERT INTO `coursesinfo` (`id`, `Course`) VALUES
(1, 'Computer Engg'),
(4, 'IT engg'),
(5, 'EnTC engg');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

DROP TABLE IF EXISTS `fine`;
CREATE TABLE IF NOT EXISTS `fine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Room` int(11) NOT NULL,
  `Fine` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`id`, `FirstName`, `LastName`, `Room`, `Fine`, `Status`) VALUES
(1, 'sumit', 'jain', 202, 100, 'Paid'),
(3, 'sumit', 'jain', 202, 150, 'Unpaid'),
(4, 'sumit', 'jain', 202, 100, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `grievances`
--

DROP TABLE IF EXISTS `grievances`;
CREATE TABLE IF NOT EXISTS `grievances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `EmailID` varchar(100) NOT NULL,
  `Room` int(11) NOT NULL,
  `Problem` varchar(1000) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Flag` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grievances`
--

INSERT INTO `grievances` (`id`, `FirstName`, `EmailID`, `Room`, `Problem`, `Status`, `Flag`) VALUES
(1, 'sumit', 'abc@test.com', 202, 'light issue', 'C', 'S'),
(2, 'sumit', 'abc@test.com', 202, 'light issue', 'NC', 'NS'),
(3, 'sumit', 'abc@test.com', 202, 'Internet issue', 'NC', 'NS'),
(4, 'sumit', 'abc@test.com', 202, 'Room Cleaning issue', 'NC', 'NS'),
(5, 'sumit', 'abc@test.com', 202, 'Bedbugs Issue', 'C', 'NS'),
(6, 'sumit', 'abc@test.com', 202, 'Light issue', 'C', 'NS'),
(7, 'sumit', 'abc@test.com', 202, 'Internet Issue', 'C', 'NS'),
(8, 'sumit', 'abc@test.com', 202, 'Room Cleaning', 'C', 'NS'),
(9, 'sumit', 'abc@test.com', 202, 'light issue', 'C', 'NS'),
(10, 'sumit', 'abc@test.com', 202, 'internet issue', 'C', 'NS'),
(11, 'sumit', 'abc@test.com', 202, 'adss', 'C', 'NS'),
(12, 'sumit', 'abc@test.com', 202, 'asfdd', 'NC', 'NS'),
(13, 'sumit', 'admin@test.com', 202, 'light issue', 'NC', 'NS');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `MobileNumber` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `FirstName`, `LastName`, `MobileNumber`) VALUES
(2, 'abcd@test.com', 'abcd', 'abc', 'bcd', 1234567890),
(3, 'abc@test.com', 'abcd', 'sumit', 'jain', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `manageroom`
--

DROP TABLE IF EXISTS `manageroom`;
CREATE TABLE IF NOT EXISTS `manageroom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room` varchar(100) NOT NULL,
  `sharing` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manageroom`
--

INSERT INTO `manageroom` (`id`, `room`, `sharing`, `floor`) VALUES
(7, '102', '3', '1'),
(5, '202', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `EmailID` varchar(50) NOT NULL,
  `Room` int(11) NOT NULL,
  `DateofLeave` date NOT NULL,
  `DateofReturn` date NOT NULL,
  `PName` varchar(500) NOT NULL,
  `Relation` varchar(100) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `Reason` varchar(1000) NOT NULL,
  `status` varchar(500) NOT NULL,
  `flag` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `FirstName`, `EmailID`, `Room`, `DateofLeave`, `DateofReturn`, `PName`, `Relation`, `ContactNumber`, `Reason`, `status`, `flag`) VALUES
(2, 'sumit', 'abc@test.com', 201, '2020-10-07', '2020-10-24', 'jain', 'friend', 1234567890, 'as', 'D', 'NP'),
(3, 'sumit', 'abc@test.com', 202, '2020-10-24', '2020-10-27', 'jain', 'friend', 1234567890, 'qwertyuiop', 'NA', 'NP'),
(6, 'hostel', 'abc@test.com', 201, '2020-10-02', '2020-10-12', 'management', 'college', 987654321, 'hostel management project for dbms subject', 'A', 'NP');

-- --------------------------------------------------------

--
-- Table structure for table `studentregistration`
--

DROP TABLE IF EXISTS `studentregistration`;
CREATE TABLE IF NOT EXISTS `studentregistration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(500) NOT NULL,
  `LastName` varchar(500) NOT NULL,
  `EmailID` varchar(500) NOT NULL,
  `MobileNumber` bigint(11) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Birthday` date NOT NULL,
  `Address` varchar(3000) NOT NULL,
  `City` varchar(500) NOT NULL,
  `PinCode` int(11) NOT NULL,
  `State` varchar(500) NOT NULL,
  `Country` varchar(500) NOT NULL,
  `Room` bigint(11) NOT NULL,
  `Sharing` int(11) NOT NULL,
  `Mess` varchar(200) NOT NULL,
  `Fees_Paid` bigint(11) NOT NULL,
  `GuardianName` varchar(500) NOT NULL,
  `GMobileNumber` bigint(11) NOT NULL,
  `EMobileNumber` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentregistration`
--

INSERT INTO `studentregistration` (`id`, `FirstName`, `LastName`, `EmailID`, `MobileNumber`, `Gender`, `Birthday`, `Address`, `City`, `PinCode`, `State`, `Country`, `Room`, `Sharing`, `Mess`, `Fees_Paid`, `GuardianName`, `GMobileNumber`, `EMobileNumber`) VALUES
(6, 'sumit', 'jain', 'abc@test.com', 1111122222, 'Male', '2000-06-23', '10,kashiram nager,mandal road ,shirpur,dist-dhule', '    shirpur', 425405, 'Maharashtra', 'India', 202, 2, 'Yes', 23150, 'name', 9876543210, 1243567890);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
