-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2023 at 09:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `picture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`ID`, `name`, `date`, `detail`, `picture`) VALUES
(5, 'Freshmen Leader FYP 2022', 'July 2022 - October 2022', 'Freshmen Leader (FL) is a mentor for Freshmen (the term for first-year students) in the freshman orientation program that takes place before the start of the first semester.', 'https://vinchenamigo.site/fl.webp'),
(7, 'Freshmen Partner FYP 2022', 'October 2022 -present', 'Freshmen Partner (FP) is a mentor for Freshmen during their first year of college (semesters 1 and 2). Being a mentor in helping Freshmen to face the transition period is a role that can optimally develop one\'s potential.', 'https://vinchenamigo.site/fp.webp'),
(8, 'CEO BNCC 34 Region Malang', 'October 2022 - present', 'As the CEO of BNCC Malang, I am responsible for leading the organization in its mission to advance the field of computer science. I am willing to learn all aspects of the organization.', NULL),
(9, 'LnT Front-end trainer', 'October 2022 - present', 'Hello, I am a praetorian on Bina Nusantara Computer Club. A praetorian role is to train members of Bina Nusantara Computer Club in the Learning and Training regular class.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`ID`, `name`, `link`, `detail`, `picture`) VALUES
(1, 'Srgepp', 'https://srgepp.fikriyuwi.com/', 'Make a revolutionary platform that takes the hassle out of managing your todo list! With our cutting-edge AI technology, we’ve created a website to help you stay on top of your tasks like a pro.', 'https://vinchenamigo.site/srgepp.webp'),
(2, 'Monitoring TK', 'https://github.com/baduthutan/monitoring-tk', 'This website has been designed to provide an easy and effective way for kindergarten teachers, parents, and administrators to track and monitor the development of kindergarten students in a safe and secure online environment.', 'https://vinchenamigo.site/tk.webp'),
(3, 'BNCC Hactoberfest 2022', 'https://bncc-malang.github.io/bnccmalang-hacktoberfest2022/', 'In order to facilitate BNCC Malang member to participate in Hacktoberfest 2022, our team made this website. We put it on github, so members could make pull requests.', 'https://vinchenamigo.site/hacto.webp'),
(4, 'Meta Learning', 'https://metalearningbynauvin.000webhostapp.com/', 'This is a website project for LnT Web Development BNCC. This website is using Bootstrap and Blade Templating', 'https://vinchenamigo.site/metal.webp');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('vincent061', '12345678'),
('gustiP001', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
