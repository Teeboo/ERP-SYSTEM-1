-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 24, 2019 at 01:24 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=694505 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(694504, 'hlubitn@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `clientID` int(11) NOT NULL AUTO_INCREMENT,
  `clientName` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `projectID` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL,
  PRIMARY KEY (`clientID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `construction_site`
--

DROP TABLE IF EXISTS `construction_site`;
CREATE TABLE IF NOT EXISTS `construction_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(128) NOT NULL,
  `name` varchar(40) NOT NULL,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employeeinfo`
--

DROP TABLE IF EXISTS `employeeinfo`;
CREATE TABLE IF NOT EXISTS `employeeinfo` (
  `empID` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `IDno` int(11) NOT NULL,
  `Taxno` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `workSite` varchar(255) NOT NULL,
  `startDate` date NOT NULL,
  `salary` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Cphone` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `proofID` varchar(255) NOT NULL,
  PRIMARY KEY (`empID`)
) ENGINE=MyISAM AUTO_INCREMENT=9600128 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeeinfo`
--

INSERT INTO `employeeinfo` (`empID`, `fullname`, `surname`, `phone`, `email`, `IDno`, `Taxno`, `image`, `title`, `supervisor`, `department`, `workSite`, `startDate`, `salary`, `fname`, `address`, `Cphone`, `relation`, `cv`, `proofID`) VALUES
(9600125, 'sdcsd', 'fadgjskgh', '98999', 'hlubitn@gmail.com', 29282739, 2313421, 'image/â€ª+27 78 239 9216â€¬ 20171228_154530.jpg', 'mnr', 'gjjgj', 'vhhk', 'JHB', '2019-08-20', '10878', 'dsafhfa', '312231', '998292', 'shjdhjd', 'files/2015-08-11 W3.5 Class Test Solution(1) (1).docx', 'files/2015-08-11 W3.5 Class Test Solution(1).docx'),
(9600127, 'thokozani', 'hlubi', '329329329', 'hlubitn@gmail.com', 37482901, 43892, 'image/â€ª+27 78 239 9216â€¬ 20171228_154530.jpg', 'manager', 'thoks', 'it', 'jhb', '2003-03-19', '32323', 'thando', '2141', '000303030', 'father', 'files/201507967_A2...docx', 'files/2016-10-04 Assignment W4.2 Solutions.docx');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

DROP TABLE IF EXISTS `homepage`;
CREATE TABLE IF NOT EXISTS `homepage` (
  `title` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `wtime` varchar(255) NOT NULL,
  `h5` varchar(255) NOT NULL,
  `h3` varchar(255) NOT NULL,
  `paragraph1` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`title`, `phone`, `wtime`, `h5`, `h3`, `paragraph1`, `email`) VALUES
('EXCELLO||CONSTRUCTION', '8294584', 'mon-friday :08:00-17:00pm', 'welcome', 'gfghfgjkjl', 'hfjghkjk;lkjkgfytuiol', 'hksffkj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(128) DEFAULT NULL,
  `product_quantity` int(11) NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_products`
--

DROP TABLE IF EXISTS `invoice_products`;
CREATE TABLE IF NOT EXISTS `invoice_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(128) NOT NULL,
  `invoice_id` varchar(128) NOT NULL,
  `product_id` varchar(128) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(128) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `projectID` int(11) NOT NULL AUTO_INCREMENT,
  `projectName` varchar(255) NOT NULL,
  `projectManager` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `budget` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`projectID`)
) ENGINE=MyISAM AUTO_INCREMENT=10021 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `projectName`, `projectManager`, `client`, `site`, `budget`, `description`) VALUES
(10020, 'dts', 'bpnp', 'ccv', 'jhb', 1010100, 'dsgah,d dgksja dnsgks skdan dsfn');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(128) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `ends_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_stage`
--

DROP TABLE IF EXISTS `project_stage`;
CREATE TABLE IF NOT EXISTS `project_stage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(128) NOT NULL,
  `project_id` varchar(128) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `ends_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `SupplierName` varchar(100) NOT NULL,
  `SupplierMobile` varchar(50) NOT NULL,
  `SupplierEmail` varchar(50) NOT NULL,
  `SupplierAddress` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=91265123 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `SupplierName`, `SupplierMobile`, `SupplierEmail`, `SupplierAddress`) VALUES
(91265120, 'abcCon', '124548452', 'siyabongahopephetla@gmail.com', '6104 KGOTHLO STREET'),
(91265122, 'ragsd', '834915', 'hlubi@gmail.com', '212321');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(128) NOT NULL,
  `name` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `user_type` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `create_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`)
) ENGINE=InnoDB AUTO_INCREMENT=1002 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uuid`, `name`, `surname`, `user_type`, `email`, `password`, `create_at`, `deleted_at`) VALUES
(1001, '2001', 'thokozani', 'hlubi', 1, 'hlubitn@gmail.com', '0835597529', '2019-08-01 17:20:00', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
