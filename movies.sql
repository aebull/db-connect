-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 11:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `release_date` varchar(11) DEFAULT NULL,
  `box_office` varchar(11) DEFAULT NULL,
  `synopsis` varchar(255) DEFAULT NULL,
  `starring` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `release_date`, `box_office`, `synopsis`, `starring`) VALUES
(54, 'The Lord of the Rings: The Fellowship of the Ring', '2006', '', '', ''),
(55, 'The Lord of the Rings: The Fellowship of the Ring', '2006', '', '', ''),
(56, 'The Lord of the Rings: The Fellowship of the Ring', '2006', '', '', ''),
(57, 'Ice Age', '2010', '674 million', 'synopsis stuff', 'someone cool'),
(58, 'Ice Age', '2010', '674 million', 'synopsis stuff', 'someone cool'),
(59, 'Ice Age', '2010', '674 million', 'synopsis stuff', 'someone cool'),
(60, 'Ice Age', '2010', '674 million', 'synopsis stuff', 'someone cool'),
(61, 'Ice Age', '2010', '674 million', 'synopsis stuff', 'someone cool'),
(62, 'The Lord of the Rings: The Fellowship of the Ring', '2006', '', '', ''),
(63, 'The Lord of the Rings: The Fellowship of the Ring', '2006', '', '', ''),
(64, 'The Lord of the Rings: The Fellowship of the Ring', '2006', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
