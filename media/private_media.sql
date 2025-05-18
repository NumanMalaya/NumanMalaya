-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2025 at 11:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `private_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_record`
--

CREATE TABLE `user_record` (
  `user_Id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_record`
--

INSERT INTO `user_record` (`user_Id`, `name`, `email`, `password`) VALUES
(1, 'Numan Malaya', 'chnumanmalaya09@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `word_files`
--

CREATE TABLE `word_files` (
  `word_files_Id` int(200) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `word_files`
--

INSERT INTO `word_files` (`word_files_Id`, `name`, `file`, `image`) VALUES
(1, 'Cold_Email_Template', 'Cold_Email_Template.rtf', ''),
(2, 'English_Proficiency_Certificate', 'English_Proficiency_Certificate.docx', ''),
(3, 'Malaya_CoverLetter', 'Muhammad_Numan_Zaman_CoverLetter.docx', ''),
(4, 'Malaya_Resume', 'Muhammad_Numan_Zaman_Resume.docx', ''),
(5, 'Recommendation_Letter', 'Recommendation_Letter.docx', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_record`
--
ALTER TABLE `user_record`
  ADD PRIMARY KEY (`user_Id`);

--
-- Indexes for table `word_files`
--
ALTER TABLE `word_files`
  ADD PRIMARY KEY (`word_files_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_record`
--
ALTER TABLE `user_record`
  MODIFY `user_Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `word_files`
--
ALTER TABLE `word_files`
  MODIFY `word_files_Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
