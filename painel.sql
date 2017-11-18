-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Nov-2017 às 17:22
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
(102, 'SEMANA NACIONAL', 'A Semana Nacional da Pessoa com DeficiÃªncia Intelectual e MÃºltipla 2017, comeÃ§a dia 21 e vai atÃ© o dia 28 de agosto e o Brasil se mobiliza pelos direitos e inclusÃ£o das pessoas com deficiÃªncia, participe junto Ã¡ Apae do seu municÃ­pio \r\n#CidadaniaeAmor', 'df.'),
(103, 'Caridade', 'Hoje Ã© um Ã³timo dia para pensarmos sobre o que estamos fazendo para transformarmos o mundo em lugar melhor pra todos. Ã‰ o Dia da Caridade! Aqui na Cidadania e Amor temos muitos motivos para comemorar, pois ela estÃ¡ presente em nosso dia a dia.', 'Caridade.'),
(104, 'SopÃ£o solidario', 'Ã‰ com muita alegria e orgulho que fazemos o projeto de distribuiÃ§Ã£o do sopÃ£o solidÃ¡rio a moradores em situaÃ§Ã£o de rua.Um projeto que visa amenizar a fome das famÃ­lias carentes e em situaÃ§Ã£o de vulnerabilidade social #cidadaniaeamor #sopÃ£osolidÃ¡rio ', 'SopÃ£o solidario.'),
(105, 'crianÃ§a feliz', 'Trabalho aqui sÃ³ se for para escolher o pincel para pintar a tarefinha. Aqui na #cidadaniaeamor nossas crianÃ§as podem desenvolver vÃ¡rias atividades como #auladeviolÃ£o, #judÃ´ #auladereforÃ§o e atividades ao ar livre. Tudo isso para que elas aproveitem', 'crianÃ§a feliz.');

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
(46, 'face.png', 'face', 'face'),
(47, '444.png', '444', '444'),
(48, 'Ff.png', 'Ff', 'fff');

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
(41, 'h.png', 'h');

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
(88, 'sopÃ£o da caridade', 'DistribuiÃ§Ã£o itinerante do #sopao aos moradores em situaÃ§Ã£o de rua. Um projeto que temos muito orgulho de ser pioneiros em nossa regiÃ£o. Esse Ã© apenas um dos projetos desenvolvidos pela #CidadaniaeAmor'),
(89, 'COLÃ”NIA DE FÃ‰RIAS', 'Nossa colÃ´nia de fÃ©rias tambÃ©m fez o maior sucesso com as crianÃ§as de nossa comunidade somos muito felizes por poder contribuir com o futuro de nossas crianÃ§as.ðŸ˜ #CidadaniaeAmor #ColoniaDeFerias #JuazeirodoNorte'),
(90, 'sindrome de down', 'Hoje Ã© o Dia Internacional da SÃ­ndrome de Down. Uma alteraÃ§Ã£o genÃ©tica permeada ainda hoje de, desconhecimento e preconceitos. A luta das pessoas com sÃ­ndrome de Down tambÃ©m Ã© nossa luta.ðŸ˜‰ '),
(91, 'atleta cidadÃ£o', 'O projeto #AtletaCidadÃ£o tem como objetivo promover o esporte na vida de nossas crianÃ§as. Aqueles que tem boas notas e boa frequÃªncia escolar, passam por peneira e os melhores ganham uma bolsa em uma academia renomada.  ');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `imagemc`
--
ALTER TABLE `imagemc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
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
