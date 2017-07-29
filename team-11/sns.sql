-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2017 at 10:52 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sns`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itemsdetails`
--

CREATE TABLE `itemsdetails` (
  `itemid` int(3) NOT NULL,
  `iname` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `quantity` int(3) NOT NULL,
  `sakhiid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `pname` varchar(20) NOT NULL,
  `pquantity` int(4) NOT NULL,
  `ptype` int(11) NOT NULL,
  `customerid` varchar(20) NOT NULL,
  `sakhiid` varchar(20) NOT NULL DEFAULT 'Not Assigned',
  `orderid` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sakhi`
--

CREATE TABLE `sakhi` (
  `id` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemsdetails`
--
ALTER TABLE `itemsdetails`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `sakhi`
--
ALTER TABLE `sakhi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itemsdetails`
--
ALTER TABLE `itemsdetails`
  MODIFY `itemid` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderid` int(4) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
