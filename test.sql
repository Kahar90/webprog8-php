-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 11:20 PM
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
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `name` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`name`, `username`, `address`, `phone`) VALUES
('Bintang ', 'customer', 'Greenfield Regency Block A', '0216432548');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemname` varchar(50) NOT NULL,
  `itemdesc` varchar(200) NOT NULL,
  `itemprice` int(50) NOT NULL,
  `linkimg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemname`, `itemdesc`, `itemprice`, `linkimg`) VALUES
('Nasi Kerabu Ayam Kampung Goreng', 'Kerabu rice is served with fried chicken', 24, 'https://cdn.shopify.com/s/files/1/0462/8162/1665/products/Lina-Products4a_700x700.jpg?v=1634090191'),
('Nasi Kerabu Kambing Panggang', 'Kerabu rice is served with roasted goat', 28, 'https://images.deliveryhero.io/image/fd-my/LH/le9p-hero.jpg'),
('Keropok Lekor', 'Traditional Malay fish cracker snack originating from the state of Terengganu', 5, 'https://happydapur.com/wp-content/uploads/2021/11/i-bRDtprj-X5-500x500.jpg'),
('Teh Ais', 'iced tea w milk', 3, 'https://alhudaservices.com/wp-content/uploads/2021/01/teh-ais.jpg');

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
('customer', 'Keropok Lekor', 2),
('customer', 'Nasi Kerabu Kambing Panggang', 3),
('customer', 'Teh Ais', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
