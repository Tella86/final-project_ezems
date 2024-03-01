-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2024 at 03:49 PM
-- Server version: 8.0.36
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbvoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumber`
--

CREATE TABLE `tblautonumber` (
  `AutoID` int NOT NULL,
  `AutoStart` varchar(30) NOT NULL,
  `AutoEnd` int NOT NULL,
  `AutoInc` int NOT NULL,
  `AutoType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumber`
--

INSERT INTO `tblautonumber` (`AutoID`, `AutoStart`, `AutoEnd`, `AutoInc`, `AutoType`) VALUES
(1, '2017', 117, 1, 'AuthPrint');

-- --------------------------------------------------------

--
-- Table structure for table `tblcandidate`
--

CREATE TABLE `tblcandidate` (
  `CandidateID` int NOT NULL,
  `StudentID` varchar(50) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `PartyList` varchar(99) NOT NULL,
  `RunningDate` date NOT NULL,
  `Platform` longtext NOT NULL,
  `TotalVotes` int NOT NULL,
  `CandPhoto` varchar(200) NOT NULL,
  `Remarks` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcandidate`
--

INSERT INTO `tblcandidate` (`CandidateID`, `StudentID`, `Position`, `PartyList`, `RunningDate`, `Platform`, `TotalVotes`, `CandPhoto`, `Remarks`) VALUES
(25, '87565', 'President', 'PartyList 2', '2024-02-09', 'shanzu', 4, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', ''),
(42, 'idx4dyst', 'President', 'WEB TECH', '2024-02-23', 'KILIFI GOA', 3, '', ''),
(43, 'A0VN6AKV', 'President', 'DART FLUTTER', '2024-02-23', 'KILIFI GOA', 2, '', ''),
(44, 'MM5S13PL', 'President', 'PYTHON DJANGO', '2024-01-23', 'KILIFI GOA', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblconfirmcode`
--

CREATE TABLE `tblconfirmcode` (
  `CodeID` int NOT NULL,
  `Code` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `CourseID` int NOT NULL,
  `CourseCode` varchar(30) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `DepartmentID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`CourseID`, `CourseCode`, `Description`, `DepartmentID`) VALUES
(3, 'BSIT', 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY', 1),
(4, 'BEED', 'BACHELOR OF SCIENCE IN ELEMENTARY EDUCATION', 4),
(5, 'BSBA Financial Management', 'BACHELOR OF SCIENCE IN BUSINES ADMINISTRATION', 3),
(6, 'BSED', 'BACHELOR  OF SCIENCE IN SECONDARY EDUCATION', 4),
(7, 'DPETE', 'DIPLOMA PRIMARY TEACHER EDUCATION', 4),
(8, 'WEB DEVELOPMENT', 'WEB DEVELOPMENT', 6),
(9, 'PYTHON', 'PYTHON', 6),
(10, 'DART FLUTTER', 'DART FLUTTER', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `DepartmentID` int NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Description` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldepartment`
--

INSERT INTO `tbldepartment` (`DepartmentID`, `Department`, `Description`) VALUES
(1, 'ITE', 'IT DEPARTMENT'),
(3, 'BITE', 'BUSINESS AND IT EDUCATION'),
(4, 'TEA', 'TEACHER EDUCATION DEPARTMENT'),
(5, 'TEVTE', 'TECHNICAL VOCATIONAL TRAINING EDUCATION'),
(6, 'PLP', 'POWER LEARN PROJECT');

-- --------------------------------------------------------

--
-- Table structure for table `tblevents`
--

CREATE TABLE `tblevents` (
  `EventID` int NOT NULL,
  `Event` varchar(99) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `EventDate` date NOT NULL,
  `EventTime` varchar(30) NOT NULL,
  `EventPhoto` varchar(125) NOT NULL,
  `Incharge` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblevents`
--

INSERT INTO `tblevents` (`EventID`, `Event`, `Description`, `EventDate`, `EventTime`, `EventPhoto`, `Incharge`) VALUES
(7, 'BASKETBALL.', 'A VS B', '2002-02-02', '10:22 pm', 'photo/Chrysanthemum.jpg', 1),
(8, 'STTC STUDENT ELECTION', 'CLASS SECRETARIES', '2040-02-09', '02:30 pm', 'photo/benfit2.png', 4),
(9, 'BEST PLP INSTRUCTOR IN PROGRAMING', 'BEST POWER LEARN PROJECT INSTRUCTOR IN PROGRAMING', '2024-02-23', '01:00 pm', 'photo/Untitled.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbleventwinner`
--

CREATE TABLE `tbleventwinner` (
  `EWID` int NOT NULL,
  `EventID` int NOT NULL,
  `EWinners` varchar(90) NOT NULL,
  `ACCOUNT_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbleventwinner`
--

INSERT INTO `tbleventwinner` (`EWID`, `EventID`, `EWinners`, `ACCOUNT_ID`) VALUES
(4, 4, 'FOURTH YEAR', 1),
(5, 5, 'THIRD YEAR', 1),
(6, 6, 'A', 1),
(7, 7, 'A', 1),
(8, 8, 'PALACIOS, KENJIE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `LOGID` int NOT NULL,
  `USERID` int NOT NULL,
  `LOGDATETIME` datetime NOT NULL,
  `LOGROLE` varchar(30) NOT NULL,
  `LOGMODE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`LOGID`, `USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) VALUES
(147, 1, '2024-02-08 07:56:07', 'Administrator', 'Logged in'),
(148, 1, '2024-02-08 07:57:04', 'Administrator', 'Logged out'),
(149, 1, '2024-02-08 07:57:17', 'Administrator', 'Logged in'),
(150, 1, '2024-02-08 08:01:00', 'Administrator', 'Logged out'),
(151, 1, '2024-02-08 09:48:22', 'Administrator', 'Logged in'),
(152, 1, '2024-02-08 10:11:41', 'Administrator', 'Logged out'),
(153, 1, '2024-02-08 10:12:29', 'Administrator', 'Logged in'),
(154, 1, '2024-02-08 10:15:22', 'Administrator', 'Logged out'),
(155, 9, '2024-02-08 10:16:03', 'Administrator', 'Logged in'),
(156, 9, '2024-02-08 10:20:56', 'Administrator', 'Logged out'),
(157, 1, '2024-02-08 10:22:13', 'Administrator', 'Logged in'),
(158, 1, '2024-02-08 17:48:34', 'Administrator', 'Logged out'),
(159, 1, '2024-02-08 18:00:19', 'Administrator', 'Logged in'),
(160, 1, '2024-02-08 18:20:05', 'Administrator', 'Logged in'),
(161, 1, '2024-02-08 18:50:51', 'Administrator', 'Logged out'),
(162, 9, '2024-02-08 18:51:36', 'Administrator', 'Logged in'),
(163, 1, '2024-02-08 22:21:46', 'Administrator', 'Logged out'),
(164, 11, '2024-02-08 22:22:03', 'Student', 'Logged in'),
(165, 11, '2024-02-08 22:25:26', 'Student', 'Logged out'),
(166, 1, '2024-02-08 22:26:00', 'Administrator', 'Logged in'),
(167, 1, '2024-02-08 22:37:30', 'Administrator', 'Logged out'),
(168, 12, '2024-02-08 22:37:42', 'Clerk', 'Logged in'),
(169, 12, '2024-02-08 22:37:56', 'Clerk', 'Logged out'),
(170, 12, '2024-02-08 22:38:12', 'Clerk', 'Logged in'),
(171, 12, '2024-02-09 07:49:04', 'Clerk', 'Logged out'),
(172, 1, '2024-02-09 07:50:51', 'Administrator', 'Logged in'),
(173, 1, '2024-02-09 07:51:04', 'Administrator', 'Logged out'),
(174, 12, '2024-02-09 07:51:16', 'Clerk', 'Logged in'),
(175, 12, '2024-02-09 07:51:38', 'Clerk', 'Logged out'),
(176, 1, '2024-02-09 07:51:50', 'Administrator', 'Logged in'),
(177, 12, '2024-02-09 11:05:41', 'Clerk', 'Logged in'),
(178, 1, '2024-02-09 11:21:02', 'Administrator', 'Logged in'),
(179, 1, '2024-02-09 11:26:35', 'Administrator', 'Logged out'),
(180, 12, '2024-02-09 11:26:51', 'Clerk', 'Logged in'),
(181, 12, '2024-02-09 11:27:00', 'Clerk', 'Logged out'),
(182, 1, '2024-02-09 11:27:14', 'Administrator', 'Logged in'),
(183, 1, '2024-02-09 13:18:53', 'Administrator', 'Logged in'),
(184, 1, '2024-02-09 13:21:11', 'Administrator', 'Logged in'),
(185, 1, '2024-02-09 14:15:05', 'Administrator', 'Logged out'),
(186, 1, '2024-02-09 15:27:38', 'Administrator', 'Logged in'),
(187, 1, '2024-02-09 21:49:44', 'Administrator', 'Logged in'),
(188, 1, '2024-02-09 22:03:57', 'Administrator', 'Logged out'),
(189, 12, '2024-02-09 22:04:13', 'Clerk', 'Logged in'),
(190, 12, '2024-02-09 22:05:41', 'Clerk', 'Logged out'),
(191, 1, '2024-02-09 22:05:55', 'Administrator', 'Logged in'),
(192, 1, '2024-02-13 21:01:05', 'Administrator', 'Logged in'),
(193, 1, '2024-02-13 21:08:35', 'Administrator', 'Logged out'),
(194, 1, '2024-02-13 22:10:54', 'Administrator', 'Logged in'),
(195, 1, '2024-02-13 22:10:59', 'Administrator', 'Logged out'),
(196, 1, '2024-02-14 20:42:31', 'Administrator', 'Logged in'),
(197, 1, '2024-02-14 21:11:04', 'Administrator', 'Logged out'),
(198, 1, '2024-02-14 21:17:35', 'Administrator', 'Logged in'),
(199, 1, '2024-02-14 21:28:38', 'Administrator', 'Logged out'),
(200, 1, '2024-02-14 22:30:11', 'Administrator', 'Logged in'),
(201, 1, '2024-02-14 23:10:12', 'Administrator', 'Logged out'),
(202, 1, '2024-02-15 06:18:47', 'Administrator', 'Logged in'),
(203, 1, '2024-02-15 07:11:36', 'Administrator', 'Logged out'),
(204, 1, '2024-02-15 10:50:59', 'Administrator', 'Logged out'),
(205, 1, '2024-02-15 10:52:27', 'Administrator', 'Logged in'),
(206, 1, '2024-02-15 11:10:45', 'Administrator', 'Logged out'),
(207, 1, '2024-02-15 11:23:26', 'Administrator', 'Logged in'),
(208, 1, '2024-02-15 21:49:07', 'Administrator', 'Logged out'),
(209, 1, '2024-02-16 15:45:07', 'Administrator', 'Logged in'),
(210, 1, '2024-02-16 19:55:01', 'Administrator', 'Logged in'),
(211, 1, '2024-02-16 20:55:02', 'Administrator', 'Logged out'),
(212, 1, '2024-02-16 21:04:10', 'Administrator', 'Logged in'),
(213, 1, '2024-02-17 10:06:16', 'Administrator', 'Logged out'),
(214, 1, '2024-02-17 12:11:25', 'Administrator', 'Logged in'),
(215, 1, '2024-02-17 12:16:44', 'Administrator', 'Logged out'),
(216, 13, '2024-02-17 12:18:08', 'Register', 'Logged in'),
(217, 1, '2024-02-17 12:58:34', 'Administrator', 'Logged in'),
(218, 13, '2024-02-17 13:47:57', 'Register', 'Logged out'),
(219, 14, '2024-02-17 13:48:22', 'Student', 'Logged in'),
(220, 14, '2024-02-17 13:58:17', 'Student', 'Logged out'),
(221, 13, '2024-02-17 15:03:21', 'Register', 'Logged in'),
(222, 13, '2024-02-17 15:28:37', 'Register', 'Logged out'),
(223, 1, '2024-02-17 16:26:41', 'Administrator', 'Logged in'),
(224, 1, '2024-02-17 16:38:53', 'Administrator', 'Logged in'),
(225, 1, '2024-02-17 16:39:39', 'Administrator', 'Logged out'),
(226, 1, '2024-02-17 16:54:15', 'Administrator', 'Logged out'),
(227, 1, '2024-02-17 16:58:50', 'Administrator', 'Logged in'),
(228, 1, '2024-02-17 17:46:00', 'Administrator', 'Logged in'),
(229, 1, '2024-02-17 18:30:06', 'Administrator', 'Logged in'),
(230, 1, '2024-02-17 18:33:31', 'Administrator', 'Logged out'),
(231, 1, '2024-02-17 19:14:19', 'Administrator', 'Logged out'),
(232, 13, '2024-02-18 07:58:31', 'Register', 'Logged in'),
(233, 13, '2024-02-18 08:01:32', 'Register', 'Logged out'),
(234, 1, '2024-02-18 15:36:10', 'Administrator', 'Logged in'),
(235, 1, '2024-02-18 17:36:12', 'Administrator', 'Logged in'),
(236, 1, '2024-02-18 17:44:47', 'Administrator', 'Logged out'),
(237, 1, '2024-02-18 21:20:09', 'Administrator', 'Logged in'),
(238, 1, '2024-02-18 21:21:41', 'Administrator', 'Logged out'),
(239, 1, '2024-02-18 21:36:29', 'Administrator', 'Logged in'),
(240, 1, '2024-02-19 07:13:31', 'Administrator', 'Logged in'),
(241, 1, '2024-02-19 10:52:41', 'Administrator', 'Logged in'),
(242, 1, '2024-02-19 14:10:15', 'Administrator', 'Logged out'),
(243, 1, '2024-02-19 14:23:53', 'Administrator', 'Logged in'),
(244, 1, '2024-02-20 15:09:15', 'Administrator', 'Logged in'),
(245, 1, '2024-02-20 21:07:39', 'Administrator', 'Logged in'),
(246, 1, '2024-02-21 10:40:02', 'Administrator', 'Logged in'),
(247, 1, '2024-02-21 18:39:34', 'Administrator', 'Logged out'),
(248, 1, '2024-02-21 22:54:06', 'Administrator', 'Logged in'),
(249, 1, '2024-02-22 05:58:11', 'Administrator', 'Logged in'),
(250, 1, '2024-02-22 10:57:27', 'Administrator', 'Logged out'),
(251, 1, '2024-02-22 12:27:49', 'Administrator', 'Logged in'),
(252, 1, '2024-02-22 13:33:10', 'Administrator', 'Logged in'),
(253, 1, '2024-02-22 13:37:44', 'Administrator', 'Logged out'),
(254, 1, '2024-02-22 13:39:23', 'Administrator', 'Logged in'),
(255, 1, '2024-02-22 15:37:57', 'Administrator', 'Logged in'),
(256, 1, '2024-02-23 07:57:39', 'Administrator', 'Logged in'),
(257, 1, '2024-02-23 09:09:03', 'Administrator', 'Logged in'),
(258, 1, '2024-02-23 09:13:58', 'Administrator', 'Logged out'),
(259, 1, '2024-02-23 10:44:15', 'Administrator', 'Logged in'),
(260, 1, '2024-02-23 12:13:53', 'Administrator', 'Logged out'),
(261, 1, '2024-02-23 12:13:58', 'Administrator', 'Logged out'),
(262, 1, '2024-02-23 12:35:52', 'Administrator', 'Logged in'),
(263, 1, '2024-02-23 12:37:29', 'Administrator', 'Logged out'),
(264, 1, '2024-02-23 14:08:04', 'Administrator', 'Logged in'),
(265, 1, '2024-02-23 15:11:39', 'Administrator', 'Logged in'),
(266, 1, '2024-02-23 15:48:30', 'Administrator', 'Logged in'),
(267, 1, '2024-02-23 15:48:37', 'Administrator', 'Logged out'),
(268, 1, '2024-02-23 15:49:49', 'Administrator', 'Logged in'),
(269, 1, '2024-02-23 15:49:56', 'Administrator', 'Logged out'),
(270, 1, '2024-02-23 15:50:16', 'Administrator', 'Logged in'),
(271, 1, '2024-02-23 15:50:25', 'Administrator', 'Logged out'),
(272, 1, '2024-02-23 15:51:05', 'Administrator', 'Logged in'),
(273, 1, '2024-02-23 15:51:15', 'Administrator', 'Logged out'),
(274, 1, '2024-02-23 15:51:25', 'Administrator', 'Logged in'),
(275, 1, '2024-02-23 15:51:29', 'Administrator', 'Logged out'),
(276, 1, '2024-02-23 15:51:37', 'Administrator', 'Logged in'),
(277, 1, '2024-02-23 15:52:52', 'Administrator', 'Logged out'),
(278, 1, '2024-02-23 15:53:01', 'Administrator', 'Logged in'),
(279, 1, '2024-02-23 15:57:40', 'Administrator', 'Logged out'),
(280, 1, '2024-02-23 15:57:49', 'Administrator', 'Logged in'),
(281, 1, '2024-02-23 16:05:25', 'Administrator', 'Logged out'),
(282, 1, '2024-02-23 16:05:34', 'Administrator', 'Logged in'),
(283, 1, '2024-02-23 16:07:58', 'Administrator', 'Logged out'),
(284, 1, '2024-02-23 16:08:17', 'Administrator', 'Logged in'),
(285, 1, '2024-02-23 16:08:30', 'Administrator', 'Logged out'),
(286, 1, '2024-02-23 16:08:50', 'Administrator', 'Logged in'),
(287, 1, '2024-02-23 16:11:36', 'Administrator', 'Logged out'),
(288, 1, '2024-02-24 06:09:20', 'Administrator', 'Logged in'),
(289, 1, '2024-02-24 06:19:37', 'Administrator', 'Logged out'),
(290, 1, '2024-02-26 14:33:46', 'Administrator', 'Logged in');

-- --------------------------------------------------------

--
-- Table structure for table `tblsales`
--

CREATE TABLE `tblsales` (
  `SalesId` int NOT NULL,
  `Product` varchar(90) NOT NULL,
  `TotalSales` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsales`
--

INSERT INTO `tblsales` (`SalesId`, `Product`, `TotalSales`) VALUES
(1, 'Surf Powder', 1400),
(2, 'Mr. Clean Powder', 800),
(3, 'Tide Powder', 5052),
(4, 'Ariel Powder', 8030);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `ID` int NOT NULL,
  `StudentID` varchar(255) NOT NULL,
  `Firstname` varchar(99) NOT NULL,
  `Lastname` varchar(99) NOT NULL,
  `Middlename` varchar(99) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `BirthDate` date NOT NULL,
  `Age` int NOT NULL,
  `ContactNo` varchar(30) NOT NULL,
  `YearLevel` varchar(11) NOT NULL,
  `CourseID` int NOT NULL,
  `StudPhoto` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Cand_Status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`ID`, `StudentID`, `Firstname`, `Lastname`, `Middlename`, `Address`, `Gender`, `BirthDate`, `Age`, `ContactNo`, `YearLevel`, `CourseID`, `StudPhoto`, `Cand_Status`, `Code`) VALUES
(1, '023256469', 'KENJIE', 'PALACIOS', 'ECHALAR', 'KABANKALAN CITY', 'Male', '1992-11-20', 24, '0232546886', 'Fourth', 3, 'photo/5047.jpg', '', ''),
(2, '12312312', 'JAKE', 'PALMA', 'ECHALAR', 'KABANKALAN CITY', 'Male', '1990-11-11', 26, '12312312312', 'Second', 4, 'photo/IMG-20211025-WA0009.jpg', '', ''),
(3, '8583362', 'JANRY', 'TAN', 'MELMOM', 'KABANKALAN CITY', 'Male', '1991-08-16', 25, '12312312312', 'First', 3, 'photo/6308.jpg', '', ''),
(4, '0010266936', 'JASON', 'BATUTU', 'RERE', 'KABANKALAN CITY', 'Male', '1994-02-14', 23, '21312312312321', 'First', 3, '', '', ''),
(5, '8798794', 'ALMA', 'RECARDO', 'TORRES', 'HIMAMAYLAN CITY', 'Female', '1989-04-26', 27, '09047894777', 'Second', 4, '', '', ''),
(6, '8675543', 'CHESKA', 'RAMIREZ', 'UY', 'KABANKALAN CITY', 'Female', '1990-01-31', 27, '09567435788', 'Third', 5, '', '', ''),
(7, '1253235', 'RAMON', 'CORPUZ', 'SANTOS', 'DANCALAN, ILOG', 'Male', '1994-02-17', 23, '09567453453', 'First', 3, '', '', ''),
(8, '654567896', 'KAREN', 'VARGAS', 'ONG', 'KABANKALAN CITY', 'Female', '1993-03-22', 23, '09457545699', 'First', 3, '', '', ''),
(9, '5434689', 'KENMARK', 'REYES', 'DELA CRUZ', 'SUAY, HIMAMAYLAN CITY', 'Male', '1992-11-16', 24, '09567534689', 'First', 6, 'photo/5048..jpg', '', ''),
(10, '57053590', 'CHERYL', 'LACSON', 'PADILLA', 'KABANKALAN CITY', 'Female', '1990-05-25', 26, '09206543456', 'Second', 3, 'student5065...jpg', '', ''),
(33, '', 'CHRISTINE', 'KADENGE', 'GANGA', 'TARU', 'Female', '1995-07-15', 28, '0713912202', 'First', 5, '', '', ''),
(34, '', 'ZIROH', 'KATANA', 'MAE', 'KILIFI', 'Male', '1986-09-25', 37, '0799086123', 'First', 3, './student/photo/5047.jpg', '', ''),
(35, '09476', 'PAMELA', 'MAE', 'JUMWA', 'MAJENGO KANAMAI', 'Female', '1997-11-18', 26, '0101086123', 'Fourth', 5, '', '', ''),
(36, '8583', 'TEVIN', 'KAZUNGU', 'MWARINGA', 'KILIFI', 'Male', '1997-04-18', 26, '07990876213', 'Fourth', 5, '', '', ''),
(37, '027547', 'KAHONZI', 'KAZUNGU', 'CHANGAWA', 'MOMBASA KISAUNI', 'Female', '1997-12-18', 26, '0758824173', 'First', 5, '', '', ''),
(38, '03945', 'KARRISA', 'ONES', 'MWENI', 'KILIFI GOA', 'Male', '1986-12-21', 37, '0101086123', 'First', 3, '', '', ''),
(39, '934702', 'TITO', 'CHOKWE', 'AMBROSE', 'KILIFI', 'Male', '1980-12-13', 43, '0799086123', 'Second', 7, '', '', ''),
(40, '02978', 'MANGI', 'CHARO', 'KAHINDI', 'MALINDI', 'Female', '1962-12-20', 61, '098765431', 'First', 5, '', '', ''),
(41, '087439', 'KACHE ', 'FURAHA', 'CHARO', 'SOKOKE KILIFI', 'Female', '1997-11-19', 26, '018493474358473', 'Third', 7, '', '', ''),
(42, '948357', 'VINCENT', 'RUWA', 'CHARO', 'TEZO KILIFI', 'Male', '1995-07-14', 28, '4734719037845', 'First', 5, '', '', ''),
(43, '035776', 'KENNEDY', 'KAREKA', 'MUBWANA', 'TEZO KILIFI', 'Male', '1989-10-10', 34, '0729743463', 'First', 7, '', '', ''),
(44, '4785389', 'WANJE', 'KADENGE', 'ZIRO', 'KILIFI', 'Male', '1991-08-13', 32, '0972347473', 'First', 7, '', '', ''),
(45, '457340', 'STELLA ', 'NGINA', 'TUTAA', 'MAKUENI', 'Female', '1993-11-14', 30, '43438743', 'Second', 5, '', '', ''),
(46, '90545847', 'GARAMA', 'RUWA', 'JOSEPH', 'KWETU', 'Male', '1972-10-22', 51, '01111111111148534', 'First', 7, '', '', ''),
(47, '943854', 'NANCY', 'SAUMU', 'DHENGE', 'KITENGWANI', 'Female', '1998-09-21', 25, '0087312445', 'First', 7, '', '', ''),
(48, 'y2khdpw2', 'ZAWADI', 'KAZUNGU', 'KADZHELENGI', '1333-80108 KILIFI', 'Female', '1990-02-02', 34, '0732208800', 'First', 5, '', '', ''),
(49, 'ztzy6rdg', 'NJOROGE', 'KAMUA', 'MUNYWA', 'NAIROBI', 'Male', '1978-11-14', 45, '31730247', 'First', 5, '', '', ''),
(50, 'idx4dyst', 'ERIC', 'M', 'MURITHI', 'NAIROBI', 'Male', '1992-11-14', 31, '0713912202', 'First', 5, '', '', ''),
(51, 'jr7jyo6f', 'STANLEY', 'MUNGA', 'NDIRANGO', 'NAIROBI', 'Male', '1992-10-13', 31, '0713912202', 'First', 5, '', '', ''),
(52, 'RMUXO16M', 'KASICHANA', 'MAURINE', 'ZIRO', 'TEZO KILIFI', 'Female', '1985-11-13', 38, '0713912202', 'First', 5, '', '', ''),
(53, 'UBQ3YKEZ', 'FRANSIS', 'CHOKWE', 'MUNGA', 'KWACHOKWE', 'Male', '1992-10-13', 31, '08979555558', 'First', 5, '', '', ''),
(54, '0SG5JQS4', 'LUCKY', 'DZUMBE', 'SARO', 'LIKONI', 'Male', '1992-12-13', 31, '7149030', 'First', 4, '', '', ''),
(55, 'KFW2WD11', 'NELSON', 'CHARO', 'MAWLIMU', 'MTONDIA', 'Male', '1988-10-13', 35, '01010861234', 'First', 5, '', '', ''),
(56, 'H5MJ13ER', 'MWENI', 'KARISA', 'CHENGO', '552KILIFI', 'Female', '0000-00-00', 23, '0101001927', 'First', 3, '', '', ''),
(57, 'QOHHS0FY', 'PAMELA', 'DAMA', 'JUMWA', 'KWETU', 'Female', '1992-01-13', 32, '0713912202', 'First', 3, '', '', ''),
(58, '0FR0J0UI', 'STANELLY', 'MUNGA', 'S', 'NAIROBI', 'Male', '1997-12-18', 26, '010930794134', 'First', 5, '', '', ''),
(59, 'BZ2ZFGNW', 'ZABLON', 'OIGO', 'M', 'NAIROBI', 'Male', '1979-12-19', 44, '10371403743586', 'First', 3, '', '', ''),
(61, 'S65SNENP', 'SAFARI', 'KEITH', 'ZIROH', 'MOMBASA', 'Male', '1965-12-15', 58, '183198100', 'First', 5, '', '', ''),
(62, 'IR2YBSRA', 'PRISICLA', 'MUNGA', 'MBODZE', 'KILIFI', 'Female', '1975-01-31', 49, '09374863483', 'First', 3, '', '', ''),
(63, '5NHNCUZO', 'CHRISTOPHE', 'KAINGU', 'ZIROH', 'TEZO KAOMU', 'Male', '1997-12-18', 26, '03486483398', 'First', 3, 'photo/3640e7c4.jpg', '', ''),
(65, 'SLQ5I4MH', 'CLARA', 'RIZIKI', 'NGUMBAO', 'KILIFI', 'Female', '1998-02-20', 25, '098374267278', 'First', 3, '', '', ''),
(66, 'GNK1VJZM', 'PRECIOUS', 'PENDO', 'MAE', 'NAIROBI', 'Female', '1993-11-15', 30, '0790865433', 'First', 3, '', '', ''),
(67, 'JOOJ3PW5', 'KAHINDI ', 'CHARO', 'KAZUNGU', 'KILIFI', 'Male', '1993-11-15', 30, '09887654', 'First', 3, '', '', ''),
(68, 'MIS42U3J', 'KAZUNGU', 'WANJE', 'CHAMBELE', 'TEZO', 'Male', '1997-01-19', 27, '08765432', 'First', 3, 'photo/3in one jiko.jpg', '', ''),
(69, 'OXYW3WOO', 'SHIRIKISHO', 'KARRISMU', 'KALU', 'TEZO', 'Female', '1926-01-31', 98, '0987646878', 'Second', 3, '', '', ''),
(70, '6L46KXQH', 'GRABRIEL', 'KARABU', 'KAINGU', 'BAMBA', 'Female', '1989-11-10', 34, '098776554421', 'First', 5, '', '', ''),
(71, 'TM2A4CTR', 'BRIAN', 'GAGO', 'HATU', '1234 KAZURI', 'Male', '1993-12-14', 30, '098776655', 'First', 3, '', '', ''),
(72, 'UEZ5LTZ6', 'EKAB', 'PETER', 'TOSH', 'MERU', 'Male', '1989-11-09', 34, '9780098359', 'First', 5, '', '', ''),
(73, 'S4ZKAVUV', 'KATANA', 'CHARO', 'KAHINDI', 'KILIFI', 'Male', '1982-12-18', 41, '799086540', 'First', 3, '', '', ''),
(74, 'YAWRKEY4', 'CHARO', 'KADII', 'FURAHA', '522KILIFI', 'Female', '1904-01-31', 120, '09878762712', 'First', 7, '', '', ''),
(75, 'CZO41NOG', 'SHIDA', 'KILUMO', 'CHARO', '2333TEZO', 'Male', '1959-10-10', 64, '09876543322', 'First', 5, 'photo/240x240.jpg', '', ''),
(76, 'MOT5LGRQ', 'KATANA', 'DAVID', 'NGOWA', 'KILIFI TOWNSHIP', 'Male', '1979-12-18', 44, '0788096543', 'Fourth', 7, 'photo/3in one jiko.jpg', '', ''),
(77, '13MTGKH1', 'PHILP', 'CHARO', 'AMANI', 'MATSANGONI', 'Male', '1993-12-14', 30, '9876542241', 'First', 5, 'photo/Untitled-design-2023-11-07T110022.490.jpg', '', ''),
(78, '6U4HE6E0', 'KARABU', 'KAZUNGU', 'CHARO', '8976 MOMBASA', 'Male', '1988-11-10', 35, '0987654221', 'First', 7, '', '', ''),
(80, 'NLLHBBSM', 'SIDI', 'NGOWA', 'KAZUNGU', 'TEZO MWAMBANI', 'Female', '1973-12-10', 50, '0757998542', 'Second', 7, './student/photo/5055.jpg', '', ''),
(81, '4VVN4A3E', 'KITSAO', 'CHARO', 'ZIROH', 'TEZO MUBUYU', 'Male', '1998-12-19', 25, '098765542421', 'First', 5, './student/photo/5074.jpg', '', ''),
(82, '4FWZTGW4', 'SANTA', 'ENOCK', 'NGOWA', 'KILIFI MWANDONI', 'Male', '1970-12-14', 53, '0799086542', 'First', 7, './student/photo/3in one jiko.jpg', '', ''),
(83, 'JDIW3YYK', 'KAHINDI', 'KAGUNGULU', 'KILUMO', 'KWACHOKWE', 'Male', '1989-12-10', 34, '0799086543', 'First', 5, 'photo/5055...jpg', '', ''),
(84, 'WXGO1GBL', 'SHARID', 'ABDHALA', 'HAMISI', 'KWALE', 'Male', '1961-12-10', 62, '0727000000', 'First', 5, '', '', ''),
(85, 'ERP4ZXJ3', 'ALFRED', 'KASHURU', 'K', 'KILIFI', 'Male', '1989-12-11', 34, '07809765432', 'First', 5, '', '', ''),
(86, 'A0VN6AKV', 'ALLAN', 'NGOCHILA', 'A', 'PLP', 'Male', '1996-11-10', 27, '0797790312', 'First', 10, '', '', ''),
(87, 'MM5S13PL', 'EVANS ', 'MUTUKU', 'E', 'PLP', 'Male', '1980-11-12', 43, '0977655414516', 'First', 9, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbltimetable`
--

CREATE TABLE `tbltimetable` (
  `TimeTableID` int NOT NULL,
  `StudentID` varchar(90) NOT NULL,
  `TimeInAM` varchar(30) NOT NULL,
  `TimeOutAM` varchar(30) NOT NULL,
  `TimeInPM` varchar(30) NOT NULL,
  `TimeOutPM` varchar(30) NOT NULL,
  `AttendDate` date NOT NULL,
  `AttendEvent` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltimetable`
--

INSERT INTO `tbltimetable` (`TimeTableID`, `StudentID`, `TimeInAM`, `TimeOutAM`, `TimeInPM`, `TimeOutPM`, `AttendDate`, `AttendEvent`) VALUES
(1, '0010266936', '05:31 AM', '', '', '', '2017-03-14', 'BASKETBALL'),
(2, '0010266936', '', '', '01:55 PM', '', '2017-03-15', ''),
(3, '023256469', '', '', '12:22 PM', '', '2024-02-08', 'STTC'),
(4, '1253235', '', '', '05:45 PM', '', '2024-02-09', 'BASKETBALL.'),
(5, '023256469', '', '', '05:46 PM', '', '2024-02-09', 'STTC'),
(6, '023256469', '', '', '11:27 PM', '', '2024-02-14', 'STTC'),
(7, 'ztzy6rdg', '', '', '01:35 PM', '', '2024-02-15', 'STTC'),
(8, 'idx4dyst', '', '', '01:37 PM', '', '2024-02-15', ''),
(9, '023256469', '', '', '07:37 PM', '', '2024-02-18', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblverifytimeintimeout`
--

CREATE TABLE `tblverifytimeintimeout` (
  `VerifyID` int NOT NULL,
  `StudentID` varchar(90) NOT NULL,
  `TimeIn` varchar(30) NOT NULL,
  `TimeOut` varchar(30) NOT NULL,
  `Verification` varchar(90) NOT NULL,
  `DateValidation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblverifytimeintimeout`
--

INSERT INTO `tblverifytimeintimeout` (`VerifyID`, `StudentID`, `TimeIn`, `TimeOut`, `Verification`, `DateValidation`) VALUES
(1, '0010266936', '01:55 PM', '05:31 AM', 'TimeIn', '2017-03-15'),
(2, '023256469', '11:27 PM', '07:37 PM', 'TimeOut', '2024-02-18'),
(3, '1253235', '05:45 PM', '', 'TimeIn', '2024-02-09'),
(4, 'ztzy6rdg', '01:35 PM', '', 'TimeIn', '2024-02-15'),
(5, 'idx4dyst', '01:37 PM', '', 'TimeIn', '2024-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `tblvotes`
--

CREATE TABLE `tblvotes` (
  `VotesId` int NOT NULL,
  `Voters` varchar(90) NOT NULL,
  `Candidate` varchar(90) NOT NULL,
  `VoteDate` date NOT NULL,
  `Course` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvotes`
--

INSERT INTO `tblvotes` (`VotesId`, `Voters`, `Candidate`, `VoteDate`, `Course`) VALUES
(1, 'vrajnsp8', '023256469', '2024-02-08', ''),
(2, '0ewhhetb', '023256469', '2024-02-08', ''),
(3, 'x34v8mmg', '023256469', '2024-02-08', ''),
(4, 'n0nb8q53', '023256469', '2024-02-08', ''),
(5, 'xzn7knnr', '023256469', '2024-02-08', ''),
(6, 'z666rewn', '87565', '2024-02-09', ''),
(7, 'w2kew2en', '87565', '2024-02-09', ''),
(8, '3z4fz5nq', '87565', '2024-02-09', ''),
(9, 'z666rewn', '87565', '2024-02-09', ''),
(10, 'mbfyf7qd', '8583', '2024-02-09', ''),
(11, 'hsr3zpr3', '8583', '2024-02-09', ''),
(12, 'ncsscxay', '8583', '2024-02-09', ''),
(13, '634yw302', '8583', '2024-02-14', ''),
(14, '634yw302', '03945', '2024-02-14', ''),
(15, 'pikjoyb8', '023256469', '2024-02-15', ''),
(16, 'pikjoyb8', '03945', '2024-02-15', ''),
(17, 'jw23q7i0', '8583', '2024-02-17', ''),
(18, 'jw23q7i0', 'UBQ3YKEZ', '2024-02-17', ''),
(19, 'jw23q7i0', '03945', '2024-02-17', ''),
(20, 'jw23q7i0', '0SG5JQS4', '2024-02-17', ''),
(21, 'co3p3qxj', '8583', '2024-02-17', ''),
(22, 'co3p3qxj', '934702', '2024-02-17', ''),
(23, 'co3p3qxj', '03945', '2024-02-17', ''),
(24, 'co3p3qxj', '0SG5JQS4', '2024-02-17', ''),
(26, 'ccgvz4vb', 'UBQ3YKEZ', '2024-02-17', ''),
(27, 'ccgvz4vb', '03945', '2024-02-17', ''),
(28, 'ccgvz4vb', '0SG5JQS4', '2024-02-17', ''),
(29, 'iur76q4s', '8583', '2024-02-18', ''),
(30, 'iur76q4s', 'UBQ3YKEZ', '2024-02-18', ''),
(31, 'iur76q4s', '0SG5JQS4', '2024-02-18', ''),
(32, 'm02rj63m', '8583', '2024-02-19', ''),
(33, 'm02rj63m', 'RMUXO16M', '2024-02-19', ''),
(34, 'a3zzq40f', '8583', '2024-02-23', ''),
(35, 'a3zzq40f', 'RMUXO16M', '2024-02-23', ''),
(36, 'fxssu20r', 'ERP4ZXJ3', '2024-02-23', ''),
(37, 'fxssu20r', '934702', '2024-02-23', ''),
(38, 'ckv3n4kb', 'ERP4ZXJ3', '2024-02-23', ''),
(39, 'ckv3n4kb', 'RMUXO16M', '2024-02-23', ''),
(40, 'ckv3n4kb', '0SG5JQS4', '2024-02-23', ''),
(41, 'ckv3n4kb', '5434689', '2024-02-23', ''),
(42, 'e5wngony', 'idx4dyst', '2024-02-23', ''),
(43, '6nikzdk4', 'A0VN6AKV', '2024-02-23', ''),
(44, 'oubb7arc', 'MM5S13PL', '2024-02-23', ''),
(45, 'u25kufhm', 'idx4dyst', '2024-02-23', ''),
(46, 'q634zaun', 'A0VN6AKV', '2024-02-23', ''),
(47, '4dncs6v5', 'idx4dyst', '2024-02-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblvotingcode`
--

CREATE TABLE `tblvotingcode` (
  `VCID` int NOT NULL,
  `CodeNo` varchar(30) NOT NULL,
  `GenerateDate` date NOT NULL,
  `CVUse` tinyint(1) NOT NULL,
  `AuthPrint` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvotingcode`
--

INSERT INTO `tblvotingcode` (`VCID`, `CodeNo`, `GenerateDate`, `CVUse`, `AuthPrint`) VALUES
(50, 'fb8kxbxk', '2024-02-09', 1, 201779),
(51, '6jmoctui', '2024-02-09', 1, 201779),
(53, '3ieka2u0', '2024-02-09', 1, 201781),
(58, 'svkz64tw', '2024-02-17', 1, 201786),
(59, 'se5bxc42', '2024-02-17', 1, 201787),
(60, 'gzyvxsgx', '2024-02-17', 1, 201788),
(61, 'w3iwq4ie', '2024-02-17', 1, 201789),
(62, 'ngkkzkv2', '2024-02-17', 1, 201790),
(63, 'ggymaado', '2024-02-17', 1, 201791),
(64, 'pu7go2hf', '2024-02-17', 1, 201792),
(65, 'xi3srnwy', '2024-02-17', 1, 201793),
(66, 'ezyn72m8', '2024-02-17', 1, 201794),
(67, '26nuhet4', '2024-02-17', 1, 201795),
(68, '480sqzsb', '2024-02-17', 1, 201796),
(69, 'cxn2mdeu', '2024-02-17', 1, 201797),
(70, 'x6pj4df6', '2024-02-17', 1, 201798),
(71, 'ty25bbax', '2024-02-17', 1, 201799),
(75, 'oxapi8wv', '2024-02-18', 1, 2017103),
(77, 'ydjbwhjj', '2024-02-18', 1, 2017105),
(78, 'dkruugqr', '2024-02-18', 1, 2017106),
(80, '6t5bxarh', '2024-02-19', 1, 2017108),
(81, '7hukg4go', '2024-02-19', 1, 2017108),
(82, 'kx2zakhj', '2024-02-22', 1, 2017109),
(83, 'hfpp8ek0', '2024-02-23', 1, 2017110),
(91, 'vw5xxqph', '2024-02-23', 1, 2017117),
(92, 'jkts7gp6', '2024-02-23', 1, 2017117),
(93, 'n5do580i', '2024-02-23', 1, 2017117),
(94, '2v28i4tp', '2024-02-23', 1, 2017117),
(95, 'oyecqnsi', '2024-02-23', 1, 2017117),
(96, 'kpqhbe6n', '2024-02-23', 1, 2017117),
(97, 'g5vupdsv', '2024-02-23', 1, 2017117),
(98, 'ucmzne2j', '2024-02-23', 1, 2017117),
(99, 'bahvtbe5', '2024-02-23', 1, 2017117),
(100, '6uismczg', '2024-02-23', 1, 2017117),
(101, 'zj0hn8n8', '2024-02-23', 1, 2017117),
(102, '42v2n0hh', '2024-02-23', 1, 2017117),
(103, '2dpe680z', '2024-02-23', 1, 2017117),
(104, '3tnvz4mj', '2024-02-23', 1, 2017117),
(105, 'csaaxw2h', '2024-02-23', 1, 2017117),
(106, 'cn62ston', '2024-02-23', 1, 2017117),
(107, '68x4ux0d', '2024-02-23', 1, 2017117),
(108, 'eekqvkuk', '2024-02-23', 1, 2017117),
(109, 'bzhetj0e', '2024-02-23', 1, 2017117),
(110, 'qp3kgfe7', '2024-02-23', 1, 2017117),
(111, '24v7t2n6', '2024-02-23', 1, 2017117),
(112, 'tjvodanp', '2024-02-23', 1, 2017117),
(113, 'ry7wfr8p', '2024-02-23', 1, 2017117),
(114, '6j0k57nk', '2024-02-23', 1, 2017117),
(115, '2mb8hdr8', '2024-02-23', 1, 2017117),
(116, 'vpirrkrt', '2024-02-23', 1, 2017117),
(117, 'a34dyqp4', '2024-02-23', 1, 2017117),
(118, 'c4vjxp3i', '2024-02-23', 1, 2017117),
(119, 'sr4k3uwo', '2024-02-23', 1, 2017117),
(120, 'y2dgzz7v', '2024-02-23', 1, 2017117),
(121, 'nv8knjc3', '2024-02-23', 1, 2017117),
(122, 't6ons5dv', '2024-02-23', 1, 2017117),
(123, '7vwxzb2h', '2024-02-23', 1, 2017117),
(124, 'd6z8qm7r', '2024-02-23', 1, 2017117),
(125, 'fyn7ru8z', '2024-02-23', 1, 2017117),
(126, '3hvfmvkb', '2024-02-23', 1, 2017117),
(127, '6juniva2', '2024-02-23', 1, 2017117),
(128, 'mxhv0ys5', '2024-02-23', 1, 2017117),
(129, 'i8vz7fw8', '2024-02-23', 1, 2017117),
(130, 'i6m5dpaa', '2024-02-23', 1, 2017117),
(131, 'tem7j4tw', '2024-02-23', 1, 2017117),
(132, 'ctorxjia', '2024-02-23', 1, 2017117),
(133, '0u73mgeh', '2024-02-23', 1, 2017117),
(134, 'jwggiiie', '2024-02-23', 1, 2017117),
(135, 'fovu44dw', '2024-02-23', 1, 2017117),
(136, '6gyadufx', '2024-02-23', 1, 2017117),
(137, 'ay5ep63a', '2024-02-23', 1, 2017117),
(138, 'ifo2vqqz', '2024-02-23', 1, 2017117),
(139, 'nknj2jds', '2024-02-23', 1, 2017117),
(140, 'vz8aonb6', '2024-02-23', 1, 2017117),
(141, 'otdkgs64', '2024-02-23', 1, 2017117),
(142, '3uwoskj2', '2024-02-23', 1, 2017117),
(143, 'jxz24zcy', '2024-02-23', 1, 2017117),
(144, 'iaaqt7dk', '2024-02-23', 1, 2017117),
(145, '2zpyq6ae', '2024-02-23', 1, 2017117),
(146, 'af26bsy7', '2024-02-23', 1, 2017117),
(147, 'drcgdqge', '2024-02-23', 1, 2017117),
(148, '6fr3fmu8', '2024-02-23', 1, 2017117),
(149, 'vswi2y8g', '2024-02-23', 1, 2017117),
(150, 'mb5tf3sh', '2024-02-23', 1, 2017117),
(151, 'rfm54nsx', '2024-02-23', 1, 2017117),
(152, 'mfttfrt7', '2024-02-23', 1, 2017117),
(153, '885gkx6x', '2024-02-23', 1, 2017117),
(154, 'p5qsgvzn', '2024-02-23', 1, 2017117),
(155, 'kbw88yso', '2024-02-23', 1, 2017117),
(156, '6d2hdy57', '2024-02-23', 1, 2017117),
(157, 'iuxh8ha7', '2024-02-23', 1, 2017117),
(158, 'h40z3mmq', '2024-02-23', 1, 2017117),
(159, 'bysedb6c', '2024-02-23', 1, 2017117),
(160, 'mco6yx4e', '2024-02-23', 1, 2017117),
(161, 'yt3f344n', '2024-02-23', 1, 2017117),
(162, 'zkkwvimq', '2024-02-23', 1, 2017117),
(163, 'jcdvr578', '2024-02-23', 1, 2017117),
(164, 'hzy730uf', '2024-02-23', 1, 2017117),
(165, '8m3j4dpj', '2024-02-23', 1, 2017117),
(166, 'ywntq068', '2024-02-23', 1, 2017117),
(167, 'so2tstnh', '2024-02-23', 1, 2017117),
(168, 'd0qxhzey', '2024-02-23', 1, 2017117),
(169, '8ngdpcoo', '2024-02-23', 1, 2017117),
(170, 'tkyw6pkx', '2024-02-23', 1, 2017117),
(171, 'yfm27dff', '2024-02-23', 1, 2017117),
(172, 'og5hbjpd', '2024-02-23', 1, 2017117),
(173, '6ki5s2xa', '2024-02-23', 1, 2017117),
(174, '4znsowu8', '2024-02-23', 1, 2017117),
(175, 'dv42p7fm', '2024-02-23', 1, 2017117),
(176, 'ec72oi3r', '2024-02-23', 1, 2017117),
(177, 'yqns08pi', '2024-02-23', 1, 2017117),
(178, 'bnwd6m0y', '2024-02-23', 1, 2017117),
(179, 'zx6di0tp', '2024-02-23', 1, 2017117),
(180, 'rky8bagm', '2024-02-23', 1, 2017117),
(181, 'yugi5n52', '2024-02-23', 1, 2017117),
(182, 'htr5ptqx', '2024-02-23', 1, 2017117),
(183, 'nkgimwqt', '2024-02-23', 1, 2017117),
(184, 'go2k07v5', '2024-02-23', 1, 2017117),
(185, 'mcsmh2kz', '2024-02-23', 1, 2017117),
(186, 'hi7p8upp', '2024-02-23', 1, 2017117),
(187, 'imu0aosb', '2024-02-23', 1, 2017117),
(188, 'osusxvbb', '2024-02-23', 1, 2017117),
(189, 'b6pmdvkv', '2024-02-23', 1, 2017117),
(190, 'qsh667yd', '2024-02-23', 1, 2017117),
(191, '7crmccb2', '2024-02-23', 1, 2017117),
(192, '0jhy0xru', '2024-02-23', 1, 2017117),
(193, '8i52rtf0', '2024-02-23', 1, 2017117),
(194, '5pzkd80x', '2024-02-23', 1, 2017117),
(195, 'ga2m4bph', '2024-02-23', 1, 2017117),
(196, 'fiwfwxse', '2024-02-23', 1, 2017117),
(197, 'mxnxjr2n', '2024-02-23', 1, 2017117),
(198, 'nxnibffe', '2024-02-23', 1, 2017117),
(200, 'x4nztzga', '2024-02-23', 1, 2017117);

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `ACCOUNT_ID` int NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL,
  `EMPID` int NOT NULL,
  `USERIMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`, `EMPID`, `USERIMAGE`) VALUES
(1, 'Eng Ziroh', 'admin', 'eb7673ab054ed12a28f7bc2342adbcac184cf97b', 'Administrator', 1234, 'photos/import2.png'),
(5, 'James Yap', 'james', '474ba67bdb289c6263b36dfd8a7bed6c85b04943', 'Administrator', 0, ''),
(6, 'LLOYD', 'lloyd', '12dea96fec20593566ab75692c9949596833adc9', 'Registrar', 0, ''),
(7, 'SSG1', 'ssg', '24ce6d489183f0ce4bd322ec5f59b45f9177288d', 'Registrar', 0, ''),
(8, 'SSG2', 'ssg2', '5e0b5b0eae521294ac33b471d64dcee6acff3799', 'Registrar', 0, ''),
(9, 'JUNIOR', 'Regi', 'abf996e70c81cc7e505fdd717b5c88f3158a9956', 'Administrator', 0, ''),
(10, 'GANGA', 'ganga', '76380bedef12d8814de4c6417032578551036216', 'Administrator', 0, ''),
(11, 'FURAHA', 'Happy', '3978d009748ef54ad6ef7bf851bd55491b1fe6bb', 'Student', 0, 'photos/mae.jpg'),
(12, 'TEVIN', 'Tevo', 'db5edfeb4790001e30e05220f279462060fba256', 'Clerk', 0, ''),
(13, 'GUEST', 'guest', '151f6dc888e2a455105793d776aba99568f2520c', 'Register', 0, ''),
(14, 'STUDENT', 'student', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Student', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  ADD PRIMARY KEY (`AutoID`);

--
-- Indexes for table `tblcandidate`
--
ALTER TABLE `tblcandidate`
  ADD PRIMARY KEY (`CandidateID`),
  ADD KEY `StudentID` (`StudentID`);

--
-- Indexes for table `tblconfirmcode`
--
ALTER TABLE `tblconfirmcode`
  ADD PRIMARY KEY (`CodeID`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`CourseID`),
  ADD KEY `DepartmentID` (`DepartmentID`);

--
-- Indexes for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD PRIMARY KEY (`DepartmentID`);

--
-- Indexes for table `tblevents`
--
ALTER TABLE `tblevents`
  ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `tbleventwinner`
--
ALTER TABLE `tbleventwinner`
  ADD PRIMARY KEY (`EWID`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`LOGID`);

--
-- Indexes for table `tblsales`
--
ALTER TABLE `tblsales`
  ADD PRIMARY KEY (`SalesId`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `StudentID` (`StudentID`);

--
-- Indexes for table `tbltimetable`
--
ALTER TABLE `tbltimetable`
  ADD PRIMARY KEY (`TimeTableID`);

--
-- Indexes for table `tblverifytimeintimeout`
--
ALTER TABLE `tblverifytimeintimeout`
  ADD PRIMARY KEY (`VerifyID`),
  ADD UNIQUE KEY `StudentID` (`StudentID`);

--
-- Indexes for table `tblvotes`
--
ALTER TABLE `tblvotes`
  ADD PRIMARY KEY (`VotesId`);

--
-- Indexes for table `tblvotingcode`
--
ALTER TABLE `tblvotingcode`
  ADD PRIMARY KEY (`VCID`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`),
  ADD UNIQUE KEY `ACCOUNT_USERNAME` (`ACCOUNT_USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  MODIFY `AutoID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcandidate`
--
ALTER TABLE `tblcandidate`
  MODIFY `CandidateID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tblconfirmcode`
--
ALTER TABLE `tblconfirmcode`
  MODIFY `CodeID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `CourseID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `DepartmentID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblevents`
--
ALTER TABLE `tblevents`
  MODIFY `EventID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbleventwinner`
--
ALTER TABLE `tbleventwinner`
  MODIFY `EWID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `LOGID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT for table `tblsales`
--
ALTER TABLE `tblsales`
  MODIFY `SalesId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `tbltimetable`
--
ALTER TABLE `tbltimetable`
  MODIFY `TimeTableID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblverifytimeintimeout`
--
ALTER TABLE `tblverifytimeintimeout`
  MODIFY `VerifyID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblvotes`
--
ALTER TABLE `tblvotes`
  MODIFY `VotesId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tblvotingcode`
--
ALTER TABLE `tblvotingcode`
  MODIFY `VCID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `ACCOUNT_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
