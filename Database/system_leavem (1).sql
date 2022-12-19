-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 07:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_leavem`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_master`
--

CREATE TABLE `department_master` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(128) NOT NULL,
  `short_name` varchar(20) NOT NULL,
  `strength` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_master`
--

INSERT INTO `department_master` (`id`, `dept_name`, `short_name`, `strength`, `created_at`, `updated_at`, `status`) VALUES
(1, 'computer_science', 'cse', 15, '2022-09-21 12:49:23', '2022-09-21 12:49:23', 1),
(2, 'information_science', 'ise', 15, '2022-09-21 12:49:23', '2022-09-21 12:49:23', 1),
(3, 'electrical', 'eee', 15, '2022-09-21 12:50:50', '2022-09-21 12:50:50', 1),
(4, 'electronics', 'enc', 15, '2022-09-21 12:50:50', '2022-09-21 12:50:50', 1),
(5, 'mechanical ', 'mech', 15, '2022-09-21 12:51:34', '2022-09-21 12:51:34', 1),
(6, 'civil', 'civ', 15, '2022-09-21 12:51:34', '2022-09-21 12:51:34', 1),
(7, 'aeronautical ', 'aero', 15, '2022-09-21 12:52:06', '2022-09-21 12:52:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `designation_master`
--

CREATE TABLE `designation_master` (
  `id` int(11) NOT NULL,
  `design_name` varchar(64) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation_master`
--

INSERT INTO `designation_master` (`id`, `design_name`, `status`) VALUES
(1, 'superadmin', 1),
(2, 'administrator ', 1),
(3, 'principal ', 1),
(4, 'dean_administration ', 1),
(5, 'dean_infrastructure ', 1),
(6, 'dean_researchanddev', 1),
(7, 'hod_cse', 1),
(8, 'hod_ise', 1),
(9, 'hod_eee', 1),
(10, 'hod_enc', 1),
(11, 'hod_mech', 1),
(12, 'hod_civil', 1),
(13, 'hod_aero', 1),
(14, 'professor ', 1),
(15, 'assistant_professor', 1),
(16, 'associate_professor', 1),
(17, 'lab_instructor ', 1),
(18, 'clerk', 1),
(19, 'placement_officer', 1),
(20, 'librarian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_master`
--

CREATE TABLE `employee_master` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `design_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` bigint(128) NOT NULL,
  `gender` int(11) NOT NULL,
  `role` text NOT NULL,
  `dept_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `Reg_date` date NOT NULL,
  `status` int(11) NOT NULL COMMENT '-1 = unregistered user    0- Ex-user   1- Existing User (Active)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_master`
--

INSERT INTO `employee_master` (`id`, `emp_id`, `name`, `design_id`, `email`, `contact`, `gender`, `role`, `dept_id`, `username`, `password`, `Reg_date`, `status`) VALUES
(1, 'AD001', 'Admin', 1, 'admin@gmail.com', 9309537369, 1, 'Admin', 1, 'Admin@gmail.com', 'admin123', '2022-12-13', 1),
(2, 'PR001', 'Principal', 3, 'principal@gmail.com', 2147483647, 1, 'Principal', 7, 'principal@gmail.com', 'principal123', '2022-12-13', 1),
(3, 'DA001', 'Dean_administration ', 4, 'dean_adm@gmail.com', 9309537369, 1, 'Dean_administration', 2, 'dean_adm@gmail.com', 'dean123', '2022-12-13', 1),
(4, 'DI002', 'Dean_infrastructure ', 5, 'dean_inf@gmail.com', 9309537369, 2, 'goa', 6, 'dean_inf@gmail.com', 'dean123', '2022-12-13', 1),
(5, 'DR003', 'Dean_researchanddev', 6, 'dean_res@gmail.com', 9309536854, 1, 'belgavi', 5, 'dean_res@gmail.com', 'dean123', '2022-12-13', 1),
(6, 'HCSE001', 'HOD_CSE', 7, 'hod_cse@gmail.com', 9309536854, 1, 'HOD_CSE', 1, 'hod_cse@gmail.com', 'hod123', '2022-12-14', 1),
(7, 'HISE002', 'Hod_Ise', 8, 'hod_ise@gmail.com', 9309537369, 2, 'Hod_Ise', 2, 'hod_ise@gmail.com', 'hod123', '2022-12-14', 1),
(8, 'HEEE003', 'Hod_EEE', 9, 'hod_eee@gamil.com', 9309536854, 1, 'belgavi', 4, 'hod_eee@gamil.com', 'hod123', '2022-12-14', 1),
(9, 'HENC004', 'Hod_ENC', 10, 'hod_enc@gamil.com', 9309536854, 1, 'belgavi', 3, 'hod_enc@gamil.com', 'hod123', '2022-12-14', 1),
(10, 'HMECH005', 'Hod_Mech', 11, 'hod_mech@gamil.com', 9309537369, 1, 'belgavi', 5, 'hod_mech@gamil.com', 'hod123', '2022-12-14', 1),
(11, 'HCIVIL006', 'Hod_Civil', 12, 'hod_civil@gamil.com', 9309537369, 1, 'belgavi', 6, 'hod_civil@gamil.com', 'hod123', '2022-12-14', 0),
(12, 'HAER007', 'Hod_Aero', 13, 'hod_aero@gamil.com', 9309536854, 1, 'belgavi', 7, 'hod_aero@gamil.com', 'hod123', '2022-12-14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gender_master`
--

CREATE TABLE `gender_master` (
  `id` int(11) NOT NULL,
  `gender_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender_master`
--

INSERT INTO `gender_master` (`id`, `gender_name`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `hoilday_master`
--

CREATE TABLE `hoilday_master` (
  `id` int(64) NOT NULL,
  `holiday_name` varchar(128) NOT NULL,
  `day` varchar(64) NOT NULL,
  `date` date NOT NULL,
  `Year` year(4) NOT NULL,
  `leave_type` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoilday_master`
--

INSERT INTO `hoilday_master` (`id`, `holiday_name`, `day`, `date`, `Year`, `leave_type`) VALUES
(1, 'New Year?s Day', 'Saturday', '2022-01-01', 2022, 'RH'),
(2, 'New Year Holiday', 'Sunday', '2022-01-02', 2022, 'RH'),
(3, 'Guru Gobind Singh Jayanti', 'Sunday', '2022-01-09', 2022, 'RH'),
(4, 'Missionary Day', 'Tuesday', '2022-01-11', 2022, 'RH'),
(5, 'Swami Vivekananda Jayanti', 'Wednesday', '2022-01-14', 2022, 'RH'),
(6, 'Makar Sankranti', 'Friday', '2022-01-14', 2022, 'RH'),
(7, 'Pongal', 'Friday', '2022-01-15', 2022, 'RH'),
(8, 'Magh Bihu', 'Saturday', '2022-01-15', 2022, 'RH'),
(9, 'Kanuma Panduga', 'Saturday', '2022-01-15', 2022, 'RH'),
(10, 'Uzhavar Thirunal', 'Saturday', '2022-01-16', 2022, 'RH'),
(11, 'Thiruvalluvar Day', 'Sunday', '2022-01-20', 2022, 'RH'),
(12, 'Guru Gobind Singh Jayanti', 'Thursday', '2022-01-23', 2022, 'RH'),
(13, 'Netaji Subhash Chandra Bose Jayanti', 'Sunday', '2022-01-25', 2022, 'RH'),
(14, 'State Day', 'Tuesday', '2022-01-26', 2022, 'RH'),
(15, 'Republic Day', 'Wednesday', '2022-01-26', 2022, 'RH'),
(16, 'Me-Dum-Me-Phi', 'Monday', '2022-01-31', 2022, 'RH'),
(17, 'Sonam Losar', 'Wednesday', '2022-02-02', 2022, 'RH'),
(18, 'Vasant Panchami', 'Saturday', '2022-02-05', 2022, 'RH');

-- --------------------------------------------------------

--
-- Table structure for table `leave_applications`
--

CREATE TABLE `leave_applications` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(11) NOT NULL,
  `design_id` int(20) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `type_of_leave` int(11) NOT NULL,
  `days` int(64) NOT NULL COMMENT 'Total Number of Days On Leave',
  `alt` varchar(11) NOT NULL COMMENT 'alternative person id',
  `reason` varchar(11) NOT NULL COMMENT 'Leave reason (note)',
  `approval_status` int(11) NOT NULL COMMENT 'approved= 1\r\npending = 2\r\nrejected = -1',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_applications`
--

INSERT INTO `leave_applications` (`id`, `emp_id`, `design_id`, `dept_id`, `from_date`, `to_date`, `type_of_leave`, `days`, `alt`, `reason`, `approval_status`, `status`) VALUES
(1, 'PR001', 3, 7, '2022-12-14', '2022-12-16', 1, 2, 'DA001', 'not well', 1, 0),
(2, 'DA001', 4, 2, '2022-12-14', '2022-12-15', 2, 1, 'DA001', 'not well', 2, 1),
(3, 'DI002', 5, 6, '2022-12-15', '2022-12-16', 1, 1, 'DR003', 'not well', 1, 0),
(4, 'DR003', 6, 5, '2022-12-15', '2022-12-16', 2, 1, 'PR001', 'not well', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `leave_entitle`
--

CREATE TABLE `leave_entitle` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `CL` int(11) NOT NULL COMMENT 'Casual Leave',
  `DL` int(11) NOT NULL COMMENT 'Duty Leave',
  `EL` int(11) NOT NULL COMMENT 'Earned Leave (Extended))',
  `RH` int(11) NOT NULL COMMENT 'Restritcted Hoiday',
  `ML` int(11) NOT NULL COMMENT 'Medical Leave',
  `CL_t` int(11) NOT NULL COMMENT 'CL taken',
  `DL_t` int(11) NOT NULL COMMENT 'DL Taken',
  `EL_t` int(11) NOT NULL COMMENT 'EL Taken',
  `RH_t` int(11) NOT NULL COMMENT 'RH Taken',
  `ML_t` int(11) NOT NULL COMMENT 'ML Taken',
  `CL_B` int(11) NOT NULL,
  `DL_B` int(11) NOT NULL,
  `EL_B` int(11) NOT NULL,
  `RH_B` int(11) NOT NULL,
  `ML_B` int(11) NOT NULL,
  `WP` int(11) NOT NULL COMMENT 'Leave Without Pay',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_entitle`
--

INSERT INTO `leave_entitle` (`id`, `emp_id`, `year`, `CL`, `DL`, `EL`, `RH`, `ML`, `CL_t`, `DL_t`, `EL_t`, `RH_t`, `ML_t`, `CL_B`, `DL_B`, `EL_B`, `RH_B`, `ML_B`, `WP`, `created_at`, `updated_at`, `status`) VALUES
(1, 2, 2018, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 2, '2022-09-21 13:10:24', '2022-09-21 13:10:24', 1),
(2, 3, 2019, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 2, '2022-09-21 13:10:24', '2022-09-21 13:10:24', 1),
(3, 4, 2020, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 2, '2022-09-21 13:10:24', '2022-09-21 13:10:24', 1),
(4, 5, 2021, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 2, '2022-09-21 13:10:24', '2022-09-21 13:10:24', 1),
(5, 6, 2022, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 2, '2022-09-21 13:10:24', '2022-09-21 13:10:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meta_aproval_status`
--

CREATE TABLE `meta_aproval_status` (
  `id` int(11) NOT NULL,
  `approval_status_name` varchar(32) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_aproval_status`
--

INSERT INTO `meta_aproval_status` (`id`, `approval_status_name`, `status`) VALUES
(1, 'approved', 1),
(2, 'pending', 1),
(3, 'rejected', 1),
(4, 'applied', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meta_leave_types`
--

CREATE TABLE `meta_leave_types` (
  `id` int(11) NOT NULL,
  `leave_type` int(11) NOT NULL,
  `leave_name` varchar(64) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_leave_types`
--

INSERT INTO `meta_leave_types` (`id`, `leave_type`, `leave_name`, `status`) VALUES
(1, 1, 'casual_leave', 1),
(2, 2, 'duty_leave', 1),
(3, 3, 'extended_leave', 1),
(4, 4, 'restricted_leave', 1),
(5, 5, 'unpaid_leave', 1),
(6, 6, 'medical_leave', 1),
(8, 7, 'college_work', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_master`
--
ALTER TABLE `department_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation_master`
--
ALTER TABLE `designation_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_master`
--
ALTER TABLE `employee_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender_master`
--
ALTER TABLE `gender_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoilday_master`
--
ALTER TABLE `hoilday_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_applications`
--
ALTER TABLE `leave_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_entitle`
--
ALTER TABLE `leave_entitle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_aproval_status`
--
ALTER TABLE `meta_aproval_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_leave_types`
--
ALTER TABLE `meta_leave_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department_master`
--
ALTER TABLE `department_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `designation_master`
--
ALTER TABLE `designation_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `employee_master`
--
ALTER TABLE `employee_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gender_master`
--
ALTER TABLE `gender_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hoilday_master`
--
ALTER TABLE `hoilday_master`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `leave_applications`
--
ALTER TABLE `leave_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leave_entitle`
--
ALTER TABLE `leave_entitle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `meta_aproval_status`
--
ALTER TABLE `meta_aproval_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `meta_leave_types`
--
ALTER TABLE `meta_leave_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
