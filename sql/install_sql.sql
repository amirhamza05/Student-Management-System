-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2019 at 12:42 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classid` int(11) NOT NULL,
  `classname` text NOT NULL,
  `subject_code` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `exam_category`
--

CREATE TABLE `exam_category` (
  `id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `program_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_list`
--

CREATE TABLE `exam_list` (
  `id` int(11) NOT NULL,
  `exam_name` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `subject_name` int(11) NOT NULL,
  `exam_date` datetime NOT NULL,
  `date` datetime NOT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_mark`
--

CREATE TABLE `exam_mark` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `mark_category_id` int(11) NOT NULL,
  `total_mark` int(11) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `expence_category`
--

CREATE TABLE `expence_category` (
  `id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `mark_category`
--

CREATE TABLE `mark_category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `add_by` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `pending_sms`
--

CREATE TABLE `pending_sms` (
  `id` int(11) NOT NULL,
  `number_list` text NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `option_name` text,
  `option_value` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


--  
-- Dumping data for table `setting` 
--  

INSERT INTO `setting` (`id`, `option_name`, `option_value`) VALUES  
(1, 'site_name', 'Open Source Student Management System'),  
(2, 'sort_name', 'EMS'), 
(3, 'address', 'Dhaka, Bangladesh'), 
(4, 'main_logo', 'techserm_full_logo.jpg'),  
(5, 'logo', 'techserm_small_logo.png'),  
(6, 'phone', '-'),  
(7, 'email', 'sk.amirhamza@gmail.com'),  
(8, 'msg', 'EMS');  

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

-- --------------------------------------------------------

--
-- Table structure for table `student_id`
--

CREATE TABLE `student_id` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `sub_name` text NOT NULL,
  `sub_code` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(20, 'Google Red', '#DB4437', '#EDE6EC', '#EDE6EC', '#EDE6EC', '#FFFFFF', '2018-11-21', 3),
(24, 'new theme', '#331F77', '#EDE6EC', '#EDE6EC', '#EDE6EC', '#FFFFFF', '2019-01-21', 3),
(25, 'apply', '#ED3B19', '#EDE6EC', '#EDE6EC', '#EDE6EC', '#FFFFFF', '2019-02-01', 3),
(26, 'dark blue', '#001E4C', '#EDE6EC', '#EDE6EC', '#EDE6EC', '#FFFFFF', '2019-02-08', 3),
(27, 'Copy Theme 1', '#2C293E', '#EDE6EC', '#EDE6EC', '#EDE6EC', '#EDEDED', '2019-04-28', 3);

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
(1, 'admin', 'Admin', 'avatar.png', 'Male', 'admin@gmail.com', 012345678910, 'Bangladesh', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 1, 1, 1);
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
-- Indexes for table `exam_category`
--
ALTER TABLE `exam_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_list`
--
ALTER TABLE `exam_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_mark`
--
ALTER TABLE `exam_mark`
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
-- Indexes for table `mark_category`
--
ALTER TABLE `mark_category`
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
-- Indexes for table `pending_sms`
--
ALTER TABLE `pending_sms`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `classid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exam_category`
--
ALTER TABLE `exam_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exam_list`
--
ALTER TABLE `exam_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exam_mark`
--
ALTER TABLE `exam_mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `expence`
--
ALTER TABLE `expence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `expence_category`
--
ALTER TABLE `expence_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mark_category`
--
ALTER TABLE `mark_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pending_sms`
--
ALTER TABLE `pending_sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receive_payment`
--
ALTER TABLE `receive_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `set_payment`
--
ALTER TABLE `set_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_activity`
--
ALTER TABLE `site_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sms_add`
--
ALTER TABLE `sms_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sms_list`
--
ALTER TABLE `sms_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sms_setting`
--
ALTER TABLE `sms_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_attendence`
--
ALTER TABLE `student_attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_id`
--
ALTER TABLE `student_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_payment`
--
ALTER TABLE `student_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
