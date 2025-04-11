-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2025 at 12:39 PM
-- Server version: 8.0.41
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `username` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fname` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `lname` varchar(127) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'admin', '$2y$10$H7obJEdmLzqqcPy7wQWhsOLUvrgzC8f1Y1or2Gxaza5z1PT0tvLy6', 'Trinh', 'Minh Anh');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `section` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `grade`, `section`) VALUES
(1, '1', 2),
(2, '2', 6),
(3, '3', 1),
(4, '4', 3);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `grade_id` int NOT NULL,
  `grade` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `grade_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade_id`, `grade`, `grade_code`) VALUES
(1, '1', 'K'),
(2, '2', 'K'),
(3, '1', 'W'),
(4, '2', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int NOT NULL,
  `sender_full_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sender_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `sender_full_name`, `sender_email`, `message`, `date_time`) VALUES
(1, 'John doe', 'es@gmail.com', 'Hello, world', '2023-02-17 23:39:15'),
(2, 'John doe', 'es@gmail.com', 'Hi', '2023-02-17 23:49:19'),
(3, 'John doe', 'es@gmail.com', 'Hey, ', '2023-02-17 23:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int NOT NULL,
  `section` varchar(7) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(6, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int NOT NULL,
  `current_year` int NOT NULL,
  `current_semester` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `school_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `slogan` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `about` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `current_year`, `current_semester`, `school_name`, `slogan`, `about`) VALUES
(1, 2025, 'I', 'Sunshine English Center', 'Chọn Sunshine mở cửa tương lai ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int NOT NULL,
  `username` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fname` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `grade` int NOT NULL,
  `section` int NOT NULL,
  `address` varchar(31) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(7) COLLATE utf8mb4_general_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_joined` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `parent_fname` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_lname` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_phone_number` varchar(31) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `username`, `password`, `fname`, `lname`, `grade`, `section`, `address`, `gender`, `email_address`, `date_of_birth`, `date_of_joined`, `parent_fname`, `parent_lname`, `parent_phone_number`) VALUES
(1, 'quanghao', '$2y$10$xmtROY8efWeORYiuQDE3SO.eZwscao20QNuLky1Qlr88zDzNNq4gm', 'Quang', 'Hao', 1, 2, 'Vietnam', 'Male', 'quanghao@gmail.com', '2003-09-12', '2025-04-01 13:16:44', 'Trinh Minh', 'Anh', '09393'),
(2, 'thuytien', '$2y$10$KLFheMWgpLfoiqMuW2LQxOPficlBiSIJ9.wE2qr5yJUbAQ.5VURoO', 'Pham Thi ', 'Thuy Tien', 3, 2, 'Vietnam', 'Female', 'thuytien@gmail.com', '2002-12-03', '2025-04-01 13:17:51', 'Trinh Minh', 'Anh', '7979'),
(3, 'quocbao', '$2y$10$pYyVlWg9jxkT0u/4LrCMS.ztMaOvgyol1hgNt.jqcFEqUC7yZLIYe', 'Tran Hoang', 'Quoc Bao', 4, 3, 'Vietnam', 'Male', 'quocbao@gmail.com', '2003-06-13', '2025-04-01 13:19:49', 'Phung', 'Ba Nguyen', '09999999'),
(4, 'truongbach', '$2y$10$lRQ58lbak05rW7.be8ok4OaWJcb9znRp9ra.qXqnQku.iDrA9N8vy', 'Nguyễn ', 'Trương Bách', 2, 2, 'Vietnam', 'Male', 'truongbach@gmail.com', '2003-02-15', '2025-04-01 13:22:26', 'Doan ', 'Duc Tai', '0948070303');

-- --------------------------------------------------------

--
-- Table structure for table `student_score`
--

CREATE TABLE `student_score` (
  `id` int NOT NULL,
  `semester` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `year` int NOT NULL,
  `student_id` int NOT NULL,
  `teacher_id` int NOT NULL,
  `subject_id` int NOT NULL,
  `results` varchar(512) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_score`
--

INSERT INTO `student_score` (`id`, `semester`, `year`, `student_id`, `teacher_id`, `subject_id`, `results`) VALUES
(1, 'II', 2025, 1, 1, 1, '10 15,15 20,10 10,10 20,30 35'),
(2, 'II', 2025, 1, 1, 4, '15 20,4 5');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int NOT NULL,
  `subject` varchar(31) COLLATE utf8mb4_general_ci NOT NULL,
  `subject_code` varchar(31) COLLATE utf8mb4_general_ci NOT NULL,
  `grade` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject`, `subject_code`, `grade`) VALUES
(1, 'English for Work-02', 'CE-02', 4),
(2, 'English for kids-02', 'EKid-02', 2),
(3, 'English for kids', 'EKid', 1),
(4, 'English for Work', 'CE', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int NOT NULL,
  `username` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fname` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `lname` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `subjects` varchar(31) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(31) COLLATE utf8mb4_general_ci NOT NULL,
  `employee_number` int NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone_number` varchar(31) COLLATE utf8mb4_general_ci NOT NULL,
  `qualification` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(7) COLLATE utf8mb4_general_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_joined` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `username`, `password`, `class`, `fname`, `lname`, `subjects`, `address`, `employee_number`, `date_of_birth`, `phone_number`, `qualification`, `gender`, `email_address`, `date_of_joined`) VALUES
(1, 'phungbanguyen', '$2y$10$GPazAENIeJEbB/1ti3IuvuGjDsv/YXQj8qKqUZyM9/QgCZVs0odp2', '12', 'Phung', 'Ba Nguyen', '23', 'Vietnam', 2676, '2003-02-02', '123123', 'PhD', 'Male', 'phungnguyenba@gmail.com', '2025-04-11 14:33:02'),
(2, 'doanductai', '$2y$10$8.7zTszHVq8uoVeB0r809ei9sHU8wJ.WY9ZWj78hBt5btvYikbg0O', '14', 'Doan', 'Duc Tai', '13', 'Vietnam', 5962, '2003-03-07', '0948070303', 'Ielts 8.0', 'Male', 'doanductai9@gmail.com', '2025-04-11 14:55:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `student_score`
--
ALTER TABLE `student_score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `grade_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_score`
--
ALTER TABLE `student_score`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
