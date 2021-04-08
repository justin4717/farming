-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 02:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `framing_assistant`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(20) NOT NULL,
  `district_name` text NOT NULL,
  `state_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`, `state_id`) VALUES
(1, 'Alappuzha', 12),
(2, 'Ernakulam', 12),
(3, 'Idukki', 12),
(4, 'Kannur', 12),
(5, 'Kasaragod', 12),
(6, 'Kollam', 12),
(7, 'Kottayam', 12),
(8, 'Kozhikode', 12),
(9, 'Malappuram', 12),
(10, 'Palakkad', 12),
(11, 'Pathanamthitta', 12),
(12, 'Thiruvananthapuram', 12),
(13, 'Thrissur', 12),
(14, 'Wayanad', 12);

-- --------------------------------------------------------

--
-- Table structure for table `farmin_type_master`
--

CREATE TABLE `farmin_type_master` (
  `farming_type_id` int(20) NOT NULL,
  `farming_type_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `farmin_type_master`
--

INSERT INTO `farmin_type_master` (`farming_type_id`, `farming_type_name`) VALUES
(2, 'Fish Farming'),
(3, 'Pottatto Farming'),
(4, 'Arable Farming'),
(5, ' Pastoral Farming'),
(6, 'Mixed Farming'),
(7, 'Subsistence Farming'),
(8, 'Commercial Farming'),
(9, 'Extensive and Intensive Farming'),
(10, 'Nomadic Farming'),
(11, 'Sedentary Farming'),
(12, 'Poultry Farming');

-- --------------------------------------------------------

--
-- Table structure for table `guideline`
--

CREATE TABLE `guideline` (
  `g_id` int(20) NOT NULL,
  `guideline_title` varchar(100) DEFAULT NULL,
  `guideline_desc` varchar(100) DEFAULT NULL,
  `guideline_content` longtext,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guideline`
--

INSERT INTO `guideline` (`g_id`, `guideline_title`, `guideline_desc`, `guideline_content`, `created_at`) VALUES
(1, 'pottatto', 'djhxasbjckjsndlc', 'sdsgd hdfrj rtjrj jgujhikdjshdiosjmlm,lamdb yagdiunsaiooi disjoi\r\nsjknim asndmd', '2021-01-12 07:48:22.771677'),
(2, 'Pottatto Farming', 'Planting, Care, Harvesting', 'Potatoes will grow in just about any well-drained soil, but they dislike soggy soil. Because they do all their growing underground, they can expand more easily in loose, loamy soil than in heavy, compacted, clay soil that keeps plant roots from getting the air and water they need.\r\n\r\n\r\n \r\nBest Planting or Sowing Time of Potato:\r\n\r\nPlant seed potatoes (pieces of the whole potato or a small whole potato, with at least 2 eyes per piece) 0-2 weeks after last spring frost.\r\nIf you are cutting up pota', '2021-01-25 11:49:50.529073');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(10) NOT NULL,
  `post_content` varchar(500) NOT NULL,
  `post_image` varchar(250) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `user_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_content`, `post_image`, `created_at`, `user_id`) VALUES
(1, '                                          \r\n                           HIII j         ', '20210128061415-download (1).jpg', '2021-01-28 05:14:15.311839', 4),
(2, '                                          \r\n                                    Agriculture is the most healthful, most useful and most noble employment of man.', '20210128061506-farmingindia_505_081117025209.jpg', '2021-01-28 05:15:06.608327', 4);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(20) NOT NULL,
  `state_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'Andhra Pradesh'),
(2, 'Arunachal Pradesh'),
(3, 'Assam'),
(4, 'Bihar'),
(5, 'Chhattisgarh'),
(6, 'Goa'),
(7, 'Gujarat'),
(8, 'Haryana'),
(9, 'Himachal Pradesh'),
(10, 'Jharkhand'),
(11, 'Karnataka'),
(12, 'Kerala'),
(13, 'Madhya Pradesh'),
(14, 'Maharashtra'),
(15, 'Manipur'),
(16, 'Meghalaya'),
(17, 'Mizoram'),
(18, 'Nagaland'),
(19, 'Odisha'),
(20, 'Punjab'),
(21, 'Rajasthan'),
(22, 'Sikkim'),
(23, 'Tamil Nadu'),
(24, 'Telangana'),
(25, 'Tripura'),
(26, 'Uttar Pradesh'),
(27, 'Uttarakhand'),
(28, 'West Bengal'),
(29, 'Andaman and Nicobar Islands'),
(30, 'Chandigarh'),
(31, 'Delhi'),
(32, 'Jammu and Kashmir'),
(33, 'Lakshadweep'),
(34, 'Puducherry'),
(35, 'Ladakh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_like`
--

CREATE TABLE `tbl_like` (
  `like_id` int(20) NOT NULL,
  `post_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_like`
--

INSERT INTO `tbl_like` (`like_id`, `post_id`, `user_id`, `is_active`) VALUES
(1, 4, 4, 1),
(2, 3, 4, 0),
(3, 2, 4, 1),
(4, 1, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `pin` int(6) DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `gender` text NOT NULL,
  `status` text NOT NULL,
  `user_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `phone`, `state`, `district`, `area`, `pin`, `created_at`, `is_active`, `gender`, `status`, `user_image`) VALUES
(1, 'Justin', 'justin@gmail.com', '8943226762', NULL, NULL, NULL, NULL, '2020-12-29 18:14:33.954261', 1, '', '', ''),
(2, 'Justin', 'justin@gmail.com', '8943226762', NULL, NULL, NULL, NULL, '2020-12-29 18:17:39.159595', 1, '', '', ''),
(3, 'Justin', 'asfs@gmail.com', '8943226762', NULL, NULL, NULL, NULL, '2020-12-30 09:28:45.531051', 1, '', '', ''),
(4, 'dasd', 'asdas@csdf', '8943226762', '12', '7', 'Athirampuzha', 686632, '2020-12-30 09:29:14.839006', 1, 'Male', '', ''),
(5, 'Admin', 'admin@gmail.com', '8943226762', NULL, NULL, NULL, NULL, '2021-01-09 06:35:08.491371', 1, '', '', ''),
(6, '5165156', 'sacsdf@bdf', '894326', NULL, NULL, NULL, NULL, '2021-01-26 17:07:57.150281', 1, '', '', ''),
(7, 'scsk', 'gfjhhj@asd.com', '8943226762', NULL, NULL, NULL, NULL, '2021-01-26 17:57:42.085689', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_login`
--

CREATE TABLE `users_login` (
  `user_login_id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `role` tinyint(2) NOT NULL DEFAULT '1' COMMENT '0=admin, 1= user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_login`
--

INSERT INTO `users_login` (`user_login_id`, `user_name`, `password`, `user_id`, `role`) VALUES
(1, 'gcfgjgjk', 'qwerty', 3, 1),
(2, 'dsfsd', 'qwerty', 4, 1),
(3, 'admin', 'qwerty', 5, 0),
(4, 'asvavasv', 'svdb', 6, 1),
(5, 'ghghfjf', 'qwerty', 7, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `farmin_type_master`
--
ALTER TABLE `farmin_type_master`
  ADD PRIMARY KEY (`farming_type_id`);

--
-- Indexes for table `guideline`
--
ALTER TABLE `guideline`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tbl_like`
--
ALTER TABLE `tbl_like`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_login`
--
ALTER TABLE `users_login`
  ADD PRIMARY KEY (`user_login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `farmin_type_master`
--
ALTER TABLE `farmin_type_master`
  MODIFY `farming_type_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `guideline`
--
ALTER TABLE `guideline`
  MODIFY `g_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_like`
--
ALTER TABLE `tbl_like`
  MODIFY `like_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_login`
--
ALTER TABLE `users_login`
  MODIFY `user_login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
