-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2019 at 08:11 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stpauls`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@spu.ac.ke', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attemptedunits`
--

CREATE TABLE `attemptedunits` (
  `id` int(200) NOT NULL,
  `unitname` varchar(20) NOT NULL,
  `unitcode` varchar(20) NOT NULL,
  `progress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attemptedunits`
--

INSERT INTO `attemptedunits` (`id`, `unitname`, `unitcode`, `progress`) VALUES
(2, 'OOP', 'BCS2103', '100');

-- --------------------------------------------------------

--
-- Table structure for table `examcards`
--

CREATE TABLE `examcards` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `regno` varchar(200) NOT NULL,
  `studymode` varchar(200) NOT NULL,
  `unitname` text NOT NULL,
  `unitcode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examcards`
--

INSERT INTO `examcards` (`id`, `name`, `course`, `regno`, `studymode`, `unitname`, `unitcode`) VALUES
(1, 'Martin Mbithi Nzilani', 'Bachelor of Science in Computer Science', 'BSCMKS275517', 'Regular', 'Mobile Computing,\r\nObject Oriented Programming,\r\nNumerical Analysis,\r\nAdvanced Databases,\r\nIT & Society,\r\n\r\n', 'BCS 2103,\r\nBCS 2450,\r\nBCS 3320,\r\nCSC 2345,\r\nCSC 1123');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hod` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `hod`, `description`) VALUES
(1, 'Computer Science', 'Mr Mart', 'Computer Science Related Courses');

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` int(20) NOT NULL,
  `refnumber` varchar(200) NOT NULL,
  `datepaid` date NOT NULL,
  `amount` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `refnumber`, `datepaid`, `amount`) VALUES
(1, 'REF/123/9900-001', '2019-02-03', '20000'),
(2, 'REF/123/9900-030', '2019-02-25', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `unitcode` varchar(200) NOT NULL,
  `unitname` varchar(200) NOT NULL,
  `grade` varchar(200) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `unitcode`, `unitname`, `grade`, `remarks`) VALUES
(1, 'BCS 2103', 'Mobile Computing', 'A', 'Distinction'),
(2, 'BCS 3102', 'Object Oriented Programing', 'A', 'Distinction'),
(3, 'BCS 2105', 'Numerical Analysis', 'A', 'Distinction'),
(4, 'BCS 1102', 'Advanced Databases', 'A', 'Distinction'),
(5, 'BCS 2155', 'IT and Society', 'A', 'Distinction');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `staffno` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `staffno`, `department`, `password`, `email`, `phone`) VALUES
(2, 'Martin M Mbithi', 'STP-001', 'ICT', 'martinez@', 'martinezmbithi@gmail.com', '0704031263');

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE `statement` (
  `id` int(200) NOT NULL,
  `refnumber` varchar(200) NOT NULL,
  `posdate` date NOT NULL,
  `description` text NOT NULL,
  `debitamt` varchar(2000) NOT NULL,
  `creditamt` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statement`
--

INSERT INTO `statement` (`id`, `refnumber`, `posdate`, `description`, `debitamt`, `creditamt`, `balance`) VALUES
(2, 'IN119893', '2019-02-01', 'Fees Invoice 2016-2017 / January - April Semester', '10,750.00', '0.00', '10750.00'),
(3, 'IN119893', '2019-02-04', 'Fees Invoice 2016-2017 / January - April Semester', '10,750.00', '0.00', '10,750.00'),
(4, '1250-060970', '2019-02-12', 'Receipt No 1250-060970', '0.00', '10,000.00', '10,000.00'),
(5, 'CN00001843', '2019-02-11', 'Credit Note for Claimed Receipt 1250-055805', '0.00', '30,000.00', '30,000.00'),
(6, 'CN00001843', '2019-02-11', 'Credit Note for Claimed Receipt 1250-053720', '0.00', '45,000.00', '45,000.00'),
(7, 'CN00001843', '2019-02-11', 'Credit Note for Claimed Receipt 1250-055805', '0.00', '30,000.00', '30,000.00'),
(8, 'CN00001843', '2019-02-11', 'Credit Note for Claimed Receipt 1250-053720', '0.00', '45,000.00', '45,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `regno` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `studymode` varchar(20) NOT NULL,
  `course` varchar(200) NOT NULL,
  `phonenumber` varchar(2002) NOT NULL,
  `postaddress` varchar(200) NOT NULL,
  `emailaddress` varchar(200) NOT NULL,
  `kcseindexno` varchar(200) NOT NULL,
  `totalbilled` varchar(200) NOT NULL,
  `totalpaid` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL,
  `attemptedunits` varchar(200) NOT NULL,
  `unitstaking` varchar(200) NOT NULL,
  `totalunits` varchar(200) NOT NULL,
  `performance` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `regno`, `password`, `dob`, `studymode`, `course`, `phonenumber`, `postaddress`, `emailaddress`, `kcseindexno`, `totalbilled`, `totalpaid`, `balance`, `attemptedunits`, `unitstaking`, `totalunits`, `performance`, `grade`) VALUES
(1, 'Martin Mbithi Nzilani', 'BSCMKS275517', 'MMN.2017', '1996-07-13', 'Regular', 'Bachelor Of Science In Computer Science', '+254740847563', '120  Kikima', 'mail@martdev.info', '323101002', '900000', '900000', '0', '9', '3', '56', '95', 'Distinction'),
(2, 'Martin  Mbithi', 'BSCMKS25517', 'MMN.2017', '2019-03-26', 'Regular', 'Cisco CCNA', '07040311263', '120 Kikima', 'martinmbithi@gmail.com', '09876', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(20) NOT NULL,
  `unitname` varchar(200) NOT NULL,
  `unitcode` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `roomno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `unitname`, `unitcode`, `day`, `time`, `roomno`) VALUES
(1, 'Advanced Databases', 'BCS 3209', 'Monday', '8:30 am - 11:30 am', 'Room 18'),
(2, 'Numerical Analysis', 'BCS 2109', 'Tuesday', '8:30 am - 11:30 am', 'Room 18'),
(3, 'IT and Society', 'CSC 2345', 'Wednesday', '2:00 pm - 4:00 pm', 'Room 18'),
(4, 'Object Oriented Programming', 'BCS 2103', 'Monday', '12:00 noon - 2:00 pm', 'Lab 1'),
(5, ' Mobile Computing', 'BCS 3278', 'Monday', '2:00 pm- 4:00 pm', 'Room 5'),
(6, 'DEMO', 'CDCDEMO', 'Monday', '2.00pm - 4.00pm', 'Room 3');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(110) NOT NULL,
  `code` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `faculty` varchar(200) NOT NULL,
  `studymode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `code`, `name`, `faculty`, `studymode`) VALUES
(5, 'CSC 3256', 'Discrete Structures 2', 'Computer Science', ''),
(6, 'CSC 3256', 'Discrete Structures 2', 'Computer Science', ''),
(7, 'BCS 2103', 'Object Oriented Programming 2', 'Computer Science', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attemptedunits`
--
ALTER TABLE `attemptedunits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examcards`
--
ALTER TABLE `examcards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statement`
--
ALTER TABLE `statement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attemptedunits`
--
ALTER TABLE `attemptedunits`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `examcards`
--
ALTER TABLE `examcards`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statement`
--
ALTER TABLE `statement`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
