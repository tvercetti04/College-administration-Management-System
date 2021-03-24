-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 11:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cams`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `f_name`, `l_name`, `contact`, `email`, `password`, `doc`) VALUES
(1, 'Marlon ', 'Brando', '8002999121', 'piyushthakur', 'yo', '2021-03-21 21:39:12'),
(2, 'sample', 'sample', '1827468716486', 'piyushthakur@2gmail.com', '123', '2021-03-21 21:41:32'),
(3, 'sample', 'sample', '1827468716486', 'piyushthakur@2gmail.com', '123', '2021-03-21 21:45:45'),
(4, 'Sample', 'Kumar', '8002999121', 'qwre@gmail.com', '123', '2021-03-21 21:57:40'),
(5, 'Leonardo ', 'Sharapova', '8002999121', 'piyusht479@gmail.com', 'yo', '2021-03-21 21:59:54'),
(6, 'Sample Kumar', 'afa', '8002999121', 'mean', 'yo', '2021-03-21 22:01:52'),
(7, 'Kujo', 'Jotaro', '8002999121', 'piyusht479@gmail.com', 'dolphin', '2021-03-21 22:40:11'),
(8, 'Jotaro', 'Kujo', '8002999121', 'jotaro@gmail.com', 'dolphin', '2021-03-21 22:41:17'),
(9, 'Alok', 'Kumar', '8002999121', 'alok@gmail.com', '123', '2021-03-23 17:24:30'),
(10, 'Conor ', 'Mcgregor', '8002999121', 'cm@gmail.com', '123', '2021-03-23 19:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `a_id` int(11) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`a_id`, `a_email`, `a_password`) VALUES
(1, 'piyusht479@gmail.com', 'pihu');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_duration` varchar(11) NOT NULL,
  `c_desc` varchar(1000) NOT NULL,
  `c_fee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `c_name`, `c_duration`, `c_desc`, `c_fee`) VALUES
(1, 'BCA', '3 Years', 'Bachelor of Computer Applications is a four-year undergraduate degree in Nepal and three-year undergraduate degree course in India. With a BCA, students can study for a masters in computer application.', '50000'),
(2, 'ddokryju', '3 Years', 'wefkshdfkh', '2'),
(3, 'BA', '3 Years', 'Bachelor of Arts', '20000'),
(4, 'B.SC', '3 Years', 'Bachelor of Science (BSc) is an undergraduate degree course usually of three years duration. It is one of the most popular course choices among Science', '20000'),
(5, 'B.Com', '3 Years', 'BCom or Bachelor of Commerce is a three-year undergraduate course imparted in regular as well as distance education mode. BCom is the second most popular undergraduate course in the Commerce branch.', '20000'),
(6, 'BBA', '3 Years', 'Bachelor of Business Administration or BBA is one of the most popular bachelor degree programmes after class XII. ', '50000'),
(7, 'BA', '3 Years', 'Full form of BA is Bachelor of Arts. BA is an extremely popular undergraduate course that students puruse right after their class 12th', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `posts` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `qualifications` int(11) NOT NULL,
  `job_desc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_apply`
--

CREATE TABLE `student_apply` (
  `s_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `s_f_name` varchar(100) NOT NULL,
  `s_l_name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `s_contact` varchar(50) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_dob` varchar(100) NOT NULL,
  `s_address` varchar(255) NOT NULL,
  `s_course` varchar(100) NOT NULL,
  `metric_marks` int(11) NOT NULL,
  `metric_fullmarks` int(11) NOT NULL,
  `inter_marks` int(11) NOT NULL,
  `inter_fullmarks` int(11) NOT NULL,
  `date_of_apply` timestamp NOT NULL DEFAULT current_timestamp(),
  `form_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_apply`
--

INSERT INTO `student_apply` (`s_id`, `user_id`, `s_f_name`, `s_l_name`, `father_name`, `mother_name`, `s_contact`, `s_email`, `s_dob`, `s_address`, `s_course`, `metric_marks`, `metric_fullmarks`, `inter_marks`, `inter_fullmarks`, `date_of_apply`, `form_status`) VALUES
(2, 8, 'Jotaro', 'Kujo', 'Sadao Kujo', 'Holly Kujo', '8002999121', 'jotaro@gmail.com', '2021-03-08', 'Japan', 'hii', 123, 400, 344, 700, '2021-03-22 02:35:53', 1),
(3, 9, 'Alok', 'Kumar', 'reqrq', 'ewqeqwe', '8002999121', 'alok@gmail.com', '2021-03-09', 'SS0210046', 'hii', 504, 700, 344, 700, '2021-03-23 17:26:14', 0),
(4, 10, 'Conor ', 'Mcgregor', 'dgf', 'sdfsfd', '8002999121', 'cm@gmail.com', '2021-03-16', 'SS0210046', '4', 504, 700, 344, 700, '2021-03-24 05:24:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `upload_docs`
--

CREATE TABLE `upload_docs` (
  `u_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `sign` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload_docs`
--

INSERT INTO `upload_docs` (`u_id`, `s_id`, `pic`, `sign`) VALUES
(1, 0, '', 'Screenshot (10).png'),
(2, 0, 'Screenshot (8).png', 'Screenshot (10).png'),
(3, 0, 'Screenshot (8).png', 'Screenshot (10).png'),
(4, 0, 'Screenshot (8).png', 'Screenshot (10).png'),
(5, 0, 'Screenshot (8).png', 'Screenshot (10).png'),
(6, 0, 'Screenshot (1).png', 'Screenshot (7).png'),
(7, 2, 'Screenshot (1).png', 'Screenshot (18).png'),
(8, 3, 'Screenshot (16).png', 'Screenshot (11).png'),
(9, 4, '184-1846754_conor-mcgregor-ufc-246.jpg', 'mcgregor.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `student_apply`
--
ALTER TABLE `student_apply`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `upload_docs`
--
ALTER TABLE `upload_docs`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_apply`
--
ALTER TABLE `student_apply`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `upload_docs`
--
ALTER TABLE `upload_docs`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
