-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 03:16 PM
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
-- Database: `gcit sports calender`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin register`
--

CREATE TABLE `admin register` (
  `Id` int(11) NOT NULL,
  `Email` text NOT NULL,
  `UserName` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin register`
--

INSERT INTO `admin register` (`Id`, `Email`, `UserName`, `Password`) VALUES
(1, 'karmal882003@gmail.com', 'karmal', '111111111'),
(2, 'karddsdmal882003@gmail.com', 'karmalsd', 'tobden1234'),
(3, 'karmal88gg2003@gmail.com', 'karmalsad', 'tobden1234');

-- --------------------------------------------------------

--
-- Table structure for table `champions`
--

CREATE TABLE `champions` (
  `Id` int(11) NOT NULL,
  `Team Name` text NOT NULL,
  `Type` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `champions`
--

INSERT INTO `champions` (`Id`, `Team Name`, `Type`, `Date`) VALUES
(1, 'IT 1st Year', 'Football', '2022-06-02'),
(2, 'CS 2nd Year', 'Basketball', '2022-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment id` int(11) NOT NULL,
  `UserName` text NOT NULL,
  `Comment` text NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment id`, `UserName`, `Comment`, `Date`, `Time`) VALUES
(1, 'karma', 'time no good', '2022-06-01', '10:59:59'),
(2, 'ngawang', 'can the timing please be changed', '2022-06-01', '14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback id` int(11) NOT NULL,
  `UserName` text NOT NULL,
  `Feedback` text NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback id`, `UserName`, `Feedback`, `Date`, `Time`) VALUES
(1, 'karmal', 'goodthing!!!', '2022-06-01', '19:15:59'),
(3, 'azha', 'all looking good. :(', '2022-06-08', '23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `Match Id` int(11) NOT NULL,
  `Team A` text NOT NULL,
  `Team B` text NOT NULL,
  `Team A Score` int(10) NOT NULL,
  `Team B Score` int(10) NOT NULL,
  `Type` text NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Referee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`Match Id`, `Team A`, `Team B`, `Team A Score`, `Team B Score`, `Type`, `Date`, `Time`, `Referee`) VALUES
(8, 'Cs 1st Year', 'IT 1st Year', 3, 5, 'Football', '2022-06-01', '12:58:00', 'sadasd');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `Id` int(11) NOT NULL,
  `Team A` text NOT NULL,
  `Team B` text NOT NULL,
  `Referee` text NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`Id`, `Team A`, `Team B`, `Referee`, `Date`, `Time`, `Type`) VALUES
(4, 'IT 3rd year', 'IT 2nd Year', 'Kinley wangchuk', '2022-06-23', '16:00:00', 'Football'),
(7, 'Cs 1st Year', 'Cs 3rd Year', 'sangay dorhj', '2022-06-16', '12:00:00', 'Football'),
(10, 'Cs 1st Year', 'IT 3rd Year', 'sangay dorhj', '2022-05-11', '14:31:00', 'Football'),
(11, 'Cs 1st Year', 'Cs 3rd Year', 'sadasd', '2022-06-18', '11:00:00', 'Football'),
(12, 'Cs 1st Year', 'Cs 2nd Year', 'dsadafs', '2022-06-09', '12:00:00', 'Football'),
(13, 'Cs 1st Year', 'IT 1st Year', 'adasas', '2022-06-10', '10:00:00', 'Football');

-- --------------------------------------------------------

--
-- Table structure for table `user register`
--

CREATE TABLE `user register` (
  `Id` int(11) NOT NULL,
  `Email` text NOT NULL,
  `UserName` text NOT NULL,
  `Password` text NOT NULL,
  `JoinDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user register`
--

INSERT INTO `user register` (`Id`, `Email`, `UserName`, `Password`, `JoinDate`) VALUES
(1, 'karmal882003@gmail.com', 'karmal', 'tobden1234', '2022-06-12 23:59:49'),
(2, 'karmal88202203@gmail.com', 'karmalff', 'tobden1234qwe', '2022-06-12 23:59:49'),
(3, 'karmcxcal882003@gmail.com', 'karmalww', 'tobden1234zd', '2022-06-12 23:59:49'),
(4, 'karfdfmal882003@gmail.com', 'karmaldf', 'tobden1234', '2022-06-12 23:59:49'),
(5, 'karmasdsadsaddl882003@gmail.com', 'karmaldsa', 'tobden1234', '2022-06-13 00:00:19'),
(6, 'karmal8820403@gmail.com', 'karmalrer', 'tobden1234', '2022-06-13 06:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `Id` int(11) NOT NULL,
  `ip address` text NOT NULL,
  `visitdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`Id`, `ip address`, `visitdate`) VALUES
(1, '::1', '2022-06-12 23:50:18'),
(2, '::1', '2022-06-12 23:50:28'),
(3, '::1', '2022-06-13 00:00:08'),
(4, '::1', '2022-06-13 00:00:19'),
(5, '::1', '2022-06-13 02:15:53'),
(6, '::1', '2022-06-13 02:19:38'),
(7, '::1', '2022-06-13 02:22:01'),
(8, '::1', '2022-06-13 02:22:07'),
(9, '::1', '2022-06-13 02:22:18'),
(10, '::1', '2022-06-13 03:30:20'),
(11, '::1', '2022-06-13 03:30:27'),
(12, '::1', '2022-06-13 03:35:11'),
(13, '::1', '2022-06-13 04:07:59'),
(14, '::1', '2022-06-13 06:16:55'),
(15, '::1', '2022-06-13 06:18:46'),
(16, '::1', '2022-06-13 06:19:26'),
(17, '::1', '2022-06-13 06:24:34'),
(18, '::1', '2022-06-13 06:24:35'),
(19, '::1', '2022-06-13 06:28:03'),
(20, '::1', '2022-06-13 06:35:37'),
(21, '::1', '2022-06-13 06:37:09'),
(22, '::1', '2022-06-13 06:38:26'),
(23, '::1', '2022-06-13 06:38:34'),
(24, '::1', '2022-06-13 06:39:33'),
(25, '::1', '2022-06-13 06:46:41'),
(26, '::1', '2022-06-13 06:54:11'),
(27, '::1', '2022-06-13 06:54:32'),
(28, '::1', '2022-06-13 13:14:00'),
(29, '::1', '2022-06-13 13:14:41'),
(30, '::1', '2022-06-13 13:15:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin register`
--
ALTER TABLE `admin register`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`) USING HASH,
  ADD UNIQUE KEY `UserName` (`UserName`) USING HASH;

--
-- Indexes for table `champions`
--
ALTER TABLE `champions`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`Match Id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user register`
--
ALTER TABLE `user register`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin register`
--
ALTER TABLE `admin register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `champions`
--
ALTER TABLE `champions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `Match Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user register`
--
ALTER TABLE `user register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
