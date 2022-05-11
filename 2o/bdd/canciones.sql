-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.21-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para canciones
CREATE DATABASE IF NOT EXISTS `canciones` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `canciones`;

-- Volcando estructura para tabla canciones.canciones
CREATE TABLE IF NOT EXISTS `canciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `duracion` int(11) NOT NULL,
  `artista` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla canciones.canciones: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `canciones` DISABLE KEYS */;
INSERT INTO `canciones` (`id`, `titulo`, `duracion`, `artista`, `createdAt`, `updatedAt`) VALUES
	(2, 'Cancion a Nacholo', 245, 'Adrian Pardo', '2022-02-08 10:02:48', '2022-02-08 10:02:48'),
	(3, 'Oda a los NFTS', 12, 'Adrian Pardo', '2022-02-08 10:04:15', '2022-02-08 10:16:41');
/*!40000 ALTER TABLE `canciones` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
