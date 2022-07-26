-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Jul 26, 2022 as 10:55 PM
-- Versão do Servidor: 5.1.36
-- Versão do PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `rudolph`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `idbanner` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `imagem` varchar(120) DEFAULT NULL,
  `imagem_responsiva1` varchar(140) DEFAULT NULL,
  `imagem_responsiva2` varchar(140) DEFAULT NULL,
  `botao` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `externo` char(1) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`idbanner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`idbanner`, `titulo`, `imagem`, `imagem_responsiva1`, `imagem_responsiva2`, `botao`, `link`, `externo`, `ativo`) VALUES
(1, 'Banner 01', 'imagem_1_1658846464.jpg', NULL, NULL, 'Descubra mais', 'produtos', '0', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner_interna`
--

CREATE TABLE IF NOT EXISTS `banner_interna` (
  `idbanner_interna` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `imagem` varchar(140) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `externo` char(1) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`idbanner_interna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `banner_interna`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `banner_produto`
--

CREATE TABLE IF NOT EXISTS `banner_produto` (
  `idbanner_produto` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `imagem` varchar(140) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `externo` char(1) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`idbanner_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `banner_produto`
--

INSERT INTO `banner_produto` (`idbanner_produto`, `titulo`, `imagem`, `link`, `externo`, `ativo`) VALUES
(1, 'Torresmo & Pururuca', 'banner_produtos_1658866267526.jpg', NULL, '0', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `idcontato` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(100) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `assunto` varchar(100) DEFAULT NULL,
  `telefone` varchar(100) DEFAULT NULL,
  `mensagem` blob,
  `aceite` char(1) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`idcontato`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`idcontato`, `ip`, `data`, `nome`, `email`, `assunto`, `telefone`, `mensagem`, `aceite`, `ativo`) VALUES
(1, '127.0.0.1', '2022-07-26 18:23:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '127.0.0.1', '2022-07-26 18:23:50', 'sdfa', 'fads', 'asfd', 'afsd', 0x6173646673646661736664, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaque`
--

CREATE TABLE IF NOT EXISTS `destaque` (
  `iddestaque` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `imagem` varchar(140) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`iddestaque`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `destaque`
--

INSERT INTO `destaque` (`iddestaque`, `titulo`, `imagem`, `link`, `ativo`) VALUES
(1, 'Parceria é tudo', 'banner_parceria_1658848989774.png', NULL, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaque_produto`
--

CREATE TABLE IF NOT EXISTS `destaque_produto` (
  `iddestaque_produto` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `imagem` varchar(140) DEFAULT NULL,
  `botao` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `externo` char(1) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`iddestaque_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `destaque_produto`
--

INSERT INTO `destaque_produto` (`iddestaque_produto`, `titulo`, `imagem`, `botao`, `link`, `externo`, `ativo`) VALUES
(4, 'Não tem nada igual', 'banner_nada_igual_1658847919024.png', 'Conheça o produto', 'produtos', '0', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `habilitar` char(1) NOT NULL DEFAULT '0',
  `excluido` char(1) NOT NULL DEFAULT '0',
  `versions_data` text NOT NULL,
  `name` tinyint(1) NOT NULL DEFAULT '1',
  `description` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `gallery`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `gallery_photo`
--

CREATE TABLE IF NOT EXISTS `gallery_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  `name` varchar(512) DEFAULT '',
  `description` text,
  `file_name` varchar(128) DEFAULT '',
  `activated` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_gallery_photo_gallery_idx` (`gallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `gallery_photo`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `garbage`
--

CREATE TABLE IF NOT EXISTS `garbage` (
  `idGarbage` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `userName` varchar(100) DEFAULT NULL,
  `table` varchar(100) DEFAULT NULL,
  `id` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `data` text,
  `sqlInsert` text,
  `hash` varchar(100) DEFAULT NULL,
  `active` char(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idGarbage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `garbage`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `personalizado`
--

CREATE TABLE IF NOT EXISTS `personalizado` (
  `idpersonalizado` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `imagem` varchar(140) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`idpersonalizado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `personalizado`
--

INSERT INTO `personalizado` (`idpersonalizado`, `titulo`, `imagem`, `ativo`) VALUES
(1, 'Torresmo Gourmet', 'torresmo_gourmet_1658847939629.png', '1'),
(2, 'Torresmo tradicional', 'torresmo_tradicional_1658847957374.png', '1'),
(3, 'Torresmo para micro-ondas', 'torresmo_microondas_1658847968473.png', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `popup`
--

CREATE TABLE IF NOT EXISTS `popup` (
  `idpopup` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `data_saida` date DEFAULT NULL,
  `imagem` varchar(140) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `video` varchar(200) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`idpopup`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `popup`
--

INSERT INTO `popup` (`idpopup`, `titulo`, `data_saida`, `imagem`, `link`, `video`, `ativo`) VALUES
(1, 'Video', '2022-07-26', NULL, NULL, 'https://www.youtube.com/watch?v=G42nlSnI4x4', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `subtitulo` varchar(100) DEFAULT NULL,
  `imagem` varchar(140) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` blob,
  `ativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `nome`, `subtitulo`, `imagem`, `titulo`, `texto`, `ativo`) VALUES
(1, 'PURURUCA', 'Pork Rinds', 'torresmo01_1658847528888.png', 'MAIS CONSUMIDO QUE NUNCA', 0x3c703e50657371756973617320726563656e74657320636f6d206f7320636f6e73756d69646f726573206465205075727572756361206d6f737472616d20717565206f73206d65736d6f732073266174696c64653b6f2065787472656d616d656e74652061706169786f6e61646f732070656c6f2070726f6475746f2e3c2f703e0d0a3c703e456d206d7569746f73206361736f732c20617320706573736f61732072656c6174616d20717565206f206c657665207361626f72206465206261636f6e20646566756d61646f20656e636f6e747261646f206e6f2070726f6475746f207472617a206c656d6272616e2663636564696c3b617320646120696e662661636972633b6e63696120652064612066616d266961637574653b6c69612e204f7574726f7320616669726d616d20717565206f2070726f6475746f207472266161637574653b73206c656d6272616e2663636564696c3b61732064652066266561637574653b72696173206f6e6465207075646572616d206578706572696d656e746172206f2070726f6475746f206e61207375612072656769266174696c64653b6f2074266961637574653b706963612e3c2f703e0d0a3c703e436f6d6f206d7569746f7320616c696d656e746f732c206120707572757275636120266561637574653b20706172746520646520756d612074726164692663636564696c3b266174696c64653b6f2063756c747572616c2072656c6163696f6e61646120636f6d20696e666c752665636972633b6e6369617320266561637574653b746e69636173206520726567696f6e6169732e20506f72206578656d706c6f2c2061207075727572756361207375266961637574653b6e61206520737561732076617269612663636564696c3b266f74696c64653b657320266561637574653b20756d2073616c676164696e686f206661766f7269746f20656e747265206f73206c6174696e6f732c20616d65726963616e6f732065206575726f706575732e3c2f703e0d0a3c703e266e6273703b3c2f703e, '1'),
(2, 'TORRESMO', 'Pellets tipo Tender Strips', 'torresmo02_1658847793369.png', 'MAIS CONSUMIDO QUE NUNCA', 0x3c703e50657371756973617320726563656e74657320636f6d206f7320636f6e73756d69646f726573206465205075727572756361206d6f737472616d20717565206f73206d65736d6f732073266174696c64653b6f2065787472656d616d656e74652061706169786f6e61646f732070656c6f2070726f6475746f2e3c2f703e0d0a3c703e456d206d7569746f73206361736f732c20617320706573736f61732072656c6174616d20717565206f206c657665207361626f72206465206261636f6e20646566756d61646f20656e636f6e747261646f206e6f2070726f6475746f207472617a206c656d6272616e2663636564696c3b617320646120696e662661636972633b6e63696120652064612066616d266961637574653b6c69612e204f7574726f7320616669726d616d20717565206f2070726f6475746f207472266161637574653b73206c656d6272616e2663636564696c3b61732064652066266561637574653b72696173206f6e6465207075646572616d206578706572696d656e746172206f2070726f6475746f206e61207375612072656769266174696c64653b6f2074266961637574653b706963612e3c2f703e0d0a3c703e436f6d6f206d7569746f7320616c696d656e746f732c206120707572757275636120266561637574653b20706172746520646520756d612074726164692663636564696c3b266174696c64653b6f2063756c747572616c2072656c6163696f6e61646120636f6d20696e666c752665636972633b6e6369617320266561637574653b746e69636173206520726567696f6e6169732e20506f72206578656d706c6f2c2061207075727572756361207375266961637574653b6e61206520737561732076617269612663636564696c3b266f74696c64653b657320266561637574653b20756d2073616c676164696e686f206661766f7269746f20656e747265206f73206c6174696e6f732c20616d65726963616e6f732065206575726f706575732e3c2f703e0d0a3c703e266e6273703b3c2f703e, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `snack`
--

CREATE TABLE IF NOT EXISTS `snack` (
  `idsnack` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `imagem` varchar(140) DEFAULT NULL,
  `texto` blob,
  `ativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`idsnack`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `snack`
--

INSERT INTO `snack` (`idsnack`, `titulo`, `imagem`, `texto`, `ativo`) VALUES
(1, 'BATATA ONDULADA', 'batata_ondulada_v1_1658847857347.png', 0x3c703e4c6f72656d20697073756d20646f6c6f722073697420616d65742c20636f6e73656374657475722061646970697363696e6720656c69742e55742073697420616d6574207361676974746973206d61676e612c20616320666163696c697369732072697375732e204e756c6c616d20766573746962756c756d2c2076656c6974206e6f6e2e3c2f703e, '1'),
(2, 'TORTILHA SUPER CROCANTE', 'tortilha_v1_1658847880760.png', 0x3c703e4c6f72656d20697073756d20646f6c6f722073697420616d65742c20636f6e73656374657475722061646970697363696e6720656c69742e55742073697420616d6574207361676974746973206d61676e612c20616320666163696c697369732072697375732e204e756c6c616d20766573746962756c756d2c2076656c6974206e6f6e2e3c2f703e, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `idTenant` int(11) NOT NULL,
  `idUserGroup` int(11) NOT NULL,
  `createDate` datetime DEFAULT NULL,
  `updateDate` datetime DEFAULT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `active` char(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idUser`),
  KEY `fk_usuario_empresa1_idx` (`idTenant`),
  KEY `fk_user_userGroup1_idx` (`idUserGroup`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`idUser`, `idTenant`, `idUserGroup`, `createDate`, `updateDate`, `firstName`, `lastName`, `email`, `password`, `active`) VALUES
(1, 0, 2, '2016-04-15 22:00:19', '2016-04-15 22:00:19', 'Alavanca', ' Sites e Sistemas', 'atendimento@alavanca.digital', '81762bd86d1563482406af027b470f0e', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usergroup`
--

CREATE TABLE IF NOT EXISTS `usergroup` (
  `idUserGroup` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `permissions` text,
  PRIMARY KEY (`idUserGroup`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usergroup`
--

INSERT INTO `usergroup` (`idUserGroup`, `name`, `permissions`) VALUES
(2, 'Administrador', '{"banner":["view","create","update","delete","ativar","desativar","index"],"bannerproduto":["view","create","update","delete","ativar","desativar","index"],"contato":["view","ativar","desativar","index"],"destaque":["view","create","update","delete","ativar","desativar","index"],"destaqueproduto":["view","create","update","delete","ativar","desativar","index"],"personalizado":["view","create","update","delete","ativar","desativar","index"],"popup":["view","create","update","delete","ativar","desativar","index"],"produto":["view","create","update","delete","ativar","desativar","index"],"site":["getcidades","index","error","login","logout"],"snack":["view","create","update","delete","ativar","desativar","index"],"user":["view","create","update","delete","me","password","index"],"usergroup":["view","create","update","delete","index"],"userlog":["view","create","update","delete","index"]}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
  `idUserLog` int(11) NOT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `userName` varchar(100) DEFAULT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `controller` varchar(100) DEFAULT NULL,
  `action` varchar(100) DEFAULT NULL,
  `get` text,
  `post` text,
  `accessStatus` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `userlog`
--

INSERT INTO `userlog` (`idUserLog`, `ip`, `date`, `idUser`, `userName`, `userEmail`, `controller`, `action`, `get`, `post`, `accessStatus`) VALUES
(0, '127.0.0.1', '2022-07-26 14:25:05', NULL, NULL, NULL, 'site', 'index', '[]', '[]', 'success'),
(0, '127.0.0.1', '2022-07-26 14:25:05', NULL, NULL, NULL, 'site', 'login', '[]', '[]', 'success'),
(0, '127.0.0.1', '2022-07-26 14:25:06', NULL, NULL, NULL, 'site', 'login', '[]', '{"LoginForm":{"email":"atendimento@alavanca.digital","senha":"PopUp0212"},"ajax":"login-form"}', 'success'),
(0, '127.0.0.1', '2022-07-26 14:25:07', NULL, NULL, NULL, 'site', 'login', '[]', '{"LoginForm":{"email":"atendimento@alavanca.digital","senha":"PopUp0212"}}', 'success'),
(0, '127.0.0.1', '2022-07-26 14:25:07', 1, 'Alavanca  Sites e Sistemas', 'atendimento@alavanca.digital', 'site', 'index', '[]', '[]', 'success');
