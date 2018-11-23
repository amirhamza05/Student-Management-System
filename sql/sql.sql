-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 10:48 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admit_program`
--

CREATE TABLE `admit_program` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  `admit_date` datetime NOT NULL,
  `admit_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admit_program`
--

INSERT INTO `admit_program` (`id`, `student_id`, `program_id`, `batch_id`, `fee`, `admit_date`, `admit_by`) VALUES
(50, 10001, 8, 12, 4000, '2018-07-27 22:29:03', 3),
(18, 10049, 5, 2, 7500, '2018-07-25 23:03:57', 3),
(3, 10050, 2, 12, 17000, '2018-07-25 20:09:32', 3),
(4, 10050, 8, 11, 5000, '2018-07-25 20:09:50', 3),
(19, 10008, 3, 12, 13000, '2018-07-26 05:24:19', 3),
(15, 10049, 3, 12, 15000, '2018-07-25 22:59:57', 3),
(17, 10049, 2, 2, 17000, '2018-07-25 23:00:25', 3),
(52, 10035, 3, 12, 15000, '2018-08-01 11:16:44', 3),
(13, 10035, 6, 11, 3333, '2018-07-25 22:29:18', 3),
(21, 10008, 2, 1, 17000, '2018-07-26 09:30:15', 3),
(22, 10008, 5, 2, 7500, '2018-07-26 10:51:55', 3),
(25, 10008, 6, 11, 3333, '2018-07-26 10:55:00', 3),
(75, 10066, 3, 2, 15000, '2018-11-17 15:40:15', 3),
(27, 10011, 2, 1, 17000, '2018-07-26 14:10:56', 3),
(28, 10050, 5, 23, 7500, '2018-07-26 18:26:53', 3),
(49, 10050, 6, 12, 1700, '2018-07-27 22:27:33', 3),
(36, 10011, 4, 1, 57000, '2018-07-27 02:28:46', 3),
(37, 10011, 3, 2, 15000, '2018-07-27 02:29:46', 3),
(38, 10011, 8, 11, 5000, '2018-07-27 20:16:09', 3),
(40, 10003, 3, 12, 15000, '2018-07-27 20:19:59', 3),
(41, 10003, 5, 2, 7500, '2018-07-27 20:21:07', 3),
(43, 10003, 4, 1, 57000, '2018-07-27 20:21:49', 3),
(55, 10049, 8, 12, 3000, '2018-08-02 07:59:01', 3),
(76, 10049, 12, 1, 4000, '2018-11-19 00:42:16', 3),
(57, 10049, 4, 1, 56000, '2018-08-03 19:35:55', 3),
(59, 10051, 3, 2, 15000, '2018-08-08 16:18:08', 3),
(60, 10060, 3, 2, 15000, '2018-08-09 13:39:14', 3),
(61, 10060, 2, 1, 15000, '2018-08-12 09:07:17', 3),
(63, 10061, 3, 2, 15000, '2018-08-12 09:10:54', 3),
(64, 10061, 5, 2, 7500, '2018-08-13 12:29:46', 5),
(66, 10062, 2, 1, 17000, '2018-08-14 13:16:41', 3),
(67, 10062, 3, 11, 15000, '2018-08-14 13:17:30', 3),
(68, 10062, 5, 2, 7500, '2018-08-14 13:30:20', 5),
(69, 10064, 9, 16, 3000, '2018-08-23 09:01:38', 3),
(72, 10065, 3, 1, 15000, '2018-11-14 14:03:43', 3),
(73, 10065, 5, 11, 7400, '2018-11-14 14:06:13', 3);

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `start` text,
  `end` text NOT NULL,
  `day` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `name`, `start`, `end`, `day`) VALUES
(1, 'Prottasa', '8:20 AM', '10:20 AM', '1,3,4,5,'),
(2, 'Protigga', '7:20 AM', '8:40 AM', '1,'),
(11, 'Normal', 'dsaf', '8:30 AM', '1,3,'),
(12, 'tuhur', '7:30', '8:20', '1,2,3,'),
(13, 'test', '7 am', '8 am', '1,2,7'),
(22, 'aan', 'aab', 'sd', '1,2'),
(15, 'protassa', '7:00 AM', '10:20 AM', '4,6,'),
(16, 'gulap', '8:20 AM', '10: 00 am', '5'),
(17, 'hello', '8:30', '9:00', '1,2,'),
(18, 'hamza123', '8:00 AM', '10:20 AM', '1,'),
(19, 'test batch', 'Ex: 8:00 AM', 'Ex: 10:00 AM', '1'),
(20, 'test bangla', 'Ex: 8:00 AM', 'Ex: 10:00 AM', '1'),
(23, 'bbbasd', 'Ex: 8:00 AM', 'Ex: 10:00 PM', '1,4');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classid` int(11) NOT NULL,
  `classname` text NOT NULL,
  `subject_code` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classid`, `classname`, `subject_code`) VALUES
(1004, 'Five', NULL),
(1003, 'Four', '166,167,'),
(1002, 'Two', '155,166,'),
(1005, 'Six', '155,166,167,456,'),
(1006, 'seven', '155,'),
(1007, 'nine', '166,167,'),
(1008, 'ten (science)', '155,166,167,456,'),
(1009, 'eleven', '155,166,167,'),
(1010, 'XII', '155,166,167,');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `exam_name` text NOT NULL,
  `total` int(11) DEFAULT NULL,
  `mcq` int(11) DEFAULT NULL,
  `written` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `program_id`, `sub_id`, `exam_name`, `total`, `mcq`, `written`, `date`, `add_by`) VALUES
(1, 3, 13, 'Weekly Exam 1', 70, 30, 40, '2018-01-28 18:00:00', 3),
(4, 2, 20, 'Med exam 2', 70, 70, 0, '2018-01-28 18:00:00', 3),
(3, 3, 12, 'Physics Engenerring exam 1', 70, 30, 40, '2018-01-17 18:00:00', 3),
(11, 2, 4, 'MED Che 1', 50, 50, 0, '2018-03-27 18:00:00', 3),
(7, 4, 11, 'Eng Ex 1', 35, 35, 0, '2018-01-23 18:00:00', 3),
(8, 3, 4, 'Chem Model Test 2', 80, 50, 30, '2018-02-18 18:00:00', 3),
(9, 3, 12, 'Daily Exam Phy-01', 75, 75, 0, '2018-02-21 18:00:00', 3),
(10, 3, 4, 'Daily Exam Che 3', 70, 40, 30, '2018-02-20 18:00:00', 3),
(14, 8, 23, 'Phy 1', 70, 35, 35, '2018-04-16 18:00:00', 3),
(15, 8, 23, 'Phy 109 1', 100, 70, 30, '2018-05-22 18:00:00', 3),
(16, 3, 13, 'asdfasd', 100, 30, 70, '2018-05-23 18:00:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  `ad_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `description`, `date`, `ad_by`) VALUES
(1, 'Class Close', 'Hello Today Class Is Off Hello Today Class Is OffHello Today Class Is OffHello Today Class Is OffHello Today Class Is OffHello Today Class Is OffHello Today Class Is OffHello Today Class Is OffHello Today Class Is OffHello Today Class Is Off', '2018-03-28 00:00:00', 1),
(2, 'hello', ' hello hellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohello hellohellohellohellohello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello', '2018-03-15 00:00:00', 1),
(3, 'hello', 'hello test', '2018-03-05 00:00:00', 3),
(4, 'hello', 'hello test', '2018-03-05 00:00:00', 3),
(5, 'hello Boy', '{{student_name}} {{id}} {{nick_name}}', '2018-03-05 00:00:00', 3),
(6, 'fdgdfsg', '{{student_name}}', '2018-03-05 00:00:00', 3),
(7, 'xadsf', 'sdaf', '2018-03-05 00:00:00', 3),
(8, 'asdf', 'dsaf', '2018-03-05 00:00:00', 3),
(9, 'asdfsadfsdaf', 'dsafsdfasdasdf', '2018-03-05 00:00:00', 3),
(10, 'sdafsdf', 'sdafasdf', '2018-03-05 00:00:00', 3),
(11, 'dsafsd', 'sdaf', '2018-03-05 00:00:00', 3),
(12, 'hamza', 'amir', '2018-03-05 00:00:00', 3),
(13, 'sdaf', 'sdafsdaf', '2018-03-05 00:00:00', 3),
(14, 'Server Test', 'hello {{student_name}},\nYour id is {{id}}.\nServer Test is sucessfully working......', '2018-03-05 00:00:00', 3),
(15, 'jjj', 'dear {{nick_name}},\nyouugtt5ygty6u7u', '2018-03-27 00:00:00', 3),
(16, 'dfdf', 'dear {{nick_name}},\nyour coaching is off today', '2018-04-23 00:00:00', 3),
(17, 'Close', 'Your class is off today', '2018-04-25 00:00:00', 3),
(18, 'hgy', '{{nick_name}},\n{{id}}', '2018-05-13 00:00:00', 3),
(19, 'ghdfhd', 'dear {{student_name}},\nhbjfghf uhfgydf', '2018-05-13 00:00:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `paid` double NOT NULL,
  `next_date` date DEFAULT NULL,
  `date` datetime NOT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `student_id`, `paid`, `next_date`, `date`, `add_by`) VALUES
(81, 10007, 15, '2018-02-13', '2018-02-02 01:08:56', 5),
(13, 10003, 450, '2018-01-11', '2018-01-24 12:12:53', 1),
(69, 10006, 1000, '2018-01-03', '2018-01-24 12:22:41', 5),
(70, 10006, 10, '2018-01-10', '2018-01-24 12:42:14', 5),
(75, 10003, 1000, '2018-01-25', '2018-01-25 10:32:38', 5),
(99, 10037, 1000, '2018-03-12', '2018-03-12 04:52:17', 5),
(96, 10033, 7000, '2018-02-21', '2018-02-20 10:24:29', 5),
(15, 10003, 78, NULL, '2018-01-24 12:26:36', 1),
(16, 10003, 425, NULL, '2018-01-24 12:29:21', 1),
(17, 10003, 54, NULL, '2018-01-24 12:30:27', 1),
(78, 10007, 10000, NULL, '2018-01-29 04:32:48', 5),
(83, 10007, 100, '2018-02-21', '2018-02-02 01:12:53', 5),
(80, 10010, 7000, '2018-02-03', '2018-02-01 01:35:22', 5),
(82, 10007, 10, '2018-02-16', '2018-02-02 01:11:50', 5),
(22, 10003, 45, NULL, '2018-01-24 12:40:14', 1),
(23, 10003, 778, NULL, '2018-01-24 12:51:58', 1),
(24, 10003, 45, NULL, '2018-01-24 12:05:45', 1),
(77, 10008, 10000, '2018-01-31', '2018-01-27 10:04:39', 5),
(84, 10007, 15, '2018-02-15', '2018-02-02 01:25:24', 5),
(85, 10007, 200, '2018-02-09', '2018-02-02 01:26:38', 5),
(86, 10007, 100, '2018-02-14', '2018-02-02 01:27:37', 5),
(87, 10007, 100, '2018-02-08', '2018-02-02 01:28:28', 5),
(30, 10003, 457, '2018-01-04', '2018-01-24 12:36:16', 1),
(31, 10006, 1000, '2018-01-16', '2018-01-24 12:50:03', 1),
(32, 10003, 42, '2018-01-09', '2018-01-24 12:13:40', 1),
(33, 10003, 361, '2018-01-16', '2018-01-24 12:23:56', 1),
(34, 10003, 500, '2018-01-17', '2018-01-24 12:24:20', 1),
(35, 10003, 10, '2018-01-18', '2018-01-24 12:25:05', 1),
(36, 10003, 10, '2018-01-25', '2018-01-24 12:27:30', 1),
(37, 10003, 30, '2018-01-11', '2018-01-24 12:28:08', 1),
(38, 10003, 30, '2018-01-16', '2018-01-24 12:29:14', 1),
(39, 10003, 30, '2018-01-11', '2018-01-24 12:33:40', 1),
(40, 10003, 10, '2018-01-17', '2018-01-24 12:33:53', 1),
(41, 10003, 80, '2018-01-10', '2018-01-24 12:36:57', 1),
(42, 10003, 10, '2018-01-11', '2018-01-24 12:37:32', 1),
(43, 10003, 10, '2018-01-25', '2018-01-24 12:37:54', 1),
(44, 10003, 10, '2018-01-09', '2018-01-24 12:38:48', 1),
(45, 10003, 70, '2018-01-15', '2018-01-24 12:50:33', 1),
(46, 10003, 20, '2018-01-23', '2018-01-24 12:06:46', 1),
(100, 10037, 2000, '2018-03-19', '2018-03-12 04:18:21', 5),
(88, 10012, 10000, '2018-02-07', '2018-02-07 11:29:32', 5),
(49, 10002, 100, '2018-01-17', '2018-01-24 12:18:04', 1),
(50, 10004, 100, '2018-01-23', '2018-01-24 12:23:55', 1),
(51, 10005, 100, '2018-01-25', '2018-01-24 12:25:05', 1),
(101, 10037, 100, '2018-03-30', '2018-03-12 04:24:06', 5),
(103, 10037, 400, '2018-04-02', '2018-03-12 04:50:27', 5),
(54, 10003, 10, '2018-01-23', '2018-01-24 12:35:48', 5),
(55, 10003, 10, '2018-01-03', '2018-01-24 12:35:59', 5),
(71, 10003, 380, '2018-01-23', '2018-01-24 12:45:43', 5),
(106, 10037, 100, '2018-03-22', '2018-03-12 04:26:04', 5),
(91, 10022, 1700, '2018-02-19', '2018-02-11 02:35:15', 5),
(92, 10029, 10000, '2018-02-17', '2018-02-16 06:33:44', 5),
(93, 10029, 2000, '2018-02-22', '2018-02-16 06:34:08', 5),
(94, 10029, 3000, NULL, '2018-02-16 06:34:33', 5),
(107, 10037, 100, '2018-03-07', '2018-03-12 04:27:39', 5),
(108, 10037, 100, '2018-03-08', '2018-03-12 04:28:05', 5),
(109, 10037, 100, '2018-03-28', '2018-03-12 04:28:36', 5),
(110, 10036, 100, '2018-03-22', '2018-03-12 04:33:30', 5),
(111, 10036, 100, '2018-03-07', '2018-03-12 04:33:47', 5),
(112, 10036, 100, '2018-03-15', '2018-03-12 04:34:49', 5),
(113, 10036, 700, '2018-03-31', '2018-03-12 04:39:58', 5),
(114, 10036, 6500, NULL, '2018-03-12 04:41:24', 5),
(115, 10038, 2000, '2018-03-07', '2018-03-28 11:19:11', 5),
(116, 10038, 1333, NULL, '2018-03-28 11:20:32', 5),
(120, 10041, 3000, '2018-05-14', '2018-05-13 06:46:56', 5),
(121, 10042, 2000, '2018-05-14', '2018-05-13 07:13:44', 5),
(122, 10042, 2000, '2018-05-17', '2018-05-13 07:14:55', 5),
(124, 10042, 1000, '2018-05-14', '2018-05-13 07:15:58', 5),
(125, 10043, 5000, '2018-05-17', '2018-05-13 07:23:36', 5),
(126, 10043, 10000, NULL, '2018-05-13 07:24:16', 5),
(127, 10044, 4000, '2018-05-22', '2018-05-13 07:41:13', 5),
(128, 10044, 1000, NULL, '2018-05-13 07:41:25', 5),
(129, 10045, 15000, '2018-05-24', '2018-05-13 07:52:05', 5),
(130, 10045, 2000, NULL, '2018-05-13 07:52:16', 5),
(131, 10046, 3000, '2018-05-16', '2018-05-13 07:59:44', 5),
(132, 10046, 2000, NULL, '2018-05-13 07:59:54', 5),
(134, 10048, 5000, '2018-06-05', '2018-06-19 02:39:54', 5);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `subject` text,
  `batch` text,
  `fee` double DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `monthly_fee` int(11) NOT NULL DEFAULT '0',
  `add_by` int(11) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `name`, `start`, `end`, `subject`, `batch`, `fee`, `type`, `monthly_fee`, `add_by`, `date`) VALUES
(4, 'Shakib', '2018-01-12', '2018-01-18', '11', '15,1', 500, 2, 0, 4, '2018-01-25 00:00:00'),
(2, 'Medical', '2018-01-18', '2018-03-08', '13,11,4,', '1,2,12,', 17000, 1, 0, 4, '2018-08-18 00:00:00'),
(3, 'Engnerring Admission Program 2018', '2018-11-01', '2019-06-30', '21,13,11', '12,11,2,1', 15000, 2, 500, 4, '2018-03-03 00:00:00'),
(5, 'Academic Program', '2018-03-05', '2018-03-05', '28,27', '23', 7500, 1, 0, 4, '2018-11-18 00:00:00'),
(8, 'SSC Program 2018', '2018-04-01', '2019-06-30', '23,21,13,11,4', '12,11', 5000, 2, 400, 4, '2018-04-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `mcq` double DEFAULT NULL,
  `written` double DEFAULT NULL,
  `total` double NOT NULL,
  `date` datetime NOT NULL,
  `add_by` int(11) NOT NULL,
  `sms` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `exam_id`, `student_id`, `mcq`, `written`, `total`, `date`, `add_by`, `sms`) VALUES
(89, 6, 10008, 0, 21, 21, '2018-02-04 00:00:00', 3, 1),
(2, 3, 10002, 15, 17, 32, '2018-01-30 00:00:00', 3, 0),
(121, 10, 10030, 40, 25, 65, '2018-02-20 00:00:00', 3, 1),
(34, 7, 10006, 34, 0, 34, '2018-01-31 00:00:00', 3, 0),
(44, 8, 10008, 1, 1, 2, '2018-02-01 00:00:00', 3, 1),
(131, 11, 10001, 35, 0, 35, '2018-04-24 00:00:00', 3, 1),
(120, 10, 10033, 30, 40, 70, '2018-02-20 00:00:00', 3, 1),
(24, 3, 10003, 35.5, 15.3, 50.8, '2018-01-30 00:00:00', 3, 0),
(97, 9, 10023, 50.5, 0, 50.5, '2018-02-19 00:00:00', 3, 0),
(22, 3, 10005, 10, 40, 50, '2018-01-30 00:00:00', 3, 0),
(18, 3, 10001, 50, 0, 50, '2018-01-30 00:00:00', 3, 0),
(133, 15, 10042, 62, 4, 66, '2018-05-13 00:00:00', 3, 1),
(119, 6, 10030, 0, 20.15, 20.15, '2018-02-19 00:00:00', 3, 1),
(128, 12, 10038, 18, 15, 33, '2018-03-27 00:00:00', 3, 1),
(138, 1, 10048, 19, 40, 59, '2018-06-19 00:00:00', 3, 1),
(134, 16, 10043, 25, 68, 93, '2018-05-13 00:00:00', 3, 0),
(135, 15, 10044, 33, 6, 39, '2018-05-13 00:00:00', 3, 1),
(136, 15, 10046, 30, 20, 50, '2018-05-13 00:00:00', 3, 1),
(139, 1, 10049, 45, 10, 55, '2018-06-19 00:00:00', 3, 1),
(140, 11, 10050, 40, 0, 40, '2018-07-10 00:00:00', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `set_payment`
--

CREATE TABLE `set_payment` (
  `id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  `add_by` int(11) NOT NULL,
  `last_update` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_payment`
--

INSERT INTO `set_payment` (`id`, `program_id`, `year`, `month`, `fee`, `add_by`, `last_update`) VALUES
(5, 8, 2018, 6, 600, 3, 3),
(4, 8, 2018, 5, 600, 3, 3),
(6, 8, 2018, 6, 700, 3, 5),
(7, 8, 2018, 7, 1000, 3, 3),
(8, 8, 2018, 7, 400, 3, 3),
(9, 9, 2018, 7, 600, 3, 3),
(10, 9, 2018, 9, 600, 3, 3),
(11, 8, 2018, 9, 900, 3, 3),
(12, 8, 2018, 10, 600, 3, 3),
(18, 3, 2018, 10, 600, 3, 3),
(17, 3, 2018, 10, 700, 3, 3),
(16, 3, 2018, 10, 600, 3, 3),
(19, 8, 2018, 12, 0, 3, 3),
(20, 8, 2018, 4, 50, 3, 3),
(21, 3, 2018, 11, 400, 3, 3),
(22, 8, 2019, 1, 400, 3, 3),
(23, 8, 2019, 2, 700, 3, 3),
(24, 4, 2018, 1, 0, 3, 3),
(25, 8, 2018, 8, 200, 3, 3),
(26, 3, 2019, 1, 500, 3, 3),
(27, 3, 2018, 12, 700, 3, 3),
(28, 3, 2019, 2, 300, 3, 3),
(29, 8, 2019, 5, 500, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `father_name` text NOT NULL,
  `mother_name` text NOT NULL,
  `email` text,
  `photo` text NOT NULL,
  `personal_mobile` int(11) DEFAULT '0',
  `father_mobile` int(11) DEFAULT NULL,
  `mother_mobile` int(11) DEFAULT NULL,
  `nick` text NOT NULL,
  `program` int(11) DEFAULT NULL,
  `batch` int(11) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `address` text,
  `birth_day` datetime DEFAULT CURRENT_TIMESTAMP,
  `gender` text,
  `religion` text,
  `school` text,
  `ssc_rool` int(11) DEFAULT NULL,
  `ssc_reg` int(11) DEFAULT NULL,
  `ssc_board` text,
  `ssc_result` double DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `father_name`, `mother_name`, `email`, `photo`, `personal_mobile`, `father_mobile`, `mother_mobile`, `nick`, `program`, `batch`, `fee`, `address`, `birth_day`, `gender`, `religion`, `school`, `ssc_rool`, `ssc_reg`, `ssc_board`, `ssc_result`, `date`) VALUES
(10001, 'Sk.Amir Hamza', 'sadf', 'sdaf', 'sdaf', '10001.PNG', 1777564786, 62641524, 215, 'Hamza', 2, 12, 7000, 'sadf', '2018-01-25 00:00:00', 'Male', 'Muslim', 'sdff', 414151, 231, '455', 654, '2018-01-19'),
(10002, 'Sk.Hamza', 'asdf', 'sdfa', '465', 'avatar.png', 1991223020, 0, 456, 'sdaf', 2, 1, 7000, 'sdf', '2018-01-17 00:00:00', 'Male', 'Muslim', 'sadf', 4000, 4145, '12', 21, '2018-01-19'),
(10003, 'Sk.Fardin', 'sdaf', 'sfa', 'sdfdfsg', '10003.jpg', 1849668726, 53, 56576, 'Fardin', 3, 12, 6000, 'dfsg', '2018-01-18 00:00:00', 'Male', 'Muslim', 'sadf', 53, 56, '563', 635, '2018-01-19'),
(10030, 'kala mia', 'sadf', 'sadf', '', 'avatar.png', 1991223020, 0, 0, 'kala', 3, 1, 15000, '', '2018-02-20 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-19'),
(10005, 'sdaf', 'sdfa', 'sdfa', 'zfgsd', 'avatar.png', 4654, 456, 456, 'sdaf', 3, 12, 6000, 'safd', '2018-01-19 00:00:00', 'Male', 'Muslim', 'sdaf', 456, 456, '546', 4546, '2018-01-19'),
(10006, 'Mash Mash Mash Mash Mash Mash Mash Mash ', 'dasf', 'sadf', 'judjhfd@jksdfh', '10006.jpg', 1780520287, 215, 521, 'Jugol', 4, 1, 57000, 'jugol', '2018-01-17 00:00:00', 'Male', 'Muslim', 'sdfa', 123, 123, '132', 45, '2018-01-24'),
(10007, 'Al Nahian', 'saf', 'sdaf', 'sdaf', '10007.jpg', 1777564786, 456, 465, 'Nahian', 2, 1, 17000, 'sda', '2018-01-16 00:00:00', 'Male', 'Hindu', 'eads', 645, 45, '456', 456, '2018-01-25'),
(10008, 'Musfiqur Rahim', 'eewt', 'twe', 'dh', '10008.jpeg', 1777564786, 75, 789, 'Musfiq', 3, 12, 16000, 'fgdh', '2018-01-18 00:00:00', 'Male', 'Muslim', 'rtyrt', 546, 456, '465', 456, '2018-01-27'),
(10009, 'Nasir Husen', 'Nasir', 'sadf', 'sdaf', 'avatar.png', 1777564786, 657, 746, 'Nasir', 3, 11, 16000, 'saf', '2018-01-15 00:00:00', 'Male', 'Muslim', 'sadf', 465, 456, '546', 456, '2018-01-27'),
(10010, 'Tibra Maz', 'sdaf', 'sdfa', 'asdf', '10010.png', 1715214150, 535, 23, 'Arka', 3, 12, 15000, 'sadfdfs', '2018-02-06 00:00:00', 'Male', 'Hindu', 'sdafd', 4000, 21332, '213', 213, '2018-02-01'),
(10011, 'Sk.Amir Hamza', 'test', 'test', 'sk.amirhamza@gmail.com', '10011.jpg', 175454, 18451, 5656, 'Hamza', 3, 1, 15000, 'Dhaka', '2018-10-19 00:00:00', 'Male', 'Muslim', 'sdaf', 45, 546, 'dhaka', 546, '2018-02-02'),
(10012, 'Rajib vai', 'uiooi', 'ouo', 'yukyhg', 'avatar.png', 1786376633, 42752, 45745, 'Rajib', 2, 2, 17000, 'iuyoui', '2018-02-08 00:00:00', 'Male', 'Muslim', 'oyo', 107427, 4275, 'uuyt', 124, '2018-02-07'),
(10013, 'fdg', 'dsf', 'sadf', '', 'avatar.png', 0, 123, 123, 'dsf', 3, 1, 15000, '', '2018-02-07 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10014, 'hamza3', 'dsf', 'sadf', '', 'avatar.png', 0, 123, 123, 'dsf', 2, 1, 17000, '', '2018-02-07 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10015, 'hamza3', 'dsf', 'sadf', '', 'avatar.png', 0, 0, 0, 'dsf', 3, 1, 15000, '', '2018-02-07 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10016, 'fgh', 'fgh', 'fg', '', 'avatar.png', 0, 0, 0, 'gh', 3, 1, 15000, 'dhaka', '2018-02-11 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10017, 'fgh', 'fgh', 'fg', '', 'avatar.png', 0, 0, 0, 'gh', 3, 1, 15000, 'dhaka', '2018-02-11 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10018, 'sdf', 'sdf', 'sdf', '', 'avatar.png', 0, 0, 0, 'sdf', 3, 1, 15000, '', '2018-02-14 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10019, 'sdf', 'sdf', 'sdf', '', 'avatar.png', 0, 0, 0, 'sdf', 3, 1, 15000, '', '2018-02-14 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10020, 'sdf', 'sdf', 'sdf', '', 'avatar.png', 0, 0, 0, 'sdf', 2, 1, 17000, '', '2018-02-14 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10021, 'sdf', 'sdf', 'sdf', '', 'avatar.png', 0, 0, 0, 'sdf', 3, 1, 15000, '', '2018-02-14 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10022, 'sdf', 'sdf', 'sdf', '', 'avatar.png', 0, 0, 0, 'sdf', 3, 1, 15000, '', '2018-02-14 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10023, 'amir hamza', 'ds', 'sdf', 'fg', 'avatar.png', 1991223020, 0, 1991223020, 'hamza', 3, 1, 15000, '', '2018-02-15 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10024, 'sasfd', 'sda', 'sdaf', '', '10024.jpg', 1991223020, 0, 0, 'sdf', 2, 1, 17000, '', '2018-02-12 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10025, 'hamza', 'sdf', 'sdf', '', '10025.jpg', 1991223020, 0, 0, 'sdaf', 3, 1, 15000, '', '2018-02-14 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 4.34, '2018-02-11'),
(10026, 'dsafdsa', 'sdf', 'sdf', '', '10026.jpg', 0, 0, 0, 'dsfa', 3, 1, 15000, '', '2018-02-14 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10027, 'sdf', 'sdf', 'sfa', '', 'avatar.png', 0, 0, 0, 'sdf', 3, 1, 15000, '', '2018-02-01 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10036, 'Rakib Mia', 'saf', 'sdaf', '', 'avatar.png', 1991223020, 1777564786, 0, 'Rakib', 5, 12, 7500, '', '2018-03-09 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-03-05'),
(10029, 'fahim mur', 'sdaf', 'sadf', '', 'avatar.png', 152465456, 0, 0, 'fahim', 3, 1, 15000, '', '2018-02-15 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-16'),
(10037, 'Karim Mia', 'sdf', 'sdaf', '', 'avatar.png', 1991223020, 0, 0, 'Karim', 5, 12, 7500, '', '2018-03-06 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-03-05'),
(10033, 'Mukles Mia', 'af', 'sdf', 'tamimhak777@gmail.com', '10033.jpg', 1772099282, 1991223020, 1707515751, 'Mukles Mia', 3, 1, 15000, '152, Arambag', '2018-02-21 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-20'),
(10034, 'Mannan Omi', 'sdfsdaf', 'saf', '', 'avatar.png', 1684473273, 0, 0, 'Omi', 3, 1, 15000, '', '2017-07-01 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-03-03'),
(10035, 'server test', 'sf', 'sdf', 'sk.amirhaza@gmail.com', '10035.PNG', 0, 1777564758, 0, 'server test', 3, 2, 15000, 'habiganj', '2018-03-01 00:00:00', 'Male', 'Muslim', 'fgsdfg', 54545, 4545, 'Sylhet', 4.17, '2018-03-05'),
(10038, 'shakib hassan', 'tgr', 'fd', 'grf', 'avatar.png', 1683408675, 4, 1, 'shakib', 6, 11, 3333, 'hgh', '2018-03-14 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-03-27'),
(10066, 'Sk.Amir Hamza', '', '', 'sk.amirhamza@gmail.com', '10066.PNG', 1991223020, 0, 0, 'Hamza', 2, 1, 1500, 'Dhaka', '2018-11-15 00:00:00', 'Male', 'Muslim', '', 0, 0, 'dhaka', 0, '2018-11-17'),
(10049, 'Fardin', 'sd', 'd', '', '10049.png', 1991223020, 0, 1731133913, 'Fardin', 3, 12, 15000, '', '2018-06-15 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-06-19'),
(10041, 'test abs', 'd', 'd', '', 'avatar.png', 0, 0, 0, 'abc', 8, 12, 5000, '', '2018-05-16 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13'),
(10042, 'Test 1263', 'd', 'd', '', 'avatar.png', 0, 0, 0, 'test', 8, 11, 5000, '', '2018-05-17 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13'),
(10043, 'shiddharto', 'test', 'test', '', 'avatar.png', 0, 0, 0, 'test', 3, 1, 15000, '', '2018-05-16 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13'),
(10044, 'Anik', 'sf', 'df', '', 'avatar.png', 0, 0, 0, 'anik', 8, 12, 5000, '', '2018-05-17 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13'),
(10045, 'Abdul jabbar', 'test', 'test', '', 'avatar.png', 0, 0, 0, 'chesra', 2, 1, 17000, '', '2018-05-24 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13'),
(10046, 'Test 123', 'd', 'd', '', 'avatar.png', 0, 0, 0, 'test', 8, 12, 5000, '', '2018-05-24 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13'),
(10048, 'RTRTR5', 'fhs', 'fhwiopefjwo', '', 'avatar.png', 1787563057, 0, 0, 'bappy', 3, 1, 15000, 'habiganj', '2018-06-21 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-06-19'),
(10050, 'monirr', '', '', '', '10050.jpg', 1707515751, 0, 0, 'monir', 2, 2, 17000, '152, Arambagg', '2018-08-09 00:00:00', 'Male', 'Muslim', '', 0, 0, 'Dhaka', 0, '2018-07-10'),
(10051, 'server test', 'dsf', 'sdf', '', '10051.jpg', 0, 0, 0, 'test', 3, 1, 15000, '', '2018-08-23 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10052, 'fdg', '', '', '', 'avatar.png', 0, 0, 0, 'fdsg', 2, 1, 17000, '', '2018-08-15 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10053, 'test1', 'sdf', 'sdf', '', '10053.jpg', 0, 0, 0, 'test', 2, 1, 17000, '', '2018-08-09 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10054, 'asdf', '', '', '', 'avatar.png', 0, 0, 0, 'afs', 2, 1, 1500, '', '2018-08-22 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10055, 'sdfgdfg', '', '', '', 'avatar.png', 0, 0, 0, 'dfg', 2, 1, 1500, '', '2018-08-11 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10056, 'saf', '', '', '', 'avatar.png', 0, 0, 0, 'sdaf', 2, 1, 1500, '', '2018-08-17 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10057, 'saf', '', '', '', 'avatar.png', 0, 0, 0, 'sdaf', 2, 1, 1500, '', '2018-08-17 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10058, 'amir hamza', 'dsf', 'sdfg', 'sk.amirhamza@gmail.com', '10058.jpg', 1991223020, 456, 5466, 'Hamza', 2, 1, 1500, 'Dhaka', '2018-08-17 00:00:00', 'Male', 'Muslim', '', 0, 0, 'dhaka', 0, '2018-08-08'),
(10059, 'sdaf', '', '', '', 'avatar.png', 0, 0, 0, 'sdf', 2, 1, 1500, '', '2018-08-23 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10060, 'Test Ham1', '', '', '', '10060.jpg', 0, 0, 0, 'ham', 2, 1, 1500, '', '2018-08-16 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-09'),
(10061, 'test3', '', '', '', 'avatar.png', 0, 0, 0, 'test prac', 2, 1, 1500, '', '2018-08-23 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-12'),
(10062, 'Akter Ahmed', '', '', '', '10062.PNG', 0, 0, 0, 'Akter', 2, 1, 1500, '', '2018-10-09 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-14'),
(10063, 'Test 15', '', '', '', 'avatar.png', 0, 0, 0, 'test', 2, 1, 1500, '', '2018-08-15 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-18'),
(10064, 'Alnor', '', '', '', 'avatar.png', 0, 0, 0, 'alnor', 2, 1, 1500, '', '2018-08-03 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-23'),
(10065, 'Rahim', '', '', '', 'avatar.png', 0, 0, 0, 'Rahim', 2, 1, 1500, '', '2018-10-12 00:00:00', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `student_id`
--

CREATE TABLE `student_id` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_id`
--

INSERT INTO `student_id` (`id`, `date`) VALUES
(10026, '2018-02-11'),
(10027, '2018-02-11'),
(10028, '2018-02-15'),
(10029, '2018-02-16'),
(10030, '2018-02-19'),
(10031, '2018-02-19'),
(10032, '2018-02-19'),
(10033, '2018-02-20'),
(10034, '2018-03-03'),
(10035, '2018-03-05'),
(10036, '2018-03-05'),
(10037, '2018-03-05'),
(10038, '2018-03-27'),
(10039, '2018-04-23'),
(10040, '2018-04-25'),
(10041, '2018-05-13'),
(10042, '2018-05-13'),
(10043, '2018-05-13'),
(10044, '2018-05-13'),
(10045, '2018-05-13'),
(10046, '2018-05-13'),
(10047, '2018-05-13'),
(10048, '2018-06-19'),
(10049, '2018-06-19'),
(10050, '2018-07-10'),
(10051, '2018-08-08'),
(10052, '2018-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `sub_name` text NOT NULL,
  `sub_code` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `sub_name`, `sub_code`) VALUES
(13, 'biology', '123'),
(11, 'English', '101'),
(4, 'Chemistry', '457'),
(20, 'STA 10', '123'),
(12, 'Physics', '122'),
(26, 'Amar Bangla', '120'),
(21, 'Higher Math', '125'),
(22, 'CSE', '54'),
(23, 'Physics 109', '154'),
(24, 'CSE 207', '154'),
(25, 'Data structure', 'CSE 207'),
(27, 'Test123', '1245'),
(28, 'cse 227', '126'),
(1, 'test', '456');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`id`, `user`, `pid`, `status`, `date`) VALUES
(1, 1, 1, 0, '2018-01-21 21:46:58'),
(2, 2, 1, 0, '2018-01-21 21:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `bg_color` text NOT NULL,
  `sidebar_hover` text NOT NULL,
  `sidebar_list` text NOT NULL,
  `sidebar_list_hover` text NOT NULL,
  `font_color` text NOT NULL,
  `date` date NOT NULL,
  `added_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `name`, `bg_color`, `sidebar_hover`, `sidebar_list`, `sidebar_list_hover`, `font_color`, `date`, `added_by`) VALUES
(1, 'Default', '#2E363F', '#2A2D35', '#394152', '#313847', '#ffffff', '2018-06-13', 1),
(2, 'Red', '#CF0A2F', '#93021E', '#B54B5F', '#E33A5A', '#ffffff', '2018-06-13', 3),
(3, 'Blue', '#AB2567', '#AB2567', '#AB2567', '#AB2567', '#ffffff', '2018-06-13', 3),
(4, 'Green', '#088730', '#088730', '#4CAB41', '#1BAB2F', '#FFFFFF', '2018-06-13', 3),
(5, 'Yello', '#AB9803', '#AB9803', '#A3AB2E', '#AB9C37', '#000000', '2018-06-13', 3),
(6, 'Black', '#0F0000', '#1C0611', '#260817', '#2B091A', '#FFFFFF', '2018-06-13', 3),
(7, 'Orange', '#E74C3C', '#C0392B', '#E67E22', '#D35400', '#FFFFFF', '2018-06-13', 3),
(8, 'White', '#B0B0B0', '#CCC5CB', '#F5EEF4', '#D4CDD3', '#000000', '2018-06-13', 3),
(9, 'Pink', '#ED5FE9', '#ED3BA1', '#ED98D4', '#ED72CD', '#FFFFFF', '2018-06-13', 3),
(10, 'Blue1', '#564C9E', '#724EED', '#907EED', '#5867ED', '#FFFFFF', '2018-06-14', 3),
(11, 'normal', '#EDE6EC', '#EDE6EC', '#EDE6EC', '#EDE6EC', '#EDE6EC', '2018-06-15', 3),
(12, 'Akasi', '#133F42', '#1E686E', '#208A9E', '#2E9BA3', '#FFFFFF', '2018-06-16', 3),
(18, 'Test', '#314B85', '#EDE6EC', '#EDE6EC', '#EDE6EC', '#EDE6EC', '2018-11-15', 3),
(14, 'Deep Rose', '#C44569', '#EDE6EC', '#EDE6EC', '#EDE6EC', '#FFFFFF', '2018-06-21', 3),
(15, 'Purple Corallite', '#574B90', '#EDE6EC', '#EDE6EC', '#EDE6EC', '#FFFFFF', '2018-06-21', 3),
(17, 'Red Color', '#A32929', '#6DEDC2', '#EDE6EC', '#EDE6EC', '#EDE6EC', '2018-10-08', 3),
(19, 'Google color', '#673AB7', '#EDC5D2', '#EDEDED', '#EDE6EC', '#FFFFFF', '2018-11-21', 3),
(20, 'Google Red', '#DB4437', '#EDE6EC', '#EDE6EC', '#EDE6EC', '#FFFFFF', '2018-11-21', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uname` text NOT NULL,
  `fname` text,
  `photo` text NOT NULL,
  `gender` text NOT NULL,
  `email` text,
  `phone` int(11) DEFAULT NULL,
  `address` text,
  `pass` varchar(100) NOT NULL,
  `permit` int(11) NOT NULL DEFAULT '0',
  `theme` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `fname`, `photo`, `gender`, `email`, `phone`, `address`, `pass`, `permit`, `theme`) VALUES
(3, 'hamza05', 'Sk.Amir Hamza', 'user_3.jpg', 'Male', 'hamza@gmail.com', 1991223020, 'Habiganj', '1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599', 1, 12),
(2, 'shakib', 'all hassan', 'avatar.png', '', 'sk.amirhamza1@gmail.com', 177756478, '', '123', 1, 1),
(5, 'rahim', 'Musfiqur Rahim', 'user_5.jpg', 'Male', 'rahim@gmail.com', 17841561, 'Dhaka', '1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599', 1, 1),
(7, 'admin', 'amir hamza', 'avatar.png', '', 'sf', 32154, '', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admit_program`
--
ALTER TABLE `admit_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_payment`
--
ALTER TABLE `set_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_id`
--
ALTER TABLE `student_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
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
-- AUTO_INCREMENT for table `admit_program`
--
ALTER TABLE `admit_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `classid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `set_payment`
--
ALTER TABLE `set_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10067;
--
-- AUTO_INCREMENT for table `student_id`
--
ALTER TABLE `student_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10053;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1239;
--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
