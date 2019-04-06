-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Nov-2018 às 17:42
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitesoi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sd_clientes`
--

CREATE TABLE `sd_clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `cli_sobrenome` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `cli_data_nasc` date DEFAULT NULL,
  `cli_rg` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `cli_cpf` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `cli_ddd` int(2) DEFAULT NULL,
  `cli_fone` int(8) DEFAULT NULL,
  `cli_celular` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `cli_endereco` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `cli_numero` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `cli_bairro` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `cli_cidade` varchar(50) CHARACTER SET utf8 COLLATE utf8_german2_ci DEFAULT NULL,
  `cli_uf` char(2) CHARACTER SET utf8 DEFAULT NULL,
  `cli_cep` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `cli_email` varchar(150) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sd_empresa`
--

CREATE TABLE `sd_empresa` (
  `id` int(11) NOT NULL,
  `sobre` text NOT NULL,
  `visao` varchar(255) DEFAULT NULL,
  `valores` varchar(255) DEFAULT NULL,
  `missao` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sd_empresa`
--

INSERT INTO `sd_empresa` (`id`, `sobre`, `visao`, `valores`, `missao`) VALUES
(1, '<p>fdfdfdffsfsfsdf</p>', 'fdfsdfsdf', '<p>fdfdfdffsfsfsdf</p>', 'dfdffsdf'),
(3, '<p>gfdgdfgdfgdf</p>', 'Teste', '<p>gfdgdfgdfgdf</p>', 'Teeeessset');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sd_user`
--

CREATE TABLE `sd_user` (
  `user_id` int(11) NOT NULL,
  `user_nome` varchar(20) NOT NULL,
  `user_email` varchar(80) NOT NULL,
  `user_pw` varchar(250) NOT NULL,
  `user_data` date DEFAULT NULL,
  `user_hora` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sd_user`
--

INSERT INTO `sd_user` (`user_id`, `user_nome`, `user_email`, `user_pw`, `user_data`, `user_hora`) VALUES
(1, 'admin', 'ivoosantos@hotmail.com', 'admin', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sd_clientes`
--
ALTER TABLE `sd_clientes`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indexes for table `sd_empresa`
--
ALTER TABLE `sd_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_user`
--
ALTER TABLE `sd_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sd_clientes`
--
ALTER TABLE `sd_clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sd_empresa`
--
ALTER TABLE `sd_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sd_user`
--
ALTER TABLE `sd_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
