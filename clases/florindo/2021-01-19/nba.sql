-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para test
CREATE DATABASE IF NOT EXISTS `nba` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `nba`;

-- Volcando estructura para tabla test.equipo
CREATE TABLE IF NOT EXISTS `equipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Equipos de baloncesto';

-- Volcando datos para la tabla test.equipo: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
INSERT INTO `equipo` (`id`, `name`) VALUES
	(1, 'Chicago bulls'),
	(2, 'LA Lakers'),
	(3, 'NY Neets');
/*!40000 ALTER TABLE `equipo` ENABLE KEYS */;

-- Volcando estructura para tabla test.jugador
CREATE TABLE IF NOT EXISTS `jugador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `equipo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK-jugador-equipo` (`equipo_id`),
  CONSTRAINT `FK-jugador-equipo` FOREIGN KEY (`equipo_id`) REFERENCES `equipo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla test.jugador: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `jugador` DISABLE KEYS */;
INSERT INTO `jugador` (`id`, `name`, `equipo_id`) VALUES
	(1, 'Marc Gasol', 2),
	(2, 'Pau Gasol', 1),
	(4, 'Lebron James', 2);
/*!40000 ALTER TABLE `jugador` ENABLE KEYS */;

-- Volcando estructura para tabla test.jugador-posicion
CREATE TABLE IF NOT EXISTS `jugador-posicion` (
  `jugador_id` int(11) NOT NULL,
  `posicion_id` int(11) NOT NULL,
  PRIMARY KEY (`jugador_id`,`posicion_id`) USING BTREE,
  KEY `FK-posicion` (`posicion_id`),
  CONSTRAINT `FK-jugador` FOREIGN KEY (`jugador_id`) REFERENCES `jugador` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK-posicion` FOREIGN KEY (`posicion_id`) REFERENCES `posicion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla test.jugador-posicion: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `jugador-posicion` DISABLE KEYS */;
INSERT INTO `jugador-posicion` (`jugador_id`, `posicion_id`) VALUES
	(1, 3),
	(2, 3),
	(4, 3),
	(4, 4);
/*!40000 ALTER TABLE `jugador-posicion` ENABLE KEYS */;

-- Volcando estructura para tabla test.partido
CREATE TABLE IF NOT EXISTS `partido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipo_v_id` int(11) NOT NULL,
  `equipo_l_id` int(11) NOT NULL,
  `resultado` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK-equiipo-visitante` (`equipo_v_id`),
  KEY `FK-equipo-local` (`equipo_l_id`),
  CONSTRAINT `FK-equiipo-visitante` FOREIGN KEY (`equipo_v_id`) REFERENCES `equipo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK-equipo-local` FOREIGN KEY (`equipo_l_id`) REFERENCES `equipo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla test.partido: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `partido` DISABLE KEYS */;
INSERT INTO `partido` (`id`, `equipo_v_id`, `equipo_l_id`, `resultado`) VALUES
	(1, 1, 2, '108-95'),
	(2, 3, 1, '105-124');
/*!40000 ALTER TABLE `partido` ENABLE KEYS */;

-- Volcando estructura para tabla test.posicion
CREATE TABLE IF NOT EXISTS `posicion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla test.posicion: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `posicion` DISABLE KEYS */;
INSERT INTO `posicion` (`id`, `name`) VALUES
	(1, 'Alero'),
	(2, 'Base'),
	(3, 'Pivot'),
	(4, 'Ala-Pivot'),
	(5, 'Escolta');
/*!40000 ALTER TABLE `posicion` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
