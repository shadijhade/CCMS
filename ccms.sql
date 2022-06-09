-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 06:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccms`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `ID` int(20) NOT NULL,
  `Full_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Username` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Password` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`ID`, `Full_Name`, `Username`, `Password`) VALUES
(1, 'Ahmad Ali', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `ID` int(20) NOT NULL,
  `Patient_ID` int(20) NOT NULL,
  `Clinic_ID` int(20) NOT NULL,
  `Doctor_ID` int(20) NOT NULL,
  `Date` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Time` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(20) NOT NULL,
  `Category_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `Category_Name`) VALUES
(1, 'Test Category 1'),
(2, 'Test 2');

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `ID` int(20) NOT NULL,
  `Category_ID` int(11) NOT NULL,
  `Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Phone_Number` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Address` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Status` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Username` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Password` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `ID` int(20) NOT NULL,
  `Clinic_ID` int(20) NOT NULL,
  `Full_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Email_Address` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Phone_Number` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Major` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Years_of_Experience` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Password` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `free_appointments`
--

CREATE TABLE `free_appointments` (
  `ID` int(20) NOT NULL,
  `Full_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Phone_Number` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Clinic_ID` int(20) NOT NULL,
  `Doctor_ID` int(20) NOT NULL,
  `Date` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Time` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `ID` int(20) NOT NULL,
  `Title` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Description` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Image` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `ID` int(20) NOT NULL,
  `Full_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Email_Address` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Phone_Number` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Gender` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Password` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Type` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patients_testimonials`
--

CREATE TABLE `patients_testimonials` (
  `ID` int(20) NOT NULL,
  `Patient_ID` int(20) NOT NULL,
  `Text` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `ID` int(20) NOT NULL,
  `Clinic_ID` int(20) NOT NULL,
  `Doctor_ID` int(20) NOT NULL,
  `Title` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Image` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Patient_ID` (`Patient_ID`,`Clinic_ID`,`Doctor_ID`),
  ADD KEY `Doctor_ID` (`Doctor_ID`),
  ADD KEY `Clinic_ID` (`Clinic_ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Category_ID` (`Category_ID`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Clinic_ID` (`Clinic_ID`);

--
-- Indexes for table `free_appointments`
--
ALTER TABLE `free_appointments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Clinic_ID` (`Clinic_ID`,`Doctor_ID`),
  ADD KEY `Doctor_ID` (`Doctor_ID`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patients_testimonials`
--
ALTER TABLE `patients_testimonials`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Patient_ID` (`Patient_ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Clinic_ID` (`Clinic_ID`,`Doctor_ID`),
  ADD KEY `Doctor_ID` (`Doctor_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `free_appointments`
--
ALTER TABLE `free_appointments`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients_testimonials`
--
ALTER TABLE `patients_testimonials`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`Doctor_ID`) REFERENCES `doctors` (`ID`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`Clinic_ID`) REFERENCES `clinics` (`ID`),
  ADD CONSTRAINT `appointments_ibfk_3` FOREIGN KEY (`Patient_ID`) REFERENCES `patients` (`ID`);

--
-- Constraints for table `clinics`
--
ALTER TABLE `clinics`
  ADD CONSTRAINT `clinics_ibfk_1` FOREIGN KEY (`Category_ID`) REFERENCES `categories` (`ID`);

--
-- Constraints for table `free_appointments`
--
ALTER TABLE `free_appointments`
  ADD CONSTRAINT `free_appointments_ibfk_1` FOREIGN KEY (`Clinic_ID`) REFERENCES `clinics` (`ID`),
  ADD CONSTRAINT `free_appointments_ibfk_2` FOREIGN KEY (`Doctor_ID`) REFERENCES `doctors` (`ID`);

--
-- Constraints for table `patients_testimonials`
--
ALTER TABLE `patients_testimonials`
  ADD CONSTRAINT `patients_testimonials_ibfk_1` FOREIGN KEY (`Patient_ID`) REFERENCES `patients` (`ID`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`Doctor_ID`) REFERENCES `doctors` (`ID`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`Clinic_ID`) REFERENCES `clinics` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
