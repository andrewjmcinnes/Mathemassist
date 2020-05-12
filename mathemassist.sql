-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 03:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mathemassist`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `chapterId` int(2) NOT NULL,
  `chapterName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`chapterId`, `chapterName`) VALUES
(1, 'Whole Numbers and Decimals'),
(2, 'Sequences, Multiples and Factors'),
(3, 'Symmetry'),
(4, 'Fractions'),
(5, 'Angles'),
(6, 'Negative Numbers');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classId` int(4) NOT NULL,
  `teacherName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classId`, `teacherName`) VALUES
(1002, 'Dave P'),
(1003, 'Andrew M'),
(1006, 'Adam S');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `chapterId` int(2) NOT NULL,
  `userId` int(5) NOT NULL,
  `timeTaken` int(10) NOT NULL,
  `testScore` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`chapterId`, `userId`, `timeTaken`, `testScore`) VALUES
(1, 10005, 0, 0),
(1, 10007, 0, 0),
(1, 10015, 0, 0),
(2, 10004, 0, 0),
(2, 10005, 0, 0),
(3, 10005, 0, 0),
(3, 10007, 0, 0),
(5, 10004, 0, 0),
(5, 10005, 0, 0),
(6, 10005, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `userId` int(5) NOT NULL,
  `sizePref` int(2) NOT NULL,
  `spacingPref` varchar(3) NOT NULL,
  `fontPref` varchar(15) NOT NULL,
  `fcolourPref` varchar(7) NOT NULL,
  `bgcolourPref` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`userId`, `sizePref`, `spacingPref`, `fontPref`, `fcolourPref`, `bgcolourPref`) VALUES
(10000, 12, '0.1', 'arial', '', ''),
(10003, 16, '1.4', 'arial', '', ''),
(10004, 20, '0.6', 'ms gothic', '#ffffff', '#808080'),
(10005, 22, '2.2', 'tw cen mt', '#00c4c4', '#9e9e9e'),
(10007, 20, '1.1', 'arial', '#000000', '#ffffff'),
(10015, 21, '1.8', 'tw cen mt', '#ffffff', '#c0c0c0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(5) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(1) NOT NULL,
  `classId` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `email`, `password`, `role`, `classId`) VALUES
(10000, 'Dave P', 'dp@hotmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'T', 1002),
(10001, 'Mish C', 'mc@hotmail.com', 'a722c63db8ec8625af6cf71cb8c2d939', 'P', 1002),
(10002, 'Andrew M', 'am@msn.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'T', 1003),
(10003, 'Adam S', 'as@msn.com', '1a1dc91c907325c69271ddf0c944bc72', 'T', 1006),
(10004, 'Sam M', 'sm@msn.com', '1a1dc91c907325c69271ddf0c944bc72', 'P', 1002),
(10005, 'Emmet S', 'es@msn.com', '1a1dc91c907325c69271ddf0c944bc72', 'P', 1002),
(10007, 'hamish c', 'hamish@hotmail.co.uk', 'f9adc7aa2717b43e9a2271688e1278e9', 'P', 1003),
(10015, 'Andrew M', 'a.mcinnes@rgu.ac.uk', '5f4dcc3b5aa765d61d8327deb882cf99', 'P', 1002);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`chapterId`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classId`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`chapterId`,`userId`),
  ADD KEY `chapterId` (`chapterId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `userId_2` (`userId`);

--
-- Indexes for table `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `classId` (`classId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `classId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10016;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `performance`
--
ALTER TABLE `performance`
  ADD CONSTRAINT `performance_ibfk_2` FOREIGN KEY (`chapterId`) REFERENCES `chapter` (`chapterId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `performance_ibfk_3` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `preferences`
--
ALTER TABLE `preferences`
  ADD CONSTRAINT `preferences_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`classId`) REFERENCES `class` (`classId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
