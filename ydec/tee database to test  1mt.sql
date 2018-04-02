-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 01:03 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1mt`
--
CREATE DATABASE IF NOT EXISTS `1mt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `1mt`;

-- --------------------------------------------------------

--
-- Table structure for table `1milliontraders`
--

DROP TABLE IF EXISTS `1milliontraders`;
CREATE TABLE `1milliontraders` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(250) NOT NULL,
  `studentID` int(8) NOT NULL,
  `university` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `classification` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` varchar(50) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1milliontraders`
--

INSERT INTO `1milliontraders` (`userID`, `username`, `fullname`, `contact`, `email`, `address`, `studentID`, `university`, `faculty`, `classification`, `password`, `userType`, `programme`, `code`) VALUES
(123123, 'qwe', 'qwe', '123131', '123123', '123123', 123123, '1231', '2312', '', '123123', '12312', '', ''),
(181666, 'tet', 'tet', '0129829666', 'tsyew1@gmail.com', 'asdad', 181666, 'UPM', 'FSKTM', '', '123', 'gold', '', ''),
(181677, 'tee', 'tee', '0169829666', 'tszenyew@gmail.com', 'asdadsa', 181677, 'UPM', 'FSKTM', '', '123', 'gold', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `invitation`
--

DROP TABLE IF EXISTS `invitation`;
CREATE TABLE `invitation` (
  `inviteID` int(11) NOT NULL,
  `teamID` int(11) NOT NULL,
  `participantID` int(11) NOT NULL,
  `invite_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `teamID` int(11) NOT NULL,
  `teamName` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `projectTitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamID`, `teamName`, `status`, `projectTitle`) VALUES
(2577649, 'gergew', 'on', 'wawa');

-- --------------------------------------------------------

--
-- Table structure for table `ydecparticipant`
--

DROP TABLE IF EXISTS `ydecparticipant`;
CREATE TABLE `ydecparticipant` (
  `participantID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `teamID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ydecparticipant`
--

INSERT INTO `ydecparticipant` (`participantID`, `userID`, `teamID`) VALUES
(1, 123123, NULL),
(2, 181677, NULL),
(3, 181666, 2577649);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1milliontraders`
--
ALTER TABLE `1milliontraders`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `invitation`
--
ALTER TABLE `invitation`
  ADD PRIMARY KEY (`inviteID`),
  ADD UNIQUE KEY `inviteID` (`inviteID`),
  ADD UNIQUE KEY `teamID` (`teamID`),
  ADD KEY `FK_inviteparticipant` (`participantID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamID`),
  ADD UNIQUE KEY `teamID` (`teamID`);

--
-- Indexes for table `ydecparticipant`
--
ALTER TABLE `ydecparticipant`
  ADD PRIMARY KEY (`participantID`),
  ADD KEY `FK_userID` (`userID`),
  ADD KEY `FK_ydecteam` (`teamID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invitation`
--
ALTER TABLE `invitation`
  ADD CONSTRAINT `FK_inviteparticipant` FOREIGN KEY (`participantID`) REFERENCES `ydecparticipant` (`participantID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_teaminvite` FOREIGN KEY (`teamID`) REFERENCES `team` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecparticipant`
--
ALTER TABLE `ydecparticipant`
  ADD CONSTRAINT `FK_userID` FOREIGN KEY (`userID`) REFERENCES `1milliontraders` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ydecteam` FOREIGN KEY (`teamID`) REFERENCES `team` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
