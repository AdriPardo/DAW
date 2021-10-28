-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 23-10-2020 a las 06:35:44
-- Versión del servidor: 10.4.7-MariaDB-1:10.4.7+maria~bionic
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cine`
--
CREATE DATABASE IF NOT EXISTS `cine` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `cine`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actores`
--

DROP TABLE IF EXISTS `actores`;
CREATE TABLE `actores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `anyo` int(4) NOT NULL,
  `pais` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actores`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criticas`
--

DROP TABLE IF EXISTS `criticas`;
CREATE TABLE `criticas` (
  `id` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `medio` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `puntuacion` decimal(2,1) NOT NULL,
  `critica` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `criticas`
--

INSERT INTO `criticas` (`id`, `id_pelicula`, `medio`, `puntuacion`, `critica`) VALUES
(1, 1, 'Empire', '5.0', 'Se podría argumentar que la película de Francis Ford Coppola basada en el bestseller de Mario Puzo, a la vez una película de arte y una superproducción comercial, marcó el comienzo de la era de la mega-película.'),
(2, 1, 'abc', '5.0', 'Una labor de creación personal y un fresco, lleno de vivacidad y dramatismo, lo que se explica por el talento y la sensibilidad del joven realizador americano, que ya destacó en \'Llueve sobre mi corazón\' y \'Ya eres un gran chico\', y que aquí demuestra cómo se puede hacer, con calidades, una superproducción destinada a todos los mercados.'),
(20, 2, 'prueba medio', '4.0', 'prueba critica'),
(21, 2, 'prueba medio', '4.0', 'prueba critica'),
(22, 2, 'prueba medio', '4.0', 'prueba critica'),
(23, 2, 'prueba medio', '4.0', 'prueba critica'),
(24, 2, 'prueba medio', '4.0', 'prueba critica'),
(25, 2, 'prueba medio', '4.0', 'prueba critica'),
(26, 2, 'prueba medio', '4.0', 'prueba critica'),
(27, 2, 'prueba medio', '4.0', 'prueba critica'),
(28, 2, 'prueba medio', '4.0', 'prueba critica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directores`
--

DROP TABLE IF EXISTS `directores`;
CREATE TABLE `directores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `anyo` int(4) NOT NULL,
  `pais` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `directores`
--

INSERT INTO `directores` (`id`, `nombre`, `anyo`, `pais`) VALUES
(1, 'Francis Ford Coppola', 1939, 'Estados unidos'),
(2, 'Stanley Kubrick', 1928, 'Estados unidos'),
(3, 'Billy Wilder', 1906, 'Polonia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `anyo` int(4) NOT NULL,
  `duracion` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `titulo`, `anyo`, `duracion`) VALUES
(1, 'El padrino', 1972, 175),
(2, 'El padrino 2', 1974, 200),
(3, 'Senderos de gloria', 1957, 86),
(4, 'Primera plana', 1974, 105);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula_actor`
--

DROP TABLE IF EXISTS `pelicula_actor`;
CREATE TABLE `pelicula_actor` (
  `id_pelicula` int(11) NOT NULL,
  `id_actor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pelicula_actor`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula_director`
--

DROP TABLE IF EXISTS `pelicula_director`;
CREATE TABLE `pelicula_director` (
  `id_pelicula` int(11) NOT NULL,
  `id_director` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pelicula_director`
--

INSERT INTO `pelicula_director` (`id_pelicula`, `id_director`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `admin`) VALUES
(1, 'profesor', '$2y$10$gQZ0LTMOLNsCjZTZ6CS3KOjD4aQ97YuolTjrO5tx49PGxefSjOHNe', 1),
(3, 'alumno', '$2y$10$tnT/oLXZVRGOEk4K2bZCKOIr.5pQ8ntpYGNnBoBLS.W8yxxuoe3cS', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actores`
--
ALTER TABLE `actores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `criticas`
--
ALTER TABLE `criticas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pelicula` (`id_pelicula`);

--
-- Indices de la tabla `directores`
--
ALTER TABLE `directores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pelicula_actor`
--
ALTER TABLE `pelicula_actor`
  ADD PRIMARY KEY (`id_pelicula`,`id_actor`),
  ADD KEY `id_actor` (`id_actor`);

--
-- Indices de la tabla `pelicula_director`
--
ALTER TABLE `pelicula_director`
  ADD PRIMARY KEY (`id_pelicula`,`id_director`),
  ADD KEY `id_director` (`id_director`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actores`
--
ALTER TABLE `actores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `criticas`
--
ALTER TABLE `criticas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `directores`
--
ALTER TABLE `directores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `criticas`
--
ALTER TABLE `criticas`
  ADD CONSTRAINT `criticas_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula_actor` (`id_pelicula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pelicula_actor`
--
ALTER TABLE `pelicula_actor`
  ADD CONSTRAINT `pelicula_actor_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelicula_actor_ibfk_2` FOREIGN KEY (`id_actor`) REFERENCES `actores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pelicula_director`
--
ALTER TABLE `pelicula_director`
  ADD CONSTRAINT `pelicula_director_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelicula_director_ibfk_2` FOREIGN KEY (`id_director`) REFERENCES `directores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;