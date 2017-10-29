-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Out-2017 às 19:28
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `painel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acoes`
--

CREATE TABLE `acoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `acoes` text NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acoes`
--

INSERT INTO `acoes` (`id`, `nome`, `acoes`, `imagem`) VALUES
(96, 'teste aÃ§Ã£o 1', 'testando envio de aÃ§Ãµes ao numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas ', 'teste aÃ§Ã£o 1.'),
(97, 'teste ennvio aÃ§Ãµes 2', 'o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de', 'teste ennvio aÃ§Ãµes 2.'),
(98, 'teste envio aÃ§Ãµes 3 ', 'o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de', 'teste envio aÃ§Ãµes 3 .'),
(99, 'teste envio aÃ§Ãµes 4 ', 'o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de', 'teste envio aÃ§Ãµes 4 .'),
(100, 'teste envio aÃ§Ãµes 5', 'o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de', 'teste envio aÃ§Ãµes 5.'),
(101, 'teste envio aÃ§Ãµes 6', 'O nÃºmero mÃ¡ximo de envio de aÃ§Ãµes sÃ£o 6 aÃ§Ãµes O nÃºmero mÃ¡ximo de envio de aÃ§Ãµes sÃ£o 6 aÃ§Ãµes O nÃºmero mÃ¡ximo de envio de aÃ§Ãµes sÃ£o 6 aÃ§Ãµes O nÃºmero mÃ¡ximo de envio de aÃ§Ãµes sÃ£o 6 aÃ§Ãµes O nÃºmero mÃ¡ximo de envio de aÃ§Ãµes sÃ£o 6 aÃ§Ãµes ', 'teste envio aÃ§Ãµes 6.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `id` int(11) NOT NULL,
  `imagem` varchar(30) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagem`
--

INSERT INTO `imagem` (`id`, `imagem`, `titulo`, `texto`) VALUES
(67, 'Fundo tela Ubuntu.jpg', 'Fundo tela Ubuntu', 'Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incriv'),
(68, 'Fundo tela Ubuntu 2.jpg', 'Fundo tela Ubuntu 2', 'Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel Essa imagem Ã© incrivel ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagemc`
--

CREATE TABLE `imagemc` (
  `id` int(11) NOT NULL,
  `imagem` varchar(30) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagemc`
--

INSERT INTO `imagemc` (`id`, `imagem`, `titulo`) VALUES
(51, 'great sky.jpg', 'great sky'),
(52, 'GREAT SKY 2.jpg', 'GREAT SKY 2'),
(53, 'ice.jpg', 'ice');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `noticia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `nome`, `noticia`) VALUES
(86, 'teste noticia 1', 'Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de'),
(87, 'teste noticia 2', 'Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora '),
(88, 'Teste noticia 3', 'Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio d'),
(89, 'teste noticia 4 ', 'Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora '),
(90, 'teste noticia 5', 'Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio de noticias agora Testando envio d'),
(91, 'teste noticia 6', 'o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de noticias que podem ser postadas sÃ£o 6. o numero mÃ¡ximo de');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES
(1, 'Onelina', 'Juazeiro'),
(3, 'Balaius', 'Juazeiro'),
(4, '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acoes`
--
ALTER TABLE `acoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagemc`
--
ALTER TABLE `imagemc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
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
-- AUTO_INCREMENT for table `acoes`
--
ALTER TABLE `acoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `imagemc`
--
ALTER TABLE `imagemc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
