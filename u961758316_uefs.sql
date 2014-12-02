-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Dez-2014 às 22:17
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Moda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
`id` int(11) NOT NULL,
  `Data` date DEFAULT NULL,
  `Texto` text NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `servico_id` int(11) DEFAULT NULL,
  `produto_id` int(11) DEFAULT NULL,
  `statos` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
`id` int(11) NOT NULL,
  `usuarios_id` tinyint(5) NOT NULL,
  `email` varchar(150) NOT NULL,
  `from_id` tinyint(4) NOT NULL,
  `from_email` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` longtext NOT NULL,
  `viewed` enum('0','1') NOT NULL DEFAULT '0',
  `recieve_date` varchar(120) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=89 ;

--
-- Extraindo dados da tabela `inbox`
--

INSERT INTO `inbox` (`id`, `usuarios_id`, `email`, `from_id`, `from_email`, `title`, `content`, `viewed`, `recieve_date`) VALUES
(51, 89, 'Suki Snow', 101, 'Pellentesque.tincidunt@dolor.com', 'teste', 'dertyuio', '0', 'Monday, 1st December 2014, 9:10:14 pm'),
(72, 31, 'Izaya Orihara', 101, 'Pellentesque.tincidunt@dolor.com', 'yuyuyuy', 'tytytytyt', '0', 'Monday, 1st December 2014, 9:28:29 pm'),
(74, 77, 'Adara Wong', 101, 'Pellentesque.tincidunt@dolor.com', 'Lorem ipsum dolor', 'oi', '0', 'Monday, 1st December 2014, 9:39:43 pm'),
(75, 82, 'Vivien Barnes', 101, 'Pellentesque.tincidunt@dolor.com', 'o', '0', '0', 'Monday, 1st December 2014, 9:48:49 pm');

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
-- Estrutura da tabela `outbox`
--

CREATE TABLE IF NOT EXISTS `outbox` (
`id` int(11) NOT NULL,
  `usuarios_id` tinyint(5) NOT NULL,
  `email` varchar(150) NOT NULL,
  `to_usuarios_id` tinyint(4) NOT NULL,
  `to_email` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` longtext NOT NULL,
  `senddate` varchar(120) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=85 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `name`, `Descricao`, `Preco`, `Data_Publicacao`, `Data_Vencimento`, `Foto_Video`, `Bloqueado`, `Expirado`, `ACombinar`, `usuario_id`, `category_id`) VALUES
(1, 'servico1', 'servico', 11, '2014-12-02', '2015-01-01', 'koala-2.jpg', 0, 0, 1, 1, 1);

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
-- Estrutura da tabela `users`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `role`, `hash_change_password`, `created`, `modified`) VALUES
(1, 'ArthurHagnês', '4ea29bda296b03619d0e5214dbc2648881720689', 'arthur@hotmail.com', NULL, 'admin', 'fc7fc56609a46d3dfe8356983f2d4a8446582f2286e2b5dd57da5881f78652b8', '2014-11-20 13:50:03', '2014-11-20 14:18:40'),
(2, 'admin', 'afebb4a30fffa1f413fd3045a5646d1fad3bd17a', 'admin@hotmail.com', NULL, 'admin', NULL, '2014-11-21 00:40:05', '2014-11-21 00:40:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_bloq`
--

CREATE TABLE IF NOT EXISTS `user_bloq` (
`id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `dataBloq` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

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
  `Status` tinyint(1) DEFAULT '0',
  `VotosPositivos` int(11) DEFAULT '0',
  `VotosNegativos` int(11) DEFAULT '0',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `Email`, `name`, `Senha`, `Telefone1`, `Data_Nascimento`, `Sexo`, `Telefone2`, `Foto`, `Strikes`, `Status`, `VotosPositivos`, `VotosNegativos`, `username`, `password`, `created`) VALUES
(1, 'arthru@hotmail.com', 'arthur@hotmail.com', 'art', '7534891139', '2014-12-02', 'M', '7534891139', 'koala.jpg', 0, 0, 0, 0, 'arthru@hotmail.com', '2e7baeeb58f97970b3d3f5fbee04b09900f5b6f7', '2014-12-02');

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
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
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
-- Indexes for table `outbox`
--
ALTER TABLE `outbox`
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=89;
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
-- AUTO_INCREMENT for table `outbox`
--
ALTER TABLE `outbox`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `terceiros`
--
ALTER TABLE `terceiros`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_bloq`
--
ALTER TABLE `user_bloq`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
