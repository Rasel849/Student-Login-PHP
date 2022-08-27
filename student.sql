-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 03:35 AM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `student_id`) VALUES
(4, 201311011),
(5, 201311089),
(6, 201311011),
(7, 201311089),
(8, 201311011),
(9, 201311011),
(10, 201311011);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `confirm_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`student_id`, `student_name`, `password`, `confirm_password`) VALUES
(20131105, 'zeba', '1234', '1234'),
(201311011, 'moushe', '1234', '1234'),
(201311047, 'rasel', '1234', '1234'),
(201311089, 'Rajosri', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student_in`
--

CREATE TABLE `student_in` (
  `id` int(11) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `students_id` int(11) NOT NULL,
  `section` varchar(2) NOT NULL,
  `Dept` varchar(50) NOT NULL,
  `Varsity_Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_in`
--

INSERT INTO `student_in` (`id`, `student_name`, `students_id`, `section`, `Dept`, `Varsity_Name`) VALUES
(201311011, 'Subrina', 201311011, 'A', 'CSE', 'VU'),
(201311011, 'Shaharin', 201311047, 'A', 'CSE', 'VU'),
(201311011, 'moushe', 201311065, 'A', 'CSE', 'VU'),
(201311089, 'Rasel', 201311047, 'A', 'CSE', 'VU'),
(201311089, 'Islam', 201311088, 'A', 'CSE', 'VU'),
(201311089, 'Babu', 201311012, 'A', 'CSE', 'VU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
