-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2017 at 07:30 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evil_buster`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhar`
--

CREATE TABLE `aadhar` (
  `aadhar_no` int(11) NOT NULL,
  `dob` date NOT NULL,
  `name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aadhar`
--

INSERT INTO `aadhar` (`aadhar_no`, `dob`, `name`, `father_name`, `gender`) VALUES
(1246172270, '1981-04-20', 'Laxmi Saral', 'Murali Jitendra', 'F'),
(1569937548, '1951-07-21', 'Sanjiv Partha', 'Ram Partha', 'M'),
(1842350977, '1977-02-24', 'Riya Aseem', 'Pravin Aseem', 'F'),
(2049478167, '1984-05-28', 'Anit Nishant', 'Gautam Nishant', 'M'),
(2068928507, '1967-01-20', 'Neelam Govind', 'Ravindra Govind', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `bank_acc`
--

CREATE TABLE `bank_acc` (
  `acc_no` int(11) NOT NULL,
  `ifsc` varchar(20) NOT NULL,
  `ngo_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_acc`
--

INSERT INTO `bank_acc` (`acc_no`, `ifsc`, `ngo_no`) VALUES
(77667966, 'Q8LA7FAY', 1),
(83607403, 'UP5GLG7Y', 2),
(94325661, 'XZ2ZAV72', 3);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `acc_no` int(11) NOT NULL,
  `user_no` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `transaction_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`acc_no`, `user_no`, `amount`, `transaction_no`) VALUES
(83607403, 1569937548, 50000, 125505798),
(77667966, NULL, 700, 595826438),
(94325661, 616074627, 2500, 763150029);

-- --------------------------------------------------------

--
-- Table structure for table `evils`
--

CREATE TABLE `evils` (
  `evil_no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evils`
--

INSERT INTO `evils` (`evil_no`, `name`) VALUES
(1, 'Child Labor'),
(2, 'Female Foeticide'),
(3, 'Dowry');

-- --------------------------------------------------------

--
-- Table structure for table `evil_ngo`
--

CREATE TABLE `evil_ngo` (
  `evil_no` int(11) NOT NULL,
  `ngo_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evil_ngo`
--

INSERT INTO `evil_ngo` (`evil_no`, `ngo_no`) VALUES
(1, 1),
(3, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `evil_no` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `info_no` int(11) NOT NULL,
  `aadhar_no` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `ngo_no` int(11) NOT NULL,
  `ngo_name` varchar(40) NOT NULL,
  `ngo_add` varchar(50) NOT NULL,
  `ngo_head` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`ngo_no`, `ngo_name`, `ngo_add`, `ngo_head`) VALUES
(1, 'Childcare', 'Ajmer, Rajasthan', 'Indra Aseem'),
(2, 'Anti Dowry Force', 'Kanpur, UP', 'Chetan Mukesh'),
(3, 'Anti Foeticide', 'Gurgaon, Haryana', 'Narayan Anish');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_contact`
--

CREATE TABLE `ngo_contact` (
  `ngo_no` int(11) NOT NULL,
  `ngo_email` varchar(40) NOT NULL,
  `ngo_phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo_contact`
--

INSERT INTO `ngo_contact` (`ngo_no`, `ngo_email`, `ngo_phone`) VALUES
(1, 'o384078@mvrht.com', 889032115),
(2, 'gna234@mvrht.com', 778666432),
(3, 'rnud5@mvrht.com', 849853531);

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `aadhar_no` int(11) NOT NULL,
  `evil_no` int(11) NOT NULL,
  `suggestion_text` varchar(300) NOT NULL,
  `suggestion_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`aadhar_no`, `evil_no`, `suggestion_text`, `suggestion_no`) VALUES
(1246172270, 3, 'Some random text here...', 1),
(2068928507, 1, 'More random text...', 2),
(2049478167, 2, 'Work effectively please...', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `aadhar_no` int(11) NOT NULL,
  `user_password` varchar(16) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`aadhar_no`, `user_password`, `user_email`, `is_admin`) VALUES
(1842350977, '3pqk4d1h', 'mona@mvrht.com', 0),
(1569937548, 'dgzce4bu', 'papakipari@mvrht.com', 0),
(1246172270, 'ozhd7ypv', 'ramukaka@mvrht.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aadhar`
--
ALTER TABLE `aadhar`
  ADD PRIMARY KEY (`aadhar_no`);

--
-- Indexes for table `bank_acc`
--
ALTER TABLE `bank_acc`
  ADD PRIMARY KEY (`acc_no`),
  ADD KEY `ngo_no` (`ngo_no`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`transaction_no`),
  ADD KEY `acc_no` (`acc_no`);

--
-- Indexes for table `evils`
--
ALTER TABLE `evils`
  ADD PRIMARY KEY (`evil_no`);

--
-- Indexes for table `evil_ngo`
--
ALTER TABLE `evil_ngo`
  ADD PRIMARY KEY (`evil_no`,`ngo_no`),
  ADD KEY `ngo_no` (`ngo_no`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`info_no`),
  ADD KEY `aadhar_no` (`aadhar_no`),
  ADD KEY `evil_no` (`evil_no`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`ngo_no`);

--
-- Indexes for table `ngo_contact`
--
ALTER TABLE `ngo_contact`
  ADD PRIMARY KEY (`ngo_no`,`ngo_email`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`suggestion_no`),
  ADD KEY `aadhar_no` (`aadhar_no`),
  ADD KEY `evil_no` (`evil_no`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_email`,`aadhar_no`),
  ADD KEY `aadhar_no` (`aadhar_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evils`
--
ALTER TABLE `evils`
  MODIFY `evil_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `info_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `ngo_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `suggestion_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank_acc`
--
ALTER TABLE `bank_acc`
  ADD CONSTRAINT `bank_acc_ibfk_1` FOREIGN KEY (`ngo_no`) REFERENCES `ngo` (`ngo_no`);

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`acc_no`) REFERENCES `bank_acc` (`acc_no`);

--
-- Constraints for table `evil_ngo`
--
ALTER TABLE `evil_ngo`
  ADD CONSTRAINT `evil_ngo_ibfk_1` FOREIGN KEY (`evil_no`) REFERENCES `evils` (`evil_no`),
  ADD CONSTRAINT `evil_ngo_ibfk_2` FOREIGN KEY (`ngo_no`) REFERENCES `ngo` (`ngo_no`);

--
-- Constraints for table `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`aadhar_no`) REFERENCES `user_info` (`aadhar_no`),
  ADD CONSTRAINT `info_ibfk_2` FOREIGN KEY (`evil_no`) REFERENCES `evils` (`evil_no`);

--
-- Constraints for table `ngo_contact`
--
ALTER TABLE `ngo_contact`
  ADD CONSTRAINT `ngo_contact_ibfk_1` FOREIGN KEY (`ngo_no`) REFERENCES `ngo` (`ngo_no`);

--
-- Constraints for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD CONSTRAINT `suggestion_ibfk_1` FOREIGN KEY (`aadhar_no`) REFERENCES `aadhar` (`aadhar_no`),
  ADD CONSTRAINT `suggestion_ibfk_2` FOREIGN KEY (`evil_no`) REFERENCES `evils` (`evil_no`);

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`aadhar_no`) REFERENCES `aadhar` (`aadhar_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
