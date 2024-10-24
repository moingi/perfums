-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2024 a las 15:09:59
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_perfums`
--
CREATE DATABASE IF NOT EXISTS `db_perfums` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_perfums`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

DROP TABLE IF EXISTS `marcas`;
CREATE TABLE `marcas` (
  `id_marcas` int(255) NOT NULL,
  `name_marca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marcas`, `name_marca`) VALUES
(2, 'Carolina Herrera'),
(1, 'Jean Paul Gaultier');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfumes`
--

DROP TABLE IF EXISTS `perfumes`;
CREATE TABLE `perfumes` (
  `id_perf` int(255) NOT NULL,
  `name_perf` varchar(255) NOT NULL,
  `marca_perf` varchar(255) NOT NULL,
  `disenador_perf` varchar(255) NOT NULL,
  `genero_perf` varchar(255) NOT NULL,
  `imagen_perf` varchar(255) NOT NULL,
  `precio_perf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfumes`
--

INSERT INTO `perfumes` (`id_perf`, `name_perf`, `marca_perf`, `disenador_perf`, `genero_perf`, `imagen_perf`, `precio_perf`) VALUES
(1, 'Jean Paul', 'Jean Paul Gaultier', 'Jean', 'woman', 'pruebas.png', '0'),
(2, 'Bad Boy Le Perfum', 'Carolina Herrera', 'Quentin Bisch', 'man', 'pruebas.png', '0'),
(3, 'Bad Boy Le Perfum', 'Carolina Herrera', 'Quentin Bisch', 'man', 'pruebas.png', '0'),
(4, 'Bad Boy Le Perfum', 'Carolina Herrera', 'Quentin Bisch', 'man', 'pruebas.png', '0'),
(5, 'Bad Boy Le Perfum', 'Carolina Herrera', 'Quentin Bisch', 'man', 'pruebas.png', '0'),
(6, 'Bad Boy Le Perfum', 'Carolina Herrera', 'Quentin Bisch', 'man', 'pruebas.png', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `lastname`, `mail`, `passwd`, `fecha_nacimiento`) VALUES
(34, 'test', 'test', 'test@test.com', 'test', '1111-01-01'),
(35, 'try', 'try', 'pepe@pepe.cpm', 'try', '2000-01-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marcas`),
  ADD KEY `name_marca` (`name_marca`);

--
-- Indices de la tabla `perfumes`
--
ALTER TABLE `perfumes`
  ADD PRIMARY KEY (`id_perf`),
  ADD KEY `fk_perfumes_marcas` (`marca_perf`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `perfumes`
--
ALTER TABLE `perfumes`
  ADD CONSTRAINT `fk_perfumes_marcas` FOREIGN KEY (`marca_perf`) REFERENCES `marcas` (`name_marca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
