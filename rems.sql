-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 02:49 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(20) NOT NULL,
  `adminEmail` varchar(30) NOT NULL,
  `adminPassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `adminEmail`, `adminPassword`) VALUES
(1, 'mudassir', 'mudassir@gmail.com', '89498fc0'),
(3, 'shams', 'shams@gmail.com', '23456');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agentID` int(11) NOT NULL,
  `agentName` varchar(30) NOT NULL,
  `agentPhone` varchar(30) NOT NULL,
  `agentAddress` varchar(50) NOT NULL,
  `agentArea` varchar(50) NOT NULL,
  `adminId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agentID`, `agentName`, `agentPhone`, `agentAddress`, `agentArea`, `adminId`) VALUES
(13, 'Hafiz Ali Raza', '03405963463', 'Ali pur, Multan', 'Multan', 3),
(14, 'Zain ul Abideen', '01234567893', 'Iqbal Road, Lahore', 'Lahore', 3),
(15, 'Kashif Usman', '01478523697', '7th Avenue, Mandi baha ul din', 'Mandi', 3),
(16, 'Badar Masood', '01324567893', 'Tramari, Rawalpind', 'Rawalpindi', 3),
(18, 'Kashan Abbasi', '01236547896', 'Royal Avenue ,Islamabad', 'Islamabad', 3),
(19, 'Saif Raja', '02587413697', 'Gulyana, Gujar Khan', 'Gujar Khan', 3),
(20, 'suhaib', '03324847328', 'bakar gala', 'wazirabad', 3),
(21, 'Sibghat Ullah', '25874123698', 'Thandiyani, Abbotabad', 'Abbotabad', 1),
(22, 'Muddasar Ahmad', '03215648963', 'Wazir Abad, Karachi', 'Karachi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `favId` int(30) NOT NULL,
  `userId` int(30) NOT NULL,
  `propertyId` int(30) NOT NULL,
  `ownerId` int(20) NOT NULL,
  `agentId` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`favId`, `userId`, `propertyId`, `ownerId`, `agentId`) VALUES
(13, 2, 8, 6, 15),
(12, 2, 9, 6, 15),
(11, 8, 9, 6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `Feedback_Id` int(20) NOT NULL,
  `userId` int(30) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`Feedback_Id`, `userId`, `Message`) VALUES
(4, 2, 'Nice work dude.'),
(7, 4, 'A very user friendly system'),
(8, 8, 'A very impressive system ');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `propertyId` int(11) NOT NULL,
  `userId` int(30) NOT NULL,
  `agentId` varchar(20) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`propertyId`, `userId`, `agentId`, `address`, `city`, `type`, `description`) VALUES
(1, 4, '18', 'Royal Avenue ,Islamabad', 'Islamabad', 'selling', '8 BRs, 5 WRs, Car Porch, Garden, 2 Floors '),
(3, 5, '18', 'Chatta Bukhtawar, Islamabad', 'Islamabad', 'rental', 'Commercial area'),
(7, 5, '16', 'Bakra Mandi,Rawalpindi', 'Rawalpindi', 'selling', '3 BRs, 1 WR, Family Area'),
(8, 6, '15', 'Soofi pura, Mandi', 'Mandi', 'selling', '9 BRs, 5 WR, Family Area'),
(9, 6, '15', 'Islam Nagar, Mandi', 'Mandi', 'rental', '3 BRs, 1 WR, Family Area'),
(11, 7, '19', 'Barki Badhal, Gujar Khan', 'Gujar Khan', 'rental', 'Commercial Area'),
(12, 8, '22', 'Chandini Chowk, karachi', 'Karachi', 'selling', 'Commercial, Family Area'),
(13, 8, '18', 'Ali pur, Islamabad', 'Islamabad', 'rental', '3 BRs, 1 WR, Commercial Area');

-- --------------------------------------------------------

--
-- Table structure for table `rentalproperty`
--

CREATE TABLE `rentalproperty` (
  `propertyId` int(20) NOT NULL,
  `type` enum('Flat','Single Room','Guest House') NOT NULL,
  `rent` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentalproperty`
--

INSERT INTO `rentalproperty` (`propertyId`, `type`, `rent`) VALUES
(3, 'Single Room', '15000'),
(9, 'Guest House', '26000'),
(11, 'Single Room', '10000'),
(13, 'Flat', '25000');

-- --------------------------------------------------------

--
-- Table structure for table `sellingproperty`
--

CREATE TABLE `sellingproperty` (
  `propertyId` int(20) NOT NULL,
  `type` enum('Plot','House') NOT NULL,
  `area` varchar(20) NOT NULL,
  `Price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellingproperty`
--

INSERT INTO `sellingproperty` (`propertyId`, `type`, `area`, `Price`) VALUES
(1, 'House', '25x25', '1500000'),
(7, 'House', '25x25', '1500000'),
(8, 'Plot', '45x45', '8100000'),
(12, 'Plot', '25x32', '18000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `UName` varchar(30) NOT NULL,
  `UPhone` varchar(60) NOT NULL,
  `UEmail` varchar(30) NOT NULL,
  `UPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `UName`, `UPhone`, `UEmail`, `UPassword`) VALUES
(2, 'kashi', '54587', 'kashi@gmail.com', 'kashi'),
(4, 'Tayyab Ali', '14785236987', 'tayyab@gmail.com', '123123'),
(5, 'Adnan Ali', '12345698723', 'adnan@gmail.com', '456456'),
(6, 'Aamir Ali', '12345678965', 'aamir@gmail.com', '789789'),
(7, 'Yasir Ali', '12345685236', 'yasir@gmail.com', '147147'),
(8, 'Muhammad Saqlain', '032145678963', 'saqlain@gmail.com', '0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`agentID`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`favId`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`Feedback_Id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`propertyId`),
  ADD UNIQUE KEY `propertyId` (`propertyId`);

--
-- Indexes for table `rentalproperty`
--
ALTER TABLE `rentalproperty`
  ADD UNIQUE KEY `propertyId` (`propertyId`);

--
-- Indexes for table `sellingproperty`
--
ALTER TABLE `sellingproperty`
  ADD UNIQUE KEY `propertyId` (`propertyId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `agentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `favId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `Feedback_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `propertyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
