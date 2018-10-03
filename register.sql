-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 01:40 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `othername` text NOT NULL,
  `gender` char(1) NOT NULL,
  `disability` text NOT NULL,
  `dob` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `hall` text NOT NULL,
  `college` text NOT NULL,
  `department` text NOT NULL,
  `phone_number` text NOT NULL,
  `email_1` text NOT NULL,
  `height` text NOT NULL,
  `weight` text NOT NULL,
  `parent` text NOT NULL,
  `house` text NOT NULL,
  `contact` text NOT NULL,
  `email_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`firstname`, `lastname`, `othername`, `gender`, `disability`, `dob`, `student_id`, `hall`, `college`, `department`, `phone_number`, `email_1`, `height`, `weight`, `parent`, `house`, `contact`, `email_2`) VALUES
('Ahensah', 'Michelle', 'Adwoa', 'f', '', '2018-10-23', 10608937, 'Jean Nelson', 'Humanities', 'Psychology', '0240896754', 'mich@gmail.com', '168', '78', 'Mrs Ahensah', 'Cape', '0270866789', 'ahensah@gmail.com'),
('Kelvin', 'Boahene', 'Offei', 'm', '', '2018-10-16', 10618876, 'Bani', 'Basic and Applied Sciences', 'Dance', '0558675245', 'kev@gmail.com', '177', '89', 'Mr. Boahene', 'Koforidua', '0240806789', 'boahene@yahoo.com'),
('Isichei', 'Phelim', 'Chijioke', 'm', '', '1997-07-16', 10620294, 'Akuafo', 'Basic and Applied Sciences', 'Computer Science', '0557640572', 'isichei@yahoo.com', '179', '90', 'Mr. Isichei', 'Nigeria', '0200809403', 'isicheip@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10620295;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
