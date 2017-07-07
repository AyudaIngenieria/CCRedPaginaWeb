-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-07-2017 a las 16:09:43
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ccred_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(4) NOT NULL AUTO_INCREMENT,
  `autor` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `categoria` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `noticia` blob,
  KEY `id_noticia` (`id_noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `autor`, `titulo`, `categoria`, `fecha`, `noticia`) VALUES
(1, 'asdadasd', 'asdadasd', 'asdadasd', '0000-00-00 00:00:00', NULL),
(2, 'Joan', 'Noticia 1', 'Cableado', '2017-02-20 14:35:36', 0x457320756e61206e6f746963696120616365726361206465206e6f6f6273),
(3, 'Club America', 'Pierden las Chivas', 'Futbol', '2017-02-20 14:36:32', 0x506572646965726f6e206c61732063686976617320636861666f6c61696e61732070697261746173206d616c6173),
(4, 'sam', 'ccred', 'redes', '2017-02-20 16:56:30', 0x70726f796563746f206363726564207920686f6c61206d756e646f),
(5, 'dce', 'abc', 'terror', '2017-02-20 17:20:04', 0x686f6c61206d657869636f),
(6, 'Yo', 'Hola', 'Baymax', '2017-03-05 16:28:25', 0x5061206b6520717569657265732073616265722065736f206a616a612073616c75646f73),
(7, '', '', '', '2017-03-16 13:33:15', ''),
(8, 'Juan', 'Hola', 'Comedia', '2017-03-16 13:34:46', 0x48652067616e61646f2070616e2062696d626f),
(9, '', '', '', '2017-03-16 13:55:36', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `correo` varchar(80) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `confirmpass` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id_servicio` int(2) NOT NULL AUTO_INCREMENT,
  `titulo_servicio` varchar(50) COLLATE utf8_bin NOT NULL,
  `subtitulo_servicio` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcion_servicio` varchar(2000) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `password`) VALUES
(1, 'joan', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
