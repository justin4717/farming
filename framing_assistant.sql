-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table framing_assistant.district
CREATE TABLE IF NOT EXISTS `district` (
  `district_id` int(20) NOT NULL AUTO_INCREMENT,
  `district_name` text NOT NULL,
  `state_id` int(20) NOT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Dumping data for table framing_assistant.district: ~14 rows (approximately)
/*!40000 ALTER TABLE `district` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `district` ENABLE KEYS */;

-- Dumping structure for table framing_assistant.farmin_type_master
CREATE TABLE IF NOT EXISTS `farmin_type_master` (
  `farming_type_id` int(20) NOT NULL AUTO_INCREMENT,
  `farming_type_name` text NOT NULL,
  PRIMARY KEY (`farming_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Dumping data for table framing_assistant.farmin_type_master: ~11 rows (approximately)
/*!40000 ALTER TABLE `farmin_type_master` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `farmin_type_master` ENABLE KEYS */;

-- Dumping structure for table framing_assistant.guideline
CREATE TABLE IF NOT EXISTS `guideline` (
  `g_id` int(20) NOT NULL AUTO_INCREMENT,
  `guideline_title` varchar(100) DEFAULT NULL,
  `guideline_desc` varchar(100) DEFAULT NULL,
  `guideline_content` longtext DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table framing_assistant.guideline: ~2 rows (approximately)
/*!40000 ALTER TABLE `guideline` DISABLE KEYS */;
INSERT INTO `guideline` (`g_id`, `guideline_title`, `guideline_desc`, `guideline_content`, `created_at`) VALUES
	(1, 'pottatto', 'djhxasbjckjsndlc', 'sdsgd hdfrj rtjrj jgujhikdjshdiosjmlm,lamdb yagdiunsaiooi disjoi\r\nsjknim asndmd', '2021-01-12 13:18:22.771677'),
	(2, 'Pottatto Farming', 'Planting, Care, Harvesting', 'Potatoes will grow in just about any well-drained soil, but they dislike soggy soil. Because they do all their growing underground, they can expand more easily in loose, loamy soil than in heavy, compacted, clay soil that keeps plant roots from getting the air and water they need.\r\n\r\n\r\n \r\nBest Planting or Sowing Time of Potato:\r\n\r\nPlant seed potatoes (pieces of the whole potato or a small whole potato, with at least 2 eyes per piece) 0-2 weeks after last spring frost.\r\nIf you are cutting up pota', '2021-01-25 17:19:50.529073');
/*!40000 ALTER TABLE `guideline` ENABLE KEYS */;

-- Dumping structure for table framing_assistant.ledger_master
CREATE TABLE IF NOT EXISTS `ledger_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ledger_name` varchar(250) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table framing_assistant.ledger_master: ~2 rows (approximately)
/*!40000 ALTER TABLE `ledger_master` DISABLE KEYS */;
INSERT INTO `ledger_master` (`id`, `ledger_name`) VALUES
	(1, 'Sales'),
	(2, 'Purchase');
/*!40000 ALTER TABLE `ledger_master` ENABLE KEYS */;

-- Dumping structure for table framing_assistant.post
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_content` varchar(500) NOT NULL,
  `post_image` varchar(250) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `user_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table framing_assistant.post: ~2 rows (approximately)
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`post_id`, `post_content`, `post_image`, `created_at`, `user_id`) VALUES
	(1, '                                          \r\n                           HIII j         ', '20210128061415-download (1).jpg', '2021-01-28 10:44:15.311839', 4),
	(2, '                                          \r\n                                    Agriculture is the most healthful, most useful and most noble employment of man.', '20210128061506-farmingindia_505_081117025209.jpg', '2021-01-28 10:45:06.608327', 4);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Dumping structure for table framing_assistant.state
CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(20) NOT NULL AUTO_INCREMENT,
  `state_name` text NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- Dumping data for table framing_assistant.state: ~35 rows (approximately)
/*!40000 ALTER TABLE `state` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `state` ENABLE KEYS */;

-- Dumping structure for table framing_assistant.tbl_like
CREATE TABLE IF NOT EXISTS `tbl_like` (
  `like_id` int(20) NOT NULL AUTO_INCREMENT,
  `post_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`like_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table framing_assistant.tbl_like: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_like` DISABLE KEYS */;
INSERT INTO `tbl_like` (`like_id`, `post_id`, `user_id`, `is_active`) VALUES
	(1, 4, 4, 1),
	(2, 3, 4, 0),
	(3, 2, 4, 1),
	(4, 1, 4, 0);
/*!40000 ALTER TABLE `tbl_like` ENABLE KEYS */;

-- Dumping structure for table framing_assistant.transactions
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_no` varchar(50) DEFAULT '0',
  `trans_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `trans_date` date DEFAULT NULL,
  `trans_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Income, 1=Expense',
  `ledger` int(11) NOT NULL DEFAULT 0,
  `narration` varchar(250) DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `delete_status` tinyint(4) DEFAULT 0 COMMENT '1=Deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table framing_assistant.transactions: ~1 rows (approximately)
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` (`id`, `trans_no`, `trans_amount`, `trans_date`, `trans_type`, `ledger`, `narration`, `user_id`, `created_at`, `updated_at`, `delete_status`) VALUES
	(1, 'INC1', 10000.00, '2021-04-09', 0, 0, 'From sales', 7, '2021-04-09 11:19:54', NULL, 0);
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;

-- Dumping structure for table framing_assistant.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `pin` int(6) DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `gender` text NOT NULL,
  `status` text NOT NULL,
  `user_image` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table framing_assistant.users: ~7 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `name`, `email`, `phone`, `state`, `district`, `area`, `pin`, `created_at`, `is_active`, `gender`, `status`, `user_image`) VALUES
	(1, 'Justin', 'justin@gmail.com', '8943226762', NULL, NULL, NULL, NULL, '2020-12-29 23:44:33.954261', 1, '', '', ''),
	(2, 'Justin', 'justin@gmail.com', '8943226762', NULL, NULL, NULL, NULL, '2020-12-29 23:47:39.159595', 1, '', '', ''),
	(3, 'Justin', 'asfs@gmail.com', '8943226762', NULL, NULL, NULL, NULL, '2020-12-30 14:58:45.531051', 1, '', '', ''),
	(4, 'dasd', 'asdas@csdf', '8943226762', '12', '7', 'Athirampuzha', 686632, '2020-12-30 14:59:14.839006', 1, 'Male', '', ''),
	(5, 'Admin', 'admin@gmail.com', '8943226762', NULL, NULL, NULL, NULL, '2021-01-09 12:05:08.491371', 1, '', '', ''),
	(6, '5165156', 'sacsdf@bdf', '894326', NULL, NULL, NULL, NULL, '2021-01-26 22:37:57.150281', 1, '', '', ''),
	(7, 'scsk', 'gfjhhj@asd.com', '8943226762', NULL, NULL, NULL, NULL, '2021-01-26 23:27:42.085689', 1, '', '', '');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table framing_assistant.users_login
CREATE TABLE IF NOT EXISTS `users_login` (
  `user_login_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `role` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0=admin, 1= user',
  PRIMARY KEY (`user_login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table framing_assistant.users_login: ~5 rows (approximately)
/*!40000 ALTER TABLE `users_login` DISABLE KEYS */;
INSERT INTO `users_login` (`user_login_id`, `user_name`, `password`, `user_id`, `role`) VALUES
	(1, 'gcfgjgjk', 'qwerty', 3, 1),
	(2, 'dsfsd', 'qwerty', 4, 1),
	(3, 'admin', 'qwerty', 5, 0),
	(4, 'asvavasv', 'svdb', 6, 1),
	(5, 'user', 'user', 7, 1);
/*!40000 ALTER TABLE `users_login` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
