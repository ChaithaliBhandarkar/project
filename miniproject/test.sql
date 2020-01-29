-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 08:37 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `admin_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `admin_name`) VALUES
('iamashacrasta', 'euphoria', 'asha crasta'),
('zyed', '123', 'zyed');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_name` varchar(20) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `total_strength` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `club` varchar(30) NOT NULL,
  `name` varchar(40) NOT NULL,
  `venue` varchar(40) NOT NULL,
  `time` int(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `eventid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`club`, `name`, `venue`, `time`, `date`, `eventid`) VALUES
('Music', '', 'audi 3', 0, '', 26083),
('Speakers', 'ohreally', 'audi 1', 12, '2021-01-29', 43791),
('Music', '', '', 0, '', 89697),
('Music', 'justdoitnow', 'somewhere', 0, '2017-09-26', 91367);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(25) NOT NULL,
  `club` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `club`) VALUES
('kenny', 'Speakers'),
('kenny', 'Dance'),
('kenny', 'Photography'),
('megha', 'Dance'),
('megha', 'Dance'),
('kenny', 'Drama'),
('kenny', 'Speakers'),
('kenny', 'Speakers'),
('kenny', 'Speakers'),
('megha', 'Speakers'),
('megha', 'Music');

-- --------------------------------------------------------

--
-- Table structure for table `registerations`
--

CREATE TABLE `registerations` (
  `rid` int(11) NOT NULL,
  `eventid` int(11) DEFAULT NULL,
  `usn` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerations`
--

INSERT INTO `registerations` (`rid`, `eventid`, `usn`) VALUES
(12, 91367, '123');

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `id` int(11) NOT NULL,
  `timestamp` time DEFAULT NULL,
  `usn` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signups`
--

INSERT INTO `signups` (`id`, `timestamp`, `usn`) VALUES
(1, '13:09:15', '4mt19is015'),
(2, '13:11:41', '651'),
(3, '15:22:41', '4mt17is001'),
(4, '10:50:47', '123'),
(5, '14:57:14', ''),
(6, '16:09:10', '');

-- --------------------------------------------------------

--
-- Table structure for table `studs`
--

CREATE TABLE `studs` (
  `NAME` varchar(20) NOT NULL,
  `USN` varchar(20) NOT NULL,
  `SEMESTER` int(20) NOT NULL,
  `MAIL` varchar(20) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studs`
--

INSERT INTO `studs` (`NAME`, `USN`, `SEMESTER`, `MAIL`, `USERNAME`, `PASSWORD`) VALUES
('', '', 0, '', '', ''),
('zyed', '123', 12, 'qw', 'zyed', '123'),
('megha', '25', 6, 'kammaje', 'megha', '123'),
('shrinivas', '4mt17is001', 5, 'kammaje@gmail.com', 'shrinivas', 'shrini'),
('kenny', '4MT17IS008', 5, 'sebestian@gmail.com', 'kenny', 'kennysebestian'),
('chaithu', '4mt17is011', 5, 'chaithu@gmail.com', 'chaithubhandarkar', 'chaithu'),
('megha', '4MT17IS012', 5, 'megha24@gmail.com', 'meghakammaje25', 'megha25'),
('kammaje', '4mt17is025', 2, 'ohokammaje@gmail.com', 'kammaje', 'kammaje'),
('TestStdent1', '4mt19is015', 8, 'testgmail.com', 'abcd1234', '123'),
('dgnb', '564', 5, 'eth', 'rywh', 'e5yh4'),
('thgr', '584', 4, 'strh', 'weth', '46hjh'),
('ksjbfvhud', '651', 5, 'ksjdgfu', 'ksgdjfu', 'kYEGAfyu'),
('ebfd v', 'zsfv', 5, 'sdv', 'WSR', 'DF');

--
-- Triggers `studs`
--
DELIMITER $$
CREATE TRIGGER `record_signup` AFTER INSERT ON `studs` FOR EACH ROW insert into signups(timestamp,usn)VALUES(NOW(), new.usn)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_name`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_name`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `registerations`
--
ALTER TABLE `registerations`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `eventid` (`eventid`);

--
-- Indexes for table `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studs`
--
ALTER TABLE `studs`
  ADD PRIMARY KEY (`USN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registerations`
--
ALTER TABLE `registerations`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `signups`
--
ALTER TABLE `signups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `registerations`
--
ALTER TABLE `registerations`
  ADD CONSTRAINT `registerations_ibfk_1` FOREIGN KEY (`eventid`) REFERENCES `event` (`eventid`),
  ADD CONSTRAINT `registerations_ibfk_2` FOREIGN KEY (`eventid`) REFERENCES `event` (`eventid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
