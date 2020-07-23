-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2018 at 01:52 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studenttrans`
--

-- --------------------------------------------------------

--
-- Table structure for table `ay`
--

DROP TABLE IF EXISTS `ay`;
CREATE TABLE IF NOT EXISTS `ay` (
  `AY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ACADYR` varchar(40) NOT NULL,
  PRIMARY KEY (`AY_ID`),
  UNIQUE KEY `acadyr` (`ACADYR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `CLASS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CLASS_CODE` varchar(30) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `INST_ID` int(11) NOT NULL,
  `SYID` int(11) NOT NULL,
  `AY` varchar(11) NOT NULL,
  `DAY` varchar(20) NOT NULL,
  `C_TIME` varchar(11) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `ROOM` varchar(30) NOT NULL DEFAULT 'NONE',
  `SECTION` varchar(30) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`CLASS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`CLASS_ID`, `CLASS_CODE`, `SUBJ_ID`, `INST_ID`, `SYID`, `AY`, `DAY`, `C_TIME`, `IDNO`, `ROOM`, `SECTION`) VALUES
(1, 'COM 111', 1, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM001', 'B'),
(2, 'COM 112', 2, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(3, 'COM 113', 3, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(4, 'COM 114', 4, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(5, 'COM 115', 5, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(6, 'GNS 101', 6, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(7, 'GNS 111', 7, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(8, 'MTH 111', 8, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(9, 'MTH 112', 9, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(10, 'STA 112', 10, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(11, 'STA 117', 11, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(12, 'COM 121', 12, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(13, 'COM 122', 13, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(14, 'COM 123', 14, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(15, 'COM 124', 15, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(16, 'COM 125', 16, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(17, 'COM 127', 17, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(18, 'COM 128', 18, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(19, 'EED 126', 19, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(20, 'GNS 102', 20, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(21, 'GNS 121', 21, 5, 3, '2016-2017', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(22, 'COM 215', 22, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(23, 'GNS 201', 23, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(24, 'EDP 211', 24, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(25, 'COM 217', 25, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(26, 'COM 216', 26, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(27, 'COM 214', 27, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(28, 'COM 213', 28, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(29, 'COM 212', 29, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(30, 'COM 211', 30, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(31, 'COM 221', 31, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(32, 'COM 222', 32, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(33, 'COM 223', 33, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(34, 'COM 225', 34, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(35, 'COM 226', 35, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(36, 'COM 229', 36, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(37, 'GNS 202', 37, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE'),
(38, 'MTH 209', 38, 5, 4, '2017-2018', 'NONE', 'NONE', 0, 'RM 001', 'NONE');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `COURSE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COURSE_NAME` varchar(30) NOT NULL,
  `COURSE_LEVEL` int(11) NOT NULL DEFAULT '1',
  `COURSE_MAJOR` varchar(30) NOT NULL DEFAULT 'None',
  `COURSE_DESC` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  PRIMARY KEY (`COURSE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`COURSE_ID`, `COURSE_NAME`, `COURSE_LEVEL`, `COURSE_MAJOR`, `COURSE_DESC`, `DEPT_ID`) VALUES
(47, 'Grade 7', 7, '', 'Grade 7', 1),
(48, 'Grade 8', 8, '', 'Grade 8 ', 1),
(49, 'Grade 9', 9, '', 'Grade 9', 1),
(50, 'Grade 10', 10, '', 'Grade 10', 1),
(53, 'Grade 11', 11, '', 'Grade 11 ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `DEPARTMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DEPARTMENT_NAME` varchar(50) NOT NULL,
  `DEPARTMENT_DESC` varchar(50) NOT NULL,
  `STATUS` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active',
  `SCHOOL_ID` int(5) NOT NULL,
  PRIMARY KEY (`DEPARTMENT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DEPARTMENT_ID`, `DEPARTMENT_NAME`, `DEPARTMENT_DESC`, `STATUS`, `SCHOOL_ID`) VALUES
(1, 'Food Technology', 'Food Technology', 1, 8),
(2, 'Computer Science ', 'Computer Science', 1, 8),
(3, 'Fine & Applied Arts Education', 'Fine & Applied Arts Education', 1, 4),
(4, 'Educational Foundation', 'Educational Foundation', 1, 4),
(5, 'Science Education', 'Science Education', 1, 4),
(6, 'Vocational Education', 'Vocational Education', 1, 4),
(7, 'Fine Art', 'Fine Art', 1, 1),
(8, 'Industrial Design', 'Industrial Design', 1, 1),
(9, 'Printing Technology', 'Printing Technology', 1, 1),
(10, 'Graphics Design', 'Graphics Design', 1, 1),
(11, 'Biology Education', 'Biology Education', 1, 4),
(12, 'Chemistry Education', 'Chemistry Education', 1, 4),
(13, 'Integrated Science Education', 'Integrated Science Education', 1, 4),
(14, 'Business Education', 'Business Education', 1, 4),
(15, 'Industrial Education', 'Industrial Education', 1, 4),
(16, 'Fine Art Education', 'Fine Art Education', 1, 4),
(17, 'Computer Education', 'Computer Education', 1, 4),
(18, 'Home Economics Education', 'Home Economics Education', 1, 4),
(19, 'Physics Education', 'Physics Education', 1, 4),
(20, 'Mathematics Education', 'Mathematics Education', 1, 4),
(21, 'Estate Management', 'Estate Management', 1, 2),
(22, 'Architectural Technology', 'Architectural Technology', 1, 2),
(23, 'Survey & Geo-informatics', 'Survey & Geo-informatics', 1, 2),
(24, 'Urban & Regional Planning', 'Urban & Regional Planning', 1, 2),
(25, 'Building Technology', 'Building Technology', 1, 2),
(26, 'Quantity Survey', 'Quantity Survey', 1, 2),
(27, 'Accountancy', 'Accountancy', 1, 3),
(28, 'Public Administration', 'Public Administration', 1, 3),
(29, 'Marketing', 'Marketing', 1, 3),
(30, 'Banking & Finance', 'Banking & Finance', 1, 3),
(31, 'Office & Technology Management', 'Office & Technology Management', 1, 3),
(32, 'Mass Communication', 'Mass Communication', 1, 5),
(33, 'Social Science', 'Social Science', 1, 5),
(34, 'Languages', 'Languages', 1, 5),
(35, 'Biological Science', 'Biological Science', 1, 6),
(36, 'Physical Science', 'Physical Science', 1, 6),
(37, 'Chemical Science', 'Chemical Science', 1, 6),
(38, 'Mathematics', 'Mathematics', 1, 6),
(39, 'Statistics', 'Statistics', 1, 6),
(40, 'Science Laboratory Technology', 'Science Laboratory Technology', 1, 6),
(41, 'Mineral and Petroleum Engineering', 'Mineral and Petroleum Engineering', 1, 7),
(42, 'Mechanical Engineering', 'Mechanical Engineering', 1, 7),
(43, 'Electrical/Electronics Engineering', 'Electrical/Electronics Engineering', 1, 7),
(44, 'Marine Engineering', 'Marine Engineering', 1, 7),
(45, 'Chemical Engineering', 'Chemical Engineering', 1, 7),
(46, 'Computer Engineering', 'Computer Engineering', 1, 7),
(47, 'Civil Engineering', 'Civil Engineering', 1, 7),
(48, 'Metallurgical Engineering', 'Metallurgical Engineering', 1, 7),
(49, 'Industrial & Maintenance Engineering', 'Industrial & Maintenance Engineering', 1, 7),
(50, 'Agricultural & Bio-Environmental Engineering', 'Agricultural & Bio-Environmental Engineering', 1, 7),
(51, 'Mechatronics', 'Mechatronics', 1, 7),
(52, 'Welding and Fabrication Engineering', 'Welding and Fabrication Engineering', 1, 7),
(53, 'agricultural Technology', 'agricultural Technology', 1, 8),
(54, 'Hospitality Management Technology', 'Hospitality Management Technology', 1, 8),
(55, 'Liesure & Tourism Technology', 'Liesure & Tourism Technology', 1, 8),
(56, 'Polymer & Textile Technology', 'Polymer & Textile Technology', 1, 8),
(57, 'Business Administration', 'Business Administration', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE IF NOT EXISTS `grades` (
  `GRADE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `SYID` int(30) NOT NULL,
  `CONTINOUS_ASSESSMENT` float NOT NULL DEFAULT '0',
  `EXAMINATION` float NOT NULL DEFAULT '0',
  `TOTAL` float NOT NULL DEFAULT '0',
  `GRADE_LETTER` varchar(3) NOT NULL DEFAULT '-',
  `EQUIVALENT` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`GRADE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`GRADE_ID`, `IDNO`, `SUBJ_ID`, `SYID`, `CONTINOUS_ASSESSMENT`, `EXAMINATION`, `TOTAL`, `GRADE_LETTER`, `EQUIVALENT`) VALUES
(1, 3210062, 1, 1, 35, 50, 85, 'A1', 12),
(2, 3210062, 2, 1, 20, 45, 65, 'B1', 9.75),
(3, 3210062, 3, 1, 35, 56, 91, 'A1', 12),
(4, 3210062, 4, 1, 30, 40, 70, 'A2', 7),
(5, 3210062, 5, 1, 36, 40, 76, 'A1', 12),
(6, 3210062, 6, 1, 30, 47, 77, 'A1', 8),
(7, 3210062, 7, 1, 25, 40, 65, 'B1', 6.5),
(8, 3210062, 8, 1, 35, 56, 91, 'A1', 8),
(9, 3210062, 9, 1, 35, 50, 85, 'A1', 8),
(10, 3210062, 10, 1, 20, 55, 75, 'A1', 8),
(11, 3210062, 11, 1, 20, 45, 65, 'B1', 6.5),
(12, 3210062, 12, 2, 30, 45, 75, 'A1', 12),
(13, 3210062, 13, 2, 30, 40, 70, 'A2', 10.5),
(14, 3210062, 14, 2, 36, 55, 91, 'A1', 12),
(15, 3210062, 15, 2, 15, 40, 55, 'C1', 8.25),
(16, 3210062, 16, 2, 25, 35, 60, 'B2', 9),
(17, 3210062, 17, 2, 30, 50, 80, 'A1', 12),
(18, 3210062, 18, 2, 25, 40, 65, 'B1', 6.5),
(19, 3210062, 19, 2, 40, 40, 80, 'A1', 8),
(20, 3210062, 20, 2, 30, 35, 65, 'B1', 6.5),
(21, 3210062, 21, 2, 25, 40, 65, 'B1', 6.5),
(22, 3210062, 22, 3, 30, 49, 79, 'A1', 12),
(23, 3210062, 23, 3, 30, 30, 60, 'B2', 6),
(24, 3210062, 24, 3, 40, 40, 80, 'A1', 8),
(25, 3210062, 25, 3, 30, 40, 70, 'A2', 10.5),
(26, 3210062, 26, 3, 20, 50, 70, 'A2', 10.5),
(27, 3210062, 27, 3, 25, 35, 60, 'B2', 9),
(28, 3210062, 28, 3, 30, 51, 81, 'A1', 12),
(29, 3210062, 29, 3, 35, 45, 80, 'A1', 12),
(30, 3210062, 30, 3, 25, 30, 55, 'C1', 8.25),
(31, 3210062, 31, 4, 20, 30, 50, 'C2', 7.5),
(32, 3210062, 32, 4, 23, 39, 62, 'B2', 6),
(33, 3210062, 33, 4, 35, 45, 80, 'A1', 12),
(34, 3210062, 34, 4, 30, 49, 79, 'A1', 12),
(35, 3210062, 35, 4, 29, 41, 70, 'A2', 10.5),
(36, 3210062, 36, 4, 39, 40, 79, 'A1', 16),
(37, 3210062, 37, 4, 30, 35, 65, 'B1', 6.5),
(38, 3210062, 38, 4, 30, 55, 85, 'A1', 8),
(39, 3210057, 4, 5, 30, 30, 60, 'B2', 6),
(40, 3210057, 6, 5, 30, 35, 65, 'B1', 6.5),
(41, 3210057, 7, 5, 25, 45, 70, 'A2', 7),
(42, 3210057, 8, 5, 36, 44, 80, 'A1', 8),
(43, 3210057, 9, 5, 30, 39, 69, 'B1', 6.5),
(44, 3210057, 10, 5, 40, 59, 99, 'A1', 8),
(45, 3210057, 11, 5, 35, 40, 75, 'A1', 8),
(46, 3210057, 1, 5, 36, 55, 91, 'A1', 12),
(47, 3210057, 2, 5, 30, 40, 70, 'A2', 10.5),
(48, 3210057, 3, 5, 35, 50, 85, 'A1', 12),
(49, 3210057, 5, 5, 35, 58, 93, 'A1', 12),
(50, 3210057, 18, 6, 30, 30, 60, 'B2', 6),
(51, 3210057, 19, 6, 40, 40, 80, 'A1', 8),
(52, 3210057, 20, 6, 28, 32, 60, 'B2', 6),
(53, 3210057, 21, 6, 30, 35, 65, 'B1', 6.5),
(54, 3210057, 12, 6, 40, 40, 80, 'A1', 12),
(55, 3210057, 13, 6, 25, 35, 60, 'B2', 9),
(56, 3210057, 14, 6, 36, 56, 92, 'A1', 12),
(57, 3210057, 15, 6, 20, 35, 55, 'C1', 8.25),
(58, 3210057, 16, 6, 25, 37, 62, 'B2', 9),
(59, 3210057, 17, 6, 30, 50, 80, 'A1', 12),
(60, 3210057, 23, 7, 30, 40, 70, 'A2', 7),
(61, 3210057, 24, 7, 15, 35, 50, 'C2', 5),
(62, 3210057, 22, 7, 40, 60, 100, 'A1', 12),
(63, 3210057, 25, 7, 30, 25, 55, 'C1', 8.25),
(64, 3210057, 26, 7, 20, 40, 60, 'B2', 9),
(65, 3210057, 27, 7, 28, 32, 60, 'B2', 9),
(66, 3210057, 28, 7, 35, 48, 83, 'A1', 12),
(67, 3210057, 29, 7, 38, 38, 76, 'A1', 12),
(68, 3210057, 30, 7, 20, 30, 50, 'C2', 7.5),
(69, 3210057, 32, 8, 29, 41, 70, 'A2', 7),
(70, 3210057, 37, 8, 30, 38, 68, 'B1', 6.5),
(71, 3210057, 38, 8, 35, 55, 90, 'A1', 8),
(72, 3210057, 31, 8, 35, 38, 73, 'A2', 10.5),
(73, 3210057, 33, 8, 30, 46, 76, 'A1', 12),
(74, 3210057, 34, 8, 30, 39, 69, 'B1', 9.75),
(75, 3210057, 35, 8, 34, 46, 80, 'A1', 12),
(76, 3210057, 36, 8, 39, 50, 89, 'A1', 16),
(77, 3210085, 4, 9, 20, 45, 65, 'B1', 6.5),
(78, 3210085, 6, 9, 30, 38, 68, 'B1', 6.5),
(79, 3210085, 7, 9, 25, 50, 75, 'A1', 8),
(80, 3210085, 8, 9, 35, 55, 90, 'A1', 8),
(81, 3210085, 9, 9, 32, 50, 82, 'A1', 8),
(82, 3210085, 10, 9, 40, 50, 90, 'A1', 8),
(83, 3210085, 11, 9, 10, 57, 67, 'B1', 6.5),
(84, 3210085, 1, 9, 32, 48, 80, 'A1', 12),
(85, 3210085, 2, 9, 38, 30, 68, 'B1', 9.75),
(86, 3210085, 3, 9, 28, 56, 84, 'A1', 12),
(87, 3210085, 5, 9, 34, 54, 88, 'A1', 12),
(88, 3210085, 18, 10, 0, 0, 0, '-', 0),
(89, 3210085, 19, 10, 0, 0, 0, '-', 0),
(90, 3210085, 20, 10, 0, 0, 0, '-', 0),
(91, 3210085, 21, 10, 0, 0, 0, '-', 0),
(92, 3210085, 12, 10, 0, 0, 0, '-', 0),
(93, 3210085, 13, 10, 0, 0, 0, '-', 0),
(94, 3210085, 14, 10, 0, 0, 0, '-', 0),
(95, 3210085, 15, 10, 0, 0, 0, '-', 0),
(96, 3210085, 16, 10, 0, 0, 0, '-', 0),
(97, 3210085, 17, 10, 0, 0, 0, '-', 0),
(98, 3210085, 23, 11, 0, 0, 0, '-', 0),
(99, 3210085, 24, 11, 0, 0, 0, '-', 0),
(100, 3210085, 22, 11, 0, 0, 0, '-', 0),
(101, 3210085, 25, 11, 0, 0, 0, '-', 0),
(102, 3210085, 26, 11, 0, 0, 0, '-', 0),
(103, 3210085, 27, 11, 0, 0, 0, '-', 0),
(104, 3210085, 28, 11, 0, 0, 0, '-', 0),
(105, 3210085, 29, 11, 0, 0, 0, '-', 0),
(106, 3210085, 30, 11, 0, 0, 0, '-', 0),
(107, 3210085, 32, 12, 0, 0, 0, '-', 0),
(108, 3210085, 37, 12, 0, 0, 0, '-', 0),
(109, 3210085, 38, 12, 0, 0, 0, '-', 0),
(110, 3210085, 31, 12, 0, 0, 0, '-', 0),
(111, 3210085, 33, 12, 0, 0, 0, '-', 0),
(112, 3210085, 34, 12, 0, 0, 0, '-', 0),
(113, 3210085, 35, 12, 0, 0, 0, '-', 0),
(114, 3210085, 36, 12, 0, 0, 0, '-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

DROP TABLE IF EXISTS `instructor`;
CREATE TABLE IF NOT EXISTS `instructor` (
  `INST_ID` int(30) NOT NULL AUTO_INCREMENT,
  `INST_FULLNAME` varchar(255) NOT NULL,
  `INST_ADDRESS` varchar(255) NOT NULL,
  `INST_SEX` varchar(20) NOT NULL DEFAULT 'Male',
  `INST_STATUS` varchar(20) NOT NULL DEFAULT 'Single',
  `SPECIALIZATION` text NOT NULL,
  `INST_EMAIL` varchar(255) NOT NULL,
  `EMPLOYMENT_STATUS` varchar(40) NOT NULL DEFAULT 'Probationary',
  PRIMARY KEY (`INST_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`INST_ID`, `INST_FULLNAME`, `INST_ADDRESS`, `INST_SEX`, `INST_STATUS`, `SPECIALIZATION`, `INST_EMAIL`, `EMPLOYMENT_STATUS`) VALUES
(1, 'Mr. Alakiri H. O.', 'Lekki, Lagos.', 'Male', 'Married', 'System/Hardware Engineering', 'halaki@yahoo.com', 'Active'),
(2, 'Mrs. Okikiola F. M.', 'egbeda, Lagos.', 'Female', 'Married', 'Database System', 'sademer@yahoo.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
CREATE TABLE IF NOT EXISTS `level` (
  `LEVEL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LEVEL` varchar(30) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL,
  `LEVEL_DESCRIPTION` varchar(255) NOT NULL,
  PRIMARY KEY (`LEVEL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`LEVEL_ID`, `LEVEL`, `SEMESTER`, `LEVEL_DESCRIPTION`) VALUES
(1, 'ND I (First)', 'First', 'ND I (First)'),
(2, 'ND I (Second)', 'Second', 'ND I (Second)'),
(3, 'ND II (First)', 'First', 'ND II (First)'),
(4, 'ND II (Second)', 'Second', 'ND II (Second)');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `PHOTO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FILENAME` text NOT NULL,
  `TYPE` varchar(30) NOT NULL,
  `SIZE` int(30) NOT NULL,
  `CAPTION` varchar(255) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `PRIMARY` varchar(20) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`PHOTO_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

DROP TABLE IF EXISTS `programme`;
CREATE TABLE IF NOT EXISTS `programme` (
  `PROGRAMME_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROGRAMME_NAME` varchar(200) NOT NULL,
  `PROGRAMME_DESC` varchar(200) NOT NULL,
  `STATUS` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active',
  `DEPARTMENT_ID` int(5) NOT NULL,
  PRIMARY KEY (`PROGRAMME_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`PROGRAMME_ID`, `PROGRAMME_NAME`, `PROGRAMME_DESC`, `STATUS`, `DEPARTMENT_ID`) VALUES
(1, 'ADV CERT (PRINTING TECHNOLOGY) PART TIME', 'ADV CERT (PRINTING TECHNOLOGY) PART TIME', 1, 9),
(2, 'B.SC(ED) (ART EDUCATION 200LEVEL) FULL TIME', 'B.SC(ED) (ART EDUCATION 200LEVEL) FULL TIME', 1, 3),
(3, 'B.SC(ED) (ART EDUCATION) FULL TIME', 'B.SC(ED) (ART EDUCATION) FULL TIME', 1, 3),
(4, 'B.SC(ED) (BIOLOGY EDUCATION 200LEVEL) FULL TIME', 'B.SC(ED) (BIOLOGY EDUCATION 200LEVEL) FULL TIME', 1, 5),
(5, 'B.SC(ED) (BIOLOGY EDUCATION) FULL TIME', 'B.SC(ED) (BIOLOGY EDUCATION) FULL TIME', 1, 5),
(6, 'B.SC(ED) (BUSINESS EDUCATION 200LEVEL) FULL TIME', 'B.SC(ED) (BUSINESS EDUCATION 200LEVEL) FULL TIME', 1, 4),
(7, 'B.SC(ED) (BUSINESS EDUCATION) FULL TIME', 'B.SC(ED) (BUSINESS EDUCATION) FULL TIME', 1, 4),
(8, 'B.SC(ED) (CHEMISTRY EDUCATION 200LEVEL) FULL TIME', 'B.SC(ED) (CHEMISTRY EDUCATION 200LEVEL) FULL TIME', 1, 5),
(9, 'B.SC(ED) (CHEMISTRY EDUCATION) FULL TIME', 'B.SC(ED) (CHEMISTRY EDUCATION) FULL TIME', 1, 5),
(10, 'B.SC(ED) (COMPUTER EDUCATION 200LEVEL) FULL TIME', 'B.SC(ED) (COMPUTER EDUCATION 200LEVEL) FULL TIME', 1, 5),
(11, 'B.SC(ED) (COMPUTER EDUCATION) FULL TIME', 'B.SC(ED) (COMPUTER EDUCATION) FULL TIME', 1, 5),
(12, 'B.SC(ED) (MATHEMATICS EDUCATION 200LEVEL) FULL TIME', 'B.SC(ED) (MATHEMATICS EDUCATION 200LEVEL) FULL TIME', 1, 5),
(13, 'B.SC(ED) (MATHEMATICS EDUCATION) FULL TIME', 'B.SC(ED) (MATHEMATICS EDUCATION) FULL TIME', 1, 5),
(14, 'B.SC(ED) (PHYSICS EDUCATION 200LEVEL) FULL TIME', 'B.SC(ED) (PHYSICS EDUCATION 200LEVEL) FULL TIME', 1, 5),
(15, 'B.SC(ED) (PHYSICS EDUCATION) FULL TIME', 'B.SC(ED) (PHYSICS EDUCATION) FULL TIME', 1, 5),
(16, 'CP (DRESS MAKING) PART TIME', 'CP (DRESS MAKING) PART TIME', 1, 8),
(17, 'CP (INDUSTRIAL DESIGN - CERAMICS OPTION) PART TIME', 'CP (INDUSTRIAL DESIGN - CERAMICS OPTION) PART TIME', 1, 8),
(18, 'CP (PAINTS & COATINGS TECHNOLOGY) PART TIME', 'CP (PAINTS & COATINGS TECHNOLOGY) PART TIME', 1, 8),
(19, 'CP (PHOTOGRAPHY) PART TIME', 'CP (PHOTOGRAPHY) PART TIME', 1, 10),
(20, 'CP (PRINTING TECHNOLOGY) PART TIME', 'CP (PRINTING TECHNOLOGY) PART TIME', 1, 9),
(21, 'CP (VISUAL ART) PART TIME', 'CP (VISUAL ART) PART TIME', 1, 7),
(22, 'B.SC(ED) (HOME ECONOMICS EDUCATION) FULL TIME', 'B.SC(ED) (HOME ECONOMICS EDUCATION) FULL TIME', 1, 5),
(23, 'B.SC(ED) (HOME ECONOMICS EDUCATION 200LEVEL) FULL TIME', 'B.SC(ED) (HOME ECONOMICS EDUCATION 200LEVEL) FULL TIME', 1, 5),
(24, 'B.SC(ED) (INDUSTRIAL TECHNICAL EDUCATION 200LEVEL) FULL TIME', 'B.SC(ED) (INDUSTRIAL TECHNICAL EDUCATION 200LEVEL) FULL TIME', 1, 15),
(25, 'B.SC(ED) (INDUSTRIAL TECHNICAL EDUCATION) FULL TIME', 'B.SC(ED) (INDUSTRIAL TECHNICAL EDUCATION) FULL TIME', 1, 15),
(26, 'B.SC(ED) (INTEGRATED SCIENCE EDUCATION 200LEVEL) FULL TIME', 'B.SC(ED) (INTEGRATED SCIENCE EDUCATION 200LEVEL) FULL TIME', 1, 5),
(27, 'B.SC(ED) (INTEGRATED SCIENCE EDUCATION) FULL TIME', 'B.SC(ED) (INTEGRATED SCIENCE EDUCATION) FULL TIME', 1, 5),
(28, 'HND (ACCOUNTANCY) FULL TIME', 'HND (ACCOUNTANCY) FULL TIME', 1, 27),
(29, 'HND (ACCOUNTANCY) PART TIME', 'HND (ACCOUNTANCY) PART TIME', 1, 27),
(30, 'HND (AGRICULTURAL EXTENSION & MANAGEMENT) FULL TIME', 'HND (AGRICULTURAL EXTENSION & MANAGEMENT) FULL TIME', 1, 53),
(31, 'HND (ANIMAL PRODUCTION TECHNOLOGY) FULL TIME', 'HND (ANIMAL PRODUCTION TECHNOLOGY) FULL TIME', 1, 53),
(32, 'HND (ARCHITECTURE) FULL TIME', 'HND (ARCHITECTURE) FULL TIME', 1, 22),
(33, 'HND (BANKING & FINANCE) FULL TIME', 'HND (BANKING & FINANCE) FULL TIME', 1, 30),
(34, 'HND (BIOCHEMISTRY) FULL TIME', 'HND (BIOCHEMISTRY) FULL TIME', 1, 40),
(35, 'HND (BIOCHEMISTRY) PART TIME', 'HND (BIOCHEMISTRY) PART TIME', 1, 40),
(36, 'HND (BOOK PUBLISHING) FULL TIME', 'HND (BOOK PUBLISHING) FULL TIME', 1, 9),
(37, 'HND (BUILDING TECHNOLOGY) FULL TIME', 'HND (BUILDING TECHNOLOGY) FULL TIME', 1, 25),
(38, 'HND (BUILDING TECHNOLOGY) PART TIME', 'HND (BUILDING TECHNOLOGY) PART TIME', 1, 25),
(39, 'HND (BUSINESS ADMINISTRATION) FULL TIME', 'HND (BUSINESS ADMINISTRATION) FULL TIME', 1, 57),
(40, 'HND (BUSINESS ADMINISTRATION) PART TIME', 'HND (BUSINESS ADMINISTRATION) PART TIME', 1, 57),
(41, 'HND (CHEMISTRY) FULL TIME', 'HND (CHEMISTRY) FULL TIME', 1, 37),
(42, 'HND (CHEMISTRY) PART TIME', 'HND (CHEMISTRY) PART TIME', 1, 37),
(43, 'HND (CIVIL ENGINEERING) FULL TIME', 'HND (CIVIL ENGINEERING) FULL TIME', 1, 47),
(44, 'HND (CIVIL ENGINEERING) PART TIME', 'HND (CIVIL ENGINEERING) PART TIME', 1, 47),
(45, 'HND (COMPUTER ENGINEERING) FULL TIME', 'HND (COMPUTER ENGINEERING) FULL TIME', 1, 46),
(46, 'HND (COMPUTER ENGINEERING) PART TIME', 'HND (COMPUTER ENGINEERING) PART TIME', 1, 46),
(47, 'HND (COMPUTER SCIENCE) FULL TIME', 'HND (COMPUTER SCIENCE) FULL TIME', 1, 2),
(48, 'HND (COMPUTER SCIENCE) PART TIME', 'HND (COMPUTER SCIENCE) PART TIME', 1, 2),
(49, 'HND (CROP PRODUCTION TECHNOLOGY) FULL TIME', 'HND (CROP PRODUCTION TECHNOLOGY) FULL TIME', 1, 53),
(50, 'HND (ELECTRICAL ENGINEERING) FULL TIME', 'HND (ELECTRICAL ENGINEERING) FULL TIME', 1, 43),
(51, 'HND (ELECTRICAL ENGINEERING) PART TIME', 'HND (ELECTRICAL ENGINEERING) PART TIME', 1, 43),
(52, 'HND (ENVIRONMENTAL BIOLOGY) FULL TIME', 'HND (ENVIRONMENTAL BIOLOGY) FULL TIME', 1, 35),
(53, 'HND (ENVIRONMENTAL BIOLOGY) PART TIME', 'HND (ENVIRONMENTAL BIOLOGY) PART TIME', 1, 35),
(54, 'HND (ESTATE MANAGEMENT & VALUATION) FULL TIME', 'HND (ESTATE MANAGEMENT & VALUATION) FULL TIME', 1, 21),
(55, 'HND (ESTATE MANAGEMENT & VALUATION) PART TIME', 'HND (ESTATE MANAGEMENT & VALUATION) PART TIME', 1, 21),
(56, 'HND (FOOD TECHNOLOGY) FULL TIME', 'HND (FOOD TECHNOLOGY) FULL TIME', 1, 1),
(57, 'HND (FOOD TECHNOLOGY) PART TIME', 'HND (FOOD TECHNOLOGY) PART TIME', 1, 1),
(58, 'HND (GRAPHIC DESIGN) FULL TIME', 'HND (GRAPHIC DESIGN) FULL TIME', 1, 10),
(59, 'HND (GRAPHIC DESIGN) PART TIME', 'HND (GRAPHIC DESIGN) PART TIME', 1, 10),
(60, 'HND (HOSPITALITY MANAGEMENT) FULL TIME', 'HND (HOSPITALITY MANAGEMENT) FULL TIME', 1, 54),
(61, 'HND (HOSPITALITY MANAGEMENT) PART TIME', 'HND (HOSPITALITY MANAGEMENT) PART TIME', 1, 54),
(62, 'HND (INDUSTRIAL DESIGN - CERAMICS OPTION) FULL TIME', 'HND (INDUSTRIAL DESIGN - CERAMICS OPTION) FULL TIME', 1, 8),
(63, 'HND (INDUSTRIAL DESIGN - FASHION OPTION) FULL TIME', 'HND (INDUSTRIAL DESIGN - FASHION OPTION) FULL TIME', 1, 8),
(64, 'HND (INDUSTRIAL DESIGN - FASHION OPTION) PART TIME', 'HND (INDUSTRIAL DESIGN - FASHION OPTION) PART TIME', 1, 8),
(65, 'HND (INDUSTRIAL DESIGN - TEXTILE OPTION) FULL TIME', 'HND (INDUSTRIAL DESIGN - TEXTILE OPTION) FULL TIME', 1, 8),
(66, 'HND (INDUSTRIAL MAINTENANCE ENGINEERING) PART TIME', 'HND (INDUSTRIAL MAINTENANCE ENGINEERING) PART TIME', 1, 49),
(67, 'HND (LEISURE & TOURISM) FULL TIME', 'HND (LEISURE & TOURISM) FULL TIME', 1, 55),
(68, 'HND (MARKETING) FULL TIME', 'HND (MARKETING) FULL TIME', 1, 29),
(69, 'HND (MARKETING) PART TIME', 'HND (MARKETING) PART TIME', 1, 29),
(70, 'HND (MASS COMMUNICATION) FULL TIME', 'HND (MASS COMMUNICATION) FULL TIME', 1, 32),
(71, 'HND (MECHANICAL ENGINEERING) FULL TIME', 'HND (MECHANICAL ENGINEERING) FULL TIME', 1, 42),
(72, 'HND (METALLURGICAL ENGINEERING) FULL TIME', 'HND (METALLURGICAL ENGINEERING) FULL TIME', 1, 48),
(73, 'HND (MICROBIOLOGY) FULL TIME', 'HND (MICROBIOLOGY) FULL TIME', 1, 40),
(74, 'HND (OFFICE TECHNOLOGY MANAGEMENT - BILINGUAL) FULL TIME', 'HND (OFFICE TECHNOLOGY MANAGEMENT - BILINGUAL) FULL TIME', 1, 31),
(75, 'HND (OFFICE TECHNOLOGY MANAGEMENT) FULL TIME', 'HND (OFFICE TECHNOLOGY MANAGEMENT) FULL TIME', 1, 31),
(76, 'HND (PAINTING) FULL TIME', 'HND (PAINTING) FULL TIME', 1, 7),
(77, 'HND (PHYSICS WITH ELECTRONICS) FULL TIME', 'HND (PHYSICS WITH ELECTRONICS) FULL TIME', 1, 36),
(78, 'HND (PRINTING TECHNOLOGY) FULL TIME', 'HND (PRINTING TECHNOLOGY) FULL TIME', 1, 9),
(79, 'HND (QUANTITY SURVEYING) FULL TIME', 'HND (QUANTITY SURVEYING) FULL TIME', 1, 26),
(80, 'HND (STATISTICS) FULL TIME', 'HND (STATISTICS) FULL TIME', 1, 39),
(81, 'HND (SCULPTURE) FULL TIME', 'HND (SCULPTURE) FULL TIME', 1, 7),
(82, 'HND (SURVEYING & GEOINFORMATICS) FULL TIME', 'HND (SURVEYING & GEOINFORMATICS) FULL TIME', 1, 23),
(83, 'HND (TEXTILE TECHNOLOGY) FULL TIME', 'HND (TEXTILE TECHNOLOGY) FULL TIME', 1, 56),
(84, 'HND (URBAN & REGIONAL PLANNING) FULL TIME', 'HND (URBAN & REGIONAL PLANNING) FULL TIME', 1, 24),
(85, 'ND (ACCOUNTANCY) FULL TIME', 'ND (ACCOUNTANCY) FULL TIME', 1, 27),
(86, 'ND (AGRICULTURAL & BIO-ENVIRONMENTAL ENGINEERING) FULL TIME', 'ND (AGRICULTURAL & BIO-ENVIRONMENTAL ENGINEERING) FULL TIME', 1, 50),
(87, 'ND (AGRICULTURAL TECHNOLOGY) FULL TIME', 'ND (AGRICULTURAL TECHNOLOGY) FULL TIME', 1, 53),
(88, 'ND (ARCHITECTURE) FULL TIME', 'ND (ARCHITECTURE) FULL TIME', 1, 22),
(89, 'ND (BANKING & FINANCE) FULL TIME', 'ND (BANKING & FINANCE) FULL TIME', 1, 30),
(90, 'ND (BOOK PUBLISHING) FULL TIME', 'ND (BOOK PUBLISHING) FULL TIME', 1, 9),
(91, 'ND (BUILDING TECHNOLOGY) FULL TIME', 'ND (BUILDING TECHNOLOGY) FULL TIME', 1, 25),
(92, 'ND (BUSINESS ADMINISTRATION) FULL TIME', 'ND (BUSINESS ADMINISTRATION) FULL TIME', 1, 57),
(93, 'ND (CHEMICAL ENGINEERING TECHNOLOGY) FULL TIME', 'ND (CHEMICAL ENGINEERING TECHNOLOGY) FULL TIME', 1, 45),
(94, 'ND (CIVIL ENGINEERING) FULL TIME', 'ND (CIVIL ENGINEERING) FULL TIME', 1, 47),
(95, 'ND (COMPUTER ENGINEERING) FULL TIME', 'ND (COMPUTER ENGINEERING) FULL TIME', 1, 46),
(96, 'ND (COMPUTER SCIENCE) FULL TIME', 'ND (COMPUTER SCIENCE) FULL TIME', 1, 2),
(97, 'ND (ELECTRICAL ENGINEERING) FULL TIME', 'ND (ELECTRICAL ENGINEERING) FULL TIME', 1, 43),
(98, 'ND (ESTATE MANAGEMENT & VALUATION) FULL TIME', 'ND (ESTATE MANAGEMENT & VALUATION) FULL TIME', 1, 21),
(99, 'ND (FOOD TECHNOLOGY) FULL TIME', 'ND (FOOD TECHNOLOGY) FULL TIME', 1, 1),
(100, 'ND (GENERAL ART) FULL TIME', 'ND (GENERAL ART) FULL TIME', 1, 7),
(101, 'ND (HOSPITALITY MANAGEMENT) FULL TIME', 'ND (HOSPITALITY MANAGEMENT) FULL TIME', 1, 54),
(102, 'ND (INDUSTRIAL DESIGN - FASHION) FULL TIME', 'ND (INDUSTRIAL DESIGN - FASHION) FULL TIME', 1, 8),
(103, 'ND (INDUSTRIAL MAINTENANCE ENGINEERING) FULL TIME', 'ND (INDUSTRIAL MAINTENANCE ENGINEERING) FULL TIME', 1, 49),
(104, 'ND (LEISURE & TOURISM) FULL TIME', 'ND (LEISURE & TOURISM) FULL TIME', 1, 55),
(105, 'ND (MARINE ENGINEERING) FULL TIME', 'ND (MARINE ENGINEERING) FULL TIME', 1, 44),
(106, 'ND (MARKETING) FULL TIME', 'ND (MARKETING) FULL TIME', 1, 29),
(107, 'ND (MASS COMMUNICATION) FULL TIME', 'ND (MASS COMMUNICATION) FULL TIME', 1, 32),
(108, 'ND (MECHANICAL ENGINEERING) FULL TIME', 'ND (MECHANICAL ENGINEERING) FULL TIME', 1, 42),
(109, 'ND (MECHATRONICS ENGINEERING TECHNOLOGY) FULL TIME', 'ND (MECHATRONICS ENGINEERING TECHNOLOGY) FULL TIME', 1, 41),
(110, 'ND (METALLURGICAL ENGINEERING) FULL TIME', 'ND (METALLURGICAL ENGINEERING) FULL TIME', 1, 48),
(111, 'ND (MINERAL & PETROLEUM RESOURCES ENGINEERING) FULL TIME', 'ND (MINERAL & PETROLEUM RESOURCES ENGINEERING) FULL TIME', 1, 41),
(112, 'ND (NO PROGRAM) FULL TIME', 'ND (NO PROGRAM) FULL TIME', 1, 0),
(113, 'ND (NUTRITION & DIETETICS) FULL TIME', 'ND (NUTRITION & DIETETICS) FULL TIME', 1, 1),
(114, 'ND (OFFICE TECHNOLOGY MANAGEMENT) FULL TIME', 'ND (OFFICE TECHNOLOGY MANAGEMENT) FULL TIME', 1, 31),
(115, 'ND (POLYMER TECHNOLOGY) FULL TIME', 'ND (POLYMER TECHNOLOGY) FULL TIME', 1, 56),
(116, 'ND (PRINTING TECHNOLOGY) FULL TIME', 'ND (PRINTING TECHNOLOGY) FULL TIME', 1, 9),
(117, 'ND (PUBLIC ADMINISTRATION) FULL TIME', 'ND (PUBLIC ADMINISTRATION) FULL TIME', 1, 28),
(118, 'ND (QUANTITY SURVEYING) FULL TIME', 'ND (QUANTITY SURVEYING) FULL TIME', 1, 26),
(119, 'ND (SCIENCE LABORATORY TECHNOLOGY) FULL TIME', 'ND (SCIENCE LABORATORY TECHNOLOGY) FULL TIME', 1, 40),
(120, 'ND (STATISTICS) FULL TIME', 'ND (STATISTICS) FULL TIME', 1, 39),
(121, 'ND (SURVEYING & GEOINFORMATICS) FULL TIME', 'ND (SURVEYING & GEOINFORMATICS) FULL TIME', 1, 23),
(122, 'ND (TEXTILE TECHNOLOGY) FULL TIME', 'ND (TEXTILE TECHNOLOGY) FULL TIME', 1, 56),
(123, 'ND (URBAN & REGIONAL PLANNING) FULL TIME', 'ND (URBAN & REGIONAL PLANNING) FULL TIME', 1, 24),
(124, 'ND (WELDING & FABRICATION ENGINEERING) FULL TIME', 'ND (WELDING & FABRICATION ENGINEERING) FULL TIME', 1, 52);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `ROOM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ROOM_NAME` varchar(30) NOT NULL,
  `ROOM_DESC` varchar(30) NOT NULL,
  PRIMARY KEY (`ROOM_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ROOM_ID`, `ROOM_NAME`, `ROOM_DESC`) VALUES
(2, 'Room02', 'Room 02'),
(4, 'Room 03', 'Room 03'),
(5, 'Room01', 'Room01');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

DROP TABLE IF EXISTS `school`;
CREATE TABLE IF NOT EXISTS `school` (
  `SCHOOL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SCHOOL_NAME` varchar(50) NOT NULL,
  `SCHOOL_DESC` varchar(50) NOT NULL,
  `STATUS` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active',
  PRIMARY KEY (`SCHOOL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`SCHOOL_ID`, `SCHOOL_NAME`, `SCHOOL_DESC`, `STATUS`) VALUES
(1, 'Art, Design & Printng Technology', 'Art, Design & Printng Technology', 1),
(2, 'Environmental Studies', 'Environmental Studies', 1),
(3, 'Management and Business Studies', 'Management and Business Studies', 1),
(4, 'Technical Education', 'Technical Education', 1),
(5, 'Liberal Studies', 'Liberal Studies', 1),
(6, 'Science', 'Science', 1),
(7, 'Engineering', 'Engineering', 1),
(8, 'Technology', 'Technology', 1);

-- --------------------------------------------------------

--
-- Table structure for table `schoolyr`
--

DROP TABLE IF EXISTS `schoolyr`;
CREATE TABLE IF NOT EXISTS `schoolyr` (
  `SYID` int(11) NOT NULL AUTO_INCREMENT,
  `AY` varchar(30) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL,
  `LEVEL_ID` int(11) NOT NULL,
  `IDNO` int(30) NOT NULL,
  `CATEGORY` varchar(30) NOT NULL DEFAULT 'ENROLLED',
  `DATE_RESERVED` datetime NOT NULL,
  `DATE_ENROLLED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `STATUS` varchar(30) NOT NULL DEFAULT 'New',
  PRIMARY KEY (`SYID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolyr`
--

INSERT INTO `schoolyr` (`SYID`, `AY`, `SEMESTER`, `LEVEL_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`) VALUES
(1, '2016-2017', 'First', 1, 3210062, 'ENROLLED', '2018-03-28 11:51:00', '2018-04-05 12:04:52', 'NEW'),
(2, '2016-2017', 'Second', 2, 3210062, 'ENROLLED', '2018-03-29 11:43:28', '2018-04-05 12:04:55', 'Continuing'),
(3, '2017-2018', 'First', 3, 3210062, 'ENROLLED', '2018-03-29 11:44:31', '2018-04-05 12:04:59', 'Continuing'),
(4, '2017-2018', 'Second', 4, 3210062, 'ENROLLED', '2018-03-29 11:45:15', '2018-03-29 12:45:15', 'Continuing'),
(5, '2016-2017', 'First', 1, 3210057, 'ENROLLED', '2018-04-10 02:47:57', '2018-04-10 03:47:57', 'New'),
(6, '2016-2017', 'Second', 2, 3210057, 'ENROLLED', '2018-04-10 02:48:27', '2018-04-10 03:48:27', 'Continuing'),
(7, '2017-2018', 'First', 3, 3210057, 'ENROLLED', '2018-04-10 02:48:45', '2018-04-10 03:48:45', 'Continuing'),
(8, '2017-2018', 'Second', 4, 3210057, 'ENROLLED', '2018-04-10 02:49:09', '2018-04-10 03:49:09', 'Continuing'),
(9, '2016-2017', 'First', 1, 3210085, 'ENROLLED', '2018-04-17 11:53:10', '2018-04-17 12:53:10', 'New'),
(10, '2016-2017', 'Second', 2, 3210085, 'ENROLLED', '2018-04-17 13:32:33', '2018-04-17 14:32:33', 'Continuing'),
(11, '2017-2018', 'First', 3, 3210085, 'ENROLLED', '2018-04-17 13:34:15', '2018-04-17 14:34:15', 'Continuing'),
(12, '2017-2018', 'Second', 4, 3210085, 'ENROLLED', '2018-04-17 13:38:18', '2018-04-17 14:38:18', 'Continuing');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

DROP TABLE IF EXISTS `semester`;
CREATE TABLE IF NOT EXISTS `semester` (
  `SEM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SEM` varchar(15) NOT NULL DEFAULT 'First',
  PRIMARY KEY (`SEM_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`SEM_ID`, `SEM`) VALUES
(1, 'First'),
(2, 'Second');

-- --------------------------------------------------------

--
-- Table structure for table `studentsubjects`
--

DROP TABLE IF EXISTS `studentsubjects`;
CREATE TABLE IF NOT EXISTS `studentsubjects` (
  `STUDSUBJ_ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `LEVEL_ID` int(11) NOT NULL,
  `SEMESTER` varchar(30) NOT NULL,
  `SY` text NOT NULL,
  PRIMARY KEY (`STUDSUBJ_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentsubjects`
--

INSERT INTO `studentsubjects` (`STUDSUBJ_ID`, `IDNO`, `SUBJ_ID`, `LEVEL_ID`, `SEMESTER`, `SY`) VALUES
(1, 3210062, 1, 1, 'First', '2016-2017'),
(2, 3210062, 2, 1, 'First', '2016-2017'),
(3, 3210062, 3, 1, 'First', '2016-2017'),
(4, 3210062, 4, 1, 'First', '2016-2017'),
(5, 3210062, 5, 1, 'First', '2016-2017'),
(6, 3210062, 6, 1, 'First', '2016-2017'),
(7, 3210062, 7, 1, 'First', '2016-2017'),
(8, 3210062, 8, 1, 'First', '2016-2017'),
(9, 3210062, 9, 1, 'First', '2016-2017'),
(10, 3210062, 10, 1, 'First', '2016-2017'),
(11, 3210062, 11, 1, 'First', '2016-2017'),
(12, 3210062, 12, 2, 'Second', '2016-2017'),
(13, 3210062, 13, 2, 'Second', '2016-2017'),
(14, 3210062, 14, 2, 'Second', '2016-2017'),
(15, 3210062, 15, 2, 'Second', '2016-2017'),
(16, 3210062, 16, 2, 'Second', '2016-2017'),
(17, 3210062, 17, 2, 'Second', '2016-2017'),
(18, 3210062, 18, 2, 'Second', '2016-2017'),
(19, 3210062, 19, 2, 'Second', '2016-2017'),
(20, 3210062, 20, 2, 'Second', '2016-2017'),
(21, 3210062, 21, 2, 'Second', '2016-2017'),
(22, 3210062, 22, 3, 'First', '2017-2018'),
(23, 3210062, 23, 3, 'First', '2017-2018'),
(24, 3210062, 24, 3, 'First', '2017-2018'),
(25, 3210062, 25, 3, 'First', '2017-2018'),
(26, 3210062, 26, 3, 'First', '2017-2018'),
(27, 3210062, 27, 3, 'First', '2017-2018'),
(28, 3210062, 28, 3, 'First', '2017-2018'),
(29, 3210062, 29, 3, 'First', '2017-2018'),
(30, 3210062, 30, 3, 'First', '2017-2018'),
(31, 3210062, 31, 4, 'Second', '2017-2018'),
(32, 3210062, 32, 4, 'Second', '2017-2018'),
(33, 3210062, 33, 4, 'Second', '2017-2018'),
(34, 3210062, 34, 4, 'Second', '2017-2018'),
(35, 3210062, 35, 4, 'Second', '2017-2018'),
(36, 3210062, 36, 4, 'Second', '2017-2018'),
(37, 3210062, 37, 4, 'Second', '2017-2018'),
(38, 3210062, 38, 4, 'Second', '2017-2018'),
(39, 3210057, 1, 1, 'First', '2013-2014'),
(40, 3210057, 2, 1, 'First', '2016-2017'),
(41, 3210057, 3, 1, 'First', '2016-2017'),
(42, 3210057, 4, 1, 'First', '2016-2017'),
(43, 3210057, 5, 1, 'First', '2016-2017'),
(44, 3210057, 6, 1, 'First', '2016-2017'),
(45, 3210057, 7, 1, 'First', '2016-2017'),
(46, 3210057, 8, 1, 'First', '2016-2017'),
(47, 3210057, 9, 1, 'First', '2016-2017'),
(48, 3210057, 10, 1, 'First', '2016-2017'),
(49, 3210057, 11, 1, 'First', '2016-2017'),
(50, 3210057, 12, 2, 'Second', '2016-2017'),
(51, 3210057, 13, 2, 'Second', '2016-2017'),
(52, 3210057, 14, 2, 'Second', '2016-2017'),
(53, 3210057, 15, 2, 'Second', '2016-2017'),
(54, 3210057, 16, 2, 'Second', '2016-2017'),
(55, 3210057, 17, 2, 'Second', '2016-2017'),
(56, 3210057, 18, 2, 'Second', '2016-2017'),
(57, 3210057, 19, 2, 'Second', '2016-2017'),
(58, 3210057, 20, 2, 'Second', '2016-2017'),
(59, 3210057, 21, 2, 'Second', '2016-2017'),
(60, 3210057, 22, 3, 'First', '2017-2018'),
(61, 3210057, 23, 3, 'First', '2017-2018'),
(62, 3210057, 24, 3, 'First', '2017-2018'),
(63, 3210057, 25, 3, 'First', '2017-2018'),
(64, 3210057, 26, 3, 'First', '2017-2018'),
(65, 3210057, 27, 3, 'First', '2017-2018'),
(66, 3210057, 28, 3, 'First', '2017-2018'),
(67, 3210057, 29, 3, 'First', '2017-2018'),
(68, 3210057, 30, 3, 'First', '2017-2018'),
(69, 3210057, 31, 4, 'Second', '2017-2018'),
(70, 3210057, 32, 4, 'Second', '2017-2018'),
(71, 3210057, 33, 4, 'Second', '2017-2018'),
(72, 3210057, 34, 4, 'Second', '2017-2018'),
(73, 3210057, 35, 4, 'Second', '2017-2018'),
(74, 3210057, 36, 4, 'Second', '2017-2018'),
(75, 3210057, 37, 4, 'Second', '2017-2018'),
(76, 3210057, 38, 4, 'Second', '2017-2018'),
(77, 3210085, 1, 1, 'First', '2016-2017'),
(78, 3210085, 2, 1, 'First', '2016-2017'),
(79, 3210085, 3, 1, 'First', '2016-2017'),
(80, 3210085, 4, 1, 'First', '2016-2017'),
(81, 3210085, 5, 1, 'First', '2016-2017'),
(82, 3210085, 6, 1, 'First', '2016-2017'),
(83, 3210085, 7, 1, 'First', '2016-2017'),
(84, 3210085, 8, 1, 'First', '2016-2017'),
(85, 3210085, 9, 1, 'First', '2016-2017'),
(86, 3210085, 10, 1, 'First', '2016-2017'),
(87, 3210085, 11, 1, 'First', '2016-2017'),
(88, 3210085, 12, 2, 'Second', '2016-2017'),
(89, 3210085, 13, 2, 'Second', '2016-2017'),
(90, 3210085, 14, 2, 'Second', '2016-2017'),
(91, 3210085, 15, 2, 'Second', '2016-2017'),
(92, 3210085, 16, 2, 'Second', '2016-2017'),
(93, 3210085, 17, 2, 'Second', '2016-2017'),
(94, 3210085, 18, 2, 'Second', '2016-2017'),
(95, 3210085, 19, 2, 'Second', '2016-2017'),
(96, 3210085, 20, 2, 'Second', '2016-2017'),
(97, 3210085, 21, 2, 'Second', '2016-2017'),
(98, 3210085, 22, 3, 'First', '2017-2018'),
(99, 3210085, 23, 3, 'First', '2017-2018'),
(100, 3210085, 24, 3, 'First', '2017-2018'),
(101, 3210085, 25, 3, 'First', '2017-2018'),
(102, 3210085, 26, 3, 'First', '2017-2018'),
(103, 3210085, 27, 3, 'First', '2017-2018'),
(104, 3210085, 28, 3, 'First', '2017-2018'),
(105, 3210085, 29, 3, 'First', '2017-2018'),
(106, 3210085, 30, 3, 'First', '2017-2018'),
(107, 3210085, 31, 4, 'Second', '2017-2018'),
(108, 3210085, 32, 4, 'Second', '2017-2018'),
(109, 3210085, 33, 4, 'Second', '2017-2018'),
(110, 3210085, 34, 4, 'Second', '2017-2018'),
(111, 3210085, 35, 4, 'Second', '2017-2018'),
(112, 3210085, 36, 4, 'Second', '2017-2018'),
(113, 3210085, 37, 4, 'Second', '2017-2018'),
(114, 3210085, 38, 4, 'Second', '2017-2018');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `SUBJ_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SUBJ_CODE` varchar(30) NOT NULL,
  `SUBJ_DESCRIPTION` varchar(255) NOT NULL,
  `UNIT` int(2) NOT NULL,
  `PRE_REQUISITE` varchar(30) NOT NULL DEFAULT 'None',
  `LEVEL_ID` int(11) NOT NULL,
  `AY` varchar(30) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL,
  PRIMARY KEY (`SUBJ_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=515 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `LEVEL_ID`, `AY`, `SEMESTER`) VALUES
(1, 'COM 111', 'INTRODUCTION TO COMPUTING', 3, '', 1, '2016-2017', 'First'),
(2, 'COM 112', 'INTRODUCTION TO DIGITAL ELECTRONICS', 3, '', 1, '2016-2017', 'First'),
(3, 'COM 113', 'INTRODUCTION TO PROGRAMMING', 3, '', 1, '2016-2017', 'First'),
(4, 'COM 114', 'PC UPGRADE AND MAINTENANCE', 2, '', 1, '2016-2017', 'First'),
(5, 'COM 115', 'INTRODUCTION TO LINUX OPERATING SYSTEM', 3, '', 1, '2016-2017', 'First'),
(6, 'GNS 101', 'USE OF ENGLISH I', 2, '', 1, '2016-2017', 'First'),
(7, 'GNS 111', 'CITIZENSHIP EDUCATION/HIV I', 2, '', 1, '2016-2017', 'First'),
(8, 'MTH 111', 'LOGIC AND LINEAR ALGEBRA', 2, '', 1, '2016-2017', 'First'),
(9, 'MTH 112', 'TRIGONOMETRY & ANALYTICAL GEOMETRY', 2, '', 1, '2016-2017', 'First'),
(10, 'STA 112', 'DESCRIPTIVE STATISTICS I', 2, '', 1, '2016-2017', 'First'),
(11, 'STA 117', 'ELEMENTARY PROBABILITY THEORY', 2, '', 1, '2016-2017', 'First'),
(12, 'COM 121', 'SCIENTIFIC PROGRAMMING USING O.O JAVA', 3, '', 2, '2016-2017', 'Second'),
(13, 'COM 122', 'INTRODUCTION TO INTERNET', 3, '', 2, '2016-2017', 'Second'),
(14, 'COM 123', 'COMPUTER APPLICATION PACKAGES I', 3, '', 2, '2016-2017', 'Second'),
(15, 'COM 124', 'DATA STRUCTURES & ALGORITHM', 3, '', 2, '2016-2017', 'Second'),
(16, 'COM 125', 'INTRODUCTION TO SYSTEM ANALYSIS', 3, '', 2, '2016-2017', 'Second'),
(17, 'COM 127', 'PROGRAMMING IN C/C++', 3, '', 2, '2016-2017', 'Second'),
(18, 'COM 128', 'INTRODUCTION TO DISCRETE MATHEMATICS', 2, '', 2, '2016-2017', 'Second'),
(19, 'EED 126', 'INTRODUCTION TO ENTREPRENEURSHIP ', 2, '', 2, '2016-2017', 'Second'),
(20, 'GNS 102', 'COMMUNICATION IN ENGLISH I', 2, '', 2, '2016-2017', 'Second'),
(21, 'GNS 121', 'CITIZENSHIP EDUCATION/HIV II', 2, '', 2, '2016-2017', 'Second'),
(22, 'COM 215', 'COMPUTER APPLICATION PACKAGES II', 3, '', 3, '2017-2018', 'First'),
(23, 'GNS 201', 'USE OF ENGLISH II', 2, '', 3, '2017-2018', 'First'),
(24, 'EDP 211', 'PRACTICE OF ENTREPRENEURSHIP', 2, '', 3, '2017-2018', 'First'),
(25, 'COM 217', 'MANAGEMENT INFORMATION SYSTEM ', 3, '', 3, '2017-2018', 'First'),
(26, 'COM 216', 'COMPUTER SYSTEMS & TROUBLESHOOTING I', 3, '', 3, '2017-2018', 'First'),
(27, 'COM 214', 'FILE ORGANISATION & MANAGEMENT', 3, '', 3, '2017-2018', 'First'),
(28, 'COM 213', 'PROGRAMMING IN UML', 3, '', 3, '2017-2018', 'First'),
(29, 'COM 212', 'SYSTEM PROGRAMMING ', 3, '', 3, '2017-2018', 'First'),
(30, 'COM 211', 'PROGRAMMING IN VISUAL BASIC', 3, '', 3, '2017-2018', 'First'),
(31, 'COM 221', 'PROGRAMMING IN FORTRAN', 3, '', 4, '2017-2018', 'Second'),
(32, 'COM 222', 'SEMINAR ON COMPUTER AND SOCIETY', 2, '', 4, '2017-2018', 'Second'),
(33, 'COM 223', 'BASIC HARDWARE MAINTENANCE', 3, '', 4, '2017-2018', 'Second'),
(34, 'COM 225', 'WEB TECHNOLOGY', 3, '', 4, '2017-2018', 'Second'),
(35, 'COM 226', 'COMPUTER SYSTEMS & TROUBLESHOOTING II', 3, '', 4, '2017-2018', 'Second'),
(36, 'COM 229', 'PROJECT', 4, '', 4, '2017-2018', 'Second'),
(37, 'GNS 202', 'COMMUNICATION IN ENGLISH II', 2, '', 4, '2017-2018', 'Second'),
(38, 'MTH 209', 'CALCULUS', 2, '', 4, '2017-2018', 'Second');

-- --------------------------------------------------------

--
-- Table structure for table `tblstuddetails`
--

DROP TABLE IF EXISTS `tblstuddetails`;
CREATE TABLE IF NOT EXISTS `tblstuddetails` (
  `DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `GUARDIAN_NAME` varchar(255) NOT NULL,
  `GUARDIAN_ADDRESS` varchar(255) NOT NULL,
  `GUARDIAN_PHONE` varchar(255) NOT NULL,
  `IDNO` varchar(30) NOT NULL,
  PRIMARY KEY (`DETAIL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstuddetails`
--

INSERT INTO `tblstuddetails` (`DETAIL_ID`, `GUARDIAN_NAME`, `GUARDIAN_ADDRESS`, `GUARDIAN_PHONE`, `IDNO`) VALUES
(59, 'MR & MRS ZEEH', 'MUSHIN, LAGOS', 'NO', '3210085'),
(67, 'MR & MRS LAKIN', 'IYANA-IPAJA, LAGOS, NIGERIA.', '08112345678', '3210062'),
(68, 'MR & MRS DUJIN', 'IKOTUN, LAGOS', '08012345678', '3210057');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

DROP TABLE IF EXISTS `tblstudent`;
CREATE TABLE IF NOT EXISTS `tblstudent` (
  `S_ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` varchar(20) NOT NULL,
  `MATRICNO` varchar(20) NOT NULL,
  `FNAME` varchar(40) NOT NULL,
  `LNAME` varchar(40) NOT NULL,
  `MNAME` varchar(40) NOT NULL,
  `SEX` varchar(10) NOT NULL DEFAULT 'Male',
  `BDAY` date NOT NULL,
  `BPLACE` text NOT NULL,
  `STATUS` varchar(30) NOT NULL,
  `AGE` int(30) NOT NULL,
  `NATIONALITY` varchar(40) NOT NULL,
  `STATE` varchar(30) NOT NULL,
  `RELIGION` varchar(255) NOT NULL,
  `CONTACT_NO` varchar(40) NOT NULL,
  `HOME_ADD` text NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `SCHOOL` varchar(200) NOT NULL,
  `DEPARTMENT` varchar(200) NOT NULL,
  `PROGRAMME` varchar(200) NOT NULL,
  PRIMARY KEY (`S_ID`),
  UNIQUE KEY `IDNO` (`IDNO`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`S_ID`, `IDNO`, `MATRICNO`, `FNAME`, `LNAME`, `MNAME`, `SEX`, `BDAY`, `BPLACE`, `STATUS`, `AGE`, `NATIONALITY`, `STATE`, `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `EMAIL`, `SCHOOL`, `DEPARTMENT`, `PROGRAMME`) VALUES
(56, '3210085', 'F/ND/15/3210085', 'CHUKWUDI', 'ZEEH', 'CLINTON', 'MALE', '1997-10-31', 'LAGOS', 'SINGLE', 20, 'NIGERIAN', 'Ondo', 'CHRISTIANITY', '08112345678', 'MUSHIN, LAGOS', 'zeeh@email.com', '8', '2', '96'),
(57, '3210062', 'F/ND/15/3210062', 'STEPHEN', 'LAKIN', 'TEGA', 'Male', '2009-06-04', 'LAGOS', 'Single', 23, 'NIGERIA', 'Oyo', 'CHRISTIANITY', '08012345678', 'IYANA-IPAJA, LAGOS, NIGERIA.', 'steplakin@email.com', '8', '2', '96'),
(58, '3210057', 'F/ND/15/3210057', 'SANMI', 'DUJIN', 'ZAMANI', 'Male', '2000-06-09', 'LAGOS', 'Single', 23, 'NIGERIA', 'Lagos', 'CHRISTIANITY', '08112345678', 'IKOTUN, LAGOS.', 'sanzamani@email.com', '8', '2', '96');

-- --------------------------------------------------------

--
-- Table structure for table `transapplydetails`
--

DROP TABLE IF EXISTS `transapplydetails`;
CREATE TABLE IF NOT EXISTS `transapplydetails` (
  `TRANSAPPLY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` int(20) NOT NULL,
  `MATRICNO` varchar(20) NOT NULL,
  `LNAME` varchar(200) NOT NULL,
  `FNAME` varchar(200) NOT NULL,
  `MNAME` varchar(200) NOT NULL,
  `SEX` varchar(7) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PROGRAMME` varchar(200) NOT NULL,
  `CONTACT_NO` varchar(20) NOT NULL,
  `TRANS_PROG` varchar(6) NOT NULL,
  `RECIPIENT_EMAIL` varchar(50) NOT NULL,
  `TRANS_TYPE` varchar(50) NOT NULL,
  `TRANS_NUMBER` varchar(200) NOT NULL,
  `APPLY_FEE` int(11) NOT NULL,
  `STATUS` text NOT NULL,
  PRIMARY KEY (`TRANSAPPLY_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transapplydetails`
--

INSERT INTO `transapplydetails` (`TRANSAPPLY_ID`, `IDNO`, `MATRICNO`, `LNAME`, `FNAME`, `MNAME`, `SEX`, `EMAIL`, `PROGRAMME`, `CONTACT_NO`, `TRANS_PROG`, `RECIPIENT_EMAIL`, `TRANS_TYPE`, `TRANS_NUMBER`, `APPLY_FEE`, `STATUS`) VALUES
(1, 3210085, 'F/ND/15/3210085', 'ZEEH', 'CHUKWUDI', 'CLINTON', 'MALE', 'zeeh@email.com', 'ND (COMPUTER SCIENCE) FULL TIME', '08176453413', 'ND', 'admissions@unilag.edu.ng', 'Local', 'F/ND/15/3210085_YCT201803243210085', 6000, 'Payment Confirmed'),
(2, 3210057, 'F/ND/15/3210057', 'DUJIN', 'SANMI', 'ZAMANI', 'Male', 'sanzamani@email.com', 'ND (COMPUTER SCIENCE) FULL TIME', '08175438515', 'ND', 'admissions@ui.edu.ng', 'Local', 'F/ND/15/3210057_YCT201804113210057', 6000, 'Payment Confirmed'),
(3, 3210062, 'F/ND/15/3210062', 'LAKIN', 'STEPHEN', 'TEGA', 'Male', 'steplakin@email.com', 'ND (COMPUTER SCIENCE) FULL TIME', '08077766645', 'ND', 'admissions@ui.edu.ng', 'Local', 'F/ND/15/3210062_YCT201804193210062', 6000, 'Payment Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `transcriptstatus`
--

DROP TABLE IF EXISTS `transcriptstatus`;
CREATE TABLE IF NOT EXISTS `transcriptstatus` (
  `TRANSSTATUS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` int(10) NOT NULL,
  `MATRICNO` varchar(200) NOT NULL,
  `FULLNAME` varchar(200) NOT NULL,
  `PROGRAMME` varchar(50) NOT NULL,
  `TRANSCRIPT_TYPE` varchar(7) NOT NULL,
  `TRANS_NUMBER` varchar(200) NOT NULL,
  `RECEPIENT_EMAIL` varchar(40) NOT NULL,
  `STATUS` varchar(50) NOT NULL,
  PRIMARY KEY (`TRANSSTATUS_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

DROP TABLE IF EXISTS `useraccounts`;
CREATE TABLE IF NOT EXISTS `useraccounts` (
  `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL,
  PRIMARY KEY (`ACCOUNT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`) VALUES
(1, 'Mr. Alaki', 'halaki@yahoo.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Lecturer'),
(2, 'Mrs. Okikiola F. M.', 'sademer@yahoo.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Lecturer'),
(3, 'Mr Admin', 'mradmin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
