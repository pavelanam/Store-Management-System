-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 06:19 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `price`, `quantity`, `category`) VALUES
(32, 'Huawei', 150000, 10, 'Mobile'),
(33, 'iPhone 7', 35000, 10, 'Mobile Phone'),
(34, 'Micromax Canvas 6', 12000, 12, 'Mobile Phone'),
(36, 'Samsung Note 5', 20000, 11, 'Mobile Phone'),
(37, 'Xiaomi Note 5', 18000, 10, 'Mobile Phone'),
(39, 'NOKIA 5', 12000, 12, 'Mobile Phone'),
(40, 'ASUS Zenphone', 12000, 12, 'Mobile Phone');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `Id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `blood` varchar(20) NOT NULL,
  `Degree` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`Id`, `username`, `email`, `password`, `type`, `gender`, `dob`, `blood`, `Degree`) VALUES
(1, 'Touhid', 'touhid@gmail.com', '123456', 'admin', '', '', '', ''),
(2, 'Rafi', 'rafi@gmail.com', '123456', 'shopkeeper', '', '', '', ''),
(3, 'niaz', 'niaz@gmail.com', '123456', 'admin', 'male', '1998/14/09', 'B+', 'MBBS'),
(4, '', 'boyrrz@gmail.com', '', 'BSc ', 'male', '', 'B+', 'BSc '),
(5, 'Md Islam', 'boyrrz@gmail.com', '', 'SSC ', 'male', '', 'A', 'SSC '),
(6, 'Md Islam', 'boyrrz@gmail.com', '224455555', 'BSc ', 'male', '', 'B+', 'BSc '),
(7, 'Md Islam', 'boyrrz@gmail.com', 'ssddsdsdssds', 'BSc ', 'male', '23233', 'B+', 'BSc ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
