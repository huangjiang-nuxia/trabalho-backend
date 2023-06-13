-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jun-2023 às 17:50
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pro2`
--
CREATE DATABASE IF NOT EXISTS `pro2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pro2`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ebook`
--

CREATE TABLE `ebook` (
  `idEbook` int(11) NOT NULL,
  `nameEbook` varchar(128) NOT NULL,
  `nameFile` varchar(128) NOT NULL,
  `coverEbook` varchar(128) NOT NULL,
  `rgDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `ebook`
--

INSERT INTO `ebook` (`idEbook`, `nameEbook`, `nameFile`, `coverEbook`, `rgDate`) VALUES
(3, 'Technological Slavery', 'pdf-6480a7029c44e.pdf', 'img-6480a7029c450.jpeg', '2023-06-07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `person`
--

CREATE TABLE `person` (
  `idPerson` int(11) NOT NULL,
  `namePerson` varchar(128) NOT NULL,
  `photoPerson` varchar(255) NOT NULL,
  `infoPerson` text NOT NULL,
  `suDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `person`
--

INSERT INTO `person` (`idPerson`, `namePerson`, `photoPerson`, `infoPerson`, `suDate`) VALUES
(1, 'Joe Gargery', 'img - 64807c5f8c455.png', 'Hey Pip, ol\' chap!', '2023-06-07'),
(2, 'Pip', 'img - 64807cae6232a.jpg', 'Moving to London.', '2023-06-07'),
(9, 'Jack Kevorkian', 'img-648090c4bc771.webp', 'human rights advocate', '2023-06-07'),
(10, 'David Berkowitz', 'img-648090d793bcc.jpg', 'Son of Sam.', '2023-06-07'),
(11, 'Ed Gein', 'img-64809101a42af.webp', 'heads on sticks', '2023-06-07'),
(13, 'Jeffrey Dahmer', 'img-64809241a0907.jpg', 'The sound of power tools woke the neighbors in the night (8)', '2023-06-07');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`idEbook`);

--
-- Índices para tabela `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`idPerson`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ebook`
--
ALTER TABLE `ebook`
  MODIFY `idEbook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `person`
--
ALTER TABLE `person`
  MODIFY `idPerson` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
