-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 12:00 AM
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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `ID` int(11) NOT NULL,
  `Proj_ID` varchar(25) NOT NULL,
  `Proj_Name` varchar(50) NOT NULL,
  `BP_Name` varchar(25) NOT NULL,
  `CC_Name` varchar(25) NOT NULL,
  `Mayor_Name` varchar(25) NOT NULL,
  `Contact_Phone` varchar(15) NOT NULL,
  `Amount` decimal(15,2) NOT NULL,
  `Funding_ID` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `look_file_type`
--

CREATE TABLE `look_file_type` (
  `File_ID` int(10) NOT NULL,
  `File_Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `look_file_type`
--

INSERT INTO `look_file_type` (`File_ID`, `File_Description`) VALUES
(0, 'Project_Minutes'),
(1, 'Project_Scope_Changes'),
(2, 'Proj_Design_Basis'),
(3, 'Prob_Cost_Estimates'),
(4, 'Proj_Building_Dept'),
(5, 'Proj_Bid_Doc'),
(6, 'Proj_Ins_Report'),
(7, 'Proj_FandE'),
(8, 'Proj_Closeout');

-- --------------------------------------------------------

--
-- Table structure for table `tblfiles`
--

CREATE TABLE `tblfiles` (
  `File_Name` varchar(250) NOT NULL,
  `File_ID` int(11) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `File_Path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `tblproject`
--

CREATE TABLE `tblproject` (
  `Proj_ID` int(50) NOT NULL,
  `Proj_Name` varchar(50) DEFAULT NULL,
  `Proj_Number` int(50) NOT NULL,
  `Proj_Type` varchar(50) DEFAULT NULL,
  `Proj_St_Date` datetime DEFAULT NULL,
  `Proj_Comp_Date` datetime DEFAULT NULL,
  `Proj_Design_Team` varchar(50) DEFAULT NULL,
  `Proj_Building` varchar(50) DEFAULT NULL,
  `Proj_Location` varchar(50) DEFAULT NULL,
  `Proj_Serv_Provider` varchar(50) DEFAULT NULL,
  `Proj_Status` varchar(50) DEFAULT NULL,
  `Proj_Design_Cost` decimal(15,2) DEFAULT NULL,
  `Proj_Const_Cost` decimal(15,2) DEFAULT NULL,
  `Proj_FE_Cost` decimal(15,2) DEFAULT NULL,
  `Proj_Management_Cost` decimal(15,2) DEFAULT NULL,
  `Proj_Overview` varchar(500) DEFAULT NULL,
  `Proj_Minutes_Name` varchar(50) DEFAULT NULL,
  `Proj_Minutes_Path` varchar(100) DEFAULT NULL,
  `Proj_Minutes_Description` varchar(500) DEFAULT NULL,
  `Proj_Scope_Changes_Name` varchar(50) DEFAULT NULL,
  `Proj_Scope_Changes_Path` varchar(100) DEFAULT NULL,
  `Proj_Scope_Changes_Description` varchar(500) DEFAULT NULL,
  `Proj_Design_Basis_Name` varchar(50) DEFAULT NULL,
  `Proj_Design_Basis_Path` varchar(100) DEFAULT NULL,
  `Proj_Design_Basis_Description` varchar(500) DEFAULT NULL,
  `Proj_Cost_Estimates_Name` varchar(50) DEFAULT NULL,
  `Proj_Cost_Estimates_Path` varchar(100) DEFAULT NULL,
  `Proj_Cost_Estimates_Description` varchar(500) DEFAULT NULL,
  `Proj_Building_Dept_Name` varchar(50) DEFAULT NULL,
  `Proj_Building_Dept_Path` varchar(100) DEFAULT NULL,
  `Proj_Building_Dept_Description` varchar(500) DEFAULT NULL,
  `Proj_Bid_Doc_Name` varchar(50) DEFAULT NULL,
  `Proj_Bid_Doc_Path` varchar(100) DEFAULT NULL,
  `Proj_Bid_Doc_Description` varchar(500) DEFAULT NULL,
  `Proj_Closeout_Name` varchar(50) DEFAULT NULL,
  `Proj_Closeout_Path` varchar(100) DEFAULT NULL,
  `Proj_Closeout_Description` varchar(500) DEFAULT NULL,
  `Proj_Inspection_Report_Name` varchar(50) DEFAULT NULL,
  `Proj_Inspection_Report_Path` varchar(100) DEFAULT NULL,
  `Proj_Inspection_Report_Description` varchar(500) DEFAULT NULL,
  `Proj_FE_Name` varchar(50) DEFAULT NULL,
  `Proj_FE_Path` varchar(100) DEFAULT NULL,
  `Proj_FE_Description` varchar(500) DEFAULT NULL,
  `Proj_CC_Name` varchar(50) DEFAULT NULL,
  `Proj_CC_Path` varchar(100) DEFAULT NULL,
  `Proj_CC_Description` varchar(500) DEFAULT NULL,
  `Proj_Priority_lvl` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproject`
--

INSERT INTO `tblproject` (`Proj_ID`, `Proj_Name`, `Proj_Number`, `Proj_Type`, `Proj_St_Date`, `Proj_Comp_Date`, `Proj_Design_Team`, `Proj_Building`, `Proj_Location`, `Proj_Serv_Provider`, `Proj_Status`, `Proj_Design_Cost`, `Proj_Const_Cost`, `Proj_FE_Cost`, `Proj_Management_Cost`, `Proj_Overview`, `Proj_Minutes_Name`, `Proj_Minutes_Path`, `Proj_Minutes_Description`, `Proj_Scope_Changes_Name`, `Proj_Scope_Changes_Path`, `Proj_Scope_Changes_Description`, `Proj_Design_Basis_Name`, `Proj_Design_Basis_Path`, `Proj_Design_Basis_Description`, `Proj_Cost_Estimates_Name`, `Proj_Cost_Estimates_Path`, `Proj_Cost_Estimates_Description`, `Proj_Building_Dept_Name`, `Proj_Building_Dept_Path`, `Proj_Building_Dept_Description`, `Proj_Bid_Doc_Name`, `Proj_Bid_Doc_Path`, `Proj_Bid_Doc_Description`, `Proj_Closeout_Name`, `Proj_Closeout_Path`, `Proj_Closeout_Description`, `Proj_Inspection_Report_Name`, `Proj_Inspection_Report_Path`, `Proj_Inspection_Report_Description`, `Proj_FE_Name`, `Proj_FE_Path`, `Proj_FE_Description`, `Proj_CC_Name`, `Proj_CC_Path`, `Proj_CC_Description`, `Proj_Priority_lvl`) VALUES
(4, 'LAGCC-COMPSCI-201', 255075, 'Construction', '2018-07-05 00:00:00', '2019-01-31 00:00:00', '5.000', 'B', 'LAGCC NY', 'Maintainance', 'UnderProcess', '10.00', '25.00', '13.00', '15.00', 'Wall for the computer science department in the B-252', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'LAGCC-HUM-202', 122436, 'Acoustics', '2018-05-16 00:00:00', '2018-10-25 00:00:00', '25.000.00', 'E', 'E305', 'maintainance', 'UnderProcess', '10.00', '25.00', '8.00', '58.00', 'Acoustics for the Music deparment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'general'),
(19, 'pjnametest', 666, 'paulito', '2016-10-30 00:00:00', '2018-11-25 00:00:00', '666666666666', '', '', '', 'E', '6666.00', '6666.00', '666666.00', '6666666666.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `UserID` varchar(25) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `UserLogin` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`UserID`, `UserName`, `UserLogin`, `Password`) VALUES
('123456', 'Paul Alarcon', 'paul12', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CONTACTS_FK` (`Funding_ID`);

--
-- Indexes for table `look_file_type`
--
ALTER TABLE `look_file_type`
  ADD PRIMARY KEY (`File_ID`);

--
-- Indexes for table `tblfiles`
--
ALTER TABLE `tblfiles`
  ADD PRIMARY KEY (`File_ID`);

--
-- Indexes for table `tblfunding`
--
ALTER TABLE `tblfunding`
  ADD PRIMARY KEY (`Funding_ID`);

--
-- Indexes for table `tblproject`
--
ALTER TABLE `tblproject`
  ADD PRIMARY KEY (`Proj_ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblfunding`
--
ALTER TABLE `tblfunding`
  MODIFY `Funding_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblproject`
--
ALTER TABLE `tblproject`
  MODIFY `Proj_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `CONTACTS_FK` FOREIGN KEY (`Funding_ID`) REFERENCES `tblfunding` (`Funding_ID`);

--
-- Constraints for table `tblfiles`
--
ALTER TABLE `tblfiles`
  ADD CONSTRAINT `tblfiles_FK` FOREIGN KEY (`File_ID`) REFERENCES `look_file_type` (`File_ID`),
  ADD CONSTRAINT `tblfiles_ibfk_1` FOREIGN KEY (`File_ID`) REFERENCES `look_file_type` (`File_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
