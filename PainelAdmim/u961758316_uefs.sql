-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2014 às 20:23
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
CREATE DATABASE IF NOT EXISTS `u961758316_uefs` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `u961758316_uefs`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
`id` int(11) NOT NULL,
  `Data` date DEFAULT NULL,
  `Texto` text NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `servico_id` int(11) DEFAULT NULL,
  `produto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagems`
--

DROP TABLE IF EXISTS `mensagems`;
CREATE TABLE IF NOT EXISTS `mensagems` (
`id` int(11) NOT NULL,
  `Assunto` varchar(255) NOT NULL,
  `Texto` text NOT NULL,
  `Data` date DEFAULT NULL,
  `Destinatario` varchar(255) DEFAULT NULL,
  `Emisor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `negociacaos`
--

DROP TABLE IF EXISTS `negociacaos`;
CREATE TABLE IF NOT EXISTS `negociacaos` (
`id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `produto_id` int(11) DEFAULT NULL,
  `servico_id` int(11) DEFAULT NULL,
  `interessado` int(11) DEFAULT NULL,
  `data_final` date DEFAULT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=117 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reports`
--

DROP TABLE IF EXISTS `reports`;
CREATE TABLE IF NOT EXISTS `reports` (
`id` int(11) NOT NULL,
  `Texto` text NOT NULL,
  `Data` date NOT NULL,
  `produto_id` int(11) DEFAULT NULL,
  `servico_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=101 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `terceiros`
--

DROP TABLE IF EXISTS `terceiros`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `terceiros`
--

INSERT INTO `terceiros` (`id`, `name`, `NomeEmpresa`, `Imagem`, `ValorPago`, `category_id`, `DataInicio`, `link`, `usuario_id`) VALUES
(1, 'Lorem', 'Sit Amet Luctus LLP', 'Cdtdaddkeblde', 0.68, 5, '2014-11-29', 'http://www.batata.co.uk', 76),
(2, 'Lorem ipsum', 'Erat Vitae Risus Corporation', 'Nvsbzuenhuvrb', 8.2, 8, '2014-12-01', 'http://www.hu3hu3.br', 47),
(3, 'Lorem ipsum', 'Tincidunt Consulting', 'Poddaangvesaa', 2.1, 10, '2014-12-07', 'http://www.kawaii-desu.co.jp', 16),
(4, 'Lorem ipsum dolor', 'Enim Etiam Gravida Incorporated', 'Ezchsdbnsxhtb', 6.29, 6, '2014-11-30', 'http://www.vivadilma.org.com.br', 45),
(5, 'Lorem ipsum dolor sit', 'Quam Vel Corp.', 'Sxanouibbubnm', 2.15, 6, '2014-12-12', 'http://www.mintira-vivaaecio.com.br', 84);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `hash_change_password` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `role`, `hash_change_password`, `created`, `modified`) VALUES
(1, 'ArthurHagnês', '4ea29bda296b03619d0e5214dbc2648881720689', 'arthur@hotmail.com', NULL, 'admin', '1782e64549e3e095a0d9279cafacf1902137a158a41274a4614eabb4dbd0b0cd', '2014-11-20 13:50:03', '2014-11-22 19:56:03'),
(2, 'admin', 'afebb4a30fffa1f413fd3045a5646d1fad3bd17a', 'admin@admin.com', NULL, 'admin', NULL, '2014-11-28 20:12:53', '2014-11-28 20:12:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_bloq`
--

DROP TABLE IF EXISTS `user_bloq`;
CREATE TABLE IF NOT EXISTS `user_bloq` (
`id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `dataBloq` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
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
  `regra` int(11) NOT NULL DEFAULT '0',
  `created` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;

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
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_bloq`
--
ALTER TABLE `user_bloq`
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `mensagems`
--
ALTER TABLE `mensagems`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `negociacaos`
--
ALTER TABLE `negociacaos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `terceiros`
--
ALTER TABLE `terceiros`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_bloq`
--
ALTER TABLE `user_bloq`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
