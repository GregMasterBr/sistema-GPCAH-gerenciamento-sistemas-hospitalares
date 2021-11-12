-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2017 at 08:21 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpcahdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `departamento` varchar(100) NOT NULL,
  `responsavel` varchar(100) NOT NULL,
  `contato` varchar(100) NOT NULL,
  `observacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departamento`
--

INSERT INTO `departamento` (`id`, `created_at`, `departamento`, `responsavel`, `contato`, `observacao`) VALUES
(2, '2017-12-07 13:48:40', 'Imagens', 'Joao', 'Contato', 'descricao'),
(3, '2017-12-07 18:33:59', 'Exames de Imagem', 'Juliana Camargo', 'ju_camargo', '');

-- --------------------------------------------------------

--
-- Table structure for table `equipamento`
--

CREATE TABLE `equipamento` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nome_tecnico` varchar(100) NOT NULL,
  `nome_comercial` varchar(100) NOT NULL,
  `tipo` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `code` varchar(30) NOT NULL,
  `num_patrimonio` varchar(30) NOT NULL,
  `fabricante` int(100) NOT NULL,
  `fornecedor` int(11) NOT NULL,
  `dt_aquisicao` date NOT NULL,
  `dt_instalacao` date NOT NULL,
  `dt_garantia` date NOT NULL,
  `proprietario` varchar(100) NOT NULL,
  `departamento` int(11) NOT NULL,
  `localizacao` varchar(100) NOT NULL,
  `valor_compra` varchar(100) NOT NULL,
  `observacao` varchar(100) NOT NULL,
  `ficha_tecnica` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipamento`
--

INSERT INTO `equipamento` (`id`, `created_at`, `nome_tecnico`, `nome_comercial`, `tipo`, `marca`, `modelo`, `code`, `num_patrimonio`, `fabricante`, `fornecedor`, `dt_aquisicao`, `dt_instalacao`, `dt_garantia`, `proprietario`, `departamento`, `localizacao`, `valor_compra`, `observacao`, `ficha_tecnica`) VALUES
(1, '2017-12-07 17:36:03', 'Tecnico', 'Comercial', 1, 'MArca', 'Modelo', '4M5uGhDZffjmsQIQFSws', '1234564', 1, 1, '2017-12-13', '2017-12-22', '2018-05-10', 'Proprietario', 2, 'Localizacao', '32525', '', 'equipamentos/ficha-tecnica-equipo-xpto.pdf'),
(2, '2017-12-07 20:10:45', 'VAMOS TESTAR', 'VAMOS TESTAR', 2, 'MAC', 'IN TOCCHA', '88IyG7HxqPDJVHAIVMgJ', '156', 1, 2, '2017-12-13', '2017-12-23', '2018-01-09', 'Laisa e DOna', 2, 'Fatec', '212', '', 'equipamentos/Protocolo da InscriÃ§Ã£o.pdf'),
(3, '2017-12-07 20:17:49', 'teste 3', 'teste 3', 1, 'MAC', 'IN TOCCHA', 'SR5Adyu0v32ple7yfjZl', '354536', 1, 1, '2010-03-05', '2010-03-08', '2013-02-05', '', 3, 'Fatec', '435', '', 'equipamentos/rdc0016_28_03_2013.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `especialidade_fornecedor`
--

CREATE TABLE `especialidade_fornecedor` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `especialidade` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `especialidade_fornecedor`
--

INSERT INTO `especialidade_fornecedor` (`id`, `created_at`, `especialidade`, `descricao`) VALUES
(1, '2017-12-07 00:52:08', 'TESTE A', 'SOU UMA DESCRIÃ‡ÃƒO A'),
(2, '2017-12-07 00:57:44', 'TESTE B', 'SOU UMA DESCRIÇÃO'),
(3, '2017-12-07 01:20:47', 'TESTE C', 'SOU UMA DESCRIÇÃO'),
(4, '2017-12-07 01:28:13', 'TESTE D', 'SOU UMA DESCRIÇÃO ATUALIZADO'),
(5, '2017-12-07 18:29:52', 'Exames de Imagem', 'Tomografo');

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE `estados` (
  `codigo` int(11) NOT NULL,
  `sigla` varchar(2) NOT NULL,
  `descricao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estados`
--

INSERT INTO `estados` (`codigo`, `sigla`, `descricao`) VALUES
(1, 'AC', 'Acre'),
(2, 'AL', 'Alagoas'),
(3, 'AP', 'Amapá'),
(4, 'AM', 'Amazonas'),
(5, 'BA', 'Bahia'),
(6, 'CE', 'Ceará'),
(7, 'DF', 'Distrito Federal'),
(8, 'ES', 'Espírito Santo'),
(9, 'GO', 'Goiás'),
(10, 'MA', 'Maranhão'),
(11, 'MT', 'Mato Grosso'),
(12, 'MS', 'Mato Grosso do Sul'),
(13, 'MG', 'Minas Gerais'),
(14, 'PA', 'Pará'),
(15, 'PB', 'Paraíba'),
(16, 'PR', 'Paraná'),
(17, 'PE', 'Pernambuco'),
(18, 'PI', 'Piauí'),
(19, 'RJ', 'Rio de Janeiro'),
(20, 'RN', 'Rio Grande do Norte'),
(21, 'RS', 'Rio Grande do Sul'),
(22, 'RO', 'Rondônia'),
(23, 'RR', 'Roraima'),
(24, 'SC', 'Santa Catarina'),
(25, 'SP', 'São Paulo'),
(26, 'SE', 'Sergipe'),
(27, 'TO', 'Tocantins'),
(28, 'AC', 'AC'),
(29, 'AL', 'AL'),
(30, 'AP', 'AP'),
(31, 'AM', 'AM'),
(32, 'BA', 'BA'),
(33, 'CE', 'CE'),
(34, 'DF', 'DF'),
(35, 'ES', 'ES'),
(36, 'GO', 'GO'),
(37, 'MA', 'MA'),
(38, 'MT', 'MG'),
(39, 'MS', 'MS'),
(40, 'MG', 'MG'),
(41, 'PA', 'PA'),
(42, 'PB', 'PB'),
(43, 'PR', 'PR'),
(44, 'PE', 'PE'),
(45, 'PI', 'PI'),
(46, 'RJ', 'RJ'),
(47, 'RN', 'RN'),
(48, 'RS', 'RS'),
(49, 'RO', 'RO'),
(50, 'RR', 'RR'),
(51, 'SC', 'SC'),
(52, 'SP', 'SP'),
(53, 'SE', 'SE'),
(54, 'TO', 'TO');

-- --------------------------------------------------------

--
-- Table structure for table `fabricante`
--

CREATE TABLE `fabricante` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fabricante` varchar(100) NOT NULL,
  `responsavel` varchar(100) NOT NULL,
  `contato` varchar(100) NOT NULL,
  `observacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fabricante`
--

INSERT INTO `fabricante` (`id`, `created_at`, `fabricante`, `responsavel`, `contato`, `observacao`) VALUES
(1, '2017-12-07 13:19:55', 'APPLE', 'Steve Jobs', 'steve.jobs@microsoft.com', 'Teste A'),
(2, '2017-12-07 18:32:32', 'GE', 'Manuel Silva', 'manuel.Silva@ge.com/ (11) 332456787', 'Equipamentos de Imagem');

-- --------------------------------------------------------

--
-- Table structure for table `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `empresa` varchar(100) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `inscricao_municipal` varchar(15) NOT NULL,
  `incriscao_estadual` varchar(15) NOT NULL,
  `contato` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `observacao` varchar(100) NOT NULL,
  `especialidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fornecedores`
--

INSERT INTO `fornecedores` (`id`, `created_at`, `empresa`, `cnpj`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `telefone`, `inscricao_municipal`, `incriscao_estadual`, `contato`, `email`, `observacao`, `especialidade`) VALUES
(1, '2017-12-05 14:53:18', 'GregMaster', '17555884000143', '18108530', 'Rua Antônio Fratti', 42, 'Vila São João', 'Brigadeiro Tobias', 'Sorocaba', 'SP', '15981057742', '', '', 'Gregorio de Almeida Queiroz', 'contato@gregmaster.com.br', '0', 1),
(2, '2017-12-05 19:37:44', 'EMPRESA', '000', '18108-53', 'Rua AntÃƒÂ´nio Fratti, Brigadeiro Tobias', 42, '', 'Brigadeiro Tobias', 'SOROCABA', '', '15981057742', '', '', 'Contato', 'email@intenaticionalfail.com', '0', 2),
(3, '2017-12-07 18:27:48', 'TESTE DA TESTE', '010101', '', '', 0, '', '', '', '', '', '1234564', '', 'contato@gmail.com', 'teste@gmail.com', 'BAANDKANDS', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_equipamento`
--

CREATE TABLE `tipo_equipamento` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_equipamento`
--

INSERT INTO `tipo_equipamento` (`id`, `created_at`, `tipo`, `descricao`) VALUES
(1, '2017-12-07 12:30:29', 'TESTE A', 'DescriÃ§Ã£o A'),
(2, '2017-12-07 18:31:24', 'Tomografo', 'Tomografo Computadorizado');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(255) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 NOT NULL,
  `access_level` text CHARACTER SET latin1 NOT NULL,
  `status` varchar(1) CHARACTER SET latin1 NOT NULL,
  `path_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/img/profile/profile_temp.png',
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url_video` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `name`, `username`, `password`, `access_level`, `status`, `path_img`, `email`, `phone`, `mobile`, `address`, `city`, `state`, `url_video`) VALUES
(1, '2017-02-17 03:09:28', 'Gregorio de Almeida Queiroz', 'GregMaster', '123456', 'O', 'A', 'img/profile/gregorio-queiroz.jpg', 'gregorio.queiroz@fatec.sp.gov.br', '', '', '', '', '', ''),
(2, '2017-12-17 03:09:28', 'Laisa Cristina', 'Laisa', '123456', 'O', 'A', 'img/profile/laisa.jpg', 'laisa.cristina@fatec.sp.gov.br', '', '', '', '', '', ''),
(3, '2017-12-05 14:20:09', 'Larissa Santos da Paz', 'Larissa', '123456', 'C', 'A', 'img/profile/profile_temp.png', 'larissa@fatec.sp.gov.br', '', '', '', '', '', ''),
(4, '2017-12-07 18:23:39', 'André Pagassini', 'Pagassini', 'Fatec2017', 'O', 'A', 'img/profile/profile_temp.png', 'pagassini@gamil.com', '', '', '', '', '', '');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `itemOrderCredit` AFTER INSERT ON `users` FOR EACH ROW BEGIN
	IF (NEW.access_level = 'A') THEN
	    INSERT INTO credit_order (id_analyst,qnt_credit, status_order) VALUES (NEW.id,0,'Analise');        
     END IF;
 END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `especialidade_fornecedor`
--
ALTER TABLE `especialidade_fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `fabricante`
--
ALTER TABLE `fabricante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_equipamento`
--
ALTER TABLE `tipo_equipamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `especialidade_fornecedor`
--
ALTER TABLE `especialidade_fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `fabricante`
--
ALTER TABLE `fabricante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tipo_equipamento`
--
ALTER TABLE `tipo_equipamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
