-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 02:44 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

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
-- Table structure for table `1milliontraders`
--

CREATE TABLE `1milliontraders` (
  `userID` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(250) NOT NULL,
  `studentID` int(8) DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `faculty` varchar(100) DEFAULT NULL,
  `classification` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `programme` varchar(100) DEFAULT NULL,
  `codeCount` int(8) NOT NULL,
  `studentIDImg` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `membershipfees`
--

CREATE TABLE `membershipfees` (
  `feeID` int(11) NOT NULL,
  `transID` varchar(11) NOT NULL,
  `feeStatus` varchar(25) NOT NULL,
  `memberType` varchar(10) NOT NULL,
  `userID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE `referral` (
  `userID` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referral`
--

INSERT INTO `referral` (`userID`, `code`) VALUES
('014311', '152515'),
('020144', '253135'),
('020522', '020144'),
('041515', '253135'),
('134331', '212022'),
('242420', '152251'),
('244301', '253135'),
('421010', '134331'),
('441531', '130020'),
('455555', '220102'),
('514503', '181666'),
('524401', '253135');

-- --------------------------------------------------------

--
-- Table structure for table `ydecacademicadvisor`
--

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

CREATE TABLE `ydecfinalreportresult` (
  `resultID` int(11) NOT NULL,
  `criteria` varchar(255) NOT NULL,
  `reportID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecfinancialresult`
--

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

CREATE TABLE `ydecparticipant` (
  `participantID` int(11) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `teamID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecpitchingvideo`
--

CREATE TABLE `ydecpitchingvideo` (
  `videoID` int(11) NOT NULL,
  `link` int(11) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecpreliminaryresult`
--

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

CREATE TABLE `ydecproposal` (
  `proposalID` int(11) NOT NULL,
  `documentName` varchar(50) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ydecreport`
--

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
-- Indexes for table `referral`
--
ALTER TABLE `referral`
  ADD PRIMARY KEY (`userID`);

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
-- Constraints for table `ydecparticipant`
--
ALTER TABLE `ydecparticipant`
  ADD CONSTRAINT `participantTeamFK` FOREIGN KEY (`teamID`) REFERENCES `ydecteam` (`teamID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `participantUserFK` FOREIGN KEY (`userID`) REFERENCES `1milliontraders` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
