-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2016 at 06:13 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_isbn` varchar(10) NOT NULL,
  `book_name` text NOT NULL,
  `category` text NOT NULL,
  `author` text NOT NULL,
  `language` text,
  PRIMARY KEY (`book_isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_isbn`, `book_name`, `category`, `author`, `language`) VALUES
('123C', 'Indian Railways at a Glance', 'Travel', 'Rakesh Kumar', 'English'),
('ABC5', 'Health Tips', 'Health', 'Dr.Batra', 'English'),
('DEF75', 'Batohi', 'Drama', 'Harishkesh Sulabh', 'Hindi'),
('QWE7', 'Fun Experiments', 'Science', 'Gupta', 'English'),
('WXY18', 'Hyperspace', 'Science fiction', 'Michio Kaku', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `lenders`
--

CREATE TABLE IF NOT EXISTS `lenders` (
  `ph_no` varchar(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`ph_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lenders`
--

INSERT INTO `lenders` (`ph_no`, `name`, `mail_id`, `dob`, `gender`, `password`) VALUES
('9442891340', 'D.Swaminathan', 'dsnpdy@gmail.com', '1943-11-23', 'male', '12345678'),
('9443802794', 'S.Rukmani', 'rukmani@gmail.com', '1968-01-18', 'female', 'rukmanis'),
('9865051262', 'S.Meenakshi', 'meenakshi@gmail.com', '1949-06-19', 'female', '87654321');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
