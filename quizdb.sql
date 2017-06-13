-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2017 at 03:25 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `category`) VALUES
(1, 'nikola', '12345', 'all'),
(12, 'ana', '123', 'movies');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `text` varchar(50) DEFAULT NULL,
  `option1` varchar(50) DEFAULT NULL,
  `option2` varchar(50) DEFAULT NULL,
  `option3` varchar(50) DEFAULT NULL,
  `option4` varchar(50) DEFAULT NULL,
  `answer` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `points` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `text`, `option1`, `option2`, `option3`, `option4`, `answer`, `category`, `points`) VALUES
(1, 'Which year marks the start of World War II?', '1940', '1942', '1941', '1939', '1939', 'history', 15),
(2, 'Which is considered as oldest civilization?', 'Mesopotamian Civilization', 'Egyptain Civilization', 'Harappan Civilization', 'Chinese Civilization', 'Mesopotamian Civilization', 'history', 15),
(3, 'Who is known as the father of Modern Medicine?', 'Pythagoras', 'Erastosthenes', 'Hippocrates', 'Euclid', 'Hippocrates', 'history', 15),
(5, 'What player is Barcelona all-time top scorer?', 'Ronalidnho', 'Rivaldo', 'Lionel Messi', 'Neymar', 'Lionel Messi', 'sport', 15),
(6, 'Who was the youngest world boxing champion?', 'Evander Holyfield', 'Mike Tyson', 'Muhammad Ali', 'George Foreman', 'Mike Tyson', 'sport', 15),
(7, 'In which sport is the Davis cup awarded?', 'Football', 'Tennis', 'Cricket', 'Volleyball', 'Tennis', 'sport', 15),
(8, 'Which Bond movie did Daniel Craig first star in?', 'From Russia with Love', 'You Only Live Twice', 'Casino Royale', 'Quantum of Solace', 'Casino Royale', 'movies', 15),
(9, 'Who directed the horror film Alien?', 'Martin Scorsese', 'Wody Allen', 'Steven Spielberg', 'Ridley Scott', 'Ridley Scott', 'movies', 15),
(10, 'Who played Forrest Gump?', 'Al Pacino', 'Tom Hanks', 'Kevin Spacey', 'Liam Neeson', 'Tom Hanks', 'movies', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
