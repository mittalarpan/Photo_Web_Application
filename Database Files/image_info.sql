-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 04:38 PM
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
-- Database: `db_images`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_info`
--

CREATE TABLE `image_info` (
  `image_id` int(10) NOT NULL,
  `image` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` varchar(255) DEFAULT NULL,
  `album_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_info`
--

INSERT INTO `image_info` (`image_id`, `image`, `Date`, `description`, `album_id`) VALUES
(91, 'downlaoad12.jpg', '2019-05-26 11:26:09', 'MY FAVOURITE IMAGE', 47),
(92, 'iron_man.jpg', '2019-05-26 11:26:47', 'SUPERHERO', 47),
(93, 'download11.jpg', '2019-05-26 11:27:24', 'COOLEST  SUPERHERO', 47),
(94, 'download6.jpg', '2019-05-26 11:30:26', 'NATURE AT ITS BEST', 48),
(95, 'download4.jpg', '2019-05-26 11:30:52', 'NATURAL BEAUTY', 48),
(96, 'download1.jpg', '2019-05-26 11:31:20', 'A beautiful landscape', 48),
(97, 'manu.jpg', '2019-05-26 11:35:47', 'MANCHESTER UNITED', 49),
(98, 'rafa.jpg', '2019-05-26 11:36:13', 'A TENNIS LEGEND', 49),
(99, 'code.jpg', '2019-05-26 11:37:11', 'MOTIVATION TO LEARN', 50),
(100, 'download7.jpg', '2019-05-26 12:37:17', 'FLOWERS', 48),
(101, 'download9.jpg', '2019-05-26 12:38:00', 'SUNSET', 48),
(102, 'download3.jpg', '2019-05-26 12:38:43', 'NATURE', 48);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_info`
--
ALTER TABLE `image_info`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_info`
--
ALTER TABLE `image_info`
  MODIFY `image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
