-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2018 at 08:06 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `usr_id`, `department`, `password`) VALUES
(1, 'ALi Raza Hassan', 1, 'Computer Science', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `attandance`
--

CREATE TABLE `attandance` (
  `att_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `rollno` int(11) NOT NULL,
  `sect_id` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attandance`
--

INSERT INTO `attandance` (`att_id`, `date`, `rollno`, `sect_id`, `Status`) VALUES
(0, '2018-12-26', 1, 20, 'Present'),
(0, '2018-12-26', 2, 20, 'Present'),
(0, '2018-12-26', 3, 20, 'Absent'),
(0, '2018-12-26', 9, 21, 'Present'),
(0, '2018-12-26', 10, 11, 'Present'),
(0, '2018-12-26', 13, 16, 'Absent'),
(0, '2018-12-26', 14, 1, 'Absent'),
(0, '2018-12-27', 1, 18, 'Absent'),
(0, '2018-12-27', 2, 11, 'Absent'),
(0, '2018-12-27', 3, 16, 'Absent'),
(0, '2018-12-27', 9, 20, 'Absent'),
(0, '2018-12-27', 10, 11, 'Present'),
(0, '2018-12-27', 13, 18, 'Absent'),
(0, '2018-12-27', 14, 1, 'Absent'),
(0, '2018-12-28', 1, 18, 'Present'),
(0, '2018-12-28', 13, 18, 'Absent');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `incharge` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `Name`, `incharge`) VALUES
(1, '1st', 'Sir Zulqurnanin'),
(2, '2nd', 'Sir gilgist'),
(3, '3rd', 'sir Adam '),
(4, '4th', 'Sir Mubasshir'),
(5, '5th', 'Sir falkner'),
(6, '6th', 'sir ALiRaza'),
(7, '7th', 'Sir Muhammad Haseeb'),
(8, '8th', 'sir kurllez'),
(9, '9th', 'Sir Zubair'),
(10, '10', 'Sir Shoaib Shahid');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `name`) VALUES
(1, 'Data Base'),
(2, 'Data Struture'),
(3, 'WEb Enginnering'),
(4, ' SOftware Eng'),
(5, 'OPerting System'),
(6, 'Computer Archetecture'),
(7, 'Robotics');

-- --------------------------------------------------------

--
-- Table structure for table `courseclass`
--

CREATE TABLE `courseclass` (
  `cc_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `teachername` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseclass`
--

INSERT INTO `courseclass` (`cc_id`, `class_id`, `course_id`, `teachername`) VALUES
(0, 1, 1, 'Sir Ahmad'),
(1, 1, 5, 'sir furqan'),
(3, 1, 7, 'sir Zulqarnain'),
(2, 2, 1, 'sir zubair'),
(5, 4, 1, 'Sir Umair'),
(4, 4, 2, 'sir Kamran');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `marks` float NOT NULL,
  `course_id` int(11) NOT NULL,
  `examtype` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `rollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `marks`, `course_id`, `examtype`, `class_id`, `rollno`) VALUES
(5, 25, 7, 'mid', 1, 13),
(0, 45.5, 5, 'Sessional', 9, 2),
(2, 45.5, 5, 'mid', 9, 9),
(3, 25, 5, 'mid', 9, 13),
(1, 35.5, 1, 'seessional', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `rollno` int(100) NOT NULL,
  `class_id` int(11) NOT NULL,
  `marks` float NOT NULL,
  `sepc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sect_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sect_id`, `name`, `class_id`) VALUES
(1, 'A', 1),
(2, 'B', 1),
(3, 'A', 2),
(4, 'B', 2),
(5, 'A', 3),
(6, 'B', 3),
(7, 'A', 4),
(8, 'B', 4),
(9, 'A', 5),
(10, 'B', 5),
(11, 'A', 6),
(12, 'B', 6),
(13, 'A', 7),
(14, 'B', 7),
(16, 'A', 8),
(17, 'B', 8),
(18, 'A', 9),
(19, 'B', 9),
(20, 'A', 10),
(21, 'B', 10);

-- --------------------------------------------------------

--
-- Table structure for table `special courses`
--

CREATE TABLE `special courses` (
  `sepc_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `timing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special courses`
--

INSERT INTO `special courses` (`sepc_id`, `name`, `timing`) VALUES
(1, 'DATA BASE', 'Mornig'),
(2, 'DATA STRUCTURE', 'MORNING'),
(3, 'JAVA ', 'EVENONG'),
(4, 'C#', 'MORNING');

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `usr_id` int(10) NOT NULL,
  `username` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`usr_id`, `username`) VALUES
(1, 'Student'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `rollno` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `usr_id` int(250) NOT NULL,
  `picture` text NOT NULL,
  `fathername` varchar(250) NOT NULL,
  `Dob` date NOT NULL,
  `password` varchar(250) NOT NULL,
  `class_id` int(250) NOT NULL,
  `notification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`rollno`, `name`, `usr_id`, `picture`, `fathername`, `Dob`, `password`, `class_id`, `notification`) VALUES
(1, 'Ali Raza Hassan', 1, '', 'Muhammad SADIQ', '0000-00-00', '12345678', 9, 'Welcome to the portal....!!!! Keep work hard one day you will get reward soon....!!!'),
(2, 'Asad Raza ', 1, '', 'shahid Raza', '1999-12-04', 'asadraza', 6, 'welcome to the student portal .....\r\nand marls doesnot matter at all .....!!! stay happy and blessed.....'),
(3, 'Shahid ', 1, '', 'muhammad javed', '2018-12-11', '123456789', 8, 'any thing  you wanna add....!!! dont have any inportant notification'),
(9, 'ali hassan', 1, '', 'muhammad sadoq', '2018-12-02', 'sdsgfsdfgdsgsf', 10, 'Welcome to our homw'),
(10, 'ali hassan', 1, '', 'muhammad sadoq', '2018-11-25', 'sdsgfsdfgdsgsf', 6, 'Welcome to our homw'),
(13, 'usman ', 1, '', 'MUhammad anything', '0000-00-00', '12345678', 9, 'Welcome to our home'),
(14, 'Zubair', 1, '', 'muhmmad shahod', '2015-09-01', '12345678', 1, 'welcome to our Home'),
(20, 'ali hassan', 1, '', 'muhammad sadoq', '2018-11-27', '123456789', 9, 'Welcome to our home');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `usr_id` (`usr_id`);

--
-- Indexes for table `attandance`
--
ALTER TABLE `attandance`
  ADD PRIMARY KEY (`date`,`rollno`),
  ADD KEY `sect_id` (`sect_id`),
  ADD KEY `rollno` (`rollno`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `courseclass`
--
ALTER TABLE `courseclass`
  ADD PRIMARY KEY (`class_id`,`course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`class_id`,`rollno`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `rollno_2` (`rollno`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`sepc_id`,`rollno`),
  ADD UNIQUE KEY `class_id` (`class_id`),
  ADD KEY `rollno` (`rollno`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sect_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `special courses`
--
ALTER TABLE `special courses`
  ADD PRIMARY KEY (`sepc_id`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`usr_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`rollno`),
  ADD KEY `usr_id` (`usr_id`) USING BTREE,
  ADD KEY `class_id` (`class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sect_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `usr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `rollno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `username` (`usr_id`);

--
-- Constraints for table `attandance`
--
ALTER TABLE `attandance`
  ADD CONSTRAINT `attandance_ibfk_1` FOREIGN KEY (`sect_id`) REFERENCES `section` (`sect_id`),
  ADD CONSTRAINT `attandance_ibfk_2` FOREIGN KEY (`rollno`) REFERENCES `users` (`rollno`);

--
-- Constraints for table `courseclass`
--
ALTER TABLE `courseclass`
  ADD CONSTRAINT `class_id` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`),
  ADD CONSTRAINT `courseclass_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `courseclass_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`rollno`) REFERENCES `users` (`rollno`),
  ADD CONSTRAINT `marks_ibfk_3` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `users` (`rollno`),
  ADD CONSTRAINT `registration_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`),
  ADD CONSTRAINT `registration_ibfk_3` FOREIGN KEY (`sepc_id`) REFERENCES `special courses` (`sepc_id`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `username` (`usr_id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
