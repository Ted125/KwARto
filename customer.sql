-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2018 at 07:31 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kwarto_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(11) NOT NULL,
  `firstName` varchar(256) NOT NULL,
  `middleName` varchar(256) DEFAULT NULL,
  `lastName` varchar(256) NOT NULL,
  `birthdate` date NOT NULL,
  `shippingContactPerson` varchar(256) DEFAULT NULL,
  `shippingAddress` varchar(512) DEFAULT NULL,
  `shippingLocationId` int(11) DEFAULT NULL,
  `shippingContactNumber` varchar(16) DEFAULT NULL,
  `billingContactPerson` varchar(256) DEFAULT NULL,
  `billingAddress` varchar(512) DEFAULT NULL,
  `billingLocationId` int(11) DEFAULT NULL,
  `billingContactNumber` varchar(16) DEFAULT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `firstName`, `middleName`, `lastName`, `birthdate`, `shippingContactPerson`, `shippingAddress`, `shippingLocationId`, `shippingContactNumber`, `billingContactPerson`, `billingAddress`, `billingLocationId`, `billingContactNumber`, `userId`) VALUES
(1, 'Christian Ted', 'Reyes', 'Ochoa', '1997-11-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(2, 'kobe', 'bean', 'bryant', '1978-08-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4),
(3, 'Julie Noreen', 'Malazarte', 'Sales', '1998-07-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5),
(4, 'Geralt', 'Of', 'Rivia', '2017-12-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6),
(5, 'First', 'Middle', 'Last', '2017-12-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7),
(6, 'Punished', 'Venom', 'Snake', '2017-12-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8),
(7, 'Terrence', 'Bill', 'Romeo', '2018-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`),
  ADD KEY `customer_FK` (`userId`),
  ADD KEY `shippingLocationId` (`shippingLocationId`),
  ADD KEY `billingLocationId` (`billingLocationId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_FK_1` FOREIGN KEY (`userId`) REFERENCES `user_details` (`userId`),
  ADD CONSTRAINT `customer_FK_2` FOREIGN KEY (`shippingLocationId`) REFERENCES `location` (`locationId`),
  ADD CONSTRAINT `customer_FK_3` FOREIGN KEY (`billingLocationId`) REFERENCES `location` (`locationId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
