-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 08:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_username`, `admin_password`) VALUES
('admin', 'test1234');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `reporter_id` int(11) NOT NULL,
  `isApproved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `reporter_id`, `isApproved`) VALUES
(112, 'Happy Birrthday', 'Happy BirrthdayHappy BirrthdayHappy BirrthdayHappy BirrthdayHappy Birrthday', 12, 1),
(113, 'Happy Birrthday', 'Happy BirrthdayHappy BirrthdayHappy BirrthdayHappy BirrthdayHappy Birrthday', 12, 1),
(114, 'Happy Birrthday', 'Happy BirrthdayHappy BirrthdayHappy BirrthdayHappy BirrthdayHappy Birrthday', 12, 1),
(115, 'Happy Birrthday', 'Happy BirrthdayHappy BirrthdayHappy BirrthdayHappy BirrthdayHappy Birrthday', 12, 1),
(116, 'Happy Birrthday', 'Happy BirrthdayHappy BirrthdayHappy BirrthdayHappy BirrthdayHappy Birrthday', 12, 0),
(117, 'Happy Birrthday', 'Happy BirrthdayHappy BirrthdayHappy BirrthdayHappy BirrthdayHappy Birrthday', 12, 0),
(118, 'Happy Birrthday', 'Happy BirrthdayHappy BirrthdayHappy BirrthdayHappy BirrthdayHappy Birrthday', 12, 0),
(119, '', '', 12, 1),
(120, 'ruhul amin is programming', 'Programming is really hard my brothers. i am feeling that hardship.', 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reporter`
--

CREATE TABLE `reporter` (
  `reporter_id` int(100) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `rusername` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reporter`
--

INSERT INTO `reporter` (`reporter_id`, `rname`, `rusername`, `password`) VALUES
(10, 'ruhul', 'ruhul', '1234'),
(11, '', '', ''),
(12, 'kamal', 'kamal12', '1234'),
(13, '', '', ''),
(14, 'ruhul', 'ruhulamin', '12345'),
(15, '', '', ''),
(16, 'jamal', 'jamjam', '1234'),
(17, '', '', ''),
(18, '', '', ''),
(19, '', '', ''),
(20, 'masuma', 'masuma12', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`) VALUES
(12, 'kamal', 'Rahman', 'xyz'),
(13, 'kamal', 'Rahman', 'xyz'),
(14, 'kamal', 'Rahman', 'xyz'),
(15, 'kamal', 'Rahman', 'xyz'),
(16, 'kamal', 'Rahman', 'xyz'),
(17, 'kamal', 'Rahman', 'xyz'),
(18, '', '', ''),
(19, '', 'kamal', 'fbdisvgb'),
(20, '', '', ''),
(21, '', '', ''),
(22, '', '', ''),
(23, '', '', ''),
(24, '', '', ''),
(25, '', '', ''),
(26, '', '', ''),
(27, '', '', ''),
(28, '', '', ''),
(29, '', '', ''),
(30, '', '', ''),
(31, '', '', ''),
(32, '', '', ''),
(33, '', '', ''),
(34, 'Ruhul', 'admin', 'Test@12345'),
(35, '', '', ''),
(36, '', '', ''),
(37, '', '', ''),
(38, '', '', ''),
(39, '', '', ''),
(40, '', '', ''),
(41, '', '', ''),
(42, '', '', ''),
(43, 'Ruhul', 'ruhul', '1234'),
(44, '', '', ''),
(45, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `test` (`reporter_id`);

--
-- Indexes for table `reporter`
--
ALTER TABLE `reporter`
  ADD PRIMARY KEY (`reporter_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `reporter`
--
ALTER TABLE `reporter`
  MODIFY `reporter_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `test` FOREIGN KEY (`reporter_id`) REFERENCES `reporter` (`reporter_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
