-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 12:12 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project270`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblfunding`
--

CREATE TABLE `tblfunding` (
  `Funding_ID` int(11) NOT NULL,
  `BP_Amount` decimal(15,2) NOT NULL,
  `BP_FY_received` decimal(15,2) NOT NULL,
  `BP_CP#` varchar(25) NOT NULL,
  `CC_Amount` decimal(15,2) NOT NULL,
  `CC_FY_received` decimal(15,2) NOT NULL,
  `CC_CP#` varchar(25) NOT NULL,
  `Mayor_Amount` decimal(15,2) NOT NULL,
  `Mayor_FY_received` decimal(15,2) NOT NULL,
  `Mayor_CP#` varchar(25) NOT NULL,
  `In_House_Amount` decimal(15,2) DEFAULT NULL,
  `In_House_FY_received` decimal(15,2) DEFAULT NULL,
  `Capital_Project_Amount` decimal(15,2) DEFAULT NULL,
  `Capital_Project_FY_received` decimal(15,2) DEFAULT NULL,
  `CUNY_Amount` decimal(15,2) DEFAULT NULL,
  `CUNY_FY_received` decimal(15,2) DEFAULT NULL,
  `SAM_Amount` decimal(15,2) DEFAULT NULL,
  `SAM_FY_received` decimal(15,2) DEFAULT NULL,
  `Private_Amount` decimal(15,2) DEFAULT NULL,
  `Private_FY_received` decimal(15,2) DEFAULT NULL,
  `Federal_Amount` decimal(15,2) DEFAULT NULL,
  `Federal_FY_received` decimal(15,2) DEFAULT NULL,
  `DCAS_Amount` decimal(15,2) DEFAULT NULL,
  `DCAS_FY_received` decimal(15,2) DEFAULT NULL,
  `DCAS_CAP_Amount` decimal(15,2) DEFAULT NULL,
  `DCAS_CAP_FY_received` decimal(15,2) DEFAULT NULL,
  `Energy_Conserv_Amount` decimal(15,2) DEFAULT NULL,
  `Energy_FY_received` decimal(15,2) DEFAULT NULL,
  `Proj_ID` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblfunding`
--
ALTER TABLE `tblfunding`
  ADD PRIMARY KEY (`Funding_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblfunding`
--
ALTER TABLE `tblfunding`
  MODIFY `Funding_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
