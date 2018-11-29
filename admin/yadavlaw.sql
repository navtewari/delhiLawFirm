-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 04:56 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yadavlaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `b2_pdf`
--

CREATE TABLE `b2_pdf` (
  `PDFID` int(11) NOT NULL,
  `URL_` varchar(500) NOT NULL,
  `PATH_` varchar(150) NOT NULL,
  `USERNAME_` varchar(50) NOT NULL,
  `STATUS_` tinyint(1) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `b2_pdf`
--

INSERT INTO `b2_pdf` (`PDFID`, `URL_`, `PATH_`, `USERNAME_`, `STATUS_`, `DATE_`) VALUES
(28, '', 'file_28.pdf', 'nitin', 1, '2017-08-03 17:19:33'),
(29, '', 'file_29.pdf', 'nitin', 1, '2017-08-03 17:30:20'),
(30, '', 'file_30.pdf', 'nitin', 1, '2017-08-03 17:30:37'),
(31, '', 'file_31.pdf', 'nitin', 1, '2017-08-03 17:31:31'),
(32, '', 'file_32.pdf', 'nitin', 1, '2017-08-03 17:33:15'),
(33, '', 'file_33.pdf', 'nitin', 1, '2017-08-03 17:35:03'),
(34, '', 'file_34.pdf', 'nitin', 1, '2017-08-03 17:35:09'),
(35, '', 'file_35.pdf', 'nitin', 1, '2017-08-03 17:52:06'),
(36, 'asdasd', 'file_36.pdf', 'nitin', 1, '2017-08-07 12:10:41'),
(37, 'asasd', 'file_37.pdf', 'nitin', 1, '2017-08-07 13:10:29'),
(38, 'asasd', 'file_38.pdf', 'nitin', 1, '2017-08-07 13:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `STATUS_` tinyint(1) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`USERNAME`, `PASSWORD`, `STATUS_`, `DATE_`) VALUES
('nitin', '123', 1, '2017-07-30 10:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `MID` int(11) NOT NULL,
  `NAME_` varchar(100) NOT NULL,
  `PHOTO_` varchar(100) NOT NULL,
  `EXPERT_AREA` varchar(250) NOT NULL,
  `EXPERIENCE` varchar(100) NOT NULL,
  `BRIEF_DESC_` text NOT NULL,
  `CONTACT_DETAIL` varchar(150) NOT NULL,
  `EMAIL_` varchar(150) NOT NULL,
  `CV_` varchar(200) NOT NULL,
  `USERNAME_` varchar(50) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS_` tinyint(1) NOT NULL,
  `PRIORITY_` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MID`, `NAME_`, `PHOTO_`, `EXPERT_AREA`, `EXPERIENCE`, `BRIEF_DESC_`, `CONTACT_DETAIL`, `EMAIL_`, `CV_`, `USERNAME_`, `DATE_`, `STATUS_`, `PRIORITY_`) VALUES
(1, 'Nitin Deepak', 'member_1.jpg', 'Algorithms', '12+ Yrs', 'Have a nice day', '9760020667', 'nitin.d12@gmail.com', 'cv_1.pdf', 'nitin', '2017-08-07 14:54:47', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsevents`
--

CREATE TABLE `newsevents` (
  `ID` int(11) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `NEWS` text NOT NULL,
  `PATH_ATTACH` varchar(150) NOT NULL,
  `FONTJI` varchar(250) NOT NULL,
  `DATE_` varchar(25) NOT NULL,
  `TIME_` varchar(25) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT '1',
  `USERNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b2_pdf`
--
ALTER TABLE `b2_pdf`
  ADD PRIMARY KEY (`PDFID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `newsevents`
--
ALTER TABLE `newsevents`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `STATUS` (`STATUS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b2_pdf`
--
ALTER TABLE `b2_pdf`
  MODIFY `PDFID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `newsevents`
--
ALTER TABLE `newsevents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
