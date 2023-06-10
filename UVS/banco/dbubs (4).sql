-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/06/2023 às 22:45
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
-- Estrutura para tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id` int(11) NOT NULL,
  `imagem` varchar(220) DEFAULT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbadmin`
--

INSERT INTO `tbadmin` (`id`, `imagem`, `nome`, `email`) VALUES
(2, '../upload/Serviço Web.png', 'Dr Gomes Mendonça', 'luan924@gmail.com'),
(3, '../upload/Serviço Web.png', 'Dr Gomes Mendonça', 'luan924@gmail.com'),
(4, '../upload/Serviço Web.png', 'Dr Gomes Mendonça', 'luan924@gmail.com'),
(5, '../upload/Serviço Web.png', 'Dr Gomes Mendonça', 'luan924@gmail.com'),
(6, '../upload/Serviço Web.png', 'Dr Gomes Mendonça', 'luan924@gmail.com'),
(7, '../upload/UVS +.svg', 'Dr Gomes Mendonça', 'luan924@gmail.com'),
(8, '../upload/UVS +.svg', 'Rikelme', 'cicero.batista6@aluno.ce.gov.br'),
(10, '../upload/UVS +.svg', 'Rikelme', 'susanna@gmail.com'),
(11, '../upload/UVS +.svg', 'Rikelme', 'susanna@gmail.com'),
(12, '../upload/UVS +.svg', 'Suzanna Alencar', 'susanna@gmail.com'),
(13, '../upload/_101778109_06_portuguese_literal-translation-of-country-names_southamerica.jpg', 'Rikelme', 'edilaine@gmail.com');

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
('Aqui', '<p>aqui</p>\r\n                ', 1);

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
(36, '6484bda735bb7', '2023-06-10 15:15:03', 'Hidroclotiazida', ' 17cx', '../upload/medarquivos/6484bda735bb7.png'),
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
('Dr Gomes Mendonça', 'Odontologista', 'Segundas e Terça', '9hs às 10hs', 1),
('Dr Gomes Sousa', 'Neurologista', 'Segundas e Terça', '9hs às 10hs', 2),
('Dra Luana', 'Pediatra', 'Segundas e Quartas', '8hs às 10hs', 3),
('Dra Edilaine', 'Clinica', 'Segundas e Quartas', '8hs às 10hs', 4);

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
('luan924@gmail.com', '12345678', 'Rikelme', '2005-12-12', 1, '../upload/perfil/648458e6e2225.jfif', '648458e6e2225'),
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
-- Índices de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbartigos`
--
ALTER TABLE `tbartigos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbmedicamentos`
--
ALTER TABLE `tbmedicamentos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `tbmedicos`
--
ALTER TABLE `tbmedicos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbubs`
--
ALTER TABLE `tbubs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
