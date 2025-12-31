-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 31, 2025 at 04:35 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cf2m_english`
--

-- --------------------------------------------------------

--
-- Table structure for table `english_course`
--

DROP TABLE IF EXISTS `english_course`;
CREATE TABLE IF NOT EXISTS `english_course` (
  `english_course_id` tinyint UNSIGNED NOT NULL AUTO_INCREMENT,
  `english_course_name` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`english_course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `english_users`
--

DROP TABLE IF EXISTS `english_users`;
CREATE TABLE IF NOT EXISTS `english_users` (
  `english_user_id` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
  `english_user_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `english_user_firstname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `english_user_username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `english_user_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `english_user_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `english_user_roles` json NOT NULL,
  `english_user_course` tinyint UNSIGNED NOT NULL,
  `english_user_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`english_user_id`),
  UNIQUE KEY `english_user_name` (`english_user_name`,`english_user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `english_users`
--

INSERT INTO `english_users` (`english_user_id`, `english_user_name`, `english_user_firstname`, `english_user_username`, `english_user_email`, `english_user_password`, `english_user_roles`, `english_user_course`, `english_user_active`) VALUES
(1, 'Brennan', 'Lee', 'leeEng', 'lee.brennan@cf2m.be', '$2y$10$33m6w9ilI33e3EVt3Ey6rOxiI.OBmmcP2bRK83zQBQR6fU.n3qXte', '[\"ROLE_SUPER\", \"ROLE_ADMIN\", \"ROLE_USER\"]', 255, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
