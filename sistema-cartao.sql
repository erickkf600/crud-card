-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Set-2020 às 23:28
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema-cartao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `nomeComp` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `valor` varchar(10) NOT NULL,
  `parcela` varchar(5) NOT NULL,
  `cartao` varchar(10) NOT NULL,
  `mes` enum('janeiro','fevereiro','marco','abril','maio','junho','julho','agosto','setembro','outubro','novembro','dezembro') NOT NULL,
  `ano` year(4) NOT NULL,
  `dt_pagamento` date NOT NULL,
  `pago` enum('nao','sim') NOT NULL,
  `quemCadastrou` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`id`, `nomeComp`, `usuario`, `valor`, `parcela`, `cartao`, `mes`, `ano`, `dt_pagamento`, `pago`, `quemCadastrou`) VALUES
(181, 'Em aberto', 'Erick', '104.55', '---', 'nubank', 'outubro', 2019, '2019-10-08', 'sim', 'Erick'),
(5, 'Celular', 'Wemerson', '68.00', '7/12', 'pag', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(6, 'Lojas Americanas', 'Wemerson', '17.00', '---', 'nubank', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(7, 'MacDino', 'Wemerson', '17.33', '---', 'nubank', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(8, 'Disantini ', 'Wemerson', '70', '2/2', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(9, 'Google Play', 'Wemerson', '4.00', '---', 'pag', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(10, 'Pizza', 'Wemerson', '9.00', '---', 'nubank', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(11, 'Mecanico', 'Wemerson', '138.0', '2/4', 'nubank', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(12, 'Peça', 'Wemerson', '55.00', '2/2', 'pag', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(13, 'Itamarati', 'Wemerson', '156.0', '2/4', 'pag', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(14, 'Itunes', 'Wemerson', '8.00', '---', 'pag', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(15, 'Filtro de Linha', 'Wemerson', '28.00', '---', 'nubank', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(180, 'Nobre House', 'Lucas', '12.00', '---', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(17, 'Passaporte', 'Thaisa', '95.00', '3/3', 'pag', 'agosto', 2019, '2019-09-04', 'sim', 'Erick'),
(18, 'Cinema', 'Thaisa', '15.00', '---', 'nubank', 'agosto', 2019, '2019-09-04', 'sim', 'Erick'),
(19, 'Extra $3 faltam...', 'Thaisa', '2.00', '---', 'nubank', 'agosto', 2019, '2019-09-04', 'sim', 'Trabalho'),
(203, 'Compra no mercado ', 'Samuel', '171.63', '---', 'digio', 'novembro', 2019, '2019-11-25', 'sim', 'Samuel'),
(167, 'Pizza', 'Lucas', '28.00', '---', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(27, 'Controle Xbox', 'Edson', '68.00', '3/3', 'pag', 'agosto', 2019, '2019-08-17', 'sim', 'Erick'),
(28, 'Netflix', 'Lucas', '46.00', '---', 'nubank', 'agosto', 2019, '2019-09-04', 'sim', 'Erick'),
(29, 'Pizza', 'Lucas', '8.50', '2/2', 'nubank', 'agosto', 2019, '2019-09-04', 'sim', 'Erick'),
(89, 'Copo GOT ', 'Lucas', '19', '3/4', 'credcard', 'setembro', 2019, '2019-10-04', 'sim', 'Lucas'),
(31, 'Display', 'Trabalho', '120.0', '---', 'nubank', 'agosto', 2019, '2019-09-04', 'sim', 'Erick'),
(32, 'Auto falante', 'Trabalho', '24.00', '---', 'nubank', 'agosto', 2019, '2019-09-04', 'sim', 'Erick'),
(179, 'Netflix', 'Lucas', '33.00', '---', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(177, 'Josué', 'Lucas', '3.75', '---', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(175, 'Mecanico', 'Wemerson', '138.00', '4/4', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(173, 'Remedio', 'Mãe', '27.00', '---', 'nubank', 'outubro', 2019, '2019-10-17', 'sim', 'Erick'),
(172, 'mercado', 'Mãe', '13.00', '---', 'nubank', 'outubro', 2019, '2019-10-17', 'sim', 'Erick'),
(39, 'Gas', 'Wemerson', '10.00', '---', 'digio', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(202, 'Google play', 'Lucas', '4.40', '---', 'pag', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(127, 'Placa de Video', 'Wemerson', '93.00', '5/10', 'nubank', 'setembro', 2019, '2019-09-20', 'sim', 'Erick'),
(201, 'Google ', 'Lucas', '1.00', '---', 'pag', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(45, 'Josué', 'Erick', '4.50', '---', 'nubank', 'setembro', 2019, '0000-00-00', 'nao', 'Erick'),
(47, 'Pizza', 'Wemerson', '25.60', '2/2', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(48, 'Itunes', 'Wemerson', '1.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(49, 'Itunes', 'Wemerson', '22.80', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(50, 'Itunes', 'Wemerson', '8.80', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(51, 'Itunes', 'Wemerson', '18.90', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(53, 'Itunes', 'Wemerson', '1.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(54, 'PagSeguro', 'Wemerson', '1.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(55, 'Boa Compra', 'Wemerson', '50.00', '1/3', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(87, 'Pizza', 'Wemerson', '20.00', '---', 'digio', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(58, 'Itunes', 'Wemerson', '3.90', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(59, 'Mecanico', 'Wemerson', '25.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(60, 'Salgado 2R$', 'Wemerson', '29.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(61, 'Gas', 'Wemerson', '26.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(62, 'Alcool', 'Wemerson', '30.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(63, 'Mercadinho', 'Wemerson', '23.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(64, 'Mercadinho', 'Wemerson', '3.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(65, 'stelo sonho de verão', 'Wemerson', '2.50', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(66, 'Pizza', 'Wemerson', '26.00', '1/2', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(67, 'Itunes', 'Wemerson', '37.90', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(68, 'Josué', 'Wemerson', '15.50', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(69, 'Vianense', 'Wemerson', '33.83', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(70, 'Edatel', 'Wemerson', '80.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(71, 'Itunes', 'Wemerson', '37.90', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(72, 'McDino', 'Wemerson', '22.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(73, 'Salgado 2R$', 'Wemerson', '32.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(74, 'Gas', 'Wemerson', '20.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(75, 'Ingresso Rei Leão', 'Wemerson', '37.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(76, 'Estacionamento', 'Wemerson', '9.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(77, 'Creditos', 'Wemerson', '13.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(78, 'Itunes', 'Wemerson', '4.80', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(79, 'Xodo', 'Wemerson', '17.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(80, 'Vianense', 'Wemerson', '56.00', '1/2', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(81, 'Boa Compra', 'Wemerson', '17.00', '1/3', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(82, 'Ingresso cinema Nat', 'Wemerson', '15.00', '---', 'credcard', 'agosto', 2019, '2019-08-14', 'sim', 'Erick'),
(85, 'Google Garena', 'Lucas', '21.00', '---', 'nubank', 'agosto', 2019, '2019-09-04', 'sim', 'Erick'),
(88, 'McDino', 'Lucas', '15.00', '---', 'nubank', 'agosto', 2019, '2019-09-04', 'sim', 'Erick'),
(84, 'Shampoo Drg Mundial', 'Lucas', '25.00', '---', 'nubank', 'agosto', 2019, '2019-09-04', 'sim', 'Trabalho'),
(83, 'McDino', 'Lucas', '15.00', '---', 'nubank', 'agosto', 2019, '2019-09-04', 'sim', 'Erick'),
(138, 'Josué', 'Erick', '4.50', '---', 'pag', 'setembro', 2019, '0000-00-00', 'nao', 'Erick'),
(137, 'Josué', 'Lucas', '4.50', '---', 'pag', 'setembro', 2019, '2019-10-04', 'sim', 'Erick'),
(92, 'Descarga Carro ', 'Wemerson', '140.0', '2/3', 'credcard', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(93, 'Descarga Carro ', 'Wemerson', '140.0', '3/3', 'credcard', 'novembro', 2019, '2019-11-30', 'sim', 'Erick'),
(163, 'Drogarial Mundial', 'Mãe', '18.00', '---', 'pag', 'outubro', 2019, '2019-10-17', 'sim', 'Erick'),
(95, 'Juros ', 'Thaisa', '60.00', '---', 'pag', 'agosto', 2019, '2019-09-04', 'sim', 'Erick'),
(96, 'Juros', 'Thaisa', '23.00', '---', 'nubank', 'agosto', 2019, '2019-09-04', 'sim', 'Erick'),
(97, 'Chinelo ', 'Thaisa', '52.50', '1/2', 'nubank', 'setembro', 2019, '0000-00-00', 'nao', 'Erick'),
(98, 'Chinelo ', 'Thaisa', '52.50', '2/2', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(99, 'Cinema', 'Lucas', '20.36', '---', 'pag', 'agosto', 2019, '2019-09-04', 'sim', 'Erick'),
(100, 'Credito', 'Wemerson', '20.00', '---', 'pag', 'setembro', 2019, '2019-09-20', 'sim', 'Erick'),
(101, 'Alcool', 'Wemerson', '30.00', '---', 'pag', 'setembro', 2019, '2019-09-20', 'sim', 'Erick'),
(102, 'Guanabara', 'Mãe', '75.63', '---', 'nubank', 'setembro', 2019, '2019-09-27', 'sim', 'Erick'),
(103, 'Mercadinho', 'Mãe', '14.65', '---', 'nubank', 'setembro', 2019, '2019-09-27', 'sim', 'Erick'),
(104, 'Capinha', 'Lucas', '36.80', '---', 'pag', 'setembro', 2019, '2019-10-04', 'sim', 'Erick'),
(105, 'Celular', 'Lucas', '104.0', '1/10', 'pag', 'setembro', 2019, '2019-10-04', 'sim', 'Erick'),
(106, 'Celular', 'Lucas', '104.0', '2/10', 'pag', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(107, 'Celular', 'Lucas', '104.0', '3/10', 'pag', 'novembro', 2019, '2019-11-27', 'sim', 'Erick'),
(108, 'Celular', 'Lucas', '104.0', '4/10', 'pag', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(109, 'Batata Samul e Lucas', 'Lucas', '35.00', '---', 'nubank', 'setembro', 2019, '2019-10-04', 'sim', 'Erick'),
(110, 'Josué Samuel e Lucas', 'Lucas', '7.50', '---', 'nubank', 'setembro', 2019, '2019-10-04', 'sim', 'Erick'),
(111, 'Reteste', 'Wemerson', '131.00', '1/3', 'nubank', 'setembro', 2019, '2019-09-20', 'sim', 'Trabalho'),
(112, 'Reteste', 'Wemerson', '131.0', '2/3', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(113, 'Reteste', 'Wemerson', '131.0', '3/3', 'nubank', 'novembro', 2019, '2019-11-30', 'sim', 'Erick'),
(114, 'Gas ', 'Wemerson', '10.00', '---', 'nubank', 'setembro', 2019, '2019-09-20', 'sim', 'Erick'),
(115, 'Netflix', 'Lucas', '46.00', '---', 'nubank', 'setembro', 2019, '2019-10-04', 'sim', 'Erick'),
(116, 'Maquininha ', 'Wemerson', '1.00', '---', 'nubank', 'setembro', 2019, '2019-09-20', 'sim', 'Erick'),
(117, 'Açai', 'Mãe', '15.00', '---', 'nubank', 'setembro', 2019, '2019-09-27', 'sim', 'Erick'),
(118, 'Açai', 'Lucas', '7.50', '---', 'nubank', 'setembro', 2019, '2019-10-04', 'sim', 'Erick'),
(119, 'Açai', 'Wemerson', '7.50', '---', 'nubank', 'setembro', 2019, '2019-09-20', 'sim', 'Erick'),
(120, 'Batata', 'Lucas', '9.00', '---', 'nubank', 'setembro', 2019, '2019-10-04', 'sim', 'Erick'),
(121, 'Batata', 'Wemerson', '18.00', '---', 'nubank', 'setembro', 2019, '2019-09-20', 'sim', 'Erick'),
(122, 'Josué', 'Lucas', '4.50', '---', 'nubank', 'setembro', 2019, '2019-10-04', 'sim', 'Erick'),
(123, 'Pizza ', 'Wemerson', '50.00', '---', 'nubank', 'setembro', 2019, '2019-09-20', 'sim', 'Erick'),
(124, 'Refrigerante', 'Mae', '4.00', '---', 'nubank', 'setembro', 2019, '2019-09-27', 'sim', 'Erick'),
(125, 'Luiz Mecanico', 'Wemerson', '138.00', '4/4', 'nubank', 'setembro', 2019, '2019-09-20', 'sim', 'Trabalho'),
(128, 'Display Moto x play', 'Trabalho', '124.00', '---', 'nubank', 'setembro', 2019, '0000-00-00', 'nao', 'Trabalho'),
(129, 'Laboratorio Mussel', 'Mae', '57.00', '3/4', 'nubank', 'setembro', 2019, '2019-09-27', 'sim', 'Erick'),
(130, 'Display Moto g6 PG', 'Trabalho', '128.00', '---', 'nubank', 'setembro', 2019, '0000-00-00', 'nao', 'Erick'),
(131, 'Itamarati ', 'Wemerson', '156.00', '3/4', 'pag', 'setembro', 2019, '2019-09-20', 'sim', 'Erick'),
(132, 'Itamarati', 'Wemerson', '156.00', '4/4', 'pag', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(133, 'Celular', 'Wemerson', '67.58', '8/12', 'pag', 'setembro', 2019, '2019-09-20', 'sim', 'Erick'),
(134, 'Celular', 'Wemerson', '68.00', '9/12', 'pag', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(135, 'Celular', 'Wemerson', '68.00', '10/12', 'pag', 'novembro', 2019, '2019-11-30', 'sim', 'Erick'),
(136, 'Celular', 'Wemerson', '68.00', '11/12', 'pag', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(139, 'Josué. 2,50 natalia', 'Lucas', '5.00', '---', 'pag', 'setembro', 2019, '2019-10-04', 'sim', 'Erick'),
(140, 'acai', 'Erick', '7.50', '---', 'pag', 'setembro', 2019, '0000-00-00', 'nao', 'Erick'),
(141, 'acai', 'Lucas', '9.50', '---', 'pag', 'setembro', 2019, '2019-10-04', 'sim', 'Erick'),
(142, 'Stylus', 'Mãe', '25.00', '1/2', 'pag', 'setembro', 2019, '2019-09-27', 'sim', 'Erick'),
(143, 'C&A', 'Mae', '20.00', '---', 'pag', 'setembro', 2019, '2019-09-27', 'sim', 'Erick'),
(144, 'DelFiori', 'Mãe', '38.00', '---', 'pag', 'setembro', 2019, '2019-09-27', 'sim', 'Erick'),
(145, 'Manta bb', 'Mãe', '24.00', '---', 'pag', 'setembro', 2019, '2019-09-27', 'sim', 'Erick'),
(146, 'Multa por atraso', 'Mae', '51.00', '---', 'nubank', 'setembro', 2019, '2019-09-27', 'sim', 'Erick'),
(147, 'Juros Atraso', 'Mae', '26.00', '---', 'pag', 'setembro', 2019, '2019-09-27', 'sim', 'Erick'),
(200, 'Google play ', 'Lucas', '1.00', '---', 'pag', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(199, 'Crédito ', 'Lucas', '10.00', '---', 'pag', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(198, 'Empréstimo pago', 'Lucas', '70.00', '---', 'nubank', 'novembro', 2019, '2019-11-27', 'sim', 'Erick'),
(195, 'batata + refri', 'Lucas', '9.50', '---', 'pag', 'novembro', 2019, '2019-11-27', 'sim', 'Erick'),
(196, 'Display ', 'Trabalho', '123.00', '---', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(197, 'Empréstimo cartao', 'Lucas', '145.00', '---', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(193, 'Remedio', 'Mãe', '16.00', '---', 'nubank', 'outubro', 2019, '2019-10-17', 'sim', 'Erick'),
(174, 'Placa de Video', 'Wemerson', '93.00', '6/10', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(158, 'Açai', 'Lucas', '8', '---', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Lucas'),
(159, 'Mercadinho', 'Mãe', '29.00', '---', 'nubank', 'outubro', 2019, '2019-10-17', 'sim', 'Erick'),
(160, 'Mercado Livre', 'Wemerson', '51.00', '1/3', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(161, 'Mercado livre', 'Wemerson', '51.00', '2/3', 'nubank', 'novembro', 2019, '2019-11-30', 'sim', 'Erick'),
(162, 'Mercado Livre', 'Wemerson', '51.00', '3/3', 'nubank', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(182, 'Stylus', 'Mãe', '25.00', '2/2', 'pag', 'outubro', 2019, '2019-10-17', 'sim', 'Erick'),
(183, 'Manta bb', 'Mãe', '25.00', '2/2', 'pag', 'outubro', 2019, '2019-10-17', 'sim', 'Erick'),
(184, 'Cabo Vinicim', 'Outros', '47.00', '---', 'pag', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(185, 'Credito', 'Erick', '13.00', '---', 'pag', 'outubro', 2019, '2019-10-08', 'sim', 'Erick'),
(186, 'Drogaria Mundial', 'Mãe', '10.00', '---', 'pag', 'outubro', 2019, '2019-10-17', 'sim', 'Erick'),
(187, 'Mes passado', 'Thaisa', '52.50', '---', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(192, 'Coisa do Samuel', 'Samuel', '5', '---', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Lucas'),
(205, 'Ab Cell', 'Mãe', '10.00', '---', 'nubank', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(190, 'acai ', 'Lucas', '10.50', '---', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(204, 'Forte grão', 'Mãe', '10.00', '---', 'nubank', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(191, 'Açai ', 'Erick', '10.50', '---', 'nubank', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(206, 'Germano Antonio de F', 'Mãe', '27.50', '1/2', 'nubank', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(207, 'Atacadão Iguaçuano', 'Mãe', '32.00', '---', 'nubank', 'novembro', 2019, '0000-00-00', 'nao', 'Outros'),
(208, 'Vestido', 'Mãe', '27.50', '2/2', 'nubank', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(209, 'Crédito ', 'Lucas', '10.00', '---', 'nubank', 'novembro', 2019, '2019-11-27', 'sim', 'Erick'),
(210, 'Batatas + açaí + ref', 'Samuel', '29', '---', 'digio', 'novembro', 2019, '2019-11-25', 'sim', 'Samuel'),
(211, 'Açaí do Gorila', 'Samuel', '20', '---', 'digio', 'novembro', 2019, '2019-11-25', 'sim', 'Samuel'),
(212, 'Super market', 'Samuel', '8', '---', 'digio', 'novembro', 2019, '2019-11-25', 'sim', 'Samuel'),
(213, 'Lanhoso', 'Samuel', '7.80', '---', 'digio', 'novembro', 2019, '2019-11-25', 'sim', 'Samuel'),
(214, 'Salgado ', 'Samuel', '5.50', '---', 'digio', 'novembro', 2019, '2019-11-25', 'sim', 'Samuel'),
(215, 'Salgado velho', 'Samuel', '2.50', '---', 'digio', 'novembro', 2019, '2019-11-25', 'sim', 'Lucas'),
(216, 'Restante ', 'Erick', '90.00', '---', 'pag', 'outubro', 2019, '0000-00-00', 'nao', 'Erick'),
(217, 'saque pago', 'Lucas', '100.00', '---', 'pag', 'novembro', 2019, '2019-11-27', 'sim', 'Erick'),
(218, 'Fones ', 'Erick', '122.00', '---', 'nubank', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(219, 'Recarga rio card', 'Erick', '180.00', '---', 'pag', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(220, 'Doação', 'Erick', '50.00', '---', 'nubank', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(223, 'Itunes', 'Wemerson', '74.90', '---', 'nubank', 'novembro', 2019, '2019-11-30', 'sim', 'Erick'),
(224, 'Itunes', 'Wemerson', '37.90', '---', 'nubank', 'novembro', 2019, '2019-11-30', 'sim', 'Erick'),
(225, 'Credito', 'Erick', '10.00', '---', 'nubank', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(226, 'Itunes', 'Wemerson', '37.90', '---', 'nubank', 'novembro', 2019, '2019-11-30', 'sim', 'Erick'),
(227, 'Panela de Preção', 'Mãe', '50.00', '1/3', 'nubank', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(228, 'Panela de Preção', 'Mãe', '50.00', '2/3', 'nubank', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(229, 'Berço ', 'Mãe', '162.67', '1/4', 'nubank', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(230, 'Berço', 'Mãe', '162.67', '2/4', 'nubank', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(231, 'Açaí', 'Lucas', '6', '---', 'credcard', 'novembro', 2019, '2019-11-27', 'sim', 'Lucas'),
(232, 'Hambúrguer', 'Samuel', '6.50', '---', 'digio', 'novembro', 2019, '2019-11-25', 'sim', 'Lucas'),
(233, 'Açaí', 'Samuel', '7.50', '---', 'digio', 'novembro', 2019, '2019-11-25', 'sim', 'Lucas'),
(234, 'Pizza ', 'Samuel', '16.50', '---', 'credcard', 'novembro', 2019, '2019-11-25', 'sim', 'Lucas'),
(235, 'Empréstimo de uma dí', 'Samuel', '58', '---', 'digio', 'novembro', 2019, '2019-11-25', 'sim', 'Lucas'),
(236, 'Carro', 'Samuel', '2.80', '---', 'digio', 'novembro', 2019, '2019-11-25', 'sim', 'Lucas'),
(237, 'Display ', 'Trabalho', '125.00', '---', 'pag', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(240, 'Placa de Video', 'Erick', '93.00', '---', 'nubank', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(238, 'Pizza', 'Lucas', '16.50', '---', 'pag', 'dezembro', 2019, '0000-00-00', 'nao', 'Lucas'),
(239, 'Pizza ', 'Samuel', '16.50', '---', 'pag', 'novembro', 2019, '2019-11-25', 'sim', 'Samuel'),
(241, 'Netflix', 'Lucas', '45.90', '---', 'pag', 'novembro', 2019, '2019-11-27', 'sim', 'Erick'),
(242, 'Pizza', 'Wemerson', '53.00', '---', 'pag', 'novembro', 2019, '2019-11-30', 'sim', 'Erick'),
(243, 'Drogaria Viva', 'Mãe', '12.00', '---', 'pag', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(244, 'Juros do sq falta 1', 'Lucas', '8.00', '---', 'pag', 'novembro', 2019, '2019-11-27', 'sim', 'Erick'),
(245, 'Credito vivo', 'Erick', '10.00', '---', 'pag', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(246, 'Pizza', 'Wemerson', '40.00', '---', 'pag', 'novembro', 2019, '2019-11-30', 'sim', 'Erick'),
(247, 'Gas', 'Wemerson', '29.00', '---', 'pag', 'novembro', 2019, '2019-11-30', 'sim', 'Erick'),
(248, 'google', 'Samuel', '6.50', '---', 'pag', 'novembro', 2019, '2019-11-25', 'sim', 'Erick'),
(249, 'Panela', 'Thaisa', '64.00', '2/3', 'pag', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(250, 'Panela', 'Thaisa', '64.00', '3/3', 'pag', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(251, 'Google ', 'Erick', '40.00', '---', 'pag', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(252, 'Amazon', 'Wemerson', '10.00', '---', 'pag', 'novembro', 2019, '2019-11-30', 'sim', 'Erick'),
(254, 'Xodo', 'Erick', '8.50', '---', 'pag', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(255, 'Xodo', 'Thaisa', '8.50', '---', 'pag', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(256, 'Crédito ', 'Erick', '7.00', '---', 'pag', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(257, 'Salgado', 'Erick', '17.00', '---', 'pag', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(258, 'Juros por atraso', 'Thaisa', '40.00', '---', 'nubank', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(259, 'Juros', 'Erick', '40.00', '---', 'nubank', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(260, 'multa', 'Erick', '6.22', '---', 'pag', 'novembro', 2019, '0000-00-00', 'nao', 'Erick'),
(261, 'Prejuízo ', 'Lucas', '62.50', '---', 'pag', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(265, 'Amazon', 'Wemerson', '10.00', '---', 'pag', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(263, 'Pizza', 'Wemerson', '25.00', '---', 'pag', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(264, 'Placa de video', 'Erick', '93.00', '8/10', 'nubank', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(266, 'Parme', 'Erick', '22.00', '---', 'pag', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(267, 'Mercado pago', 'Wemerson', '30.00', '---', 'pag', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(268, 'Crédito', 'Lucas', '10.00', '---', 'pag', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(269, 'Açai', 'Erick', '12.00', '---', 'pag', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(270, 'Juros', 'Thaisa', '24.17', '---', 'pag', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(271, 'Juros', 'Mãe', '50', '---', 'nubank', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(272, 'Juros', 'Erick', '12.00', '---', 'nubank', 'dezembro', 2019, '0000-00-00', 'nao', 'Erick'),
(273, 'Uber ', 'Lucas', '19.00', '---', 'pag', 'janeiro', 2020, '0000-00-00', 'nao', 'Erick'),
(274, 'Ingresso', 'Erick', '24.00', '---', 'pag', 'janeiro', 2020, '0000-00-00', 'nao', 'Erick'),
(275, 'Celular', 'Lucas', '104.00', '5/10', 'pag', 'janeiro', 2020, '0000-00-00', 'nao', 'Erick'),
(276, 'Celular', 'Lucas', '104.00', '6/10', 'pag', 'fevereiro', 2020, '0000-00-00', 'nao', 'Erick'),
(277, 'Celular', 'Lucas', '104.00', '7/10', 'pag', 'marco', 2020, '0000-00-00', 'nao', 'Erick'),
(278, 'Celular', 'Lucas', '104.00', '8/10', 'pag', 'abril', 2020, '0000-00-00', 'nao', 'Erick'),
(279, 'Celular', 'Lucas', '104.00', '9/10', 'pag', 'maio', 2020, '0000-00-00', 'nao', 'Erick'),
(280, 'Celular', 'Lucas', '104.00', '10/10', 'pag', 'junho', 2020, '0000-00-00', 'nao', 'Erick'),
(281, 'Celular', 'Wemerson', '68.00', '12/12', 'pag', 'janeiro', 2020, '0000-00-00', 'nao', 'Erick'),
(282, 'Salgado', 'Lucas', '12.00', '---', 'pag', 'janeiro', 2020, '0000-00-00', 'nao', 'Erick'),
(283, 'Salgado', 'Erick', '12', '---', 'pag', 'janeiro', 2020, '0000-00-00', 'nao', 'Erick'),
(284, 'Açai', 'Erick', '14.00', '---', 'pag', 'janeiro', 2020, '0000-00-00', 'nao', 'Erick'),
(285, 'McDino', 'Erick', '20.00', '---', 'digio', 'fevereiro', 2020, '0000-00-00', 'nao', 'Erick'),
(286, 'Placa de Video', 'Erick', '93.00', '---', 'nubank', 'fevereiro', 2020, '0000-00-00', 'nao', 'Erick');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jatem`
--

CREATE TABLE `jatem` (
  `id` int(11) NOT NULL,
  `valor` int(8) NOT NULL,
  `mes` varchar(11) NOT NULL,
  `cartao` varchar(10) NOT NULL,
  `ano` int(4) NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jatem`
--

INSERT INTO `jatem` (`id`, `valor`, `mes`, `cartao`, `ano`, `hora`) VALUES
(1, 221, 'agosto', 'nubank', 2019, '2019-08-14 15:56:07'),
(2, 377, 'agosto', 'pag', 2019, '2019-08-17 20:03:30'),
(3, 964, 'setembro', 'nubank', 2019, '2019-09-27 22:17:56'),
(4, 565, 'setembro', 'pag', 2019, '2019-09-27 22:11:30'),
(5, 680, 'outubro', 'nubank', 2019, '2019-10-29 00:26:53'),
(6, 440, 'outubro', 'pag', 2019, '2019-10-26 14:47:09'),
(7, 877, 'novembro', 'pag', 2019, '2019-12-01 00:40:35'),
(8, 732, 'novembro', 'nubank', 2019, '2019-12-01 00:39:36'),
(9, 61, 'dezembro', 'nubank', 2019, '2019-12-31 15:52:26'),
(10, 281, 'dezembro', 'pag', 2019, '2019-12-31 15:47:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `status`, `hora`, `usuario`, `senha`) VALUES
(1, 'Erick', '1', '2020-01-20 14:31:52', 'erickkf600', '82944452'),
(2, 'Lucas', '1', '2019-11-05 20:22:34', 'lucaskf200', '$argon2i$v=19$m=1024,t=2,p=2$b0h3Q0NiZjJGV1VFM0tVNQ$OfRaU3gLVo9Mo2hwVkycAdXfoicIR4rrCbwao01Vzu4'),
(3, 'Thaisa', '0', '2019-08-07 23:57:46', '', ''),
(4, 'Mãe', '0', '2019-08-07 23:57:46', '', ''),
(5, 'Edson', '0', '2019-08-07 23:57:46', '', ''),
(6, 'Wemerson', '0', '2019-08-07 23:57:46', '', ''),
(7, 'Trabalho', '0', '2019-08-07 23:57:46', '', ''),
(8, 'Samuel', '1', '2019-09-07 01:42:24', 'samuelkf01', '$argon2i$v=19$m=1024,t=2,p=2$ZGhRcjB4N0wyUFBwVGxjaw$3MkUrKXlWmTKABhrHyOwrhWKW0CcE7BkdVAfF9YyVLA'),
(9, 'Outros', '0', '2019-10-08 15:12:37', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jatem`
--
ALTER TABLE `jatem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `jatem`
--
ALTER TABLE `jatem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
