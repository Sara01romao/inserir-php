-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07-Jul-2020 às 02:15
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `rg` varchar(11) DEFAULT NULL,
  `cpf` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `rg`, `cpf`) VALUES
(1, 'sara', 'vdgsdgsg', 'gdgsdgsg'),
(2, 'lua', '54535453', '5547457745');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

DROP TABLE IF EXISTS `servico`;
CREATE TABLE IF NOT EXISTS `servico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE IF NOT EXISTS `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `idCliente` int(11) NOT NULL,
  `idServico` int(11) NOT NULL,
  `qtd` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`idCliente`,`idServico`),
  KEY `fk_Vendas_Clientes_idx` (`idCliente`),
  KEY `fk_Vendas_Servico1_idx` (`idServico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `fk_Vendas_Clientes` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `fk_Vendas_Servico1` FOREIGN KEY (`idServico`) REFERENCES `servico` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
