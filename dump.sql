# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.01 (MySQL 5.6.23)
# Database: mt4
# Generation Time: 2018-06-11 23:31:57 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table dispositivo_tipos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dispositivo_tipos`;

CREATE TABLE `dispositivo_tipos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `dispositivo_tipos` WRITE;
/*!40000 ALTER TABLE `dispositivo_tipos` DISABLE KEYS */;

INSERT INTO `dispositivo_tipos` (`id`, `nome`)
VALUES
	(1,'Servidor'),
	(2,'Roteador'),
	(3,'Switch');

/*!40000 ALTER TABLE `dispositivo_tipos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table dispositivos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dispositivos`;

CREATE TABLE `dispositivos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dispositivo_tipo_id` int(11) unsigned DEFAULT NULL,
  `fabricante_id` int(11) unsigned DEFAULT NULL,
  `hostname` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `dispositivos` WRITE;
/*!40000 ALTER TABLE `dispositivos` DISABLE KEYS */;

INSERT INTO `dispositivos` (`id`, `dispositivo_tipo_id`, `fabricante_id`, `hostname`, `nome`, `ip`)
VALUES
	(4,2,2,'localhost xxx','vagrant','192.168.10.10');

/*!40000 ALTER TABLE `dispositivos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fabricantes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fabricantes`;

CREATE TABLE `fabricantes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `fabricantes` WRITE;
/*!40000 ALTER TABLE `fabricantes` DISABLE KEYS */;

INSERT INTO `fabricantes` (`id`, `nome`)
VALUES
	(1,'Cisco'),
	(2,'Tplink'),
	(3,'Multilaser'),
	(4,'IBM'),
	(5,'Motorola');

/*!40000 ALTER TABLE `fabricantes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `email`, `password`)
VALUES
	(1,'dinaerteneto@gmail.com','secret');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
