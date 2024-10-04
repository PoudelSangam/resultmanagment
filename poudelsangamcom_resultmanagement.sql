-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2022 at 10:07 AM
-- Server version: 10.3.32-MariaDB-cll-lve
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poudelsangamcom_resultmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `A_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `A_password`) VALUES
('admin@gmail.com', 'admin'),
('asangampoudel@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chemistry`
--

CREATE TABLE `chemistry` (
  `Chemistry_Id` int(11) NOT NULL,
  `Names` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL,
  `Term` int(11) NOT NULL,
  `Years` int(11) NOT NULL,
  `Class` int(11) NOT NULL,
  `Th_Mark` int(11) NOT NULL,
  `Pr_Mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemistry`
--

INSERT INTO `chemistry` (`Chemistry_Id`, `Names`, `Roll_Number`, `Term`, `Years`, `Class`, `Th_Mark`, `Pr_Mark`) VALUES
(17, 'sangam', 2, 2, 2079, 12, 45, 23),
(20, 'sangam', 2, 1, 2079, 12, 1, 1),
(21, 'sangam', 2, 3, 2079, 12, 20, 20),
(22, 'kabita', 3, 1, 2079, 12, 45, 23),
(23, 'Bhisan', 4, 1, 2079, 12, 50, 15);

-- --------------------------------------------------------

--
-- Table structure for table `class_eight`
--

CREATE TABLE `class_eight` (
  `Class_Eight_Id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_eleven`
--

CREATE TABLE `class_eleven` (
  `Class_Eleven_Id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_five`
--

CREATE TABLE `class_five` (
  `Class_Five_Id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_four`
--

CREATE TABLE `class_four` (
  `Class_Four_Id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_nine`
--

CREATE TABLE `class_nine` (
  `Class_Nine_Id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_one`
--

CREATE TABLE `class_one` (
  `Class_One_Id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_seven`
--

CREATE TABLE `class_seven` (
  `Class_Seven_Id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_six`
--

CREATE TABLE `class_six` (
  `Class_Six_Id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_ten`
--

CREATE TABLE `class_ten` (
  `Class_Ten_Id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_three`
--

CREATE TABLE `class_three` (
  `Class_Three_Id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_twevel`
--

CREATE TABLE `class_twevel` (
  `Class_Twevel_Id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_twevel`
--

INSERT INTO `class_twevel` (`Class_Twevel_Id`, `First_Name`, `Last_Name`, `Roll_Number`) VALUES
(17, 'sangam', 'poudel', 2),
(22, 'kabita', 'poudel', 3),
(25, 'Bhisan', 'Karki', 4);

-- --------------------------------------------------------

--
-- Table structure for table `class_two`
--

CREATE TABLE `class_two` (
  `Class_Two_Id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dccn`
--

CREATE TABLE `dccn` (
  `Dccn_Id` int(11) NOT NULL,
  `Names` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL,
  `Term` int(11) NOT NULL,
  `Years` int(11) NOT NULL,
  `Class` int(11) NOT NULL,
  `Th_Mark` int(11) NOT NULL,
  `Pr_Mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dccn`
--

INSERT INTO `dccn` (`Dccn_Id`, `Names`, `Roll_Number`, `Term`, `Years`, `Class`, `Th_Mark`, `Pr_Mark`) VALUES
(26, 'sangam', 2, 2, 2079, 12, 45, 45),
(29, 'sangam', 2, 1, 2079, 12, 1, 1),
(30, 'sangam', 2, 3, 2079, 12, 20, 20),
(31, 'kabita', 3, 1, 2079, 12, 45, 45),
(32, 'Bhisan', 4, 1, 2079, 12, 25, 25);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `Marks_Id` int(11) NOT NULL,
  `S_Id` int(11) NOT NULL,
  `Math_Id` int(11) NOT NULL,
  `Physic_Id` int(11) NOT NULL,
  `Chemistry_Id` int(11) NOT NULL,
  `Dccn_Id` int(11) NOT NULL,
  `Wdd_Id` int(11) NOT NULL,
  `Nepali_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `math`
--

CREATE TABLE `math` (
  `Math_Id` int(11) NOT NULL,
  `Names` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL,
  `Term` int(11) NOT NULL,
  `Years` int(11) NOT NULL,
  `Class` int(11) NOT NULL,
  `Mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `math`
--

INSERT INTO `math` (`Math_Id`, `Names`, `Roll_Number`, `Term`, `Years`, `Class`, `Mark`) VALUES
(16, 'sangam', 2, 2, 2079, 12, 45),
(17, 'sangam', 2, 1, 2079, 12, 1),
(18, 'sangam', 2, 3, 2079, 12, 20),
(19, 'kabita', 3, 1, 2079, 12, 23),
(20, 'Bhisan', 4, 1, 2079, 12, 98);

-- --------------------------------------------------------

--
-- Table structure for table `nepali`
--

CREATE TABLE `nepali` (
  `Nepali_Id` int(11) NOT NULL,
  `Names` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL,
  `Term` int(11) NOT NULL,
  `Years` int(11) NOT NULL,
  `Class` int(11) NOT NULL,
  `Mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nepali`
--

INSERT INTO `nepali` (`Nepali_Id`, `Names`, `Roll_Number`, `Term`, `Years`, `Class`, `Mark`) VALUES
(17, 'sangam', 2, 2, 2079, 12, 45),
(20, 'sangam', 2, 1, 2079, 12, 1),
(21, 'sangam', 2, 3, 2079, 12, 20),
(22, 'kabita', 3, 1, 2079, 12, 45),
(23, 'Bhisan', 4, 1, 2079, 12, 100);

-- --------------------------------------------------------

--
-- Table structure for table `physic`
--

CREATE TABLE `physic` (
  `Physic_Id` int(11) NOT NULL,
  `Names` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL,
  `Term` int(11) NOT NULL,
  `Years` int(11) NOT NULL,
  `Class` int(11) NOT NULL,
  `Th_Mark` int(11) NOT NULL,
  `Pr_Mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physic`
--

INSERT INTO `physic` (`Physic_Id`, `Names`, `Roll_Number`, `Term`, `Years`, `Class`, `Th_Mark`, `Pr_Mark`) VALUES
(6, 'sangam', 2, 2, 2079, 12, 45, 23),
(9, 'sangam', 2, 1, 2079, 12, 1, 1),
(10, 'sangam', 2, 3, 2079, 12, 20, 20),
(11, 'kabita', 3, 1, 2079, 12, 45, 23),
(12, 'Bhisan', 4, 1, 2079, 12, 8, 20);

-- --------------------------------------------------------

--
-- Table structure for table `sregister`
--

CREATE TABLE `sregister` (
  `S_Id` int(11) NOT NULL,
  `Susername` varchar(50) NOT NULL,
  `Spassword` varchar(50) NOT NULL,
  `Sfirstname` varchar(50) NOT NULL,
  `Slastname` varchar(50) NOT NULL,
  `Sphonenumber` varchar(50) NOT NULL,
  `Semail` varchar(50) NOT NULL,
  `Sclass` varchar(50) NOT NULL,
  `Sroll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sregister`
--

INSERT INTO `sregister` (`S_Id`, `Susername`, `Spassword`, `Sfirstname`, `Slastname`, `Sphonenumber`, `Semail`, `Sclass`, `Sroll`) VALUES
(30, 'admin@gmail.com', 'admin', 'sangam', 'poudel', '9800938405', 'admin@gmail.com', '12', 2),
(36, 'admin@gmail.com', 'admin', 'kabita', 'poudel', '9842117482', 'kabita@gmail.com', '12', 3),
(39, 'Bhisan', '1234', 'Bhisan', 'Karki', '9800938405', 'bhisan@gmail.com', '12', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tregister`
--

CREATE TABLE `tregister` (
  `T_id` int(11) NOT NULL,
  `Tusername` varchar(50) NOT NULL,
  `Tpassword` varchar(50) NOT NULL,
  `Tfirstname` varchar(50) NOT NULL,
  `Tlastname` varchar(50) NOT NULL,
  `Tphonenumber` varchar(50) NOT NULL,
  `Temail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tregister`
--

INSERT INTO `tregister` (`T_id`, `Tusername`, `Tpassword`, `Tfirstname`, `Tlastname`, `Tphonenumber`, `Temail`) VALUES
(7, 'admin@gmail.com', 'admin', 'sangam', 'poudel', '9800938405', 'asngam@gmail.com'),
(8, 'admin@gmail.com', 'admin', 'sangam', 'poudel', '9800938405', 'admin@gmail.com'),
(9, 'Asan', '123', 'Asan', 'Limbu', '9810598855', 'asanlimbu00@gmail.com'),
(10, 'Ram', '123', 'Ram', 'Limbu', '9800988286', 'missanlimbu99@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wdd`
--

CREATE TABLE `wdd` (
  `Wdd_Id` int(11) NOT NULL,
  `Names` varchar(50) NOT NULL,
  `Roll_Number` int(11) NOT NULL,
  `Term` int(11) NOT NULL,
  `Years` int(11) NOT NULL,
  `Class` int(11) NOT NULL,
  `Th_Mark` int(11) NOT NULL,
  `Pr_Mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wdd`
--

INSERT INTO `wdd` (`Wdd_Id`, `Names`, `Roll_Number`, `Term`, `Years`, `Class`, `Th_Mark`, `Pr_Mark`) VALUES
(19, 'sangam', 2, 2, 2079, 12, 45, 45),
(22, 'sangam', 2, 1, 2079, 12, 1, 1),
(23, 'sangam', 2, 3, 2079, 12, 20, 20),
(24, 'kabita', 3, 1, 2079, 12, 45, 23),
(25, 'Bhisan', 4, 1, 2079, 12, 50, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chemistry`
--
ALTER TABLE `chemistry`
  ADD PRIMARY KEY (`Chemistry_Id`);

--
-- Indexes for table `class_eight`
--
ALTER TABLE `class_eight`
  ADD PRIMARY KEY (`Class_Eight_Id`);

--
-- Indexes for table `class_eleven`
--
ALTER TABLE `class_eleven`
  ADD PRIMARY KEY (`Class_Eleven_Id`);

--
-- Indexes for table `class_five`
--
ALTER TABLE `class_five`
  ADD PRIMARY KEY (`Class_Five_Id`);

--
-- Indexes for table `class_four`
--
ALTER TABLE `class_four`
  ADD PRIMARY KEY (`Class_Four_Id`);

--
-- Indexes for table `class_nine`
--
ALTER TABLE `class_nine`
  ADD PRIMARY KEY (`Class_Nine_Id`);

--
-- Indexes for table `class_one`
--
ALTER TABLE `class_one`
  ADD PRIMARY KEY (`Class_One_Id`);

--
-- Indexes for table `class_seven`
--
ALTER TABLE `class_seven`
  ADD PRIMARY KEY (`Class_Seven_Id`);

--
-- Indexes for table `class_six`
--
ALTER TABLE `class_six`
  ADD PRIMARY KEY (`Class_Six_Id`);

--
-- Indexes for table `class_ten`
--
ALTER TABLE `class_ten`
  ADD PRIMARY KEY (`Class_Ten_Id`);

--
-- Indexes for table `class_three`
--
ALTER TABLE `class_three`
  ADD PRIMARY KEY (`Class_Three_Id`);

--
-- Indexes for table `class_twevel`
--
ALTER TABLE `class_twevel`
  ADD PRIMARY KEY (`Class_Twevel_Id`);

--
-- Indexes for table `class_two`
--
ALTER TABLE `class_two`
  ADD PRIMARY KEY (`Class_Two_Id`);

--
-- Indexes for table `dccn`
--
ALTER TABLE `dccn`
  ADD PRIMARY KEY (`Dccn_Id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`Marks_Id`),
  ADD UNIQUE KEY `math` (`Math_Id`),
  ADD UNIQUE KEY `physic` (`Physic_Id`),
  ADD UNIQUE KEY `Chemistry_Id` (`Chemistry_Id`),
  ADD UNIQUE KEY `Dccn_Id` (`Dccn_Id`),
  ADD UNIQUE KEY `Wdd_Id` (`Wdd_Id`),
  ADD UNIQUE KEY `Nepali_Id` (`Nepali_Id`),
  ADD KEY `S_Id` (`S_Id`),
  ADD KEY `Math_Id` (`Math_Id`),
  ADD KEY `Physic_Id` (`Physic_Id`),
  ADD KEY `Chemistry_Id_2` (`Chemistry_Id`),
  ADD KEY `Dccn_Id_2` (`Dccn_Id`),
  ADD KEY `Wdd_Id_2` (`Wdd_Id`),
  ADD KEY `Nepali_Id_2` (`Nepali_Id`);

--
-- Indexes for table `math`
--
ALTER TABLE `math`
  ADD PRIMARY KEY (`Math_Id`);

--
-- Indexes for table `nepali`
--
ALTER TABLE `nepali`
  ADD PRIMARY KEY (`Nepali_Id`);

--
-- Indexes for table `physic`
--
ALTER TABLE `physic`
  ADD PRIMARY KEY (`Physic_Id`);

--
-- Indexes for table `sregister`
--
ALTER TABLE `sregister`
  ADD PRIMARY KEY (`S_Id`);

--
-- Indexes for table `tregister`
--
ALTER TABLE `tregister`
  ADD PRIMARY KEY (`T_id`);

--
-- Indexes for table `wdd`
--
ALTER TABLE `wdd`
  ADD PRIMARY KEY (`Wdd_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chemistry`
--
ALTER TABLE `chemistry`
  MODIFY `Chemistry_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `class_eight`
--
ALTER TABLE `class_eight`
  MODIFY `Class_Eight_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_eleven`
--
ALTER TABLE `class_eleven`
  MODIFY `Class_Eleven_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_five`
--
ALTER TABLE `class_five`
  MODIFY `Class_Five_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_four`
--
ALTER TABLE `class_four`
  MODIFY `Class_Four_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class_nine`
--
ALTER TABLE `class_nine`
  MODIFY `Class_Nine_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_one`
--
ALTER TABLE `class_one`
  MODIFY `Class_One_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `class_seven`
--
ALTER TABLE `class_seven`
  MODIFY `Class_Seven_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_six`
--
ALTER TABLE `class_six`
  MODIFY `Class_Six_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_ten`
--
ALTER TABLE `class_ten`
  MODIFY `Class_Ten_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class_three`
--
ALTER TABLE `class_three`
  MODIFY `Class_Three_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_twevel`
--
ALTER TABLE `class_twevel`
  MODIFY `Class_Twevel_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `class_two`
--
ALTER TABLE `class_two`
  MODIFY `Class_Two_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dccn`
--
ALTER TABLE `dccn`
  MODIFY `Dccn_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `Marks_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `math`
--
ALTER TABLE `math`
  MODIFY `Math_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nepali`
--
ALTER TABLE `nepali`
  MODIFY `Nepali_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `physic`
--
ALTER TABLE `physic`
  MODIFY `Physic_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sregister`
--
ALTER TABLE `sregister`
  MODIFY `S_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tregister`
--
ALTER TABLE `tregister`
  MODIFY `T_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wdd`
--
ALTER TABLE `wdd`
  MODIFY `Wdd_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`Wdd_Id`) REFERENCES `wdd` (`Wdd_Id`),
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`Dccn_Id`) REFERENCES `dccn` (`Dccn_Id`),
  ADD CONSTRAINT `marks_ibfk_3` FOREIGN KEY (`Nepali_Id`) REFERENCES `nepali` (`Nepali_Id`),
  ADD CONSTRAINT `marks_ibfk_4` FOREIGN KEY (`Math_Id`) REFERENCES `math` (`Math_Id`),
  ADD CONSTRAINT `marks_ibfk_5` FOREIGN KEY (`Physic_Id`) REFERENCES `physic` (`Physic_Id`),
  ADD CONSTRAINT `marks_ibfk_6` FOREIGN KEY (`Chemistry_Id`) REFERENCES `chemistry` (`Chemistry_Id`),
  ADD CONSTRAINT `marks_ibfk_7` FOREIGN KEY (`S_Id`) REFERENCES `sregister` (`S_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
