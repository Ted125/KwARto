-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 04:56 PM
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

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locationId`, `name`, `type`, `parentLocationId`) VALUES
(54, 'Cabadiangan', 'barangay', 2),
(55, 'Candabong', 'barangay', 2),
(56, 'Atabay', 'barangay', 3),
(57, 'Poblacion', 'barangay', 3),
(58, 'Compostela', 'barangay', 4),
(59, 'Guadalupe', 'barangay', 4),
(60, 'Bonbon', 'barangay', 5),
(61, 'Poblacion', 'barangay', 5),
(62, 'Bogo', 'barangay', 6),
(63, 'Calagasan', 'barangay', 6),
(64, 'New Bago', 'barangay', 7),
(65, 'Tubigagmanok', 'barangay', 7),
(66, 'Bugas', 'barangay', 8),
(67, 'Zaragosa', 'barangay', 8),
(68, 'Buanoy', 'barangay', 9),
(69, 'Pondol', 'barangay', 9),
(70, 'Poblacion', 'barangay', 10),
(71, 'Japitan', 'barangay', 10),
(72, 'Gairan', 'barangay', 11),
(73, 'Libertad', 'barangay', 11),
(74, 'Poblacion', 'barangay', 12),
(75, 'El Pardo', 'barangay', 12),
(76, 'Perrelos', 'barangay', 13),
(77, 'Valladolid', 'barangay', 13),
(78, 'Luyang', 'barangay', 14),
(79, 'Hagnaya', 'barangay', 14),
(80, 'Catmondaan', 'barangay', 15),
(81, 'Binongkalan', 'barangay', 15),
(82, 'Capitol Site', 'barangay', 16),
(83, 'Guadalupe', 'barangay', 16),
(84, 'Cogon', 'barangay', 17),
(85, 'Estaca', 'barangay', 17),
(86, 'Tolotolo', 'barangay', 18),
(87, 'Ibabao', 'barangay', 19),
(88, 'Dapitan', 'barangay', 19),
(89, 'Maya', 'barangay', 20),
(90, 'Tapilon', 'barangay', 20),
(91, 'Mananggal', 'barangay', 21),
(92, 'Sacsac', 'barangay', 21),
(93, 'Looc', 'barangay', 22),
(94, 'Sabang', 'barangay', 22),
(95, 'Tapon', 'barangay', 23),
(96, 'Panlaan', 'barangay', 23),
(97, 'Palanas', 'barangay', 24),
(98, 'Cambagte', 'barangay', 24),
(99, 'Mactan', 'barangay', 25),
(100, 'Pusok', 'barangay', 25),
(101, 'Yati', 'barangay', 26),
(102, 'Catarman', 'barangay', 26),
(103, 'Pili', 'barangay', 27),
(104, 'Talangnan', 'barangay', 27),
(105, 'Lombo', 'barangay', 28),
(106, 'Santo Niño ', 'barangay', 28),
(107, 'Tabok', 'barangay', 29),
(108, 'Cubacub', 'barangay', 29),
(109, 'Antipolo', 'barangay', 30),
(110, 'Panugnawan', 'barangay', 30),
(111, 'Guindaruhan', 'barangay', 31),
(112, 'Manduang', 'barangay', 31),
(113, 'Basdiot', 'barangay', 32),
(114, 'Bugho', 'barangay', 32),
(115, 'Inoburan', 'barangay', 33),
(116, 'Tuyan', 'barangay', 33),
(117, 'Lagunde', 'barangay', 34),
(118, 'Mainit', 'barangay', 34),
(119, 'Imelda', 'barangay', 35),
(120, 'Montserrat', 'barangay', 35),
(121, 'Opao', 'barangay', 36),
(122, 'Tajao', 'barangay', 36),
(123, 'Cagcagan', 'barangay', 37),
(124, 'Mercedes', 'barangay', 37),
(125, 'Santa Cruz', 'barangay', 38),
(126, 'Vive', 'barangay', 38),
(127, 'Calatagan', 'barangay', 39),
(128, 'San Sebastian ', 'barangay', 39),
(129, 'Pitalo', 'barangay', 40),
(130, 'Sangat', 'barangay', 40),
(131, 'Sonog', 'barangay', 41),
(132, 'Union', 'barangay', 41),
(133, 'Hagnaya', 'barangay', 42),
(134, 'Punta', 'barangay', 42),
(135, 'Hilantagaan', 'barangay', 43),
(136, 'Okoy', 'barangay', 43),
(137, 'Bunlan', 'barangay', 44),
(138, 'Lip-tong', 'barangay', 44),
(139, 'Dugoan', 'barangay', 45),
(140, 'Bato', 'barangay', 45),
(141, 'Damolog', 'barangay', 46),
(142, 'Takay', 'barangay', 46),
(143, 'Muabog', 'barangay', 47),
(144, 'Somosa', 'barangay', 47),
(145, 'Kanluhagon', 'barangay', 48),
(146, 'Villahermosa', 'barangay', 48),
(147, 'Dumlog', 'barangay', 49),
(148, 'Mohon', 'barangay', 49),
(149, 'Canlumampao', 'barangay', 50),
(150, 'Talavera', 'barangay', 50),
(151, 'Caridad', 'barangay', 51),
(152, 'Kansi', 'barangay', 51),
(153, 'Villahermosa', 'barangay', 52),
(154, 'McArthur', 'barangay', 52);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;