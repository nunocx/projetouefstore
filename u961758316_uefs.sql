-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Nov-2014 às 20:48
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u961758316_uefs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
`id` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Texto` text NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `servico_id` int(11) DEFAULT NULL,
  `produto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagems`
--

CREATE TABLE IF NOT EXISTS `mensagems` (
`id` int(11) NOT NULL,
  `Assunto` varchar(255) NOT NULL,
  `Texto` text NOT NULL,
  `Data` date DEFAULT NULL,
  `Destinatario` varchar(255) DEFAULT NULL,
  `Emisor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `negociacaos`
--

CREATE TABLE IF NOT EXISTS `negociacaos` (
`id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `produto_id` int(11) DEFAULT NULL,
  `servico_id` int(11) DEFAULT NULL,
  `interessado` int(11) DEFAULT NULL,
  `data_final` date DEFAULT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Descricao` text NOT NULL,
  `Preco` double NOT NULL,
  `Data_Publicacao` date DEFAULT NULL,
  `Data_Vencimento` date DEFAULT NULL,
  `Quantidade` int(11) NOT NULL DEFAULT '0',
  `Foto_Video` varchar(255) DEFAULT NULL,
  `Bloqueado` int(11) DEFAULT '0',
  `Expirado` int(11) DEFAULT '0',
  `CondicaoUso` text,
  `usuario_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
`id` int(11) NOT NULL,
  `Texto` text NOT NULL,
  `Data` date NOT NULL,
  `produto_id` int(11) DEFAULT NULL,
  `servico_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE IF NOT EXISTS `servicos` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Descricao` text NOT NULL,
  `Preco` double NOT NULL,
  `Data_Publicacao` date DEFAULT NULL,
  `Data_Vencimento` date DEFAULT NULL,
  `Foto_Video` varchar(255) DEFAULT NULL,
  `Bloqueado` int(11) DEFAULT '0',
  `Expirado` int(11) DEFAULT '0',
  `ACombinar` int(11) DEFAULT '0',
  `usuario_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `terceiros`
--

CREATE TABLE IF NOT EXISTS `terceiros` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `NomeEmpresa` varchar(255) NOT NULL,
  `Imagem` varchar(255) DEFAULT NULL,
  `ValorPago` double NOT NULL,
  `category_id` int(11) NOT NULL,
  `DataInicio` date NOT NULL,
  `link` varchar(255) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `userblock`
--

CREATE TABLE IF NOT EXISTS `userblock` (
`id` int(11) NOT NULL,
  `Usuario_id` int(11) NOT NULL,
  `dataBlock` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL,
  `Telefone1` varchar(255) NOT NULL DEFAULT '0',
  `Data_Nascimento` date DEFAULT NULL,
  `Sexo` char(1) NOT NULL,
  `Telefone2` varchar(255) DEFAULT '0',
  `Foto` varchar(255) DEFAULT NULL,
  `Strikes` int(11) DEFAULT '0',
  `Status` int(11) DEFAULT '0',
  `VotosPositivos` int(11) DEFAULT '0',
  `VotosNegativos` int(11) DEFAULT '0',
  `regra` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `Email`, `name`, `Senha`, `Telefone1`, `Data_Nascimento`, `Sexo`, `Telefone2`, `Foto`, `Strikes`, `Status`, `VotosPositivos`, `VotosNegativos`, `regra`) VALUES
(1, 'mbjhg', 'HJHJHJ', 'HBJGHJ', 'KNJKHKH', '2014-11-25', 'F', 'JGHJGJG', NULL, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagems`
--
ALTER TABLE `mensagems`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `negociacaos`
--
ALTER TABLE `negociacaos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terceiros`
--
ALTER TABLE `terceiros`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userblock`
--
ALTER TABLE `userblock`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`,`Email`), ADD UNIQUE KEY `Email_UNIQUE` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mensagems`
--
ALTER TABLE `mensagems`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `negociacaos`
--
ALTER TABLE `negociacaos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `terceiros`
--
ALTER TABLE `terceiros`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userblock`
--
ALTER TABLE `userblock`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
