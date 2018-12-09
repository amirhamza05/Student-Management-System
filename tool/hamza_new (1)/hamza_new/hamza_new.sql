-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 08:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamza_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbalance`
--

CREATE TABLE `addbalance` (
  `ID` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `date` date NOT NULL,
  `expair_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addbalance`
--

INSERT INTO `addbalance` (`ID`, `balance`, `date`, `expair_date`) VALUES
(1, 500, '2018-12-03', '2018-12-31'),
(2, 200, '2018-12-01', '2018-12-03'),
(3, 200, '2018-12-04', '2018-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `dewmessage`
--

CREATE TABLE `dewmessage` (
  `ID` int(11) NOT NULL,
  `msg` text,
  `cnt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dewmessage`
--

INSERT INTO `dewmessage` (`ID`, `msg`, `cnt`) VALUES
(1, 'abc', 2),
(2, 'abd', 5),
(3, 'hamza sir', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbalance`
--
ALTER TABLE `addbalance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dewmessage`
--
ALTER TABLE `dewmessage`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbalance`
--
ALTER TABLE `addbalance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dewmessage`
--
ALTER TABLE `dewmessage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
