-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.2
-- Generation Time: Mar 19, 2018 at 12:49 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `placements`
--

CREATE TABLE `placements` (
  `Placements_ID` int(255) NOT NULL,
  `Placement` varchar(250) NOT NULL,
  `Location` varchar(250) NOT NULL,
  `Salary` varchar(20) NOT NULL,
  `Minimum-Degree` varchar(50) NOT NULL,
  `Closing Date` date NOT NULL,
  `Duration` varchar(200) NOT NULL,
  `Link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placements`
--

INSERT INTO `placements` (`Placements_ID`, `Placement`, `Location`, `Salary`, `Minimum-Degree`, `Closing Date`, `Duration`, `Link`) VALUES
(1, 'Computing/IT - Industrial Placement', 'London', 'Competitive', '2:1', '2018-03-31', '12 Months', '<a href=\"https://www.gradcracker.com/hub/474/capacitas-ltd/work-placement-internship/24087/computing-it-industrial-placement\">Link to Placement</a>'),
(6, 'poo', 'poo', 'poo', 'poo', '2018-03-09', 'po', 'po'),
(7, 'zz', 'zz', 'zz', 'zz', '2018-03-08', 'zz', 'zz');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `Role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `Role`) VALUES
(1, 'Doggy', '81dc9bdb52d04dc20036dbd8313ed055', 'dog@hotmail.com', 'Student'),
(2, 'jhanzeb', 'fe022e4f9e99bb336506602717477779', 'jhanzeb@hotmail.com', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `placements`
--
ALTER TABLE `placements`
  ADD PRIMARY KEY (`Placements_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `placements`
--
ALTER TABLE `placements`
  MODIFY `Placements_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
