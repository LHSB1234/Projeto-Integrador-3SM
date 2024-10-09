-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/05/2024 às 00:34
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pecametalica`
--

CREATE TABLE `pecametalica` (
  `ID` int(11) NOT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `hora_anexo` datetime NOT NULL DEFAULT current_timestamp(),
  `peso` decimal(10,2) DEFAULT NULL,
  `dimensoes` varchar(100) DEFAULT NULL,
  `rf` varchar(100) DEFAULT NULL,
  `OrdemProducao_ID` int(11) NOT NULL,
  `imagem` longblob DEFAULT NULL,
  `extensao_arquivo` varchar(20) DEFAULT NULL,
  `caminho_imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `pecametalica`
--

INSERT INTO `pecametalica` (`ID`, `codigo`, `descricao`, `modelo`, `hora_anexo`, `peso`, `dimensoes`, `rf`, `OrdemProducao_ID`, `imagem`, `extensao_arquivo`, `caminho_imagem`) VALUES
(1, '01', 'Testetestetest', '', '2024-04-28 12:49:12', 100.00, '10.1', NULL, 0, NULL, NULL, '/typeease/imagens/'),
(2, '3', 'Algo ai', '', '2024-04-28 12:49:12', 9879.00, '9779', '6969', 0, NULL, NULL, '/typeease/imagens/'),
(3, '254213523', 'asdgasdg', '', '2024-04-28 12:49:12', 325235.00, '2523523\'', '6969', 0, NULL, NULL, '/typeease/imagens/'),
(4, '90', 'vhsdvhuadsuhfa', '', '2024-04-28 12:49:12', 87899.00, '78978978', '5120', 0, NULL, NULL, '/typeease/imagens/'),
(5, '789778979879', 'adgadsgasdg', '', '2024-04-28 12:49:12', 446.00, '464646', '567928', 0, NULL, NULL, '/typeease/imagens/'),
(6, '22', 'Essa peça que voce queria ? Um bolador de pastel grandão.', '', '2024-04-28 12:49:12', 20.00, '50', '18375426', 0, NULL, NULL, '/typeease/imagens/'),
(7, '789', 'Péça', '', '2024-04-28 12:49:12', 43.00, '15', '476920', 0, NULL, NULL, '/typeease/imagens/'),
(8, '7569523', 'zsdfhdhasd', '', '2024-04-28 12:49:12', 5456546.00, '56456456', '721504', 0, NULL, NULL, '/typeease/imagens/'),
(9, '4654656', 'sfsdfs', '', '2024-04-28 12:49:12', 54645.00, '456456', '6053982', 0, NULL, NULL, '/typeease/imagens/'),
(10, 'saff', 'fasdf', '', '2024-04-28 12:49:12', 54645.00, 'fasd', '6969', 0, NULL, NULL, '/typeease/imagens/'),
(11, '005', 'dsgadsg', '', '2024-04-28 12:49:12', 456.00, '46546', '6969', 0, NULL, NULL, '/typeease/imagens/'),
(12, '99', 'Essa peça é uma grande peça', 'LLL1', '2024-04-28 12:50:30', 86.00, '59', '6969', 0, '', NULL, '/typeease/imagens/'),
(13, '858525453l', 'blalblbalbalbal', 'LLL2', '2024-04-28 13:45:12', 1718718.00, '1481', NULL, 0, '', NULL, '/typeease/imagens/'),
(14, '48452501', 'gadshuashudg', '000069', '2024-04-28 13:54:53', 8488.00, '5545', NULL, 0, '', NULL, '/typeease/imagens/'),
(15, '4444', '888', 'LLLLL4', '2024-04-28 13:57:57', 477.00, 'GSDGAS', NULL, 0, '', NULL, '/typeease/imagens/'),
(16, '9987', 'Peçáááááá', 'LOLG1', '2024-04-28 13:59:14', 288.00, '8485', '6969', 0, '', NULL, '/typeease/imagens/'),
(17, '5967867688', 'DGASDG', 'KKKKKJ4', '2024-04-28 14:01:58', 788.99, '569', '6969', 0, '', NULL, '/typeease/imagens/'),
(18, '665656456', 'gdadsgasdg', 'L22', '2024-04-28 14:31:22', 6.00, '866', '6969', 0, '', NULL, '/typeease/imagens/'),
(19, '111111', 'Agora vai!', 'LL22', '2024-04-28 14:42:17', 22.00, '22', '6969', 0, '', 'png', '/typeease/imagens/'),
(20, '455518', 'ULTIMA DELAS', 'LLL22', '2024-04-28 14:48:20', 848484.00, '488484', '6969', 0, '', 'png', '/typeease/imagens/'),
(21, '75375373', 'rewefhgasdgasdg', 'asdgasdg', '2024-04-28 15:14:59', 5556.00, '955555', '6969', 0, '', 'png', '/typeease/imagens/'),
(22, '79', 'gafds', 'll', '2024-04-29 13:02:28', 6.00, '42', '6969', 0, NULL, NULL, 'C:/xampp/htdocs/www/typeease/imagens/662fc4949f515.png'),
(23, '77777', 'fDFasf', '546', '2024-04-29 13:03:13', 46.00, '6', '6969', 0, NULL, NULL, 'C:/xampp/htdocs/www/typeease/imagens/662fc4c1a3852.png'),
(24, '2496', 'Peça 01', 'PPP9', '2024-04-29 13:05:44', 12.00, '10', '5067', 0, NULL, NULL, 'C:/xampp/htdocs/www/typeease/imagens/662fc558e8687.png'),
(25, '95995599559', 'É UMA PEÇA AI', 'FAZ O L 22', '2024-04-30 19:31:33', 22.00, '22', '6969', 0, NULL, NULL, 'C:/xampp/htdocs/www/typeease/imagens/663171454081e.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `rf` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `nome` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `rf`, `senha`, `telefone`, `nome`) VALUES
(1, '7052', '7894', '15997065475', 'Cris\r\n\r\n'),
(2, '1010', '456', '15997322332', 'Bel\r\n'),
(7, '87591036', 'caualenda51', '15998412242', 'Caua Kamui'),
(8, '07365', 'batatinha', '15997875086', 'Enzo'),
(9, '874630', 'joaolindao', '40028922', 'Joao'),
(10, '4715', '123456', '15 99678 0954', 'Lucas de souza'),
(11, '5067', 'roger123', '15997380206', 'Rogerio Bento'),
(12, '69520', '111', '111', 'Teste 1 '),
(13, '19253408', '111', '111', 'Teste 1 '),
(14, '85931', '123', '222', 'Teste 2'),
(15, '70526', '123', '333', 'Teste 3'),
(18, '163087', '123', '444', 'Teste 4'),
(19, '78265309', '123', '555', 'Teste 5'),
(21, '6969', '69', '696969', 'Zero a Esquerda'),
(22, '2965', 'nilo', '997', 'Danilo Oliveira'),
(23, '9842760', '666', '555', 'Teste 5'),
(24, '5120', 'julia', '159979', 'Gustavo Telo'),
(25, '567928', 'melzinha', '1515', 'Melissa Camargo'),
(26, '18375426', 'beck', '9956', 'Jorge Bola Pastel'),
(27, '476920', 'mayumilinda', '15123', 'Rebeca Mayumi Nakashima'),
(28, '721504', '789', '666', 'lelelele'),
(29, '6053982', '123456', '3248', 'Michael'),
(30, '03276', '456', '7891', 'Exemplo');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pecametalica`
--
ALTER TABLE `pecametalica`
  ADD PRIMARY KEY (`ID`,`OrdemProducao_ID`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pecametalica`
--
ALTER TABLE `pecametalica`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
