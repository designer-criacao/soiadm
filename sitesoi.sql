-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Set-2019 às 00:22
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
-- Estrutura da tabela `sd_categoria`
--

CREATE TABLE `sd_categoria` (
  `id` int(11) NOT NULL,
  `cat_nome` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sd_categoria`
--

INSERT INTO `sd_categoria` (`id`, `cat_nome`) VALUES
(1, 'Sites'),
(2, 'Design Gráfico');

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

--
-- Extraindo dados da tabela `sd_clientes`
--

INSERT INTO `sd_clientes` (`cli_id`, `cli_nome`, `cli_sobrenome`, `cli_data_nasc`, `cli_rg`, `cli_cpf`, `cli_ddd`, `cli_fone`, `cli_celular`, `cli_endereco`, `cli_numero`, `cli_bairro`, `cli_cidade`, `cli_uf`, `cli_cep`, `cli_email`) VALUES
(1, 'Ivo', 'Oliveira dos Santos', '1984-08-18', '234324560', '23412345609', 11, 39999898, '989899898', 'Av Elisio Teixeira', '3303', 'Morro Grande', 'São Paulo', 'SP', '02810000', 'ivoocacau@outlook.com'),
(4, 'Claudia', 'Soares Oliveira', '1977-07-14', '<br /><b>No', '11223434509', 11, 40592309, '989899898', 'Av. Elisio Teixeira', '3303', 'Morro Grande', 'São Paulo', 'SP', '02898000', 'cacau@outlook.com'),
(5, 'Diego', 'Gonçalves', '0000-00-00', '349877891', '333.222.111-00', 11, 40592309, '980807070', 'Av. Elisio Teixeira', '3303', 'Sítio Morro Grande', 'São Paulo', 'SP', '02898000', 'didiego@outlook.com');

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
(4, '<p><span style=\"color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\">A Soi Design, foi desenvolvida com o intuito de atender um nicho de clientes que se encontram nas Pequenas Empresas e Micro Empreendedores Individuais.</span><br style=\"box-sizing: border-box; color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\" /><span style=\"color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\">Pois uma empresa hoje independente, seja ela uma Multi Nacional ou Micro Empresa,&nbsp;</span><br style=\"box-sizing: border-box; color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\" /><span style=\"color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\">precisa de um site na internet para melhor divulga&ccedil;&atilde;o da mesma e de suas respectivas atividades,&nbsp;</span><br style=\"box-sizing: border-box; color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\" /><span style=\"color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\">caso contr&aacute;rio acaba n&atilde;o tendo muito cr&eacute;dito entre seus clientes.&nbsp;</span><br style=\"box-sizing: border-box; color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\" /><span style=\"color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\">Pensando nisso surgiu a id&eacute;ia de desenvolver sites para empresas de pequeno porte, MEI\'s, pessoas f&iacute;sicas e afins,&nbsp;</span><br style=\"box-sizing: border-box; color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\" /><span style=\"color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\">pois um site se torna a identidade da institui&ccedil;&atilde;o na web.&nbsp;</span><br style=\"box-sizing: border-box; color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\" /><span style=\"color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\">Partindo deste principio estou come&ccedil;ando a atender esses clientes,&nbsp;</span><br style=\"box-sizing: border-box; color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\" /><span style=\"color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\">sendo um trabalho bem elaborado, com muita responsabilidade, criatividade e &eacute;tica.&nbsp;</span><br style=\"box-sizing: border-box; color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\" /><span style=\"color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\">Marcas registradas da SoiDesign.</span></p>', 'A SOI Design tem como objetivo ser uma das melhores empresas no seguimento de 									Design gráfico e Web Design, para pequenas empresas.', '<p><span style=\"color: #4e4852; font-family: \'Open Sans\', Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 1.3px;\">A Soi Design, foi desenvolvida com o intuito de atender um nicho de clientes que se encontram nas Pequenas Empresas e Micro Empr', 'Fazer com que empresas de pequeno porte ou empreendedores individuais sejam reconhecidos como grandes empresas na web.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sd_portfolio`
--

CREATE TABLE `sd_portfolio` (
  `id` int(11) NOT NULL,
  `port_categoria` char(2) NOT NULL,
  `nome_img` varchar(150) DEFAULT NULL,
  `img` varchar(150) NOT NULL,
  `port_url` varchar(150) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sd_portfolio`
--

INSERT INTO `sd_portfolio` (`id`, `port_categoria`, `nome_img`, `img`, `port_url`) VALUES
(2, 'D', 'EBQ', '190904205245143-0.jpg.jpg', NULL),
(3, 'D', 'Ebenezer', '190904214448ebenezer.jpg.jpg', NULL),
(5, 'S', 'ES Machine', '190910135202siteesmachine.jpg.jpg', 'www.esmachine.com.br'),
(6, 'S', 'Teveporte', '190910135323siteteve.jpg.jpg', 'www.teveporte.com.br');

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
-- Indexes for table `sd_categoria`
--
ALTER TABLE `sd_categoria`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sd_portfolio`
--
ALTER TABLE `sd_portfolio`
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
-- AUTO_INCREMENT for table `sd_categoria`
--
ALTER TABLE `sd_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sd_clientes`
--
ALTER TABLE `sd_clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sd_empresa`
--
ALTER TABLE `sd_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sd_portfolio`
--
ALTER TABLE `sd_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sd_user`
--
ALTER TABLE `sd_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
