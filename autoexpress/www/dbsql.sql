-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.36-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para autoexpress
CREATE DATABASE IF NOT EXISTS `autoexpress` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `autoexpress`;

-- Copiando estrutura para tabela autoexpress.convoy
CREATE TABLE IF NOT EXISTS `convoy` (
  `idconvoy` int(11) NOT NULL AUTO_INCREMENT,
  `pretime` time NOT NULL,
  `time` time NOT NULL,
  `start_city` varchar(40) NOT NULL,
  `final_city` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `save_link` varchar(130),
  `px_channel` tinyint(2),
  `server_number` tinyint(1) DEFAULT NULL,
  `instructions` text,
  `user_id` smallint(3) unsigned NOT NULL,
  `user_posts_id` tinyint(2) NOT NULL,
  PRIMARY KEY (`idconvoy`,`user_id`,`user_posts_id`),
  KEY `user_id` (`user_id`),
  KEY `user_post_id` (`user_posts_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_post_id` FOREIGN KEY (`user_posts_id`) REFERENCES `posts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela autoexpress.convoy: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `convoy` DISABLE KEYS */;
INSERT INTO `convoy` (`idconvoy`, `pretime`, `time`, `start_city`, `final_city`, `date`, `save_link`, `px_channel`, `server_number`, `instructions`, `user_id`, `user_posts_id`) VALUES
	(13, '22:00:00', '23:00:00', 'Calais', 'Duisburg', '2019-07-22', 'http://comboio2.com', 2, 2, 'segundo teste do sql ', 3, 2),
	(14, '21:00:00', '22:00:00', 'Duisburg', 'Calais', '2019-07-23', 'http://www.google.com', 1, 2, 'terceiro teste do sql ', 3, 2),
	(15, '23:00:00', '00:00:00', 'Milano', 'Kiel', '2019-07-24', 'http://discord.gg', 12, 2, 'quarto teste do sql ', 3, 2),
	(16, '22:00:00', '23:00:00', 'Calais', 'Munchen', '2019-07-23', 'http://google.com', 22, 3, ' NÃ£o ultrapassar pela esquerda', 3, 2),
	(17, '22:00:00', '23:00:00', 'Calais', 'Munchen', '2019-07-25', 'http://google.com', 12, 1, 'aiosdoiasdo', 3, 2),
	(18, '22:00:00', '23:00:00', 'Duisburg', 'Munchen', '2019-07-26', 'http://google.com', 15, 1, 'INFORMAÃ‡Ã•ES DE ROTA NO ARQUIVO DO SAVE', 2, 1);
/*!40000 ALTER TABLE `convoy` ENABLE KEYS */;

-- Copiando estrutura para tabela autoexpress.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela autoexpress.posts: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `name`) VALUES
	(1, 'TESTADOR'),
	(2, 'GERENTE'),
	(3, 'RECRUTADOR'),
	(4, 'MOTORISTA');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Copiando estrutura para tabela autoexpress.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` smallint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(85) NOT NULL,
  `surname` varchar(85) DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `first_access` tinyint(1) unsigned NOT NULL,
  `password` varchar(45) NOT NULL,
  `posts_id` tinyint(2) NOT NULL,
  `recrutador_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`posts_id`),
  CONSTRAINT `post_id` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela autoexpress.user: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `surname`, `login`, `first_access`, `password`, `posts_id`, `recrutador_id`) VALUES
	(2, 'ARIEL', 'CAMPOS', 'ariel', 0, 'teste123', 1, NULL),
	(3, 'NANDINHO', NULL, 'NANDINHO', 0, 'senhateste', 2, NULL),
	(4, 'julia', 'bittencourt', 'julia.bittencourt', 1, 'senhajulia', 1, NULL),
	(9, 'luiz', 'fernando', 'luiz.fernando', 1, 'senhanandinho', 1, NULL),
	(10, 'marco', 'aurelio', 'marco.aurelio', 1, 'senhamarco', 2, NULL),
	(11, 'mc', 'marcinho', 'mc.marcinho', 1, 'senhamarcinho', 3, NULL),
	(12, 'JULIA', 'bittencourt', 'JULIA.bittencourt', 1, 'batata', 4, NULL),
	(13, 'MC', 'MARCINHO', 'MC.MARCINHO', 1, 'SENHATROCAR', 4, 2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
