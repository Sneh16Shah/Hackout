-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 09:10 AM
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
('Marketing Associate', 'Creating exciting high performance email marketing campaigns for our users marking them about our products.', '2022-11-01', 12, 'Temporarily Remote in Gurgaon, Haryana', 50000, 'The Right Doors', 'rightdoors_support@google.co.in', 2678299),
('Senior Manager', 'Designing exciting brand campaigns and executing them.\r\nCoordinating with stackeholders to ensure that we are building a consistent brand narrative.', '2022-11-01', 12, 'Bangalore', 50000, 'De mentee academy', 'dementeeacademy@gmail.com', 2456987),
('ss', 'ahja', '2022-10-25', 55, '8w4w', 8666, 'ANISH JAIN', 'IIT2020173@IIITA.AC.IN', 7788),
('ss', 'ahja', '2022-10-25', 55, '8w4w', 8666, 'ANISH JAIN', 'IIT2020173@IIITA.AC.IN', 7788),
('88', 'ahja', '2022-10-18', 8565, 's5s', 555, 'ANISH JAIN', 'IIT2020173@IIITA.AC.IN', 455);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
