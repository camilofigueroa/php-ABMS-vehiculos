-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2016 a las 00:40:22
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `documento` varchar(20) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `fecha_nacimiento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`documento`, `nombre_completo`, `fecha_nacimiento`) VALUES
('1212', 'Andrea Romero', '1900-01-01 00:00:00'),
('121212', 'Esteban MAnizales', '2016-01-01 00:00:00'),
('1234', 'Maria', '2016-01-01 00:00:00'),
('3242342', 'Camilo Figueroa', '0000-00-00 00:00:00'),
('423534643', 'Fernando', '0000-00-00 00:00:00'),
('444', 'Fernando Rojas', '1980-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_vehiculos`
--

CREATE TABLE `tb_vehiculos` (
  `placa` varchar(10) NOT NULL,
  `modelo` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `documento` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_vehiculos`
--

INSERT INTO `tb_vehiculos` (`placa`, `modelo`, `color`, `fecha_ingreso`, `documento`) VALUES
('12mmmm', 2005, 'Rojo', '2016-01-01 00:00:00', '1212'),
('345rtt', 2016, 'Azul', '2016-01-01 00:00:00', '3242342'),
('4567', 2016, 'Rojo', '2016-01-01 00:00:00', '121212'),
('456tgh', 2005, 'Negro', '2016-01-01 00:00:00', '121212'),
('BDF56', 2016, 'Blanco', '2016-09-29 00:00:00', '1234'),
('fds554', 2000, 'Rojo', '0000-00-00 00:00:00', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `tb_vehiculos`
--
ALTER TABLE `tb_vehiculos`
  ADD PRIMARY KEY (`placa`),
  ADD KEY `index_documento` (`documento`) USING BTREE;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_vehiculos`
--
ALTER TABLE `tb_vehiculos`
  ADD CONSTRAINT `fk_usuarios_vehiculos` FOREIGN KEY (`documento`) REFERENCES `tb_usuarios` (`documento`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
