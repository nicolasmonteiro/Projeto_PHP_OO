-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/03/2021 às 18:23
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_hc`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `hc_cadastro`
--

CREATE TABLE `hc_cadastro` (
  `cad_id` int(100) NOT NULL,
  `cad_nome` varchar(255) NOT NULL,
  `cad_endereco` varchar(255) NOT NULL,
  `cad_datanascimento` date NOT NULL,
  `cad_email` varchar(255) NOT NULL,
  `cad_senha` varchar(100) NOT NULL,
  `cad_fone` varchar(100) NOT NULL,
  `cad_tipo` varchar(100) NOT NULL,
  `cad_tempo` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `hc_consultas`
--

CREATE TABLE `hc_consultas` (
  `con_id` int(11) NOT NULL,
  `con_datahora` varchar(50) NOT NULL,
  `con_espec` varchar(100) NOT NULL,
  `con_aten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `hc_exames`
--

CREATE TABLE `hc_exames` (
  `exame_id` int(100) NOT NULL,
  `exame_tipo` varchar(100) NOT NULL,
  `exame_quant` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `hc_cadastro`
--
ALTER TABLE `hc_cadastro`
  ADD PRIMARY KEY (`cad_id`);

--
-- Índices de tabela `hc_consultas`
--
ALTER TABLE `hc_consultas`
  ADD PRIMARY KEY (`con_id`);

--
-- Índices de tabela `hc_exames`
--
ALTER TABLE `hc_exames`
  ADD PRIMARY KEY (`exame_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `hc_cadastro`
--
ALTER TABLE `hc_cadastro`
  MODIFY `cad_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `hc_consultas`
--
ALTER TABLE `hc_consultas`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `hc_exames`
--
ALTER TABLE `hc_exames`
  MODIFY `exame_id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
