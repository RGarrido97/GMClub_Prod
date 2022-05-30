-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2022 a las 02:11:34
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gmclub`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_club` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id`, `id_user`, `id_club`, `titulo`, `contenido`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 8, 2, 'Presentación', 'Quedan pocas horas para presentar el Proyecto Final.', 'junta', '2022-05-29 21:21:43', '2022-05-29 21:21:43'),
(2, 12, 2, 'Queda poco para Entregar el Proyecto', 'Esperemos todos un Aprobado con Buena Nota', 'entrenador', '2022-05-29 21:42:36', '2022-05-29 21:42:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clubs`
--

CREATE TABLE `clubs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `federacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `escudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clubs`
--

INSERT INTO `clubs` (`id`, `nombre`, `localidad`, `provincia`, `federacion`, `escudo`, `created_at`, `updated_at`) VALUES
(2, 'AE La Salut Pere Gol', 'Badalona', 'Barcelona', 'Federación Catalana Fútbol', 'AE_Pere_Gol.jpg', '2022-05-29 21:12:48', '2022-05-29 21:12:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_club` bigint(20) UNSIGNED NOT NULL,
  `id_entrenador` bigint(20) UNSIGNED NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `id_club`, `id_entrenador`, `categoria`, `letra`, `division`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 2, 14, 'Escuela', 'A', 'CADECA', 'f7', '2022-05-29 21:27:36', '2022-05-29 21:27:36'),
(2, 2, 14, 'Prebenjamín', 'A', 'CADECA', 'f7', '2022-05-29 21:47:41', '2022-05-29 21:47:41'),
(3, 2, 14, 'Benjamín', 'A', 'Primera Divisió', 'f7', '2022-05-29 21:47:55', '2022-05-29 21:47:55'),
(4, 2, 14, 'Aleví', 'A', 'Primera Divisió', 'f7', '2022-05-29 21:48:00', '2022-05-29 21:48:00'),
(5, 2, 14, 'Infantil', 'A', 'Segona Divisió', 'f11', '2022-05-29 21:48:07', '2022-05-29 21:48:07'),
(6, 2, 14, 'Cadete', 'A', 'Primera Divisió', 'f11', '2022-05-29 21:48:23', '2022-05-29 21:48:23'),
(7, 2, 14, 'Juvenil', 'A', 'Divisió d\'Honor', 'f11', '2022-05-29 21:48:38', '2022-05-29 21:48:38'),
(8, 2, 14, 'Amateur', 'A', 'Tercera Catalana', 'f11', '2022-05-29 21:48:45', '2022-05-29 21:48:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_club` bigint(20) UNSIGNED NOT NULL,
  `dia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `franja` int(11) NOT NULL,
  `hora_inicio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_fin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `id_club`, `dia`, `franja`, `hora_inicio`, `hora_fin`, `tipo`, `campo1`, `campo2`, `campo3`, `campo4`, `created_at`, `updated_at`) VALUES
(1, 2, 'Lunes', 1, '17:45', '19:00', 'f7', '2', '3', '1', '4', '2022-05-29 21:56:52', '2022-05-29 21:56:52'),
(2, 2, 'Martes', 2, '19:00', '20:15', 'f11', '5', '6', NULL, NULL, '2022-05-29 21:57:11', '2022-05-29 21:57:11'),
(3, 2, 'Miercoles', 3, '20:15', '21:30', 'f11', '7', '8', NULL, NULL, '2022-05-29 21:57:35', '2022-05-29 21:57:35'),
(4, 2, 'jueves', 4, '21:30', '22:45', 'f11', '8', '7', NULL, NULL, '2022-05-29 21:57:56', '2022-05-29 21:57:56'),
(5, 2, 'viernes', 1, '17:45', '19:00', 'f7', '2', '1', '3', '4', '2022-05-29 21:58:17', '2022-05-29 21:58:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_club` bigint(20) UNSIGNED NOT NULL,
  `id_equipo` bigint(20) UNSIGNED NOT NULL,
  `id_entrenador` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goles` int(11) NOT NULL DEFAULT 0,
  `asistencias` int(11) NOT NULL DEFAULT 0,
  `ta` int(11) NOT NULL DEFAULT 0,
  `tr` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `id_club`, `id_equipo`, `id_entrenador`, `nombre`, `apellidos`, `goles`, `asistencias`, `ta`, `tr`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 14, 'Daniel', 'Martín', 2, 0, 1, 2, '2022-05-29 21:27:48', '2022-05-29 22:04:29'),
(2, 2, 1, 14, 'Raúl', 'Garrido', 0, 2, 2, 1, '2022-05-29 21:27:56', '2022-05-29 22:04:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2002_04_27_095835_create_clubs_table', 1),
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2022_04_27_100335_create_equipos_table', 1),
(17, '2022_04_27_100821_create_jugadores_table', 1),
(18, '2022_04_27_101021_create_pagos_table', 1),
(19, '2022_05_06_093406_create_blogs_table', 1),
(20, '2022_05_26_080006_create_horarios_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jugador` bigint(20) UNSIGNED NOT NULL,
  `id_club` bigint(20) UNSIGNED NOT NULL,
  `preinscripcion` int(11) NOT NULL DEFAULT 0,
  `pago1` int(11) NOT NULL DEFAULT 0,
  `pago2` int(11) NOT NULL DEFAULT 0,
  `pago3` int(11) NOT NULL DEFAULT 0,
  `pago4` int(11) NOT NULL DEFAULT 0,
  `pago5` int(11) NOT NULL DEFAULT 0,
  `pago6` int(11) NOT NULL DEFAULT 0,
  `pago7` int(11) NOT NULL DEFAULT 0,
  `pago8` int(11) NOT NULL DEFAULT 0,
  `pago9` int(11) NOT NULL DEFAULT 0,
  `pago10` int(11) NOT NULL DEFAULT 0,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `id_jugador`, `id_club`, `preinscripcion`, `pago1`, `pago2`, `pago3`, `pago4`, `pago5`, `pago6`, `pago7`, `pago8`, `pago9`, `pago10`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2022-05-29 21:27:48', '2022-05-29 21:32:59'),
(2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2022-05-29 21:27:56', '2022-05-29 21:27:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_club` bigint(20) UNSIGNED DEFAULT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `apellidos`, `id_club`, `rol`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Raúl', 'Garrido', 2, 'Presidente', 'presidente@prueba.com', NULL, '$2y$10$FVp/1YBV3bxCgP6ez7YxHOyL6aoWi1Hd42M6uDkk/mf.67NVq2bEK', NULL, '2022-05-29 21:11:59', '2022-05-29 21:12:48'),
(9, 'Secretario', 'Prueba Prueba', 2, 'Secretario', 'secretario@prueba.com', NULL, '$2y$10$IohXW.eo7nxxHZ2g22JfHeiVUgE68Q51U1G3mn2voe5GXEPbykkLO', NULL, '2022-05-29 21:19:10', '2022-05-29 21:19:10'),
(10, 'Tesorero', 'Prueba Prueba', 2, 'Tesorero', 'tesorero@prueba.com', NULL, '$2y$10$6FwMk5Sw6y6JxvV2Z4XdR.g9Dl4fTwxhVKc9EOKVaJpHKihxX067G', NULL, '2022-05-29 21:19:22', '2022-05-29 21:19:22'),
(11, 'Vocal', 'Prueba Prueba', 2, 'Vocal', 'vocal@prueba.com', NULL, '$2y$10$lKfUl89wnLhdaDphgxVJzuSF8VHDL34bKPsm4zYtYzAgGNmatKAMi', NULL, '2022-05-29 21:19:34', '2022-05-29 21:19:34'),
(12, 'Director Deportivo', 'Prueba Prueba', 2, 'Director Deportivo', 'directordeportivo@prueba.com', NULL, '$2y$10$Hvi0Qk2j16e/6gS6noLjRummW/KBXSqFdnUHIMcqsBqA7rbE.gYfe', NULL, '2022-05-29 21:19:46', '2022-05-29 21:19:46'),
(13, 'Coordinador', 'Prueba Prueba', 2, 'Coordinador', 'coordinador@prueba.com', NULL, '$2y$10$Ht9sDkSvbuQtV.jPSHiuG.RI3IbNKk.I1wVTplxcPPgK3oS3iL5nO', NULL, '2022-05-29 21:27:09', '2022-05-29 21:27:09'),
(14, 'Entrenador', 'Prueba Prueba', 2, 'Entrenador', 'entrenador@prueba.com', NULL, '$2y$10$JRHuVrbi67ldtb2wMvTSfum.XMBid7HsB5cbCbUHCGl5.Lqcb1VOS', NULL, '2022-05-29 21:27:29', '2022-05-29 21:27:29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_id_user_foreign` (`id_user`),
  ADD KEY `blogs_id_club_foreign` (`id_club`);

--
-- Indices de la tabla `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipos_id_club_foreign` (`id_club`),
  ADD KEY `equipos_id_entrenador_foreign` (`id_entrenador`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `horarios_id_club_foreign` (`id_club`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jugadores_id_club_foreign` (`id_club`),
  ADD KEY `jugadores_id_equipo_foreign` (`id_equipo`),
  ADD KEY `jugadores_id_entrenador_foreign` (`id_entrenador`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pagos_id_jugador_foreign` (`id_jugador`),
  ADD KEY `pagos_id_club_foreign` (`id_club`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_club_foreign` (`id_club`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_id_club_foreign` FOREIGN KEY (`id_club`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blogs_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_id_club_foreign` FOREIGN KEY (`id_club`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `equipos_id_entrenador_foreign` FOREIGN KEY (`id_entrenador`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_id_club_foreign` FOREIGN KEY (`id_club`) REFERENCES `clubs` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `jugadores_id_club_foreign` FOREIGN KEY (`id_club`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jugadores_id_entrenador_foreign` FOREIGN KEY (`id_entrenador`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `jugadores_id_equipo_foreign` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_id_club_foreign` FOREIGN KEY (`id_club`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pagos_id_jugador_foreign` FOREIGN KEY (`id_jugador`) REFERENCES `jugadores` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_club_foreign` FOREIGN KEY (`id_club`) REFERENCES `clubs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
