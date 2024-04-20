-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2023 at 06:07 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medtour`
--
CREATE DATABASE IF NOT EXISTS `medtour` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `medtour`;

-- --------------------------------------------------------

--
-- Table structure for table `airbookings`
--

CREATE TABLE IF NOT EXISTS `airbookings` (
  `pcode` varchar(15) NOT NULL,
  `paid` varchar(15) NOT NULL,
  `fcode` varchar(15) NOT NULL,
  `tno` varchar(15) NOT NULL,
  `sno` bigint(15) NOT NULL,
  `schdt` date NOT NULL,
  `schtm` time NOT NULL,
  `src` varchar(15) NOT NULL,
  `dest` varchar(15) NOT NULL,
  `faredt` varchar(50) NOT NULL,
  `autphno` bigint(20) NOT NULL,
  KEY `pcode` (`pcode`),
  KEY `paid` (`paid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airbookings`
--

INSERT INTO `airbookings` (`pcode`, `paid`, `fcode`, `tno`, `sno`, `schdt`, `schtm`, `src`, `dest`, `faredt`, `autphno`) VALUES
('P00001', 'P00001', 'F00001', '123456', 789456, '2023-08-11', '00:20:23', 'vadodara', 'london', '15000', 9637410852);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `paid` varchar(15) NOT NULL,
  `finm` varchar(20) NOT NULL,
  `lnm` varchar(20) NOT NULL,
  `addr1` varchar(25) NOT NULL,
  `addr2` varchar(25) NOT NULL,
  `city` varchar(20) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `appdt` date NOT NULL,
  `apptm` time NOT NULL,
  `appstus` varchar(20) NOT NULL,
  PRIMARY KEY (`paid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`paid`, `finm`, `lnm`, `addr1`, `addr2`, `city`, `contactno`, `appdt`, `apptm`, `appstus`) VALUES
('P00001', 'Pankti', 'Parmar', 'C-102 Prayosha Flats', 'B/S Labh Residency', 'Vadodara', 9879527501, '2023-03-15', '14:00:00', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `date` date NOT NULL,
  `bcode` varchar(15) NOT NULL,
  `fnm` varchar(20) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `altno` bigint(20) NOT NULL,
  `email` varchar(15) NOT NULL,
  `relation` varchar(15) NOT NULL,
  `id` bigint(20) NOT NULL,
  `ppltravel` bigint(20) NOT NULL,
  `pcode` varchar(15) NOT NULL,
  `gndr` varchar(15) NOT NULL,
  `tmperiod` bigint(20) NOT NULL,
  `chindate` date NOT NULL,
  `choutdate` date NOT NULL,
  PRIMARY KEY (`bcode`),
  KEY `pcode` (`pcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`date`, `bcode`, `fnm`, `phno`, `altno`, `email`, `relation`, `id`, `ppltravel`, `pcode`, `gndr`, `tmperiod`, `chindate`, `choutdate`) VALUES
('2023-03-14', 'B00001', 'Noopur mandge', 4561237898, 7891234569, 'Noopur@gmail.co', 'Sister', 3006069229507591, 4, 'P00001', 'Female', 6, '2023-03-24', '2023-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(80) NOT NULL,
  `c_phonecode` int(5) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`c_id`, `c_name`, `c_phonecode`) VALUES
(1, 'AFGHANISTAN', 93),
(2, 'INDIA', 91),
(3, 'ISRAEL', 972),
(4, 'AUSTRALIA', 61),
(5, 'BANGLADESH', 880);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `dcode` varchar(6) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `dgndr` varchar(15) NOT NULL,
  `dspec` varchar(50) NOT NULL,
  `dqua` varchar(50) NOT NULL,
  `dexpr` int(11) NOT NULL,
  `drate` varchar(50) NOT NULL,
  `dphone` bigint(20) NOT NULL,
  `dmail` varchar(15) NOT NULL,
  `daddr` varchar(50) NOT NULL,
  `dcfs` int(11) NOT NULL,
  `dabd` varchar(50) NOT NULL,
  `dcst` time NOT NULL,
  PRIMARY KEY (`dcode`),
  KEY `dcode` (`dcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`dcode`, `dname`, `dgndr`, `dspec`, `dqua`, `dexpr`, `drate`, `dphone`, `dmail`, `daddr`, `dcfs`, `dabd`, `dcst`) VALUES
('D11111', 'jhil', 'Male', 'MD', 'MD', 2, '4', 1234567890, 'jhil@gmail.com', 'msu', 1200, 'he is expert in operations', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE IF NOT EXISTS `hospitals` (
  `HCode` varchar(6) NOT NULL,
  `HName` varchar(15) NOT NULL,
  `HAddr` varchar(50) NOT NULL,
  `HCountry` varchar(15) NOT NULL,
  `HCont` bigint(20) NOT NULL,
  `HFac` varchar(255) NOT NULL,
  `HContPName` varchar(15) NOT NULL,
  `HContPer` bigint(20) NOT NULL,
  PRIMARY KEY (`HCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`HCode`, `HName`, `HAddr`, `HCountry`, `HCont`, `HFac`, `HContPName`, `HContPer`) VALUES
('H00001', 'Harsha Hospital', 'A-54 Auro Road', 'India', 4561237890, 'Private Rooms, Cafeteria/Restaurant, Money Exchange', 'Jenish Patel', 4561237890);

-- --------------------------------------------------------

--
-- Table structure for table `hotelbookings`
--

CREATE TABLE IF NOT EXISTS `hotelbookings` (
  `pcode` varchar(15) NOT NULL,
  `paid` varchar(15) NOT NULL,
  `HCode` varchar(15) NOT NULL,
  `bkfrom` date NOT NULL,
  `bkto` date NOT NULL,
  KEY `pcode_3` (`pcode`,`paid`,`HCode`),
  KEY `HCode_2` (`HCode`),
  KEY `paid` (`paid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelbookings`
--

INSERT INTO `hotelbookings` (`pcode`, `paid`, `HCode`, `bkfrom`, `bkto`) VALUES
('P00001', 'P00001', 'H00001', '2023-12-24', '2024-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
  `htcode` varchar(15) NOT NULL,
  `nm` varchar(20) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `rtype` varchar(20) NOT NULL,
  `chrgs` bigint(20) NOT NULL,
  `pcode` varchar(15) NOT NULL,
  `chkout` time NOT NULL,
  PRIMARY KEY (`htcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`htcode`, `nm`, `addr`, `rtype`, `chrgs`, `pcode`, `chkout`) VALUES
('H00001', 'Om Hotels', 'C-102 Om Hotels', 'With AC', 15000, 'P00001', '14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `UType` varchar(15) NOT NULL,
  `UEmail/UName` varchar(15) NOT NULL,
  `UPass` varchar(50) NOT NULL,
  KEY `UEmail/UName` (`UEmail/UName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UType`, `UEmail/UName`, `UPass`) VALUES
('Staff', 'mehul@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `pcode` varchar(6) NOT NULL,
  `hcode` varchar(6) NOT NULL,
  `dcode` varchar(6) NOT NULL,
  `preferences` varchar(20) NOT NULL,
  `pkgdays` int(11) NOT NULL,
  `charges` int(11) NOT NULL,
  `accomodation` varchar(20) NOT NULL,
  PRIMARY KEY (`pcode`),
  KEY `dcode` (`dcode`),
  KEY `hcode` (`hcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pcode`, `hcode`, `dcode`, `preferences`, `pkgdays`, `charges`, `accomodation`) VALUES
('P00001', 'H00001', 'D11111', 'Abroad', 11, 15000, 'With Accomodation');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `paid` varchar(15) NOT NULL,
  `nm` varchar(20) NOT NULL,
  `age` bigint(20) NOT NULL,
  `gndr` varchar(20) NOT NULL,
  `dcode` varchar(15) NOT NULL,
  `ill` varchar(50) NOT NULL,
  `reffby` varchar(50) NOT NULL,
  PRIMARY KEY (`paid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`paid`, `nm`, `age`, `gndr`, `dcode`, `ill`, `reffby`) VALUES
('P00001', 'Pankti Parmar', 18, 'Female', 'D00001', 'Addiction', 'Dr. Amit');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `UType` varchar(5) NOT NULL,
  `UName` varchar(15) NOT NULL,
  `UPass` varchar(50) NOT NULL,
  `Ufname` varchar(50) NOT NULL,
  `UAddr` varchar(50) NOT NULL,
  `UEmail` varchar(50) NOT NULL,
  `UPhone` bigint(20) NOT NULL,
  `USecQue` varchar(50) NOT NULL,
  `USecAns` varchar(50) NOT NULL,
  PRIMARY KEY (`UEmail`),
  KEY `UType` (`UType`),
  KEY `UType_2` (`UType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`UType`, `UName`, `UPass`, `Ufname`, `UAddr`, `UEmail`, `UPhone`, `USecQue`, `USecAns`) VALUES
('Admin', 'aashu_3184', '310804', 'Aastha Yash Patel', 'C-102 Prayosha Flats', 'aashu@gmail.com', 8866081245, 'What is your Zodiac sign', 'virgo'),
('Staff', 'mehulrathva', 'e10adc3949ba59abbe56e057f20f883e', 'Mehul Chandrasingh Rathva', 'Jai Ambe Soc', 'mehul@gmail.com', 9879527501, 'What is your favourite movie?', 'Kantara');

-- --------------------------------------------------------

--
-- Table structure for table `speciality`
--

CREATE TABLE IF NOT EXISTS `speciality` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(11) NOT NULL,
  `s_country` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `speciality`
--

INSERT INTO `speciality` (`id`, `s_name`, `s_country`) VALUES
(1, 'cancer', 'india'),
(2, 'cardiology', 'bangladesh'),
(3, 'dental', 'india'),
(4, 'hair treatm', 'afghanistan'),
(5, 'virus', 'australia');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `airbookings`
--
ALTER TABLE `airbookings`
  ADD CONSTRAINT `fk_airbooking` FOREIGN KEY (`pcode`) REFERENCES `packages` (`pcode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_airbookings` FOREIGN KEY (`paid`) REFERENCES `patients` (`paid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fk_packagebooking` FOREIGN KEY (`pcode`) REFERENCES `packages` (`pcode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotelbookings`
--
ALTER TABLE `hotelbookings`
  ADD CONSTRAINT `fkPtId` FOREIGN KEY (`paid`) REFERENCES `patients` (`paid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Hotelbooking` FOREIGN KEY (`HCode`) REFERENCES `hospitals` (`HCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_hotelbookings` FOREIGN KEY (`pcode`) REFERENCES `packages` (`pcode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk_reg` FOREIGN KEY (`UEmail/UName`) REFERENCES `registration` (`UEmail`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `fk_doctors` FOREIGN KEY (`dcode`) REFERENCES `doctors` (`dcode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_hospitals` FOREIGN KEY (`hcode`) REFERENCES `hospitals` (`HCode`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
