-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 05:37 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sched`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `Account_ID` int(11) NOT NULL,
  `Employee_ID` int(11) NOT NULL,
  `Acc_Uname` varchar(50) NOT NULL,
  `Acc_Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Account_ID`, `Employee_ID`, `Acc_Uname`, `Acc_Pass`) VALUES
(1, 2122, 'marserrano', '1234'),
(3, 123, 'marjaygab', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_ID` int(11) NOT NULL,
  `Emp_FN` varchar(30) NOT NULL,
  `Emp_LN` varchar(30) NOT NULL,
  `Emp_Address` varchar(50) NOT NULL,
  `Emp_Age` int(11) NOT NULL,
  `Emp_Department` varchar(30) NOT NULL,
  `Emp_Email` varchar(30) NOT NULL,
  `Emp_Gender` varchar(30) NOT NULL,
  `Emp_CNumber` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_ID`, `Emp_FN`, `Emp_LN`, `Emp_Address`, `Emp_Age`, `Emp_Department`, `Emp_Email`, `Emp_Gender`, `Emp_CNumber`) VALUES
(21221, 'Mar', 'Serrano', 'Sampaguita', 20, 'CpE', 'mar@gmail.com', 'Male', '0'),
(123, 'Marjay Gabriel', 'Tapay', '085, Maraouy, Lipa City', 19, 'Technical', 'tapaymarjay@gmail.com', 'Male', '639153591108');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sched`
--

CREATE TABLE `tbl_sched` (
  `id` int(11) NOT NULL,
  `room_id` varchar(5) NOT NULL,
  `emp_id` varchar(5) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `date` date NOT NULL,
  `u_code` varchar(5) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sched`
--

INSERT INTO `tbl_sched` (`id`, `room_id`, `emp_id`, `time_in`, `time_out`, `date`, `u_code`, `Status`) VALUES
(1, '503', '2343', '09:00:00', '12:00:00', '2018-03-22', '2365T', 0),
(2, '2321', '1233', '07:30:00', '20:00:00', '2018-03-20', '21S56', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Account_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `Account_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
