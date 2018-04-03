-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 12:24 PM
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
-- Database: `milliont_main`
--
CREATE DATABASE IF NOT EXISTS `milliont_main` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `milliont_main`;

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
  `studentID` int(8) DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `faculty` varchar(100) DEFAULT NULL,
  `classification` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `programme` varchar(100) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `codeCount` int(8) NOT NULL,
  `studentIDImg` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `1milliontraders`
--

INSERT INTO `1milliontraders` (`userID`, `username`, `fullname`, `contact`, `email`, `address`, `studentID`, `university`, `faculty`, `classification`, `password`, `userType`, `programme`, `code`, `codeCount`, `studentIDImg`) VALUES
(181666, 'tet', 'tet tet', '0123123123', 'tet@gmail.com', 'tet address', 181666, 'upm ', 'fsktm', 'student', '123', 'gold', NULL, NULL, 0, NULL),
(181677, 'tee', 'teesy', '01002010012', 'tszenyew@gmail.com', 'tee address', 181677, 'upm', 'fsktm', 'student', '123123', 'gold', 'bac SE', NULL, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `membershipfees`
--

DROP TABLE IF EXISTS `membershipfees`;
CREATE TABLE `membershipfees` (
  `feeID` int(11) NOT NULL,
  `transID` varchar(11) NOT NULL,
  `feeStatus` varchar(25) NOT NULL,
  `memberType` varchar(10) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecacademicadvisor`
--

DROP TABLE IF EXISTS `ydecacademicadvisor`;
CREATE TABLE `ydecacademicadvisor` (
  `mentorID` int(11) NOT NULL,
  `mentorName` varchar(150) NOT NULL,
  `university` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecfinalreportresult`
--

DROP TABLE IF EXISTS `ydecfinalreportresult`;
CREATE TABLE `ydecfinalreportresult` (
  `resultID` int(11) NOT NULL,
  `criteria` varchar(255) NOT NULL,
  `reportID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecfinancialresult`
--

DROP TABLE IF EXISTS `ydecfinancialresult`;
CREATE TABLE `ydecfinancialresult` (
  `resultID` int(11) NOT NULL,
  `criteria` varchar(255) NOT NULL,
  `month1` varchar(255) NOT NULL,
  `month2` varchar(255) NOT NULL,
  `month3` varchar(255) NOT NULL,
  `reportID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecindustry`
--

DROP TABLE IF EXISTS `ydecindustry`;
CREATE TABLE `ydecindustry` (
  `mentorID` int(11) NOT NULL,
  `mentorName` varchar(150) NOT NULL,
  `company` varchar(50) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecinvitation`
--

DROP TABLE IF EXISTS `ydecinvitation`;
CREATE TABLE `ydecinvitation` (
  `inviteID` int(11) NOT NULL,
  `teamID` int(11) NOT NULL,
  `participantID` int(11) NOT NULL,
  `invite_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ydecparticipant`
--

DROP TABLE IF EXISTS `ydecparticipant`;
CREATE TABLE `ydecparticipant` (
  `participantID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `teamID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ydecparticipant`
--

INSERT INTO `ydecparticipant` (`participantID`, `userID`, `teamID`) VALUES
(1, 181677, NULL),
(2, 181666, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ydecpitchingvideo`
--

DROP TABLE IF EXISTS `ydecpitchingvideo`;
CREATE TABLE `ydecpitchingvideo` (
  `videoID` int(11) NOT NULL,
  `link` int(11) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecpreliminaryresult`
--

DROP TABLE IF EXISTS `ydecpreliminaryresult`;
CREATE TABLE `ydecpreliminaryresult` (
  `resultID` int(11) NOT NULL,
  `criteria` varchar(255) NOT NULL,
  `videoID` int(11) NOT NULL,
  `proposalID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecproposal`
--

DROP TABLE IF EXISTS `ydecproposal`;
CREATE TABLE `ydecproposal` (
  `proposalID` int(11) NOT NULL,
  `documentName` varchar(50) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecreport`
--

DROP TABLE IF EXISTS `ydecreport`;
CREATE TABLE `ydecreport` (
  `reportID` int(11) NOT NULL,
  `date` date NOT NULL,
  `reportType` varchar(255) NOT NULL,
  `teamID` int(11) NOT NULL,
  `mentorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecteam`
--

DROP TABLE IF EXISTS `ydecteam`;
CREATE TABLE `ydecteam` (
  `teamID` int(11) NOT NULL,
  `teamName` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `projectTitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1milliontraders`
--
ALTER TABLE `1milliontraders`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `membershipfees`
--
ALTER TABLE `membershipfees`
  ADD PRIMARY KEY (`feeID`),
  ADD KEY `userFK` (`userID`);

--
-- Indexes for table `ydecacademicadvisor`
--
ALTER TABLE `ydecacademicadvisor`
  ADD PRIMARY KEY (`mentorID`),
  ADD KEY `teamFK` (`teamID`);

--
-- Indexes for table `ydecfinalreportresult`
--
ALTER TABLE `ydecfinalreportresult`
  ADD PRIMARY KEY (`resultID`),
  ADD KEY `reportFK` (`reportID`);

--
-- Indexes for table `ydecfinancialresult`
--
ALTER TABLE `ydecfinancialresult`
  ADD PRIMARY KEY (`resultID`),
  ADD KEY `reportFinFK` (`reportID`);

--
-- Indexes for table `ydecindustry`
--
ALTER TABLE `ydecindustry`
  ADD PRIMARY KEY (`mentorID`),
  ADD KEY `teamIndustryFK` (`teamID`);

--
-- Indexes for table `ydecinvitation`
--
ALTER TABLE `ydecinvitation`
  ADD KEY `FK_inviteparticipant` (`participantID`),
  ADD KEY `FK_teaminvite` (`teamID`);

--
-- Indexes for table `ydecparticipant`
--
ALTER TABLE `ydecparticipant`
  ADD PRIMARY KEY (`participantID`),
  ADD KEY `participantUserFK` (`userID`),
  ADD KEY `participantTeamFK` (`teamID`);

--
-- Indexes for table `ydecpitchingvideo`
--
ALTER TABLE `ydecpitchingvideo`
  ADD PRIMARY KEY (`videoID`),
  ADD KEY `PitchingTeamFK` (`teamID`);

--
-- Indexes for table `ydecpreliminaryresult`
--
ALTER TABLE `ydecpreliminaryresult`
  ADD PRIMARY KEY (`resultID`),
  ADD KEY `PrelimVideoFK` (`videoID`),
  ADD KEY `PrelimProposalFK` (`proposalID`);

--
-- Indexes for table `ydecproposal`
--
ALTER TABLE `ydecproposal`
  ADD PRIMARY KEY (`proposalID`),
  ADD KEY `ProposalTeamFK` (`teamID`);

--
-- Indexes for table `ydecreport`
--
ALTER TABLE `ydecreport`
  ADD PRIMARY KEY (`reportID`),
  ADD KEY `reportTeamFK` (`teamID`),
  ADD KEY `reportMentorFK` (`mentorID`);

--
-- Indexes for table `ydecteam`
--
ALTER TABLE `ydecteam`
  ADD PRIMARY KEY (`teamID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ydecfinalreportresult`
--
ALTER TABLE `ydecfinalreportresult`
  MODIFY `resultID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ydecpitchingvideo`
--
ALTER TABLE `ydecpitchingvideo`
  MODIFY `videoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ydecpreliminaryresult`
--
ALTER TABLE `ydecpreliminaryresult`
  MODIFY `resultID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ydecproposal`
--
ALTER TABLE `ydecproposal`
  MODIFY `proposalID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ydecreport`
--
ALTER TABLE `ydecreport`
  MODIFY `reportID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `membershipfees`
--
ALTER TABLE `membershipfees`
  ADD CONSTRAINT `userFK` FOREIGN KEY (`userID`) REFERENCES `1milliontraders` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecacademicadvisor`
--
ALTER TABLE `ydecacademicadvisor`
  ADD CONSTRAINT `teamFK` FOREIGN KEY (`teamID`) REFERENCES `ydecteam` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecfinalreportresult`
--
ALTER TABLE `ydecfinalreportresult`
  ADD CONSTRAINT `reportFK` FOREIGN KEY (`reportID`) REFERENCES `ydecreport` (`reportID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecfinancialresult`
--
ALTER TABLE `ydecfinancialresult`
  ADD CONSTRAINT `reportFinFK` FOREIGN KEY (`reportID`) REFERENCES `ydecreport` (`reportID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecindustry`
--
ALTER TABLE `ydecindustry`
  ADD CONSTRAINT `teamIndustryFK` FOREIGN KEY (`teamID`) REFERENCES `ydecteam` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecinvitation`
--
ALTER TABLE `ydecinvitation`
  ADD CONSTRAINT `FK_inviteparticipant` FOREIGN KEY (`participantID`) REFERENCES `ydecparticipant` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_teaminvite` FOREIGN KEY (`teamID`) REFERENCES `ydecteam` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecparticipant`
--
ALTER TABLE `ydecparticipant`
  ADD CONSTRAINT `participantTeamFK` FOREIGN KEY (`teamID`) REFERENCES `ydecteam` (`teamID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `participantUserFK` FOREIGN KEY (`userID`) REFERENCES `1milliontraders` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecpitchingvideo`
--
ALTER TABLE `ydecpitchingvideo`
  ADD CONSTRAINT `PitchingTeamFK` FOREIGN KEY (`teamID`) REFERENCES `ydecteam` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecpreliminaryresult`
--
ALTER TABLE `ydecpreliminaryresult`
  ADD CONSTRAINT `PrelimProposalFK` FOREIGN KEY (`proposalID`) REFERENCES `ydecproposal` (`proposalID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PrelimVideoFK` FOREIGN KEY (`videoID`) REFERENCES `ydecpitchingvideo` (`videoID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecproposal`
--
ALTER TABLE `ydecproposal`
  ADD CONSTRAINT `ProposalTeamFK` FOREIGN KEY (`teamID`) REFERENCES `ydecteam` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ydecreport`
--
ALTER TABLE `ydecreport`
  ADD CONSTRAINT `reportMentorFK` FOREIGN KEY (`mentorID`) REFERENCES `ydecindustry` (`mentorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reportTeamFK` FOREIGN KEY (`teamID`) REFERENCES `ydecteam` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
