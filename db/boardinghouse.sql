-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2020 at 04:08 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boardinghouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `accreditor`
--

CREATE TABLE `accreditor` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `MiddleName` varchar(15) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `School` varchar(50) NOT NULL,
  `DateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accreditor`
--

INSERT INTO `accreditor` (`id`, `FirstName`, `MiddleName`, `LastName`, `School`, `DateCreated`, `UserName`, `Password`) VALUES
(2, 'jeff', 'sarte', 'c', 'UNC', '2020-02-27 13:56:53', 'accreditor', 'UNc'),
(3, 'dfg', 'dfg', 'sd', 'dfg', '2020-02-28 02:00:23', 'dfgd', 'dfg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'istaran', 'istaranko');

-- --------------------------------------------------------

--
-- Table structure for table `boarder`
--

CREATE TABLE `boarder` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `MiddleName` varchar(15) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `Age` int(11) NOT NULL,
  `School` varchar(30) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Number` int(15) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boarder`
--

INSERT INTO `boarder` (`id`, `FirstName`, `MiddleName`, `LastName`, `Age`, `School`, `Status`, `UserName`, `Password`, `Gender`, `Number`, `Email`) VALUES
(8, 'jefferson', 'c', 'sarte ', 24, 'UNC', 'S', 'saitama', 'sensei', 'M', 23, 'sds'),
(9, 'jefferson', 'sarte', 'jr', 23, 'NCF', 's', 'sds', 'fdg', 'd', 232, 'sad'),
(10, 'nitro', 'sd', 'sdfs', 23, 'sdfd', 's', 'sds', 'sfd', 'sd', 232, 'sfd');

-- --------------------------------------------------------

--
-- Table structure for table `boardinghouse`
--

CREATE TABLE `boardinghouse` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boardinghouse`
--

INSERT INTO `boardinghouse` (`id`, `Name`, `Description`) VALUES
(6, 'Jeff', 'sds'),
(7, 'sample', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `boardinghousecategory`
--

CREATE TABLE `boardinghousecategory` (
  `id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boardinghousecategory`
--

INSERT INTO `boardinghousecategory` (`id`, `Name`) VALUES
(1, 'Girls'),
(2, 'Boys'),
(3, 'Girls And Boys');

-- --------------------------------------------------------

--
-- Table structure for table `boardinghouseowner`
--

CREATE TABLE `boardinghouseowner` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `MiddleName` varchar(15) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `Age` int(2) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Number` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boardinghousetype`
--

CREATE TABLE `boardinghousetype` (
  `id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boardinghousetype`
--

INSERT INTO `boardinghousetype` (`id`, `Name`) VALUES
(1, 'Bed Spacer'),
(2, 'Single Room');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accreditor`
--
ALTER TABLE `accreditor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boarder`
--
ALTER TABLE `boarder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boardinghouse`
--
ALTER TABLE `boardinghouse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boardinghousecategory`
--
ALTER TABLE `boardinghousecategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boardinghouseowner`
--
ALTER TABLE `boardinghouseowner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boardinghousetype`
--
ALTER TABLE `boardinghousetype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accreditor`
--
ALTER TABLE `accreditor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `boarder`
--
ALTER TABLE `boarder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `boardinghouse`
--
ALTER TABLE `boardinghouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `boardinghousecategory`
--
ALTER TABLE `boardinghousecategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `boardinghouseowner`
--
ALTER TABLE `boardinghouseowner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `boardinghousetype`
--
ALTER TABLE `boardinghousetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
