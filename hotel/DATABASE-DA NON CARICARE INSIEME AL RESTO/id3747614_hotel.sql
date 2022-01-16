-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2017 at 11:41 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3747614_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `FName` text,
  `LName` text,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` text,
  `DoB` date DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(16) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL,
  `Total` text CHARACTER SET utf8 COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `FName`, `LName`, `Email`, `Phone`, `DoB`, `TRoom`, `Bed`, `NRoom`, `cin`, `cout`, `stat`, `nodays`, `Total`) VALUES
(48, 'dsbfyubdsnui', 'bdiubfdhsjnbi', 'ubdjhfbdhsjfbdsi@m.com', 'sdbaudbnik', '1999-12-23', 'Superior Room', 'Double', '1', '2017-11-24', '2017-11-29', 'Not Conform', 5, '0'),
(49, 'Etis', 'letis', 'lolcol@yopmail.com', 'sabdnujasnk', '1999-12-31', 'Guest House', 'Single', '1', '2017-11-24', '2017-11-29', 'Not Conform', 5, '0'),
(50, 'Andrea', 'Sammitto', 'poliziadellostato@gov.it', 'dhfjsn', '1999-12-16', 'Superior Room', 'Double', '2', '2017-11-24', '2017-11-30', 'Not Conform', 6, '0'),
(52, 'sahduiahdiu', 'difhdsihsi', 'lolcox@yopmail.com', 'dnsbfjdsnbk', '1999-12-16', 'Superior Room', 'Single', '2', '2017-11-24', '2017-11-30', 'Not Conform', 6, '0'),
(54, 'bjjnij', 'bdjsfdskj', 'dsnfjkdnfkj@m.com', 'bndfjnsdkjds', '1999-12-29', 'Superior Room', 'Double', '3', '2017-11-24', '2017-11-26', 'Prenotato', 2, '€300'),
(55, 'Etis', 'Peza', 'andrea.sammito@hotmail.it', '283029830', '1999-12-10', 'Superior Room', 'Single', '2', '2017-11-25', '2017-11-26', 'Prenotato', 1, '€100'),
(56, 'lol', 'Lol', 'sbdba@m.com', '3438', '1999-12-09', 'Deluxe Room', 'Single', '1', '2017-12-12', '2017-12-22', 'Prenotato', 10, '€1000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
