-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2017 at 10:01 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
=======
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2017 at 06:01 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
<<<<<<< HEAD
-- Database: `kwarto_remaked`
=======
-- Database: `kwarto_db`
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
<<<<<<< HEAD
  `updatedBy` int(11) NOT NULL,
  `parent` int(11) DEFAULT NULL
=======
  `updatedBy` int(11) NOT NULL
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
<<<<<<< HEAD
=======
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `orderId` int(11) NOT NULL,
  `orderNumber` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `status` enum('placed','cancelled','fulfilled') NOT NULL,
<<<<<<< HEAD
  `fulfilled` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `paid` tinyint(1) NOT NULL DEFAULT '0',
=======
  `fulfilled` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `paid` float NOT NULL,
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498
  `paymentDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `paymentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `furnitureId` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(512) NOT NULL,
  `length` float NOT NULL,
  `width` float NOT NULL,
  `height` float NOT NULL,
  `rating` float NOT NULL,
  `price` float NOT NULL,
<<<<<<< HEAD
  `unit` char(5) NOT NULL,
=======
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `modelName` varchar(256) DEFAULT NULL,
  `discount` float NOT NULL,
  `categoryId` int(11) NOT NULL,
  `sellerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `furniture_image`
--

CREATE TABLE `furniture_image` (
  `furnitureImageId` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `furnitureId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `orderItemId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL,
  `totalPrice` float NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `furnitureId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentId` int(11) NOT NULL,
<<<<<<< HEAD
  `type` enum('cash','credit','free') NOT NULL,
=======
  `type` char(2) NOT NULL,
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewId` int(11) NOT NULL,
  `rating` float NOT NULL,
<<<<<<< HEAD
  `likes` int(11) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `body` varchar(512) DEFAULT NULL,
=======
  `title` varchar(256) DEFAULT NULL,
  `description` varchar(512) DEFAULT NULL,
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `furnitureId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sellerId` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(512) NOT NULL,
<<<<<<< HEAD
=======
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `userId` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
<<<<<<< HEAD
  `userType` enum('admin','customer','seller') NOT NULL DEFAULT 'customer',
  `userStatus` enum('inactive','active','banned') NOT NULL DEFAULT 'inactive',
  `gender` enum('Male','Female','Other') NOT NULL DEFAULT 'Male',
=======
  `userType` enum('admin','customer','manufacturer') NOT NULL,
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498
  `email` varchar(256) NOT NULL,
  `mobileNumber` varchar(16) DEFAULT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
<<<<<<< HEAD
  `addedBy` int(11) DEFAULT NULL,
=======
  `addedBy` int(11) NOT NULL,
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498
  `updatedBy` int(11) NOT NULL,
  `image` varchar(256) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
<<<<<<< HEAD
  ADD PRIMARY KEY (`categoryId`),
  ADD KEY `category_FK` (`parent`);
=======
  ADD PRIMARY KEY (`categoryId`);
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`),
<<<<<<< HEAD
  ADD KEY `customer_FK` (`userId`);
=======
  ADD KEY `userId` (`userId`);
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`orderId`),
<<<<<<< HEAD
  ADD KEY `customer_order_FK1` (`customerId`),
  ADD KEY `customer_order_FK2` (`paymentId`);
=======
  ADD UNIQUE KEY `orderNumber` (`orderNumber`),
  ADD KEY `customerId` (`customerId`),
  ADD KEY `paymentId` (`paymentId`);
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`furnitureId`),
<<<<<<< HEAD
  ADD KEY `furniture_FK1` (`categoryId`),
  ADD KEY `furniture_FK2` (`sellerId`);
=======
  ADD KEY `categoryId` (`categoryId`),
  ADD KEY `manufacturerId` (`sellerId`);
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498

--
-- Indexes for table `furniture_image`
--
ALTER TABLE `furniture_image`
  ADD PRIMARY KEY (`furnitureImageId`),
<<<<<<< HEAD
  ADD KEY `furniture_image_FK` (`furnitureId`);
=======
  ADD KEY `furnitureId` (`furnitureId`);
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`orderItemId`),
<<<<<<< HEAD
  ADD KEY `order_item_FK1` (`orderId`),
  ADD KEY `order_item_FK2` (`furnitureId`);
=======
  ADD KEY `orderId` (`orderId`),
  ADD KEY `furnitureId` (`furnitureId`);
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewId`),
<<<<<<< HEAD
  ADD KEY `review_FK1` (`furnitureId`),
  ADD KEY `review_FK2` (`customerId`);
=======
  ADD KEY `furnitureId` (`furnitureId`),
  ADD KEY `customerId` (`customerId`);
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sellerId`),
<<<<<<< HEAD
  ADD KEY `seller_FK` (`userId`);
=======
  ADD KEY `userId` (`userId`);
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
<<<<<<< HEAD
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `furnitureId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `furniture_image`
--
ALTER TABLE `furniture_image`
  MODIFY `furnitureImageId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `orderItemId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sellerId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
--
=======
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498
-- Constraints for dumped tables
--

--
<<<<<<< HEAD
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_FK` FOREIGN KEY (`parent`) REFERENCES `category` (`categoryId`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_FK` FOREIGN KEY (`userId`) REFERENCES `user_details` (`userId`);
=======
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user_details` (`userId`);
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
<<<<<<< HEAD
  ADD CONSTRAINT `customer_order_FK1` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`),
  ADD CONSTRAINT `customer_order_FK2` FOREIGN KEY (`paymentId`) REFERENCES `payment` (`paymentId`);
=======
  ADD CONSTRAINT `customer_order_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`),
  ADD CONSTRAINT `customer_order_ibfk_2` FOREIGN KEY (`paymentId`) REFERENCES `payment` (`paymentId`);
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498

--
-- Constraints for table `furniture`
--
ALTER TABLE `furniture`
<<<<<<< HEAD
  ADD CONSTRAINT `furniture_FK1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`),
  ADD CONSTRAINT `furniture_FK2` FOREIGN KEY (`sellerId`) REFERENCES `seller` (`sellerId`);
=======
  ADD CONSTRAINT `furniture_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`),
  ADD CONSTRAINT `furniture_ibfk_2` FOREIGN KEY (`sellerId`) REFERENCES `seller` (`sellerId`);
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498

--
-- Constraints for table `furniture_image`
--
ALTER TABLE `furniture_image`
<<<<<<< HEAD
  ADD CONSTRAINT `furniture_image_FK` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`);
=======
  ADD CONSTRAINT `furniture_image_ibfk_1` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`);
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
<<<<<<< HEAD
  ADD CONSTRAINT `order_item_FK1` FOREIGN KEY (`orderId`) REFERENCES `customer_order` (`orderId`),
  ADD CONSTRAINT `order_item_FK2` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`);
=======
  ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `customer_order` (`orderId`),
  ADD CONSTRAINT `order_item_ibfk_2` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`);
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498

--
-- Constraints for table `review`
--
ALTER TABLE `review`
<<<<<<< HEAD
  ADD CONSTRAINT `review_FK1` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`),
  ADD CONSTRAINT `review_FK2` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`);
=======
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`);
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
<<<<<<< HEAD
  ADD CONSTRAINT `seller_FK` FOREIGN KEY (`userId`) REFERENCES `user_details` (`userId`);
COMMIT;
=======
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user_details` (`userId`);
>>>>>>> 50f10e4084f61f503f6a5767986bc0b85d602498

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
