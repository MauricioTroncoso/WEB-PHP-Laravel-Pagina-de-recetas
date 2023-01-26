-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 15:26:20
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `toastymoustache`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificaciones`
--

CREATE TABLE `clasificaciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_clasificacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clasificaciones`
--

INSERT INTO `clasificaciones` (`id`, `nombre_clasificacion`, `created_at`, `updated_at`) VALUES
(1, 'Ensaladas', NULL, NULL),
(2, 'Entradas', NULL, NULL),
(3, 'Aperitivos', NULL, NULL),
(4, 'Platos de fondo', NULL, NULL),
(5, 'Postres', NULL, NULL),
(6, 'Saludable', NULL, NULL),
(7, 'Vegano', NULL, NULL),
(8, 'Vegetariano', NULL, NULL);

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
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_ingrediente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`id`, `nombre_ingrediente`, `created_at`, `updated_at`) VALUES
(1, 'Leche Condensada', NULL, NULL),
(2, 'Jugo de Limón', NULL, NULL),
(3, 'Leche Evaporada', NULL, NULL),
(4, 'Galletas de Vino', NULL, NULL),
(5, 'Café', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mediciones_ingredientes`
--

CREATE TABLE `mediciones_ingredientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_medicion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mediciones_ingredientes`
--

INSERT INTO `mediciones_ingredientes` (`id`, `nombre_medicion`, `created_at`, `updated_at`) VALUES
(1, 'gr', NULL, NULL),
(2, 'ml', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_17_204558_create_clasificaciones_table', 1),
(6, '2022_10_17_204659_create_recetas_table', 1),
(7, '2022_10_17_204714_create_pasos_table', 1),
(8, '2022_10_17_204731_create_recetas_pasos_table', 1),
(9, '2022_10_17_204813_create_mediciones_ingredientes_table', 1),
(10, '2022_10_17_204836_create_recetas_clasificaciones_table', 1),
(11, '2022_10_17_204923_create_ingredientes_table', 1),
(12, '2022_10_17_205339_create_recetas_ingredientes_cantidades_table', 1),
(13, '2022_10_18_185805_create_usuarios_table', 1),
(14, '2022_11_13_165039_create_visor_recetas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasos`
--

CREATE TABLE `pasos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_paso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_paso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enlace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pasos`
--

INSERT INTO `pasos` (`id`, `nombre_paso`, `descripcion_paso`, `enlace`, `created_at`, `updated_at`) VALUES
(1, 'Paso 0-Carlota de Limón', 'El primer paso en toda receta es preparar bien el espacio, limpiar bien tus utensilios y tus manos', 'https://media.tenor.com/1-JwFnHhKaYAAAAC/lavarse-las-manos-burbuja.gif', NULL, NULL),
(2, 'Paso 1- Carlota de Limón', 'Mezclamos el jugo de limón recién exprimido junto a la leche condensada y la leche evaporada en una licuadora. Debe quedar una mezcla con la consistencia de una crema, como se muestra en el gif a continuación', 'https://media.tenor.com/k5ou6H_ntlYAAAAd/miku-hatsune-miku.gif', NULL, NULL),
(3, 'Paso 2- Carlota de Limón', 'Preparamos el Café y sin quemarse los dedos untamos las galletas dentro del café y las colocamos en nuestra fuente, intentemos que sea de la forma mas ordenada posible.', 'https://media.tenor.com/D41qzythtyQAAAAC/hatsune-miku-hatsune-miku-inside-your-walls.gif', NULL, NULL),
(4, 'Paso 3- Carlota de Limón', 'Ya con nuestra base de galletas listas, procedemos a colocar un poco de nuestra mezcla y con un mezquino nos ayudamos a que quede una capa lo mas uniforme posible', 'https://media.tenor.com/4mGl-qVGALAAAAAd/miku-anime.gif', NULL, NULL),
(5, 'Paso 4- Carlota de Limón', 'Repetimos el proceso hasta que no nos quede mezcla', 'https://media.tenor.com/D5nQKXfnSP0AAAAd/miku-hatsune-miku.gif', NULL, NULL),
(6, 'Paso 5- Carlota de Limón', 'Ya listo el armado procedemos con el decorado! puedes decorar con lo que mas te guste, en mi caso use cacao amargo en polvo', 'https://media.tenor.com/RYI4doDdHNwAAAAC/hatsune-miku.gif', NULL, NULL),
(7, 'Paso 6- Carlota de Limón', 'Listo el decorado directo al refrigerador por al menos 4 horas para que quede bien firme y sabroso', 'https://media.tenor.com/I_1R0Sf588QAAAAd/hatsune-miku-hatsune.gif', NULL, NULL),
(8, 'Paso 7- Carlota de Limón', 'Y LISTO! nuestra Carlota de Limón esta lista para servir con el te o café que mas te guste. Espero lo disfrutes~', 'https://media.tenor.com/SsspmiDwEqEAAAAd/hatsune-miku-miku.gif', NULL, NULL),
(9, 'paso 1- El pepe', 'asda', 'asdasd', NULL, NULL);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_receta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`id`, `nombre_receta`, `video`, `disponible`, `created_at`, `updated_at`) VALUES
(1, 'Carlota de Limon', 'https://youtu.be/GQHIzuqD3-4', 'Si', NULL, '2022-11-15 21:45:37'),
(2, 'El pepe', 'https://youtu.be/nkgg1W5zyNA', 'si', NULL, '2022-11-17 17:12:43'),
(3, 'receta 3', 'si', 'Si', NULL, NULL),
(4, 'receta 4', 'si', 'mo', NULL, '2022-11-17 17:26:00'),
(5, 'receta 5', 'si', 'no', NULL, '2022-11-17 17:25:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas_clasificaciones`
--

CREATE TABLE `recetas_clasificaciones` (
  `id_receta` bigint(20) UNSIGNED NOT NULL,
  `id_clasificacion` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `recetas_clasificaciones`
--

INSERT INTO `recetas_clasificaciones` (`id_receta`, `id_clasificacion`, `created_at`, `updated_at`) VALUES
(1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas_ingredientes_cantidades`
--

CREATE TABLE `recetas_ingredientes_cantidades` (
  `id_receta` bigint(20) UNSIGNED NOT NULL,
  `id_ingrediente` bigint(20) UNSIGNED NOT NULL,
  `cantidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_medicion` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `recetas_ingredientes_cantidades`
--

INSERT INTO `recetas_ingredientes_cantidades` (`id_receta`, `id_ingrediente`, `cantidad`, `id_medicion`, `created_at`, `updated_at`) VALUES
(1, 1, '397', 1, NULL, NULL),
(1, 2, '200', 2, NULL, NULL),
(1, 3, '400', 1, NULL, NULL),
(1, 4, '250 (Yo uso paquete y medio de 160 gr)', 1, NULL, NULL),
(1, 5, 'Una cucharita', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas_pasos`
--

CREATE TABLE `recetas_pasos` (
  `id_receta` bigint(20) UNSIGNED NOT NULL,
  `id_paso` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `recetas_pasos`
--

INSERT INTO `recetas_pasos` (`id_receta`, `id_paso`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 2, NULL, NULL),
(1, 3, NULL, NULL),
(1, 4, NULL, NULL),
(1, 5, NULL, NULL),
(1, 6, NULL, NULL),
(1, 7, NULL, NULL),
(1, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_usuario` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo_usuario`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.cl', NULL, '$2y$10$EYK2tft2HMfL.JqSTv8pB.yQDT62lznIoqroO0FN22My06VNgbsOO', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_usuario` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visor_recetas`
--

CREATE TABLE `visor_recetas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasificaciones`
--
ALTER TABLE `clasificaciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clasificaciones_nombre_clasificacion_unique` (`nombre_clasificacion`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mediciones_ingredientes`
--
ALTER TABLE `mediciones_ingredientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mediciones_ingredientes_nombre_medicion_unique` (`nombre_medicion`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pasos`
--
ALTER TABLE `pasos`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recetas_clasificaciones`
--
ALTER TABLE `recetas_clasificaciones`
  ADD PRIMARY KEY (`id_receta`,`id_clasificacion`),
  ADD KEY `recetas_clasificaciones_id_clasificacion_foreign` (`id_clasificacion`);

--
-- Indices de la tabla `recetas_ingredientes_cantidades`
--
ALTER TABLE `recetas_ingredientes_cantidades`
  ADD PRIMARY KEY (`id_receta`,`id_ingrediente`),
  ADD KEY `recetas_ingredientes_cantidades_id_ingrediente_foreign` (`id_ingrediente`),
  ADD KEY `recetas_ingredientes_cantidades_id_medicion_foreign` (`id_medicion`);

--
-- Indices de la tabla `recetas_pasos`
--
ALTER TABLE `recetas_pasos`
  ADD PRIMARY KEY (`id_receta`,`id_paso`),
  ADD KEY `recetas_pasos_id_paso_foreign` (`id_paso`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visor_recetas`
--
ALTER TABLE `visor_recetas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clasificaciones`
--
ALTER TABLE `clasificaciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `mediciones_ingredientes`
--
ALTER TABLE `mediciones_ingredientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pasos`
--
ALTER TABLE `pasos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `visor_recetas`
--
ALTER TABLE `visor_recetas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `recetas_clasificaciones`
--
ALTER TABLE `recetas_clasificaciones`
  ADD CONSTRAINT `recetas_clasificaciones_id_clasificacion_foreign` FOREIGN KEY (`id_clasificacion`) REFERENCES `clasificaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recetas_clasificaciones_id_receta_foreign` FOREIGN KEY (`id_receta`) REFERENCES `recetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recetas_ingredientes_cantidades`
--
ALTER TABLE `recetas_ingredientes_cantidades`
  ADD CONSTRAINT `recetas_ingredientes_cantidades_id_ingrediente_foreign` FOREIGN KEY (`id_ingrediente`) REFERENCES `ingredientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recetas_ingredientes_cantidades_id_medicion_foreign` FOREIGN KEY (`id_medicion`) REFERENCES `mediciones_ingredientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recetas_ingredientes_cantidades_id_receta_foreign` FOREIGN KEY (`id_receta`) REFERENCES `recetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recetas_pasos`
--
ALTER TABLE `recetas_pasos`
  ADD CONSTRAINT `recetas_pasos_id_paso_foreign` FOREIGN KEY (`id_paso`) REFERENCES `pasos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recetas_pasos_id_receta_foreign` FOREIGN KEY (`id_receta`) REFERENCES `recetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
