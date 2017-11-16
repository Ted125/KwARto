-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2017 at 02:17 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interiar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_table`
--

CREATE TABLE `cart_table` (
  `cartID` int(12) NOT NULL,
  `totalPrice` float NOT NULL,
  `deliveryFee` float NOT NULL,
  `tax` float NOT NULL,
  `furniture` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `furniture_table`
--

CREATE TABLE `furniture_table` (
  `furnitureID` int(8) NOT NULL,
  `furnitureName` varchar(128) NOT NULL,
  `furnitureLength` float NOT NULL,
  `furnitureHeight` float NOT NULL,
  `furnitureWidth` float NOT NULL,
  `furnitureRating` int(2) NOT NULL,
  `furnitureType` enum('chair','table','bedroom','entertainment','storage','sets','home','office','kitchen','dining','other') NOT NULL,
  `furniturePrice` float UNSIGNED NOT NULL DEFAULT '0',
  `furnitureStock` int(10) NOT NULL,
  `furniturePicture` varchar(250) NOT NULL,
  `furnitureDescription` varchar(256) NOT NULL,
  `addedTimeStamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastUpdatedTimeStamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `manufacturerNo` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture_table`
--

INSERT INTO `furniture_table` (`furnitureID`, `furnitureName`, `furnitureLength`, `furnitureHeight`, `furnitureWidth`, `furnitureRating`, `furnitureType`, `furniturePrice`, `furnitureStock`, `furniturePicture`, `furnitureDescription`, `addedTimeStamp`, `lastUpdatedTimeStamp`, `manufacturerNo`) VALUES
(1, 'Dream Chair', 5, 10, 5, 4, '', 500, 3, '1.jpg', 'The chair of your dreams!', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, 'Dream Table', 10, 5, 10, 5, '', 700, 2, '4.jpg', 'The table of your dreams!', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_table`
--

CREATE TABLE `manufacturer_table` (
  `manufacturerID` int(8) NOT NULL,
  `manufacturerName` varchar(128) NOT NULL,
  `manufacturerDescription` varchar(256) NOT NULL,
  `manufacturerRepresentative` varchar(128) NOT NULL,
  `manufacturerContactNumber` varchar(8) NOT NULL,
  `manufacturerAddress` varchar(128) NOT NULL,
  `addedTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastAddedTimeStamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `reviewID` int(8) NOT NULL,
  `reviewComment` varchar(256) NOT NULL,
  `rating` int(2) NOT NULL,
  `addedTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedTimeStamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `userNo` int(8) NOT NULL,
  `furniture` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_table`
--

CREATE TABLE `transaction_table` (
  `transactionID` int(12) NOT NULL,
  `amountPaid` float NOT NULL,
  `orderedTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `paidTimeStamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deliveredTimeStamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `userNo` int(8) NOT NULL,
  `cartNo` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `userID` int(8) NOT NULL,
  `userName` varchar(128) NOT NULL,
  `isActivated` tinyint(1) NOT NULL DEFAULT '0',
  `userPassword` varchar(128) NOT NULL,
  `userType` enum('admin','manufacturer','customer') NOT NULL,
  `firstName` varchar(32) NOT NULL,
  `lastName` varchar(32) NOT NULL,
  `middleInitial` char(1) DEFAULT NULL,
  `userPic` varchar(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  `birthDate` date NOT NULL,
  `addedTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastAddedTimeStamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `addedBy` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`userID`, `userName`, `isActivated`, `userPassword`, `userType`, `firstName`, `lastName`, `middleInitial`, `userPic`, `email`, `birthDate`, `addedTimeStamp`, `lastAddedTimeStamp`, `addedBy`) VALUES
(1, 'Ted125', 1, '12345', 'customer', 'Christian Ted', 'Ochoa', 'R', '1.jpg', 'christianted.ochoa@gmail.com', '1997-11-18', '2017-11-12 08:05:53', '0000-00-00 00:00:00', NULL),
(8, 'Username', 0, 'witcher', 'customer', 'Geralt', 'Rivia', 'A', '1.jpg', 'geraltofrivia@gmail.com', '0000-00-00', '2017-11-15 11:08:42', '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_table`
--
ALTER TABLE `cart_table`
  ADD PRIMARY KEY (`cartID`),
  ADD UNIQUE KEY `cartID` (`cartID`),
  ADD KEY `CART_TABLE_FK` (`furniture`);

--
-- Indexes for table `furniture_table`
--
ALTER TABLE `furniture_table`
  ADD PRIMARY KEY (`furnitureID`),
  ADD UNIQUE KEY `furnitureID` (`furnitureID`),
  ADD KEY `FURNITURE_TABLE_FK` (`manufacturerNo`);

--
-- Indexes for table `manufacturer_table`
--
ALTER TABLE `manufacturer_table`
  ADD PRIMARY KEY (`manufacturerID`),
  ADD UNIQUE KEY `manufacturerID` (`manufacturerID`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`reviewID`),
  ADD UNIQUE KEY `reviewID` (`reviewID`),
  ADD KEY `REVIEW_TABLE_FK1` (`userNo`),
  ADD KEY `REVIEW_TABLE_FK2` (`furniture`);

--
-- Indexes for table `transaction_table`
--
ALTER TABLE `transaction_table`
  ADD PRIMARY KEY (`transactionID`),
  ADD UNIQUE KEY `transactionID` (`transactionID`),
  ADD KEY `TRANSACTION_TABLE_FK1` (`userNo`),
  ADD KEY `TRANSACTION_TABLE_FK2` (`cartNo`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userID` (`userID`),
  ADD KEY `USER_TABLE_FK` (`addedBy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_table`
--
ALTER TABLE `cart_table`
  MODIFY `cartID` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `furniture_table`
--
ALTER TABLE `furniture_table`
  MODIFY `furnitureID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `manufacturer_table`
--
ALTER TABLE `manufacturer_table`
  MODIFY `manufacturerID` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `reviewID` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaction_table`
--
ALTER TABLE `transaction_table`
  MODIFY `transactionID` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `userID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_table`
--
ALTER TABLE `cart_table`
  ADD CONSTRAINT `CART_TABLE_FK` FOREIGN KEY (`furniture`) REFERENCES `furniture_table` (`furnitureID`);

--
-- Constraints for table `furniture_table`
--
ALTER TABLE `furniture_table`
  ADD CONSTRAINT `FURNITURE_TABLE_FK` FOREIGN KEY (`manufacturerNo`) REFERENCES `manufacturer_table` (`manufacturerID`);

--
-- Constraints for table `review_table`
--
ALTER TABLE `review_table`
  ADD CONSTRAINT `REVIEW_TABLE_FK1` FOREIGN KEY (`userNo`) REFERENCES `user_table` (`userID`),
  ADD CONSTRAINT `REVIEW_TABLE_FK2` FOREIGN KEY (`furniture`) REFERENCES `furniture_table` (`furnitureID`);

--
-- Constraints for table `transaction_table`
--
ALTER TABLE `transaction_table`
  ADD CONSTRAINT `TRANSACTION_TABLE_FK1` FOREIGN KEY (`userNo`) REFERENCES `user_table` (`userID`),
  ADD CONSTRAINT `TRANSACTION_TABLE_FK2` FOREIGN KEY (`cartNo`) REFERENCES `cart_table` (`cartID`);

--
-- Constraints for table `user_table`
--
ALTER TABLE `user_table`
  ADD CONSTRAINT `USER_TABLE_FK` FOREIGN KEY (`addedBy`) REFERENCES `user_table` (`userID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
