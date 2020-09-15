-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2018 at 07:32 PM
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
-- Table structure for table `shoe_stock`
--

DROP TABLE IF EXISTS `shoe_stock`;
CREATE TABLE IF NOT EXISTS `shoe_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `brand` text NOT NULL,
  `gender` char(1) NOT NULL,
  `type` text NOT NULL,
  `height` text NOT NULL,
  `size` tinyint(2) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoe_stock`
--

INSERT INTO `shoe_stock` (`id`, `name`, `brand`, `gender`, `type`, `height`, `size`, `price`) VALUES
(1, 'Air Force 1', 'Nike', 'M', 'Lifestyle', 'Low', 44, 90),
(2, 'SF Air Force 1', 'Nike', 'M', 'Winter Boots', 'High', 42, 200),
(3, 'Air Jordan 4 Retro', 'Jordan', 'F', 'Basketball', 'High', 38, 190),
(4, 'NMD_R1', 'adidas', 'F', 'Lifestyle', 'Low', 36, 130),
(5, 'Nike Mercurial Superfly 360 Elite', 'Nike', 'M', 'Football', 'Mid', 45, 233),
(6, 'Air Vapormax Plus', 'Nike', 'M', 'Running', 'Low', 43, 200),
(7, 'Thunder Desert', 'Puma', 'F', 'Lifestyle', 'Low', 36, 100),
(8, 'Foamposite 1', 'Nike', 'M', 'Basketball', 'High', 45, 230),
(9, 'Air Jordan 6', 'Jordan', 'F', 'Basketball', 'High', 37, 200),
(10, 'Air Jordan 5', 'Jordan', 'M', 'Basketball', 'High', 39, 215),
(11, 'Continental 80', 'adidas', 'M', 'Lifestyle', 'Low', 44, 90);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
