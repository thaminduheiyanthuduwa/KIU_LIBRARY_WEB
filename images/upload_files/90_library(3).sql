

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
(17, 1659370227529, 'PubMed', 'PubMed is a free search engine accessing primarily the MEDLINE database of references and abstracts on life sciences and biomedical topics. The United States National Library of Medicine at the National Institutes of Health maintain the database as part of the Entrez system of information retrieval', 'https://pubmed.ncbi.nlm.nih.gov/', '17_pubmed-gov-logo-vector.png', NULL, 1659370297773, 5, '2022/08/01 21:40:27', 'published', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kiu_edocument`
--

CREATE TABLE `kiu_edocument` (
  `id` int(11) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `cover_photo` varchar(1000) DEFAULT NULL,
  `document` varchar(1000) DEFAULT NULL,
  `added_user` int(11) DEFAULT NULL,
  `last_updated_time` bigint(20) DEFAULT NULL,
  `last_updated_user` int(11) DEFAULT NULL,
  `display_time` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kiu_edocument`
--

INSERT INTO `kiu_edocument` (`id`, `timestamp`, `title`, `description`, `cover_photo`, `document`, `added_user`, `last_updated_time`, `last_updated_user`, `display_time`, `status`, `is_active`) VALUES
(2, 1659376392181, 'cewdeeeddddss', 'A document is a written, drawn, presented, or memorialized representation of thought, often the manifestation of non-fictional, as well as fictional, content. The word originates from the Latin Documentum, which denotes a \"teaching\" or \"lesson\": the verb doceō denotes \"to teach\"', '2_research4life-web.png', '2_research4life-web.png', 1, 1659377727620, 5, '2022/08/01 23:23:12', 'published', 1);

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
(85, 1659330647806, 'ccc', 'cwdf', 'Tealium is a US headquartered American company founded in 2008 in San Diego, California that sells enterprise tag management, an API hub, a customer data platform with machine learning, and data management products. It has offices in the US, Singapore, UK, Germany, Japan, Netherlands, France and Australia', 'Nursing', 'Thesis', 0, 'Book', 'published', '2022/08/01 10:40:47', 0, 0, 0, 1659333336761, 5, '85_Hint9-ScavengerHunt_protected.pdf', '85_1.jpg', 1),
(86, 1659331194722, 'cdsdcsc', 'csdccac', 'Tealium is a US headquartered American company founded in 2008 in San Diego, California that sells enterprise tag management, an API hub, a customer data platform with machine learning, and data management products. It has offices in the US, Singapore, UK, Germany, Japan, Netherlands, France and Australia', 'BMS', 'General', 0, 'PDF', 'published', '2022/08/01 10:49:54', 0, 0, 0, 1659331194722, 0, '86_NewLibrarywebsitereport-KIU(1).pdf', '86_2.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kiu_edatabase`
--
ALTER TABLE `kiu_edatabase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kiu_edocument`
--
ALTER TABLE `kiu_edocument`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kiu_eresource`
--
ALTER TABLE `kiu_eresource`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kiu_edatabase`
--
ALTER TABLE `kiu_edatabase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kiu_edocument`
--
ALTER TABLE `kiu_edocument`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kiu_eresource`
--
ALTER TABLE `kiu_eresource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
