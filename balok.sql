-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 06:01 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kurniawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `balok`
--

CREATE TABLE IF NOT EXISTS `balok` (
  `id` varchar(50) NOT NULL,
  `warna` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balok`
--

INSERT INTO `balok` (`id`, `warna`) VALUES
('01', 'orange'),
('02', 'orange'),
('03', 'orange'),
('04', 'orange'),
('05', 'orange'),
('06', 'orange'),
('07', 'orange'),
('08', 'orange'),
('09', 'orange'),
('10', 'orange'),
('11', 'orange'),
('12', 'orange'),
('13', 'orange'),
('14', 'orange'),
('15', 'orange'),
('16', 'orange'),
('17', 'orange'),
('18', 'orange'),
('19', 'orange'),
('20', 'orange'),
('21', 'orange'),
('22', 'orange'),
('23', 'orange'),
('24', 'orange'),
('25', 'orange');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balok`
--
ALTER TABLE `balok`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
