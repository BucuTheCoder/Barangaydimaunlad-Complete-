-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2021 at 02:00 PM
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
-- Database: `barangay_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` text NOT NULL,
  `purok` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `type`, `fname`, `lname`, `age`, `gender`, `purok`) VALUES
(1, 'boarder', 'John', 'Doe', 31, 'Male', 1),
(2, 'boarder', 'Isaac', 'Vergara', 23, 'Male', 2),
(3, 'boarder', 'Jake', 'Vergara', 23, 'Male', 3),
(4, 'boarder', 'Qunnie', 'Vergara', 23, 'Female', 2),
(5, 'boarder', 'Imperial', 'Vergara', 25, 'Female', 2),
(6, 'boarder', 'Lex', 'Duenas', 24, 'Male', 1),
(7, 'boarder', 'Leo', 'Duenas', 23, 'Male', 1),
(8, 'boarder', 'Khay', 'Duenas', 29, 'Female', 2),
(9, 'boarder', 'Paula', 'Mercado', 25, 'Female', 3),
(10, 'boarder', 'Jose', 'Mercado', 28, 'Female', 1),
(11, 'boarder', 'Mikasa', 'Jaeger', 28, 'Female', 3),
(12, 'boarder', 'Reiner', 'Jaeger', 28, 'Male', 3),
(13, 'boarder', 'Bryan', 'Bucu', 22, 'Male', 1),
(14, 'boarder', 'Prima', 'Tiva', 31, 'Female', 3),
(15, 'boarder', 'Aurora', 'Manabat', 60, 'Female', 1),
(16, 'boarder', 'Annie', 'Ackerman', 40, 'Female', 2),
(17, 'boarder', 'Berthold', 'Ackerman', 30, 'Male', 2),
(18, 'boarder', 'Paquito', 'Esperanza', 34, 'Male', 3),
(19, 'resident', 'Juan', 'Esperanza', 24, 'Male', 1),
(20, 'resident', 'Lobb', 'Espera', 29, 'Male', 2),
(21, 'resident', 'Potty', 'Espera', 25, 'Female', 3),
(22, 'resident', 'Juanito', 'Espera', 52, 'Male', 1),
(23, 'resident', 'Porky', 'Manlutac', 14, 'Male', 2),
(24, 'resident', 'Riel', 'Manlutac', 14, 'Male', 3),
(25, 'resident', 'Patty', 'Manlutac', 17, 'Female', 1),
(26, 'resident', 'Cobain', 'Gonzales', 13, 'Male', 2),
(27, 'resident', 'Abby', 'Gonzales', 14, 'Female', 3),
(28, 'resident', 'Josh', 'Flores', 12, 'Male', 1),
(29, 'resident', 'Jude', 'Flores', 14, 'Male', 2),
(30, 'resident', 'Gabby', 'Flores', 17, 'Female', 3),
(31, 'resident', 'Sophia ', 'Lawrence', 8, 'Female', 3),
(32, 'resident', 'Chuck', 'Cannon', 10, 'Male', 1),
(33, 'resident', 'Willa', 'Logan', 8, 'Female', 2),
(34, 'resident', 'Loomis', 'Yeager', 9, 'Male', 3),
(35, 'resident', 'Sabina', 'Yeager', 7, 'Female', 3),
(36, 'resident', 'Betty', 'Bernhard', 9, 'Female', 2),
(41, 'resident', 'Patricia', 'Dawson', 4, 'Female', 2),
(38, 'boarder', 'John', 'Legend', 30, 'Male', 2),
(39, 'resident', 'Adam', 'Levine', 36, 'Male', 3),
(40, 'boarder', 'Kelly', 'Clarkson', 31, 'Male', 3),
(42, 'resident', 'Wilbur', 'Wendel', 7, 'Male', 1),
(43, 'boarder', 'Landon', 'Allen', 8, 'Male', 3),
(44, 'resident', 'Karen', 'Lee', 10, 'Female', 1),
(45, 'boarder', 'Melysse', 'Rouille', 5, 'Female', 1),
(46, 'resident', 'Antoine', 'Griezman', 11, 'Male', 2),
(47, 'boarder', 'Kylian', 'Mbappe', 10, 'Male', 3),
(48, 'resident', 'Keith', 'Johnson', 6, 'Male', 2),
(49, 'boarder', 'Seventh', 'Woods', 9, 'Male', 3),
(50, 'resident', 'Jalen', 'Green', 3, 'Male', 1),
(51, 'boarder', 'Ray', 'Allen', 70, 'Male', 3),
(52, 'resident', 'Wilt', 'Chamberlain', 73, 'Male', 1),
(53, 'boarder', 'Jerry', 'West', 63, 'Male', 2),
(54, 'resident', 'Julius', 'Erving', 68, 'Male', 3),
(55, 'boarder', 'Sue', 'Bird', 71, 'Female', 1),
(56, 'resident', 'Liza', 'Cambage', 60, 'Female', 2),
(57, 'boarder', 'Sylvie', 'Lacroix', 65, 'Female', 3),
(58, 'resident', 'Lisa', 'Aniston', 69, 'Female', 1),
(59, 'boarder', 'Athena', 'Palomino', 81, 'Female', 2),
(60, 'resident', 'Aletta', 'Ocean', 77, 'Female', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'doenut', 'doenut150', 'regular'),
(2, 'adminbucz', 'admin1234', 'admin'),
(3, 'isaac123', 'isa111', 'regular');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
