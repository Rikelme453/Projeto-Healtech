-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 02:05 AM
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
-- Table structure for table `tbmedicos`
--

CREATE TABLE `tbmedicos` (
  `profissional` varchar(100) NOT NULL,
  `formacao` varchar(100) NOT NULL,
  `dias` varchar(100) NOT NULL,
  `horarios` varchar(100) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbmedicos`
--

INSERT INTO `tbmedicos` (`profissional`, `formacao`, `dias`, `horarios`, `Id`) VALUES
('Dr Gonçalves Dias', 'Dentista', 'Segundas e Sextas-Feiras ', 'Das 8hs às 9hs', 10),
('Med Salustiana Neves ', 'Psicologa', 'Quartas e Sextas', 'Das 8hs às 16hs da tarde', 11),
('Dra Livia Silva', 'Fisioterapeuta', 'Quartas e Sextas', 'Das 7hs às 14hs da tarde', 12),
('Dr Gonçalves Guimarães', 'Psiquiatra', 'Quartas e Sextas', 'Das 8hs às 15hs da tarde', 13),
('Dr Celio Mendonça', 'Clinico Geral', 'Quartas e Sextas', 'Das 7hs às 14hs da tarde', 14),
('Dr Tom Marry', 'Dentista', 'Segundas e Sextas-Feiras ', 'Das 8hs às 15hs da tarde', 15),
('Dra Luana Souza', 'Fisioterapeuta', 'Segunda,Terça e Sexta.', 'Das 8hs às 15hs da tarde', 16);

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
('luan924@gmail.com', '12345', 'Luan', '2022-12-03', 7),
('ederson@gmail.com', '90645te', 'Ederson Silva', '2022-12-05', 9),
('jerrymorto@gmail.com', '12345t', 'Tom', '2024-02-12', 13),
('mariellesilva@gmail.com', '1234567', 'Marielle Franco', '2023-12-03', 15),
('suzanna@gmail.com', '12345', 'Suzanna Almeida', '2003-12-03', 16),
('mariene@gmail.com', '9894ggfr5', 'Mariene Gonçalves', '2004-12-03', 17),
('mendonça@gmail.com', '1fr42567y', 'Suzanna Mendonça', '2006-12-03', 19);

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
-- Indexes for table `tbmedicos`
--
ALTER TABLE `tbmedicos`
  ADD PRIMARY KEY (`Id`);

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
-- AUTO_INCREMENT for table `tbmedicos`
--
ALTER TABLE `tbmedicos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbubs`
--
ALTER TABLE `tbubs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbupload`
--
ALTER TABLE `tbupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
