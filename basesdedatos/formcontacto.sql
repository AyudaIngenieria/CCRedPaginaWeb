-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-07-2017 a las 16:37:57
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `formcontacto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `id_contacto` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `apellido` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `correo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `telefono` bigint(11) DEFAULT NULL,
  `delmpio` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `estado` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cod_postal` int(11) DEFAULT NULL,
  `asunto` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mensaje` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_contacto`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `apellido`, `correo`, `telefono`, `delmpio`, `estado`, `cod_postal`, `asunto`, `mensaje`) VALUES
(1, 'Samuel', 'Bautista', 'samu.br0996@gmail.com', 5534189634, 'CDMX', 'CDMX', 15260, 'Hola a todos', 'Hola mundo ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
