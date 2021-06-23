-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 04:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `montors`
--

-- --------------------------------------------------------

--
-- Table structure for table `arm`
--

CREATE TABLE `arm` (
  `arm1` varchar(100) NOT NULL,
  `arm2` varchar(100) NOT NULL,
  `arm3` varchar(100) NOT NULL,
  `arm4` varchar(100) NOT NULL,
  `arm5` varchar(100) NOT NULL,
  `arm6` varchar(100) NOT NULL,
  `start` tinyint(1) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arm`
--

INSERT INTO `arm` (`arm1`, `arm2`, `arm3`, `arm4`, `arm5`, `arm6`, `start`, `ID`) VALUES
('5', '10', '15', '20', '25', '30', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `control`
--

CREATE TABLE `control` (
  `left` varchar(10) NOT NULL,
  `forward` varchar(10) NOT NULL,
  `right` varchar(10) NOT NULL,
  `backward` varchar(10) NOT NULL,
  `stop` varchar(10) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `control`
--

INSERT INTO `control` (`left`, `forward`, `right`, `backward`, `stop`, `ID`) VALUES
('L', 'F', 'R', 'B', '0', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
