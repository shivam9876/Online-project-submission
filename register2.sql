-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 06:19 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `password`) VALUES
('alka', 'alka');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`) VALUES
(1, 'sds', 'shivambisht2015@gmail.com', '429c69df8c61a391519e9e37cf84b738'),
(2, 'shivam', 'shivambisht215@gmail.com', '3ae9d8799d1bb5e201e5704293bb54ef'),
(3, 'alka', 'alka2@gmail.com', 'b31aca9874a6c0f36fe19115f8ce777c');

-- --------------------------------------------------------

--
-- Table structure for table `uplode`
--

CREATE TABLE `uplode` (
  `id` int(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uplode`
--

INSERT INTO `uplode` (`id`, `file`, `text`, `course`, `sem`, `email`, `userid`) VALUES
(1, '4.jpg', 'asa', 'BBA', '3th Semester', 'shivambisht2015@gmail.com', '3'),
(2, '3.jpg', 'sdsd', 'MCA', '1th Semester', 'shivambisht2015@gmail.com', '3'),
(3, 'blog app.jpg', 'sumit', 'MSc.it', '4th Semester', 'shivambisht2015@gmail.com', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uplode`
--
ALTER TABLE `uplode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uplode`
--
ALTER TABLE `uplode`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
