-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 06:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prow_datacenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `prow_alumni_requirements`
--

CREATE TABLE `prow_alumni_requirements` (
  `prow_alumni_id` int(11) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_scholar_resume` text NOT NULL,
  `prow_scholar_website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prow_barangay`
--

CREATE TABLE `prow_barangay` (
  `prow_brgy_id` int(11) NOT NULL,
  `prow_mun_id` int(11) NOT NULL,
  `prow_brgy_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_barangay`
--

INSERT INTO `prow_barangay` (`prow_brgy_id`, `prow_mun_id`, `prow_brgy_name`) VALUES
(1, 1, 'Aplaya'),
(2, 1, 'Balabag'),
(3, 1, 'San Jose (Balutakay)'),
(4, 1, 'Binaton'),
(5, 1, 'Cogon'),
(6, 1, 'Colorado'),
(7, 1, 'Dawis'),
(8, 1, 'Dulangan'),
(9, 1, 'Goma'),
(10, 1, 'Igpit'),
(11, 1, 'Kiagot'),
(12, 1, 'Lungag'),
(13, 1, 'Mahayahay'),
(14, 1, 'Matti'),
(15, 1, 'Kapatagan (Rizal)'),
(16, 1, 'Ruparan'),
(17, 1, 'San Agustin'),
(18, 1, 'San Miguel (Odaca)'),
(19, 1, 'San Roque'),
(20, 1, 'Sinawilan'),
(21, 1, 'Soong'),
(22, 1, 'Tiguman'),
(23, 1, 'Tres De Mayo'),
(24, 1, 'Zone 1'),
(25, 1, 'Zone 2'),
(26, 1, 'Zone 3'),
(27, 2, 'Alegre'),
(28, 2, 'Alta Vista'),
(29, 2, 'Anonang'),
(30, 2, 'Bitaug'),
(31, 2, 'Bonifacio'),
(32, 2, 'Buenavista'),
(33, 2, 'Darapuay'),
(34, 2, 'Dolo'),
(35, 2, 'Eman'),
(36, 2, 'Kinuskusan'),
(37, 2, 'Libertad'),
(38, 2, 'Linawan'),
(39, 2, 'Mabuhay'),
(40, 2, 'Mabunga'),
(41, 2, 'Managa'),
(42, 2, 'Marber'),
(43, 2, 'New Clarin'),
(44, 2, 'Poblacion Uno'),
(45, 2, 'Poblacion Dos'),
(46, 2, 'Rizal'),
(47, 2, 'Santo Niño'),
(48, 2, 'Sibayan'),
(49, 2, 'Tinongtongan'),
(50, 2, 'Tubod'),
(51, 2, 'Union'),
(52, 3, 'Aplaya'),
(53, 3, 'Balutakay'),
(54, 3, 'Clib'),
(55, 3, 'Guihing'),
(56, 3, 'Hagonoy Crossing'),
(57, 3, 'Kibuaya'),
(58, 3, 'La Union'),
(59, 3, 'Lanuro'),
(60, 3, 'Lapulabao'),
(61, 3, 'Leling'),
(62, 3, 'Mahayahay'),
(63, 3, 'Malabang Damsite'),
(64, 3, 'Maliit Digos'),
(65, 3, 'New Quezon'),
(66, 3, 'Paligue'),
(67, 3, 'Poblacion'),
(68, 3, 'Sacub'),
(69, 3, 'San Guillermo'),
(70, 3, 'San Isidro'),
(71, 3, 'Sinayawan'),
(72, 3, 'Tologan'),
(73, 4, 'Abnate'),
(74, 4, 'Bagong Negros'),
(75, 4, 'Bagong Silang'),
(76, 4, 'Bagumbayan'),
(77, 4, 'Balasiao'),
(78, 4, 'Bonifacio'),
(79, 4, 'Bunot'),
(80, 4, 'Cogon-Bacaca'),
(81, 4, 'Dapok'),
(82, 4, 'Ihan'),
(83, 4, 'Kibongbong'),
(84, 4, 'Kimlawis'),
(85, 4, 'Kisulan'),
(86, 4, 'Lati-an'),
(87, 4, 'Manual'),
(88, 4, 'Maraga-a'),
(89, 4, 'Molopolo'),
(90, 4, 'New Sibonga'),
(91, 4, 'Panaglib'),
(92, 4, 'Pasig'),
(93, 4, 'Poblacion'),
(94, 4, 'Pocaleel'),
(95, 4, 'San Isidro'),
(96, 4, 'San Jose'),
(97, 4, 'San Pedro'),
(98, 4, 'Santo Niño'),
(99, 4, 'Tacub'),
(100, 4, 'Tacul'),
(101, 4, 'Waterfall'),
(102, 4, 'Bulol-Salo'),
(103, 5, 'Bacungan'),
(104, 5, 'Balnate'),
(105, 5, 'Barayong'),
(106, 5, 'Blocon'),
(107, 5, 'Dalawinon'),
(108, 5, 'Dalumay'),
(109, 5, 'Glamang'),
(110, 5, 'Kanapulo'),
(111, 5, 'Kasuga'),
(112, 5, 'Lower Bala'),
(113, 5, 'Mabini'),
(114, 5, 'Malawanit'),
(115, 5, 'Malongon'),
(116, 5, 'New Ilocos'),
(117, 5, 'Poblacion (Kialeg)'),
(118, 5, 'San Isidro'),
(119, 5, 'San Miguel'),
(120, 5, 'Tacul'),
(121, 5, 'Tagaytay'),
(122, 5, 'Upper Bala'),
(123, 5, 'Maibo'),
(124, 5, 'New Opon'),
(125, 6, 'Bagumbayan'),
(126, 6, 'Baybay'),
(127, 6, 'Bolton'),
(128, 6, 'Bulacan'),
(129, 6, 'Caputian'),
(130, 6, 'Ibo'),
(131, 6, 'Kiblagon'),
(132, 6, 'Lapla'),
(133, 6, 'Mabini'),
(134, 6, 'New Baclayon'),
(135, 6, 'Pitu'),
(136, 6, 'Poblacion'),
(137, 6, 'Tagansule'),
(138, 6, 'Rizal (Parame)'),
(139, 6, 'San Isidro'),
(140, 7, 'Asbang'),
(141, 7, 'Asinan'),
(142, 7, 'Bagumbayan'),
(143, 7, 'Bangkal'),
(144, 7, 'Buas'),
(145, 7, 'Buri'),
(146, 7, 'Camanchiles'),
(147, 7, 'Ceboza'),
(148, 7, 'Colonsabak'),
(149, 7, 'Dongan-Pekong'),
(150, 7, 'Kabasagan'),
(151, 7, 'Kapok'),
(152, 7, 'Kauswagan'),
(153, 7, 'Kibao'),
(154, 7, 'La Suerte'),
(155, 7, 'Langa-an'),
(156, 7, 'Lower Marber'),
(157, 7, 'Cabligan (Managa)'),
(158, 7, 'Manga'),
(159, 7, 'New Katipunan'),
(160, 7, 'New Murcia'),
(161, 7, 'New Visayas'),
(162, 7, 'Poblacion'),
(163, 7, 'Saboy'),
(164, 7, 'San Jose'),
(165, 7, 'San Miguel'),
(166, 7, 'San Vicente'),
(167, 7, 'Saub'),
(168, 7, 'Sinaragan'),
(169, 7, 'Sinawilan'),
(170, 7, 'Tamlangon'),
(171, 7, 'Towak'),
(172, 7, 'Tibongbong'),
(173, 8, 'Almendras (Poblacion)'),
(174, 8, 'Don Sergio Osmena, Sr.'),
(175, 8, 'Harada Butai'),
(176, 8, 'Lower Katipunan'),
(177, 8, 'Lower Limonzo'),
(178, 8, 'Lower Malinao'),
(179, 8, 'NC Ordaneza District (Poblacion)'),
(180, 8, 'Northern Paligue'),
(181, 8, 'Palili'),
(182, 8, 'Piape'),
(183, 8, 'Punta Piape'),
(184, 8, 'Quirino District (Poblacion)'),
(185, 8, 'San Isidro'),
(186, 8, 'Southern Paligue'),
(187, 8, 'Tulugan'),
(188, 8, 'Upper Limonzo'),
(189, 8, 'Upper Malinao'),
(190, 9, 'Astorga'),
(191, 9, 'Bato'),
(192, 9, 'Coronon'),
(193, 9, 'Darong'),
(194, 9, 'Inawayan'),
(195, 9, 'Jose Rizal'),
(196, 9, 'Matutungan'),
(197, 9, 'Melilia'),
(198, 9, 'Saliducon'),
(199, 9, 'Sibulan'),
(200, 9, 'Sinoron'),
(201, 9, 'Tagabuli'),
(202, 9, 'Tibolo'),
(203, 9, 'Tuban'),
(204, 9, 'Zone I'),
(205, 9, 'Zone II'),
(206, 9, 'Zone III'),
(207, 9, 'Zone IV'),
(208, 10, 'Balasinon'),
(209, 10, 'Buguis'),
(210, 10, 'Carre'),
(211, 10, 'Clib'),
(212, 10, 'Harada Butai'),
(213, 10, 'Katipunan'),
(214, 10, 'Kiblagon'),
(215, 10, 'Labon'),
(216, 10, 'Laperas'),
(217, 10, 'Lapla'),
(218, 10, 'Litos'),
(219, 10, 'Luparan'),
(220, 10, 'Mckinley'),
(221, 10, 'New Cebu'),
(222, 10, 'Osmeña'),
(223, 10, 'Palili'),
(224, 10, 'Parame'),
(225, 10, 'Poblacion'),
(226, 10, 'Roxas'),
(227, 10, 'Solongvale'),
(228, 10, 'Tagolilong'),
(229, 10, 'Tala-o'),
(230, 10, 'Talas'),
(231, 10, 'Tanwalang'),
(232, 10, 'Waterfall');

-- --------------------------------------------------------

--
-- Table structure for table `prow_hei`
--

CREATE TABLE `prow_hei` (
  `prow_hei_id` int(11) NOT NULL,
  `prow_hei_code` varchar(50) NOT NULL,
  `prow_hei_name` varchar(50) NOT NULL,
  `prow_hei_logo` text NOT NULL,
  `prow_hei_cover_photo` text NOT NULL,
  `prow_hei_contact_person` varchar(50) NOT NULL,
  `prow_hei_contact` varchar(50) NOT NULL,
  `prow_hei_email` varchar(50) NOT NULL,
  `prow_hei_street` varchar(50) NOT NULL,
  `prow_hei_barangay` varchar(50) NOT NULL,
  `prow_hei_municipality` varchar(50) NOT NULL,
  `prow_hei_province` varchar(50) NOT NULL,
  `prow_hei_zip` varchar(50) NOT NULL,
  `prow_hei_lat` double NOT NULL,
  `prow_hei_long` double NOT NULL,
  `prow_hei_acct_status` int(11) NOT NULL DEFAULT 1,
  `prow_hei_created` datetime NOT NULL,
  `prow_hei_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_hei`
--

INSERT INTO `prow_hei` (`prow_hei_id`, `prow_hei_code`, `prow_hei_name`, `prow_hei_logo`, `prow_hei_cover_photo`, `prow_hei_contact_person`, `prow_hei_contact`, `prow_hei_email`, `prow_hei_street`, `prow_hei_barangay`, `prow_hei_municipality`, `prow_hei_province`, `prow_hei_zip`, `prow_hei_lat`, `prow_hei_long`, `prow_hei_acct_status`, `prow_hei_created`, `prow_hei_updated`) VALUES
(1, 'PQRS7890-230928155678', 'UM Digos College', '', '', 'Michael Brown', '09712371727', 'umindanao.edu.ph', 'Roxas Ext,', 'Zone 2', 'Digos CIty', 'Davao del Sur', '8002', 6.75017587061783, 125.35052536820952, 1, '2023-09-29 02:11:00', '2023-09-29 02:11:00'),
(2, '20231104223741sYrnj2w3su', 'Cor Jesu', '', '', 'Joane May Delima', '09282657552', 'joanemaydelima@gmail.com', 'Datoc Compound, Digos City', 'Aplaya', 'Digos City', 'Davao del Sur', '8002', 6.751216719909428, 125.3532739952844, 1, '2023-11-04 22:37:41', '2023-11-04 22:37:41'),
(3, '20231107075754AdjGSrex6X', 'Holy Cross', '', '', 'Ralph', '09282657552', 'joanemaydelima@gmail.com', 'Datoc Compound, Digos City', '', 'Bansalan', 'Davao del Sur', '8002', 0, 0, 1, '2023-11-06 15:57:54', '2023-11-06 15:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `prow_hei_course`
--

CREATE TABLE `prow_hei_course` (
  `prow_hei_course_id` int(11) NOT NULL,
  `prow_hei_id` int(11) NOT NULL,
  `prow_course_id` int(11) NOT NULL,
  `prow_course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_hei_course`
--

INSERT INTO `prow_hei_course` (`prow_hei_course_id`, `prow_hei_id`, `prow_course_id`, `prow_course_name`) VALUES
(1, 1, 44, 'Bachelor of Science in Information Technology'),
(2, 1, 39, 'Bachelor of Science in Criminology'),
(3, 1, 18, 'Bachelor of Science in Tourism Management'),
(4, 1, 45, 'Bachelor of Secondary Education major in English'),
(5, 1, 46, 'Bachelor of Secondary Education major in Filipino'),
(6, 1, 47, 'Bachelor of Secondary Education major in Mathematics'),
(7, 1, 48, 'Bachelor of Secondary Education major in Sciences'),
(8, 2, 1, 'Bachelor of Arts in Communication'),
(9, 2, 23, 'Bachelor of Arts in English Language'),
(10, 3, 1, 'Bachelor of Arts in Communication'),
(11, 3, 40, 'Bachelor of Elementary Education'),
(12, 2, 2, 'Bachelor of Arts in History');

-- --------------------------------------------------------

--
-- Table structure for table `prow_hei_subjects`
--

CREATE TABLE `prow_hei_subjects` (
  `prow_subject_id` int(11) NOT NULL,
  `prow_hei_course_id` int(11) NOT NULL,
  `prow_subject_code` varchar(20) NOT NULL,
  `prow_subject_desc` varchar(255) NOT NULL,
  `prow_subject_units` int(2) NOT NULL,
  `prow_subject_created` datetime NOT NULL,
  `prow_subject_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_hei_subjects`
--

INSERT INTO `prow_hei_subjects` (`prow_subject_id`, `prow_hei_course_id`, `prow_subject_code`, `prow_subject_desc`, `prow_subject_units`, `prow_subject_created`, `prow_subject_updated`) VALUES
(1, 8, '23423', 'Database Management 1', 6, '2023-11-15 12:43:39', '2023-11-15 13:02:01'),
(3, 8, '1112', 'Biology 1', 3, '2023-11-15 12:46:08', '2023-11-15 13:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `prow_industry`
--

CREATE TABLE `prow_industry` (
  `prow_industry_id` int(11) NOT NULL,
  `prow_industry_code` varchar(50) NOT NULL,
  `prow_industry_name` varchar(50) NOT NULL,
  `prow_industry_type` varchar(50) NOT NULL,
  `prow_industry_logo` text NOT NULL,
  `prow_industry_cover_photo` text NOT NULL,
  `prow_industry_about` varchar(255) NOT NULL,
  `prow_industry_benefits` varchar(100) NOT NULL,
  `prow_industry_company_size` int(11) NOT NULL,
  `prow_industry_working_hours` varchar(50) NOT NULL,
  `prow_industry_dress_code` varchar(50) NOT NULL,
  `prow_industry_cont_person` varchar(50) NOT NULL,
  `prow_industry_contact` varchar(50) NOT NULL,
  `prow_industry_email` varchar(50) NOT NULL,
  `prow_industry_building_no` varchar(50) NOT NULL,
  `prow_industry_street` varchar(50) NOT NULL,
  `prow_industry_purok` varchar(50) NOT NULL,
  `prow_industry_barangay` varchar(50) NOT NULL,
  `prow_industry_municipality` varchar(50) NOT NULL,
  `prow_industry_province` varchar(50) NOT NULL,
  `prow_industry_zip` varchar(50) NOT NULL,
  `prow_industry_lat` double NOT NULL,
  `prow_industry_long` double NOT NULL,
  `prow_industry_acct_status` int(11) NOT NULL DEFAULT 1,
  `prow_industry_created` datetime NOT NULL,
  `prow_industry_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_industry`
--

INSERT INTO `prow_industry` (`prow_industry_id`, `prow_industry_code`, `prow_industry_name`, `prow_industry_type`, `prow_industry_logo`, `prow_industry_cover_photo`, `prow_industry_about`, `prow_industry_benefits`, `prow_industry_company_size`, `prow_industry_working_hours`, `prow_industry_dress_code`, `prow_industry_cont_person`, `prow_industry_contact`, `prow_industry_email`, `prow_industry_building_no`, `prow_industry_street`, `prow_industry_purok`, `prow_industry_barangay`, `prow_industry_municipality`, `prow_industry_province`, `prow_industry_zip`, `prow_industry_lat`, `prow_industry_long`, `prow_industry_acct_status`, `prow_industry_created`, `prow_industry_updated`) VALUES
(1, 'WXYZ6789-230928160000', 'TechSolutions Inc.', 'Information Technology', '', '', 'TechSolutions Inc. is a leading IT company specializing in software development and cybersecurity solutions.', 'Competitive salary, flexible work hours, professional growth opportunities, health and wellness prog', 500, 'Monday to Friday, 9:00 AM - 6:00 PM', 'Business Casual', 'Lisa Anderson', '09124726191', 'info@techsolutions.com', '123', 'Luna', 'Purok 2', 'Zone 1', 'Digos City', 'Davao del Sur', '8002', 6.7518, 125.3569, 1, '2023-09-29 02:15:52', '2023-09-29 02:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `prow_industry_reviews`
--

CREATE TABLE `prow_industry_reviews` (
  `prow_review_id` int(11) NOT NULL,
  `prow_industry_code` varchar(50) NOT NULL,
  `prow_review_ratings` int(11) NOT NULL,
  `prow_review_comment` varchar(255) NOT NULL,
  `prow_review_date_posted` datetime NOT NULL,
  `prow_review_date_updated` datetime NOT NULL,
  `prow_user_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prow_jobs`
--

CREATE TABLE `prow_jobs` (
  `prow_jobs_id` int(11) NOT NULL,
  `prow_industry_code` varchar(50) NOT NULL,
  `prow_jobs_code` varchar(50) NOT NULL,
  `prow_jobs_status` int(11) DEFAULT 1,
  `prow_jobs_title` varchar(50) NOT NULL,
  `prow_jobs_tags` varchar(50) NOT NULL,
  `prow_jobs_position` varchar(50) NOT NULL,
  `prow_jobs_description` varchar(255) NOT NULL,
  `prow_jobs_min_requirements` varchar(255) NOT NULL,
  `prow_jobs_requirements` varchar(255) NOT NULL,
  `prow_jobs_type` varchar(50) NOT NULL,
  `prow_jobs_qualification` varchar(255) NOT NULL,
  `prow_jobs_salary` varchar(50) NOT NULL,
  `prow_jobs_num_appl` int(11) NOT NULL,
  `prow_jobs_barangay` varchar(50) NOT NULL,
  `prow_jobs_municipality` varchar(50) NOT NULL,
  `prow_jobs_date_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_jobs`
--

INSERT INTO `prow_jobs` (`prow_jobs_id`, `prow_industry_code`, `prow_jobs_code`, `prow_jobs_status`, `prow_jobs_title`, `prow_jobs_tags`, `prow_jobs_position`, `prow_jobs_description`, `prow_jobs_min_requirements`, `prow_jobs_requirements`, `prow_jobs_type`, `prow_jobs_qualification`, `prow_jobs_salary`, `prow_jobs_num_appl`, `prow_jobs_barangay`, `prow_jobs_municipality`, `prow_jobs_date_posted`) VALUES
(1, 'WXYZ6789-230928160000', 'WXY22133-230928160000', 1, 'Software Developer', 'Software, Development, IT, Programming', 'Junior Programmer', 'TechSolutions Inc. is seeking a talented Software ', 'Bachelor\'s degree', 'Experience with web development', 'Full-time', '2+ years of software development', '20,000', 20, 'Zone 1', 'Digos City', '2023-09-29 02:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `prow_list_course`
--

CREATE TABLE `prow_list_course` (
  `prow_course_id` int(4) NOT NULL,
  `prow_course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_list_course`
--

INSERT INTO `prow_list_course` (`prow_course_id`, `prow_course_name`) VALUES
(1, 'Bachelor of Arts in Communication'),
(2, 'Bachelor of Arts in History'),
(3, 'Bachelor of Arts in Political Science'),
(4, 'Bachelor of Arts in Theology'),
(5, 'Bachelor of Library and Information Science'),
(6, 'Bachelor of Science in Agribusiness'),
(7, 'Bachelor of Science in Agricultural and Biosystems Engineering'),
(8, 'Bachelor of Science in Agroforestry'),
(9, 'Bachelor of Science in Civil Engineering'),
(10, 'Bachelor of Science in Commerce'),
(11, 'Bachelor of Science in Development Communication'),
(12, 'Bachelor of Science in Electronics Engineering'),
(13, 'Bachelor of Science in Hotel and Restaurant Management'),
(14, 'Bachelor of Science in Information Systems'),
(15, 'Bachelor of Science in Mathematics'),
(16, 'Bachelor of Science in Midwifery'),
(17, 'Bachelor of Science in Office Administration'),
(18, 'Bachelor of Science in Tourism Management'),
(19, 'Bachelor of Special Needs Education major in Generalist'),
(20, 'Bachelor of Technology and Livelihood Education'),
(21, 'Juris Doctor'),
(22, 'Teacher Certificate Program'),
(23, 'Bachelor of Arts in English Language'),
(24, 'Bachelor of Early Childhood Education'),
(25, 'Bachelor of Physical Education'),
(26, 'Bachelor of Public Administration'),
(27, 'Bachelor of Science in Accounting Information Systems'),
(28, 'Bachelor of Science in Accounting Technology (now Accounting Information System)'),
(29, 'Bachelor of Science in Agriculture'),
(30, 'Bachelor of Science in Computer Engineering'),
(31, 'Bachelor of Science in Computer Science'),
(32, 'Bachelor of Science in Nursing'),
(33, 'Bachelor of Science in Psychology'),
(34, 'Bachelor of Science in Radiologic Technology'),
(35, 'Bachelor of Technical-Vocational Teacher Education'),
(36, 'Bachelor of Science in Accountancy'),
(37, 'Bachelor of Science in Hospitality Management'),
(38, 'Bachelor of Science in Management Accounting'),
(39, 'Bachelor of Science in Criminology'),
(40, 'Bachelor of Elementary Education'),
(41, 'Bachelor of Science in Business Administration major in Human Resource Management'),
(42, 'Bachelor of Science in Business Administration major in Marketing Management'),
(43, 'Bachelor of Science in Business Administration major in Financial Management'),
(44, 'Bachelor of Science in Information Technology'),
(45, 'Bachelor of Secondary Education major in English'),
(46, 'Bachelor of Secondary Education major in Filipino'),
(47, 'Bachelor of Secondary Education major in Mathematics'),
(48, 'Bachelor of Secondary Education major in Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `prow_list_highschool`
--

CREATE TABLE `prow_list_highschool` (
  `prow_highschool_id` int(11) NOT NULL,
  `prow_highschool` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prow_list_occu`
--

CREATE TABLE `prow_list_occu` (
  `prow_occu_id` int(11) NOT NULL,
  `prow_occu_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_list_occu`
--

INSERT INTO `prow_list_occu` (`prow_occu_id`, `prow_occu_name`) VALUES
(1, 'Accountant'),
(2, 'Architect'),
(3, 'Bank teller'),
(4, 'BPO/Call center agent'),
(5, 'Carpenter'),
(6, 'Cashier'),
(7, 'Chef/Cook'),
(8, 'Civil engineer'),
(9, 'Customer service representative'),
(10, 'Doctor'),
(11, 'Electrician'),
(12, 'Farmer'),
(13, 'Fisherman'),
(14, 'Graphic designer'),
(15, 'Hairdresser/Barber'),
(16, 'Hotel receptionist'),
(17, 'Housekeeper'),
(18, 'HR manager'),
(19, 'Insurance agent'),
(20, 'IT professional'),
(21, 'Journalist'),
(22, 'Lawyer'),
(23, 'Marketing executive'),
(24, 'Mechanic'),
(25, 'Nurse'),
(26, 'Pharmacist'),
(27, 'Photographer'),
(28, 'Police officer'),
(29, 'Professor/Teacher'),
(30, 'Real estate agent'),
(31, 'Sales representative'),
(32, 'Seafarer/Maritime worker'),
(33, 'Security guard'),
(34, 'Software developer/Programmer'),
(35, 'Store manager'),
(36, 'Taxi/Jeepney/Tricycle driver'),
(37, 'Tour guide'),
(38, 'Travel agent'),
(39, 'Veterinarian'),
(40, 'Web developer'),
(41, 'Welder'),
(42, 'Writer/Editor'),
(43, 'Dental assistant'),
(44, 'Event planner'),
(45, 'Flight attendant'),
(46, 'Government employee'),
(47, 'Interior designer'),
(48, 'Marketing coordinator'),
(49, 'Personal trainer'),
(50, 'Social media manager'),
(51, 'Programmer'),
(52, 'Freelancer'),
(53, 'Business Owner');

-- --------------------------------------------------------

--
-- Table structure for table `prow_list_skill`
--

CREATE TABLE `prow_list_skill` (
  `prow_skills_id` int(11) NOT NULL,
  `prow_skill_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_list_skill`
--

INSERT INTO `prow_list_skill` (`prow_skills_id`, `prow_skill_name`) VALUES
(1, 'Define and access information needs'),
(2, 'Assess and organize information and knowledge'),
(3, 'Produce, share, and utilize information and knowledge'),
(4, 'Communicate in different formats and platforms (print, broadcast, and online)'),
(5, 'Prepare communication or media plan'),
(6, 'Conduct communication and media research and evaluation'),
(7, 'Develop and produce communication materials in different formats and platforms'),
(8, 'Demonstrate communication management and leadership skills'),
(9, 'Develop entrepreneurial capabilities'),
(10, 'Adhere to ethical standards and practices'),
(11, 'Know and practice rights and responsibilities and accountabilities in the communication profession'),
(12, 'Demonstrate a development orientation in communication work'),
(13, 'Apply communication theories and models, principles, practices, and tool sin development work');

-- --------------------------------------------------------

--
-- Table structure for table `prow_list_sy`
--

CREATE TABLE `prow_list_sy` (
  `prow_sy_id` int(11) NOT NULL,
  `prow_school_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_list_sy`
--

INSERT INTO `prow_list_sy` (`prow_sy_id`, `prow_school_year`) VALUES
(1, '2021-2022'),
(2, '2022-2023'),
(3, '2023-2024');

-- --------------------------------------------------------

--
-- Table structure for table `prow_list_talents`
--

CREATE TABLE `prow_list_talents` (
  `prow_talent_id` int(11) NOT NULL,
  `prow_talent_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_list_talents`
--

INSERT INTO `prow_list_talents` (`prow_talent_id`, `prow_talent_name`) VALUES
(1, 'Singing'),
(2, 'Dancing'),
(3, 'Acting'),
(4, 'Painting'),
(5, 'Drawing'),
(6, 'Writing'),
(7, 'Playing a musical instrument (e.g., piano, guitar, violin)'),
(8, 'Composing music'),
(9, 'Sculpting'),
(10, 'Photography'),
(11, 'Cooking'),
(12, 'Sewing'),
(13, 'Designing clothes'),
(14, 'Graphic design'),
(15, 'Poetry'),
(16, 'Public speaking'),
(17, 'Playing sports (e.g., basketball, soccer, tennis)'),
(18, 'Chess playing'),
(19, 'Coding/Programming'),
(20, 'Problem-solving'),
(21, 'Leadership'),
(22, 'Negotiation'),
(23, 'Critical thinking'),
(24, 'Scientific research'),
(25, 'Mathematical ability'),
(26, 'Crafting (e.g., woodworking, pottery, jewelry-making)'),
(27, 'Gardening'),
(28, 'Singing in multiple languages'),
(29, 'Storytelling'),
(30, 'Martial arts'),
(31, 'Yoga'),
(32, 'Teaching'),
(33, 'Mentoring'),
(34, 'Event planning'),
(35, 'Public relations'),
(36, 'Time management'),
(37, 'Organization'),
(38, 'Networking'),
(39, 'Entrepreneurship'),
(40, 'Analytical thinking'),
(41, 'Innovation'),
(42, 'Marketing'),
(43, 'Sales'),
(44, 'Multilingualism'),
(45, 'Problem-solving'),
(46, 'Empathy'),
(47, 'Animal training'),
(48, 'Voice-over work'),
(49, 'Magic tricks');

-- --------------------------------------------------------

--
-- Table structure for table `prow_municipalities`
--

CREATE TABLE `prow_municipalities` (
  `prow_mun_id` int(11) NOT NULL,
  `prow_mun_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_municipalities`
--

INSERT INTO `prow_municipalities` (`prow_mun_id`, `prow_mun_name`) VALUES
(1, 'Digos City'),
(2, 'Bansalan'),
(3, 'Hagonoy'),
(4, 'Kiblawan'),
(5, 'Magsaysay'),
(6, 'Malalag'),
(7, 'Matanao'),
(8, 'Padada'),
(9, 'Santa Cruz'),
(10, 'Sulop');

-- --------------------------------------------------------

--
-- Table structure for table `prow_my_project`
--

CREATE TABLE `prow_my_project` (
  `prow_proj_id` int(11) NOT NULL,
  `prow_proj_name` text NOT NULL,
  `prow_proj_address` text NOT NULL,
  `prow_proj_title` text NOT NULL,
  `prow_proj_origin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_my_project`
--

INSERT INTO `prow_my_project` (`prow_proj_id`, `prow_proj_name`, `prow_proj_address`, `prow_proj_title`, `prow_proj_origin`) VALUES
(1, 'PROWESS', 'UM Digos College', 'Provincial Workforce Enabling System Through Scholarship', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `prow_notifications`
--

CREATE TABLE `prow_notifications` (
  `prow_notif_id` int(11) NOT NULL,
  `prow_notif_type` varchar(10) NOT NULL,
  `prow_notif_text` text NOT NULL,
  `prow_notif_to` int(11) NOT NULL,
  `prow_notif_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_notifications`
--

INSERT INTO `prow_notifications` (`prow_notif_id`, `prow_notif_type`, `prow_notif_text`, `prow_notif_to`, `prow_notif_date`) VALUES
(1, 'attempt', 'Login Attempt - annimay', 0, '2023-10-23 15:38:19'),
(2, 'auth', 'Login - annimay', 0, '2023-10-23 15:41:32'),
(3, 'attempt', 'Login Attempt - annimay', 0, '2023-10-23 15:56:03'),
(4, 'auth', 'Login - annimay', 0, '2023-10-23 15:56:08'),
(5, 'auth', 'Login - annimay', 0, '2023-10-24 10:54:38'),
(6, 'auth', 'Login - annimay', 0, '2023-10-24 11:10:48'),
(7, 'auth', 'Login - annimay', 0, '2023-10-25 15:03:20'),
(8, 'attempt', 'Login Attempt - annimay', 0, '2023-10-26 11:44:41'),
(9, 'auth', 'Login - annimay', 0, '2023-10-26 11:44:47'),
(10, 'auth', 'Login - annimay', 0, '2023-10-27 14:03:55'),
(11, 'auth', 'Login - annimay', 0, '2023-10-29 15:34:07'),
(12, 'auth', 'Login - joannimay', 0, '2023-10-29 15:56:26'),
(13, 'auth', 'Login - annimay', 0, '2023-10-29 15:58:01'),
(14, 'attempt', 'Login Attempt - annimay', 0, '2023-10-29 21:57:16'),
(15, 'auth', 'Login - annimay', 0, '2023-10-29 21:57:36'),
(16, 'auth', 'Login - joannimay', 0, '2023-10-29 22:09:26'),
(17, 'auth', 'Login - joannimay', 0, '2023-10-29 22:11:52'),
(18, 'auth', 'Login - joannimay', 0, '2023-10-29 22:14:18'),
(19, 'auth', 'Login - joannimay', 0, '2023-10-29 23:03:57'),
(20, 'auth', 'Login - annimay', 0, '2023-10-29 23:06:24'),
(21, 'auth', 'Login - joannimay', 0, '2023-10-29 23:07:42'),
(22, 'auth', 'Login - annimay', 0, '2023-10-29 23:14:55'),
(23, 'auth', 'Login - joannimay', 0, '2023-10-30 12:36:51'),
(24, 'auth', 'Login - joannimay', 0, '2023-10-30 13:52:03'),
(25, 'auth', 'Login - annimay', 0, '2023-10-30 15:05:25'),
(26, 'auth', 'Login - joannimay', 0, '2023-10-31 09:26:04'),
(27, 'auth', 'Login - annimay', 0, '2023-10-31 12:10:41'),
(28, 'auth', 'Login - annimay', 0, '2023-10-31 12:53:47'),
(29, 'auth', 'Login - joannimay', 0, '2023-10-31 12:54:06'),
(30, 'attempt', 'Login Attempt - annimay', 0, '2023-10-31 14:00:20'),
(31, 'auth', 'Login - devmaster', 0, '2023-10-31 14:00:54'),
(32, 'auth', 'Login - devmaster', 0, '2023-10-31 14:13:42'),
(33, 'auth', 'Login - devmaster', 0, '2023-10-31 14:23:15'),
(34, 'auth', 'Login - devmaster', 0, '2023-10-31 14:29:32'),
(35, 'auth', 'Login - devmaster', 0, '2023-10-31 14:40:02'),
(36, 'auth', 'Login - devmaster', 0, '2023-10-31 14:40:44'),
(37, 'auth', 'Login - devmaster', 0, '2023-10-31 14:42:04'),
(38, 'auth', 'Login - devmaster', 0, '2023-10-31 14:44:16'),
(39, 'auth', 'Login - devmaster', 0, '2023-10-31 14:44:49'),
(40, 'auth', 'Login - devmaster', 0, '2023-10-31 14:45:15'),
(41, 'auth', 'Login - devmaster', 0, '2023-10-31 15:24:40'),
(42, 'auth', 'Login - devmaster', 0, '2023-10-31 15:29:19'),
(43, 'auth', 'Login - devmaster', 0, '2023-10-31 15:42:57'),
(44, 'auth', 'Login - devmaster', 0, '2023-10-31 15:49:50'),
(45, 'auth', 'Login - devmaster', 0, '2023-10-31 20:04:21'),
(46, 'auth', 'Login - devmaster', 0, '2023-11-01 10:16:57'),
(47, 'auth', 'Login - devmaster', 0, '2023-11-04 10:54:27'),
(48, 'attempt', 'Login Attempt - Annimay', 0, '2023-11-04 10:58:54'),
(49, 'auth', 'Login - Annimay', 0, '2023-11-04 11:02:13'),
(50, 'auth', 'Login - annimay', 0, '2023-11-04 11:33:25'),
(51, 'auth', 'Login - annimay', 0, '2023-11-04 13:17:24'),
(52, 'auth', 'Login - annimay', 0, '2023-11-04 20:29:01'),
(53, 'auth', 'Login - annimay', 0, '2023-11-04 22:02:25'),
(54, 'auth', 'Login - annimay', 0, '2023-11-04 22:15:36'),
(55, 'attempt', 'Login Attempt - annimay', 0, '2023-11-05 14:12:19'),
(56, 'auth', 'Login - annimay', 0, '2023-11-05 14:12:34'),
(57, 'auth', 'Login - annimay', 0, '2023-11-05 16:10:54'),
(58, 'auth', 'Login - annimay', 0, '2023-11-05 20:22:47'),
(59, 'auth', 'Login - annimay', 0, '2023-11-05 20:46:01'),
(60, 'attempt', 'Login Attempt - annimay', 0, '2023-11-05 23:05:56'),
(61, 'auth', 'Login - Annimay', 0, '2023-11-05 23:06:06'),
(62, 'auth', 'Login - annimay', 0, '2023-11-06 08:20:59'),
(63, 'auth', 'Login - annimay', 0, '2023-11-06 08:21:46'),
(64, 'auth', 'Login - annimay', 0, '2023-11-06 10:33:25'),
(65, 'attempt', 'Login Attempt - annimay', 0, '2023-11-06 11:18:06'),
(66, 'auth', 'Login - annimay', 0, '2023-11-06 11:18:46'),
(67, 'auth', 'Login - annimay', 0, '2023-11-06 11:19:23'),
(68, 'auth', 'Login - annimay', 0, '2023-11-06 11:30:58'),
(69, 'auth', 'Login - annimay', 0, '2023-11-06 11:33:46'),
(70, 'auth', 'Login - annimay', 0, '2023-11-06 11:51:58'),
(71, 'auth', 'Login - annimay', 0, '2023-11-06 11:53:39'),
(72, 'auth', 'Login - annimay', 0, '2023-11-06 12:50:50'),
(73, 'auth', 'Login - annimay', 0, '2023-11-06 13:00:11'),
(74, 'auth', 'Login - jomarie', 0, '2023-11-06 14:26:52'),
(75, 'auth', 'Login - Barney22', 0, '2023-11-06 14:43:36'),
(76, 'auth', 'Login - annimay', 0, '2023-11-06 15:49:52'),
(77, 'auth', 'Login - annimay', 0, '2023-11-06 15:54:02'),
(78, 'auth', 'Login - annimay', 0, '2023-11-06 16:06:08'),
(79, 'auth', 'Login - annimay', 0, '2023-11-07 11:23:47'),
(80, 'auth', 'Login - annimay', 0, '2023-11-07 13:35:55'),
(81, 'attempt', 'Login Attempt - annimay', 0, '2023-11-07 17:29:24'),
(82, 'auth', 'Login - annimay', 0, '2023-11-07 17:29:36'),
(83, 'auth', 'Login - annimay', 0, '2023-11-10 11:16:24'),
(84, 'auth', 'Login - annimay', 0, '2023-11-10 11:17:13'),
(85, 'auth', 'Login - annimay', 0, '2023-11-10 11:28:00'),
(86, 'auth', 'Login - annimay', 0, '2023-11-13 00:30:35'),
(87, 'auth', 'Login - annimay', 0, '2023-11-13 00:33:24'),
(88, 'attempt', 'Login Attempt - devmaster', 0, '2023-11-13 07:30:27'),
(89, 'attempt', 'Login Attempt - devmaster', 0, '2023-11-13 07:30:32'),
(90, 'auth', 'Login - annimay', 0, '2023-11-13 07:30:42'),
(91, 'auth', 'Login - annimay', 0, '2023-11-15 10:29:05'),
(92, 'auth', 'Login - annimay', 0, '2023-11-15 10:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `prow_notif_type`
--

CREATE TABLE `prow_notif_type` (
  `prow_notify_id` int(11) NOT NULL,
  `prow_notify_category` int(11) NOT NULL,
  `prow_notify_icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prow_otp`
--

CREATE TABLE `prow_otp` (
  `prow_otp_id` int(11) NOT NULL,
  `prow_otp_code` varchar(6) NOT NULL,
  `prow_user_code` varchar(50) NOT NULL,
  `prow_otp_status` int(1) NOT NULL,
  `prow_otp_created` datetime NOT NULL,
  `prow_otp_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_otp`
--

INSERT INTO `prow_otp` (`prow_otp_id`, `prow_otp_code`, `prow_user_code`, `prow_otp_status`, `prow_otp_created`, `prow_otp_updated`) VALUES
(1, '987525', '202311070330122dkOqNEDMi', 1, '2023-11-06 11:30:13', '2023-11-06 11:30:13'),
(2, '374066', '20231107062613TqKiMdHGMv', 1, '2023-11-06 14:26:13', '2023-11-06 14:26:13'),
(3, '847485', '20231107064135RNEwoa4c6a', 0, '2023-11-06 14:41:36', '2023-11-06 14:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `prow_scholar`
--

CREATE TABLE `prow_scholar` (
  `prow_scholar_id` int(11) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_scholar_school_id` varchar(50) NOT NULL,
  `prow_scholar_img` text NOT NULL,
  `prow_scholar_lastname` varchar(50) NOT NULL,
  `prow_scholar_firstname` varchar(50) NOT NULL,
  `prow_scholar_middlename` varchar(50) NOT NULL,
  `prow_scholar_suffix` varchar(25) NOT NULL,
  `prow_scholar_gender` varchar(10) NOT NULL,
  `prow_scholar_cs` varchar(10) NOT NULL,
  `prow_scholar_birthday` date NOT NULL,
  `prow_scholar_birthplace` varchar(50) NOT NULL,
  `prow_scholar_con` varchar(11) NOT NULL,
  `prow_scholar_email` varchar(50) NOT NULL,
  `prow_scholar_acct_status` int(11) NOT NULL DEFAULT 2,
  `prow_scholar_filled_up` int(11) NOT NULL DEFAULT 0,
  `prow_scholar_created` datetime NOT NULL,
  `prow_scholar_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_scholar`
--

INSERT INTO `prow_scholar` (`prow_scholar_id`, `prow_scholar_code`, `prow_scholar_school_id`, `prow_scholar_img`, `prow_scholar_lastname`, `prow_scholar_firstname`, `prow_scholar_middlename`, `prow_scholar_suffix`, `prow_scholar_gender`, `prow_scholar_cs`, `prow_scholar_birthday`, `prow_scholar_birthplace`, `prow_scholar_con`, `prow_scholar_email`, `prow_scholar_acct_status`, `prow_scholar_filled_up`, `prow_scholar_created`, `prow_scholar_updated`) VALUES
(1, '2023yDIcvq', '5233', '', 'Delima', 'Joane May', 'Berdera', '', 'Female', 'Single', '1994-02-06', 'Valenzuela Metro Manila', '9282657552', 'joanemaydelima@gmail.com', 2, 1, '2023-11-06 11:30:13', '2023-11-06 11:30:13'),
(2, '2023CLBuDX', '5233', '', 'Delima', 'Jom', 'Berdera', '', 'Female', 'Single', '1994-02-06', 'Valen', '9282657552', 'jmdelima@umindanao.edu.ph', 2, 1, '2023-11-06 14:26:13', '2023-11-06 14:26:13'),
(3, '2023rR2dEC', '5233', '', 'Dollesin', 'Jom', 'Parker', '', 'Male', 'Single', '1999-02-02', 'Digos City', '9373666373', 'umitachievers@gmail.com', 2, 1, '2023-11-06 14:41:35', '2023-11-06 14:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `prow_scholar_academe`
--

CREATE TABLE `prow_scholar_academe` (
  `prow_acad_id` int(11) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_scholar_app_logs_id` int(11) NOT NULL,
  `prow_acad_status` varchar(11) NOT NULL,
  `prow_acad_signature` text NOT NULL,
  `prow_acad_created` datetime NOT NULL,
  `prow_acad_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prow_scholar_address`
--

CREATE TABLE `prow_scholar_address` (
  `prow_address_id` int(11) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_address_description` varchar(50) NOT NULL,
  `prow_address_brgy` varchar(50) NOT NULL,
  `prow_address_municipality` varchar(50) NOT NULL,
  `prow_address_province` varchar(50) NOT NULL,
  `prow_address_zipcode` int(11) NOT NULL,
  `prow_address_created` datetime NOT NULL,
  `prow_address_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_scholar_address`
--

INSERT INTO `prow_scholar_address` (`prow_address_id`, `prow_scholar_code`, `prow_address_description`, `prow_address_brgy`, `prow_address_municipality`, `prow_address_province`, `prow_address_zipcode`, `prow_address_created`, `prow_address_updated`) VALUES
(1, '2023yDIcvq', 'Datoc Compound, Digos City', 'Zone 1', '1', 'Davao del Sur', 8002, '2023-11-06 11:30:13', '2023-11-06 11:30:13'),
(2, '2023CLBuDX', 'Datoc Compound, Digos City', 'Zone 1', '1', 'Davao del Sur', 8002, '2023-11-06 14:26:13', '2023-11-06 14:26:13'),
(3, '2023rR2dEC', 'Magsaysay', 'Mabini', '5', 'Davao del Sur', 8004, '2023-11-06 14:41:35', '2023-11-06 14:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `prow_scholar_app_logs`
--

CREATE TABLE `prow_scholar_app_logs` (
  `prow_scholar_app_logs_id` int(11) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_app_log_code` varchar(11) NOT NULL,
  `prow_application_type` int(11) NOT NULL,
  `prow_hei` varchar(255) NOT NULL,
  `prow_course` varchar(255) NOT NULL,
  `prow_yr_lvl` int(11) NOT NULL,
  `prow_sy` varchar(50) NOT NULL,
  `prow_sem` varchar(50) NOT NULL,
  `prow_app_logs_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_scholar_app_logs`
--

INSERT INTO `prow_scholar_app_logs` (`prow_scholar_app_logs_id`, `prow_scholar_code`, `prow_app_log_code`, `prow_application_type`, `prow_hei`, `prow_course`, `prow_yr_lvl`, `prow_sy`, `prow_sem`, `prow_app_logs_created`) VALUES
(1, '2023yDIcvq', '922741', 0, '1', 'Bachelor of Science in Information Technology', 1, '2023-2024', '1', '2023-11-06 11:33:01'),
(2, '2023CLBuDX', '424420', 0, '1', 'Bachelor of Secondary Education major in Mathematics', 1, '2023-2024', '1', '2023-11-06 14:31:11'),
(3, '2023rR2dEC', '512055', 0, '1', 'Bachelor of Science in Information Technology', 3, '2023-2024', '2', '2023-11-06 14:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `prow_scholar_educ_attain`
--

CREATE TABLE `prow_scholar_educ_attain` (
  `prow_educ_id` int(11) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_educ_school_id` int(11) NOT NULL,
  `prow_educ_year_graduated` varchar(10) NOT NULL,
  `prow_educ_degree` varchar(50) NOT NULL,
  `prow_educ_created` datetime NOT NULL,
  `prow_educ_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prow_scholar_employment`
--

CREATE TABLE `prow_scholar_employment` (
  `prow_emp_id` int(11) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_emp_company` varchar(50) NOT NULL,
  `prow_emp_postition` varchar(50) NOT NULL,
  `prow_emp_specialization` varchar(50) NOT NULL,
  `prow_emp_industry` varchar(50) NOT NULL,
  `prow_emp_date_from` datetime NOT NULL,
  `prow_emp_date_to` datetime NOT NULL,
  `prow_emp_created` datetime NOT NULL,
  `prow_emp_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prow_scholar_profile`
--

CREATE TABLE `prow_scholar_profile` (
  `prow_prof_id` int(11) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_prof_height` double NOT NULL,
  `prow_prof_weight` double NOT NULL,
  `prow_prof_blood_type` varchar(25) NOT NULL,
  `prow_prof_religion` varchar(25) NOT NULL,
  `prow_prof_talent` varchar(25) NOT NULL,
  `prow_prof_father` varchar(50) NOT NULL,
  `prow_prof_father_cont` varchar(11) NOT NULL,
  `prow_prof_father_occu` varchar(50) NOT NULL,
  `prow_prof_mother` varchar(50) NOT NULL,
  `prow_prof_mother_cont` varchar(11) NOT NULL,
  `prow_prof_mother_occu` varchar(50) NOT NULL,
  `prow_prof_guardian` varchar(50) NOT NULL,
  `prow_prof_guardian_cont` varchar(11) NOT NULL,
  `prow_prof_guardian_occu` varchar(50) NOT NULL,
  `prow_prof_created` datetime NOT NULL,
  `prow_prof_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_scholar_profile`
--

INSERT INTO `prow_scholar_profile` (`prow_prof_id`, `prow_scholar_code`, `prow_prof_height`, `prow_prof_weight`, `prow_prof_blood_type`, `prow_prof_religion`, `prow_prof_talent`, `prow_prof_father`, `prow_prof_father_cont`, `prow_prof_father_occu`, `prow_prof_mother`, `prow_prof_mother_cont`, `prow_prof_mother_occu`, `prow_prof_guardian`, `prow_prof_guardian_cont`, `prow_prof_guardian_occu`, `prow_prof_created`, `prow_prof_updated`) VALUES
(1, '2023yDIcvq', 149, 47, 'A+', 'Sikhism', 'Coding/Programming,Drawin', 'Julieto', '9232765442', 'Police officer', 'Margie', '9835467221', 'Business Owner', 'Jessa', '9863627222', 'Freelancer', '2023-11-06 11:33:00', '2023-11-06 11:33:00'),
(2, '2023CLBuDX', 12, 12, 'A+', 'Bahá\'í Faith', 'Coding/Programming,Cookin', 'Julieto', '9232765442', 'Freelancer', 'Margie', '9835467221', 'Freelancer', '', '', 'Select Occupation', '2023-11-06 14:31:11', '2023-11-06 14:31:11'),
(3, '2023rR2dEC', 145, 129, 'O+', 'Roman Catholicism', 'Acting,Chess playing', 'Julieto', '9232765442', 'Architect', 'Margie', '9835467221', 'Flight attendant', 'Jessa', '9863627222', 'Freelancer', '2023-11-06 14:45:14', '2023-11-06 14:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `prow_scholar_requirements`
--

CREATE TABLE `prow_scholar_requirements` (
  `prow_req_id` int(11) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_scholar_app_logs_code` varchar(11) NOT NULL,
  `prow_req_cert_low_income` text NOT NULL,
  `prow_req_endorsement` text NOT NULL,
  `prow_req_school_card` text NOT NULL,
  `prow_req_enrollment_form` text NOT NULL,
  `prow_req_birth_certificate` text NOT NULL,
  `prow_req_exam_score` int(11) NOT NULL,
  `prow_req_exam_date` datetime NOT NULL,
  `prow_req_interview_date` datetime NOT NULL,
  `prow_req_status` tinyint(1) NOT NULL,
  `prow_req_created` datetime NOT NULL,
  `prow_req_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_scholar_requirements`
--

INSERT INTO `prow_scholar_requirements` (`prow_req_id`, `prow_scholar_code`, `prow_scholar_app_logs_code`, `prow_req_cert_low_income`, `prow_req_endorsement`, `prow_req_school_card`, `prow_req_enrollment_form`, `prow_req_birth_certificate`, `prow_req_exam_score`, `prow_req_exam_date`, `prow_req_interview_date`, `prow_req_status`, `prow_req_created`, `prow_req_updated`) VALUES
(1, '2023yDIcvq', '922741', '20231107033300_5.png', '20231107033300_3.jpg', '20231107033300_4.jpg', '20231107033300_1.jpg', '20231107033300_2.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2023-11-06 11:33:01', '0000-00-00 00:00:00'),
(2, '2023CLBuDX', '424420', '20231107063111_5.png', '20231107063111_3.jpg', '20231107063111_4.jpg', '20231107063111_1.jpg', '20231107063111_2.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2023-11-06 14:31:11', '0000-00-00 00:00:00'),
(3, '2023rR2dEC', '512055', '20231107064514_3.jpg', '20231107064514_3.jpg', '20231107064514_5.png', '20231107064514_1.jpg', '20231107064514_2.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2023-11-06 14:45:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `prow_scholar_skills`
--

CREATE TABLE `prow_scholar_skills` (
  `prow_skills_id` int(11) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_skills` varchar(50) NOT NULL,
  `prow_skills_proficiency` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prow_transaction`
--

CREATE TABLE `prow_transaction` (
  `prow_trans_id` int(11) NOT NULL,
  `prow_jobs_code` varchar(50) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_trans_date_applied` datetime NOT NULL,
  `prow_trans_statement` text NOT NULL,
  `prow_trans_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prow_users`
--

CREATE TABLE `prow_users` (
  `prow_user_id` int(11) NOT NULL,
  `prow_user_code` varchar(50) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_user_fullname` varchar(100) NOT NULL,
  `prow_user_uname` varchar(25) NOT NULL,
  `prow_user_pword` varchar(100) NOT NULL,
  `prow_user_picture` text NOT NULL,
  `prow_user_type` int(11) NOT NULL,
  `prow_user_status` int(1) NOT NULL,
  `prow_user_verify` int(11) NOT NULL DEFAULT 0,
  `prow_user_last_location` text NOT NULL,
  `prow_user_created` datetime NOT NULL,
  `prow_user_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_users`
--

INSERT INTO `prow_users` (`prow_user_id`, `prow_user_code`, `prow_scholar_code`, `prow_user_fullname`, `prow_user_uname`, `prow_user_pword`, `prow_user_picture`, `prow_user_type`, `prow_user_status`, `prow_user_verify`, `prow_user_last_location`, `prow_user_created`, `prow_user_updated`) VALUES
(1, '202311070330122dkOqNEDMi', '2023yDIcvq', 'Joane May Delima', 'annimay', '1bbd886460827015e5d605ed44252251', '', 0, 0, 1, '', '2023-11-06 11:30:12', '2023-11-06 11:30:12'),
(2, '20231107062613TqKiMdHGMv', '2023CLBuDX', 'Jom Delima', 'Jomarie', '1bbd886460827015e5d605ed44252251', '', 4, 0, 1, '', '2023-11-06 14:26:13', '2023-11-06 14:26:13'),
(3, '20231107064135RNEwoa4c6a', '2023rR2dEC', 'Jom Dollesin', 'Barney22', '1bbd886460827015e5d605ed44252251', '', 4, 0, 1, '', '2023-11-06 14:41:35', '2023-11-06 14:41:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prow_alumni_requirements`
--
ALTER TABLE `prow_alumni_requirements`
  ADD PRIMARY KEY (`prow_alumni_id`);

--
-- Indexes for table `prow_barangay`
--
ALTER TABLE `prow_barangay`
  ADD PRIMARY KEY (`prow_brgy_id`);

--
-- Indexes for table `prow_hei`
--
ALTER TABLE `prow_hei`
  ADD PRIMARY KEY (`prow_hei_id`);

--
-- Indexes for table `prow_hei_course`
--
ALTER TABLE `prow_hei_course`
  ADD PRIMARY KEY (`prow_hei_course_id`);

--
-- Indexes for table `prow_hei_subjects`
--
ALTER TABLE `prow_hei_subjects`
  ADD PRIMARY KEY (`prow_subject_id`);

--
-- Indexes for table `prow_industry`
--
ALTER TABLE `prow_industry`
  ADD PRIMARY KEY (`prow_industry_id`);

--
-- Indexes for table `prow_industry_reviews`
--
ALTER TABLE `prow_industry_reviews`
  ADD PRIMARY KEY (`prow_review_id`);

--
-- Indexes for table `prow_jobs`
--
ALTER TABLE `prow_jobs`
  ADD PRIMARY KEY (`prow_jobs_id`);

--
-- Indexes for table `prow_list_course`
--
ALTER TABLE `prow_list_course`
  ADD PRIMARY KEY (`prow_course_id`);

--
-- Indexes for table `prow_list_occu`
--
ALTER TABLE `prow_list_occu`
  ADD PRIMARY KEY (`prow_occu_id`);

--
-- Indexes for table `prow_list_skill`
--
ALTER TABLE `prow_list_skill`
  ADD PRIMARY KEY (`prow_skills_id`);

--
-- Indexes for table `prow_list_sy`
--
ALTER TABLE `prow_list_sy`
  ADD PRIMARY KEY (`prow_sy_id`);

--
-- Indexes for table `prow_list_talents`
--
ALTER TABLE `prow_list_talents`
  ADD PRIMARY KEY (`prow_talent_id`);

--
-- Indexes for table `prow_municipalities`
--
ALTER TABLE `prow_municipalities`
  ADD PRIMARY KEY (`prow_mun_id`);

--
-- Indexes for table `prow_my_project`
--
ALTER TABLE `prow_my_project`
  ADD PRIMARY KEY (`prow_proj_id`);

--
-- Indexes for table `prow_notifications`
--
ALTER TABLE `prow_notifications`
  ADD PRIMARY KEY (`prow_notif_id`);

--
-- Indexes for table `prow_notif_type`
--
ALTER TABLE `prow_notif_type`
  ADD PRIMARY KEY (`prow_notify_id`);

--
-- Indexes for table `prow_otp`
--
ALTER TABLE `prow_otp`
  ADD PRIMARY KEY (`prow_otp_id`);

--
-- Indexes for table `prow_scholar`
--
ALTER TABLE `prow_scholar`
  ADD PRIMARY KEY (`prow_scholar_id`);

--
-- Indexes for table `prow_scholar_academe`
--
ALTER TABLE `prow_scholar_academe`
  ADD PRIMARY KEY (`prow_acad_id`);

--
-- Indexes for table `prow_scholar_address`
--
ALTER TABLE `prow_scholar_address`
  ADD PRIMARY KEY (`prow_address_id`);

--
-- Indexes for table `prow_scholar_app_logs`
--
ALTER TABLE `prow_scholar_app_logs`
  ADD PRIMARY KEY (`prow_scholar_app_logs_id`);

--
-- Indexes for table `prow_scholar_educ_attain`
--
ALTER TABLE `prow_scholar_educ_attain`
  ADD PRIMARY KEY (`prow_educ_id`);

--
-- Indexes for table `prow_scholar_employment`
--
ALTER TABLE `prow_scholar_employment`
  ADD PRIMARY KEY (`prow_emp_id`);

--
-- Indexes for table `prow_scholar_profile`
--
ALTER TABLE `prow_scholar_profile`
  ADD PRIMARY KEY (`prow_prof_id`);

--
-- Indexes for table `prow_scholar_requirements`
--
ALTER TABLE `prow_scholar_requirements`
  ADD PRIMARY KEY (`prow_req_id`);

--
-- Indexes for table `prow_scholar_skills`
--
ALTER TABLE `prow_scholar_skills`
  ADD PRIMARY KEY (`prow_skills_id`);

--
-- Indexes for table `prow_transaction`
--
ALTER TABLE `prow_transaction`
  ADD PRIMARY KEY (`prow_trans_id`);

--
-- Indexes for table `prow_users`
--
ALTER TABLE `prow_users`
  ADD PRIMARY KEY (`prow_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prow_alumni_requirements`
--
ALTER TABLE `prow_alumni_requirements`
  MODIFY `prow_alumni_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prow_barangay`
--
ALTER TABLE `prow_barangay`
  MODIFY `prow_brgy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `prow_hei`
--
ALTER TABLE `prow_hei`
  MODIFY `prow_hei_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prow_hei_course`
--
ALTER TABLE `prow_hei_course`
  MODIFY `prow_hei_course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prow_hei_subjects`
--
ALTER TABLE `prow_hei_subjects`
  MODIFY `prow_subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prow_industry`
--
ALTER TABLE `prow_industry`
  MODIFY `prow_industry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prow_jobs`
--
ALTER TABLE `prow_jobs`
  MODIFY `prow_jobs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prow_list_course`
--
ALTER TABLE `prow_list_course`
  MODIFY `prow_course_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `prow_list_occu`
--
ALTER TABLE `prow_list_occu`
  MODIFY `prow_occu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `prow_list_skill`
--
ALTER TABLE `prow_list_skill`
  MODIFY `prow_skills_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `prow_list_sy`
--
ALTER TABLE `prow_list_sy`
  MODIFY `prow_sy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prow_list_talents`
--
ALTER TABLE `prow_list_talents`
  MODIFY `prow_talent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `prow_municipalities`
--
ALTER TABLE `prow_municipalities`
  MODIFY `prow_mun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `prow_my_project`
--
ALTER TABLE `prow_my_project`
  MODIFY `prow_proj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prow_notifications`
--
ALTER TABLE `prow_notifications`
  MODIFY `prow_notif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `prow_notif_type`
--
ALTER TABLE `prow_notif_type`
  MODIFY `prow_notify_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prow_otp`
--
ALTER TABLE `prow_otp`
  MODIFY `prow_otp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prow_scholar`
--
ALTER TABLE `prow_scholar`
  MODIFY `prow_scholar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prow_scholar_academe`
--
ALTER TABLE `prow_scholar_academe`
  MODIFY `prow_acad_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prow_scholar_address`
--
ALTER TABLE `prow_scholar_address`
  MODIFY `prow_address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prow_scholar_app_logs`
--
ALTER TABLE `prow_scholar_app_logs`
  MODIFY `prow_scholar_app_logs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prow_scholar_educ_attain`
--
ALTER TABLE `prow_scholar_educ_attain`
  MODIFY `prow_educ_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prow_scholar_employment`
--
ALTER TABLE `prow_scholar_employment`
  MODIFY `prow_emp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prow_scholar_profile`
--
ALTER TABLE `prow_scholar_profile`
  MODIFY `prow_prof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prow_scholar_requirements`
--
ALTER TABLE `prow_scholar_requirements`
  MODIFY `prow_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prow_scholar_skills`
--
ALTER TABLE `prow_scholar_skills`
  MODIFY `prow_skills_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prow_transaction`
--
ALTER TABLE `prow_transaction`
  MODIFY `prow_trans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prow_users`
--
ALTER TABLE `prow_users`
  MODIFY `prow_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
