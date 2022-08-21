-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-08-2022 a las 01:52:48
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grow`
--

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_02_26_071008_create_usuarios_table', 1),
(3, '2022_04_21_155016_create_organizaciones_table', 1),
(4, '2022_04_25_175526_create_ventas_table', 1),
(5, '2022_08_16_212404_create_productos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizaciones`
--

CREATE TABLE `organizaciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `Logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Calle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No_Interior` int(11) DEFAULT NULL,
  `No_Exterior` int(11) NOT NULL,
  `CodigoPostal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Colonia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Giro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `img`, `precio`, `created_at`, `updated_at`) VALUES
(1, 'Tornillo', 'Tonrillo de 5 pulgadas', 'tornillo.jpg', 5.00, '2022-08-21 03:55:57', '2022-08-21 03:55:57'),
(2, 'tubo', 'tubo de metal', 'tubo.jpg', 30.50, '2022-08-21 03:56:14', '2022-08-21 03:56:14'),
(3, 'Guantes', 'Guantes de uso rudo, color negro', 'guantes.jpg', 20.50, '2022-08-21 04:00:21', '2022-08-21 04:00:21'),
(4, 'Lija', 'Lija N8 para madera', 'lija.jpg', 30.00, '2022-08-21 04:00:54', '2022-08-21 04:00:54'),
(5, 'pinzas', 'pinzas', 'pinzas.png', 80.50, '2022-08-21 04:01:47', '2022-08-21 04:01:47'),
(6, 'Resistol', 'Resistol Blanco super potente', 'resistol.png', 25.50, '2022-08-21 04:02:34', '2022-08-21 04:02:34'),
(7, 'Taladro', 'Taladro 500w Uso rudo', 'taladro.png', 456.50, '2022-08-21 04:05:11', '2022-08-21 04:05:11'),
(8, 'Pala', 'Pala Industrial Uso rudo', 'pala.png', 150.00, '2022-08-21 04:05:31', '2022-08-21 04:05:31'),
(9, 'Caja de Herramientas', 'Caja con mutiples dados para mantenimiento de automoviles,etc.', 'caja.png', 542.50, '2022-08-21 04:06:16', '2022-08-21 04:06:16'),
(10, 'Candado', 'Candado Industrial', 'candado.png', 80.50, '2022-08-21 04:06:55', '2022-08-21 04:06:55'),
(11, 'Cable', 'Cable de instalación', 'cable.jpg', 30.50, '2022-08-21 04:07:17', '2022-08-21 04:07:17'),
(12, 'Bomba', 'Bomba para Agua', 'bomba.png', 620.00, '2022-08-21 04:08:28', '2022-08-21 04:08:28'),
(13, 'Martillo', 'Martillo de acero, buena calidad', 'martillo.jpg', 120.50, '2022-08-21 04:08:47', '2022-08-21 04:08:47'),
(14, 'Metro', 'Metro de 10m', 'metro.png', 100.00, '2022-08-21 04:09:04', '2022-08-21 04:09:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fn` date NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terminos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `tipo`, `email`, `password`, `fn`, `foto`, `terminos`, `created_at`, `updated_at`) VALUES
(1, 'Rudy Samuel', 'Admin', 'admin@admin.com', '$2y$10$JaAnlggDp0rWFAq8g.0izOXzhLo8UHgqtiLgjNeeKmMlJX35Nt6G.', '2022-08-24', 'patito.JPG', 'on', '2022-08-21 03:55:33', '2022-08-21 03:55:33'),
(2, 'Patrizia Nava', 'Usuario', 'Paty123@gmail.com', '$2y$10$90X3Dkk3tTcba970Tr8ZcO9l.nia9DQDst4OjlPCfvSxDzHARjvX2', '2022-08-17', 'usuario.jpg', 'on', '2022-08-21 04:22:20', '2022-08-21 04:22:20'),
(3, 'Juan Daniel', 'Usuario', 'eduardo321@gmail.com', '$2y$10$goHCnTB9Eym77KEcxt7bgeE4Y15BIDqdS2iBHTwjPCzm02S9Zyu5i', '2022-08-10', 'e1.jpg', 'on', '2022-08-21 04:26:39', '2022-08-21 04:26:39'),
(4, 'Guadalupe Hernandez', 'Usuario', 'lupita123@gmail.com', '$2y$10$UAyV8iKBQ03tS9.P1Dpl7.diBkCfaeAwFK/ge3kXzVWVMm1S.QKpG', '2022-08-25', 'candado.png', 'on', '2022-08-21 04:27:09', '2022-08-21 04:27:09'),
(5, 'Roberto', 'Usuario', 'usuario@utvtol.com', '$2y$10$CbSLz7JZG2Ufeivu6ITiiOk9P9vUGxyPSlApAdTTdj2G58qf7P8Ee', '2022-08-16', 'caja.png', 'on', '2022-08-21 04:27:37', '2022-08-21 04:27:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `id_user`, `id_producto`, `cantidad`, `total`, `created_at`, `updated_at`) VALUES
(4, 1, 4, 4, 120.00, '2022-08-21 04:28:31', '2022-08-21 04:28:31'),
(5, 3, 5, 1, 80.50, '2022-08-21 04:28:38', '2022-08-21 04:28:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organizaciones`
--
ALTER TABLE `organizaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `organizaciones`
--
ALTER TABLE `organizaciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
