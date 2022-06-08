-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2021 at 04:37 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shakyauserdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `USER` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `USER`, `PASSWORD`) VALUES
(1, 'ashal', 'ashal');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

DROP TABLE IF EXISTS `rate`;
CREATE TABLE IF NOT EXISTS `rate` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Date` varchar(255) NOT NULL,
  `Gold` varchar(255) NOT NULL,
  `Silver` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`Id`, `Date`, `Gold`, `Silver`) VALUES
(1, '2077-12-01', '90,000', '1,000'),
(2, '2077-12-02', '86,560', '1,200'),
(3, '2077-12-03', '81,000', '1,100'),
(4, '2077-12-14', '1,00,000', '1,500'),
(5, '2077-12--15', '98,000', '1,120'),
(6, '2077-12-16', '1,20,000', '2,000');

-- --------------------------------------------------------

--
-- Table structure for table `userinfodata`
--

DROP TABLE IF EXISTS `userinfodata`;
CREATE TABLE IF NOT EXISTS `userinfodata` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `interestedon` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfodata`
--

INSERT INTO `userinfodata` (`id`, `user`, `email`, `mobile`, `address`, `code`, `interestedon`, `image`, `comment`) VALUES
(1, 'ashal upreti', 'upreti.ashal@gmail.com', '9661874521', 'hetauda', '#03', 'Rings', 'upload/rings2.jpg', 'How much it will take to be ready? I want a 23 caret 1 tola rings .				'),
(2, 'mehul chhetri', 'chhetri.mehul@gmail.com', '9874563210', 'dang', '#01', 'Necklace', 'upload/rings2.jpg', '				'),
(3, 'madan aacharya', 'aacharya.madan@gmail.com', '9874563210', 'melamchi', '#01', 'Necklace', 'upload/rings2.jpg', '				'),
(4, 'anurag paudel', 'paudel.anurag@gmail.com', '9874563210', 'kathmandu', '#01', 'Necklace', 'upload/necklace4.jpg', '				');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
