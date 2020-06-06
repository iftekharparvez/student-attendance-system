-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2020 at 03:28 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_attend`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `attend` varchar(255) NOT NULL,
  `att_time` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `roll`, `attend`, `att_time`) VALUES
(1, 11, 'absent', '2019-12-22'),
(2, 12, 'absent', '2019-12-22'),
(3, 13, 'present', '2019-12-22'),
(4, 14, 'present', '2019-12-22'),
(5, 15, 'absent', '2019-12-22'),
(6, 16, 'present', '2019-12-22'),
(7, 11, 'present', '2019-12-25'),
(8, 12, 'absent', '2019-12-25'),
(9, 13, 'present', '2019-12-23'),
(10, 14, 'absent', '2019-12-25'),
(11, 15, 'present', '2019-12-25'),
(12, 16, 'present', '2019-12-25'),
(48, 18, '', '0000-00-00'),
(49, 11, 'present', '2019-12-27'),
(50, 12, 'absent', '2019-12-27'),
(51, 13, 'present', '2019-12-27'),
(52, 14, 'absent', '2019-12-27'),
(53, 15, 'present', '2019-12-27'),
(54, 16, 'absent', '2019-12-27'),
(55, 18, 'present', '2019-12-27'),
(56, 19, '', '0000-00-00'),
(57, 16, '', '0000-00-00'),
(58, 17, '', '0000-00-00'),
(59, 18, '', '0000-00-00'),
(60, 19, '', '0000-00-00'),
(61, 20, '', '0000-00-00'),
(62, 16, 'present', '2020-05-28'),
(63, 17, 'present', '2020-05-28'),
(64, 18, 'absent', '2020-05-28'),
(65, 19, 'present', '2020-05-28'),
(66, 20, 'present', '2020-05-28'),
(67, 21, '', '0000-00-00'),
(68, 16, 'absent', '2020-06-02'),
(69, 17, 'absent', '2020-06-02'),
(70, 18, 'absent', '2020-06-02'),
(71, 19, 'absent', '2020-06-02'),
(72, 20, 'absent', '2020-06-02'),
(73, 21, 'present', '2020-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE IF NOT EXISTS `tbl_student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `name`, `roll`) VALUES
(9, 'iftekhar', 16),
(10, 'Zahidul Islam', 17),
(11, 'Mehidi hasan', 18),
(12, 'Mehidi hasan', 19),
(13, 'RONI KHAN', 20),
(14, 'Zahidul Islam', 21);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'rahim', 'rahim@gmail.com', '123456'),
(2, 'karim', 'karim@gmail.com', '	\r\n123456'),
(3, 'rony', 'rony@gmail.com', '1234'),
(4, 'kochi', 'roni@g', '123456'),
(5, 'Mofiz', 'mofiz@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
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
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
