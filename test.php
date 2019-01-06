-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2019 at 01:37 PM
-- Server version: 10.2.20-MariaDB-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techserm_britainstandardschool`
--

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `father_name`, `mother_name`, `email`, `photo`, `personal_mobile`, `father_mobile`, `mother_mobile`, `nick`, `program`, `batch`, `fee`, `address`, `birth_day`, `gender`, `religion`, `school`, `ssc_rool`, `ssc_reg`, `ssc_board`, `ssc_result`, `date`) VALUES
(10109, 'Gazi Shanto', 'Shadin Hosen', 'Sabina sorkar', '', 'avatar.png', '0', '0', '01734203372', 'Shanto', 2, 1, 1500, 'South Malivita , Abdullah pur , South Keranigonj , Dhaka-1311', '2008-10-29', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-31'),
(10108, 'Gazi Shuv', 'Shadin hosen', 'Sabina sorkar', '', 'avatar.png', '0', '0', '01734203372', 'Shuv', 2, 1, 1500, 'South Malivita , Abdullah pur , South Keranigonj , Dhaka-1311', '2007-11-19', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-31'),
(10107, 'Miss.Nadiya Aktar', 'Md.Jamal Hosen', 'Afirun Begom', '', 'avatar.png', '0', '0', '01791943360', 'Nadiya', 2, 1, 1500, 'Vawarviyi , Abdullah pur , South Keranigonj , Dhaka-1311', '2003-09-13', 'Female', 'Muslim', '', 0, 0, '', 0, '2018-12-31'),
(10106, 'Sadiya Aktar', 'Jamal Hosen', 'Afirun Begum', '', 'avatar.png', '0', '0', '01791943360', 'Sadiya Aktar', 2, 1, 1500, 'Vawarviti , Abdullah pur , South Keranigonj , Dhaka-1311', '2008-01-01', 'Female', 'Muslim', '', 0, 0, '', 0, '2018-12-31'),
(10105, 'Aiyan Ahmed', 'Yakub Ahmed', 'Luna Ahmed', '', 'avatar.png', '0', '0', '0183553829', 'Aiyan Ahmed', 2, 1, 1500, 'Abdullahpur , Abdullah pur , South Keranigonj , Dhaka-1311', '2014-12-15', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-31'),
(10104, 'Abrar Jahan Saad', 'Md. Solaiman', 'Bodrun Nahar', '', 'avatar.png', '0', '01717458557', '01685177805', 'Abrar Jahan', 2, 1, 1500, 'Rasulpur , Abdullah pur , South Keranigonj , Dhaka-1311', '2015-02-05', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-31'),
(10103, 'Shahara Aktar Moni', 'Badiuzzaman', 'Nilufa Begum', '', 'avatar.png', '0', '0', '01884646649', 'Shahara Aktar', 2, 1, 1500, 'Vawarvity , Abdullah pur , South Keranigonj , Dhaka-1311', '2015-06-09', 'Female', 'Muslim', '', 0, 0, '', 0, '2018-12-31'),
(10102, 'Jannatul Ferdous Sigma', 'Iqbal Hossain', 'Nasrin Aktar', '', 'avatar.png', '0', '0', '01627789165', 'Jannatul Ferdous', 2, 1, 1500, 'Rasulpur , Abdullah pur , South Keranigonj , Dhaka-1311', '2012-11-21', 'Female', 'Muslim', '', 0, 0, '', 0, '2018-12-31'),
(10101, 'Mirajul Haque Raj', 'MdShahidul Haque', 'Moly Haque', '', 'avatar.png', '0', '0', '01757120092', 'Raj', 2, 1, 1500, 'Rasulpul , Abdullah pur , South Keranigonj , Dhaka-1311 ', '2009-05-02', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-29'),
(10100, 'Oliullah', 'Saiful Islam', 'Salma Begum', '', 'avatar.png', '0', '0', '01951567013', 'Oliullah', 2, 1, 1500, 'Rasulpur , Abdullah pur , South Keranigonj , Dhaka-1311 ', '2009-08-12', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-29'),
(10099, 'Safuyan Ahamed Saif', 'Md.Shajamal', 'Bilkis Begum', '', 'avatar.png', '0', '0', '0', 'Saif', 2, 1, 1500, 'Rasulpur , Abdullah pur , South Keranigonj , Dhaka-1311', '2007-11-30', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-29'),
(10098, 'Asikol Islam Bolbol', 'Md. Kamal Hosen', 'Asma Aktar', '', 'avatar.png', '0', '0', '01931564566', 'Asikol Islam', 2, 1, 1500, 'Malivita ,  Abdullah pur , South Keranigonj , Dhaka-1311', '2008-01-18', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-29'),
(10097, 'Alifonnahar', 'Md.Ajimuddin', ' Hamida Begum', '', 'avatar.png', '0', '0', '01670495956', 'Alifonnahar', 2, 1, 1500, 'Rasolpur , Abdullah pur , South Keranigonj , Dhaka-1311', '2007-07-28', 'Female', 'Muslim', '', 0, 0, '', 0, '2018-12-29'),
(10096, 'Umme Habiba', 'Badol Hosen', 'Helena Begum', '', 'avatar.png', '0', '0', '01855839920', 'Umme Habiba', 2, 1, 1500, 'Rasolpur ,Abdullah pur , South Keranigonj , Dhaka-1311 ', '2013-05-27', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-29'),
(10095, 'Samiya Aktar Najiba', 'Md. Kamrul Hasan', 'Kusum Aktar', '', 'avatar.png', '0', '0', '01933107197', 'Samiya Aktar', 2, 1, 1500, 'Vawar viti , Abdullah pur , South Keranigonj , Dhaka-1311', '2011-08-19', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-29'),
(10094, 'Kabirol Akbar Dhrubo', 'Md.Jakir Hosen', 'Atiya Parvin', '', 'avatar.png', '0', '0', '01716015708', 'Dhrubo', 2, 1, 1500, 'Jel stap Quatar ,South Keranigonj , Dhaka ', '2012-10-15', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-29'),
(10093, 'Samudra', 'Bankim Chandra Das', 'Gouri Rani Das', '', 'avatar.png', '0', '0', '01713541654', 'Samudra', 2, 1, 1500, 'Rasulpur , Abdullah pur, Keranigonj, Dhaka', '2014-12-21', 'Male', 'Hindu', '', 0, 0, '', 0, '2018-12-27'),
(10092, 'Rifat Islam', 'Md. Babul Miya Gaji', 'Roksana Begum', '', 'avatar.png', '0', '0', '01881295351', 'Rifaf Islam', 2, 1, 1500, 'Rasulpur ,', '2006-01-16', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-27'),
(10091, 'Al Rifag Himel', 'Md.Helal uddin', 'Rifa', '', 'avatar.png', '0', '0', '01776507710', 'Himel', 2, 1, 1500, 'Vawar viti ,Abdullah pur , keranigonj ,Dhaka', '2013-06-26', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-27'),
(10090, 'Md.Josim', 'Md.Dilbar Hosen ', 'Jhorna Begum ', '', 'avatar.png', '0', '0', '01874414921', 'Josim', 2, 1, 1500, 'Chor Golgoliya , Kochiyamora , Siragdikhan , Monsigonj', '2007-07-10', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-27'),
(10089, 'Steef Rana', 'Md.Showket', 'Selina Begum', '', 'avatar.png', '0', '0', '01726667575', 'Steef Rana', 2, 1, 1500, 'Vawar Viti', '2013-07-05', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-27'),
(10088, 'Jidni', 'Md. Monir hosen', 'Ajmeri Begom', '', 'avatar.png', '0', '0', '01715849754', 'jidni', 2, 1, 1500, 'Islampur ,Abdullah pur , south Keranigonj , Dhaka', '2011-08-26', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-27'),
(10087, 'MD.Ainul Haque', 'Md.Golam Mostofa', 'Sekh Almas ara', '', 'avatar.png', '0', '0', '01757217121', 'Ainul', 2, 1, 1500, 'Rasulpur, ', '2012-08-07', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-27'),
(10086, 'Saymon Islam', 'Nizam uddin', 'Habiba Soltana ', '', '10086.jpg', '0', '0', '01730676516', 'Nishad', 2, 1, 1500, 'Kalakandi, Abdullah pur, south Keranigonj, Dhaka', '2015-12-10', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-26'),
(10085, 'Tabasum Mahamud', 'Mahamud Oyasim', 'Subrna', '', 'avatar.png', '0', '0', '01885566937', 'Aliya', 2, 1, 1500, 'Islampur , Abdulillah S.keranigonj Dhaka', '0214-04-06', 'Female', 'Muslim', '', 0, 0, '', 0, '2018-12-26'),
(10084, 'Sabriha Jahan ', 'Md.Somon', 'Shabnur', '', 'avatar.png', '0', '01720574144', '0', 'Sinthiya', 2, 1, 1500, 'Rasolpur', '2012-10-28', 'Female', 'Muslim', '', 0, 0, '', 0, '2018-12-26'),
(10083, 'Abobkkr Siddk', 'Md.Bappi', 'Jorna Aktar', '', 'avatar.png', '0', '0', '01792121567', 'Imon', 2, 1, 1500, 'South Rasolpur ,Abdullah pur. Keranigonj,Dhaka', '2013-12-21', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-26'),
(10082, 'Tanbir Hosen', 'Md. Halim', 'Shikha', '', 'avatar.png', '0', '0', '01782120128', 'Tanbir', 2, 1, 1500, 'Vawoar Viti', '2014-01-06', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-26'),
(10081, 'Alom b', '', '', '', 'avatar.png', '0', '0', '0', 'Alom b', 2, 1, 1500, '', '2018-12-25', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-25'),
(10080, 'Omayer Afnan ', 'Nizam uddin', 'Habiba Soltana', '', '10080.jpg', '0', '01813296875', '01730676516', 'Nihan', 2, 1, 1500, 'Kalakandi, Abdullah pur, Keranigonj, Dhaka', '2012-02-15', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-23'),
(10079, 'Ishrat Jahan Amrin', 'Md. Abjal Hosen', 'Mrs.Shahanaj khaton', '', '10079.jpg', '01718314043', '01922650815', '0', 'Amrin', 2, 1, 1500, 'Bagapur, Abdullapur,  south Keranigonj, Dhaka', '2012-03-15', 'Female', 'Muslim', '', 0, 0, '', 0, '2018-12-21'),
(10078, 'Jannatol Anfal', 'Sarafat', 'Kadija', '', 'avatar.png', '0', '0', '01954348013', 'Jannat', 2, 1, 1500, 'Dorigaw, Abdullapur,  south Keranigonj, Dhaka', '2010-07-08', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-18'),
(10077, 'Abc', 'Vsa', 'Vgt', '', 'avatar.png', '045', '82', '855', 'Bce', 2, 1, 1500, '', '2018-12-05', 'Male', 'Muslim', 'Britain', 0, 0, '', 0, '2018-12-15'),
(10076, 'Salman Farsi', 'Md. Saidul Islam', 'Mrs. Halima Begum', '', 'avatar.png', '0', '0', '01866261967', 'Salman ', 2, 1, 1500, 'Rasul pur , Abdullahpur , South Keranigonj , Dhaka 1311', '2009-01-01', 'Male', 'Muslim', '', 0, 0, '', 0, '2018-12-15'),
(10075, 'Al-Humayra Himika', 'Md. Deloyar Hosen ', 'Tajmin Nahar ', '', '10075.jpg', '0', '0', '01738326115', 'Himika', 2, 1, 1500, 'Vawarviti , Abdullahpur , South Keranigonj , Dhaka 1311', '2008-08-08', 'Female', 'Muslim', '', 0, 0, '', 0, '2018-12-15'),
(10073, 'server test', '', '', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-15'),
(10074, 'Jannat Islam', 'Joynal abdin', 'Fahima Begum', '', '10074.jpg', '0', '0', '01708759014', 'Jannat', 2, 1, 1500, 'South Malivita , Abdullahpur , South Keranigonj , Dhaka1311', '2013-01-15', 'Female', 'Muslim', '', 0, 0, '', 0, '2018-12-15'),
(10110, 'Shakh Mahima', 'Shakh Mahabur', 'Mrs.Sathi', '', 'avatar.png', '0', '0', '01623681039', ' Mahima', 2, 1, 1500, 'Vawarvity , Abdullah pur , South Keranigonj , Dhaka-1311', '2015-05-15', 'Female', 'Muslim', '', 0, 0, '', 0, '2018-12-31'),
(10111, 'Gazi Shohan', 'Shadin', 'Sabina', '', 'avatar.png', '0', '0', '01832899361', 'Shohan', 2, 1, 1500, 'Malivita , Abdullahpur , South Keranigong , Dhaka1311', '2013-12-04', 'Male', 'Muslim', '', 0, 0, '', 0, '2019-01-02'),
(10112, 'Ishrat Jahan Amrin', 'Md. Abjal Hosen', 'Mrs. Shahanaj Khatun', '', 'avatar.png', '0', '01922650815', '01718314043', ' Amrin', 2, 1, 1500, 'Rasulpur , Abdullapur , South Keranigong , Dhaka 1311', '2012-03-15', 'Female', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10113, 'Abrar Mahahud Mahim', 'Md. Harun-ur-rasid', 'Naznin Islam', '', 'avatar.png', '0', '0', '01726844373', 'Mahim', 2, 1, 1500, 'kalakandi , Abdullapur , South Keranigong , Dhaka 1311', '2012-01-20', 'Male', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10114, 'Md . Sajid Hosen', 'Md.Nisad Hosen', 'Soniya Begum', '', 'avatar.png', '0', '0', '01709434089', 'Sajid', 2, 1, 1500, 'Vawarviti , Abdullapur , South Keranigong , Dhaka 1311', '2013-11-22', 'Male', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10115, 'Takiya', 'Azizul Haque', 'Easmin', '', 'avatar.png', '0', '0', '01754600233', 'Takiya', 2, 1, 1500, 'Rasulpur, Abdullapur , South Keranigong , Dhaka 1311', '2013-08-07', 'Female', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10116, 'Md. Sahed', 'Joynal Abedin', 'Fahima', '', 'avatar.png', '0', '0', '01879154363', 'Sahed', 2, 1, 1500, 'South Malivita , Abdullapur , South Keranigong , Dhaka 1311', '2015-12-11', 'Male', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10117, 'Junayed ', 'Arshad-ul-Haque', 'Beauti Akter', '', 'avatar.png', '0', '0', '01854216640', 'Junayed ', 2, 1, 1500, 'Rasulpur , Abdullapur , South Keranigong , Dhaka 1311', '2015-06-06', 'Male', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10118, 'Al-Mamun Riyad', 'Shihad Uddin', 'Sheuli Begum', '', 'avatar.png', '0', '0', '01871752812', 'Riyad', 2, 1, 1500, 'Rasulpur , Abdullapur , South Keranigong , Dhaka 1311', '2013-07-19', 'Male', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10119, 'Sulayman Farsi', 'Saidol Islam', 'Halima Begum', '', 'avatar.png', '0', '0', '01866261967', 'Sulayman ', 2, 1, 1500, 'Rasulpur , Abdullapur , South Keranigong , Dhaka 1311', '2014-01-24', 'Male', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10120, 'Morioum Akter Jisa', 'Dilbar Hosen', 'Runa Akter', '', 'avatar.png', '0', '0', '01864411653', 'Morioum', 2, 1, 1500, 'South Malivita , Abdullapur , South Keranigong , Dhaka 1311', '2012-10-04', 'Male', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10121, 'Abir Rohman Aiyan', 'Ataur Rhman', 'Alpona Akter', '', 'avatar.png', '0', '01824610701', '01784382784', 'Aiyan', 2, 1, 1500, 'Dorigaw , Abdullapur , South Keranigong , Dhaka 1311', '2013-06-14', 'Male', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10122, 'Md . Anik Hasan', 'Md. Shahboddin', 'Mrs. Mahmoda Begum', '', 'avatar.png', '0', '0', '01709434089', 'Anik', 2, 1, 1500, 'Vawarvity , Abdullapur , South Keranigong , Dhaka 1311', '2007-02-05', 'Male', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10123, 'Asha Moni', 'Yosop Bissash', 'Marufa Begum', '', 'avatar.png', '0', '0', '01855192057', 'Ashamoni', 2, 1, 1500, 'Vawarvity , Abdullapur , South Keranigong , Dhaka 1311', '2008-08-12', 'Female', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10124, 'Al-Mahamud Ibrahim', 'Md.Mehedi Hasan', 'Sabina Hasan', '', 'avatar.png', '0', '0', '01715711393', 'Ibrahim', 2, 1, 1500, 'Islampur, Abdullapur , South Keranigong , Dhaka 1311', '2009-08-09', 'Male', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10125, 'Stee Fina Steecy', 'Md.Showkot', 'Selina Akter', '', 'avatar.png', '0', '0', '01726667575', 'Stee Fina', 2, 1, 1500, 'Vawarvity , Abdullapur , South Keranigong , Dhaka 1311', '2009-10-29', 'Female', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10126, 'Chadmoni', 'Md . Kamal Hosen', 'Asma Begum', '', 'avatar.png', '0', '0', '01931564566', 'Chadmoni', 2, 1, 1500, 'Malivita. Abdullapur , South Keranigong , Dhaka 1311', '2010-09-19', 'Female', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10127, 'Sakiba Zaman', 'Bodiujaman', 'Nilofa Begum', '', 'avatar.png', '0', '0', '01945996624', 'Sakiba', 2, 1, 1500, 'Vawarvity , Abdullapur , South Keranigong , Dhaka 1311', '2010-08-25', 'Female', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10128, 'Sanjida Haque jolly', 'Md. Shahidul Haque', 'Moly Haque', '', 'avatar.png', '0', '0', '01744404486', 'Sanjida ', 2, 1, 1500, 'rasulpur , Abdullapur , South Keranigong , Dhaka 1311', '2011-10-30', 'Female', 'Muslim', '', 0, 0, '', 0, '2019-01-03'),
(10129, 'Nusrat Islam', 'Nazrul Islam', 'josna Islam', '', 'avatar.png', '0', '0', '01714376329', 'Nustat Islam', 2, 1, 1500, 'South Malivita , Abdullapur , South Keranigong , Dhaka 1311', '2011-01-11', 'Female', 'Muslim', '', 0, 0, '', 0, '2019-01-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
