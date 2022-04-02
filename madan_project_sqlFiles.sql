-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 09:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madan_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_list`
--

CREATE TABLE `attendance_list` (
  `a_id` varchar(20) NOT NULL,
  `e_id` varchar(20) NOT NULL,
  `attendance` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_list`
--

INSERT INTO `attendance_list` (`a_id`, `e_id`, `attendance`, `date`) VALUES
('1', '1', 'present', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `department_list`
--

CREATE TABLE `department_list` (
  `d_no` int(20) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `admin` int(20) NOT NULL,
  `strength` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department_list`
--

INSERT INTO `department_list` (`d_no`, `d_name`, `admin`, `strength`) VALUES
(1, 'cse', 2, 10),
(2, 'ece', 3, 80);

-- --------------------------------------------------------

--
-- Table structure for table `employe_display`
--

CREATE TABLE `employe_display` (
  `employe_id` varchar(20) NOT NULL,
  `employe_name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employe_display`
--

INSERT INTO `employe_display` (`employe_id`, `employe_name`, `gender`, `address`, `email`, `phone_number`, `department`) VALUES
('01', 'vinay', 'male', 'chitradurga', 'vinay@gmail.com', 123789456, 'CSE'),
('02', 'praju', 'male', 'banglore', 'praju@gmail.com', 1236547890, 'ECE'),
('05', 'Pavan kumar hn', 'male', 'kadur', 'pavan@gmail.com', 2147483647, 'cse'),
('88', 'madan', 'male', 'kolar5', 'madan@gmail.com', 2147483647, 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `login_page`
--

CREATE TABLE `login_page` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_page`
--

INSERT INTO `login_page` (`email`, `password`) VALUES
('abc@gmail.com', '123'),
('efg@gmail.com', '456'),
('bande@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `salary_record`
--

CREATE TABLE `salary_record` (
  `s_id` varchar(20) NOT NULL,
  `e_id` varchar(20) NOT NULL,
  `basic_salary` int(50) NOT NULL,
  `bonus` int(50) NOT NULL,
  `pf` int(50) NOT NULL,
  `dp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary_record`
--

INSERT INTO `salary_record` (`s_id`, `e_id`, `basic_salary`, `bonus`, `pf`, `dp`) VALUES
('1', '1', 100, 100, 100, 'cs'),
('2', '2', 200, 200, 200, 'ece');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_list`
--
ALTER TABLE `attendance_list`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `department_list`
--
ALTER TABLE `department_list`
  ADD PRIMARY KEY (`d_no`);

--
-- Indexes for table `employe_display`
--
ALTER TABLE `employe_display`
  ADD PRIMARY KEY (`employe_id`);

--
-- Indexes for table `salary_record`
--
ALTER TABLE `salary_record`
  ADD PRIMARY KEY (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
