-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 09:16 AM
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
-- Database: `admindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `concerndb`
--

CREATE TABLE `concerndb` (
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `concern` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `concerndb`
--

INSERT INTO `concerndb` (`name`, `email`, `concern`) VALUES
('asd', 'asd@gmail.com', 'asdasd'),
('Jerome L. Mallari', 'mallarijerome@gmail.com', 'jordanlaki'),
('Jerome L. Mallari', 'mallarijerome@gmail.com', 'majoyjooy'),
('Jerome L. Mallari', 'mallarijerome@gmail.com', 'majoyjooy'),
('hgfyu', 'fufyjfjy@jffyjjf', 'utfuftfjf'),
('Christan Jordan', 'jordan@gmail.com', 'slowwwww'),
('Christan Jordan', 'jordan@gmail.com', 'slowwwww');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ID` int(11) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `header` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `DateTime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ID`, `filename`, `header`, `category`, `DateTime`) VALUES
(1, 'Jerome.jpg', '', '', '2023-05-10 13:14:05.000000'),
(2, 'Gideon_GV101.jpg', '', '', '2023-05-10 13:42:42.000000'),
(4, 'Raw.jpg', '', '', '2023-05-10 13:58:18.000000'),
(5, 'Raw.jpg', 'egciwcggyrechjejcbeljchekwcbrhrebjc;kebcchberjkcbjekjbrckcjewbcjerbjkcbj.cbjjcbf,j45b4jf4bjfbnm4bfnebfmbe5jfjebf', '', '2023-05-10 14:03:16.000000'),
(6, 'TOTE.jpg', 'qweqwe', 'blank', '2023-05-10 14:04:31.000000'),
(7, 's.png', 'Gideon Bading', 'sport', '2023-05-10 14:23:32.000000'),
(8, 'mahal.jpg', 'Ang Ganda Mo Love!', 'showbiz', '2023-05-10 14:39:03.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
