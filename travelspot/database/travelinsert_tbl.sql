-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2025 at 08:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `travelinsert_tbl`
--

CREATE TABLE `travelinsert_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `withtravel` varchar(100) NOT NULL,
  `personNo` varchar(10) NOT NULL,
  `starttrip` varchar(15) NOT NULL,
  `endtrip` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `message` varchar(300) NOT NULL,
  `defaultdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travelinsert_tbl`
--

INSERT INTO `travelinsert_tbl` (`id`, `name`, `address`, `mail`, `mobile`, `destination`, `withtravel`, `personNo`, `starttrip`, `endtrip`, `gender`, `message`, `defaultdate`) VALUES
(1, 'Amit', 'Meerut', 'amit@gmail.com', '9632587415', 'goa', 'single', '1', '2024-03-10', '2024-03-15', 'male', 'travel.com', '2024-03-07 11:50:11'),
(2, 'Jatin', 'Meerut', 'jatin@mail.com', '9632587410', 'rishikesh', 'single', '1', '2025-01-19', '2025-01-21', 'male', 'Travel.com', '2025-01-16 11:11:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travelinsert_tbl`
--
ALTER TABLE `travelinsert_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travelinsert_tbl`
--
ALTER TABLE `travelinsert_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
