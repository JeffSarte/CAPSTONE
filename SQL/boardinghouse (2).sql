-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2020 at 10:23 AM
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
-- Table structure for table `accreditation`
--

CREATE TABLE `accreditation` (
  `id` int(11) NOT NULL,
  `bhouse_id` int(11) NOT NULL,
  `accreditor_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accreditation`
--

INSERT INTO `accreditation` (`id`, `bhouse_id`, `accreditor_id`, `date`, `status`) VALUES
(18, 11, 5, '2020-03-13 00:00:00', 1),
(19, 10, 4, '2020-03-13 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `accreditedbhouse`
--

CREATE TABLE `accreditedbhouse` (
  `id` int(11) NOT NULL,
  `accreditor_id` int(11) NOT NULL,
  `bhouse_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accreditedbhouse`
--

INSERT INTO `accreditedbhouse` (`id`, `accreditor_id`, `bhouse_id`, `status`) VALUES
(1, 5, 5, 0),
(5, 6, 9, 1),
(6, 4, 10, 2),
(7, 4, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `accreditor`
--

CREATE TABLE `accreditor` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `number` varchar(15) NOT NULL,
  `School` varchar(50) NOT NULL,
  `DateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accreditor`
--

INSERT INTO `accreditor` (`id`, `email`, `number`, `School`, `DateCreated`, `UserName`, `Password`, `image`) VALUES
(4, 'unc@gmail.com', '123456789', 'University of Nueva Caceres', '2020-03-01 14:26:09', 'unc', 'unc', ''),
(5, 'ateneo@gmail.com', '2357632', 'Ateneo De Naga University', '2020-03-01 14:26:48', 'ateneo', 'ateneo', ''),
(6, 'ncf@gmail.com', '24358374389', 'Naga College Foundation', '2020-03-01 14:28:07', 'ncf', 'ncf', '');

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
(1, 'Jeff', 'istaran');

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
(1, 'jeff', 'c', 'sarte', 22, 'UNC', 's', 'jeff', 'sarte', 'M', 723868, 'sdjf@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `boardinghouse`
--

CREATE TABLE `boardinghouse` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Number` varchar(15) NOT NULL,
  `bhouse_id` int(11) NOT NULL,
  `Rent` int(3) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boardinghouse`
--

INSERT INTO `boardinghouse` (`id`, `Name`, `Address`, `Number`, `bhouse_id`, `Rent`, `image`) VALUES
(10, 'BoardingHouse Naga City', 'Naga City', '09286540314', 5, 2500, '1.jpg'),
(11, 'adrian', 'naga city', '232323', 4, 232, '1.jpg');

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

--
-- Dumping data for table `boardinghouseowner`
--

INSERT INTO `boardinghouseowner` (`id`, `FirstName`, `MiddleName`, `LastName`, `Age`, `Gender`, `DateCreated`, `UserName`, `Password`, `Number`) VALUES
(3, 'mark', 'c', 'robles', 24, 'm', '2020-03-01 14:28:56', 'mark12345', 'mark123456', 23232353435),
(4, 'jeff', 'c ', 'sarte', 22, 'm', '2020-03-01 14:29:21', 'jeff', 'sarte', 36728327432),
(5, 'jefferson', 'c', 'sarte', 24, 'M', '2020-03-08 13:55:02', 'jeff', 'jeff', 9286540314);

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

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `boardersid` int(11) NOT NULL,
  `bhouseid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `boardersid`, `bhouseid`) VALUES
(1, 1, 11),
(2, 1, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accreditation`
--
ALTER TABLE `accreditation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accreditedbhouse`
--
ALTER TABLE `accreditedbhouse`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accreditation`
--
ALTER TABLE `accreditation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `accreditedbhouse`
--
ALTER TABLE `accreditedbhouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `accreditor`
--
ALTER TABLE `accreditor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `boarder`
--
ALTER TABLE `boarder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `boardinghouse`
--
ALTER TABLE `boardinghouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `boardinghousecategory`
--
ALTER TABLE `boardinghousecategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `boardinghouseowner`
--
ALTER TABLE `boardinghouseowner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `boardinghousetype`
--
ALTER TABLE `boardinghousetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
