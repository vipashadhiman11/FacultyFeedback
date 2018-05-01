-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2018 at 12:30 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty_feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` bigint(12) NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `f_username` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `department` text NOT NULL,
  `email` text NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `type` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_username`, `name`, `password`, `department`, `email`, `mobile`, `type`) VALUES
(54321, 'abcd', 'abcd', 'it', 'abc@gmail.com', 9876543210, 'visiting'),
(12345, 'rdfg', 'gvhjg', 'it', 'gfhgb@gmail.com', 7894561230, 'visiting');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `s_username` bigint(11) NOT NULL,
  `subject` varchar(8) NOT NULL,
  `yof` int(11) NOT NULL COMMENT 'year of feedback',
  `semester` int(11) NOT NULL,
  `program` varchar(50) NOT NULL,
  `course` varchar(15) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `text_feedback` text NOT NULL,
  `f_username` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='feedback table';

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`s_username`, `subject`, `yof`, `semester`, `program`, `course`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `text_feedback`, `f_username`) VALUES
(4401032015, 'abcd', 2018, 6, 'Bachelor of Technology', 'IT', 5, 5, 5, 5, 5, 5, 5, 5, 'NONE', 54321),
(1001032015, '', 2018, 6, '', '', 5, 1, 2, 2, 2, 2, 2, 2, 'NONE', 54321),
(4101032015, 'abcd', 2018, 6, 'Bachelor of Technology', 'IT', 5, 5, 5, 5, 5, 5, 5, 4, 'NONE', 54321),
(4101032015, 'jvbcnevd', 2018, 6, 'Bachelor of Technology', 'IT', 4, 4, 4, 4, 4, 4, 1, 1, 'NONE', 54321),
(4101032015, 'hjcndsk', 2018, 6, 'Bachelor of Technology', 'IT', 1, 1, 1, 1, 1, 1, 2, 2, 'NONE', 54321),
(4101032015, 'yeocnkds', 2018, 6, 'Bachelor of Technology', 'IT', 2, 2, 2, 2, 2, 2, 5, 5, 'NONE', 54321),
(2201032015, 'abcd', 2018, 6, 'Bachelor of Technology', 'IT', 5, 5, 5, 5, 5, 5, 5, 5, 'NONE', 54321),
(2201032015, 'jvbcnevd', 2018, 6, 'Bachelor of Technology', 'IT', 4, 4, 4, 4, 4, 4, 4, 4, 'NONE', 54321),
(2201032015, 'hjcndsk', 2018, 6, 'Bachelor of Technology', 'IT', 1, 2, 1, 1, 1, 1, 1, 1, 'NONE', 54321),
(2201032015, 'yeocnkds', 2018, 6, 'Bachelor of Technology', 'IT', 2, 2, 2, 2, 2, 2, 2, 2, 'NONE', 12345),
(4401032015, 'yeocnkds', 2018, 6, 'Bachelor of Technology', 'IT', 5, 5, 5, 5, 5, 5, 5, 5, 'NONE', 12345),
(4401032015, 'hjcndsk', 2018, 6, 'Bachelor of Technology', 'IT', 5, 5, 5, 5, 5, 5, 5, 5, 'NONE', 54321),
(4401032015, 'jvbcnevd', 2018, 6, 'Bachelor of Technology', 'IT', 5, 5, 5, 5, 5, 5, 5, 5, 'NONE', 54321);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_username` bigint(12) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `phone` bigint(20) NOT NULL,
  `semester` int(11) NOT NULL,
  `yoa` int(11) NOT NULL,
  `program` text NOT NULL,
  `course` text NOT NULL,
  `given_feedback` tinyint(1) NOT NULL,
  `times_left` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_username`, `name`, `password`, `email`, `phone`, `semester`, `yoa`, `program`, `course`, `given_feedback`, `times_left`) VALUES
(5501032015, 'qwertyuiopasdfghjkl', 'm', 'qwertyuiopasdfghjkl@gmail.com', 9876543210, 5, 2016, 'Bachelor of Technology', 'CSE', 1, 5),
(4201032016, 'vipasha', 'm', 'vipashadhiman11@gmail.com', 7531043938, 7, 2015, 'btech', 'it', 1, 0),
(4701032016, 'vipasha', 'm', 'vipashadhiman11@gmail.com', 7531043938, 6, 2015, 'btech', 'it', 0, 2),
(901032015, 'aditi', 'm', 'aditi@gmail.com', 9876543210, 7, 2015, 'Bachelor of Technology', 'it', 1, 3),
(901032016, 'aditi', 'm', 'aditi@gmail.com', 9876543210, 7, 2015, 'Masters of Technology', 'it', 1, -1),
(901032017, 'aditi', 'm', 'aditi@gmail.com', 9876543210, 3, 2015, 'Masters of Technology', 'it', 1, 3),
(801032016, 'aditi', 'm', 'aditi@gmail.com', 9876543210, 3, 2015, 'Bachelor of Architecture', 'it', 1, 9),
(4401032015, 'vip', 'm', 'vipashadhiman11@gmail.com', 9876543210, 6, 2015, 'Bachelor of Technology', 'b.tech', 1, 3),
(4401032016, 'vip', 'm', 'vipashadhiman11@gmail.com', 9876543210, 6, 2015, 'Bachelor of Technology', 'b.tech', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `s_username` bigint(12) NOT NULL,
  `address` text NOT NULL,
  `f_name` text NOT NULL,
  `m_name` text NOT NULL,
  `f_address` text NOT NULL,
  `m_address` text NOT NULL,
  `f_phone` bigint(20) NOT NULL,
  `m_phone` bigint(20) NOT NULL,
  `f_occupation` text NOT NULL,
  `m_occupation` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `yof` int(4) NOT NULL,
  `program` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `subject_name` text NOT NULL,
  `semester` int(11) NOT NULL,
  `f_username` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`yof`, `program`, `course`, `subject`, `subject_name`, `semester`, `f_username`) VALUES
(2019, 'Bachelor of Technology', 'IT', 'abcd', 'yayayay', 6, 54321),
(2019, 'Bachelor of Technology', 'IT', 'jvbcnevd', 'hdsjbcjkebfvbr', 6, 54321),
(2019, 'Bachelor of Technology', 'IT', 'hjcndsk', 'yytcdgx', 6, 54321),
(2019, 'Bachelor of Technology', 'IT', 'yeocnkds', 'uieuidkn', 6, 12345),
(2019, 'Bachelor of Technology', 'IT', 'iurfjsdm', 'jkbvdnc x', 5, 65432),
(2001, 'BTech', 'IT', '1234567', '12345678', 8, 845),
(2001, '', '', '', '', 8, 845);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`f_username`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`s_username`,`subject`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_username`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`s_username`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`yof`,`program`,`course`,`subject`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
