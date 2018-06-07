-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 12:40 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `extracredit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_funding`
--

CREATE TABLE `tbl_funding` (
  `id` int(255) NOT NULL,
  `Proj_ID` int(255) NOT NULL,
  `boro_Amount` varchar(255) COLLATE utf16_bin NOT NULL,
  `boro_Fy` varchar(255) COLLATE utf16_bin NOT NULL,
  `boro_Contact` varchar(255) COLLATE utf16_bin NOT NULL,
  `city_Amount` varchar(255) COLLATE utf16_bin NOT NULL,
  `city_Fy` varchar(255) COLLATE utf16_bin NOT NULL,
  `city_Contact` varchar(255) COLLATE utf16_bin NOT NULL,
  `mayor_Amount` varchar(255) COLLATE utf16_bin NOT NULL,
  `mayor_Fy` varchar(255) COLLATE utf16_bin NOT NULL,
  `mayor_Contact` varchar(255) COLLATE utf16_bin NOT NULL,
  `house_Amount` varchar(255) COLLATE utf16_bin NOT NULL,
  `house_Fy` varchar(255) COLLATE utf16_bin NOT NULL,
  `house_Contact` varchar(255) COLLATE utf16_bin NOT NULL,
  `capital_Amount` varchar(255) COLLATE utf16_bin NOT NULL,
  `capital_Fy` varchar(255) COLLATE utf16_bin NOT NULL,
  `capital_Contact` varchar(255) COLLATE utf16_bin NOT NULL,
  `cuny_Amount` varchar(255) COLLATE utf16_bin NOT NULL,
  `cuny_Fy` varchar(255) COLLATE utf16_bin NOT NULL,
  `cuny_Contact` varchar(255) COLLATE utf16_bin NOT NULL,
  `sam_Amount` varchar(255) COLLATE utf16_bin NOT NULL,
  `sam_Fy` varchar(255) COLLATE utf16_bin NOT NULL,
  `sam_Contact` varchar(255) COLLATE utf16_bin NOT NULL,
  `grant_Amount` varchar(255) COLLATE utf16_bin NOT NULL,
  `grant_Fy` varchar(255) COLLATE utf16_bin NOT NULL,
  `grant_Contact` varchar(255) COLLATE utf16_bin NOT NULL,
  `federal_Amount` varchar(255) COLLATE utf16_bin NOT NULL,
  `federal_Fy` varchar(255) COLLATE utf16_bin NOT NULL,
  `federal_Contact` varchar(255) COLLATE utf16_bin NOT NULL,
  `operating_Amount` varchar(255) COLLATE utf16_bin NOT NULL,
  `operating_Fy` varchar(255) COLLATE utf16_bin NOT NULL,
  `operating_Contact` varchar(255) COLLATE utf16_bin NOT NULL,
  `cap_Amount` varchar(255) COLLATE utf16_bin NOT NULL,
  `cap_Fy` varchar(255) COLLATE utf16_bin NOT NULL,
  `cap_Contact` varchar(255) COLLATE utf16_bin NOT NULL,
  `energy_Amount` varchar(255) COLLATE utf16_bin NOT NULL,
  `energy_Fy` varchar(255) COLLATE utf16_bin NOT NULL,
  `energy_Contact` varchar(255) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `tbl_funding`
--

INSERT INTO `tbl_funding` (`id`, `Proj_ID`, `boro_Amount`, `boro_Fy`, `boro_Contact`, `city_Amount`, `city_Fy`, `city_Contact`, `mayor_Amount`, `mayor_Fy`, `mayor_Contact`, `house_Amount`, `house_Fy`, `house_Contact`, `capital_Amount`, `capital_Fy`, `capital_Contact`, `cuny_Amount`, `cuny_Fy`, `cuny_Contact`, `sam_Amount`, `sam_Fy`, `sam_Contact`, `grant_Amount`, `grant_Fy`, `grant_Contact`, `federal_Amount`, `federal_Fy`, `federal_Contact`, `operating_Amount`, `operating_Fy`, `operating_Contact`, `cap_Amount`, `cap_Fy`, `cap_Contact`, `energy_Amount`, `energy_Fy`, `energy_Contact`) VALUES
(1, 1, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `Proj_ID` int(255) NOT NULL,
  `Proj_Number` varchar(255) COLLATE utf16_bin NOT NULL,
  `Proj_Name` varchar(255) COLLATE utf16_bin NOT NULL,
  `Proj_Type` varchar(255) COLLATE utf16_bin NOT NULL,
  `Proj_St_Date` date NOT NULL,
  `Proj_Comp_Date` date NOT NULL,
  `Proj_Building` varchar(255) COLLATE utf16_bin NOT NULL,
  `Priority_lvl` varchar(255) COLLATE utf16_bin NOT NULL,
  `services` varchar(255) COLLATE utf16_bin NOT NULL,
  `Proj_Design_Team` varchar(255) COLLATE utf16_bin NOT NULL,
  `Proj_Design_Cost` varchar(255) COLLATE utf16_bin NOT NULL,
  `Proj_Const_Cost` varchar(255) COLLATE utf16_bin NOT NULL,
  `Proj_FE_Cost` varchar(255) COLLATE utf16_bin NOT NULL,
  `Proj_Mgmt_Cost` varchar(255) COLLATE utf16_bin NOT NULL,
  `Proj_Total_Cost` varchar(255) COLLATE utf16_bin NOT NULL,
  `Proj_Overview` longtext COLLATE utf16_bin NOT NULL,
  `location` varchar(255) COLLATE utf16_bin NOT NULL,
  `status` varchar(255) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`Proj_ID`, `Proj_Number`, `Proj_Name`, `Proj_Type`, `Proj_St_Date`, `Proj_Comp_Date`, `Proj_Building`, `Priority_lvl`, `services`, `Proj_Design_Team`, `Proj_Design_Cost`, `Proj_Const_Cost`, `Proj_FE_Cost`, `Proj_Mgmt_Cost`, `Proj_Total_Cost`, `Proj_Overview`, `location`, `status`) VALUES
(1, '001', 'test', 'test', '2018-05-19', '2018-05-10', 'C', 'Urgent', 'Window', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'Under Process');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(255) NOT NULL,
  `Proj_ID` int(255) NOT NULL,
  `tab` varchar(255) COLLATE utf16_bin NOT NULL,
  `description` longtext COLLATE utf16_bin NOT NULL,
  `filename` varchar(255) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `Proj_ID`, `tab`, `description`, `filename`) VALUES
(1, 1, 'Minutes', 'test', 'bootstrap.css'),
(2, 1, 'Design', 'test', 'bootstrap.css.map'),
(3, 1, 'Scope', 'test', 'bootstrap.min.css'),
(4, 1, 'Cost', 'test', 'bootstrap.min.css.map'),
(5, 1, 'Minutes', 'test', 'bootstrap-grid.css.map'),
(6, 1, 'Design', 'test', 'bootstrap-grid.min.css.map'),
(7, 1, 'Design', 'test', 'bootstrap-reboot.min.css'),
(8, 1, 'Design', 'test', 'style.css'),
(9, 1, 'Design', 'test', 'bootstrap-reboot.min.css.map');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_funding`
--
ALTER TABLE `tbl_funding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`Proj_ID`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_funding`
--
ALTER TABLE `tbl_funding`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `Proj_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
