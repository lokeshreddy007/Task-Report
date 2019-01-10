-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2019 at 10:08 AM
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
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `code`) VALUES
(1, 'admin', 123);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `mcode` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `sname`, `phonenumber`, `mname`, `mcode`, `role`, `pass`, `cpass`, `mail`) VALUES
(4, 'lokesh', 'reddy', '123456789', 'admin', 123, 'software Developer', '123', '123', 'lokesh@gmail.com'),
(5, 'Rajesh', 'reddy', '0987654321', 'admin', 123, 'software Developer', '123', '123', 'rajeshreddy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `reportid` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  `date` date NOT NULL,
  `strattime` varchar(255) NOT NULL,
  `breaks` varchar(255) NOT NULL,
  `endtime` varchar(255) NOT NULL,
  `rounding` varchar(500) NOT NULL,
  `total` varchar(500) NOT NULL,
  `custome` varchar(500) NOT NULL,
  `project` varchar(500) NOT NULL,
  `cat` varchar(250) NOT NULL,
  `workdetails` varchar(1000) NOT NULL,
  `breake` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reportid`, `empid`, `date`, `strattime`, `breaks`, `endtime`, `rounding`, `total`, `custome`, `project`, `cat`, `workdetails`, `breake`) VALUES
(1, 3, '2019-01-10', '11:48 AM', '6:48 AM', '7:48 AM', 'rtrt', 'gdf', '54645gdfg', 'dfgfdsf', 'etry', 'dfgdfgdfgdf', '2:48 AM'),
(2, 3, '2019-01-11', '1:49 PM', '7:49 PM', '7:25 PM', 'werwe', 'wrewer', 'wer', 'werewr', 'wer', 'werewrewrewrwerew\r\nwe\r\nrewr\r\new\r\nrew', '9:49 PM'),
(3, 3, '2019-01-12', '8:51 AM', '9:51 PM', '8:51 PM', 'wsderww', 'erwe', 'rwer', 'ewr', 'ewr', 'ewrewr', '7:51 PM'),
(4, 3, '2019-01-13', '7:53 PM', '8:53 PM', '8:53 PM', 'w43erq23w', '52435', '543', '534543', '535trrew', 'trewtrewtw', '3:53 PM'),
(10, 4, '2019-01-10', '11:30 PM', '10:30 PM', '9:34 PM', 'werwer', 'wtewret', 'wrtre', 'ter', 'tertye', 'ryretyetryetytreuyr', '9:29 PM'),
(11, 4, '2019-01-11', '10:31 PM', '9:35 PM', '9:31 PM', 'rwstger', 'retret', 'ret', 'retret', 'retre', 'tretret', ''),
(12, 5, '2019-01-10', '10:35 PM', '10:35 PM', '9:35 PM', 'werwetw', 'twret', 'wrtwrt', 'wrtrw', 'trw', 'trwtrw', '9:35 PM'),
(13, 5, '2019-01-11', '10:35 PM', '10:35 PM', '9:35 PM', 'rterte', 'rtre', 'tret', 'retretre', 'tre', 'tretretgret', '9:35 PM'),
(14, 4, '2019-01-12', '2:36 PM', '2:36 PM', '2:36 PM', 'dsfdstg', 'retret', 'retret', 'retretreretre', 'retret', 'retret', '2:36 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
