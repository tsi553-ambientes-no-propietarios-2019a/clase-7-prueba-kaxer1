-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2019 a las 09:10:22
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebab1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `id_tienda_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigo`, `nombre`, `tipo`, `cantidad`, `precio`, `id_tienda_fk`) VALUES
(1, 'capi', 'Vestimenta', 4, 3, 2),
(3, 'iMac', 'Vestimenta', 30, 5, 1),
(5, 'iPhone', 'Alimento', 40, 158, 1),
(32, 'celu', 'Salud', 13, 1214, 5),
(39, 'leche', 'Alimento', 400, 3, 4),
(45, 'iclone', 'Salud', 23, 390, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `id_tienda` int(11) NOT NULL,
  `nom_tienda` varchar(50) NOT NULL,
  `user_tienda` varchar(50) NOT NULL,
  `clave_tienda` varchar(255) NOT NULL,
  `rep_clave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='registro de tienda con su usuario';

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`id_tienda`, `nom_tienda`, `user_tienda`, `clave_tienda`, `rep_clave`) VALUES
(1, 'apple', 'kevin', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'marvel', 'mar', '76d80224611fc919a5d54f0ff9fba446', '76d80224611fc919a5d54f0ff9fba446'),
(3, 'dell', 'new', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(4, 'tony SA', 'ale', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(5, 'sony', 'all', 'a181a603769c1f98ad927e7367c7aa51', 'a181a603769c1f98ad927e7367c7aa51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id_tienda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `id_tienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
