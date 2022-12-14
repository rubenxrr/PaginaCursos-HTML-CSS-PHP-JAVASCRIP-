-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-12-2022 a las 17:02:40
-- Versión del servidor: 10.5.16-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u278228443_cursos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `usuario` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_p` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_m` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c`
--

CREATE TABLE `c` (
  `id` int(3) NOT NULL,
  `usuario_reg` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_reg` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_reg` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `java`
--

CREATE TABLE `java` (
  `id` int(3) NOT NULL,
  `usuario_reg` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_reg` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_reg` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `javascript`
--

CREATE TABLE `javascript` (
  `id` int(3) NOT NULL,
  `usuario_reg` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_reg` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_reg` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `python`
--

CREATE TABLE `python` (
  `id` int(3) NOT NULL,
  `usuario_reg` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_reg` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_reg` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(3) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido_p` varchar(20) NOT NULL,
  `apellido_m` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `estatus` varchar(20) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `c`
--
ALTER TABLE `c`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `java`
--
ALTER TABLE `java`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `javascript`
--
ALTER TABLE `javascript`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `python`
--
ALTER TABLE `python`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `c`
--
ALTER TABLE `c`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `java`
--
ALTER TABLE `java`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `javascript`
--
ALTER TABLE `javascript`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `python`
--
ALTER TABLE `python`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
