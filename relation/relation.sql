-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2025 at 06:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relation`
--

-- --------------------------------------------------------

--
-- Table structure for table `Hobbies`
--

CREATE TABLE `Hobbies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Hobbies`
--

INSERT INTO `Hobbies` (`id`, `name`) VALUES
(3, 'Coading'),
(1, 'Cricket'),
(2, 'Football');

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`id`, `name`) VALUES
(1, 'Bhakti'),
(2, 'Ramesh');

-- --------------------------------------------------------

--
-- Table structure for table `Student_Hobbies`
--

CREATE TABLE `Student_Hobbies` (
  `student_id` int(11) NOT NULL,
  `hobby_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Student_Hobbies`
--

INSERT INTO `Student_Hobbies` (`student_id`, `hobby_id`) VALUES
(1, 1),
(1, 2),
(2, 2),
(2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Hobbies`
--
ALTER TABLE `Hobbies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Student_Hobbies`
--
ALTER TABLE `Student_Hobbies`
  ADD PRIMARY KEY (`student_id`,`hobby_id`),
  ADD KEY `hobby_id` (`hobby_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Hobbies`
--
ALTER TABLE `Hobbies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Student_Hobbies`
--
ALTER TABLE `Student_Hobbies`
  ADD CONSTRAINT `student_hobbies_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `Students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_hobbies_ibfk_2` FOREIGN KEY (`hobby_id`) REFERENCES `Hobbies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
