-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.36-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              10.2.0.5599
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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela autoexpress.convoy: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `convoy` DISABLE KEYS */;
INSERT INTO `convoy` (`idconvoy`, `pretime`, `time`, `start_city`, `final_city`, `date`, `save_link`, `px_channel`, `server_number`, `instructions`, `user_id`, `user_posts_id`) VALUES
	(28, '19:30:00', '20:00:00', 'Calais', 'Duisburg', '2019-07-27', 'https://www.mediafire.com/file/zfcr5ekczlrucft/4175746F45787072657373204C6F67C3AD7374696361.rar/file', 10, 1, ' COMBOIO SCANDINAVIA', 2, 1),
	(29, '22:00:00', '23:00:00', 'VenÃ¢ncio Aires', 'SAnta Cruz', '2019-07-24', 'http://www.google.com', 10, 1, ' asdasdasdasdasdasasdasdasdasd', 2, 1),
	(30, '22:00:00', '23:00:00', 'Venancio aures', 'ayasd', '2019-05-10', 'http://www.google.com', 1, 1, 'asdassdasd ', 2, 1),
	(31, '22:00:00', '23:21:45', 'Calais', 'Milano', '2019-08-16', 'http://www.mediafire.com/file/2d3x1clrivoztlx/COMBOIO__ROLE.rar/file', 10, 1, 'Teste de comboio do bot', 2, 1);
/*!40000 ALTER TABLE `convoy` ENABLE KEYS */;

-- Copiando estrutura para tabela autoexpress.km
CREATE TABLE IF NOT EXISTS `km` (
  `id` mediumint(5) unsigned NOT NULL AUTO_INCREMENT,
  `goal` smallint(7) unsigned NOT NULL DEFAULT '0',
  `done` smallint(7) unsigned DEFAULT '0',
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `user_id_km` smallint(3) unsigned NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adm_id` smallint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_km` (`user_id_km`),
  KEY `adm_id` (`adm_id`),
  CONSTRAINT `adm_id` FOREIGN KEY (`adm_id`) REFERENCES `user` (`id`),
  CONSTRAINT `user_id_km` FOREIGN KEY (`user_id_km`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela autoexpress.km: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `km` DISABLE KEYS */;
INSERT INTO `km` (`id`, `goal`, `done`, `begin_date`, `end_date`, `user_id_km`, `timestamp`, `adm_id`) VALUES
	(1, 6500, 6500, '2019-08-18', '2019-08-26', 2, '2019-09-14 01:39:05', 2),
	(2, 5000, 3100, '2019-08-18', '2019-08-26', 2, '2019-09-14 01:39:07', 2),
	(3, 5000, 6000, '2019-08-26', '2019-08-31', 3, '2019-09-14 01:39:07', 2),
	(4, 5000, 8000, '2019-08-26', '2019-08-31', 2, '2019-09-14 01:39:08', 2),
	(5, 8000, 9000, '2019-09-07', '2019-09-14', 2, '2019-09-14 01:39:08', 2),
	(6, 9500, 1000, '2019-09-07', '2019-09-14', 15, '2019-09-14 01:39:09', 2);
/*!40000 ALTER TABLE `km` ENABLE KEYS */;

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
  `trucksbook_nick` varchar(85) NOT NULL,
  `login` varchar(50) NOT NULL,
  `first_access` tinyint(1) unsigned NOT NULL,
  `password` varchar(45) NOT NULL,
  `active` tinyint(1) unsigned NOT NULL,
  `posts_id` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  KEY `post_id` (`posts_id`),
  CONSTRAINT `post_id` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela autoexpress.user: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `surname`, `trucksbook_nick`, `login`, `first_access`, `password`, `active`, `posts_id`) VALUES
	(2, 'ARIEL', 'CAMPOS', '[E.A.Ex] Ariel', 'ariel', 0, 'teste123', 1, 1),
	(3, 'NANDINHO', NULL, 'Nandinh0BR-101', 'NANDINHO', 0, 'senhateste', 1, 2),
	(15, 'MC', 'MARCINHO', 'mc marcinho', 'MC.MARCINHO', 1, 'MARCINHO', 1, 3),
	(28, 'Andre', 'Silva', 'AndreRvM', 'Andre.Silva', 1, 'andre', 1, 4);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
