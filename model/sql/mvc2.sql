-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 11:12 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`) VALUES
('25', 'admin', 'admin@mail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_name` varchar(25) NOT NULL,
  `dept_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentname`) VALUES
('CS');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `registerno` int(11) NOT NULL,
  `indexno` int(11) NOT NULL,
  `coursecode` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `subjectname` varchar(25) NOT NULL,
  `result` varchar(20) NOT NULL,
  `credits` varchar(26) NOT NULL,
  `totalgpa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`registerno`, `indexno`, `coursecode`, `name`, `subjectname`, `result`, `credits`, `totalgpa`) VALUES
(14, 14, 'CS204', 'Anju', 'DSA', 'Pass', '3', '7'),
(23, 25, 'CS208', 'Athira', 'DFE', 'Fail', '5', '8');

-- --------------------------------------------------------

--
-- Table structure for table `studchange`
--

CREATE TABLE `studchange` (
  `current` varchar(20) NOT NULL,
  `new` varchar(20) NOT NULL,
  `confirm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `reg_no` int(11) NOT NULL,
  `index_no` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `dep_name` varchar(20) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `sem_no` int(11) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_no`, `index_no`, `fname`, `lname`, `mobile`, `dep_name`, `course_name`, `password`, `email`, `username`, `sem_no`, `year`) VALUES
(8, 8, 'Anisha', 'PP', 879456, 'CS', 'JSD2', 'ani', 'anisha@mail.com', 'anisha', 4, '2020-05-02'),
(14, 14, 'Anju', 'K', 9874563250, 'CS', 'JSD2', 'anjuk', 'anju@mail.com', 'anju', 3, '2020-01-24'),
(23, 25, 'Athira', 'K', 8957435910, 'CS', 'JSD2', 'athira123', 'athira@mail.com', 'athira', 2, '2020-02-12'),
(46, 464, 'Nima', 'M', 7896542579, 'EEE', 'JSD1', 'nima123', 'nima', 'nima', 2, '2020-01-05'),
(56, 56, 'Johnce', 'MJ', 8975641250, 'CS', 'JSD2', 'johnce', 'johnce@gmail.com', 'johnce', 5, '2019-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subcode` varchar(20) NOT NULL,
  `sem_no` varchar(20) NOT NULL,
  `subyear` varchar(20) NOT NULL,
  `credit` varchar(20) NOT NULL,
  `subjectname` varchar(30) NOT NULL,
  `adminid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subcode`, `sem_no`, `subyear`, `credit`, `subjectname`, `adminid`) VALUES
('203', '2', '1st year', '03', 'EDC', '25');

-- --------------------------------------------------------

--
-- Table structure for table `superuser`
--

CREATE TABLE `superuser` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superuser`
--

INSERT INTO `superuser` (`username`, `password`) VALUES
('super', 'super123');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `day` varchar(15) NOT NULL,
  `subject_name` varchar(20) NOT NULL,
  `dep_name` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `admin_id` varchar(20) NOT NULL,
  `sem_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`day`, `subject_name`, `dep_name`, `code`, `time`, `admin_id`, `sem_no`) VALUES
('Monday', 'CSD', 'CS', 'CS206', '9 to 9.55', '24', 2),
('Tuesday', 'DAA', 'CS', 'CS201', '9 to 10', '36', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`departmentname`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_no`,`index_no`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subcode`,`adminid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
