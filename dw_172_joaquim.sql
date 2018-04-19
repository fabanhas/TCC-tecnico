-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Abr-2018 às 17:40
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dw_172_joaquim`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudos`
--

CREATE TABLE `conteudos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(10000) NOT NULL,
  `paragrafo` varchar(10000) NOT NULL,
  `paragrafodois` varchar(1000) NOT NULL,
  `sessao` varchar(255) NOT NULL,
  `ultima modificacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conteudos`
--

INSERT INTO `conteudos` (`id`, `titulo`, `paragrafo`, `paragrafodois`, `sessao`, `ultima modificacao`) VALUES
(1, 'Sobre', 'Um redator web elabora textos a serem inseridos nos sites a partir de assuntos ou temas específicos. Cria matérias, notas, posts em blogs e envolvimento com propostas criativas.', 'É dele a função de conectar consumidores e marcas. Não é produzir publicação gratuita, mas transformar fontes de informações em conteúdos valiosos', 'sobre', '2017-10-14 21:38:20'),
(2, 'Tatiane Duarte', 'Redatora Web', '', 'cabecalho', '2017-10-14 23:13:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `email`, `senha`, `last_modify`) VALUES
(3, 'adm', 'adm@adm.com', '123456', '2018-04-19 15:33:51'),
(11, 'Professor Prado', 'rprado@ifsp.edu.br', '4dfc22705d2911e3cc2c739246aae673', '2017-11-25 18:41:59'),
(12, 'Anderson', 'and@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2017-11-25 19:27:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `portfoliomodal`
--

CREATE TABLE `portfoliomodal` (
  `id` int(11) NOT NULL,
  `titulo` varchar(2555) NOT NULL,
  `sobre` mediumtext NOT NULL,
  `subum` varchar(255) NOT NULL,
  `textoum` varchar(1000) NOT NULL,
  `subdois` varchar(255) NOT NULL,
  `textodois` varchar(1000) NOT NULL,
  `subtres` varchar(255) NOT NULL,
  `textotres` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `portfoliomodal`
--

INSERT INTO `portfoliomodal` (`id`, `titulo`, `sobre`, `subum`, `textoum`, `subdois`, `textodois`, `subtres`, `textotres`) VALUES
(1, 'Livro: Mídia, experiência e interação: leituras criticas sobre a comunicação', 'O livro reúne grande diversidade de objetos e abordagens na leitura crítica da comunicação, de seus processos e seus produtos.                     Da interatividade na televisão digital ao uso educativo de vídeos na web, passando pelo cinema, pelo telejornalismo, pelo marketing                    e pelo universo dos talent shows, os textos lançam olhares sobre diferentes níveis do processo comunicativo, contribuindo, no todo,                   para a construção de uma nova linha de análise, múltipla e difusa como o mundo observado pelos autores.', 'Autor:', 'Tatiane Duarte Euzébio; Bianca Dal Bianco Sorbello; Bruno Chiarioni...', 'Ano:', '2017', 'Editora:', 'Pimenta Cultural');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conteudos`
--
ALTER TABLE `conteudos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfoliomodal`
--
ALTER TABLE `portfoliomodal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conteudos`
--
ALTER TABLE `conteudos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `portfoliomodal`
--
ALTER TABLE `portfoliomodal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
