-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/06/2023 às 03:34
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

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
-- Estrutura para tabela `tbartigos`
--

CREATE TABLE `tbartigos` (
  `titulo` varchar(100) NOT NULL,
  `conteudo` varchar(1000) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbartigos`
--

INSERT INTO `tbartigos` (`titulo`, `conteudo`, `id`) VALUES
('Título', '<p>Conteúdo do Artigo</p>\r\n                ', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbmedicamentos`
--

CREATE TABLE `tbmedicamentos` (
  `ID` int(11) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `data_upload` datetime NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `quant` varchar(100) DEFAULT NULL,
  `caminho` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbmedicamentos`
--

INSERT INTO `tbmedicamentos` (`ID`, `arquivo`, `data_upload`, `nome`, `quant`, `caminho`) VALUES
(37, '6484bdc2d37de', '2023-06-10 15:15:30', 'Metformina', ' 13cx', '../upload/medarquivos/6484bdc2d37de.png'),
(38, '6484bde38d270', '2023-06-10 15:16:03', 'Losartana', ' 13cx', '../upload/medarquivos/6484bde38d270.png'),
(39, '6484be04e0ab5', '2023-06-10 15:16:36', 'Dipirona', ' 3cx', '../upload/medarquivos/6484be04e0ab5.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbmedicos`
--

CREATE TABLE `tbmedicos` (
  `profissional` varchar(100) NOT NULL,
  `formacao` varchar(100) NOT NULL,
  `dias` varchar(100) NOT NULL,
  `horarios` varchar(100) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbmedicos`
--

INSERT INTO `tbmedicos` (`profissional`, `formacao`, `dias`, `horarios`, `Id`) VALUES
('Dr Gomes Sousa', 'Neurologista', 'Segundas e Terça', '9hs às 10hs', 2),
('Dra Luana Bento', 'Pediatra', 'Segundas e Terças', '8hs às 9hs', 3),
('Dra Edilaine', 'Clinica', 'Segundas e Quartas', '8hs às 10hs', 4),
('Dr Silveira ', 'Neurologista', 'Segundas e Quartas', '9hs às 10hs', 5),
('Dr Emanuel Pereira', 'Odontologista', 'Segundas e Sextas', '9hs às 11hs', 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbubs`
--

CREATE TABLE `tbubs` (
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `data` date DEFAULT NULL,
  `id` int(100) NOT NULL,
  `caminho` varchar(100) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbubs`
--

INSERT INTO `tbubs` (`email`, `senha`, `nome`, `data`, `id`, `caminho`, `imagem`) VALUES
('suzanna@gmail.com', 'hecwgucvg7652346576³', 'Suzanna Alencar', '2023-12-12', 2, '../upload/perfil/6484b7bbec8c1.jfif', '6484b7bbec8c1'),
('marcelobiologia@gmail.com', 'tfgefugcib1234£', 'Marcelo', '1979-04-13', 3, '../upload/perfil/6484b88ce2f9f.jfif', '6484b88ce2f9f'),
('edbatera@gmail.com', 'jhebdvbuedieb64895³', 'Edmar Batista', '1979-02-14', 4, '../upload/perfil/6484b8f55cc0e.jfif', '6484b8f55cc0e'),
('marieneluz@gmail.com', 'Mary²12345#', 'Mariene Lopes', '2003-04-03', 5, '../upload/perfil/6484b9488dcc7.jfif', '6484b9488dcc7'),
('mortalkombat@gmail.com', 'refjbfurg73#', 'Jonnny ', '1980-02-01', 6, '../upload/perfil/6484b9e72bd12.webp', '6484b9e72bd12'),
('touroferdinando@gmail.com', 'rtsyeb#4567', 'Ferdinando', '2002-03-01', 7, '../upload/perfil/6484ba2872b12.png', '6484ba2872b12');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbartigos`
--
ALTER TABLE `tbartigos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbmedicamentos`
--
ALTER TABLE `tbmedicamentos`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `tbmedicos`
--
ALTER TABLE `tbmedicos`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `tbubs`
--
ALTER TABLE `tbubs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbartigos`
--
ALTER TABLE `tbartigos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbmedicamentos`
--
ALTER TABLE `tbmedicamentos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `tbmedicos`
--
ALTER TABLE `tbmedicos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbubs`
--
ALTER TABLE `tbubs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
