-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 10:09 AM
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
(1, 'PQRS7890-230928155678', 'UM Digos College', '', '', 'Person1', '09712371727', 'umindanao.edu.ph', 'Roxas Ext,', 'Zone 2', 'Digos CIty', 'Davao del Sur', '8002', 6.75017587061783, 125.35052536820952, 1, '2023-09-29 02:11:00', '2023-09-29 02:11:00'),
(2, '20231104223741sYrnj2w3su', 'Cor Jesu College', '', '', 'Person2', '09282657552', 'joanemaydelima@gmail.com', 'Datoc Compound, Digos City', 'Aplaya', 'Digos City', 'Davao del Sur', '8002', 6.751216719909428, 125.3532739952844, 1, '2023-11-04 22:37:41', '2023-11-04 22:37:41');

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
(12, 2, 2, 'Bachelor of Arts in History'),
(13, 1, 30, 'Bachelor of Science in Computer Engineering'),
(14, 1, 3, 'Bachelor of Arts in Political Science'),
(15, 1, 43, 'Bachelor of Science in Business Administration major in Financial Management');

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
(1, 1, 'GE 1', 'Understanding the Self', 3, '2023-11-19 14:57:13', '2023-11-19 14:57:13'),
(2, 1, 'GE 2', 'Purposive Communication with Interactive Learning', 6, '2023-11-19 14:57:51', '2023-11-19 14:57:51'),
(3, 1, 'GE 5', 'Science, Technology and Society', 3, '2023-11-19 14:58:23', '2023-11-19 14:58:23'),
(4, 1, 'GE 6', 'Rizal\'s Life and Works', 3, '2023-11-19 14:58:51', '2023-11-19 14:58:51'),
(5, 1, 'GPE 1', 'Movement Enhancement', 2, '2023-11-19 15:18:43', '2023-11-19 15:18:43'),
(6, 1, 'NSTP 1', 'National Service Training Program 1', 3, '2023-11-19 15:19:37', '2023-11-19 15:19:37'),
(7, 1, 'CCE101L', 'Introduction to Computing', 3, '2023-11-19 15:20:02', '2023-11-19 15:20:02'),
(8, 1, 'CCE102L', 'Computer Programming 1', 3, '2023-11-19 15:20:23', '2023-11-19 15:20:23'),
(9, 1, 'GE 15', 'Environmental Science', 3, '2023-11-19 15:20:57', '2023-11-19 15:20:57'),
(10, 1, 'UGE 1', 'Reading Comprehension', 6, '2023-11-19 15:21:16', '2023-11-19 15:21:16'),
(11, 1, 'IT 1L', 'Platform Technologies', 3, '2023-11-19 15:22:36', '2023-11-19 15:33:51'),
(12, 1, 'CCE103L', 'Computer Programming 2', 3, '2023-11-19 15:22:54', '2023-11-19 15:22:54'),
(13, 1, 'IT 2', 'Discrete Mathematics', 3, '2023-11-19 15:23:25', '2023-11-19 15:34:02'),
(14, 1, 'GE 4', 'Mathematics in the Modern World', 3, '2023-11-19 15:23:49', '2023-11-19 15:23:49'),
(15, 1, 'GPE 2', 'Fitness Exercises', 2, '2023-11-19 15:24:19', '2023-11-19 15:24:19'),
(16, 1, 'NSTP 2', 'National Service Training Program 2', 3, '2023-11-19 15:24:36', '2023-11-19 15:24:36'),
(17, 1, 'GE 3', 'The Contemporary World', 3, '2023-11-19 15:25:16', '2023-11-19 15:25:16'),
(18, 1, 'CCE104L', 'Information Management', 3, '2023-11-19 15:25:37', '2023-11-19 15:25:37'),
(19, 1, 'CCE105L', 'Data Structures and Algorithms', 3, '2023-11-19 15:26:02', '2023-11-19 15:26:02'),
(20, 1, 'IT 3L', 'Networking 1', 3, '2023-11-19 15:26:26', '2023-11-19 15:34:11'),
(21, 1, 'GE 20', 'Reading Visual Arts', 3, '2023-11-19 15:27:18', '2023-11-19 15:27:18'),
(22, 1, 'IT 4', 'Calculus 1', 3, '2023-11-19 15:27:36', '2023-11-19 15:34:17'),
(23, 1, 'IT 5L', 'IT Elective 2', 3, '2023-11-19 15:31:15', '2023-11-19 15:31:15'),
(24, 1, 'GPE 3', 'Physical Activities Towards Health & Fitness 1', 2, '2023-11-19 15:31:52', '2023-11-19 15:31:52'),
(25, 1, 'IT 6L', 'Fundamentals of Database Systems', 3, '2023-11-19 15:32:51', '2023-11-19 15:32:51'),
(26, 1, 'IT 7L', 'Introduction to Human Computer Interaction', 3, '2023-11-19 15:35:08', '2023-11-19 15:35:08'),
(27, 1, 'IT 8', 'Calculus 2', 3, '2023-11-19 15:35:43', '2023-11-19 15:35:43');

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
-- Table structure for table `prow_list_sy`
--

CREATE TABLE `prow_list_sy` (
  `prow_sy_id` int(11) NOT NULL,
  `prow_sy_year` varchar(255) NOT NULL,
  `prow_sy_current` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_list_sy`
--

INSERT INTO `prow_list_sy` (`prow_sy_id`, `prow_sy_year`, `prow_sy_current`) VALUES
(1, '2021-2022', 0),
(2, '2022-2023', 0),
(3, '2023-2024', 1);

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
(1, 'auth', 'Login - annimay', 0, '2023-11-17 16:07:28'),
(2, 'auth', 'Login - Admin', 0, '2023-11-18 22:08:13'),
(3, 'auth', 'Login - annimay', 0, '2023-11-19 01:48:37'),
(4, 'auth', 'Login - annimay', 0, '2023-11-19 01:49:27'),
(5, 'auth', 'Login - annimay', 0, '2023-11-19 01:50:47'),
(6, 'auth', 'Login - annimay', 0, '2023-11-19 02:08:26'),
(7, 'auth', 'Login - annimay', 0, '2023-11-19 02:12:26'),
(8, 'auth', 'Login - annimay', 0, '2023-11-19 03:18:36'),
(9, 'attempt', 'Login Attempt - annimay', 0, '2023-11-19 07:52:25'),
(10, 'attempt', 'Login Attempt - annimay', 0, '2023-11-19 07:52:44'),
(11, 'attempt', 'Login Attempt - annimay', 0, '2023-11-19 07:52:47'),
(12, 'auth', 'Login - annimay', 0, '2023-11-19 07:52:51'),
(13, 'auth', 'Login - admin', 0, '2023-11-19 14:29:06'),
(14, 'auth', 'Login - annimay', 0, '2023-11-20 09:41:15'),
(15, 'auth', 'Login - annimay', 0, '2023-11-20 09:45:50');

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
(1, '028350', '20231118080612pVj2qXKtmC', 1, '2023-11-17 16:06:12', '2023-11-17 16:06:12'),
(2, '654132', '20231119002745wxt302pl1c', 1, '2023-11-19 00:27:45', '2023-11-19 00:27:45');

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
  `prow_account_type` int(11) NOT NULL DEFAULT 1,
  `prow_initial_approve` int(11) NOT NULL,
  `prow_initial_updated` datetime NOT NULL DEFAULT current_timestamp(),
  `prow_scholar_filled_up` int(11) NOT NULL DEFAULT 0,
  `prow_scholar_created` datetime NOT NULL,
  `prow_scholar_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_scholar`
--

INSERT INTO `prow_scholar` (`prow_scholar_id`, `prow_scholar_code`, `prow_scholar_school_id`, `prow_scholar_img`, `prow_scholar_lastname`, `prow_scholar_firstname`, `prow_scholar_middlename`, `prow_scholar_suffix`, `prow_scholar_gender`, `prow_scholar_cs`, `prow_scholar_birthday`, `prow_scholar_birthplace`, `prow_scholar_con`, `prow_scholar_email`, `prow_scholar_acct_status`, `prow_account_type`, `prow_initial_approve`, `prow_initial_updated`, `prow_scholar_filled_up`, `prow_scholar_created`, `prow_scholar_updated`) VALUES
(2, '2023UzLJQS', '5321', '', 'Delima', 'Joane May', 'Berdera', '', 'Female', 'Single', '1994-02-06', 'Valenzuela', '9282657552', 'joanemaydelima@gmail.com', 2, 1, 0, '2023-11-19 00:27:45', 0, '2023-11-19 00:27:45', '2023-11-19 00:27:45');

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
  `prow_address_long` varchar(100) NOT NULL,
  `prow_address_lat` varchar(100) NOT NULL,
  `prow_address_created` datetime NOT NULL,
  `prow_address_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_scholar_address`
--

INSERT INTO `prow_scholar_address` (`prow_address_id`, `prow_scholar_code`, `prow_address_description`, `prow_address_brgy`, `prow_address_municipality`, `prow_address_province`, `prow_address_zipcode`, `prow_address_long`, `prow_address_lat`, `prow_address_created`, `prow_address_updated`) VALUES
(2, '2023UzLJQS', 'Datoc Compound, Digos City', 'Zone 1', 'Digos City', 'Davao del Sur', 8002, '125.35667111248539', '6.744658402510362', '2023-11-19 00:27:45', '2023-11-19 00:27:45');

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
(3, '2023UzLJQS', '671007', 0, '1', 'Bachelor of Science in Information Technology', 1, '2023-2024', '2', '2023-11-19 16:53:15'),
(4, '2023UzLJQS', '086114', 0, '1', 'Bachelor of Science in Information Technology', 1, '2023-2024', '2', '2023-11-20 16:08:08'),
(5, '2023UzLJQS', '198866', 0, '1', 'Bachelor of Science in Information Technology', 1, '2023-2024', '2', '2023-11-20 16:08:20'),
(6, '2023UzLJQS', '507848', 0, '1', 'Bachelor of Science in Information Technology', 1, '2023-2024', '2', '2023-11-20 16:09:38'),
(7, '2023UzLJQS', '025343', 0, '1', 'Bachelor of Science in Information Technology', 1, '2023-2024', '2', '2023-11-20 16:10:17'),
(8, '2023UzLJQS', '855103', 0, '1', 'Bachelor of Science in Information Technology', 1, '2023-2024', '2', '2023-11-20 16:11:30');

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
  `prow_prof_blood_type` varchar(5) NOT NULL,
  `prow_prof_religion` varchar(100) NOT NULL,
  `prow_prof_talent` text NOT NULL,
  `prow_prof_father` varchar(255) NOT NULL,
  `prow_prof_father_cont` varchar(11) NOT NULL,
  `prow_prof_father_occu` varchar(100) NOT NULL,
  `prow_prof_mother` varchar(255) NOT NULL,
  `prow_prof_mother_cont` varchar(11) NOT NULL,
  `prow_prof_mother_occu` varchar(100) NOT NULL,
  `prow_prof_guardian` varchar(255) NOT NULL,
  `prow_prof_guardian_cont` varchar(11) NOT NULL,
  `prow_prof_guardian_occu` varchar(100) NOT NULL,
  `prow_prof_income` varchar(50) NOT NULL,
  `prow_prof_created` datetime NOT NULL,
  `prow_prof_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_scholar_profile`
--

INSERT INTO `prow_scholar_profile` (`prow_prof_id`, `prow_scholar_code`, `prow_prof_height`, `prow_prof_weight`, `prow_prof_blood_type`, `prow_prof_religion`, `prow_prof_talent`, `prow_prof_father`, `prow_prof_father_cont`, `prow_prof_father_occu`, `prow_prof_mother`, `prow_prof_mother_cont`, `prow_prof_mother_occu`, `prow_prof_guardian`, `prow_prof_guardian_cont`, `prow_prof_guardian_occu`, `prow_prof_income`, `prow_prof_created`, `prow_prof_updated`) VALUES
(1, '2023UzLJQS', 149, 49, 'AB+', 'Sikhism', 'Coding/Programming,Analytical thinking,Drawing', 'Julieto Delima', '9254537776', 'Police officer', 'Margie Delima', '9209844337', 'Business Owner', 'Jessa Delima', '9123229876', 'Business Owner', '₱9,100 - ₱18,000', '2023-11-19 16:51:54', '2023-11-20 16:11:30');

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
(3, '2023UzLJQS', '671007', '', '', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2023-11-19 16:53:15', '0000-00-00 00:00:00'),
(4, '2023UzLJQS', '086114', '', '', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2023-11-20 16:08:08', '0000-00-00 00:00:00'),
(5, '2023UzLJQS', '198866', '', '', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2023-11-20 16:08:21', '0000-00-00 00:00:00'),
(6, '2023UzLJQS', '507848', '', '', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2023-11-20 16:09:38', '0000-00-00 00:00:00'),
(7, '2023UzLJQS', '025343', '', '', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2023-11-20 16:10:17', '0000-00-00 00:00:00'),
(8, '2023UzLJQS', '855103', '', '', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2023-11-20 16:11:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `prow_scholar_skills`
--

CREATE TABLE `prow_scholar_skills` (
  `prow_skills_id` int(11) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_skill_type_id` int(11) NOT NULL,
  `prow_skills` varchar(100) NOT NULL,
  `prow_skills_proficiency` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_scholar_skills`
--

INSERT INTO `prow_scholar_skills` (`prow_skills_id`, `prow_scholar_code`, `prow_skill_type_id`, `prow_skills`, `prow_skills_proficiency`) VALUES
(1, '2023UzLJQS', 1, 'JavaScript', 'Advanced'),
(3, '2023UzLJQS', 4, 'SQL (MySQL', 'Expert');

-- --------------------------------------------------------

--
-- Table structure for table `prow_skills`
--

CREATE TABLE `prow_skills` (
  `prow_skills_id` int(11) NOT NULL,
  `prow_skill_type_id` int(11) NOT NULL,
  `prow_skill_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_skills`
--

INSERT INTO `prow_skills` (`prow_skills_id`, `prow_skill_type_id`, `prow_skill_name`) VALUES
(1, 1, 'Python'),
(2, 1, 'Java'),
(3, 1, 'JavaScript'),
(4, 1, 'C/C++'),
(5, 1, 'Ruby'),
(6, 1, 'PHP'),
(7, 1, 'Swift'),
(8, 1, 'Kotlin'),
(9, 1, 'TypeScript'),
(10, 1, 'R'),
(11, 1, 'MATLAB'),
(12, 1, 'Shell scripting languages (Bash, PowerShell)'),
(13, 2, 'HTML/CSS'),
(14, 2, 'Frontend frameworks (React, Angular, Vue.js)'),
(15, 2, 'Backend frameworks (Node.js, Django, Flask, Ruby on Rails)'),
(16, 2, 'Web services (RESTful APIs, GraphQL)'),
(17, 3, 'iOS development (Swift, Objective-C)'),
(18, 3, 'Android development (Kotlin, Java)'),
(19, 4, 'SQL (MySQL, PostgreSQL, SQLite, SQL Server)'),
(20, 4, 'NoSQL databases (MongoDB, Cassandra, Redis)'),
(21, 5, 'Amazon Web Services (AWS)'),
(22, 5, 'Microsoft Azure'),
(23, 5, 'Google Cloud Platform (GCP)'),
(24, 6, 'Configuration management (Ansible, Puppet, Chef)'),
(25, 6, 'Containerization (Docker, Kubernetes)'),
(26, 6, 'Continuous Integration/Continuous Deployment (CI/CD) tools'),
(27, 7, 'Ethical hacking'),
(28, 7, 'Network security'),
(29, 7, 'Penetration testing'),
(30, 8, 'Machine learning (scikit-learn, TensorFlow, Keras, PyTorch)'),
(31, 8, 'Big data tools (Hadoop, Spark)'),
(32, 8, 'Networking: Network configuration and troubleshooting, TCP/IP protocols, Routing and switching'),
(33, 9, 'Windows'),
(34, 9, 'Linux (Ubuntu, CentOS, Red Hat, etc.)'),
(35, 9, 'macOS'),
(36, 10, 'Version control systems (Git, SVN)'),
(37, 10, 'Integrated Development Environments (IDEs) (Visual Studio Code, IntelliJ IDEA, Eclipse)'),
(38, 11, 'Prototyping tools (Sketch, Adobe XD, Figma)'),
(39, 11, 'User research and usability testing'),
(40, 12, 'Natural Language Processing (NLP)'),
(41, 12, 'Computer Vision'),
(42, 12, 'Robotics programming'),
(43, 13, 'Sensor integration'),
(44, 13, 'IoT platforms'),
(45, 13, 'Embedded systems development'),
(46, 14, 'AutoCAD'),
(47, 14, 'SolidWorks'),
(48, 14, 'CATIA'),
(49, 15, 'Verbal communication'),
(50, 15, 'Written communication'),
(51, 15, 'Active listening'),
(52, 15, 'Presentation skills'),
(53, 15, 'Collaboration'),
(54, 15, 'Conflict resolution'),
(55, 15, 'Team building'),
(56, 15, 'Ability to work in diverse teams'),
(57, 16, 'Critical thinking'),
(58, 16, 'Analytical reasoning'),
(59, 16, 'Decision-making'),
(60, 17, 'Adaptability to change'),
(61, 17, 'Flexibility in work approach'),
(62, 17, 'Openness to learning new skills'),
(63, 18, 'Prioritization'),
(64, 18, 'Meeting deadlines'),
(65, 18, 'Task organization'),
(66, 19, 'Delegation'),
(67, 19, 'Motivation'),
(68, 19, 'Decision-making'),
(69, 19, 'Coaching and mentoring'),
(70, 20, 'Self-awareness'),
(71, 20, 'Empathy'),
(72, 20, 'Relationship management'),
(73, 20, 'Self-regulation'),
(74, 21, 'Thinking outside the box'),
(75, 21, 'Problem-solving with creative solutions'),
(76, 21, 'Innovation mindset'),
(77, 22, 'Mediation'),
(78, 22, 'Negotiation skills'),
(79, 22, 'Resolving interpersonal conflicts'),
(80, 23, 'Resilience'),
(81, 23, 'Coping with pressure'),
(82, 23, 'Work-life balance'),
(83, 24, 'Relationship building'),
(84, 24, 'Establishing connections'),
(85, 24, 'Maintaining professional relationships'),
(86, 25, 'Understanding customer needs'),
(87, 25, 'Patience'),
(88, 25, 'Empathy in addressing customer concerns'),
(89, 26, 'Optimism'),
(90, 26, 'Positive attitude towards challenges'),
(91, 26, 'Enthusiasm and motivation'),
(92, 27, 'Empathy'),
(93, 27, 'Social skills'),
(94, 27, 'Respect for diversity and inclusivity'),
(95, 28, 'Initiative'),
(96, 28, 'Proactivity'),
(97, 28, 'Self-discipline'),
(98, 29, 'Patient care'),
(99, 29, 'Medical knowledge'),
(100, 29, 'Healthcare technology (Electronic Health Records - EHR, medical imaging software)'),
(101, 29, 'Clinical procedures'),
(102, 29, 'Regulatory compliance (HIPAA, medical ethics)'),
(103, 30, 'Financial analysis'),
(104, 30, 'Risk management'),
(105, 30, 'Investment strategies'),
(106, 30, 'Accounting principles'),
(107, 30, 'Compliance and regulatory knowledge (Sarbanes-Oxley Act, Dodd-Frank Act)'),
(108, 31, 'Cybersecurity'),
(109, 31, 'Network administration'),
(110, 31, 'Cloud computing'),
(111, 31, 'Software development'),
(112, 31, 'IT project management');

-- --------------------------------------------------------

--
-- Table structure for table `prow_skill_type`
--

CREATE TABLE `prow_skill_type` (
  `prow_skill_type_id` int(11) NOT NULL,
  `prow_skill_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_skill_type`
--

INSERT INTO `prow_skill_type` (`prow_skill_type_id`, `prow_skill_type_name`) VALUES
(1, 'Programming Languages'),
(2, 'Web Development'),
(3, 'Mobile Development'),
(4, 'Database Management'),
(5, 'Cloud Computing'),
(6, 'DevOps'),
(7, 'Cybersecurity'),
(8, 'Data Science and Analytics'),
(9, 'Operating Systems'),
(10, 'Software Development Tools'),
(11, 'UI/UX Design'),
(12, 'Artificial Intelligence and Robotics'),
(13, 'IoT (Internet of Things)'),
(14, 'CAD/CAM Software'),
(15, 'Communication Skills'),
(16, 'Problem-solving'),
(17, 'Adaptability and Flexibility'),
(18, 'Time Management'),
(19, 'Leadership'),
(20, 'Emotional Intelligence'),
(21, 'Creativity and Innovation'),
(22, 'Conflict Resolution'),
(23, 'Stress Management'),
(24, 'Networking'),
(25, 'Customer Service'),
(26, 'Positivity and Attitude'),
(27, 'Interpersonal Skills'),
(28, 'Self-Motivation'),
(29, 'Healthcare'),
(30, 'Finance'),
(31, 'Information Technology (IT)'),
(32, 'Education'),
(33, 'Engineering'),
(34, 'Hospitality and Tourism'),
(35, 'Manufacturing'),
(36, 'Agriculture'),
(37, 'Retail'),
(38, 'Real Estate'),
(39, 'Media and Entertainment'),
(40, 'Automotive Industry'),
(41, 'Welding and Metalworking'),
(42, 'Carpentry and Woodworking'),
(43, 'Plumbing'),
(44, 'Electrical Work'),
(45, 'Mechanics and Automotive Repair'),
(46, 'HVAC (Heating, Ventilation, and Air Conditioning)'),
(47, 'Culinary Arts'),
(48, 'Healthcare Assistance'),
(49, 'Cosmetology and Esthetics'),
(50, 'Masonry and Bricklaying'),
(51, 'Graphic Design and Printing'),
(52, 'Agricultural Skills'),
(53, 'Waste Management and Recycling'),
(54, 'Early Childhood Education'),
(55, 'Building Maintenance and Custodial Work');

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
(1, '202311070330122dkOqNEDMi', '2023yDIcvq', 'Joane May Delima', 'admin', '1bbd886460827015e5d605ed44252251', '', 0, 0, 1, '', '2023-11-06 11:30:12', '2023-11-06 11:30:12'),
(2, '20231107062613TqKiMdHGMv', '2023CLBuDX', 'HEI sample', 'hei', '1bbd886460827015e5d605ed44252251', '', 3, 0, 1, '', '2023-11-06 14:26:13', '2023-11-06 14:26:13'),
(3, '20231107064135RNEwoa4c6a', '2023rR2dEC', 'Industry Sample', 'industry', '1bbd886460827015e5d605ed44252251', '', 4, 0, 1, '', '2023-11-06 14:41:35', '2023-11-06 14:41:35'),
(5, '20231119002745wxt302pl1c', '2023UzLJQS', 'Joane May Delima', 'annimay', '1bbd886460827015e5d605ed44252251', '', 4, 0, 1, '', '2023-11-19 00:27:45', '2023-11-19 00:27:45');

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
-- Indexes for table `prow_skills`
--
ALTER TABLE `prow_skills`
  ADD PRIMARY KEY (`prow_skills_id`);

--
-- Indexes for table `prow_skill_type`
--
ALTER TABLE `prow_skill_type`
  ADD PRIMARY KEY (`prow_skill_type_id`);

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
  MODIFY `prow_hei_course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `prow_hei_subjects`
--
ALTER TABLE `prow_hei_subjects`
  MODIFY `prow_subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  MODIFY `prow_notif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `prow_notif_type`
--
ALTER TABLE `prow_notif_type`
  MODIFY `prow_notify_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prow_otp`
--
ALTER TABLE `prow_otp`
  MODIFY `prow_otp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prow_scholar`
--
ALTER TABLE `prow_scholar`
  MODIFY `prow_scholar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prow_scholar_academe`
--
ALTER TABLE `prow_scholar_academe`
  MODIFY `prow_acad_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prow_scholar_address`
--
ALTER TABLE `prow_scholar_address`
  MODIFY `prow_address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prow_scholar_app_logs`
--
ALTER TABLE `prow_scholar_app_logs`
  MODIFY `prow_scholar_app_logs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `prow_prof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prow_scholar_requirements`
--
ALTER TABLE `prow_scholar_requirements`
  MODIFY `prow_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prow_scholar_skills`
--
ALTER TABLE `prow_scholar_skills`
  MODIFY `prow_skills_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prow_skills`
--
ALTER TABLE `prow_skills`
  MODIFY `prow_skills_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `prow_skill_type`
--
ALTER TABLE `prow_skill_type`
  MODIFY `prow_skill_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `prow_transaction`
--
ALTER TABLE `prow_transaction`
  MODIFY `prow_trans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prow_users`
--
ALTER TABLE `prow_users`
  MODIFY `prow_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
