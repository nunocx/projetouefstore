-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Nov-2014 às 16:26
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

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'Moda'),
(3, 'Carros'),
(4, 'Assassinatos'),
(5, 'Consultas Espíritas'),
(6, 'Treinamento Ninja'),
(7, 'Coisas do pai de Evaldson'),
(8, 'Cabeça de Seará'),
(9, 'Produtos do Tomba'),
(10, 'BDSM'),
(11, 'Stands');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=103 ;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `Data`, `Texto`, `usuario_id`, `servico_id`, `produto_id`) VALUES
(1, '2014-11-20', 'aaaa', 1, 1, 1),
(2, '2014-11-20', 'llll', 1, 1, 1),
(3, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', 40, 43, 39),
(4, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 48, 13, 29),
(5, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 22, 26, 30),
(6, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', 51, 41, 2),
(7, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', 98, 24, 44),
(8, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', 94, 43, 34),
(9, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 7, 7, 41),
(10, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', 74, 25, 31),
(11, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 41, 45, 31),
(12, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 70, 2, 34),
(13, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', 45, 39, 25),
(14, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at', 17, 15, 42),
(15, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 68, 43, 11),
(16, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida', 17, 28, 22),
(17, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 81, 1, 7),
(18, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 15, 1, 43),
(19, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet', 47, 29, 26),
(20, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 14, 27, 40),
(21, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 18, 15, 34),
(22, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', 27, 26, 33),
(23, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 75, 41, 5),
(24, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', 82, 49, 22),
(25, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.', 85, 38, 50),
(26, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 5, 46, 45),
(27, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet', 9, 47, 41),
(28, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', 57, 21, 20),
(29, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', 7, 11, 11),
(30, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.', 15, 2, 24),
(31, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet', 99, 14, 39),
(32, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 97, 22, 37),
(33, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', 38, 50, 9),
(34, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 38, 7, 47),
(35, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at', 36, 10, 40),
(36, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 70, 31, 27),
(37, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 2, 6, 45),
(38, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', 11, 23, 2),
(39, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', 87, 11, 9),
(40, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', 88, 27, 10),
(41, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida', 27, 3, 41),
(42, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', 32, 3, 46),
(43, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 63, 21, 50),
(44, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 63, 26, 27),
(45, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 64, 41, 21),
(46, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 91, 38, 22),
(47, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', 82, 41, 1),
(48, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 17, 25, 8),
(49, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', 72, 27, 10),
(50, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 16, 18, 1),
(51, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', 52, 18, 4),
(52, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 80, 42, 49),
(53, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at', 32, 24, 47),
(54, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 100, 44, 13),
(55, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 23, 1, 36),
(56, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 36, 50, 23),
(57, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 88, 43, 1),
(58, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', 39, 35, 21),
(59, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 95, 14, 20),
(60, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 56, 13, 35),
(61, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida', 35, 32, 31),
(62, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 23, 13, 5),
(63, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida', 63, 11, 17),
(64, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 98, 25, 40),
(65, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at', 9, 4, 46),
(66, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 64, 27, 45),
(67, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', 31, 27, 13),
(68, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 68, 18, 1),
(69, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus', 6, 16, 41),
(70, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.', 33, 48, 33),
(71, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 95, 8, 6),
(72, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at', 4, 31, 5),
(73, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.', 32, 4, 41),
(74, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 65, 46, 46),
(75, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at', 58, 47, 46),
(76, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 44, 6, 9),
(77, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 52, 39, 31),
(78, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 59, 49, 23),
(79, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.', 88, 33, 37),
(80, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 57, 35, 42),
(81, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus', 54, 15, 22),
(82, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 84, 5, 10),
(83, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 51, 23, 28),
(84, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida', 30, 42, 45),
(85, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 14, 29, 9),
(86, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus', 44, 21, 18),
(87, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida', 86, 49, 50),
(88, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', 51, 17, 6),
(89, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 91, 47, 34),
(90, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 86, 20, 15),
(91, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 39, 42, 36),
(92, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', 44, 31, 9),
(93, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 77, 35, 28),
(94, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 74, 17, 16),
(95, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 24, 12, 31),
(96, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 76, 26, 46),
(97, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', 19, 8, 13),
(98, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 62, 35, 44),
(99, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus', 11, 8, 13),
(100, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 69, 11, 19),
(101, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', 17, 46, 43),
(102, '0000-00-00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.', 79, 49, 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `mensagems`
--

INSERT INTO `mensagems` (`id`, `Assunto`, `Texto`, `Data`, `Destinatario`, `Emisor`) VALUES
(1, 'a,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', '0000-00-00', 'Olivier', 'Louis'),
(2, 'ac,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', '0000-00-00', 'Kirestin', 'Sigourney'),
(3, 'vitae,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', '0000-00-00', 'Elvis', 'Cooper'),
(4, 'nec', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', '0000-00-00', 'Muda', 'Ora'),
(5, 'non', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', '0000-00-00', 'Igor', 'Colton'),
(6, 'dolor', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', '0000-00-00', 'Mom', 'Isaac'),
(7, 'sodales.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at', '0000-00-00', 'Beatrice', 'Battler'),
(8, 'Fusce', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', '0000-00-00', 'Gannondorf', 'Link'),
(9, 'vestibulum', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', '0000-00-00', 'Nanoha', 'Fate'),
(10, 'pede.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus', '0000-00-00', 'Avdol', 'Polnareff');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=103 ;

--
-- Extraindo dados da tabela `negociacaos`
--

INSERT INTO `negociacaos` (`id`, `usuario_id`, `produto_id`, `servico_id`, `interessado`, `data_final`, `status`) VALUES
(1, 2, 1, 1, 1, '2014-11-20', 0),
(2, 1, 2, 1, 1, '2014-11-20', 0),
(3, 59, 7, 15, 1, '0000-00-00', 2),
(4, 64, 40, 13, 2, '0000-00-00', 1),
(5, 96, 8, 12, 1, '0000-00-00', 2),
(6, 79, 8, 43, 1, '0000-00-00', 1),
(7, 80, 11, 9, 2, '0000-00-00', 2),
(8, 83, 23, 8, 1, '0000-00-00', 2),
(9, 18, 2, 19, 1, '0000-00-00', 1),
(10, 59, 39, 26, 2, '0000-00-00', 2),
(11, 36, 23, 21, 2, '0000-00-00', 2),
(12, 35, 4, 22, 1, '0000-00-00', 1),
(13, 83, 22, 29, 2, '0000-00-00', 2),
(14, 32, 47, 22, 1, '0000-00-00', 1),
(15, 97, 45, 14, 2, '0000-00-00', 1),
(16, 4, 25, 2, 1, '0000-00-00', 1),
(17, 90, 25, 11, 1, '0000-00-00', 2),
(18, 47, 20, 8, 2, '0000-00-00', 2),
(19, 84, 17, 6, 1, '0000-00-00', 2),
(20, 47, 15, 8, 2, '0000-00-00', 2),
(21, 98, 38, 3, 1, '0000-00-00', 1),
(22, 50, 5, 48, 2, '0000-00-00', 2),
(23, 3, 26, 30, 1, '0000-00-00', 1),
(24, 29, 39, 46, 1, '0000-00-00', 1),
(25, 53, 44, 46, 1, '0000-00-00', 2),
(26, 80, 26, 21, 1, '0000-00-00', 2),
(27, 5, 39, 1, 2, '0000-00-00', 2),
(28, 7, 37, 13, 2, '0000-00-00', 2),
(29, 83, 31, 18, 2, '0000-00-00', 1),
(30, 30, 21, 22, 1, '0000-00-00', 1),
(31, 20, 15, 31, 1, '0000-00-00', 2),
(32, 40, 44, 13, 1, '0000-00-00', 1),
(33, 14, 12, 20, 2, '0000-00-00', 2),
(34, 40, 5, 26, 1, '0000-00-00', 1),
(35, 55, 26, 48, 1, '0000-00-00', 2),
(36, 24, 27, 30, 2, '0000-00-00', 2),
(37, 2, 27, 31, 1, '0000-00-00', 2),
(38, 47, 22, 6, 2, '0000-00-00', 1),
(39, 47, 42, 46, 2, '0000-00-00', 2),
(40, 83, 17, 22, 2, '0000-00-00', 2),
(41, 13, 13, 14, 2, '0000-00-00', 1),
(42, 11, 7, 9, 2, '0000-00-00', 1),
(43, 69, 28, 29, 2, '0000-00-00', 2),
(44, 68, 18, 10, 2, '0000-00-00', 2),
(45, 82, 33, 16, 1, '0000-00-00', 1),
(46, 60, 2, 41, 1, '0000-00-00', 2),
(47, 83, 22, 18, 1, '0000-00-00', 1),
(48, 16, 26, 23, 1, '0000-00-00', 2),
(49, 42, 40, 30, 1, '0000-00-00', 1),
(50, 52, 45, 15, 2, '0000-00-00', 1),
(51, 37, 36, 21, 1, '0000-00-00', 1),
(52, 21, 38, 2, 2, '0000-00-00', 2),
(53, 74, 38, 34, 2, '0000-00-00', 1),
(54, 91, 7, 49, 2, '0000-00-00', 2),
(55, 27, 3, 3, 2, '0000-00-00', 2),
(56, 68, 46, 39, 2, '0000-00-00', 1),
(57, 34, 44, 21, 1, '0000-00-00', 2),
(58, 77, 47, 33, 1, '0000-00-00', 1),
(59, 26, 23, 7, 1, '0000-00-00', 1),
(60, 76, 41, 43, 1, '0000-00-00', 1),
(61, 9, 27, 13, 2, '0000-00-00', 2),
(62, 55, 30, 2, 2, '0000-00-00', 1),
(63, 46, 19, 13, 1, '0000-00-00', 2),
(64, 24, 48, 36, 1, '0000-00-00', 1),
(65, 45, 11, 33, 2, '0000-00-00', 1),
(66, 63, 45, 43, 1, '0000-00-00', 1),
(67, 67, 34, 14, 2, '0000-00-00', 2),
(68, 88, 6, 49, 1, '0000-00-00', 2),
(69, 65, 39, 1, 1, '0000-00-00', 1),
(70, 73, 3, 19, 2, '0000-00-00', 1),
(71, 61, 32, 30, 2, '0000-00-00', 1),
(72, 32, 13, 12, 1, '0000-00-00', 2),
(73, 30, 6, 8, 1, '0000-00-00', 2),
(74, 5, 35, 4, 2, '0000-00-00', 2),
(75, 44, 45, 38, 1, '0000-00-00', 1),
(76, 49, 19, 18, 1, '0000-00-00', 2),
(77, 96, 15, 45, 1, '0000-00-00', 2),
(78, 3, 33, 18, 2, '0000-00-00', 1),
(79, 81, 43, 20, 1, '0000-00-00', 2),
(80, 67, 44, 50, 1, '0000-00-00', 2),
(81, 26, 41, 29, 2, '0000-00-00', 1),
(82, 94, 10, 50, 2, '0000-00-00', 1),
(83, 83, 49, 12, 1, '0000-00-00', 2),
(84, 69, 14, 2, 2, '0000-00-00', 1),
(85, 57, 3, 12, 2, '0000-00-00', 1),
(86, 50, 29, 32, 2, '0000-00-00', 2),
(87, 57, 12, 28, 1, '0000-00-00', 1),
(88, 24, 38, 10, 1, '0000-00-00', 1),
(89, 8, 50, 42, 1, '0000-00-00', 2),
(90, 48, 24, 7, 1, '0000-00-00', 1),
(91, 75, 20, 29, 1, '0000-00-00', 2),
(92, 19, 39, 40, 2, '0000-00-00', 2),
(93, 92, 5, 13, 2, '0000-00-00', 2),
(94, 60, 21, 30, 1, '0000-00-00', 1),
(95, 27, 42, 17, 2, '0000-00-00', 1),
(96, 53, 19, 21, 1, '0000-00-00', 2),
(97, 46, 25, 20, 1, '0000-00-00', 2),
(98, 100, 3, 14, 1, '0000-00-00', 2),
(99, 52, 44, 35, 1, '0000-00-00', 2),
(100, 78, 11, 10, 2, '0000-00-00', 2),
(101, 25, 31, 17, 1, '0000-00-00', 2),
(102, 29, 31, 50, 2, '0000-00-00', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=103 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `name`, `Descricao`, `Preco`, `Data_Publicacao`, `Data_Vencimento`, `Quantidade`, `Foto_Video`, `Bloqueado`, `Expirado`, `CondicaoUso`, `usuario_id`, `category_id`) VALUES
(1, 'sdasda', 'dsadadsa', 1212, '2014-11-19', '2014-11-19', 1, NULL, 0, 0, '', 1, 1),
(2, 'asksaso', 'oskaoaskoas', 111, '2014-11-20', '2014-11-20', 11, NULL, 0, 0, '', 1, 1),
(3, 'Suspendisse', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 9.47, '2008-11-14', '2017-11-14', 994, NULL, 2, 2, 'Lorem', 79, 2),
(4, 'accumsan', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 9.09, '2010-08-14', '2021-10-14', 81, NULL, 2, 1, 'Lorem ipsum dolor', 8, 4),
(5, 'ante', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 6.18, '2016-11-14', '2015-09-14', 484, NULL, 1, 2, 'Lorem ipsum', 14, 7),
(6, 'pede', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', 5.74, '2002-11-14', '2021-01-14', 344, NULL, 1, 2, 'Lorem ipsum', 15, 7),
(7, 'tincidunt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 1.67, '2029-03-14', '2009-11-14', 883, NULL, 1, 2, 'Lorem', 90, 5),
(8, 'Nunc', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 2.69, '2001-02-14', '2031-05-14', 29, NULL, 1, 2, 'Lorem ipsum', 27, 4),
(9, 'velit', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', 1.16, '2010-11-14', '2004-01-14', 515, NULL, 2, 2, 'Lorem ipsum dolor', 53, 7),
(10, 'Mauris', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 8.5, '2025-06-14', '2001-10-14', 902, NULL, 2, 2, 'Lorem ipsum', 3, 5),
(11, 'eu,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 1.68, '2005-11-14', '2006-05-14', 422, NULL, 2, 2, 'Lorem ipsum dolor', 39, 5),
(12, 'lacus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.', 2.57, '2013-12-14', '2017-08-14', 220, NULL, 1, 1, 'Lorem ipsum dolor', 46, 7),
(13, 'feugiat', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', 1.38, '2017-06-14', '2022-05-14', 670, NULL, 2, 1, 'Lorem', 78, 4),
(14, 'orci.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 9.4, '2009-05-14', '2027-05-14', 201, NULL, 1, 2, 'Lorem', 2, 7),
(15, 'malesuada', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 0.67, '2009-12-14', '2026-03-14', 61, NULL, 1, 1, 'Lorem', 30, 7),
(16, 'ac', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 5.47, '2026-02-14', '2012-06-14', 315, NULL, 2, 1, 'Lorem ipsum', 28, 8),
(17, 'sem.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 6.33, '2030-01-14', '2004-08-14', 663, NULL, 1, 2, 'Lorem ipsum', 46, 8),
(18, 'nunc', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 2.99, '2006-12-13', '2005-08-14', 924, NULL, 2, 1, 'Lorem ipsum dolor', 76, 7),
(19, 'orci', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 1.51, '2030-09-14', '2008-12-14', 627, NULL, 2, 2, 'Lorem', 6, 1),
(20, 'cursus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 4.39, '2025-06-14', '2013-06-14', 80, NULL, 2, 1, 'Lorem ipsum', 5, 6),
(21, 'Quisque', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 6.79, '2019-11-13', '2014-10-14', 56, NULL, 2, 2, 'Lorem ipsum', 27, 10),
(22, 'Mauris', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 7.05, '2001-01-14', '2022-07-14', 206, NULL, 2, 2, 'Lorem ipsum', 69, 3),
(23, 'erat', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus', 6.95, '2002-07-14', '2026-11-14', 305, NULL, 1, 2, 'Lorem', 57, 4),
(24, 'aliquet', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 5.13, '2001-08-14', '2031-05-14', 414, NULL, 1, 1, 'Lorem', 68, 1),
(25, 'fringilla', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 0.22, '2016-12-14', '2030-07-14', 557, NULL, 1, 2, 'Lorem ipsum', 11, 1),
(26, 'gravida', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 4.24, '2009-12-13', '2006-03-14', 599, NULL, 2, 2, 'Lorem ipsum dolor', 95, 10),
(27, 'nulla.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet', 2.53, '2004-09-14', '2003-11-14', 389, NULL, 2, 1, 'Lorem ipsum dolor', 35, 6),
(28, 'sem', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 4.99, '2010-02-14', '2024-12-13', 966, NULL, 2, 2, 'Lorem ipsum', 27, 10),
(29, 'neque', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus', 9.69, '2013-02-14', '2002-10-14', 765, NULL, 1, 2, 'Lorem ipsum', 42, 5),
(30, 'metus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 7.8, '2004-10-14', '2005-04-14', 766, NULL, 1, 2, 'Lorem ipsum', 91, 2),
(31, 'sociosqu', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', 1.25, '2007-09-14', '2029-06-14', 357, NULL, 2, 1, 'Lorem', 33, 4),
(32, 'venenatis', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', 1.55, '2001-05-14', '2028-11-14', 951, NULL, 1, 1, 'Lorem ipsum', 47, 6),
(33, 'neque', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', 8.16, '2008-08-14', '2030-10-14', 693, NULL, 2, 1, 'Lorem', 75, 1),
(34, 'dui.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 3.91, '2022-04-14', '2021-05-14', 322, NULL, 1, 2, 'Lorem ipsum', 83, 4),
(35, 'a', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', 8.8, '2003-08-14', '2011-09-14', 487, NULL, 1, 2, 'Lorem', 23, 5),
(36, 'gravida', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 1.1, '2029-08-14', '2024-10-14', 207, NULL, 2, 1, 'Lorem ipsum', 77, 9),
(37, 'eget,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 0.95, '2004-10-14', '2016-03-14', 308, NULL, 2, 2, 'Lorem ipsum', 41, 9),
(38, 'nec', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 7.86, '2019-05-14', '2010-09-14', 990, NULL, 1, 1, 'Lorem', 77, 5),
(39, 'pede.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 6.64, '2026-11-13', '2021-12-13', 484, NULL, 1, 2, 'Lorem ipsum', 93, 4),
(40, 'eget,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 5.52, '2025-09-14', '2016-09-14', 673, NULL, 2, 2, 'Lorem ipsum', 13, 6),
(41, 'Aliquam', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 0.3, '2016-06-14', '2002-03-14', 1000, NULL, 1, 2, 'Lorem', 3, 1),
(42, 'posuere', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 6.85, '2018-03-14', '2030-04-14', 906, NULL, 2, 2, 'Lorem ipsum', 99, 9),
(43, 'ullamcorper.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 6.28, '2011-01-14', '2029-11-14', 309, NULL, 1, 2, 'Lorem ipsum', 44, 5),
(44, 'id,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 1.23, '2001-11-14', '2027-06-14', 904, NULL, 1, 2, 'Lorem ipsum', 61, 1),
(45, 'adipiscing', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 0.29, '2007-11-14', '2024-02-14', 933, NULL, 1, 1, 'Lorem ipsum dolor', 43, 2),
(46, 'faucibus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 3.09, '2011-12-13', '2010-07-14', 442, NULL, 1, 2, 'Lorem', 57, 8),
(47, 'elementum', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 9.68, '2025-05-14', '2025-04-14', 523, NULL, 1, 2, 'Lorem ipsum dolor', 74, 10),
(48, 'eleifend,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 3.22, '2002-01-14', '2006-10-14', 336, NULL, 2, 2, 'Lorem ipsum dolor', 72, 5),
(49, 'ullamcorper', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 5.08, '2011-04-14', '2026-09-14', 412, NULL, 1, 1, 'Lorem ipsum dolor', 65, 9),
(50, 'Integer', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 7.64, '2017-10-14', '2029-01-14', 720, NULL, 1, 1, 'Lorem ipsum', 22, 8),
(51, 'enim.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.', 5.82, '2001-04-14', '2012-09-14', 798, NULL, 2, 2, 'Lorem ipsum dolor', 86, 8),
(52, 'semper', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 6.41, '2006-01-14', '2018-05-14', 25, NULL, 1, 2, 'Lorem ipsum', 81, 2),
(53, 'Suspendisse', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 9.47, '2008-11-14', '2017-11-14', 994, NULL, 2, 2, 'Lorem', 79, 2),
(54, 'accumsan', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 9.09, '2010-08-14', '2021-10-14', 81, NULL, 2, 1, 'Lorem ipsum dolor', 8, 4),
(55, 'ante', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 6.18, '2016-11-14', '2015-09-14', 484, NULL, 1, 2, 'Lorem ipsum', 14, 7),
(56, 'pede', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', 5.74, '2002-11-14', '2021-01-14', 344, NULL, 1, 2, 'Lorem ipsum', 15, 7),
(57, 'tincidunt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 1.67, '2029-03-14', '2009-11-14', 883, NULL, 1, 2, 'Lorem', 90, 5),
(58, 'Nunc', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 2.69, '2001-02-14', '2031-05-14', 29, NULL, 1, 2, 'Lorem ipsum', 27, 4),
(59, 'velit', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', 1.16, '2010-11-14', '2004-01-14', 515, NULL, 2, 2, 'Lorem ipsum dolor', 53, 7),
(60, 'Mauris', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 8.5, '2025-06-14', '2001-10-14', 902, NULL, 2, 2, 'Lorem ipsum', 3, 5),
(61, 'eu,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 1.68, '2005-11-14', '2006-05-14', 422, NULL, 2, 2, 'Lorem ipsum dolor', 39, 5),
(62, 'lacus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.', 2.57, '2013-12-14', '2017-08-14', 220, NULL, 1, 1, 'Lorem ipsum dolor', 46, 7),
(63, 'feugiat', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', 1.38, '2017-06-14', '2022-05-14', 670, NULL, 2, 1, 'Lorem', 78, 4),
(64, 'orci.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 9.4, '2009-05-14', '2027-05-14', 201, NULL, 1, 2, 'Lorem', 2, 7),
(65, 'malesuada', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 0.67, '2009-12-14', '2026-03-14', 61, NULL, 1, 1, 'Lorem', 30, 7),
(66, 'ac', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 5.47, '2026-02-14', '2012-06-14', 315, NULL, 2, 1, 'Lorem ipsum', 28, 8),
(67, 'sem.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 6.33, '2030-01-14', '2004-08-14', 663, NULL, 1, 2, 'Lorem ipsum', 46, 8),
(68, 'nunc', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 2.99, '2006-12-13', '2005-08-14', 924, NULL, 2, 1, 'Lorem ipsum dolor', 76, 7),
(69, 'orci', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 1.51, '2030-09-14', '2008-12-14', 627, NULL, 2, 2, 'Lorem', 6, 1),
(70, 'cursus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 4.39, '2025-06-14', '2013-06-14', 80, NULL, 2, 1, 'Lorem ipsum', 5, 6),
(71, 'Quisque', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 6.79, '2019-11-13', '2014-10-14', 56, NULL, 2, 2, 'Lorem ipsum', 27, 10),
(72, 'Mauris', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 7.05, '2001-01-14', '2022-07-14', 206, NULL, 2, 2, 'Lorem ipsum', 69, 3),
(73, 'erat', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus', 6.95, '2002-07-14', '2026-11-14', 305, NULL, 1, 2, 'Lorem', 57, 4),
(74, 'aliquet', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 5.13, '2001-08-14', '2031-05-14', 414, NULL, 1, 1, 'Lorem', 68, 1),
(75, 'fringilla', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 0.22, '2016-12-14', '2030-07-14', 557, NULL, 1, 2, 'Lorem ipsum', 11, 1),
(76, 'gravida', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 4.24, '2009-12-13', '2006-03-14', 599, NULL, 2, 2, 'Lorem ipsum dolor', 95, 10),
(77, 'nulla.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet', 2.53, '2004-09-14', '2003-11-14', 389, NULL, 2, 1, 'Lorem ipsum dolor', 35, 6),
(78, 'sem', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 4.99, '2010-02-14', '2024-12-13', 966, NULL, 2, 2, 'Lorem ipsum', 27, 10),
(79, 'neque', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus', 9.69, '2013-02-14', '2002-10-14', 765, NULL, 1, 2, 'Lorem ipsum', 42, 5),
(80, 'metus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 7.8, '2004-10-14', '2005-04-14', 766, NULL, 1, 2, 'Lorem ipsum', 91, 2),
(81, 'sociosqu', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', 1.25, '2007-09-14', '2029-06-14', 357, NULL, 2, 1, 'Lorem', 33, 4),
(82, 'venenatis', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', 1.55, '2001-05-14', '2028-11-14', 951, NULL, 1, 1, 'Lorem ipsum', 47, 6),
(83, 'neque', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', 8.16, '2008-08-14', '2030-10-14', 693, NULL, 2, 1, 'Lorem', 75, 1),
(84, 'dui.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 3.91, '2022-04-14', '2021-05-14', 322, NULL, 1, 2, 'Lorem ipsum', 83, 4),
(85, 'a', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', 8.8, '2003-08-14', '2011-09-14', 487, NULL, 1, 2, 'Lorem', 23, 5),
(86, 'gravida', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 1.1, '2029-08-14', '2024-10-14', 207, NULL, 2, 1, 'Lorem ipsum', 77, 9),
(87, 'eget,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 0.95, '2004-10-14', '2016-03-14', 308, NULL, 2, 2, 'Lorem ipsum', 41, 9),
(88, 'nec', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 7.86, '2019-05-14', '2010-09-14', 990, NULL, 1, 1, 'Lorem', 77, 5),
(89, 'pede.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 6.64, '2026-11-13', '2021-12-13', 484, NULL, 1, 2, 'Lorem ipsum', 93, 4),
(90, 'eget,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 5.52, '2025-09-14', '2016-09-14', 673, NULL, 2, 2, 'Lorem ipsum', 13, 6),
(91, 'Aliquam', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 0.3, '2016-06-14', '2002-03-14', 1000, NULL, 1, 2, 'Lorem', 3, 1),
(92, 'posuere', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 6.85, '2018-03-14', '2030-04-14', 906, NULL, 2, 2, 'Lorem ipsum', 99, 9),
(93, 'ullamcorper.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 6.28, '2011-01-14', '2029-11-14', 309, NULL, 1, 2, 'Lorem ipsum', 44, 5),
(94, 'id,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 1.23, '2001-11-14', '2027-06-14', 904, NULL, 1, 2, 'Lorem ipsum', 61, 1),
(95, 'adipiscing', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 0.29, '2007-11-14', '2024-02-14', 933, NULL, 1, 1, 'Lorem ipsum dolor', 43, 2),
(96, 'faucibus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 3.09, '2011-12-13', '2010-07-14', 442, NULL, 1, 2, 'Lorem', 57, 8),
(97, 'elementum', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 9.68, '2025-05-14', '2025-04-14', 523, NULL, 1, 2, 'Lorem ipsum dolor', 74, 10),
(98, 'eleifend,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 3.22, '2002-01-14', '2006-10-14', 336, NULL, 2, 2, 'Lorem ipsum dolor', 72, 5),
(99, 'ullamcorper', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 5.08, '2011-04-14', '2026-09-14', 412, NULL, 1, 1, 'Lorem ipsum dolor', 65, 9),
(100, 'Integer', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 7.64, '2017-10-14', '2029-01-14', 720, NULL, 1, 1, 'Lorem ipsum', 22, 8),
(101, 'enim.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.', 5.82, '2001-04-14', '2012-09-14', 798, NULL, 2, 2, 'Lorem ipsum dolor', 86, 8),
(102, 'semper', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 6.41, '2006-01-14', '2018-05-14', 25, NULL, 1, 2, 'Lorem ipsum', 81, 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `reports`
--

INSERT INTO `reports` (`id`, `Texto`, `Data`, `produto_id`, `servico_id`, `usuario_id`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', '0000-00-00', 16, 49, 66),
(2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet', '0000-00-00', 49, 45, 62),
(3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', '0000-00-00', 49, 38, 65),
(4, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet', '0000-00-00', 34, 14, 29),
(5, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', '0000-00-00', 46, 3, 11),
(6, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet', '0000-00-00', 32, 32, 43),
(7, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', '0000-00-00', 32, 1, 7),
(8, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet', '0000-00-00', 33, 35, 57),
(9, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at', '0000-00-00', 37, 16, 77),
(10, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida', '0000-00-00', 41, 10, 70),
(11, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', '0000-00-00', 13, 20, 93),
(12, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', '0000-00-00', 33, 2, 50),
(13, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida', '0000-00-00', 18, 39, 91),
(14, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida', '0000-00-00', 2, 43, 46),
(15, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', '0000-00-00', 42, 12, 57),
(16, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', '0000-00-00', 30, 39, 91),
(17, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet', '0000-00-00', 30, 27, 92),
(18, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', '0000-00-00', 12, 43, 42),
(19, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida', '0000-00-00', 10, 44, 15),
(20, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', '0000-00-00', 6, 26, 14);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=87 ;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `name`, `Descricao`, `Preco`, `Data_Publicacao`, `Data_Vencimento`, `Foto_Video`, `Bloqueado`, `Expirado`, `ACombinar`, `usuario_id`, `category_id`) VALUES
(1, 'asdad', 'asdasda', 111, '2014-11-19', '2014-11-19', NULL, 0, 0, NULL, 1, 1),
(2, 'nascetur', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 4.78, '2007-07-14', '2003-12-14', NULL, 1, 2, 1, 83, 3),
(3, 'sit', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 2.65, '2016-05-14', '2005-09-14', NULL, 2, 2, 2, 82, 8),
(4, 'Nunc', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 9.8, '2020-07-14', '2030-07-14', NULL, 2, 1, 2, 14, 4),
(5, 'tempor,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet', 7.24, '2003-05-14', '2011-09-14', NULL, 2, 1, 2, 50, 2),
(6, 'mi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 8.43, '2002-04-14', '2005-12-14', NULL, 1, 2, 2, 98, 2),
(7, 'vel', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 4.45, '2006-12-13', '2025-07-14', NULL, 2, 2, 2, 52, 1),
(8, 'neque', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 6.56, '2009-01-14', '2001-08-14', NULL, 2, 1, 1, 58, 6),
(9, 'id,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', 2.52, '2004-03-14', '2019-11-14', NULL, 1, 2, 1, 25, 4),
(10, 'felis', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 9.01, '2024-05-14', '2013-04-14', NULL, 2, 2, 1, 98, 3),
(11, 'consequat,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 3.36, '2031-07-14', '2015-01-15', NULL, 2, 1, 2, 46, 3),
(12, 'nunc.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', 6.4, '2021-04-14', '2003-07-14', NULL, 1, 2, 2, 8, 2),
(13, 'dolor,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 5.06, '2004-01-14', '2015-01-14', NULL, 2, 1, 1, 10, 10),
(14, 'enim,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', 7.53, '2021-11-14', '2009-04-14', NULL, 1, 1, 2, 57, 1),
(15, 'tempor', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', 3.23, '2026-05-14', '2020-12-14', NULL, 1, 2, 1, 63, 7),
(16, 'magna', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 3.35, '2010-10-14', '2012-07-14', NULL, 1, 1, 1, 16, 3),
(17, 'leo.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 5.23, '2029-03-14', '2016-06-14', NULL, 1, 2, 2, 42, 5),
(18, 'sit', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 6.91, '2011-09-14', '2029-10-14', NULL, 1, 2, 1, 46, 9),
(19, 'adipiscing', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 3.42, '2027-07-14', '2006-04-14', NULL, 2, 1, 2, 10, 4),
(20, 'aliquet', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', 7.67, '2005-09-14', '2006-04-14', NULL, 2, 1, 1, 73, 1),
(21, 'lobortis', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 5.13, '2029-11-13', '2024-09-14', NULL, 2, 2, 1, 89, 2),
(22, 'Donec', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 3.44, '2011-09-14', '2011-02-14', NULL, 2, 1, 2, 62, 4),
(23, 'enim.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', 2.96, '2017-03-14', '2027-11-14', NULL, 2, 2, 2, 25, 9),
(24, 'ultricies', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 9.8, '2016-01-14', '2007-07-14', NULL, 2, 2, 2, 91, 9),
(25, 'egestas', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 1, '2021-12-13', '2029-10-14', NULL, 2, 2, 2, 44, 8),
(26, 'euismod', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 2.27, '2008-10-14', '2011-08-14', NULL, 1, 1, 2, 30, 2),
(27, 'aliquet.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus', 5.68, '2030-06-14', '2007-07-14', NULL, 2, 1, 2, 22, 5),
(28, 'non', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 5.98, '2010-04-14', '2012-03-14', NULL, 1, 2, 1, 34, 4),
(29, 'a', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 7.73, '2017-10-14', '2002-10-14', NULL, 1, 2, 1, 23, 9),
(30, 'at,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 6.83, '2003-04-14', '2013-08-14', NULL, 2, 1, 1, 91, 1),
(31, 'rutrum', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida', 5.98, '2012-09-14', '2007-11-14', NULL, 1, 1, 1, 22, 9),
(32, 'lacus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 7.54, '2024-02-14', '2018-09-14', NULL, 2, 1, 1, 95, 9),
(33, 'nisl', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 8.2, '2013-09-14', '2014-01-15', NULL, 2, 2, 1, 8, 4),
(34, 'mattis', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 8.72, '2017-05-14', '2003-08-14', NULL, 2, 1, 1, 24, 2),
(35, 'Duis', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', 6.16, '2025-10-14', '2021-12-14', NULL, 2, 1, 2, 82, 3),
(36, 'nisi.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus', 2.83, '2003-05-14', '2011-10-14', NULL, 1, 1, 2, 100, 8),
(37, 'accumsan', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 3.23, '2007-01-14', '2017-04-14', NULL, 1, 1, 1, 18, 8),
(38, 'commodo', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 9.55, '2017-12-13', '2021-12-13', NULL, 1, 1, 1, 19, 8),
(39, 'erat,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.', 8.42, '2010-11-14', '2010-11-14', NULL, 1, 1, 2, 20, 6),
(40, 'auctor', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 6.77, '2002-04-14', '2002-11-14', NULL, 2, 1, 2, 89, 1),
(41, 'sed', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet', 6.05, '2009-12-14', '2011-10-14', NULL, 1, 1, 1, 51, 8),
(42, 'Phasellus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 2.59, '2013-09-14', '2003-03-14', NULL, 2, 2, 1, 68, 4),
(43, 'at', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 4.13, '2011-01-14', '2018-10-14', NULL, 2, 1, 1, 47, 9),
(44, 'semper', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida', 9.54, '2026-12-13', '2021-04-14', NULL, 2, 2, 1, 88, 1),
(45, 'sollicitudin', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 2.8, '2025-07-14', '2016-11-14', NULL, 2, 2, 2, 21, 7),
(46, 'pede,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida', 8.64, '2017-05-14', '2031-08-14', NULL, 2, 1, 1, 25, 7),
(47, 'odio.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 6.01, '2025-08-14', '2006-04-14', NULL, 2, 1, 2, 15, 10),
(48, 'nostra,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', 8.92, '2023-01-14', '2022-12-14', NULL, 1, 1, 2, 59, 2),
(49, 'nibh', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 9.37, '2027-11-13', '2009-05-14', NULL, 1, 1, 2, 14, 5),
(50, 'tempor', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.', 0.98, '2016-07-14', '2025-01-14', NULL, 2, 2, 2, 64, 1),
(51, 'vel,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', 2.47, '2023-10-14', '2016-02-14', NULL, 1, 1, 1, 43, 10),
(52, 'nascetur', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 4.78, '2007-07-14', '2003-12-14', NULL, 1, 2, 1, 83, 3),
(53, 'sit', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', 2.65, '2016-05-14', '2005-09-14', NULL, 2, 2, 2, 82, 8),
(54, 'Nunc', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 9.8, '2020-07-14', '2030-07-14', NULL, 2, 1, 2, 14, 4),
(55, 'tempor,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet', 7.24, '2003-05-14', '2011-09-14', NULL, 2, 1, 2, 50, 2),
(56, 'mi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 8.43, '2002-04-14', '2005-12-14', NULL, 1, 2, 2, 98, 2),
(57, 'vel', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 4.45, '2006-12-13', '2025-07-14', NULL, 2, 2, 2, 52, 1),
(58, 'neque', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 6.56, '2009-01-14', '2001-08-14', NULL, 2, 1, 1, 58, 6),
(59, 'id,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', 2.52, '2004-03-14', '2019-11-14', NULL, 1, 2, 1, 25, 4),
(60, 'felis', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 9.01, '2024-05-14', '2013-04-14', NULL, 2, 2, 1, 98, 3),
(61, 'consequat,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 3.36, '2031-07-14', '2015-01-15', NULL, 2, 1, 2, 46, 3),
(62, 'nunc.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', 6.4, '2021-04-14', '2003-07-14', NULL, 1, 2, 2, 8, 2),
(63, 'dolor,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 5.06, '2004-01-14', '2015-01-14', NULL, 2, 1, 1, 10, 10),
(64, 'enim,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', 7.53, '2021-11-14', '2009-04-14', NULL, 1, 1, 2, 57, 1),
(65, 'tempor', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', 3.23, '2026-05-14', '2020-12-14', NULL, 1, 2, 1, 63, 7),
(66, 'magna', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 3.35, '2010-10-14', '2012-07-14', NULL, 1, 1, 1, 16, 3),
(67, 'leo.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 5.23, '2029-03-14', '2016-06-14', NULL, 1, 2, 2, 42, 5),
(68, 'sit', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 6.91, '2011-09-14', '2029-10-14', NULL, 1, 2, 1, 46, 9),
(69, 'adipiscing', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 3.42, '2027-07-14', '2006-04-14', NULL, 2, 1, 2, 10, 4),
(70, 'aliquet', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', 7.67, '2005-09-14', '2006-04-14', NULL, 2, 1, 1, 73, 1),
(71, 'lobortis', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 5.13, '2029-11-13', '2024-09-14', NULL, 2, 2, 1, 89, 2),
(72, 'Donec', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 3.44, '2011-09-14', '2011-02-14', NULL, 2, 1, 2, 62, 4),
(73, 'enim.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', 2.96, '2017-03-14', '2027-11-14', NULL, 2, 2, 2, 25, 9),
(74, 'ultricies', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 9.8, '2016-01-14', '2007-07-14', NULL, 2, 2, 2, 91, 9),
(75, 'egestas', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 1, '2021-12-13', '2029-10-14', NULL, 2, 2, 2, 44, 8),
(76, 'euismod', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 2.27, '2008-10-14', '2011-08-14', NULL, 1, 1, 2, 30, 2),
(77, 'aliquet.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus', 5.68, '2030-06-14', '2007-07-14', NULL, 2, 1, 2, 22, 5),
(78, 'non', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', 5.98, '2010-04-14', '2012-03-14', NULL, 1, 2, 1, 34, 4),
(79, 'a', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 7.73, '2017-10-14', '2002-10-14', NULL, 1, 2, 1, 23, 9),
(80, 'at,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 6.83, '2003-04-14', '2013-08-14', NULL, 2, 1, 1, 91, 1),
(81, 'rutrum', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida', 5.98, '2012-09-14', '2007-11-14', NULL, 1, 1, 1, 22, 9),
(82, 'lacus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 7.54, '2024-02-14', '2018-09-14', NULL, 2, 1, 1, 95, 9),
(83, 'nisl', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 8.2, '2013-09-14', '2014-01-15', NULL, 2, 2, 1, 8, 4),
(84, 'mattis', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 8.72, '2017-05-14', '2003-08-14', NULL, 2, 1, 1, 24, 2),
(85, 'Duis', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', 6.16, '2025-10-14', '2021-12-14', NULL, 2, 1, 2, 82, 3),
(86, 'nisi.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus', 2.83, '2003-05-14', '2011-10-14', NULL, 1, 1, 2, 100, 8);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `terceiros`
--

INSERT INTO `terceiros` (`id`, `name`, `NomeEmpresa`, `Imagem`, `ValorPago`, `category_id`, `DataInicio`, `link`, `usuario_id`) VALUES
(1, 'Lorem', 'Sit Amet Luctus LLP', 'Cdtdaddkeblde', 0.68, 5, '0000-00-00', 'http://www.batata.co.uk', 76),
(2, 'Lorem ipsum', 'Erat Vitae Risus Corporation', 'Nvsbzuenhuvrb', 8.2, 8, '0000-00-00', 'http://www.hu3hu3.br', 47),
(3, 'Lorem ipsum', 'Tincidunt Consulting', 'Poddaangvesaa', 2.1, 10, '0000-00-00', 'http://www.kawaii-desu.co.jp', 16),
(4, 'Lorem ipsum dolor', 'Enim Etiam Gravida Incorporated', 'Ezchsdbnsxhtb', 6.29, 6, '0000-00-00', 'http://www.vivadilmacarai.org.com.br', 45),
(5, 'Lorem ipsum dolor sit', 'Quam Vel Corp.', 'Sxanouibbubnm', 2.15, 6, '0000-00-00', 'http://www.mintira-vivaaecio.com.br', 84);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `role`, `hash_change_password`, `created`, `modified`) VALUES
(1, 'ArthurHagnês', '4ea29bda296b03619d0e5214dbc2648881720689', 'arthur@hotmail.com', NULL, 'admin', 'fc7fc56609a46d3dfe8356983f2d4a8446582f2286e2b5dd57da5881f78652b8', '2014-11-20 13:50:03', '2014-11-20 14:18:40');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=111 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `Email`, `name`, `Senha`, `Telefone1`, `Data_Nascimento`, `Sexo`, `Telefone2`, `Foto`, `Strikes`, `Status`, `VotosPositivos`, `VotosNegativos`, `regra`) VALUES
(1, 'aaaaaaaa@hotmail.com', 'aaa', 'aaa', 'aaaa', '2014-11-19', 'M', '11111111', NULL, 0, 0, 0, 0, 0),
(2, 'arthru@hotmail.com', 'sdaasa', 'dadas', 'dassda', '2014-11-19', 'M', 'dsadads', NULL, 0, 0, 0, 0, 0),
(4, 'arthssru@hotmail.com', 'sdaasa', 'dadas', 'dassda', '2014-11-19', 'M', 'dsadads', NULL, 0, 0, 0, 0, 0),
(5, 'arthaaru@hotmail.com', 'sdaasa', 'dadas', 'dassda', '2014-11-19', 'M', 'dsadads', NULL, 0, 0, 0, 0, 0),
(6, 'arthaaqwqqwru@hotmail.com', 'sdaasa', 'dadas', 'dassda', '2014-11-19', 'M', 'dsadads', NULL, 0, 0, 0, 0, 0),
(7, 'wqqwru@hotmail.com', 'sdaasa', 'dadas', 'dassda', '2014-11-19', 'M', 'dsadads', NULL, 0, 0, 0, 0, 0),
(9, 'wqqa@hotmail.com', 'sdaasa', 'dadas', 'dassda', '2014-11-19', 'M', 'dsadads', NULL, 0, 0, 0, 0, 0),
(10, 'wqqaa@hotmail.com', 'sdaasa', 'dadas', 'dassda', '2014-11-19', 'M', 'dsadads', NULL, 0, 0, 0, 0, 0),
(11, 'venenatis.a.magna@miAliquamgravida.net', 'Olivier', 'HJG36LCT0KS', '(896) 565-5385', '0000-00-00', 'F', '(565) 993-5755', NULL, 2, 0, 0, 0, 1),
(12, 'Pellentesque.tincidunt@dolor.com', 'Nora', 'WPB89EFA1MQ', '(574) 461-7579', '0000-00-00', 'F', '(108) 714-6783', NULL, 2, 0, 0, 0, 1),
(13, 'at.iaculis.quis@nec.co.uk', 'Iona', 'MGF09YZZ2FQ', '(172) 600-5517', '0000-00-00', 'M', '(304) 153-5781', NULL, 2, 0, 0, 0, 1),
(14, 'metus@orciquis.net', 'Britanney', 'JHB03OUT9YZ', '(829) 762-7425', '0000-00-00', 'F', '(904) 149-0917', NULL, 1, 0, 0, 0, 1),
(15, 'tellus.lorem@conguea.co.uk', 'Erich', 'GLE98XVL4KV', '(183) 963-0079', '0000-00-00', 'M', '(111) 345-9874', NULL, 3, 0, 0, 0, 1),
(16, 'torquent.per.conubia@mollisIntegertincidunt.edu', 'Louis', 'CIQ91RTG6ZY', '(822) 386-0068', '0000-00-00', 'M', '(543) 635-1232', NULL, 3, 0, 0, 0, 1),
(17, 'aliquet.Proin.velit@vitaeeratVivamus.ca', 'Raymond', 'HGB01EUY6IJ', '(584) 617-3863', '0000-00-00', 'F', '(529) 900-3325', NULL, 3, 0, 0, 0, 1),
(18, 'neque@Nullafacilisi.org', 'Orli', 'BYT86LKB8MT', '(891) 518-0560', '0000-00-00', '2', '(431) 302-3449', NULL, 3, 0, 0, 0, 1),
(19, 'eu@Maurismagna.edu', 'Jackson', 'SNP15FNO3BK', '(307) 746-7494', '0000-00-00', 'M', '(428) 293-5963', NULL, 3, 0, 0, 0, 1),
(20, 'eget@Fuscemilorem.edu', 'Keaton', 'NFI67PVN4ZI', '(585) 255-0830', '0000-00-00', 'M', '(355) 306-4391', NULL, 2, 0, 0, 0, 1),
(21, 'egestas.a.dui@lectusantedictum.com', 'Kirestin', 'XKA11MEA3MQ', '(805) 584-8182', '0000-00-00', 'F', '(818) 543-0300', NULL, 3, 0, 0, 0, 1),
(22, 'porttitor.vulputate.posuere@utdolordapibus.co.uk', 'Xander', 'LAD28UUE5BI', '(360) 878-0706', '0000-00-00', 'M', '(932) 842-8173', NULL, 3, 0, 0, 0, 1),
(23, 'ut@fermentumvel.org', 'Abbot', 'OXB73XQN8FB', '(788) 316-8023', '0000-00-00', 'M', '(447) 428-9719', NULL, 3, 0, 0, 0, 1),
(24, 'pharetra@Sed.net', 'Hillary', 'RFF15CJW5EB', '(346) 463-8469', '0000-00-00', 'M', '(158) 947-6034', NULL, 3, 0, 0, 0, 1),
(25, 'vel.sapien@acmattissemper.edu', 'Clinton', 'TQY80FTI1CV', '(996) 176-0742', '0000-00-00', 'F', '(116) 240-3044', NULL, 3, 0, 0, 0, 1),
(26, 'sem.ut@Nulla.co.uk', 'Sigourney', 'ICX74HRI5WP', '(259) 584-6954', '0000-00-00', 'M', '(707) 812-4432', NULL, 2, 0, 0, 0, 1),
(27, 'lorem.Donec.elementum@ornareplacerat.ca', 'Mary', 'NWZ23RUP5XL', '(750) 899-6262', '0000-00-00', 'M', '(541) 513-3277', NULL, 2, 0, 0, 0, 1),
(28, 'aliquet@vestibulummassarutrum.ca', 'Xandra', 'ZVG60BZH8VU', '(331) 300-6714', '0000-00-00', 'F', '(119) 266-8299', NULL, 1, 0, 0, 0, 1),
(29, 'a.facilisis@convallis.ca', 'Lillith', 'MZH15GRR0SM', '(210) 462-4874', '0000-00-00', 'M', '(538) 234-4564', NULL, 1, 0, 0, 0, 1),
(30, 'odio.tristique.pharetra@ornarelectusante.ca', 'Urielle', 'LKV85YZX3BS', '(506) 853-0023', '0000-00-00', 'M', '(770) 412-8916', NULL, 2, 0, 0, 0, 1),
(31, 'nec@ipsumCurabiturconsequat.edu', 'Elvis', 'HKO93HTZ2CB', '(812) 984-9039', '0000-00-00', 'M', '(491) 703-0609', NULL, 1, 0, 0, 0, 1),
(32, 'at.arcu@Morbi.com', 'Lars', 'MQE14TMW3HJ', '(338) 365-3330', '0000-00-00', 'F', '(146) 237-1511', NULL, 1, 0, 0, 0, 1),
(33, 'gravida.nunc.sed@Suspendissetristique.com', 'Griffin', 'KFS21JNW9CB', '(934) 637-2315', '0000-00-00', 'M', '(991) 121-2074', NULL, 2, 0, 0, 0, 1),
(34, 'vestibulum.neque.sed@egettincidunt.edu', 'Marny', 'LTT53HUP1WH', '(612) 931-0584', '0000-00-00', 'F', '(464) 297-4178', NULL, 1, 0, 0, 0, 1),
(35, 'imperdiet.non@Praesenteudui.net', 'Dahlia', 'VHI36FOU0VV', '(930) 173-0789', '0000-00-00', 'F', '(946) 944-3038', NULL, 2, 0, 0, 0, 1),
(36, 'sociis@porttitoreros.edu', 'Muda', 'SQV15GUC2JV', '(658) 884-1972', '0000-00-00', 'F', '(672) 420-0803', NULL, 1, 0, 0, 0, 1),
(37, 'neque.In@urna.org', 'Anne', 'ZDI82AAM4UI', '(798) 139-8709', '0000-00-00', 'F', '(105) 819-3422', NULL, 3, 0, 0, 0, 1),
(38, 'diam@velitAliquamnisl.com', 'Guy', 'NFT78XQH3IF', '(728) 899-2568', '0000-00-00', 'M', '(194) 808-1598', NULL, 2, 0, 0, 0, 1),
(39, 'nulla.Cras@elementumpurus.co.uk', 'Abel', 'RZN45KWO1OS', '(797) 389-6090', '0000-00-00', 'M', '(382) 201-5799', NULL, 1, 0, 0, 0, 1),
(40, 'et.commodo.at@gravidaAliquam.co.uk', 'Alexandra', 'FPH22ANU2MF', '(661) 315-0276', '0000-00-00', 'F', '(242) 428-8040', NULL, 3, 0, 0, 0, 1),
(41, 'sem@dolor.edu', 'Muda', 'WQI26BLM6UY', '(343) 913-6355', '0000-00-00', 'M', '(560) 219-4216', NULL, 2, 0, 0, 0, 1),
(42, 'sagittis@diamnunc.net', 'Lyle', 'HBC61VEJ6LR', '(422) 263-4447', '0000-00-00', 'F', '(869) 950-9071', NULL, 1, 0, 0, 0, 1),
(43, 'ligula.consectetuer.rhoncus@Aliquamultrices.co.uk', 'Marcia', 'TUM53FPH5EF', '(618) 786-5646', '0000-00-00', 'F', '(429) 918-4532', NULL, 1, 0, 0, 0, 1),
(44, 'Phasellus.nulla@Sednulla.ca', 'Neve', 'UBL24IGW5GN', '(311) 158-1044', '0000-00-00', 'M', '(401) 819-7727', NULL, 2, 0, 0, 0, 1),
(45, 'Nunc.pulvinar@lacus.org', 'Dana', 'ERI44RIT2QI', '(253) 556-2819', '0000-00-00', 'F', '(678) 889-7285', NULL, 2, 0, 0, 0, 1),
(46, 'Nullam.nisl@ullamcorpermagnaSed.com', 'Ora', 'USC94ZXS2NV', '(613) 186-2173', '0000-00-00', 'F', '(886) 986-1592', NULL, 1, 0, 0, 0, 1),
(47, 'ac@Nullainterdum.net', 'Elaine', 'GND73CAF7QP', '(205) 173-3900', '0000-00-00', 'M', '(418) 703-0406', NULL, 3, 0, 0, 0, 1),
(48, 'Duis.sit@semPellentesqueut.edu', 'Phillip', 'WWW24UHW7ZA', '(730) 735-5781', '0000-00-00', 'F', '(200) 507-4144', NULL, 2, 0, 0, 0, 1),
(49, 'diam.Pellentesque@lacusQuisquepurus.edu', 'Ramona', 'YWI95KVE8PF', '(302) 862-2644', '0000-00-00', 'M', '(287) 971-4281', NULL, 3, 0, 0, 0, 1),
(50, 'augue@euaugueporttitor.org', 'Amos', 'IPO84RSY4GQ', '(219) 381-0970', '0000-00-00', 'F', '(412) 895-9384', NULL, 2, 0, 0, 0, 1),
(51, 'lorem@facilisisfacilisis.edu', 'Igor', 'UQC14BIS9QG', '(885) 266-7058', '0000-00-00', 'M', '(592) 710-9610', NULL, 3, 0, 0, 0, 1),
(52, 'vitae.purus.gravida@lacus.ca', 'Tanner', 'NMC40CVV7MH', '(188) 712-8733', '0000-00-00', 'F', '(992) 320-8922', NULL, 3, 0, 0, 0, 1),
(53, 'et.risus@Maecenas.edu', 'Amaya', 'APX23DUG8TA', '(981) 667-1185', '0000-00-00', 'M', '(989) 131-9027', NULL, 3, 0, 0, 0, 1),
(54, 'ac.turpis.egestas@ametconsectetuer.org', 'Lani', 'CGI63HAC5QM', '(888) 492-2709', '0000-00-00', 'M', '(418) 701-5117', NULL, 2, 0, 0, 0, 1),
(55, 'blandit.at.nisi@Craseget.edu', 'Walker', 'QKQ74AKY6ZA', '(561) 904-8040', '0000-00-00', 'M', '(127) 300-6716', NULL, 3, 0, 0, 0, 1),
(56, 'Sed@velitAliquamnisl.com', 'Colton', 'DOH05UNV8PW', '(134) 294-6882', '0000-00-00', 'M', '(709) 715-9266', NULL, 3, 0, 0, 0, 1),
(57, 'Donec.tempus.lorem@rutrumlorem.net', 'Pearl', 'SNB66JUJ6TC', '(299) 647-2681', '0000-00-00', 'M', '(747) 284-5289', NULL, 1, 0, 0, 0, 1),
(58, 'aliquam.adipiscing.lacus@ullamcorpernisl.org', 'Hakeem', 'NKM86ERV0BV', '(719) 157-9167', '0000-00-00', 'M', '(131) 282-2556', NULL, 2, 0, 0, 0, 1),
(59, 'ligula.elit@eratneque.org', 'Fletcher', 'QOK56JQS6JB', '(395) 191-9211', '0000-00-00', 'F', '(677) 665-5602', NULL, 2, 0, 0, 0, 1),
(60, 'in.consectetuer@risusaultricies.ca', 'Xantha', 'IQV66PDL0WM', '(237) 455-4100', '0000-00-00', '1', '(377) 407-8555', NULL, 3, 0, 0, 0, 1),
(61, 'inceptos.hymenaeos.Mauris@ac.org', 'Mom', 'UJK63NHP3NC', '(237) 265-5327', '0000-00-00', 'F', '(340) 215-3675', NULL, 1, 0, 0, 0, 1),
(62, 'auctor.non.feugiat@fringillacursuspurus.edu', 'Britanni', 'PRV17ZSX3ML', '(858) 361-8475', '0000-00-00', '1', '(534) 511-6100', NULL, 3, 0, 0, 0, 1),
(63, 'dolor@nasceturridiculus.org', 'Tatiana', 'FDK45VUN4EE', '(833) 804-7221', '0000-00-00', 'M', '(185) 367-5844', NULL, 1, 0, 0, 0, 1),
(64, 'Donec@quispede.com', 'Sage', 'QUP89RNM4KI', '(755) 689-1729', '0000-00-00', 'F', '(304) 386-7489', NULL, 1, 0, 0, 0, 1),
(65, 'urna@aliquameuaccumsan.ca', 'Bert', 'PKB65ZHY3XX', '(413) 518-5559', '0000-00-00', '1', '(569) 781-7615', NULL, 3, 0, 0, 0, 1),
(66, 'erat@Aliquamnisl.org', 'Isaac', 'QDK53DOP0PN', '(835) 852-9180', '0000-00-00', 'F', '(229) 628-7033', NULL, 3, 0, 0, 0, 1),
(67, 'mauris.sapien.cursus@placerat.edu', 'Tamara', 'UKR98WWM2TI', '(381) 382-7005', '0000-00-00', 'F', '(831) 659-3660', NULL, 3, 0, 0, 0, 1),
(68, 'interdum.enim@tempusmauriserat.org', 'Cameran', 'OMS20IKJ5JO', '(765) 881-8073', '0000-00-00', 'M', '(752) 532-1232', NULL, 2, 0, 0, 0, 1),
(69, 'sem.ut@ut.com', 'Haviva', 'MGP77YJG4LB', '(547) 955-2077', '0000-00-00', 'F', '(623) 622-1350', NULL, 2, 0, 0, 0, 1),
(70, 'in@sitamet.ca', 'Lynn', 'UAX57NFG0GE', '(149) 430-0011', '0000-00-00', 'F', '(259) 786-6731', NULL, 3, 0, 0, 0, 1),
(71, 'Curabitur@Nunc.ca', 'Beatrice', 'AYO93KUH4BH', '(865) 442-1702', '0000-00-00', 'M', '(554) 635-3950', NULL, 0, 0, 0, 0, 1),
(72, 'luctus@scelerisquesedsapien.ca', 'Zachary', 'VYP17KEW7CZ', '(563) 451-5593', '0000-00-00', 'F', '(379) 441-4660', NULL, 1, 0, 0, 0, 1),
(73, 'et@fringillamilacinia.org', 'Ori', 'RQC38JQQ2LR', '(349) 314-4783', '0000-00-00', 'F', '(473) 987-9276', NULL, 1, 0, 0, 0, 1),
(74, 'gravida@egestasblandit.com', 'Reed', 'ZTI39BRU6RQ', '(106) 724-1824', '0000-00-00', 'M', '(660) 250-5344', NULL, 2, 0, 0, 0, 1),
(75, 'euismod.mauris.eu@aliquetmolestie.co.uk', 'Claire', 'MAZ84YPG3BO', '(526) 505-6582', '0000-00-00', 'F', '(377) 779-9605', NULL, 3, 0, 0, 0, 1),
(76, 'amet.massa.Quisque@ut.ca', 'Battler', 'XPV74PGR8ZE', '(346) 578-3546', '0000-00-00', 'F', '(122) 564-6504', NULL, 1, 0, 0, 0, 1),
(77, 'Duis.risus.odio@nuncsed.com', 'Regina', 'QAD52OHO9SI', '(530) 992-0176', '0000-00-00', 'M', '(936) 996-0948', NULL, 1, 0, 0, 0, 1),
(78, 'eget.laoreet.posuere@CurabiturmassaVestibulum.com', 'Tana', 'LXJ70HRI1VR', '(984) 265-3520', '0000-00-00', 'M', '(233) 639-4456', NULL, 3, 0, 0, 0, 1),
(79, 'a@orci.edu', 'MacKenzie', 'NVJ44KFN6BM', '(369) 338-9394', '0000-00-00', 'M', '(250) 617-7092', NULL, 3, 0, 0, 0, 1),
(80, 'natoque@consectetuer.ca', 'Kyla', 'CEL76PNX1UM', '(327) 821-2218', '0000-00-00', 'F', '(917) 327-9431', NULL, 3, 0, 0, 0, 1),
(81, 'semper.cursus@ac.ca', 'Gannondorf', 'SEC01IUD0ZR', '(166) 212-0893', '0000-00-00', 'F', '(513) 133-0471', NULL, 3, 0, 0, 0, 1),
(82, 'egestas.nunc@Uttinciduntvehicula.net', 'Brian', 'BZJ34FBR5VN', '(290) 739-5729', '0000-00-00', 'F', '(537) 708-6713', NULL, 2, 0, 0, 0, 1),
(83, 'Nulla.tempor@ipsumleoelementum.co.uk', 'Alma', 'RAF74YJA4MY', '(493) 370-4801', '0000-00-00', 'F', '(814) 637-4132', NULL, 3, 0, 0, 0, 1),
(84, 'Nunc@eu.co.uk', 'Emily', 'JXX03RMM7FO', '(419) 539-8577', '0000-00-00', 'M', '(884) 299-2254', NULL, 1, 0, 0, 0, 1),
(85, 'quis.massa@feugiatmetus.net', 'Connor', 'YFS68QGS9LO', '(434) 400-4387', '0000-00-00', 'F', '(781) 325-0754', NULL, 1, 0, 0, 0, 1),
(86, 'odio.tristique.pharetra@sedfacilisis.co.uk', 'Link', 'ZXO24GSO9WA', '(457) 264-2603', '0000-00-00', 'M', '(757) 777-1581', NULL, 3, 0, 0, 0, 1),
(87, 'dictum.magna@semperdui.org', 'Aidan', 'ILT64AVE4HT', '(656) 718-2370', '0000-00-00', 'M', '(646) 472-8733', NULL, 1, 0, 0, 0, 1),
(88, 'Mauris@gravidaAliquamtincidunt.co.uk', 'Stuart', 'WFD57EDX6EF', '(723) 547-4671', '0000-00-00', '2', '(751) 342-6718', NULL, 1, 0, 0, 0, 1),
(89, 'vulputate@hendrerit.ca', 'Fleur', 'IBQ00IWZ9HV', '(427) 884-4687', '0000-00-00', 'F', '(953) 201-6004', NULL, 2, 0, 0, 0, 1),
(90, 'Nunc.pulvinar@tortor.co.uk', 'Jena', 'FJB94FJL3DU', '(539) 565-2141', '0000-00-00', 'M', '(584) 256-5249', NULL, 1, 0, 0, 0, 1),
(91, 'dapibus@leoVivamusnibh.co.uk', 'Nanoha', 'APV72QBB4FI', '(372) 441-0899', '0000-00-00', 'M', '(112) 597-7200', NULL, 2, 0, 0, 0, 1),
(92, 'eget@musAenean.com', 'Maxine', 'BUN04DLJ7AL', '(423) 179-4672', '0000-00-00', 'F', '(668) 985-6892', NULL, 1, 0, 0, 0, 1),
(93, 'lectus.ante.dictum@laciniaatiaculis.ca', 'Gretchen', 'WNS11HVJ1DP', '(855) 467-7179', '0000-00-00', 'F', '(455) 835-5906', NULL, 3, 0, 0, 0, 1),
(94, 'ullamcorper.nisl.arcu@viverra.org', 'Sharon', 'VBM48GXP0GF', '(927) 120-5752', '0000-00-00', 'F', '(643) 444-5755', NULL, 2, 0, 0, 0, 1),
(95, 'Aenean.euismod.mauris@ultrices.ca', 'Meredith', 'FDI64SLR0SE', '(123) 410-0868', '0000-00-00', 'M', '(462) 615-6444', NULL, 1, 0, 0, 0, 1),
(96, 'dictum@Cum.net', 'Fate', 'BGW97NOJ8SA', '(748) 799-5370', '0000-00-00', 'M', '(241) 317-5899', NULL, 1, 0, 0, 0, 1),
(97, 'elit.a@scelerisque.co.uk', 'Alfonso', 'USO11WMO2ER', '(499) 584-1404', '0000-00-00', 'F', '(928) 398-6994', NULL, 1, 0, 0, 0, 1),
(98, 'pulvinar.arcu.et@Donecnibh.org', 'Azalia', 'WQT62RXR9KJ', '(978) 566-7491', '0000-00-00', 'F', '(918) 385-2424', NULL, 3, 0, 0, 0, 1),
(99, 'Proin@Phasellus.edu', 'Kerry', 'QES64QLK4SI', '(308) 645-4333', '0000-00-00', 'F', '(341) 163-2162', NULL, 2, 0, 0, 0, 1),
(100, 'Quisque.varius.Nam@ultrices.net', 'Cecilia', 'JOT64QZB2CG', '(330) 838-9022', '0000-00-00', 'F', '(939) 513-8517', NULL, 1, 0, 0, 0, 1),
(101, 'In.scelerisque@fermentumarcuVestibulum.org', 'Avdol', 'WUV74ALL9OT', '(547) 832-6728', '0000-00-00', 'M', '(435) 492-0230', NULL, 2, 0, 0, 0, 1),
(102, 'lacinia.orci@ipsum.ca', 'Christine', 'RNQ59UHG7DT', '(203) 779-8913', '0000-00-00', 'F', '(673) 962-9193', NULL, 1, 0, 0, 0, 1),
(103, 'et.ultrices@eutellus.edu', 'Maya', 'EPU55XCL1FT', '(767) 518-8798', '0000-00-00', 'M', '(601) 517-6709', NULL, 2, 0, 0, 0, 1),
(104, 'adipiscing@Sednec.net', 'Riley', 'SOX70JTS3SV', '(839) 958-5400', '0000-00-00', 'M', '(404) 324-4202', NULL, 2, 0, 0, 0, 1),
(105, 'vehicula.Pellentesque@nislsem.edu', 'Jermaine', 'LCX51YJR5OW', '(212) 157-4747', '0000-00-00', 'M', '(155) 445-8858', NULL, 1, 0, 0, 0, 1),
(106, 'luctus.et.ultrices@tristiquesenectus.co.uk', 'Polnareff', 'IQM84TCT5RE', '(298) 672-8020', '0000-00-00', 'F', '(400) 807-2259', NULL, 1, 0, 0, 0, 1),
(107, 'augue@aliquetodioEtiam.com', 'Maxwell', 'ZTV35AUI1DT', '(207) 819-5832', '0000-00-00', 'M', '(789) 194-8288', NULL, 2, 0, 0, 0, 1),
(108, 'pede.et@nibh.co.uk', 'Brooke', 'CHX32TAC1BP', '(398) 367-5168', '0000-00-00', 'F', '(946) 194-8101', NULL, 1, 0, 0, 0, 1),
(109, 'dapibus@temporbibendum.com', 'Paki', 'ONA35RNV9DM', '(950) 214-0461', '0000-00-00', 'F', '(517) 184-1664', NULL, 3, 0, 0, 0, 1),
(110, 'vitae.risus@sit.net', 'Jacqueline', 'VXZ46LQR5OM', '(271) 991-4145', '0000-00-00', 'F', '(423) 724-5672', NULL, 3, 0, 0, 0, 1);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `mensagems`
--
ALTER TABLE `mensagems`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `negociacaos`
--
ALTER TABLE `negociacaos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `terceiros`
--
ALTER TABLE `terceiros`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
