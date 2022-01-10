-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 10-Jan-2022 às 16:15
-- Versão do servidor: 5.6.41-84.1
-- versão do PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dese6049_anuncios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios`
--

CREATE TABLE `anuncios` (
  `anuncio_id` int(11) NOT NULL,
  `anuncio_user_id` int(11) UNSIGNED NOT NULL,
  `anuncio_codigo` longtext NOT NULL,
  `anuncio_titulo` varchar(255) NOT NULL,
  `anuncio_descricao` longtext NOT NULL,
  `anuncio_marca` varchar(100) NOT NULL,
  `anuncio_status` varchar(50) DEFAULT NULL,
  `anuncio_tipo` tinyint(2) DEFAULT '2' COMMENT 'Venda ou Cota',
  `anuncio_modelo` varchar(100) NOT NULL,
  `anuncio_motorizacao` varchar(100) NOT NULL,
  `anuncio_ano` varchar(20) NOT NULL,
  `anuncio_passageiro_dia` int(11) NOT NULL,
  `anuncio_passageiro_noite` int(11) NOT NULL,
  `anuncio_categoria_pai_id` int(11) NOT NULL,
  `anuncio_categoria_id` int(11) NOT NULL,
  `anuncio_preco` decimal(15,2) NOT NULL,
  `anuncio_localizacao_cep` varchar(15) NOT NULL,
  `anuncio_logradouro` varchar(255) DEFAULT NULL COMMENT 'Preenchido via consulta API Via CEP',
  `anuncio_bairro` varchar(50) DEFAULT NULL COMMENT 'Preenchido via consulta API Via CEP',
  `anuncio_cidade` varchar(50) DEFAULT NULL COMMENT 'Preenchido via consulta API Via CEP',
  `anuncio_estado` varchar(2) DEFAULT NULL COMMENT 'Preenchido via consulta API Via CEP',
  `anuncio_bairro_metalink` varchar(50) DEFAULT NULL,
  `anuncio_cidade_metalink` varchar(50) DEFAULT NULL,
  `anuncio_data_criacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `anuncio_data_alteracao` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `anuncio_publicado` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Publicado ou não',
  `anuncio_situacao` tinyint(1) NOT NULL COMMENT 'Novo ou Usado',
  `termos` varchar(20) NOT NULL COMMENT 'aceito ou não aceito',
  `horas_uso` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `anuncios`
--

INSERT INTO `anuncios` (`anuncio_id`, `anuncio_user_id`, `anuncio_codigo`, `anuncio_titulo`, `anuncio_descricao`, `anuncio_marca`, `anuncio_status`, `anuncio_tipo`, `anuncio_modelo`, `anuncio_motorizacao`, `anuncio_ano`, `anuncio_passageiro_dia`, `anuncio_passageiro_noite`, `anuncio_categoria_pai_id`, `anuncio_categoria_id`, `anuncio_preco`, `anuncio_localizacao_cep`, `anuncio_logradouro`, `anuncio_bairro`, `anuncio_cidade`, `anuncio_estado`, `anuncio_bairro_metalink`, `anuncio_cidade_metalink`, `anuncio_data_criacao`, `anuncio_data_alteracao`, `anuncio_publicado`, `anuncio_situacao`, `termos`, `horas_uso`) VALUES
(35, 20, '68945017', 'NHD 280', 'LANCHA GABINADA EXCELENTE CUSTO BENEFICIO', 'NHD', 'DISPONIVEL', 0, '280', '300', '2022', 13, 2, 9, 83, 394900.00, '78032-150', 'Avenida Ipiranga', 'Goiabeira', 'Cuiabá', 'MT', 'goiabeira', 'cuiaba', '2021-11-24 18:32:17', '2021-12-23 18:29:20', 1, 1, '0', '00:00:00'),
(36, 27, '87412609', 'teste jet sky', 'teste de jet ski', 'SEA', '', 0, '200 GTI', '1.0', '2018', 2, 1, 10, 56, 19900.00, '78055-125', NULL, NULL, NULL, NULL, '', '', '2021-12-17 13:43:50', '2021-12-23 14:30:25', 0, 1, '0', '00:00:00'),
(37, 27, '68074193', 'teste jet sky', 'teste jet sky', 'SEA', NULL, 2, '200 GTI', '1.0', '2010', 2, 2, 10, 56, 19900.00, '78055-125', 'Rua Jornalista Amaro de Figueiredo Falcão', 'Morada da Serra', 'Cuiabá', 'MT', 'morada-da-serra', 'cuiaba', '2021-12-17 13:48:23', NULL, 0, 0, '0', '00:00:00'),
(38, 26, '20645781', 'JETSKI SEADOO', 'JET SKI COM 29 HORAS DE USO', 'SEADOO', 'ATIVO', 1, 'GTI ', '90', '2018', 3, 0, 10, 56, 70990.00, '78032-035', 'Avenida Ipiranga', 'Goiabeira', 'Cuiabá', 'MT', 'goiabeira', 'cuiaba', '2021-12-17 14:56:43', '2021-12-17 14:57:31', 1, 0, '0', '00:00:00'),
(39, 28, '28146539', 'FOCKER JOY', 'Lancha com 28horas de uso.', 'FOCKER', 'Disponível', 2, 'JOY', '100', '2021', 7, 0, 9, 83, 27999.00, '78032-035', 'Avenida Ipiranga', 'Goiabeira', 'Cuiabá', 'MT', 'goiabeira', 'cuiaba', '2021-12-23 18:37:49', '2021-12-23 18:45:12', 1, 1, '0', '00:00:00'),
(41, 25, '61805243', 'Sea Doo RXT-X 300', 'testando o anuncio de teste de horas e termos', 'yyyy', NULL, 2, 'sssss', '3.0', '2020', 4, 3, 9, 83, 3000.00, '78058-448', 'Rua Quarenta e Quatro', 'Morada da Serra', 'Cuiabá', 'MT', 'morada-da-serra', 'cuiaba', '2022-01-04 17:44:12', NULL, 0, 1, 'aceito', '15:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios_fotos`
--

CREATE TABLE `anuncios_fotos` (
  `foto_id` int(11) NOT NULL,
  `foto_anuncio_id` int(11) DEFAULT NULL,
  `foto_nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `anuncios_fotos`
--

INSERT INTO `anuncios_fotos` (`foto_id`, `foto_anuncio_id`, `foto_nome`) VALUES
(263, 37, '4bd32bb3cad57f654308631c440c22a0.jpeg'),
(264, 37, '9fb29723564b19200d9c3f5a245eee2a.jpeg'),
(272, 38, '89a0a2a83955afe58b69a0400afe5b25.jpeg'),
(273, 38, '99bf1326c0ce0da125ea5d9ea6154478.jpeg'),
(274, 38, '8bd38d7e609f78985085a49cf971f201.jpeg'),
(275, 38, '63926ea290aee4988cf4eaa018a7b0de.jpeg'),
(276, 38, '1fc692f92bde4401219bc7b7261d91a2.jpeg'),
(277, 38, '6f65f22f48915380ed6a9084dd6e43f6.jpeg'),
(278, 38, '5e515f26cd08c1cd0f60b58c15de6a50.jpeg'),
(365, 36, 'b0a20219ad2cb73008aa4e2c9b33c147.jpeg'),
(366, 36, '992158e1aa24244e1416a916fbb316bd.jpeg'),
(367, 36, '08888dc6bcb90b71c47fda793ab8a5cb.jpeg'),
(368, 35, '51417552e7611ec87116d49e1b65cbbf.jpeg'),
(369, 35, '3012c96d736bc4c737ee9808ce2d60c1.jpeg'),
(370, 35, '0c3686ed8e6c8df5d73f3d52480914bc.jpeg'),
(371, 35, 'eda858a52faeb03c8aa2c24ce3fa7fb2.jpeg'),
(372, 35, '94205180d043916bf4ce7dfe4eaa69aa.jpeg'),
(373, 35, '78082affced17708881f05c1dae88433.jpeg'),
(374, 35, 'f3a45e4fb0e94406181ccb827f395791.jpeg'),
(375, 35, '41c4b382dc9a9849e1ecb8df112489c7.jpeg'),
(376, 35, 'e53ef902dffbb197d9d114d6ccf27df5.jpeg'),
(377, 35, '1b94f2bfd1390dc32b72adde240f13be.jpeg'),
(378, 35, 'fac59e058efd8844d02401d6f3530786.jpeg'),
(379, 35, '8b65fd34c8723f3d3cad29b0d26f937a.jpeg'),
(380, 35, '88f41316b2df8fe309fdc60b04be6e4b.jpeg'),
(381, 35, 'd8e94d391e809a1b567017aa4dcd38dd.jpeg'),
(382, 35, '9d24e8a8557c15cf0e3b3a0fdcfbc630.jpeg'),
(383, 35, 'e64f3dcae68e3c8cebf0c6c6bbd92226.jpeg'),
(396, 39, '2d241fcf8da2452baf6c8b3678981f23.jpeg'),
(397, 39, 'c841bf73fc742378b76bb96476b81e09.jpeg'),
(398, 39, '892940ff71ce891da33cfcee7a80b602.jpeg'),
(402, 41, 'e9f966864984066fb55170f84de3c92a.jpg'),
(403, 41, '39376bb84701bf79faa4645aab0cdd46.jpg'),
(404, 41, '0b4266283abf749373b40de6fa42c963.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios_perguntas`
--

CREATE TABLE `anuncios_perguntas` (
  `pergunta_id` int(11) NOT NULL,
  `anuncio_id` int(11) NOT NULL,
  `anuncio_user_id` int(11) NOT NULL COMMENT 'ID do dono do anuncio. Será utilizado para verificar se a pergunta não está atrelada a outro anunciante',
  `anunciante_pergunta_id` int(11) NOT NULL,
  `pergunta` text,
  `resposta` text,
  `data_pergunta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_resposta` datetime DEFAULT NULL,
  `pergunta_respondida` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Uma pergunta sempre será inserida como 0 (zero)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios_perguntas_historico`
--

CREATE TABLE `anuncios_perguntas_historico` (
  `pergunta_id` int(11) NOT NULL,
  `anuncio_id` int(11) NOT NULL,
  `anuncio_user_id` int(11) NOT NULL COMMENT 'ID do dono do anuncio. Será utilizado para verificar se a pergunta não está atrelada a outro anunciante',
  `anunciante_pergunta_id` int(11) NOT NULL,
  `pergunta` text,
  `resposta` text,
  `data_pergunta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_resposta` datetime DEFAULT NULL,
  `pergunta_respondida` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Uma pergunta sempre será inserida como 0 (zero)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `categoria_id` int(11) NOT NULL,
  `categoria_pai_id` int(11) DEFAULT NULL,
  `categoria_nome` varchar(150) NOT NULL,
  `categoria_ativa` tinyint(1) DEFAULT NULL,
  `categoria_meta_link` varchar(100) DEFAULT NULL,
  `categoria_data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categoria_data_alteracao` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`categoria_id`, `categoria_pai_id`, `categoria_nome`, `categoria_ativa`, `categoria_meta_link`, `categoria_data_criacao`, `categoria_data_alteracao`) VALUES
(56, 10, 'Jet Ski', 1, 'jet-ski', '2020-09-24 20:54:24', '2021-10-26 18:50:43'),
(83, 9, 'Lancha', 1, 'lancha', '2021-10-26 18:58:06', '2021-10-26 18:58:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_pai`
--

CREATE TABLE `categorias_pai` (
  `categoria_pai_id` int(11) NOT NULL,
  `categoria_pai_nome` varchar(45) NOT NULL,
  `categoria_pai_ativa` tinyint(1) DEFAULT NULL,
  `categoria_pai_meta_link` varchar(100) DEFAULT NULL,
  `categoria_pai_classe_icone` varchar(50) NOT NULL,
  `categoria_pai_data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categoria_pai_data_alteracao` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias_pai`
--

INSERT INTO `categorias_pai` (`categoria_pai_id`, `categoria_pai_nome`, `categoria_pai_ativa`, `categoria_pai_meta_link`, `categoria_pai_classe_icone`, `categoria_pai_data_criacao`, `categoria_pai_data_alteracao`) VALUES
(9, 'Lancha', 1, 'lancha', 'lni-home', '2020-09-21 02:38:20', '2021-10-26 18:36:04'),
(10, 'JetSki', 1, 'jetski', 'lni-anchor', '2020-09-21 02:40:27', '2021-11-15 21:00:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimentos`
--

CREATE TABLE `depoimentos` (
  `id_depoimentos` int(11) NOT NULL,
  `texto` text NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `funcao` varchar(50) NOT NULL,
  `user_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `depoimentos`
--

INSERT INTO `depoimentos` (`id_depoimentos`, `texto`, `nome_cliente`, `funcao`, `user_foto`) VALUES
(1, 'Experiência incrível. Empresa nota 1000. A melhor do ramo de compartilhamento. Os clientes não se preocupam com nada, só precisam se divertir', 'Evandro Bitencourt', 'Cotista', '2bd6f07c0abdd1ae9df087acc17fda98.jpg'),
(3, 'Uma ótima opção para seu lazer!!!', 'Thiago Teixeira', 'Empresário', '06af0357971a47c08e0071938756c4c1.jpg'),
(4, 'muito bom recomendo essa modalidade', 'DIEGO', 'Médico', 'e53baf2cf3b84742e4fd89c56612ed82.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'anunciantes', 'Anunciantes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sistema`
--

CREATE TABLE `sistema` (
  `sistema_id` int(11) NOT NULL,
  `sistema_razao_social` varchar(145) DEFAULT NULL,
  `sistema_nome_fantasia` varchar(145) DEFAULT NULL,
  `sistema_cnpj` varchar(25) DEFAULT NULL,
  `sistema_ie` varchar(25) DEFAULT NULL,
  `sistema_telefone_fixo` varchar(25) DEFAULT NULL,
  `sistema_telefone_movel` varchar(25) NOT NULL,
  `sistema_email` varchar(100) DEFAULT NULL,
  `sistema_site_titulo` varchar(255) DEFAULT NULL,
  `sistema_cep` varchar(25) DEFAULT NULL,
  `sistema_endereco` varchar(145) DEFAULT NULL,
  `sistema_numero` varchar(25) DEFAULT NULL,
  `sistema_bairro` varchar(100) NOT NULL,
  `sistema_cidade` varchar(100) DEFAULT NULL,
  `sistema_estado` varchar(2) DEFAULT NULL,
  `sistema_data_alteracao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sistema`
--

INSERT INTO `sistema` (`sistema_id`, `sistema_razao_social`, `sistema_nome_fantasia`, `sistema_cnpj`, `sistema_ie`, `sistema_telefone_fixo`, `sistema_telefone_movel`, `sistema_email`, `sistema_site_titulo`, `sistema_cep`, `sistema_endereco`, `sistema_numero`, `sistema_bairro`, `sistema_cidade`, `sistema_estado`, `sistema_data_alteracao`) VALUES
(1, 'Ir Automóveis', 'iR Boats', '10.736.087/0001-13', '683.90228-49', '(65) 3634-4004', '(65) 99951-4004', 'Irboatscuiaba@gmail.com', 'Irboats - Cotas e Embarcações.', '78032-035', 'Av. Ipiranga', '1025', 'Goiabeiras', 'Cuiabá', 'MT', '2021-11-18 18:39:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `usuario_tipo` tinyint(1) NOT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `user_foto` varchar(255) DEFAULT 'sem-foto.jpg',
  `user_cpf_cnpj` varchar(20) NOT NULL,
  `user_cep` varchar(9) NOT NULL,
  `user_endereco` varchar(255) NOT NULL,
  `user_numero_endereco` varchar(50) NOT NULL,
  `user_bairro` varchar(50) NOT NULL,
  `user_cidade` varchar(50) NOT NULL,
  `user_estado` varchar(2) NOT NULL,
  `cotista` tinyint(1) DEFAULT NULL,
  `pagamento` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `usuario_tipo`, `company`, `phone`, `user_foto`, `user_cpf_cnpj`, `user_cep`, `user_endereco`, `user_numero_endereco`, `user_bairro`, `user_cidade`, `user_estado`, `cotista`, `pagamento`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$cbAFqMKf7oWvGWv2IRWlJe.jf5oyTjd1DTKgiaQREs1SH6op.6IRK', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1641834823, 1, 'Evandro', 'Bitencourt', 1, 'ADMIN', '(65) 99943-9012', 'fbd0858d88cd231687aa9cedf23c5122.jpg', '014.717.071-05', '78058-448', 'Rua Quarenta e Quatro', '44', 'Morada da Serra', 'Cuiabá', 'MT', 0, NULL),
(20, '::1', NULL, '$2y$10$wTRNNzYSQPsHe9mDc46Zx.zXiCb0xOhhj1f3rcbDG1uibYeiZXbfa', 'ivanrastelli@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1637173256, 1641820057, 1, 'Ivan', 'Rastelli', 1, '', '(65) 99982-4348', '2b42e3ae8659498d9279ce79b97569d3.jpg', '988.026.741-91', '78032-035', 'Avenida Ipiranga', '10250', 'Goiabeira', 'Cuiabá', 'MT', 1, 0),
(25, '127', '', '$2y$10$QJ9dhFpLxx.NI2RnOubx5.KGiLFjMkKvdMF5Ka/kL41AxjrISD3ja', 'mane@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1639582565, 1641387992, 1, 'joao', 'Antunes', 1, '', '(65) 9999-6545', '7aad0a814a5b02684e94befc3945b05d.jpg', '436.353.056-18', '78058-448', 'Rua Quarenta e Quatro', '', 'Morada da Serra', 'Cuiabá', 'MT', 0, NULL),
(26, '177.193.157.4', NULL, '$2y$12$VqY2zKcD/T8frZ4R9FPDwuEORS/FYueZpocza0cQxWAPzifvKSzem', 'irboatscuiaba@GMAIL.COM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1639746321, 1641236290, 1, 'iR Boats', 'Boats', 2, NULL, '(65) 3634-4004', 'sem-foto.jpg', '10.736.087/0001-13', '78032-035', 'Avenida Ipiranga', '1025', 'Goiabeira', 'Cuiabá', 'MT', 1, 0),
(27, '177.65.158.81', NULL, '$2y$12$GDHmIjoZUOkWcBdgsOeLcu8b3g0mrZshpoBBORCKHDSL1dADfoABW', 'contatoboxagencia@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1639748057, 1640280366, 1, 'Thiago', 'Teixeira', 1, NULL, '(65) 99206-7631', 'sem-foto.jpg', '024.786.781-01', '78055-125', 'Rua Jornalista Amaro de Figueiredo Falcão', '21', 'Morada da Serra', 'Cuiabá', 'MT', 0, NULL),
(28, '177.193.157.4', NULL, '$2y$10$Nq4aj0kRRrKkfv3Ft8xjpeEt8W/h6aU9Ly5BLEDvm4ic4nVMSZ3Ke', 'arthurmaxnunes9@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1640284434, 1641306123, 1, 'ARTHUR', 'MAX', 1, NULL, '(65) 99932-2274', 'sem-foto.jpg', '055.901.421-05', '78032-035', 'Avenida Ipiranga', '1025', 'Goiabeira', 'Cuiabá', 'MT', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(90, 1, 1),
(81, 20, 2),
(89, 25, 2),
(83, 26, 1),
(88, 28, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`anuncio_id`),
  ADD KEY `fk_anuncio_user_id` (`anuncio_user_id`);

--
-- Índices para tabela `anuncios_fotos`
--
ALTER TABLE `anuncios_fotos`
  ADD PRIMARY KEY (`foto_id`),
  ADD KEY `fk_foto_anuncio_id` (`foto_anuncio_id`);

--
-- Índices para tabela `anuncios_perguntas`
--
ALTER TABLE `anuncios_perguntas`
  ADD PRIMARY KEY (`pergunta_id`),
  ADD KEY `anuncio_id` (`anuncio_id`),
  ADD KEY `anunciante_pergunta_id` (`anunciante_pergunta_id`);

--
-- Índices para tabela `anuncios_perguntas_historico`
--
ALTER TABLE `anuncios_perguntas_historico`
  ADD PRIMARY KEY (`pergunta_id`),
  ADD KEY `anuncio_id` (`anuncio_id`),
  ADD KEY `anunciante_pergunta_id` (`anunciante_pergunta_id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoria_id`),
  ADD KEY `categoria_pai_id` (`categoria_pai_id`);

--
-- Índices para tabela `categorias_pai`
--
ALTER TABLE `categorias_pai`
  ADD PRIMARY KEY (`categoria_pai_id`);

--
-- Índices para tabela `depoimentos`
--
ALTER TABLE `depoimentos`
  ADD PRIMARY KEY (`id_depoimentos`);

--
-- Índices para tabela `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Índices para tabela `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `anuncio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `anuncios_fotos`
--
ALTER TABLE `anuncios_fotos`
  MODIFY `foto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- AUTO_INCREMENT de tabela `anuncios_perguntas`
--
ALTER TABLE `anuncios_perguntas`
  MODIFY `pergunta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `anuncios_perguntas_historico`
--
ALTER TABLE `anuncios_perguntas_historico`
  MODIFY `pergunta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de tabela `categorias_pai`
--
ALTER TABLE `categorias_pai`
  MODIFY `categoria_pai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `depoimentos`
--
ALTER TABLE `depoimentos`
  MODIFY `id_depoimentos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `anuncios`
--
ALTER TABLE `anuncios`
  ADD CONSTRAINT `fk_anuncio_user_id` FOREIGN KEY (`anuncio_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `anuncios_fotos`
--
ALTER TABLE `anuncios_fotos`
  ADD CONSTRAINT `fk_foto_anuncio_id` FOREIGN KEY (`foto_anuncio_id`) REFERENCES `anuncios` (`anuncio_id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `anuncios_perguntas`
--
ALTER TABLE `anuncios_perguntas`
  ADD CONSTRAINT `fk_anuncio_id` FOREIGN KEY (`anuncio_id`) REFERENCES `anuncios` (`anuncio_id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `anuncios_perguntas_historico`
--
ALTER TABLE `anuncios_perguntas_historico`
  ADD CONSTRAINT `fk_anuncio_id_historico` FOREIGN KEY (`anuncio_id`) REFERENCES `anuncios` (`anuncio_id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `fk_categoria_pai_id` FOREIGN KEY (`categoria_pai_id`) REFERENCES `categorias_pai` (`categoria_pai_id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
