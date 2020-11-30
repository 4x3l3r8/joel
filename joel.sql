-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 10:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joel`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `faculty` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `date_registered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `firstname`, `lastname`, `gender`, `email`, `password`, `nationality`, `faculty`, `department`, `date_registered`) VALUES
(1, 'Mickey', 'Mouse', 'M', 'janobe@gmail.com', 'Oolong23', 'fnemfnemfnd', 'Pure and Applied Sci', 'mxsnjdqw', '0000-00-00 00:00:00'),
(2, 'Mickey', 'Mouse', 'M', '4x3l3r8@gmail.com', 'Oolong23', 'sqsas', 'Social Science', 'dedc', '0000-00-00 00:00:00'),
(3, 'Mickey', 'Mouse', 'M', '4x3l3r8@gmail.com', 'Oolong23', 'sqsas', 'Social Science', 'dedc', '0000-00-00 00:00:00'),
(4, 'Mickey', 'Mouse', 'M', '4x3l3r8@gmail.com', 'Oolong23', 'sqsas', 'Social Science', 'dedc', '0000-00-00 00:00:00'),
(5, 'fdhfgh', 'btgbg', 'Ot', 'asad@gmail.com', 'asad', 'qsqsmmmqsmq', 'Pure and Applied Sci', 'qsqwas', '0000-00-00 00:00:00'),
(6, 'faasdw', 'asczxcs', 'M', 'asdawcwsc@gmail', 'azxczxcscscdvvd', 'Asdwdwfcxv', 'Pure and Applied Sci', '', '0000-00-00 00:00:00'),
(7, 'tbtgb', 'Mouse', 'F', 'asad@gmail.com', 'asad', 'qsqsmmmqsmq', 'Pure and Applied Sci', '1', '0000-00-00 00:00:00'),
(8, 'Adewale', 'Joel', 'M', 'blackwell@gmail.com', 'asad', 'Nigerian', 'Arts', '1', '0000-00-00 00:00:00'),
(9, 'Adewale', 'Joel', 'M', 'blackwell@gmail.com', 'asad', 'sqsas', 'Arts', '2', '0000-00-00 00:00:00'),
(10, 'Sedeasde', 'btgbg', 'M', 'blackwell1@gmail.com', 'DDeioel', 'sqsas', 'Arts', '0', '0000-00-00 00:00:00'),
(11, 'Sedeasde', 'btgbg', 'M', 'blackwell1@gmail.com', 'khjbjhbjh', 'sqsas', 'Arts', '1', '0000-00-00 00:00:00'),
(12, 'Sedeasde', 'btgbg', 'M', 'blackwell1@gmail.com', 'khjbjhbjh', 'sqsas', 'Arts', '1', '2020-11-05 01:05:45'),
(13, 'tbtgb', 'Mouse', 'F', 'blackwell@gmail.com', 'Babacheck your code', 'Nigerian', 'Pure and Applied Sci', '1', '0000-00-00 00:00:00'),
(14, 'tbtgb', 'Mouse', 'F', 'blackwell@gmail.com', 'asad', 'Nigerian', 'Arts', '1', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
