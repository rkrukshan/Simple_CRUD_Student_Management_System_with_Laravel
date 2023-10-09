-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 09, 2023 at 06:43 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE IF NOT EXISTS `grades` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `grade_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `grade_group`, `grade_name`, `grade_order`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'primary', '9A', 1, '2023-09-23 07:04:44', '2023-09-23 07:04:44', NULL),
(2, 'Higher', '11C', 2, '2023-09-23 07:04:44', '2023-09-23 07:04:44', NULL),
(3, 'primary', '9B', 3, '2023-09-23 07:04:44', '2023-09-23 07:04:44', NULL),
(4, 'High', '10A', 10, '2023-09-28 13:56:39', '2023-09-28 13:56:39', NULL),
(5, 'High', '11A', 11, '2023-09-28 13:58:12', '2023-09-28 13:58:12', NULL),
(6, 'High', '12A', 12, '2023-09-28 13:58:27', '2023-09-28 13:58:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

DROP TABLE IF EXISTS `houses`;
CREATE TABLE IF NOT EXISTS `houses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `house_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `houses_house_name_unique` (`house_name`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `house_name`, `house_order`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'White', 1, '2023-09-23 07:04:44', '2023-09-28 11:04:53', NULL),
(2, 'Green', 2, NULL, NULL, NULL),
(3, 'Blue', 3, NULL, NULL, NULL),
(4, 'Grey', 4, '2023-09-28 13:54:27', '2023-09-28 13:54:27', NULL),
(5, 'Maroon', 5, '2023-09-28 13:54:49', '2023-09-28 13:54:49', NULL),
(6, 'Pink', 6, '2023-09-28 13:55:56', '2023-09-28 13:55:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=228 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(219, '2014_10_12_000000_create_users_table', 7),
(220, '2014_10_12_100000_create_password_reset_tokens_table', 7),
(221, '2019_08_19_000000_create_failed_jobs_table', 7),
(222, '2019_12_14_000001_create_personal_access_tokens_table', 7),
(223, '2023_09_11_093034_create_students_table', 7),
(224, '2023_09_11_093131_create_subjects_table', 7),
(69, '2023_09_19_140322_create_student_subjects_table', 2),
(70, '2023_09_19_165717_create_student_subjects_table', 3),
(71, '2023_09_19_165717_create_student_subject_table', 4),
(72, '2023_09_19_172919_create_student_subjects_table', 5),
(73, '2023_09_19_175059_create_student_subjects_table', 6),
(225, '2023_09_11_093156_create_houses_table', 7),
(226, '2023_09_11_093221_create_grades_table', 7),
(227, '2023_09_20_030729_create_student_subjects_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('rukshan11122@gmail.com', '$2y$10$jiq82Xa7/1uzeRjs0dJouuZEk30GDSZMVuuiMHStLrrqbM8Q0Uu6C', '2023-09-25 01:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `admision_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `house_id` int NOT NULL,
  `grade_id` int NOT NULL,
  `nic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_admision_number_unique` (`admision_number`),
  UNIQUE KEY `students_nic_unique` (`nic`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `admision_number`, `first_name`, `last_name`, `gender`, `address`, `dob`, `house_id`, `grade_id`, `nic`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '564', 'Rukmanghan', 'Selvakumar', 'male', 'jaffna', '1998-12-28', 1, 3, '983630600V', '2023-09-23 07:04:44', '2023-09-23 07:04:44', NULL),
(2, '994', 'Rukshan', 'Selva', 'male', 'jaffna', '1998-12-25', 1, 1, '983630601V', '2023-09-23 07:04:44', '2023-09-24 14:24:09', NULL),
(3, '556', 'Nila', 'Selva', 'female', 'jaffna', '2000-12-25', 3, 3, '203630600V', '2023-09-23 07:04:44', '2023-09-23 07:04:44', NULL),
(4, '355', 'Kapilan', 'Sriranjan', 'male', 'jaffna', '1998-06-22', 1, 1, '983630602V', '2023-09-23 07:04:44', '2023-09-23 07:04:44', NULL),
(5, '004', 'Thiva', 'Vimal', 'male', 'jaffna', '1995-07-19', 2, 2, '953668955V', '2023-09-23 07:04:44', '2023-09-23 07:04:44', NULL),
(6, '945', 'Mayuran', 'puvanesh', 'male', 'jaffna', '1998-02-13', 3, 3, '983668955V', '2023-09-23 07:04:44', '2023-09-23 07:04:44', NULL),
(7, '547', 'Jeya', 'Kathir', 'male', 'colombo', '1995-07-04', 1, 1, '954168955V', '2023-09-23 07:04:44', '2023-09-23 07:04:44', NULL),
(8, '567', 'Shasha', 'varun', 'female', 'colombo', '1998-12-18', 2, 3, '983568955V', '2023-09-23 07:04:44', '2023-09-23 07:04:44', NULL),
(9, '626', 'Thivaharan', 'Vimalampikaibakan', 'male', 'colombo', '1998-07-24', 3, 3, '983678555V', '2023-09-23 07:04:44', '2023-09-23 07:04:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_subjects`
--

DROP TABLE IF EXISTS `student_subjects`;
CREATE TABLE IF NOT EXISTS `student_subjects` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `student_id` int NOT NULL,
  `subject_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_subjects`
--

INSERT INTO `student_subjects` (`id`, `student_id`, `subject_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, NULL, NULL),
(2, 2, 2, NULL, NULL, NULL),
(3, 3, 3, NULL, NULL, NULL),
(4, 4, 4, NULL, NULL, NULL),
(5, 5, 5, NULL, NULL, NULL),
(6, 6, 6, NULL, NULL, NULL),
(7, 7, 7, NULL, NULL, NULL),
(8, 8, 8, NULL, NULL, NULL),
(9, 8, 1, NULL, NULL, NULL),
(10, 9, 9, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_index` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subjects_subject_name_unique` (`subject_name`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_index`, `subject_order`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hindu Culture', '4', '4', '2023-09-23 07:04:44', '2023-09-23 07:04:44', NULL),
(2, 'Tamil Literature', '2', '2', '2023-09-23 07:04:44', '2023-09-23 07:04:44', NULL),
(3, 'Science', '1', '1', '2023-09-23 07:04:44', '2023-09-23 07:04:44', NULL),
(4, 'Social Science', '3', '3', NULL, NULL, NULL),
(5, 'Tamil', '5', '5\r\n\r\n', NULL, NULL, NULL),
(6, 'IT', '6', '6', NULL, NULL, NULL),
(7, 'Maths', '7', '7', NULL, NULL, NULL),
(8, 'Geography', '8', '8', NULL, NULL, NULL),
(9, 'Political\r\n', '9', '9', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rukshan', 'rukshan1122@gmail.com', '2023-09-01 04:02:11', '12345678a', NULL, NULL, NULL),
(2, 'mayuran', 'mayu@gmail.com', '2023-08-31 18:30:00', '12345678ab', NULL, NULL, NULL),
(3, 'kapilan', 'kapilan@gmail.com', '2023-09-01 04:05:01', '12345678abc', NULL, NULL, NULL),
(4, 'Rukmanghan Selvakumar', 'rukshan11122@gmail.com', NULL, '$2y$10$TSCTe7vBQ8yASHZGoRMnzeL9TnSj612Nb5KXrkdnwRcyl/pzSVH.W', NULL, '2023-09-24 23:01:27', '2023-09-24 23:01:27'),
(5, 'Rukmanghan Selvakumar', 'rukshan@gmail.com', NULL, '$2y$10$nB4iEPhSMO9s9AQflMtQDec.bMQUzxdIVV86FAo5.6zHiAlv66l/u', NULL, '2023-10-01 12:34:26', '2023-10-01 12:34:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
