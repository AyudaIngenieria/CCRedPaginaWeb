-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-06-2017 a las 03:20:39
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tiendaccred`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precio` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cuanto_hay` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `cuanto_hay`, `imagen`, `fecha`) VALUES
(1, 'Cable UTP (por metro)', 'Transmite 1 Gb/s | Ancho de banda: 250 MHz | 4 pares trenzados | AWG: 8/24', '20', '5', 'img/tienda/productos/cableutp.jpg', '2017-05-29'),
(2, 'Cable de red ultra plano UTP CAT 5 de 10m', 'Transmite voz y datos hasta a 100 Mbps | 8 hilos calibre 24 AWG cada uno', '270', '2', 'img/tienda/productos/cableinternet.jpg', '2017-05-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pass` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `permisos` int(1) DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `pass`, `permisos`, `imagen`, `fecha`) VALUES
(1, 'Samuel Bautista', 'samuelbr96', 'samuelbr96', 1, NULL, '2017-06-11'),
(2, 'Kevin Gonzalez', 'roshacz', 'roshacz', 0, NULL, '2017-06-11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
