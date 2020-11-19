-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Nov-2020 às 02:23
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cruds`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `abertura`
--

CREATE TABLE `abertura` (
  `id` int(11) NOT NULL,
  `valor` float NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `abertura`
--

INSERT INTO `abertura` (`id`, `valor`, `data`) VALUES
(32, 1.99, '2020-10-29'),
(33, 50, '2020-10-29'),
(34, 10.68, '2020-10-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `curso` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `rg`, `cpf`, `tipo`, `curso`) VALUES
(81, 'joão', '99.999.999-9', '555.555.555-55', 'Professor', ''),
(87, 'Dolores', '99.999.999-9', '555.555.555-55', 'Colaborador', ''),
(88, 'Naruto', '24.244.242-4', '000.000.000-00', 'Aluno', 'Análise e Desenvolvimento de Sistemas- Noturno'),
(89, 'Sasuke', '55.555.555-5', '555.555.555-55', 'Aluno', 'Gestão Empresarial- Noturno'),
(90, 'Maeve', '24.244.242-4', '555.555.555-55', 'Professor', ''),
(91, 'Abelha', '99.999.999-9', '222.222.222-22', 'Colaborador', ''),
(92, 'Abelha Jataí', '99.999.999-9', '555.555.555-55', 'Colaborador', ''),
(93, 'Naruto Uzumaki', '55.555.555-5', '444.444.444-44', 'Aluno', 'Gestão Empresarial- Noturno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fechamento`
--

CREATE TABLE `fechamento` (
  `id` int(11) NOT NULL,
  `valor` float NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fechamento`
--

INSERT INTO `fechamento` (`id`, `valor`, `data`) VALUES
(2, 34, '2020-10-09'),
(6, 93, '2020-10-11'),
(8, 5, '2020-10-11'),
(9, 9.99, '2020-10-29'),
(10, 50, '2020-11-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_venda`
--

CREATE TABLE `itens_venda` (
  `id` int(11) NOT NULL,
  `id_venda` int(11) DEFAULT NULL,
  `id_servico` int(11) DEFAULT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens_venda`
--

INSERT INTO `itens_venda` (`id`, `id_venda`, `id_servico`, `quantidade`) VALUES
(179, NULL, 3, 18),
(182, NULL, 2, 2),
(184, NULL, 3, 2),
(185, NULL, 1, 2),
(186, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sangria`
--

CREATE TABLE `sangria` (
  `id` int(11) NOT NULL,
  `valor` float NOT NULL,
  `dh` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sangria`
--

INSERT INTO `sangria` (`id`, `valor`, `dh`) VALUES
(17, 11.11, '2020-10-29 22:22:20'),
(18, 200.55, '2020-10-29 22:25:32'),
(19, 30.99, '2020-10-29 22:25:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id`, `nome`, `preco`) VALUES
(1, 'Cópia p/b', 0.25),
(2, 'Cópia colorida', 0.5),
(3, 'Encadernação', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `cliente_id` int(11) NOT NULL,
  `id_servico` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id`, `data`, `cliente_id`, `id_servico`, `item_id`, `quantidade`) VALUES
(189, '2020-11-12', 89, 1, NULL, 7),
(190, '2020-11-15', 91, 2, 182, 2),
(191, '2020-11-15', 92, 3, NULL, 1),
(192, '2020-11-15', 90, 3, 184, 2),
(193, '2020-11-18', 92, 1, 185, 2),
(194, '2020-11-18', 92, 3, 186, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `abertura`
--
ALTER TABLE `abertura`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fechamento`
--
ALTER TABLE `fechamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venda` (`id_venda`),
  ADD KEY `id_servico` (`id_servico`);

--
-- Índices para tabela `sangria`
--
ALTER TABLE `sangria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `abertura`
--
ALTER TABLE `abertura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de tabela `fechamento`
--
ALTER TABLE `fechamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT de tabela `sangria`
--
ALTER TABLE `sangria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  ADD CONSTRAINT `itens_venda_ibfk_1` FOREIGN KEY (`id_venda`) REFERENCES `venda` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `itens_venda_ibfk_2` FOREIGN KEY (`id_servico`) REFERENCES `servico` (`id`);

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `venda_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `itens_venda` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
