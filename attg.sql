-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2024 at 09:16 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attg`
--
CREATE DATABASE IF NOT EXISTS `attg` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `attg`;

-- --------------------------------------------------------

--
-- Table structure for table `allotment`
--

CREATE TABLE IF NOT EXISTS `allotment` (
  `th` varchar(35) NOT NULL,
  `pra` varchar(35) NOT NULL,
  `cr` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allotment`
--

INSERT INTO `allotment` (`th`, `pra`, `cr`) VALUES
('Java', 'Java', 'CR-1');

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE IF NOT EXISTS `classroom` (
  `cname` varchar(20) NOT NULL,
  `bname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`cname`, `bname`) VALUES
('CR-1', 'SOT');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `fn` varchar(50) NOT NULL,
  `fno` bigint(20) NOT NULL,
  `fdg` varchar(20) NOT NULL,
  `fcno` bigint(20) NOT NULL,
  `fmail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fn`, `fno`, `fdg`, `fcno`, `fmail`) VALUES
('Neeshu', 5, 'Professor', 7391824650, 'n@gmail.com'),
('ABC', 6, 'Assistant professor', 9173286450, 'a@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `sname` varchar(35) NOT NULL,
  `scode` varchar(10) NOT NULL,
  `ctype` varchar(20) NOT NULL,
  `sem` bigint(20) NOT NULL,
  `dept` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sname`, `scode`, `ctype`, `sem`, `dept`) VALUES
('Java', '00002', 'Lab', 3, 'CSE'),
('Java', '00002', 'Lab', 3, 'CSE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
