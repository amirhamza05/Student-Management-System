-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 12:57 AM
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
  `admit_date` datetime NOT NULL,
  `admit_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admit_program`
--

INSERT INTO `admit_program` (`id`, `student_id`, `program_id`, `batch_id`, `admit_date`, `admit_by`) VALUES
(50, 10001, 8, 12, '2018-07-27 22:29:03', 3),
(18, 10049, 5, 2, '2018-07-25 23:03:57', 3),
(3, 10050, 2, 12, '2018-07-25 20:09:32', 3),
(4, 10050, 8, 11, '2018-07-25 20:09:50', 3),
(19, 10008, 3, 12, '2018-07-26 05:24:19', 3),
(15, 10049, 3, 12, '2018-07-25 22:59:57', 3),
(17, 10049, 2, 2, '2018-07-25 23:00:25', 3),
(52, 10035, 3, 12, '2018-08-01 11:16:44', 3),
(13, 10035, 6, 11, '2018-07-25 22:29:18', 3),
(21, 10008, 2, 1, '2018-07-26 09:30:15', 3),
(22, 10008, 5, 2, '2018-07-26 10:51:55', 3),
(25, 10008, 6, 11, '2018-07-26 10:55:00', 3),
(75, 10066, 3, 2, '2018-11-17 15:40:15', 3),
(27, 10011, 2, 1, '2018-07-26 14:10:56', 3),
(28, 10050, 5, 23, '2018-07-26 18:26:53', 3),
(49, 10050, 6, 12, '2018-07-27 22:27:33', 3),
(36, 10011, 4, 1, '2018-07-27 02:28:46', 3),
(37, 10011, 3, 2, '2018-07-27 02:29:46', 3),
(38, 10011, 8, 11, '2018-07-27 20:16:09', 3),
(40, 10003, 3, 12, '2018-07-27 20:19:59', 3),
(41, 10003, 5, 2, '2018-07-27 20:21:07', 3),
(43, 10003, 4, 1, '2018-07-27 20:21:49', 3),
(55, 10049, 8, 12, '2018-08-02 07:59:01', 3),
(76, 10049, 12, 1, '2018-11-19 00:42:16', 3),
(57, 10049, 4, 1, '2018-08-03 19:35:55', 3),
(59, 10051, 3, 1, '2018-08-08 16:18:08', 3),
(60, 10060, 3, 2, '2018-08-09 13:39:14', 3),
(61, 10060, 2, 1, '2018-08-12 09:07:17', 3),
(63, 10061, 3, 2, '2018-08-12 09:10:54', 3),
(64, 10061, 5, 2, '2018-08-13 12:29:46', 5),
(66, 10062, 2, 1, '2018-08-14 13:16:41', 3),
(67, 10062, 3, 11, '2018-08-14 13:17:30', 3),
(68, 10062, 5, 2, '2018-08-14 13:30:20', 5),
(69, 10064, 9, 16, '2018-08-23 09:01:38', 3),
(72, 10065, 3, 1, '2018-11-14 14:03:43', 3),
(73, 10065, 5, 11, '2018-11-14 14:06:13', 3),
(78, 10050, 5, 12, '2018-11-27 00:00:00', 3),
(79, 10048, 8, 12, '2018-12-02 17:22:17', 3),
(80, 10048, 5, 23, '2018-12-02 17:23:26', 3),
(81, 10048, 5, 23, '2018-12-02 17:23:29', 3),
(82, 10048, 4, 1, '2018-12-02 17:25:30', 3),
(83, 10048, 3, 12, '2018-12-02 17:39:49', 3),
(84, 10048, 2, 1, '2018-12-02 17:40:38', 3),
(85, 10046, 8, 12, '2018-12-02 18:58:11', 3),
(86, 10046, 5, 23, '2018-12-02 18:59:27', 3),
(87, 10046, 3, 12, '2018-12-02 21:09:29', 3),
(88, 10050, 4, 1, '2018-12-03 00:24:02', 3),
(89, 10052, 8, 12, '2018-12-03 00:24:20', 3),
(90, 10052, 3, 12, '2018-12-03 00:24:34', 3),
(91, 10052, 5, 23, '2018-12-03 09:35:55', 3),
(92, 10052, 2, 1, '2018-12-03 18:46:09', 3),
(93, 10036, 8, 11, '2018-12-06 17:20:54', 3),
(94, 10067, 5, 23, '2018-12-07 19:09:29', 3),
(95, 10067, 8, 12, '2018-12-10 03:47:14', 7),
(96, 10067, 3, 12, '2018-12-10 03:47:51', 7),
(97, 10001, 5, 23, '2018-12-10 18:22:36', 7),
(98, 10068, 13, 23, '2018-12-11 19:00:28', 7),
(99, 10051, 13, 23, '2018-12-11 19:01:33', 7),
(100, 10069, 13, 23, '2018-12-11 19:21:01', 7),
(101, 10070, 13, 23, '2018-12-11 19:24:33', 7),
(102, 10070, 5, 23, '2018-12-11 19:29:08', 7),
(103, 10051, 8, 12, '2018-12-11 23:41:03', 3);

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
(23, 'Section 1', '8:00 AM', '1:00 PM', '1,4,5');

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
-- Table structure for table `expence`
--

CREATE TABLE `expence` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `amount` int(11) NOT NULL,
  `notes` text,
  `add_by` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expence`
--

INSERT INTO `expence` (`id`, `name`, `amount`, `notes`, `add_by`, `date`) VALUES
(3, 'table chair', 180, '', 3, '2018-12-14 04:03:11'),
(2, 'Chair', 6000, 'chair', 3, '2018-12-14 03:16:14'),
(4, 'book', 7000, '', 3, '2018-12-14 06:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `expence_category`
--

CREATE TABLE `expence_category` (
  `id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expence_category`
--

INSERT INTO `expence_category` (`id`, `category_name`, `add_by`) VALUES
(1, ' Buying benches for students', 3),
(2, 'Tables and chairs for teachers', 3);

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
(8, 'SSC Program 2018', '2018-04-01', '2019-06-07', '23,21,13,11,4', '12,11', 5000, 2, 400, 4, '2018-04-25 00:00:00'),
(13, 'Class One', '2019-01-01', '2019-12-31', '26,21,11', '23', 4000, 2, 1000, 7, '2018-12-11 19:00:08');

-- --------------------------------------------------------

--
-- Table structure for table `receive_payment`
--

CREATE TABLE `receive_payment` (
  `id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `sms` int(11) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receive_payment`
--

INSERT INTO `receive_payment` (`id`, `payment_id`, `pay`, `sms`, `date`, `add_by`) VALUES
(13, 4, 250, 0, '2018-11-29 07:30:23', 3),
(17, 1, 100, 0, '2018-11-29 07:33:45', 3),
(3, 1, 100, 0, '2018-11-28 22:53:21', 3),
(4, 2, 1400, 0, '2018-11-28 22:53:59', 3),
(5, 2, 100, 0, '2018-11-28 22:54:18', 3),
(6, 14, 600, 0, '2018-11-28 23:06:33', 3),
(7, 14, 100, 0, '2018-11-28 23:06:46', 3),
(8, 14, 7000, 0, '2018-11-28 23:06:58', 3),
(9, 3, 200, 0, '2018-11-28 23:09:42', 3),
(12, 4, 200, 0, '2018-11-29 07:30:18', 3),
(11, 12, 300, 0, '2018-11-29 07:25:11', 3),
(15, 4, 250, 0, '2018-11-29 07:30:42', 3),
(16, 12, 3200, 0, '2018-11-29 07:33:17', 3),
(18, 15, 500, 0, '2018-11-29 07:37:04', 3),
(19, 1, 2100, 0, '2018-11-29 08:13:22', 3),
(20, 15, 300, 0, '2018-11-29 12:23:05', 3),
(21, 15, 200, 0, '2018-11-29 12:23:15', 3),
(22, 13, 12000, 0, '2018-11-29 12:25:09', 3),
(23, 13, 2000, 0, '2018-11-29 12:25:16', 3),
(24, 8, 100, 0, '2018-11-29 12:37:30', 3),
(25, 3, 300, 0, '2018-11-29 12:45:23', 3),
(26, 5, 400, 0, '2018-11-29 13:11:08', 3),
(27, 7, 50, 0, '2018-11-29 17:06:04', 3),
(29, 18, 500, 0, '2018-11-29 17:11:20', 3),
(31, 21, 400, 0, '2018-11-29 17:57:51', 3),
(32, 7, 90, 0, '2018-11-29 20:23:20', 3),
(33, 9, 150, 0, '2018-11-30 09:45:24', 3),
(37, 22, 200, 0, '2018-11-30 17:38:13', 3),
(35, 23, 4000, 0, '2018-11-30 14:19:21', 3),
(36, 22, 300, 0, '2018-11-30 17:37:25', 3),
(38, 9, 150, 0, '2018-11-30 23:32:27', 3),
(39, 7, 10, 0, '2018-12-01 20:33:09', 3),
(40, 24, 3000, 0, '2018-12-02 17:41:51', 3),
(41, 24, 4000, 0, '2018-12-02 17:41:59', 3),
(42, 27, 4000, 0, '2018-12-02 20:05:17', 3),
(43, 29, 500, 0, '2018-12-02 21:10:07', 3),
(44, 30, 500, 0, '2018-12-02 21:10:32', 3),
(45, 31, 14000, 0, '2018-12-03 00:26:58', 3),
(46, 31, 1000, 0, '2018-12-03 00:27:05', 3),
(50, 32, 300, 0, '2018-12-03 09:37:43', 3),
(51, 33, 500, 0, '2018-12-05 01:07:26', 3),
(52, 34, 5000, 0, '2018-12-06 01:49:13', 3),
(53, 10, 200, 0, '2018-12-06 04:50:00', 3),
(54, 10, 200, 0, '2018-12-06 04:52:43', 3),
(55, 35, 400, 0, '2018-12-06 17:24:19', 3),
(56, 36, 100, 0, '2018-12-06 18:58:03', 3),
(57, 36, 150, 0, '2018-12-06 18:58:09', 3),
(58, 36, 170, 0, '2018-12-06 18:58:17', 3),
(59, 37, 2000, 0, '2018-12-06 20:38:56', 3),
(60, 37, 520, 0, '2018-12-06 20:55:35', 3),
(61, 37, 480, 0, '2018-12-06 21:13:23', 3),
(62, 36, 80, 0, '2018-12-06 23:43:30', 3),
(63, 38, 5000, 0, '2018-12-07 00:21:37', 3),
(64, 39, 500, 0, '2018-12-07 00:41:46', 3),
(65, 19, 400, 0, '2018-12-07 17:23:24', 3),
(66, 40, 4000, 0, '2018-12-07 19:09:46', 3),
(67, 40, 2000, 0, '2018-12-10 03:39:51', 7),
(68, 40, 1500, 0, '2018-12-10 03:52:01', 7),
(69, 41, 500, 0, '2018-12-10 03:54:29', 7),
(70, 42, 500, 0, '2018-12-10 07:33:30', 7),
(71, 43, 3000, 0, '2018-12-11 23:18:26', 3),
(72, 44, 2500, 0, '2018-12-12 00:15:23', 3),
(73, 45, 500, 0, '2018-12-13 08:57:07', 3),
(74, 46, 5000, 0, '2018-12-13 10:39:36', 3);

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
(20, 8, 2018, 4, 20, 3, 3),
(21, 3, 2018, 11, 400, 3, 3),
(22, 8, 2019, 1, 400, 3, 3),
(23, 8, 2019, 2, 700, 3, 3),
(24, 4, 2018, 1, 0, 3, 3),
(25, 8, 2018, 8, 200, 3, 3),
(26, 3, 2019, 1, 500, 3, 3),
(27, 3, 2018, 12, 700, 3, 3),
(28, 3, 2019, 2, 300, 3, 3),
(29, 8, 2019, 5, 500, 3, 3),
(30, 8, 2019, 6, 500, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sms_add`
--

CREATE TABLE `sms_add` (
  `id` int(11) NOT NULL,
  `total_sms` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `total_send` int(11) NOT NULL DEFAULT '0',
  `start` date NOT NULL,
  `end` date NOT NULL,
  `date` date NOT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_add`
--

INSERT INTO `sms_add` (`id`, `total_sms`, `pay`, `total_send`, `start`, `end`, `date`, `add_by`) VALUES
(1, 500, 200, 418, '2018-06-01', '2018-09-29', '2018-12-31', 3),
(2, 0, 300, 0, '2018-09-29', '2018-11-24', '2018-12-11', 3),
(3, 500, 200, 60, '2018-12-01', '2019-03-31', '2018-12-09', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sms_list`
--

CREATE TABLE `sms_list` (
  `id` int(11) NOT NULL,
  `number` text NOT NULL,
  `message` text NOT NULL,
  `len` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `gateway` text NOT NULL,
  `token` text NOT NULL,
  `sender` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_list`
--

INSERT INTO `sms_list` (`id`, `number`, `message`, `len`, `date`, `gateway`, `token`, `sender`) VALUES
(12, '01777564786', 'Hello Hamza', 1, '2018-12-09 05:24:52', 'http://sms.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(13, '01991223020', 'Hello Hamza', 1, '2018-12-09 05:27:11', 'http://sms.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(14, '01991223020', 'Hello Normal Phone', 1, '2018-12-09 05:30:06', 'http://sms.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(15, '01777564786', 'Hello Smart Phone', 1, '2018-12-09 05:30:06', 'http://sms.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(16, '01777564786', 'Hello Smart Phone', 1, '2018-12-09 05:31:43', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(17, '01777564786', 'Hello Smart Phone', 1, '2018-12-09 06:02:08', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(18, '01777564786', 'Hello Smart Phone', 1, '2018-12-09 06:02:12', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(19, '01777564786', 'Hello Smart Phone', 1, '2018-12-09 06:02:15', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(20, '01777564786', 'Hello Smart Phone', 1, '2018-12-09 06:10:34', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(21, '01777564786', 'Hello Smart Phone', 1, '2018-12-09 06:11:23', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(22, '01777564786', 'Hello Smart Phone', 1, '2018-12-09 06:12:03', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(23, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 12:39:28', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(24, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 12:43:42', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(25, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 12:43:54', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(26, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 12:46:05', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(27, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 12:48:49', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(28, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 12:50:29', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(29, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 13:13:47', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(30, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 13:37:57', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(31, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 14:26:02', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 0),
(32, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 14:26:26', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 0),
(33, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 14:27:09', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(34, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 14:27:17', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 0),
(35, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 14:27:24', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 0),
(36, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 14:28:26', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 0),
(37, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 14:28:31', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 0),
(38, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 14:37:50', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(39, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 14:38:16', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(40, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 14:39:32', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 5),
(41, '01777564786', 'Dear Hamza,\r\nYour Monthly Fee \'Sep-2018\' in \'SSC Program 2018\' is Successfully Taken.\r\n\r\nPayment ID: 54\r\nPay: 200 Tk.\r\nDue: 300 Tk.\r\n\r\n@TechSerm\r\n01991223020', 1, '2018-12-09 14:40:21', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 5),
(42, '01991223020', 'Dear hamza,\nYour Payment 4000 Tk for Admission Fee in \'Academic Program\' is Successfully Taken.\nYour Payment ID: 66\n\n@TechSerm\n01991223020 ', 1, '2018-12-10 03:35:15', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(43, '01777564786', 'Dear hamza,\nYour Payment 4000 Tk for Admission Fee in \'Academic Program\' is Successfully Taken.\nYour Payment ID: 66\n\n@TechSerm\n01991223020 ', 1, '2018-12-10 03:36:21', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(44, '01991223020', 'Dear hamza,\nYour Payment 4000 Tk for Admission Fee in \'Academic Program\' is Successfully Taken.\nYour Payment ID: 66\n\n@TechSerm\n01991223020 ', 1, '2018-12-10 03:37:11', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(45, '01777564786', 'Dear hamza,\nYour Payment 4000 Tk for Admission Fee in \'Academic Program\' is Successfully Taken.\nYour Payment ID: 66\n\n@TechSerm\n01991223020 ', 1, '2018-12-10 03:37:11', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(46, '01991223020', 'Dear hamza,\nYour Payment 4000 Tk for Admission Fee in \'Academic Program\' is Successfully Taken.\nYour Payment ID: 66\n\n@TechSerm\n01991223020 ', 1, '2018-12-10 03:39:24', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(47, '01777564786', 'Dear hamza,\nYour Payment 2000 Tk for Admission Fee in \'Academic Program\' is Successfully Taken.\nYour Payment ID: 67\n\n@TechSerm\n01991223020 ', 1, '2018-12-10 03:40:06', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(48, '01991223020', 'Dear hamza,\nYour Payment 1500 Tk for Admission Fee in \'Academic Program\' is Successfully Taken.\nYour Payment ID: 68\n\n@TechSerm\n01991223020 ', 1, '2018-12-10 03:52:12', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(49, '01991223020', 'Dear hamza,\nYour Payment 1500 Tk for Admission Fee in \'Academic Program\' is Successfully Taken.\nYour Payment ID: 68\n\n@TechSerm\n01991223020 ', 1, '2018-12-10 03:52:58', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(50, '01991223020', 'Dear hamza,\nYour Payment 500 Tk for Monthly Fee \'June-2019\' in \'SSC Program 2018\' is Successfully Taken.\nYour Payment ID: 69\n\n@TechSerm\n01991223020 ', 1, '2018-12-10 03:54:37', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(51, '01991223020', 'Dear hamza,\nYour Payment 500 Tk for Monthly Fee \'June-2019\' in \'SSC Program 2018\' is Successfully Taken.\nYour Payment ID: 69\n\n@TechSerm\n01991223020 ', 1, '2018-12-10 03:55:31', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(52, '01777564786', 'Dear hamza,\nYour Payment 500 Tk for Monthly Fee \'June-2019\' in \'SSC Program 2018\' is Successfully Taken.\nYour Payment ID: 69\n\n@TechSerm\n01991223020 ', 1, '2018-12-10 03:55:31', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(53, '01991223020', 'Dear Hamza,\nYour Payment 500 Tk for Monthly Fee \'May-2019\' in \'SSC Program 2018\' is Successfully Taken.\nYour Payment ID: 70\n\n@TechSerm\n01991223020 ', 1, '2018-12-10 07:33:40', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(54, '01991223020', 'Dear Hamza,\nYour Payment 500 Tk for Monthly Fee \'May-2019\' in \'SSC Program 2018\' is Successfully Taken.\nYour Payment ID: 70\n\n@TechSerm\n01991223020 ', 1, '2018-12-11 08:32:35', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(55, '01991223020', 'Dear Hamza,\nYour Payment 500 Tk for Monthly Fee \'May-2019\' in \'SSC Program 2018\' is Successfully Taken.\nYour Payment ID: 70\n\n@TechSerm\n01991223020 ', 1, '2018-12-11 08:34:12', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(56, '01777564786', 'Dear Hamza,\nYour Payment 500 Tk for Monthly Fee \'May-2019\' in \'SSC Program 2018\' is Successfully Taken.\nYour Payment ID: 70\n\n@TechSerm\n01991223020 ', 1, '2018-12-11 08:34:56', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(57, '01777564786', 'Dear Hamza,\nCongratulation For Admit Our \'Academic Program\' Program.\n\r\nYour ID: 10001\r\nBatch: bbbasd\r\nBatch Time: Saturday,Tuesday (Ex: 8:00 AM - Ex: 10:00 PM)\r\n\r\n@TechSerm\r\n01991223020\r\n', 2, '2018-12-11 18:38:09', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(58, '01777564786', 'Dear Hamza,\nCongratulation For Admit Our \'Academic Program\' Program.\n\r\nYour ID: 10001\r\nBatch: Section 1\r\nTime: Sat,Tue,Wed (8:00 AM - 1:00 PM)\r\n\r\n@TechSerm\r\n01991223020\r\n', 2, '2018-12-11 18:52:45', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(59, '01777564786', 'Dear test,\nCongratulation For Admit Our \'Class One\' Program.\n\r\nYour ID: 10051\r\nBatch: Section 1\r\nTime: Sat,Tue,Wed (8:00 AM - 1:00 PM)\r\n\r\n@TechSerm\r\n01991223020\r\n', 2, '2018-12-11 19:01:41', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(60, '01684473273', 'Dear Futej(Omi),\nCongratulation For Admit Our \'Class One\' Program.\n\r\nYour ID: 10068\r\nBatch: Section 1\r\nTime: Sat,Tue,Wed (8:00 AM - 1:00 PM)\r\n\r\n@TechSerm\r\n', 1, '2018-12-11 19:04:57', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(61, '01521461643', 'Dear Juglu,\nCongratulation For Admitting In Our \'Class One\' Program.\n\r\nYour ID: 10069\r\nBatch: Section 1\r\nTime: Sat,Tue,Wed (8:00 AM - 1:00 PM)\r\n\r\n@TechSerm\r\n', 1, '2018-12-11 19:21:14', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(62, '01521432303', 'Dear Raihan ,\nCongratulation For Admitting In Our \'Class One\' Program.\n\r\nYour ID: 10070\r\nBatch: Section 1\r\nTime: Sat,Tue,Wed (8:00 AM - 1:00 PM)\r\n\r\n@TechSerm\r\n', 1, '2018-12-11 19:24:43', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(63, '01521432303', 'Dear Raihan ,\nCongrats For Admitting In Our \'Class One\' Program.\n\r\nYour ID: 10070\r\nBatch: Section 1\r\nTime: Sat,Tue,Wed (8:00 AM - 1:00 PM)\r\n\r\n@TechSerm\r\n', 1, '2018-12-11 19:37:36', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 7),
(64, '01991223020', 'Dear Hamza,\nCongratulation For Admitting In Our \'Engnerring Admission Program 2018\' Program.\n\r\nYour ID: 10051\r\nBatch: Prottasa\r\nTime: Sat,Mon,Tue,Wed (8:20 AM - 10:20 AM)\r\n\r\n@TechSerm\r\n', 2, '2018-12-11 23:42:02', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(65, '01991223020', 'Dear Hamza,\nYour Payment 2500 Tk for Admission Fee in \'Class One\' is Successfully Taken.\nYour Payment ID: 72\n\n@TechSerm\n01991223020 ', 1, '2018-12-12 00:15:32', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(66, '01991223020', 'Dear Hamza,\nCongratulation For Admitting In Our \'SSC Program 2018\' Program.\n\r\nYour ID: 10011\r\nBatch: Normal\r\nTime: Sat,Mon (dsaf - 8:30 AM)\r\n\r\n@TechSerm\r\n', 1, '2018-12-12 22:29:57', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(67, '01991223020', 'Dear Hamza,\nCongratulation For Admitting In Our \'SSC Program 2018\' Program.\n\r\nYour ID: 10011\r\nBatch: Normal\r\nTime: Sat,Mon (dsaf - 8:30 AM)\r\n\r\n@TechSerm\r\n', 1, '2018-12-12 22:30:30', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(68, '01991223020', 'Dear Hamza,\nYour Payment 500 Tk for Monthly Fee \'August-2018\' in \'SSC Program 2018\' is Successfully Taken.\nYour Payment ID: 73\n\n@TechSerm\n01991223020 ', 1, '2018-12-13 08:57:16', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(69, '01777564786', 'Dear Hamza,\nYour Payment 500 Tk for Monthly Fee \'August-2018\' in \'SSC Program 2018\' is Successfully Taken.\nYour Payment ID: 73\n\n@TechSerm\n01991223020 ', 1, '2018-12-13 08:57:16', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(70, '01991223020', 'Dear Hamza,\nYour Payment 5000 Tk for Admission Fee in \'Academic Program\' is Successfully Taken.\nYour Payment ID: 74\n\n@TechSerm\n01991223020 ', 1, '2018-12-13 10:39:42', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(71, '01991223020', 'Dear Hamza,\nYour Payment 5000 Tk for Admission Fee in \'Academic Program\' is Successfully Taken.\nYour Payment ID: 74\n\n@TechSerm\n01991223020 ', 1, '2018-12-13 10:40:04', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(72, '01991223020', 'Dear Hamza,\nCongratulation For Admitting In Our \'Academic Program\' Program.\n\r\nYour ID: 10001\r\nBatch: Section 1\r\nTime: Sat,Tue,Wed (8:00 AM - 1:00 PM)\r\n\r\n@TechSerm\r\n', 2, '2018-12-13 10:41:20', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sms_setting`
--

CREATE TABLE `sms_setting` (
  `id` int(11) NOT NULL,
  `gateway` text NOT NULL,
  `token` text NOT NULL,
  `date` datetime NOT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_setting`
--

INSERT INTO `sms_setting` (`id`, `gateway`, `token`, `date`, `add_by`) VALUES
(2, 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', '2018-12-24 00:00:00', 3);

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
  `personal_mobile` text,
  `father_mobile` text,
  `mother_mobile` text,
  `nick` text NOT NULL,
  `program` int(11) DEFAULT NULL,
  `batch` int(11) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `address` text,
  `birth_day` date DEFAULT NULL,
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
(10001, 'Sk.Amir Hamza', 'sadf', 'sdaf', 'sdaf', '10001.PNG', '01991223020', '01777564786', '215', 'Hamza', 2, 12, 7000, 'sadf', '2018-01-25', 'Male', 'Muslim', 'sdff', 414151, 231, '455', 654, '2018-01-19'),
(10002, 'Sk.Hamza', 'asdf', 'sdfa', '465', 'avatar.png', '1991223020', '0', '456', 'sdaf', 2, 1, 7000, 'sdf', '2018-01-17', 'Male', 'Muslim', 'sadf', 4000, 4145, '12', 21, '2018-01-19'),
(10003, 'Sk.Fardin', 'sdaf', 'sfa', 'sdfdfsg', '10003.jpg', '1849668726', '53', '56576', 'Fardin', 3, 12, 6000, 'dfsg', '2018-01-18', 'Male', 'Muslim', 'sadf', 53, 56, '563', 635, '2018-01-19'),
(10030, 'kala mia', 'sadf', 'sadf', '', 'avatar.png', '1991223020', '0', '0', 'kala', 3, 1, 15000, '', '2018-02-20', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-19'),
(10005, 'sdaf', 'sdfa', 'sdfa', 'zfgsd', 'avatar.png', '4654', '456', '456', 'sdaf', 3, 12, 6000, 'safd', '2018-01-19', 'Male', 'Muslim', 'sdaf', 456, 456, '546', 4546, '2018-01-19'),
(10006, 'Mash Mash Mash Mash Mash Mash Mash Mash ', 'dasf', 'sadf', 'judjhfd@jksdfh', '10006.jpg', '1780520287', '215', '521', 'Jugol', 4, 1, 57000, 'jugol', '2018-01-17', 'Male', 'Muslim', 'sdfa', 123, 123, '132', 45, '2018-01-24'),
(10007, 'Al Nahian', 'saf', 'sdaf', 'sdaf', '10007.jpg', '1777564786', '456', '465', 'Nahian', 2, 1, 17000, 'sda', '2018-01-16', 'Male', 'Hindu', 'eads', 645, 45, '456', 456, '2018-01-25'),
(10008, 'Musfiqur Rahim', 'eewt', 'twe', 'dh', '10008.jpeg', '1777564786', '75', '789', 'Musfiq', 3, 12, 16000, 'fgdh', '2018-01-18', 'Male', 'Muslim', 'rtyrt', 546, 456, '465', 456, '2018-01-27'),
(10009, 'Nasir Husen', 'Nasir', 'sadf', 'sdaf', 'avatar.png', '1777564786', '657', '746', 'Nasir', 3, 11, 16000, 'saf', '2018-01-15', 'Male', 'Muslim', 'sadf', 465, 456, '546', 456, '2018-01-27'),
(10010, 'Tibra Maz', 'sdaf', 'sdfa', 'asdf', '10010.png', '1715214150', '535', '23', 'Arka', 3, 12, 15000, 'sadfdfs', '2018-02-06', 'Male', 'Hindu', 'sdafd', 4000, 21332, '213', 213, '2018-02-01'),
(10011, 'Sk.Amir Hamza', 'test', 'test', 'sk.amirhamza@gmail.com', '10011.jpg', '01991223020', '18451', '5656', 'Hamza', 3, 1, 15000, 'Dhaka', '2018-10-19', 'Male', 'Muslim', 'sdaf', 45, 546, 'dhaka', 546, '2018-02-02'),
(10012, 'Rajib vai', 'uiooi', 'ouo', 'yukyhg', 'avatar.png', '1786376633', '42752', '45745', 'Rajib', 2, 2, 17000, 'iuyoui', '2018-02-08', 'Male', 'Muslim', 'oyo', 107427, 4275, 'uuyt', 124, '2018-02-07'),
(10013, 'fdg', 'dsf', 'sadf', '', 'avatar.png', '0', '123', '123', 'dsf', 3, 1, 15000, '', '2018-02-07', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10014, 'hamza3', 'dsf', 'sadf', '', 'avatar.png', '0', '123', '123', 'dsf', 2, 1, 17000, '', '2018-02-07', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10015, 'hamza3', 'dsf', 'sadf', '', 'avatar.png', '0', '0', '0', 'dsf', 3, 1, 15000, '', '2018-02-07', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10016, 'fgh', 'fgh', 'fg', '', 'avatar.png', '0', '0', '0', 'gh', 3, 1, 15000, 'dhaka', '2018-02-11', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10017, 'fgh', 'fgh', 'fg', '', 'avatar.png', '0', '0', '0', 'gh', 3, 1, 15000, 'dhaka', '2018-02-11', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10018, 'sdf', 'sdf', 'sdf', '', 'avatar.png', '0', '0', '0', 'sdf', 3, 1, 15000, '', '2018-02-14', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10019, 'sdf', 'sdf', 'sdf', '', 'avatar.png', '0', '0', '0', 'sdf', 3, 1, 15000, '', '2018-02-14', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10020, 'sdf', 'sdf', 'sdf', '', 'avatar.png', '0', '0', '0', 'sdf', 2, 1, 17000, '', '2018-02-14', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10021, 'sdf', 'sdf', 'sdf', '', 'avatar.png', '0', '0', '0', 'sdf', 3, 1, 15000, '', '2018-02-14', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10022, 'sdf', 'sdf', 'sdf', '', 'avatar.png', '0', '0', '0', 'sdf', 3, 1, 15000, '', '2018-02-14', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10023, 'amir hamza', 'ds', 'sdf', 'fg', 'avatar.png', '1991223020', '0', '1991223020', 'hamza', 3, 1, 15000, '', '2018-02-15', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10024, 'sasfd', 'sda', 'sdaf', '', '10024.jpg', '1991223020', '0', '0', 'sdf', 2, 1, 17000, '', '2018-02-12', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10025, 'hamza', 'sdf', 'sdf', '', '10025.jpg', '1991223020', '0', '0', 'sdaf', 3, 1, 15000, '', '2018-02-14', 'Male', 'Muslim', '', 0, 0, '', 4.34, '2018-02-11'),
(10026, 'dsafdsa', 'sdf', 'sdf', '', '10026.jpg', '0', '0', '0', 'dsfa', 3, 1, 15000, '', '2018-02-14', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10027, 'sdf', 'sdf', 'sfa', '', 'avatar.png', '0', '0', '0', 'sdf', 3, 1, 15000, '', '2018-02-01', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11'),
(10036, 'Rakib Mia', 'saf', 'sdaf', '', 'avatar.png', '1991223020', '1777564786', '0', 'Rakib', 5, 12, 7500, '', '2018-03-09', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-03-05'),
(10029, 'fahim mur', 'sdaf', 'sadf', '', 'avatar.png', '152465456', '0', '0', 'fahim', 3, 1, 15000, '', '2018-02-15', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-16'),
(10037, 'Karim Mia', 'sdf', 'sdaf', '', 'avatar.png', '1991223020', '0', '0', 'Karim', 5, 12, 7500, '', '2018-03-06', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-03-05'),
(10033, 'Mukles Mia', 'af', 'sdf', 'tamimhak777@gmail.com', '10033.jpg', '1772099282', '1991223020', '1707515751', 'Mukles Mia', 3, 1, 15000, '152, Arambag', '2018-02-21', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-20'),
(10034, 'Mannan Omi', 'sdfsdaf', 'saf', '', 'avatar.png', '1684473273', '0', '0', 'Omi', 3, 1, 15000, '', '2017-07-01', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-03-03'),
(10035, 'server test', 'sf', 'sdf', 'sk.amirhaza@gmail.com', '10035.PNG', '0', '1777564758', '0', 'server test', 3, 2, 15000, 'habiganj', '2018-03-01', 'Male', 'Muslim', 'fgsdfg', 54545, 4545, 'Sylhet', 4.17, '2018-03-05'),
(10038, 'shakib hassan', 'tgr', 'fd', 'grf', 'avatar.png', '1683408675', '4', '1', 'shakib', 6, 11, 3333, 'hgh', '2018-03-14', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-03-27'),
(10066, 'Sk.Amir Hamza', '', '', 'sk.amirhamza@gmail.com', '10066.PNG', '1991223020', '0', '0', 'Hamza', 2, 1, 1500, 'Dhaka', '2018-11-15', 'Male', 'Muslim', '', 0, 0, 'dhaka', 0, '2018-11-17'),
(10049, 'Fardin', 'sd', 'd', '', '10049.png', '1991223020', '0', '1731133913', 'Fardin', 3, 12, 15000, '', '2018-06-15', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-06-19'),
(10041, 'test abs', 'd', 'd', '', 'avatar.png', '0', '0', '0', 'abc', 8, 12, 5000, '', '2018-05-16', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13'),
(10042, 'Test 1263', 'd', 'd', '', 'avatar.png', '0', '0', '0', 'test', 8, 11, 5000, '', '2018-05-17', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13'),
(10043, 'shiddharto', 'test', 'test', '', 'avatar.png', '0', '0', '0', 'test', 3, 1, 15000, '', '2018-05-16', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13'),
(10044, 'Anik', 'sf', 'df', '', 'avatar.png', '0', '0', '0', 'anik', 8, 12, 5000, '', '2018-05-17', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13'),
(10045, 'Abdul jabbar', 'test', 'test', '', 'avatar.png', '0', '0', '0', 'chesra', 2, 1, 17000, '', '2018-05-24', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13'),
(10046, 'Test 123', 'd', 'd', '', 'avatar.png', '0', '0', '0', 'test', 8, 12, 5000, '', '2018-05-24', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13'),
(10048, 'RTRTR5', 'fhs', 'fhwiopefjwo', '', 'avatar.png', '1787563057', '0', '0', 'bappy', 3, 1, 15000, 'habiganj', '2018-06-21', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-06-19'),
(10050, 'monir vai', '', '', '', '10050.jpg', '1707515751', '14567', '0', 'monir', 2, 2, 17000, '152, Arambagg', '2018-08-09', 'Male', 'Muslim', '', 0, 0, 'Dhaka', 0, '2018-07-10'),
(10051, 'Sk.Amir Hamza', 'dsf', 'sdf', 'sk.amirhamza@gmail.com', '10051.jpg', '01991223020', '01991223020', '0', 'Hamza', 3, 1, 15000, 'Dhaka', '2018-08-23', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10052, 'fdg', '', '', '', 'avatar.png', '0', '0', '0', 'fdsg', 2, 1, 17000, '', '2018-08-15', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10053, 'test1', 'sdf', 'sdf', '', '10053.jpg', '0', '0', '0', 'test', 2, 1, 17000, '', '2018-08-09', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10054, 'asdf', '', '', '', 'avatar.png', '0', '0', '0', 'afs', 2, 1, 1500, '', '2018-08-22', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10055, 'sdfgdfg', '', '', '', 'avatar.png', '0', '0', '0', 'dfg', 2, 1, 1500, '', '2018-08-11', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10056, 'saf', '', '', '', 'avatar.png', '0', '0', '0', 'sdaf', 2, 1, 1500, '', '2018-08-17', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10057, 'saf', '', '', '', 'avatar.png', '0', '0', '0', 'sdaf', 2, 1, 1500, '', '2018-08-17', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10058, 'amir hamza', 'dsf', 'sdfg', 'sk.amirhamza@gmail.com', '10058.jpg', '1991223020', '456', '5466', 'Hamza', 2, 1, 1500, 'Dhaka', '2018-08-17', 'Male', 'Muslim', '', 0, 0, 'dhaka', 0, '2018-08-08'),
(10059, 'sdaf', '', '', '', 'avatar.png', '0', '0', '0', 'sdf', 2, 1, 1500, '', '2018-08-23', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08'),
(10060, 'Test Ham1', '', '', '', '10060.jpg', '0', '0', '0', 'ham', 2, 1, 1500, '', '2018-08-16', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-09'),
(10061, 'test3', '', '', '', 'avatar.png', '0', '0', '0', 'test prac', 2, 1, 1500, '', '2018-08-23', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-12'),
(10062, 'Akter Ahmed', '', '', '', '10062.PNG', '0', '0', '0', 'Akter', 2, 1, 1500, '', '2018-10-09', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-14'),
(10063, 'Test 15', '', '', '', 'avatar.png', '0', '0', '0', 'test', 2, 1, 1500, '', '2018-08-15', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-18'),
(10064, 'Alnor', '', '', '', 'avatar.png', '0', '0', '0', 'alnor', 2, 1, 1500, '', '2018-08-03', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-23'),
(10065, 'Rahim', '', '', '', 'avatar.png', '0', '0', '0', 'Rahim', 2, 1, 1500, '', '2018-10-12', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-10-04'),
(10067, 'amir hamza update', '', '', '', 'avatar.png', '01991223020', '01777564786', '0', 'hamza', 2, 1, 1500, '', '2018-12-08', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-07'),
(10068, 'Mannan Omi', '', '', '', 'avatar.png', '01684473273', '0', '0', 'Futej(Omi)', 2, 1, 1500, '', '2018-12-19', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-11'),
(10069, 'Jugol Kishur', '', '', '', 'avatar.png', '01521461643', '0', '0', 'Juglu', 2, 1, 1500, '', '2018-12-12', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-11'),
(10070, 'Raihan Taher', '', '', '', 'avatar.png', '01521432303', '0', '0', 'Raihan ', 2, 1, 1500, '', '2018-12-02', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendence`
--

CREATE TABLE `student_attendence` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_attendence`
--

INSERT INTO `student_attendence` (`id`, `student_id`, `program_id`, `status`, `date`) VALUES
(22, 10046, 8, 1, '2018-12-06'),
(21, 10001, 8, 1, '2018-12-06'),
(20, 10050, 4, 1, '2018-12-06'),
(19, 10049, 4, 0, '2018-12-06'),
(18, 10048, 4, 0, '2018-12-06'),
(17, 10011, 4, 1, '2018-12-06'),
(16, 10003, 4, 1, '2018-12-06'),
(15, 10065, 3, 1, '2018-12-06'),
(23, 10048, 8, 0, '2018-12-06'),
(24, 10049, 8, 1, '2018-12-06'),
(25, 10052, 8, 0, '2018-12-06'),
(26, 10011, 3, 0, '2018-12-06'),
(27, 10051, 3, 1, '2018-12-06'),
(28, 10060, 3, 1, '2018-12-06'),
(29, 10061, 3, 1, '2018-12-06'),
(30, 10066, 3, 1, '2018-12-06'),
(31, 10001, 8, 1, '2018-12-07'),
(32, 10046, 8, 1, '2018-12-07'),
(33, 10048, 8, 1, '2018-12-07'),
(34, 10049, 8, 0, '2018-12-07'),
(35, 10052, 8, 0, '2018-12-07'),
(36, 10046, 5, 1, '2018-12-06'),
(37, 10048, 5, 1, '2018-12-06'),
(38, 10050, 5, 1, '2018-12-06'),
(39, 10052, 5, 1, '2018-12-06'),
(40, 10011, 8, 0, '2018-12-06'),
(41, 10036, 8, 1, '2018-12-06'),
(42, 10050, 8, 1, '2018-12-06'),
(43, 10046, 5, 1, '2018-12-17'),
(44, 10048, 5, 1, '2018-12-17'),
(45, 10050, 5, 1, '2018-12-17'),
(46, 10052, 5, 1, '2018-12-17'),
(47, 10001, 8, 1, '2018-12-29'),
(48, 10046, 8, 1, '2018-12-29'),
(49, 10048, 8, 1, '2018-12-29'),
(50, 10049, 8, 0, '2018-12-29'),
(51, 10052, 8, 1, '2018-12-29'),
(52, 10003, 4, 0, '2018-12-09'),
(53, 10011, 4, 1, '2018-12-09'),
(54, 10048, 4, 0, '2018-12-09'),
(55, 10049, 4, 1, '2018-12-09'),
(56, 10050, 4, 1, '2018-12-09'),
(57, 10051, 13, 0, '2018-12-11'),
(58, 10068, 13, 1, '2018-12-11'),
(59, 10069, 13, 1, '2018-12-11'),
(60, 10070, 13, 0, '2018-12-11'),
(61, 10051, 13, 0, '2018-12-13'),
(62, 10068, 13, 1, '2018-12-13'),
(63, 10069, 13, 1, '2018-12-13'),
(64, 10070, 13, 1, '2018-12-13');

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
-- Table structure for table `student_payment`
--

CREATE TABLE `student_payment` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `total_fee` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_payment`
--

INSERT INTO `student_payment` (`id`, `student_id`, `program_id`, `type`, `year`, `month`, `total_fee`, `date`, `add_by`) VALUES
(1, 10050, 8, 2, 2019, 6, 2300, '2018-11-27 00:00:00', 1),
(2, 10050, 8, 2, 2019, 5, 1500, '2018-11-28 04:42:47', 3),
(3, 10050, 8, 2, 2018, 8, 500, '2018-11-28 04:43:43', 3),
(4, 10050, 8, 2, 2019, 2, 700, '2018-11-28 04:51:40', 3),
(5, 10050, 8, 2, 2019, 1, 400, '2018-11-28 04:52:46', 3),
(6, 10050, 8, 2, 2019, 1, 500, '2018-11-28 04:53:11', 3),
(7, 10050, 8, 2, 2018, 4, 150, '2018-11-28 04:54:30', 3),
(8, 10050, 8, 2, 2018, 12, 100, '2018-11-28 04:57:14', 3),
(9, 10050, 8, 2, 2018, 10, 300, '2018-11-28 04:57:25', 3),
(10, 10050, 8, 2, 2018, 9, 700, '2018-11-28 10:07:09', 3),
(11, 10050, 8, 2, 2018, 7, 800, '2018-11-28 12:21:01', 3),
(12, 10050, 8, 1, 0, 0, 3500, '2018-11-28 12:21:50', 3),
(13, 10050, 2, 1, 0, 0, 14000, '2018-11-28 12:23:59', 3),
(14, 10050, 5, 1, 0, 0, 7500, '2018-11-28 21:13:42', 3),
(15, 10050, 8, 2, 2018, 5, 1000, '2018-11-29 07:36:57', 3),
(16, 10051, 3, 1, 0, 0, 15000, '2018-11-29 17:06:29', 3),
(17, 10049, 3, 1, 0, 0, 15000, '2018-11-29 17:09:24', 3),
(18, 10051, 3, 2, 2019, 2, 500, '2018-11-29 17:11:11', 3),
(19, 10051, 3, 2, 2018, 12, 700, '2018-11-29 17:41:48', 3),
(20, 10035, 3, 1, 0, 0, 15000, '2018-11-29 17:54:15', 3),
(21, 10049, 8, 2, 2019, 6, 400, '2018-11-29 17:57:44', 3),
(22, 10049, 8, 2, 2019, 5, 500, '2018-11-30 14:18:41', 3),
(23, 10049, 8, 1, 0, 0, 5000, '2018-11-30 14:19:14', 3),
(24, 10048, 5, 1, 0, 0, 7000, '2018-12-02 17:40:59', 3),
(25, 10046, 5, 1, 0, 0, 7500, '2018-12-02 20:04:23', 3),
(26, 10046, 5, 1, 0, 0, 7500, '2018-12-02 20:04:27', 3),
(27, 10046, 8, 1, 0, 0, 6000, '2018-12-02 20:04:55', 3),
(28, 10046, 8, 1, 0, 0, 4000, '2018-12-02 20:04:57', 3),
(29, 10046, 3, 2, 2018, 11, 500, '2018-12-02 21:09:57', 3),
(30, 10046, 3, 2, 2019, 1, 500, '2018-12-02 21:10:24', 3),
(31, 10052, 3, 1, 0, 0, 15000, '2018-12-03 00:26:49', 3),
(32, 10052, 3, 2, 2019, 2, 300, '2018-12-03 09:37:34', 3),
(33, 10049, 3, 2, 2019, 2, 500, '2018-12-05 01:07:16', 3),
(34, 10048, 8, 1, 0, 0, 5000, '2018-12-06 01:49:01', 3),
(35, 10036, 8, 2, 2019, 6, 400, '2018-12-06 17:24:09', 3),
(36, 10036, 8, 2, 2019, 5, 500, '2018-12-06 18:57:56', 3),
(37, 10036, 8, 1, 0, 0, 5000, '2018-12-06 20:35:23', 3),
(38, 10001, 8, 1, 0, 0, 5000, '2018-12-07 00:21:31', 3),
(39, 10001, 8, 2, 2019, 6, 500, '2018-12-07 00:41:28', 3),
(40, 10067, 5, 1, 0, 0, 7500, '2018-12-07 19:09:40', 3),
(41, 10067, 8, 2, 2019, 6, 500, '2018-12-10 03:54:21', 7),
(42, 10001, 8, 2, 2019, 5, 500, '2018-12-10 07:33:23', 7),
(43, 10068, 13, 1, 0, 0, 4000, '2018-12-11 23:18:13', 3),
(44, 10051, 13, 1, 0, 0, 5000, '2018-12-12 00:15:10', 3),
(45, 10001, 8, 2, 2018, 8, 500, '2018-12-13 08:56:59', 3),
(46, 10001, 5, 1, 0, 0, 7500, '2018-12-13 10:39:28', 3);

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
(7, 'admin', 'amir hamza', 'avatar.png', '', 'sf', 32154, '', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 1, 12);

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
-- Indexes for table `expence`
--
ALTER TABLE `expence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expence_category`
--
ALTER TABLE `expence_category`
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
-- Indexes for table `receive_payment`
--
ALTER TABLE `receive_payment`
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
-- Indexes for table `sms_add`
--
ALTER TABLE `sms_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_list`
--
ALTER TABLE `sms_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_setting`
--
ALTER TABLE `sms_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_attendence`
--
ALTER TABLE `student_attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_id`
--
ALTER TABLE `student_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_payment`
--
ALTER TABLE `student_payment`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
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
-- AUTO_INCREMENT for table `expence`
--
ALTER TABLE `expence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `expence_category`
--
ALTER TABLE `expence_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `receive_payment`
--
ALTER TABLE `receive_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `set_payment`
--
ALTER TABLE `set_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `sms_add`
--
ALTER TABLE `sms_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sms_list`
--
ALTER TABLE `sms_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `sms_setting`
--
ALTER TABLE `sms_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10071;
--
-- AUTO_INCREMENT for table `student_attendence`
--
ALTER TABLE `student_attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `student_id`
--
ALTER TABLE `student_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10053;
--
-- AUTO_INCREMENT for table `student_payment`
--
ALTER TABLE `student_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
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
