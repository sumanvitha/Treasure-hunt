-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2017 at 04:23 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `treasurehunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `qa1`
--

CREATE TABLE `qa1` (
  `levelno` int(11) DEFAULT NULL,
  `question` varchar(500) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL,
  `hasImage` char(10) DEFAULT NULL,
  `imagePath` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qa1`
--

INSERT INTO `qa1` (`levelno`, `question`, `answer`, `hasImage`, `imagePath`) VALUES
(1, 'Neither my presence nor my absence affects your output', 'comment', 'no', ''),
(2, 'Speaker says it all in 140 characters', 'twitter', 'no', ''),
(3, 'What should be the time', '10:10', 'yes', 'assets/8.png'),
(4, 'The biggest forest where we get everything', 'amazon', 'no', ''),
(5, 'Who am I?', 'foodie', 'yes', 'assets/2.gif'),
(6, 'Iam hidden and no one knows me except my creator', 'password', 'no', ''),
(7, '', 'biopic', 'yes', 'assets/21.jpg'),
(8, 'Where was the candle when the light went off?', 'in the dark', 'no', ''),
(9, '', 'top photographer', 'yes', 'assets/20.gif'),
(10, 'Iam a number and a leader of autobots', 'optimus prime', 'no', ''),
(11, 'Enter name of this event to continue', 'name of this event', 'no', ''),
(12, '', 'world tour', 'yes', 'assets/6.gif'),
(13, 'What has a hole? What is in holes? What is it?', 'o', 'no', ''),
(14, '', 'plant', 'yes', 'assets/15.jpg'),
(15, 'Bird which runs on fuel', 'swift', 'no', ''),
(16, '', 'pv sindhu', 'yes', 'assets/17.jpg'),
(17, 'Iam shot many times but I will never die unless and until I break', 'screen', 'no', ''),
(18, '', 'webdesign', 'yes', 'assets/18.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `firstname` char(50) DEFAULT NULL,
  `lastname` char(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `college` varchar(50) DEFAULT NULL,
  `mobile` decimal(15,0) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
