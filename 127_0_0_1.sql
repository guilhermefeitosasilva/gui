-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Maio-2019 às 19:26
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
CREATE DATABASE IF NOT EXISTS `andes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `andes`;

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
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `clienteID` int(8) NOT NULL,
  `nomecompleto` varchar(50) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `departamento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`clienteID`, `nomecompleto`, `usuario`, `email`, `senha`, `departamento`) VALUES
(57, 'Jair Messias Bolsonaro', 'bolsonaro', 'jair.messias@maxtecservicos.com.br', 'jair', 'presidencia'),
(58, 'Donald John Trump', 'trump', 'trump@maxtecservicos.com.br', 'trump', 'presidencia'),
(61, 'Carlilson Reis', 'Carlilson ', 'carlilson.reis@maxtecservicos.com', '1010', 'diretoria'),
(62, 'karina rocha ', 'karina', 'karina.rocha@maxtecservicos.com.br', '010101', 'qualidade'),
(63, 'Guilherme Feitosa Silva', 'feitosa', 'guifeitosasilva@hotmail.com', '194865', 'tecnologia da informacao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cores`
--

CREATE TABLE `cores` (
  `codigo` int(11) NOT NULL,
  `descricao` varchar(20) NOT NULL,
  `ativo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cores`
--

INSERT INTO `cores` (`codigo`, `descricao`, `ativo`) VALUES
(1, 'Amarelo', 'Sim'),
(2, 'Azul', 'Sim'),
(3, 'Bege', 'sim'),
(4, 'Preto', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamentos`
--

CREATE TABLE `departamentos` (
  `departamentoID` int(11) NOT NULL,
  `nomedepartamento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `departamentos`
--

INSERT INTO `departamentos` (`departamentoID`, `nomedepartamento`) VALUES
(1, 'financeiro'),
(2, 'comercial'),
(3, 'atendimento'),
(4, 'direção'),
(6, 'gerência financeira'),
(7, 'presidencia'),
(8, 'CPD');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destinacaoresiduo`
--

CREATE TABLE `destinacaoresiduo` (
  `codigo` int(11) NOT NULL,
  `destinacao_residuo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='	';

--
-- Extraindo dados da tabela `destinacaoresiduo`
--

INSERT INTO `destinacaoresiduo` (`codigo`, `destinacao_residuo`) VALUES
(99, ' '),
(100, ' '),
(101, ' '),
(102, ' '),
(103, ' '),
(104, ' '),
(105, ' '),
(106, ' '),
(107, ' '),
(108, ' '),
(109, ' ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipetrabalho`
--

CREATE TABLE `equipetrabalho` (
  `codigo` int(11) NOT NULL,
  `equipe_trabalho` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipetrabalho`
--

INSERT INTO `equipetrabalho` (`codigo`, `equipe_trabalho`) VALUES
(93, ' '),
(94, ' '),
(95, ' '),
(96, ' '),
(97, ' '),
(98, ' '),
(99, ' '),
(100, ' '),
(101, ' '),
(102, ' '),
(103, ' ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `estadoID` tinyint(3) UNSIGNED NOT NULL,
  `nome` char(20) DEFAULT '0',
  `sigla` char(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`estadoID`, `nome`, `sigla`) VALUES
(1, 'Acre', 'AC'),
(2, 'Alagoas', 'AL'),
(3, 'Amapá', 'AP'),
(4, 'Amazonas', 'AM'),
(5, 'Bahia', 'BA'),
(6, 'Ceará', 'CE'),
(7, 'Distrito Federal', 'DF'),
(8, 'Espírito Santo', 'ES'),
(9, 'Goiás', 'GO'),
(10, 'Maranhão', 'MA'),
(11, 'Mato Grosso', 'MT'),
(12, 'Mato Grosso do Sul', 'MS'),
(13, 'Minas Gerais', 'MG'),
(14, 'Pará', 'PA'),
(15, 'Paraíba', 'PB'),
(16, 'Paraná', 'PR'),
(17, 'Pernambuco', 'PE'),
(19, 'Piauí', 'PI'),
(20, 'RG do Norte', 'RN'),
(21, 'RG do Sul', 'RS'),
(22, 'Rio de Janeiro', 'RJ'),
(24, 'Rondônia', 'RO'),
(25, 'Roraima', 'RA'),
(26, 'Santa Catarina', 'SC'),
(27, 'São Paulo', 'SP'),
(28, 'Santa Catarina', 'SC'),
(29, 'Sergipe', 'SE'),
(30, 'Tocantins', 'TO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fardamentoepi`
--

CREATE TABLE `fardamentoepi` (
  `codigo` int(11) NOT NULL,
  `fardamento_epi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fardamentoepi`
--

INSERT INTO `fardamentoepi` (`codigo`, `fardamento_epi`) VALUES
(88, ' '),
(89, ' '),
(90, ' '),
(91, ' '),
(92, ' '),
(93, ' '),
(94, ' '),
(95, ' '),
(96, ' '),
(97, ' '),
(98, ' ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `fornecedorID` int(8) NOT NULL,
  `nomefornecedor` varchar(50) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estadoID` tinyint(3) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`fornecedorID`, `nomefornecedor`, `endereco`, `cidade`, `estadoID`, `telefone`) VALUES
(1, 'Joe Mugger', 'Rua Ernesto de Paula Santos, 187', 'Recife', 17, '949 568 7852'),
(2, 'Dining Suppliers', '5 Hometown Dr.', 'São Paulo', 27, '565 123 1223'),
(3, 'Pacific Merchandise', '56 Parkway Plaza', 'Rio de Janeiro', 22, '310 345 4565'),
(4, 'Quick Clothing', '4598 Main St', 'Porto Alegre', 21, '858 555 1654');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores_contatos`
--

CREATE TABLE `fornecedores_contatos` (
  `contatoID` int(11) NOT NULL,
  `fornecedorID` int(11) DEFAULT NULL,
  `departamentoID` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedores_contatos`
--

INSERT INTO `fornecedores_contatos` (`contatoID`, `fornecedorID`, `departamentoID`, `nome`, `telefone`, `email`) VALUES
(1, 1, 1, 'Joana Piauí', '33262836', 'joana@joemugger.com'),
(2, 1, 2, 'Ricardo Prata', '33262836', 'ricardo@joemugger.com'),
(3, 2, 3, 'Gustavo Bege', '33262836', 'gustavo@dining.com'),
(4, 2, 2, 'Marta Borges', '33262836', 'marta@dining.com'),
(5, 3, 4, 'Fernando Maranhão', '33262836', 'fernando@pacific.com'),
(6, 3, 1, 'Ronaldo Catarinense', '33262836', 'ronaldo@pacific.com'),
(7, 4, 2, 'Alexandre Cisne', '33262836', 'alexandre@quickclothing.com'),
(8, 4, 1, 'Paulo José', '33262836', 'paulo@quickclothing.com'),
(9, 4, 4, 'Victor Nazário', '33262836', 'victor@quickclothing.com'),
(10, 4, 4, 'evellyn sales', '3326.2836', 'aneevellyn@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `franquias`
--

CREATE TABLE `franquias` (
  `franquiaID` int(11) NOT NULL,
  `nomegerente` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estadoID` tinyint(1) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `dataabertura` date NOT NULL,
  `faturamento` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `franquias`
--

INSERT INTO `franquias` (`franquiaID`, `nomegerente`, `endereco`, `cidade`, `estadoID`, `telefone`, `dataabertura`, `faturamento`) VALUES
(1, 'Fabiana Albuquerque', 'Rua Jose Lourenço, 870 Sala 210', 'Fortaleza', 6, '085-2615554', '2006-05-18', '200000.00'),
(2, 'Neto Leal', 'Rua Ernesto de Paula Santos, 187 Sala 505', 'Recife', 17, '081.3326.2836', '2006-11-01', '300000.00'),
(3, 'Roberto Rabelo', 'Av. Antonio Carlos Magalhaes, 188', 'Salvador', 5, '071.3580705', '2006-12-16', '450000.00'),
(4, 'Victor Alves', 'Av. Barão de Studart, 101', 'Fortaleza', 6, '085.2480500', '2007-01-02', '150000.00'),
(5, 'Anne Sampaio', 'Av. Senhor do Bonfim', 'Salvador', 5, '417 625 6005', '2007-03-08', '280000.00'),
(6, 'Vinicius Samico', 'Av. Agamenon Magalhaes', 'Recife', 17, '081.33222233', '2007-05-01', '120000.00'),
(7, 'Paula Sanguinetti', 'Av. Presidente Prudente', 'Recife', 1, '081.3326.2938', '2007-10-11', '150000.00'),
(8, 'Michelle Alves', 'Av. Getúlio Vargas', 'Porto Alegre', 21, '051.3030302', '2007-11-20', '320000.00'),
(9, 'Saulo Brito', 'Av. São João, 10', 'São Paulo', 27, '011.3223-2232', '2008-04-02', '323221.00'),
(10, 'Davi Sampaio', 'Av. Copacabana, 101', 'Rio de Janeiro', 22, '021.3223-1010', '2008-05-01', '223421.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupoinsumos`
--

CREATE TABLE `grupoinsumos` (
  `referencia` varchar(10) NOT NULL,
  `grupo` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grupoinsumos`
--

INSERT INTO `grupoinsumos` (`referencia`, `grupo`, `tipo`) VALUES
('', '', ''),
('01', 'Mao de obra', 'MAO DE OBRA'),
('02', 'Materiais', 'MATERIAL DE CONSUMO'),
('03', 'Equipamentos de Obras', 'MATERIAL DE CONSUMO'),
('04', 'Verbas', 'MATERIAL DE CONSUMO'),
('05', 'Material de Expediente', 'MATERIAL DE EXPEDIENTE'),
('06', 'PatrimÃ´nio', 'EQUIPAMENTO'),
('07', 'manuntencao', 'MATERIAL DE MANUNTENCAO'),
('08', 'Combustiveis e Lubrifricantes', 'COMBUSTIVEIS E LUBRIFICANTES'),
('09', 'Encargos Contratuais', 'OUTROS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo_familia`
--

CREATE TABLE `grupo_familia` (
  `referencia` varchar(10) NOT NULL,
  `familia` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grupo_familia`
--

INSERT INTO `grupo_familia` (`referencia`, `familia`) VALUES
('01.001', 'Mao de Obra Propria'),
('01.002', 'Mao de Obra de Terceiros'),
('01.003', 'Servicos de Terceiros'),
('02.001', 'Aglomerantes'),
('02.002', 'Agregados');

-- --------------------------------------------------------

--
-- Estrutura da tabela `insumos`
--

CREATE TABLE `insumos` (
  `codidoID` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `sinonimo` varchar(45) NOT NULL,
  `unidademedida` varchar(45) NOT NULL,
  `grupoinsumo` varchar(45) NOT NULL,
  `familia` varchar(45) NOT NULL,
  `contafinanceira` varchar(45) NOT NULL,
  `classificacaofiscal` varchar(45) NOT NULL,
  `produtofiscal` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `insumos`
--

INSERT INTO `insumos` (`codidoID`, `descricao`, `sinonimo`, `unidademedida`, `grupoinsumo`, `familia`, `contafinanceira`, `classificacaofiscal`, `produtofiscal`) VALUES
(41, 'cabo HDMI', 'cabo', 'metro', 'ti', '', 'ti', 'aaaaaa', 'aaaaaa'),
(42, 'mangueira', 'man', 'metro', '1', '', 'asgas', 'asfgsa', 'saggs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento_tecnico`
--

CREATE TABLE `levantamento_tecnico` (
  `levantamento_tecnicoID` int(11) NOT NULL,
  `cliente` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `uf` varchar(45) DEFAULT NULL,
  `contato` varchar(45) DEFAULT NULL,
  `datavisita` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `objeto` varchar(45) DEFAULT NULL,
  `quantidade_equipe` varchar(45) DEFAULT NULL,
  `funcao` varchar(45) DEFAULT NULL,
  `quantidade_material` varchar(45) DEFAULT NULL,
  `unidade_material` varchar(45) DEFAULT NULL,
  `especificacao_material` varchar(45) DEFAULT NULL,
  `quantidade_fardamento` varchar(45) DEFAULT NULL,
  `unidade_fardamento` varchar(45) DEFAULT NULL,
  `especificacao_fardamento` varchar(45) DEFAULT NULL,
  `especificacao_treinamento` varchar(45) DEFAULT NULL,
  `informacao` varchar(45) DEFAULT NULL,
  `nome_responsaveltec` varchar(45) DEFAULT NULL,
  `funcao_responsaveltec` varchar(45) DEFAULT NULL,
  `rubrica_responsaveltec` varchar(45) DEFAULT NULL,
  `nome_tecseguranca` varchar(45) DEFAULT NULL,
  `funcao_tecseguranca` varchar(45) DEFAULT NULL,
  `rubrica_tecseguranca` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `levantamento_tecnico`
--

INSERT INTO `levantamento_tecnico` (`levantamento_tecnicoID`, `cliente`, `endereco`, `cidade`, `uf`, `contato`, `datavisita`, `telefone`, `objeto`, `quantidade_equipe`, `funcao`, `quantidade_material`, `unidade_material`, `especificacao_material`, `quantidade_fardamento`, `unidade_fardamento`, `especificacao_fardamento`, `especificacao_treinamento`, `informacao`, `nome_responsaveltec`, `funcao_responsaveltec`, `rubrica_responsaveltec`, `nome_tecseguranca`, `funcao_tecseguranca`, `rubrica_tecseguranca`) VALUES
(8, 'Guilherme Feitosa Silva', 'guigui@maxtecservicos.com', 'sao luis', 'ma', '99991430194', '20/03/2019', '11111111', 'Guilherme Feitosa Silva', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'meirynalda araujo', 'rua sambaqui', NULL, NULL, '989999999', '21/03/2019', '989999999', 'meirynalda araujo', '5', 'pedreiros', '10', '1', 'cimentos', '10', '1', 'capacete', 'sim', 'nao', 'daniel vaz', 'tecnico seguranca do trabalho', 'daniel', 'daniel vaz', 'tecnico seguranca do trabalho', 'daniel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento_tecnico_residuos`
--

CREATE TABLE `levantamento_tecnico_residuos` (
  `levantamento_tecnico_re_ID` int(11) NOT NULL,
  `cliente` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `uf` varchar(45) DEFAULT NULL,
  `contato` varchar(45) DEFAULT NULL,
  `datavisita` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `objeto_servico` varchar(45) DEFAULT NULL,
  `tipo_residuos` varchar(45) DEFAULT NULL,
  `destinacao_residuos` varchar(45) DEFAULT NULL,
  `periodicidade_coletas` varchar(45) DEFAULT NULL,
  `quantidade_equipe` varchar(45) DEFAULT NULL,
  `funcao_equipe` varchar(45) DEFAULT NULL,
  `quantidade_material` varchar(45) DEFAULT NULL,
  `unidade_material` varchar(45) DEFAULT NULL,
  `especificacao_material` varchar(45) DEFAULT NULL,
  `quantidade_epi` varchar(45) DEFAULT NULL,
  `unidade_epi` varchar(45) DEFAULT NULL,
  `especificacao_epi` varchar(45) DEFAULT NULL,
  `informacao_treinamento` varchar(45) DEFAULT NULL,
  `opcao_integracao` varchar(45) DEFAULT NULL,
  `documentos` varchar(45) DEFAULT NULL,
  `nome_responsaveltec` varchar(45) DEFAULT NULL,
  `funcao_responsaveltec` varchar(45) DEFAULT NULL,
  `rubrica_responsaveltec` varchar(45) DEFAULT NULL,
  `analise_critica` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `levantamento_tecnico_residuos`
--

INSERT INTO `levantamento_tecnico_residuos` (`levantamento_tecnico_re_ID`, `cliente`, `endereco`, `cidade`, `uf`, `contato`, `datavisita`, `telefone`, `objeto_servico`, `tipo_residuos`, `destinacao_residuos`, `periodicidade_coletas`, `quantidade_equipe`, `funcao_equipe`, `quantidade_material`, `unidade_material`, `especificacao_material`, `quantidade_epi`, `unidade_epi`, `especificacao_epi`, `informacao_treinamento`, `opcao_integracao`, `documentos`, `nome_responsaveltec`, `funcao_responsaveltec`, `rubrica_responsaveltec`, `analise_critica`) VALUES
(13, 'Guilherme Feitosa Silva', 'Av Ipanema, 22123', NULL, NULL, 'presidente', '21/01/1997', '33262836', 'residuos', 'lixo', 'ctr', 'alta', '01', 'motorista', '01', '01', 'cacamba', '01', '01', 'macacao', 'sim', NULL, 'admissional', 'gui', 'programador', 'gui', NULL),
(14, 'eduardo rayol', 'Av Ipanema, 22123', NULL, NULL, '99991430194', '20/03/2019', '33262836', 'residuos', 'lixo', 'ctr', 'alta', '01', 'pedreiro', '10', '10', 'cacamba', '01', '05', 'luvas', 'sim', NULL, 'papel', 'gui', 'programador', 'guilherme', NULL),
(21, 'ANTONIA', 'RUA POTENGI', 'SAO LUIS', 'MA', '9999111111', '08/04/2019', '999999999', 'RESIDUOS', 'LIXO', 'CTR', 'ALTA', '5', 'MOTORISTA', '01', '01', 'CACAMBA', '01', '023', 'LUVAS', 'CURSO 20 HORAS', '', '', 'NAYARA', 'ENGENHEIRA AMBIENTAL ', 'NAYARA', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

CREATE TABLE `marcas` (
  `codigo` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `ativo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `marcas`
--

INSERT INTO `marcas` (`codigo`, `descricao`, `ativo`) VALUES
(1, 'POTY', 'sim'),
(2, 'NASSAU', 'SIM'),
(3, 'FLORATTA', 'SIM'),
(4, 'TIGRE', 'SIM'),
(5, 'TIGRE', 'SIM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materialequipamento`
--

CREATE TABLE `materialequipamento` (
  `codigo` int(11) NOT NULL,
  `material_equipamento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materialequipamento`
--

INSERT INTO `materialequipamento` (`codigo`, `material_equipamento`) VALUES
(93, ' '),
(94, ' '),
(95, ' '),
(96, ' '),
(97, ' '),
(98, ' '),
(99, ' '),
(100, ' '),
(101, ' '),
(102, ' '),
(103, ' ');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_item`
--

CREATE TABLE `pedidos_item` (
  `pedidoID` int(11) DEFAULT NULL,
  `produtoID` int(11) DEFAULT NULL,
  `precounitario` decimal(10,2) DEFAULT NULL,
  `quantidade` smallint(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedidos_item`
--

INSERT INTO `pedidos_item` (`pedidoID`, `produtoID`, `precounitario`, `quantidade`) VALUES
(1, 1, '20.00', 10),
(1, 2, '9.00', 20),
(1, 5, '20.00', 5),
(2, 10, '5.00', 50),
(2, 11, '9.00', 5),
(3, 13, '14.00', 20),
(3, 15, '14.00', 10),
(3, 20, '12.00', 5),
(3, 19, '12.00', 10),
(3, 21, '5.00', 10),
(4, 20, '12.00', 20),
(5, 18, '12.00', 20),
(5, 19, '12.00', 10),
(5, 20, '12.00', 15),
(5, 17, '12.00', 5),
(6, 1, '20.00', 5),
(6, 2, '9.00', 100),
(6, 3, '3.00', 20),
(6, 4, '3.00', 200),
(6, 7, '14.00', 70),
(6, 19, '12.00', 10),
(7, 13, '14.00', 10),
(7, 14, '9.00', 5),
(7, 21, '5.00', 15),
(8, 16, '12.00', 5),
(8, 17, '12.00', 5),
(8, 10, '12.00', 60),
(8, 1, '20.00', 50),
(9, 11, '12.00', 30),
(9, 12, '21.00', 20),
(10, 18, '12.00', 35),
(10, 9, '5.00', 100),
(10, 7, '7.00', 90),
(10, 14, '9.00', 50),
(10, 6, '14.00', 10),
(10, 22, '2.00', 50),
(11, 21, '5.00', 300),
(12, 11, '12.00', 10),
(12, 5, '21.00', 15),
(12, 3, '3.00', 5),
(13, 2, '14.00', 20),
(13, 19, '12.00', 10),
(13, 22, '2.00', 50),
(13, 3, '3.00', 100),
(14, 7, '7.00', 50),
(14, 8, '3.00', 10),
(15, 1, '20.00', 8),
(15, 2, '9.00', 15),
(15, 17, '12.00', 15),
(16, 18, '12.00', 10),
(16, 19, '12.00', 5),
(16, 21, '5.00', 10),
(16, 10, '12.00', 5),
(17, 6, '14.00', 5),
(17, 8, '3.00', 100),
(17, 2, '9.00', 15),
(17, 12, '21.00', 5),
(17, 13, '14.00', 5),
(17, 15, '14.00', 5),
(17, 17, '12.00', 5),
(18, 1, '20.00', 20),
(18, 3, '3.00', 15),
(19, 21, '5.00', 20),
(19, 7, '7.00', 15),
(19, 14, '9.00', 10),
(20, 18, '12.00', 20),
(20, 19, '12.00', 10),
(20, 22, '2.00', 15),
(20, 8, '3.00', 5),
(20, 15, '14.00', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_status`
--

CREATE TABLE `pedidos_status` (
  `statusID` int(11) NOT NULL,
  `nomestatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedidos_status`
--

INSERT INTO `pedidos_status` (`statusID`, `nomestatus`) VALUES
(1, 'Pagamento Confirmado'),
(2, 'Pagamento Pendente'),
(3, 'Cancelado pelo cliente'),
(4, 'Cancelado pela empresa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `periodicidadecoleta`
--

CREATE TABLE `periodicidadecoleta` (
  `codigo` int(11) NOT NULL,
  `periodicidade_coleta` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `periodicidadecoleta`
--

INSERT INTO `periodicidadecoleta` (`codigo`, `periodicidade_coleta`) VALUES
(96, ' '),
(97, ' '),
(98, ' '),
(99, ' '),
(100, ' '),
(101, ' '),
(102, ' '),
(103, ' '),
(104, ' '),
(105, ' '),
(106, ' ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `plano_financeiro`
--

CREATE TABLE `plano_financeiro` (
  `conta` varchar(10) NOT NULL,
  `descricao` varchar(80) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `redutora` varchar(45) DEFAULT NULL,
  `ativa` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `plano_financeiro`
--

INSERT INTO `plano_financeiro` (`conta`, `descricao`, `tipo`, `redutora`, `ativa`) VALUES
('1', 'ENTRADAS/RECEITAS', 'Totalizadora', 'nao', 'nao'),
('1.01', 'RECEITA DE SERVICOS', 'Totalizadora', 'nao', 'sim'),
('1.01.01', 'Receita de SERV Apoio Operacional', 'Resultado', 'nao', 'sim'),
('1.01.02', 'Receita de SERV Limpeza e Conservacao', 'Resultado', 'nao', 'sim'),
('1.01.03', 'Receita de SERV Carga e Descarga', 'Resultado', 'nao', 'sim'),
('1.01.04', 'Receita de SERV Apoio ADM e Manutencao Predia', 'Resultado', 'nao', 'sim'),
('1.01.05', 'Receita de SERV locacao de Maquinas e Equipamentos', 'Resultado', 'nao', 'sim'),
('1.01.06', 'Receita de Serv Gerrenciamento de Residuos', 'Resultado', 'nao', 'Sim'),
('1.01.07', 'Anulacao de Receita', 'Resultado', 'sim', 'sim'),
('1.01.08', 'Receita de Serv Coleta de ResÃ­duo Efluente', 'Resultado', 'nao', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiporesiduo`
--

CREATE TABLE `tiporesiduo` (
  `codigo` int(11) NOT NULL,
  `tipo_residuo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tiporesiduo`
--

INSERT INTO `tiporesiduo` (`codigo`, `tipo_residuo`) VALUES
(122, ' '),
(123, ' '),
(124, ' '),
(125, ' '),
(126, ' '),
(127, ' '),
(128, ' '),
(129, ' '),
(130, ' '),
(131, ' '),
(132, ' ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `transportadoras`
--

CREATE TABLE `transportadoras` (
  `transportadoraID` int(11) NOT NULL,
  `nometransportadora` varchar(50) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estadoID` tinyint(3) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `usuario` varchar(19) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `transportadoras`
--

INSERT INTO `transportadoras` (`transportadoraID`, `nometransportadora`, `endereco`, `cidade`, `estadoID`, `cep`, `usuario`, `telefone`) VALUES
(1, 'feitosa', 'Rua Ernesto de Paula Santos, 187', '', 17, '51.021-330', 'guilherme', ''),
(2, 'gui', 'Rua Visconde de Sabugosa, 11', 'São Paulo', 27, '01.323.123', '2424243221', '132151'),
(3, 'SEDEX', 'Av Ipanema, 22123', 'Rio de Janeiro', 21, '02.320.121', '2342424324', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_cliente`
--
ALTER TABLE `cad_cliente`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`clienteID`);

--
-- Indexes for table `cores`
--
ALTER TABLE `cores`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`departamentoID`);

--
-- Indexes for table `destinacaoresiduo`
--
ALTER TABLE `destinacaoresiduo`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `equipetrabalho`
--
ALTER TABLE `equipetrabalho`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`estadoID`);

--
-- Indexes for table `fardamentoepi`
--
ALTER TABLE `fardamentoepi`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`fornecedorID`);

--
-- Indexes for table `fornecedores_contatos`
--
ALTER TABLE `fornecedores_contatos`
  ADD PRIMARY KEY (`contatoID`);

--
-- Indexes for table `franquias`
--
ALTER TABLE `franquias`
  ADD PRIMARY KEY (`franquiaID`);

--
-- Indexes for table `grupoinsumos`
--
ALTER TABLE `grupoinsumos`
  ADD PRIMARY KEY (`referencia`);

--
-- Indexes for table `grupo_familia`
--
ALTER TABLE `grupo_familia`
  ADD PRIMARY KEY (`referencia`);

--
-- Indexes for table `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`codidoID`);

--
-- Indexes for table `levantamento_tecnico`
--
ALTER TABLE `levantamento_tecnico`
  ADD PRIMARY KEY (`levantamento_tecnicoID`);

--
-- Indexes for table `levantamento_tecnico_residuos`
--
ALTER TABLE `levantamento_tecnico_residuos`
  ADD PRIMARY KEY (`levantamento_tecnico_re_ID`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `materialequipamento`
--
ALTER TABLE `materialequipamento`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `objetoservico`
--
ALTER TABLE `objetoservico`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `pedidos_status`
--
ALTER TABLE `pedidos_status`
  ADD PRIMARY KEY (`statusID`);

--
-- Indexes for table `periodicidadecoleta`
--
ALTER TABLE `periodicidadecoleta`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `plano_financeiro`
--
ALTER TABLE `plano_financeiro`
  ADD PRIMARY KEY (`conta`);

--
-- Indexes for table `tiporesiduo`
--
ALTER TABLE `tiporesiduo`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `transportadoras`
--
ALTER TABLE `transportadoras`
  ADD PRIMARY KEY (`transportadoraID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_cliente`
--
ALTER TABLE `cad_cliente`
  MODIFY `codigo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `clienteID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `cores`
--
ALTER TABLE `cores`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `departamentoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `destinacaoresiduo`
--
ALTER TABLE `destinacaoresiduo`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `equipetrabalho`
--
ALTER TABLE `equipetrabalho`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `estadoID` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `fardamentoepi`
--
ALTER TABLE `fardamentoepi`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `fornecedorID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fornecedores_contatos`
--
ALTER TABLE `fornecedores_contatos`
  MODIFY `contatoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `franquias`
--
ALTER TABLE `franquias`
  MODIFY `franquiaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `insumos`
--
ALTER TABLE `insumos`
  MODIFY `codidoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `levantamento_tecnico`
--
ALTER TABLE `levantamento_tecnico`
  MODIFY `levantamento_tecnicoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `levantamento_tecnico_residuos`
--
ALTER TABLE `levantamento_tecnico_residuos`
  MODIFY `levantamento_tecnico_re_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `materialequipamento`
--
ALTER TABLE `materialequipamento`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `objetoservico`
--
ALTER TABLE `objetoservico`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `pedidos_status`
--
ALTER TABLE `pedidos_status`
  MODIFY `statusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `periodicidadecoleta`
--
ALTER TABLE `periodicidadecoleta`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `tiporesiduo`
--
ALTER TABLE `tiporesiduo`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `transportadoras`
--
ALTER TABLE `transportadoras`
  MODIFY `transportadoraID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
