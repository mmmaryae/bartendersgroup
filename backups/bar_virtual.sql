-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/05/2026 às 22:37
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bar_virtual`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Gustavo', 'gustavo@gmail.com', '$2y$10$8zLd/Eegz79ufzLQLa2abOQ6OFMKTqxX3Bf8MupvGE5ExHTfFoAxa'),
(2, 'Maria', 'maria@gmail.com', '$2y$10$JXcJJ/3MNqpX/dsTitcVDOkb.IpEd6xeCCSz0.4PvwyKwJ/wKvPZO'),
(3, 'maria', 'mariaeduardasousa804@gmail.com', '$2y$10$xtvEQufqQ3zufiCfUya9cOCOSSLR5azDG6zsZPjIr4bIysogkTSl.'),
(4, 'maria', 'ana@gmail.com', '$2y$10$TphVs5Dd8C6jVVgCdGwDx.yYTqFYssGgw9gGPrt9zGp6N/RiYIsg.'),
(6, 'João', 'ana134@gmail.com', '$2y$10$bsYvvGmry1AZH6rk/D4O8Op1PneedMR0B5q5m.oIa.I7aQ18ZQ6cW'),
(7, 'carlos', 'ana55@gmail.com', '$2y$10$Xnfm7XXTqOlkeSAFmMYSOOE9Z29GaJOjQwjml0ONPVN4L..Ibxs6K'),
(8, 'carlos almeida', 'carlos99@gmail.com', '$2y$10$81SCxx9SKf/pKLqW3EPQHeF9I7e9rSRFtoeOOnffN0x9YwWfIsphm');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
