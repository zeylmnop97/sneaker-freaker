-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2018 at 01:50 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `shoe details`
--

DROP TABLE IF EXISTS `shoe details`;
CREATE TABLE IF NOT EXISTS `shoe details` (
  `Name` text NOT NULL,
  `Brand` text NOT NULL,
  `Gender` char(1) NOT NULL,
  `Type` text NOT NULL,
  `Height` text NOT NULL,
  `Colour` text NOT NULL,
  `Size` tinyint(2) NOT NULL,
  `Price` int(11) NOT NULL,
  `Rating` bit(1) NOT NULL DEFAULT b'0',
  `Image` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoe details`
--

INSERT INTO `shoe details` (`Name`, `Brand`, `Gender`, `Type`, `Height`, `Colour`, `Size`, `Price`, `Rating`, `Image`) VALUES
('Air Max 97', 'Nike', 'M', 'Lifestyle', 'Low', 'Black', 10, 150, b'0', ''),
('Air Max 97', 'Nike', 'M', 'Lifestyle', 'Low', 'Black', 10, 150, b'0', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
