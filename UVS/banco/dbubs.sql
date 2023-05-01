-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 01-Maio-2023 às 08:54
-- Versão do servidor: 5.5.28
-- versão do PHP: 5.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `dbubs`
--
CREATE DATABASE IF NOT EXISTS `dbubs` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbubs`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadmin`
--

CREATE TABLE IF NOT EXISTS `tbadmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(220) DEFAULT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmedicos`
--

CREATE TABLE IF NOT EXISTS `tbmedicos` (
  `profissional` varchar(100) NOT NULL,
  `formacao` varchar(100) NOT NULL,
  `dias` varchar(100) NOT NULL,
  `horarios` varchar(100) NOT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `tbmedicos`
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
-- Estrutura da tabela `tbubs`
--

CREATE TABLE IF NOT EXISTS `tbubs` (
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `data` date DEFAULT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `tbubs`
--

INSERT INTO `tbubs` (`email`, `senha`, `nome`, `data`, `id`) VALUES
('luan001@gmail.com', 'luan123', 'bolinha2', '2023-03-07', 5),
('luan924@gmail.com', '12345', 'Luan', '2022-12-03', 7),
('ederson@gmail.com', '90645te', 'Ederson Silva', '2022-12-05', 9),
('jerrymorto@gmail.com', '12345t', 'Tom', '2024-02-12', 13),
('mariellesilva@gmail.com', '1234567', 'Marielle Franco', '2023-12-03', 15),
('aurelio2010@gmail.com', 'muitolegal', 'Aurelio Silva', '2006-01-15', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbupload`
--

CREATE TABLE IF NOT EXISTS `tbupload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `data_upload` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
