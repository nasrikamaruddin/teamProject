-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2018 at 12:05 AM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

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

-- --------------------------------------------------------

--
-- Table structure for table `1MillionTraders`
--

CREATE TABLE `1MillionTraders` (
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
  `studentIDImg` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `MembershipFees`
--

CREATE TABLE `MembershipFees` (
  `feeID` int(11) NOT NULL,
  `transID` varchar(11) NOT NULL,
  `feeStatus` varchar(25) NOT NULL,
  `memberType` varchar(10) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `YDECAcademicAdvisor`
--

CREATE TABLE `YDECAcademicAdvisor` (
  `mentorID` int(11) NOT NULL,
  `mentorName` varchar(150) NOT NULL,
  `university` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `YDECFinalReportResult`
--

CREATE TABLE `YDECFinalReportResult` (
  `resultID` int(11) NOT NULL,
  `criteria` varchar(255) NOT NULL,
  `reportID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `YDECFinancialResult`
--

CREATE TABLE `YDECFinancialResult` (
  `resultID` int(11) NOT NULL,
  `criteria` varchar(255) NOT NULL,
  `month1` varchar(255) NOT NULL,
  `month2` varchar(255) NOT NULL,
  `month3` varchar(255) NOT NULL,
  `reportID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `YDECIndustry`
--

CREATE TABLE `YDECIndustry` (
  `mentorID` int(11) NOT NULL,
  `mentorName` varchar(150) NOT NULL,
  `company` varchar(50) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `YDECParticipant`
--

CREATE TABLE `YDECParticipant` (
  `participantID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `YDECPitchingVideo`
--

CREATE TABLE `YDECPitchingVideo` (
  `videoID` int(11) NOT NULL,
  `link` int(11) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `YDECPreliminaryResult`
--

CREATE TABLE `YDECPreliminaryResult` (
  `resultID` int(11) NOT NULL,
  `criteria` varchar(255) NOT NULL,
  `videoID` int(11) NOT NULL,
  `proposalID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `YDECProposal`
--

CREATE TABLE `YDECProposal` (
  `proposalID` int(11) NOT NULL,
  `documentName` varchar(50) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `YDECReport`
--

CREATE TABLE `YDECReport` (
  `reportID` int(11) NOT NULL,
  `date` date NOT NULL,
  `reportType` varchar(255) NOT NULL,
  `teamID` int(11) NOT NULL,
  `mentorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `YDECTeam`
--

CREATE TABLE `YDECTeam` (
  `teamID` int(11) NOT NULL,
  `teamName` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `projectTitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1MillionTraders`
--
ALTER TABLE `1MillionTraders`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `MembershipFees`
--
ALTER TABLE `MembershipFees`
  ADD PRIMARY KEY (`feeID`),
  ADD KEY `userFK` (`userID`);

--
-- Indexes for table `YDECAcademicAdvisor`
--
ALTER TABLE `YDECAcademicAdvisor`
  ADD PRIMARY KEY (`mentorID`),
  ADD KEY `teamFK` (`teamID`);

--
-- Indexes for table `YDECFinalReportResult`
--
ALTER TABLE `YDECFinalReportResult`
  ADD PRIMARY KEY (`resultID`),
  ADD KEY `reportFK` (`reportID`);

--
-- Indexes for table `YDECFinancialResult`
--
ALTER TABLE `YDECFinancialResult`
  ADD PRIMARY KEY (`resultID`),
  ADD KEY `reportFinFK` (`reportID`);

--
-- Indexes for table `YDECIndustry`
--
ALTER TABLE `YDECIndustry`
  ADD PRIMARY KEY (`mentorID`),
  ADD KEY `teamIndustryFK` (`teamID`);

--
-- Indexes for table `YDECParticipant`
--
ALTER TABLE `YDECParticipant`
  ADD PRIMARY KEY (`participantID`),
  ADD KEY `participantUserFK` (`userID`),
  ADD KEY `participantTeamFK` (`teamID`);

--
-- Indexes for table `YDECPitchingVideo`
--
ALTER TABLE `YDECPitchingVideo`
  ADD PRIMARY KEY (`videoID`),
  ADD KEY `PitchingTeamFK` (`teamID`);

--
-- Indexes for table `YDECPreliminaryResult`
--
ALTER TABLE `YDECPreliminaryResult`
  ADD PRIMARY KEY (`resultID`),
  ADD KEY `PrelimVideoFK` (`videoID`),
  ADD KEY `PrelimProposalFK` (`proposalID`);

--
-- Indexes for table `YDECProposal`
--
ALTER TABLE `YDECProposal`
  ADD PRIMARY KEY (`proposalID`),
  ADD KEY `ProposalTeamFK` (`teamID`);

--
-- Indexes for table `YDECReport`
--
ALTER TABLE `YDECReport`
  ADD PRIMARY KEY (`reportID`),
  ADD KEY `reportTeamFK` (`teamID`),
  ADD KEY `reportMentorFK` (`mentorID`);

--
-- Indexes for table `YDECTeam`
--
ALTER TABLE `YDECTeam`
  ADD PRIMARY KEY (`teamID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `YDECFinalReportResult`
--
ALTER TABLE `YDECFinalReportResult`
  MODIFY `resultID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `YDECPitchingVideo`
--
ALTER TABLE `YDECPitchingVideo`
  MODIFY `videoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `YDECPreliminaryResult`
--
ALTER TABLE `YDECPreliminaryResult`
  MODIFY `resultID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `YDECProposal`
--
ALTER TABLE `YDECProposal`
  MODIFY `proposalID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `YDECReport`
--
ALTER TABLE `YDECReport`
  MODIFY `reportID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `MembershipFees`
--
ALTER TABLE `MembershipFees`
  ADD CONSTRAINT `userFK` FOREIGN KEY (`userID`) REFERENCES `1MillionTraders` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `YDECAcademicAdvisor`
--
ALTER TABLE `YDECAcademicAdvisor`
  ADD CONSTRAINT `teamFK` FOREIGN KEY (`teamID`) REFERENCES `YDECTeam` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `YDECFinalReportResult`
--
ALTER TABLE `YDECFinalReportResult`
  ADD CONSTRAINT `reportFK` FOREIGN KEY (`reportID`) REFERENCES `YDECReport` (`reportID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `YDECFinancialResult`
--
ALTER TABLE `YDECFinancialResult`
  ADD CONSTRAINT `reportFinFK` FOREIGN KEY (`reportID`) REFERENCES `YDECReport` (`reportID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `YDECIndustry`
--
ALTER TABLE `YDECIndustry`
  ADD CONSTRAINT `teamIndustryFK` FOREIGN KEY (`teamID`) REFERENCES `YDECTeam` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `YDECParticipant`
--
ALTER TABLE `YDECParticipant`
  ADD CONSTRAINT `participantTeamFK` FOREIGN KEY (`teamID`) REFERENCES `YDECTeam` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participantUserFK` FOREIGN KEY (`userID`) REFERENCES `1MillionTraders` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `YDECPitchingVideo`
--
ALTER TABLE `YDECPitchingVideo`
  ADD CONSTRAINT `PitchingTeamFK` FOREIGN KEY (`teamID`) REFERENCES `YDECTeam` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `YDECPreliminaryResult`
--
ALTER TABLE `YDECPreliminaryResult`
  ADD CONSTRAINT `PrelimProposalFK` FOREIGN KEY (`proposalID`) REFERENCES `YDECProposal` (`proposalID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PrelimVideoFK` FOREIGN KEY (`videoID`) REFERENCES `YDECPitchingVideo` (`videoID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `YDECProposal`
--
ALTER TABLE `YDECProposal`
  ADD CONSTRAINT `ProposalTeamFK` FOREIGN KEY (`teamID`) REFERENCES `YDECTeam` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `YDECReport`
--
ALTER TABLE `YDECReport`
  ADD CONSTRAINT `reportMentorFK` FOREIGN KEY (`mentorID`) REFERENCES `YDECIndustry` (`mentorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reportTeamFK` FOREIGN KEY (`teamID`) REFERENCES `YDECTeam` (`teamID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
