-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2018 at 10:21 AM
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
  `name` varchar(128) NOT NULL,
  `lft` int(11) NOT NULL,
  `rgt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `name`, `lft`, `rgt`) VALUES
(1, 'All Categories', 1, 160),
(2, 'Furniture', 2, 149),
(3, 'Bed & Bath', 150, 151),
(4, 'Decor', 152, 153),
(5, 'Houseware', 154, 155),
(6, 'Window Treatments', 156, 157),
(7, 'Lighting', 158, 159),
(8, 'Bedroom', 3, 36),
(9, 'Dining Room', 37, 52),
(10, 'Kitchen', 53, 58),
(11, 'Living Room', 59, 98),
(12, 'Kids Furniture', 99, 110),
(13, 'Office Furniture', 111, 134),
(14, 'Outdoor Furniture', 135, 148),
(15, 'Bed Frames', 4, 15),
(16, 'Bunk + Loft + Double Decker Bed', 16, 17),
(17, 'Folding Beds', 18, 19),
(18, 'Day Beds', 20, 21),
(19, 'Nightstands', 22, 23),
(20, 'Dressers', 24, 25),
(21, 'Chest of Drawers', 26, 27),
(22, 'Shoe Cabinets', 28, 29),
(23, 'Wardrobe', 30, 35),
(24, 'Single Bed', 5, 6),
(25, 'Semi-Double Bed', 7, 8),
(26, 'Double Bed', 9, 10),
(27, 'Queen Bed', 11, 12),
(28, 'King Bed', 13, 14),
(29, 'Hinge', 31, 32),
(30, 'Sliding', 33, 34),
(31, 'Barstools and Chairs', 38, 39),
(32, 'Buffet Cabinets', 40, 41),
(33, 'Display Cabinets', 42, 43),
(34, 'Dining Chairs & Stools', 44, 45),
(35, 'Folding Chair', 46, 47),
(36, 'Dining Sets', 48, 49),
(37, 'Tables + Table Tops + Table Legs', 50, 51),
(38, 'Kitchen + Metal Racks', 54, 55),
(39, 'Kitchen Cabinets', 56, 57),
(40, 'Accent + Armchairs', 60, 61),
(41, 'Benches + Ottomans + Bean Bags', 62, 63),
(42, 'Chaise Lounge', 64, 65),
(43, 'Bookcase + Wall Shelves', 66, 67),
(44, 'TV Racks', 68, 69),
(45, 'Magazine Racks', 70, 71),
(46, 'Sofas', 72, 89),
(47, 'Tables', 90, 97),
(48, 'Native', 73, 74),
(49, 'Apartment', 75, 76),
(50, 'Transitional', 77, 78),
(51, 'Modern', 79, 80),
(52, 'Classical', 81, 82),
(53, 'Modular', 83, 84),
(54, 'Sofa Bed', 85, 86),
(55, 'Recliners', 87, 88),
(56, 'Center Table', 91, 92),
(57, 'Side Table', 93, 94),
(58, 'Console Table', 95, 96),
(59, 'Bed Frames (Kids)', 100, 101),
(60, 'Seating', 102, 103),
(61, 'Play Sets', 104, 105),
(62, 'Tables (Kids)', 106, 107),
(63, 'Storage', 108, 109),
(64, 'Bookcase', 112, 113),
(65, 'Chairs', 114, 121),
(66, 'Desks', 122, 129),
(67, 'Filing Cabinets', 130, 131),
(68, 'Office Series', 132, 133),
(69, 'High Back Chairs', 115, 116),
(70, 'Low Back Chairs', 117, 118),
(71, 'Visitor Chairs', 119, 120),
(72, 'Writing + Computer Desks', 123, 124),
(73, 'Executive', 125, 126),
(74, 'Work Station', 127, 128),
(75, 'Outdoor Chair', 136, 137),
(76, 'Outdoor Table', 138, 139),
(77, 'Outdoor Sets', 140, 141),
(78, 'Outdoor Lounger', 142, 143),
(79, 'Umbrellas', 144, 145),
(80, 'Public Chairs', 146, 147);

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
(1, 'Christian Ted', 'Reyes', 'Ochoa', '1997-11-18', 3),
(2, 'kobe', 'bean', 'bryant', '1978-08-23', 4),
(3, 'Julie Noreen', 'Malazarte', 'Sales', '1998-07-21', 5),
(4, 'Geralt', 'Of', 'Rivia', '2017-12-29', 6),
(5, 'First', 'Middle', 'Last', '2017-12-08', 7),
(6, 'Punished', 'Venom', 'Snake', '2017-12-05', 8);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `orderId` int(11) NOT NULL,
  `orderNumber` varchar(16) NOT NULL,
  `shippingContactPerson` varchar(256) DEFAULT NULL,
  `shippingAddress` varchar(512) DEFAULT NULL,
  `shippingLocationId` int(11) DEFAULT NULL,
  `shippingContactNumber` varchar(16) DEFAULT NULL,
  `billingContactPerson` varchar(256) DEFAULT NULL,
  `billingAddress` varchar(512) DEFAULT NULL,
  `billingLocationId` int(11) DEFAULT NULL,
  `billingContactNumber` varchar(16) DEFAULT NULL,
  `discount` float NOT NULL,
  `tax` float NOT NULL,
  `subtotalFee` float NOT NULL,
  `shippingFee` float NOT NULL,
  `totalFee` float NOT NULL,
  `state` enum('pending','shipping','delivered') DEFAULT 'pending',
  `cancelled` tinyint(1) DEFAULT '0',
  `paid` tinyint(1) DEFAULT '0',
  `paymentDate` timestamp NULL DEFAULT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `customerId` int(11) NOT NULL,
  `paymentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`orderId`, `orderNumber`, `shippingContactPerson`, `shippingAddress`, `shippingLocationId`, `shippingContactNumber`, `billingContactPerson`, `billingAddress`, `billingLocationId`, `billingContactNumber`, `discount`, `tax`, `subtotalFee`, `shippingFee`, `totalFee`, `state`, `cancelled`, `paid`, `paymentDate`, `dateAdded`, `dateUpdated`, `customerId`, `paymentId`) VALUES
(33, '1514641332024', 'Christian Ted Ochoa', 'Green Valley Subdivision', 53, '09172064946', 'Christian Ted Ochoa', 'Green Valley Subdivision', 53, '09172064946', 0, 12, 4750, 168, 5508.16, 'delivered', 0, 0, NULL, '2017-12-30 13:42:12', '2017-12-30 14:30:39', 1, 1),
(34, '1514643812797', 'Christian Ted Ochoa', 'Green Valley Subdivision', 53, '09172064946', 'Christian Ted Ochoa', 'Green Valley Subdivision', 53, '09172064946', 0, 12, 2375, 168, 2848.16, 'shipping', 0, 0, NULL, '2017-12-30 14:23:32', '2017-12-30 14:30:35', 1, 1),
(35, '1514643863878', 'Christian Ted Ochoa', 'Green Valley Subdivision', 53, '09172064946', 'Christian Ted Ochoa', 'Green Valley Subdivision', 53, '09172064946', 0, 12, 2375, 168, 2848.16, 'shipping', 0, 0, NULL, '2017-12-30 14:24:23', '2017-12-30 14:30:31', 1, 1),
(36, '1514643899082', 'Christian Ted Ochoa', 'Green Valley Subdivision', 53, '09172064946', 'Christian Ted Ochoa', 'Green Valley Subdivision', 53, '09172064946', 0, 12, 2375, 168, 2848.16, 'pending', 0, 0, NULL, '2017-12-30 14:24:59', '2017-12-30 14:24:59', 1, 1);

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
  `weight` float NOT NULL,
  `weightUnit` enum('kg') NOT NULL,
  `length` float NOT NULL,
  `width` float NOT NULL,
  `height` float NOT NULL,
  `sizeUnit` enum('cm') NOT NULL,
  `packageLength` float NOT NULL,
  `packageWidth` float NOT NULL,
  `packageHeight` float NOT NULL,
  `packageSizeUnit` enum('cm') NOT NULL,
  `price` float NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `modelName` varchar(256) DEFAULT NULL,
  `discount` float NOT NULL,
  `saleStart` timestamp NULL DEFAULT NULL,
  `saleEnd` timestamp NULL DEFAULT NULL,
  `live` tinyint(1) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `categoryId` int(11) DEFAULT NULL,
  `sellerId` int(11) NOT NULL,
  `versionOf` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`furnitureId`, `name`, `description`, `warrantyId`, `model`, `color`, `weight`, `weightUnit`, `length`, `width`, `height`, `sizeUnit`, `packageLength`, `packageWidth`, `packageHeight`, `packageSizeUnit`, `price`, `dateAdded`, `dateUpdated`, `addedBy`, `updatedBy`, `modelName`, `discount`, `saleStart`, `saleEnd`, `live`, `status`, `categoryId`, `sellerId`, `versionOf`) VALUES
(1, 'Dream Table', 'This table is the dream of our ancestors!', 1, 'DTBL-01', 'brown', 4, 'kg', 20, 15, 10, 'cm', 31, 21, 15, 'cm', 2500, '2017-12-26 01:08:51', '2018-01-11 11:40:38', 2, 2, 'dream table', 5, NULL, NULL, 1, 1, 37, 1, NULL),
(2, '52303-TB Walnut Lily Single Bed', 'No description.', 1, '52303-TB', 'walnut lily', 10, 'kg', 206.5, 103.1, 117, 'cm', 206.5, 103.1, 117, 'cm', 14600, '2018-01-11 11:32:41', '2018-01-11 11:40:14', 2, 2, 'single bed', 0, NULL, NULL, 1, 1, 24, 1, NULL),
(3, 'KD 2328 Semi-Double Bed', 'No description.', 1, 'KD 2328', 'white', 10, 'kg', 190, 120, 990, 'cm', 190, 120, 990, 'cm', 7400, '2018-01-11 11:36:19', '2018-01-11 11:40:25', 2, 2, 'semi double bed', 40, NULL, NULL, 1, 1, 25, 1, NULL),
(4, 'TG9037DB Jasper Upholstered Double Bed', 'Bed only. Foam mattress not included.', 1, 'TG9037DB', 'Jasper', 8, 'kg', 190, 100, 117, 'cm', 190, 100, 117, 'cm', 12600, '2018-01-11 11:39:53', '2018-01-11 11:39:53', 2, 2, 'double bed', 75, NULL, NULL, 1, 1, 26, 1, NULL),
(6, 'Bookshelf - FBS3200', 'No description.', 1, 'FBS3200', 'choco', 15, 'kg', 81.5, 30.5, 175.5, 'cm', 81.5, 30.5, 175.5, 'cm', 2895, '2018-01-14 03:44:54', '2018-01-14 03:44:54', 2, 2, 'bookcase', 0, NULL, NULL, 1, 1, 64, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `furniture_image`
--

CREATE TABLE `furniture_image` (
  `furnitureImageId` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `thumbnail` tinyint(4) NOT NULL DEFAULT '0',
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `furnitureId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture_image`
--

INSERT INTO `furniture_image` (`furnitureImageId`, `image`, `thumbnail`, `dateAdded`, `dateUpdated`, `addedBy`, `updatedBy`, `furnitureId`) VALUES
(1, '4.jpg', 0, '2017-12-26 01:16:33', '2017-12-26 02:07:07', 2, 2, 1),
(2, '5.jpg', 0, '2017-12-26 01:16:33', '2017-12-26 10:36:50', 2, 2, 1),
(3, '6.jpeg', 0, '2017-12-26 01:16:33', '2017-12-26 02:07:18', 2, 2, 1),
(4, '1.jpg', 0, '2018-01-11 11:48:19', '2018-01-11 11:48:19', 2, 2, 2),
(5, '1.jpg', 0, '2018-01-11 11:48:19', '2018-01-11 11:48:19', 2, 2, 3),
(6, '1.jpg', 0, '2018-01-11 11:48:19', '2018-01-11 11:48:19', 2, 2, 4),
(7, '2.jpg', 0, '2018-01-11 11:48:19', '2018-01-11 11:48:19', 2, 2, 4),
(8, '1.jpg', 0, '2018-01-14 03:46:28', '2018-01-14 03:46:28', 2, 2, 6);

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
(6, '1 pc. user manual', 1),
(7, '1 pc bed frame', 2),
(8, '1 pc bed frame', 3),
(9, '1 pc bed frame', 4),
(10, '14 pcs panels', 6),
(11, '40 pcs plastic dowel', 6),
(12, '22 pcs screw', 6),
(13, '2 pcs leg stud', 6),
(14, '4 pcs leg stud screw', 6),
(15, '76 pcs power nail', 6);

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
(4, 'Table is child-friendly.', 1),
(5, 'Comfy mattress', 2),
(6, 'Design promotes good posture', 3),
(7, 'Bed only.', 4),
(8, 'Foam mattress not included.', 4),
(9, 'Prices are subject to change without prior notice', 6),
(10, 'Prices may vary depending on location', 6);

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
  `furnitureId` int(11) NOT NULL,
  `customerId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture_stock`
--

INSERT INTO `furniture_stock` (`stockId`, `status`, `dateAdded`, `dateUpdated`, `addedBy`, `updatedBy`, `furnitureId`, `customerId`) VALUES
(1, 'sold', '2017-12-26 01:17:41', '2017-12-30 13:42:12', 2, 2, 1, 1),
(2, 'sold', '2017-12-26 01:17:41', '2017-12-30 13:42:12', 2, 2, 1, 1),
(3, 'sold', '2017-12-26 01:17:41', '2017-12-30 14:23:33', 2, 2, 1, 1),
(4, 'sold', '2017-12-26 01:17:41', '2017-12-30 14:24:24', 2, 2, 1, 1),
(5, 'on_hold', '2017-12-26 01:17:41', '2018-01-18 08:43:00', 2, 2, 1, 1),
(6, 'available', '2018-01-03 13:21:34', '2018-01-12 11:44:58', 2, 2, 1, NULL),
(7, 'available', '2018-01-03 13:21:52', '2018-01-12 11:45:02', 2, 2, 1, NULL),
(8, 'available', '2018-01-12 11:29:05', '2018-01-12 11:29:05', 2, 2, 4, NULL);

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
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notificationId` int(11) NOT NULL,
  `notification` varchar(512) NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `orderItemId` int(11) NOT NULL,
  `originalPrice` float NOT NULL,
  `discount` float NOT NULL,
  `orderId` int(11) NOT NULL,
  `stockId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`orderItemId`, `originalPrice`, `discount`, `orderId`, `stockId`) VALUES
(44, 2500, 5, 33, 1),
(45, 2500, 5, 33, 2),
(46, 2500, 5, 34, 3),
(47, 2500, 5, 35, 4),
(48, 2500, 5, 36, 5);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `orderStatusId` int(11) NOT NULL,
  `status` varchar(1028) NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `addedBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `orderId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`orderStatusId`, `status`, `dateAdded`, `dateUpdated`, `addedBy`, `updatedBy`, `orderId`) VALUES
(6, 'Order has been placed.', '2017-12-30 13:42:12', '2017-12-30 13:42:12', NULL, NULL, 33),
(7, 'Order has been placed.', '2017-12-30 14:23:33', '2017-12-30 14:23:33', NULL, NULL, 34),
(8, 'Order has been placed.', '2017-12-30 14:24:24', '2017-12-30 14:24:24', NULL, NULL, 35),
(9, 'Order has been placed.', '2017-12-30 14:24:59', '2017-12-30 14:24:59', NULL, NULL, 36);

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
(3, 'Excuse me.. does this table weigh more than 1 kg?', 'No it doesn\'t. Actually it weighs 0.5kg.:)', 1, '2017-12-27 11:50:28', '2017-12-27 11:50:28', 1, 1),
(4, 'When will you try to restock?', 'Every first Sunday of the month. :)', 1, '2017-12-27 11:50:28', '2017-12-27 11:50:28', 1, 1),
(5, 'Dont mind this question', NULL, 1, '2017-12-28 12:06:29', NULL, 1, 1),
(6, 'Hey does this break easily?', NULL, 1, '2017-12-28 12:13:44', NULL, 1, 1),
(8, 'Does this table come with a glass material variation?', NULL, 1, '2017-12-28 12:57:33', NULL, 1, 1),
(9, 'Am I being ignored?', NULL, 1, '2017-12-28 13:05:03', NULL, 1, 1),
(10, 'Are you guys going to answer my question or nah??', NULL, 1, '2017-12-28 13:07:48', NULL, 1, 1),
(11, 'Do you make other furniture aside from tables?', NULL, 1, '2017-12-28 14:05:22', NULL, 1, 1),
(12, 'Is this useful in the military???', NULL, 1, '2017-12-28 16:32:20', NULL, 6, 1),
(13, 'Is this the first question?', NULL, 1, '2018-01-16 08:24:53', NULL, 1, 4),
(14, 'do you know da wae?', NULL, 1, '2018-01-16 08:25:59', NULL, 1, 4),
(15, 'Where is de kween???', NULL, 1, '2018-01-16 08:54:51', NULL, 1, 4);

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
(5, 5, 3, 'Worth the money!', 'Wow I never imagined it to be super sturdy despite being so light.', '2017-12-27 12:18:36', '2017-12-27 12:18:36', 3, 3, 1, 1),
(6, 5, 0, 'Test Review', 'Dont mind this review.', '2017-12-28 13:24:49', '2017-12-28 13:24:49', 3, 3, 1, 1),
(7, 4, 0, 'Table is good', 'The table lives up to my expectations', '2017-12-28 14:17:45', '2017-12-28 14:17:45', 3, 3, 1, 1),
(8, 5, 0, 'Cute', 'The table is so cute!', '2017-12-28 16:23:53', '2017-12-28 16:23:53', 5, 5, 1, 3),
(9, 5, 0, 'Useful Everywhere It Seems', 'Wow I never thought I could hide underneath it to sneak past the Soviets LOL ! Great product!', '2017-12-28 16:33:06', '2017-12-28 16:33:06', 8, 8, 1, 6),
(10, 2, 0, 'Broken Frame', 'The product arrived with chipped off materials. I immediately asked for a refund.', '2018-01-11 12:51:42', '2018-01-11 12:51:42', 3, 3, 4, 1),
(15, 5, 0, 'Very satisfied!', 'I love the bed!', '2018-01-16 09:15:38', '2018-01-16 09:15:38', 3, 3, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `search_history`
--

CREATE TABLE `search_history` (
  `searchId` int(11) NOT NULL,
  `value` varchar(512) NOT NULL,
  `dateAdded` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `customerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_history`
--

INSERT INTO `search_history` (`searchId`, `value`, `dateAdded`, `customerId`) VALUES
(3, 'table', '2018-01-13 03:04:24', 4),
(4, 'bed', '2018-01-13 03:04:24', 4),
(5, 'chair', '2018-01-13 03:04:24', 4);

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
(1, 'Dream Furniture', 'We make your dream home a reality!', 2),
(2, 'dummy', 'dummy', 9);

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'active', 'admin@gmail.com', NULL, NULL, '2017-12-25 15:08:22', '2018-01-17 05:44:21', NULL, NULL),
(2, 'seller', '64c9ac2bb5fe46c3ac32844bb97be6bc', 'seller', 'active', 'seller@gmail.com', NULL, 'Resources/Images/User/2/2.jpg', '2017-12-26 01:00:19', '2018-01-18 09:09:44', NULL, NULL),
(3, 'customer', '91ec1f9324753048c0096d036a694f86', 'customer', 'active', 'customer@gmail.com', NULL, 'Resources/Images/User/3/3.jpg', '2017-12-26 01:00:53', '2018-01-18 09:09:34', NULL, NULL),
(4, NULL, 'test', 'customer', 'active', 'test@gmail.com', '123', NULL, '2017-12-28 14:52:22', '2018-01-18 08:58:44', NULL, NULL),
(5, NULL, 'julie', 'customer', 'active', 'julie@gmail.com', '12345', NULL, '2017-12-28 16:14:04', '2017-12-28 16:14:04', NULL, NULL),
(6, NULL, 'geralt', 'customer', 'banned', 'geralt@gmail.com', '789', NULL, '2017-12-28 16:25:24', '2018-01-17 09:09:42', NULL, NULL),
(7, NULL, 'letters', 'customer', 'active', 'letters@gmail.com', '1234567890', NULL, '2017-12-28 16:29:07', '2018-01-18 08:58:57', NULL, NULL),
(8, NULL, 'snake', 'customer', 'banned', 'snake@gmail.com', '55555', NULL, '2017-12-28 16:31:33', '2018-01-18 08:50:40', NULL, NULL),
(9, 'inactiveseller', 'dummy', 'seller', 'active', 'dummy@gmail.com', '09123123', 'Resources/Images/User/9/9.jpg', '2018-01-17 05:34:28', '2018-01-18 09:09:52', NULL, NULL);

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
(1, 'KwARto Warranty', 'KwARto refund policy only. Defective items can be returned to KwARto within the specified time period. If found to have a manufacturer\'s defect, the item will be fully refunded. Please note KwARto will not perform any repairs and will not be held liable for any defects caused by the customer or defects occurring after the expiry of the warranty period. Note that the warranty does not cover normal wear and tear, excessive abuse or misuse or any instructions provided by the manufacturer or merchant that was not followed by the user that may cause the warranty to be voided.', '2017-12-26 02:28:35', '2017-12-26 02:28:35', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlistId` int(11) NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `furnitureId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

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
  ADD KEY `furniture_stock_FK` (`furnitureId`),
  ADD KEY `customerId` (`customerId`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationId`),
  ADD UNIQUE KEY `locationId` (`locationId`),
  ADD KEY `location_FK` (`parentLocationId`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notificationId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`orderItemId`),
  ADD KEY `order_item_FK1` (`orderId`),
  ADD KEY `order_item_FK2` (`stockId`);

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
-- Indexes for table `search_history`
--
ALTER TABLE `search_history`
  ADD PRIMARY KEY (`searchId`),
  ADD KEY `customerId` (`customerId`);

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
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlistId`),
  ADD KEY `furnitureId` (`furnitureId`),
  ADD KEY `customerId` (`customerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `furnitureId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `furniture_image`
--
ALTER TABLE `furniture_image`
  MODIFY `furnitureImageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `furniture_package`
--
ALTER TABLE `furniture_package`
  MODIFY `packId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `furniture_specification`
--
ALTER TABLE `furniture_specification`
  MODIFY `specId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `furniture_stock`
--
ALTER TABLE `furniture_stock`
  MODIFY `stockId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notificationId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `orderItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `orderStatusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `questionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `search_history`
--
ALTER TABLE `search_history`
  MODIFY `searchId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sellerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `warranty`
--
ALTER TABLE `warranty`
  MODIFY `warrantyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlistId` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

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
  ADD CONSTRAINT `furniture_FK2` FOREIGN KEY (`sellerId`) REFERENCES `seller` (`sellerId`),
  ADD CONSTRAINT `furniture_FK3` FOREIGN KEY (`versionOf`) REFERENCES `furniture` (`furnitureId`),
  ADD CONSTRAINT `furniture_FK4` FOREIGN KEY (`warrantyId`) REFERENCES `warranty` (`warrantyId`),
  ADD CONSTRAINT `furniture_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`);

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
  ADD CONSTRAINT `furniture_stock_FK1` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`),
  ADD CONSTRAINT `furniture_stock_FK2` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_FK` FOREIGN KEY (`parentLocationId`) REFERENCES `location` (`locationId`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_FK1` FOREIGN KEY (`userId`) REFERENCES `user_details` (`userId`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_FK1` FOREIGN KEY (`orderId`) REFERENCES `customer_order` (`orderId`),
  ADD CONSTRAINT `order_item_FK2` FOREIGN KEY (`stockId`) REFERENCES `furniture_stock` (`stockId`);

--
-- Constraints for table `order_status`
--
ALTER TABLE `order_status`
  ADD CONSTRAINT `order_status_fk_1` FOREIGN KEY (`orderId`) REFERENCES `customer_order` (`orderId`);

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
-- Constraints for table `search_history`
--
ALTER TABLE `search_history`
  ADD CONSTRAINT `search_history_FK1` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`);

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_FK` FOREIGN KEY (`userId`) REFERENCES `user_details` (`userId`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_FK1` FOREIGN KEY (`furnitureId`) REFERENCES `furniture` (`furnitureId`),
  ADD CONSTRAINT `wishlist_FK2` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
