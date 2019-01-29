-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2019 at 12:39 PM
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
(103, 10051, 8, 11, '2018-12-11 23:41:03', 3),
(104, 10001, 13, 23, '2018-12-15 04:53:19', 3),
(105, 10071, 13, 23, '2018-12-16 14:34:55', 3),
(106, 10071, 8, 11, '2018-12-16 14:46:01', 3),
(107, 10072, 13, 12, '2018-12-17 04:02:18', 3),
(108, 10072, 4, 1, '2018-12-17 04:29:28', 5),
(109, 10072, 8, 11, '2018-12-17 14:13:14', 3),
(110, 10073, 13, 23, '2018-12-22 10:46:18', 3),
(111, 10073, 14, 24, '2018-12-22 10:53:19', 3),
(112, 10051, 15, 23, '2018-12-26 22:58:40', 3),
(113, 10052, 15, 23, '2018-12-26 23:38:35', 3),
(114, 10053, 15, 23, '2018-12-27 12:39:10', 3),
(115, 10078, 15, 23, '2019-01-02 21:49:06', 3),
(116, 10008, 15, 23, '2019-01-12 04:15:24', 3),
(117, 10002, 15, 24, '2019-01-12 04:30:22', 3),
(118, 10001, 15, 23, '2019-01-12 06:37:40', 3),
(119, 10002, 14, 24, '2019-01-16 16:10:46', 3);

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
(24, 'Section 3', '8:00 AM', '10:00 AM', '1,7'),
(23, 'Section 1', '8:00 AM', '1:00 PM', '1,4,5');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `user_id`, `message`, `date`) VALUES
(1, 3, 'test data', '2019-01-18 23:59:31'),
(2, 3, 'hello this system nice working', '2019-01-19 00:58:16'),
(3, 3, 'test 3 ok', '2019-01-19 01:18:55'),
(4, 5, 'hello responce', '2019-01-19 01:22:13'),
(5, 5, 'its work', '2019-01-19 01:23:12'),
(6, 5, 'its work', '2019-01-19 01:23:20'),
(7, 3, 'not fine', '2019-01-19 01:23:36'),
(8, 3, 'i am hamza', '2019-01-19 01:25:49'),
(9, 3, 'document.getElementById("message").value="";   loader("message_body");', '2019-01-19 01:26:42'),
(10, 3, 'hey', '2019-01-19 01:27:19'),
(11, 3, 'not to say', '2019-01-19 01:32:06'),
(12, 3, 'this system is not working', '2019-01-19 01:32:20'),
(13, 5, 'i am fine', '2019-01-19 01:33:46'),
(14, 3, 'gd.this system is now working', '2019-01-19 02:04:29'),
(15, 3, 'now work', '2019-01-19 02:05:51'),
(16, 3, 'system test', '2019-01-19 02:08:54'),
(17, 3, 'now working', '2019-01-19 02:09:10'),
(18, 3, 'the message of this box is not working', '2019-01-19 04:44:39'),
(19, 3, 'fine we fix error..we are working for fix this error.Please Wait until solve this error', '2019-01-19 04:45:33'),
(20, 5, 'gd work', '2019-01-19 05:02:20');

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
  `exam_date` date NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `program_id`, `sub_id`, `exam_name`, `total`, `mcq`, `written`, `exam_date`, `date`, `add_by`) VALUES
(18, 15, 27, 'test', 20, 10, 10, '2019-01-31', '2019-01-11 04:54:40', 3),
(22, 13, 11, 'bangla 1', 10, 0, 10, '2019-01-11', '2019-01-11 14:33:50', 3),
(20, 15, 27, 'hello', 14, 13, 1, '2019-01-30', '2019-01-11 04:57:19', 3);

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
(4, 'book', 7000, '', 3, '2018-12-14 06:54:30'),
(5, 'book', 3000, '', 3, '2018-12-14 09:35:54'),
(6, 'banner', 7000, '', 3, '2018-12-14 23:47:34'),
(7, 'treat1', 6000, 'no treat', 3, '2018-12-17 04:41:42'),
(8, 'kolom', 100, 'Buy Kolom', 3, '2018-12-17 19:01:14');

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
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `amount` int(11) NOT NULL,
  `notes` text,
  `add_by` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `name`, `amount`, `notes`, `add_by`, `date`) VALUES
(3, 'book', 500, '', 3, '2019-01-02 19:46:50'),
(4, 'kolom', 1000, '', 3, '2019-01-02 19:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `description`, `date`, `add_by`) VALUES
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
(18, 'hgy', 'dear {{nick_name}},\nHow are you', '2018-05-13 00:00:00', 3),
(22, 'Pohela Boishak', 'Dear {{nick_name}},\nWishing you a wonderful Poila Baisakh. May all your dreams come true, your aspirations find bigger wings and most importantly you feel loved wherever you go.', '2018-12-15 05:03:43', 3),
(23, 'sdaf', 'sdaf', '2018-12-15 07:08:10', 3),
(24, 'pohela', 'Dear {{student_name}},\nYour class off', '2018-12-22 10:51:24', 3);

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
(15, 'Class Five 2019', '2018-12-01', '2018-12-31', '27', '24,23', 5000, 1, 0, 3, '2018-12-26 22:57:27'),
(13, 'Class One', '2019-01-01', '2019-12-31', '26,21,11', '23,12', 4000, 2, 1000, 7, '2018-12-11 19:00:08'),
(14, 'Class Two', '2019-01-01', '2019-12-31', '', '24,22', 5000, 2, 500, 3, '2018-12-22 10:52:42');

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
(78, 38, 300, 0, '2018-12-17 02:46:40', 5),
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
(74, 46, 5000, 0, '2018-12-13 10:39:36', 3),
(75, 47, 500, 0, '2018-12-14 09:40:33', 3),
(77, 48, 780, 0, '2018-12-16 14:56:07', 3),
(79, 51, 800, 0, '2018-12-17 04:04:53', 3),
(80, 51, 200, 0, '2018-12-17 04:11:53', 3),
(84, 53, 1000, 0, '2018-12-19 03:12:08', 3),
(82, 51, 100, 0, '2018-12-17 04:28:09', 3),
(86, 54, 1000, 0, '2018-12-22 10:47:52', 3),
(87, 55, 3000, 0, '2018-12-22 23:24:38', 3),
(88, 56, 5000, 0, '2018-12-26 15:47:32', 3),
(89, 57, 1600, 0, '2018-12-26 17:48:52', 3),
(90, 58, 400, 0, '2018-12-27 23:58:33', 3),
(91, 59, 5000, 0, '2018-12-28 00:43:34', 3),
(92, 60, 1000, 0, '2019-01-15 22:47:29', 3),
(93, 61, 3000, 0, '2019-01-16 16:02:10', 3),
(94, 16, 5000, 0, '2019-01-17 22:49:10', 3),
(95, 62, 300, 0, '2019-01-18 01:09:04', 3),
(96, 62, 400, 0, '2019-01-18 01:09:18', 3),
(97, 64, 1500, 0, '2019-01-18 02:14:30', 3),
(103, 38, 700, 0, '2019-01-18 23:58:13', 3),
(99, 65, 1200, 0, '2019-01-18 10:06:21', 3),
(100, 66, 500, 0, '2019-01-18 11:02:02', 3),
(101, 44, 2500, 0, '2019-01-18 11:07:53', 3),
(102, 67, 1500, 0, '2019-01-18 11:12:25', 3),
(104, 71, 3000, 0, '2019-01-19 03:09:18', 3);

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
(148, 20, 10002, 30, 0, 30, '2019-01-12 06:54:28', 3, 0),
(2, 18, 10002, 58, 17, 75, '2018-01-30 00:00:00', 3, 0),
(121, 10, 10030, 40, 25, 65, '2018-02-20 00:00:00', 3, 1),
(34, 7, 10006, 34, 0, 34, '2018-01-31 00:00:00', 3, 0),
(44, 8, 10008, 1, 1, 2, '2018-02-01 00:00:00', 3, 1),
(131, 11, 10001, 35, 0, 35, '2018-04-24 00:00:00', 3, 1),
(120, 10, 10033, 30, 40, 70, '2018-02-20 00:00:00', 3, 1),
(24, 3, 10003, 35.5, 15.3, 50.8, '2018-01-30 00:00:00', 3, 0),
(146, 20, 10001, 0, 0, 0, '2019-01-12 06:52:27', 3, 0),
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
(149, 22, 10001, 30, 40, 70, '2019-01-12 07:27:21', 3, 1),
(139, 1, 10049, 45, 10, 55, '2018-06-19 00:00:00', 3, 1),
(140, 11, 10050, 40, 0, 40, '2018-07-10 00:00:00', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `option_name` text,
  `option_value` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `option_name`, `option_value`) VALUES
(1, 'name', 'TechSerm Education Software'),
(2, 'sort_name', 'TechsermSoft'),
(3, 'address', 'Aftab Nogor,Dhaka,Bangladesh sdaf sdaf'),
(4, 'main_logo', 'techserm_full_logo.jpg'),
(5, 'logo', 'techserm_small_logo.png'),
(6, 'phone', '01991223020'),
(7, 'email', 'techserm@gmail.com');

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
(30, 8, 2019, 6, 500, 3, 7),
(31, 13, 2019, 1, 1000, 3, 3),
(32, 13, 2019, 3, 1000, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `site_activity`
--

CREATE TABLE `site_activity` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `table_name` text NOT NULL,
  `action_type` text NOT NULL,
  `table_id` text NOT NULL,
  `ip` text,
  `browser` text,
  `previous_data` text,
  `present_data` text,
  `login` int(11) DEFAULT '0',
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_activity`
--

INSERT INTO `site_activity` (`id`, `user_id`, `table_name`, `action_type`, `table_id`, `ip`, `browser`, `previous_data`, `present_data`, `login`, `date`) VALUES
(4, 3, 'receive_payment', 'insert', '76', NULL, NULL, NULL, NULL, 0, '2018-12-16 14:54:18'),
(5, 3, 'student_payment', 'update', '1', NULL, NULL, NULL, NULL, 0, '2018-12-16 14:54:33'),
(6, 3, 'receive_payment', 'delete', '1', NULL, NULL, NULL, NULL, 0, '2018-12-16 14:55:04'),
(7, 3, 'receive_payment', 'insert', '77', NULL, NULL, NULL, NULL, 0, '2018-12-16 14:56:07'),
(8, 3, 'admit_program', 'update', '1', NULL, NULL, NULL, NULL, 0, '2018-12-16 14:56:33'),
(9, 3, 'admit_program', 'update', '106', NULL, NULL, NULL, NULL, 0, '2018-12-16 14:56:55'),
(10, 3, 'student_payment', 'insert', '49', NULL, NULL, NULL, NULL, 0, '2018-12-16 14:57:50'),
(11, 3, 'student_payment', 'update', '49', NULL, NULL, NULL, NULL, 0, '2018-12-16 14:58:08'),
(12, 3, 'student', 'update', '10071', NULL, NULL, NULL, NULL, 0, '2018-12-16 15:01:51'),
(13, 3, 'sms_add', 'update', '8', NULL, NULL, NULL, NULL, 0, '2018-12-16 15:04:03'),
(14, 5, 'admit_program', 'update', '106', NULL, NULL, NULL, NULL, 0, '2018-12-16 15:12:34'),
(15, 5, 'admit_program', 'update', '104', NULL, NULL, NULL, NULL, 0, '2018-12-16 15:30:29'),
(16, 5, 'admit_program', 'update', '104', NULL, NULL, NULL, NULL, 0, '2018-12-16 15:30:36'),
(17, 5, 'login', 'insert', '1', NULL, NULL, NULL, NULL, 1, '2018-12-16 15:40:40'),
(18, 5, 'login', 'insert', '1', NULL, NULL, NULL, NULL, 1, '2018-12-16 15:41:47'),
(19, 3, 'login', 'insert', '1', NULL, NULL, NULL, NULL, 1, '2018-12-16 15:42:24'),
(20, 3, 'login', 'insert', '1', NULL, NULL, NULL, NULL, 1, '2018-12-16 15:49:17'),
(21, 3, 'student', 'update', '10071', NULL, NULL, NULL, NULL, 0, '2018-12-16 16:17:00'),
(22, 3, 'admit_program', 'update', '103', NULL, NULL, NULL, NULL, 0, '2018-12-17 00:09:00'),
(23, 3, 'student_payment', 'insert', '50', NULL, NULL, NULL, NULL, 0, '2018-12-17 00:19:32'),
(24, 3, 'student_attendence', 'insert', '65', NULL, NULL, NULL, NULL, 0, '2018-12-17 00:26:44'),
(25, 3, 'student_attendence', 'insert', '66', NULL, NULL, NULL, NULL, 0, '2018-12-17 00:26:44'),
(26, 3, 'admit_program', 'update', '106', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36', NULL, '{"id": "106", "batch_id": "12"}', 0, '2018-12-17 02:02:41'),
(27, 3, 'admit_program', 'update', '106', '::1', 'Google Chrome', NULL, '{"id": "106", "batch_id": "11"}', 0, '2018-12-17 02:04:21'),
(28, 3, 'admit_program', 'update', '106', '::1', 'Google Chrome', '{"id": "106", "admit_by": "3", "batch_id": "11", "admit_date": "2018-12-16 14:46:01", "program_id": "8", "student_id": "10071"}', '{"id": "106", "batch_id": "12"}', 0, '2018-12-17 02:15:32'),
(29, 3, 'admit_program', 'update', '106', '::1', 'Google Chrome', '{"id": "106", "admit_by": "3", "batch_id": "12", "admit_date": "2018-12-16 14:46:01", "program_id": "8", "student_id": "10071"}', '{"id": "106", "admit_by": "3", "batch_id": "11", "admit_date": "2018-12-16 14:46:01", "program_id": "8", "student_id": "10071"}', 0, '2018-12-17 02:18:14'),
(30, 3, 'admit_program', 'update', '105', '::1', 'Google Chrome', '{"id": "105", "admit_by": "3", "batch_id": "12", "admit_date": "2018-12-16 14:34:55", "program_id": "13", "student_id": "10071"}', '{"id": "105", "admit_by": "3", "batch_id": "23", "admit_date": "2018-12-16 14:34:55", "program_id": "13", "student_id": "10071"}', 0, '2018-12-17 02:20:53'),
(31, 3, 'student_payment', 'update', '48', '::1', 'Google Chrome', '{"id": "48", "date": "2018-12-16 14:46:54", "type": "1", "year": "0", "month": "0", "add_by": "3", "total_fee": "3000", "program_id": "13", "student_id": "10071"}', '{"id": "48", "date": "2018-12-16 14:46:54", "type": "1", "year": "0", "month": "0", "add_by": "3", "total_fee": "2000", "program_id": "13", "student_id": "10071"}', 0, '2018-12-17 02:21:25'),
(32, 5, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-17 02:43:15'),
(33, 5, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-17 02:43:47'),
(34, 5, 'admit_program', 'update', '104', '::1', 'Google Chrome', '{"id":"104","student_id":"10001","program_id":"13","batch_id":"12","admit_date":"2018-12-15 04:53:19","admit_by":"3"}', '{"id":"104","student_id":"10001","program_id":"13","batch_id":"23","admit_date":"2018-12-15 04:53:19","admit_by":"3"}', 0, '2018-12-17 02:44:28'),
(35, 5, 'receive_payment', 'delete', '63', '::1', 'Google Chrome', '{"id":"63","payment_id":"38","pay":"5000","sms":"0","date":"2018-12-07 00:21:37","add_by":"3"}', 'null', 0, '2018-12-17 02:45:53'),
(36, 5, 'receive_payment', 'insert', '78', '::1', 'Google Chrome', '', '{"id":"78","payment_id":"38","pay":"300","sms":"0","date":"2018-12-17 02:46:40","add_by":"5"}', 0, '2018-12-17 02:46:40'),
(37, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-17 02:47:39'),
(38, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"d4fc23375ec457523736a83bc9e8815a2bf434e987d0c45a769104c566050283","permit":"4","theme":"12"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', 0, '2018-12-17 02:48:20'),
(39, 3, 'student_attendence', 'update', '65', '::1', 'Google Chrome', '{"id":"65","student_id":"10001","program_id":"13","status":"1","date":"2018-12-17"}', '{"id":"65","student_id":"10001","program_id":"13","status":"1","date":"2018-12-17"}', 0, '2018-12-17 02:57:04'),
(40, 3, 'student_attendence', 'update', '66', '::1', 'Google Chrome', '{"id":"66","student_id":"10071","program_id":"13","status":"0","date":"2018-12-17"}', '{"id":"66","student_id":"10071","program_id":"13","status":"0","date":"2018-12-17"}', 0, '2018-12-17 02:57:05'),
(41, 3, 'student_attendence', 'insert', '67', '::1', 'Google Chrome', '', '{"id":"67","student_id":"10001","program_id":"8","status":"1","date":"2018-12-17"}', 0, '2018-12-17 02:57:26'),
(42, 3, 'student_attendence', 'insert', '68', '::1', 'Google Chrome', '', '{"id":"68","student_id":"10046","program_id":"8","status":"1","date":"2018-12-17"}', 0, '2018-12-17 02:57:26'),
(43, 3, 'student_attendence', 'insert', '69', '::1', 'Google Chrome', '', '{"id":"69","student_id":"10048","program_id":"8","status":"0","date":"2018-12-17"}', 0, '2018-12-17 02:57:26'),
(44, 3, 'student_attendence', 'insert', '70', '::1', 'Google Chrome', '', '{"id":"70","student_id":"10049","program_id":"8","status":"1","date":"2018-12-17"}', 0, '2018-12-17 02:57:26'),
(45, 3, 'student_attendence', 'insert', '71', '::1', 'Google Chrome', '', '{"id":"71","student_id":"10052","program_id":"8","status":"0","date":"2018-12-17"}', 0, '2018-12-17 02:57:26'),
(46, 3, 'student_attendence', 'insert', '72', '::1', 'Google Chrome', '', '{"id":"72","student_id":"10067","program_id":"8","status":"1","date":"2018-12-17"}', 0, '2018-12-17 02:57:26'),
(47, 3, 'student_attendence', 'update', '67', '::1', 'Google Chrome', '{"id":"67","student_id":"10001","program_id":"8","status":"1","date":"2018-12-17"}', '{"id":"67","student_id":"10001","program_id":"8","status":"0","date":"2018-12-17"}', 0, '2018-12-17 02:57:33'),
(48, 3, 'student_attendence', 'update', '68', '::1', 'Google Chrome', '{"id":"68","student_id":"10046","program_id":"8","status":"1","date":"2018-12-17"}', '{"id":"68","student_id":"10046","program_id":"8","status":"1","date":"2018-12-17"}', 0, '2018-12-17 02:57:33'),
(49, 3, 'student_attendence', 'update', '69', '::1', 'Google Chrome', '{"id":"69","student_id":"10048","program_id":"8","status":"0","date":"2018-12-17"}', '{"id":"69","student_id":"10048","program_id":"8","status":"0","date":"2018-12-17"}', 0, '2018-12-17 02:57:33'),
(50, 3, 'student_attendence', 'update', '70', '::1', 'Google Chrome', '{"id":"70","student_id":"10049","program_id":"8","status":"1","date":"2018-12-17"}', '{"id":"70","student_id":"10049","program_id":"8","status":"1","date":"2018-12-17"}', 0, '2018-12-17 02:57:33'),
(51, 3, 'student_attendence', 'update', '71', '::1', 'Google Chrome', '{"id":"71","student_id":"10052","program_id":"8","status":"0","date":"2018-12-17"}', '{"id":"71","student_id":"10052","program_id":"8","status":"0","date":"2018-12-17"}', 0, '2018-12-17 02:57:33'),
(52, 3, 'student_attendence', 'update', '72', '::1', 'Google Chrome', '{"id":"72","student_id":"10067","program_id":"8","status":"1","date":"2018-12-17"}', '{"id":"72","student_id":"10067","program_id":"8","status":"1","date":"2018-12-17"}', 0, '2018-12-17 02:57:33'),
(53, 3, 'batch', 'insert', '24', '::1', 'Google Chrome', '', '{"id":"24","name":"Section 3","start":"8:00 AM","end":"10:00 AM","day":"1"}', 0, '2018-12-17 03:02:33'),
(54, 3, 'batch', 'update', '24', '::1', 'Google Chrome', '{"id":"24","name":"Section 3","start":"8:00 AM","end":"10:00 AM","day":"1"}', '{"id":"24","name":"Section 3","start":"8:00 AM","end":"10:00 AM","day":"1,7"}', 0, '2018-12-17 03:03:06'),
(55, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-17 03:41:23'),
(56, 3, 'login', 'insert', '1', '::1', 'Mozilla Firefox', '', '', 1, '2018-12-17 04:01:07'),
(57, 3, 'student', 'insert', '10072', '::1', 'Mozilla Firefox', '', '{"id":"10072","name":"test_site_activity","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"0","father_mobile":"0","mother_mobile":"0","nick":"site_activity","program":"2","batch":"1","fee":"1500","address":"","birth_day":"2018-12-17","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-12-16"}', 0, '2018-12-17 04:02:00'),
(58, 3, 'admit_program', 'insert', '107', '::1', 'Mozilla Firefox', '', '{"id":"107","student_id":"10072","program_id":"13","batch_id":"23","admit_date":"2018-12-17 04:02:18","admit_by":"3"}', 0, '2018-12-17 04:02:18'),
(59, 3, 'admit_program', 'update', '107', '::1', 'Mozilla Firefox', '{"id":"107","student_id":"10072","program_id":"13","batch_id":"23","admit_date":"2018-12-17 04:02:18","admit_by":"3"}', '{"id":"107","student_id":"10072","program_id":"13","batch_id":"12","admit_date":"2018-12-17 04:02:18","admit_by":"3"}', 0, '2018-12-17 04:02:28'),
(60, 3, 'student_payment', 'insert', '51', '::1', 'Mozilla Firefox', '', '{"id":"51","student_id":"10072","program_id":"13","type":"1","year":"0","month":"0","total_fee":"4000","date":"2018-12-17 04:04:29","add_by":"3"}', 0, '2018-12-17 04:04:29'),
(61, 3, 'receive_payment', 'insert', '79', '::1', 'Mozilla Firefox', '', '{"id":"79","payment_id":"51","pay":"800","sms":"0","date":"2018-12-17 04:04:53","add_by":"3"}', 0, '2018-12-17 04:04:53'),
(62, 3, 'receive_payment', 'insert', '80', '::1', 'Mozilla Firefox', '', '{"id":"80","payment_id":"51","pay":"200","sms":"0","date":"2018-12-17 04:11:53","add_by":"3"}', 0, '2018-12-17 04:11:53'),
(63, 3, 'student', 'update', '10072', '::1', 'Mozilla Firefox', '{"id":"10072","name":"test_site_activity","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"0","father_mobile":"0","mother_mobile":"0","nick":"site_activity","program":"2","batch":"1","fee":"1500","address":"","birth_day":"2018-12-17","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-12-16"}', '{"id":"10072","name":"test_site_activity","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"01991223020","father_mobile":"0","mother_mobile":"0","nick":"site_activity","program":"2","batch":"1","fee":"1500","address":"","birth_day":"2018-12-17","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-12-16"}', 0, '2018-12-17 04:13:22'),
(64, 3, 'sms_add', 'update', '8', '::1', 'Google Chrome', '{"id":"8","total_sms":"17","pay":"1","total_send":"17","start":"2018-12-01","end":"2018-12-31","date":"2018-12-15 04:57:38","add_by":"3"}', '{"id":"8","total_sms":"20","pay":"1","total_send":"17","start":"2018-12-01","end":"2018-12-31","date":"2018-12-15 04:57:38","add_by":"3"}', 0, '2018-12-17 04:14:16'),
(65, 3, 'student_payment', 'update', '51', '::1', 'Mozilla Firefox', '{"id":"51","student_id":"10072","program_id":"13","type":"1","year":"0","month":"0","total_fee":"4000","date":"2018-12-17 04:04:29","add_by":"3"}', '{"id":"51","student_id":"10072","program_id":"13","type":"1","year":"0","month":"0","total_fee":"3000","date":"2018-12-17 04:04:29","add_by":"3"}', 0, '2018-12-17 04:27:00'),
(66, 3, 'receive_payment', 'insert', '81', '::1', 'Mozilla Firefox', '', '{"id":"81","payment_id":"51","pay":"500","sms":"0","date":"2018-12-17 04:27:55","add_by":"3"}', 0, '2018-12-17 04:27:55'),
(67, 3, 'receive_payment', 'insert', '82', '::1', 'Mozilla Firefox', '', '{"id":"82","payment_id":"51","pay":"100","sms":"0","date":"2018-12-17 04:28:09","add_by":"3"}', 0, '2018-12-17 04:28:09'),
(68, 5, 'login', 'insert', '1', '::1', 'Mozilla Firefox', '', '', 1, '2018-12-17 04:28:43'),
(69, 5, 'admit_program', 'insert', '108', '::1', 'Mozilla Firefox', '', '{"id":"108","student_id":"10072","program_id":"4","batch_id":"15","admit_date":"2018-12-17 04:29:28","admit_by":"5"}', 0, '2018-12-17 04:29:28'),
(70, 5, 'admit_program', 'update', '108', '::1', 'Mozilla Firefox', '{"id":"108","student_id":"10072","program_id":"4","batch_id":"15","admit_date":"2018-12-17 04:29:28","admit_by":"5"}', '{"id":"108","student_id":"10072","program_id":"4","batch_id":"15","admit_date":"2018-12-17 04:29:28","admit_by":"5"}', 0, '2018-12-17 04:30:02'),
(71, 5, 'student_payment', 'insert', '52', '::1', 'Mozilla Firefox', '', '{"id":"52","student_id":"10072","program_id":"4","type":"1","year":"0","month":"0","total_fee":"500","date":"2018-12-17 04:34:03","add_by":"5"}', 0, '2018-12-17 04:34:03'),
(72, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-17 04:39:52'),
(73, 3, 'expence', 'insert', '7', '::1', 'Google Chrome', '', '{"id":"7","name":"treat","amount":"7000","notes":"treat","add_by":"3","date":"2018-12-17 04:41:42"}', 0, '2018-12-17 04:41:42'),
(74, 3, 'expence', 'update', '5', '::1', 'Google Chrome', '{"id":"5","name":"book","amount":"7000","notes":"","add_by":"3","date":"2018-12-14 09:35:54"}', '{"id":"5","name":"book","amount":"4000","notes":"","add_by":"3","date":"2018-12-14 09:35:54"}', 0, '2018-12-17 04:43:47'),
(75, 3, 'expence', 'update', '5', '::1', 'Google Chrome', '{"id":"5","name":"book","amount":"4000","notes":"","add_by":"3","date":"2018-12-14 09:35:54"}', '{"id":"5","name":"book","amount":"3000","notes":"","add_by":"3","date":"2018-12-14 09:35:54"}', 0, '2018-12-17 04:55:20'),
(76, 3, 'expence', 'update', '7', '::1', 'Google Chrome', '{"id":"7","name":"treat","amount":"7000","notes":"treat","add_by":"3","date":"2018-12-17 04:41:42"}', '{"id":"7","name":"treat1","amount":"6000","notes":"no treat","add_by":"3","date":"2018-12-17 04:41:42"}', 0, '2018-12-17 06:32:40'),
(77, 3, 'student', 'update', '10051', '::1', 'Google Chrome', '{"id":"10051","name":"Sk.Amir Hamza","father_name":"dsf","mother_name":"sdf","email":"sk.amirhamza@gmail.com","photo":"10051.jpg","personal_mobile":"01991223020","father_mobile":"01991223020","mother_mobile":"0","nick":"Hamza","program":"3","batch":"1","fee":"15000","address":"Dhaka","birth_day":"2018-08-23","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-08-08"}', '{"id":"10051","name":"Sk.Amir Hamza","father_name":"dsf","mother_name":"sdf","email":"sk.amirhamza@gmail.com","photo":"10051.jpg","personal_mobile":"01991223020","father_mobile":"01991223020","mother_mobile":"01731133913","nick":"Hamza","program":"3","batch":"1","fee":"15000","address":"Dhaka","birth_day":"2018-08-23","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-08-08"}', 0, '2018-12-17 06:55:40'),
(78, 3, 'receive_payment', 'insert', '83', '::1', 'Google Chrome', '', '{"id":"83","payment_id":"50","pay":"500","sms":"0","date":"2018-12-17 07:20:32","add_by":"3"}', 0, '2018-12-17 07:20:32'),
(79, 3, 'receive_payment', 'delete', '83', '::1', 'Google Chrome', '{"id":"83","payment_id":"50","pay":"500","sms":"0","date":"2018-12-17 07:20:32","add_by":"3"}', 'null', 0, '2018-12-17 07:20:49'),
(80, 3, 'sms_add', 'update', '8', '::1', 'Google Chrome', '{"id":"8","total_sms":"20","pay":"1","total_send":"18","start":"2018-12-01","end":"2018-12-31","date":"2018-12-15 04:57:38","add_by":"3"}', '{"id":"8","total_sms":"22","pay":"1","total_send":"18","start":"2018-12-01","end":"2018-12-31","date":"2018-12-15 04:57:38","add_by":"3"}', 0, '2018-12-17 07:28:25'),
(81, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', 0, '2018-12-17 08:07:02'),
(82, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', 0, '2018-12-17 08:18:50'),
(83, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', 0, '2018-12-17 08:23:24'),
(84, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-17 12:30:45'),
(85, 5, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-17 12:31:22'),
(86, 5, 'admit_program', 'update', '108', '::1', 'Google Chrome', '{"id":"108","student_id":"10072","program_id":"4","batch_id":"15","admit_date":"2018-12-17 04:29:28","admit_by":"5"}', '{"id":"108","student_id":"10072","program_id":"4","batch_id":"1","admit_date":"2018-12-17 04:29:28","admit_by":"5"}', 0, '2018-12-17 12:33:44'),
(87, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-17 12:34:27'),
(88, 3, 'receive_payment', 'delete', '81', '::1', 'Google Chrome', '{"id":"81","payment_id":"51","pay":"500","sms":"0","date":"2018-12-17 04:27:55","add_by":"3"}', 'null', 0, '2018-12-17 13:02:55'),
(89, 3, 'student_payment', 'update', '51', '::1', 'Google Chrome', '{"id":"51","student_id":"10072","program_id":"13","type":"1","year":"0","month":"0","total_fee":"3000","date":"2018-12-17 04:04:29","add_by":"3"}', '{"id":"51","student_id":"10072","program_id":"13","type":"1","year":"0","month":"0","total_fee":"2000","date":"2018-12-17 04:04:29","add_by":"3"}', 0, '2018-12-17 13:03:17'),
(90, 3, 'admit_program', 'insert', '109', '::1', 'Google Chrome', '', '{"id":"109","student_id":"10072","program_id":"8","batch_id":"12","admit_date":"2018-12-17 14:13:14","admit_by":"3"}', 0, '2018-12-17 14:13:14'),
(91, 3, 'admit_program', 'update', '109', '::1', 'Google Chrome', '{"id":"109","student_id":"10072","program_id":"8","batch_id":"12","admit_date":"2018-12-17 14:13:14","admit_by":"3"}', '{"id":"109","student_id":"10072","program_id":"8","batch_id":"11","admit_date":"2018-12-17 14:13:14","admit_by":"3"}', 0, '2018-12-17 14:13:41'),
(92, 3, 'student', 'update', '10072', '::1', 'Google Chrome', '{"id":"10072","name":"test_site_activity","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"01991223020","father_mobile":"0","mother_mobile":"0","nick":"site_activity","program":"2","batch":"1","fee":"1500","address":"","birth_day":"2018-12-17","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-12-16"}', '{"id":"10072","name":"site_activity","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"01991223020","father_mobile":"0","mother_mobile":"0","nick":"activity","program":"2","batch":"1","fee":"1500","address":"","birth_day":"2018-12-17","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-12-16"}', 0, '2018-12-17 14:17:12'),
(93, 3, 'expence', 'insert', '8', '::1', 'Google Chrome', '', '{"id":"8","name":"kolom","amount":"1000","notes":"Buy Kolom","add_by":"3","date":"2018-12-17 19:01:14"}', 0, '2018-12-17 19:01:14'),
(94, 3, 'expence', 'update', '8', '::1', 'Google Chrome', '{"id":"8","name":"kolom","amount":"1000","notes":"Buy Kolom","add_by":"3","date":"2018-12-17 19:01:14"}', '{"id":"8","name":"kolom","amount":"100","notes":"Buy Kolom","add_by":"3","date":"2018-12-17 19:01:14"}', 0, '2018-12-17 19:01:38'),
(95, 5, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-18 02:43:25'),
(96, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-18 02:43:46'),
(97, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-19 01:59:30'),
(98, 3, 'student_payment', 'insert', '53', '::1', 'Google Chrome', '', '{"id":"53","student_id":"10001","program_id":"13","type":"2","year":"2019","month":"1","total_fee":"1000","date":"2018-12-19 03:11:58","add_by":"3"}', 0, '2018-12-19 03:11:59'),
(99, 3, 'receive_payment', 'insert', '84', '::1', 'Google Chrome', '', '{"id":"84","payment_id":"53","pay":"1000","sms":"0","date":"2018-12-19 03:12:08","add_by":"3"}', 0, '2018-12-19 03:12:08'),
(100, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-19 11:48:59'),
(101, 3, 'receive_payment', 'insert', '85', '::1', 'Google Chrome', '', '{"id":"85","payment_id":"13","pay":"100","sms":"0","date":"2018-12-19 12:52:07","add_by":"3"}', 0, '2018-12-19 12:52:07'),
(102, 3, 'receive_payment', 'delete', '85', '::1', 'Google Chrome', '{"id":"85","payment_id":"13","pay":"100","sms":"0","date":"2018-12-19 12:52:07","add_by":"3"}', 'null', 0, '2018-12-19 12:52:31'),
(103, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-20 06:53:42'),
(104, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"19"}', 0, '2018-12-20 15:30:31'),
(105, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"19"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"19"}', 0, '2018-12-20 15:30:34'),
(106, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"19"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', 0, '2018-12-20 15:35:51'),
(107, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-20 17:50:59'),
(108, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-21 09:41:45'),
(109, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-21 09:45:33'),
(110, 3, 'sms_add', 'update', '8', '::1', 'Google Chrome', '{"id":"8","total_sms":"22","pay":"1","total_send":"21","start":"2018-12-01","end":"2018-12-31","date":"2018-12-15 04:57:38","add_by":"3"}', '{"id":"8","total_sms":"50","pay":"1","total_send":"21","start":"2018-12-01","end":"2018-12-31","date":"2018-12-15 04:57:38","add_by":"3"}', 0, '2018-12-22 10:45:17'),
(111, 3, 'student', 'insert', '10073', '::1', 'Google Chrome', '', '{"id":"10073","name":"rihan full","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"01717541842","father_mobile":"0","mother_mobile":"0","nick":"rihan","program":"2","batch":"1","fee":"1500","address":"","birth_day":"2018-12-20","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-12-22"}', 0, '2018-12-22 10:45:58'),
(112, 3, 'admit_program', 'insert', '110', '::1', 'Google Chrome', '', '{"id":"110","student_id":"10073","program_id":"13","batch_id":"23","admit_date":"2018-12-22 10:46:18","admit_by":"3"}', 0, '2018-12-22 10:46:18'),
(113, 3, 'student_payment', 'insert', '54', '::1', 'Google Chrome', '', '{"id":"54","student_id":"10073","program_id":"13","type":"2","year":"2019","month":"3","total_fee":"1000","date":"2018-12-22 10:47:43","add_by":"3"}', 0, '2018-12-22 10:47:43'),
(114, 3, 'receive_payment', 'insert', '86', '::1', 'Google Chrome', '', '{"id":"86","payment_id":"54","pay":"1000","sms":"0","date":"2018-12-22 10:47:52","add_by":"3"}', 0, '2018-12-22 10:47:52'),
(115, 3, 'notice', 'insert', '24', '::1', 'Google Chrome', '', '{"id":"24","title":"pohela","description":"Dear {{student_name}},\nPohela Boishak","date":"2018-12-22 10:51:24","add_by":"3"}', 0, '2018-12-22 10:51:24'),
(116, 3, 'program', 'insert', '14', '::1', 'Google Chrome', '', '{"id":"14","name":"Class Two","start":"2019-01-01","end":"2019-12-31","subject":"","batch":"24,22","fee":"5000","type":"2","monthly_fee":"500","add_by":"3","date":"2018-12-22 10:52:42"}', 0, '2018-12-22 10:52:42'),
(117, 3, 'admit_program', 'insert', '111', '::1', 'Google Chrome', '', '{"id":"111","student_id":"10073","program_id":"14","batch_id":"24","admit_date":"2018-12-22 10:53:19","admit_by":"3"}', 0, '2018-12-22 10:53:19'),
(118, 3, 'notice', 'update', '24', '::1', 'Google Chrome', '{"id":"24","title":"pohela","description":"Dear {{student_name}},\nPohela Boishak","date":"2018-12-22 10:51:24","add_by":"3"}', '{"id":"24","title":"pohela","description":"Dear {{student_name}},\nYour class off","date":"2018-12-22 10:51:24","add_by":"3"}', 0, '2018-12-22 10:54:23'),
(119, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"14"}', 0, '2018-12-22 22:43:23'),
(120, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"14"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', 0, '2018-12-22 23:20:13'),
(121, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"14"}', 0, '2018-12-22 23:23:26'),
(122, 3, 'student_payment', 'insert', '55', '::1', 'Google Chrome', '', '{"id":"55","student_id":"10001","program_id":"13","type":"1","year":"0","month":"0","total_fee":"4000","date":"2018-12-22 23:24:27","add_by":"3"}', 0, '2018-12-22 23:24:27'),
(123, 3, 'receive_payment', 'insert', '87', '::1', 'Google Chrome', '', '{"id":"87","payment_id":"55","pay":"3000","sms":"0","date":"2018-12-22 23:24:38","add_by":"3"}', 0, '2018-12-22 23:24:38'),
(124, 3, 'student', 'update', '10073', '::1', 'Google Chrome', '{"id":"10073","name":"rihan full","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"01717541842","father_mobile":"0","mother_mobile":"0","nick":"rihan","program":"2","batch":"1","fee":"1500","address":"","birth_day":"2018-12-20","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-12-22"}', '{"id":"10073","name":"rihan full","father_name":"","mother_name":"","email":"","photo":"10073.PNG","personal_mobile":"01717541842","father_mobile":"0","mother_mobile":"0","nick":"rihan","program":"2","batch":"1","fee":"1500","address":"","birth_day":"2018-12-20","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-12-22"}', 0, '2018-12-24 01:07:03'),
(125, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-25 23:54:34'),
(126, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-26 00:51:30'),
(127, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"14"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', 0, '2018-12-26 12:24:51'),
(128, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', 0, '2018-12-26 13:49:17'),
(129, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', 0, '2018-12-26 13:51:53'),
(130, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', 0, '2018-12-26 15:11:51'),
(131, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', 0, '2018-12-26 15:11:56'),
(132, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"8"}', 0, '2018-12-26 15:16:27'),
(133, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"8"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', 0, '2018-12-26 15:16:57'),
(134, 3, 'student_payment', 'insert', '56', '::1', 'Google Chrome', '', '{"id":"56","student_id":"10011","program_id":"3","type":"1","year":"0","month":"0","total_fee":"15000","date":"2018-12-26 15:47:17","add_by":"3"}', 0, '2018-12-26 15:47:17'),
(135, 3, 'receive_payment', 'insert', '88', '::1', 'Google Chrome', '', '{"id":"88","payment_id":"56","pay":"5000","sms":"0","date":"2018-12-26 15:47:32","add_by":"3"}', 0, '2018-12-26 15:47:32'),
(136, 3, 'student_payment', 'insert', '57', '::1', 'Google Chrome', '', '{"id":"57","student_id":"10011","program_id":"2","type":"1","year":"0","month":"0","total_fee":"17000","date":"2018-12-26 17:48:43","add_by":"3"}', 0, '2018-12-26 17:48:43'),
(137, 3, 'receive_payment', 'insert', '89', '::1', 'Google Chrome', '', '{"id":"89","payment_id":"57","pay":"1600","sms":"0","date":"2018-12-26 17:48:52","add_by":"3"}', 0, '2018-12-26 17:48:52'),
(138, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"15"}', 0, '2018-12-26 21:15:23'),
(139, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"15"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"17"}', 0, '2018-12-26 21:15:32'),
(140, 3, 'program', 'insert', '15', '::1', 'Google Chrome', '', '{"id":"15","name":"Class Five 2019","start":"2018-12-01","end":"2018-12-31","subject":"27","batch":"23","fee":"5000","type":"1","monthly_fee":"0","add_by":"3","date":"2018-12-26 22:57:27"}', 0, '2018-12-26 22:57:27'),
(141, 3, 'admit_program', 'insert', '112', '::1', 'Google Chrome', '', '{"id":"112","student_id":"10051","program_id":"15","batch_id":"23","admit_date":"2018-12-26 22:58:40","admit_by":"3"}', 0, '2018-12-26 22:58:40'),
(142, 3, 'student', 'update', '10052', '::1', 'Google Chrome', '{"id":"10052","name":"fdg","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"0","father_mobile":"0","mother_mobile":"0","nick":"fdsg","program":"2","batch":"1","fee":"17000","address":"","birth_day":"2018-08-15","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-08-08"}', '{"id":"10052","name":"amir","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"01777564786","father_mobile":"0","mother_mobile":"0","nick":"amir","program":"2","batch":"1","fee":"17000","address":"","birth_day":"2018-08-15","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-08-08"}', 0, '2018-12-26 23:38:23'),
(143, 3, 'admit_program', 'insert', '113', '::1', 'Google Chrome', '', '{"id":"113","student_id":"10052","program_id":"15","batch_id":"23","admit_date":"2018-12-26 23:38:35","admit_by":"3"}', 0, '2018-12-26 23:38:35'),
(144, 3, 'student', 'update', '10053', '::1', 'Google Chrome', '{"id":"10053","name":"test1","father_name":"sdf","mother_name":"sdf","email":"","photo":"10053.jpg","personal_mobile":"0","father_mobile":"0","mother_mobile":"0","nick":"test","program":"2","batch":"1","fee":"17000","address":"","birth_day":"2018-08-09","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-08-08"}', '{"id":"10053","name":"test1","father_name":"sdf","mother_name":"sdf","email":"","photo":"10053.jpg","personal_mobile":"01991223020","father_mobile":"0","mother_mobile":"0","nick":"test","program":"2","batch":"1","fee":"17000","address":"","birth_day":"2018-08-09","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-08-08"}', 0, '2018-12-27 12:38:39'),
(145, 3, 'admit_program', 'insert', '114', '::1', 'Google Chrome', '', '{"id":"114","student_id":"10053","program_id":"15","batch_id":"23","admit_date":"2018-12-27 12:39:10","admit_by":"3"}', 0, '2018-12-27 12:39:10'),
(146, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"17"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"10"}', 0, '2018-12-27 12:46:38'),
(147, 3, 'student', 'insert', '10074', '::1', 'Google Chrome', '', '{"id":"10074","name":"test123","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"0","father_mobile":"0","mother_mobile":"0","nick":"test ","program":"2","batch":"1","fee":"1500","address":"","birth_day":"2018-12-27","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-12-27"}', 0, '2018-12-27 12:52:56'),
(148, 3, 'student', 'insert', '10075', '::1', 'Google Chrome', '', '{"id":"10075","name":"gfh","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"0","father_mobile":"0","mother_mobile":"0","nick":"gh","program":"2","batch":"1","fee":"1500","address":"","birth_day":"2018-12-07","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-12-27"}', 0, '2018-12-27 12:54:25'),
(149, 3, 'student', 'insert', '10076', '::1', 'Google Chrome', '', '{"id":"10076","name":"test","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"0","father_mobile":"0","mother_mobile":"0","nick":"test","program":"2","batch":"1","fee":"1500","address":"","birth_day":"2018-11-28","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-12-27"}', 0, '2018-12-27 13:00:16'),
(150, 3, 'student_payment', 'insert', '58', '::1', 'Google Chrome', '', '{"id":"58","student_id":"10071","program_id":"8","type":"2","year":"2019","month":"6","total_fee":"500","date":"2018-12-27 23:56:39","add_by":"3"}', 0, '2018-12-27 23:56:39'),
(151, 3, 'receive_payment', 'insert', '90', '::1', 'Google Chrome', '', '{"id":"90","payment_id":"58","pay":"400","sms":"0","date":"2018-12-27 23:58:33","add_by":"3"}', 0, '2018-12-27 23:58:33'),
(152, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"10"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"17"}', 0, '2018-12-28 00:07:43'),
(153, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"17"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', 0, '2018-12-28 00:07:59'),
(154, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"17"}', 0, '2018-12-28 00:08:04'),
(155, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"17"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"15"}', 0, '2018-12-28 00:08:12'),
(156, 3, 'student_payment', 'insert', '59', '::1', 'Google Chrome', '', '{"id":"59","student_id":"10051","program_id":"15","type":"1","year":"0","month":"0","total_fee":"5000","date":"2018-12-28 00:43:24","add_by":"3"}', 0, '2018-12-28 00:43:24'),
(157, 3, 'receive_payment', 'insert', '91', '::1', 'Google Chrome', '', '{"id":"91","payment_id":"59","pay":"5000","sms":"0","date":"2018-12-28 00:43:34","add_by":"3"}', 0, '2018-12-28 00:43:34'),
(158, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"15"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', 0, '2018-12-28 14:01:21'),
(159, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2018-12-30 01:10:41'),
(160, 3, 'student', 'update', '10051', '::1', 'Google Chrome', '{"id":"10051","name":"Sk.Amir Hamza","father_name":"dsf","mother_name":"sdf","email":"sk.amirhamza@gmail.com","photo":"10051.jpg","personal_mobile":"01991223020","father_mobile":"01991223020","mother_mobile":"01731133913","nick":"Hamza","address":"Dhaka","birth_day":"2018-08-23","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-08-08 00:00:00"}', '{"id":"10051","name":"Sk.Amir Hamza","father_name":"","mother_name":"","email":"sk.amirhamza@gmail.com","photo":"10051.jpg","personal_mobile":"01991223020","father_mobile":"01991223020","mother_mobile":"01731133913","nick":"A. Hamza","address":"Dhaka","birth_day":"2018-08-23","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-08-08 00:00:00"}', 0, '2018-12-31 00:04:27'),
(161, 3, 'sms_add', 'insert', '9', '::1', 'Google Chrome', '', '{"id":"9","total_sms":"100","pay":"50","total_send":"0","start":"2019-01-01","end":"2019-01-31","date":"2019-01-02 00:38:11","add_by":"3"}', 0, '2019-01-02 00:38:11'),
(162, 3, 'income', 'update', '1', '::1', 'Google Chrome', '{"id":"1","name":"direy","amount":"6000","notes":"sell direay","add_by":"3","date":"2019-01-30 03:13:00"}', '{"id":"1","name":"direy","amount":"6000","notes":"sell direayy","add_by":"3","date":"2019-01-30 03:13:00"}', 0, '2019-01-02 19:45:58'),
(163, 3, 'income', 'insert', '2', '::1', 'Google Chrome', '', '{"id":"2","name":"book","amount":"500","notes":"","add_by":"3","date":"2019-01-02 19:46:13"}', 0, '2019-01-02 19:46:13'),
(164, 3, 'income', 'delete', '2', '::1', 'Google Chrome', '{"id":"2","name":"book","amount":"500","notes":"","add_by":"3","date":"2019-01-02 19:46:13"}', 'null', 0, '2019-01-02 19:46:36'),
(165, 3, 'income', 'delete', '1', '::1', 'Google Chrome', '{"id":"1","name":"direy","amount":"6000","notes":"sell direayy","add_by":"3","date":"2019-01-30 03:13:00"}', 'null', 0, '2019-01-02 19:46:41'),
(166, 3, 'income', 'insert', '3', '::1', 'Google Chrome', '', '{"id":"3","name":"book","amount":"500","notes":"","add_by":"3","date":"2019-01-02 19:46:50"}', 0, '2019-01-02 19:46:50'),
(167, 3, 'income', 'insert', '4', '::1', 'Google Chrome', '', '{"id":"4","name":"kolom","amount":"1000","notes":"","add_by":"3","date":"2019-01-02 19:58:37"}', 0, '2019-01-02 19:58:37'),
(168, 3, 'student', 'insert', '10077', '::1', 'Google Chrome', '', '{"id":"10077","name":"test","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"","father_mobile":"","mother_mobile":"","nick":"test","address":"","birth_day":"2019-01-24","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2019-01-02 21:45:04"}', 0, '2019-01-02 21:45:04'),
(169, 3, 'student', 'insert', '10078', '::1', 'Google Chrome', '', '{"id":"10078","name":"test123","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"","father_mobile":"","mother_mobile":"","nick":"test","address":"","birth_day":"2019-01-03","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2019-01-02 21:48:29"}', 0, '2019-01-02 21:48:29');
INSERT INTO `site_activity` (`id`, `user_id`, `table_name`, `action_type`, `table_id`, `ip`, `browser`, `previous_data`, `present_data`, `login`, `date`) VALUES
(170, 3, 'student', 'update', '10078', '::1', 'Google Chrome', '{"id":"10078","name":"test123","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"","father_mobile":"","mother_mobile":"","nick":"test","address":"","birth_day":"2019-01-03","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2019-01-02 21:48:29"}', '{"id":"10078","name":"test123","father_name":"","mother_name":"","email":"","photo":"avatar.png","personal_mobile":"01777564786","father_mobile":"0","mother_mobile":"0","nick":"test","address":"","birth_day":"2019-01-03","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2019-01-02 21:48:29"}', 0, '2019-01-02 21:48:56'),
(171, 3, 'admit_program', 'insert', '115', '::1', 'Google Chrome', '', '{"id":"115","student_id":"10078","program_id":"15","batch_id":"23","admit_date":"2019-01-02 21:49:06","admit_by":"3"}', 0, '2019-01-02 21:49:06'),
(172, 3, 'admit_program', 'update', '112', '::1', 'Google Chrome', '{"id":"112","student_id":"10051","program_id":"15","batch_id":"23","admit_date":"2018-12-26 22:58:40","admit_by":"3"}', '{"id":"112","student_id":"10051","program_id":"15","batch_id":"23","admit_date":"2018-12-26 22:58:40","admit_by":"3"}', 0, '2019-01-03 03:00:42'),
(173, 3, 'setting', 'update', '7', '::1', 'Google Chrome', '{"id":"7","option_name":"email","option_value":"sk.amir@gmail.com"}', '{"id":"7","option_name":"email","option_value":"sk.amir@gmail.com"}', 0, '2019-01-03 03:44:19'),
(174, 3, 'setting', 'update', '7', '::1', 'Google Chrome', '{"id":"7","option_name":"email","option_value":"sk.amir@gmail.com"}', '{"id":"7","option_name":"email","option_value":"techserm@gmail.com"}', 0, '2019-01-03 03:45:29'),
(175, 3, 'setting', 'update', '1', '::1', 'Google Chrome', '{"id":"1","option_name":"name","option_value":"TechSerm Education Software"}', '{"id":"1","option_name":"name","option_value":"TechSerm Software"}', 0, '2019-01-03 03:45:51'),
(176, 3, 'setting', 'update', '1', '::1', 'Google Chrome', '{"id":"1","option_name":"name","option_value":"TechSerm Software"}', '{"id":"1","option_name":"name","option_value":"TechSerm Education Software"}', 0, '2019-01-03 03:46:03'),
(177, 3, 'setting', 'update', '6', '::1', 'Google Chrome', '{"id":"6","option_name":"phone","option_value":"01991223020"}', '{"id":"6","option_name":"phone","option_value":"01777564786"}', 0, '2019-01-03 03:47:23'),
(178, 3, 'setting', 'update', '6', '::1', 'Google Chrome', '{"id":"6","option_name":"phone","option_value":"01777564786"}', '{"id":"6","option_name":"phone","option_value":""}', 0, '2019-01-03 03:49:57'),
(179, 3, 'setting', 'update', '6', '::1', 'Google Chrome', '{"id":"6","option_name":"phone","option_value":""}', '{"id":"6","option_name":"phone","option_value":"01777564786"}', 0, '2019-01-03 03:50:40'),
(180, 3, 'setting', 'update', '1', '::1', 'Google Chrome', '{"id":"1","option_name":"name","option_value":"TechSerm Education Software"}', '{"id":"1","option_name":"name","option_value":""}', 0, '2019-01-03 03:50:52'),
(181, 3, 'setting', 'update', '1', '::1', 'Google Chrome', '{"id":"1","option_name":"name","option_value":""}', '{"id":"1","option_name":"name","option_value":"TechSerm Education Software"}', 0, '2019-01-03 03:51:18'),
(182, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', 0, '2019-01-03 03:54:29'),
(183, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', 0, '2019-01-03 03:54:46'),
(184, 3, 'setting', 'update', '4', '::1', 'Google Chrome', '{"id":"4","option_name":"main_logo","option_value":"techserm_full_logo.jpg"}', '{"id":"4","option_name":"main_logo","option_value":"main_logo.jpg"}', 0, '2019-01-03 04:23:56'),
(185, 3, 'setting', 'update', '4', '::1', 'Google Chrome', '{"id":"4","option_name":"main_logo","option_value":"main_logo.jpg"}', '{"id":"4","option_name":"main_logo","option_value":"main_logo.PNG"}', 0, '2019-01-03 04:24:06'),
(186, 3, 'setting', 'update', '4', '::1', 'Google Chrome', '{"id":"4","option_name":"main_logo","option_value":"main_logo.PNG"}', '{"id":"4","option_name":"main_logo","option_value":"main_logo.jpg"}', 0, '2019-01-03 04:24:43'),
(187, 3, 'setting', 'update', '5', '::1', 'Google Chrome', '{"id":"5","option_name":"logo","option_value":"techserm_small_logo.png"}', '{"id":"5","option_name":"logo","option_value":"main_logo.jpg"}', 0, '2019-01-03 04:27:25'),
(188, 3, 'setting', 'update', '4', '::1', 'Google Chrome', '{"id":"4","option_name":"main_logo","option_value":"main_logo.jpg"}', '{"id":"4","option_name":"main_logo","option_value":"main_logo.jpg"}', 0, '2019-01-03 04:28:12'),
(189, 3, 'setting', 'update', '4', '::1', 'Google Chrome', '{"id":"4","option_name":"main_logo","option_value":"main_logo.jpg"}', '{"id":"4","option_name":"main_logo","option_value":"main_logo.jpg"}', 0, '2019-01-03 04:28:40'),
(190, 3, 'setting', 'update', '5', '::1', 'Google Chrome', '{"id":"5","option_name":"logo","option_value":"main_logo.jpg"}', '{"id":"5","option_name":"logo","option_value":"logo.jpg"}', 0, '2019-01-03 04:29:49'),
(191, 3, 'setting', 'update', '4', '::1', 'Google Chrome', '{"id":"4","option_name":"main_logo","option_value":"main_logo.jpg"}', '{"id":"4","option_name":"main_logo","option_value":"main_logo.jpg"}', 0, '2019-01-03 04:30:40'),
(192, 3, 'setting', 'update', '4', '::1', 'Google Chrome', '{"id":"4","option_name":"main_logo","option_value":"main_logo.jpg"}', '{"id":"4","option_name":"main_logo","option_value":"main_logo.png"}', 0, '2019-01-03 04:30:46'),
(193, 3, 'setting', 'update', '5', '::1', 'Google Chrome', '{"id":"5","option_name":"logo","option_value":"logo.jpg"}', '{"id":"5","option_name":"logo","option_value":"logo.jpg"}', 0, '2019-01-03 04:30:52'),
(194, 3, 'setting', 'update', '5', '::1', 'Google Chrome', '{"id":"5","option_name":"logo","option_value":"logo.jpg"}', '{"id":"5","option_name":"logo","option_value":"logo.jpg"}', 0, '2019-01-03 04:31:01'),
(195, 3, 'setting', 'update', '5', '::1', 'Google Chrome', '{"id":"5","option_name":"logo","option_value":"logo.jpg"}', '{"id":"5","option_name":"logo","option_value":"techserm_small_logo.png"}', 0, '2019-01-03 04:40:23'),
(196, 3, 'setting', 'update', '4', '::1', 'Google Chrome', '{"id":"4","option_name":"main_logo","option_value":"main_logo.png"}', '{"id":"4","option_name":"main_logo","option_value":"techserm_full_logo.jpg"}', 0, '2019-01-03 04:41:14'),
(197, 3, 'setting', 'update', '5', '::1', 'Google Chrome', '{"id":"5","option_name":"logo","option_value":"techserm_small_logo.png"}', '{"id":"5","option_name":"logo","option_value":"logo.jpg"}', 0, '2019-01-03 04:41:19'),
(198, 3, 'setting', 'update', '5', '::1', 'Google Chrome', '{"id":"5","option_name":"logo","option_value":"logo.jpg"}', '{"id":"5","option_name":"logo","option_value":"techserm_small_logo.png"}', 0, '2019-01-03 04:41:23'),
(199, 3, 'setting', 'update', '5', '::1', 'Google Chrome', '{"id":"5","option_name":"logo","option_value":"techserm_small_logo.png"}', '{"id":"5","option_name":"logo","option_value":"logo.jpg"}', 0, '2019-01-03 04:41:28'),
(200, 3, 'setting', 'update', '5', '::1', 'Google Chrome', '{"id":"5","option_name":"logo","option_value":"logo.jpg"}', '{"id":"5","option_name":"logo","option_value":"techserm_small_logo.png"}', 0, '2019-01-03 04:43:13'),
(201, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2019-01-03 04:55:01'),
(202, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', 0, '2019-01-03 05:30:25'),
(203, 3, 'setting', 'update', '5', '::1', 'Google Chrome', '{"id":"5","option_name":"logo","option_value":"techserm_small_logo.png"}', '{"id":"5","option_name":"logo","option_value":"logo.jpg"}', 0, '2019-01-03 15:15:40'),
(204, 3, 'setting', 'update', '3', '::1', 'Google Chrome', '{"id":"3","option_name":"address","option_value":"Aftab Nogor,Dhaka,Bangladesh"}', '{"id":"3","option_name":"address","option_value":"Aftab Nogor,Dhaka,Bangladesh,Asia"}', 0, '2019-01-03 15:16:07'),
(205, 3, 'setting', 'update', '3', '::1', 'Google Chrome', '{"id":"3","option_name":"address","option_value":"Aftab Nogor,Dhaka,Bangladesh,Asia"}', '{"id":"3","option_name":"address","option_value":"Aftab Nogor,Dhaka,Bangladesh"}', 0, '2019-01-03 15:16:23'),
(206, 3, 'setting', 'update', '5', '::1', 'Google Chrome', '{"id":"5","option_name":"logo","option_value":"logo.jpg"}', '{"id":"5","option_name":"logo","option_value":"techserm_small_logo.png"}', 0, '2019-01-03 15:48:59'),
(207, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', 0, '2019-01-03 16:15:44'),
(208, 3, 'setting', 'update', '6', '::1', 'Google Chrome', '{"id":"6","option_name":"phone","option_value":"01777564786"}', '{"id":"6","option_name":"phone","option_value":"01991223020"}', 0, '2019-01-03 17:19:56'),
(209, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2019-01-03 18:52:24'),
(210, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"12"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"15"}', 0, '2019-01-06 22:25:14'),
(211, 3, 'setting', 'update', '5', '::1', 'Google Chrome', '{"id":"5","option_name":"logo","option_value":"techserm_small_logo.png"}', '{"id":"5","option_name":"logo","option_value":"logo.png"}', 0, '2019-01-06 22:26:56'),
(212, 3, 'setting', 'update', '5', '::1', 'Google Chrome', '{"id":"5","option_name":"logo","option_value":"logo.png"}', '{"id":"5","option_name":"logo","option_value":"techserm_small_logo.png"}', 0, '2019-01-06 22:32:58'),
(213, 3, 'setting', 'update', '3', '::1', 'Google Chrome', '{"id":"3","option_name":"address","option_value":"Aftab Nogor,Dhaka,Bangladesh"}', '{"id":"3","option_name":"address","option_value":"Aftab Nogor,Dhaka,Bangladesh sdaf sdaf"}', 0, '2019-01-06 22:36:35'),
(214, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"15"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"10"}', 0, '2019-01-07 22:06:11'),
(215, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"10"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"14"}', 0, '2019-01-07 22:06:21'),
(216, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"14"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"17"}', 0, '2019-01-07 22:06:28'),
(217, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"17"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"1"}', 0, '2019-01-07 22:06:42'),
(218, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"6"}', 0, '2019-01-07 22:06:48'),
(219, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"6"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"1"}', 0, '2019-01-07 22:07:09'),
(220, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"1"}', 0, '2019-01-07 22:10:25'),
(221, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', 0, '2019-01-08 21:11:02'),
(222, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"20"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"1"}', 0, '2019-01-08 21:11:11'),
(223, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"a","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"1"}', 0, '2019-01-09 03:53:14'),
(224, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"a","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"4","theme":"1"}', 0, '2019-01-09 03:55:29'),
(225, 3, 'setting', 'update', '2', '::1', 'Google Chrome', '{"id":"2","option_name":"sort_name","option_value":"Techserm"}', '{"id":"2","option_name":"sort_name","option_value":"Techserm Soft"}', 0, '2019-01-09 05:49:35'),
(226, 3, 'setting', 'update', '2', '::1', 'Google Chrome', '{"id":"2","option_name":"sort_name","option_value":"Techserm Soft"}', '{"id":"2","option_name":"sort_name","option_value":"TechsermSoft"}', 0, '2019-01-09 05:49:56'),
(227, 3, 'student', 'update', '10051', '::1', 'Google Chrome', '{"id":"10051","name":"Sk.Amir Hamza","father_name":"","mother_name":"","email":"sk.amirhamza@gmail.com","photo":"10051.jpg","personal_mobile":"01991223020","father_mobile":"01991223020","mother_mobile":"01731133913","nick":"A. Hamza","address":"Dhaka","birth_day":"2018-08-23","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-08-08 00:00:00"}', '{"id":"10051","name":"Sk.Amir Hamza","father_name":"","mother_name":"","email":"sk.amirhamza@gmail.com","photo":"10051.jpg","personal_mobile":"01777564786","father_mobile":"01991223020","mother_mobile":"01731133913","nick":"A. Hamza","address":"Dhaka","birth_day":"2018-08-23","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"","ssc_result":"0","date":"2018-08-08 00:00:00"}', 0, '2019-01-09 06:15:55'),
(228, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"20"}', 0, '2019-01-09 06:25:10'),
(229, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"20"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"19"}', 0, '2019-01-09 06:25:23'),
(230, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"19"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"15"}', 0, '2019-01-09 06:25:30'),
(231, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"15"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"10"}', 0, '2019-01-09 06:25:38'),
(232, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"10"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"14"}', 0, '2019-01-09 06:25:47'),
(233, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"14"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-09 12:47:45'),
(234, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2019-01-10 15:15:29'),
(235, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"20"}', 0, '2019-01-11 00:01:25'),
(236, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"20"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 00:02:00'),
(237, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"20"}', 0, '2019-01-11 01:38:26'),
(238, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"20"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 01:38:33'),
(239, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"10"}', 0, '2019-01-11 03:23:16'),
(240, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"10"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 03:23:43'),
(241, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 05:44:07'),
(242, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 05:45:30'),
(243, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 05:49:58'),
(244, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 05:58:45'),
(245, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:01:01'),
(246, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:01:11'),
(247, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:02:57'),
(248, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:03:26'),
(249, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:12:37'),
(250, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:15:42'),
(251, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:15:51'),
(252, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:15:58'),
(253, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:16:26'),
(254, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:16:36'),
(255, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:18:49'),
(256, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:19:53'),
(257, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:20:28'),
(258, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:21:41'),
(259, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:23:50'),
(260, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-11 06:31:35'),
(261, 3, 'income', 'delete', '16', '::1', 'Google Chrome', 'null', 'null', 0, '2019-01-11 09:53:36'),
(262, 3, 'exam', 'insert', '17', '::1', 'Google Chrome', '', '{"id":"17","program_id":"13","sub_id":"26","exam_name":"Amar Bangla Exam 1","total":"82","mcq":"35","written":"47","exam_date":"2019-01-11","date":"2019-01-11 10:44:06","add_by":"3"}', 0, '2019-01-11 10:44:06'),
(263, 3, 'exam', 'insert', '18', '::1', 'Google Chrome', '', '{"id":"18","program_id":"15","sub_id":"27","exam_name":"test","total":"20","mcq":"10","written":"10","exam_date":"2019-01-31","date":"2019-01-11 10:54:40","add_by":"3"}', 0, '2019-01-11 10:54:40'),
(264, 3, 'exam', 'insert', '19', '::1', 'Google Chrome', '', '{"id":"19","program_id":"15","sub_id":"27","exam_name":"test2","total":"0","mcq":"0","written":"0","exam_date":"2019-01-17","date":"2019-01-11 10:56:04","add_by":"3"}', 0, '2019-01-11 10:56:04'),
(265, 3, 'exam', 'insert', '20', '::1', 'Google Chrome', '', '{"id":"20","program_id":"15","sub_id":"27","exam_name":"hello","total":"1301","mcq":"130","written":"1","exam_date":"2019-01-30","date":"2019-01-11 10:57:19","add_by":"3"}', 0, '2019-01-11 10:57:19'),
(266, 3, 'exam', 'insert', '21', '::1', 'Google Chrome', '', '{"id":"21","program_id":"3","sub_id":"13","exam_name":"bio 1","total":"0","mcq":"0","written":"0","exam_date":"2019-01-18","date":"2019-01-11 11:09:39","add_by":"3"}', 0, '2019-01-11 11:09:39'),
(267, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2019-01-11 19:43:59'),
(268, 3, 'exam', 'update', '21', '::1', 'Google Chrome', '{"id":"21","program_id":"3","sub_id":"13","exam_name":"bio 1","total":"0","mcq":"0","written":"0","exam_date":"2019-01-18","date":"2019-01-11 11:09:39","add_by":"3"}', '{"id":"21","program_id":"3","sub_id":"13","exam_name":"bio 1","total":"0","mcq":"0","written":"0","exam_date":"2019-01-18","date":"2019-01-11 11:09:39","add_by":"3"}', 0, '2019-01-11 20:13:31'),
(269, 3, 'exam', 'update', '21', '::1', 'Google Chrome', '{"id":"21","program_id":"3","sub_id":"13","exam_name":"bio 1","total":"0","mcq":"0","written":"0","exam_date":"2019-01-18","date":"2019-01-11 11:09:39","add_by":"3"}', '{"id":"21","program_id":"3","sub_id":"11","exam_name":"bio 1","total":"0","mcq":"0","written":"0","exam_date":"2019-01-18","date":"2019-01-11 11:09:39","add_by":"3"}', 0, '2019-01-11 20:13:38'),
(270, 3, 'exam', 'update', '21', '::1', 'Google Chrome', '{"id":"21","program_id":"3","sub_id":"11","exam_name":"bio 1","total":"0","mcq":"0","written":"0","exam_date":"2019-01-18","date":"2019-01-11 11:09:39","add_by":"3"}', '{"id":"21","program_id":"3","sub_id":"13","exam_name":"bio 1","total":"10","mcq":"10","written":"0","exam_date":"2019-01-18","date":"2019-01-11 11:09:39","add_by":"3"}', 0, '2019-01-11 20:14:03'),
(271, 3, 'exam', 'update', '17', '::1', 'Google Chrome', '{"id":"17","program_id":"13","sub_id":"26","exam_name":"Amar Bangla Exam 1","total":"82","mcq":"35","written":"47","exam_date":"2019-01-11","date":"2019-01-11 10:44:06","add_by":"3"}', '{"id":"17","program_id":"15","sub_id":"27","exam_name":"Amar Bangla Exam 1","total":"82","mcq":"35","written":"47","exam_date":"2019-01-11","date":"2019-01-11 10:44:06","add_by":"3"}', 0, '2019-01-11 20:16:31'),
(272, 3, 'exam', 'update', '17', '::1', 'Google Chrome', '{"id":"17","program_id":"15","sub_id":"27","exam_name":"Amar Bangla Exam 1","total":"82","mcq":"35","written":"47","exam_date":"2019-01-11","date":"2019-01-11 10:44:06","add_by":"3"}', '{"id":"17","program_id":"8","sub_id":"23","exam_name":"Amar Bangla Exam 1","total":"82","mcq":"35","written":"47","exam_date":"2019-01-11","date":"2019-01-11 10:44:06","add_by":"3"}', 0, '2019-01-11 20:16:52'),
(273, 3, 'exam', 'update', '20', '::1', 'Google Chrome', '{"id":"20","program_id":"15","sub_id":"27","exam_name":"hello","total":"1301","mcq":"130","written":"1","exam_date":"2019-01-30","date":"2019-01-11 10:57:19","add_by":"3"}', '{"id":"20","program_id":"15","sub_id":"27","exam_name":"hello","total":"14","mcq":"13","written":"1","exam_date":"2019-01-30","date":"2019-01-11 10:57:19","add_by":"3"}', 0, '2019-01-11 20:24:56'),
(274, 3, 'exam', 'delete', '21', '::1', 'Google Chrome', '{"id":"21","program_id":"3","sub_id":"13","exam_name":"bio 1","total":"10","mcq":"10","written":"0","exam_date":"2019-01-18","date":"2019-01-11 11:09:39","add_by":"3"}', 'null', 0, '2019-01-11 20:32:09'),
(275, 3, 'exam', 'delete', '17', '::1', 'Google Chrome', '{"id":"17","program_id":"8","sub_id":"23","exam_name":"Amar Bangla Exam 1","total":"82","mcq":"35","written":"47","exam_date":"2019-01-11","date":"2019-01-11 10:44:06","add_by":"3"}', 'null', 0, '2019-01-11 20:32:17'),
(276, 3, 'exam', 'delete', '19', '::1', 'Google Chrome', '{"id":"19","program_id":"15","sub_id":"27","exam_name":"test2","total":"0","mcq":"0","written":"0","exam_date":"2019-01-17","date":"2019-01-11 10:56:04","add_by":"3"}', 'null', 0, '2019-01-11 20:32:27'),
(277, 3, 'exam', 'insert', '22', '::1', 'Google Chrome', '', '{"id":"22","program_id":"13","sub_id":"26","exam_name":"bangla 1","total":"0","mcq":"0","written":"0","exam_date":"2019-01-11","date":"2019-01-11 20:33:50","add_by":"3"}', 0, '2019-01-11 20:33:50'),
(278, 3, 'exam', 'update', '22', '::1', 'Google Chrome', '{"id":"22","program_id":"13","sub_id":"26","exam_name":"bangla 1","total":"0","mcq":"0","written":"0","exam_date":"2019-01-11","date":"2019-01-11 20:33:50","add_by":"3"}', '{"id":"22","program_id":"13","sub_id":"11","exam_name":"bangla 1","total":"0","mcq":"0","written":"0","exam_date":"2019-01-11","date":"2019-01-11 20:33:50","add_by":"3"}', 0, '2019-01-11 20:33:59'),
(279, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"10"}', 0, '2019-01-12 03:29:45'),
(280, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"10"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-12 03:29:59'),
(281, 3, 'admit_program', 'insert', '116', '::1', 'Google Chrome', '', '{"id":"116","student_id":"10008","program_id":"15","batch_id":"23","admit_date":"2019-01-12 04:15:24","admit_by":"3"}', 0, '2019-01-12 04:15:24'),
(282, 3, 'admit_program', 'insert', '117', '::1', 'Google Chrome', '', '{"id":"117","student_id":"10002","program_id":"15","batch_id":"23","admit_date":"2019-01-12 04:30:22","admit_by":"3"}', 0, '2019-01-12 04:30:22'),
(283, 3, 'program', 'update', '15', '::1', 'Google Chrome', '{"id":"15","name":"Class Five 2019","start":"2018-12-01","end":"2018-12-31","subject":"27","batch":"23","fee":"5000","type":"1","monthly_fee":"0","add_by":"3","date":"2018-12-26 22:57:27"}', '{"id":"15","name":"Class Five 2019","start":"2018-12-01","end":"2018-12-31","subject":"27","batch":"24,23","fee":"5000","type":"1","monthly_fee":"0","add_by":"3","date":"2018-12-26 22:57:27"}', 0, '2019-01-12 04:38:27'),
(284, 3, 'admit_program', 'update', '117', '::1', 'Google Chrome', '{"id":"117","student_id":"10002","program_id":"15","batch_id":"23","admit_date":"2019-01-12 04:30:22","admit_by":"3"}', '{"id":"117","student_id":"10002","program_id":"15","batch_id":"24","admit_date":"2019-01-12 04:30:22","admit_by":"3"}', 0, '2019-01-12 04:38:50'),
(285, 3, 'admit_program', 'update', '117', '::1', 'Google Chrome', '{"id":"117","student_id":"10002","program_id":"15","batch_id":"24","admit_date":"2019-01-12 04:30:22","admit_by":"3"}', '{"id":"117","student_id":"10002","program_id":"15","batch_id":"23","admit_date":"2019-01-12 04:30:22","admit_by":"3"}', 0, '2019-01-12 05:23:32'),
(286, 3, 'admit_program', 'update', '117', '::1', 'Google Chrome', '{"id":"117","student_id":"10002","program_id":"15","batch_id":"23","admit_date":"2019-01-12 04:30:22","admit_by":"3"}', '{"id":"117","student_id":"10002","program_id":"15","batch_id":"24","admit_date":"2019-01-12 04:30:22","admit_by":"3"}', 0, '2019-01-12 05:23:42'),
(287, 3, 'result', 'update', '2', '::1', 'Google Chrome', '{"id":"2","exam_id":"18","student_id":"10002","mcq":"15","written":"17","total":"32","date":"2018-01-30 00:00:00","add_by":"3","sms":"0"}', '{"id":"2","exam_id":"18","student_id":"10002","mcq":"15","written":"17","total":"32","date":"2018-01-30 00:00:00","add_by":"3","sms":"0"}', 0, '2019-01-12 06:00:02'),
(288, 3, 'result', 'update', '2', '::1', 'Google Chrome', '{"id":"2","exam_id":"18","student_id":"10002","mcq":"15","written":"17","total":"32","date":"2018-01-30 00:00:00","add_by":"3","sms":"0"}', '{"id":"2","exam_id":"18","student_id":"10002","mcq":"41","written":"17","total":"58","date":"2018-01-30 00:00:00","add_by":"3","sms":"0"}', 0, '2019-01-12 06:00:12');
INSERT INTO `site_activity` (`id`, `user_id`, `table_name`, `action_type`, `table_id`, `ip`, `browser`, `previous_data`, `present_data`, `login`, `date`) VALUES
(289, 3, 'result', 'update', '89', '::1', 'Google Chrome', '{"id":"89","exam_id":"18","student_id":"10008","mcq":"0","written":"21","total":"21","date":"2018-02-04 00:00:00","add_by":"3","sms":"1"}', '{"id":"89","exam_id":"18","student_id":"10008","mcq":"10","written":"21","total":"31","date":"2018-02-04 00:00:00","add_by":"3","sms":"0"}', 0, '2019-01-12 06:01:09'),
(290, 3, 'result', 'update', '89', '::1', 'Google Chrome', '{"id":"89","exam_id":"18","student_id":"10008","mcq":"10","written":"21","total":"31","date":"2018-02-04 00:00:00","add_by":"3","sms":"0"}', '{"id":"89","exam_id":"18","student_id":"10008","mcq":"18","written":"21","total":"39","date":"2018-02-04 00:00:00","add_by":"3","sms":"0"}', 0, '2019-01-12 06:01:34'),
(291, 3, 'result', 'update', '89', '::1', 'Google Chrome', '{"id":"89","exam_id":"18","student_id":"10008","mcq":"18","written":"21","total":"39","date":"2018-02-04 00:00:00","add_by":"3","sms":"0"}', '{"id":"89","exam_id":"18","student_id":"10008","mcq":"18","written":"54","total":"72","date":"2018-02-04 00:00:00","add_by":"3","sms":"0"}', 0, '2019-01-12 06:01:45'),
(292, 3, 'result', 'update', '2', '::1', 'Google Chrome', '{"id":"2","exam_id":"18","student_id":"10002","mcq":"41","written":"17","total":"58","date":"2018-01-30 00:00:00","add_by":"3","sms":"0"}', '{"id":"2","exam_id":"18","student_id":"10002","mcq":"58","written":"17","total":"75","date":"2018-01-30 00:00:00","add_by":"3","sms":"0"}', 0, '2019-01-12 06:01:58'),
(293, 3, 'result', 'delete', '8', '::1', 'Google Chrome', 'null', 'null', 0, '2019-01-12 06:04:50'),
(294, 3, 'result', 'delete', '8', '::1', 'Google Chrome', 'null', 'null', 0, '2019-01-12 06:05:48'),
(295, 3, 'result', 'delete', '89', '::1', 'Google Chrome', '{"id":"89","exam_id":"18","student_id":"10008","mcq":"18","written":"54","total":"72","date":"2018-02-04 00:00:00","add_by":"3","sms":"0"}', 'null', 0, '2019-01-12 06:06:21'),
(296, 3, 'result', 'update', '2', '::1', 'Google Chrome', '{"id":"2","exam_id":"18","student_id":"10002","mcq":"58","written":"17","total":"75","date":"2018-01-30 00:00:00","add_by":"3","sms":"0"}', '{"id":"2","exam_id":"18","student_id":"10002","mcq":"58","written":"17","total":"75","date":"2018-01-30 00:00:00","add_by":"3","sms":"0"}', 0, '2019-01-12 06:06:45'),
(297, 3, 'exam', 'update', '22', '::1', 'Google Chrome', '{"id":"22","program_id":"13","sub_id":"11","exam_name":"bangla 1","total":"0","mcq":"0","written":"0","exam_date":"2019-01-11","date":"2019-01-11 20:33:50","add_by":"3"}', '{"id":"22","program_id":"13","sub_id":"11","exam_name":"bangla 1","total":"0","mcq":"0","written":"0","exam_date":"2019-01-11","date":"2019-01-11 20:33:50","add_by":"3"}', 0, '2019-01-12 06:07:12'),
(298, 3, 'exam', 'update', '22', '::1', 'Google Chrome', '{"id":"22","program_id":"13","sub_id":"11","exam_name":"bangla 1","total":"0","mcq":"0","written":"0","exam_date":"2019-01-11","date":"2019-01-11 20:33:50","add_by":"3"}', '{"id":"22","program_id":"13","sub_id":"11","exam_name":"bangla 1","total":"10","mcq":"0","written":"10","exam_date":"2019-01-11","date":"2019-01-11 20:33:50","add_by":"3"}', 0, '2019-01-12 06:08:49'),
(299, 3, 'result', 'insert', '141', '::1', 'Google Chrome', '', '{"id":"141","exam_id":"20","student_id":"10001","mcq":"0","written":"0","total":"0","date":"2019-01-12 06:37:03","add_by":"3","sms":"0"}', 0, '2019-01-12 06:37:03'),
(300, 3, 'admit_program', 'insert', '118', '::1', 'Google Chrome', '', '{"id":"118","student_id":"10001","program_id":"15","batch_id":"23","admit_date":"2019-01-12 06:37:40","admit_by":"3"}', 0, '2019-01-12 06:37:40'),
(301, 3, 'result', 'insert', '142', '::1', 'Google Chrome', '', '{"id":"142","exam_id":"20","student_id":"10001","mcq":"50","written":"0","total":"50","date":"2019-01-12 06:38:10","add_by":"3","sms":"0"}', 0, '2019-01-12 06:38:10'),
(302, 3, 'result', 'delete', '142', '::1', 'Google Chrome', '{"id":"142","exam_id":"20","student_id":"10001","mcq":"50","written":"0","total":"50","date":"2019-01-12 06:38:10","add_by":"3","sms":"0"}', 'null', 0, '2019-01-12 06:38:17'),
(303, 3, 'result', 'insert', '143', '::1', 'Google Chrome', '', '{"id":"143","exam_id":"20","student_id":"10002","mcq":"0","written":"0","total":"0","date":"2019-01-12 06:39:30","add_by":"3","sms":"0"}', 0, '2019-01-12 06:39:30'),
(304, 3, 'result', 'update', '143', '::1', 'Google Chrome', '{"id":"143","exam_id":"20","student_id":"10002","mcq":"0","written":"0","total":"0","date":"2019-01-12 06:39:30","add_by":"3","sms":"0"}', '{"id":"143","exam_id":"20","student_id":"10002","mcq":"40","written":"0","total":"40","date":"2019-01-12 06:39:30","add_by":"3","sms":"0"}', 0, '2019-01-12 06:39:44'),
(305, 3, 'result', 'delete', '143', '::1', 'Google Chrome', '{"id":"143","exam_id":"20","student_id":"10002","mcq":"40","written":"0","total":"40","date":"2019-01-12 06:39:30","add_by":"3","sms":"0"}', 'null', 0, '2019-01-12 06:39:48'),
(306, 3, 'result', 'delete', '141', '::1', 'Google Chrome', '{"id":"141","exam_id":"20","student_id":"10001","mcq":"0","written":"0","total":"0","date":"2019-01-12 06:37:03","add_by":"3","sms":"0"}', 'null', 0, '2019-01-12 06:43:22'),
(307, 3, 'result', 'insert', '144', '::1', 'Google Chrome', '', '{"id":"144","exam_id":"20","student_id":"10001","mcq":"100","written":"0","total":"100","date":"2019-01-12 06:43:39","add_by":"3","sms":"0"}', 0, '2019-01-12 06:43:39'),
(308, 3, 'result', 'insert', '145', '::1', 'Google Chrome', '', '{"id":"145","exam_id":"20","student_id":"10001","mcq":"70","written":"0","total":"70","date":"2019-01-12 06:43:39","add_by":"3","sms":"0"}', 0, '2019-01-12 06:43:39'),
(309, 3, 'result', 'delete', '144', '::1', 'Google Chrome', '{"id":"144","exam_id":"20","student_id":"10001","mcq":"100","written":"0","total":"100","date":"2019-01-12 06:43:39","add_by":"3","sms":"0"}', 'null', 0, '2019-01-12 06:51:41'),
(310, 3, 'result', 'delete', '145', '::1', 'Google Chrome', '{"id":"145","exam_id":"20","student_id":"10001","mcq":"70","written":"0","total":"70","date":"2019-01-12 06:43:39","add_by":"3","sms":"0"}', 'null', 0, '2019-01-12 06:51:44'),
(311, 3, 'result', 'insert', '146', '::1', 'Google Chrome', '', '{"id":"146","exam_id":"20","student_id":"10001","mcq":"0","written":"0","total":"0","date":"2019-01-12 06:52:27","add_by":"3","sms":"0"}', 0, '2019-01-12 06:52:27'),
(312, 3, 'result', 'insert', '147', '::1', 'Google Chrome', '', '{"id":"147","exam_id":"20","student_id":"10002","mcq":"0","written":"0","total":"0","date":"2019-01-12 06:52:43","add_by":"3","sms":"0"}', 0, '2019-01-12 06:52:43'),
(313, 3, 'result', 'delete', '147', '::1', 'Google Chrome', '{"id":"147","exam_id":"20","student_id":"10002","mcq":"0","written":"0","total":"0","date":"2019-01-12 06:52:43","add_by":"3","sms":"0"}', 'null', 0, '2019-01-12 06:54:19'),
(314, 3, 'result', 'insert', '148', '::1', 'Google Chrome', '', '{"id":"148","exam_id":"20","student_id":"10002","mcq":"30","written":"0","total":"30","date":"2019-01-12 06:54:28","add_by":"3","sms":"0"}', 0, '2019-01-12 06:54:28'),
(315, 3, 'result', 'update', '146', '::1', 'Google Chrome', '{"id":"146","exam_id":"20","student_id":"10001","mcq":"0","written":"0","total":"0","date":"2019-01-12 06:52:27","add_by":"3","sms":"0"}', '{"id":"146","exam_id":"20","student_id":"10001","mcq":"0","written":"0","total":"0","date":"2019-01-12 06:52:27","add_by":"3","sms":"0"}', 0, '2019-01-12 06:54:42'),
(316, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-13 15:15:02'),
(317, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"15"}', 0, '2019-01-15 21:05:33'),
(318, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"15"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-15 21:05:40'),
(319, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"6"}', 0, '2019-01-15 21:05:45'),
(320, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"6"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-15 21:05:51'),
(321, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"15"}', 0, '2019-01-15 21:14:03'),
(322, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"15"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"3"}', 0, '2019-01-15 21:17:04'),
(323, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"3"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-15 21:17:11'),
(324, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"3"}', 0, '2019-01-15 21:19:45'),
(325, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"3"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-15 21:20:45'),
(326, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"20"}', 0, '2019-01-15 21:27:06'),
(327, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"20"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"5"}', 0, '2019-01-15 21:27:17'),
(328, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"5"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-15 21:27:32'),
(329, 3, 'student_payment', 'insert', '60', '::1', 'Google Chrome', '', '{"id":"60","student_id":"10051","program_id":"8","type":"1","year":"0","month":"0","total_fee":"5000","date":"2019-01-15 22:47:21","add_by":"3"}', 0, '2019-01-15 22:47:21'),
(330, 3, 'receive_payment', 'insert', '92', '::1', 'Google Chrome', '', '{"id":"92","payment_id":"60","pay":"1000","sms":"0","date":"2019-01-15 22:47:29","add_by":"3"}', 0, '2019-01-15 22:47:29'),
(331, 3, 'user', 'update', '2', '::1', 'Google Chrome', '{"id":"2","uname":"shakib","fname":"all hassan","photo":"avatar.png","gender":"","email":"sk.amirhamza1@gmail.com","phone":"177756478","address":"","pass":"d4fc23375ec457523736a83bc9e8815a2bf434e987d0c45a769104c566050283","permit":"2","status":"1","theme":"1"}', '{"id":"2","uname":"shakib","fname":"all hassan","photo":"user_2.jpg","gender":"","email":"sk.amirhamza1@gmail.com","phone":"177756478","address":"","pass":"d4fc23375ec457523736a83bc9e8815a2bf434e987d0c45a769104c566050283","permit":"2","status":"1","theme":"1"}', 0, '2019-01-15 23:26:20'),
(332, 3, 'user', 'update', '2', '::1', 'Google Chrome', '{"id":"2","uname":"shakib","fname":"all hassan","photo":"user_2.jpg","gender":"","email":"sk.amirhamza1@gmail.com","phone":"177756478","address":"","pass":"d4fc23375ec457523736a83bc9e8815a2bf434e987d0c45a769104c566050283","permit":"2","status":"1","theme":"1"}', '{"id":"2","uname":"shakib","fname":"all hassan","photo":"user_2.jpg","gender":"","email":"sk.amirhamza1@gmail.com","phone":"177756478","address":"","pass":"d4fc23375ec457523736a83bc9e8815a2bf434e987d0c45a769104c566050283","permit":"2","status":"1","theme":"1"}', 0, '2019-01-15 23:36:57'),
(333, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-16 11:44:38'),
(334, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza1","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-16 11:44:52'),
(335, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza1","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza1","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-16 11:47:57'),
(336, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza1","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza1","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-16 12:42:18'),
(337, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza1","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza1","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-16 12:43:15'),
(338, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza1","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-16 12:43:28'),
(339, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"hamza@gmail.com","phone":"1991223020","address":"Habiganj","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1991223020","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-16 12:43:50'),
(340, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1991223020","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1991223020","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-16 12:44:01'),
(341, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1991223020","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-16 12:44:14'),
(342, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-16 12:52:26'),
(343, 3, 'user', 'update', '5', '::1', 'Google Chrome', '{"id":"5","uname":"rahim","fname":"Musfiqur Rahim","photo":"user_5.jpg","gender":"Male","email":"rahim@gmail.com","phone":"17841561","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"3","status":"0","theme":"1"}', '{"id":"5","uname":"rahim","fname":"Musfiqur Rahim","photo":"user_5.jpg","gender":"Male","email":"rahim@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"3","status":"0","theme":"1"}', 0, '2019-01-16 13:21:04'),
(344, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamzasdafsadfsdaf@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-16 13:44:42'),
(345, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamzasdafsadfsdaf@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamzasdafsadfsdaf@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-16 13:52:40'),
(346, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamzasdafsadfsdaf@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-16 13:53:00'),
(347, 3, 'student_payment', 'insert', '61', '::1', 'Google Chrome', '', '{"id":"61","student_id":"10002","program_id":"15","type":"1","year":"0","month":"0","total_fee":"5000","date":"2019-01-16 15:56:36","add_by":"3"}', 0, '2019-01-16 15:56:36'),
(348, 3, 'receive_payment', 'insert', '93', '::1', 'Google Chrome', '', '{"id":"93","payment_id":"61","pay":"3000","sms":"0","date":"2019-01-16 16:02:10","add_by":"3"}', 0, '2019-01-16 16:02:10'),
(349, 3, 'admit_program', 'insert', '119', '::1', 'Google Chrome', '', '{"id":"119","student_id":"10002","program_id":"14","batch_id":"24","admit_date":"2019-01-16 16:10:46","admit_by":"3"}', 0, '2019-01-16 16:10:46'),
(350, 3, 'theme', 'insert', '21', '::1', 'Google Chrome', '', '{"id":"21","name":"Web","bg_color":"#378BA6","sidebar_hover":"#EDE6EC","sidebar_list":"#EDE6EC","sidebar_list_hover":"#EDE6EC","font_color":"#FFFFFF","date":"2019-01-16","added_by":"3"}', 0, '2019-01-16 16:39:39'),
(351, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"21"}', 0, '2019-01-16 16:39:53'),
(352, 3, 'theme', 'insert', '22', '::1', 'Google Chrome', '', '{"id":"22","name":"Web Dark","bg_color":"#235A6B","sidebar_hover":"#EDE6EC","sidebar_list":"#EDE6EC","sidebar_list_hover":"#EDE6EC","font_color":"#FFFFFF","date":"2019-01-16","added_by":"3"}', 0, '2019-01-16 16:44:41'),
(353, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"21"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"22"}', 0, '2019-01-16 16:44:51'),
(354, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"22"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-16 22:49:23'),
(355, 3, 'theme', 'insert', '23', '::1', 'Google Chrome', '', '{"id":"23","name":"CYAN","bg_color":"#005154","sidebar_hover":"#EDE6EC","sidebar_list":"#EDE6EC","sidebar_list_hover":"#EDE6EC","font_color":"#FFFFFF","date":"2019-01-16","added_by":"3"}', 0, '2019-01-16 22:51:16'),
(356, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"23"}', 0, '2019-01-16 22:51:25'),
(357, 3, 'student', 'insert', '10079', '::1', 'Google Chrome', '', '{"id":"10079","name":"Sk.Amir Hamza","father_name":"","mother_name":"","email":"sk.amirhamza@gmail.com","photo":"avatar.png","personal_mobile":"1991223020","father_mobile":"","mother_mobile":"","nick":"Hamza","address":"Dhaka","birth_day":"2019-01-11","gender":"Male","religion":"Muslim","school":"","ssc_rool":"0","ssc_reg":"0","ssc_board":"dhaka","ssc_result":"0","date":"2019-01-17 00:54:35"}', 0, '2019-01-17 00:54:35'),
(358, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2019-01-17 21:11:47'),
(359, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"23"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-17 21:12:03'),
(360, 3, 'receive_payment', 'insert', '94', '::1', 'Google Chrome', '', '{"id":"94","payment_id":"16","pay":"5000","sms":"0","date":"2019-01-17 22:49:10","add_by":"3"}', 0, '2019-01-17 22:49:10'),
(361, 3, 'student_payment', 'insert', '62', '::1', 'Google Chrome', '', '{"id":"62","student_id":"10051","program_id":"3","type":"2","year":"2019","month":"1","total_fee":"500","note":null,"date":"2019-01-17 23:49:40","add_by":"3"}', 0, '2019-01-17 23:49:40'),
(362, 3, 'receive_payment', 'insert', '95', '::1', 'Google Chrome', '', '{"id":"95","payment_id":"62","pay":"300","sms":"0","date":"2019-01-18 01:09:04","add_by":"3"}', 0, '2019-01-18 01:09:04'),
(363, 3, 'receive_payment', 'insert', '96', '::1', 'Google Chrome', '', '{"id":"96","payment_id":"62","pay":"400","sms":"0","date":"2019-01-18 01:09:18","add_by":"3"}', 0, '2019-01-18 01:09:18'),
(364, 3, 'student_payment', 'update', '62', '::1', 'Google Chrome', '{"id":"62","student_id":"10051","program_id":"3","type":"3","year":"0","month":"0","total_fee":"700","note":"1st Term Exam Fee and ","date":"2019-01-17 23:49:40","add_by":"3"}', '{"id":"62","student_id":"10051","program_id":"3","type":"3","year":"0","month":"0","total_fee":"700","note":"1st Term Exam Fee","date":"2019-01-17 23:49:40","add_by":"3"}', 0, '2019-01-18 01:56:04'),
(365, 3, 'student_payment', 'update', '62', '::1', 'Google Chrome', '{"id":"62","student_id":"10051","program_id":"3","type":"3","year":"0","month":"0","total_fee":"700","note":"1st Term Exam Fee","date":"2019-01-17 23:49:40","add_by":"3"}', '{"id":"62","student_id":"10051","program_id":"3","type":"3","year":"0","month":"0","total_fee":"700","note":"1st Term Exam","date":"2019-01-17 23:49:40","add_by":"3"}', 0, '2019-01-18 01:56:11'),
(366, 3, 'student_payment', 'update', '62', '::1', 'Google Chrome', '{"id":"62","student_id":"10051","program_id":"3","type":"3","year":"0","month":"0","total_fee":"700","note":"1st Term Exam","date":"2019-01-17 23:49:40","add_by":"3"}', '{"id":"62","student_id":"10051","program_id":"3","type":"3","year":"0","month":"0","total_fee":"700","note":"amir hamza text","date":"2019-01-17 23:49:40","add_by":"3"}', 0, '2019-01-18 01:56:21'),
(367, 3, 'student_payment', 'update', '62', '::1', 'Google Chrome', '{"id":"62","student_id":"10051","program_id":"3","type":"3","year":"0","month":"0","total_fee":"700","note":"amir hamza text","date":"2019-01-17 23:49:40","add_by":"3"}', '{"id":"62","student_id":"10051","program_id":"3","type":"3","year":"0","month":"0","total_fee":"700","note":"1st term exam fee","date":"2019-01-17 23:49:40","add_by":"3"}', 0, '2019-01-18 01:56:34'),
(368, 3, 'student_payment', 'update', '18', '::1', 'Google Chrome', '{"id":"18","student_id":"10051","program_id":"3","type":"2","year":"2019","month":"2","total_fee":"500","note":null,"date":"2018-11-29 17:11:11","add_by":"3"}', '{"id":"18","student_id":"10051","program_id":"3","type":"2","year":"2019","month":"2","total_fee":"600","note":"","date":"2018-11-29 17:11:11","add_by":"3"}', 0, '2019-01-18 01:56:48'),
(369, 3, 'student_payment', 'update', '62', '::1', 'Google Chrome', '{"id":"62","student_id":"10051","program_id":"3","type":"3","year":"0","month":"0","total_fee":"700","note":"1st term exam fee","date":"2019-01-17 23:49:40","add_by":"3"}', '{"id":"62","student_id":"10051","program_id":"3","type":"3","year":"0","month":"0","total_fee":"700","note":"1st term exam fee","date":"2019-01-17 23:49:40","add_by":"3"}', 0, '2019-01-18 01:57:06'),
(370, 3, 'student_payment', 'insert', '63', '::1', 'Google Chrome', '', '{"id":"63","student_id":"10051","program_id":"3","type":"3","year":null,"month":null,"total_fee":"56456","note":"4545","date":"2019-01-18 02:10:44","add_by":"3"}', 0, '2019-01-18 02:10:44'),
(371, 3, 'student_payment', 'update', '63', '::1', 'Google Chrome', '{"id":"63","student_id":"10051","program_id":"3","type":"3","year":null,"month":null,"total_fee":"56456","note":"4545","date":"2019-01-18 02:10:44","add_by":"3"}', '{"id":"63","student_id":"10051","program_id":"3","type":"3","year":null,"month":null,"total_fee":"1000","note":"Shirt And Dress","date":"2019-01-18 02:10:44","add_by":"3"}', 0, '2019-01-18 02:11:10'),
(372, 3, 'student_payment', 'insert', '64', '::1', 'Google Chrome', '', '{"id":"64","student_id":"10051","program_id":"13","type":"3","year":null,"month":null,"total_fee":"3000","note":"Book Buy","date":"2019-01-18 02:14:19","add_by":"3"}', 0, '2019-01-18 02:14:19'),
(373, 3, 'receive_payment', 'insert', '97', '::1', 'Google Chrome', '', '{"id":"97","payment_id":"64","pay":"1500","sms":"0","date":"2019-01-18 02:14:30","add_by":"3"}', 0, '2019-01-18 02:14:30'),
(374, 3, 'receive_payment', 'insert', '98', '::1', 'Google Chrome', '', '{"id":"98","payment_id":"64","pay":"1500","sms":"0","date":"2019-01-18 02:14:47","add_by":"3"}', 0, '2019-01-18 02:14:47'),
(375, 3, 'student_payment', 'insert', '65', '::1', 'Google Chrome', '', '{"id":"65","student_id":"10051","program_id":"8","type":"3","year":null,"month":null,"total_fee":"4000","note":"tshirt","date":"2019-01-18 10:05:54","add_by":"3"}', 0, '2019-01-18 10:05:54'),
(376, 3, 'student_payment', 'update', '65', '::1', 'Google Chrome', '{"id":"65","student_id":"10051","program_id":"8","type":"3","year":null,"month":null,"total_fee":"4000","note":"tshirt","date":"2019-01-18 10:05:54","add_by":"3"}', '{"id":"65","student_id":"10051","program_id":"8","type":"3","year":null,"month":null,"total_fee":"3000","note":"tshirt","date":"2019-01-18 10:05:54","add_by":"3"}', 0, '2019-01-18 10:06:07'),
(377, 3, 'receive_payment', 'insert', '99', '::1', 'Google Chrome', '', '{"id":"99","payment_id":"65","pay":"1200","sms":"0","date":"2019-01-18 10:06:21","add_by":"3"}', 0, '2019-01-18 10:06:22'),
(378, 3, 'student_payment', 'update', '64', '::1', 'Google Chrome', '{"id":"64","student_id":"10051","program_id":"13","type":"3","year":null,"month":null,"total_fee":"3000","note":"Book Buy","date":"2019-01-18 02:14:19","add_by":"3"}', '{"id":"64","student_id":"10051","program_id":"13","type":"3","year":null,"month":null,"total_fee":"3000","note":"student buy book by seller and customer","date":"2019-01-18 02:14:19","add_by":"3"}', 0, '2019-01-18 10:26:00'),
(379, 3, 'student_payment', 'update', '64', '::1', 'Google Chrome', '{"id":"64","student_id":"10051","program_id":"13","type":"3","year":null,"month":null,"total_fee":"3000","note":"student buy book by seller and customer","date":"2019-01-18 02:14:19","add_by":"3"}', '{"id":"64","student_id":"10051","program_id":"13","type":"3","year":null,"month":null,"total_fee":"3000","note":"student buy book by seller and customer sdaf sadf safd safd ","date":"2019-01-18 02:14:19","add_by":"3"}', 0, '2019-01-18 10:29:35'),
(380, 3, 'student_payment', 'update', '64', '::1', 'Google Chrome', '{"id":"64","student_id":"10051","program_id":"13","type":"3","year":null,"month":null,"total_fee":"3000","note":"student buy book by seller and customer sdaf sadf safd safd ","date":"2019-01-18 02:14:19","add_by":"3"}', '{"id":"64","student_id":"10051","program_id":"13","type":"3","year":null,"month":null,"total_fee":"3000","note":"student buy book by seller and customer ","date":"2019-01-18 02:14:19","add_by":"3"}', 0, '2019-01-18 10:45:45'),
(381, 3, 'student_payment', 'insert', '66', '::1', 'Google Chrome', '', '{"id":"66","student_id":"10051","program_id":"8","type":"2","year":"2019","month":"5","total_fee":"500","note":null,"date":"2019-01-18 11:01:54","add_by":"3"}', 0, '2019-01-18 11:01:54'),
(382, 3, 'receive_payment', 'insert', '100', '::1', 'Google Chrome', '', '{"id":"100","payment_id":"66","pay":"500","sms":"0","date":"2019-01-18 11:02:02","add_by":"3"}', 0, '2019-01-18 11:02:02'),
(383, 3, 'receive_payment', 'insert', '101', '::1', 'Google Chrome', '', '{"id":"101","payment_id":"44","pay":"2500","sms":"0","date":"2019-01-18 11:07:53","add_by":"3"}', 0, '2019-01-18 11:07:53'),
(384, 3, 'student_payment', 'insert', '67', '::1', 'Google Chrome', '', '{"id":"67","student_id":"10051","program_id":"13","type":"3","year":null,"month":null,"total_fee":"500","note":"1st Mid Exam Fee","date":"2019-01-18 11:11:54","add_by":"3"}', 0, '2019-01-18 11:11:54'),
(385, 3, 'student_payment', 'update', '67', '::1', 'Google Chrome', '{"id":"67","student_id":"10051","program_id":"13","type":"3","year":null,"month":null,"total_fee":"500","note":"1st Mid Exam Fee","date":"2019-01-18 11:11:54","add_by":"3"}', '{"id":"67","student_id":"10051","program_id":"13","type":"3","year":null,"month":null,"total_fee":"1500","note":"1st Mid Exam Fee","date":"2019-01-18 11:11:54","add_by":"3"}', 0, '2019-01-18 11:12:12'),
(386, 3, 'receive_payment', 'insert', '102', '::1', 'Google Chrome', '', '{"id":"102","payment_id":"67","pay":"1500","sms":"0","date":"2019-01-18 11:12:25","add_by":"3"}', 0, '2019-01-18 11:12:25'),
(387, 3, 'receive_payment', 'delete', '98', '::1', 'Google Chrome', '{"id":"98","payment_id":"64","pay":"1500","sms":"0","date":"2019-01-18 02:14:47","add_by":"3"}', 'null', 0, '2019-01-18 11:33:47'),
(388, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"22"}', 0, '2019-01-18 11:57:09'),
(389, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"22"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-18 11:57:17'),
(390, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"6"}', 0, '2019-01-18 12:19:41'),
(391, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"6"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"22"}', 0, '2019-01-18 12:19:46'),
(392, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"22"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"17"}', 0, '2019-01-18 12:19:56'),
(393, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"17"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-18 12:20:15'),
(394, 3, 'student_payment', 'insert', '68', '::1', 'Google Chrome', '', '{"id":"68","student_id":"10052","program_id":"8","type":"2","year":"2019","month":"6","total_fee":"500","note":null,"date":"2019-01-18 20:23:05","add_by":"3"}', 0, '2019-01-18 20:23:05'),
(395, 3, 'student_payment', 'insert', '69', '::1', 'Google Chrome', '', '{"id":"69","student_id":"10052","program_id":"8","type":"1","year":"0","month":"0","total_fee":"5000","note":null,"date":"2019-01-18 20:27:47","add_by":"3"}', 0, '2019-01-18 20:27:47'),
(396, 3, 'student_payment', 'insert', '70', '::1', 'Google Chrome', '', '{"id":"70","student_id":"10052","program_id":"8","type":"3","year":null,"month":null,"total_fee":"400","note":"extra fee","date":"2019-01-18 20:28:13","add_by":"3"}', 0, '2019-01-18 20:28:13'),
(397, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"15"}', 0, '2019-01-18 21:37:03'),
(398, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"15"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"23"}', 0, '2019-01-18 21:37:15'),
(399, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"23"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-18 21:47:56'),
(400, 3, 'receive_payment', 'insert', '103', '::1', 'Google Chrome', '', '{"id":"103","payment_id":"38","pay":"700","sms":"0","date":"2019-01-18 23:58:13","add_by":"3"}', 0, '2019-01-18 23:58:13'),
(401, 5, 'login', 'insert', '1', '::1', 'Mozilla Firefox', '', '', 1, '2019-01-19 01:19:58'),
(402, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"17"}', 0, '2019-01-19 02:19:19'),
(403, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"17"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"6"}', 0, '2019-01-19 02:19:50'),
(404, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"6"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-19 02:20:27'),
(405, 3, 'student_payment', 'insert', '71', '::1', 'Google Chrome', '', '{"id":"71","student_id":"10001","program_id":"5","type":"3","year":null,"month":null,"total_fee":"4000","note":"exam fee","date":"2019-01-19 03:09:08","add_by":"3"}', 0, '2019-01-19 03:09:08'),
(406, 3, 'receive_payment', 'insert', '104', '::1', 'Google Chrome', '', '{"id":"104","payment_id":"71","pay":"3000","sms":"0","date":"2019-01-19 03:09:18","add_by":"3"}', 0, '2019-01-19 03:09:18'),
(407, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2019-01-19 04:20:13');
INSERT INTO `site_activity` (`id`, `user_id`, `table_name`, `action_type`, `table_id`, `ip`, `browser`, `previous_data`, `present_data`, `login`, `date`) VALUES
(408, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', 0, '2019-01-19 04:38:56'),
(409, 5, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2019-01-19 04:40:14'),
(410, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2019-01-19 04:41:39'),
(411, 5, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2019-01-19 05:01:13'),
(412, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2019-01-19 05:02:36'),
(413, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"1"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"17"}', 0, '2019-01-19 05:49:20'),
(414, 3, 'user', 'update', '3', '::1', 'Google Chrome', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"17"}', '{"id":"3","uname":"hamza05","fname":"Sk.Amir Hamza","photo":"user_3.jpg","gender":"Male","email":"sk.amirhamza@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"1","status":"1","theme":"23"}', 0, '2019-01-19 05:49:34'),
(415, 3, 'user', 'update', '5', '::1', 'Google Chrome', '{"id":"5","uname":"rahim","fname":"Musfiqur Rahim","photo":"user_5.jpg","gender":"Male","email":"rahim@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"7","status":"0","theme":"1"}', '{"id":"5","uname":"rahim","fname":"Musfiqur Rahim","photo":"user_5.jpg","gender":"Male","email":"rahim@gmail.com","phone":"1777564786","address":"Dhaka","pass":"1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599","permit":"7","status":"0","theme":"1"}', 0, '2019-01-19 05:51:49'),
(416, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2019-01-19 18:10:23'),
(417, 3, 'login', 'insert', '1', '::1', 'Google Chrome', '', '', 1, '2019-01-19 18:32:22');

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
  `date` datetime NOT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_add`
--

INSERT INTO `sms_add` (`id`, `total_sms`, `pay`, `total_send`, `start`, `end`, `date`, `add_by`) VALUES
(9, 100, 50, 22, '2019-01-01', '2019-01-31', '2019-01-02 00:38:11', 3),
(8, 50, 1, 38, '2018-12-01', '2018-12-31', '2018-12-15 04:57:38', 3),
(7, 1, 40, 1, '2018-12-12', '2018-12-31', '2018-12-14 23:23:47', 3);

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
(72, '01991223020', 'Dear Hamza,\nCongratulation For Admitting In Our \'Academic Program\' Program.\n\r\nYour ID: 10001\r\nBatch: Section 1\r\nTime: Sat,Tue,Wed (8:00 AM - 1:00 PM)\r\n\r\n@TechSerm\r\n', 2, '2018-12-13 10:41:20', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(73, '01991223020', 'Dear Hamza,\nYour Payment 500 Tk for Monthly Fee \'June-2019\' in \'SSC Program 2018\' is Successfully Taken.\nYour Payment ID: 75\n\n@TechSerm\n01991223020 ', 1, '2018-12-14 09:40:41', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(74, '01991223020', 'Dear Hamza,\nYour Payment 5000 Tk for Admission Fee in \'Academic Program\' is Successfully Taken.\nYour Payment ID: 74\n\n@TechSerm\n01991223020 ', 1, '2018-12-14 23:38:04', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(75, '01991223020', 'dear Hamza,\nHow are you', 1, '2018-12-15 04:58:09', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(76, '01777564786', 'dear Hamza,\nHow are you', 1, '2018-12-15 04:58:09', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(77, '01991223020', 'Dear Hamza,\nWishing you a wonderful Poila Baisakh. May all your dreams come true, your aspirations find bigger wings and most importantly you feel loved wherever you go.', 2, '2018-12-15 05:04:58', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(78, '01777564786', 'Dear Hamza,\nWishing you a wonderful Poila Baisakh. May all your dreams come true, your aspirations find bigger wings and most importantly you feel loved wherever you go.', 2, '2018-12-15 05:04:58', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(79, '01991223020', 'Dear Hamza,\nYour Payment 5000 Tk for Admission Fee in \'Academic Program\' is Successfully Taken.\nYour Payment ID: 74\n\n@Britain Standard School ', 1, '2018-12-15 05:15:47', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(80, '01991223020', 'Dear Hamza,\nYour Payment 5000 Tk for Admission Fee in \'Academic Program\' is Successfully Taken.\nYour Payment ID: 74\n\n@ Britain Standard School ', 1, '2018-12-15 05:16:28', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(81, '01991223020', 'Dear Hamza,\nCongratulation For Admitting In Our \'SSC Program 2018\' Program.\n\r\nYour ID: 10051\r\nBatch: tuhur\r\nTime: Sat,Sun,Mon (7:30 - 8:20)\r\n\r\n@TechSerm\r\n', 1, '2018-12-15 05:41:52', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(82, '01991223020', 'Dear Hamza,\nYour Payment 500 Tk for Monthly Fee \'June-2019\' in \'SSC Program 2018\' is Successfully Taken.\nYour Payment ID: 75\n\nupload/custom_content/logo.png ', 1, '2018-12-15 05:44:28', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(83, '01991223020', 'Dear Hamza,\nCongratulation For Admitting In Our \'SSC Program 2018\' Program.\n\r\nYour ID: 10051\r\nBatch: tuhur\r\nTime: Sat,Sun,Mon (7:30 - 8:20)\r\n\r\n@ Britain Standard School\r\n', 2, '2018-12-15 05:47:51', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(84, '01991223020', 'Dear Hamza,\nCongratulation For Admitting In Our \'SSC Program 2018\' Program.\n\r\nYour ID: 10051\r\nBatch: tuhur\r\nTime: Sat,Sun,Mon (7:30 - 8:20)\r\n\r\n@ Britain Standard School\r\n', 2, '2018-12-15 05:48:28', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(85, '01991223020', 'Dear Hamza,\nCongratulation For Admitting In Our \'SSC Program 2018\' Program.\n\r\nYour ID: 10071\r\nBatch: tuhur\r\nTime: Sat,Sun,Mon (7:30 - 8:20)\r\n\r\n@Britain Standard School\r\n', 2, '2018-12-16 15:04:09', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(86, '01991223020', 'Dear Hamza,\nYour Payment 780 Tk for Admission Fee in \'Class One\' is Successfully Taken.\nYour Payment ID: 77\n\n@Britain Standard School ', 1, '2018-12-16 15:06:43', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(87, '01991223020', 'Dear site_activity,\nYour Payment 800 Tk for Admission Fee in \'Class One\' is Successfully Taken.\nYour Payment ID: 79\n\n@Britain Standard School ', 1, '2018-12-17 04:14:39', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(88, '01991223020', 'Dear Hamza,\nYour Payment 1000 Tk for Monthly Fee \'January-2019\' in \'Class One\' is Successfully Taken.\nYour Payment ID: 84\n\n@Britain Standard School ', 1, '2018-12-19 03:12:20', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(89, '01991223020', 'Dear Hamza,\nCongratulation For Admitting In Our \'SSC Program 2018\' Program.\n\r\nYour ID: 10051\r\nBatch: Normal\r\nTime: Sat,Mon (dsaf - 8:30 AM)\r\n\r\n@Britain Standard School\r\n', 2, '2018-12-21 10:39:40', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(90, '01717541842', 'Dear rihan,\nCongratulation For Admitting In Our \'Class One\' Program.\n\r\nYour ID: 10073\r\nBatch: Section 1\r\nTime: Sat,Tue,Wed (8:00 AM - 1:00 PM)\r\n\r\n@Britain Standard School\r\n', 2, '2018-12-22 10:46:48', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(91, '01717541842', 'Dear rihan,\nYour Payment 1000 Tk for Monthly Fee \'March-2019\' in \'Class One\' is Successfully Taken.\nYour Payment ID: 86\n\n@Britain Standard School ', 1, '2018-12-22 10:48:01', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(92, '01717541842', 'Dear rihan,\nCongratulation For Admitting In Our \'Class Two\' Program.\n\r\nYour ID: 10073\r\nBatch: Section 3\r\nTime: Sat,Fri (8:00 AM - 10:00 AM)\r\n\r\n@Britain Standard School\r\n', 2, '2018-12-22 10:53:31', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(93, '01717541842', 'Dear rihan full,\nYour class off', 1, '2018-12-22 10:54:36', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(94, '01991223020', 'Dear Hamza,\nYour Payment 3000 Tk for Admission Fee in \'Class One\' is Successfully Taken.\nYour Payment ID: 87\n\n@Britain Standard School ', 1, '2018-12-22 23:24:46', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(95, '01777564786', 'Dear Hamza,\nYour Payment 3000 Tk for Admission Fee in \'Class One\' is Successfully Taken.\nYour Payment ID: 87\n\n@Britain Standard School ', 1, '2018-12-22 23:24:58', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(96, '01991223020', 'Dear Hamza, \n You are not attend in \'28 Dec 2018 Friday\' class.Please attend all class.\n\n@Britain Standard School', 1, '2018-12-26 23:36:25', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(97, '01991223020', 'Dear Hamza, \nYou are not attend in \'29 Dec 2018 Saturday\' class.Please attend all class.\n\n@Britain Standard School', 1, '2018-12-26 23:41:39', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(98, '01777564786', 'Dear amir, \nYou are not attend in \'29 Dec 2018 Saturday\' class.Please attend all class.\n\n@Britain Standard School', 1, '2018-12-26 23:41:39', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(99, '01777564786', 'Dear amir, \nYou are  attend in \'27 Dec 2018 Thursday\' class.Please attend all class.\n\n@Britain Standard School', 1, '2018-12-27 12:41:44', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(100, '01991223020', 'Dear Hamza, \nYou are not attend in \'27 Dec 2018 Thursday\' class.Please attend all class.\n\n@Britain Standard School', 1, '2018-12-27 12:42:56', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(101, '01991223020', 'Dear test, \nYou are not attend in \'27 Dec 2018 Thursday\' class.Please attend all class.\n\n@Britain Standard School', 1, '2018-12-27 12:42:56', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(102, '01991223020', 'Dear Hamza, \nYou are  attend in \'30 Dec 2018 Sunday\' class.Please attend all class.\n\n@Britain Standard School', 1, '2018-12-30 00:28:46', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(103, '01991223020', 'Dear Hamza, \nYou are  attend in \'30 Dec 2018 Sunday\' class.Please attend all class.\n\n@Britain Standard School', 1, '2018-12-30 00:28:46', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(104, '01731133913', 'Dear Hamza, \nYou are  attend in \'30 Dec 2018 Sunday\' class.Please attend all class.\n\n@Britain Standard School', 1, '2018-12-30 00:28:46', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(105, '01991223020', 'Dear A. Hamza, \nYou are  attend in \'02 Jan 2019 Wednesday\' class.Please attend all class.\n\n@Britain Standard School', 1, '2019-01-02 00:38:21', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(106, '01777564786', 'Dear amir, \nYou are  attend in \'02 Jan 2019 Wednesday\' class.Please attend all class.\n\n@Britain Standard School', 1, '2019-01-02 00:38:21', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(107, '01991223020', 'Dear test, \nYou are  attend in \'02 Jan 2019 Wednesday\' class.Please attend all class.\n\n@Britain Standard School', 1, '2019-01-02 00:38:21', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(108, '01777564786', 'Dear test,\nCongratulation For Admitting In Our \'Class Five 2019\' Program.\n\r\nYour ID: 10078\r\nBatch: Section 1\r\nTime: Sat,Tue,Wed (8:00 AM - 1:00 PM)\r\n\r\n@Britain Standard School\r\n', 2, '2019-01-02 21:49:40', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(109, '01777564786', 'Dear amir,\nCongratulation For Admitting In Our \'Class Five 2019\' Program.\n\r\nYour ID: 10052\r\nBatch: Section 1\r\nTime: Sat,Tue,Wed (8:00 AM - 1:00 PM)\r\n\r\n@Techserm\r\n', 2, '2019-01-03 18:57:23', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(110, '01777564786', 'Dear A. Hamza,\nCongratulation For Admitting In Our \'Class One\' Program.\n\r\nYour ID: 10051\r\nBatch: Section 1\r\nTime: Sat,Tue,Wed (8:00 AM - 1:00 PM)\r\n\r\n@TechsermSoft\r\n', 2, '2019-01-09 06:16:45', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(111, '01777564786', 'Dear A. Hamza,\nYour Payment 500 Tk for Monthly Fee \'February-2019\' in \'Engnerring Admission Program 2018\' is Successfully Taken.\nYour Payment ID: 29\n\n@TechsermSoft ', 2, '2019-01-09 06:19:10', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(112, '01777564786', 'Dear Hamza,\nYour obtained marks for the exam \'bangla 1\' is,\n\nWritten: 40/10\n\n@TechsermSoft', 1, '2019-01-12 07:34:30', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(113, '1991223020', 'Dear sdaf, \nYou are not attend in \'16 Jan 2019 Wednesday\' class.Please attend all class.\n\n@TechsermSoft', 1, '2019-01-16 15:28:43', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(114, '1991223020', 'Dear sdaf, \nYou are in \'16 Jan 2019 Wednesday\' class.Please attend all class.\n\n@TechsermSoft', 1, '2019-01-16 15:31:35', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(115, '1991223020', 'Dear sdaf, \nYou are  attend in \'16 Jan 2019 Wednesday\' class.Please attend all class.\n\n@TechsermSoft', 1, '2019-01-16 15:32:26', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(116, '1991223020', 'Dear sdaf, \nYou are Not Attend in \'16 Jan 2019 Wednesday\' Class. Please attend all class.\n\n@TechsermSoft', 1, '2019-01-16 15:38:43', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(117, '1991223020', 'Dear sdaf, \nYou are Not Attend in \'16 Jan 2019 Wednesday\' Class. Please Attend All Class.\n\n@TechsermSoft', 1, '2019-01-16 15:40:20', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(118, '01777564786', 'Dear A. Hamza,\nYour Payment 5000 Tk for Admission Fee in \'Engnerring Admission Program 2018\' is Successfully Taken.\nYour Payment ID: 94\n\n@TechsermSoft ', 1, '2019-01-17 22:49:34', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(119, '01777564786', 'Dear A. Hamza,\nCongratulation. You got admitted to our \'Class Five 2019\' Program.\n\r\nYour ID: 10051\r\nBatch: Section 1\r\nTime: Sat,Tue,Wed (8:00 AM - 1:00 PM)\r\n\r\n@TechsermSoft\r\n', 2, '2019-01-18 01:36:24', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(120, '01777564786', 'Dear A. Hamza,\nYour Payment 1500 Tk for \'1st Mid Exam Fee\' in \'Class One\' is Successfully Taken.\nYour Payment ID: 102\n\n@TechsermSoft ', 1, '2019-01-18 11:12:44', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3),
(121, '01777564786', 'Dear Hamza,\nYour Payment 3000 Tk for \'exam fee\' in \'Academic Program\' is Successfully Taken.\nYour Payment ID: 104\n\n@TechsermSoft ', 1, '2019-01-19 03:09:31', 'http://api.greenweb.com.bd/api.php', '2782dd388e780708ebc38ddecfe135e1', 3);

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
  `address` text,
  `birth_day` date DEFAULT NULL,
  `gender` text,
  `religion` text,
  `school` text,
  `ssc_rool` int(11) DEFAULT NULL,
  `ssc_reg` int(11) DEFAULT NULL,
  `ssc_board` text,
  `ssc_result` double DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `father_name`, `mother_name`, `email`, `photo`, `personal_mobile`, `father_mobile`, `mother_mobile`, `nick`, `address`, `birth_day`, `gender`, `religion`, `school`, `ssc_rool`, `ssc_reg`, `ssc_board`, `ssc_result`, `date`) VALUES
(10001, 'Sk.Amir Hamza', 'sadf', 'sdaf', 'sdaf', '10001.PNG', '01991223020', '01777564786', '215', 'Hamza', 'sadf', '2018-01-25', 'Male', 'Muslim', 'sdff', 414151, 231, '455', 654, '2018-01-19 00:00:00'),
(10002, 'Sk.Hamza', 'asdf', 'sdfa', '465', 'avatar.png', '1991223020', '0', '456', 'sdaf', 'sdf', '2018-01-17', 'Male', 'Muslim', 'sadf', 4000, 4145, '12', 21, '2018-01-19 00:00:00'),
(10003, 'Sk.Fardin', 'sdaf', 'sfa', 'sdfdfsg', '10003.jpg', '1849668726', '53', '56576', 'Fardin', 'dfsg', '2018-01-18', 'Male', 'Muslim', 'sadf', 53, 56, '563', 635, '2018-01-19 00:00:00'),
(10030, 'kala mia', 'sadf', 'sadf', '', 'avatar.png', '1991223020', '0', '0', 'kala', '', '2018-02-20', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-19 00:00:00'),
(10005, 'sdaf', 'sdfa', 'sdfa', 'zfgsd', 'avatar.png', '4654', '456', '456', 'sdaf', 'safd', '2018-01-19', 'Male', 'Muslim', 'sdaf', 456, 456, '546', 4546, '2018-01-19 00:00:00'),
(10006, 'Mash Mash Mash Mash Mash Mash Mash Mash ', 'dasf', 'sadf', 'judjhfd@jksdfh', '10006.jpg', '1780520287', '215', '521', 'Jugol', 'jugol', '2018-01-17', 'Male', 'Muslim', 'sdfa', 123, 123, '132', 45, '2018-01-24 00:00:00'),
(10007, 'Al Nahian', 'saf', 'sdaf', 'sdaf', '10007.jpg', '1777564786', '456', '465', 'Nahian', 'sda', '2018-01-16', 'Male', 'Hindu', 'eads', 645, 45, '456', 456, '2018-01-25 00:00:00'),
(10008, 'Musfiqur Rahim', 'eewt', 'twe', 'dh', '10008.jpeg', '1777564786', '75', '789', 'Musfiq', 'fgdh', '2018-01-18', 'Male', 'Muslim', 'rtyrt', 546, 456, '465', 456, '2018-01-27 00:00:00'),
(10009, 'Nasir Husen', 'Nasir', 'sadf', 'sdaf', 'avatar.png', '1777564786', '657', '746', 'Nasir', 'saf', '2018-01-15', 'Male', 'Muslim', 'sadf', 465, 456, '546', 456, '2018-01-27 00:00:00'),
(10010, 'Tibra Maz', 'sdaf', 'sdfa', 'asdf', '10010.png', '1715214150', '535', '23', 'Arka', 'sadfdfs', '2018-02-06', 'Male', 'Hindu', 'sdafd', 4000, 21332, '213', 213, '2018-02-01 00:00:00'),
(10011, 'Sk.Amir Hamza', 'test', 'test', 'sk.amirhamza@gmail.com', '10011.jpg', '01991223020', '18451', '5656', 'Hamza', 'Dhaka', '2018-10-19', 'Male', 'Muslim', 'sdaf', 45, 546, 'dhaka', 546, '2018-02-02 00:00:00'),
(10012, 'Rajib vai', 'uiooi', 'ouo', 'yukyhg', 'avatar.png', '1786376633', '42752', '45745', 'Rajib', 'iuyoui', '2018-02-08', 'Male', 'Muslim', 'oyo', 107427, 4275, 'uuyt', 124, '2018-02-07 00:00:00'),
(10013, 'fdg', 'dsf', 'sadf', '', 'avatar.png', '0', '123', '123', 'dsf', '', '2018-02-07', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11 00:00:00'),
(10014, 'hamza3', 'dsf', 'sadf', '', 'avatar.png', '0', '123', '123', 'dsf', '', '2018-02-07', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11 00:00:00'),
(10015, 'hamza3', 'dsf', 'sadf', '', 'avatar.png', '0', '0', '0', 'dsf', '', '2018-02-07', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11 00:00:00'),
(10016, 'fgh', 'fgh', 'fg', '', 'avatar.png', '0', '0', '0', 'gh', 'dhaka', '2018-02-11', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11 00:00:00'),
(10017, 'fgh', 'fgh', 'fg', '', 'avatar.png', '0', '0', '0', 'gh', 'dhaka', '2018-02-11', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11 00:00:00'),
(10018, 'sdf', 'sdf', 'sdf', '', 'avatar.png', '0', '0', '0', 'sdf', '', '2018-02-14', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11 00:00:00'),
(10019, 'sdf', 'sdf', 'sdf', '', 'avatar.png', '0', '0', '0', 'sdf', '', '2018-02-14', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11 00:00:00'),
(10020, 'sdf', 'sdf', 'sdf', '', 'avatar.png', '0', '0', '0', 'sdf', '', '2018-02-14', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11 00:00:00'),
(10021, 'sdf', 'sdf', 'sdf', '', 'avatar.png', '0', '0', '0', 'sdf', '', '2018-02-14', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11 00:00:00'),
(10022, 'sdf', 'sdf', 'sdf', '', 'avatar.png', '0', '0', '0', 'sdf', '', '2018-02-14', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11 00:00:00'),
(10023, 'amir hamza', 'ds', 'sdf', 'fg', 'avatar.png', '1991223020', '0', '1991223020', 'hamza', '', '2018-02-15', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11 00:00:00'),
(10024, 'sasfd', 'sda', 'sdaf', '', '10024.jpg', '1991223020', '0', '0', 'sdf', '', '2018-02-12', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11 00:00:00'),
(10025, 'hamza', 'sdf', 'sdf', '', '10025.jpg', '1991223020', '0', '0', 'sdaf', '', '2018-02-14', 'Male', 'Muslim', '', 0, 0, '', 4.34, '2018-02-11 00:00:00'),
(10026, 'dsafdsa', 'sdf', 'sdf', '', '10026.jpg', '0', '0', '0', 'dsfa', '', '2018-02-14', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11 00:00:00'),
(10027, 'sdf', 'sdf', 'sfa', '', 'avatar.png', '0', '0', '0', 'sdf', '', '2018-02-01', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-11 00:00:00'),
(10036, 'Rakib Mia', 'saf', 'sdaf', '', 'avatar.png', '1991223020', '1777564786', '0', 'Rakib', '', '2018-03-09', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-03-05 00:00:00'),
(10029, 'fahim mur', 'sdaf', 'sadf', '', 'avatar.png', '152465456', '0', '0', 'fahim', '', '2018-02-15', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-16 00:00:00'),
(10037, 'Karim Mia', 'sdf', 'sdaf', '', 'avatar.png', '1991223020', '0', '0', 'Karim', '', '2018-03-06', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-03-05 00:00:00'),
(10033, 'Mukles Mia', 'af', 'sdf', 'tamimhak777@gmail.com', '10033.jpg', '1772099282', '1991223020', '1707515751', 'Mukles Mia', '152, Arambag', '2018-02-21', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-02-20 00:00:00'),
(10034, 'Mannan Omi', 'sdfsdaf', 'saf', '', 'avatar.png', '1684473273', '0', '0', 'Omi', '', '2017-07-01', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-03-03 00:00:00'),
(10035, 'server test', 'sf', 'sdf', 'sk.amirhaza@gmail.com', '10035.PNG', '0', '1777564758', '0', 'server test', 'habiganj', '2018-03-01', 'Male', 'Muslim', 'fgsdfg', 54545, 4545, 'Sylhet', 4.17, '2018-03-05 00:00:00'),
(10038, 'shakib hassan', 'tgr', 'fd', 'grf', 'avatar.png', '1683408675', '4', '1', 'shakib', 'hgh', '2018-03-14', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-03-27 00:00:00'),
(10066, 'Sk.Amir Hamza', '', '', 'sk.amirhamza@gmail.com', '10066.PNG', '1991223020', '0', '0', 'Hamza', 'Dhaka', '2018-11-15', 'Male', 'Muslim', '', 0, 0, 'dhaka', 0, '2018-11-17 00:00:00'),
(10049, 'Fardin', 'sd', 'd', '', '10049.png', '1991223020', '0', '1731133913', 'Fardin', '', '2018-06-15', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-06-19 00:00:00'),
(10041, 'test abs', 'd', 'd', '', 'avatar.png', '0', '0', '0', 'abc', '', '2018-05-16', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13 00:00:00'),
(10042, 'Test 1263', 'd', 'd', '', 'avatar.png', '0', '0', '0', 'test', '', '2018-05-17', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13 00:00:00'),
(10043, 'shiddharto', 'test', 'test', '', 'avatar.png', '0', '0', '0', 'test', '', '2018-05-16', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13 00:00:00'),
(10044, 'Anik', 'sf', 'df', '', 'avatar.png', '0', '0', '0', 'anik', '', '2018-05-17', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13 00:00:00'),
(10045, 'Abdul jabbar', 'test', 'test', '', 'avatar.png', '0', '0', '0', 'chesra', '', '2018-05-24', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13 00:00:00'),
(10046, 'Test 123', 'd', 'd', '', 'avatar.png', '0', '0', '0', 'test', '', '2018-05-24', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-05-13 00:00:00'),
(10048, 'RTRTR5', 'fhs', 'fhwiopefjwo', '', 'avatar.png', '1787563057', '0', '0', 'bappy', 'habiganj', '2018-06-21', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-06-19 00:00:00'),
(10050, 'monir vai', '', '', '', '10050.jpg', '1707515751', '14567', '0', 'monir', '152, Arambagg', '2018-08-09', 'Male', 'Muslim', '', 0, 0, 'Dhaka', 0, '2018-07-10 00:00:00'),
(10051, 'Sk.Amir Hamza', '', '', 'sk.amirhamza@gmail.com', '10051.jpg', '01777564786', '01991223020', '01731133913', 'A. Hamza', 'Dhaka', '2018-08-23', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08 00:00:00'),
(10052, 'amir', '', '', '', 'avatar.png', '01777564786', '0', '0', 'amir', '', '2018-08-15', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08 00:00:00'),
(10053, 'test1', 'sdf', 'sdf', '', '10053.jpg', '01991223020', '0', '0', 'test', '', '2018-08-09', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08 00:00:00'),
(10054, 'asdf', '', '', '', 'avatar.png', '0', '0', '0', 'afs', '', '2018-08-22', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08 00:00:00'),
(10055, 'sdfgdfg', '', '', '', 'avatar.png', '0', '0', '0', 'dfg', '', '2018-08-11', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08 00:00:00'),
(10056, 'saf', '', '', '', 'avatar.png', '0', '0', '0', 'sdaf', '', '2018-08-17', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08 00:00:00'),
(10057, 'saf', '', '', '', 'avatar.png', '0', '0', '0', 'sdaf', '', '2018-08-17', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08 00:00:00'),
(10058, 'amir hamza', 'dsf', 'sdfg', 'sk.amirhamza@gmail.com', '10058.jpg', '1991223020', '456', '5466', 'Hamza', 'Dhaka', '2018-08-17', 'Male', 'Muslim', '', 0, 0, 'dhaka', 0, '2018-08-08 00:00:00'),
(10059, 'sdaf', '', '', '', 'avatar.png', '0', '0', '0', 'sdf', '', '2018-08-23', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-08 00:00:00'),
(10060, 'Test Ham1', '', '', '', '10060.jpg', '0', '0', '0', 'ham', '', '2018-08-16', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-09 00:00:00'),
(10061, 'test3', '', '', '', 'avatar.png', '0', '0', '0', 'test prac', '', '2018-08-23', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-12 00:00:00'),
(10062, 'Akter Ahmed', '', '', '', '10062.PNG', '0', '0', '0', 'Akter', '', '2018-10-09', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-14 00:00:00'),
(10063, 'Test 15', '', '', '', 'avatar.png', '0', '0', '0', 'test', '', '2018-08-15', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-18 00:00:00'),
(10064, 'Alnor', '', '', '', 'avatar.png', '0', '0', '0', 'alnor', '', '2018-08-03', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-08-23 00:00:00'),
(10065, 'Rahim', '', '', '', 'avatar.png', '0', '0', '0', 'Rahim', '', '2018-10-12', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-10-04 00:00:00'),
(10067, 'amir hamza update', '', '', '', 'avatar.png', '01991223020', '01777564786', '0', 'hamza', '', '2018-12-08', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-07 00:00:00'),
(10068, 'Mannan Omi', '', '', '', 'avatar.png', '01684473273', '0', '0', 'Futej(Omi)', '', '2018-12-19', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-11 00:00:00'),
(10069, 'Jugol Kishur', '', '', '', 'avatar.png', '01521461643', '0', '0', 'Juglu', '', '2018-12-12', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-11 00:00:00'),
(10070, 'Raihan Taher', '', '', '', 'avatar.png', '01521432303', '0', '0', 'Raihan ', '', '2018-12-02', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-11 00:00:00'),
(10071, 'Sk.Amir Hamza', '', '', 'sk.amirhamza@gmail.com', 'avatar.png', '01991223020', '0', '0', 'Hamza', 'Dhaka', '2018-12-01', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-16 00:00:00'),
(10072, 'site_activity', '', '', '', 'avatar.png', '01991223020', '0', '0', 'activity', '', '2018-12-17', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-16 00:00:00'),
(10073, 'rihan full', '', '', '', '10073.PNG', '01717541842', '0', '0', 'rihan', '', '2018-12-20', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-22 00:00:00'),
(10074, 'test123', '', '', '', 'avatar.png', '0', '0', '0', 'test ', '', '2018-12-27', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-27 00:00:00'),
(10075, 'gfh', '', '', '', 'avatar.png', '0', '0', '0', 'gh', '', '2018-12-07', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-27 00:00:00'),
(10076, 'test', '', '', '', 'avatar.png', '0', '0', '0', 'test', '', '2018-11-28', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-27 00:00:00'),
(10077, 'test', '', '', '', 'avatar.png', '', '', '', 'test', '', '2019-01-24', 'Male', 'Muslim', '', 0, 0, '', 0, '2019-01-02 21:45:04'),
(10078, 'test123', '', '', '', 'avatar.png', '01777564786', '0', '0', 'test', '', '2019-01-03', 'Male', 'Muslim', '', 0, 0, '', 0, '2019-01-02 21:48:29'),
(10079, 'Sk.Amir Hamza', '', '', 'sk.amirhamza@gmail.com', 'avatar.png', '1991223020', '', '', 'Hamza', 'Dhaka', '2019-01-11', 'Male', 'Muslim', '', 0, 0, 'dhaka', 0, '2019-01-17 00:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendence`
--

CREATE TABLE `student_attendence` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_attendence`
--

INSERT INTO `student_attendence` (`id`, `student_id`, `program_id`, `batch_id`, `status`, `date`) VALUES
(127, 10072, 13, 12, 0, '2018-12-20'),
(128, 10011, 8, 11, 1, '2018-12-20'),
(129, 10036, 8, 11, 1, '2018-12-20'),
(130, 10050, 8, 11, 1, '2018-12-20'),
(131, 10051, 8, 11, 1, '2018-12-20'),
(132, 10071, 8, 11, 1, '2018-12-20'),
(133, 10072, 8, 11, 1, '2018-12-20'),
(134, 10001, 13, 23, 1, '2018-12-20'),
(135, 10051, 13, 23, 1, '2018-12-20'),
(136, 10068, 13, 23, 1, '2018-12-20'),
(137, 10069, 13, 23, 1, '2018-12-20'),
(138, 10070, 13, 23, 1, '2018-12-20'),
(139, 10071, 13, 23, 1, '2018-12-20'),
(140, 10001, 8, 12, 1, '2018-12-20'),
(141, 10046, 8, 12, 0, '2018-12-20'),
(142, 10048, 8, 12, 1, '2018-12-20'),
(143, 10049, 8, 12, 1, '2018-12-20'),
(144, 10052, 8, 12, 1, '2018-12-20'),
(145, 10067, 8, 12, 1, '2018-12-20'),
(146, 10001, 13, 23, 1, '2018-12-22'),
(147, 10051, 13, 23, 1, '2018-12-22'),
(148, 10068, 13, 23, 1, '2018-12-22'),
(149, 10069, 13, 23, 0, '2018-12-22'),
(150, 10070, 13, 23, 1, '2018-12-22'),
(151, 10071, 13, 23, 1, '2018-12-22'),
(152, 10073, 13, 23, 1, '2018-12-22'),
(153, 10073, 14, 24, 0, '2018-12-22'),
(154, 10073, 14, 24, 1, '2019-01-16'),
(155, 10073, 14, 24, 0, '2019-01-17'),
(156, 10001, 8, 12, 0, '2018-12-22'),
(157, 10046, 8, 12, 1, '2018-12-22'),
(158, 10048, 8, 12, 0, '2018-12-22'),
(159, 10049, 8, 12, 1, '2018-12-22'),
(160, 10052, 8, 12, 1, '2018-12-22'),
(161, 10067, 8, 12, 1, '2018-12-22'),
(162, 10001, 13, 23, 0, '2018-12-25'),
(163, 10051, 13, 23, 1, '2018-12-25'),
(164, 10068, 13, 23, 1, '2018-12-25'),
(165, 10069, 13, 23, 1, '2018-12-25'),
(166, 10070, 13, 23, 1, '2018-12-25'),
(167, 10071, 13, 23, 0, '2018-12-25'),
(168, 10073, 13, 23, 1, '2018-12-25'),
(169, 10073, 14, 24, 0, '2018-12-26'),
(170, 10001, 8, 12, 1, '2018-12-26'),
(171, 10046, 8, 12, 1, '2018-12-26'),
(172, 10048, 8, 12, 1, '2018-12-26'),
(173, 10049, 8, 12, 1, '2018-12-26'),
(174, 10052, 8, 12, 1, '2018-12-26'),
(175, 10067, 8, 12, 0, '2018-12-26'),
(176, 10011, 8, 11, 1, '2018-12-26'),
(177, 10036, 8, 11, 1, '2018-12-26'),
(178, 10050, 8, 11, 1, '2018-12-26'),
(179, 10051, 8, 11, 0, '2018-12-26'),
(180, 10071, 8, 11, 1, '2018-12-26'),
(181, 10072, 8, 11, 1, '2018-12-26'),
(182, 10001, 13, 23, 0, '2018-12-26'),
(183, 10051, 13, 23, 0, '2018-12-26'),
(184, 10068, 13, 23, 0, '2018-12-26'),
(185, 10069, 13, 23, 0, '2018-12-26'),
(186, 10070, 13, 23, 0, '2018-12-26'),
(187, 10071, 13, 23, 0, '2018-12-26'),
(188, 10073, 13, 23, 0, '2018-12-26'),
(189, 10051, 15, 23, 1, '2018-12-26'),
(190, 10051, 15, 23, 0, '2018-12-27'),
(191, 10051, 15, 23, 1, '2018-12-28'),
(192, 10051, 15, 23, 1, '2018-11-29'),
(193, 10052, 15, 23, 0, '2018-11-29'),
(194, 10051, 15, 23, 1, '2018-12-29'),
(195, 10052, 15, 23, 1, '2018-12-29'),
(196, 10052, 15, 23, 0, '2018-12-26'),
(197, 10053, 15, 23, 1, '2018-12-26'),
(198, 10052, 15, 23, 1, '2018-12-27'),
(199, 10053, 15, 23, 0, '2018-12-27'),
(200, 10052, 15, 23, 1, '2018-12-28'),
(201, 10053, 15, 23, 0, '2018-12-28'),
(202, 10051, 15, 23, 1, '2019-01-01'),
(203, 10052, 15, 23, 1, '2019-01-01'),
(204, 10053, 15, 23, 1, '2019-01-01'),
(205, 10053, 15, 23, 1, '2018-12-29'),
(206, 10051, 15, 23, 1, '2018-12-30'),
(207, 10052, 15, 23, 0, '2018-12-30'),
(208, 10053, 15, 23, 0, '2018-12-30'),
(209, 10051, 15, 23, 1, '2019-01-02'),
(210, 10052, 15, 23, 1, '2019-01-02'),
(211, 10053, 15, 23, 1, '2019-01-02'),
(212, 10002, 15, 24, 0, '2019-01-16');

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
  `note` text,
  `date` datetime NOT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_payment`
--

INSERT INTO `student_payment` (`id`, `student_id`, `program_id`, `type`, `year`, `month`, `total_fee`, `note`, `date`, `add_by`) VALUES
(1, 10050, 8, 2, 2019, 6, 2300, NULL, '2018-11-27 00:00:00', 1),
(2, 10050, 8, 2, 2019, 5, 1500, NULL, '2018-11-28 04:42:47', 3),
(3, 10050, 8, 2, 2018, 8, 500, NULL, '2018-11-28 04:43:43', 3),
(4, 10050, 8, 2, 2019, 2, 700, NULL, '2018-11-28 04:51:40', 3),
(5, 10050, 8, 2, 2019, 1, 400, NULL, '2018-11-28 04:52:46', 3),
(6, 10050, 8, 2, 2019, 1, 500, NULL, '2018-11-28 04:53:11', 3),
(7, 10050, 8, 2, 2018, 4, 150, NULL, '2018-11-28 04:54:30', 3),
(8, 10050, 8, 2, 2018, 12, 100, NULL, '2018-11-28 04:57:14', 3),
(9, 10050, 8, 2, 2018, 10, 300, NULL, '2018-11-28 04:57:25', 3),
(10, 10050, 8, 2, 2018, 9, 700, NULL, '2018-11-28 10:07:09', 3),
(11, 10050, 8, 2, 2018, 7, 800, NULL, '2018-11-28 12:21:01', 3),
(12, 10050, 8, 1, 0, 0, 3500, NULL, '2018-11-28 12:21:50', 3),
(13, 10050, 2, 1, 0, 0, 14000, NULL, '2018-11-28 12:23:59', 3),
(14, 10050, 5, 1, 0, 0, 7500, NULL, '2018-11-28 21:13:42', 3),
(15, 10050, 8, 2, 2018, 5, 1000, NULL, '2018-11-29 07:36:57', 3),
(16, 10051, 3, 1, 0, 0, 15000, NULL, '2018-11-29 17:06:29', 3),
(17, 10049, 3, 1, 0, 0, 15000, NULL, '2018-11-29 17:09:24', 3),
(18, 10051, 3, 2, 2019, 2, 600, '', '2018-11-29 17:11:11', 3),
(19, 10051, 3, 2, 2018, 12, 700, NULL, '2018-11-29 17:41:48', 3),
(20, 10035, 3, 1, 0, 0, 15000, NULL, '2018-11-29 17:54:15', 3),
(21, 10049, 8, 2, 2019, 6, 400, NULL, '2018-11-29 17:57:44', 3),
(22, 10049, 8, 2, 2019, 5, 500, NULL, '2018-11-30 14:18:41', 3),
(23, 10049, 8, 1, 0, 0, 5000, NULL, '2018-11-30 14:19:14', 3),
(24, 10048, 5, 1, 0, 0, 7000, NULL, '2018-12-02 17:40:59', 3),
(25, 10046, 5, 1, 0, 0, 7500, NULL, '2018-12-02 20:04:23', 3),
(26, 10046, 5, 1, 0, 0, 7500, NULL, '2018-12-02 20:04:27', 3),
(27, 10046, 8, 1, 0, 0, 6000, NULL, '2018-12-02 20:04:55', 3),
(28, 10046, 8, 1, 0, 0, 4000, NULL, '2018-12-02 20:04:57', 3),
(29, 10046, 3, 2, 2018, 11, 500, NULL, '2018-12-02 21:09:57', 3),
(30, 10046, 3, 2, 2019, 1, 500, NULL, '2018-12-02 21:10:24', 3),
(31, 10052, 3, 1, 0, 0, 15000, NULL, '2018-12-03 00:26:49', 3),
(32, 10052, 3, 2, 2019, 2, 300, NULL, '2018-12-03 09:37:34', 3),
(33, 10049, 3, 2, 2019, 2, 500, NULL, '2018-12-05 01:07:16', 3),
(34, 10048, 8, 1, 0, 0, 5000, NULL, '2018-12-06 01:49:01', 3),
(35, 10036, 8, 2, 2019, 6, 400, NULL, '2018-12-06 17:24:09', 3),
(36, 10036, 8, 2, 2019, 5, 500, NULL, '2018-12-06 18:57:56', 3),
(37, 10036, 8, 1, 0, 0, 5000, NULL, '2018-12-06 20:35:23', 3),
(38, 10001, 8, 1, 0, 0, 5000, NULL, '2018-12-07 00:21:31', 3),
(39, 10001, 8, 2, 2019, 6, 500, NULL, '2018-12-07 00:41:28', 3),
(40, 10067, 5, 1, 0, 0, 7500, NULL, '2018-12-07 19:09:40', 3),
(41, 10067, 8, 2, 2019, 6, 500, NULL, '2018-12-10 03:54:21', 7),
(42, 10001, 8, 2, 2019, 5, 500, NULL, '2018-12-10 07:33:23', 7),
(43, 10068, 13, 1, 0, 0, 4000, NULL, '2018-12-11 23:18:13', 3),
(44, 10051, 13, 1, 0, 0, 5000, NULL, '2018-12-12 00:15:10', 3),
(45, 10001, 8, 2, 2018, 8, 500, NULL, '2018-12-13 08:56:59', 3),
(46, 10001, 5, 1, 0, 0, 7500, NULL, '2018-12-13 10:39:28', 3),
(47, 10051, 8, 2, 2019, 6, 500, NULL, '2018-12-14 09:40:19', 3),
(48, 10071, 13, 1, 0, 0, 2000, NULL, '2018-12-16 14:46:54', 3),
(49, 10071, 13, 2, 2019, 3, 1000, NULL, '2018-12-16 14:57:50', 3),
(50, 10051, 13, 2, 2019, 3, 1000, NULL, '2018-12-17 00:19:32', 3),
(51, 10072, 13, 1, 0, 0, 2000, NULL, '2018-12-17 04:04:29', 3),
(52, 10072, 4, 1, 0, 0, 500, NULL, '2018-12-17 04:34:03', 5),
(53, 10001, 13, 2, 2019, 1, 1000, NULL, '2018-12-19 03:11:58', 3),
(54, 10073, 13, 2, 2019, 3, 1000, NULL, '2018-12-22 10:47:43', 3),
(55, 10001, 13, 1, 0, 0, 4000, NULL, '2018-12-22 23:24:27', 3),
(56, 10011, 3, 1, 0, 0, 15000, NULL, '2018-12-26 15:47:17', 3),
(57, 10011, 2, 1, 0, 0, 17000, NULL, '2018-12-26 17:48:43', 3),
(58, 10071, 8, 2, 2019, 6, 500, NULL, '2018-12-27 23:56:39', 3),
(59, 10051, 15, 1, 0, 0, 5000, NULL, '2018-12-28 00:43:24', 3),
(60, 10051, 8, 1, 0, 0, 200, NULL, '2019-01-15 22:47:21', 3),
(61, 10051, 15, 1, 0, 0, 5000, NULL, '2019-01-16 15:56:36', 3),
(62, 10051, 3, 3, 0, 0, 700, '1st term exam fee', '2019-01-17 23:49:40', 3),
(63, 10051, 3, 3, NULL, NULL, 1000, 'Shirt And Dress', '2019-01-18 02:10:44', 3),
(64, 10051, 13, 3, NULL, NULL, 3000, 'student buy book by seller and customer ', '2019-01-18 02:14:19', 3),
(65, 10051, 8, 3, NULL, NULL, 3000, 'tshirt', '2019-01-18 10:05:54', 3),
(66, 10051, 8, 2, 2019, 5, 500, NULL, '2019-01-18 11:01:54', 3),
(67, 10051, 13, 3, NULL, NULL, 1500, '1st Mid Exam Fee', '2019-01-18 11:11:54', 3),
(68, 10052, 8, 2, 2019, 6, 500, NULL, '2019-01-18 20:23:05', 3),
(69, 10052, 8, 1, 0, 0, 5000, NULL, '2019-01-18 20:27:47', 3),
(70, 10052, 8, 3, NULL, NULL, 400, 'extra fee', '2019-01-18 20:28:13', 3),
(71, 10001, 5, 3, NULL, NULL, 4000, 'exam fee', '2019-01-19 03:09:08', 3);

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
(9, 'Pink', '#ED5FE9', '#ED3BA1', '#ED98D4', '#ED72CD', '#FFFFFF', '2018-06-13', 3),
(10, 'Blue1', '#564C9E', '#724EED', '#907EED', '#5867ED', '#FFFFFF', '2018-06-14', 3),
(23, 'CYAN', '#005154', '#EDE6EC', '#EDE6EC', '#EDE6EC', '#FFFFFF', '2019-01-16', 3),
(22, 'Web Dark', '#235A6B', '#EDE6EC', '#EDE6EC', '#EDE6EC', '#FFFFFF', '2019-01-16', 3),
(21, 'Web', '#378BA6', '#EDE6EC', '#EDE6EC', '#EDE6EC', '#FFFFFF', '2019-01-16', 3),
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
  `status` int(11) NOT NULL DEFAULT '1',
  `theme` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `fname`, `photo`, `gender`, `email`, `phone`, `address`, `pass`, `permit`, `status`, `theme`) VALUES
(3, 'hamza05', 'Sk.Amir Hamza', 'user_3.jpg', 'Male', 'sk.amirhamza@gmail.com', 1777564786, 'Dhaka', '1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599', 1, 1, 23),
(2, 'shakib', 'all hassan', 'user_2.jpg', '', 'sk.amirhamza1@gmail.com', 177756478, '', 'd4fc23375ec457523736a83bc9e8815a2bf434e987d0c45a769104c566050283', 2, 1, 1),
(5, 'rahim', 'Musfiqur Rahim', 'user_5.jpg', 'Male', 'rahim@gmail.com', 1777564786, 'Dhaka', '1be703389b8403475f45de8245e47baf16361db33e42f80c30eb401666d43599', 7, 0, 1),
(7, 'admin', 'amir hamza', 'avatar.png', '', 'sf', 32154, '', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 7, 1, 12);

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
-- Indexes for table `chat`
--
ALTER TABLE `chat`
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
-- Indexes for table `income`
--
ALTER TABLE `income`
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
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_payment`
--
ALTER TABLE `set_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_activity`
--
ALTER TABLE `site_activity`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `classid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `expence`
--
ALTER TABLE `expence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `expence_category`
--
ALTER TABLE `expence_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `receive_payment`
--
ALTER TABLE `receive_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `set_payment`
--
ALTER TABLE `set_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `site_activity`
--
ALTER TABLE `site_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=418;
--
-- AUTO_INCREMENT for table `sms_add`
--
ALTER TABLE `sms_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sms_list`
--
ALTER TABLE `sms_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `sms_setting`
--
ALTER TABLE `sms_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10080;
--
-- AUTO_INCREMENT for table `student_attendence`
--
ALTER TABLE `student_attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;
--
-- AUTO_INCREMENT for table `student_id`
--
ALTER TABLE `student_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10053;
--
-- AUTO_INCREMENT for table `student_payment`
--
ALTER TABLE `student_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1239;
--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
