-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Out-2019 às 02:45
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetotecinfo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(150) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(25) DEFAULT NULL,
  `sexo` char(2) NOT NULL,
  `datanascimento` date NOT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `celular` varchar(11) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `logradouro` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(150) DEFAULT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `uf` char(2) NOT NULL,
  `referencia` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `cpf`, `rg`, `sexo`, `datanascimento`, `telefone`, `celular`, `email`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `referencia`) VALUES
(5, 'Debora', 'Alves', '5555', '321321', 'm', '1970-01-01', '321', '3123', 'danilofas@gmail.com', '74835-44', 'dad', '3123', '', 'fsafdsa', 'Goiânia', 'Go', ''),
(6, 'aaaa', 'bbb', '3333', '321321', 'm', '0000-00-00', '321', '3123', 'danilofas@gmail.com', '74835-44', 'dad', '3123', '', 'fsafdsa', 'Goiânia', 'Go', ''),
(7, 'Danilo ', 'Silva', '32123123', '7777777', 'm', '2018-02-28', '62982571486', '', 'danilofas@gmail.com', '74835-44', 'R. Igapó, 859, Apt. 701, Ed. Modern Living, 859', '321312312', '', 'Vila nova', 'Goiânia', 'Go', 'Ali perto'),
(8, 'Lara', 'Hanson', '43423', '432423', 'f', '2019-02-05', '3132', '32131', 'lara@gmail.com', '74675690', 'Rua Porto Nacional', '33321312', '', 'Jardim Guanabara', 'Goiânia', 'GO', ''),
(9, 'Enrolando', 'Lero', '4363423', '53242', 'm', '2015-01-06', '312321', '412412', 'rolando@gmail.com', '74840520', 'Avenida Rio Negro', '321321', '', 'Parque Amazônia', 'Goiânia', 'GO', ''),
(11, 'Gabriel', 'molhado', '423465', '543', 'm', '2019-10-22', '345', '5423', 'gabriel@gmail.com', '74840520', 'Avenida Rio Negro', '432', '', 'Parque Amazônia', 'Goiânia', 'GO', ''),
(12, 'Aurelio', 'Do regoasescvgadx', '42342356', '312312', 'f', '2019-10-06', '4643143', '13431', 'aurelio@gmail.com', '74960250', 'Rua C 45', '321312', '1313', 'Jardim Boa Esperança - Continu', 'Aparecida de Goiânia', 'GO', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `date_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `idCliente`, `idUsuario`, `idProduto`, `date_create`) VALUES
(1, 12, 12, 9, '2019-10-16 20:14:11'),
(2, 12, 7, 7, '2019-10-16 20:14:40'),
(3, 12, 7, 4, '2019-10-16 20:15:05'),
(4, 6, 1, 7, '2019-10-17 19:12:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `preco` float NOT NULL,
  `estoque` float NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `urlfoto` varchar(200) NOT NULL,
  `unidade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `categoria`, `preco`, `estoque`, `descricao`, `urlfoto`, `unidade`) VALUES
(4, 'Carne', 'Boizim', 50, 600, 'Carne cara', '../assets/imgs/2019.09.27-21.11.06-image.jpg', 'KG'),
(7, 'Coca Cola', 'Bebidas', 7.5, 500, '', '../assets/imgs/2019.10.04-20.34.48-image.jpg', 'Garrafa'),
(9, 'Carne Picanha', 'Boizim', 50, 600, 'Carne cara', '../assets/imgs/2019.09.27-21.11.06-image.jpg', 'KG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `sexo` char(2) NOT NULL,
  `email` varchar(65) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `cargo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `sexo`, `email`, `usuario`, `matricula`, `password`, `cargo`) VALUES
(1, 'Danilo Alves Silva Ferreira', '3123151', 'm', 'danilofas@gmail.com', 'danilofas', '543534', '123456', 'VENDEDOR'),
(7, 'MD5', '412312', 'm', 'md5@gmail.com', 'md5', '464131', 'e10adc3949ba59abbe56e057f20f883e', 'a'),
(10, 'PASSWORD-HASH', '5656', 'm', 'password@hash.com', 'HASH', '345', '$2y$10$wHN/KeEhdK3D507ItrQSW.b.Z9NND6dg1U4c9DiwQLXuFMPiSfF3K', '3412321'),
(11, 'teste', '1346', 'm', 'password@hash.com.br', 'teste', '455', '$2y$10$NNzj4n8k8Pkds5blgVVN8.XIj3jGp74GsuXArWrbwRzLHlxbjzAYC', ''),
(12, 'Bruno', '41464731', 'm', 'bruno@gmail.com', 'bruno', '2036', '$2y$10$uMdUOkks0IH8yKJ7J0egNu7mqGx36qNE2qwlGQnZiMOhllM.hB7ui', 'gerente');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idProduto` (`idProduto`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matriculaUser` (`matricula`),
  ADD UNIQUE KEY `cpfUser` (`cpf`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `emailUser` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `idCliente` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `idProduto` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
