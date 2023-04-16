-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 02:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbubs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbubs`
--

CREATE TABLE `tbubs` (
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `data` date DEFAULT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbubs`
--

INSERT INTO `tbubs` (`email`, `senha`, `nome`, `data`, `id`) VALUES
('luan001@gmail.com', 'luan123', 'bolinha2', '2023-03-07', 5),
('aureliocarros2010@gmail.com', 'muito1234456', 'Aurélio Silva', '2006-01-15', 6),
('luan924@gmail.com', '12345', 'Luan', '2022-12-03', 7),
('rikelme@gmail.com', '125678', 'Cicero Rikelme Lopes', '1500-12-04', 8),
('ederson@gmail.com', '90645te', 'Ederson Silva', '2022-12-05', 9),
('mariele@gmail.com', '764747yi', 'Marielle', '2023-04-05', 10),
('mariele@gmail.com', '1364364gg', 'Marielle', '2023-04-05', 11),
('tommorto@gmai.coml', '1234ret', 'Jerry', '2024-12-06', 12),
('jerrymorto@gmail.com', '12345t', 'Tom', '2024-02-12', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbupload`
--

CREATE TABLE `tbupload` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `data_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbubs`
--
ALTER TABLE `tbubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbupload`
--
ALTER TABLE `tbupload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbubs`
--
ALTER TABLE `tbubs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbupload`
--
ALTER TABLE `tbupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
