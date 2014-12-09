-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Dez-2014 às 16:43
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
DROP DATABASE `u961758316_uefs`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `categories`
--

TRUNCATE TABLE `categories`;
--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Moda');

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
  `produto_id` int(11) DEFAULT NULL,
  `statos` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `comentarios`
--

TRUNCATE TABLE `comentarios`;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `mensagems`
--

TRUNCATE TABLE `mensagems`;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `negociacaos`
--

TRUNCATE TABLE `negociacaos`;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `produtos`
--

TRUNCATE TABLE `produtos`;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `reports`
--

TRUNCATE TABLE `reports`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `servicos`
--

TRUNCATE TABLE `servicos`;
--
-- Extraindo dados da tabela `servicos`
--


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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `terceiros`
--

TRUNCATE TABLE `terceiros`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `user_bloq`
--

DROP TABLE IF EXISTS `user_bloq`;
CREATE TABLE IF NOT EXISTS `user_bloq` (
`id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `dataBloq` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Truncate table before insert `user_bloq`
--

TRUNCATE TABLE `user_bloq`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `role`, `hash_change_password`, `created`, `modified`) VALUES
(1, 'admin', 'afebb4a30fffa1f413fd3045a5646d1fad3bd17a', 'admin@hotmail.com', NULL, 'admin', NULL, '2014-11-21 00:40:05', '2014-11-21 00:40:05');

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
  `Status` tinyint(1) DEFAULT '0',
  `VotosPositivos` int(11) DEFAULT '0',
  `VotosNegativos` int(11) DEFAULT '0',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `usuarios`
--

TRUNCATE TABLE `usuarios`;
--
-- Extraindo dados da tabela `usuarios`
--



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
-- Indexes for table `user_bloq`
--
ALTER TABLE `user_bloq`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `terceiros`
--
ALTER TABLE `terceiros`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_bloq`
--
ALTER TABLE `user_bloq`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

 -- Usuarios--

INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("lobortis.augue@Maurisblanditenim.com","Caesar Zeppeli","ADZ55RGP2OA","(75) 2671-9172","51-04-19","M","(75) 5934-3525",0,0,"lobortis.augue@Maurisblanditenim.com","ADZ55RGP2OA","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("odio@egestas.ca","Joseph Joestar","BOP30XXS9XR","(75) 5213-1803","45-10-07","M","(75) 3479-7257",0,0, "odio@egestas.ca","BOP30XXS9XR","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("risus@lacus.org","Alice Margatroid","FKA12CCQ5CA","(75) 1456-5985","74-03-30","F","(75) 4172-2350",0,0, "risus@lacus.org","FKA12CCQ5CA","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("sem.Pellentesque.ut@ante.org","Marisa Kirisame","ENS21OAQ7GN","(75) 2199-2086","32-06-10","F","(75) 5708-5182",0,0, "sem.Pellentesque.ut@ante.org","ENS21OAQ7GN","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("Donec.luctus.aliquet@risusDonecegestas.org","Fate Testarossa","WDO75RVI6PT","(75) 1340-2007","67-11-23","F","(75) 1458-7383",0,0, "Donec.luctus.aliquet@risusDonecegestas.org","WDO75RVI6PT","14-11-21"),("ligula.Nullam@molestie.com","Kathleen Daugherty","HZX27RTY8FX","(75) 9654-6465","34-05-09","M","(75) 9119-4181",0,0, "ligula.Nullam@molestie.com","HZX27RTY8FX","14-11-21"),("Suspendisse.dui.Fusce@per.com","Athena Garner","JPX91IUE5ZS","(75) 1159-9395","82-08-16","F","(75) 4204-3698",0,0, "Suspendisse.dui.Fusce@per.com","JPX91IUE5ZS","14-11-21"),("sed@etmalesuadafames.org","Margaret Joyner","BRF57SWI1IC","(75) 1074-8171","75-03-14","F","(75) 6716-0704",0,0, "sed@etmalesuadafames.org","BRF57SWI1IC","14-11-21"),("Nam@Donecelementumlorem.com","Elliott Baldwin","FRI96XMK4OL","(75) 8148-4387","35-06-27","M","(75) 8741-7529",0,0, "Nam@Donecelementumlorem.com","FRI96XMK4OL","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("Aliquam@duilectus.org","Nanoha Takamachi","MVD33PFH3MM","(75) 8893-5712","45-11-25","F","(75) 9226-2108",0,0, "Aliquam@duilectus.org","MVD33PFH3MM","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("erat@ultriciesligula.ca","Izaya Orihara","SAV92AGY7ZQ","(75) 7266-9802","92-11-16","M","(75) 8333-5575",0,0, "erat@ultriciesligula.ca","SAV92AGY7ZQ","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("accumsan.sed.facilisis@augue.co.uk","Shizuo Heiwajima","CFW46XJQ3PH","(75) 5223-8772","88-09-27","M","(75) 8963-9692",0,0, "accumsan.sed.facilisis@augue.co.uk","CFW46XJQ3PH","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("Nullam@actellus.co.uk","Senpen Sydonay","QUJ79MXN7WZ","(75) 6010-9858","32-11-07","M","(75) 8130-2425",0,0, "Nullam@actellus.co.uk","QUJ79MXN7WZ","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("consectetuer.rhoncus@sit.ca","Kura Hecate","LNU33ZHB6OK","(75) 6064-2493","75-05-26","F","(75) 1472-2950",0,0, "consectetuer.rhoncus@sit.ca","LNU33ZHB6OK","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("velit@sodaleselit.net","Mathilde Saint-Omer","NKF06PKN8FN","(75) 5428-4862","59-11-27","F","(75) 8183-5529",0,0, "velit@sodaleselit.net","NKF06PKN8FN","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("diam.luctus@eulacus.edu","Niji no Kenshi Merihim","ICB32XWO9FD","(75) 9181-1551","67-07-09","M","(75) 2397-9939",0,0, "diam.luctus@eulacus.edu","ICB32XWO9FD","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("scelerisque.neque@amet.ca","Ryougi Shiki","MXJ06POY2EL","(75) 7827-4043","70-02-07","F","(75) 3670-6263",0,0, "scelerisque.neque@amet.ca","MXJ06POY2EL","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("ut.nulla.Cras@sapienAenean.co.uk","Mikiya Kokutou","GML93QFK7HJ","(75) 1906-8072","57-08-11","M","(75) 2502-6291",0,0, "ut.nulla.Cras@sapienAenean.co.uk","GML93QFK7HJ","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("malesuada.vel.convallis@dolorsit.org","Rika Furude","IWI57DIB0HI","(75) 4416-8294","78-08-31","F","(75) 3630-5095",0,0, "malesuada.vel.convallis@dolorsit.org","IWI57DIB0HI","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("neque.non.quam@euismodac.co.uk","Houjou Satoko","NUE13RMS5RO","(75) 7347-0915","79-11-20","F","(75) 1287-6372",0,0, "neque.non.quam@euismodac.co.uk","NUE13RMS5RO","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("Class@hymenaeos.com","Okabe Rintarou","ZPR15AVA6VZ","(75) 5311-3531","42-08-31","M","(75) 5158-8513",0,0, "Class@hymenaeos.com","ZPR15AVA6VZ","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("ornare.In@urnajustofaucibus.edu","Makise Kurisu","XNW92UYS5RG","(75) 2567-9344","47-08-05","F","(75) 5005-1516",0,0, "ornare.In@urnajustofaucibus.edu","XNW92UYS5RG","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("pulvinar@tristiquesenectuset.edu","Haruka Kaminogi","JJD02LPC1QG","(75) 8622-1219","32-08-26","F","(75) 2838-9330",0,0, "pulvinar@tristiquesenectuset.edu","JJD02LPC1QG","14-11-21")
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("laoreet@magnaDuis.org","Karasu Noein","HJT19ZZH7FL","(75) 5075-0374","95-06-26","M","(75) 1923-0954",0,0, "laoreet@magnaDuis.org","HJT19ZZH7FL","14-11-21")


 -- Serviços--

INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet","269.07","14-12-21","15-01-22",1,1,1,1,2),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet","1340.94","14-11-25","14-12-26",1,0,1,2,9),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis","1701.06","14-12-15","15-01-14",0,1,1,18,3),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida","741.65","14-12-21","15-01-23",1,0,0,18,7),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam","1804.33","14-11-28","15-01-14",0,0,0,2,8);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et","103.22","14-11-28","15-01-17",1,0,1,63,6),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.","57.06","14-12-16","15-01-21",0,0,0,19,1),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis","19.38","14-12-23","15-01-01",0,0,0,16,4),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis","550.32","14-12-03","14-12-26",0,1,0,7,4),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac","1758.51","14-12-19","15-01-12",0,0,0,5,6);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum","Lorem","819.50","14-12-16","14-12-28",1,1,0,14,1),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet","127.78","14-12-09","15-01-21",1,1,1,14,9),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.","564.12","14-12-14","15-01-24",1,0,0,3,10),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,","925.24","14-11-28","15-01-08",1,0,1,2,5),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis","531.56","14-12-20","15-01-02",0,0,1,39,8);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet","1619.71","14-11-27","15-01-06",0,0,0,10,5),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.","200.13","14-12-24","15-01-04",0,0,0,8,9),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut","886.90","14-12-01","15-01-01",1,0,0,4,6),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum","1581.11","14-12-20","15-01-17",0,0,0,13,5),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin","1921.89","14-12-13","15-01-20",1,1,0,5,4);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada","1274.94","14-12-01","15-01-18",1,1,0,17,2),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet","786.09","14-12-10","15-01-17",1,0,1,11,3),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis","1535.80","14-12-18","15-01-13",1,1,1,18,1),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis","264.67","14-12-23","14-12-31",1,1,0,9,2),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet","659.93","14-11-25","15-01-02",0,1,0,1,4);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac","1731.65","14-12-01","15-01-15",1,0,1,5,3),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum","1952.77","14-12-01","15-01-20",1,1,1,2,4),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec","1715.67","14-12-12","15-01-12",1,0,1,3,5),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada","1477.98","14-12-15","15-01-10",1,0,1,13,4),("Lorem ipsum dolor","Lorem","157.58","14-12-18","15-01-15",1,1,1,20,7);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.","1116.35","14-12-22","15-01-04",1,1,0,2,6),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.","18.92","14-11-27","15-01-11",1,0,0,9,2),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,","912.78","14-12-11","15-01-12",0,0,0,15,3),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing","470.93","14-12-16","15-01-21",1,0,1,4,5),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.","1388.14","14-11-26","15-01-13",0,0,0,6,1);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor.","1048.87","14-11-27","15-01-03",1,1,1,20,5),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer","1681.65","14-12-17","14-12-31",0,1,0,18,3),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque","409.99","14-12-15","14-12-31",1,0,1,12,2),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et","251.54","14-12-07","15-01-13",0,1,0,12,7),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac","1019.94","14-11-26","14-12-25",0,0,1,3,3);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna","1511.42","14-11-28","15-01-15",0,0,0,1,5),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing","959.90","14-12-07","14-12-28",1,0,1,17,4),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.","1514.14","14-12-01","15-01-17",0,1,0,8,7),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.","1083.96","14-12-11","15-01-04",0,0,0,34,1),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer","1683.77","14-11-28","14-12-25",0,0,0,1,7);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut","1325.44","14-12-23","15-01-10",0,0,1,57,1),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis","1963.46","14-12-17","15-01-17",0,1,1,16,10),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut","1344.99","14-12-06","15-01-06",1,0,1,5,8),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.","806.54","14-12-06","15-01-16",1,0,0,8,8),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor.","670.40","14-12-03","15-01-03",0,0,1,1,2);


 -- Produtos--

INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer","1262.69","14-11-30","15-01-01",579,0,0,"Lorem",7,9),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor.","1502.43","14-12-22","15-01-07",289,0,1,"Lorem",27,8),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.","427.69","14-12-22","14-12-27",926,1,0,"Lorem ipsum",31,2),("Lorem ipsum dolor","Lorem ipsum dolor sit","1184.46","14-12-08","15-01-02",482,0,1,"Lorem ipsum dolor",31,4),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque","1264.37","14-12-14","15-01-01",110,0,1,"Lorem",82,9);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec","759.52","14-12-24","15-01-18",407,1,1,"Lorem",77,6),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida","1390.55","14-12-19","14-12-31",675,1,1,"Lorem",89,6),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet","1250.57","14-11-27","15-01-19",184,1,0,"Lorem",94,8),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque","521.95","14-12-06","14-12-25",988,0,1,"Lorem ipsum",91,9),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed","327.92","14-12-14","14-12-25",700,1,0,"Lorem ipsum",36,7);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet","293.40","14-12-18","14-12-31",429,0,1,"Lorem ipsum dolor",23,4),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis","360.17","14-12-02","15-01-04",175,0,1,"Lorem",40,8),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at","792.03","14-12-23","15-01-17",432,1,0,"Lorem ipsum dolor",1,6),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.","1137.27","14-12-11","15-01-24",80,1,0,"Lorem ipsum dolor",35,2),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum","1476.50","14-11-30","15-01-24",173,0,1,"Lorem",56,1);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis","943.29","14-11-28","15-01-04",31,0,1,"Lorem",71,7),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna","1857.18","14-12-24","15-01-01",614,0,1,"Lorem ipsum dolor",18,5),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor.","1189.55","14-12-14","15-01-20",376,1,1,"Lorem ipsum dolor",40,7),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.","768.07","14-12-10","15-01-16",215,1,1,"Lorem",50,10),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id,","1778.67","14-11-29","15-01-04",276,1,1,"Lorem ipsum dolor",29,9);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.","991.72","14-12-21","15-01-11",679,1,0,"Lorem ipsum dolor",15,3),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin","1034.20","14-11-25","15-01-14",781,0,1,"Lorem ipsum",71,10),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt","249.74","14-12-18","15-01-12",594,1,1,"Lorem ipsum dolor",61,7),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et","104.58","14-12-15","15-01-12",691,0,0,"Lorem",40,3),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada","1462.84","14-12-04","14-12-31",944,1,0,"Lorem ipsum dolor",27,7);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing","1279.25","14-12-09","14-12-31",311,0,0,"Lorem",70,1),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.","109.81","14-12-15","14-12-31",843,0,1,"Lorem",30,4),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.","591.03","14-11-25","14-12-27",713,1,0,"Lorem",19,4),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum","209.07","14-11-25","15-01-19",285,0,1,"Lorem ipsum",26,6),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna.","793.03","14-11-30","15-01-12",157,1,1,"Lorem ipsum dolor",24,4);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.","1383.50","14-12-02","15-01-20",874,0,1,"Lorem",51,9),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,","826.96","14-12-06","15-01-11",336,1,0,"Lorem ipsum dolor",72,2),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.","166.40","14-12-04","15-01-15",499,1,0,"Lorem ipsum",90,8),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis","813.88","14-12-21","15-01-17",52,0,1,"Lorem",88,5),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a,","1865.39","14-11-26","15-01-07",799,0,0,"Lorem",45,8);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada","334.55","14-12-07","15-01-22",558,1,1,"Lorem ipsum dolor",57,9),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.","1420.87","14-12-21","15-01-08",650,1,1,"Lorem ipsum",25,9),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque","1317.68","14-11-30","14-12-27",456,0,0,"Lorem ipsum dolor",36,5),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam","11.93","14-12-12","15-01-10",491,1,1,"Lorem ipsum dolor",7,5),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer","892.61","14-12-12","15-01-13",334,1,0,"Lorem ipsum",54,5);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.","1667.84","14-12-07","14-12-27",568,1,1,"Lorem",56,1),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.","528.59","14-12-06","15-01-09",792,0,0,"Lorem ipsum dolor",59,2),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit.","1511.38","14-12-17","15-01-15",772,1,0,"Lorem",58,8),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt","1378.33","14-12-02","14-12-25",481,1,0,"Lorem ipsum dolor",27,8),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam","920.86","14-12-05","15-01-24",793,1,0,"Lorem ipsum",61,8);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a,","366.32","14-11-28","15-01-03",556,1,0,"Lorem ipsum",41,9),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor.","1624.62","14-11-28","15-01-18",986,0,0,"Lorem ipsum dolor",56,6),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam","779.97","14-12-24","15-01-07",878,0,0,"Lorem ipsum dolor",49,3),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis","1821.90","14-12-17","15-01-24",649,0,0,"Lorem ipsum",14,6),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit.","972.72","14-12-14","15-01-07",537,1,0,"Lorem ipsum",10,6);

 -- Comentarios--

INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-12","Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",82,49,33),("14-12-09","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus",83,35,22),("14-11-25","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing",2,36,11),("14-12-19","Lorem ipsum",52,30,26),("14-11-30","Lorem ipsum dolor",99,9,10);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-17","Lorem ipsum dolor sit",24,2,49),("14-12-22","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna.",42,12,50),("14-12-18","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a,",16,17,22),("14-12-13","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,",95,33,47),("14-12-10","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque",86,36,6);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-11-27","Lorem",67,36,7),("14-12-20","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.",77,23,16),("14-12-18","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet",88,10,20),("14-12-06","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id,",19,29,14),("14-12-05","Lorem ipsum dolor sit amet, consectetuer",55,1,13);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-11-28","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna",1,4,40),("14-12-07","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id,",53,27,25),("14-12-10","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,",84,30,49),("14-12-19","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,",40,15,34),("14-12-15","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna",87,27,11);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-08","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer",52,44,13),("14-12-01","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at",20,45,47),("14-11-26","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu",11,50,17),("14-12-19","Lorem ipsum dolor sit amet, consectetuer adipiscing",73,25,31),("14-12-20","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut",20,49,16);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-10","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu",61,35,47),("14-12-22","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida",72,23,30),("14-12-14","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.",2,46,29),("14-12-11","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at",24,9,16),("14-12-06","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at",30,45,9);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-07","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,",13,42,50),("14-12-05","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et",12,41,16),("14-12-23","Lorem",19,7,42),("14-12-17","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt",6,14,17),("14-12-09","Lorem ipsum dolor sit amet,",73,32,46);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-20","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu",53,39,18),("14-11-30","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna",11,41,37),("14-12-23","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,",8,46,2),("14-12-21","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing",17,28,18),("14-12-20","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac",12,46,35);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-11","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et",13,6,2),("14-12-07","Lorem ipsum",68,39,20),("14-12-06","Lorem ipsum dolor sit amet, consectetuer",28,35,32),("14-11-26","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque",13,38,17),("14-11-30","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor.",6,12,35);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-23","Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",87,19,21),("14-12-07","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna.",21,7,19),("14-12-04","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.",66,14,42),("14-11-26","Lorem ipsum dolor sit",84,43,23),("14-12-23","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id,",88,14,44);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-19","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt",27,35,36),("14-12-23","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras",97,47,42),("14-12-15","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer",86,2,50),("14-12-13","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.",27,21,18),("14-11-27","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.",42,28,50);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-02","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a,",16,4,44),("14-12-05","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada",93,25,24),("14-12-07","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa",95,24,46),("14-12-21","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet",5,2,42),("14-12-12","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec",50,17,40);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-11-27","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet",46,3,35),("14-12-20","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna",15,8,46),("14-12-24","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna",85,22,5),("14-11-26","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac",26,39,29),("14-12-09","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum",38,36,15);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-03","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac",95,1,43),("14-11-29","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna.",94,37,45),("14-12-19","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa",88,12,23),("14-12-21","Lorem ipsum dolor",97,29,45),("14-12-10","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.",7,41,46);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-11-26","Lorem ipsum dolor sit amet,",39,31,17),("14-12-05","Lorem ipsum dolor sit amet,",77,33,31),("14-12-05","Lorem ipsum dolor sit",17,46,17),("14-12-05","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.",66,3,29),("14-11-26","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id,",46,18,29);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-07","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam",77,9,45),("14-12-24","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum",22,43,49),("14-12-24","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede",72,30,4),("14-12-23","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus",86,15,18),("14-12-21","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis",67,17,5);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-05","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus",36,38,44),("14-11-26","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac",70,3,27),("14-12-13","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.",42,3,34),("14-12-05","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.",60,28,34),("14-11-25","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.",6,16,50);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-11-27","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at",17,9,41),("14-12-10","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut",16,16,17),("14-11-29","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec",92,36,50),("14-12-23","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,",50,13,29),("14-11-25","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.",82,34,30);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-11-27","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus",35,3,27),("14-12-17","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis",95,12,1),("14-12-11","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis",71,45,23),("14-12-07","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum",78,33,34),("14-12-15","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam",15,34,21);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-03","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed",59,31,37),("14-12-19","Lorem ipsum dolor sit amet, consectetuer",42,8,19),("14-11-26","Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",93,48,16),("14-11-28","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur",48,24,20),("14-11-29","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at",50,19,36);

 -- Mensagens--

INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor sit amet,","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer","14-12-03",1,6);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum","Lorem ipsum dolor sit amet, consectetuer","14-12-11",11,16);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.","14-12-16",21,26);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing","14-12-19",31,36);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor sit","Lorem","14-12-24",41,46);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna","14-11-28",41,56);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer","14-12-21",61,66);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut","14-12-22",71,76);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor sit amet,","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.","14-12-20",81,86);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut","14-11-30",91,96);

 -- Terceiros--

INSERT INTO `terceiros` (`name`,`NomeEmpresa`,`Imagem`,`ValorPago`,`category_id`,`DataInicio`,`link`,`usuario_id`) VALUES ("Lorem","Sit Amet Luctus LLP","Cdtdaddkeblde","0.68",5,"14-11-29","http://www.batata.co.uk",76);
INSERT INTO `terceiros` (`name`,`NomeEmpresa`,`Imagem`,`ValorPago`,`category_id`,`DataInicio`,`link`,`usuario_id`) VALUES ("Lorem ipsum","Erat Vitae Risus Corporation","Nvsbzuenhuvrb","8.20",8,"14-12-01","http://www.hu3hu3.br",47);
INSERT INTO `terceiros` (`name`,`NomeEmpresa`,`Imagem`,`ValorPago`,`category_id`,`DataInicio`,`link`,`usuario_id`) VALUES ("Lorem ipsum","Tincidunt Consulting","Poddaangvesaa","2.10",10,"14-12-07","http://www.kawaii-desu.co.jp",16);
INSERT INTO `terceiros` (`name`,`NomeEmpresa`,`Imagem`,`ValorPago`,`category_id`,`DataInicio`,`link`,`usuario_id`) VALUES ("Lorem ipsum dolor","Enim Etiam Gravida Incorporated","Ezchsdbnsxhtb","6.29",6,"14-11-30","http://www.vivadilma.org.com.br",45);
INSERT INTO `terceiros` (`name`,`NomeEmpresa`,`Imagem`,`ValorPago`,`category_id`,`DataInicio`,`link`,`usuario_id`) VALUES ("Lorem ipsum dolor sit","Quam Vel Corp.","Sxanouibbubnm","2.15",6,"14-12-12","http://www.mintira-vivaaecio.com.br",84);

 -- Reports--

INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa","14-12-13",46,14,6),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada","14-12-14",20,42,41),("Lorem ipsum dolor sit amet, consectetuer adipiscing","14-12-16",31,12,19),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna.","14-11-30",6,40,68),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet","14-12-09",32,15,3);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis","14-12-12",6,37,11),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec","14-12-15",37,13,44),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at","14-12-21",15,46,33),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer","14-12-11",35,39,61),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede","14-12-06",24,27,35);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus","14-11-30",1,44,52),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa","14-12-20",36,41,28),("Lorem ipsum dolor","14-11-30",27,36,51),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida","14-12-19",13,50,65),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis","14-12-24",19,35,20);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis","14-12-16",35,30,70),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis","14-12-06",16,20,16),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur","14-11-28",40,27,67),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida","14-12-16",20,32,2),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras","14-12-16",40,2,12);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis","14-12-07",14,45,87),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac","14-12-01",5,46,19),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque","14-12-11",45,21,9),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.","14-12-23",43,18,52),("Lorem ipsum dolor sit amet, consectetuer adipiscing","14-12-09",24,40,67);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin","14-12-08",39,26,55),("Lorem ipsum dolor sit amet,","14-12-15",22,3,56),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu","14-12-08",48,16,10),("Lorem ipsum dolor sit amet,","14-12-21",2,45,22),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras","14-12-11",37,48,55);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit","14-12-17",21,38,32),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam","14-12-10",20,1,74),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed","14-12-20",33,38,67),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.","14-12-13",37,3,81),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et","14-12-15",23,38,95);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a,","14-12-17",49,20,26),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede","14-12-16",22,27,57),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.","14-12-12",50,40,68),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing","14-12-14",19,27,75),("Lorem ipsum dolor","14-12-11",40,8,99);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.","14-11-25",5,4,31),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.","14-12-24",18,20,31),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed","14-11-26",13,33,97),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et","14-12-19",26,33,33),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,","14-12-14",29,37,71);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus","14-12-15",34,26,35),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur","14-12-04",8,9,80),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut","14-11-30",32,3,39),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada","14-11-28",2,33,78),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna","14-12-19",38,23,4);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.","14-12-01",38,2,44),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer","14-12-23",46,39,50),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut","14-12-12",19,22,49),("Lorem ipsum","14-12-13",22,44,82),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna","14-11-28",40,20,92);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer","14-12-20",6,31,15),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa","14-12-14",29,10,3),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam","14-11-26",43,14,77),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur","14-12-02",15,3,75),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.","14-12-06",3,1,99);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis","14-12-07",6,42,30),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum","14-12-14",34,38,4),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida","14-12-14",42,42,46),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis","14-12-06",19,18,71),("Lorem ipsum","14-12-24",27,29,93);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.","14-12-12",3,6,57),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.","14-11-28",26,43,16),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa","14-11-30",46,18,97),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa","14-12-21",19,19,67),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer","14-12-12",39,7,64);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut","14-11-26",38,24,89),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a,","14-12-02",47,26,91),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.","14-12-06",14,27,91),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna","14-12-21",20,2,30),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a,","14-11-25",32,2,6);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum","14-12-14",20,22,43),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut","14-11-25",8,33,72),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.","14-12-06",38,33,67),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt","14-12-23",27,45,90),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at","14-12-24",9,41,77);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer","14-11-30",16,44,40),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et","14-12-01",16,49,62),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna.","14-12-14",24,40,87),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.","14-11-29",31,27,12),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque","14-12-22",2,33,87);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem","14-12-02",42,35,64),("Lorem ipsum dolor","14-11-28",30,44,11),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut","14-12-08",40,25,36),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin","14-12-07",3,14,54),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac","14-12-22",33,38,85);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam","14-12-17",20,30,10),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna","14-12-07",24,14,95),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.","14-12-18",42,19,84),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin","14-12-20",36,43,52),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque","14-12-15",36,20,87);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum","14-12-06",1,9,26),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.","14-12-13",4,50,7),("Lorem ipsum dolor sit","14-12-19",45,1,40),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et","14-12-13",37,22,82),("Lorem ipsum dolor sit amet, consectetuer","14-12-09",40,39,70);

 -- Categories--

INSERT INTO `categories` (`name`) VALUES ("Moda");
INSERT INTO `categories` (`name`) VALUES ("Automoveis");
INSERT INTO `categories` (`name`) VALUES ("Servicos de seguranca");
INSERT INTO `categories` (`name`) VALUES ("Esoterismo");
INSERT INTO `categories` (`name`) VALUES ("Treinamentos de defesa pessoal");
INSERT INTO `categories` (`name`) VALUES ("Ocultismo");
INSERT INTO `categories` (`name`) VALUES ("Brinquedos");
INSERT INTO `categories` (`name`) VALUES ("Artigos genericos");
INSERT INTO `categories` (`name`) VALUES ("Artigos adultos");
INSERT INTO `categories` (`name`) VALUES ("Delicatessen");

 -- Negociacaos--

INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (28,17,37,49,"14-11-25",1),(45,27,31,55,"14-11-26",0),(55,14,22,25,"14-12-17",1),(39,30,23,31,"14-12-23",0),(52,31,15,95,"14-12-17",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (77,44,28,83,"14-12-22",0),(44,32,44,43,"14-12-05",0),(80,3,24,53,"14-11-28",1),(66,35,37,30,"14-11-26",1),(76,27,31,78,"14-12-15",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (51,38,43,10,"14-11-30",0),(79,49,50,82,"14-12-20",0),(59,3,4,82,"14-12-24",1),(24,39,21,10,"14-12-14",0),(33,22,29,60,"14-11-30",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (2,24,20,20,"14-11-29",0),(62,35,24,81,"14-11-29",1),(43,38,45,95,"14-12-03",1),(95,28,29,6,"14-12-13",1),(93,29,17,19,"14-12-07",0);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (9,31,9,20,"14-11-27",1),(5,25,38,57,"14-12-14",1),(11,22,13,100,"14-11-28",1),(36,18,33,47,"14-12-11",1),(43,5,39,68,"14-12-24",0);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (24,22,17,19,"14-11-27",1),(23,2,46,87,"14-12-22",1),(17,47,11,93,"14-12-06",0),(29,47,23,47,"14-12-02",0),(69,7,27,29,"14-11-27",0);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (75,19,47,83,"14-12-24",0),(22,49,45,84,"14-11-28",1),(66,13,7,41,"14-12-07",1),(33,20,3,92,"14-12-01",1),(85,15,13,11,"14-12-03",0);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (11,22,22,5,"14-12-09",1),(36,31,42,23,"14-12-23",1),(92,29,16,45,"14-12-07",1),(61,29,42,39,"14-11-27",0),(49,29,20,69,"14-12-07",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (58,9,10,71,"14-12-17",0),(33,40,4,86,"14-12-03",1),(13,22,5,41,"14-11-29",1),(97,49,18,55,"14-11-25",1),(92,9,48,96,"14-12-24",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (57,42,42,61,"14-12-19",1),(17,49,31,42,"14-12-16",1),(91,34,25,18,"14-11-26",1),(1,14,22,24,"14-11-25",0),(28,14,40,32,"14-11-28",0);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (64,41,17,26,"14-11-27",1),(35,4,20,60,"14-11-26",1),(84,11,34,80,"14-12-10",0),(2,4,3,47,"14-12-20",1),(61,25,19,8,"14-11-27",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (33,7,8,30,"14-12-09",1),(9,39,29,8,"14-11-25",1),(44,16,25,99,"14-12-17",0),(74,40,49,19,"14-11-30",0),(18,12,1,75,"14-12-02",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (29,36,3,66,"14-12-21",0),(72,33,39,86,"14-12-19",1),(27,2,12,88,"14-11-28",0),(27,35,40,30,"14-11-29",1),(50,21,10,84,"14-12-21",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (49,9,42,31,"14-11-26",1),(88,32,15,55,"14-12-14",0),(56,19,8,16,"14-11-28",1),(23,46,48,5,"14-12-22",0),(2,22,42,85,"14-12-11",0);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (2,15,31,49,"14-12-08",0),(3,25,27,90,"14-12-24",1),(48,18,3,19,"14-12-11",0),(14,34,36,23,"14-12-22",1),(29,49,5,26,"14-12-04",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (60,36,27,21,"14-12-11",1),(90,10,42,23,"14-12-11",0),(48,27,36,90,"14-12-04",1),(26,23,1,11,"14-12-13",0),(30,10,47,73,"14-12-10",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (85,8,49,45,"14-12-11",0),(90,24,31,32,"14-12-04",0),(54,37,25,84,"14-12-02",0),(50,12,11,48,"14-12-11",0),(27,9,42,54,"14-12-17",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (18,1,14,98,"14-12-09",1),(14,42,28,3,"14-12-13",1),(59,40,14,55,"14-11-30",1),(92,24,37,1,"14-12-23",0),(3,43,20,8,"14-11-25",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (27,46,16,25,"14-12-19",1),(9,25,45,55,"14-12-20",0),(93,18,19,5,"14-12-09",0),(64,37,21,21,"14-11-28",1),(87,48,23,73,"14-12-19",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (87,43,13,42,"14-12-13",1),(54,45,13,26,"14-12-09",1),(9,8,27,68,"14-12-01",1),(95,41,49,70,"14-12-05",1),(24,2,31,87,"14-12-09",1);
