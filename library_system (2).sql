-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2024 at 08:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `bookno` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `subtitle` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `book_publisher` varchar(250) NOT NULL,
  `book_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `books`:
--

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bookno`, `title`, `subtitle`, `author`, `book_publisher`, `book_quantity`) VALUES
(1, 'B32', 'Good Living', 'Meaning', 'John Williams', 'Tyndale', 9),
(5, 'B42', 'Economics', 'Africa', 'Fred Jango', 'Penguin', 11),
(6, 'B978', 'Water Management', 'Africa', 'African Union', 'Penguin', 9),
(7, 'B4242', 'Database Development', '', 'Nanyonjo Evelyn', 'Tyndale', 15),
(9, 'B123', 'Systems Analysis and Design', '', 'Ms. Habib Ngugi', 'Printhouse', 16),
(13, 'B3432', 'Purple Hibiscus', '', 'Chimamanda Ngozi Adichie', 'Algonquin Books', 5),
(14, 'B7239', 'War and Peace', '', 'Leo Tolstoy', 'The Russian Messenger', 10),
(15, 'B422', 'Paradise', '', 'Abdulrazak Gurnah', 'Hamish Hamilton', 4);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `studentno` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phoneno` varchar(250) NOT NULL,
  `programme_code` varchar(250) NOT NULL,
  `book_createdby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `students`:
--   `book_createdby`
--       `books` -> `id`
--

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studentno`, `firstname`, `lastname`, `email`, `phoneno`, `programme_code`, `book_createdby`) VALUES
(1, '195_790', 'Elijah', 'Oseni', 'ferger@gmail.com', '+244367232', 'BIT', 1),
(3, '213-384', 'Kamikazi', 'Kamikazi hafsa 213-384', 'kh@gmail.com', '+256574745', 'BSE', 5),
(4, '197-344', 'Galiwango', 'Reagan', 'gr@gmail.com', '+254635435', 'BIT', 6),
(5, '197-310', 'BASAJJASUBI', 'BENJAMIN', 'bb@gmail.com', '+2563473482', 'BIT', 7),
(6, '197-308', 'Mwesigwa', 'Allan Isaac', 'mai@gmail.com', '+2567685852', 'BIT', 9),
(8, '130-550', 'Tumwiine', 'Kevin', 'tk@gmail.com', '+2567482842', 'BIT', 9),
(9, '213-384', 'Donald', 'John', 'dj@gmail.com', '+256789353741', 'BSE', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_createdby` (`book_createdby`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`book_createdby`) REFERENCES `books` (`id`) ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
