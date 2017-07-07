-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-07-2017 a las 16:40:12
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `precio` varchar(10) DEFAULT NULL,
  `cuanto_hay` varchar(10) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `imagen`, `nombre`, `descripcion`, `precio`, `cuanto_hay`, `fecha`) VALUES
(1, 'img/tienda/productos/cableutp.jpg', 'Cable UTP (por metro)', 'Transmite 1 Gb/s | Ancho de banda: 250 MHz | 4 pares trenzados | AWG: 8/24', '20', '5', '2017-05-29'),
(2, 'img/tienda/productos/cableinternet.jpg', 'Cable de red ultra plano UTP CAT 5 de 10m', 'Transmite voz y datos hasta a 100 Mbps | 8 hilos calibre 24 AWG cada uno', '270', '2', '2017-05-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `permisos` int(1) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `pass`, `permisos`, `imagen`, `fecha`) VALUES
(1, 'Samuel Bautista', 'samuelbr96', 'samuelbr96', 1, NULL, '2017-06-11'),
(2, 'Kevin Gonzalez', 'roshacz', 'roshacz', 0, NULL, '2017-06-11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
