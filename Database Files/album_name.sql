-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 04:40 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `albums`
--

-- --------------------------------------------------------

--
-- Table structure for table `album_name`
--

CREATE TABLE `album_name` (
  `name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `album_id` int(100) NOT NULL,
  `user_id` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album_name`
--

INSERT INTO `album_name` (`name`, `description`, `date`, `album_id`, `user_id`) VALUES
('IRON MAN', 'SUPERHERO', '2019-05-26 14:28:09', 47, 6),
('LANDSCAPE', 'BEAUTIFUL NATURE', '2019-05-26 11:29:40', 48, 6),
('SPORTS', 'SPORTS IMAGES ', '2019-05-26 11:35:18', 49, 7),
('CODING', 'CODING RELATED STUFF', '2019-05-26 11:36:49', 50, 7),
('FOOTBALL', 'FOOTBALL LEGENDS', '2019-05-26 11:52:24', 51, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album_name`
--
ALTER TABLE `album_name`
  ADD PRIMARY KEY (`album_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album_name`
--
ALTER TABLE `album_name`
  MODIFY `album_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
