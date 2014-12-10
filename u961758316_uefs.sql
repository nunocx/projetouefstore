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

INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("lobortis.augue@Maurisblanditenim.com","Caesar Zeppeli","ADZ55RGP2OA","(75) 2671-9172","51-04-19","M","(75) 5934-3525",0,0,"lobortis.augue@Maurisblanditenim.com","c5cf7ad8a4da7215aa2fcdee32a85dba","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("odio@egestas.ca","Joseph Joestar","BOP30XXS9XR","(75) 5213-1803","45-10-07","M","(75) 3479-7257",0,0, "odio@egestas.ca","2bb35710c53ca8939e24250f10dcc443","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("risus@lacus.org","Alice Margatroid","FKA12CCQ5CA","(75) 1456-5985","74-03-30","F","(75) 4172-2350",0,0, "risus@lacus.org","ecfe10e317b1c3f58a3ab9abb18ba735","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("sem.Pellentesque.ut@ante.org","Marisa Kirisame","ENS21OAQ7GN","(75) 2199-2086","32-06-10","F","(75) 5708-5182",0,0, "sem.Pellentesque.ut@ante.org","5b959887c727cc1ccfc2244ac46c4aa9","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("Donec.luctus.aliquet@risusDonecegestas.org","Fate Testarossa","WDO75RVI6PT","(75) 1340-2007","67-11-23","F","(75) 1458-7383",0,0, "Donec.luctus.aliquet@risusDonecegestas.org","493dd27e65a7eb8cd9084e6fcbf55ee8","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("Aliquam@duilectus.org","Nanoha Takamachi","MVD33PFH3MM","(75) 8893-5712","45-11-25","F","(75) 9226-2108",0,0, "Aliquam@duilectus.org","574f6e71673029abe953cfbd3049c513","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("erat@ultriciesligula.ca","Izaya Orihara","SAV92AGY7ZQ","(75) 7266-9802","92-11-16","M","(75) 8333-5575",0,0, "erat@ultriciesligula.ca","1ea1ec4e2ac193017262a8c025ee8d71","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("accumsan.sed.facilisis@augue.co.uk","Shizuo Heiwajima","CFW46XJQ3PH","(75) 5223-8772","88-09-27","M","(75) 8963-9692",0,0, "accumsan.sed.facilisis@augue.co.uk","dd90161e8cf3eecabd4eca1738232f5d","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("Nullam@actellus.co.uk","Senpen Sydonay","QUJ79MXN7WZ","(75) 6010-9858","32-11-07","M","(75) 8130-2425",0,0, "Nullam@actellus.co.uk","93aed7f19bcac4a619d7164a9dbb014e","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("consectetuer.rhoncus@sit.ca","Kura Hecate","LNU33ZHB6OK","(75) 6064-2493","75-05-26","F","(75) 1472-2950",0,0, "consectetuer.rhoncus@sit.ca","23fc4b7fd8d23936afb10bd82dc57ce9","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("velit@sodaleselit.net","Mathilde Saint-Omer","NKF06PKN8FN","(75) 5428-4862","59-11-27","F","(75) 8183-5529",0,0, "velit@sodaleselit.net","31c4010c05b56e331dbd30bbf9d55c94","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("diam.luctus@eulacus.edu","Niji no Kenshi Merihim","ICB32XWO9FD","(75) 9181-1551","67-07-09","M","(75) 2397-9939",0,0, "diam.luctus@eulacus.edu","7787d660a277da5385576426469b460b","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("scelerisque.neque@amet.ca","Ryougi Shiki","MXJ06POY2EL","(75) 7827-4043","70-02-07","F","(75) 3670-6263",0,0, "scelerisque.neque@amet.ca","04ced0724cb0175175c79f8941fdd673","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("ut.nulla.Cras@sapienAenean.co.uk","Mikiya Kokutou","GML93QFK7HJ","(75) 1906-8072","57-08-11","M","(75) 2502-6291",0,0, "ut.nulla.Cras@sapienAenean.co.uk","8ff9aed617a8043085d791df9fbc3340","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("malesuada.vel.convallis@dolorsit.org","Rika Furude","IWI57DIB0HI","(75) 4416-8294","78-08-31","F","(75) 3630-5095",0,0, "malesuada.vel.convallis@dolorsit.org","7b9d6d83befd7244154fa5e67d3ceeb2","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("neque.non.quam@euismodac.co.uk","Houjou Satoko","NUE13RMS5RO","(75) 7347-0915","79-11-20","F","(75) 1287-6372",0,0, "neque.non.quam@euismodac.co.uk","984323d86a6ba1d7f56d7522864b2dca","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("Class@hymenaeos.com","Okabe Rintarou","ZPR15AVA6VZ","(75) 5311-3531","42-08-31","M","(75) 5158-8513",0,0, "Class@hymenaeos.com","6cced8bad1e4cdab7ab824029fa2887f","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("ornare.In@urnajustofaucibus.edu","Makise Kurisu","XNW92UYS5RG","(75) 2567-9344","47-08-05","F","(75) 5005-1516",0,0, "ornare.In@urnajustofaucibus.edu","449a46b0d7bf0e7e0cd0480dd50090e0","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("pulvinar@tristiquesenectuset.edu","Haruka Kaminogi","JJD02LPC1QG","(75) 8622-1219","32-08-26","F","(75) 2838-9330",0,0, "pulvinar@tristiquesenectuset.edu","752faf9e66a704693c81a6b98ba2455f","14-11-21");
INSERT INTO `usuarios` (`Email`,`name`,`Senha`,`Telefone1`,`Data_Nascimento`,`Sexo`,`Telefone2`,`Strikes`,`Status`,`username`,`password`,`created`)  VALUES ("laoreet@magnaDuis.org","Karasu Noein","HJT19ZZH7FL","(75) 5075-0374","95-06-26","M","(75) 1923-0954",0,0, "laoreet@magnaDuis.org","c3d6fdd4b928b1ba8712f9dda0079338","14-11-21");

 -- Serviços--

INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet","269.07","14-12-21","15-01-22",1,1,1,1,1),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet","1340.94","14-11-25","14-12-26",1,0,1,2,2),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis","1701.06","14-12-15","15-01-14",0,1,1,18,3),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida","741.65","14-12-21","15-01-23",1,0,0,17,4),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam","1804.33","14-11-28","15-01-14",0,0,0,2,5);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et","103.22","14-11-28","15-01-17",1,0,1,6,6),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.","57.06","14-12-16","15-01-21",0,0,0,19,7),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis","19.38","14-12-23","15-01-01",0,0,0,16,8),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis","550.32","14-12-03","14-12-26",0,1,0,7,9),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac","1758.51","14-12-19","15-01-12",0,0,0,5,10);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum","Lorem","819.50","14-12-16","14-12-28",1,1,0,14,1),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet","127.78","14-12-09","15-01-21",1,1,1,14,9),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.","564.12","14-12-14","15-01-24",1,0,0,3,10),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,","925.24","14-11-28","15-01-08",1,0,1,2,5),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis","531.56","14-12-20","15-01-02",0,0,1,39,8);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet","1619.71","14-11-27","15-01-06",0,0,0,10,5),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.","200.13","14-12-24","15-01-04",0,0,0,8,9),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut","886.90","14-12-01","15-01-01",1,0,0,4,6),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum","1581.11","14-12-20","15-01-17",0,0,0,13,5),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin","1921.89","14-12-13","15-01-20",1,1,0,5,4);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada","1274.94","14-12-01","15-01-18",1,1,0,17,2),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet","786.09","14-12-10","15-01-17",1,0,1,11,3),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis","1535.80","14-12-18","15-01-13",1,1,1,18,1),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis","264.67","14-12-23","14-12-31",1,1,0,9,2),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet","659.93","14-11-25","15-01-02",0,1,0,1,4);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac","1731.65","14-12-01","15-01-15",1,0,1,5,3),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum","1952.77","14-12-01","15-01-20",1,1,1,2,4),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec","1715.67","14-12-12","15-01-12",1,0,1,3,5),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada","1477.98","14-12-15","15-01-10",1,0,1,13,4),("Lorem ipsum dolor","Lorem","157.58","14-12-18","15-01-15",1,1,1,20,7);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.","1116.35","14-12-22","15-01-04",1,1,0,2,6),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.","18.92","14-11-27","15-01-11",1,0,0,9,2),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,","912.78","14-12-11","15-01-12",0,0,0,15,3),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing","470.93","14-12-16","15-01-21",1,0,1,4,5),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.","1388.14","14-11-26","15-01-13",0,0,0,6,1);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor.","1048.87","14-11-27","15-01-03",1,1,1,20,5),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer","1681.65","14-12-17","14-12-31",0,1,0,18,3),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque","409.99","14-12-15","14-12-31",1,0,1,12,2),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et","251.54","14-12-07","15-01-13",0,1,0,12,7),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac","1019.94","14-11-26","14-12-25",0,0,1,3,3);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna","1511.42","14-11-28","15-01-15",0,0,0,1,5),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing","959.90","14-12-07","14-12-28",1,0,1,17,4),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.","1514.14","14-12-01","15-01-17",0,1,0,8,7),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.","1083.96","14-12-11","15-01-04",0,0,0,34,1),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer","1683.77","14-11-28","14-12-25",0,0,0,1,7);
INSERT INTO `servicos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Bloqueado`,`Expirado`,`ACombinar`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut","1325.44","14-12-23","15-01-10",0,0,1,57,1),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis","1963.46","14-12-17","15-01-17",0,1,1,16,10),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut","1344.99","14-12-06","15-01-06",1,0,1,5,8),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.","806.54","14-12-06","15-01-16",1,0,0,8,8),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor.","670.40","14-12-03","15-01-03",0,0,1,1,2);


 -- Produtos--

INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer","1262.69","14-11-30","15-01-01",579,0,0,"Lorem",7,1),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor.","1502.43","14-12-22","15-01-07",289,0,1,"Lorem",3,2),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.","427.69","14-12-22","14-12-27",926,1,0,"Lorem ipsum",20,3),("Lorem ipsum dolor","Lorem ipsum dolor sit","1184.46","14-12-08","15-01-02",482,0,1,"Lorem ipsum dolor",3,4),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque","1264.37","14-12-14","15-01-01",110,0,1,"Lorem",13,5);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec","759.52","14-12-24","15-01-18",407,1,1,"Lorem",1,6),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida","1390.55","14-12-19","14-12-31",675,1,1,"Lorem",12,7),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet","1250.57","14-11-27","15-01-19",184,1,0,"Lorem",16,8),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque","521.95","14-12-06","14-12-25",988,0,1,"Lorem ipsum",9,9),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed","327.92","14-12-14","14-12-25",700,1,0,"Lorem ipsum",14,10);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet","293.40","14-12-18","14-12-31",429,0,1,"Lorem ipsum dolor",5,4),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis","360.17","14-12-02","15-01-04",175,0,1,"Lorem",7,8),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at","792.03","14-12-23","15-01-17",432,1,0,"Lorem ipsum dolor",1,6),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.","1137.27","14-12-11","15-01-24",80,1,0,"Lorem ipsum dolor",5,2),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum","1476.50","14-11-30","15-01-24",173,0,1,"Lorem",15,1);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis","943.29","14-11-28","15-01-04",31,0,1,"Lorem",8,7),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna","1857.18","14-12-24","15-01-01",614,0,1,"Lorem ipsum dolor",18,5),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor.","1189.55","14-12-14","15-01-20",376,1,1,"Lorem ipsum dolor",2,7),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.","768.07","14-12-10","15-01-16",215,1,1,"Lorem",7,10),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id,","1778.67","14-11-29","15-01-04",276,1,1,"Lorem ipsum dolor",16,9);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.","991.72","14-12-21","15-01-11",679,1,0,"Lorem ipsum dolor",15,3),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin","1034.20","14-11-25","15-01-14",781,0,1,"Lorem ipsum",19,10),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt","249.74","14-12-18","15-01-12",594,1,1,"Lorem ipsum dolor",12,7),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et","104.58","14-12-15","15-01-12",691,0,0,"Lorem",19,3),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada","1462.84","14-12-04","14-12-31",944,1,0,"Lorem ipsum dolor",1,7);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing","1279.25","14-12-09","14-12-31",311,0,0,"Lorem",6,1),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.","109.81","14-12-15","14-12-31",843,0,1,"Lorem",9,4),("Lorem ipsum dolor","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.","591.03","14-11-25","14-12-27",713,1,0,"Lorem",19,4),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum","209.07","14-11-25","15-01-19",285,0,1,"Lorem ipsum",6,6),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna.","793.03","14-11-30","15-01-12",157,1,1,"Lorem ipsum dolor",17,4);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.","1383.50","14-12-02","15-01-20",874,0,1,"Lorem",10,9),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,","826.96","14-12-06","15-01-11",336,1,0,"Lorem ipsum dolor",18,2),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.","166.40","14-12-04","15-01-15",499,1,0,"Lorem ipsum",7,8),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis","813.88","14-12-21","15-01-17",52,0,1,"Lorem",11,5),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a,","1865.39","14-11-26","15-01-07",799,0,0,"Lorem",20,8);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada","334.55","14-12-07","15-01-22",558,1,1,"Lorem ipsum dolor",6,9),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.","1420.87","14-12-21","15-01-08",650,1,1,"Lorem ipsum",13,9),("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque","1317.68","14-11-30","14-12-27",456,0,0,"Lorem ipsum dolor",1,5),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam","11.93","14-12-12","15-01-10",491,1,1,"Lorem ipsum dolor",7,5),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer","892.61","14-12-12","15-01-13",334,1,0,"Lorem ipsum",10,5);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.","1667.84","14-12-07","14-12-27",568,1,1,"Lorem",2,1),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.","528.59","14-12-06","15-01-09",792,0,0,"Lorem ipsum dolor",11,2),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit.","1511.38","14-12-17","15-01-15",772,1,0,"Lorem",14,8),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt","1378.33","14-12-02","14-12-25",481,1,0,"Lorem ipsum dolor",8,8),("Lorem ipsum","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam","920.86","14-12-05","15-01-24",793,1,0,"Lorem ipsum",18,8);
INSERT INTO `produtos` (`name`,`Descricao`,`Preco`,`Data_Publicacao`,`Data_Vencimento`,`Quantidade`,`Bloqueado`,`Expirado`,`CondicaoUso`,`usuario_id`,`category_id`) VALUES ("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a,","366.32","14-11-28","15-01-03",556,1,0,"Lorem ipsum",4,9),("Lorem","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor.","1624.62","14-11-28","15-01-18",986,0,0,"Lorem ipsum dolor",17,6),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam","779.97","14-12-24","15-01-07",878,0,0,"Lorem ipsum dolor",4,3),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis","1821.90","14-12-17","15-01-24",649,0,0,"Lorem ipsum",14,6),("Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet consectetuer adipiscing elit.","972.72","14-12-14","15-01-07",537,1,0,"Lorem ipsum",10,6);

 -- Comentarios--

INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-12","Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",1,49,33),("14-12-09","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus",13,35,22),("14-11-25","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing",2,36,11),("14-12-19","Lorem ipsum",2,30,26),("14-11-30","Lorem ipsum dolor",9,9,10);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-17","Lorem ipsum dolor sit",2,2,49),("14-12-22","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna.",12,12,50),("14-12-18","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a,",16,17,22),("14-12-13","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,",8,33,47),("14-12-10","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque",6,36,6);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-11-27","Lorem",3,36,7),("14-12-20","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.",12,23,16),("14-12-18","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet",18,10,20),("14-12-06","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id,",19,29,14),("14-12-05","Lorem ipsum dolor sit amet, consectetuer",5,1,13);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-11-28","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna",1,4,40),("14-12-07","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id,",13,27,25),("14-12-10","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,",8,30,49),("14-12-19","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,",4,15,34),("14-12-15","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna",7,27,11);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-08","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer",4,44,13),("14-12-01","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at",20,45,47),("14-11-26","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu",11,50,17),("14-12-19","Lorem ipsum dolor sit amet, consectetuer adipiscing",13,25,31),("14-12-20","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut",20,49,16);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-10","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu",10,35,47),("14-12-22","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida",11,23,30),("14-12-14","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.",2,46,29),("14-12-11","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at",14,9,16),("14-12-06","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at",3,45,9);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-07","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,",13,42,50),("14-12-05","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et",12,41,16),("14-12-23","Lorem",19,7,42),("14-12-17","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt",6,14,17),("14-12-09","Lorem ipsum dolor sit amet,",6,32,46);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-20","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu",12,39,18),("14-11-30","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna",11,41,37),("14-12-23","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,",8,46,2),("14-12-21","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing",17,28,18),("14-12-20","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac",12,46,35);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-11","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et",13,6,2),("14-12-07","Lorem ipsum",15,39,20),("14-12-06","Lorem ipsum dolor sit amet, consectetuer",8,35,32),("14-11-26","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque",13,38,17),("14-11-30","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor.",6,12,35);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-23","Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",5,19,21),("14-12-07","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna.",20,7,19),("14-12-04","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.",16,14,42),("14-11-26","Lorem ipsum dolor sit",14,43,23),("14-12-23","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id,",8,14,44);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-19","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt",17,35,36),("14-12-23","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras",10,47,42),("14-12-15","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer",20,2,50),("14-12-13","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.",7,21,18),("14-11-27","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.",19,28,50);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-02","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a,",16,4,44),("14-12-05","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada",3,25,24),("14-12-07","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa",4,24,46),("14-12-21","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet",5,2,42),("14-12-12","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec",5,17,40);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-11-27","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet",14,3,35),("14-12-20","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna",15,8,46),("14-12-24","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna",5,22,5),("14-11-26","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac",9,39,29),("14-12-09","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum",3,36,15);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-03","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac",19,1,43),("14-11-29","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna.",1,37,45),("14-12-19","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa",18,12,23),("14-12-21","Lorem ipsum dolor",9,29,45),("14-12-10","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.",7,41,46);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-11-26","Lorem ipsum dolor sit amet,",6,31,17),("14-12-05","Lorem ipsum dolor sit amet,",7,33,31),("14-12-05","Lorem ipsum dolor sit",17,46,17),("14-12-05","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.",14,3,29),("14-11-26","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id,",6,18,29);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-07","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam",8,9,45),("14-12-24","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum",15,43,49),("14-12-24","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede",12,30,4),("14-12-23","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus",2,15,18),("14-12-21","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis",6,17,5);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-05","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus",16,38,44),("14-11-26","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac",17,3,27),("14-12-13","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.",10,3,34),("14-12-05","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.",7,28,34),("14-11-25","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat.",6,16,50);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-11-27","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at",17,9,41),("14-12-10","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut",16,16,17),("14-11-29","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec",9,36,50),("14-12-23","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,",10,13,29),("14-11-25","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.",2,34,30);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-11-27","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus",5,3,27),("14-12-17","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis",16,12,1),("14-12-11","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis",7,45,23),("14-12-07","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum",18,33,34),("14-12-15","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam",15,34,21);
INSERT INTO `comentarios` (`Data`,`Texto`,`usuario_id`,`servico_id`,`produto_id`) VALUES ("14-12-03","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed",9,31,37),("14-12-19","Lorem ipsum dolor sit amet, consectetuer",15,8,19),("14-11-26","Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",9,48,16),("14-11-28","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur",18,24,20),("14-11-29","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at",14,19,36);

 -- Mensagens--

INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor sit amet,","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer","14-12-03",1,2);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum","Lorem ipsum dolor sit amet, consectetuer","14-12-11",3,4);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.","14-12-16",5,6);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing","14-12-19",7,8);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor sit","Lorem","14-12-24",9,10);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna","14-11-28",11,12);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer","14-12-21",13,14);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor sit","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut","14-12-22",15,16);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor sit amet,","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.","14-12-20",17,18);
INSERT INTO `mensagems` (`Assunto`,`Texto`,`Data`,`Emisor`,`Destinatario`) VALUES ("Lorem ipsum dolor","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut","14-11-30",19,20);

 -- Terceiros--

INSERT INTO `terceiros` (`name`,`NomeEmpresa`,`Imagem`,`ValorPago`,`category_id`,`DataInicio`,`link`,`usuario_id`) VALUES ("Lorem","Sit Amet Luctus LLP","Cdtdaddkeblde","0.68",5,"14-11-29","http://www.batata.co.uk",1);
INSERT INTO `terceiros` (`name`,`NomeEmpresa`,`Imagem`,`ValorPago`,`category_id`,`DataInicio`,`link`,`usuario_id`) VALUES ("Lorem ipsum","Erat Vitae Risus Corporation","Nvsbzuenhuvrb","8.20",8,"14-12-01","http://www.hu3hu3.br",3);
INSERT INTO `terceiros` (`name`,`NomeEmpresa`,`Imagem`,`ValorPago`,`category_id`,`DataInicio`,`link`,`usuario_id`) VALUES ("Lorem ipsum","Tincidunt Consulting","Poddaangvesaa","2.10",10,"14-12-07","http://www.kawaii-desu.co.jp",5);
INSERT INTO `terceiros` (`name`,`NomeEmpresa`,`Imagem`,`ValorPago`,`category_id`,`DataInicio`,`link`,`usuario_id`) VALUES ("Lorem ipsum dolor","Enim Etiam Gravida Incorporated","Ezchsdbnsxhtb","6.29",6,"14-11-30","http://www.vivadilma.org.com.br",6);
INSERT INTO `terceiros` (`name`,`NomeEmpresa`,`Imagem`,`ValorPago`,`category_id`,`DataInicio`,`link`,`usuario_id`) VALUES ("Lorem ipsum dolor sit","Quam Vel Corp.","Sxanouibbubnm","2.15",6,"14-12-12","http://www.mintira-vivaaecio.com.br",7);

 -- Reports--

INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa","14-12-13",1,0,7);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis","14-12-12",2,0,3);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus","14-11-30",3,0,20);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis","14-12-16",4,0,3);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis","14-12-07",5,0,13);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin","14-12-08",0,1,1);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit","14-12-17",0,2,2);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a,","14-12-17",0,3,18);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.","14-11-25",0,4,17);
INSERT INTO `reports` (`Texto`,`Data`,`produto_id`,`servico_id`,`usuario_id`) VALUES ("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus","14-12-15",0,5,2);

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

INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (7,1,0,1,"14-11-25",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (3,2,0,2,"14-12-22",0);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (20,3,0,3,"14-11-30",0);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (3,4,0,4,"14-11-29",0);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (13,5,0,5,"14-11-27",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (1,6,0,6,"14-11-27",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (12,7,0,7,"14-12-24",0);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (16,8,0,8,"14-12-09",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (9,9,0,10,"14-12-17",0);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (14,10,0,9,"14-12-19",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (1,0,1,11,"14-11-27",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (2,0,2,12,"14-12-09",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (18,0,3,13,"14-12-21",0);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (17,0,4,14,"14-11-26",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (2,0,5,15,"14-12-08",0);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (6,0,6,16,"14-12-11",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (19,0,7,17,"14-12-11",0);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (16,0,8,18,"14-12-09",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (7,0,9,19,"14-12-19",1);
INSERT INTO `negociacaos` (`usuario_id`,`produto_id`,`servico_id`,`interessado`,`data_final`,`status`) VALUES (5,0,0,20,"14-12-13",1);
