-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 12:42 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `cphone` varchar(255) NOT NULL,
  `caddress` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `bill` int(11) NOT NULL,
  `ordertime` date NOT NULL,
  `orderFrom` varchar(255) NOT NULL DEFAULT 'offline'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `cname`, `cphone`, `caddress`, `category`, `pname`, `quantity`, `bill`, `ordertime`, `orderFrom`) VALUES
(1, 'Rahel Siddiqi', '', '', 'Chinese', 'product', '', 0, '0000-00-00', 'offline'),
(2, 'Rahel Siddiqi', '', '', 'Chinese', 'product', '', 0, '0000-00-00', 'offline'),
(3, 'Rahel Siddiqi', '', '', 'Chinese', 'product', '', 900, '2018-12-02', 'offline'),
(4, 'Rahel Siddiqi', '', '', 'Chinese', 'product', '', 900, '2018-12-02', 'offline'),
(5, 'Rahel Siddiqi', '', '', 'Chinese', 'product', '', 900, '2018-12-02', 'offline'),
(18, 'Shakil', '01******', 'Dhaka-1230', 'Burger', 'Student Burger', '3', 360, '2018-12-02', 'offline'),
(19, 'Shakil', '01******', 'Dhaka-1230', 'Drink\'s', 'product Two', '5', 300, '2018-12-05', 'offline'),
(20, 'Shakil', '01******', 'Dhaka-1230', 'Drink\'s', 'product Two', '5', 300, '2018-12-05', 'offline'),
(21, 'Shakil', '01******', 'Dhaka-1230', 'Burger', 'EX-GF', '2', 480, '2018-12-05', 'offline'),
(22, 'Shakil', '01******', 'Dhaka-1230', 'Drink\'s', 'product Two', '2', 120, '2018-12-05', 'online'),
(23, '', '123', '', 'Drink\'s', 'product Two', '1', 60, '2018-12-05', 'offline'),
(24, '', '123', '', 'Drink\'s', 'product Two', '2', 120, '2018-12-05', 'offline'),
(25, '', '123', '', 'Burger', 'EX-GF', '2', 480, '2018-12-05', 'offline'),
(26, '', '1234', '', 'Burger', 'Student Burger', '2', 240, '2018-12-05', 'offline'),
(27, '', '1234', '', 'Drink\'s', 'product Two', '3', 180, '2018-12-05', 'offline'),
(28, 'sayem', '01689494388', 'house 32 road 4a sector 5', 'Burger', 'Student Burger', '1', 120, '2018-12-05', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cphone` varchar(255) NOT NULL,
  `person` int(11) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `action` tinyint(1) NOT NULL DEFAULT '0',
  `req` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `cname`, `cphone`, `person`, `time`, `date`, `action`, `req`) VALUES
(2, 'Shakil', '0187', 5, '14:13:00', '2018-12-06', 1, 49),
(4, '', '', 5, '17:12:00', '2018-03-28', 1, 49),
(6, '', '', 3, '03:03:00', '2018-03-28', 0, 72),
(7, 'Shakil', '01******', 5, '10:20:00', '2018-12-03', 0, 77);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `contact`, `message`) VALUES
(1, 'aziz siddiqi rahel', 'azizsiddiqirahel@gmail.com', '01729637445', 'You Serve Nice Foods with relax environment'),
(2, 'amin', 'as@gmal.com', '01689494388', 'gfksdlfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`) VALUES
(1, 'Bye One and Get One Free --- For limited time');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `price`, `description`, `img`) VALUES
(4, 'product One', 'Drink\'s', 80, 'An easy fruit shake you can create up in minutes,', 'thumb-2.jpg'),
(5, 'product Two', 'Drink\'s', 60, 'Coca-Cola, or Coke is a carbonated soft drink ', 'thumb-4.jpg'),
(6, 'Student Burger', 'Burger', 120, 'student', 'student.jpg'),
(7, 'EX-GF', 'Burger', 240, '', 'ex.jpg'),
(8, 'Golpata Subway', 'sub', 160, 'chicken sub', 'sub.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `username`, `password`, `name`, `gender`, `contact`, `email`, `address`, `type`) VALUES
(1, 'rahel', '12345', 'aziz siddiqi rahel', 'male', 1729637445, 'azizsiddiqirahel@gmail.com', 'Nikunja-2 Dhaka', 'admin'),
(3, 'Sudipa', '12345', 'Sudipa Paul', 'female', 1236547895, 'sudipa@mail.com', 'Uttara Dhaka', 'user'),
(2, 'Keya', '12345', 'Keya', 'female', 1729333333, 'keya@mail.com', 'Uttara Dhaka', 'employee'),
(5, 'sayem', '123456', 'sayem', 'male', 1689494388, 'asmsaem97@gmail.com', 'house 1 road 7/a sector 5', 'admin'),
(6, 'test', '12345', 'test', 'male', 1234578, 'test@mail.com', 'fdstggsdgg re', 'user'),
(7, 'ushaed', '1234', 'Md Ushaed', 'male', 1761963922, 'Mjfkdsjf@kjsflsdj.com', 'sdfadfdfsdafas', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `gender`, `contact`, `address`) VALUES
(1, 'aziz siddiqi rahel', 'male', '01729637445', 'Nikunja-2 Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
