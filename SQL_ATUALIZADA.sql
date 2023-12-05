-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.22-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para teste
CREATE DATABASE IF NOT EXISTS `teste` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `teste`;

-- Copiando estrutura para tabela teste.cadastro
CREATE TABLE IF NOT EXISTS `cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `data_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela teste.cadastro: 3 rows
/*!40000 ALTER TABLE `cadastro` DISABLE KEYS */;
INSERT INTO `cadastro` (`id`, `nome`, `email`, `senha`, `celular`, `data_cadastro`, `data_update`) VALUES
	(4, 'Roberval 22', 'jeferson@grupoaspecir.com.br', '1234', '51922332502', '2022-05-20 11:36:13', '2022-05-20 14:11:00'),
	(5, 'Roberval', 'jeferson@grupoaspecir2.com.br', '1234', '51922332502', '2022-05-20 11:37:03', '2022-05-20 11:37:03'),
	(6, 'Jeferson Forte', 'jefersonof@hotmail.com', '1234', '51922330000', '2022-05-20 11:37:30', '2022-05-20 11:37:30');
/*!40000 ALTER TABLE `cadastro` ENABLE KEYS */;

-- Copiando estrutura para tabela teste.sistema_grupo
CREATE TABLE IF NOT EXISTS `sistema_grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT '',
  `data_cadastro` datetime DEFAULT NULL,
  `data_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela teste.sistema_grupo: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `sistema_grupo` DISABLE KEYS */;
INSERT INTO `sistema_grupo` (`id`, `nome`, `data_cadastro`, `data_update`) VALUES
	(130, 'Admin', '2022-05-30 12:54:05', '2022-06-24 09:16:30'),
	(131, 'Geral', '2022-05-30 12:54:26', '2022-06-27 11:43:00'),
	(142, 'Produção', '2022-06-03 07:41:40', '2022-06-27 11:17:12'),
	(145, 'Faturamento', '2022-06-03 14:35:24', '2022-06-13 07:40:34'),
	(149, 'Dos Altos', '2022-06-03 14:37:32', '2022-06-24 09:45:30'),
	(150, 'Dos Baxos', '2022-06-03 14:37:39', '2022-06-13 07:41:16');
/*!40000 ALTER TABLE `sistema_grupo` ENABLE KEYS */;

-- Copiando estrutura para tabela teste.sistema_grupo_programa
CREATE TABLE IF NOT EXISTS `sistema_grupo_programa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sistema_grupo_id` int(11) NOT NULL,
  `sistema_program_id` int(11) NOT NULL,
  `insercao` int(11) DEFAULT NULL,
  `alteracao` int(11) DEFAULT NULL,
  `delecao` int(11) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `data_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=684 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela teste.sistema_grupo_programa: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `sistema_grupo_programa` DISABLE KEYS */;
INSERT INTO `sistema_grupo_programa` (`id`, `sistema_grupo_id`, `sistema_program_id`, `insercao`, `alteracao`, `delecao`, `data_cadastro`, `data_update`) VALUES
	(525, 150, 11, NULL, NULL, NULL, '2022-06-13 07:41:16', '2022-06-13 07:41:16'),
	(527, 150, 13, NULL, NULL, NULL, '2022-06-13 07:41:16', '2022-06-13 07:41:16'),
	(679, 130, 11, NULL, NULL, NULL, '2022-06-24 09:16:30', '2022-06-24 09:16:30'),
	(680, 149, 11, 1, 1, 1, '2022-06-24 09:45:30', '2022-06-24 09:45:30'),
	(681, 149, 13, 1, 1, 1, NULL, NULL),
	(682, 142, 11, NULL, NULL, NULL, '2022-06-27 11:17:12', '2022-06-27 11:17:12'),
	(683, 131, 11, NULL, 1, NULL, '2022-06-27 11:43:00', '2022-06-27 11:43:00');
/*!40000 ALTER TABLE `sistema_grupo_programa` ENABLE KEYS */;

-- Copiando estrutura para tabela teste.sistema_grupo_usuario
CREATE TABLE IF NOT EXISTS `sistema_grupo_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sistema_grupo_id` int(11) NOT NULL,
  `sistema_usuario_id` int(11) NOT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `data_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=360 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela teste.sistema_grupo_usuario: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `sistema_grupo_usuario` DISABLE KEYS */;
INSERT INTO `sistema_grupo_usuario` (`id`, `sistema_grupo_id`, `sistema_usuario_id`, `data_cadastro`, `data_update`) VALUES
	(184, 150, 25, '2022-06-13 07:54:47', '2022-06-13 07:54:47'),
	(185, 142, 26, '2022-06-13 07:54:58', '2022-06-13 07:54:58'),
	(186, 145, 27, '2022-06-13 07:55:10', '2022-06-13 07:55:10'),
	(343, 149, 24, '2022-06-24 09:17:36', '2022-06-24 09:17:36'),
	(358, 131, 23, '2022-06-28 11:55:27', '2022-06-28 11:55:27'),
	(359, 142, 23, '2022-06-28 11:55:27', '2022-06-28 11:55:27');
/*!40000 ALTER TABLE `sistema_grupo_usuario` ENABLE KEYS */;

-- Copiando estrutura para tabela teste.sistema_programa
CREATE TABLE IF NOT EXISTS `sistema_programa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `controller` varchar(200) DEFAULT NULL,
  `menu` varchar(200) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `data_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela teste.sistema_programa: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `sistema_programa` DISABLE KEYS */;
INSERT INTO `sistema_programa` (`id`, `nome`, `controller`, `menu`, `data_cadastro`, `data_update`) VALUES
	(11, 'Controle de Usuário', 'Sistema_Usuario', 'Usuário', '2022-05-20 14:52:23', '2022-06-06 14:05:05'),
	(13, 'Controle de Grupo', 'Sistema_Grupo', 'Grupo', '2022-05-20 14:52:32', '2022-05-20 14:52:32'),
	(17, 'Controle de Programa', 'Sistema_Programa', 'Programa', '2022-05-20 14:54:08', '2022-06-17 14:13:29'),
	(36, 'Teste', 'Sistema_Teste', 'Teste', '2022-06-22 12:48:29', '2022-06-28 13:36:21'),
	(37, 'Teste 2', 'testeForm2', 'Teste 2', '2022-06-23 07:36:21', '2022-06-23 07:36:21');
/*!40000 ALTER TABLE `sistema_programa` ENABLE KEYS */;

-- Copiando estrutura para tabela teste.sistema_usuario
CREATE TABLE IF NOT EXISTS `sistema_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `page_inicial` char(50) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `data_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela teste.sistema_usuario: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `sistema_usuario` DISABLE KEYS */;
INSERT INTO `sistema_usuario` (`id`, `nome`, `login`, `senha`, `email`, `page_inicial`, `data_cadastro`, `data_update`) VALUES
	(23, 'Roberval da Silva', 'Rob.silva', '1234', 'rob.val@yahoo.com', 'Formulario de Usuários', '2022-06-07 12:03:43', '2022-06-28 11:55:27'),
	(24, 'Fifancius ', 'fifancius', '1234', 'fifancius@hotmail.com', 'Lista de Usuários', '2022-06-08 08:41:19', '2022-06-24 09:17:36'),
	(25, 'Pancio Vil Limão', 'pan.vil', '', 'pancio_vil@hotmail.com', 'Pagina Inicial', '2022-06-08 08:46:11', '2022-06-13 07:54:47'),
	(26, 'Tião', 'tiao', '', 'tiao@gmail.com', 'Pagina Inicial', '2022-06-08 08:48:00', '2022-06-13 07:54:58'),
	(27, 'ze', 'ze', '', 'ze@gmail.com', 'Lista de Usuários', '2022-06-08 09:02:09', '2022-06-13 07:55:10');
/*!40000 ALTER TABLE `sistema_usuario` ENABLE KEYS */;

-- Copiando estrutura para tabela teste.sistema_usuario_programa
CREATE TABLE IF NOT EXISTS `sistema_usuario_programa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sistema_usuario_id` int(11) NOT NULL,
  `sistema_programa_id` int(11) NOT NULL,
  `acesso` int(1) DEFAULT NULL,
  `insercao` int(1) DEFAULT NULL,
  `alteracao` int(1) DEFAULT NULL,
  `delecao` int(1) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `data_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=353 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela teste.sistema_usuario_programa: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `sistema_usuario_programa` DISABLE KEYS */;
INSERT INTO `sistema_usuario_programa` (`id`, `sistema_usuario_id`, `sistema_programa_id`, `acesso`, `insercao`, `alteracao`, `delecao`, `data_cadastro`, `data_update`) VALUES
	(332, 24, 17, 1, 1, 1, 1, '2022-06-24 09:17:36', '2022-06-24 09:17:36'),
	(333, 24, 36, 1, 1, 1, 1, '2022-06-24 09:17:36', '2022-06-24 09:17:36'),
	(334, 24, 37, 1, 1, 1, 1, '2022-06-24 09:17:36', '2022-06-24 09:17:36'),
	(350, 23, 37, 1, NULL, NULL, NULL, '2022-06-28 11:55:27', '2022-06-28 11:55:27'),
	(351, 23, 36, 1, NULL, NULL, NULL, '2022-06-28 11:55:27', '2022-06-28 11:55:27'),
	(352, 23, 11, 1, NULL, NULL, NULL, '2022-06-28 11:55:27', '2022-06-28 11:55:27');
/*!40000 ALTER TABLE `sistema_usuario_programa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
