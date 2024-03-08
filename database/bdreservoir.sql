-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2022 a las 06:36:47
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdreservoir`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `mesa` int(20) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`mesa`, `descripcion`) VALUES
(1, 'Pizza Italiana Familiar Doble Queso'),
(2, 'Entrada Ensalada Cesar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `rut`, `nombre`, `fecha_hora`) VALUES
(277, '13245234', 'Alfred salas', '2022-04-25 10:43:45'),
(278, '1232343456', 'donpatito', '2022-04-25 11:25:35'),
(280, '1232343456', 'pato', '2022-04-27 23:37:51'),
(282, '1232343456', 'prueba', '2022-04-28 00:11:03'),
(302, '1232343456', 'pato', '2022-04-29 01:04:17'),
(303, '1232343456', 'producto1', '2022-04-29 22:52:44'),
(342, '1232343456', 'robinson patricio', '2022-05-01 21:15:25'),
(343, '1232343456', 'robinson patricio', '2022-05-01 21:16:34'),
(344, '1232343456', 'robinson patricio', '2022-05-01 21:18:11'),
(345, '1232343456', 'robinson patricio', '2022-05-01 21:18:55'),
(346, '1232343456', 'robinson patricio', '2022-05-01 21:19:24'),
(347, '1232343456', 'pato', '2022-05-01 21:28:37'),
(348, '1232343456', 'pato', '2022-05-01 21:29:24'),
(349, '1232343456', 'pato', '2022-05-01 21:29:28'),
(350, '1232343456', 'pato', '2022-05-01 21:29:56'),
(351, '1232343456', 'pato', '2022-05-01 21:30:20'),
(352, '1232343456', 'pato', '2022-05-01 21:32:00'),
(353, '1232343456', 'pato', '2022-05-01 21:32:47'),
(354, '1232343456', 'mortiz', '2022-05-01 21:40:05'),
(355, '8973408348', 'pato', '2022-05-01 21:57:47'),
(356, '8973408348', 'pato', '2022-05-01 21:58:38'),
(357, '8973408348', 'pato', '2022-05-01 21:58:45'),
(358, '8973408348', 'pato', '2022-05-01 21:59:45'),
(359, '8973408348', 'pato', '2022-05-01 21:59:51'),
(360, '13245234', 'robinson patricio', '2022-05-01 22:00:09'),
(361, '13245234', 'robinson patricio', '2022-05-01 22:00:40'),
(362, '13245234', 'robinson patricio', '2022-05-01 22:00:44'),
(363, '13245234', 'robinson patricio', '2022-05-01 22:01:02'),
(364, '13245234', ',nlkn', '2022-05-01 22:01:49'),
(365, '13245234', ',nlkn', '2022-05-01 22:02:31'),
(366, '13245234', ',nlkn', '2022-05-01 22:02:44'),
(367, '13245234', ',nlkn', '2022-05-01 22:03:15'),
(368, '13245234', ',nlkn', '2022-05-01 22:08:50'),
(369, '13245234', 'francys', '2022-05-01 22:09:39'),
(370, '13245234', 'pato', '2022-05-01 23:26:38'),
(371, '1232343456', 'robinson patricio', '2022-05-02 00:05:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`mesa`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=372;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
