-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 05:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `kiu_eresource`
--

CREATE TABLE `kiu_eresource` (
  `id` int(11) NOT NULL,
  `timestamp` bigint(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `resource` varchar(100) DEFAULT NULL,
  `importance` double DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `display_time` varchar(100) DEFAULT NULL,
  `comment_disabled` tinyint(1) DEFAULT NULL,
  `page_views` int(11) DEFAULT NULL,
  `added_user` int(11) DEFAULT NULL,
  `last_updated_time` bigint(20) DEFAULT NULL,
  `last_updated_user` int(11) DEFAULT NULL,
  `document_name` varchar(1000) DEFAULT NULL,
  `document_image` varchar(1000) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kiu_eresource`
--

INSERT INTO `kiu_eresource` (`id`, `timestamp`, `title`, `author`, `description`, `department`, `resource`, `importance`, `type`, `status`, `display_time`, `comment_disabled`, `page_views`, `added_user`, `last_updated_time`, `last_updated_user`, `document_name`, `document_image`, `is_active`) VALUES
(84, 1659330638934, 'ccc', 'cwdf', 'Tealium is a US headquartered American company founded in 2008 in San Diego, California that sells enterprise tag management, an API hub, a customer data platform with machine learning, and data management products. It has offices in the US, Singapore, UK, Germany, Japan, Netherlands, France and Australia', 'BMS', 'Thesis', 0, 'Book', 'draft', '2022/08/01 10:40:38', 0, 0, 0, 1659330638934, 0, '', '', 0),
(85, 1659330647806, 'ccc', 'cwdf', 'Tealium is a US headquartered American company founded in 2008 in San Diego, California that sells enterprise tag management, an API hub, a customer data platform with machine learning, and data management products. It has offices in the US, Singapore, UK, Germany, Japan, Netherlands, France and Australia', 'Nursing', 'Thesis', 0, 'Book', 'published', '2022/08/01 10:40:47', 0, 0, 0, 1659333336761, 5, '85_Hint\'9-ScavengerHunt_protected.pdf', '85_1.jpg', 1),
(86, 1659331194722, 'cdsdcsc', 'csdccac', 'Tealium is a US headquartered American company founded in 2008 in San Diego, California that sells enterprise tag management, an API hub, a customer data platform with machine learning, and data management products. It has offices in the US, Singapore, UK, Germany, Japan, Netherlands, France and Australia', 'BMS', 'General', 0, 'PDF', 'published', '2022/08/01 10:49:54', 0, 0, 0, 1659331194722, 0, '86_NewLibrarywebsitereport-KIU(1).pdf', '86_2.jpg', 1),
(87, 1659382980220, 'title1111', 'ccc', 'A television set or television receiver, more commonly called the television, TV, TV set, telly, tele, or tube, is a device that combines a tuner, display, and loudspeakers, for the purpose of viewing and hearing television broadcasts, or using it as a computer monitor', 'Acupuncture', 'Thesis', 0, 'Journal', 'published', '2022/08/02 01:13:00', 0, 0, 0, 1659413941751, 5, '87_library.sql', '87_home-img2.png', 0),
(88, 1659383055821, 'title444', 'cf', 'A television set or television receiver, more commonly called the television, TV, TV set, telly, tele, or tube, is a device that combines a tuner, display, and loudspeakers, for the purpose of viewing and hearing television broadcasts, or using it as a computer monitor', 'HR', 'Thesis', 0, 'Article', 'published', '2022/08/02 01:14:15', 0, 0, 0, 1659383064557, 5, '88_Henna.pdf', '88_2.jpg', 1),
(89, 1659384185739, 'cc', 'ccc', 'rrrrrrrrrrrrrrrr', 'IT', 'General', 0, 'Magazine', 'published', '2022/08/02 01:33:05', 0, 0, 0, 1659384212713, 5, '89_Henna.pdf', '89_1.jpg', 0),
(90, 1659411436388, 'test55', 'csdc', 'push their existing project to GitHub. To save those readers from going through the entire example, here are the Git commands used in this tutorial. These commands assume a push to a GitHub repo named existing-website, owned by a GitHub user named cameronmcnz', 'BMS', 'Thesis', 0, 'PDF', 'draft', '2022/08/02 09:07:16', 0, 0, 0, 1659413701869, 5, '90_library(3).sql', '90_image.png', 1),
(91, 1659412981287, 'The Sonic Boom', 'Joel', 'Social Boom!: How to Master Business Social Media to Brand Yourself, Sell Yourself, Sell Your Product, Dominate Your Industry Market, Save Your Butt, ... and Grind Your Competition Into the Dirt', 'Psychology', 'General', 0, 'Book', 'published', '2022/08/02 09:33:01', 0, 0, 0, 1659413293193, 5, '91_kiu_document.sql', '91_category-filter-img-01.jpg', 1),
(92, 1659413882403, 'Foundation Of Professional Nursing', 'Thamindu', 'Check out results for Nursing eBooks. Search for Nursing eBooks at Faqtoids. Related Searches. Internet Information. Search Now. Quality Results. Popular Searches. Find Answers. Types: Home & Garden, Finance, Vehicles', 'Nursing', 'General', 0, 'Journal', 'published', '2022/08/02 09:48:02', 0, 0, 0, 1659413895371, 5, '92_SWMSMobileModernization-WeeklyStatusUpdate[08-07-22].pdf', '92_category-filter-img-02.jpg', 1),
(93, 1659414015317, 'Transitions to Professional Nursing Practice 2nd Edition', 'Vinura', 'Check out results for Nursing eBooks. Search for Nursing eBooks at Faqtoids. Related Searches. Internet Information. Search Now. Quality Results. Popular Searches. Find Answers. Types: Home & Garden, Finance, Vehicles', 'Nursing', 'General', 0, 'Book', 'published', '2022/08/02 09:50:15', 0, 0, 0, 1659414022955, 5, '93_InitiateSingleEntryPaymentSummaryUX313-07-202220_40_54.pdf', '93_category-filter-img-06.jpg', 1),
(94, 1659415105063, 'Book1', 'Author1', 'Check out results for Nursing eBooks. Search for Nursing eBooks at Faqtoids. Related Searches. Internet Information. Search Now. Quality Results. Popular Searches. Find Answers. Types: Home & Garden, Finance, Vehicles', 'IT', 'General', 0, 'Book', 'draft', '2022/08/02 10:08:25', 0, 0, 0, 1659879557304, 5, '94_SLABS-HowtoinstallCiscoAnyConnectSecureMobilityClient-040718-0506(1).pdf', '94_category-filter-img-04.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kiu_eresource`
--
ALTER TABLE `kiu_eresource`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kiu_eresource`
--
ALTER TABLE `kiu_eresource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
