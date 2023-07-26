-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2023 at 04:46 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `exam_name` text,
  `institute_name` text,
  `exam_year` year DEFAULT NULL,
  `result` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `user_id`, `exam_name`, `institute_name`, `exam_year`, `result`) VALUES
(59, 30, 'Clarke Melendez', 'Hamilton Washington', '1971', 84),
(60, 30, 'Marvin Mccarty', 'Sharon Craig', '2013', 26),
(61, 31, 'Ayanna Vance', 'Damian Walters', '1975', 82),
(62, 32, 'Kelly Reeves', 'Kalia Harrell', '1971', 94),
(63, 33, 'Connor Frost', 'Jada Ball', '1970', 27),
(64, 34, 'Addison Dyer', 'Xenos Williamson', '2001', 28),
(65, 34, 'Clayton Burris', 'Brynn Nunez', '2012', 64),
(66, 34, 'Imani Buckley', 'Candace Clarke', '2015', 12),
(67, 34, 'Carla Cantu', 'Blossom Sanders', '1993', 82),
(68, 34, 'Glenna Graham', 'Vivien Petty', '2000', 11),
(69, 35, 'Quinn Gould', 'Ralph Mccarty', '2014', 16),
(70, 35, 'Wayne Reed', 'Anjolie Castillo', '1975', 87),
(71, 35, 'Elvis Mitchell', 'Sydney Lang', '1982', 77),
(72, 35, 'Dacey Barker', 'Cyrus Vasquez', '2014', 63),
(73, 35, 'Jescie Mejia', 'Kim Harding', '1982', 39),
(74, 35, 'Hector West', 'Abraham Campbell', '2012', 82),
(75, 36, 'Stacey Rowland', 'Lana Burton', '2012', 2.33);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `skill_name` varchar(255) DEFAULT NULL,
  `pro_level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `skill_name`, `pro_level`) VALUES
(6, 31, 'Jason Sandoval', 'Aut delectus veniam'),
(7, 31, 'Kasper Mckenzie', 'Cupidatat veniam do'),
(8, 32, 'Haviva Richardson', 'Et eligendi fugiat d'),
(9, 33, 'Brendan Larson', 'Omnis ea excepteur q'),
(10, 34, 'Imelda Yang', 'Error sit voluptate '),
(11, 34, 'Zephania House', 'Excepteur ratione co'),
(12, 34, 'Alvin Rose', 'Corrupti unde eveni'),
(13, 34, 'Karly Schneider', 'Illo expedita minim '),
(14, 34, 'Tamekah Spears', 'Id eos mollit delen'),
(15, 34, 'Beatrice Buchanan', 'Deserunt quas evenie'),
(16, 34, 'Gray Nixon', 'Qui voluptatem quod '),
(17, 34, 'Jamal Riggs', 'Anim hic sit ullamc'),
(18, 34, 'Thaddeus Rogers', 'Adipisicing maxime q'),
(19, 34, 'Mohammad Bradley', 'Dolorem quia sequi d'),
(20, 35, 'Lareina Long', 'Dolore tenetur lorem'),
(21, 35, 'May Roberson', 'Sit aliquam reprehe'),
(22, 35, 'Ryan Cline', 'Pariatur Magnam id '),
(23, 35, 'Darius Gross', 'Eos excepturi duis a'),
(24, 35, 'Hall Best', 'Elit perspiciatis '),
(25, 35, 'Rashad Mcdaniel', 'Velit nostrud delen'),
(26, 35, 'Ira Daugherty', 'Quibusdam eos sit '),
(27, 35, 'Quentin Burns', 'Illum qui voluptas '),
(28, 35, 'Hamish Tran', 'Quo corrupti illo c'),
(29, 35, 'Nomlanga Day', 'Enim quaerat quia ma'),
(30, 35, 'Palmer Nielsen', 'Eius officia omnis s'),
(31, 35, 'Breanna Ferguson', 'Dignissimos quis asp'),
(32, 35, 'Theodore Valenzuela', 'Fuga Et illum cons'),
(33, 35, 'Urielle Torres', 'Reprehenderit ipsam '),
(34, 35, 'Iona Russell', 'Vel amet quam conse'),
(35, 35, 'Castor Davis', 'Qui aliqua Eiusmod '),
(36, 36, 'Ruth Clements', 'Nihil esse laborios');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fathers_name` varchar(255) DEFAULT NULL,
  `mothers_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fathers_name`, `mothers_name`, `email`, `dob`) VALUES
(30, 'Demetrius Pugh', 'Yvette Bonner', 'Cain Nelson', 'qehyv@mailinator.com', '1999-09-16'),
(31, 'Vladimir Griffin', 'Taylor Hill', 'Rae Daniels', 'ruruneqod@mailinator.com', '2010-01-10'),
(32, 'Gwendolyn Castaneda', 'Kimberley Vance', 'Owen Church', 'nypoh@mailinator.com', '1990-04-28'),
(33, 'Gemma Mcdowell', 'Shana Moore', 'Elijah Howe', 'pepamydov@mailinator.com', '1973-05-28'),
(34, 'Vivian Frost', 'Katell Gilmore', 'Hiroko Montoya', 'bobefani@mailinator.com', '1977-09-20'),
(35, 'Laurel Goff', 'Dustin Key', 'Shea Yates', 'nogenepa@mailinator.com', '2012-02-05'),
(36, 'Wynter Buck', 'Oliver Hudson', 'Nash Doyle', 'giza@mailinator.com', '2012-08-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
