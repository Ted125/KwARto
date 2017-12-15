-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 03:57 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `parent` int(11) DEFAULT NULL
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
  `shippingAddress` varchar(256) DEFAULT NULL,
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
  `fulfilled` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `paid` tinyint(1) NOT NULL DEFAULT '0',
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
  `unit` char(5) NOT NULL,
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
-- Table structure for table `furniture_stock`
--

CREATE TABLE `furniture_stock` (
  `stockId` int(11) NOT NULL,
  `status` enum('available','on_hold','sold') DEFAULT 'available',
  `furnitureId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locationId` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `type` enum('city','barangay') NOT NULL DEFAULT 'city',
  `parentLocationId` int(11) DEFAULT NULL
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
  `type` enum('cash','credit','free') NOT NULL,
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
  `likes` int(11) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `body` varchar(512) DEFAULT NULL,
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
  `userType` enum('admin','customer','seller') NOT NULL DEFAULT 'customer',
  `userStatus` enum('inactive','active','banned') NOT NULL DEFAULT 'inactive',
  `gender` enum('Male','Female','Other') NOT NULL DEFAULT 'Male',
  `email` varchar(256) NOT NULL,
  `mobileNumber` varchar(16) DEFAULT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `locationId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`),
  ADD KEY `category_FK` (`parent`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`),
  ADD KEY `customer_FK` (`userId`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `customer_order_FK1` (`customerId`),
  ADD KEY `customer_order_FK2` (`paymentId`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`furnitureId`),
  ADD KEY `furniture_FK1` (`categoryId`),
  ADD KEY `furniture_FK2` (`sellerId`);

--
-- Indexes for table `furniture_image`
--
ALTER TABLE `furniture_image`
  ADD PRIMARY KEY (`furnitureImageId`),
  ADD KEY `furniture_image_FK` (`furnitureId`);

--
-- Indexes for table `furniture_stock`
--
ALTER TABLE `furniture_stock`
  ADD PRIMARY KEY (`stockId`),
  ADD UNIQUE KEY `stockId` (`stockId`),
  ADD KEY `furniture_stock_FK` (`furnitureId`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationId`),
  ADD UNIQUE KEY `locationId` (`locationId`),
  ADD KEY `location_FK` (`parentLocationId`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`orderItemId`),
  ADD KEY `order_item_FK1` (`orderId`),
  ADD KEY `order_item_FK2` (`furnitureId`);

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
  ADD KEY `review_FK1` (`furnitureId`),
  ADD KEY `review_FK2` (`customerId`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sellerId`),
  ADD KEY `seller_FK` (`userId`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `user_details_FK` (`locationId`);

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
-- AUTO_INCREMENT for table `furniture_stock`
--
ALTER TABLE `furniture_stock`
  MODIFY `stockId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationId` int(11) NOT NULL AUTO_INCREMENT;
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
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_FK` FOREIGN KEY (`parent`) REFERENCES `category` (`categoryId`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_FK` FOREIGN KEY (`userId`) REFERENCES `user_details` (`userId`);

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `customer_order_FK1` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`),
  ADD CONSTRAINT `customer_order_FK2` FOREIGN KEY (`paymentId`) REFERENCES `payment` (`paymentId`);

--
-- Constraints for table `furniture`
--
ALTER TABLE `furniture`
  ADD CONSTRAINT `furniture_FK1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`),
  ADD CONSTRAINT `furniture_FK2` FOREIGN KEY (`sellerId`) REFERENCES `seller` (`sellerId`);

--
-- Constraints for table `furniture_image`
--
ALTER TABLE `furniture_image`
  ADD CONSTRAINT `furniture_image_FK` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`);

--
-- Constraints for table `furniture_stock`
--
ALTER TABLE `furniture_stock`
  ADD CONSTRAINT `furniture_stock_FK` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_FK` FOREIGN KEY (`parentLocationId`) REFERENCES `location` (`locationId`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_FK1` FOREIGN KEY (`orderId`) REFERENCES `customer_order` (`orderId`),
  ADD CONSTRAINT `order_item_FK2` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_FK1` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`),
  ADD CONSTRAINT `review_FK2` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`);

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_FK` FOREIGN KEY (`userId`) REFERENCES `user_details` (`userId`);

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_FK` FOREIGN KEY (`locationId`) REFERENCES `location` (`locationId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
