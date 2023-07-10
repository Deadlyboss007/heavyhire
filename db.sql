-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 10, 2023 at 08:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heavyhire`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `acc_id` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `type_id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`acc_id`, `email`, `pass`, `type_id`, `name`, `phone`) VALUES
(1, 'abhinav@gmail.com', 'abhinav', 2, 'Abhinav', ''),
(2, 'abhinavcv007@gmail.com', 'Abhinav7zz!', 2, 'Abhinav C V', ''),
(3, 'jishnu@gmail.com', 'jishnu', 2, 'ishnu', ''),
(4, 'jishnu@gmail.com', 'jishnu', 2, 'ishnu', ''),
(5, 'abbas@gmail.com', 'abbas', 1, 'abbas', '');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `acc_id` int(100) NOT NULL,
  `address` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `available`
--

CREATE TABLE `available` (
  `avai_id` int(100) NOT NULL,
  `acc_id` int(100) NOT NULL,
  `v_id` int(100) NOT NULL,
  `loc` varchar(255) NOT NULL,
  `tfrom` time(6) NOT NULL,
  `tto` time(6) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available`
--

INSERT INTO `available` (`avai_id`, `acc_id`, `v_id`, `loc`, `tfrom`, `tto`, `phone`, `image`) VALUES
(12, 5, 1, 'Kochi', '09:45:00.000000', '10:30:00.000000', '+919778393558', '1267580.png');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `driver_id` int(100) NOT NULL,
  `pick_up` varchar(200) NOT NULL,
  `drop_off` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drivinglicense`
--

CREATE TABLE `drivinglicense` (
  `acc_id` int(100) NOT NULL,
  `dlno` int(100) NOT NULL,
  `expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `img_dir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img_dir`) VALUES
('64ac46b41b6fc_favicon.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `acc_id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `star_id` int(100) NOT NULL,
  `acc_id` int(100) NOT NULL,
  `rating` int(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`star_id`, `acc_id`, `rating`, `user_id`) VALUES
(1, 5, 4, 1),
(4, 5, 4, 2),
(5, 5, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `trans_id` int(100) NOT NULL,
  `book_id` int(100) NOT NULL,
  `amount` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `type_id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`type_id`, `name`) VALUES
(1, 'driver'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `v_id` int(100) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `insurance` int(100) NOT NULL,
  `reg_no` int(100) NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`v_id`, `acc_id`, `brand`, `model`, `insurance`, `reg_no`, `exp_date`) VALUES
(1, 1, 'Ashok Leyland', 'Random Model', 100012, 1231231, '2023-12-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `available`
--
ALTER TABLE `available`
  ADD PRIMARY KEY (`avai_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`star_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `acc_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `available`
--
ALTER TABLE `available`
  MODIFY `avai_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `star_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `trans_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `type_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `v_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
