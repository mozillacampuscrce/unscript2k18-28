-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 10:04 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(4) NOT NULL,
  `cid` int(4) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `cid`, `name`, `emailid`, `password`, `dob`) VALUES
(1, 0, 'jayesh', 'jayesh@gmail.com', '202cb962ac59075b964b07152d234b70', '10/12/1998');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `s_id` int(50) NOT NULL,
  `su_id` int(50) NOT NULL,
  `d_id` int(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `lectures` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`s_id`, `su_id`, `d_id`, `sem`, `lectures`, `date`, `status`) VALUES
(2, 1, 1, '4', '80', '2018-03-06', '80'),
(5, 1, 1, '4', '80', '2018-03-06', '0'),
(2, 2, 1, '4', '2', '2018-03-21', '2'),
(5, 2, 1, '4', '2', '2018-03-21', '2'),
(7, 3, 3, '2', '2', '2018-03-04', '2'),
(7, 3, 3, '2', '2', '2018-03-04', '2'),
(2, 1, 1, '4', '2', '2018-03-25', '2'),
(5, 1, 1, '4', '2', '2018-03-25', '2'),
(11, 1, 1, '4', '2', '2018-03-25', '0'),
(2, 1, 1, '4', '2', '2018-03-25', '2'),
(5, 1, 1, '4', '2', '2018-03-25', '2'),
(11, 1, 1, '4', '2', '2018-03-25', '0');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `d_id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`d_id`, `name`) VALUES
(1, 'IT'),
(2, 'comps'),
(3, 'Mechanical'),
(4, 'Extc');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `s_id` int(4) NOT NULL,
  `su_id` int(4) NOT NULL,
  `d_id` int(4) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `mo` varchar(4) NOT NULL,
  `outoff` varchar(4) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`s_id`, `su_id`, `d_id`, `sem`, `mo`, `outoff`, `type`) VALUES
(2, 1, 1, '4', '60', '80', 'IA1'),
(5, 1, 1, '4', '25', '80', 'IA1'),
(2, 2, 1, '4', '18', '20', 'IA1'),
(5, 2, 1, '4', '15', '20', 'IA1'),
(2, 2, 1, '4', '7', '20', 'IA2'),
(5, 2, 1, '4', '15', '20', 'IA2'),
(2, 2, 1, '4', '12', '30', 'IA1'),
(5, 2, 1, '4', '30', '30', 'IA1'),
(2, 1, 1, '4', '20', '30', 'UT1'),
(5, 1, 1, '4', '25', '30', 'UT1'),
(11, 1, 1, '4', '30', '30', 'UT1'),
(7, 3, 3, '2', '25', '30', 'IA1'),
(2, 2, 1, '4', '20', '30', 'IA2'),
(5, 2, 1, '4', '10', '30', 'IA2'),
(11, 2, 1, '4', '17', '30', 'IA2');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(4) NOT NULL,
  `cid` int(4) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `cid`, `name`, `dob`, `branch`, `sem`, `emailid`, `password`, `contact_no`) VALUES
(1, 1, 'nishant', '2018-03-05', '1', '1', 'a@b', '202cb962ac59075b964b07152d234b70', '787878'),
(2, 232432, 'priteshsjdajsdhk3', '2018-03-13', '1', '4', 'p21@qw3432', '202cb962ac59075b964b07152d234b70', '455677434'),
(5, 55, 'jay', '2018-03-05', '1', '4', 'hasan@ipsum.com', '202cb962ac59075b964b07152d234b70', '778'),
(6, 777, 'SA SA', '2018-03-04', '', '', 'SA@AS', '202cb962ac59075b964b07152d234b70', '666'),
(7, 316, 'Nimbalkar Nishant Deepak', '2018-03-01', '3', '2', 'nimbalkarnishant98@gmail.com', '202cb962ac59075b964b07152d234b70', '7775026761'),
(11, 317, 'monu shahuji', '12feb1998', '1', '4', 'monu@gmail.com', '202cb962ac59075b964b07152d234b70', '7897898789');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `su_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `d_id` int(4) NOT NULL,
  `sem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`su_id`, `name`, `d_id`, `sem`) VALUES
(1, 'OS', 1, '4'),
(2, 'maths', 1, '4'),
(3, 'engineering mechnanics', 3, '2'),
(4, 'Engineering drawing', 3, '2');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(4) NOT NULL,
  `cid` int(4) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `su_id` int(50) DEFAULT NULL,
  `d_id` int(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `cid`, `name`, `emailid`, `designation`, `su_id`, `d_id`, `password`, `contact_no`) VALUES
(1, 2, 'jayesh', 'jayesh@gmail.com', 'hod', 1, 1, '202cb962ac59075b964b07152d234b70', ''),
(5, 30, 'revathy', 'revathy@gmail.com', 'professor', 1, 1, '202cb962ac59075b964b07152d234b70', '789456'),
(13, 567, 'rrr', 'w@z', 'HOD', NULL, 1, '202cb962ac59075b964b07152d234b70', '898'),
(15, 66, 'hhh gg', 'ff@qw', 'Prof', NULL, 1, 'd9b1d7db4cd6e70935368a1efb10e377', '000'),
(17, 45, 'eeee', 'as@12', 'Prof', NULL, 1, '202cb962ac59075b964b07152d234b70', '9999'),
(18, 17, 'nis ', 'nis@123', 'Prof', NULL, 1, '202cb962ac59075b964b07152d234b70', '7897'),
(19, 8888, 'sdjds dkds', 'dsjgjds@gmail.com', 'HOD', NULL, 1, 'e10adc3949ba59abbe56e057f20f883e', '64686'),
(23, 3, 'tyyab', 'tayab2gmai.com', 'Prof', NULL, 1, '202cb962ac59075b964b07152d234b70', '45678'),
(25, 2111, 'praveen mishra', 'praveen@gmail.com', 'Assistant-Professor', NULL, 1, '202cb962ac59075b964b07152d234b70', '7666821600'),
(26, 3343, 'asad', 'A@1212', 'Prof', NULL, 1, '202cb962ac59075b964b07152d234b70', '4545');

-- --------------------------------------------------------

--
-- Table structure for table `teach_stud_rel`
--

CREATE TABLE `teach_stud_rel` (
  `ts_id` int(4) NOT NULL,
  `t_id` int(50) NOT NULL,
  `su_id` int(50) NOT NULL,
  `d_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_stud_rel`
--

INSERT INTO `teach_stud_rel` (`ts_id`, `t_id`, `su_id`, `d_id`) VALUES
(1, 13, 1, 1),
(2, 13, 2, 1),
(15, 15, 1, 1),
(16, 15, 2, 1),
(17, 17, 1, 1),
(18, 17, 2, 1),
(22, 18, 1, 1),
(21, 18, 2, 1),
(24, 19, 1, 1),
(25, 19, 2, 1),
(26, 23, 1, 1),
(27, 23, 2, 1),
(29, 26, 1, 1),
(30, 26, 2, 1),
(31, 26, 3, 3),
(32, 26, 4, 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `temp`
-- (See below for the actual view)
--
CREATE TABLE `temp` (
`name` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `temp`
--
DROP TABLE IF EXISTS `temp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`pma`@`%` SQL SECURITY DEFINER VIEW `temp`  AS  select `subject`.`name` AS `name` from `subject` where (`subject`.`su_id` = 2) union select `attendance`.`status` AS `status` from `attendance` where (`attendance`.`su_id` = 2) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `emailid` (`emailid`),
  ADD UNIQUE KEY `a_cid` (`cid`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `s_id` (`s_id`),
  ADD KEY `su_id` (`su_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD KEY `su_id` (`su_id`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `emailid` (`emailid`),
  ADD UNIQUE KEY `contact_no` (`contact_no`),
  ADD UNIQUE KEY `c_id` (`cid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`su_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `emailid` (`emailid`),
  ADD UNIQUE KEY `contact_no` (`contact_no`),
  ADD UNIQUE KEY `t_cid` (`cid`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `su_id` (`su_id`);

--
-- Indexes for table `teach_stud_rel`
--
ALTER TABLE `teach_stud_rel`
  ADD PRIMARY KEY (`ts_id`),
  ADD UNIQUE KEY `t_id` (`t_id`,`su_id`,`d_id`),
  ADD KEY `su_id` (`su_id`),
  ADD KEY `d_id` (`d_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `d_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `su_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `teach_stud_rel`
--
ALTER TABLE `teach_stud_rel`
  MODIFY `ts_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`su_id`) REFERENCES `subject` (`su_id`),
  ADD CONSTRAINT `attendance_ibfk_3` FOREIGN KEY (`d_id`) REFERENCES `department` (`d_id`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`su_id`) REFERENCES `subject` (`su_id`),
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`d_id`) REFERENCES `department` (`d_id`),
  ADD CONSTRAINT `marks_ibfk_3` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `department` (`d_id`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `department` (`d_id`),
  ADD CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`su_id`) REFERENCES `subject` (`su_id`);

--
-- Constraints for table `teach_stud_rel`
--
ALTER TABLE `teach_stud_rel`
  ADD CONSTRAINT `teach_stud_rel_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `teacher` (`t_id`),
  ADD CONSTRAINT `teach_stud_rel_ibfk_2` FOREIGN KEY (`su_id`) REFERENCES `subject` (`su_id`),
  ADD CONSTRAINT `teach_stud_rel_ibfk_3` FOREIGN KEY (`d_id`) REFERENCES `department` (`d_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
