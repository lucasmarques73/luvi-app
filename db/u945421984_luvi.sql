
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2019 at 11:31 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `id9684218_luvi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblavaliacao`
--

CREATE TABLE IF NOT EXISTS `tblavaliacao` (
  `idAvaliacao` int(11) NOT NULL AUTO_INCREMENT,
  `notaAvaliacao` double NOT NULL,
  `descAvaliacao` varchar(400) DEFAULT NULL,
  `tblpessoa_idPessoa` int(11) NOT NULL,
  `tblprofissao_idProfissao` int(11) NOT NULL,
  `dtAvaliacao` date NOT NULL,
  PRIMARY KEY (`idAvaliacao`),
  KEY `fk_tblavaliacao_tblpessoa1_idx` (`tblpessoa_idPessoa`),
  KEY `fk_tblavaliacao_tblprofissao1_idx` (`tblprofissao_idProfissao`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tblavaliacao`
--

INSERT INTO `tblavaliacao` (`idAvaliacao`, `notaAvaliacao`, `descAvaliacao`, `tblpessoa_idPessoa`, `tblprofissao_idProfissao`, `dtAvaliacao`) VALUES
(1, 5, 'Formatou meu PC', 12, 1, '2016-10-21'),
(2, 4, 'Formatou meu Notebook', 12, 1, '2016-10-21'),
(3, 4, 'Consertou minha impressora', 12, 1, '2016-10-21'),
(4, 4, 'Arrumou meu PC', 17, 1, '2016-11-03'),
(5, 5, 'Ótimo profissional ', 20, 5, '2016-11-03'),
(19, 5, 'TESTANDO AVALIAÇÃO ', 29, 5, '2016-11-11'),
(18, 4, 'Esse cara domina nas pedras', 20, 4, '2016-11-10'),
(10, 5, 'Esse rafa é o cara, ele faz de tudo', 20, 2, '2016-11-04'),
(17, 4, 'TESTANDO AVALIAÇÃO ', 27, 6, '2016-11-05'),
(12, 4, 'OK', 18, 6, '2016-11-04'),
(16, 5, 'Ele capinou meu terreno mas não  ficou muito bom', 20, 6, '2016-11-05'),
(15, 5, 'Ótimo pedreiro ', 18, 4, '2016-11-04'),
(20, 5, 'Ele é o melhor, ele destruiu o bowser aqui em casa', 20, 13, '2016-11-12'),
(21, 4, 'Concurso', 18, 5, '2016-11-19'),
(22, 5, 'Ótimo profissional', 20, 11, '2016-12-01'),
(23, 2, 'OkOk. ', 40, 0, '2017-01-07'),
(24, 5, 'otimo', 43, 9, '2017-06-10'),
(25, 5, '', 44, 9, '2017-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `tblcatprofissao`
--

CREATE TABLE IF NOT EXISTS `tblcatprofissao` (
  `idtblCatProfissao` int(11) NOT NULL AUTO_INCREMENT,
  `CatProfissao` varchar(45) NOT NULL,
  `icone` varchar(45) NOT NULL,
  PRIMARY KEY (`idtblCatProfissao`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tblcatprofissao`
--

INSERT INTO `tblcatprofissao` (`idtblCatProfissao`, `CatProfissao`, `icone`) VALUES
(1, 'Técnico em Informática', 'important_devices'),
(2, 'Pedreiro', 'location_city'),
(3, 'Marceneiro', 'business_center'),
(4, 'Jardineiro', 'local_florist'),
(5, 'Eletricista', 'highlight'),
(6, 'Encanador', 'crop'),
(7, 'Vidraceiro', 'map'),
(8, 'Diarista', 'local_laundry_service'),
(9, 'Mecânico', 'build');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontato`
--

CREATE TABLE IF NOT EXISTS `tblcontato` (
  `idContato` int(11) NOT NULL AUTO_INCREMENT,
  `Contato` varchar(45) DEFAULT NULL,
  `tblpessoa_idPessoa` int(11) NOT NULL,
  `tbltipocontato_idTipoContato` int(11) NOT NULL,
  PRIMARY KEY (`idContato`),
  KEY `fk_tblcontato_tblpessoa1_idx` (`tblpessoa_idPessoa`),
  KEY `fk_tblcontato_tbltipocontato1_idx` (`tbltipocontato_idTipoContato`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `tblcontato`
--

INSERT INTO `tblcontato` (`idContato`, `Contato`, `tblpessoa_idPessoa`, `tbltipocontato_idTipoContato`) VALUES
(42, 'talytta110@hotmail.com', 23, 4),
(17, 'mateus@mateus.com', 13, 4),
(18, 'joao@joao.com', 14, 4),
(19, 'teste@teste.com', 15, 4),
(20, 'as@sa', 16, 4),
(21, 'rafa@gmail.com', 17, 4),
(22, 'lucasmarques73@hotmail.com', 18, 4),
(23, 'np_vitor@hotmail.com', 19, 4),
(24, 'np_vitor@hotmail.com', 20, 4),
(25, '35 77777888', 11, 2),
(26, 'facebook.com/rafael', 17, 3),
(31, '123', 17, 2),
(43, 'vitorsantosreis@yahoo.com.br', 24, 4),
(44, 'naosei@naosei', 25, 4),
(37, 'brunoborges26@hotmail.com', 21, 4),
(38, '87032686', 21, 2),
(45, '(35)9 9228 9002', 20, 2),
(40, 'tamyres_araujoleite@hotmail.com', 22, 4),
(41, '321', 17, 1),
(46, 'seinao@jao', 26, 4),
(47, 'chenrique345@yahoo.com.br', 27, 4),
(48, 'Taloucathayane@gmail.com', 28, 4),
(49, '/Facebook.com', 20, 3),
(50, 'vanessaduarte_79@hotmail.com', 29, 4),
(51, '(35) 35 9 9717-9625', 29, 2),
(52, '1111@1111.com', 30, 4),
(53, 'supermario@nintendo.com', 31, 4),
(54, 'Facebook\\supermario', 31, 3),
(55, 'fulano@hotmail.com', 32, 4),
(56, 'fulano@gmail.com', 33, 4),
(57, 'testando@gmail.com', 34, 4),
(58, 'ludpd@hotmail.com', 35, 4),
(59, 'n', 36, 4),
(60, 'atilab@gmail.com', 37, 4),
(61, 'suporte@hotmail.com', 38, 4),
(62, 'cadastro@hotmail.com', 39, 4),
(63, 'fernandorroberto@gmail.com', 40, 4),
(64, 'thiagojoseandrade96@hotmail.com', 41, 4),
(65, 'altamira.uemg@gmail.com', 42, 4),
(66, 'altamir@gmail.com', 43, 4),
(67, 'altamirasq@gmail.com', 44, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblendereco`
--

CREATE TABLE IF NOT EXISTS `tblendereco` (
  `idEndereco` int(11) NOT NULL AUTO_INCREMENT,
  `ruaEnd` varchar(100) NOT NULL,
  `numEnd` varchar(45) NOT NULL,
  `complementoEnd` varchar(45) DEFAULT NULL,
  `bairroEnd` varchar(45) DEFAULT NULL,
  `cidadeEnd` varchar(45) NOT NULL,
  `estadoEnd` varchar(2) NOT NULL,
  `tblpessoa_idPessoa` int(11) NOT NULL,
  `cepEnd` varchar(45) NOT NULL,
  PRIMARY KEY (`idEndereco`),
  KEY `fk_tblendereco_tblpessoa1_idx` (`tblpessoa_idPessoa`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblendereco`
--

INSERT INTO `tblendereco` (`idEndereco`, `ruaEnd`, `numEnd`, `complementoEnd`, `bairroEnd`, `cidadeEnd`, `estadoEnd`, `tblpessoa_idPessoa`, `cepEnd`) VALUES
(2, 'Rua Hugo Gomes', '21', '', 'Vila Betinho', 'Passos', 'MG', 18, '37903-506'),
(3, 'Estudantes', '279', '23', 'Penha', 'Passos', 'MG', 17, '37903000'),
(5, 'Espirito Santo', '345', 'Casa', 'Bela Vista', 'Passos', 'MG', 20, '37900244');

-- --------------------------------------------------------

--
-- Table structure for table `tblfavoritos`
--

CREATE TABLE IF NOT EXISTS `tblfavoritos` (
  `idFavoritos` int(11) NOT NULL AUTO_INCREMENT,
  `descFavoritos` varchar(45) DEFAULT NULL,
  `tblpessoa_idPessoa` int(11) NOT NULL,
  `tblprofissao_idProfissao` int(11) NOT NULL,
  PRIMARY KEY (`idFavoritos`),
  KEY `fk_tblfavoritos_tblpessoa1_idx` (`tblpessoa_idPessoa`),
  KEY `fk_tblfavoritos_tblprofissao1_idx` (`tblprofissao_idProfissao`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tblfavoritos`
--

INSERT INTO `tblfavoritos` (`idFavoritos`, `descFavoritos`, `tblpessoa_idPessoa`, `tblprofissao_idProfissao`) VALUES
(2, 'Formatou meu Computador', 17, 1),
(3, 'Formatou meu Computador', 17, 6),
(5, 'Formatou meu Computador', 18, 2),
(6, 'Formatou meu Computador', 20, 5),
(7, 'Formatou meu Computador', 20, 0),
(8, 'Formatou meu Computador', 20, 1),
(9, 'Formatou meu Computador', 37, 11),
(10, 'Formatou meu Computador', 18, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblpessoa`
--

CREATE TABLE IF NOT EXISTS `tblpessoa` (
  `idPessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nomePessoa` varchar(100) NOT NULL,
  `rgPessoa` varchar(20) NOT NULL,
  `cpfPessoa` varchar(20) NOT NULL,
  `sexoPessoa` char(1) NOT NULL,
  `dtNascPessoa` date NOT NULL,
  `fotoPessoa` varchar(100) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`idPessoa`),
  UNIQUE KEY `rgPessoa_UNIQUE` (`rgPessoa`),
  UNIQUE KEY `cpfPessoa_UNIQUE` (`cpfPessoa`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `tblpessoa`
--

INSERT INTO `tblpessoa` (`idPessoa`, `nomePessoa`, `rgPessoa`, `cpfPessoa`, `sexoPessoa`, `dtNascPessoa`, `fotoPessoa`, `email`, `senha`) VALUES
(18, 'Lucas Marques', '32112331', '123321123', 'M', '1993-07-25', NULL, 'lucas', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'Sergio Marques', '123123', '3132', 'M', '1965-01-31', NULL, 'psm100@gmail', 'e5ea224a84ed675b896b96c39ffc1b44'),
(13, 'Mateus', '1231231', '312321', 'M', '2002-10-07', NULL, 'mateus@mateus.com', 'e10adc3949ba59abbe56e057f20f883e'),
(14, 'João', '123', '123', 'M', '1980-12-12', NULL, 'joao@joao.com', '202cb962ac59075b964b07152d234b70'),
(29, 'Vanessa', '7532986', '04158839629', 'F', '1979-10-23', NULL, 'vanessaduarte_79@hotmail.com', 'bfb08bdce4c291419927068b95b465f5'),
(17, 'Rafa', '1dasd', 'dsddsd', 'M', '1993-10-05', NULL, 'rafa', '202cb962ac59075b964b07152d234b70'),
(20, 'Antonio Vitor Santos Reis', 'mg17256666', '123456789', 'M', '1993-06-20', NULL, 'np_vitor@hotmail.com', '046c8247f3b4e1e8f97a05cca7a52aea'),
(21, 'Bruno Borges Silva', 'MG 176556456', '131313213132', 'M', '1998-03-26', NULL, 'brunoborges26@hotmail.com', 'a906449d5769fa7361d7ecc6aa3f6d28'),
(22, 'Tamyres', '14422563', '2563585215', 'F', '1994-06-17', NULL, 'tamyres_araujoleite@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(23, 'Talytta Carvalho', '321', '1234', 'F', '1991-10-01', NULL, 'talytta110@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(24, 'Vitinho', '312132', '132132123', 'M', '1993-06-20', NULL, 'vitorsantosreis@yahoo.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(25, 'carlos', '1321313213', '12313212', 'M', '2001-08-01', NULL, 'naosei@naosei', 'c8837b23ff8aaa8a2dde915473ce0991'),
(26, 'Rita Silva', 'Haskizão', '123654857', 'F', '1965-08-15', NULL, 'seinao@jao', 'e10adc3949ba59abbe56e057f20f883e'),
(27, 'CARLOS', '52894', '12584628', 'M', '2001-08-01', NULL, 'chenrique345@yahoo.com.br', '094add32e6757660270cd6fd88ebb29e'),
(28, 'Thayane Laura Nascimento', '8865362', '886316', 'F', '1995-08-15', NULL, 'Taloucathayane@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(31, 'Super Mario Bros', 'Rgrgrg', '666666666', 'M', '1993-06-20', NULL, 'supermario@nintendo.com', 'e10adc3949ba59abbe56e057f20f883e'),
(32, 'Carlos Henrique', 'MG', '555.666.666-16', 'M', '1998-06-20', NULL, 'fulano@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(33, 'Carlos Henrique', 'RG', '888.888.888-88', 'M', '1993-06-20', NULL, 'fulano@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(34, 'Antonio Vitor', 'RGgg12', '117.353.166-44', 'M', '1993-06-20', NULL, 'testando@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(35, 'Luciano DPD', 'MG17', '114.141.144-41', 'M', '1996-06-20', NULL, 'ludpd@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(36, 'd', 'a', '1', 'm', '0000-00-01', NULL, 'n', '03c7c0ace395d80182db07ae2c30f034'),
(37, 'Atila Barbosa', 'MG17086', '116.686.499-40', 'M', '1989-05-10', NULL, 'atilab@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(38, 'Fulano de Filul', 'Mg17086uu', '117.959.885-55', 'M', '1993-06-20', NULL, 'suporte@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(39, 'Fulano teste', 'Mg1536258', '666.666.666-66', 'M', '1993-06-20', NULL, 'cadastro@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(40, 'Fernando', '54321', '123.456.789-00', 'M', '1988-03-04', NULL, 'fernandorroberto@gmail.com', '202cb962ac59075b964b07152d234b70'),
(41, 'Thiago', '454880066', '427.774.338-28', 'M', '1996-02-24', NULL, 'thiagojoseandrade96@hotmail.com', '506ba18c067d2fa82ff0255df7e39d8f'),
(42, 'Altamira', '1603746', '113.225.956-82', 'f', '1992-03-13', NULL, 'altamira.uemg@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(43, 'as', '53162482515', '122.225.231-51', 'm', '1992-03-13', NULL, 'altamir@gmail.com', '202cb962ac59075b964b07152d234b70'),
(44, 'joaocarlos', '160374313', '113.225.956-89', 'M', '1992-03-13', NULL, 'altamirasq@gmail.com', 'aeee77f8875b7e5869c1ca4a0d22db03');

-- --------------------------------------------------------

--
-- Table structure for table `tblproffotos`
--

CREATE TABLE IF NOT EXISTS `tblproffotos` (
  `idtblProfFotos` int(11) NOT NULL AUTO_INCREMENT,
  `fotoProfissão` varchar(100) DEFAULT NULL,
  `tblprofissao_idProfissao` int(11) NOT NULL,
  PRIMARY KEY (`idtblProfFotos`),
  KEY `fk_tblProfFotos_tblprofissao1_idx` (`tblprofissao_idProfissao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblprofissao`
--

CREATE TABLE IF NOT EXISTS `tblprofissao` (
  `idProfissao` int(11) NOT NULL AUTO_INCREMENT,
  `descProfissao` varchar(45) NOT NULL,
  `notaProfissao` double DEFAULT NULL,
  `tblpessoa_idPessoa` int(11) NOT NULL,
  `tblCatProfissao_idtblCatProfissao` int(11) NOT NULL,
  PRIMARY KEY (`idProfissao`),
  KEY `fk_tblprofissao_tblpessoa1_idx` (`tblpessoa_idPessoa`),
  KEY `fk_tblprofissao_tblCatProfissao1_idx` (`tblCatProfissao_idtblCatProfissao`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tblprofissao`
--

INSERT INTO `tblprofissao` (`idProfissao`, `descProfissao`, `notaProfissao`, `tblpessoa_idPessoa`, `tblCatProfissao_idtblCatProfissao`) VALUES
(1, 'Manuntenção de Computadores', 3.6, 18, 1),
(2, 'Redes Domésticas em Geral', 5, 17, 5),
(4, 'Manutenção em casas e apartamentos', 4.5, 17, 2),
(5, 'Formato PC, smartphone, e até TV ', 4.666666666666667, 20, 1),
(6, 'Eu manjo das jardinagem ', 4.333333333333333, 20, 4),
(9, 'Serviço completo', 5, 20, 3),
(8, 'Capino uns capim ', 0, 28, 4),
(10, 'Consultoria tecnológica ', 0, 29, 1),
(11, '', 5, 20, 8),
(12, 'Especialização em edificações', 0, 20, 2),
(13, 'Encanador especializado em resgatar princesas', 5, 31, 6),
(14, 'Teste ', 0, 40, 9),
(15, 'faço formatações', 0, 44, 1),
(16, 'teste', 0, 17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbltipocontato`
--

CREATE TABLE IF NOT EXISTS `tbltipocontato` (
  `idTipoContato` int(11) NOT NULL AUTO_INCREMENT,
  `TipoContato` varchar(45) DEFAULT NULL,
  `icone` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoContato`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbltipocontato`
--

INSERT INTO `tbltipocontato` (`idTipoContato`, `TipoContato`, `icone`) VALUES
(1, 'Telefone Fixo', 'phone'),
(2, 'Celular', 'smartphone'),
(3, 'Redes Sociais', 'person'),
(4, 'Email', 'mail');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


DELIMITER $$
--
-- Procedures
--
CREATE  PROCEDURE `atualizaSenha`(IN id INT, IN email VARCHAR(45), IN senha VARCHAR(45))
BEGIN

UPDATE tblpessoa p SET p.email = email, p.senha = MD5(senha) WHERE p.idPessoa = id;


/*Trazer dados do usuário */
SELECT p.idPessoa AS ID ,p.nomePessoa AS Nome, p.rgPessoa AS RG, p.cpfPessoa AS CPF, p.sexoPessoa AS Sexo, DATE_FORMAT(p.dtNascPessoa,'%d/%m/%Y') AS DataDeNascimento, p.email AS Email, p.senha AS Senha FROM tblpessoa p WHERE p.idPessoa = id;

END$$

CREATE  PROCEDURE `atualizaUsuario`(IN id INT, IN nome VARCHAR(100),IN rg VARCHAR(20), IN cpf VARCHAR(20), IN sexo CHAR(1), IN dataNasc VARCHAR(45), IN foto VARCHAR(100), IN email VARCHAR(45), IN senha VARCHAR(45))
BEGIN

UPDATE tblpessoa p SET p.nomePessoa = nome, p.rgPessoa = rg, p.cpfPessoa = cpf, p.sexoPessoa = sexo,p.dtNascPessoa = STR_TO_DATE(dataNasc,'%d/%m/%Y') WHERE p.idPessoa = id;


/*Trazer dados do usuário */
SELECT p.idPessoa AS ID ,p.nomePessoa AS Nome, p.rgPessoa AS RG, p.cpfPessoa AS CPF, p.sexoPessoa AS Sexo, DATE_FORMAT(p.dtNascPessoa,'%d/%m/%Y') AS DataDeNascimento, p.email AS Email, p.senha AS Senha FROM tblpessoa p WHERE p.idPessoa = id;

END$$

CREATE  PROCEDURE `insereAval`(IN notaAval DOUBLE, IN descAval VARCHAR(100),IN dtAval DATE, IN idPessoa INT, IN idProfiss INT)
BEGIN

DECLARE media DOUBLE;

INSERT INTO tblavaliacao (notaAvaliacao, descAvaliacao, dtAvaliacao, tblpessoa_idPessoa, tblprofissao_idProfissao) VALUES (notaAval,descAval,CURRENT_DATE(),idPessoa,idProfiss);

SELECT AVG(notaAvaliacao) INTO media FROM tblavaliacao WHERE tblprofissao_idProfissao = idProfiss;

UPDATE tblprofissao SET notaProfissao= media WHERE idProfissao = idProfiss;

END$$

CREATE  PROCEDURE `insereNovoUsuario`(IN nome VARCHAR(100),IN rg VARCHAR(20), IN cpf VARCHAR(20), IN sexo CHAR(1), IN dataNasc VARCHAR(45), IN foto VARCHAR(100), IN email VARCHAR(45), IN senha VARCHAR(45))
BEGIN

/*Váriavel para armazenar o ID*/
DECLARE id INT;

/*Cadastrar Usuário novo*/
INSERT INTO tblpessoa (nomePessoa,rgPessoa,cpfPessoa,sexoPessoa,dtNascPessoa,fotoPessoa,email,senha)VALUES (nome,rg,cpf,sexo,STR_TO_DATE(dataNasc,'%d/%m/%Y'),NULL,email,MD5(senha));

/*Trazer ultimo ID cadastrado*/
SELECT MAX(idPessoa) INTO id FROM tblpessoa;

/*Já adicionando o email como contato*/
INSERT INTO tblcontato (Contato, tbltipocontato_idTipoContato,tblpessoa_idPessoa) VALUES(email,4,id);

/*Trazer dados do usuário */
SELECT p.idPessoa AS ID ,p.nomePessoa AS Nome, p.rgPessoa AS RG, p.cpfPessoa AS CPF, p.sexoPessoa AS Sexo, DATE_FORMAT(p.dtNascPessoa,'%d/%m/%Y') AS DataDeNascimento, p.email AS Email, p.senha AS Senha FROM tblpessoa p ORDER BY idPessoa DESC LIMIT 1;

END$$

DELIMITER ;