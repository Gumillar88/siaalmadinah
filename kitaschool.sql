/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.28-MariaDB : Database - siab3145_kitaschool
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
-- CREATE DATABASE /*!32312 IF NOT EXISTS*/`siab3145_kitaschool` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

-- USE `siab3145_kitaschool`;

/*Table structure for table `apps` */

DROP TABLE IF EXISTS `apps`;

CREATE TABLE `apps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `hcode` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `icon` text NOT NULL,
  `is_delete` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & o not_delete',
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `apps` */

insert  into `apps`(`id`,`school_token`,`hcode`,`name`,`description`,`icon`,`is_delete`,`created_at`,`created_by`,`update_at`,`update_by`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^','dashboard','Dashboard','Lorem ipsum dolor siamet','fa fa-arror-left','1','2022-08-20 10:46:58',0,'2022-08-20 14:52:26',1),
(2,'aF5I7jy9nZmGEFY16&zhlIebtI^','ppdb','PPDB','Lorem ipsum dolor siamet','fa fa-arror-left','1','2022-08-20 10:47:15',1,'2022-08-20 14:52:30',1),
(3,'s2XXvH8vbxWMusszAnCty/u2jjY=','eraport','E-Raport','Lorem ipsum dolor siamet','fa fa-arror-left','','0000-00-00 00:00:00',1,'2023-09-04 21:52:34',1),
(4,'aF5I7jy9nZmGEFY16&zhlIebtI^','master','Master Data','','fa fa-dashboard','1','2023-08-29 22:16:24',0,'2023-08-29 22:17:01',0);

/*Table structure for table `apps_menu` */

DROP TABLE IF EXISTS `apps_menu`;

CREATE TABLE `apps_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `apps_id` int(11) NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `slug` text NOT NULL,
  `menu_description` text DEFAULT NULL,
  `menu_url` text DEFAULT NULL,
  `menu_order` int(11) DEFAULT NULL,
  `menu_type` enum('menu','dropdown','tab') DEFAULT NULL,
  `menu_icon` text DEFAULT NULL,
  `is_root` enum('1','0') DEFAULT '0' COMMENT '1: is_root & 0: not root',
  `is_delete` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `updated_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `apps_menu` */

insert  into `apps_menu`(`id`,`school_token`,`apps_id`,`id_parent`,`menu_name`,`slug`,`menu_description`,`menu_url`,`menu_order`,`menu_type`,`menu_icon`,`is_root`,`is_delete`,`created_by`,`created_at`,`updated_at`,`updated_by`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^',1,NULL,'Dashboard','dashboard','Master Dashboard','dashboard',0,'menu','<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>','1','0','1','2021-10-15 20:23:39','2021-11-17 07:41:42','1'),
(2,'aF5I7jy9nZmGEFY16&zhlIebtI^',4,NULL,'Master Data','master',NULL,'master',99,'dropdown','<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>','1','0','1','2023-08-29 12:45:14','2023-08-29 12:45:14','1'),
(3,'aF5I7jy9nZmGEFY16&zhlIebtI^',1,NULL,'BK','bk',NULL,'bk',1,'menu','<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>','1','0','1','2023-08-29 12:45:12','2023-08-29 12:45:12','1'),
(4,'aF5I7jy9nZmGEFY16&zhlIebtI^',2,NULL,'PPDB','ppdb',NULL,'ppdb',2,'menu','<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>','1','0','1','2023-08-29 12:45:13','2023-08-29 12:45:13','1'),
(6,'aF5I7jy9nZmGEFY16&zhlIebtI^',4,2,'List School','school',NULL,'school',1,'menu',NULL,'0','0','1','2023-08-29 12:45:14','2023-08-29 12:45:14','1'),
(7,'aF5I7jy9nZmGEFY16&zhlIebtI^',4,2,'List School Level','school',NULL,'schoollevel',2,'menu',NULL,'0','0','1','2023-08-29 12:47:45','2023-08-29 12:47:45','1'),
(8,'aF5I7jy9nZmGEFY16&zhlIebtI^',4,2,'List Class','class',NULL,'class',3,'menu',NULL,'0','0','1','2023-08-29 12:47:45','2023-08-29 12:47:45','1'),
(9,'aF5I7jy9nZmGEFY16&zhlIebtI^',4,2,'List Course','course',NULL,'course',4,'menu',NULL,'0','0','1','2023-08-29 12:47:45','2023-08-29 12:47:45','1'),
(10,'aF5I7jy9nZmGEFY16&zhlIebtI^',4,2,'List Employee','employee',NULL,'employee',5,'menu',NULL,'0','1','1','2023-08-29 12:47:46','2023-08-29 12:47:46','1'),
(11,'aF5I7jy9nZmGEFY16&zhlIebtI^',4,2,'List Teacher','teacher',NULL,'teacher',6,'menu',NULL,'0','1','1','2023-08-29 12:47:46','2023-08-29 12:47:46','1'),
(12,'aF5I7jy9nZmGEFY16&zhlIebtI^',4,2,'List Student','student',NULL,'student',7,'menu',NULL,'0','1','1','2023-08-29 12:47:47','2023-08-29 12:47:47','1'),
(13,'aF5I7jy9nZmGEFY16&zhlIebtI^',4,NULL,'Dashboard','dashboard','Master Dashboard','dashboard',0,'menu','<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>','1','','1','2021-10-15 20:23:39','2021-11-17 07:41:42','1'),
(14,'aF5I7jy9nZmGEFY16&zhlIebtI^',4,2,'List Users','user',NULL,'user',8,NULL,NULL,'0','0','1','2023-09-02 15:14:50','2023-09-02 15:14:54','1'),
(15,'s2XXvH8vbxWMusszAnCty/u2jjY=',3,NULL,'MAPEL DIAMPU','list-mapel-diampu','List MAPEL DiAMPU','list-mapel-diampu',2,'menu','<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>','1','0','1','2023-09-04 21:56:02','2023-09-04 21:56:05','1'),
(16,'s2XXvH8vbxWMusszAnCty/u2jjY=',3,NULL,'RIWAYAT MENGAJAR','list-riwayat-mengajar',NULL,'list-riwayat-mengajar',3,'menu','<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>','1','0','1','2023-09-04 21:59:16','2023-09-04 21:59:20','1'),
(17,'s2XXvH8vbxWMusszAnCty/u2jjY=',3,NULL,'Dashboard','dashboard',NULL,'dashboard',1,'menu','<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home icon-dual\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>','1','0','1','2023-09-05 22:31:53','2023-09-05 22:31:57','1');

/*Table structure for table `apps_menu_role_permission` */

DROP TABLE IF EXISTS `apps_menu_role_permission`;

CREATE TABLE `apps_menu_role_permission` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `apps_menu_role_permission` */

insert  into `apps_menu_role_permission`(`role_id`,`permission_id`,`school_token`) values 
(6,1,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(6,2,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(6,3,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(6,4,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(6,5,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(1,2,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(1,3,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(1,4,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(1,5,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(5,2,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(5,3,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(5,4,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(3,2,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(3,3,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(3,4,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(2,2,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(2,3,'aF5I7jy9nZmGEFY16&zhlIebtI^'),
(7,2,'aF5I7jy9nZmGEFY16&zhlIebtI^');

/*Table structure for table `apps_menu_user` */

DROP TABLE IF EXISTS `apps_menu_user`;

CREATE TABLE `apps_menu_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `apps_id` int(11) NOT NULL,
  `apps_menu_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `apps_menu_user` */

insert  into `apps_menu_user`(`id`,`school_token`,`role_id`,`user_id`,`apps_id`,`apps_menu_id`,`created_at`,`created_by`,`updated_at`,`update_by`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^',6,1,1,1,'2022-08-20 10:48:36',1,'2022-08-20 11:12:06',1);

/*Table structure for table `apps_school_relateds` */

DROP TABLE IF EXISTS `apps_school_relateds`;

CREATE TABLE `apps_school_relateds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) DEFAULT NULL,
  `apps_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `apps_school_relateds` */

insert  into `apps_school_relateds`(`id`,`school_token`,`apps_id`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^',3);

/*Table structure for table `apps_user` */

DROP TABLE IF EXISTS `apps_user`;

CREATE TABLE `apps_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `apps_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `apps_user` */

insert  into `apps_user`(`id`,`school_token`,`role_id`,`user_id`,`apps_id`,`created_at`,`created_by`,`updated_at`,`update_by`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^',6,1,2,'2022-08-20 10:49:16',1,'2022-08-20 11:41:56',1);

/*Table structure for table `bk_record` */

DROP TABLE IF EXISTS `bk_record`;

CREATE TABLE `bk_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `is_case_close` int(11) DEFAULT 0 COMMENT '1: problem_solve 0: progress',
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `bk_record` */

/*Table structure for table `bk_setting` */

DROP TABLE IF EXISTS `bk_setting`;

CREATE TABLE `bk_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `default_value` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `bk_setting` */

insert  into `bk_setting`(`id`,`default_value`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(2,100,'2022-08-14 15:56:37',1,'2022-08-14 15:56:37',1);

/*Table structure for table `class` */

DROP TABLE IF EXISTS `class`;

CREATE TABLE `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `hcode` varchar(100) NOT NULL,
  `school_grade_id` int(11) NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `is_delete` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & 0 not_delete',
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `class` */

insert  into `class`(`id`,`school_token`,`hcode`,`school_grade_id`,`academic_year_id`,`name`,`pic`,`is_delete`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'zpszZZXWi+TBZFN8k6pQ5Q5m5qQ=','TK-A-1',1,1,'TK A-1','','1','2022-08-14 18:19:11',0,'2023-09-01 05:46:05',0),
(2,'zpszZZXWi+TBZFN8k6pQ5Q5m5qQ=','TK-B-2',1,1,'TK B-2',NULL,'1','2023-09-01 01:36:35',1,'2023-09-01 21:27:58',1),
(4,'s2XXvH8vbxWMusszAnCty/u2jjY=','VIII-A',3,1,'VIII A',NULL,'0','2023-09-05 22:44:42',1,'2023-09-05 22:44:42',1),
(5,'s2XXvH8vbxWMusszAnCty/u2jjY=','VIII-B',3,1,'VIII B',NULL,'0','2023-09-05 23:26:16',1,'2023-09-05 23:26:16',1),
(6,'s2XXvH8vbxWMusszAnCty/u2jjY=','VIII-C',3,1,'VIII C',NULL,'0','2023-09-05 23:26:31',1,'2023-09-05 23:27:24',1),
(7,'s2XXvH8vbxWMusszAnCty/u2jjY=','VIII-D',3,1,'VIII D',NULL,'0','2023-09-05 23:27:05',1,'2023-09-05 23:27:37',1),
(8,'s2XXvH8vbxWMusszAnCty/u2jjY=','VIII-E',3,1,'VIII E',NULL,'0','2023-09-05 23:28:01',1,'2023-09-05 23:28:01',1);

/*Table structure for table `class_user` */

DROP TABLE IF EXISTS `class_user`;

CREATE TABLE `class_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `is_delete` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `class_user` */

insert  into `class_user`(`id`,`school_token`,`class_id`,`student_id`,`teacher_id`,`academic_year_id`,`is_delete`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^',1,1,1,1,'0','2022-08-20 13:11:21',1,'2022-08-20 13:11:21',1);

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `is_delete` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `course` */

insert  into `course`(`id`,`school_token`,`teacher_id`,`code`,`name`,`description`,`is_delete`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'zpszZZXWi+TBZFN8k6pQ5Q5m5qQ=',1,'U200001','Makro Centra Kubus','Ilmu Pengetahuan Alam Ghaib','0','2022-08-20 13:05:51',1,'2023-09-01 23:39:27',1),
(3,'s2XXvH8vbxWMusszAnCty/u2jjY=',4,'PH4','IPS','Ilmu Pengetahuan Sosial','0','2023-09-05 22:49:20',1,'2023-09-07 06:13:07',NULL);

/*Table structure for table `course_class` */

DROP TABLE IF EXISTS `course_class`;

CREATE TABLE `course_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `is_delete` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `course_class` */

insert  into `course_class`(`id`,`school_token`,`course_id`,`class_id`,`teacher_id`,`schedule_day`,`schedule_date`,`schedule_start`,`schdule_end`,`academic_year_id`,`school_grade_id`,`is_delete`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^',1,1,1,'Senin','2022-08-22','08:00:00','10:00:00',1,4,'0','2022-08-20 13:23:14',1,'2022-08-20 13:38:38',1),
(2,'aF5I7jy9nZmGEFY16&zhlIebtI^',1,1,1,'Selasa','2022-08-23','10:00:00','11:00:00',1,1,'0','2022-08-20 13:49:10',1,'2022-08-20 13:49:10',1),
(3,'aF5I7jy9nZmGEFY16&zhlIebtI^',1,1,1,'Rabu','2022-08-24','10:00:00','11:00:00',1,1,'0','2022-08-20 13:50:46',1,'2022-08-20 13:50:46',1);

/*Table structure for table `course_class_user` */

DROP TABLE IF EXISTS `course_class_user`;

CREATE TABLE `course_class_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `academic_year_id` int(11) DEFAULT NULL,
  `school_grade_id` int(11) DEFAULT NULL,
  `is_delete` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `course_class_user` */

insert  into `course_class_user`(`id`,`school_token`,`student_id`,`course_id`,`class_id`,`teacher_id`,`academic_year_id`,`school_grade_id`,`is_delete`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'s2XXvH8vbxWMusszAnCty/u2jjY=',5,3,4,4,1,8,NULL,'2022-08-20 13:52:54',1,'2023-09-09 07:14:25',1),
(2,'s2XXvH8vbxWMusszAnCty/u2jjY=',6,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:13',NULL),
(3,'s2XXvH8vbxWMusszAnCty/u2jjY=',7,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:13',NULL),
(4,'s2XXvH8vbxWMusszAnCty/u2jjY=',8,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:14',NULL),
(5,'s2XXvH8vbxWMusszAnCty/u2jjY=',9,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:14',NULL),
(6,'s2XXvH8vbxWMusszAnCty/u2jjY=',10,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:14',NULL),
(7,'s2XXvH8vbxWMusszAnCty/u2jjY=',11,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:14',NULL),
(8,'s2XXvH8vbxWMusszAnCty/u2jjY=',12,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:15',NULL),
(9,'s2XXvH8vbxWMusszAnCty/u2jjY=',13,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:15',NULL),
(10,'s2XXvH8vbxWMusszAnCty/u2jjY=',14,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:16',NULL),
(11,'s2XXvH8vbxWMusszAnCty/u2jjY=',15,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:15',NULL),
(12,'s2XXvH8vbxWMusszAnCty/u2jjY=',16,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:16',NULL),
(13,'s2XXvH8vbxWMusszAnCty/u2jjY=',17,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:17',NULL),
(14,'s2XXvH8vbxWMusszAnCty/u2jjY=',18,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:18',NULL),
(15,'s2XXvH8vbxWMusszAnCty/u2jjY=',19,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:18',NULL),
(16,'s2XXvH8vbxWMusszAnCty/u2jjY=',20,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:18',NULL),
(17,'s2XXvH8vbxWMusszAnCty/u2jjY=',21,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:18',NULL),
(18,'s2XXvH8vbxWMusszAnCty/u2jjY=',22,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:18',NULL),
(19,'s2XXvH8vbxWMusszAnCty/u2jjY=',23,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:19',NULL),
(20,'s2XXvH8vbxWMusszAnCty/u2jjY=',24,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:19',NULL),
(21,'s2XXvH8vbxWMusszAnCty/u2jjY=',25,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:19',NULL),
(22,'s2XXvH8vbxWMusszAnCty/u2jjY=',26,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:19',NULL),
(23,'s2XXvH8vbxWMusszAnCty/u2jjY=',27,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:21',NULL),
(24,'s2XXvH8vbxWMusszAnCty/u2jjY=',28,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:21',NULL),
(25,'s2XXvH8vbxWMusszAnCty/u2jjY=',29,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:22',NULL),
(26,'s2XXvH8vbxWMusszAnCty/u2jjY=',30,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:22',NULL),
(27,'s2XXvH8vbxWMusszAnCty/u2jjY=',31,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:22',NULL),
(28,'s2XXvH8vbxWMusszAnCty/u2jjY=',32,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:22',NULL),
(29,'s2XXvH8vbxWMusszAnCty/u2jjY=',33,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:23',NULL),
(30,'s2XXvH8vbxWMusszAnCty/u2jjY=',34,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:23',NULL),
(31,'s2XXvH8vbxWMusszAnCty/u2jjY=',35,3,4,4,1,8,'0','2022-08-20 13:52:54',1,'2023-09-09 07:15:24',NULL);

/*Table structure for table `course_detail` */

DROP TABLE IF EXISTS `course_detail`;

CREATE TABLE `course_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `hcode` varchar(255) NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_start` time DEFAULT NULL,
  `event_end` time DEFAULT NULL,
  `name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link_class_forum` text DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `is_delete` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `course_detail` */

insert  into `course_detail`(`id`,`school_token`,`class_id`,`teacher_id`,`course_id`,`academic_year_id`,`hcode`,`sort_order`,`event_date`,`event_start`,`event_end`,`name`,`description`,`link_class_forum`,`type`,`is_delete`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'zpszZZXWi+TBZFN8k6pQ5Q5m5qQ=',1,1,1,1,'1st-intro',1,'2022-08-22','08:00:00','08:00:00','Introduction','Pengenalan Materi yang akan disiapkan','https://us04web.zoom.us/j/73341197268?pwd=_ckJD6UB2zltBIz2k1hDkWKFc3dBuD.1',NULL,'0','2022-08-20 13:25:49',1,'2023-09-06 05:29:13',1),
(2,'zpszZZXWi+TBZFN8k6pQ5Q5m5qQ=',1,1,1,1,'2nd-Materi-Reproduksi',2,'2022-08-29','08:00:00','10:00:00','Reproduksi','Reproduksi','https://us04web.zoom.us/j/73341197268?pwd=_ckJD6UB2zltBIz2k1hDkWKFc3dBuD.1',NULL,'0','2022-08-20 13:26:06',1,'2023-09-06 05:29:23',1),
(3,'s2XXvH8vbxWMusszAnCty/u2jjY=',4,4,3,1,'PH4',1,'2023-09-06','00:00:00','00:00:00','Menganalisis keunggulan dan keterbatasan dalam permintaan dan penawaran serta teknologi, dan pengaruhnya terhadap kegiatan ekonomi, sosial, dan budaya di Indonesia dan negara-negara ASEAN','Lorem ipsum dolor siamet Lorem ipsum dolor siamet Lorem ipsum dolor siamet ',NULL,1,'0','2023-09-06 05:27:57',1,'2023-09-08 05:44:07',1),
(4,'s2XXvH8vbxWMusszAnCty/u2jjY=',4,3,3,1,'T4',2,'2023-09-06',NULL,NULL,'Menganalisis keunggulan dan keterbatasan dalam permintaan dan penawaran serta teknologi, dan pengaruhnya terhadap kegiatan ekonomi, sosial, dan budaya di Indonesia dan negara-negara ASEAN','Lorem ipsum dolor siamet Lorem ipsum dolor siamet Lorem ipsum dolor siamet ',NULL,1,'0','2023-09-06 06:10:21',1,'2023-09-08 05:44:07',1),
(5,'s2XXvH8vbxWMusszAnCty/u2jjY=',4,3,3,1,'PH5',3,'2023-09-08',NULL,NULL,'Menganalisis kronologi dan perubahan dari masa penjajahan sampai tumbuhnya semangat kebangsaan','Lorem ipsum dolor siamet Lorem ipsum dolor siamet Lorem ipsum dolor siamet ',NULL,1,'0','2023-09-08 05:41:34',1,'2023-09-08 05:44:07',1),
(6,'s2XXvH8vbxWMusszAnCty/u2jjY=',4,3,3,1,'T5',4,'2023-09-08',NULL,NULL,'Menganalisis kronologi dan perubahan dari masa penjajahan sampai tumbuhnya semangat kebangsaan','Lorem ipsum dolor siamet Lorem ipsum dolor siamet Lorem ipsum dolor siamet ',NULL,1,'0','2023-09-08 05:43:53',1,'2023-09-08 05:44:08',1);

/*Table structure for table `course_detail_attendance` */

DROP TABLE IF EXISTS `course_detail_attendance`;

CREATE TABLE `course_detail_attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_detail_id` int(11) NOT NULL,
  `course_class_user_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `log_time` time NOT NULL,
  `is_delete` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `course_detail_attendance` */

insert  into `course_detail_attendance`(`id`,`school_token`,`course_id`,`course_detail_id`,`course_class_user_id`,`class_id`,`teacher_id`,`student_id`,`log_time`,`is_delete`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^',1,1,1,1,1,1,'13:53:18','0','2022-08-20 13:54:20',1,'2022-08-20 13:54:20',1);

/*Table structure for table `course_document` */

DROP TABLE IF EXISTS `course_document`;

CREATE TABLE `course_document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_detail_id` int(11) DEFAULT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `is_active` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `course_document` */

insert  into `course_document`(`id`,`school_token`,`course_id`,`course_detail_id`,`name`,`description`,`academic_year_id`,`created_at`,`created_by`,`updated_at`,`updated_by`,`teacher_id`,`is_active`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^',1,NULL,'Pengenalan','Pengenalan IPA dan RPAL',1,'2022-08-20 13:58:00',1,'2022-08-20 13:58:00',1,1,'0'),
(2,'aF5I7jy9nZmGEFY16&zhlIebtI^',1,1,'Modul Materi Reproduksi','Belajar Reproduksi',1,'2022-08-20 13:59:50',1,'2022-08-20 13:59:50',1,1,'0');

/*Table structure for table `course_scores` */

DROP TABLE IF EXISTS `course_scores`;

CREATE TABLE `course_scores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `scores` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `course_scores` */

insert  into `course_scores`(`id`,`school_token`,`student_id`,`course_id`,`class_id`,`scores`) values 
(1,'s2XXvH8vbxWMusszAnCty/u2jjY=',5,3,4,90),
(2,'s2XXvH8vbxWMusszAnCty/u2jjY=',6,3,4,90),
(3,'s2XXvH8vbxWMusszAnCty/u2jjY=',7,3,4,86),
(4,'s2XXvH8vbxWMusszAnCty/u2jjY=',8,3,4,87),
(5,'s2XXvH8vbxWMusszAnCty/u2jjY=',9,3,4,86),
(6,'s2XXvH8vbxWMusszAnCty/u2jjY=',10,3,4,89),
(7,'s2XXvH8vbxWMusszAnCty/u2jjY=',11,3,4,86),
(8,'s2XXvH8vbxWMusszAnCty/u2jjY=',12,3,4,90),
(9,'s2XXvH8vbxWMusszAnCty/u2jjY=',13,3,4,90),
(10,'s2XXvH8vbxWMusszAnCty/u2jjY=',14,3,4,89),
(11,'s2XXvH8vbxWMusszAnCty/u2jjY=',15,3,4,80),
(12,'s2XXvH8vbxWMusszAnCty/u2jjY=',16,3,4,94),
(13,'s2XXvH8vbxWMusszAnCty/u2jjY=',17,3,4,88),
(14,'s2XXvH8vbxWMusszAnCty/u2jjY=',18,3,4,85),
(15,'s2XXvH8vbxWMusszAnCty/u2jjY=',19,3,4,85),
(16,'s2XXvH8vbxWMusszAnCty/u2jjY=',20,3,4,90),
(17,'s2XXvH8vbxWMusszAnCty/u2jjY=',21,3,4,83),
(18,'s2XXvH8vbxWMusszAnCty/u2jjY=',22,3,4,95),
(19,'s2XXvH8vbxWMusszAnCty/u2jjY=',23,3,4,84),
(20,'s2XXvH8vbxWMusszAnCty/u2jjY=',24,3,4,92),
(21,'s2XXvH8vbxWMusszAnCty/u2jjY=',25,3,4,94),
(22,'s2XXvH8vbxWMusszAnCty/u2jjY=',26,3,4,88),
(23,'s2XXvH8vbxWMusszAnCty/u2jjY=',27,3,4,90),
(24,'s2XXvH8vbxWMusszAnCty/u2jjY=',28,3,4,91),
(25,'s2XXvH8vbxWMusszAnCty/u2jjY=',29,3,4,93),
(26,'s2XXvH8vbxWMusszAnCty/u2jjY=',30,3,4,91),
(27,'s2XXvH8vbxWMusszAnCty/u2jjY=',31,3,4,86),
(28,'s2XXvH8vbxWMusszAnCty/u2jjY=',32,3,4,86),
(29,'s2XXvH8vbxWMusszAnCty/u2jjY=',33,3,4,90),
(30,'s2XXvH8vbxWMusszAnCty/u2jjY=',34,3,4,90),
(31,'s2XXvH8vbxWMusszAnCty/u2jjY=',35,3,4,90);

/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `school_token` varchar(255) NOT NULL,
  `action` longtext NOT NULL,
  `data` text DEFAULT NULL,
  `response` text DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `logs` */

/*Table structure for table `mst_academic_year` */

DROP TABLE IF EXISTS `mst_academic_year`;

CREATE TABLE `mst_academic_year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_year` varchar(255) NOT NULL,
  `final_year` varchar(255) NOT NULL,
  `current_year` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `is_active` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `mst_academic_year` */

insert  into `mst_academic_year`(`id`,`start_year`,`final_year`,`current_year`,`period`,`is_active`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'2022','2023','1','odd','0','2022-08-17 18:55:08',1,'2022-08-25 21:54:47',1),
(2,'2022','2023','0','even','0','2022-08-17 18:55:21',1,'2022-08-25 21:54:51',1);

/*Table structure for table `mst_permission` */

DROP TABLE IF EXISTS `mst_permission`;

CREATE TABLE `mst_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `mst_permission` */

insert  into `mst_permission`(`id`,`name`) values 
(1,'manage'),
(2,'views'),
(3,'create'),
(4,'edit'),
(5,'delete');

/*Table structure for table `mst_role` */

DROP TABLE IF EXISTS `mst_role`;

CREATE TABLE `mst_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hcode` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `is_active` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `mst_role` */

insert  into `mst_role`(`id`,`hcode`,`name`,`is_active`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'admin','Admin','0','2022-08-14 18:18:19',1,'2022-08-20 11:57:12',1),
(2,'student','Student','0','2022-08-14 18:18:19',1,'2022-08-20 11:57:16',1),
(3,'teacher','Teacher','0','2022-08-14 18:23:10',1,'2022-08-20 11:57:19',1),
(5,'staff','Staff','0','2022-08-20 11:02:11',1,'2022-08-20 11:02:11',1),
(6,'superadmin','Super Admin','0','2022-08-20 11:02:11',1,'2022-08-20 11:02:11',1),
(7,'principal','Principal','0','2022-08-20 12:06:44',1,'2022-08-20 12:06:44',1),
(8,'parent','Parent','0','2022-08-25 22:57:54',1,'2022-08-25 22:57:54',1);

/*Table structure for table `mst_school` */

DROP TABLE IF EXISTS `mst_school`;

CREATE TABLE `mst_school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_level_id` int(11) NOT NULL,
  `token` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `provinces` varchar(255) NOT NULL,
  `regions` varchar(255) NOT NULL,
  `locations` varchar(255) NOT NULL,
  `is_active` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `mst_school` */

insert  into `mst_school`(`id`,`school_level_id`,`token`,`name`,`provinces`,`regions`,`locations`,`is_active`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(2,1,'zpszZZXWi+TBZFN8k6pQ5Q5m5qQ=','TK Islam Terpadu Al-Azhar Jagakarsa','DKI Jakarta','Jarta Selatan','Jl. Raya Jagakarsa No.16, RT.9/RW.7, Jagakarsa, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12620','0','2023-08-31 19:04:16',1,'2023-08-31 19:04:16',1),
(3,3,'s2XXvH8vbxWMusszAnCty/u2jjY=','SMP AL-AZHAR 19','DKI Jakarta','Jarta Timur','Jl. Jambore No.4, RT.4/RW.14, Cibubur, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13720','0','2023-09-04 14:50:58',1,'2023-09-04 14:50:58',1);

/*Table structure for table `mst_school_grade` */

DROP TABLE IF EXISTS `mst_school_grade`;

CREATE TABLE `mst_school_grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_level_id` int(11) NOT NULL,
  `hcode` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `is_active` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9878 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `mst_school_grade` */

insert  into `mst_school_grade`(`id`,`school_level_id`,`hcode`,`name`,`is_active`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,2,'I','I','0','2022-08-20 15:24:24',1,'2023-08-29 19:18:53',1),
(2,2,'II','II','0','2022-08-20 15:24:24',1,'2023-08-29 19:19:10',1),
(3,2,'III','III','0','2022-08-20 15:23:39',1,'2023-08-29 19:19:11',1),
(4,2,'IV','IV','0','2022-08-20 15:23:39',1,'2023-08-29 19:19:13',1),
(5,2,'V','V','0','2022-08-20 15:22:57',1,'2023-08-29 19:19:14',1),
(6,2,'VI','VI','0','2022-08-20 15:22:57',1,'2023-08-29 19:19:15',1),
(7,3,'VII','VII','0','2022-08-17 19:23:52',1,'2023-08-29 19:19:15',1),
(8,3,'VIII','VIII','0','2022-08-17 19:24:32',1,'2023-08-29 19:19:16',1),
(9,3,'IX','IX','0','2022-08-17 19:24:32',1,'2023-08-29 19:19:17',1),
(10,4,'X','X','0','2022-08-17 19:22:34',1,'2023-08-29 19:19:19',1),
(11,4,'XI','XI','0','2022-08-17 19:22:44',1,'2023-08-29 19:19:20',1),
(12,4,'XII','XII','0','2022-08-17 19:23:52',1,'2023-08-29 19:19:22',1);

/*Table structure for table `mst_school_level` */

DROP TABLE IF EXISTS `mst_school_level`;

CREATE TABLE `mst_school_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `is_active` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `mst_school_level` */

insert  into `mst_school_level`(`id`,`name`,`is_active`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'TKIT','0','2022-08-14 18:26:49',0,'2022-08-14 18:26:49',0),
(2,'SD','0','2022-08-14 18:26:49',0,'2023-09-02 03:38:52',1),
(3,'SMP','0','2022-08-14 18:26:49',0,'2022-08-14 18:26:49',0),
(4,'SMA','0','2022-08-14 18:26:49',0,'2022-08-14 18:26:49',0),
(5,'KAMPUS 1','0','2023-08-31 21:09:38',1,'2023-08-31 21:26:41',1);

/*Table structure for table `mst_type` */

DROP TABLE IF EXISTS `mst_type`;

CREATE TABLE `mst_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `mst_type` */

insert  into `mst_type`(`id`,`school_token`,`name`) values 
(1,'s2XXvH8vbxWMusszAnCty/u2jjY=','Nilai Pengetahuan'),
(2,'s2XXvH8vbxWMusszAnCty/u2jjY=','Nilai Keterampilan');

/*Table structure for table `parent` */

DROP TABLE IF EXISTS `parent`;

CREATE TABLE `parent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `gender` enum('laki-laki','perempuan') NOT NULL,
  `nationality` varchar(255) NOT NULL DEFAULT 'WNI',
  `address` text NOT NULL,
  `other_info` text DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` enum('1','0') DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `parent` */

insert  into `parent`(`id`,`school_token`,`student_id`,`name`,`gender`,`nationality`,`address`,`other_info`,`role_id`,`is_active`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^',1,'Sanusi','laki-laki','WNI','Jl Batu nunggal 5 derajat lintang utara,\r\nProvinsi tidak diketahui',NULL,2,'','2022-08-20 12:51:37',1,'2022-08-25 23:49:49',1);

/*Table structure for table `reff_api` */

DROP TABLE IF EXISTS `reff_api`;

CREATE TABLE `reff_api` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `api_group` int(11) NOT NULL,
  `hcode` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `url` text NOT NULL,
  `method` varchar(255) NOT NULL,
  `data_sample` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `reff_api` */

/*Table structure for table `reff_bank_code` */

DROP TABLE IF EXISTS `reff_bank_code`;

CREATE TABLE `reff_bank_code` (
  `bank_code` varchar(10) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `reff_bank_code` */

insert  into `reff_bank_code`(`bank_code`,`bank_name`,`is_active`) values 
('000','ARTAJASA',1),
('002','BANK BRI',1),
('003','BANK EKSPOR INDONESIA',1),
('008','BANK MANDIRI',1),
('009','BANK BNI',1),
('011','BANK DANAMON',1),
('013','PERMATA BANK',1),
('014','BANK BCA',1),
('016','BANK BII / Maybank',1),
('019','BANK PANIN',1),
('020','BANK ARTA NIAGA KENCANA',1),
('022','BANK NIAGA (CIMB)',1),
('023','BANK BUANA IND',1),
('026','BANK LIPPO',1),
('028','BANK NISP',1),
('030','AMERICAN EXPRESS BANK LTD',1),
('031','CITIBANK N.A.',1),
('032','JP. MORGAN CHASE BANK, N.A.',1),
('033','BANK OF AMERICA, N.A.',1),
('034','ING INDONESIA BANK',1),
('036','BANK MULTICOR TBK.',1),
('037','BANK ARTHA GRAHA',1),
('039','BANK CREDIT AGRICOLE INDOSUEZ',1),
('040','THE BANGKOK BANK COMP. LTD',1),
('041','HSBC',1),
('042','THE BANK OF TOKYO MITSUBISHI UFJ LTD',1),
('045','BANK SUMITOMO MITSUI INDONESIA',1),
('046','BANK DBS INDONESIA',1),
('047','BANK RESONA PERDANIA',1),
('048','BANK MIZUHO INDONESIA',1),
('050','STANDARD CHARTERED BANK',1),
('052','BANK ABN AMRO',1),
('053','BANK KEPPEL TATLEE BUANA',1),
('054','BANK CAPITAL INDONESIA, TBK.',1),
('057','BANK BNP PARIBAS INDONESIA',1),
('058','BANK UOB INDONESIA',1),
('059','KOREA EXCHANGE BANK DANAMON',1),
('060','RABOBANK INTERNASIONAL INDONESIA',1),
('061','ANZ PANIN BANK',1),
('067','DEUTSCHE BANK AG.',1),
('068','BANK WOORI INDONESIA',1),
('069','BANK OF CHINA LIMITED',1),
('076','BANK BUMI ARTA',1),
('087','BANK EKONOMI',1),
('088','BANK ANTARDAERAH',1),
('089','BANK HAGA',1),
('093','BANK IFI',1),
('095','BANK CENTURY, TBK.',1),
('097','BANK MAYAPADA',1),
('110','BANK JABAR',1),
('111','BANK DKI',1),
('112','BPD DIY',1),
('113','BANK JATENG',1),
('114','BANK JATIM',1),
('115','BPD JAMBI',1),
('116','BPD ACEH',1),
('117','BANK SUMUT',1),
('118','BANK NAGARI',1),
('119','BANK RIAU',1),
('120','BANK SUMSEL',1),
('121','BANK LAMPUNG',1),
('122','BPD KALSEL',1),
('123','BPD KALIMANTAN BARAT',1),
('124','BPD KALTIM',1),
('125','BPD KALTENG',1),
('126','BPD SULSEL',1),
('127','BANK SULUT',1),
('128','BPD NTB',1),
('129','BPD BALI',1),
('130','BANK NTT',1),
('131','BANK MALUKU',1),
('132','BPD PAPUA',1),
('133','BANK BENGKULU',1),
('134','BPD SULAWESI TENGAH',1),
('135','BANK SULTRA',1),
('145','BANK NUSANTARA PARAHYANGAN',1),
('146','BANK SWADESI',1),
('147','BANK MUAMALAT',1),
('151','BANK MESTIKA',1),
('152','BANK METRO EXPRESS',1),
('153','BANK SINARMAS',1),
('157','BANK MASPION',1),
('159','BANK HAGAKITA',1),
('161','BANK GANESHA',1),
('162','BANK WINDU KENTJANA',1),
('164','HALIM INDONESIA BANK',1),
('166','BANK HARMONI INTERNATIONAL',1),
('167','BANK KESAWAN',1),
('200','BANK TABUNGAN NEGARA (PERSERO)',1),
('212','BANK HIMPUNAN SAUDARA 1906, TBK',1),
('213','BANK TABUNGAN PENSIUNAN NASIONAL',1),
('405','BANK SWAGUNA',1),
('422','BRI SYARIAH',1),
('426','BANK MEGA',1),
('427','BANK BNI SYARIAH',1),
('441','BANK BUKOPIN',1),
('451','BANK SYARIAH MANDIRI',1),
('459','BANK BISNIS INTERNASIONAL',1),
('466','BANK SRI PARTHA',1),
('472','BANK JASA JAKARTA',1),
('484','BANK BINTANG MANUNGGAL',1),
('485','BANK BUMIPUTERA',1),
('490','BANK YUDHA BHAKTI',1),
('491','BANK MITRANIAGA',1),
('494','BANK AGRO NIAGA',1),
('498','BANK INDOMONEX',1),
('501','BANK ROYAL INDONESIA',1),
('503','BANK ALFINDO',1),
('506','BANK SYARIAH MEGA',1),
('513','BANK INA PERDANA',1),
('517','BANK HARFA',1),
('520','PRIMA MASTER BANK',1),
('521','BANK PERSYARIKATAN INDONESIA',1),
('523','BANK DIPO INTERNATIONAL',1),
('525','BANK AKITA',1),
('526','LIMAN INTERNATIONAL BANK',1),
('531','ANGLOMAS INTERNASIONAL BANK',1),
('535','BANK KESEJAHTERAAN EKONOMI',1),
('536','BANK UIB',1),
('542','BANK ARTOS IND',1),
('547','BANK PURBA DANARTA',1),
('548','BANK MULTI ARTA SENTOSA',1),
('553','BANK MAYORA',1),
('555','BANK INDEX SELINDO',1),
('558','BANK EKSEKUTIF',1),
('559','CENTRATAMA NASIONAL BANK',1),
('562','BANK FAMA INTERNASIONAL',1),
('564','BANK SINAR HARAPAN BALI',1),
('566','BANK VICTORIA INTERNATIONAL',1),
('567','BANK HARDA',1),
('945','BANK FINCONESIA',1),
('946','BANK MERINCORP',1),
('947','BANK MAYBANK INDOCORP',1),
('948','BANK OCBC INDONESIA',1),
('949','BANK CHINA TRUST INDONESIA',1),
('950','BANK COMMONWEALTH',1),
('997','Alto',1),
('alf','ALFA CASHOUT',1),
('xxx','OTHER',1);

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `gender` enum('laki-laki','perempuan') NOT NULL,
  `nationality` varchar(255) NOT NULL DEFAULT 'WNI',
  `address` text NOT NULL,
  `other_info` text DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `is_active_student` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1: 1 & 0: not active',
  `is_active` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `register_date` date NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `student` */

insert  into `student`(`id`,`school_token`,`nisn`,`nis`,`name`,`gender`,`nationality`,`address`,`other_info`,`role_id`,`is_active_student`,`is_active`,`register_date`,`academic_year_id`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^','112233445','202200001','Ucup bin sanusi','laki-laki','WNI','Jl Batu nunggal 5 derajat lintang utara,\r\nProvinsi tidak diketahui',NULL,2,'1','','2022-08-20',1,'2022-08-20 12:51:37',1,'2022-08-20 14:44:19',1);

/*Table structure for table `student_payment_billing` */

DROP TABLE IF EXISTS `student_payment_billing`;

CREATE TABLE `student_payment_billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `school_grade_id` int(11) NOT NULL,
  `school_level_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `student_registration_id` int(11) DEFAULT NULL,
  `payment_type` varchar(255) NOT NULL,
  `total_amount` double NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `student_payment_billing` */

insert  into `student_payment_billing`(`id`,`school_token`,`school_grade_id`,`school_level_id`,`student_id`,`student_registration_id`,`payment_type`,`total_amount`,`academic_year_id`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^',1,1,1,1,'pendafaran',3500000,1,'2022-08-20 14:10:04',1,'2022-08-20 14:10:04',1);

/*Table structure for table `student_payment_record` */

DROP TABLE IF EXISTS `student_payment_record`;

CREATE TABLE `student_payment_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `student_payment_record` */

insert  into `student_payment_record`(`id`,`school_token`,`payment_billing_id`,`payment_type`,`method`,`bank_code`,`bank_name`,`channel_code`,`channel_name`,`amount`,`folder_path`,`image`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^',1,'pendafaran','cash',NULL,NULL,NULL,NULL,'3000000',NULL,NULL,'2022-08-20 14:11:46',1,'2022-08-20 14:12:31',1),
(2,'aF5I7jy9nZmGEFY16&zhlIebtI^',1,'pendaftaran','transfer',14,'BANK BCA',NULL,NULL,'500000','/assets/transaction/','image.png','2022-08-20 14:13:23',1,'2022-08-20 14:16:28',1);

/*Table structure for table `student_registration` */

DROP TABLE IF EXISTS `student_registration`;

CREATE TABLE `student_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `nisn` int(11) NOT NULL,
  `registration_number` varchar(20) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `gender` enum('laki-laki','perempuan') NOT NULL,
  `address` text NOT NULL,
  `dob` date DEFAULT NULL,
  `pob` varchar(255) NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `student_registration` */

insert  into `student_registration`(`id`,`school_token`,`nisn`,`registration_number`,`name`,`gender`,`address`,`dob`,`pob`,`academic_year_id`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^',112233445,'202200001','Ucup bin sanusi','laki-laki','Jl Batu nunggal 5 derajat lintang utara,\r\nProvinsi tidak diketahui','2006-08-01','Bojong Gede',1,'2022-08-20 14:22:09',1,'2022-08-20 14:22:09',1);

/*Table structure for table `student_registration_document` */

DROP TABLE IF EXISTS `student_registration_document`;

CREATE TABLE `student_registration_document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `student_registration_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `ext` varchar(255) NOT NULL,
  `document_type` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `student_registration_document` */

insert  into `student_registration_document`(`id`,`school_token`,`student_registration_id`,`name`,`path`,`ext`,`document_type`,`is_active`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^',1,'Ijazah%20ucup%20bin%20bin%20sanusi.pdf','/assets/document/','pdf','ijazah',1,'2022-08-20 14:25:25',1,'2022-08-20 14:25:25',1);

/*Table structure for table `teacher` */

DROP TABLE IF EXISTS `teacher`;

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `gender` varchar(155) NOT NULL,
  `nationality` varchar(255) NOT NULL DEFAULT 'WNI',
  `address` text NOT NULL,
  `other_info` text DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `is_active_student` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1: active & 0: not active',
  `is_active` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `register_date` date NOT NULL,
  `register_academic_year_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `teacher` */

insert  into `teacher`(`id`,`school_token`,`nik`,`nip`,`name`,`gender`,`nationality`,`address`,`other_info`,`role_id`,`is_active_student`,`is_active`,`register_date`,`register_academic_year_id`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'aF5I7jy9nZmGEFY16&zhlIebtI^','3175211111710011','111111','Jamal Bahri','laki-laki','WNI','Bojong Gede','[]',3,'1','','2022-08-01',1,'2022-08-20 14:34:49',1,'2022-08-20 14:43:46',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_token` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text DEFAULT NULL COMMENT 'create json data',
  `role_id` int(11) NOT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1: is_delete & 0: not_delete',
  `is_need_change_password` int(11) DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `users` */

insert  into `users`(`id`,`school_token`,`name`,`username`,`password`,`email`,`content`,`role_id`,`is_active`,`is_need_change_password`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'s2XXvH8vbxWMusszAnCty/u2jjY=','Admin','admin','$2y$10$1MRGzcmmOo8.LVtd0Rf5G.9LU/ji3K.Eq2PTaeSbJO7U0pH.DHV6O','admin@admin.com',NULL,6,'1',1,'2022-08-20 14:36:49',1,'2023-09-06 06:28:38',1),
(2,'zpszZZXWi+TBZFN8k6pQ5Q5m5qQ=','jamal','jamal','$2y$10$1MRGzcmmOo8.LVtd0Rf5G.9LU/ji3K.Eq2PTaeSbJO7U0pH.DHV6O','jamal@mailinator.com',NULL,3,'1',1,'2022-08-20 15:07:02',1,'2023-09-02 15:49:36',1),
(3,'zpszZZXWi+TBZFN8k6pQ5Q5m5qQ=','Rendi Aja Kali','rendi','$2y$10$w5a1O8y0kNcwrP8KZrBzfuw2J8TQ8o9F.Ao/d854MEYEgcJ1Ejk/6','rendi@mailinator.com','',3,'1',1,'2023-09-02 00:00:00',1,'2023-09-02 00:00:00',1),
(4,'s2XXvH8vbxWMusszAnCty/u2jjY=','Aja Suharja, S.Pd','ajasuharja@mailinator.com','$2y$10$OCY7f5t/4hiSxBguLUQyzelpYd4Hu20wNWVOGPvdCESTROYy8KFl6','ajasuharja@mailinator.com','',3,'1',1,'2023-09-05 00:00:00',1,'2023-09-09 06:01:58',1),
(5,'s2XXvH8vbxWMusszAnCty/u2jjY=','Adriano Bramantyo Yudhantoro','andriano@mailinator.com','$2y$10$xoRV38rTwUDk1/Ez68OCb.YElAUqWXXLbqXFSLNq8kzCCCcEZtLni','andriano@mailinator.com','',2,'1',1,'2023-09-05 00:00:00',1,'2023-09-09 06:01:58',1),
(6,'s2XXvH8vbxWMusszAnCty/u2jjY=','Aldrich Zhafran Bassarewan',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 06:01:58',1),
(7,'s2XXvH8vbxWMusszAnCty/u2jjY=','Andi Fadhil Zain',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(8,'s2XXvH8vbxWMusszAnCty/u2jjY=','Andi Muhammad Raditya Tsaqif',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(9,'s2XXvH8vbxWMusszAnCty/u2jjY=','Aniqa Syafiqa Arvianti',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(10,'s2XXvH8vbxWMusszAnCty/u2jjY=','Arkan Wistara Rakha',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(11,'s2XXvH8vbxWMusszAnCty/u2jjY=','Aryasatya Buana Prabowo',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(12,'s2XXvH8vbxWMusszAnCty/u2jjY=','Athar Adrian Hamdi',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(13,'s2XXvH8vbxWMusszAnCty/u2jjY=','Daffa Aryasatya',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(14,'s2XXvH8vbxWMusszAnCty/u2jjY=','Fakhri Reza Arrafi',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(15,'s2XXvH8vbxWMusszAnCty/u2jjY=','Fazriel Irsyad Abdurrahman',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(16,'s2XXvH8vbxWMusszAnCty/u2jjY=','Givran Khawarizmi Miftah',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(17,'s2XXvH8vbxWMusszAnCty/u2jjY=','Hafidzar Yusuf Chairuddin',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(18,'s2XXvH8vbxWMusszAnCty/u2jjY=','Ibrahim Adjie',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(19,'s2XXvH8vbxWMusszAnCty/u2jjY=','Kensaka Arasy Sarsono',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(20,'s2XXvH8vbxWMusszAnCty/u2jjY=','Keysha Rahmannisa',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(21,'s2XXvH8vbxWMusszAnCty/u2jjY=','Khalishya Jahra Dwidani',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(22,'s2XXvH8vbxWMusszAnCty/u2jjY=','Meisya Janeeta Ansori',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(23,'s2XXvH8vbxWMusszAnCty/u2jjY=','Mikail Alvaro Suanda',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(24,'s2XXvH8vbxWMusszAnCty/u2jjY=','Muhammad Alfadhlan Hidayat',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(25,'s2XXvH8vbxWMusszAnCty/u2jjY=','Muhammad Fathan Izzat',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(26,'s2XXvH8vbxWMusszAnCty/u2jjY=','Muhammad Fikri Fauzan',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(27,'s2XXvH8vbxWMusszAnCty/u2jjY=','Muhammad Hanif Bachsin',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(28,'s2XXvH8vbxWMusszAnCty/u2jjY=','Muhammad Rizky Leonardo',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(29,'s2XXvH8vbxWMusszAnCty/u2jjY=','Nadia Ayu Putri Andhini',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(30,'s2XXvH8vbxWMusszAnCty/u2jjY=','Nararya Khansa Ayundhia',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(31,'s2XXvH8vbxWMusszAnCty/u2jjY=','Naura Adryrera Putrie',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(32,'s2XXvH8vbxWMusszAnCty/u2jjY=','Nur Aisyah Indah Fitriani',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(33,'s2XXvH8vbxWMusszAnCty/u2jjY=','Ranni Putri Jesmine',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(34,'s2XXvH8vbxWMusszAnCty/u2jjY=','Reeno Raffa Abbiyu',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(35,'s2XXvH8vbxWMusszAnCty/u2jjY=','Reesya Shakira Cindy Setiawan',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(36,'s2XXvH8vbxWMusszAnCty/u2jjY=','Robby Haocun Yusar Janitra',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(37,'s2XXvH8vbxWMusszAnCty/u2jjY=','Syakara Rania Adinda',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(38,'s2XXvH8vbxWMusszAnCty/u2jjY=','Talitha Kiandra Sofian',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1),
(39,'s2XXvH8vbxWMusszAnCty/u2jjY=','Zeeshan Azmithar Safiy',NULL,'','',NULL,2,'1',1,'2023-09-09 05:23:51',1,'2023-09-09 05:23:58',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
