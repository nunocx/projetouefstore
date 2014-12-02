-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Dez-2014 às 22:32
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=89;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
