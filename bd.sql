-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Maio-2019 às 19:27
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_cliente`
--

CREATE TABLE `cad_cliente` (
  `codigo` int(4) NOT NULL,
  `login` varchar(18) DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `tipo_pessoa` varchar(45) DEFAULT NULL,
  `tipo_cliente` varchar(45) DEFAULT NULL,
  `nome_fantasia` varchar(60) DEFAULT NULL,
  `empresa` varchar(40) DEFAULT NULL,
  `inscricao` varchar(20) DEFAULT NULL,
  `ins_estadual` varchar(20) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `numero` varchar(4) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `contato` varchar(16) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `data_visita` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `funcao` varchar(45) DEFAULT NULL,
  `objeto` varchar(200) DEFAULT NULL,
  `tipo_residuo` varchar(200) DEFAULT NULL,
  `destinacao` varchar(200) DEFAULT NULL,
  `periodicidade` varchar(200) DEFAULT NULL,
  `funcaoo` varchar(200) DEFAULT NULL,
  `quantidade_equipe` varchar(3) DEFAULT NULL,
  `quantidade_material` varchar(5) DEFAULT NULL,
  `unidade_material` varchar(4) DEFAULT NULL,
  `especificacao_material` varchar(200) DEFAULT NULL,
  `quantidade_fardamento` varchar(5) DEFAULT NULL,
  `unidade_fardamento` varchar(4) DEFAULT NULL,
  `especificacao_fardamento` varchar(200) DEFAULT NULL,
  `especificacao_treinamento` varchar(200) DEFAULT NULL,
  `informacaoo` varchar(200) DEFAULT NULL,
  `nome_responsaveltec` varchar(30) DEFAULT NULL,
  `funcao_responsaveltec` varchar(50) DEFAULT NULL,
  `nome_tecseguranca` varchar(30) DEFAULT NULL,
  `funcao_tecseguranca` varchar(50) DEFAULT NULL,
  `situacao` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='			';

--
-- Extraindo dados da tabela `cad_cliente`
--

INSERT INTO `cad_cliente` (`codigo`, `login`, `nome`, `tipo_pessoa`, `tipo_cliente`, `nome_fantasia`, `empresa`, `inscricao`, `ins_estadual`, `cep`, `endereco`, `numero`, `bairro`, `cidade`, `uf`, `contato`, `telefone`, `data_visita`, `email`, `funcao`, `objeto`, `tipo_residuo`, `destinacao`, `periodicidade`, `funcaoo`, `quantidade_equipe`, `quantidade_material`, `unidade_material`, `especificacao_material`, `quantidade_fardamento`, `unidade_fardamento`, `especificacao_fardamento`, `especificacao_treinamento`, `informacaoo`, `nome_responsaveltec`, `funcao_responsaveltec`, `nome_tecseguranca`, `funcao_tecseguranca`, `situacao`) VALUES
(8, '08.236.381/0003-86', 'GLENCORE SERVICOS S.A.', '', '', 'GLENCORE', 'GLENCORE', '', '', '65071-322', 'AV COLARES MOREIRA', '101', 'CALHAU', 'SAO LUIS', 'MA', '', '(98) 3235-4003', '', 'carolina.sales@glencore.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(10, '05.760.293/0001-29', 'SECRETARIA MUNICIPAL DE SAUDE', '', '', 'SEMUS', 'SEMUS', '', '', '65.025-901', 'RUA DEPUTADO RAIMUNDO VIEIRA SILVA ', '2000', 'CENTRO', 'SAO LUIS', 'MA', '', '(98) 3214-7300', '07/05/2019', '', '', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '10.735.145/0019-13', 'INSTITUTO FEDERAL DO MARANHAO', '', '', 'IFMA - MONTE CASTELO', 'IFMA - MONTE CASTELO', '', '', '65030-005', 'AV GETULIO VARGAS', '04', 'MONTE CASTELO', 'SAO LUIS', 'MA', '', '(98) 3218-9025', '05/05/2019', '', 'saa', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '14.608.683/0001-79', 'JB CONSTRUCOES E INCORPORACOES LTDA', 'Juridica', 'Empresa Privada', 'JB CONSTRUCOES', 'JB CONSTRUCOES', '', 'Nao contribuinte', '', 'RUA DAS MITRAS, QD 21, SALA 218', '10', 'PORTO DE ITAQUI', 'SAO LUIS', 'MA', '', '(98) 944484947', '23/05/2019', '', '', 'LOCACAO DE CACAMBA, COLETA, TRANSPORTE E DESTINACAO DE RESIDUOS CLASSE I E II', 'EFLUENTE SANITAIO, MADEIRA, PAPEL, PLASTICO, METAL, ENTULHO, LIXO COMUM, ORGANICO, PERIGOSO SOLIDO (TRAPOS, EPIS E ETC).', 'CTR MAXTEC, BITAL, ATERRO EM ROSARIO E RECICLADORAS.', 'POR SOLICITACAO DO CLIENTE.', 'MOTORISTA, SELECIONADOR', '01', '01', '', 'POLIGUINDASTE, HIDROVACUO', '', '', 'PADRAO DO SERVICO DE COLETA', 'NAO NECESSITA', '', 'NAYARA SILVA', 'GERENTE COMERCIAL', '', '', 'Inativo '),
(13, '06.191.223/0002-40', 'FERTIPAR FERTILIZANTES DO MARANHAO LTDA', '', '', 'FERTIPAR FERTILIZANTES', 'FERTIPAR FERTILIZANTES', '', 'Contribuinte de ICMS', '65095-600', 'AV ENGENHEIRO EMILIANO MACIEIRA', '3000', 'TIBIRI', 'SAO LUIS', 'MA', '', '', '23/11/2017', '', '', 'COLETA, TRANSPORTE E DESTINACAO FINAL DE RESIDUOS CLASSE I E II (LAMPADAS E PLASTICOS)', '', '', '', 'MOTORISTA, AJUDANTE', '01', '01', '', 'CAMINHAO POLIGUINDASTE, CAMINHAO COM CARROCERIA FECHADA(PARA COLETA DAS LAMPADAS)', '', '', 'PADRAO JA  UTILIZADO NA COLETA  DE RESIDUOS', '', '', 'ANDREA NICOLE', 'GERENTE COMERCIAL', '', 'a', 'Ativo'),
(49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cacamba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(153, 'cacamba'),
(154, 'trator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_cliente`
--
ALTER TABLE `cad_cliente`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `objetoservico`
--
ALTER TABLE `objetoservico`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_cliente`
--
ALTER TABLE `cad_cliente`
  MODIFY `codigo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `objetoservico`
--
ALTER TABLE `objetoservico`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
