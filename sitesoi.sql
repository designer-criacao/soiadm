-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Out-2018 às 19:37
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estrutura da tabela `sd_empresa`
--

CREATE TABLE `sd_empresa` (
  `id` int(11) NOT NULL,
  `sobre` text NOT NULL,
  `visao` varchar(255) DEFAULT NULL,
  `valores` varchar(255) DEFAULT NULL,
  `missao` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sd_user`
--

CREATE TABLE `sd_user` (
  `user_id` int(11) NOT NULL,
  `user_nome` varchar(20) NOT NULL,
  `user_email` varchar(80) NOT NULL,
  `user_pw` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sd_user`
--

INSERT INTO `sd_user` (`user_id`, `user_nome`, `user_email`, `user_pw`) VALUES
(1, 'admin', 'ivoosantos@hotmail.com', 'admin');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `sd_empresa`
--
ALTER TABLE `sd_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sd_user`
--
ALTER TABLE `sd_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
