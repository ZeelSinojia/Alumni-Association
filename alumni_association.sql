-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 09:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni association`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `enrollment` bigint(13) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`enrollment`, `username`, `Year`) VALUES
(150570107099, 'Dhiraj Patel', '2015-2019'),
(130570107002, 'Naytri Jain', '2013-2017');

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `enrollment` bigint(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`enrollment`, `username`, `question`, `answer`) VALUES
(170570107036, 'Prince Ginoya', 'what is javascript', 'JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions.'),
(170570107099, 'Zeel Sinojia', 'what does alumni association do?', 'The purpose of an association is to foster a spirit of loyalty and to promote the general welfare of your organization. Alumni associations exist to support the parent organization\'s goals, and to strengthen the ties between alumni, the community, and the parent organization.'),
(170570107106, 'Reedham Tanti', 'what is web technology', 'Web technology refers to the means by which computers communicate with each other using markup languages and multimedia packages. It gives us a way to interact with hosted information, like websites. Web technology involves the use of hypertext markup language (HTML) and cascading style sheets (CSS).');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `enrollment` bigint(13) NOT NULL,
  `username` varchar(50) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `hostname` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`enrollment`, `username`, `eventname`, `hostname`, `date`) VALUES
(170570107099, 'Zeel Sinojia', 'Android Workshop', 'Dr. Sachin Mehta', '0000-00-00'),
(170570107106, 'Reedham Tanti', 'Web Technology seminar', 'Prof.Rucha Dave', '0000-00-00'),
(170570107036, 'Prince Ginoya', 'DOTNET wrokshop', 'Prof.Hiren Kotadiya', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `enrollment` bigint(12) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`enrollment`, `fullname`, `email`, `password`) VALUES
(130570107002, 'Nayatri Jain', 'naytri@yahoo.com', 'naytri'),
(150570107099, 'Dhiraj Patel', 'dhirajpatel@gmail.com', 'dhiraj'),
(170570107036, 'Prince Ginoya', 'princeginoya@gmail.com', 'prince'),
(170570107099, 'Zeel Sinojia', 'sinojia.zeel2@gmail.com', 'zeel2599@'),
(170570107106, 'Reedham Tanti', 'reedhamtanti@gmail.com', 'reedham');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD KEY `enrollment` (`enrollment`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`enrollment`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD KEY `enrollment` (`enrollment`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`enrollment`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`enrollment`) REFERENCES `userdetails` (`enrollment`);

--
-- Constraints for table `discussion`
--
ALTER TABLE `discussion`
  ADD CONSTRAINT `discussion_ibfk_1` FOREIGN KEY (`enrollment`) REFERENCES `userdetails` (`enrollment`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`enrollment`) REFERENCES `userdetails` (`enrollment`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
