-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Set-2019 às 01:00
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `andes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_cliente`
--

CREATE TABLE `cad_cliente` (
  `num_levantamento` int(8) NOT NULL,
  `login` varchar(18) CHARACTER SET latin1 DEFAULT NULL,
  `nome` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `nome_fantasia` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `objeto` varchar(200) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COMMENT='			';

--
-- Extraindo dados da tabela `cad_cliente`
--

INSERT INTO `cad_cliente` (`num_levantamento`, `login`, `nome`, `nome_fantasia`, `objeto`) VALUES
(14, '01.010.101/0101-01', 'teste', 'teste', 'COLETA, TRANSPORTE E DESTINACAO DE RESIDUOS CLASSE I E II, COLETA, TRANSPORTE E DESTINACAO DE EFLUENTES OLEOSOS, COLETA, TRANSPORTE E DESTINACAO DE EFLUENTE SANITARIO');

--
-- Acionadores `cad_cliente`
--
DELIMITER $$
CREATE TRIGGER `num_lev` BEFORE INSERT ON `cad_cliente` FOR EACH ROW set NEW.num_levantamento=(select ifnull( max(num_levantamento) , 0 ) + 1 from cad_cliente)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `objetoservico`
--

CREATE TABLE `objetoservico` (
  `codigo` int(11) NOT NULL,
  `objeto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `objetoservico`
--

INSERT INTO `objetoservico` (`codigo`, `objeto`) VALUES
(1, 'COLETA, TRANSPORTE E DESTINACAO DE RESIDUOS CLASSE I E II'),
(172, 'COLETA, TRANSPORTE E DESTINACAO DE EFLUENTES OLEOSOS'),
(173, 'COLETA, TRANSPORTE E DESTINACAO DE EFLUENTE SANITARIO');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_cliente`
--
ALTER TABLE `cad_cliente`
  ADD PRIMARY KEY (`num_levantamento`),
  ADD UNIQUE KEY `notduplicate` (`login`);

--
-- Índices para tabela `objetoservico`
--
ALTER TABLE `objetoservico`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_cliente`
--
ALTER TABLE `cad_cliente`
  MODIFY `num_levantamento` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `objetoservico`
--
ALTER TABLE `objetoservico`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
