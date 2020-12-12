-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 05:49 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yz746`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=339 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `fname`, `lname`, `birthday`, `password`) VALUES
(1, 'mjlee@njit.edu', 'Mike', 'Lee', '2000-05-05', '1234'),
(2, 'janedoe@njit.edu', 'John', 'Doe', '1950-07-07', '1234'),
(3, 'ml4q73@njit.edu', NULL, NULL, '1950-07-07', '1'),
(4, 'ml24q73@njit.edu', '1', '1', '2000-01-01', '2'),
(5, 'ml241q73@njit.edu', '1', '1', '1991-01-01', '1'),
(6, 'js829', '', '', '2000-01-01', '123'),
(7, 'test@njit.edu', 'yong', 'zhao', '2000-02-02', '1234'),
(8, 'Rebecca@gmail.com', 'Rebecca', 'cortes', '1900-03-03', 'cortes'),
(9, '', '', '', '1980-12-05', ''),
(10, 'test@gmail.com', 'test', 'test', '1980-12-05', 'test'),
(11, 'test2@gmail.com', 'test', 'test', '1980-12-05', 'test'),
(12, 'mjlee@njit.edu0', 'yong', 'yong', '1980-12-05', '1234'),
(329, 'george02@gmail.com', 'George', 'Mayor', '1960-12-12', '1234'),
(330, 'robkago3030@gmail.com', 'Geo', 'Kago', '2000-12-10', '1234'),
(334, 'robkago303033@gmail.com', 'Geo', 'gew', '1960-12-10', '12345'),
(336, 'jhhf@fddd.bfff', 'egrrr', 'rhgf', '1960-12-10', 'aaaa'),
(338, 'george01@gmail.com', 'Geo', 'Kago', '1960-12-10', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `owneremail` varchar(60) DEFAULT NULL,
  `ownerid` int(11) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `skills` text NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `owneremail`, `ownerid`, `createddate`, `title`, `body`, `skills`, `score`) VALUES
(1, 'janedoe@njit.edu', 2, '2017-01-01 00:00:00', 'This is test #B', 'Question Text Here', 'PHP', 0),
(3, 'janedoe@njit.edu', 2, '2017-01-01 00:00:00', 'This is test #A', 'How to HTML?', 'HTML, CSS', 0),
(10, 'dd@gmail.com', 14, '2020-11-28 03:37:36', 'Double checking', 'No errors', 'PHP, CSS', 0),
(46, 'george02@gmail.com', 329, '2020-12-12 05:11:39', 'resubmit', 'done', 'PHP', 0),
(47, 'george02@gmail.com', 329, '2020-12-12 05:11:39', 'resubmit', 'weryhjlkkjhgfdsa', 'PHP', 0),
(48, 'george02@gmail.com', 329, '2020-12-12 05:13:35', 'cv', 'seven', 'bill', 0),
(50, 'george02@gmail.com', 329, '2020-12-12 05:14:19', 'fdd', 'eretryjhmn', 'fmjhgfd', 3),
(54, 'george02@gmail.com', 329, '2020-12-12 05:16:56', 'woaaaah', 'WYAEUSRIDTOFIYULU', 'great skills', 65);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
