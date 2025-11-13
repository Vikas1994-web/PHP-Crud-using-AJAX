-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2025 at 06:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelly`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadre`
--

CREATE TABLE `cadre` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `gender` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `job` varchar(191) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cadre`
--

INSERT INTO `cadre` (`id`, `name`, `email`, `phone`, `gender`, `city`, `job`, `created_at`) VALUES
(1, 'Vikas Thakur', 'vt378396@gmail.com', '07987938924', 'Male', 'New Delhi', 'Java Developer, Python Developer', '2025-11-11 15:14:40'),
(2, 'Sonam Mishra', 'sonam@gmail.com', '09770343416', 'Female', 'Mumbai', 'IOS Developer', '2025-11-11 15:15:15'),
(3, 'Satyam Singh', 'singh@yahoo.com', '8871903456', 'Male', 'Chennai', 'Andriod Developer', '2025-11-11 15:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `salary`) VALUES
(90001, 'Tabu', 90000),
(90198, 'Sakshi', 75000),
(5690, 'Neelam', 85000),
(7113, 'Jainam', 7100),
(5712, 'Varun', 14000),
(1890, 'UshaKhande', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `gender` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `job` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `phone`, `gender`, `city`, `job`, `created_at`) VALUES
(14, 'Meghna Verma', 'Verma@yahoo.com', '8871903456', 'Female', 'Mumbai', 'Python Developer, IOS Developer', '0000-00-00 00:00:00'),
(15, 'Vikas Thakur', 'vt378396@gmail.com', '07987938924', 'Male', 'Kolkata', 'Java Developer, Python Developer', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `php_swal`
--

CREATE TABLE `php_swal` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` tinytext NOT NULL,
  `dob` tinytext NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `designation` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `php_swal`
--

INSERT INTO `php_swal` (`id`, `name`, `gender`, `dob`, `email`, `city`, `designation`, `created_at`) VALUES
(7, 'adsfafsdfsdf', 'Female', '01-11-2025', 'admin@gmail.com', 'Chennai', 'Android Developer', '2025-11-13 10:47:43'),
(8, 'Vikas Thakur', 'Male', '10-11-2025', 'vt378396@gmail.com', 'New Delhi', 'Java Developer, Python Developer', '2025-11-13 10:48:15'),
(9, 'Sonam Mishra', 'Female', '19-11-2025', 'sonam@gmail.com', 'Kolkata', 'Java Developer, IOS Developer', '2025-11-13 10:51:11');

-- --------------------------------------------------------

--
-- Table structure for table `php_swal2`
--

CREATE TABLE `php_swal2` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pro_image` varchar(255) NOT NULL,
  `skills` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `php_swal2`
--

INSERT INTO `php_swal2` (`id`, `name`, `gender`, `email`, `state`, `pro_image`, `skills`, `created_at`) VALUES
(9, 'Piyush CHaubey', 'Male', 'sahu@yahoo.com', '12', '1762973917.jpg', 'Java Developer', '2025-11-13 00:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `state_tbl`
--

CREATE TABLE `state_tbl` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state_tbl`
--

INSERT INTO `state_tbl` (`id`, `state_id`, `state_name`) VALUES
(1, 35, 'Andaman and Nicobar Islands'),
(2, 28, 'Andhra Pradesh'),
(3, 12, 'Arunachal Pradesh'),
(4, 18, 'Assam'),
(5, 10, 'Bihar'),
(6, 4, 'Chandigarh'),
(7, 22, 'Chhattisgarh'),
(8, 26, 'Dadra and Nagar Haveli'),
(9, 25, 'Daman and Diu'),
(10, 7, 'Delhi'),
(11, 30, 'Goa'),
(12, 24, 'Gujarat'),
(13, 6, 'Haryana'),
(14, 2, 'Himachal Pradesh'),
(15, 1, 'Jammu and Kashmir'),
(16, 20, 'Jharkhand'),
(17, 29, 'Karnataka'),
(18, 32, 'Kerala'),
(19, 31, 'Lakshadweep'),
(20, 23, 'Madhya Pradesh'),
(21, 27, 'Maharashtra'),
(22, 14, 'Manipur'),
(23, 17, 'Meghalaya'),
(24, 15, 'Mizoram'),
(25, 13, 'Nagaland'),
(26, 21, 'Odisha'),
(27, 34, 'Puducherry'),
(28, 3, 'Punjab'),
(29, 8, 'Rajasthan'),
(30, 11, 'Sikkim'),
(31, 33, 'Tamil Nadu'),
(32, 36, 'Telangana'),
(33, 16, 'Tripura'),
(34, 9, 'Uttar Pradesh'),
(35, 5, 'Uttarakhand'),
(36, 19, 'West Bengal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadre`
--
ALTER TABLE `cadre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php_swal`
--
ALTER TABLE `php_swal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php_swal2`
--
ALTER TABLE `php_swal2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_tbl`
--
ALTER TABLE `state_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadre`
--
ALTER TABLE `cadre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `php_swal`
--
ALTER TABLE `php_swal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `php_swal2`
--
ALTER TABLE `php_swal2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `state_tbl`
--
ALTER TABLE `state_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
