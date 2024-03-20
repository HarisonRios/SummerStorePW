-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Nov-2022 às 02:16
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `base_summer`
--
CREATE DATABASE IF NOT EXISTS `base_summer` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `base_summer`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `summer_adm`
--

DROP TABLE IF EXISTS `summer_adm`;
CREATE TABLE IF NOT EXISTS `summer_adm` (
  `Codigo` int(20) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Telefone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CPF` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `CEP` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `summer_adm`
--

INSERT INTO `summer_adm` (`Codigo`, `Nome`, `Email`, `Senha`, `Telefone`, `CPF`, `CEP`, `Foto`) VALUES
(1, '$nome', '$email', '$senha', '$telefone', '$cpf', '$cep', '$foto'),
(2, 'Miqueias', 'Miqueiasgay@gmail.com', '6e11873b9d9d94a44058bef5747735ce', '11234567890', '343.767.754-10', '5443355', 'imgs-games/d1c85c2c9f3c638d184702c467f61a81.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

DROP TABLE IF EXISTS `tb_clientes`;
CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`codigo`, `nome`, `email`, `data`, `telefone`, `cpf`, `senha`) VALUES
(1, 'Guilherme', 'teste@teste.com', '2022-11-10', '1123456789', '24332132', '123'),
(2, 'Harison', 'HarisonCavani@gmail.com', '2022-11-03', '11964024658', '343.767.754-10', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_games`
--

DROP TABLE IF EXISTS `tb_games`;
CREATE TABLE IF NOT EXISTS `tb_games` (
  `codigo_Game` int(20) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `Desenvolvedora` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `Preco` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `Ano_de_Fabricacao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Plataforma` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Genero` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo_Game`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_games`
--

INSERT INTO `tb_games` (`codigo_Game`, `Nome`, `Desenvolvedora`, `Preco`, `Ano_de_Fabricacao`, `Plataforma`, `Genero`, `foto`) VALUES
(4, '$name_game', '$developer', '$price', '$date', '$plataform', '$gen', '$endereco'),
(5, 'God of War', 'Sony', '300', '2022-11-09', 'Playstation', 'Ação', 'imgs-games/75070ccf75732a4d88fce4633e5b84f5.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
