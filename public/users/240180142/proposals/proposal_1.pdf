-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 02:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `department_id` char(2) NOT NULL COMMENT 'رابط القسم',
  `faculty_id` int(11) NOT NULL COMMENT 'رابط عضو هيئة التدريس',
  `role` text NOT NULL COMMENT 'دور مشرف المشاريع'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='جدول الربط بين الأقسام وأعضاء هيئة التدريس';

-- --------------------------------------------------------

--
-- Table structure for table `defenses`
--

CREATE TABLE `defenses` (
  `id` int(10) NOT NULL COMMENT 'رقم المناقشة ',
  `defenseapp_id` int(15) NOT NULL,
  `date` datetime NOT NULL COMMENT 'تاريخ المناقشة',
  `document_flag` binary(2) DEFAULT NULL COMMENT 'علامة التوثيق',
  `decission` text DEFAULT NULL COMMENT 'القرار',
  `decission_maker` varchar(50) DEFAULT NULL COMMENT 'صانع القرار',
  `academic_year` year(4) NOT NULL,
  `academic_term` enum('SPRING','FALL') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='جدول المناقشات';

-- --------------------------------------------------------

--
-- Table structure for table `defense_app..`
--

CREATE TABLE `defense_app..` (
  `id` int(15) NOT NULL COMMENT 'معرف المناقشة',
  `project_id` int(11) NOT NULL,
  `superviser_id` int(15) NOT NULL COMMENT 'رابط المشرف',
  `app_date` datetime NOT NULL COMMENT 'تاريخ التقديم ',
  `traial_date` datetime DEFAULT NULL,
  `decission` enum('REFUSED','ACCEPTED') DEFAULT NULL COMMENT 'القرار',
  `decission_maker` varchar(40) DEFAULT NULL COMMENT 'صانع القرار',
  `decission_date` datetime DEFAULT NULL COMMENT 'تاريخ القرار',
  `comments` text DEFAULT NULL COMMENT 'الملاحظات',
  `expected_date` datetime DEFAULT NULL COMMENT 'التاريخ المتوقع للمناقشة'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='جدول المناقشات';

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` char(2) NOT NULL COMMENT 'رمز القسم',
  `name` varchar(50) NOT NULL COMMENT 'اسم القسم',
  `chief_id` int(11) DEFAULT NULL,
  `coordinator_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='دليل أقسام الكلية';

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL COMMENT 'رقم عضو هيئة التدريس',
  `name` varchar(50) NOT NULL COMMENT 'اسم عضو هيئة التدريس',
  `gender` enum('FEMALE','MALE') NOT NULL,
  `password` varchar(60) NOT NULL COMMENT 'الرمز السري',
  `email` varchar(50) NOT NULL COMMENT 'البريد الإلكتروني',
  `department_id` char(2) CHARACTER SET utf8mb4 NOT NULL COMMENT 'رابط القسم'
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COMMENT='جدول بيانات أعضاء هيئة التدريس';

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(15) NOT NULL COMMENT 'رقم المشروع',
  `proposal_id` int(15) NOT NULL COMMENT 'رابط المقترح',
  `status` enum('INPROGRESS','IDLE','DONE') NOT NULL DEFAULT 'INPROGRESS' COMMENT 'حالة المشروع',
  `supervisor_id` int(11) NOT NULL COMMENT 'رابط المشرف',
  `start_date` datetime NOT NULL COMMENT 'تاريخ بدء المشروع',
  `end_date` datetime DEFAULT NULL COMMENT 'تاريخ انتهاء المشروع'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='جدول بيانات المشروع';

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` int(11) NOT NULL COMMENT 'رقم المقترح',
  `title` varchar(100) NOT NULL COMMENT 'عنوان المقترح',
  `sub_title` varchar(100) DEFAULT NULL COMMENT 'عنوان تفصيلي أو إضافي',
  `last_proposal_id` int(11) DEFAULT NULL COMMENT 'رابط آخر مقترح مقدم',
  `applicant_id` varchar(10) NOT NULL COMMENT 'رابط الطالب الذي قدم المقترح',
  `app_datetime` datetime NOT NULL COMMENT 'تاريخ التقديم',
  `supervisor_id` int(11) DEFAULT NULL COMMENT 'رابط الأستاذ المشرف',
  `decision` enum('PENDING','REFUSED','ACCEPTED') NOT NULL DEFAULT 'PENDING' COMMENT 'القرار',
  `decision_date` date DEFAULT NULL COMMENT 'تاريخ القرار',
  `enabled` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'هل فعال أم معطل',
  `proposal_flag` binary(2) NOT NULL COMMENT 'علامة التحميل'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='جدول المقترحات ';

-- --------------------------------------------------------

--
-- Table structure for table `proposal_reviews`
--

CREATE TABLE `proposal_reviews` (
  `id` int(11) NOT NULL COMMENT 'رقم تسلسلي',
  `proposal_id` int(11) NOT NULL COMMENT 'رقم المقترح',
  `faculty_id` int(11) NOT NULL COMMENT 'رقم عضو هيئة التدريس',
  `assignment_date` datetime NOT NULL COMMENT 'تاريخ التكليف',
  `opinion` enum('GOOD','FAIR','BAD') DEFAULT NULL COMMENT 'التقييم',
  `opinion_date` datetime DEFAULT NULL COMMENT 'تاريخ إعطاء الرأي',
  `comments` text DEFAULT NULL COMMENT 'التعليقات'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT=' دليل تقييم المقترحات';

-- --------------------------------------------------------

--
-- Table structure for table `proposal_students`
--

CREATE TABLE `proposal_students` (
  `id` int(11) NOT NULL,
  `propsal_id` int(11) NOT NULL COMMENT 'رابط المقترح',
  `student_id` varchar(10) NOT NULL COMMENT 'رابط الطلبة',
  `enrollment_date` datetime NOT NULL COMMENT 'تاريخ الالتحاق',
  `withdrawal_date` datetime DEFAULT NULL COMMENT 'تاريخ الانسحاب'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='جدول الربط بين الطلبة والمقترحات';

-- --------------------------------------------------------

--
-- Table structure for table `pro_students`
--

CREATE TABLE `pro_students` (
  `id` int(11) NOT NULL COMMENT 'رقم تسلسلي',
  `no` varchar(10) NOT NULL COMMENT 'رقم قيد الطالب',
  `name` varchar(40) NOT NULL COMMENT 'اسم الطالب',
  `department_id` char(2) NOT NULL COMMENT 'رابط القسم',
  `email` varchar(50) NOT NULL COMMENT 'البريد الإلكتروني',
  `gender` enum('MALE','FEMALE') NOT NULL COMMENT 'الجنس',
  `app_date` datetime NOT NULL COMMENT 'تاريخ التقديم كطالب مشروع',
  `pin` int(11) NOT NULL COMMENT 'الرقم الخاص',
  `credits` tinyint(3) UNSIGNED NOT NULL COMMENT 'عدد الوحدات المجتازة',
  `gpa` float NOT NULL COMMENT 'المعدل التراكمي',
  `status` enum('PENDING','ACCEPTED','REFUSED') NOT NULL DEFAULT 'PENDING',
  `comments` text DEFAULT NULL,
  `academic_year` int(11) NOT NULL,
  `academic_term` enum('SPRING','FALL') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='جدول بيانات تقديم طلاب المشاريع';

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(15) NOT NULL COMMENT 'رقم التقرير',
  `app_date` datetime NOT NULL COMMENT 'تاريخ تقديم التقرير',
  `student_id` varchar(10) NOT NULL COMMENT 'رابط الطلبة',
  `project_id` int(15) NOT NULL COMMENT 'رابط المشاريع',
  `superviser-id` int(15) NOT NULL COMMENT 'رابط المشرفين',
  `comments` text DEFAULT NULL COMMENT 'التعليقات',
  `contents` text DEFAULT NULL COMMENT 'محتويات ',
  `acceptance_status` enum('accepted','pending','rejected') NOT NULL DEFAULT 'pending' COMMENT 'حالة التقرير',
  `upload_flag` binary(2) DEFAULT NULL COMMENT 'علامة التحميل'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='جدول التقارير الدورية';

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(10) NOT NULL COMMENT 'رقم قيد الطالب',
  `name` varchar(40) NOT NULL COMMENT 'اسم الطالب',
  `department_id` char(2) NOT NULL COMMENT 'رابط القسم',
  `email` varchar(50) NOT NULL COMMENT 'البريد الإلكتروني',
  `gender` enum('MALE','FEMALE') NOT NULL COMMENT 'الجنس',
  `reg_date` datetime NOT NULL COMMENT 'تاريخ القبول كطالب مشروع',
  `password` char(64) NOT NULL COMMENT 'كلمة المرور باستخدام SHA256',
  `credits` tinyint(3) UNSIGNED NOT NULL COMMENT 'عدد الوحدات المجتازة',
  `gpa` float NOT NULL COMMENT 'المعدل التراكمي',
  `approver_id` int(11) NOT NULL COMMENT 'رابط الموظف المسؤول عن اتمام التسجيل',
  `academic_year` year(4) NOT NULL,
  `academic_term` enum('SPRING','FALL') NOT NULL,
  `status` enum('REGULAR','GRADUATED','SUSPENDED') NOT NULL DEFAULT 'REGULAR'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='جدول بيانات طلاب المشاريع';

-- --------------------------------------------------------

--
-- Table structure for table `trial_examiners`
--

CREATE TABLE `trial_examiners` (
  `examiner_id` int(15) NOT NULL COMMENT 'رقم الممتحن',
  `defenseapp_id` int(15) NOT NULL COMMENT 'رقم التقييم المبدئي',
  `asseigment_date` datetime NOT NULL COMMENT 'تاريخ التعيين',
  `opinion` text DEFAULT NULL COMMENT 'الرأي',
  `comments` text DEFAULT NULL COMMENT 'التعليقات '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='دليل الممتحنين';

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `passward` int(10) NOT NULL COMMENT 'الرقم السري',
  `user_name` char(20) NOT NULL COMMENT 'اسم المستخدم\r\nاسم المستخدم'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`department_id`,`faculty_id`),
  ADD KEY `department_id` (`department_id`) USING BTREE,
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `defenses`
--
ALTER TABLE `defenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `defenseapp_id` (`defenseapp_id`);

--
-- Indexes for table `defense_app..`
--
ALTER TABLE `defense_app..`
  ADD PRIMARY KEY (`id`),
  ADD KEY `defense_app.._ibfk_1` (`superviser_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chief_id` (`chief_id`),
  ADD KEY `coordinator_id` (`coordinator_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proposal_id` (`proposal_id`) USING BTREE,
  ADD KEY `supervisor_id` (`supervisor_id`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supervisor_id` (`supervisor_id`),
  ADD KEY `last_proposal_id` (`last_proposal_id`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- Indexes for table `proposal_reviews`
--
ALTER TABLE `proposal_reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proposal_id` (`proposal_id`,`faculty_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `proposal_students`
--
ALTER TABLE `proposal_students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `propsal_id` (`propsal_id`,`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `pro_students`
--
ALTER TABLE `pro_students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no` (`no`,`academic_year`,`academic_term`) USING BTREE,
  ADD KEY `pro_students_ibfk_2` (`department_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `superviser-id` (`superviser-id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `trial_examiners`
--
ALTER TABLE `trial_examiners`
  ADD PRIMARY KEY (`examiner_id`),
  ADD KEY `defenseapp_id` (`defenseapp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'رقم عضو هيئة التدريس';

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT COMMENT 'رقم المشروع';

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'رقم المقترح';

--
-- AUTO_INCREMENT for table `proposal_reviews`
--
ALTER TABLE `proposal_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'رقم تسلسلي';

--
-- AUTO_INCREMENT for table `proposal_students`
--
ALTER TABLE `proposal_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pro_students`
--
ALTER TABLE `pro_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'رقم تسلسلي';

--
-- AUTO_INCREMENT for table `trial_examiners`
--
ALTER TABLE `trial_examiners`
  MODIFY `examiner_id` int(15) NOT NULL AUTO_INCREMENT COMMENT 'رقم الممتحن';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `admins_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`);

--
-- Constraints for table `defenses`
--
ALTER TABLE `defenses`
  ADD CONSTRAINT `defenses_ibfk_1` FOREIGN KEY (`defenseapp_id`) REFERENCES `defense_app..` (`id`);

--
-- Constraints for table `defense_app..`
--
ALTER TABLE `defense_app..`
  ADD CONSTRAINT `defense_app.._ibfk_1` FOREIGN KEY (`superviser_id`) REFERENCES `faculties` (`id`),
  ADD CONSTRAINT `defense_app.._ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`chief_id`) REFERENCES `faculties` (`id`),
  ADD CONSTRAINT `departments_ibfk_2` FOREIGN KEY (`coordinator_id`) REFERENCES `faculties` (`id`);

--
-- Constraints for table `faculties`
--
ALTER TABLE `faculties`
  ADD CONSTRAINT `faculties_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`),
  ADD CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`supervisor_id`) REFERENCES `faculties` (`id`);

--
-- Constraints for table `proposals`
--
ALTER TABLE `proposals`
  ADD CONSTRAINT `proposals_ibfk_1` FOREIGN KEY (`supervisor_id`) REFERENCES `faculties` (`id`),
  ADD CONSTRAINT `proposals_ibfk_2` FOREIGN KEY (`last_proposal_id`) REFERENCES `proposals` (`id`),
  ADD CONSTRAINT `proposals_ibfk_3` FOREIGN KEY (`applicant_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `proposal_reviews`
--
ALTER TABLE `proposal_reviews`
  ADD CONSTRAINT `proposal_reviews_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`),
  ADD CONSTRAINT `proposal_reviews_ibfk_2` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`);

--
-- Constraints for table `proposal_students`
--
ALTER TABLE `proposal_students`
  ADD CONSTRAINT `proposal_students_ibfk_1` FOREIGN KEY (`propsal_id`) REFERENCES `proposals` (`id`),
  ADD CONSTRAINT `proposal_students_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `pro_students`
--
ALTER TABLE `pro_students`
  ADD CONSTRAINT `pro_students_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `reports_ibfk_3` FOREIGN KEY (`superviser-id`) REFERENCES `faculties` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `faculties` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `trial_examiners`
--
ALTER TABLE `trial_examiners`
  ADD CONSTRAINT `trial_examiners_ibfk_2` FOREIGN KEY (`defenseapp_id`) REFERENCES `defense_app..` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
