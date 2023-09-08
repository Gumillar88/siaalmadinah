/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100425
 Source Host           : localhost:3306
 Source Schema         : kitaschool

 Target Server Type    : MySQL
 Target Server Version : 100425
 File Encoding         : 65001

 Date: 09/09/2023 02:37:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for apps
-- ----------------------------
DROP TABLE IF EXISTS `apps`;
CREATE TABLE `apps`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hcode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `icon` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_delete` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & o not_delete',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `update_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `update_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of apps
-- ----------------------------
INSERT INTO `apps` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 'dashboard', 'Dashboard', 'Lorem ipsum dolor siamet', 'fa fa-arror-left', '1', '2022-08-20 10:46:58', 0, '2022-08-20 14:52:26', 1);
INSERT INTO `apps` VALUES (2, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 'ppdb', 'PPDB', 'Lorem ipsum dolor siamet', 'fa fa-arror-left', '1', '2022-08-20 10:47:15', 1, '2022-08-20 14:52:30', 1);
INSERT INTO `apps` VALUES (3, 's2XXvH8vbxWMusszAnCty/u2jjY=', 'eraport', 'E-Raport', 'Lorem ipsum dolor siamet', 'fa fa-arror-left', '', '0000-00-00 00:00:00', 1, '2023-09-04 21:52:34', 1);
INSERT INTO `apps` VALUES (4, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 'master', 'Master Data', '', 'fa fa-dashboard', '1', '2023-08-29 22:16:24', 0, '2023-08-29 22:17:01', 0);

-- ----------------------------
-- Table structure for apps_menu
-- ----------------------------
DROP TABLE IF EXISTS `apps_menu`;
CREATE TABLE `apps_menu`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `apps_id` int NOT NULL,
  `id_parent` int NULL DEFAULT NULL,
  `menu_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `slug` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `menu_description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `menu_url` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `menu_order` int NULL DEFAULT NULL,
  `menu_type` enum('menu','dropdown','tab') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `menu_icon` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `is_root` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_root & 0: not root',
  `is_delete` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT current_timestamp,
  `updated_at` datetime NULL DEFAULT current_timestamp,
  `updated_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of apps_menu
-- ----------------------------
INSERT INTO `apps_menu` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, NULL, 'Dashboard', 'dashboard', 'Master Dashboard', 'dashboard', 0, 'menu', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>', '1', '0', '1', '2021-10-15 20:23:39', '2021-11-17 07:41:42', '1');
INSERT INTO `apps_menu` VALUES (2, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 4, NULL, 'Master Data', 'master', NULL, 'master', 99, 'dropdown', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>', '1', '0', '1', '2023-08-29 12:45:14', '2023-08-29 12:45:14', '1');
INSERT INTO `apps_menu` VALUES (3, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, NULL, 'BK', 'bk', NULL, 'bk', 1, 'menu', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>', '1', '0', '1', '2023-08-29 12:45:12', '2023-08-29 12:45:12', '1');
INSERT INTO `apps_menu` VALUES (4, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 2, NULL, 'PPDB', 'ppdb', NULL, 'ppdb', 2, 'menu', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>', '1', '0', '1', '2023-08-29 12:45:13', '2023-08-29 12:45:13', '1');
INSERT INTO `apps_menu` VALUES (6, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 4, 2, 'List School', 'school', NULL, 'school', 1, 'menu', NULL, '0', '0', '1', '2023-08-29 12:45:14', '2023-08-29 12:45:14', '1');
INSERT INTO `apps_menu` VALUES (7, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 4, 2, 'List School Level', 'school', NULL, 'schoollevel', 2, 'menu', NULL, '0', '0', '1', '2023-08-29 12:47:45', '2023-08-29 12:47:45', '1');
INSERT INTO `apps_menu` VALUES (8, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 4, 2, 'List Class', 'class', NULL, 'class', 3, 'menu', NULL, '0', '0', '1', '2023-08-29 12:47:45', '2023-08-29 12:47:45', '1');
INSERT INTO `apps_menu` VALUES (9, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 4, 2, 'List Course', 'course', NULL, 'course', 4, 'menu', NULL, '0', '0', '1', '2023-08-29 12:47:45', '2023-08-29 12:47:45', '1');
INSERT INTO `apps_menu` VALUES (10, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 4, 2, 'List Employee', 'employee', NULL, 'employee', 5, 'menu', NULL, '0', '1', '1', '2023-08-29 12:47:46', '2023-08-29 12:47:46', '1');
INSERT INTO `apps_menu` VALUES (11, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 4, 2, 'List Teacher', 'teacher', NULL, 'teacher', 6, 'menu', NULL, '0', '1', '1', '2023-08-29 12:47:46', '2023-08-29 12:47:46', '1');
INSERT INTO `apps_menu` VALUES (12, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 4, 2, 'List Student', 'student', NULL, 'student', 7, 'menu', NULL, '0', '1', '1', '2023-08-29 12:47:47', '2023-08-29 12:47:47', '1');
INSERT INTO `apps_menu` VALUES (13, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 4, NULL, 'Dashboard', 'dashboard', 'Master Dashboard', 'dashboard', 0, 'menu', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>', '1', '', '1', '2021-10-15 20:23:39', '2021-11-17 07:41:42', '1');
INSERT INTO `apps_menu` VALUES (14, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 4, 2, 'List Users', 'user', NULL, 'user', 8, NULL, NULL, '0', '0', '1', '2023-09-02 15:14:50', '2023-09-02 15:14:54', '1');
INSERT INTO `apps_menu` VALUES (15, 's2XXvH8vbxWMusszAnCty/u2jjY=', 3, NULL, 'MAPEL DIAMPU', 'list-mapel-diampu', 'List MAPEL DiAMPU', 'list-mapel-diampu', 2, 'menu', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>', '1', '0', '1', '2023-09-04 21:56:02', '2023-09-04 21:56:05', '1');
INSERT INTO `apps_menu` VALUES (16, 's2XXvH8vbxWMusszAnCty/u2jjY=', 3, NULL, 'RIWAYAT MENGAJAR', 'list-riwayat-mengajar', NULL, 'list-riwayat-mengajar', 3, 'menu', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>', '1', '0', '1', '2023-09-04 21:59:16', '2023-09-04 21:59:20', '1');
INSERT INTO `apps_menu` VALUES (17, 's2XXvH8vbxWMusszAnCty/u2jjY=', 3, NULL, 'Dashboard', 'dashboard', NULL, 'dashboard', 1, 'menu', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>', '1', '0', '1', '2023-09-05 22:31:53', '2023-09-05 22:31:57', '1');
INSERT INTO `apps_menu` VALUES (18, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 4, 2, 'List Extracurricular', 'extracurricular', NULL, 'extracurricular', 8, 'menu', NULL, '0', '0', '1', '2023-09-07 22:39:05', '2023-09-07 22:39:05', '1');
INSERT INTO `apps_menu` VALUES (19, 's2XXvH8vbxWMusszAnCty/u2jjY=', 3, NULL, 'Ekstrakurikuler', 'extracurricular', NULL, 'extracurricular', 4, 'menu', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>', '1', '0', '1', '2023-09-09 00:02:04', '2023-09-09 00:02:04', '1');
INSERT INTO `apps_menu` VALUES (20, 's2XXvH8vbxWMusszAnCty/u2jjY=', 3, NULL, 'Prestasi', 'achievement', NULL, 'achievement', 5, 'menu', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>', '1', '0', '1', '2023-09-09 01:54:10', '2023-09-09 01:54:10', '1');

-- ----------------------------
-- Table structure for apps_menu_role_permission
-- ----------------------------
DROP TABLE IF EXISTS `apps_menu_role_permission`;
CREATE TABLE `apps_menu_role_permission`  (
  `role_id` int NOT NULL,
  `permission_id` int NOT NULL,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of apps_menu_role_permission
-- ----------------------------
INSERT INTO `apps_menu_role_permission` VALUES (6, 1, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (6, 2, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (6, 3, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (6, 4, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (6, 5, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (1, 2, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (1, 3, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (1, 4, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (1, 5, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (5, 2, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (5, 3, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (5, 4, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (3, 2, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (3, 3, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (3, 4, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (2, 2, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (2, 3, 'aF5I7jy9nZmGEFY16&zhlIebtI^');
INSERT INTO `apps_menu_role_permission` VALUES (7, 2, 'aF5I7jy9nZmGEFY16&zhlIebtI^');

-- ----------------------------
-- Table structure for apps_menu_user
-- ----------------------------
DROP TABLE IF EXISTS `apps_menu_user`;
CREATE TABLE `apps_menu_user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `role_id` int NULL DEFAULT NULL,
  `user_id` int NULL DEFAULT NULL,
  `apps_id` int NOT NULL,
  `apps_menu_id` int NOT NULL,
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `update_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of apps_menu_user
-- ----------------------------
INSERT INTO `apps_menu_user` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 6, 1, 1, 1, '2022-08-20 10:48:36', 1, '2022-08-20 11:12:06', 1);

-- ----------------------------
-- Table structure for apps_school_relateds
-- ----------------------------
DROP TABLE IF EXISTS `apps_school_relateds`;
CREATE TABLE `apps_school_relateds`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `apps_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of apps_school_relateds
-- ----------------------------
INSERT INTO `apps_school_relateds` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 3);

-- ----------------------------
-- Table structure for apps_user
-- ----------------------------
DROP TABLE IF EXISTS `apps_user`;
CREATE TABLE `apps_user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `role_id` int NULL DEFAULT NULL,
  `user_id` int NULL DEFAULT NULL,
  `apps_id` int NOT NULL,
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `update_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of apps_user
-- ----------------------------
INSERT INTO `apps_user` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 6, 1, 2, '2022-08-20 10:49:16', 1, '2022-08-20 11:41:56', 1);

-- ----------------------------
-- Table structure for bk_record
-- ----------------------------
DROP TABLE IF EXISTS `bk_record`;
CREATE TABLE `bk_record`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `academic_year_id` int NOT NULL,
  `class_id` int NOT NULL,
  `course_id` int NULL DEFAULT NULL,
  `course_detail_id` int NULL DEFAULT NULL,
  `student_id` int NOT NULL,
  `teacher_id` int NOT NULL,
  `type` enum('increment','decrement') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `point` double NOT NULL,
  `message` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `reason` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_case_close` int NULL DEFAULT 0 COMMENT '1: problem_solve 0: progress',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of bk_record
-- ----------------------------

-- ----------------------------
-- Table structure for bk_setting
-- ----------------------------
DROP TABLE IF EXISTS `bk_setting`;
CREATE TABLE `bk_setting`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `default_value` int NOT NULL,
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of bk_setting
-- ----------------------------
INSERT INTO `bk_setting` VALUES (2, 100, '2022-08-14 15:56:37', 1, '2022-08-14 15:56:37', 1);

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hcode` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `school_grade_id` int NOT NULL,
  `academic_year_id` int NOT NULL,
  `name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `pic` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `is_delete` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & 0 not_delete',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES (1, 'zpszZZXWi+TBZFN8k6pQ5Q5m5qQ=', 'TK-A-1', 1, 1, 'TK A-1', '', '1', '2022-08-14 18:19:11', 0, '2023-09-01 05:46:05', 0);
INSERT INTO `class` VALUES (2, 'zpszZZXWi+TBZFN8k6pQ5Q5m5qQ=', 'TK-B-2', 1, 1, 'TK B-2', NULL, '1', '2023-09-01 01:36:35', 1, '2023-09-01 21:27:58', 1);
INSERT INTO `class` VALUES (4, 's2XXvH8vbxWMusszAnCty/u2jjY=', 'VIII-A', 3, 1, 'VIII A', NULL, '0', '2023-09-05 22:44:42', 1, '2023-09-05 22:44:42', 1);
INSERT INTO `class` VALUES (5, 's2XXvH8vbxWMusszAnCty/u2jjY=', 'VIII-B', 3, 1, 'VIII B', NULL, '0', '2023-09-05 23:26:16', 1, '2023-09-05 23:26:16', 1);
INSERT INTO `class` VALUES (6, 's2XXvH8vbxWMusszAnCty/u2jjY=', 'VIII-C', 3, 1, 'VIII C', NULL, '0', '2023-09-05 23:26:31', 1, '2023-09-05 23:27:24', 1);
INSERT INTO `class` VALUES (7, 's2XXvH8vbxWMusszAnCty/u2jjY=', 'VIII-D', 3, 1, 'VIII D', NULL, '0', '2023-09-05 23:27:05', 1, '2023-09-05 23:27:37', 1);
INSERT INTO `class` VALUES (8, 's2XXvH8vbxWMusszAnCty/u2jjY=', 'VIII-E', 3, 1, 'VIII E', NULL, '0', '2023-09-05 23:28:01', 1, '2023-09-05 23:28:01', 1);

-- ----------------------------
-- Table structure for class_user
-- ----------------------------
DROP TABLE IF EXISTS `class_user`;
CREATE TABLE `class_user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `class_id` int NOT NULL,
  `student_id` int NOT NULL,
  `teacher_id` int NOT NULL,
  `academic_year_id` int NOT NULL,
  `is_delete` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of class_user
-- ----------------------------
INSERT INTO `class_user` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 1, '0', '2022-08-20 13:11:21', 1, '2022-08-20 13:11:21', 1);

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `teacher_id` int NOT NULL,
  `code` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `is_delete` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES (1, 'zpszZZXWi+TBZFN8k6pQ5Q5m5qQ=', 1, 'U200001', 'Makro Centra Kubus', 'Ilmu Pengetahuan Alam Ghaib', '0', '2022-08-20 13:05:51', 1, '2023-09-01 23:39:27', 1);
INSERT INTO `course` VALUES (3, 's2XXvH8vbxWMusszAnCty/u2jjY=', 4, 'PH4', 'IPS', 'Lorem ipsum', '0', '2023-09-05 22:49:20', 1, '2023-09-06 05:49:53', NULL);

-- ----------------------------
-- Table structure for course_class
-- ----------------------------
DROP TABLE IF EXISTS `course_class`;
CREATE TABLE `course_class`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `course_id` int NOT NULL,
  `class_id` int NOT NULL,
  `teacher_id` int NOT NULL,
  `schedule_day` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `schedule_date` date NULL DEFAULT NULL,
  `schedule_start` time NOT NULL,
  `schdule_end` time NOT NULL,
  `academic_year_id` int NOT NULL,
  `school_grade_id` int NOT NULL,
  `is_delete` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of course_class
-- ----------------------------
INSERT INTO `course_class` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 'Senin', '2022-08-22', '08:00:00', '10:00:00', 1, 4, '0', '2022-08-20 13:23:14', 1, '2022-08-20 13:38:38', 1);
INSERT INTO `course_class` VALUES (2, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 'Selasa', '2022-08-23', '10:00:00', '11:00:00', 1, 1, '0', '2022-08-20 13:49:10', 1, '2022-08-20 13:49:10', 1);
INSERT INTO `course_class` VALUES (3, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 'Rabu', '2022-08-24', '10:00:00', '11:00:00', 1, 1, '0', '2022-08-20 13:50:46', 1, '2022-08-20 13:50:46', 1);

-- ----------------------------
-- Table structure for course_class_user
-- ----------------------------
DROP TABLE IF EXISTS `course_class_user`;
CREATE TABLE `course_class_user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `student_id` int NOT NULL,
  `course_id` int NOT NULL,
  `class_id` int NOT NULL,
  `teacher_id` int NOT NULL,
  `academic_year_id` int NOT NULL,
  `school_grade_id` int NOT NULL,
  `is_delete` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of course_class_user
-- ----------------------------
INSERT INTO `course_class_user` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 1, 1, 4, NULL, '2022-08-20 13:52:54', 1, '2022-08-20 13:52:54', 1);

-- ----------------------------
-- Table structure for course_detail
-- ----------------------------
DROP TABLE IF EXISTS `course_detail`;
CREATE TABLE `course_detail`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `class_id` int NOT NULL,
  `teacher_id` int NOT NULL,
  `course_id` int NOT NULL,
  `academic_year_id` int NOT NULL,
  `hcode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort_order` int NULL DEFAULT NULL,
  `event_date` date NULL DEFAULT NULL,
  `event_start` time NULL DEFAULT NULL,
  `event_end` time NULL DEFAULT NULL,
  `name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `link_class_forum` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `type` int NULL DEFAULT NULL,
  `is_delete` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of course_detail
-- ----------------------------
INSERT INTO `course_detail` VALUES (1, 'zpszZZXWi+TBZFN8k6pQ5Q5m5qQ=', 1, 1, 1, 1, '1st-intro', 1, '2022-08-22', '08:00:00', '08:00:00', 'Introduction', 'Pengenalan Materi yang akan disiapkan', 'https://us04web.zoom.us/j/73341197268?pwd=_ckJD6UB2zltBIz2k1hDkWKFc3dBuD.1', NULL, '0', '2022-08-20 13:25:49', 1, '2023-09-06 05:29:13', 1);
INSERT INTO `course_detail` VALUES (2, 'zpszZZXWi+TBZFN8k6pQ5Q5m5qQ=', 1, 1, 1, 1, '2nd-Materi-Reproduksi', 2, '2022-08-29', '08:00:00', '10:00:00', 'Reproduksi', 'Reproduksi', 'https://us04web.zoom.us/j/73341197268?pwd=_ckJD6UB2zltBIz2k1hDkWKFc3dBuD.1', NULL, '0', '2022-08-20 13:26:06', 1, '2023-09-06 05:29:23', 1);
INSERT INTO `course_detail` VALUES (3, 's2XXvH8vbxWMusszAnCty/u2jjY=', 4, 4, 3, 1, 'PH4', 4, '2023-09-06', '00:00:00', '00:00:00', 'Menganalisis keunggulan dan keterbatasan dalam permintaan dan penawaran serta teknologi, dan pengaruhnya terhadap kegiatan ekonomi, sosial, dan budaya di Indonesia dan negara-negara ASEAN', 'Lorem ipsum dolor siamet Lorem ipsum dolor siamet Lorem ipsum dolor siamet ', NULL, 1, '0', '2023-09-06 05:27:57', 1, '2023-09-06 06:05:18', NULL);
INSERT INTO `course_detail` VALUES (4, 's2XXvH8vbxWMusszAnCty/u2jjY=', 4, 3, 3, 1, 'PRAKTEK', 1, '2023-09-06', NULL, NULL, 'Menyajikan hasil analisis permintaan dan penawaran serta teknologi, dan pengaruhnya terhadap kegiatan ekonomi, sosial, budaya, di Indonesia dan negara-negara ASEAN', NULL, NULL, 2, '0', '2023-09-06 06:10:21', 1, '2023-09-06 06:10:44', NULL);

-- ----------------------------
-- Table structure for course_detail_attendance
-- ----------------------------
DROP TABLE IF EXISTS `course_detail_attendance`;
CREATE TABLE `course_detail_attendance`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `course_id` int NOT NULL,
  `course_detail_id` int NOT NULL,
  `course_class_user_id` int NOT NULL,
  `class_id` int NOT NULL,
  `teacher_id` int NOT NULL,
  `student_id` int NOT NULL,
  `log_time` time NOT NULL,
  `is_delete` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of course_detail_attendance
-- ----------------------------
INSERT INTO `course_detail_attendance` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 1, 1, 1, '13:53:18', '0', '2022-08-20 13:54:20', 1, '2022-08-20 13:54:20', 1);

-- ----------------------------
-- Table structure for course_document
-- ----------------------------
DROP TABLE IF EXISTS `course_document`;
CREATE TABLE `course_document`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `course_id` int NOT NULL,
  `course_detail_id` int NULL DEFAULT NULL,
  `name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `academic_year_id` int NOT NULL,
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  `teacher_id` int NULL DEFAULT NULL,
  `is_active` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of course_document
-- ----------------------------
INSERT INTO `course_document` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, NULL, 'Pengenalan', 'Pengenalan IPA dan RPAL', 1, '2022-08-20 13:58:00', 1, '2022-08-20 13:58:00', 1, 1, '0');
INSERT INTO `course_document` VALUES (2, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 'Modul Materi Reproduksi', 'Belajar Reproduksi', 1, '2022-08-20 13:59:50', 1, '2022-08-20 13:59:50', 1, 1, '0');

-- ----------------------------
-- Table structure for extracurricular
-- ----------------------------
DROP TABLE IF EXISTS `extracurricular`;
CREATE TABLE `extracurricular`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `pic` int NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_active` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '1',
  `created_at` datetime NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of extracurricular
-- ----------------------------
INSERT INTO `extracurricular` VALUES (1, NULL, 'Paskibra', NULL, 1, NULL, '1', '2023-09-07 22:28:47', '1', '2023-09-07 22:28:49', '1');
INSERT INTO `extracurricular` VALUES (3, NULL, 'Basket', 'Deskripsi', 1, NULL, '1', '2023-09-07 22:29:36', '1', '2023-09-07 22:43:10', '1');
INSERT INTO `extracurricular` VALUES (4, 's2XXvH8vbxWMusszAnCty/u2jjY=', 'Pencak Silat', 'Biar jadi Iko Uwais', 1, NULL, '1', '2023-09-07 16:05:57', '1', '2023-09-07 16:05:57', '1');
INSERT INTO `extracurricular` VALUES (5, 's2XXvH8vbxWMusszAnCty/u2jjY=', 'Futsal', NULL, 1, NULL, '1', '2023-09-07 22:49:17', '1', '2023-09-07 22:49:17', '1');

-- ----------------------------
-- Table structure for logs
-- ----------------------------
DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `action` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `data` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `response` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_by` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of logs
-- ----------------------------

-- ----------------------------
-- Table structure for mst_academic_year
-- ----------------------------
DROP TABLE IF EXISTS `mst_academic_year`;
CREATE TABLE `mst_academic_year`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `start_year` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `final_year` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `current_year` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `period` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_active` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of mst_academic_year
-- ----------------------------
INSERT INTO `mst_academic_year` VALUES (1, '2022', '2023', '1', 'odd', '0', '2022-08-17 18:55:08', 1, '2022-08-25 21:54:47', 1);
INSERT INTO `mst_academic_year` VALUES (2, '2022', '2023', '0', 'even', '0', '2022-08-17 18:55:21', 1, '2022-08-25 21:54:51', 1);

-- ----------------------------
-- Table structure for mst_permission
-- ----------------------------
DROP TABLE IF EXISTS `mst_permission`;
CREATE TABLE `mst_permission`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of mst_permission
-- ----------------------------
INSERT INTO `mst_permission` VALUES (1, 'manage');
INSERT INTO `mst_permission` VALUES (2, 'views');
INSERT INTO `mst_permission` VALUES (3, 'create');
INSERT INTO `mst_permission` VALUES (4, 'edit');
INSERT INTO `mst_permission` VALUES (5, 'delete');

-- ----------------------------
-- Table structure for mst_role
-- ----------------------------
DROP TABLE IF EXISTS `mst_role`;
CREATE TABLE `mst_role`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `hcode` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_active` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of mst_role
-- ----------------------------
INSERT INTO `mst_role` VALUES (1, 'admin', 'Admin', '0', '2022-08-14 18:18:19', 1, '2022-08-20 11:57:12', 1);
INSERT INTO `mst_role` VALUES (2, 'student', 'Student', '0', '2022-08-14 18:18:19', 1, '2022-08-20 11:57:16', 1);
INSERT INTO `mst_role` VALUES (3, 'teacher', 'Teacher', '0', '2022-08-14 18:23:10', 1, '2022-08-20 11:57:19', 1);
INSERT INTO `mst_role` VALUES (5, 'staff', 'Staff', '0', '2022-08-20 11:02:11', 1, '2022-08-20 11:02:11', 1);
INSERT INTO `mst_role` VALUES (6, 'superadmin', 'Super Admin', '0', '2022-08-20 11:02:11', 1, '2022-08-20 11:02:11', 1);
INSERT INTO `mst_role` VALUES (7, 'principal', 'Principal', '0', '2022-08-20 12:06:44', 1, '2022-08-20 12:06:44', 1);
INSERT INTO `mst_role` VALUES (8, 'parent', 'Parent', '0', '2022-08-25 22:57:54', 1, '2022-08-25 22:57:54', 1);

-- ----------------------------
-- Table structure for mst_school
-- ----------------------------
DROP TABLE IF EXISTS `mst_school`;
CREATE TABLE `mst_school`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_level_id` int NOT NULL,
  `token` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `provinces` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `regions` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `locations` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_active` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of mst_school
-- ----------------------------
INSERT INTO `mst_school` VALUES (3, 3, 's2XXvH8vbxWMusszAnCty/u2jjY=', 'SMP AL-AZHAR 19', 'DKI Jakarta', 'Jarta Timur', 'Jl. Jambore No.4, RT.4/RW.14, Cibubur, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13720', '0', '2023-09-04 14:50:58', 1, '2023-09-04 14:50:58', 1);

-- ----------------------------
-- Table structure for mst_school_grade
-- ----------------------------
DROP TABLE IF EXISTS `mst_school_grade`;
CREATE TABLE `mst_school_grade`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_level_id` int NOT NULL,
  `hcode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_active` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9878 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of mst_school_grade
-- ----------------------------
INSERT INTO `mst_school_grade` VALUES (1, 2, 'I', 'I', '0', '2022-08-20 15:24:24', 1, '2023-08-29 19:18:53', 1);
INSERT INTO `mst_school_grade` VALUES (2, 2, 'II', 'II', '0', '2022-08-20 15:24:24', 1, '2023-08-29 19:19:10', 1);
INSERT INTO `mst_school_grade` VALUES (3, 2, 'III', 'III', '0', '2022-08-20 15:23:39', 1, '2023-08-29 19:19:11', 1);
INSERT INTO `mst_school_grade` VALUES (4, 2, 'IV', 'IV', '0', '2022-08-20 15:23:39', 1, '2023-08-29 19:19:13', 1);
INSERT INTO `mst_school_grade` VALUES (5, 2, 'V', 'V', '0', '2022-08-20 15:22:57', 1, '2023-08-29 19:19:14', 1);
INSERT INTO `mst_school_grade` VALUES (6, 2, 'VI', 'VI', '0', '2022-08-20 15:22:57', 1, '2023-08-29 19:19:15', 1);
INSERT INTO `mst_school_grade` VALUES (7, 3, 'VII', 'VII', '0', '2022-08-17 19:23:52', 1, '2023-08-29 19:19:15', 1);
INSERT INTO `mst_school_grade` VALUES (8, 3, 'VIII', 'VIII', '0', '2022-08-17 19:24:32', 1, '2023-08-29 19:19:16', 1);
INSERT INTO `mst_school_grade` VALUES (9, 3, 'IX', 'IX', '0', '2022-08-17 19:24:32', 1, '2023-08-29 19:19:17', 1);
INSERT INTO `mst_school_grade` VALUES (10, 4, 'X', 'X', '0', '2022-08-17 19:22:34', 1, '2023-08-29 19:19:19', 1);
INSERT INTO `mst_school_grade` VALUES (11, 4, 'XI', 'XI', '0', '2022-08-17 19:22:44', 1, '2023-08-29 19:19:20', 1);
INSERT INTO `mst_school_grade` VALUES (12, 4, 'XII', 'XII', '0', '2022-08-17 19:23:52', 1, '2023-08-29 19:19:22', 1);

-- ----------------------------
-- Table structure for mst_school_level
-- ----------------------------
DROP TABLE IF EXISTS `mst_school_level`;
CREATE TABLE `mst_school_level`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_active` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of mst_school_level
-- ----------------------------
INSERT INTO `mst_school_level` VALUES (1, 'TKIT', '0', '2022-08-14 18:26:49', 0, '2022-08-14 18:26:49', 0);
INSERT INTO `mst_school_level` VALUES (2, 'SD', '0', '2022-08-14 18:26:49', 0, '2023-09-02 03:38:52', 1);
INSERT INTO `mst_school_level` VALUES (3, 'SMP', '0', '2022-08-14 18:26:49', 0, '2022-08-14 18:26:49', 0);
INSERT INTO `mst_school_level` VALUES (4, 'SMA', '0', '2022-08-14 18:26:49', 0, '2022-08-14 18:26:49', 0);
INSERT INTO `mst_school_level` VALUES (5, 'KAMPUS 1', '0', '2023-08-31 21:09:38', 1, '2023-08-31 21:26:41', 1);

-- ----------------------------
-- Table structure for mst_type
-- ----------------------------
DROP TABLE IF EXISTS `mst_type`;
CREATE TABLE `mst_type`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mst_type
-- ----------------------------
INSERT INTO `mst_type` VALUES (1, 's2XXvH8vbxWMusszAnCty/u2jjY=', 'Nilai Pengetahuan');
INSERT INTO `mst_type` VALUES (2, 's2XXvH8vbxWMusszAnCty/u2jjY=', 'Nilai Keterampilan');

-- ----------------------------
-- Table structure for parent
-- ----------------------------
DROP TABLE IF EXISTS `parent`;
CREATE TABLE `parent`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `student_id` int NOT NULL,
  `name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` enum('laki-laki','perempuan') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nationality` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'WNI',
  `address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `other_info` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `role_id` int NOT NULL,
  `is_active` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of parent
-- ----------------------------
INSERT INTO `parent` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 'Sanusi', 'laki-laki', 'WNI', 'Jl Batu nunggal 5 derajat lintang utara,\r\nProvinsi tidak diketahui', NULL, 2, '', '2022-08-20 12:51:37', 1, '2022-08-25 23:49:49', 1);

-- ----------------------------
-- Table structure for reff_api
-- ----------------------------
DROP TABLE IF EXISTS `reff_api`;
CREATE TABLE `reff_api`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `api_group` int NOT NULL,
  `hcode` int NOT NULL,
  `name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `url` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `method` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `data_sample` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of reff_api
-- ----------------------------

-- ----------------------------
-- Table structure for reff_bank_code
-- ----------------------------
DROP TABLE IF EXISTS `reff_bank_code`;
CREATE TABLE `reff_bank_code`  (
  `bank_code` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bank_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_active` tinyint NOT NULL DEFAULT 1
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of reff_bank_code
-- ----------------------------
INSERT INTO `reff_bank_code` VALUES ('000', 'ARTAJASA', 1);
INSERT INTO `reff_bank_code` VALUES ('002', 'BANK BRI', 1);
INSERT INTO `reff_bank_code` VALUES ('003', 'BANK EKSPOR INDONESIA', 1);
INSERT INTO `reff_bank_code` VALUES ('008', 'BANK MANDIRI', 1);
INSERT INTO `reff_bank_code` VALUES ('009', 'BANK BNI', 1);
INSERT INTO `reff_bank_code` VALUES ('011', 'BANK DANAMON', 1);
INSERT INTO `reff_bank_code` VALUES ('013', 'PERMATA BANK', 1);
INSERT INTO `reff_bank_code` VALUES ('014', 'BANK BCA', 1);
INSERT INTO `reff_bank_code` VALUES ('016', 'BANK BII / Maybank', 1);
INSERT INTO `reff_bank_code` VALUES ('019', 'BANK PANIN', 1);
INSERT INTO `reff_bank_code` VALUES ('020', 'BANK ARTA NIAGA KENCANA', 1);
INSERT INTO `reff_bank_code` VALUES ('022', 'BANK NIAGA (CIMB)', 1);
INSERT INTO `reff_bank_code` VALUES ('023', 'BANK BUANA IND', 1);
INSERT INTO `reff_bank_code` VALUES ('026', 'BANK LIPPO', 1);
INSERT INTO `reff_bank_code` VALUES ('028', 'BANK NISP', 1);
INSERT INTO `reff_bank_code` VALUES ('030', 'AMERICAN EXPRESS BANK LTD', 1);
INSERT INTO `reff_bank_code` VALUES ('031', 'CITIBANK N.A.', 1);
INSERT INTO `reff_bank_code` VALUES ('032', 'JP. MORGAN CHASE BANK, N.A.', 1);
INSERT INTO `reff_bank_code` VALUES ('033', 'BANK OF AMERICA, N.A.', 1);
INSERT INTO `reff_bank_code` VALUES ('034', 'ING INDONESIA BANK', 1);
INSERT INTO `reff_bank_code` VALUES ('036', 'BANK MULTICOR TBK.', 1);
INSERT INTO `reff_bank_code` VALUES ('037', 'BANK ARTHA GRAHA', 1);
INSERT INTO `reff_bank_code` VALUES ('039', 'BANK CREDIT AGRICOLE INDOSUEZ', 1);
INSERT INTO `reff_bank_code` VALUES ('040', 'THE BANGKOK BANK COMP. LTD', 1);
INSERT INTO `reff_bank_code` VALUES ('041', 'HSBC', 1);
INSERT INTO `reff_bank_code` VALUES ('042', 'THE BANK OF TOKYO MITSUBISHI UFJ LTD', 1);
INSERT INTO `reff_bank_code` VALUES ('045', 'BANK SUMITOMO MITSUI INDONESIA', 1);
INSERT INTO `reff_bank_code` VALUES ('046', 'BANK DBS INDONESIA', 1);
INSERT INTO `reff_bank_code` VALUES ('047', 'BANK RESONA PERDANIA', 1);
INSERT INTO `reff_bank_code` VALUES ('048', 'BANK MIZUHO INDONESIA', 1);
INSERT INTO `reff_bank_code` VALUES ('050', 'STANDARD CHARTERED BANK', 1);
INSERT INTO `reff_bank_code` VALUES ('052', 'BANK ABN AMRO', 1);
INSERT INTO `reff_bank_code` VALUES ('053', 'BANK KEPPEL TATLEE BUANA', 1);
INSERT INTO `reff_bank_code` VALUES ('054', 'BANK CAPITAL INDONESIA, TBK.', 1);
INSERT INTO `reff_bank_code` VALUES ('057', 'BANK BNP PARIBAS INDONESIA', 1);
INSERT INTO `reff_bank_code` VALUES ('058', 'BANK UOB INDONESIA', 1);
INSERT INTO `reff_bank_code` VALUES ('059', 'KOREA EXCHANGE BANK DANAMON', 1);
INSERT INTO `reff_bank_code` VALUES ('060', 'RABOBANK INTERNASIONAL INDONESIA', 1);
INSERT INTO `reff_bank_code` VALUES ('061', 'ANZ PANIN BANK', 1);
INSERT INTO `reff_bank_code` VALUES ('067', 'DEUTSCHE BANK AG.', 1);
INSERT INTO `reff_bank_code` VALUES ('068', 'BANK WOORI INDONESIA', 1);
INSERT INTO `reff_bank_code` VALUES ('069', 'BANK OF CHINA LIMITED', 1);
INSERT INTO `reff_bank_code` VALUES ('076', 'BANK BUMI ARTA', 1);
INSERT INTO `reff_bank_code` VALUES ('087', 'BANK EKONOMI', 1);
INSERT INTO `reff_bank_code` VALUES ('088', 'BANK ANTARDAERAH', 1);
INSERT INTO `reff_bank_code` VALUES ('089', 'BANK HAGA', 1);
INSERT INTO `reff_bank_code` VALUES ('093', 'BANK IFI', 1);
INSERT INTO `reff_bank_code` VALUES ('095', 'BANK CENTURY, TBK.', 1);
INSERT INTO `reff_bank_code` VALUES ('097', 'BANK MAYAPADA', 1);
INSERT INTO `reff_bank_code` VALUES ('110', 'BANK JABAR', 1);
INSERT INTO `reff_bank_code` VALUES ('111', 'BANK DKI', 1);
INSERT INTO `reff_bank_code` VALUES ('112', 'BPD DIY', 1);
INSERT INTO `reff_bank_code` VALUES ('113', 'BANK JATENG', 1);
INSERT INTO `reff_bank_code` VALUES ('114', 'BANK JATIM', 1);
INSERT INTO `reff_bank_code` VALUES ('115', 'BPD JAMBI', 1);
INSERT INTO `reff_bank_code` VALUES ('116', 'BPD ACEH', 1);
INSERT INTO `reff_bank_code` VALUES ('117', 'BANK SUMUT', 1);
INSERT INTO `reff_bank_code` VALUES ('118', 'BANK NAGARI', 1);
INSERT INTO `reff_bank_code` VALUES ('119', 'BANK RIAU', 1);
INSERT INTO `reff_bank_code` VALUES ('120', 'BANK SUMSEL', 1);
INSERT INTO `reff_bank_code` VALUES ('121', 'BANK LAMPUNG', 1);
INSERT INTO `reff_bank_code` VALUES ('122', 'BPD KALSEL', 1);
INSERT INTO `reff_bank_code` VALUES ('123', 'BPD KALIMANTAN BARAT', 1);
INSERT INTO `reff_bank_code` VALUES ('124', 'BPD KALTIM', 1);
INSERT INTO `reff_bank_code` VALUES ('125', 'BPD KALTENG', 1);
INSERT INTO `reff_bank_code` VALUES ('126', 'BPD SULSEL', 1);
INSERT INTO `reff_bank_code` VALUES ('127', 'BANK SULUT', 1);
INSERT INTO `reff_bank_code` VALUES ('128', 'BPD NTB', 1);
INSERT INTO `reff_bank_code` VALUES ('129', 'BPD BALI', 1);
INSERT INTO `reff_bank_code` VALUES ('130', 'BANK NTT', 1);
INSERT INTO `reff_bank_code` VALUES ('131', 'BANK MALUKU', 1);
INSERT INTO `reff_bank_code` VALUES ('132', 'BPD PAPUA', 1);
INSERT INTO `reff_bank_code` VALUES ('133', 'BANK BENGKULU', 1);
INSERT INTO `reff_bank_code` VALUES ('134', 'BPD SULAWESI TENGAH', 1);
INSERT INTO `reff_bank_code` VALUES ('135', 'BANK SULTRA', 1);
INSERT INTO `reff_bank_code` VALUES ('145', 'BANK NUSANTARA PARAHYANGAN', 1);
INSERT INTO `reff_bank_code` VALUES ('146', 'BANK SWADESI', 1);
INSERT INTO `reff_bank_code` VALUES ('147', 'BANK MUAMALAT', 1);
INSERT INTO `reff_bank_code` VALUES ('151', 'BANK MESTIKA', 1);
INSERT INTO `reff_bank_code` VALUES ('152', 'BANK METRO EXPRESS', 1);
INSERT INTO `reff_bank_code` VALUES ('153', 'BANK SINARMAS', 1);
INSERT INTO `reff_bank_code` VALUES ('157', 'BANK MASPION', 1);
INSERT INTO `reff_bank_code` VALUES ('159', 'BANK HAGAKITA', 1);
INSERT INTO `reff_bank_code` VALUES ('161', 'BANK GANESHA', 1);
INSERT INTO `reff_bank_code` VALUES ('162', 'BANK WINDU KENTJANA', 1);
INSERT INTO `reff_bank_code` VALUES ('164', 'HALIM INDONESIA BANK', 1);
INSERT INTO `reff_bank_code` VALUES ('166', 'BANK HARMONI INTERNATIONAL', 1);
INSERT INTO `reff_bank_code` VALUES ('167', 'BANK KESAWAN', 1);
INSERT INTO `reff_bank_code` VALUES ('200', 'BANK TABUNGAN NEGARA (PERSERO)', 1);
INSERT INTO `reff_bank_code` VALUES ('212', 'BANK HIMPUNAN SAUDARA 1906, TBK', 1);
INSERT INTO `reff_bank_code` VALUES ('213', 'BANK TABUNGAN PENSIUNAN NASIONAL', 1);
INSERT INTO `reff_bank_code` VALUES ('405', 'BANK SWAGUNA', 1);
INSERT INTO `reff_bank_code` VALUES ('422', 'BRI SYARIAH', 1);
INSERT INTO `reff_bank_code` VALUES ('426', 'BANK MEGA', 1);
INSERT INTO `reff_bank_code` VALUES ('427', 'BANK BNI SYARIAH', 1);
INSERT INTO `reff_bank_code` VALUES ('441', 'BANK BUKOPIN', 1);
INSERT INTO `reff_bank_code` VALUES ('451', 'BANK SYARIAH MANDIRI', 1);
INSERT INTO `reff_bank_code` VALUES ('459', 'BANK BISNIS INTERNASIONAL', 1);
INSERT INTO `reff_bank_code` VALUES ('466', 'BANK SRI PARTHA', 1);
INSERT INTO `reff_bank_code` VALUES ('472', 'BANK JASA JAKARTA', 1);
INSERT INTO `reff_bank_code` VALUES ('484', 'BANK BINTANG MANUNGGAL', 1);
INSERT INTO `reff_bank_code` VALUES ('485', 'BANK BUMIPUTERA', 1);
INSERT INTO `reff_bank_code` VALUES ('490', 'BANK YUDHA BHAKTI', 1);
INSERT INTO `reff_bank_code` VALUES ('491', 'BANK MITRANIAGA', 1);
INSERT INTO `reff_bank_code` VALUES ('494', 'BANK AGRO NIAGA', 1);
INSERT INTO `reff_bank_code` VALUES ('498', 'BANK INDOMONEX', 1);
INSERT INTO `reff_bank_code` VALUES ('501', 'BANK ROYAL INDONESIA', 1);
INSERT INTO `reff_bank_code` VALUES ('503', 'BANK ALFINDO', 1);
INSERT INTO `reff_bank_code` VALUES ('506', 'BANK SYARIAH MEGA', 1);
INSERT INTO `reff_bank_code` VALUES ('513', 'BANK INA PERDANA', 1);
INSERT INTO `reff_bank_code` VALUES ('517', 'BANK HARFA', 1);
INSERT INTO `reff_bank_code` VALUES ('520', 'PRIMA MASTER BANK', 1);
INSERT INTO `reff_bank_code` VALUES ('521', 'BANK PERSYARIKATAN INDONESIA', 1);
INSERT INTO `reff_bank_code` VALUES ('523', 'BANK DIPO INTERNATIONAL', 1);
INSERT INTO `reff_bank_code` VALUES ('525', 'BANK AKITA', 1);
INSERT INTO `reff_bank_code` VALUES ('526', 'LIMAN INTERNATIONAL BANK', 1);
INSERT INTO `reff_bank_code` VALUES ('531', 'ANGLOMAS INTERNASIONAL BANK', 1);
INSERT INTO `reff_bank_code` VALUES ('535', 'BANK KESEJAHTERAAN EKONOMI', 1);
INSERT INTO `reff_bank_code` VALUES ('536', 'BANK UIB', 1);
INSERT INTO `reff_bank_code` VALUES ('542', 'BANK ARTOS IND', 1);
INSERT INTO `reff_bank_code` VALUES ('547', 'BANK PURBA DANARTA', 1);
INSERT INTO `reff_bank_code` VALUES ('548', 'BANK MULTI ARTA SENTOSA', 1);
INSERT INTO `reff_bank_code` VALUES ('553', 'BANK MAYORA', 1);
INSERT INTO `reff_bank_code` VALUES ('555', 'BANK INDEX SELINDO', 1);
INSERT INTO `reff_bank_code` VALUES ('558', 'BANK EKSEKUTIF', 1);
INSERT INTO `reff_bank_code` VALUES ('559', 'CENTRATAMA NASIONAL BANK', 1);
INSERT INTO `reff_bank_code` VALUES ('562', 'BANK FAMA INTERNASIONAL', 1);
INSERT INTO `reff_bank_code` VALUES ('564', 'BANK SINAR HARAPAN BALI', 1);
INSERT INTO `reff_bank_code` VALUES ('566', 'BANK VICTORIA INTERNATIONAL', 1);
INSERT INTO `reff_bank_code` VALUES ('567', 'BANK HARDA', 1);
INSERT INTO `reff_bank_code` VALUES ('945', 'BANK FINCONESIA', 1);
INSERT INTO `reff_bank_code` VALUES ('946', 'BANK MERINCORP', 1);
INSERT INTO `reff_bank_code` VALUES ('947', 'BANK MAYBANK INDOCORP', 1);
INSERT INTO `reff_bank_code` VALUES ('948', 'BANK OCBC INDONESIA', 1);
INSERT INTO `reff_bank_code` VALUES ('949', 'BANK CHINA TRUST INDONESIA', 1);
INSERT INTO `reff_bank_code` VALUES ('950', 'BANK COMMONWEALTH', 1);
INSERT INTO `reff_bank_code` VALUES ('997', 'Alto', 1);
INSERT INTO `reff_bank_code` VALUES ('alf', 'ALFA CASHOUT', 1);
INSERT INTO `reff_bank_code` VALUES ('xxx', 'OTHER', 1);

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nisn` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nis` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` enum('laki-laki','perempuan') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nationality` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'WNI',
  `address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `other_info` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `role_id` int NOT NULL,
  `is_active_student` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0' COMMENT '1: 1 & 0: not active',
  `is_active` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `register_date` date NOT NULL,
  `academic_year_id` int NOT NULL,
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', '112233445', '202200001', 'Ucup bin sanusi', 'laki-laki', 'WNI', 'Jl Batu nunggal 5 derajat lintang utara,\r\nProvinsi tidak diketahui', NULL, 2, '1', '', '2022-08-20', 1, '2022-08-20 12:51:37', 1, '2022-08-20 14:44:19', 1);

-- ----------------------------
-- Table structure for student_achievement
-- ----------------------------
DROP TABLE IF EXISTS `student_achievement`;
CREATE TABLE `student_achievement`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `academic_year_id` int NULL DEFAULT NULL,
  `student_id` int NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of student_achievement
-- ----------------------------
INSERT INTO `student_achievement` VALUES (1, 's2XXvH8vbxWMusszAnCty/u2jjY=', NULL, 6, 'Olahraga', 'Lomba Renang', 'Juara 16 Lomba Renang antar sekolah seprovinsi', '2023-09-08 19:08:48', '1', NULL, NULL);
INSERT INTO `student_achievement` VALUES (2, 's2XXvH8vbxWMusszAnCty/u2jjY=', NULL, 5, 'Olahraga', 'Pencak Silat', 'Juara Harapan 3 Pencak Silat sekecamatan Cibubur Raya', '2023-09-08 19:36:43', '1', NULL, NULL);

-- ----------------------------
-- Table structure for student_extracurricular
-- ----------------------------
DROP TABLE IF EXISTS `student_extracurricular`;
CREATE TABLE `student_extracurricular`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `academic_year_id` int NULL DEFAULT NULL,
  `student_id` int NULL DEFAULT NULL,
  `extracurricular_id` int NULL DEFAULT NULL,
  `score` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of student_extracurricular
-- ----------------------------
INSERT INTO `student_extracurricular` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 5, 1, 'B', 'Kurang Rajin', NULL, NULL, NULL, NULL);
INSERT INTO `student_extracurricular` VALUES (2, 's2XXvH8vbxWMusszAnCty/u2jjY=', NULL, 5, 3, NULL, NULL, NULL, NULL, '2023-09-08 18:13:48', '1');
INSERT INTO `student_extracurricular` VALUES (4, 's2XXvH8vbxWMusszAnCty/u2jjY=', NULL, 6, 1, NULL, NULL, NULL, NULL, '2023-09-08 18:14:30', '1');
INSERT INTO `student_extracurricular` VALUES (5, 's2XXvH8vbxWMusszAnCty/u2jjY=', NULL, 6, 3, NULL, NULL, NULL, NULL, '2023-09-08 18:30:55', '1');

-- ----------------------------
-- Table structure for student_payment_billing
-- ----------------------------
DROP TABLE IF EXISTS `student_payment_billing`;
CREATE TABLE `student_payment_billing`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `school_grade_id` int NOT NULL,
  `school_level_id` int NOT NULL,
  `student_id` int NULL DEFAULT NULL,
  `student_registration_id` int NULL DEFAULT NULL,
  `payment_type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `total_amount` double NOT NULL,
  `academic_year_id` int NOT NULL,
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of student_payment_billing
-- ----------------------------
INSERT INTO `student_payment_billing` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 1, 1, 1, 'pendafaran', 3500000, 1, '2022-08-20 14:10:04', 1, '2022-08-20 14:10:04', 1);

-- ----------------------------
-- Table structure for student_payment_record
-- ----------------------------
DROP TABLE IF EXISTS `student_payment_record`;
CREATE TABLE `student_payment_record`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `payment_billing_id` int NOT NULL,
  `payment_type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `method` enum('cash','transfer') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bank_code` int NULL DEFAULT NULL,
  `bank_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `channel_code` int NULL DEFAULT NULL,
  `channel_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `amount` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `folder_path` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `image` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of student_payment_record
-- ----------------------------
INSERT INTO `student_payment_record` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 'pendafaran', 'cash', NULL, NULL, NULL, NULL, '3000000', NULL, NULL, '2022-08-20 14:11:46', 1, '2022-08-20 14:12:31', 1);
INSERT INTO `student_payment_record` VALUES (2, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 'pendaftaran', 'transfer', 14, 'BANK BCA', NULL, NULL, '500000', '/assets/transaction/', 'image.png', '2022-08-20 14:13:23', 1, '2022-08-20 14:16:28', 1);

-- ----------------------------
-- Table structure for student_registration
-- ----------------------------
DROP TABLE IF EXISTS `student_registration`;
CREATE TABLE `student_registration`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nisn` int NOT NULL,
  `registration_number` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` enum('laki-laki','perempuan') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dob` date NULL DEFAULT NULL,
  `pob` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `academic_year_id` int NOT NULL,
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of student_registration
-- ----------------------------
INSERT INTO `student_registration` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 112233445, '202200001', 'Ucup bin sanusi', 'laki-laki', 'Jl Batu nunggal 5 derajat lintang utara,\r\nProvinsi tidak diketahui', '2006-08-01', 'Bojong Gede', 1, '2022-08-20 14:22:09', 1, '2022-08-20 14:22:09', 1);

-- ----------------------------
-- Table structure for student_registration_document
-- ----------------------------
DROP TABLE IF EXISTS `student_registration_document`;
CREATE TABLE `student_registration_document`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `student_registration_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ext` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `document_type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_active` int NOT NULL DEFAULT 1,
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of student_registration_document
-- ----------------------------
INSERT INTO `student_registration_document` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', 1, 'Ijazah%20ucup%20bin%20bin%20sanusi.pdf', '/assets/document/', 'pdf', 'ijazah', 1, '2022-08-20 14:25:25', 1, '2022-08-20 14:25:25', 1);

-- ----------------------------
-- Table structure for teacher
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nik` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nip` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nationality` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'WNI',
  `address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `other_info` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `role_id` int NOT NULL,
  `is_active_student` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0' COMMENT '1: active & 0: not active',
  `is_active` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `register_date` date NOT NULL,
  `register_academic_year_id` int NOT NULL,
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES (1, 'aF5I7jy9nZmGEFY16&zhlIebtI^', '3175211111710011', '111111', 'Jamal Bahri', 'laki-laki', 'WNI', 'Bojong Gede', '[]', 3, '1', '1', '2022-08-01', 1, '2022-08-20 14:34:49', 1, '2023-09-08 05:57:32', 1);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL COMMENT 'create json data',
  `role_id` int NOT NULL,
  `is_active` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `is_need_change_password` int NULL DEFAULT 1,
  `created_at` datetime NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 's2XXvH8vbxWMusszAnCty/u2jjY=', 'Admin', 'admin', '$2y$10$1MRGzcmmOo8.LVtd0Rf5G.9LU/ji3K.Eq2PTaeSbJO7U0pH.DHV6O', 'admin@admin.com', NULL, 6, '1', 1, '2022-08-20 14:36:49', 1, '2023-09-06 06:28:38', 1);
INSERT INTO `users` VALUES (2, 'zpszZZXWi+TBZFN8k6pQ5Q5m5qQ=', 'jamal', 'jamal', '$2y$10$1MRGzcmmOo8.LVtd0Rf5G.9LU/ji3K.Eq2PTaeSbJO7U0pH.DHV6O', 'jamal@mailinator.com', NULL, 3, '1', 1, '2022-08-20 15:07:02', 1, '2023-09-02 15:49:36', 1);
INSERT INTO `users` VALUES (3, 'zpszZZXWi+TBZFN8k6pQ5Q5m5qQ=', 'Rendi Aja Kali', 'rendi', '$2y$10$w5a1O8y0kNcwrP8KZrBzfuw2J8TQ8o9F.Ao/d854MEYEgcJ1Ejk/6', 'rendi@mailinator.com', '', 3, '1', 1, '2023-09-02 00:00:00', 1, '2023-09-02 00:00:00', 1);
INSERT INTO `users` VALUES (4, 's2XXvH8vbxWMusszAnCty/u2jjY=', 'Aja Suharja, S.Pd', 'ajasuharja@mailinator.com', '$2y$10$OCY7f5t/4hiSxBguLUQyzelpYd4Hu20wNWVOGPvdCESTROYy8KFl6', 'ajasuharja@mailinator.com', '', 3, '1', 1, '2023-09-05 00:00:00', 1, '2023-09-06 05:48:35', NULL);
INSERT INTO `users` VALUES (5, 's2XXvH8vbxWMusszAnCty/u2jjY=', 'Adriano Bramantyo Yudhantoro', 'andriano@mailinator.com', '$2y$10$xoRV38rTwUDk1/Ez68OCb.YElAUqWXXLbqXFSLNq8kzCCCcEZtLni', 'andriano@mailinator.com', '', 2, '1', 1, '2023-09-05 00:00:00', 1, '2023-09-06 05:52:44', NULL);
INSERT INTO `users` VALUES (6, 's2XXvH8vbxWMusszAnCty/u2jjY=', 'Mike Wazowski', 'mikewazowski@mailinator.com', '$2y$10$1MRGzcmmOo8.LVtd0Rf5G.9LU/ji3K.Eq2PTaeSbJO7U0pH.DHV6O', 'mikewazowski@mailinator.com', NULL, 2, '1', 1, '2023-09-09 01:05:14', NULL, '2023-09-09 01:05:41', NULL);

SET FOREIGN_KEY_CHECKS = 1;
