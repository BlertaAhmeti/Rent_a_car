-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2020 at 06:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_a_car_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `automjetet`
--

CREATE TABLE `automjetet` (
  `automjetiID` int(11) NOT NULL,
  `kategoriaID` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `nr_regjistrimit` varchar(50) DEFAULT NULL,
  `pershkrimi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `automjetet`
--

INSERT INTO `automjetet` (`automjetiID`, `kategoriaID`, `emri`, `nr_regjistrimit`, `pershkrimi`) VALUES
(1, 1, 'Mercedes', 'RKS-111', 'peershjrimi per mercedes'),
(2, 2, 'BMW', 'RKS-222', 'peershjrimi per bmw'),
(3, 3, 'Maybach', 'RKS-333', 'peershjrimi per maybach');

-- --------------------------------------------------------

--
-- Table structure for table `huat`
--

CREATE TABLE `huat` (
  `huajaID` int(11) NOT NULL,
  `automjetiID` int(11) NOT NULL,
  `klientID` int(11) NOT NULL,
  `datamarrjes` date DEFAULT NULL,
  `datakthimit` date DEFAULT NULL,
  `komentet` text DEFAULT NULL,
  `kostoja` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `huat`
--

INSERT INTO `huat` (`huajaID`, `automjetiID`, `klientID`, `datamarrjes`, `datakthimit`, `komentet`, `kostoja`) VALUES
(1, 1, 2, '2020-03-16', '2020-03-26', 'text', '70.00'),
(3, 1, 3, '2020-03-06', '2020-03-20', 'text', '170.00'),
(4, 2, 2, '2020-04-16', '2020-04-26', 'text', '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `kategorite`
--

CREATE TABLE `kategorite` (
  `kategoriaID` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `pershkrimi` text DEFAULT NULL,
  `kostoja` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorite`
--

INSERT INTO `kategorite` (`kategoriaID`, `emri`, `pershkrimi`, `kostoja`) VALUES
(1, 'A*', 'bbbb bbbb bbbb bbbb bbbb b b', '30.00'),
(2, 'A1', 'Motocikleta e lehte qnnuk kalon me fuqi 11kf', '10.00'),
(3, 'A', 'Motocikleta e lehte qnnuk kalon me fuqi 15 kf', '15.00'),
(4, 'B', 'rrjete motorrike', '20.00'),
(5, 'B1', 'Tricikleta e lehte qnnuk kalon me fuqi 11kf', '25.00'),
(6, 'B+E', 'Kombbinime e lehte qnnuk kalon me fuqi 11kf', '30.00'),
(7, 'AÜ', 'D A DB WB SYBDHND ', '40.00'),
(8, 'AA^', 'AAAAAAAAAA', '40.00');

-- --------------------------------------------------------

--
-- Table structure for table `klientet`
--

CREATE TABLE `klientet` (
  `klientID` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `mbiemri` varchar(50) NOT NULL,
  `emaili` varchar(50) NOT NULL,
  `telefoni` varchar(50) NOT NULL,
  `nr_personal` bigint(20) DEFAULT NULL,
  `adresa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klientet`
--

INSERT INTO `klientet` (`klientID`, `emri`, `mbiemri`, `emaili`, `telefoni`, `nr_personal`, `adresa`) VALUES
(2, 'Dea', 'Gashi', 'dea@gmail.com', '44333444', 222222, 'Gjilan'),
(3, 'Bler', 'Ahm', 'bbb@gmail.com', '44555666', 333333, 'Prishtine'),
(4, 'Trinnga', 'Ahmeti', 't@gmail.com', '044111222', 123456, 'Gjilan'),
(5, 'Dea', 'Lushaj', 'dea@gmail.com', '112233', 1122334455, 'Gjilan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automjetet`
--
ALTER TABLE `automjetet`
  ADD PRIMARY KEY (`automjetiID`),
  ADD KEY `kategoriaID` (`kategoriaID`);

--
-- Indexes for table `huat`
--
ALTER TABLE `huat`
  ADD PRIMARY KEY (`huajaID`),
  ADD KEY `automjetiID` (`automjetiID`),
  ADD KEY `klientID` (`klientID`);

--
-- Indexes for table `kategorite`
--
ALTER TABLE `kategorite`
  ADD PRIMARY KEY (`kategoriaID`);

--
-- Indexes for table `klientet`
--
ALTER TABLE `klientet`
  ADD PRIMARY KEY (`klientID`),
  ADD UNIQUE KEY `nr_personal` (`nr_personal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `automjetet`
--
ALTER TABLE `automjetet`
  MODIFY `automjetiID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `huat`
--
ALTER TABLE `huat`
  MODIFY `huajaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategorite`
--
ALTER TABLE `kategorite`
  MODIFY `kategoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `klientet`
--
ALTER TABLE `klientet`
  MODIFY `klientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `automjetet`
--
ALTER TABLE `automjetet`
  ADD CONSTRAINT `automjetet_ibfk_1` FOREIGN KEY (`kategoriaID`) REFERENCES `kategorite` (`kategoriaID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `huat`
--
ALTER TABLE `huat`
  ADD CONSTRAINT `huat_ibfk_1` FOREIGN KEY (`automjetiID`) REFERENCES `automjetet` (`automjetiID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `huat_ibfk_2` FOREIGN KEY (`klientID`) REFERENCES `klientet` (`klientID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
