-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 04:52 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chapel_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `staff_ID` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `staff_ID`, `password`) VALUES
(1, 'jimmy4carter@gmail.com ', '2222', '123456'),
(4, 'jimmy000carter@gmail.com', '2354', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'admin@gmail.com', '1111', '4a7d1ed414474e4033ac29ccb8653d9b'),
(6, 'dani@gmail.com', '1234', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'dani@gmail.com', '5555', '8977ecbb8cb82d77fb091c7a7f186163');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ID` int(11) NOT NULL,
  `event_ID` varchar(255) NOT NULL,
  `attandee_ID` varchar(255) NOT NULL,
  `time_attendent` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_student`
--

CREATE TABLE `attendance_student` (
  `id` int(11) NOT NULL,
  `Event_name` varchar(255) NOT NULL,
  `student_ID` varchar(255) NOT NULL,
  `collage` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `sign_in_time` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `college_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department_ID` varchar(255) NOT NULL,
  `College` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `late_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `date`, `start_time`, `late_at`) VALUES
(1, 'Christmas', '2020-08-19', '17:53', '17:57');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `staff_ID` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `fingerprint` blob NOT NULL,
  `position` varchar(255) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `staff_ID`, `first_name`, `last_name`, `mName`, `Gender`, `phone`, `department`, `designation`, `fingerprint`, `position`, `image`) VALUES
(3, '1234', 'Jimmy', 'Joshua', 'Jack', 'Male', '0703565655', 'Academic', 'Academic', 0x4a696d6d79, 'HOD', 0x4a696d6d79),
(4, '5555', 'Austin', 'John', 'IFI', 'Male', '0703565655', 'ECO', 'Management', 0x41757374696e, 'HOD', 0x41757374696e),
(5, '0000', 'Solo', 'soda', 'Soka', 'Female', '0703565655', 'ECO', 'Academic', 0x536f6c6f, 'dean', 0x536f6c6f),
(6, '3025', 'Gabi', 'Austin', 'Ob', 'Female', '08038660259', 'CIT', 'Management', 0x47616269, 'dean', 0x47616269);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `mat_no` varchar(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fingerprint` blob NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `mat_no`, `first_name`, `last_name`, `mName`, `gender`, `program`, `department`, `level`, `phone`, `fingerprint`, `image`) VALUES
(1, '2354', 'Maria', 'Eden', 'IFI', 'Male', 'Bsc', 'MTH', '200', '0703565655', 0x4d61726961, 0x4d61726961),
(2, '6061', 'Daniel', 'Austin', 'Jack', 'Female', 'Bsc', 'THG', '300', '0703565655', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `attendance_student`
--
ALTER TABLE `attendance_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_student`
--
ALTER TABLE `attendance_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
