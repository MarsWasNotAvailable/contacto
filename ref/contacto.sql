-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 13, 2023 at 10:27 AM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contacto`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `idContact` int(11) NOT NULL AUTO_INCREMENT,
  `name_last` varchar(75) NOT NULL,
  `name_first` varchar(75) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(21) NOT NULL,
  `address` varchar(150) NOT NULL,
  PRIMARY KEY (`idContact`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`idContact`, `name_last`, `name_first`, `email`, `phone`, `address`) VALUES
(1, 'Simpson', 'Marge', 'margesimpson@20thcentury.com', '0123456', '742 Evergreen Terrace, Springfield'),
(2, 'Coyote', 'Wile E.', 'wileecoyote@acme.com', '01234566', 'Desert'),
(3, 'Case', 'Justin', 'casejustin@notthefbi.gov', '123412', 'Pentagon, Washington');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'EndUser',
  `current_ip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `mail`, `password`, `nickname`, `role`, `current_ip`) VALUES
(1, 'superadmin@local', 'pass', 'Super', 'Admin', 'localhost'),
(3, 'marge@20', 'homer', 'Marge', 'Admin', '127.0.0.1'),
(21, 'root', 'root', 'root', 'Admin', '127.0.0.1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
