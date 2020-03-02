-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 01:07 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bID` int(11) NOT NULL,
  `bookName` varchar(200) NOT NULL,
  `bookPrice` int(7) NOT NULL,
  `Quantity` int(7) NOT NULL,
  `bookImage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bID`, `bookName`, `bookPrice`, `Quantity`, `bookImage`) VALUES
(1, 'ALL THE LIGHT WE CANNOT SEE: A NOVEL', 20, 25, 'b1.jpg'),
(2, 'SAPIENS: A BRIEF HISTORY OF HUMANKIND', 25, 15, 'b2.jpg'),
(3, 'MILK AND HONEY', 15, 19, 'b3.jpg'),
(4, 'EDUCATED', 20, 40, 'b4.jpg'),
(5, 'STATION ELEVEN', 30, 40, 'b5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `borders`
--

CREATE TABLE `borders` (
  `oID` int(11) NOT NULL,
  `bID` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `MethodOfPayment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borders`
--

INSERT INTO `borders` (`oID`, `bID`, `FirstName`, `LastName`, `MethodOfPayment`) VALUES
(10, 1, 'vishwa', 'Wani', 'Cash On Deli'),
(11, 2, 'Ranjan', 'Patel', 'Master Card'),
(12, 3, 'Simohi', 'Wani', 'Cash On Deli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bID`);

--
-- Indexes for table `borders`
--
ALTER TABLE `borders`
  ADD PRIMARY KEY (`oID`),
  ADD KEY `fk_bID` (`bID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `borders`
--
ALTER TABLE `borders`
  MODIFY `oID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borders`
--
ALTER TABLE `borders`
  ADD CONSTRAINT `fk_bID` FOREIGN KEY (`bID`) REFERENCES `books` (`bID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
