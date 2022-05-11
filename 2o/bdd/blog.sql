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


-- Volcando estructura de base de datos para blog
CREATE DATABASE IF NOT EXISTS `blog` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `blog`;

-- Volcando estructura para tabla blog.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla blog.migrations: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(3, '2021_12_14_093052_crear_tabla_posts', 1),
	(4, '2021_12_15_082327_nuevo_campo_posts', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla blog.personal_access_tokens
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

-- Volcando datos para la tabla blog.personal_access_tokens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla blog.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_titulo_unique` (`titulo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla blog.posts: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `titulo`, `contenido`, `created_at`, `updated_at`, `user_id`) VALUES
	(1, 'Fugit esse omnis aut quis.', 'Aut fuga quas ut qui. Ut perferendis exercitationem perferendis asperiores facere aut. Quo perferendis id dolor dolores.', '2022-01-19 09:57:44', '2022-01-19 09:57:44', '1'),
	(2, 'Autem officiis est.', 'Veritatis dolores tenetur qui iure. A cumque ex voluptatem possimus. Et qui eveniet est aut voluptatem placeat. Recusandae velit id distinctio totam est cumque sint.', '2022-01-19 09:57:44', '2022-01-19 09:57:44', '1'),
	(3, 'Officia iure rerum.', 'Quisquam autem eveniet dignissimos cumque et dolorum quo molestiae. Dolor molestiae accusamus repellat porro corporis. Reprehenderit laudantium earum reiciendis consequuntur ut et.', '2022-01-19 09:57:44', '2022-01-19 09:57:44', '1'),
	(4, 'Quo unde sunt.', 'Sit quis velit accusamus consequatur pariatur. Debitis aliquid odio quam. Facere ad fugiat vitae repellat voluptates voluptatem. Sed repudiandae dolore voluptatem aperiam eum.', '2022-01-19 09:57:44', '2022-01-19 09:57:44', '1'),
	(5, 'Rerum ea et ut.', 'Nemo dolorem dolorem eaque. Ipsam vel ut quis et error. Illo voluptas minus deserunt culpa aut.', '2022-01-19 09:57:44', '2022-01-19 09:57:44', '1'),
	(6, 'Neque omnis pariatur iste.', 'Aut repudiandae qui numquam ut maiores deserunt dolores. Quidem qui distinctio sit provident. Ut sequi voluptatem in iusto.', '2022-01-19 09:57:44', '2022-01-19 09:57:44', '1'),
	(7, 'Quod dicta quisquam et.', 'Qui in voluptatem quia ea molestiae in quaerat. Nesciunt nam impedit molestiae quis ut. Sunt tempore praesentium laboriosam laboriosam similique dolores ipsa eveniet.', '2022-01-19 09:57:44', '2022-01-19 09:57:44', '1');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Volcando estructura para tabla blog.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_login_unique` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla blog.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `login`, `password`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '$2y$10$yLOgFSgvj7BSO0foPGcvceP1FEhcTVFyVRSO.6UKtajH6oQJriokK', '2022-01-19 09:57:44', '2022-01-19 09:57:44');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
