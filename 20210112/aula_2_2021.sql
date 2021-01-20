-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 10-Jan-2021 às 23:21
-- Versão do servidor: 5.6.34
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aula_2_2021`
--
CREATE DATABASE IF NOT EXISTS `aula_2_2021` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aula_2_2021`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `nivel_permissao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id`, `nome`, `nivel_permissao`) VALUES
(1, 'Administrador', 3),
(2, 'Professor', 2),
(3, 'Aluno', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissao`
--

CREATE TABLE `permissao` (
  `nivel` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `permissao`
--

INSERT INTO `permissao` (`nivel`, `descricao`) VALUES
(1, 'Permissão básica'),
(2, 'Permissão média'),
(3, 'Permissão alta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cpf` varchar(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `id_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cpf`, `email`, `senha`, `id_perfil`) VALUES
('32397985810', 'deniszaniro@ifsp.edu.br', '827ccb0eea8a706c4c34a16891f84e7b', 2),
('51339432889', 'pauloholanda@aluno.ifsp.edu.br', '4e411f3d0d972c6761f9648ef5ed2a98', 3),
('78635220803', 'maria@ifsp.edu.br', 'ab56b4d92b40713acc5af89985d4b786', 1),
('83384464168', 'matheus@aluno.ifsp.edu.br', '168d1b7a9535fe6803ef1cad01272145', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nivel_permissao_fk` (`nivel_permissao`);

--
-- Indexes for table `permissao`
--
ALTER TABLE `permissao`
  ADD PRIMARY KEY (`nivel`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `id_perfil_fk` (`id_perfil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `nivel_permissao_fk` FOREIGN KEY (`nivel_permissao`) REFERENCES `permissao` (`nivel`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `id_perfil_fk` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
