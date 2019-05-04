-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Maio-2019 às 02:27
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `athenas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `codigo` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`codigo`, `nome`) VALUES
(1, 'Admin'),
(2, 'Gerente'),
(3, 'Normal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id_pessoa` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `nome`, `email`, `categoria`) VALUES
(3, 'Jorge da Silva', 'jorge@terra.com.br', 1),
(4, 'Flavia Monteiro', 'flavia@globo.com', 2),
(5, 'Marcos Frota Ribeiro', 'ribeiro@gmail.com', 2),
(7, 'Raphael Souza Santos', 'rsantos@gmail.com', 1),
(8, 'Pedro Paulo Mota', 'ppmota@gmail.com', 1),
(9, 'Winder Carvalho da Silva', 'winder@hotmail.com', 3),
(10, 'Maria da Penha Albuquerque', 'mpa@hotmail.com', 3),
(11, 'Rafael Garcia Souza', 'rgsouza@hotmail.com', 3),
(12, 'Tabata Costa', 'tabata_costa@gmail.com', 2),
(13, 'Ronil Camarote', 'camarote@terra.com.br', 1),
(14, 'Joaquim Barbosa', 'barbosa@globo.com', 1),
(15, 'Eveline Maria Alcantra', 'ev_alcantra@gmail.com', 2),
(16, 'João Paulo Vieira', 'jpvieria@gmail.com', 1),
(17, 'Carla Zamborlini', 'zamborlini@terra.com.br', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `codigo` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
