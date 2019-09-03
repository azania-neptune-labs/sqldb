-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2019 at 10:06 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bestsofar`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `trackTitle` varchar(20) NOT NULL,
  `artistName` varchar(20) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `featured` varchar(20) NOT NULL,
  `recordingYear` int(4) NOT NULL,
  `coverArt` varchar(100) DEFAULT NULL,
  `song` varchar(100) DEFAULT NULL,
  `trackType` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `releasetype` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstName`, `lastName`, `email`, `contact`, `trackTitle`, `artistName`, `genre`, `id`, `featured`, `recordingYear`, `coverArt`, `song`, `trackType`, `role`, `releasetype`) VALUES
('Siya', 'Mzobe', 'Andilew.mz@gmail.com', '+27640201724', 'Mboza', 'Mkhize', 'jazz', 87, 'Tyrese', 2015, 'http://www.bestsofar.co.za/index.html', 'http://www.bestsofar.co.za/index.html', 'Remix', 'Producer', 'Singl'),
('Siya', 'Mzobe', 'Andilew.mz@gmail.com', '+27640201724', 'Mboza', 'Mkhize', 'jazz', 88, 'Tyrese', 2015, 'http://www.bestsofar.co.za/index.html', 'http://www.bestsofar.co.za/index.html', 'Remix', 'Producer', 'Single');
