-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 12:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reflexdn2`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `d_id`, `p_id`, `date`, `time`, `next_date`, `status`, `created_at`, `updated_at`) VALUES
(9, '2', '3', '2022-10-22 00:00:00', '08:46 pm', NULL, 0, '2022-08-29 06:17:43', '2022-10-23 07:51:02'),
(14, '36', '21', '2022-10-18 14:00:59', '05:10 PM', NULL, 0, '2022-09-05 15:04:31', '2022-10-23 08:02:09'),
(15, '36', '23', '2022-10-12 14:01:07', '06:00 AM', NULL, 0, '2022-09-06 10:49:30', '2022-10-23 08:02:09'),
(16, '36', '25', '2022-10-06 14:01:12', '07:52 PM', NULL, 0, '2022-09-06 13:52:04', '2022-10-23 08:02:09'),
(18, '36', '28', '2022-09-08 14:01:19', '04:00 PM', NULL, 0, '2022-09-07 14:39:16', '2022-10-23 08:02:09'),
(22, '36', '30', '2022-10-13 14:01:24', '03:00 PM', NULL, 0, '2022-09-10 02:28:49', '2022-10-23 08:02:09'),
(23, '53', '31', '2022-10-12 14:01:28', '06:00 PM', NULL, 0, '2022-09-12 14:26:14', '2022-10-23 08:02:09'),
(24, '36', '28', '2022-10-13 14:01:31', '06:00 AM', NULL, 0, '2022-09-22 11:59:18', '2022-10-23 08:02:09'),
(26, '63', '35', '2022-10-12 14:01:44', '08:40 PM', NULL, 0, '2022-09-29 13:41:09', '2022-10-23 08:02:09'),
(28, '3', '26', '2022-10-22 00:00:00', '01:54 pm', NULL, 0, '2022-10-20 12:23:34', '2022-10-23 08:02:09'),
(29, '2', '24', '2022-10-23 00:00:00', '02:30 pm', NULL, 0, '2022-10-22 07:03:43', '2022-10-23 07:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `chember_infos`
--

CREATE TABLE `chember_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chember_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chember_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chember_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chember_infos`
--

INSERT INTO `chember_infos` (`id`, `d_id`, `chember_name`, `chember_address`, `chember_number`, `created_at`, `updated_at`) VALUES
(1, '3', 'Royal Dental Care', 'Ground floor, House # 06, Road # 30, Uttara, Dhaka-1230', '01681409779', '2022-08-14 07:55:36', '2022-08-14 07:55:36'),
(2, '36', 'United Dental Surgery', 'Besides (Popular Diagnostic Centre) ,New bus stand,Maijdee,Noakhali.', '01972346034', '2022-09-05 14:56:28', '2022-09-07 14:36:30'),
(3, '38', 'F', 'F', 'Oqoq', '2022-09-05 18:20:27', '2022-09-05 18:20:27'),
(4, '2', 'test', 'testad', '12', '2022-09-06 10:14:59', '2022-10-22 18:11:58'),
(5, '2', 'hgjygb', 'ktff', '214324325', '2022-09-07 09:31:34', '2022-09-07 09:31:34'),
(6, '46', 'Barakah Dental Surgery  &  Orthodontics centre', '261,sher e bangla road,rayer bazar,west dhanmondi', '01872088081', '2022-09-10 09:22:47', '2022-09-10 09:22:47'),
(7, '53', 'Tooth Care', '14/1, mirpur road, shyamoli Dhaka', '+8801313542211', '2022-09-12 09:11:47', '2022-09-12 09:11:47'),
(8, '5', 'Square Hospital', 'Dhaka', '030443', '2022-09-20 18:37:56', '2022-09-20 18:37:56'),
(9, '63', 'Crown Dental Care Uttara', '2nd floor, House # 07, Road # 19, Sector # 11, Uttara, Dhaka', '01713078200', '2022-09-29 13:31:26', '2022-09-29 13:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `chember_schedules`
--

CREATE TABLE `chember_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chem_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `week_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evening_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chember_schedules`
--

INSERT INTO `chember_schedules` (`id`, `chem_id`, `week_name`, `day_time`, `evening_time`) VALUES
(1, '2', 'Saturday', '06:00 AM', '04:00 PM'),
(2, '2', 'Friday', '06:00 AM', '04:00 PM'),
(3, '2', 'Saturday', '06:00 AM', '04:00 PM'),
(4, '2', 'Saturday', '06:00 AM', '04:00 PM'),
(5, '2', 'Sunday', '06:00 AM', '06:00 AM'),
(6, '2', 'Monday', '06:00 AM', '04:00 PM'),
(7, '2', 'Tuesday', '11:00 AM', '05:00 PM'),
(8, '2', 'Wednesday', '06:00 AM', '04:01 PM'),
(9, '2', 'Thursday', '11:01 AM', '09:01 PM'),
(10, '2', 'Friday', '06:00 AM', '04:02 PM'),
(11, '2', 'Saturday', '11:02 AM', '09:03 PM'),
(12, '3', 'Saturday', '02:23 PM', '04:23 AM'),
(13, '3', 'Saturday', '02:23 PM', '04:23 AM'),
(14, '1', 'Sunday', '04:00 PM', '09:00 PM'),
(15, '1', 'Saturday', '06:00 AM', '06:00 AM'),
(16, '4', 'Sunday', '07:18 AM', '07:25 PM'),
(17, '4', 'Monday', '09:20 AM', '07:18 PM'),
(18, '1', 'Sunday', '04:00 PM', '10:00 PM'),
(19, '1', 'Saturday', '09:00 AM', '06:00 AM'),
(20, '1', 'Sunday', '10:00 AM', '01:00 PM'),
(21, '2', 'Monday', '04:00 PM', '09:05 PM'),
(22, '2', 'Tuesday', '11:53 AM', '09:00 PM'),
(23, '2', 'Wednesday', '04:00 PM', '09:00 PM'),
(24, '2', 'Thursday', '11:54 AM', '09:00 PM'),
(25, '2', 'Friday', '04:00 PM', '08:00 PM'),
(26, '2', 'Monday', '04:00 PM', '09:05 PM'),
(27, '2', 'Tuesday', '11:53 AM', '09:00 PM'),
(28, '2', 'Wednesday', '04:00 PM', '09:00 PM'),
(29, '2', 'Thursday', '11:54 AM', '09:00 PM'),
(30, '2', 'Friday', '04:00 PM', '08:00 PM'),
(31, '7', 'Saturday', '12:30 PM', '08:00 PM'),
(32, '7', 'Saturday', '12:30 PM', '08:00 PM'),
(33, '7', 'Sunday', '12:30 PM', '08:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `chife_complaints`
--

CREATE TABLE `chife_complaints` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chife_complaints`
--

INSERT INTO `chife_complaints` (`id`, `name`, `status`) VALUES
(1, 'Bad breath', 0),
(2, 'Bad smell', 0),
(3, 'Bleeding gum', 0),
(4, 'Broken filling', 0),
(5, 'Burning sensation', 0),
(6, 'Decayed tooth', 0),
(7, 'Dental checkup', 0),
(8, 'Dental decay', 0),
(9, 'Deposits in the teeth', 0),
(10, 'Discomfort', 0),
(11, 'Facial swelling', 0),
(12, 'Food impaction', 0),
(13, 'Forwardly placed front teeth', 0),
(14, 'Gum discoloration', 0),
(15, 'Gum enlargement', 0),
(16, 'Implant placement', 0),
(17, 'Intra-oral swelling', 0),
(18, 'Irregularly placed front teeth', 0),
(19, 'Missing tooth/teeth', 0),
(20, 'Mobile tooth', 0),
(21, 'Oral ulcer', 0),
(22, 'Pain', 0),
(23, 'Pain in the gum', 0),
(24, 'Routine check-up', 0),
(25, 'Sensitivity', 0),
(26, 'Swollen gum', 0),
(27, 'Temporomandibular joint disorder', 0),
(28, 'To improve the aesthetics of my teeth', 0),
(29, 'Tooth cleaning', 0),
(30, 'Tooth filling', 0),
(31, 'Tooth malaignment', 0),
(32, 'Tooth sensitivity', 0),
(33, 'Tooth whitening', 0),
(34, 'Toothache', 0),
(35, 'Unerupted upper fornt teeth', 0),
(36, 'Want to clean the teeth', 0),
(37, 'Want to fill the decayed tooth', 0),
(38, 'Want to replace the missing tooth', 0),
(39, 'Want to wear clip', 0),
(40, 'Wants to remove the tooth', 0),
(41, 'Swelling for 7 days', 1),
(47, 'PUS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clinical_findings`
--

CREATE TABLE `clinical_findings` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinical_findings`
--

INSERT INTO `clinical_findings` (`id`, `name`, `status`) VALUES
(1, 'Abrassion', 0),
(2, 'Abscess', 0),
(3, 'Aesthetic', 0),
(4, 'Alveolar Bone Loss', 0),
(5, 'Apexification', 0),
(6, 'Apexogenesis', 0),
(7, 'Apical Abscess/Infection', 0),
(8, 'Attrition,Abrasion,Erosion', 0),
(9, 'Avulsed Tooth/Teeth', 0),
(10, 'Avulsion', 0),
(11, 'BDC', 0),
(12, 'BDR', 0),
(13, 'Biunderbass Canal', 0),
(14, 'Calculas With Gingibitis and Stain', 0),
(15, 'Caries', 0),
(16, 'Complete Endentulousness', 0),
(17, 'Cracked Tooth Syndrome', 0),
(18, 'Cyst', 0),
(19, 'Discharging Buccal Sinus', 0),
(20, 'Elective', 0),
(21, 'Fracutured Tooth/Root', 0),
(22, 'Grossly Carious Tooth', 0),
(23, 'Impaction', 0),
(24, 'Intra/Extra Oral Swelling', 0),
(25, 'Malalignment', 0),
(26, 'Missing Teeth', 0),
(27, 'Mobility', 0),
(28, 'MOD Caries', 0),
(29, 'Partial Edentuous', 0),
(30, 'Perforation Repair', 0),
(31, 'Pericoronitis', 0),
(32, 'Pwridontal Abscess', 0),
(33, 'Periodontitis', 0),
(34, 'Peri-radicular Pathosis', 0),
(35, 'Plaque, Calculus, Stain', 0),
(36, 'Pulp Polyp', 0),
(37, 'Pulpitis', 0),
(38, 'Restoration of Endodontically Treated Tooth', 0),
(39, 'Retained Deciduous', 0),
(40, 'Retained Primary Tooth', 0),
(41, 'Retainer', 0),
(42, 'Sealer', 0),
(43, 'Sensitivity', 0),
(44, 'Severe Mobility', 0),
(45, 'Spacing/Crowding', 0);

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `d_id`, `p_id`, `p_mobile`, `discount`, `discount_type`, `created_at`, `updated_at`) VALUES
(1, '2', '3', '1', '50', 'precent', '2022-10-22 13:24:54', '2022-10-22 13:42:31'),
(2, '2', '24', '222', '10', 'precent', '2022-10-22 18:42:44', '2022-10-22 18:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BMDC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bDegree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mCollege` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional_degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `verification` tinyint(1) NOT NULL DEFAULT 0,
  `p_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bmdc_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postG_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bar_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `fname`, `lname`, `email`, `password`, `phone`, `BMDC`, `nid`, `dob`, `gender`, `blood_group`, `bDegree`, `mCollege`, `batch`, `session`, `passing_year`, `professional_degree`, `speciality`, `designation`, `role`, `status`, `verification`, `p_image`, `bmdc_image`, `postG_image`, `bar_image`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'admin@gmail.com', 'root@dmin', '231', 'Ex et minima veritat', '18', 'Atque minima ad id m', 'Female', 'O-', NULL, 'Voluptatibus aute of', 'Impedit amet molli', 'Adipisicing exceptur', '2018', 'post_grad', 'Enim nihil natus exe', 'Deserunt officia exp', 1, 0, 1, '', '', '', NULL, NULL, '2022-08-14 07:13:41'),
(2, 'Code', 'Tree', 'code@gmail.com', '12', '1000', '12', '80', 'Nemo laboris ut sint', 'Female', 'O+', NULL, 'Exercitationem vel e', 'Iste quasi magna del', 'Nostrud in dolor mol', '1971', 'bcs', 'Eaque exercitationem', 'BDS', 0, 0, 1, 'P20220906040917.PNG', '', '', 'Bar20221023021034.jpg', '2022-08-14 07:20:36', '2022-10-23 08:49:35'),
(3, 'Dr. Abdullah', 'Bin Sayeed', 'dr.absnayeem@gmail.com', 'absn290584', '01681409779', '6068', '2351350802', '15/01/1988', 'Male', 'A+', NULL, 'Pioneer Dental College', '11', '2004-05', '2013', NULL, 'BDS', 'Dental Surgeon', 0, 0, 1, 'P20220814010822.jpeg', '0814010822.jpeg', '', NULL, '2022-08-14 07:25:42', '2022-08-20 04:58:02'),
(5, 'zubayer', 'ahmed', 'zubayer.42@gmail.com', '12345678', '01672687796', NULL, '231342126', NULL, NULL, NULL, NULL, 'hdfsdfsgdfs', 'gdsfsdfsd', 'ghfghgh', '7658765', NULL, '675876', NULL, 0, 0, 1, 'P20220816120853.jpg', NULL, NULL, NULL, '2022-08-16 06:18:14', '2022-08-16 06:29:04'),
(14, 'Mosheur', 'Rahman', 'mosheur1244@gmail.com', 'RASNa6868', '01521109750', '8954', '19937613973000089', '27/09/1993', 'Male', 'B+', NULL, 'Pioneer Dental College', '18th', '2011-12', '2017', NULL, 'Dentistry', 'Dental Sergeon', 0, 0, 1, '', '0817070851.jpg', '', NULL, '2022-08-17 13:36:18', '2022-08-17 16:26:38'),
(15, 'Sarwer', 'Biplob', 'dr.sarwerbiplob@gmail.com', 'iPhone9080#clinic', '01771775944', '5379', '2378156364', '10/10/1989', 'Male', 'O+', NULL, 'Chittagong Medical College', '19', '2007-08', '2012', NULL, 'Oral & Maxillofacial Surgery', 'Consultant', 0, 0, 1, '', '', '', NULL, '2022-08-17 16:20:47', '2022-08-17 16:26:34'),
(16, 'Dr. Md. Abdullah Al', 'Mamun', 'tito_bt@yahoo.com', 'mmmm0000', '01972404404', '1872', '8664945493', '30/12/1980', 'Male', 'A+', NULL, 'City Dental College', '4', '1998-1999', '2003', 'post_grad', 'General Dentistry', 'Associate Professor', 0, 0, 1, 'P20220819030827.png', '', '', NULL, '2022-08-19 09:49:13', '2022-08-19 20:36:43'),
(23, 'Dr. Mohammad Salsabil', 'Ibne Shamim', 'salsabil_dentist@yahoo.com', '123456', '01670074328', '3958', '3650898230146', '29/05/1986', 'Male', 'B+', NULL, 'Sapporo Dental College', 'Sdc5', '2004-05', '2009', 'post_grad', 'Dentistry', 'Chief Dental Consultant', 0, 0, 1, 'P20220821040843.jpg', '', '', NULL, '2022-08-21 10:37:05', '2022-08-21 11:04:26'),
(24, 'Dr Ashik', 'Mustafa', 'drashikmustafa@gmail.com', '33071866', '01717001399', '6896', '4156010250', '30/12/1991', 'Male', 'AB+', NULL, 'Chittagong Medical College Dental Unit', '21st', '2009-10', '2014', 'post_grad', 'Orthodontics and Dentofacial Orthopaedics', 'Dental Surgeon', 0, 0, 1, 'P20220821040831.jpg', '0821040831.pdf', '202208210408.jpg', NULL, '2022-08-21 10:54:00', '2022-08-21 11:03:48'),
(27, 'Dr. Md. Arifur', 'Rahman', 'drarifur_rahman@yahoo.com', 'zoo3i98z', '01714000783', '2274', '9150918127', '01/01/1983', 'Male', 'A+', NULL, 'City Dental College', 'CD-5', '1999-2000', '2004', 'post_grad', 'Dental Surgeon', 'Assistant Professor', 0, 0, 1, 'P20220829120855.jpg', '0829120842.jpg', '202208291208.jpg', NULL, '2022-08-29 06:03:24', '2022-08-29 06:15:55'),
(36, 'Dr.Mohammad Nasir', 'Uddin', 'nobelbds@gmail.com', 'nobel1122', '01972346034', '2698', NULL, '22/11/1981', 'Male', 'O+', NULL, 'Pioneer Dental college', '7th', '2000-01', '2006', NULL, 'General Dentisty', NULL, 0, 0, 1, 'P20220905040950.jpg', '0905040950.pdf', '', NULL, '2022-09-05 09:45:20', '2022-09-06 13:13:46'),
(38, 'rizwan', 'Sadik', 'rizwansadik723@gmail.com', 'rizwan7234', '01676136494', '11160', '3259884439', '27/03/1994', 'Male', 'O-', NULL, 'Chattogram international Dental college', '9th', '2012 -2013', '2018', NULL, 'Dental surgeon', 'Dental surgeon', 0, 0, 1, 'P20220906120940.jpg', '0906120940.jpg', '', NULL, '2022-09-05 18:05:14', '2022-09-05 18:12:25'),
(41, 'Md.Ibrahim', 'Khalil', 'ibrahimrmc20@gmail.com', '554124', '01722554124', '5948', '6400984818', '07/07/1989', 'Male', 'B+', NULL, 'Rajshahi Medical College', '20th', '2008-2009', '2013', NULL, 'Endodontics', 'Dental surgeon', 0, 0, 1, '', '', '', NULL, '2022-09-06 17:25:41', '2022-09-10 06:47:32'),
(42, 'Md. Kausar', 'Ali', 'mdkausaraliddc38@gmail.com', 'kausar213626', '01720213626', '2503', '5056033177', '25/12/1982', 'Male', 'A+', NULL, 'Dhaka Dental College', 'D 38', '2000-2001', '2006', NULL, 'Endodontist', 'BDS', 0, 0, 1, '', '', '', NULL, '2022-09-06 17:51:36', '2022-09-10 06:47:37'),
(43, 'Dr. MD. Sajedul', 'Islam', 'sajedul.saju@gmail.com', 'Lanka@3829', '01722026468', '6389', '19911595716000082', '25/08/1991', 'Male', 'O+', NULL, 'Chattogram Medical College', '21', '2009-10', '2014', 'bcs', 'General Dentistry', 'Dental Surgeon', 0, 0, 1, 'P20220908060932.jpg', '0908060932.pdf', '', NULL, '2022-09-08 00:22:56', '2022-09-10 06:47:41'),
(44, 'Md Sifat', 'Uddin', 'uddinsifat29@gmail.com', '54690', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-09-08 07:37:23', '2022-09-08 07:37:23'),
(45, 'Dr.Salman', 'Samad', 'dr.salmansamad777@gmail.com', 'salman1268', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-09-08 09:36:46', '2022-09-08 09:36:46'),
(46, 'Rashed', 'Alam', 'rashed4thsomc@gmail.com', 'amirashed238', '01408071774', '11124', '8661433485', '11/01/1996', 'Male', 'Select Blood Group', NULL, 'Sylhet mag osmani medical college', '4th', '2014-2015', '2019', NULL, 'Dental surgeon', 'Cheif consultant', 0, 0, 1, '', '', '', NULL, '2022-09-08 10:08:38', '2022-09-10 06:47:26'),
(48, 'Md. Rakibul', 'Islam', 'bhc.dr.rakibulislam@gmail.com', 'rakib100200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-09-08 15:46:43', '2022-09-08 15:46:43'),
(49, 'Shahadul', 'Islam', 'akibchy22@gmail.com', 'asif5353', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-09-08 16:53:18', '2022-09-08 16:53:18'),
(50, 'Ijajul', 'Hossain', 'ijajulhssn@gmail.com', 'Maheer25@', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-09-08 17:14:09', '2022-09-08 17:14:09'),
(52, 'Dr. Arifur Rahman', 'Rana', 'arrana545@gmail.com', 'arifurrahman@8423', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-09-12 08:13:39', '2022-09-12 08:13:39'),
(53, 'Mezbah Ul', 'Azeez', 'mezbah@toothcarebd.com', 'Darkness817', '8801714020089', '3505', '2829981139', '16/11/1986', 'Male', 'B+', NULL, 'Sapporo Dental College & Hospital', '04', '03-04', '2008', 'post_grad', 'Periodontology', NULL, 0, 0, 1, 'P20220912020903.jpg', '0912020903.jpg', '', NULL, '2022-09-12 08:34:39', '2022-09-12 09:07:10'),
(54, 'Asaduzzaman', 'Aktel', 'digitalbdtech2@gmail.com', 'digitalbdtech2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-09-12 18:08:42', '2022-09-12 18:08:42'),
(55, 'Dr. Rashadul Hasan', 'Rahat', 'rashadulhasan.rahat1979@gmail.com', 'rahatreflexdn', '01841199147', '96255', '5505809102', '06/11/1993', 'Male', 'Select Blood Group', NULL, 'Community Based Medical College & Hospital', 'CB-19', '2012-13', '2018', NULL, 'Medicine', 'Doctor', 0, 0, 1, '', '0913110914.pdf', '', NULL, '2022-09-13 04:41:00', '2022-09-13 15:21:31'),
(56, 'Dekha', 'Shesh', 'dekhashesh@gmail.com', '123123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-09-13 12:23:39', '2022-09-13 12:23:39'),
(57, 'Shoaib', 'Akhter', 's.akhter@gmail.com', 'hshajabah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-09-15 04:34:18', '2022-09-15 04:34:18'),
(59, 'AKM Serajul Alam', 'Rakib', 'serajul.alam@gmail.com', 'Dentosave2022', '01711538995', '1019', '3256695226', '01/02/1975', 'Male', 'O+', NULL, 'RMC', '4th', '1992-93', '1998', 'post_grad', 'Oral and maxillofacial surgery', 'Assistant Professor', 0, 0, 1, '', '', '', NULL, '2022-09-18 07:56:48', '2022-09-18 18:12:21'),
(61, 'Dr. Shahriar', 'Zaman', 'rubelbds06@gmail.com', 'arniya2017', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, '2022-09-20 15:51:17', '2022-09-20 16:01:44'),
(62, 'Hello', 'He\'ll', 'test@admin.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-09-25 09:48:53', '2022-09-25 09:48:53'),
(63, 'Monir', 'Uddin', 'dr.monir1180@gmail.com', 'mu123456', '01713078200', '1845', '4175834987', '01/01/1980', 'Male', 'A-', NULL, 'Pioneer Dental College', '5', '1999-2000', '2003', NULL, 'Dental Surgeon', 'Oral & dental Surgeon', 0, 0, 1, '', '0929070947.JPG', '', NULL, '2022-09-29 13:14:28', '2022-09-29 13:54:09'),
(64, 'md mustafizur', 'rahman', 'dinarmustafiz@gmail.com', 'Dd017154044dD', '01716087830', '4690', '7305184769', '19/08/1986', 'Male', 'B+', NULL, 'University Dental College', '11', '2005/06', '2010', NULL, 'General', 'Dental Surgeon', 0, 0, 0, 'P20220930050955.jpg', '0930050955.pdf', '', NULL, '2022-09-30 11:14:09', '2022-09-30 11:22:55'),
(65, 'Shifat', 'Abdullah', 'infernal.theory@gmail.com', 'dhaka1207', '01847257607', '11059', '8250616050', '30031990', 'Male', 'A+', NULL, 'SDC', '8', '07-08', '2016', NULL, 'BDS', NULL, 0, 0, 0, 'P20221012031003.png', '1012031003.png', '', NULL, '2022-10-12 09:38:44', '2022-10-12 09:41:03'),
(66, 'Shahriar Nasim', 'Nafi', 'shahriarnasim.nafi@gmail.com', '987654321123456789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2022-10-16 14:41:05', '2022-10-16 14:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drug_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drug_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meal_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`id`, `d_id`, `p_id`, `t_id`, `drug_name`, `drug_time`, `meal_time`, `duration`, `date`, `created_at`, `updated_at`) VALUES
(1, '3', '2', NULL, 'Tab. Napa 500mg', '1+0+1', 'After Meal', '5', '16-08-2022', '2022-08-16 13:47:02', '2022-08-16 13:47:02'),
(2, '3', '15', NULL, 'Tab. Napa 500mg', '1+0+1', 'After Meal', '5', '24-08-2022', '2022-08-24 06:09:48', '2022-08-24 06:09:48'),
(3, '3', '15', NULL, 'Tab. Napa 500mg', '1+0+1', 'After Meal', '5', '27-08-2022', '2022-08-27 04:24:03', '2022-08-27 04:24:03'),
(4, '3', '15', NULL, 'Tab. Napa 500mg', '1+0+1', 'After Meal', '5', '28-08-2022', '2022-08-28 12:56:35', '2022-08-28 12:56:35'),
(5, '3', '16', NULL, 'Tab. Napa 500mg', '1+0+1', 'After Meal', '5', '28-08-2022', '2022-08-28 16:54:04', '2022-08-28 16:54:04'),
(6, '27', '19', NULL, 'Tab. Clacido 1gm', '1+0+1', 'After Meal', '7', '29-08-2022', '2022-08-29 06:59:59', '2022-08-29 06:59:59'),
(7, '27', '19', NULL, 'Tab. Filmet 400', '1+0+1', 'After Meal', '5', '29-08-2022', '2022-08-29 07:01:46', '2022-08-29 07:01:46'),
(9, '3', '16', NULL, 'Tab. Filmet 400', '1+0+1', 'After Meal', '5', '29-08-2022', '2022-08-29 07:07:10', '2022-08-29 07:07:10'),
(10, '3', '16', NULL, 'Tab. Napa 500mg', '1+0+1', 'After Meal', '5', '29-08-2022', '2022-08-29 07:07:22', '2022-08-29 07:07:22'),
(11, '3', '16', NULL, 'Tab. Napa 500mg', '1+0+1', 'After Meal', '5', '02-09-2022', '2022-09-02 08:55:38', '2022-09-02 08:55:38'),
(12, '3', '16', NULL, 'Tab. Napa 500mg', '1+0+1', 'After Meal', '7', '04-09-2022', '2022-09-04 13:50:36', '2022-09-04 13:50:36'),
(13, '3', '16', NULL, 'Cap. Maxpro 40 mg', '1+0+1', 'Before Meal', '5', '04-09-2022', '2022-09-04 13:51:25', '2022-09-04 13:51:25'),
(14, '3', '16', NULL, 'Tab. Filmet 400', '1+0+1', 'After Meal', '5', '04-09-2022', '2022-09-04 13:51:42', '2022-09-04 13:51:42'),
(15, '2', '3', NULL, 'Tab. Clacido 1gm', '1+0+1', 'Before Meal', '1', '05-09-2022', '2022-09-05 04:36:36', '2022-09-05 04:36:36'),
(16, '3', '20', NULL, 'Tab. Napa 500mg', '1+0+1', 'After Meal', '5', '05-09-2022', '2022-09-05 14:06:47', '2022-09-05 14:06:47'),
(17, '3', '20', NULL, 'Tab. Clacido 1gm', '1+0+1', 'Before Meal', '5', '05-09-2022', '2022-09-05 14:07:16', '2022-09-05 14:07:16'),
(18, '3', '20', NULL, 'Cap. Maxpro 40 mg', '1+0+1', 'Before Meal', '5', '05-09-2022', '2022-09-05 14:07:28', '2022-09-05 14:07:28'),
(19, '36', '21', NULL, 'Tab. Filmet 400', '1+0+1', 'After Meal', '3', '06-09-2022', '2022-09-06 13:21:43', '2022-09-06 13:30:45'),
(20, '36', '21', NULL, 'Tab.Fimoxyclav 625mg', '1+1+1', 'After Meal', '7', '06-09-2022', '2022-09-06 13:22:38', '2022-09-06 13:30:04'),
(21, '36', '21', NULL, 'Tab.Rubee 20mg', '1+0+1', 'After Meal', '10', '06-09-2022', '2022-09-06 13:24:02', '2022-09-06 13:24:02'),
(22, '36', '21', NULL, 'Tab.Tory 120mg', '0+0+1', 'After Meal', '3', '06-09-2022', '2022-09-06 13:24:49', '2022-09-06 13:30:55'),
(23, '36', '21', NULL, 'Mouthcare mouth wash', '1+0+1', 'After Meal', '30', '06-09-2022', '2022-09-06 13:26:22', '2022-09-06 13:26:22'),
(24, '36', '25', NULL, 'Tab.Amodis 400mg', '1+1+1', 'After Meal', '5', '06-09-2022', '2022-09-06 13:56:56', '2022-09-06 13:56:56'),
(25, '36', '25', NULL, 'Tab.Rubee 20mg', '1+0+1', 'Before Meal', '10', '06-09-2022', '2022-09-06 13:57:18', '2022-09-06 13:57:18'),
(26, '36', '25', NULL, 'Tab.Tory 120mg', '0+0+1', 'After Meal', '3', '06-09-2022', '2022-09-06 13:57:56', '2022-09-06 13:57:56'),
(27, '36', '25', NULL, 'Mouthcare mouth wash', '1+1+1', 'After Meal', '10', '06-09-2022', '2022-09-06 13:58:30', '2022-09-06 13:58:30'),
(28, '3', '26', NULL, 'Tab.Fimoxyclav 625mg', '1+0+1', 'After Meal', '5', '06-09-2022', '2022-09-06 14:40:11', '2022-09-06 14:40:11'),
(29, '3', '26', NULL, 'Mouthcare mouth wash', '1+0+1', 'Before Meal', '5', '07-09-2022', '2022-09-07 09:48:44', '2022-09-07 09:48:44'),
(30, '3', '26', NULL, 'Tab. Napa 500mg', '1+0+1', 'After Meal', '5', '07-09-2022', '2022-09-07 09:48:59', '2022-09-07 09:48:59'),
(31, '3', '26', NULL, 'Cap. Maxpro 40 mg', '1+0+1', 'Before Meal', '5', '07-09-2022', '2022-09-07 09:49:56', '2022-09-07 09:49:56'),
(32, '3', '26', NULL, 'Tab.Rubee 20mg', '1+0+1', 'After Meal', '7', '08-09-2022', '2022-09-08 06:51:44', '2022-09-08 06:51:44'),
(34, '3', '26', NULL, 'Tab.Amodis 400mg', '1+0+1', 'After Meal', '7', '08-09-2022', '2022-09-08 06:52:27', '2022-09-08 06:52:27'),
(35, '3', '26', NULL, 'Mouthcare mouth wash', '0+0+1', 'After Meal', '15', '08-09-2022', '2022-09-08 06:52:56', '2022-09-08 06:52:56'),
(36, '3', '26', NULL, 'Tab. Napa 500mg', '1+0+1', 'Before Meal', '1', '08-09-2022', '2022-09-08 12:06:58', '2022-09-08 12:06:58'),
(37, '3', '26', NULL, 'Selected', '1+0+1', 'Before Meal', '1', '08-09-2022', '2022-09-08 12:07:21', '2022-09-08 12:07:21'),
(38, '3', '26', NULL, 'Tab. Napa 500mg', '1+0+1', 'After Meal', '5', '09-09-2022', '2022-09-09 07:39:23', '2022-09-09 07:39:23'),
(40, '3', '26', NULL, 'Tab. Napa 500mg', '1+0+1', 'After Meal', '5', '21-09-2022', '2022-09-20 18:34:07', '2022-09-20 18:34:07'),
(41, '3', '26', NULL, 'Cap. Maxpro 40 mg', '1+0+1', 'Before Meal', '5', '21-09-2022', '2022-09-20 18:34:48', '2022-09-20 18:34:48'),
(42, '5', '18', NULL, 'Tab.Fimoxyclav 625mg', '1+0+1', 'Before Meal', '1', '21-09-2022', '2022-09-20 18:35:17', '2022-09-20 18:35:17'),
(43, '2', '3', NULL, 'Tab. Clacido 1gm', '1+0+1', 'Before Meal', '1', '21-09-2022', '2022-09-21 10:06:08', '2022-09-21 10:06:08'),
(46, '3', '26', NULL, 'Tab.Tory 120mg', '1+0+1', 'Before Meal', '6', '22-09-2022', '2022-09-22 07:29:32', '2022-09-22 07:29:32'),
(47, '3', '26', NULL, 'Tab. Napa 500mg', '1+0+1', 'After Meal', '6', '22-09-2022', '2022-09-22 13:42:58', '2022-09-22 13:42:58'),
(48, '3', '26', NULL, 'Cap. Maxpro 40 mg', '1+0+1', 'Before Meal', '5', '22-09-2022', '2022-09-22 13:43:50', '2022-09-22 13:43:50'),
(49, '63', '35', NULL, 'Tab. Filmet 400', '1+0+1', 'Before Meal', '5', '29-09-2022', '2022-09-29 13:33:25', '2022-09-29 13:33:25'),
(50, '63', '35', NULL, 'Cap. Maxpro 40 mg', '1+0+1', 'Before Meal', '5', '29-09-2022', '2022-09-29 13:33:42', '2022-09-29 13:33:42'),
(51, '63', '35', NULL, 'Tab.Rubee 20mg', '1+0+1', 'Before Meal', '5', '29-09-2022', '2022-09-29 13:33:53', '2022-09-29 13:33:53'),
(52, '3', '26', NULL, 'Tab. Napa 500mg', '1+0+1', 'After Meal', '5', '30-09-2022', '2022-09-30 12:39:27', '2022-09-30 12:39:27'),
(53, '3', '26', NULL, 'Tab. Clacido 1gm', '1+0+1', 'After Meal', '5', '30-09-2022', '2022-09-30 12:39:43', '2022-09-30 12:39:43'),
(54, '63', '38', NULL, 'tab. cefotil 250 mg', '1+0+1', 'Before Meal', '5', '08-10-2022', '2022-10-08 13:57:23', '2022-10-08 13:57:23'),
(55, '63', '38', NULL, 'tab. tory 90 mg', '1+0+1', 'Before Meal', '1', '08-10-2022', '2022-10-08 13:58:08', '2022-10-08 13:58:08'),
(56, '53', '31', NULL, 'Tab. Xenole 500 mg', '1+0+1', 'Before Meal', '5', '08-10-2022', '2022-10-08 15:18:58', '2022-10-08 15:18:58'),
(57, '3', '26', NULL, 'Tab. Napa 500mg', '1+0+1', 'After Meal', '10', '08-10-2022', '2022-10-08 15:34:34', '2022-10-08 15:34:34'),
(58, '3', '26', NULL, 'Tab. Clacido 1gm', '1+0+1', 'Before Meal', '10', '08-10-2022', '2022-10-08 15:34:48', '2022-10-08 15:34:48'),
(59, '3', '26', NULL, 'Tab. Clacido 1gm', '1+0+1', 'Before Meal', '10', '08-10-2022', '2022-10-08 15:34:50', '2022-10-08 15:34:50'),
(60, '63', '40', NULL, 'tab. cefotil 250 mg', '1+0+1', 'Before Meal', '5', '09-10-2022', '2022-10-09 15:07:24', '2022-10-09 15:07:24'),
(61, '63', '40', NULL, 'tab. tory 90 mg', '1+0+1', 'After Meal', '3', '09-10-2022', '2022-10-09 15:07:49', '2022-10-09 15:08:27'),
(62, '63', '40', NULL, 'tab. maxpro 20 mg', '1+0+1', 'Before Meal', '3', '09-10-2022', '2022-10-09 15:08:15', '2022-10-09 15:08:15'),
(63, '63', '41', NULL, 'Tab. Cefotil 500 mg', '1+0+1', 'Before Meal', '5', '10-10-2022', '2022-10-10 14:47:46', '2022-10-10 14:47:46'),
(64, '63', '41', NULL, 'tab. tory 90 mg', '1+0+1', 'After Meal', '3', '10-10-2022', '2022-10-10 14:48:14', '2022-10-10 14:48:48'),
(65, '63', '41', NULL, 'tab. maxpro 20 mg', '1+0+1', 'Before Meal', '3', '10-10-2022', '2022-10-10 14:48:32', '2022-10-10 14:49:02'),
(66, '3', '26', NULL, 'Tab. Napa 500mg', '1+0+1', 'Before Meal', '10', '15-10-2022', '2022-10-15 09:28:18', '2022-10-15 09:28:18'),
(67, '3', '26', NULL, 'Tab. Clacido 1gm', '1+0+1', 'Before Meal', '10', '15-10-2022', '2022-10-15 09:28:26', '2022-10-15 09:28:26'),
(68, '3', '26', NULL, 'Cap. Maxpro 40 mg', '1+0+1', 'Before Meal', '10', '15-10-2022', '2022-10-15 09:28:47', '2022-10-15 09:28:47'),
(69, '63', '45', NULL, 'tab. tory 90 mg', '1+0+1', 'After Meal', '3', '17-10-2022', '2022-10-17 09:12:38', '2022-10-17 09:12:38'),
(70, '63', '45', NULL, 'tab. maxpro 20 mg', '1+0+1', 'Before Meal', '3', '17-10-2022', '2022-10-17 09:12:54', '2022-10-17 09:12:54'),
(71, '3', '26', NULL, 'Cap. Cef-3  200mg', '1+0+1', 'After Meal', '7', '18-10-2022', '2022-10-18 05:47:42', '2022-10-18 05:47:42'),
(72, '3', '26', NULL, 'tab. tory 90 mg', '1+0+1', 'After Meal', '7', '18-10-2022', '2022-10-18 05:48:03', '2022-10-18 05:48:03'),
(73, '3', '26', NULL, 'Cap. Maxpro 40 mg', '1+0+1', 'Before Meal', '7', '18-10-2022', '2022-10-18 05:48:22', '2022-10-18 05:48:22'),
(74, '3', '26', NULL, 'Mouthcare mouth wash', '1+1+1', 'After Meal', '15', '18-10-2022', '2022-10-18 05:49:41', '2022-10-18 05:49:41'),
(75, '63', '46', NULL, 'susp. Lebac-forte', '1+1+1', 'Before Meal', '5', '19-10-2022', '2022-10-19 13:43:14', '2022-10-19 13:43:14'),
(76, '63', '46', NULL, 'syp. Flamex', '1+0+1', 'After Meal', '3', '19-10-2022', '2022-10-19 13:44:19', '2022-10-19 13:44:19'),
(77, '3', '26', NULL, 'Tab.Fimoxyclav 625mg', '1+0+1', 'Before Meal', '1', '20-10-2022', '2022-10-20 12:24:18', '2022-10-20 12:24:18'),
(78, '63', '47', NULL, 'Tab. Cefotil 500 mg', '1+0+1', 'Before Meal', '5', '20-10-2022', '2022-10-20 13:25:40', '2022-10-20 13:25:40'),
(79, '63', '47', NULL, 'tab. tory 90 mg', '1+0+1', 'After Meal', '3', '20-10-2022', '2022-10-20 13:26:27', '2022-10-20 13:26:27'),
(80, '63', '47', NULL, 'tab. maxpro 20 mg', '1+0+1', 'Before Meal', '3', '20-10-2022', '2022-10-20 13:26:44', '2022-10-20 13:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_cc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_cf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_investigation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_tp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `d_id`, `fav_cc`, `fav_cf`, `fav_investigation`, `fav_tp`) VALUES
(2, '2', 'Bad breath', 'Abrassion', 'X-ray', 'Restoration,Pulpectomy'),
(3, '3', 'Bad smell', 'Abscess', 'X-ray', 'Restoration');

-- --------------------------------------------------------

--
-- Table structure for table `investigations`
--

CREATE TABLE `investigations` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investigations`
--

INSERT INTO `investigations` (`id`, `name`, `status`) VALUES
(1, 'X-ray', 0),
(2, 'OPG', 0),
(3, 'CBCT', 0),
(11, 'BT,CT', 1),
(12, 'BCB', 1),
(13, 'Xray', 1),
(14, 'RBS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `brand`) VALUES
(1, 'Tab. Napa 500mg', NULL),
(2, 'Tab. Clacido 1gm', 'Amoxicillin with clavulanic acid'),
(3, 'Tab. Filmet 400', NULL),
(4, 'Cap. Maxpro 40 mg', NULL),
(5, 'Tab.Fimoxyclav 625mg', NULL),
(6, 'Tab.Rubee 2mg', NULL),
(7, 'Tab.Rubee 20mg', NULL),
(8, 'Tab.Tory 120mg', NULL),
(9, 'Mouthcare mouth wash', NULL),
(10, 'Tab.Amodis 400mg', NULL),
(11, 'tab. cefotil 250 mg', 'cefuroxime'),
(12, 'tab. tory 90 mg', NULL),
(13, 'tab. maxpro 20 mg', NULL),
(14, 'Tab. Xenole 500 mg', 'Naproxen+ Esomeprazole'),
(15, 'Tab. Cefotil 500 mg', NULL),
(16, 'Cap. Cef-3  200mg', 'Cefixime'),
(17, 'susp. Lebac-forte', NULL),
(18, 'syp. Flamex', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2022_05_23_214619_create_patient_infos_table', 1),
(7, '2022_06_02_081939_create_doctors_table', 3),
(10, '2022_06_04_131646_create_treatment_infos_table', 6),
(11, '2022_06_04_143529_create_treatment_infos_table', 7),
(12, '2022_06_04_162845_create_treatment_infos_table', 8),
(13, '2022_06_09_060129_create_prescriptions_table', 9),
(14, '2022_06_08_194035_create_prescriptions_table', 10),
(22, '2022_06_21_200819_create_subscription_plans_table', 15),
(23, '2022_06_21_205019_create_subscription_plans_table', 16),
(64, '2014_10_12_000000_create_users_table', 17),
(65, '2014_10_12_100000_create_password_resets_table', 17),
(66, '2019_08_19_000000_create_failed_jobs_table', 17),
(67, '2019_12_14_000001_create_personal_access_tokens_table', 17),
(68, '2022_05_24_020633_create_patient_infos_table', 17),
(69, '2022_06_02_101635_create_doctors_table', 17),
(70, '2022_06_13_135839_create_treatment_infos_table', 17),
(71, '2022_06_13_201818_create_drugs_table', 17),
(72, '2022_06_14_220840_create_prescriptions_table', 17),
(73, '2022_06_15_203335_create_medicines_table', 17),
(74, '2022_06_21_200002_create_subscriptions_table', 17),
(75, '2022_06_23_011150_create_treatment_costs_table', 17),
(76, '2022_06_26_043438_create_appointments_table', 17),
(77, '2022_07_06_214848_create_reports_table', 17),
(78, '2022_07_07_010735_create_treatment_steps_table', 17),
(79, '2022_07_07_125836_create_redeem_codes_table', 17),
(80, '2022_08_12_224019_create_chember_infos_table', 17),
(81, '2022_08_14_005154_create_chember_schedules_table', 17),
(82, '2022_08_14_023948_create_favourites_table', 17),
(83, '2022_10_21_122134_create_notices_table', 18),
(84, '2022_10_22_191317_create_discounts_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `admin_id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Welcome', 'hello Everyone', 1, '2022-10-21 06:43:24', '2022-10-21 07:18:58'),
(4, NULL, 'test', 'fh sahkfjhaskdsfalkfjfksfnoiasj ioj fjsaifi jsoifj asijfoia i fdf', 1, '2022-10-21 07:44:40', '2022-10-21 07:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_infos`
--

CREATE TABLE `patient_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bp_high` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bp_low` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bleeding_disorder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Heart_Disease` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Allergy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Diabetic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pregnant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Helpatics` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_infos`
--

INSERT INTO `patient_infos` (`id`, `d_id`, `patient_id`, `name`, `age`, `mobile`, `gender`, `Blood_group`, `date`, `occupation`, `address`, `email`, `image`, `bp_high`, `bp_low`, `Bleeding_disorder`, `Heart_Disease`, `Allergy`, `Diabetic`, `Pregnant`, `Helpatics`, `other`, `created_at`, `updated_at`) VALUES
(3, '2', NULL, 'dfd', '32', '1', 'Male', 'B+', '21/21/12', 'efrrd', 'fdsfa', NULL, 'patient20221021041012.png', '120', '70', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-15 11:57:00', '2022-10-21 10:30:12'),
(7, '15', NULL, 'Kalam', '34', '01771775944', 'Male', 'A+', '1989', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17 16:31:36', '2022-08-17 16:31:36'),
(17, '27', NULL, 'Zair Hussain Chowdhury', '36', NULL, 'Male', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-29 06:18:11', '2022-08-29 06:18:11'),
(18, '5', NULL, 'dsafdsa', NULL, '01672687796', 'Male', 'A+', '47435', '43654', '543654', 'a@d.com', '', '80', '120', 'no', 'no', 'no', 'no', NULL, 'no', NULL, '2022-08-29 06:31:31', '2022-09-20 18:34:50'),
(19, '27', NULL, 'Md. Arifur Rahman', '41', '01714000783', 'Male', 'A+', '28/11/1980', 'Doctor', 'Excel tower, Subidbazar, Sylhet', 'drarifur_rahman@yahoo.com', 'patient20220829120833.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-29 06:52:33', '2022-08-29 06:52:33'),
(21, '36', NULL, 'Lutfun Nahar Moly', '47', '01821753310', 'Female', NULL, NULL, 'Teacher', 'Masterpara', NULL, '', NULL, NULL, 'no', 'no', 'yes', 'no', 'no', NULL, NULL, '2022-09-05 14:44:09', '2022-09-05 15:08:01'),
(22, '38', NULL, 'Rizwan Sadik', NULL, NULL, NULL, NULL, NULL, NULL, 'Luxury Heights,flat A2,opposite to Child heaven Grammer School, Zakir Hossain Bylane,women College Mor, Khulshi', 'rizwansadik723@gmail.com', 'patient20220906120958.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-05 18:24:58', '2022-09-05 18:24:58'),
(23, '36', NULL, 'Md.Abdul hai', '70', '01646978573', 'Male', NULL, NULL, NULL, 'maijdee', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-06 09:23:12', '2022-09-06 09:23:12'),
(24, '2', NULL, 'ask', '22', '222', 'Male', 'A+', '22', 'student', 'dhaka', 'ask@gmail.com', 'patient20220906040956.PNG', '120', '100', 'yes', 'yes', 'no', 'yes', NULL, 'yes', NULL, '2022-09-06 10:16:56', '2022-10-22 18:27:53'),
(25, '36', NULL, 'konika rani', '35', '01846703178', 'Female', NULL, NULL, 'Housewife', 'Millon pharmacy,maijdee bazar.', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-06 13:08:44', '2022-09-06 13:14:29'),
(26, '3', NULL, 'Imran Parvez', '23', '01717206502', 'Male', 'A+', '12/12/2012', 'Student', 'uttara', 'imran.parvez@gmail.com', 'patient20220906080938.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-06 14:28:38', '2022-09-06 14:28:38'),
(28, '36', NULL, 'Shiraz mia', '75', '01817227571', 'Male', NULL, NULL, 'Retaired', 'Amishapara', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-07 14:25:47', '2022-09-07 14:25:47'),
(29, '3', NULL, 'x', NULL, '12345678', 'Male', 'A+', '12/12/2012', 'Student', 'uttara', 'dr.sayeed.nayeem@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-08 12:00:28', '2022-09-08 12:00:28'),
(30, '36', NULL, 'Mosarof hossain', '70', '8801817313435', 'Male', 'O+', NULL, NULL, 'Amishapara', NULL, '', NULL, NULL, NULL, NULL, NULL, 'yes', NULL, NULL, NULL, '2022-09-09 16:58:44', '2022-09-09 17:02:45'),
(31, '53', NULL, 'Odrika Anusmita', '6', '01711080332', 'Female', NULL, NULL, 'student', '365/7, Road 6, DOHS Baridhara', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-12 14:21:41', '2022-09-12 14:21:41'),
(32, '53', NULL, 'Abul Mondol', '52', '01515294358', 'Male', 'B+', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-12 16:35:10', '2022-09-12 16:35:10'),
(34, '36', NULL, 'Tanjid hossain', '14', '01865411738', 'Male', NULL, NULL, 'student', 'Chomir munchi hat.', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 12:39:37', '2022-09-29 12:39:37'),
(35, '63', NULL, 'Abdullah', NULL, '01681409779', 'Male', 'A+', '15/01/1988', 'Doctor', 'Uttara sector 3', 'dr.sayeed.nayeem@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 13:22:44', '2022-09-29 13:22:44'),
(36, '63', NULL, 'Mamun Sarker', '42', '01717315455', 'Male', 'B+', '12/01/1980', 'business', 'uttara 9', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-08 13:22:29', '2022-10-08 13:22:29'),
(37, '3', NULL, 'X', NULL, '01234567890', 'Male', 'A+', '12/12/2012', 'Student', 'uttara', 'rizwansadik723@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-08 13:37:04', '2022-10-08 13:37:04'),
(38, '63', NULL, 'k. M . Abu Jafar', '48', '01971570480', 'Male', 'O+', '02/10/1974', 'service', 'uttara sector 11', 'kmajafar74@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-08 13:42:58', '2022-10-08 13:51:34'),
(39, '63', NULL, 'Sofia sharmin', '57', '01714027252', 'Female', 'B+', '02/12/1965', NULL, 'uttara sector 11', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-08 14:11:55', '2022-10-08 14:16:35'),
(40, '63', NULL, 'Mr. Javed', '37', '01756900445', 'Male', 'B+', '01/01/1985', 'business', 'uttara 10', 'akhcc2@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-09 15:05:43', '2022-10-09 15:05:43'),
(41, '63', NULL, 'Sumon Ghosh', '38', '01781345271', 'Male', 'B+', '01/01/1984', 'service', 'uttara sector 4', 'sumankumarghosh127@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-10 14:45:08', '2022-10-10 14:45:08'),
(42, '63', NULL, 'Dhira sarker', '23', '01950848917', 'Female', 'AB-', '13/07/1999', 'House-wife', 'uttara sector 7', 'positivity.res@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-10 14:56:50', '2022-10-10 14:56:50'),
(43, '63', NULL, 'Ms. zanet', '59', '01859547005', 'Female', 'O+', '16/12/1963', 'House-wife', 'uttara sector 7', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-13 12:54:51', '2022-10-13 12:54:51'),
(44, '3', NULL, 'w', NULL, '01235467890', 'Male', 'A-', '12/12/1999', 'Student', 'Uttara', 'dr.sayeed.nayeem@gmail.com', '', '120', '80', 'yes', 'yes', 'yes', 'no', NULL, 'yes', NULL, '2022-10-15 08:40:45', '2022-10-15 08:41:43'),
(45, '63', NULL, 'aurik', '18', '01715063115', 'Male', 'B+', '21/03/2004', 'student', 'uttara sector 7', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-17 09:11:14', '2022-10-17 09:11:14'),
(46, '63', NULL, 'baby sadia', '6', '01983873384', 'Female', NULL, '21/01/2016', 'student', 'khilkhet', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-19 13:40:21', '2022-10-19 13:40:21'),
(47, '63', NULL, 'Mr. Rasel', '42', '01685484119', 'Male', 'O+', '03/01/1980', 'business', 'uttara sector 11', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-20 13:23:41', '2022-10-20 13:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drug_id_list` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `d_id`, `p_id`, `t_id`, `t_plan`, `drug_id_list`, `date`, `created_at`, `updated_at`) VALUES
(1, '3', '16', NULL, NULL, '12,13,14', '04-09-2022', '2022-09-04 13:51:50', '2022-09-04 13:51:50'),
(2, '2', '3', NULL, NULL, '15', '05-09-2022', '2022-09-05 04:37:04', '2022-09-05 04:37:04'),
(3, '3', '20', NULL, NULL, '16,17,18', '05-09-2022', '2022-09-05 14:09:53', '2022-09-05 14:09:53'),
(4, '36', '21', NULL, NULL, '19,20,21,22,23', '06-09-2022', '2022-09-06 13:36:44', '2022-09-06 13:36:44'),
(5, '3', '26', NULL, NULL, '29,30,31', '07-09-2022', '2022-09-07 09:50:42', '2022-09-07 09:50:42'),
(6, '53', NULL, NULL, NULL, NULL, '12-09-2022', '2022-09-12 14:30:08', '2022-09-12 14:30:08'),
(7, '63', '35', NULL, NULL, '49,50,51', '29-09-2022', '2022-09-29 13:36:55', '2022-09-29 13:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `redeem_codes`
--

CREATE TABLE `redeem_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `redeem_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `redeem_codes`
--

INSERT INTO `redeem_codes` (`id`, `redeem_code`, `duration`, `duration_type`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Reflexdemo', '1', 'Days', 1, '2022-09-05 12:44:13', '2022-10-23 07:54:00'),
(6, 'Nobel30', '30', 'Days', 0, '2022-09-06 09:33:44', '2022-09-06 09:33:44'),
(7, 'Monir05', '30', 'Days', 0, '2022-09-29 13:20:39', '2022-09-29 13:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `d_id`, `p_id`, `treatment_id`, `image`, `created_at`, `updated_at`) VALUES
(1, '3', '2', '2', 'r20220816120858.JPG', '2022-08-16 06:02:58', '2022-08-16 06:02:58'),
(2, '3', '2', '3', 'r20220816120804.jpg', '2022-08-16 06:20:04', '2022-08-16 06:20:04'),
(3, '3', '2', '4', 'r20220816120839.jpg', '2022-08-16 06:21:39', '2022-08-16 06:21:39'),
(4, '3', '5', '6', 'r20220816090856.jpeg', '2022-08-16 15:24:56', '2022-08-16 15:24:56'),
(5, '3', '11', '12', 'r20220818100848.jpg', '2022-08-18 16:13:48', '2022-08-18 16:13:48'),
(6, '3', '13', '17', 'r20220818100849.jpg', '2022-08-18 16:27:49', '2022-08-18 16:27:49'),
(7, '3', '15', '26', 'r20220828070838.jpg', '2022-08-28 13:08:39', '2022-08-28 13:08:39'),
(8, '3', '16', '27', 'r20220828100841.jpg', '2022-08-28 16:43:41', '2022-08-28 16:43:41'),
(9, '3', '16', '28', 'r20220902020952.jpg', '2022-09-02 08:53:52', '2022-09-02 08:53:52'),
(11, '3', '20', '33', 'r20220905080952.jpg', '2022-09-05 14:10:52', '2022-09-05 14:10:52'),
(12, '3', '26', '42', 'r20220908060947.jpg', '2022-09-08 12:03:47', '2022-09-08 12:03:47'),
(13, '53', '32', '52', 'r20221008081019.jpg', '2022-10-08 14:38:19', '2022-10-08 14:38:19'),
(15, '2', '24', '60', 'r20221023121007.png', '2022-10-22 18:29:07', '2022-10-22 18:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_types` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `request` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `d_id`, `s_mobile`, `package_name`, `package_price`, `duration`, `duration_types`, `start`, `end`, `status`, `request`, `created_at`, `updated_at`) VALUES
(1, '2', '01912345678', 'Package - 04', '6000', '12', 'Months', '2022-08-15 00:00:00', '2023-08-15 17:30:51', 1, 1, '2022-08-14 07:20:36', '2022-08-15 11:41:24'),
(2, '3', '01681409779', 'Redeem Code', '0', '1', 'Days', '2022-10-23 13:54:00', '2022-10-24 13:54:00', 1, 1, '2022-08-14 07:25:42', '2022-10-23 07:54:00'),
(4, '5', NULL, 'Redeem Code', '0', '30', 'Days', '2022-08-16 00:00:00', '2022-09-16 12:16:59', 1, 0, '2022-08-16 06:18:14', '2022-10-23 07:45:42'),
(14, '15', NULL, 'Redeem Code', '0', '1', 'Days', '2022-09-08 00:00:00', '2022-09-09 12:33:16', 1, 0, '2022-08-17 16:20:47', '2022-10-23 07:45:42'),
(15, '16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-08-19 09:49:13', '2022-08-19 09:49:13'),
(22, '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-08-21 10:37:05', '2022-08-21 10:37:05'),
(23, '24', NULL, 'Redeem Code', '0', '1', 'Days', '2022-08-21 00:00:00', '2022-08-22 12:38:54', 1, 0, '2022-08-21 10:54:00', '2022-10-23 07:45:42'),
(26, '27', NULL, 'Redeem Code', '0', '1', 'Days', '2022-08-29 00:00:00', '2022-08-30 12:39:12', 1, 0, '2022-08-29 06:03:24', '2022-10-23 07:50:12'),
(28, '29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-08-30 04:36:33', '2022-08-30 04:36:33'),
(33, '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-05 04:06:09', '2022-09-05 04:06:09'),
(34, '35', NULL, 'Redeem Code', '0', '1', 'Days', '2022-09-05 00:00:00', '2022-09-05 12:33:42', 1, 0, '2022-09-05 04:31:48', '2022-10-23 07:45:42'),
(35, '36', NULL, 'Redeem Code', '0', '30', 'Days', '2022-09-06 00:00:00', '2022-10-06 12:34:37', 1, 0, '2022-09-05 09:45:20', '2022-10-23 07:45:42'),
(36, '37', NULL, 'Redeem Code', '0', '1', 'Days', '2022-09-05 00:00:00', '2022-09-06 12:35:10', 1, 0, '2022-09-05 10:11:32', '2022-10-23 07:45:42'),
(37, '38', NULL, 'Redeem Code', '0', '1', 'Days', '2022-09-08 00:00:00', '2022-09-09 12:35:24', 1, 0, '2022-09-05 18:05:14', '2022-10-23 07:45:42'),
(38, '39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-06 17:09:30', '2022-09-06 17:09:30'),
(39, '40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-06 17:10:08', '2022-09-06 17:10:08'),
(40, '41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-06 17:25:41', '2022-09-06 17:25:41'),
(41, '42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-06 17:51:36', '2022-09-06 17:51:36'),
(42, '43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-08 00:22:56', '2022-09-08 00:22:56'),
(43, '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-08 07:37:23', '2022-09-08 07:37:23'),
(44, '45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-08 09:36:46', '2022-09-08 09:36:46'),
(45, '46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-08 10:08:38', '2022-09-08 10:08:38'),
(46, '47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-08 12:08:50', '2022-09-08 12:08:50'),
(47, '48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-08 15:46:43', '2022-09-08 15:46:43'),
(48, '49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-08 16:53:18', '2022-09-08 16:53:18'),
(49, '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-08 17:14:09', '2022-09-08 17:14:09'),
(50, '51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-09 14:02:41', '2022-09-09 14:02:41'),
(51, '52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-12 08:13:39', '2022-09-12 08:13:39'),
(52, '53', NULL, 'Redeem Code', '0', '1', 'Days', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '2022-09-12 08:34:39', '2022-10-23 06:38:18'),
(53, '54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-12 18:08:42', '2022-09-12 18:08:42'),
(54, '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-13 04:41:00', '2022-09-13 04:41:00'),
(55, '56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-13 12:23:39', '2022-09-13 12:23:39'),
(56, '57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-15 04:34:18', '2022-09-15 04:34:18'),
(57, '58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-17 07:32:28', '2022-09-17 07:32:28'),
(58, '59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-18 07:56:48', '2022-09-18 07:56:48'),
(59, '60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-20 15:39:31', '2022-09-20 15:39:31'),
(61, '62', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-25 09:48:53', '2022-09-25 09:48:53'),
(62, '63', NULL, 'Redeem Code', '0', '30', 'Days', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '2022-09-29 13:14:28', '2022-10-23 06:38:18'),
(63, '64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-30 11:14:09', '2022-09-30 11:14:09'),
(64, '65', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-10-12 09:38:44', '2022-10-12 09:38:44'),
(65, '66', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-10-16 14:41:05', '2022-10-16 14:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plans`
--

CREATE TABLE `subscription_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_price` int(255) NOT NULL,
  `package_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_types` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descount` int(255) NOT NULL,
  `saved_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscription_plans`
--

INSERT INTO `subscription_plans` (`id`, `package_name`, `basic_price`, `package_price`, `duration`, `duration_types`, `descount`, `saved_price`) VALUES
(1, 'Package - 01', 1000, '600', '1', 'Months', 40, 400),
(2, 'Package - 02', 3000, '2000', '3', 'Months', 33, 1000),
(3, 'Package - 03', 6000, '4000', '6', 'Months', 33, 2000),
(4, 'Package - 04', 12000, '6000', '12', 'Months', 50, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `teeth`
--

CREATE TABLE `teeth` (
  `id` int(255) NOT NULL,
  `tooth No` varchar(255) NOT NULL,
  `Tooth_name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teeth`
--

INSERT INTO `teeth` (`id`, `tooth No`, `Tooth_name`, `img`) VALUES
(1, '18', 'Upper Right Third Molar', '1TMR.png'),
(2, '17', 'Upper Right Second Molar', '2SMR.png'),
(3, '16', 'Upper Right First Molar', '3FMR.png'),
(4, '15', 'Upper Right Second Premolar', '4SPMR.png'),
(5, '14', 'Upper Right First Premolar', '5FPMR.png'),
(6, '13', 'Upper Right Canine', '6CR.png'),
(7, '12', 'Upper Right Lateral Incisor', '7LIR.png'),
(8, '11', 'Upper Right Central Incisor', '8CIR.png'),
(9, '21', 'Upper left Central Incisor', '9CIL.png'),
(10, '22', 'Upper left lateral Incisor', '10LIL.png'),
(11, '23', 'Upper left Canine', '11CL.png'),
(12, '24', 'Upper left First Pre0molar', '12FPML.png'),
(13, '25', 'Upper left second premolar', '13SPML.png'),
(14, '26', 'Upper left first molar', '14FML.png'),
(15, '27', 'Upper left second molar', '15SML.png'),
(16, '28', 'Upper left third molar', '16TML.png'),
(17, '48', 'Lower Right Third Molar', '48TMR.png'),
(18, '47', 'lower Right Second Molar', '47SMR.png'),
(19, '46', 'Lower Right First Molar', '46FMR.png'),
(20, '45', 'Lower Right Second Premolar', '45SPMR.png'),
(21, '44', 'Lower Right First Premolar', '44FPMR.png'),
(22, '43', 'Lower right Canine', '43CR.png'),
(23, '42', 'Lower right lateral Incisor', '42LIR.png'),
(24, '41', 'Lower right central Incisor', '41CIR.png'),
(25, '31', 'Lower left central Incisor', '31CIL.png'),
(26, '32', 'Lower left lateral Incisor', '32LIL.png'),
(27, '33', 'Lower left Canine', '33CL.png'),
(28, '34', 'Lower left first premolar', '34FPML.png'),
(29, '35', 'lower left second premolar', '35SPML.png'),
(30, '36', 'Lower left first molar', '36FML.png'),
(31, '37', 'Lower left second molar', '37SML.png'),
(32, '38', 'Lower left Third Molar', '38TML.png'),
(33, 'A', 'Upper right second molar', '4SPMR.png'),
(34, 'B', 'Upper right first molar', '5FPMR.png'),
(35, 'C', 'Upper right Canine', '6CR.png'),
(36, 'D', 'Upper right lateral Incisor', '7LIR.png'),
(37, 'E', 'Upper right central Incisor', '8CIR.png'),
(38, 'F', 'Upper left central Incisor', '9CIL.png'),
(39, 'G', 'Upper left lateral Incisor', '10LIL.png'),
(40, 'H', 'Upper left Canine', '11CL.png'),
(41, 'I', 'Upper left first molar', '12FPML.png'),
(42, 'J', 'Upper Left second molar', '13SPML.png'),
(43, 'T', 'Lower right second molar', '45SPMR.png'),
(44, 'S', 'Lower right first molar', '44FPMR.png'),
(45, 'R', 'Lower right Canine', '43CR.png'),
(46, 'Q', 'Lower right lateral Incisor', '42LIR.png'),
(47, 'P', 'Lower right Central Incisor', '41CIR.png'),
(48, 'O', 'Lower left central Incisor', '31CIL.png'),
(49, 'N', 'Lower left lateral Incisor', '32LIL.png'),
(50, 'M', 'Lower left Canine', '33CL.png'),
(51, 'L', 'Lower left lateral Incisor', '34FPML.png'),
(52, 'K', 'Lower left central Incisor', '35SPML.png');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_costs`
--

CREATE TABLE `treatment_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treatment_costs`
--

INSERT INTO `treatment_costs` (`id`, `d_id`, `name`, `price`) VALUES
(1, '3', 'CAP', '9000'),
(2, '3', 'Pulpectomy', '8000'),
(3, NULL, 'Root Canal Treatment', NULL),
(4, '3', 'Root Canal Treatment', '9000'),
(5, '3', 'Extraction', '8000'),
(7, '3', 'Scaling', '2500'),
(8, '3', 'Restoration', '2500'),
(9, '2', 'Restoration', '1200'),
(10, '27', 'Extraction', '5000'),
(11, '5', 'Restoration', '99'),
(12, '36', 'Root Canal Treatment', '3500'),
(13, '36', 'CAP 1', '5500'),
(14, '36', 'CAP 2', '3500'),
(15, '36', 'Cap 3', '6500'),
(16, '36', 'Light cure filling (china)', '1500'),
(17, '36', 'Scaling', '800'),
(18, '36', 'Amalgum filling', '1000'),
(19, '36', 'Extraction', '1000'),
(20, '38', 'Root Canal Treatment', '5000'),
(21, '38', 'Extraction', '1000'),
(22, '38', 'Operculectomy', '5000'),
(23, '2', 'Extraction', '200'),
(24, '36', 'RCT+Cap', '6500'),
(25, '36', 'RE-RCT', '8000'),
(26, '53', 'Extraction', '1400'),
(29, '63', 'Scaling', '2500'),
(30, '63', 'RCT+Cap', '15000'),
(31, '63', 'RE-RCT', '15000'),
(32, '63', 'RCT+Cap', '15000'),
(33, '53', 'Root Canal Treatment', '12000'),
(34, '63', 'Curettage with Scaler', '500'),
(35, '63', 'Curettage with Scaler', '500'),
(36, '63', 'Pulpectomy', '5000'),
(37, '2', 'Pulpectomy', '120');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_infos`
--

CREATE TABLE `treatment_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tooth_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tooth_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tooth_side` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chife_complaints` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinical_findings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `investigation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatment_plans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treatment_infos`
--

INSERT INTO `treatment_infos` (`id`, `d_id`, `p_id`, `tooth_type`, `tooth_no`, `tooth_side`, `chife_complaints`, `clinical_findings`, `investigation`, `treatment_plans`, `cost`, `paid`, `due`, `payment_method`, `discount_id`, `payment_status`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', '1', NULL, '18, 17, 16', NULL, '', '', '', 'CAP', '9000', '5000', '4000', NULL, NULL, 0, 1, '2022-08-14 07:41:25', '2022-08-14 12:17:12'),
(2, '3', '2', 'Permanent Teeth', '11', 'Upper Right', 'Pain', 'Caries', 'X-ray', 'Pulpectomy', '8000', '3000', '5000', NULL, NULL, 0, 1, '2022-08-14 07:53:41', '2022-08-16 05:42:44'),
(3, '3', '2', 'Permanent Teeth', '18', 'Upper Right', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '9000', '1000', '8000', NULL, NULL, 0, 1, '2022-08-16 05:39:01', '2022-08-16 06:43:54'),
(4, '3', '2', 'Permanent Teeth', '11', 'Upper Right', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '9000', '1000', '8000', NULL, NULL, 0, 0, '2022-08-16 05:48:33', '2022-08-16 06:37:22'),
(5, '3', '5', 'Permanent Teeth', '18', 'Upper Right', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '9000', '0', '0', NULL, NULL, 0, 0, '2022-08-16 07:24:55', '2022-08-16 07:24:55'),
(6, '3', '5', 'Permanent Teeth', '28', 'Upper Left', 'Pain,Swelling for 7 days', 'Impaction', 'X-ray', 'Extraction', '8000', '0', '0', NULL, NULL, 0, 2, '2022-08-16 07:29:04', '2022-08-16 07:46:44'),
(7, '3', '5', 'Permanent Teeth', '12', 'Upper Right', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '9000', '0', '0', NULL, NULL, 0, 1, '2022-08-18 14:11:09', '2022-08-18 14:11:36'),
(8, '3', '8', 'Permanent Teeth', '13', 'Upper Right', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '9000', '4000', '5000', NULL, NULL, 0, 1, '2022-08-18 14:51:20', '2022-08-18 14:54:33'),
(9, '3', '8', NULL, 'All', NULL, 'Bad breath,Bad smell,Bleeding gum', 'Calculas With Gingibitis and Stain', '', 'Scaling', '2500', '0', '0', NULL, NULL, 0, 2, '2022-08-18 14:53:47', '2022-08-18 14:54:01'),
(10, '3', '9', 'Permanent Teeth', '12', 'Upper Right', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '9000', '0', '0', NULL, NULL, 0, 0, '2022-08-18 14:59:52', '2022-08-18 14:59:52'),
(11, '3', '10', 'Permanent Teeth', '38', 'Lower Left', 'Pain', 'Impaction', 'X-ray', 'Extraction', '8000', '0', '0', NULL, NULL, 0, 0, '2022-08-18 15:15:35', '2022-08-18 15:15:35'),
(12, '3', '11', 'Permanent Teeth', '38', 'Lower Left', 'Pain', 'Caries', 'X-ray', 'Extraction', '8000', '0', '0', NULL, NULL, 0, 2, '2022-08-18 16:11:58', '2022-08-18 16:13:17'),
(13, '3', '11', 'Permanent Teeth', '16', 'Upper Right', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '9000', '0', '0', NULL, NULL, 0, 0, '2022-08-18 16:14:26', '2022-08-18 16:14:26'),
(14, '3', '12', 'Permanent Teeth', '38', 'Lower Left', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '9000', '0', '0', NULL, NULL, 0, 0, '2022-08-18 16:20:51', '2022-08-18 16:20:51'),
(15, '3', '12', NULL, 'All', NULL, 'Bad breath,Bad smell,Bleeding gum', 'Calculas With Gingibitis and Stain', '', 'Scaling', '2500', '0', '0', NULL, NULL, 0, 2, '2022-08-18 16:21:23', '2022-08-18 16:23:04'),
(16, '3', '12', 'Permanent Teeth', '15', 'Upper Right', 'Sensitivity', 'Caries', '', 'Restoration', '2500', '0', '0', NULL, NULL, 0, 2, '2022-08-18 16:22:43', '2022-08-18 16:23:39'),
(17, '3', '13', 'Permanent Teeth', '38', 'Lower Left', 'Pain', 'Impaction', 'X-ray', 'Extraction', '8000', '8000', '0', NULL, NULL, 1, 2, '2022-08-18 16:27:29', '2022-08-18 16:29:19'),
(18, '3', '13', NULL, 'All', NULL, 'Bad breath,Bad smell,Bleeding gum', 'Calculas With Gingibitis and Stain', '', 'Scaling', '2500', '2500', '0', NULL, NULL, 1, 2, '2022-08-18 16:31:44', '2022-08-18 16:32:47'),
(19, '3', '13', 'Permanent Teeth', '18', 'Upper Right', 'Bad smell', 'Calculas With Gingibitis and Stain', '', 'Scaling', '2500', '0', '0', NULL, NULL, 0, 0, '2022-08-22 10:14:07', '2022-08-22 10:14:07'),
(20, '2', '3', 'Permanent Teeth', '18', 'Upper Right', 'Bad smell,Bleeding gum', 'Abscess', 'X-ray', 'Restoration', '1200', '1000', '200', 'Cash', NULL, 0, 1, '2022-08-23 05:13:29', '2022-10-22 15:15:30'),
(21, '3', '14', 'Permanent Teeth', 'All', 'Upper Right', 'Bad breath,Bad smell,Bleeding gum', 'Calculas With Gingibitis and Stain', '', 'Scaling', '2500', '0', '0', NULL, NULL, 0, 0, '2022-08-23 17:34:17', '2022-08-23 17:34:17'),
(22, '3', '14', 'Permanent Teeth', '17', 'Upper Right', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '9000', '0', '0', NULL, NULL, 0, 0, '2022-08-23 17:35:28', '2022-08-23 17:35:28'),
(23, '3', '14', 'Permanent Teeth', '35', 'Lower Left', 'Sensitivity', 'Abrassion', '', 'Restoration', '2500', '0', '0', NULL, NULL, 0, 0, '2022-08-23 17:36:08', '2022-08-23 17:36:08'),
(24, '3', '15', NULL, 'All', NULL, 'Bad breath,Bad smell,Bleeding gum', 'Calculas With Gingibitis and Stain', '', 'Scaling', '2500', '2500', '0', NULL, NULL, 1, 2, '2022-08-24 06:08:53', '2022-08-24 06:10:54'),
(25, '3', '15', 'Permanent Teeth', '17', 'Upper Right', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '9000', '5000', '4000', NULL, NULL, 0, 0, '2022-08-27 04:26:14', '2022-08-27 04:27:25'),
(26, '3', '15', 'Permanent Teeth', '17', 'Upper Right', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '9000', '4000', '5000', NULL, NULL, 0, 1, '2022-08-28 12:54:16', '2022-08-28 12:59:16'),
(27, '3', '16', 'Permanent Teeth', 'All', 'Upper Right', 'Bad breath,Bad smell', 'Plaque, Calculus, Stain', '', 'Scaling', '2500', '2500', '0', NULL, NULL, 1, 2, '2022-08-28 16:37:36', '2022-08-29 13:06:13'),
(28, '3', '16', 'Permanent Teeth', '16', 'Upper Right', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '9000', '3000', '6000', NULL, NULL, 0, 1, '2022-08-28 16:48:58', '2022-09-02 08:56:48'),
(29, '5', '4', 'Permanent Teeth', '18', 'Upper Right', 'Bad breath', 'Abrassion', 'X-ray,X-ray,X-ray,X-ray,X-ray', 'Restoration', '99', '0', '0', NULL, NULL, 0, 0, '2022-08-29 06:28:26', '2022-08-29 06:28:26'),
(30, '5', '4', 'Permanent Teeth', '17', 'Upper Right', 'Bad breath', 'Abrassion', 'X-ray', 'Restoration', '99', '0', '0', NULL, NULL, 0, 0, '2022-08-29 06:29:36', '2022-08-29 06:29:36'),
(31, '5', '18', 'Permanent Teeth', '18', 'Upper Right', 'Bad breath', 'Abrassion', 'X-ray', 'Restoration', '99', '0', '0', NULL, NULL, 0, 0, '2022-08-29 06:40:12', '2022-08-29 06:40:12'),
(32, '27', '19', 'Permanent Teeth', '28', 'Upper Left', 'Decayed tooth', 'BDC', 'X-ray', 'Extraction', '5000', '0', '0', NULL, NULL, 0, 0, '2022-08-29 06:53:54', '2022-08-29 06:53:54'),
(33, '3', '20', 'Permanent Teeth', '18', 'Upper Right', 'Pain', 'Caries', 'X-ray', 'Extraction', '8000', '0', '0', NULL, NULL, 0, 2, '2022-09-05 14:04:15', '2022-09-05 14:05:02'),
(34, '36', '21', 'Permanent Teeth', '13', 'Upper Right', 'Food impaction', 'Caries', 'X-ray', 'Root Canal Treatment', '3500', '0', '0', NULL, NULL, 0, 0, '2022-09-05 15:09:49', '2022-09-05 15:09:49'),
(35, '36', '21', 'Permanent Teeth', '36', 'Lower Left', 'Pain', 'Grossly Carious Tooth', 'X-ray', 'Root Canal Treatment', '3500', '0', '0', NULL, NULL, 0, 1, '2022-09-05 15:11:57', '2022-09-05 15:15:43'),
(36, '36', '21', 'Permanent Teeth', '13, 46, 36', 'Lower Right', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '3500', '0', '0', NULL, NULL, 0, 1, '2022-09-05 15:24:41', '2022-09-05 15:25:13'),
(37, '2', '3', 'Permanent Teeth', '28', 'Upper Left', 'Bad smell', 'Abscess', 'X-ray', 'Restoration', '1200', '0', '0', NULL, NULL, 0, 0, '2022-09-05 18:30:19', '2022-09-05 18:30:19'),
(38, '36', '23', 'Permanent Teeth', '46', 'Lower Right', 'Pain', 'Grossly Carious Tooth', 'X-ray', 'Root Canal Treatment', '3500', '0', '0', NULL, NULL, 0, 1, '2022-09-06 10:53:31', '2022-09-06 10:54:40'),
(39, '36', '25', 'Permanent Teeth', '17', 'Upper Right', 'Pain', 'Grossly Carious Tooth', 'X-ray', 'RCT+Cap', '6500', '0', '6500', NULL, NULL, 0, 0, '2022-09-06 13:10:50', '2022-09-06 14:08:02'),
(40, '36', '21', NULL, '46', NULL, 'Discomfort', 'Cracked Tooth Syndrome', 'X-ray', 'RCT+Cap', '6500', '0', '0', NULL, NULL, 0, 1, '2022-09-06 13:40:41', '2022-09-06 13:42:09'),
(41, '36', '25', NULL, '17', NULL, 'Broken filling', 'Aesthetic', 'X-ray', 'RCT+Cap', '6500', '0', '0', NULL, NULL, 0, 1, '2022-09-06 13:55:00', '2022-09-06 13:55:13'),
(42, '3', '26', 'Permanent Teeth', '18', 'Upper Right', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '9000', '9000', '0', NULL, NULL, 1, 2, '2022-09-06 14:33:44', '2022-09-30 12:42:13'),
(43, '3', '26', 'Permanent Teeth', '27', 'Upper Left', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '9000', '4500', '4500', NULL, NULL, 0, 1, '2022-09-07 09:46:28', '2022-10-20 12:25:05'),
(44, '36', '28', NULL, '25, 26, 27', NULL, 'Intra-oral swelling', 'Apical Abscess/Infection', 'X-ray,X-ray', 'RE-RCT', '8000', '0', '0', NULL, NULL, 0, 0, '2022-09-07 14:33:55', '2022-09-07 14:33:55'),
(45, '36', '30', 'Permanent Teeth', '17', 'Upper Right', 'Discomfort', 'Pwridontal Abscess', 'X-ray', 'RE-RCT', '8000', '0', '0', NULL, NULL, 0, 0, '2022-09-09 17:02:18', '2022-09-09 17:02:18'),
(46, '53', '31', 'Deciduous Teeth', 'O', 'Lower Left', 'Mobile tooth', 'Severe Mobility', 'X-ray', 'Extraction', '1500', '500', '1000', NULL, NULL, 0, 2, '2022-09-12 14:27:21', '2022-09-12 14:31:46'),
(47, '63', '35', NULL, 'All', NULL, 'Bad breath,Bad smell,Bleeding gum', 'Calculas With Gingibitis and Stain', '', 'Scaling', '2500', '1000', '1500', NULL, NULL, 0, 2, '2022-09-29 13:25:23', '2022-09-29 13:38:50'),
(48, '2', '3', 'Permanent Teeth', '18', 'Upper Right', 'Broken filling', 'Abrassion', 'X-ray', 'Restoration', '1200', '0', '0', NULL, NULL, 0, 0, '2022-10-03 10:58:43', '2022-10-03 10:58:43'),
(49, '3', '37', 'Permanent Teeth', '18', 'Upper Right', 'Bad breath', 'Abscess', 'X-ray', 'Restoration', '2500', '0', '0', NULL, NULL, 0, 0, '2022-10-08 13:37:31', '2022-10-08 13:37:31'),
(50, '63', '36', 'Permanent Teeth', '46', 'Lower Right', 'Pain', 'Caries', 'X-ray', 'RCT+Cap', '15000', '0', '0', NULL, NULL, 0, 0, '2022-10-08 13:47:41', '2022-10-08 13:47:41'),
(51, '63', '38', 'Permanent Teeth', '35', 'Lower Left', 'Pain', 'Restoration of Endodontically Treated Tooth', 'X-ray', 'RE-RCT', '15000', '0', '0', NULL, NULL, 0, 0, '2022-10-08 13:54:00', '2022-10-08 13:54:00'),
(52, '53', '32', 'Permanent Teeth', '46', 'Lower Right', 'Pain', 'Grossly Carious Tooth', 'X-ray', 'Root Canal Treatment', '12000', '0', '0', NULL, NULL, 0, 0, '2022-10-08 14:37:31', '2022-10-08 14:37:31'),
(53, '63', '40', NULL, '15, 14', NULL, 'Pain', 'BDC', 'X-ray', 'RCT+Cap', '15000', '0', '0', NULL, NULL, 0, 0, '2022-10-09 15:06:53', '2022-10-09 15:06:53'),
(54, '63', '41', 'Permanent Teeth', '34, 35, 38', 'Lower Left', 'Pain', 'Restoration of Endodontically Treated Tooth', 'X-ray', 'RE-RCT', '15000', '0', '0', NULL, NULL, 0, 0, '2022-10-10 14:46:37', '2022-10-10 14:46:37'),
(55, '3', '44', 'Permanent Teeth', '16', 'Upper Right', 'Pain', 'Caries', 'X-ray', 'Root Canal Treatment', '9000', '0', '0', NULL, NULL, 0, 1, '2022-10-15 08:43:49', '2022-10-15 08:44:59'),
(56, '63', '45', 'Permanent Teeth', '25', 'Upper Left', 'Pain', 'Pulpitis', '', 'RCT+Cap', '15000', '0', '0', NULL, NULL, 0, 0, '2022-10-17 09:12:06', '2022-10-17 09:12:06'),
(57, '3', '26', 'Permanent Teeth', '12', 'Upper Right', 'Sensitivity', 'Caries', '', 'Restoration', '2500', '0', '0', NULL, NULL, 0, 0, '2022-10-18 05:41:04', '2022-10-18 05:41:04'),
(58, '63', '46', 'Deciduous Teeth', 'H', 'Upper Left', 'Pain', 'Abscess', 'X-ray', 'Pulpectomy', '5000', '0', '0', NULL, NULL, 0, 0, '2022-10-19 13:41:53', '2022-10-19 13:41:53'),
(59, '63', '47', NULL, '36, 37, 38', NULL, 'Pain', 'Abscess,Impaction,Pulpitis', 'X-ray', 'RCT+Cap', '15000', '0', '0', NULL, NULL, 0, 0, '2022-10-20 13:25:12', '2022-10-20 13:25:12'),
(60, '2', '24', 'Permanent Teeth', '15', 'Upper Right', 'Bad smell', 'Abscess', 'OPG', 'Pulpectomy', '120', '12', '108', 'Cash', NULL, 0, 1, '2022-10-22 18:26:43', '2022-10-22 18:42:59'),
(61, '2', '24', 'Permanent Teeth', '18', 'Upper Right', 'Bad breath', 'Abrassion', 'X-ray', 'Pulpectomy', '120', '0', '0', NULL, NULL, 0, 0, '2022-10-23 09:03:56', '2022-10-23 09:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_plans`
--

CREATE TABLE `treatment_plans` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment_plans`
--

INSERT INTO `treatment_plans` (`id`, `name`, `status`) VALUES
(1, 'Restoration', 0),
(2, 'Pulpectomy', 0),
(3, 'Pulpotomy', 0),
(5, 'Operculectomy', 0),
(6, 'Abscess Drainage', 0),
(7, 'Cyst Enucleation', 0),
(8, 'Polishing', 0),
(9, 'Curettage with Scaler', 0),
(10, 'Scaling', 0),
(11, 'Apisectomy', 0),
(12, 'Abscess Drainage', 0),
(13, 'Orthodontic Tratment', 0),
(14, 'helloeas', 1),
(19, 'Extraction', 1),
(20, 'CAP', 1),
(21, 'Root Canal Treatment', NULL),
(22, 'RCT+Cap', 1),
(23, 'RE-RCT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `treatment_steps`
--

CREATE TABLE `treatment_steps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `steps` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treatment_steps`
--

INSERT INTO `treatment_steps` (`id`, `d_id`, `p_id`, `treatment_id`, `class`, `steps`, `date`, `created_at`, `updated_at`) VALUES
(2, '3', '1', '1', NULL, 'Capcut was done by Dr. Era\r\nOrder is placed 14/08/2022\r\nWill deliver 19/08/2022', '14-08-2022', '2022-08-14 07:45:32', '2022-08-14 07:45:32'),
(5, '3', '2', '2', NULL, 'sdfgashdfuywrw', '16-08-2022', '2022-08-16 05:53:10', '2022-08-16 05:53:10'),
(6, '3', '2', '2', NULL, 'kuyfutdydsfyg;k', '16-08-2022', '2022-08-16 06:01:43', '2022-08-16 06:01:43'),
(7, '3', '2', '2', NULL, 'gghfhgfgfg;jhj', '16-08-2022', '2022-08-16 06:02:27', '2022-08-16 06:02:27'),
(8, '3', '2', '2', NULL, 'ok', '16-08-2022', '2022-08-16 06:06:54', '2022-08-16 06:06:54'),
(9, '3', '2', '3', NULL, 'cbhxfhg', '16-08-2022', '2022-08-16 06:18:56', '2022-08-16 06:18:56'),
(10, '3', '2', '4', NULL, 'test', '16-08-2022', '2022-08-16 06:20:30', '2022-08-16 06:20:30'),
(11, '3', '2', '3', NULL, 'hioifkutfglkh', '16-08-2022', '2022-08-16 06:43:46', '2022-08-16 06:43:46'),
(12, '3', '2', '3', NULL, NULL, '16-08-2022', '2022-08-16 06:43:54', '2022-08-16 06:43:54'),
(13, '3', '5', '6', NULL, 'Duration: 2 hours 35 minutes\r\nThe patient was released 20 minutes after the surgery is done. The patient\'s BP was 110/70. \r\nThe tooth was partially impacted & extracted in two sections.\r\nThis surgery was performed by Dr. B. H. Rahman', '16-08-2022', '2022-08-16 07:46:44', '2022-08-16 07:46:44'),
(15, '3', '5', '7', NULL, 'Duration : 2 hours \r\nUse R- 15/20/25/30', '18-08-2022', '2022-08-18 14:12:26', '2022-08-18 14:12:26'),
(16, '3', '8', '8', NULL, 'R- 15/2/25/30', '18-08-2022', '2022-08-18 14:51:51', '2022-08-18 14:51:51'),
(17, '3', '8', '9', NULL, NULL, '18-08-2022', '2022-08-18 14:54:01', '2022-08-18 14:54:01'),
(18, '3', '11', '12', NULL, 'Duration - 1 & half hour\r\nThe patient was released half an hour after surgery.', '18-08-2022', '2022-08-18 16:13:17', '2022-08-18 16:13:17'),
(19, '3', '12', '15', NULL, NULL, '18-08-2022', '2022-08-18 16:23:04', '2022-08-18 16:23:04'),
(20, '3', '12', '16', NULL, 'PF done', '18-08-2022', '2022-08-18 16:23:39', '2022-08-18 16:23:39'),
(21, '3', '13', '17', NULL, 'Extraction done. LA - 2 crtgs', '18-08-2022', '2022-08-18 16:28:36', '2022-08-18 16:28:36'),
(22, '3', '13', '17', NULL, NULL, '18-08-2022', '2022-08-18 16:28:54', '2022-08-18 16:28:54'),
(23, '3', '13', '18', NULL, 'Scaling done by Dr. Mamun Khan', '18-08-2022', '2022-08-18 16:32:18', '2022-08-18 16:32:18'),
(24, '3', '15', '24', NULL, 'Done by me', '24-08-2022', '2022-08-24 06:09:15', '2022-08-24 06:09:15'),
(25, '3', '15', '26', NULL, 'm,jgfjdcnmbn/lk/;n;lfu.,jhgvv.,/h,jglvjujg,ubhn.km,', '28-08-2022', '2022-08-28 12:54:47', '2022-08-28 12:54:47'),
(26, '3', '15', '26', NULL, NULL, '28-08-2022', '2022-08-28 12:55:03', '2022-08-28 12:55:03'),
(27, '3', '16', '27', NULL, 'ghkhgdhkhdfg', '28-08-2022', '2022-08-28 16:43:15', '2022-08-28 16:43:15'),
(29, '3', '16', '27', NULL, 'tyuiopfghjklvbnmkl;', '29-08-2022', '2022-08-29 13:05:41', '2022-08-29 13:05:41'),
(30, '3', '16', '27', NULL, NULL, '29-08-2022', '2022-08-29 13:06:13', '2022-08-29 13:06:13'),
(31, '3', '16', '28', NULL, 'দঘভক্সক্স', '02-09-2022', '2022-09-02 06:54:23', '2022-09-02 06:54:23'),
(32, '3', '16', '28', NULL, '54i9iu54t;k/3p\'i9[-t5u9j35p;4/0\'o3t\'/p2ot;j5i.j;w0e\'iote5/ikh.lohj', '02-09-2022', '2022-09-02 08:53:05', '2022-09-02 08:53:05'),
(34, '3', '20', '33', NULL, 'hafhasodyf,ahbkeg89lwf iwyiu;orwi;l', '05-09-2022', '2022-09-05 14:05:02', '2022-09-05 14:05:02'),
(35, '36', '21', '35', NULL, 'RCO done with euginol +GI build up', '05-09-2022', '2022-09-05 15:15:43', '2022-09-05 15:15:43'),
(37, '36', '21', '36', NULL, 'Single visite RCT will be done on 13. \r\ncrown cut and impression was taken 46\r\nRCO was done on 36.', '06-09-2022', '2022-09-06 10:46:15', '2022-09-06 10:46:15'),
(38, '36', '23', '38', NULL, 'RCT seal was done. Today tooth preparation for crown was done.', '06-09-2022', '2022-09-06 10:54:36', '2022-09-06 10:54:36'),
(39, '36', '23', '38', NULL, NULL, '06-09-2022', '2022-09-06 10:54:40', '2022-09-06 10:54:40'),
(41, '36', '25', '39', NULL, 'Previously rct was done.today final prosthesis crown was supplied.', '06-09-2022', '2022-09-06 13:12:17', '2022-09-06 13:12:17'),
(42, '36', '21', '40', NULL, 'Crown preparation on 46. takes the impression.makes the model.then send it to lab.', '06-09-2022', '2022-09-06 13:42:09', '2022-09-06 13:42:09'),
(43, '36', '25', '39', NULL, NULL, '06-09-2022', '2022-09-06 13:53:44', '2022-09-06 13:53:44'),
(44, '36', '25', '39', NULL, NULL, '06-09-2022', '2022-09-06 13:53:47', '2022-09-06 13:53:47'),
(45, '36', '25', '39', NULL, NULL, '06-09-2022', '2022-09-06 13:53:56', '2022-09-06 13:53:56'),
(46, '36', '25', '41', NULL, NULL, '06-09-2022', '2022-09-06 13:55:13', '2022-09-06 13:55:13'),
(47, '36', '25', '41', NULL, NULL, '06-09-2022', '2022-09-06 13:55:21', '2022-09-06 13:55:21'),
(48, '3', '26', '43', NULL, NULL, '07-09-2022', '2022-09-07 10:35:00', '2022-09-07 10:35:00'),
(50, '53', '31', '46', NULL, NULL, '12-09-2022', '2022-09-12 14:27:56', '2022-09-12 14:27:56'),
(51, '3', '26', '43', NULL, '15/20/25', '17-09-2022', '2022-09-17 12:08:29', '2022-09-17 12:08:29'),
(52, '63', '35', '47', NULL, 'Treatment started at 07:00 pm, finished at 7:30pm', '29-09-2022', '2022-09-29 13:27:36', '2022-09-29 13:27:36'),
(54, '2', '3', '48', NULL, 'fjbgkjkj', '03-10-2022', '2022-10-03 10:59:11', '2022-10-03 10:59:11'),
(55, '53', '32', '52', NULL, 'rct was performed on tooth number 36 on single visit. sealed with 25/6 GP and  calcium based sealer', '08-10-2022', '2022-10-08 14:39:26', '2022-10-08 14:39:26'),
(56, '53', '31', '46', NULL, NULL, '08-10-2022', '2022-10-08 15:48:13', '2022-10-08 15:48:13'),
(57, '3', '44', '55', NULL, 'egljkrtbjyrqwgykiajogybksjeygkudh.oawiluer', '15-10-2022', '2022-10-15 08:44:59', '2022-10-15 08:44:59'),
(58, '3', '26', '43', NULL, 'sdfghjkl;\'m dfghjktg6h7uiko', '20-10-2022', '2022-10-20 12:22:20', '2022-10-20 12:22:20'),
(63, '2', '24', '60', NULL, 'Hello First Test...', '23-10-2022', '2022-10-22 18:28:49', '2022-10-22 18:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chember_infos`
--
ALTER TABLE `chember_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chember_schedules`
--
ALTER TABLE `chember_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chife_complaints`
--
ALTER TABLE `chife_complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinical_findings`
--
ALTER TABLE `clinical_findings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`),
  ADD UNIQUE KEY `unique_index` (`email`,`BMDC`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investigations`
--
ALTER TABLE `investigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patient_infos`
--
ALTER TABLE `patient_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redeem_codes`
--
ALTER TABLE `redeem_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teeth`
--
ALTER TABLE `teeth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_costs`
--
ALTER TABLE `treatment_costs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_infos`
--
ALTER TABLE `treatment_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_plans`
--
ALTER TABLE `treatment_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_steps`
--
ALTER TABLE `treatment_steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `chember_infos`
--
ALTER TABLE `chember_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chember_schedules`
--
ALTER TABLE `chember_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `chife_complaints`
--
ALTER TABLE `chife_complaints`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `clinical_findings`
--
ALTER TABLE `clinical_findings`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `investigations`
--
ALTER TABLE `investigations`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient_infos`
--
ALTER TABLE `patient_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `redeem_codes`
--
ALTER TABLE `redeem_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teeth`
--
ALTER TABLE `teeth`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `treatment_costs`
--
ALTER TABLE `treatment_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `treatment_infos`
--
ALTER TABLE `treatment_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `treatment_plans`
--
ALTER TABLE `treatment_plans`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `treatment_steps`
--
ALTER TABLE `treatment_steps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
