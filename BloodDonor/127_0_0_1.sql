-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 04:53 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbdonor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldonor`
--

CREATE TABLE IF NOT EXISTS `tbldonor` (
  `did` varchar(5) NOT NULL,
  `dpass` varchar(20) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `demail` varchar(25) NOT NULL,
  `dimage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbldonor`
--

INSERT INTO `tbldonor` (`did`, `dpass`, `dname`, `demail`, `dimage`) VALUES
('19001', '123', 'tania', 't@gmail.com', ''),
('19002', 'abc', 'Asha', 'asha@gmail.com', ''),
('19003', '432', 'rahul', 'r@gmail.com', ''),
('19004', '890', 'tawsif', 't@gmail.com', ''),
('19005', '456', 'ratul', 'r@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldonor`
--
ALTER TABLE `tbldonor`
 ADD PRIMARY KEY (`did`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
