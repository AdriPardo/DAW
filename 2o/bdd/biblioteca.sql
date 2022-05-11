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


-- Volcando estructura de base de datos para biblioteca
CREATE DATABASE IF NOT EXISTS `biblioteca` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `biblioteca`;

-- Volcando estructura para tabla biblioteca.autors
CREATE TABLE IF NOT EXISTS `autors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacimiento` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla biblioteca.autors: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `autors` DISABLE KEYS */;
INSERT INTO `autors` (`id`, `nombre`, `nacimiento`, `created_at`, `updated_at`) VALUES
	(1, 'Ezequiel Metz', 1984, '2022-01-20 12:03:48', '2022-01-20 12:03:48'),
	(2, 'Kaley Satterfield Jr.', 1989, '2022-01-20 12:03:48', '2022-01-20 12:03:48'),
	(3, 'Dillon Blick II', 1954, '2022-01-20 12:03:48', '2022-01-20 12:03:48'),
	(4, 'Keenan Gibson MD', 1963, '2022-01-20 12:03:48', '2022-01-20 12:03:48'),
	(5, 'Laverne Kreiger', 1981, '2022-01-20 12:03:48', '2022-01-20 12:03:48');
/*!40000 ALTER TABLE `autors` ENABLE KEYS */;

-- Volcando estructura para tabla biblioteca.libros
CREATE TABLE IF NOT EXISTS `libros` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `editorial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `autor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla biblioteca.libros: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `libros` DISABLE KEYS */;
INSERT INTO `libros` (`id`, `titulo`, `editorial`, `precio`, `created_at`, `updated_at`, `autor_id`) VALUES
	(1, 'Aliza Smitham', 'Enim adipisci.', 13.86, '2022-01-20 12:03:48', '2022-01-20 12:03:48', 1),
	(2, 'Anita Moore', 'Modi aperiam eius.', 3.37, '2022-01-20 12:03:48', '2022-01-20 12:03:48', 1),
	(3, 'Carolyn Fahey', 'Inventore dolorem.', 17.62, '2022-01-20 12:03:48', '2022-01-20 12:03:48', 2),
	(4, 'Raquel Eichmann', 'Nam labore.', 10.35, '2022-01-20 12:03:48', '2022-01-20 12:03:48', 2),
	(5, 'Mertie O\'Connell', 'Deserunt enim laudantium.', 16.88, '2022-01-20 12:03:48', '2022-01-20 12:03:48', 3),
	(6, 'Prof. Rodolfo Ritchie III', 'Aut suscipit debitis.', 18.21, '2022-01-20 12:03:48', '2022-01-20 12:03:48', 3),
	(7, 'Alexandre Bergnaum', 'Dolore suscipit.', 17.42, '2022-01-20 12:03:48', '2022-01-20 12:03:48', 4),
	(8, 'Lelah Ledner', 'Distinctio dicta et.', 18.18, '2022-01-20 12:03:48', '2022-01-20 12:03:48', 4),
	(9, 'Cleo Kuhlman', 'Vitae sapiente.', 6.70, '2022-01-20 12:03:48', '2022-01-20 12:03:48', 5),
	(10, 'Mr. Thomas Champlin', 'Natus id sed.', 13.38, '2022-01-20 12:03:48', '2022-01-20 12:03:48', 5);
/*!40000 ALTER TABLE `libros` ENABLE KEYS */;

-- Volcando estructura para tabla biblioteca.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla biblioteca.migrations: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '1022_01_18_103548_crear_tabla_rol', 1),
	(2, '2014_10_12_000000_crear_tabla_usuarios', 1),
	(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(4, '2020_08_17_111511_crear_tabla_libros', 1),
	(5, '2020_08_24_101802_nuevo_campo_autor_libros', 1),
	(6, '2022_01_13_114041_crear_tabla_autores', 1),
	(7, '3022_01_19_183111_nuevo_campo_rol', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla biblioteca.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla biblioteca.personal_access_tokens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla biblioteca.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla biblioteca.roles: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla biblioteca.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuarios_login_unique` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla biblioteca.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
