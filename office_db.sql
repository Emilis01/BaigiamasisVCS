-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 05:11 PM
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
-- Database: `office_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `eid` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `position` varchar(100) COLLATE utf8_lithuanian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_lithuanian_ci NOT NULL,
  `image` varchar(30) COLLATE utf8_lithuanian_ci NOT NULL,
  `room` varchar(10) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`eid`, `first_name`, `last_name`, `position`, `email`, `image`, `room`) VALUES
(1, 'Petras', 'Petraitis', 'Developer', 'p.p@ofisas.lt', '1.jpg', 'map21'),
(2, 'Tomas', 'Tomaitis', 'Testing Engineer', 't.t@ofisas.lt', '2.jpg', 'map22'),
(3, 'Jonas', 'Jonaitis', 'HR Specialist', 'j.j@ofisas.lt', '3.jpg', 'map23'),
(4, 'Karolis', 'Karolaitis', 'CEO', 'k.k@ofisas.lt', '4.jpg', 'map21'),
(5, 'Vardenis1', 'Pavardenis1', '123', 'email@vcs.com', '17.jpg', 'map21'),
(14, 'Formas', 'La Paprastas', 'Valytojas', 'formas@gmail.com', 'formas_testitas.jpg', ''),
(15, 'Trumpas', 'Valdauskas', 'Prizidentas', 'woop@aaa.lt', 'bicas.jpg', ''),
(16, 'Benjaminas', 'Franklinas', 'Dude', 'bandux@one.lt', '20799441.jpg', 'map22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`) VALUES
(1, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `workplaces`
--

CREATE TABLE `workplaces` (
  `wid` int(11) NOT NULL,
  `coordinates` varchar(2000) COLLATE utf8_lithuanian_ci NOT NULL,
  `floor` int(11) NOT NULL,
  `eid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `workplaces`
--

INSERT INTO `workplaces` (`wid`, `coordinates`, `floor`, `eid`) VALUES
(1, 'TEST', 1, 1),
(2, 'TEST', 1, 2),
(3, 'TEST', 1, 3),
(4, 'TEST', 1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `workplaces`
--
ALTER TABLE `workplaces`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workplaces`
--
ALTER TABLE `workplaces`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
