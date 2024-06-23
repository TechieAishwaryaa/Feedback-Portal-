-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Jul 04, 2023 at 08:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer`
--

-- --------------------------------------------------------

--
-- Table structure for table `firstyear`
--

CREATE TABLE `firstyear` (
  `Year` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `a1` int(10) NOT NULL,
  `a2` int(10) NOT NULL,
  `a3` int(10) NOT NULL,
  `a4` int(10) NOT NULL,
  `a5` int(10) NOT NULL,
  `a6` int(10) NOT NULL,
  `a7` int(10) NOT NULL,
  `a8` int(10) NOT NULL,
  `a9` int(10) NOT NULL,
  `b1` int(10) NOT NULL,
  `b2` int(10) NOT NULL,
  `b3` int(10) NOT NULL,
  `b4` int(10) NOT NULL,
  `b5` int(10) NOT NULL,
  `b6` int(10) NOT NULL,
  `b7` int(10) NOT NULL,
  `b8` int(10) NOT NULL,
  `b9` int(10) NOT NULL,
  `c1` int(10) NOT NULL,
  `c2` int(10) NOT NULL,
  `c3` int(10) NOT NULL,
  `c4` int(10) NOT NULL,
  `c5` int(10) NOT NULL,
  `c6` int(10) NOT NULL,
  `c7` int(10) NOT NULL,
  `c8` int(10) NOT NULL,
  `c9` int(10) NOT NULL,
  `d1` int(10) NOT NULL,
  `d2` int(10) NOT NULL,
  `d3` int(10) NOT NULL,
  `d4` int(10) NOT NULL,
  `d5` int(10) NOT NULL,
  `d6` int(10) NOT NULL,
  `d7` int(10) NOT NULL,
  `d8` int(10) NOT NULL,
  `d9` int(10) NOT NULL,
  `e1` int(10) NOT NULL,
  `e2` int(10) NOT NULL,
  `e3` int(10) NOT NULL,
  `e4` int(10) NOT NULL,
  `e5` int(10) NOT NULL,
  `e6` int(10) NOT NULL,
  `e7` int(10) NOT NULL,
  `e8` int(10) NOT NULL,
  `e9` int(10) NOT NULL,
  `f1` int(10) NOT NULL,
  `f2` int(10) NOT NULL,
  `f3` int(10) NOT NULL,
  `f4` int(10) NOT NULL,
  `f5` int(10) NOT NULL,
  `f6` int(10) NOT NULL,
  `f7` int(10) NOT NULL,
  `f8` int(10) NOT NULL,
  `f9` int(10) NOT NULL,
  `g1` int(10) NOT NULL,
  `g2` int(10) NOT NULL,
  `g3` int(10) NOT NULL,
  `g4` int(10) NOT NULL,
  `g5` int(10) NOT NULL,
  `g6` int(10) NOT NULL,
  `g7` int(10) NOT NULL,
  `g8` int(10) NOT NULL,
  `g9` int(10) NOT NULL,
  `h1` int(10) NOT NULL,
  `h2` int(10) NOT NULL,
  `h3` int(10) NOT NULL,
  `h4` int(10) NOT NULL,
  `h5` int(10) NOT NULL,
  `h6` int(10) NOT NULL,
  `h7` int(10) NOT NULL,
  `h8` int(10) NOT NULL,
  `h9` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `firstyear`
--

INSERT INTO `firstyear` (`Year`, `Name`, `Email`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `b9`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `d9`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`, `e8`, `e9`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `g7`, `g8`, `g9`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`, `h9`) VALUES
('FY', 'Srushti Mane', 'srushti23@gmail.com', 5, 4, 4, 3, 4, 5, 5, 4, 4, 5, 4, 3, 4, 4, 3, 4, 5, 5, 5, 5, 4, 4, 4, 5, 5, 3, 4, 4, 4, 5, 5, 4, 4, 4, 4, 5, 4, 5, 4, 3, 4, 5, 5, 4, 5, 4, 4, 5, 5, 4, 4, 3, 4, 5, 4, 5, 4, 5, 5, 5, 4, 4, 3, 4, 5, 5, 4, 4, 4, 5, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `secondyear`
--

CREATE TABLE `secondyear` (
  `Year` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `a1` int(10) NOT NULL,
  `a2` int(10) NOT NULL,
  `a3` int(10) NOT NULL,
  `a4` int(10) NOT NULL,
  `a5` int(10) NOT NULL,
  `a6` int(10) NOT NULL,
  `a7` int(10) NOT NULL,
  `a8` int(10) NOT NULL,
  `a9` int(10) NOT NULL,
  `b1` int(10) NOT NULL,
  `b2` int(10) NOT NULL,
  `b3` int(10) NOT NULL,
  `b4` int(10) NOT NULL,
  `b5` int(10) NOT NULL,
  `b6` int(10) NOT NULL,
  `b7` int(10) NOT NULL,
  `b8` int(10) NOT NULL,
  `b9` int(10) NOT NULL,
  `c1` int(10) NOT NULL,
  `c2` int(10) NOT NULL,
  `c3` int(10) NOT NULL,
  `c4` int(10) NOT NULL,
  `c5` int(10) NOT NULL,
  `c6` int(10) NOT NULL,
  `c7` int(10) NOT NULL,
  `c8` int(10) NOT NULL,
  `c9` int(10) NOT NULL,
  `d1` int(10) NOT NULL,
  `d2` int(10) NOT NULL,
  `d3` int(10) NOT NULL,
  `d4` int(10) NOT NULL,
  `d5` int(10) NOT NULL,
  `d6` int(10) NOT NULL,
  `d7` int(10) NOT NULL,
  `d8` int(10) NOT NULL,
  `d9` int(10) NOT NULL,
  `e1` int(10) NOT NULL,
  `e2` int(10) NOT NULL,
  `e3` int(10) NOT NULL,
  `e4` int(10) NOT NULL,
  `e5` int(10) NOT NULL,
  `e6` int(10) NOT NULL,
  `e7` int(10) NOT NULL,
  `e8` int(10) NOT NULL,
  `e9` int(10) NOT NULL,
  `f1` int(10) NOT NULL,
  `f2` int(10) NOT NULL,
  `f3` int(10) NOT NULL,
  `f4` int(10) NOT NULL,
  `f5` int(10) NOT NULL,
  `f6` int(10) NOT NULL,
  `f7` int(10) NOT NULL,
  `f8` int(10) NOT NULL,
  `f9` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `secondyear`
--

INSERT INTO `secondyear` (`Year`, `Name`, `Email`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `b9`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `d9`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`, `e8`, `e9`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`) VALUES
('SY', 'Shrutika Patil', 'shrutika@gmail.com', 5, 4, 5, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 4, 4, 5, 4, 4, 4, 5, 4, 4, 5, 4, 5, 4, 3, 2, 1, 4, 5, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `thirdyear`
--

CREATE TABLE `thirdyear` (
  `Year` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `a1` int(10) NOT NULL,
  `a2` int(10) NOT NULL,
  `a3` int(10) NOT NULL,
  `a4` int(10) NOT NULL,
  `a5` int(10) NOT NULL,
  `a6` int(10) NOT NULL,
  `a7` int(10) NOT NULL,
  `a8` int(10) NOT NULL,
  `a9` int(10) NOT NULL,
  `b1` int(10) NOT NULL,
  `b2` int(10) NOT NULL,
  `b3` int(10) NOT NULL,
  `b4` int(10) NOT NULL,
  `b5` int(10) NOT NULL,
  `b6` int(10) NOT NULL,
  `b7` int(10) NOT NULL,
  `b8` int(10) NOT NULL,
  `b9` int(10) NOT NULL,
  `c1` int(10) NOT NULL,
  `c2` int(10) NOT NULL,
  `c3` int(10) NOT NULL,
  `c4` int(10) NOT NULL,
  `c5` int(10) NOT NULL,
  `c6` int(10) NOT NULL,
  `c7` int(10) NOT NULL,
  `c8` int(10) NOT NULL,
  `c9` int(10) NOT NULL,
  `d1` int(10) NOT NULL,
  `d2` int(10) NOT NULL,
  `d3` int(10) NOT NULL,
  `d4` int(10) NOT NULL,
  `d5` int(10) NOT NULL,
  `d6` int(10) NOT NULL,
  `d7` int(10) NOT NULL,
  `d8` int(10) NOT NULL,
  `d9` int(10) NOT NULL,
  `e1` int(10) NOT NULL,
  `e2` int(10) NOT NULL,
  `e3` int(10) NOT NULL,
  `e4` int(10) NOT NULL,
  `e5` int(10) NOT NULL,
  `e6` int(10) NOT NULL,
  `e7` int(10) NOT NULL,
  `e8` int(10) NOT NULL,
  `e9` int(10) NOT NULL,
  `f1` int(10) NOT NULL,
  `f2` int(10) NOT NULL,
  `f3` int(10) NOT NULL,
  `f4` int(10) NOT NULL,
  `f5` int(10) NOT NULL,
  `f6` int(10) NOT NULL,
  `f7` int(10) NOT NULL,
  `f8` int(10) NOT NULL,
  `f9` int(10) NOT NULL,
  `g1` int(10) NOT NULL,
  `g2` int(10) NOT NULL,
  `g3` int(10) NOT NULL,
  `g4` int(10) NOT NULL,
  `g5` int(10) NOT NULL,
  `g6` int(10) NOT NULL,
  `g7` int(10) NOT NULL,
  `g8` int(10) NOT NULL,
  `g9` int(10) NOT NULL,
  `h1` int(10) NOT NULL,
  `h2` int(10) NOT NULL,
  `h3` int(10) NOT NULL,
  `h4` int(10) NOT NULL,
  `h5` int(10) NOT NULL,
  `h6` int(10) NOT NULL,
  `h7` int(10) NOT NULL,
  `h8` int(10) NOT NULL,
  `h9` int(10) NOT NULL,
  `i1` int(10) NOT NULL,
  `i2` int(10) NOT NULL,
  `i3` int(10) NOT NULL,
  `i4` int(10) NOT NULL,
  `i5` int(10) NOT NULL,
  `i6` int(10) NOT NULL,
  `i7` int(10) NOT NULL,
  `i8` int(10) NOT NULL,
  `i9` int(10) NOT NULL,
  `j1` int(10) NOT NULL,
  `j2` int(10) NOT NULL,
  `j3` int(10) NOT NULL,
  `j4` int(10) NOT NULL,
  `j5` int(10) NOT NULL,
  `j6` int(10) NOT NULL,
  `j7` int(10) NOT NULL,
  `j8` int(10) NOT NULL,
  `j9` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thirdyear`
--

INSERT INTO `thirdyear` (`Year`, `Name`, `Email`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `b9`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `d9`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`, `e8`, `e9`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `g7`, `g8`, `g9`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`, `h9`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`, `i7`, `i8`, `i9`, `j1`, `j2`, `j3`, `j4`, `j5`, `j6`, `j7`, `j8`, `j9`) VALUES
('TY', 'Neha kamble', 'neha@gmail.com', 5, 4, 4, 4, 5, 4, 5, 4, 5, 5, 4, 5, 4, 5, 4, 5, 4, 5, 5, 5, 5, 5, 4, 5, 5, 5, 5, 5, 4, 5, 4, 5, 4, 5, 4, 5, 5, 4, 5, 5, 5, 5, 5, 5, 5, 5, 4, 4, 4, 4, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, 5, 4, 5, 4, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('TY', 'sanika isapure', 'sanika@gmail.com', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 3, 4, 3, 4, 3, 4, 3, 4, 3, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('TY', 'Shrutika Patil', 'shrutika@gmail.com', 5, 5, 4, 5, 4, 5, 4, 5, 5, 5, 4, 5, 4, 5, 5, 5, 5, 5, 5, 4, 5, 4, 5, 4, 5, 4, 5, 5, 4, 5, 5, 4, 5, 5, 4, 5, 5, 4, 5, 4, 5, 4, 5, 4, 4, 5, 4, 5, 5, 4, 5, 5, 4, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 4, 5, 4, 5, 4, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('TY', 'Madhura Pawar', 'srushti23@gmail.com', 5, 4, 5, 4, 5, 4, 5, 4, 5, 5, 4, 5, 4, 5, 5, 5, 5, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 4, 5, 4, 5, 4, 5, 5, 5, 5, 4, 5, 4, 5, 4, 5, 4, 5, 5, 4, 5, 4, 5, 5, 5, 5, 5, 5, 4, 5, 4, 5, 4, 5, 4, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 5, 4, 5, 4, 4, 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `firstyear`
--
ALTER TABLE `firstyear`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `secondyear`
--
ALTER TABLE `secondyear`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `thirdyear`
--
ALTER TABLE `thirdyear`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
