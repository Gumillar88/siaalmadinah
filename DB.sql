-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 11, 2022 at 09:01 AM
-- Server version: 10.2.44-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitq3349_kitaschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `hcode` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `school_token`, `hcode`, `name`, `description`, `is_active`, `created_at`, `created_by`, `update_at`, `update_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 'dashboard', 'Dashboard', 'Lorem ipsum dolor siamet', 1, '2022-08-20 10:46:58', 0, '2022-08-20 14:52:26', 1),
(2, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 'ppdb', 'PPDB', 'Lorem ipsum dolor siamet', 1, '2022-08-20 10:47:15', 1, '2022-08-20 14:52:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `apps_menu`
--

CREATE TABLE `apps_menu` (
  `id` int(1) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `apps_id` int(11) NOT NULL,
  `id_parent` int(1) DEFAULT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `slug` text NOT NULL,
  `menu_description` text DEFAULT NULL,
  `menu_url` text DEFAULT NULL,
  `menu_order` int(11) DEFAULT NULL,
  `menu_type` enum('menu','dropdown','tab') DEFAULT NULL,
  `menu_icon` text DEFAULT NULL,
  `is_root` int(1) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps_menu`
--

INSERT INTO `apps_menu` (`id`, `school_token`, `apps_id`, `id_parent`, `menu_name`, `slug`, `menu_description`, `menu_url`, `menu_order`, `menu_type`, `menu_icon`, `is_root`, `is_active`, `created_by`, `created_at`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, NULL, 'Dashboard', 'home', 'Master Dashboard', 'dashboard', 0, 'menu', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>', 1, 1, '1', '2021-10-15 20:23:39', '2021-11-17 07:41:42', '1'),
(2, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 2, NULL, 'PPDB', 'ppdb', 'Lorem ipsum dolor siamet', '/ppdb', 2, 'dropdown', NULL, 1, 1, '1', '2022-08-20 11:08:55', '2022-08-20 11:08:55', '1');

-- --------------------------------------------------------

--
-- Table structure for table `apps_menu_role_permission`
--

CREATE TABLE `apps_menu_role_permission` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps_menu_role_permission`
--

INSERT INTO `apps_menu_role_permission` (`role_id`, `permission_id`, `school_token`) VALUES
(6, 1, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(6, 2, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(6, 3, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(6, 4, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(6, 5, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(1, 2, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(1, 3, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(1, 4, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(1, 5, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(5, 2, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(5, 3, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(5, 4, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(3, 2, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(3, 3, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(3, 4, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(2, 2, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(2, 3, 'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(7, 2, 'aF5I7jy9nZmGEFY16&zhlIebtI^');

-- --------------------------------------------------------

--
-- Table structure for table `apps_menu_user`
--

CREATE TABLE `apps_menu_user` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `apps_id` int(11) NOT NULL,
  `apps_menu_id` int(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps_menu_user`
--

INSERT INTO `apps_menu_user` (`id`, `school_token`, `role_id`, `user_id`, `apps_id`, `apps_menu_id`, `created_at`, `created_by`, `updated_at`, `update_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 6, 1, 1, 1, '2022-08-20 10:48:36', 1, '2022-08-20 11:12:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `apps_user`
--

CREATE TABLE `apps_user` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `apps_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps_user`
--

INSERT INTO `apps_user` (`id`, `school_token`, `role_id`, `user_id`, `apps_id`, `created_at`, `created_by`, `updated_at`, `update_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 6, 1, 2, '2022-08-20 10:49:16', 1, '2022-08-20 11:41:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bk_record`
--

CREATE TABLE `bk_record` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `course_detail_id` int(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `type` enum('increment','decrement') NOT NULL,
  `point` double NOT NULL,
  `message` text NOT NULL,
  `description` text NOT NULL,
  `reason` text NOT NULL,
  `is_case_close` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bk_setting`
--

CREATE TABLE `bk_setting` (
  `id` int(11) NOT NULL,
  `default_value` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bk_setting`
--

INSERT INTO `bk_setting` (`id`, `default_value`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(2, 100, '2022-08-14 15:56:37', 1, '2022-08-14 15:56:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `hcode` varchar(100) NOT NULL,
  `school_grade_id` int(11) NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `pic` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `school_token`, `hcode`, `school_grade_id`, `academic_year_id`, `name`, `pic`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 'XIPA1', 10, 1, 'X IPA 1', '', '2022-08-14 18:19:11', 0, '2022-08-20 13:13:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `class_user`
--

CREATE TABLE `class_user` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_user`
--

INSERT INTO `class_user` (`id`, `school_token`, `class_id`, `student_id`, `teacher_id`, `academic_year_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 1, '2022-08-20 13:11:21', 1, '2022-08-20 13:11:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `school_token`, `code`, `name`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 'U002111', 'IPA', 'Ilmu Pengetahuan Alam', '2022-08-20 13:05:51', 1, '2022-08-20 13:05:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_class`
--

CREATE TABLE `course_class` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `schedule_day` varchar(255) NOT NULL,
  `schedule_date` date DEFAULT NULL,
  `schedule_start` time NOT NULL,
  `schdule_end` time NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `school_grade_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_class`
--

INSERT INTO `course_class` (`id`, `school_token`, `course_id`, `class_id`, `teacher_id`, `schedule_day`, `schedule_date`, `schedule_start`, `schdule_end`, `academic_year_id`, `school_grade_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 'Senin', '2022-08-22', '08:00:00', '10:00:00', 1, 4, '2022-08-20 13:23:14', 1, '2022-08-20 13:38:38', 1),
(2, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 'Selasa', '2022-08-23', '10:00:00', '11:00:00', 1, 1, '2022-08-20 13:49:10', 1, '2022-08-20 13:49:10', 1),
(3, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 'Rabu', '2022-08-24', '10:00:00', '11:00:00', 1, 1, '2022-08-20 13:50:46', 1, '2022-08-20 13:50:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_class_user`
--

CREATE TABLE `course_class_user` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `school_grade_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_class_user`
--

INSERT INTO `course_class_user` (`id`, `school_token`, `student_id`, `course_id`, `class_id`, `teacher_id`, `academic_year_id`, `school_grade_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 1, 1, 4, '2022-08-20 13:52:54', 1, '2022-08-20 13:52:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_detail`
--

CREATE TABLE `course_detail` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `hcode` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_start` time NOT NULL,
  `event_end` time NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `link_class_forum` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_detail`
--

INSERT INTO `course_detail` (`id`, `school_token`, `class_id`, `teacher_id`, `course_id`, `academic_year_id`, `hcode`, `sort_order`, `event_date`, `event_start`, `event_end`, `name`, `description`, `link_class_forum`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 1, '1st-intro', 1, '2022-08-22', '08:00:00', '08:00:00', 'Introduction', 'Pengenalan Materi yang akan disiapkan', 'https://us04web.zoom.us/j/73341197268?pwd=_ckJD6UB2zltBIz2k1hDkWKFc3dBuD.1', '2022-08-20 13:25:49', 1, '2022-08-20 13:45:34', 1),
(2, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 1, '2nd-Materi-Reproduksi', 2, '2022-08-29', '08:00:00', '10:00:00', 'Reproduksi', 'Reproduksi', 'https://us04web.zoom.us/j/73341197268?pwd=_ckJD6UB2zltBIz2k1hDkWKFc3dBuD.1', '2022-08-20 13:26:06', 1, '2022-08-20 13:46:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_detail_attendance`
--

CREATE TABLE `course_detail_attendance` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_detail_id` int(11) NOT NULL,
  `course_class_user_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `log_time` time NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_detail_attendance`
--

INSERT INTO `course_detail_attendance` (`id`, `school_token`, `course_id`, `course_detail_id`, `course_class_user_id`, `class_id`, `teacher_id`, `student_id`, `log_time`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 1, 1, 1, '13:53:18', '2022-08-20 13:54:20', 1, '2022-08-20 13:54:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_document`
--

CREATE TABLE `course_document` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_detail_id` int(11) DEFAULT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_document`
--

INSERT INTO `course_document` (`id`, `school_token`, `course_id`, `course_detail_id`, `name`, `description`, `academic_year_id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `teacher_id`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, NULL, 'Pengenalan', 'Pengenalan IPA dan RPAL', 1, '2022-08-20 13:58:00', 1, '2022-08-20 13:58:00', 1, 1),
(2, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 'Modul Materi Reproduksi', 'Belajar Reproduksi', 1, '2022-08-20 13:59:50', 1, '2022-08-20 13:59:50', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(1) NOT NULL,
  `user_id` int(1) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `action` longtext NOT NULL,
  `created_by` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mst_academic_year`
--

CREATE TABLE `mst_academic_year` (
  `id` int(11) NOT NULL,
  `start_year` varchar(255) NOT NULL,
  `final_year` varchar(255) NOT NULL,
  `current_year` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_academic_year`
--

INSERT INTO `mst_academic_year` (`id`, `start_year`, `final_year`, `current_year`, `period`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '2022', '2023', '1', 'odd', '2022-08-17 18:55:08', 1, '2022-08-25 21:54:47', 1),
(2, '2022', '2023', '0', 'even', '2022-08-17 18:55:21', 1, '2022-08-25 21:54:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_permission`
--

CREATE TABLE `mst_permission` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_permission`
--

INSERT INTO `mst_permission` (`id`, `name`) VALUES
(1, 'manage'),
(2, 'views'),
(3, 'create'),
(4, 'edit'),
(5, 'delete');

-- --------------------------------------------------------

--
-- Table structure for table `mst_role`
--

CREATE TABLE `mst_role` (
  `id` int(11) NOT NULL,
  `hcode` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_role`
--

INSERT INTO `mst_role` (`id`, `hcode`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'admin', 'Admin', '2022-08-14 18:18:19', 1, '2022-08-20 11:57:12', 1),
(2, 'student', 'Student', '2022-08-14 18:18:19', 1, '2022-08-20 11:57:16', 1),
(3, 'teacher', 'Teacher', '2022-08-14 18:23:10', 1, '2022-08-20 11:57:19', 1),
(5, 'staff', 'Staff', '2022-08-20 11:02:11', 1, '2022-08-20 11:02:11', 1),
(6, 'superadmin', 'Super Admin', '2022-08-20 11:02:11', 1, '2022-08-20 11:02:11', 1),
(7, 'principal', 'Principal', '2022-08-20 12:06:44', 1, '2022-08-20 12:06:44', 1),
(8, 'parent', 'Parent', '2022-08-25 22:57:54', 1, '2022-08-25 22:57:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_school`
--

CREATE TABLE `mst_school` (
  `id` int(11) NOT NULL,
  `school_level_id` int(11) NOT NULL,
  `token` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `provinces` varchar(255) DEFAULT NULL,
  `regions` varchar(255) DEFAULT NULL,
  `locations` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_school`
--

INSERT INTO `mst_school` (`id`, `school_level_id`, `token`, `name`, `provinces`, `regions`, `locations`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 4, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 'SMA ISLAM AL-Azhar', 'Jakarta Timur', 'Ciracas', 'Jl. Raya Centex No.24, RT.7/RW.10, Ciracas, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13740', '2022-08-14 18:25:27', 0, '2022-08-20 14:47:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_school_grade`
--

CREATE TABLE `mst_school_grade` (
  `id` int(11) NOT NULL,
  `school_level_id` int(11) NOT NULL,
  `hcode` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_school_grade`
--

INSERT INTO `mst_school_grade` (`id`, `school_level_id`, `hcode`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 4, 'XII', 'XII', '2022-08-17 19:23:52', 1, '2022-08-17 19:25:24', 1),
(2, 4, 'XI', 'XI', '2022-08-17 19:22:44', 1, '2022-08-17 19:23:05', 1),
(3, 4, 'X', 'X', '2022-08-17 19:22:34', 1, '2022-08-17 19:26:15', 1),
(4, 3, 'IX', 'IX', '2022-08-17 19:24:32', 1, '2022-08-17 19:25:41', 1),
(5, 3, 'VIII', 'VIII', '2022-08-17 19:24:32', 1, '2022-08-17 19:24:32', 1),
(6, 3, 'VII', 'VII', '2022-08-17 19:23:52', 1, '2022-08-17 19:25:39', 1),
(33, 2, 'VI', 'VI', '2022-08-20 15:22:57', 1, '2022-08-20 15:22:57', 1),
(34, 2, 'V', 'V', '2022-08-20 15:22:57', 1, '2022-08-20 15:22:57', 1),
(35, 2, 'IV', 'IV', '2022-08-20 15:23:39', 1, '2022-08-20 15:23:39', 1),
(36, 2, 'III', 'III', '2022-08-20 15:23:39', 1, '2022-08-20 15:23:39', 1),
(37, 2, 'II', 'II', '2022-08-20 15:24:24', 1, '2022-08-20 15:24:24', 1),
(38, 2, 'I', 'I', '2022-08-20 15:24:24', 1, '2022-08-20 15:24:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_school_level`
--

CREATE TABLE `mst_school_level` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_school_level`
--

INSERT INTO `mst_school_level` (`id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'TKIT', '2022-08-14 18:26:49', 0, '2022-08-14 18:26:49', 0),
(2, 'SDIT', '2022-08-14 18:26:49', 0, '2022-08-14 18:26:49', 0),
(3, 'SMP', '2022-08-14 18:26:49', 0, '2022-08-14 18:26:49', 0),
(4, 'SMA', '2022-08-14 18:26:49', 0, '2022-08-14 18:26:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(10) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `gender` enum('laki-laki','perempuan') NOT NULL,
  `nationality` varchar(255) NOT NULL DEFAULT 'WNI',
  `address` text NOT NULL,
  `other_info` text DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(10) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `school_token`, `student_id`, `name`, `gender`, `nationality`, `address`, `other_info`, `role_id`, `is_delete`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 'Sanusi', 'laki-laki', 'WNI', 'Jl Batu nunggal 5 derajat lintang utara,\r\nProvinsi tidak diketahui', NULL, 2, 0, '2022-08-20 12:51:37', 1, '2022-08-25 23:49:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reff_api`
--

CREATE TABLE `reff_api` (
  `id` int(11) NOT NULL,
  `api_group` int(11) NOT NULL,
  `hcode` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `url` text NOT NULL,
  `method` varchar(255) NOT NULL,
  `data_sample` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reff_bank_code`
--

CREATE TABLE `reff_bank_code` (
  `bank_code` varchar(10) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reff_bank_code`
--

INSERT INTO `reff_bank_code` (`bank_code`, `bank_name`, `is_active`) VALUES
('000', 'ARTAJASA', 1),
('002', 'BANK BRI', 1),
('003', 'BANK EKSPOR INDONESIA', 1),
('008', 'BANK MANDIRI', 1),
('009', 'BANK BNI', 1),
('011', 'BANK DANAMON', 1),
('013', 'PERMATA BANK', 1),
('014', 'BANK BCA', 1),
('016', 'BANK BII / Maybank', 1),
('019', 'BANK PANIN', 1),
('020', 'BANK ARTA NIAGA KENCANA', 1),
('022', 'BANK NIAGA (CIMB)', 1),
('023', 'BANK BUANA IND', 1),
('026', 'BANK LIPPO', 1),
('028', 'BANK NISP', 1),
('030', 'AMERICAN EXPRESS BANK LTD', 1),
('031', 'CITIBANK N.A.', 1),
('032', 'JP. MORGAN CHASE BANK, N.A.', 1),
('033', 'BANK OF AMERICA, N.A.', 1),
('034', 'ING INDONESIA BANK', 1),
('036', 'BANK MULTICOR TBK.', 1),
('037', 'BANK ARTHA GRAHA', 1),
('039', 'BANK CREDIT AGRICOLE INDOSUEZ', 1),
('040', 'THE BANGKOK BANK COMP. LTD', 1),
('041', 'HSBC', 1),
('042', 'THE BANK OF TOKYO MITSUBISHI UFJ LTD', 1),
('045', 'BANK SUMITOMO MITSUI INDONESIA', 1),
('046', 'BANK DBS INDONESIA', 1),
('047', 'BANK RESONA PERDANIA', 1),
('048', 'BANK MIZUHO INDONESIA', 1),
('050', 'STANDARD CHARTERED BANK', 1),
('052', 'BANK ABN AMRO', 1),
('053', 'BANK KEPPEL TATLEE BUANA', 1),
('054', 'BANK CAPITAL INDONESIA, TBK.', 1),
('057', 'BANK BNP PARIBAS INDONESIA', 1),
('058', 'BANK UOB INDONESIA', 1),
('059', 'KOREA EXCHANGE BANK DANAMON', 1),
('060', 'RABOBANK INTERNASIONAL INDONESIA', 1),
('061', 'ANZ PANIN BANK', 1),
('067', 'DEUTSCHE BANK AG.', 1),
('068', 'BANK WOORI INDONESIA', 1),
('069', 'BANK OF CHINA LIMITED', 1),
('076', 'BANK BUMI ARTA', 1),
('087', 'BANK EKONOMI', 1),
('088', 'BANK ANTARDAERAH', 1),
('089', 'BANK HAGA', 1),
('093', 'BANK IFI', 1),
('095', 'BANK CENTURY, TBK.', 1),
('097', 'BANK MAYAPADA', 1),
('110', 'BANK JABAR', 1),
('111', 'BANK DKI', 1),
('112', 'BPD DIY', 1),
('113', 'BANK JATENG', 1),
('114', 'BANK JATIM', 1),
('115', 'BPD JAMBI', 1),
('116', 'BPD ACEH', 1),
('117', 'BANK SUMUT', 1),
('118', 'BANK NAGARI', 1),
('119', 'BANK RIAU', 1),
('120', 'BANK SUMSEL', 1),
('121', 'BANK LAMPUNG', 1),
('122', 'BPD KALSEL', 1),
('123', 'BPD KALIMANTAN BARAT', 1),
('124', 'BPD KALTIM', 1),
('125', 'BPD KALTENG', 1),
('126', 'BPD SULSEL', 1),
('127', 'BANK SULUT', 1),
('128', 'BPD NTB', 1),
('129', 'BPD BALI', 1),
('130', 'BANK NTT', 1),
('131', 'BANK MALUKU', 1),
('132', 'BPD PAPUA', 1),
('133', 'BANK BENGKULU', 1),
('134', 'BPD SULAWESI TENGAH', 1),
('135', 'BANK SULTRA', 1),
('145', 'BANK NUSANTARA PARAHYANGAN', 1),
('146', 'BANK SWADESI', 1),
('147', 'BANK MUAMALAT', 1),
('151', 'BANK MESTIKA', 1),
('152', 'BANK METRO EXPRESS', 1),
('153', 'BANK SINARMAS', 1),
('157', 'BANK MASPION', 1),
('159', 'BANK HAGAKITA', 1),
('161', 'BANK GANESHA', 1),
('162', 'BANK WINDU KENTJANA', 1),
('164', 'HALIM INDONESIA BANK', 1),
('166', 'BANK HARMONI INTERNATIONAL', 1),
('167', 'BANK KESAWAN', 1),
('200', 'BANK TABUNGAN NEGARA (PERSERO)', 1),
('212', 'BANK HIMPUNAN SAUDARA 1906, TBK', 1),
('213', 'BANK TABUNGAN PENSIUNAN NASIONAL', 1),
('405', 'BANK SWAGUNA', 1),
('422', 'BRI SYARIAH', 1),
('426', 'BANK MEGA', 1),
('427', 'BANK BNI SYARIAH', 1),
('441', 'BANK BUKOPIN', 1),
('451', 'BANK SYARIAH MANDIRI', 1),
('459', 'BANK BISNIS INTERNASIONAL', 1),
('466', 'BANK SRI PARTHA', 1),
('472', 'BANK JASA JAKARTA', 1),
('484', 'BANK BINTANG MANUNGGAL', 1),
('485', 'BANK BUMIPUTERA', 1),
('490', 'BANK YUDHA BHAKTI', 1),
('491', 'BANK MITRANIAGA', 1),
('494', 'BANK AGRO NIAGA', 1),
('498', 'BANK INDOMONEX', 1),
('501', 'BANK ROYAL INDONESIA', 1),
('503', 'BANK ALFINDO', 1),
('506', 'BANK SYARIAH MEGA', 1),
('513', 'BANK INA PERDANA', 1),
('517', 'BANK HARFA', 1),
('520', 'PRIMA MASTER BANK', 1),
('521', 'BANK PERSYARIKATAN INDONESIA', 1),
('523', 'BANK DIPO INTERNATIONAL', 1),
('525', 'BANK AKITA', 1),
('526', 'LIMAN INTERNATIONAL BANK', 1),
('531', 'ANGLOMAS INTERNASIONAL BANK', 1),
('535', 'BANK KESEJAHTERAAN EKONOMI', 1),
('536', 'BANK UIB', 1),
('542', 'BANK ARTOS IND', 1),
('547', 'BANK PURBA DANARTA', 1),
('548', 'BANK MULTI ARTA SENTOSA', 1),
('553', 'BANK MAYORA', 1),
('555', 'BANK INDEX SELINDO', 1),
('558', 'BANK EKSEKUTIF', 1),
('559', 'CENTRATAMA NASIONAL BANK', 1),
('562', 'BANK FAMA INTERNASIONAL', 1),
('564', 'BANK SINAR HARAPAN BALI', 1),
('566', 'BANK VICTORIA INTERNATIONAL', 1),
('567', 'BANK HARDA', 1),
('945', 'BANK FINCONESIA', 1),
('946', 'BANK MERINCORP', 1),
('947', 'BANK MAYBANK INDOCORP', 1),
('948', 'BANK OCBC INDONESIA', 1),
('949', 'BANK CHINA TRUST INDONESIA', 1),
('950', 'BANK COMMONWEALTH', 1),
('997', 'Alto', 1),
('alf', 'ALFA CASHOUT', 1),
('xxx', 'OTHER', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `gender` enum('laki-laki','perempuan') NOT NULL,
  `nationality` varchar(255) NOT NULL DEFAULT 'WNI',
  `address` text NOT NULL,
  `other_info` text DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `is_active_student` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL,
  `register_date` date NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(10) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `school_token`, `nisn`, `nis`, `name`, `gender`, `nationality`, `address`, `other_info`, `role_id`, `is_active_student`, `is_delete`, `register_date`, `academic_year_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', '112233445', '202200001', 'Ucup bin sanusi', 'laki-laki', 'WNI', 'Jl Batu nunggal 5 derajat lintang utara,\r\nProvinsi tidak diketahui', NULL, 2, 1, 0, '2022-08-20', 1, '2022-08-20 12:51:37', 1, '2022-08-20 14:44:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_payment_billing`
--

CREATE TABLE `student_payment_billing` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `school_grade_id` int(11) NOT NULL,
  `school_level_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `student_registration_id` int(11) DEFAULT NULL,
  `payment_type` varchar(255) NOT NULL,
  `total_amount` double NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_payment_billing`
--

INSERT INTO `student_payment_billing` (`id`, `school_token`, `school_grade_id`, `school_level_id`, `student_id`, `student_registration_id`, `payment_type`, `total_amount`, `academic_year_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 1, 'pendafaran', 3500000, 1, '2022-08-20 14:10:04', 1, '2022-08-20 14:10:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_payment_record`
--

CREATE TABLE `student_payment_record` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `payment_billing_id` int(11) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `method` enum('cash','transfer') NOT NULL,
  `bank_code` int(11) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `channel_code` int(11) DEFAULT NULL,
  `channel_name` varchar(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `folder_path` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_payment_record`
--

INSERT INTO `student_payment_record` (`id`, `school_token`, `payment_billing_id`, `payment_type`, `method`, `bank_code`, `bank_name`, `channel_code`, `channel_name`, `amount`, `folder_path`, `image`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 'pendafaran', 'cash', NULL, NULL, NULL, NULL, '3000000', NULL, NULL, '2022-08-20 14:11:46', 1, '2022-08-20 14:12:31', 1),
(2, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 'pendaftaran', 'transfer', 14, 'BANK BCA', NULL, NULL, '500000', '/assets/transaction/', 'image.png', '2022-08-20 14:13:23', 1, '2022-08-20 14:16:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(10) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `nisn` int(11) NOT NULL,
  `registration_number` varchar(20) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `gender` enum('laki-laki','perempuan') NOT NULL,
  `address` text NOT NULL,
  `dob` date DEFAULT NULL,
  `pob` varchar(255) NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(10) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `school_token`, `nisn`, `registration_number`, `name`, `gender`, `address`, `dob`, `pob`, `academic_year_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 112233445, '202200001', 'Ucup bin sanusi', 'laki-laki', 'Jl Batu nunggal 5 derajat lintang utara,\r\nProvinsi tidak diketahui', '2006-08-01', 'Bojong Gede', 1, '2022-08-20 14:22:09', 1, '2022-08-20 14:22:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_registration_document`
--

CREATE TABLE `student_registration_document` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `student_registration_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `ext` varchar(255) NOT NULL,
  `document_type` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration_document`
--

INSERT INTO `student_registration_document` (`id`, `school_token`, `student_registration_id`, `name`, `path`, `ext`, `document_type`, `is_active`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 'Ijazah%20ucup%20bin%20bin%20sanusi.pdf', '/assets/document/', 'pdf', 'ijazah', 1, '2022-08-20 14:25:25', 1, '2022-08-20 14:25:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(10) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `gender` varchar(155) NOT NULL,
  `nationality` varchar(255) NOT NULL DEFAULT 'WNI',
  `address` text NOT NULL,
  `other_info` text DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `is_active_student` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL,
  `register_date` date NOT NULL,
  `register_academic_year_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(10) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `school_token`, `nik`, `nip`, `name`, `gender`, `nationality`, `address`, `other_info`, `role_id`, `is_active_student`, `is_delete`, `register_date`, `register_academic_year_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', '3175211111710011', '111111', 'Jamal Bahri', 'laki-laki', 'WNI', 'Bojong Gede', '[]', 3, 1, 0, '2022-08-01', 1, '2022-08-20 14:34:49', 1, '2022-08-20 14:43:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `is_need_change_password` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `school_token`, `name`, `username`, `password`, `email`, `phone`, `role_id`, `account_id`, `is_active`, `is_delete`, `is_need_change_password`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 'Admin', 'admin', '$2y$10$1MRGzcmmOo8.LVtd0Rf5G.9LU/ji3K.Eq2PTaeSbJO7U0pH.DHV6O', 'admin', '0893456789', 6, 0, 1, 0, 1, '2022-08-20 14:36:49', 1, '2022-08-20 15:33:56', 1),
(2, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 'jamal', 'jamal', '$2y$10$1MRGzcmmOo8.LVtd0Rf5G.9LU/ji3K.Eq2PTaeSbJO7U0pH.DHV6O', 'jamal@mailinator.com', '08765456789', 3, 1, 1, 0, 1, '2022-08-20 15:07:02', 1, '2022-08-20 15:33:08', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps_menu`
--
ALTER TABLE `apps_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps_menu_user`
--
ALTER TABLE `apps_menu_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps_user`
--
ALTER TABLE `apps_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bk_record`
--
ALTER TABLE `bk_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bk_setting`
--
ALTER TABLE `bk_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_user`
--
ALTER TABLE `class_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_class`
--
ALTER TABLE `course_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_class_user`
--
ALTER TABLE `course_class_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_detail`
--
ALTER TABLE `course_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_detail_attendance`
--
ALTER TABLE `course_detail_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_document`
--
ALTER TABLE `course_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_academic_year`
--
ALTER TABLE `mst_academic_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_permission`
--
ALTER TABLE `mst_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_role`
--
ALTER TABLE `mst_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_school`
--
ALTER TABLE `mst_school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_school_grade`
--
ALTER TABLE `mst_school_grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_school_level`
--
ALTER TABLE `mst_school_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reff_api`
--
ALTER TABLE `reff_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_payment_billing`
--
ALTER TABLE `student_payment_billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_payment_record`
--
ALTER TABLE `student_payment_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration_document`
--
ALTER TABLE `student_registration_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apps_menu`
--
ALTER TABLE `apps_menu`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apps_menu_user`
--
ALTER TABLE `apps_menu_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apps_user`
--
ALTER TABLE `apps_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bk_record`
--
ALTER TABLE `bk_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bk_setting`
--
ALTER TABLE `bk_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class_user`
--
ALTER TABLE `class_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_class`
--
ALTER TABLE `course_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_class_user`
--
ALTER TABLE `course_class_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_detail`
--
ALTER TABLE `course_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_detail_attendance`
--
ALTER TABLE `course_detail_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_document`
--
ALTER TABLE `course_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_academic_year`
--
ALTER TABLE `mst_academic_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_permission`
--
ALTER TABLE `mst_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mst_role`
--
ALTER TABLE `mst_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mst_school`
--
ALTER TABLE `mst_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_school_grade`
--
ALTER TABLE `mst_school_grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `mst_school_level`
--
ALTER TABLE `mst_school_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reff_api`
--
ALTER TABLE `reff_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_payment_billing`
--
ALTER TABLE `student_payment_billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_payment_record`
--
ALTER TABLE `student_payment_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_registration_document`
--
ALTER TABLE `student_registration_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
