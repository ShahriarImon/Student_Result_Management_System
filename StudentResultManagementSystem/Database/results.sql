-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 06:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `results`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `markno` int(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `course` varchar(10) NOT NULL,
  `section` int(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `quiz` int(11) NOT NULL DEFAULT 0,
  `classwork` int(255) NOT NULL,
  `mid` int(255) NOT NULL,
  `final` int(255) NOT NULL,
  `total` int(11) NOT NULL,
  `marking_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`markno`, `id`, `course`, `section`, `semester`, `quiz`, `classwork`, `mid`, `final`, `total`, `marking_date`) VALUES
(1, '2017-3-60-009', 'cse411', 3, 'fall16', 8, 10, 45, 8, 71, '2022-01-09 17:14:48'),
(2, '2017-3-60-009', 'cse480', 3, 'fall17', 1, 10, 19, 20, 50, '2022-01-09 17:15:43'),
(3, '2017-3-60-009', 'mat444', 5, 'fall16', 10, 10, 49, 29, 98, '2022-01-09 17:16:49'),
(4, '2017-3-60-111', 'cse480', 2, 'spring20', 10, 10, 40, 25, 85, '2022-01-09 22:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `section` int(10) NOT NULL,
  `id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_as` int(20) NOT NULL DEFAULT 0,
  `status` int(10) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `fname`, `lname`, `email`, `semester`, `course`, `section`, `id`, `password`, `role_as`, `status`, `date`) VALUES
(4, 'sadio', 'mane', 'SadioMane@gmail.com', 'fall17', 'cse401', 2, '1017-4-60-011', '11', 1, 0, '2022-01-08 10:54:35'),
(11, 'sumit', 'kundu', 'n@n', 'fall17', 'cse480', 1, '2017-3-60-003', '$2y$10$cmnpGVcWjyd5dgA/GLm/C.TadQwCcJ/9.TPVhjnXVNiMEQRLd0ZAK', 0, 1, '2022-01-08 17:55:54'),
(13, 'sadio', 'mane', 'ytyty@ryr', 'fall20', 'sce401', 2, '7438564353', '1', 0, 0, '2022-01-08 17:57:20'),
(14, 'tamim', 'Ikbal', 'ytyty@ryr', 'spring20', 'mat444', 5, '2017-3-60-005', '3', 0, 0, '2022-01-08 18:01:04'),
(15, 'sakil', 'khan', 'hergehg@df', 'spring20', 'mat444', 5, '2017-3-60-006', '1', 0, 0, '2022-01-08 18:01:28'),
(16, 'sakib', 'khan', 'shakib@gmail.com', 'spring20', 'mat444', 5, '2017-3-60-007', '$2y$10$AX445DERdpeW79GgCGCZhe1GCnFBNxy5JeSfyuXZzxzROd0Fu9ehS', 0, 1, '2022-01-08 18:01:40'),
(17, 'arif', 'hasnat', 'ridoy@gmail.com', 'spring20', 'mat444', 5, '2017-3-60-008', '1', 0, 0, '2022-01-08 18:01:56'),
(18, 'shahriar', 'imon', 'imon@gmail.com', 'fall16', 'mat444', 5, '2017-3-60-009', '$2y$10$WBp7DyCoaH0fATpzRynshe5fq6.JgqTTNEBzprTAiOKClxUMhwz.y', 0, 1, '2022-01-08 18:02:12'),
(19, 'Shahriar', 'Imon', 'imon@gmail.com', 'fall16', 'cse480', 3, '2017-3-60-009', '$2y$10$WBp7DyCoaH0fATpzRynshe5fq6.JgqTTNEBzprTAiOKClxUMhwz.y', 0, 1, '2022-01-09 11:33:38'),
(20, 'maruf', 'mubasshir', 'maruf@gmail.com', 'fall17', 'cse480', 2, '2017-2-60-124', '2', 0, 0, '2022-01-09 12:15:58'),
(21, 'Shahriar', 'Imon', 'imon@gmail.com', 'fall16', 'cse411', 3, '2017-3-60-009', '$2y$10$WBp7DyCoaH0fATpzRynshe5fq6.JgqTTNEBzprTAiOKClxUMhwz.y', 0, 1, '2022-01-09 17:11:42'),
(22, 'Faria', 'Lia', 'lia@gmail.com', 'spring20', 'cse480', 2, '2017-3-60-111', '$2y$10$2EIylCOMLakqSrRFaepE5eUwXDDgb.RzBzJCkWRGUMVplw7tomfIC', 0, 1, '2022-01-09 22:10:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`markno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `markno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
