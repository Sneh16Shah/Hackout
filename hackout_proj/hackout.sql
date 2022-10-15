-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2022 at 12:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackout`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_role` varchar(50) NOT NULL,
  `job_desc` varchar(1000) NOT NULL,
  `join_date` varchar(100) NOT NULL,
  `tenure` int(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `salary` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_role`, `job_desc`, `join_date`, `tenure`, `location`, `salary`, `name`, `email`, `mobile`) VALUES
('ss', 'ss', '2022-10-05', 3, 's', 2, 'ANISH ', 'IIT2020173@IIITA.AC.IN', 2147483647),
('haiia', 'ahja', '2022-10-18', 555, '5555', 5566, 'sneh', 'ahjaj@kaju.com', 2147483647),
('haiia', 'ahja', '2022-10-18', 555, '5555', 5566, 'sneh', 'ahjaj@kaju.com', 2147483647),
('haiia', 'ahja', '2022-10-18', 555, '5555', 5566, 'sneh', 'ahjaj@kaju.com', 2147483647),
('haiia', 'ahja', '2022-10-18', 555, '5555', 5566, 'sneh', 'ahjaj@kaju.com', 2147483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
