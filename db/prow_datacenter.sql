-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 02:10 AM
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
  `prow_hei_building_no` varchar(50) NOT NULL,
  `prow_hei_street` varchar(50) NOT NULL,
  `prow_hei_purok` varchar(50) NOT NULL,
  `prow_hei_barangay` varchar(50) NOT NULL,
  `prow_hei_municipality` varchar(50) NOT NULL,
  `prow_hei_province` varchar(50) NOT NULL,
  `prow_hei_zip` varchar(50) NOT NULL,
  `prow_hei_lat` double NOT NULL,
  `prow_hei_long` double NOT NULL,
  `prow_hei_created` datetime NOT NULL,
  `prow_hei_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_hei`
--

INSERT INTO `prow_hei` (`prow_hei_id`, `prow_hei_code`, `prow_hei_name`, `prow_hei_logo`, `prow_hei_cover_photo`, `prow_hei_contact_person`, `prow_hei_contact`, `prow_hei_email`, `prow_hei_building_no`, `prow_hei_street`, `prow_hei_purok`, `prow_hei_barangay`, `prow_hei_municipality`, `prow_hei_province`, `prow_hei_zip`, `prow_hei_lat`, `prow_hei_long`, `prow_hei_created`, `prow_hei_updated`) VALUES
(1, 'PQRS7890-230928155678', 'UM Digos College', '', '', 'Michael Brown', '09712371727', 'umindanao.edu.ph', '', 'Roxas Ext,', '', 'Zone 2', 'Digos CIty', 'Davao del Sur', '8002', 6.75017587061783, 125.35052536820952, '2023-09-29 02:11:00', '2023-09-29 02:11:00');

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
  `prow_industry_created` datetime NOT NULL,
  `prow_industry_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_industry`
--

INSERT INTO `prow_industry` (`prow_industry_id`, `prow_industry_code`, `prow_industry_name`, `prow_industry_type`, `prow_industry_logo`, `prow_industry_cover_photo`, `prow_industry_about`, `prow_industry_benefits`, `prow_industry_company_size`, `prow_industry_working_hours`, `prow_industry_dress_code`, `prow_industry_cont_person`, `prow_industry_contact`, `prow_industry_email`, `prow_industry_building_no`, `prow_industry_street`, `prow_industry_purok`, `prow_industry_barangay`, `prow_industry_municipality`, `prow_industry_province`, `prow_industry_zip`, `prow_industry_lat`, `prow_industry_long`, `prow_industry_created`, `prow_industry_updated`) VALUES
(1, 'WXYZ6789-230928160000', 'TechSolutions Inc.', 'Information Technology', '', '', 'TechSolutions Inc. is a leading IT company specializing in software development and cybersecurity solutions.', 'Competitive salary, flexible work hours, professional growth opportunities, health and wellness prog', 500, 'Monday to Friday, 9:00 AM - 6:00 PM', 'Business Casual', 'Lisa Anderson', '09124726191', 'info@techsolutions.com', '123', 'Luna', 'Purok 2', 'Zone 1', 'Digos City', 'Davao del Sur', '8002', 6.7518, 125.3569, '2023-09-29 02:15:52', '2023-09-29 02:15:52');

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

INSERT INTO `prow_jobs` (`prow_jobs_id`, `prow_industry_code`, `prow_jobs_code`, `prow_jobs_title`, `prow_jobs_tags`, `prow_jobs_position`, `prow_jobs_description`, `prow_jobs_min_requirements`, `prow_jobs_requirements`, `prow_jobs_type`, `prow_jobs_qualification`, `prow_jobs_salary`, `prow_jobs_num_appl`, `prow_jobs_barangay`, `prow_jobs_municipality`, `prow_jobs_date_posted`) VALUES
(1, 'WXYZ6789-230928160000', 'WXY22133-230928160000', 'Software Developer', 'Software, Development, IT, Programming', 'Junior Programmer', 'TechSolutions Inc. is seeking a talented Software ', 'Bachelor\'s degree', 'Experience with web development', 'Full-time', '2+ years of software development', '20,000', 20, 'Zone 1', 'Digos City', '2023-09-29 02:30:19');

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
(1, 'PROWESS', 'UM Digos College', 'Provincial Workforce Enabing System Through Scholarship', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `prow_notifications`
--

CREATE TABLE `prow_notifications` (
  `prow_notif_id` int(11) NOT NULL,
  `prow_notif_type` varchar(10) NOT NULL,
  `prow_notif_text` text NOT NULL,
  `prow_notif_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_notifications`
--

INSERT INTO `prow_notifications` (`prow_notif_id`, `prow_notif_type`, `prow_notif_text`, `prow_notif_date`) VALUES
(1, 'attempt', 'Login Attempt - kjohn0319@gmail.com', '2023-10-16 07:36:37'),
(2, 'attempt', 'Login Attempt - kentjohn', '2023-10-16 07:38:23'),
(3, 'attempt', 'Login Attempt - kentjohn', '2023-10-16 07:41:53'),
(4, 'attempt', 'Login Attempt - kentjohn', '2023-10-16 07:42:15'),
(5, 'attempt', 'Login Attempt - kentjohn', '2023-10-16 07:42:22'),
(6, 'attempt', 'Login Attempt - kentjohn', '2023-10-16 07:42:27'),
(7, 'attempt', 'Login Attempt - kentjohn', '2023-10-16 07:44:36'),
(8, 'auth', 'Login - kentjohn', '2023-10-16 07:45:53');

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
(1, '142720', '20231014224413rylqCXuERn', 0, '2023-10-14 22:44:13', '2023-10-14 22:44:13'),
(2, '091841', '20231014224520kQ5W7yB1Z7', 0, '2023-10-14 22:45:20', '2023-10-14 22:45:20'),
(3, '972394', '20231014224828rpharCciBU', 0, '2023-10-14 22:48:28', '2023-10-14 22:48:28'),
(4, '713167', '20231014224910RvvOwD3rrb', 0, '2023-10-14 22:49:10', '2023-10-14 22:49:10'),
(5, '121765', '20231014225248VTU7zNhr1q', 0, '2023-10-14 22:52:49', '2023-10-14 22:52:49'),
(6, '457760', '20231014225443PncrEw4nPL', 0, '2023-10-14 22:54:44', '2023-10-14 22:54:44'),
(7, '284107', '20231016065612KoCnPmBknx', 0, '2023-10-16 06:56:12', '2023-10-16 06:56:12'),
(8, '757214', '20231016065726WJsCnUV7xT', 0, '2023-10-16 06:57:26', '2023-10-16 06:57:26'),
(9, '007207', '20231016065802MhzpQ6O9Cu', 0, '2023-10-16 06:58:02', '2023-10-16 06:58:02'),
(10, '189627', '20231016070601iRw1BnwlZz', 0, '2023-10-16 07:06:01', '2023-10-16 07:06:01');

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
  `prow_scholar_created` datetime NOT NULL,
  `prow_scholar_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_scholar`
--

INSERT INTO `prow_scholar` (`prow_scholar_id`, `prow_scholar_code`, `prow_scholar_school_id`, `prow_scholar_img`, `prow_scholar_lastname`, `prow_scholar_firstname`, `prow_scholar_middlename`, `prow_scholar_suffix`, `prow_scholar_gender`, `prow_scholar_cs`, `prow_scholar_birthday`, `prow_scholar_birthplace`, `prow_scholar_con`, `prow_scholar_email`, `prow_scholar_created`, `prow_scholar_updated`) VALUES
(1, '2023DGjzt1bMfkgf1iyur', '0', '', 'john', 'kent', '', '', 'Male', 'Single', '1998-06-22', 'asdasdasdasdasdasd', '9121610673', 'kjohn0319@gmail.com', '2023-10-16 07:06:01', '2023-10-16 07:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `prow_scholar_academe`
--

CREATE TABLE `prow_scholar_academe` (
  `prow_acad_id` int(11) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_acad_application` varchar(50) NOT NULL,
  `prow_acad_course` varchar(50) NOT NULL,
  `prow_acad_year` int(11) NOT NULL,
  `prow_acad_signature` text NOT NULL,
  `prow_acad_status` varchar(11) NOT NULL,
  `prow_scholar_hei_id` varchar(50) NOT NULL,
  `prow_acad_created` datetime NOT NULL,
  `prow_acad_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_scholar_academe`
--

INSERT INTO `prow_scholar_academe` (`prow_acad_id`, `prow_scholar_code`, `prow_acad_application`, `prow_acad_course`, `prow_acad_year`, `prow_acad_signature`, `prow_acad_status`, `prow_scholar_hei_id`, `prow_acad_created`, `prow_acad_updated`) VALUES
(1, 'LMNO4321-230928153456', 'New', 'Bachelor of Science in Nursing', 1, '', 'Student', 'PQRS7890-230928155678', '2023-09-29 01:49:17', '2023-09-29 01:49:17');

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
(1, '2023DGjzt1bMfkgf1iyur', '1095 asdasdasdsad', 'Alegre', '2', 'Davao del Sur', 8002, '2023-10-16 07:06:01', '2023-10-16 07:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `prow_scholar_educ_attain`
--

CREATE TABLE `prow_scholar_educ_attain` (
  `prow_educ_id` int(11) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_educ_type` varchar(50) NOT NULL,
  `prow_educ_school_name` varchar(50) NOT NULL,
  `prow_educ_awards_received` varchar(50) NOT NULL,
  `prow_educ_awards_year` varchar(10) NOT NULL,
  `prow_educ_year_graduated` varchar(10) NOT NULL,
  `prow_educ_degree` varchar(50) NOT NULL,
  `prow_educ_created` datetime NOT NULL,
  `prow_educ_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_scholar_educ_attain`
--

INSERT INTO `prow_scholar_educ_attain` (`prow_educ_id`, `prow_scholar_code`, `prow_educ_type`, `prow_educ_school_name`, `prow_educ_awards_received`, `prow_educ_awards_year`, `prow_educ_year_graduated`, `prow_educ_degree`, `prow_educ_created`, `prow_educ_updated`) VALUES
(1, 'LMNO4321-230928153456', 'Elementary', 'Digos Central Elementary School', 'Honor Student', '2016', '2016', '', '2023-09-29 01:57:50', '2023-09-29 01:57:50'),
(2, 'LMNO4321-230928153456', 'High School', 'Digos City National High School', 'Best in Science', '2023', '2023', '', '2023-09-29 01:57:50', '2023-09-29 01:57:50'),
(3, 'LMNO4321-230928153456', 'College', 'University of Mindanao Digos College', '', '', '', 'Bachelor of Science in Nursing', '2023-09-29 01:57:50', '2023-09-29 01:57:50');

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
  `prow_prof_guradian_cont` varchar(11) NOT NULL,
  `prow_prof_guardian_occu` varchar(50) NOT NULL,
  `prow_prof_created` datetime NOT NULL,
  `prow_prof_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_scholar_profile`
--

INSERT INTO `prow_scholar_profile` (`prow_prof_id`, `prow_scholar_code`, `prow_prof_height`, `prow_prof_weight`, `prow_prof_blood_type`, `prow_prof_religion`, `prow_prof_talent`, `prow_prof_father`, `prow_prof_father_cont`, `prow_prof_father_occu`, `prow_prof_mother`, `prow_prof_mother_cont`, `prow_prof_mother_occu`, `prow_prof_guardian`, `prow_prof_guradian_cont`, `prow_prof_guardian_occu`, `prow_prof_created`, `prow_prof_updated`) VALUES
(1, 'LMNO4321-230928153456', 167.64, 63.5, 'B+', 'Catholic', 'Singing, Dancing', 'John Davis', '09551234567', 'Farmer', 'Susan Davis', '09551234567', 'House Wife', '', '', '', '2023-09-28 10:30:13', '2023-09-28 10:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `prow_scholar_requirements`
--

CREATE TABLE `prow_scholar_requirements` (
  `prow_req_id` int(11) NOT NULL,
  `prow_scholar_code` varchar(50) NOT NULL,
  `prow_req_exam_score` int(11) NOT NULL,
  `prow_req_exam_date` datetime NOT NULL,
  `prow_req_school_card` text NOT NULL,
  `prow_req_enrollment_form` text NOT NULL,
  `prow_req_enrollment_form_status` tinyint(1) NOT NULL,
  `prow_req_cert_residency` text NOT NULL,
  `prow_req_endorsement` text NOT NULL,
  `prow_req_interview` tinyint(1) NOT NULL,
  `prow_req_interview_date` datetime NOT NULL,
  `prow_req_prev_grades` text NOT NULL,
  `prow_req_prev_SY` text NOT NULL,
  `prow_req_status` varchar(10) NOT NULL,
  `prow_req_created` datetime NOT NULL,
  `prow_req_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_scholar_requirements`
--

INSERT INTO `prow_scholar_requirements` (`prow_req_id`, `prow_scholar_code`, `prow_req_exam_score`, `prow_req_exam_date`, `prow_req_school_card`, `prow_req_enrollment_form`, `prow_req_enrollment_form_status`, `prow_req_cert_residency`, `prow_req_endorsement`, `prow_req_interview`, `prow_req_interview_date`, `prow_req_prev_grades`, `prow_req_prev_SY`, `prow_req_status`, `prow_req_created`, `prow_req_updated`) VALUES
(1, 'LMNO4321-230928153456', 30, '2023-09-29 02:08:05', '', '', 0, '', '', 0, '2023-09-29 02:08:05', '', '', '', '2023-09-29 02:08:05', '2023-09-29 02:08:05');

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

--
-- Dumping data for table `prow_scholar_skills`
--

INSERT INTO `prow_scholar_skills` (`prow_skills_id`, `prow_scholar_code`, `prow_skills`, `prow_skills_proficiency`) VALUES
(1, 'LMNO4321-230928153456', 'Singing', 'Expert'),
(2, 'LMNO4321-230928153456', 'Dancing', 'Advanced'),
(3, 'LMNO4321-230928153456', 'Painting', 'Intermediate'),
(4, 'LMNO4321-230928153456', 'Cooking', 'Beginner'),
(5, 'LMNO4321-230928153456', 'Programming', 'Advanced');

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
  `prow_user_status` int(11) NOT NULL,
  `prow_user_last_location` text NOT NULL,
  `prow_user_created` datetime NOT NULL,
  `prow_user_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prow_users`
--

INSERT INTO `prow_users` (`prow_user_id`, `prow_user_code`, `prow_scholar_code`, `prow_user_fullname`, `prow_user_uname`, `prow_user_pword`, `prow_user_picture`, `prow_user_type`, `prow_user_status`, `prow_user_last_location`, `prow_user_created`, `prow_user_updated`) VALUES
(1, '20231016070601iRw1BnwlZz', '2023DGjzt1bMfkgf1iyur', 'kent john', 'kentjohn', 'ea439fbdaa955099ec9ad4a96a3a81bd', '', 4, 0, '', '2023-10-16 07:06:01', '2023-10-16 07:06:01');

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
  MODIFY `prow_hei_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `prow_notif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prow_otp`
--
ALTER TABLE `prow_otp`
  MODIFY `prow_otp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `prow_scholar`
--
ALTER TABLE `prow_scholar`
  MODIFY `prow_scholar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prow_scholar_academe`
--
ALTER TABLE `prow_scholar_academe`
  MODIFY `prow_acad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prow_scholar_address`
--
ALTER TABLE `prow_scholar_address`
  MODIFY `prow_address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prow_scholar_educ_attain`
--
ALTER TABLE `prow_scholar_educ_attain`
  MODIFY `prow_educ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `prow_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prow_scholar_skills`
--
ALTER TABLE `prow_scholar_skills`
  MODIFY `prow_skills_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prow_transaction`
--
ALTER TABLE `prow_transaction`
  MODIFY `prow_trans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prow_users`
--
ALTER TABLE `prow_users`
  MODIFY `prow_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;