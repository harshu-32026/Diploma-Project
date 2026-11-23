-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 01:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin1', 'harshu_20');

-- --------------------------------------------------------

--
-- Table structure for table `karjakhatavani`
--

CREATE TABLE `karjakhatavani` (
  `srnum` int(11) NOT NULL,
  `date` date NOT NULL,
  `shares` int(255) NOT NULL,
  `vargani` int(255) NOT NULL,
  `dirkar` int(255) NOT NULL,
  `alkar` int(255) NOT NULL,
  `dirhaf` int(225) NOT NULL,
  `alhaf` int(255) NOT NULL,
  `dirvaj` int(255) NOT NULL,
  `alvaj` int(255) NOT NULL,
  `vasuli` int(255) NOT NULL,
  `dirbaki` int(255) NOT NULL,
  `albaki` int(255) NOT NULL,
  `total_loan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karjakhatavani`
--

INSERT INTO `karjakhatavani` (`srnum`, `date`, `shares`, `vargani`, `dirkar`, `alkar`, `dirhaf`, `alhaf`, `dirvaj`, `alvaj`, `vasuli`, `dirbaki`, `albaki`, `total_loan`) VALUES
(1, '2023-04-01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '2023-04-27', 11, 646, 65, 887, 4695, 23, 232, 22612, 596, 262, 59, 995),
(1, '2023-04-13', 455, 546, 466, 55, 46, 23, 5164, 22612, 6555, 859, 561, 3513),
(1, '2023-04-23', 68, 516, 7897, 22, 332, 22, 62526, 52656, 554, 5151, 21656, 54546),
(2, '2023-04-01', 68, 2223, 664, 5466, 666666, 54545, 546, 884, 546, 656, 555, 5557456),
(2, '2023-04-30', 11, 565, 8566, 758, 4444, 62, 5164, 22612, 6555, 156, 561, 2595),
(3, '2023-04-27', 555, 5654, 5665, 484, 564, 56, 515, 5195, 554, 558, 5484, 848),
(3, '2023-04-23', 121, 16661, 94949, 5959, 51, 565959, 555, 5266, 55656, 2266, 66, 26),
(1, '2023-03-30', 2, 65, 112, 525, 555, 555, 565, 333, 1185, 222, 222, 2212),
(1, '2023-03-30', 2, 65, 112, 525, 555, 555, 565, 333, 1185, 222, 222, 2212),
(1, '2023-03-22', 68, 156, 7897, 22, 6566, 58665, 4565, 566, 554, 859, 59, 54546);

-- --------------------------------------------------------

--
-- Table structure for table `kblist`
--

CREATE TABLE `kblist` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobileno` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `totalloan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kblist`
--

INSERT INTO `kblist` (`sno`, `name`, `mobileno`, `email`, `totalloan`) VALUES
(1, 'ram', 1020304050, 'bh@gmail.com', 0),
(2, 'harshada', 2147483647, 'dxcdc@gmail.com', 995),
(3, 'vaishnavi', 1234567890, 'mgvmgv@gmail.com', 654565);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `srno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `addressf` varchar(255) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `adhaarno` bigint(16) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `cpassword` text NOT NULL,
  `guarentorf` varchar(100) NOT NULL,
  `addf` varchar(255) NOT NULL,
  `guarentorsec` varchar(100) NOT NULL,
  `addsec` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`srno`, `name`, `addressf`, `phoneno`, `adhaarno`, `username`, `password`, `cpassword`, `guarentorf`, `addf`, `guarentorsec`, `addsec`) VALUES
(1, 'ram', 'dfhg', 1020304050, 2147483647, 'ubehife', '123', '123', 'ram', 'nashik', 'sham', 'road'),
(2, 'harshada', 'malegaon', 1234567892, 101020203030, 'userh', '1245', '1245', 'vpn', 'dwarka', 'wpn', 'nasik'),
(3, 'vaishnavi', 'vani', 1234567890, 123412341234, 'userv', '1230', '1230', 'ram', 'vani', 'sham', 'nashik'),
(4, 'ruchi', 'nashik', 1234567892, 525154545151, 'ruchi1', '152', '152', 'ram', 'eerfewf', 'sans', 'nashik'),
(5, 'sans', 'dwarka', 1234567891, 707010102020, 'users', '4569', '4569', 'abc', 'dwarka', 'xyz', 'vani'),
(6, 'sam', 'kalwan', 7972440447, 603020102030, 'sam1', '123456', '123456', 'sham', 'hkhjj', 'siya', 'malegaon');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(1, 0, 0, 0, 536235, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karjakhatavani`
--
ALTER TABLE `karjakhatavani`
  ADD KEY `karjakhatavani` (`srnum`);

--
-- Indexes for table `kblist`
--
ALTER TABLE `kblist`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`srno`,`adhaarno`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kblist`
--
ALTER TABLE `kblist`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karjakhatavani`
--
ALTER TABLE `karjakhatavani`
  ADD CONSTRAINT `karjakhatavani` FOREIGN KEY (`srnum`) REFERENCES `project` (`srno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
