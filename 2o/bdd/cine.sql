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


-- Volcando estructura de base de datos para cine
CREATE DATABASE IF NOT EXISTS `cine` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `cine`;

-- Volcando estructura para tabla cine.actores
CREATE TABLE IF NOT EXISTS `actores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `anyo` int(4) NOT NULL,
  `pais` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla cine.actores: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `actores` DISABLE KEYS */;
INSERT INTO `actores` (`id`, `nombre`, `anyo`, `pais`) VALUES
	(1, 'Marlon Brando', 1924, 'Estados unidos'),
	(2, 'Al Pacino', 1940, 'Estados unidos'),
	(3, 'Robert Duvall', 1931, 'Estados unidos'),
	(4, 'James Caan', 1940, 'Estados unidos'),
	(5, 'Diane Keaton', 1946, 'Estados unidos'),
	(6, 'Robert De Niro', 1943, 'Estados unidos'),
	(7, 'Kirk Douglas', 1916, 'Estados unidos'),
	(8, 'Ralph Meeker', 1920, 'Estados unidos'),
	(9, 'Adolphe Menjou', 1890, 'Estados unidos'),
	(10, 'Jack Lemmon', 1925, 'Estados unidos'),
	(11, 'Walter Matthau', 1920, 'Estados unidos'),
	(12, 'Susan Sarandon', 1946, 'Estados unidos');
/*!40000 ALTER TABLE `actores` ENABLE KEYS */;

-- Volcando estructura para tabla cine.criticas
CREATE TABLE IF NOT EXISTS `criticas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelicula` int(11) NOT NULL,
  `medio` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `puntuacion` decimal(2,1) NOT NULL,
  `critica` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pelicula` (`id_pelicula`),
  CONSTRAINT `criticas_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula_actor` (`id_pelicula`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla cine.criticas: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `criticas` DISABLE KEYS */;
INSERT INTO `criticas` (`id`, `id_pelicula`, `medio`, `puntuacion`, `critica`) VALUES
	(1, 1, 'Empire', 5.0, 'Se podría argumentar que la película de Francis Ford Coppola basada en el bestseller de Mario Puzo, a la vez una película de arte y una superproducción comercial, marcó el comienzo de la era de la mega-película.'),
	(2, 1, 'abc', 5.0, 'Una labor de creación personal y un fresco, lleno de vivacidad y dramatismo, lo que se explica por el talento y la sensibilidad del joven realizador americano, que ya destacó en \'Llueve sobre mi corazón\' y \'Ya eres un gran chico\', y que aquí demuestra cómo se puede hacer, con calidades, una superproducción destinada a todos los mercados.'),
	(20, 2, 'prueba medio', 4.0, 'prueba critica'),
	(21, 2, 'prueba medio', 4.0, 'prueba critica'),
	(22, 2, 'prueba medio', 4.0, 'prueba critica'),
	(23, 2, 'prueba medio', 4.0, 'prueba critica'),
	(24, 2, 'prueba medio', 4.0, 'prueba critica'),
	(25, 2, 'prueba medio', 4.0, 'prueba critica'),
	(26, 2, 'prueba medio', 4.0, 'prueba critica'),
	(27, 2, 'prueba medio', 4.0, 'prueba critica'),
	(28, 2, 'prueba medio', 4.0, 'prueba critica');
/*!40000 ALTER TABLE `criticas` ENABLE KEYS */;

-- Volcando estructura para tabla cine.directores
CREATE TABLE IF NOT EXISTS `directores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `anyo` int(4) NOT NULL,
  `pais` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla cine.directores: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `directores` DISABLE KEYS */;
INSERT INTO `directores` (`id`, `nombre`, `anyo`, `pais`) VALUES
	(1, 'Francis Ford Coppola', 1939, 'Estados unidos'),
	(2, 'Stanley Kubrick', 1928, 'Estados unidos'),
	(3, 'Billy Wilder', 1906, 'Polonia');
/*!40000 ALTER TABLE `directores` ENABLE KEYS */;

-- Volcando estructura para tabla cine.peliculas
CREATE TABLE IF NOT EXISTS `peliculas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `anyo` int(4) NOT NULL,
  `duracion` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla cine.peliculas: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `peliculas` DISABLE KEYS */;
INSERT INTO `peliculas` (`id`, `titulo`, `anyo`, `duracion`) VALUES
	(1, 'El padrino', 1972, 175),
	(2, 'El padrino 2', 1974, 200),
	(3, 'Senderos de gloria', 1957, 86),
	(4, 'Primera plana', 1974, 105);
/*!40000 ALTER TABLE `peliculas` ENABLE KEYS */;

-- Volcando estructura para tabla cine.pelicula_actor
CREATE TABLE IF NOT EXISTS `pelicula_actor` (
  `id_pelicula` int(11) NOT NULL,
  `id_actor` int(11) NOT NULL,
  PRIMARY KEY (`id_pelicula`,`id_actor`),
  KEY `id_actor` (`id_actor`),
  CONSTRAINT `pelicula_actor_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pelicula_actor_ibfk_2` FOREIGN KEY (`id_actor`) REFERENCES `actores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla cine.pelicula_actor: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `pelicula_actor` DISABLE KEYS */;
INSERT INTO `pelicula_actor` (`id_pelicula`, `id_actor`) VALUES
	(1, 1),
	(1, 2),
	(1, 3),
	(1, 4),
	(1, 5),
	(2, 2),
	(2, 3),
	(2, 5),
	(2, 6),
	(3, 7),
	(3, 8),
	(3, 9),
	(4, 10),
	(4, 11),
	(4, 12);
/*!40000 ALTER TABLE `pelicula_actor` ENABLE KEYS */;

-- Volcando estructura para tabla cine.pelicula_director
CREATE TABLE IF NOT EXISTS `pelicula_director` (
  `id_pelicula` int(11) NOT NULL,
  `id_director` int(11) NOT NULL,
  PRIMARY KEY (`id_pelicula`,`id_director`),
  KEY `id_director` (`id_director`),
  CONSTRAINT `pelicula_director_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pelicula_director_ibfk_2` FOREIGN KEY (`id_director`) REFERENCES `directores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla cine.pelicula_director: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `pelicula_director` DISABLE KEYS */;
INSERT INTO `pelicula_director` (`id_pelicula`, `id_director`) VALUES
	(1, 1),
	(2, 1),
	(3, 2),
	(4, 3);
/*!40000 ALTER TABLE `pelicula_director` ENABLE KEYS */;

-- Volcando estructura para tabla cine.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `token` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `expired` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla cine.usuarios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `usuario`, `password`, `admin`, `token`, `expired`) VALUES
	(1, 'profesor', '$2y$10$gQZ0LTMOLNsCjZTZ6CS3KOjD4aQ97YuolTjrO5tx49PGxefSjOHNe', 1, 'PtXoQvNgHxuQCeabJfLsfBGwTYkULhyXozEHPwIOSGdQZNXbyQSQFVQkTWtT', '2021-11-25 08:20:00.000000'),
	(3, 'alumno', '$2y$10$tnT/oLXZVRGOEk4K2bZCKOIr.5pQ8ntpYGNnBoBLS.W8yxxuoe3cS', 0, 'jMbmaHYzxbZZxKKzqAzeavODZslyEhCByZEoYqyorXVllMggnOWTfIyZiPBN', NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
