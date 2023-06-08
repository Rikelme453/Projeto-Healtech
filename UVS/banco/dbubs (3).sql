-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/06/2023 às 19:23
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
(30, '645c205984c60', '2023-05-10 19:53:13', 'Hidroclotiazida', ' 17cx', '../upload/medarquivos/645c205984c60.png');

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
('Dr Gomes Mendonça', 'Odontologista', 'Segundas e Terça', 'Das 13hs às 17hs ', 10),
('Dra Livia Silva', 'Fisioterapeuta', 'Quartas e Sextas', 'Das 7hs às 14hs da tarde', 12),
('Dr Gonçalves Guimarães', 'Psiquiatra', 'Quartas e Sextas', 'Das 8hs às 15hs da tarde', 13),
('Dr Gomes Mendonça', 'Odontologista', 'Segundas e Terça', 'Das 13hs às 17hs ', 15);

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
('luan001@gmail.com', 'luan123', 'bolinha2', '2023-03-07', 5, '../upload/perfil/64820aacef26a.', '64820aacef26a'),
('luan924@gmail.com', '12345', 'Jordan', '2022-12-03', 7, '../upload/perfil/64820a9f57bbe.', '64820a9f57bbe'),
('ederson@gmail.com', '90645te', 'Ederson', '2022-12-05', 9, '../upload/perfil/64820b063d99c.', '64820b063d99c'),
('jerrymorto@gmail.com', '12345t', 'Tom', '2024-02-12', 13, '../upload/perfil/64820bde488eb.', '64820bde488eb'),
('mariellesilva@gmail.com', '1234567', 'Marielle', '2023-12-03', 15, '../upload/perfil/64820c04c5493.', '64820c04c5493'),
('suzanna@gmail.com', '12345', 'Suzanna13', '2003-12-03', 16, '../upload/perfil/6482096a14586.', '6482096a14586'),
('mariene@gmail.com', '9894ggfr5', 'Mariene', '2004-12-03', 17, '../upload/perfil/64820bf02300f.', '64820bf02300f'),
('cicero.batista6@aluno.ce.gov.br', '12345678', 'Rikelme', '1212-12-12', 25, '../upload/perfil/64820cecde711.', '64820cecde711'),
('susanna@gmail.com', '12345678', 'Rikelme', '1222-12-12', 27, '../upload/perfil/6481dcddc20d5.jpg', '6481dcddc20d5'),
('edilaine@gmail.com', '12345678', 'Rikelme', '1222-12-12', 28, '../upload/perfil/6481e2ee23642.jpg', '6481e2ee23642');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
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
-- AUTO_INCREMENT de tabela `tbmedicamentos`
--
ALTER TABLE `tbmedicamentos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `tbmedicos`
--
ALTER TABLE `tbmedicos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tbubs`
--
ALTER TABLE `tbubs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
