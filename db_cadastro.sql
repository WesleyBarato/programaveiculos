-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jul-2020 às 23:18
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_veiculos`
--

CREATE TABLE `tb_veiculos` (
  `id` int(11) NOT NULL,
  `placa` varchar(40) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `km` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_veiculos`
--

INSERT INTO `tb_veiculos` (`id`, `placa`, `estado`, `cidade`, `km`, `email`) VALUES
(4, 'IRR0505', 'RS', 'Porto Alegre', '1', 'ricardo@email.com'),
(5, 'KKJ2512', 'RS', 'Torres', '22258', 'joao@joao.com'),
(6, 'ISD5858', 'RS', 'Três Coroas', '58123', 'hugo@email.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_veiculos`
--
ALTER TABLE `tb_veiculos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_veiculos`
--
ALTER TABLE `tb_veiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
