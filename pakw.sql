-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 05:30 PM
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
-- Database: `pakw`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `cname` text NOT NULL,
  `price` varchar(5550) NOT NULL,
  `year` text NOT NULL,
  `km` int(11) NOT NULL,
  `img` longtext NOT NULL,
  `date` date DEFAULT current_timestamp(),
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `cname`, `price`, `year`, `km`, `img`, `date`, `status`) VALUES
(61, 'Honda Civic', '20k/Day', '2019', 17, 'civic.jpg', '2023-03-13', '0'),
(62, 'BMW', '30k/Day', '2018', 22, 'car-rent-2.png', '2023-03-13', '1'),
(63, 'Honda City', '10k/Day', '2014', 13, 'city.jpg', '2023-03-13', '1'),
(64, 'AUDI Q3', '20k/Day', '2021', 16, 'car-rent-4.png', '2023-03-13', '0'),
(65, 'Toyota v8', '30k/Day', '2020', 17, 'v8.jpg', '2023-03-13', '0'),
(66, 'Fortuner', '30k/Day', '2021', 16, 'fortuner.jpg', '2023-03-13', '1'),
(67, 'Ferrari', '30k/Day', '2014', 13, 'images.jpg', '2023-03-13', '1'),
(68, 'AMG', '30k/Day', '2019', 13, 'AMG.png', '2023-03-13', '1'),
(69, 'BMW', '40k/Day', '2021', 21, 'm.jpg', '2023-03-13', '1'),
(71, 'Sportage', '20k/Day', '2020', 13, 'car-rent-2.png', '2023-03-13', '1'),
(72, 'Honda Civic', '20k/Day', '2022', 16, 'car-rent-6.png', '2023-03-15', '0');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`) VALUES
(66, 'Ali Abbas', 'husnainabbasi94751@gmail.com'),
(67, 'Ahmed Ali', 'hammad@gmail.com'),
(70, 'zohaib ', 'z@gmail.com'),
(71, 'Ali', 'husnainabbasi947514@gmail.com'),
(72, 'Ali', 'ammar@gmail.com'),
(73, 'Ahmed', 'husnainabbasi947514@gmail.com'),
(74, 'Ali', 'husnainabbasi947514@gmail.com'),
(75, 'Usama', 'ammar@gmail.com'),
(76, 'Ahmed', 'ammar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `years` varchar(50) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `Name`, `email`, `years`, `Date`) VALUES
(1, 'Usama', 'husnainabbasi947514@gmail.com', '8', '2023-03-07'),
(3, 'Husnain', 'husnainabbasi947514@gmail.com', '5', '2023-03-07'),
(4, 'Usama', 'husnainabbasi947514@gmail.com', '3', '2023-03-07'),
(5, 'Husnain', 'husnainabbasi947514@gmail.com', '5', '2023-03-07'),
(6, 'Samad', 'husnainabbasi947514@gmail.com', '5', '2023-03-07'),
(7, 'Ammar', 'ammar@gmail.com', '9', '2023-03-12'),
(8, 'Ahmed', 'husnainabbasi947514@gmail.com', '3', '2023-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cstid` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `carid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cstid`, `date`, `carid`) VALUES
(65, 76, '2023-03-17', 72);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `service` text NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `Name`, `email`, `service`, `Date`) VALUES
(3, 'Ali', 'husnainabbasi947514@gmail.com', 'Auto Repairing', '2023-03-07'),
(4, 'Usama', 'husnainabbasi947514@gmail.com', 'Auto Repairing', '2023-03-07'),
(5, 'Ali', 'husnainabbasi947514@gmail.com', 'Auto Repairing', '2023-03-07'),
(6, 'Hammad', 'hammad@gmail.com', 'Car Financing', '2023-03-12'),
(7, 'zohaib', 'z@gmail.com', 'Auto Repairing', '2023-03-13'),
(8, 'Ali', 'ammar@gmail.com', 'Car Inspection', '2023-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_email`, `password`) VALUES
(1, 'husnain@gmail.com', '4433');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
