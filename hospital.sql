-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 08:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `DId` int(11) NOT NULL,
  `hId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Speciality` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`DId`, `hId`, `Name`, `Mobile`, `Speciality`) VALUES
(1, 1, 'DR Rahul Singh', '7002345176', 'Cardiologists'),
(3, 3, 'DR Arun', '7877234824', 'Anesthesiologists'),
(34, 3, 'DR Raj', '782372611', 'Dermatologists');

-- --------------------------------------------------------

--
-- Table structure for table `hospitaln`
--

CREATE TABLE `hospitaln` (
  `hId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Telephone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitaln`
--

INSERT INTO `hospitaln` (`hId`, `Name`, `Location`, `Telephone`) VALUES
(1, 'AIIMS Patna', 'Patna', '64992022'),
(3, 'RIMS', 'Imphal', '23487925');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`DId`);

--
-- Indexes for table `hospitaln`
--
ALTER TABLE `hospitaln`
  ADD PRIMARY KEY (`hId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `DId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `hospitaln`
--
ALTER TABLE `hospitaln`
  MODIFY `hId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
