-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 08:10 AM
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
-- Table structure for table `kiu_edatabase`
--

CREATE TABLE `kiu_edatabase` (
  `id` int(11) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `url` varchar(10000) DEFAULT NULL,
  `cover_photo` varchar(1000) DEFAULT NULL,
  `added_user` int(11) DEFAULT NULL,
  `last_updated_time` bigint(20) DEFAULT NULL,
  `last_updated_user` int(11) DEFAULT NULL,
  `display_time` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kiu_edatabase`
--

INSERT INTO `kiu_edatabase` (`id`, `timestamp`, `title`, `description`, `url`, `cover_photo`, `added_user`, `last_updated_time`, `last_updated_user`, `display_time`, `status`, `is_active`) VALUES
(11, 1659368861466, 'vsdvs', 'dsvs', 'cacaca', '', NULL, 1659368861466, 1, '2022/08/01 21:17:41', 'draft', 0),
(12, 1659368864019, 'vsdvscaca', 'dsvs', 'cacaca', '', 1, 1659369252726, 5, '2022/08/01 21:17:44', 'published', 0),
(13, 1659369266602, 'rrrr', 'cca', 'ssss', '13_2.jpg', 1, 1659369286296, 5, '2022/08/01 21:24:26', 'draft', 0),
(14, 1659369857280, 'Research4life', 'Research4Life, is a platform and website dedicated to making peer-reviewed knowledge public to students and researchers in lower income countries. Research4Life provides free or low cost access to academic and professional peer-reviewed content online', 'https://www.research4life.org/', '14_research4life-web.png', NULL, 1659370287031, 5, '2022/08/01 21:34:17', 'published', 1),
(15, 1659370019080, 'Bielefeld Academic Search Engine', 'BASE is a multi-disciplinary search engine to scholarly internet resources, created by Bielefeld University Library in Bielefeld, Germany. It is based on free and open-source software such as Apache Solr and VuFind', 'https://www.base-search.net/', '15_base.jpg', NULL, 1659370291460, 5, '2022/08/01 21:36:59', 'published', 1),
(16, 1659370140128, '(Directory of Open Access Journals', 'The Directory of Open Access Journals is a website that hosts a community-curated list of open access journals, maintained by Infrastructure Services for Open Access. It was launched in 2003 with 300 open access journals', 'https://doaj.org/', '16_1_dHS3JFlAbG4z_6oMzJoeTw.jpeg', NULL, 1659370294578, 5, '2022/08/01 21:39:00', 'published', 1),
(17, 1659370227529, 'PubMed', 'PubMed is a free search engine accessing primarily the MEDLINE database of references and abstracts on life sciences and biomedical topics. The United States National Library of Medicine at the National Institutes of Health maintain the database as part of the Entrez system of information retrieval', 'https://pubmed.ncbi.nlm.nih.gov/', '17_pubmed-gov-logo-vector.png', NULL, 1659370297773, 5, '2022/08/01 21:40:27', 'published', 1),
(18, 1659415319225, 'Database1', 'Test Database', 'www.google.com', '18_category-filter-img-08.jpg', NULL, 1659415328180, 5, '2022/08/02 10:11:59', 'published', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kiu_edatabase`
--
ALTER TABLE `kiu_edatabase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kiu_edatabase`
--
ALTER TABLE `kiu_edatabase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
