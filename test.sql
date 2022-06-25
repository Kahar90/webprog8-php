-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 08:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemname` varchar(50) NOT NULL,
  `itemdesc` varchar(200) NOT NULL,
  `itemprice` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemname`, `itemdesc`, `itemprice`) VALUES
('Nasi Kerabu Complete Set', 'Nasi kerabu dengan ayam goreng, telur, sayuran dan pilihan sambal', 10),
('Sprite', 'Ice cold Sprite 300ml', 2),
('Ayam Goreng', 'Ayam Goreng', 2),
('Sambal', 'Extra Sambal', 1),
('Nasi Gurih', 'Nasi geming', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(12) DEFAULT NULL,
  `level` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('user_1', 'password_1', 1),
('user_2', 'password_2', 2),
('user_3', 'password_3', 3),
('admin', 'admin', 1),
('customer', 'customer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usercart`
--

CREATE TABLE `usercart` (
  `user` varchar(50) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `itemqtty` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercart`
--

INSERT INTO `usercart` (`user`, `itemname`, `itemqtty`) VALUES
('user_1', 'Nasi Kerabu', 1),
('admin', '', 0),
('admin', '', 0),
('admin', '', 0),
('customer', 'Nasi Gurih', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
