-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 05:37 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `name`, `dateAdded`, `dateUpdated`, `addedBy`, `updatedBy`, `parent`) VALUES
(1, 'Bedroom Furniture', '2017-12-25 14:27:36', '2017-12-25 14:27:36', 1, 1, NULL),
(2, 'Living Room Furniture', '2017-12-25 14:27:36', '2017-12-25 14:27:36', 1, 1, NULL),
(3, 'Kitchen & Dining Furniture', '2017-12-25 14:28:02', '2017-12-25 14:28:02', 1, 1, NULL),
(4, 'Kids Furniture', '2017-12-25 14:28:02', '2017-12-25 14:28:02', 1, 1, NULL),
(5, 'Home Office Furniture', '2017-12-25 14:28:28', '2017-12-25 14:28:28', 1, 1, NULL),
(6, 'Hallway & Entry Furniture', '2017-12-25 14:28:28', '2017-12-25 14:28:28', 1, 1, NULL),
(7, 'Gaming Furniture', '2017-12-25 14:28:55', '2017-12-25 14:28:55', 1, 1, NULL),
(8, 'Outdoor Furniture', '2017-12-25 14:28:55', '2017-12-25 14:28:55', 1, 1, NULL),
(9, 'Furniture Protectors & Parts', '2017-12-25 14:29:14', '2017-12-25 14:29:31', 1, 1, NULL),
(10, 'Beds', '2017-12-25 14:30:29', '2017-12-25 14:30:29', 1, 1, 1),
(11, 'Bedside Tables', '2017-12-25 14:30:29', '2017-12-25 14:30:29', 1, 1, 1),
(12, 'Dressers & Drawers', '2017-12-25 14:30:52', '2017-12-25 14:30:52', 1, 1, 1),
(13, 'Wardrobes', '2017-12-25 14:30:52', '2017-12-25 14:30:52', 1, 1, 1),
(14, 'Bed Ends', '2017-12-25 14:31:19', '2017-12-25 14:31:19', 1, 1, 1),
(15, 'Bedroom Ensembles & Sets', '2017-12-25 14:31:19', '2017-12-25 14:31:19', 1, 1, 1),
(16, 'Bed Headboards', '2017-12-25 14:31:41', '2017-12-25 14:31:41', 1, 1, 1),
(17, 'Mattresses', '2017-12-25 14:31:41', '2017-12-25 14:31:41', 1, 1, 1),
(18, 'Bedroom Shelving', '2017-12-25 14:32:04', '2017-12-25 14:32:04', 1, 1, 1),
(19, 'Chairs', '2017-12-25 14:38:32', '2017-12-25 14:38:32', 1, 1, 2),
(20, 'Beanbag', '2017-12-25 14:38:32', '2017-12-25 14:38:32', 1, 1, 2),
(21, 'Massage Chairs', '2017-12-25 14:38:32', '2017-12-25 14:38:32', 1, 1, 2),
(22, 'Sofas', '2017-12-25 14:38:32', '2017-12-25 14:38:32', 1, 1, 2),
(23, 'Futons & Daybeds', '2017-12-25 14:38:32', '2017-12-25 14:38:32', 1, 1, 2),
(24, 'Coffee Tables', '2017-12-25 14:38:32', '2017-12-25 14:38:32', 1, 1, 2),
(25, 'Side Tables', '2017-12-25 14:38:32', '2017-12-25 14:38:32', 1, 1, 2),
(26, 'Console Tables', '2017-12-25 14:38:32', '2017-12-25 14:38:32', 1, 1, 2),
(27, 'Media & TV Storage', '2017-12-25 14:38:32', '2017-12-25 14:38:32', 1, 1, 2),
(28, 'Bookcases & Shelving', '2017-12-25 14:38:32', '2017-12-25 14:38:32', 1, 1, 2),
(29, 'Ottomans', '2017-12-25 14:38:32', '2017-12-25 14:38:32', 1, 1, 2),
(30, 'Sofa Covers & Slips', '2017-12-25 14:38:32', '2017-12-25 14:38:32', 1, 1, 2),
(31, 'Dining Tables', '2017-12-25 14:41:19', '2017-12-25 14:41:19', 1, 1, 3),
(32, 'Bar Tables & Sets', '2017-12-25 14:41:19', '2017-12-25 14:41:19', 1, 1, 3),
(33, 'Bar Stools', '2017-12-25 14:41:19', '2017-12-25 14:41:19', 1, 1, 3),
(34, 'Wine & Drinks Cabinets', '2017-12-25 14:41:19', '2017-12-25 14:41:19', 1, 1, 3),
(35, 'Dining Chairs', '2017-12-25 14:41:19', '2017-12-25 14:41:19', 1, 1, 3),
(36, 'Dining Room Sets', '2017-12-25 14:41:19', '2017-12-25 14:41:19', 1, 1, 3),
(37, 'Sideboards & Buffets', '2017-12-25 14:41:19', '2017-12-25 14:41:19', 1, 1, 3),
(38, 'Kitchen Islands', '2017-12-25 14:41:19', '2017-12-25 14:41:19', 1, 1, 3),
(39, 'Kids Tables & Sets', '2017-12-25 14:44:03', '2017-12-25 14:44:03', 1, 1, 4),
(40, 'Kids Chairs', '2017-12-25 14:44:03', '2017-12-25 14:44:03', 1, 1, 4),
(41, 'Kids Bookcases & Shelving', '2017-12-25 14:44:03', '2017-12-25 14:44:03', 1, 1, 4),
(42, 'Toy Boxes & Organisers', '2017-12-25 14:44:03', '2017-12-25 14:44:03', 1, 1, 4),
(43, 'Kids Wardrobes', '2017-12-25 14:44:03', '2017-12-25 14:44:03', 1, 1, 4),
(44, 'Kids Beds', '2017-12-25 14:44:03', '2017-12-25 14:44:03', 1, 1, 4),
(45, 'Nursery Furniture', '2017-12-25 14:44:03', '2017-12-25 14:44:03', 1, 1, 4),
(46, 'Home Office Desks', '2017-12-25 14:46:23', '2017-12-25 14:46:23', 1, 1, 5),
(47, 'Home Office Chairs', '2017-12-25 14:46:23', '2017-12-25 14:46:23', 1, 1, 5),
(48, 'Office Bookcases & Shelving', '2017-12-25 14:46:23', '2017-12-25 14:46:23', 1, 1, 5),
(49, 'Ergonomic Accessories', '2017-12-25 14:46:23', '2017-12-25 14:46:23', 1, 1, 5),
(50, 'Filing Cabinets & Stands', '2017-12-25 14:46:23', '2017-12-25 14:46:23', 1, 1, 5),
(51, 'Safes', '2017-12-25 14:46:23', '2017-12-25 14:46:23', 1, 1, 5),
(52, 'Office Sets', '2017-12-25 14:46:23', '2017-12-25 14:46:23', 1, 1, 5),
(53, 'Coat Racks & Umbrella Stands', '2017-12-25 14:48:51', '2017-12-25 14:48:51', 1, 1, 6),
(54, 'Hall Stands & Shelving', '2017-12-25 14:48:51', '2017-12-25 14:48:51', 1, 1, 6),
(55, 'Storage Benches', '2017-12-25 14:48:51', '2017-12-25 14:48:51', 1, 1, 6),
(56, 'Shoe Storage', '2017-12-25 14:48:51', '2017-12-25 14:48:51', 1, 1, 6),
(57, 'Gaming Tables', '2017-12-25 14:49:42', '2017-12-25 14:49:42', 1, 1, 7),
(58, 'Gaming Chairs', '2017-12-25 14:49:42', '2017-12-25 14:49:42', 1, 1, 7),
(59, 'Outdoor Tables', '2017-12-25 14:51:31', '2017-12-25 14:51:31', 1, 1, 8),
(60, 'Outdoor Seating', '2017-12-25 14:51:31', '2017-12-25 14:51:31', 1, 1, 8),
(61, 'Outdoor Sets', '2017-12-25 14:51:31', '2017-12-25 14:51:31', 1, 1, 8),
(62, 'Shades & Awnings', '2017-12-25 14:51:31', '2017-12-25 14:51:31', 1, 1, 8);

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
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `firstName`, `middleName`, `lastName`, `birthdate`, `userId`) VALUES
(1, 'Christian Ted', 'Reyes', 'Ochoa', '1997-11-18', 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `orderId` int(11) NOT NULL,
  `orderNumber` int(11) NOT NULL,
  `deliveryTime` time NOT NULL,
  `shippingContactPerson` varchar(256) DEFAULT NULL,
  `shippingAddress` varchar(512) DEFAULT NULL,
  `shippingLocationId` int(11) DEFAULT NULL,
  `shippingContactNumber` int(16) DEFAULT NULL,
  `billingContactPerson` varchar(256) DEFAULT NULL,
  `billingAddress` varchar(512) DEFAULT NULL,
  `billingLocationId` int(11) DEFAULT NULL,
  `billingContactNumber` int(16) DEFAULT NULL,
  `discount` float NOT NULL,
  `tax` float NOT NULL,
  `cancelled` tinyint(1) DEFAULT NULL,
  `paid` tinyint(1) DEFAULT NULL,
  `payment_date` timestamp NULL DEFAULT NULL,
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
  `warrantyId` int(11) DEFAULT NULL,
  `model` varchar(64) DEFAULT NULL,
  `color` varchar(24) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `weightUnit` enum('oz','g','kg') DEFAULT NULL,
  `length` float NOT NULL,
  `width` float NOT NULL,
  `height` float NOT NULL,
  `sizeUnit` enum('m','cm','') NOT NULL,
  `price` float NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `modelName` varchar(256) DEFAULT NULL,
  `discount` float NOT NULL,
  `categoryId` int(11) NOT NULL,
  `sellerId` int(11) NOT NULL,
  `versionOf` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`furnitureId`, `name`, `description`, `warrantyId`, `model`, `color`, `weight`, `weightUnit`, `length`, `width`, `height`, `sizeUnit`, `price`, `dateAdded`, `dateUpdated`, `addedBy`, `updatedBy`, `modelName`, `discount`, `categoryId`, `sellerId`, `versionOf`) VALUES
(1, 'Dream Table', 'This table is the dream of our ancestors!', 1, 'DTBL-01', 'brown', 0.5, 'kg', 5, 5, 4, 'm', 2500, '2017-12-26 01:08:51', '2017-12-27 11:31:32', 2, 2, 'dream table', 5, 25, 1, NULL);

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

--
-- Dumping data for table `furniture_image`
--

INSERT INTO `furniture_image` (`furnitureImageId`, `image`, `dateAdded`, `dateUpdated`, `addedBy`, `updatedBy`, `furnitureId`) VALUES
(1, '4.jpg', '2017-12-26 01:16:33', '2017-12-26 02:07:07', 2, 2, 1),
(2, '5.jpg', '2017-12-26 01:16:33', '2017-12-26 10:36:50', 2, 2, 1),
(3, '6.jpeg', '2017-12-26 01:16:33', '2017-12-26 02:07:18', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `furniture_package`
--

CREATE TABLE `furniture_package` (
  `packId` int(11) NOT NULL,
  `item` varchar(512) NOT NULL,
  `furnitureId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture_package`
--

INSERT INTO `furniture_package` (`packId`, `item`, `furnitureId`) VALUES
(4, '1 pc. table surface', 1),
(5, '4 pc. table legs', 1),
(6, '1 pc. user manual', 1);

-- --------------------------------------------------------

--
-- Table structure for table `furniture_specification`
--

CREATE TABLE `furniture_specification` (
  `specId` int(11) NOT NULL,
  `specification` varchar(512) NOT NULL,
  `furnitureId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture_specification`
--

INSERT INTO `furniture_specification` (`specId`, `specification`, `furnitureId`) VALUES
(1, 'Table can be folded.', 1),
(2, 'Table is stain-free.', 1),
(3, 'Table height can be adjusted.', 1),
(4, 'Table is child-friendly.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `furniture_stock`
--

CREATE TABLE `furniture_stock` (
  `stockId` int(11) NOT NULL,
  `status` enum('available','on_hold','sold') DEFAULT 'available',
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `furnitureId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture_stock`
--

INSERT INTO `furniture_stock` (`stockId`, `status`, `dateAdded`, `dateUpdated`, `addedBy`, `updatedBy`, `furnitureId`) VALUES
(1, 'available', '2017-12-26 01:17:41', '2017-12-26 02:07:31', 2, 2, 1),
(2, 'available', '2017-12-26 01:17:41', '2017-12-26 02:07:36', 2, 2, 1),
(3, 'sold', '2017-12-26 01:17:41', '2017-12-26 05:38:24', 2, 2, 1),
(4, 'available', '2017-12-26 01:17:41', '2017-12-26 02:07:46', 2, 2, 1),
(5, 'available', '2017-12-26 01:17:41', '2017-12-26 02:07:51', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locationId` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `type` enum('province','city','barangay') NOT NULL DEFAULT 'city',
  `parentLocationId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locationId`, `name`, `type`, `parentLocationId`) VALUES
(1, 'Cebu', 'province', NULL),
(2, 'Alcantara', 'city', 1),
(3, 'Alcoy', 'city', 1),
(4, 'Alegria', 'city', 1),
(5, 'Aloguinsan', 'city', 1),
(6, 'Argao', 'city', 1),
(7, 'Asturias', 'city', 1),
(8, 'Badian', 'city', 1),
(9, 'Balamban', 'city', 1),
(10, 'Barili', 'city', 1),
(11, 'Bogo City', 'city', 1),
(12, 'Boljoon', 'city', 1),
(13, 'Carcar City', 'city', 1),
(14, 'Carmen', 'city', 1),
(15, 'Catmon', 'city', 1),
(16, 'Cebu City', 'city', 1),
(17, 'Compostela', 'city', 1),
(18, 'Consolacion', 'city', 1),
(19, 'Cordoba', 'city', 1),
(20, 'Daanbantayan', 'city', 1),
(21, 'Dalaguete', 'city', 1),
(22, 'Danao City', 'city', 1),
(23, 'Dumanjug', 'city', 1),
(24, 'Ginatilan', 'city', 1),
(25, 'Lapu-lapu City', 'city', 1),
(26, 'Liloan', 'city', 1),
(27, 'Madridejos', 'city', 1),
(28, 'Malabuyoc', 'city', 1),
(29, 'Mandaue City', 'city', 1),
(30, 'Medellin', 'city', 1),
(31, 'Minglanilla', 'city', 1),
(32, 'Moalboal', 'city', 1),
(33, 'Naga City', 'city', 1),
(34, 'Oslob', 'city', 1),
(35, 'Pilar', 'city', 1),
(36, 'Pinamungahan', 'city', 1),
(37, 'Poro', 'city', 1),
(38, 'Ronda', 'city', 1),
(39, 'Samboan', 'city', 1),
(40, 'San Fernando', 'city', 1),
(41, 'San Francisco', 'city', 1),
(42, 'San Remigio', 'city', 1),
(43, 'Santa Fe', 'city', 1),
(44, 'Santander', 'city', 1),
(45, 'Sibonga', 'city', 1),
(46, 'Sogod', 'city', 1),
(47, 'Tabogon', 'city', 1),
(48, 'Tabuelan', 'city', 1),
(49, 'Talisay City', 'city', 1),
(50, 'Toledo City', 'city', 1),
(51, 'Tuburan', 'city', 1),
(52, 'Tudela', 'city', 1),
(53, 'Casili', 'barangay', 18);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `orderItemId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `furnitureId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `orderStatusId` int(11) NOT NULL,
  `state` enum('processing','shipping','delivered','') NOT NULL,
  `status` varchar(1028) NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `orderId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentId` int(11) NOT NULL,
  `method` varchar(64) NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentId`, `method`, `dateAdded`, `dateUpdated`, `addedBy`, `updatedBy`) VALUES
(1, 'Cash on Delivery', '2017-12-25 15:07:27', '2017-12-25 15:07:27', 1, 1),
(2, 'Paypal', '2017-12-25 15:07:27', '2017-12-25 15:07:27', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `questionId` int(11) NOT NULL,
  `question` varchar(512) NOT NULL,
  `answer` varchar(512) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `datePosted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateAnswered` timestamp NULL DEFAULT NULL,
  `customerId` int(11) NOT NULL,
  `furnitureId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionId`, `question`, `answer`, `active`, `datePosted`, `dateAnswered`, `customerId`, `furnitureId`) VALUES
(1, 'Does the package come with the tools?', 'yes .. everything you need is in the package', 1, '2017-12-27 01:57:29', '2017-12-27 01:57:29', 1, 1),
(2, 'Does it come with another color?', NULL, 1, '2017-12-27 01:57:29', NULL, 1, 1),
(3, 'Excuse me.. does this table weigh more than 1 kg?', 'No it doesn''t. Actually it weighs 0.5kg.:)', 1, '2017-12-27 11:50:28', '2017-12-27 11:50:28', 1, 1),
(4, 'When will you try to restock?', 'Every first Sunday of the month. :)', 1, '2017-12-27 11:50:28', '2017-12-27 11:50:28', 1, 1);

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

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewId`, `rating`, `likes`, `title`, `body`, `dateAdded`, `dateUpdated`, `addedBy`, `updatedBy`, `furnitureId`, `customerId`) VALUES
(1, 5, 15, 'This table really is the dream!', 'I am so satisfied with the product. It is everything that I could hope for from a table. Keep up the good work!', '2017-12-26 12:47:10', '2017-12-26 12:47:10', 3, 3, 1, 1),
(2, 1, 2, 'Package missing tools', 'I received the package with MISSING LEGS wtf...', '2017-12-26 12:47:10', '2017-12-26 12:47:10', 3, 3, 1, 1),
(3, 3, 2, 'Just like any other table...', 'The material is okay but not too strong plus its appeal.. meh..', '2017-12-27 12:11:25', '2017-12-27 12:11:25', 3, 3, 1, 1),
(4, 4, 7, 'Gorgeous!', 'I have no complaints except for the fact that my package was slightly damaged..', '2017-12-27 12:11:25', '2017-12-27 12:11:25', 3, 3, 1, 1),
(5, 5, 3, 'Worth the money!', 'Wow I never imagined it to be super sturdy despite being so light.', '2017-12-27 12:18:36', '2017-12-27 12:18:36', 3, 3, 1, 1);

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

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sellerId`, `name`, `description`, `userId`) VALUES
(1, 'Dream Furniture', 'We make your dream home a reality!', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `userId` int(11) NOT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(512) NOT NULL,
  `userType` enum('admin','customer','seller') NOT NULL DEFAULT 'customer',
  `userStatus` enum('inactive','active','banned') NOT NULL DEFAULT 'inactive',
  `email` varchar(256) NOT NULL,
  `mobileNumber` varchar(16) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`userId`, `username`, `password`, `userType`, `userStatus`, `email`, `mobileNumber`, `image`, `dateAdded`, `dateUpdated`, `addedBy`, `updatedBy`) VALUES
(1, 'admin', 'admin', 'admin', 'inactive', 'admin@gmail.com', NULL, NULL, '2017-12-25 15:08:22', '2017-12-25 15:08:22', NULL, NULL),
(2, 'seller', 'seller', 'seller', 'active', 'seller@gmail.com', NULL, NULL, '2017-12-26 01:00:19', '2017-12-26 01:01:03', NULL, NULL),
(3, 'customer', 'customer', 'customer', 'active', 'customer@gmail.com', NULL, NULL, '2017-12-26 01:00:53', '2017-12-26 01:00:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warranty`
--

CREATE TABLE `warranty` (
  `warrantyId` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` varchar(1028) NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warranty`
--

INSERT INTO `warranty` (`warrantyId`, `name`, `description`, `dateAdded`, `dateUpdated`, `addedBy`, `updatedBy`) VALUES
(1, 'KwARto Warranty', 'KwARto refund policy only. Defective items can be returned to KwARto within the specified time period. If found to have a manufacturer''s defect, the item will be fully refunded. Please note KwARto will not perform any repairs and will not be held liable for any defects caused by the customer or defects occurring after the expiry of the warranty period. Note that the warranty does not cover normal wear and tear, excessive abuse or misuse or any instructions provided by the manufacturer or merchant that was not followed by the user that may cause the warranty to be voided.', '2017-12-26 02:28:35', '2017-12-26 02:28:35', 1, 1);

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
  ADD KEY `customer_order_FK2` (`paymentId`),
  ADD KEY `billingLocationId` (`billingLocationId`),
  ADD KEY `shippingLocationId` (`shippingLocationId`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`furnitureId`),
  ADD KEY `furniture_FK1` (`categoryId`),
  ADD KEY `furniture_FK2` (`sellerId`),
  ADD KEY `versionOf` (`versionOf`),
  ADD KEY `warrantyId` (`warrantyId`);

--
-- Indexes for table `furniture_image`
--
ALTER TABLE `furniture_image`
  ADD PRIMARY KEY (`furnitureImageId`),
  ADD KEY `furniture_image_FK` (`furnitureId`);

--
-- Indexes for table `furniture_package`
--
ALTER TABLE `furniture_package`
  ADD PRIMARY KEY (`packId`),
  ADD KEY `furnitureId` (`furnitureId`);

--
-- Indexes for table `furniture_specification`
--
ALTER TABLE `furniture_specification`
  ADD PRIMARY KEY (`specId`),
  ADD KEY `furnitureId` (`furnitureId`);

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
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`orderStatusId`),
  ADD KEY `orderId` (`orderId`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionId`),
  ADD KEY `furnitureId` (`furnitureId`),
  ADD KEY `customerId` (`customerId`);

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
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `warranty`
--
ALTER TABLE `warranty`
  ADD PRIMARY KEY (`warrantyId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `furnitureId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `furniture_image`
--
ALTER TABLE `furniture_image`
  MODIFY `furnitureImageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `furniture_package`
--
ALTER TABLE `furniture_package`
  MODIFY `packId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `furniture_specification`
--
ALTER TABLE `furniture_specification`
  MODIFY `specId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `furniture_stock`
--
ALTER TABLE `furniture_stock`
  MODIFY `stockId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `orderItemId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `orderStatusId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `questionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sellerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `warranty`
--
ALTER TABLE `warranty`
  MODIFY `warrantyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  ADD CONSTRAINT `customer_order_FK2` FOREIGN KEY (`paymentId`) REFERENCES `payment` (`paymentId`),
  ADD CONSTRAINT `customer_order_FK3` FOREIGN KEY (`shippingLocationId`) REFERENCES `location` (`locationId`),
  ADD CONSTRAINT `customer_order_FK4` FOREIGN KEY (`billingLocationId`) REFERENCES `location` (`locationId`);

--
-- Constraints for table `furniture`
--
ALTER TABLE `furniture`
  ADD CONSTRAINT `furniture_FK1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`),
  ADD CONSTRAINT `furniture_FK2` FOREIGN KEY (`sellerId`) REFERENCES `seller` (`sellerId`),
  ADD CONSTRAINT `furniture_FK3` FOREIGN KEY (`versionOf`) REFERENCES `furniture` (`furnitureId`),
  ADD CONSTRAINT `furniture_FK4` FOREIGN KEY (`warrantyId`) REFERENCES `warranty` (`warrantyId`);

--
-- Constraints for table `furniture_image`
--
ALTER TABLE `furniture_image`
  ADD CONSTRAINT `furniture_image_FK` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`);

--
-- Constraints for table `furniture_package`
--
ALTER TABLE `furniture_package`
  ADD CONSTRAINT `pack_FK1` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`);

--
-- Constraints for table `furniture_specification`
--
ALTER TABLE `furniture_specification`
  ADD CONSTRAINT `spec_FK1` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`);

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
-- Constraints for table `order_status`
--
ALTER TABLE `order_status`
  ADD CONSTRAINT `order_status_fk_1` FOREIGN KEY (`orderStatusId`) REFERENCES `customer_order` (`orderId`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_FK1` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`),
  ADD CONSTRAINT `question_FK2` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
