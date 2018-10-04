-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.23-0ubuntu0.16.04.1 - (Ubuntu)
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para autoexpress
CREATE DATABASE IF NOT EXISTS `autoexpress` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `autoexpress`;

-- Copiando estrutura para tabela autoexpress.requests
CREATE TABLE IF NOT EXISTS `requests` (
  `id` tinyint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `age` tinyint(2) NOT NULL,
  `mail` varchar(50) COLLATE utf8_bin NOT NULL,
  `availability` text COLLATE utf8_bin NOT NULL,
  `whatsapp` varchar(15) COLLATE utf8_bin NOT NULL,
  `ets` tinyint(1) unsigned NOT NULL,
  `trucksbook` tinyint(1) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `discord` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela autoexpress.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `name` varchar(60) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
