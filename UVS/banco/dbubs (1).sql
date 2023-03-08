-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Mar-2023 às 14:22
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbubs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbubs`
--

CREATE TABLE `tbubs` (
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbubs`
--

INSERT INTO `tbubs` (`email`, `senha`, `nome`, `data`) VALUES
('cicerorikelme@gmail.com', '1234', '', NULL),
('luan924@gmail.com', '12345', '', NULL),
('aaa@gmail.com', 'luan123', '', NULL),
('luan00@gmail.com', '12345', 'bolinha', NULL),
('luan001@gmail.com', 'luan123', 'bolinha2', '2023-03-07'),
('aureliocarros2010@gmail.com', 'muito1234456', 'Aurélio Silva', '2006-01-15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbupload`
--

CREATE TABLE `tbupload` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `data_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbupload`
--
ALTER TABLE `tbupload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbupload`
--
ALTER TABLE `tbupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
