-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-12-2013 a las 15:59:38
-- Versión del servidor: 5.5.34-cll
-- Versión de PHP: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `alexrome_cms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `orden` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `pagina` varchar(20) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  PRIMARY KEY (`orden`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`orden`, `nombre`, `pagina`, `titulo`, `descripcion`) VALUES
(5, '5.jpg', 'galeria', '', ''),
(6, '6.jpg', 'galeria', '', ''),
(7, '7.jpg', 'galeria', '', ''),
(8, '8.jpg', 'galeria', '', ''),
(9, '9.jpg', 'galeria', '', ''),
(10, '10.jpg', 'galeria', '', ''),
(11, '11.jpg', 'galeria', '', ''),
(12, '12.jpg', 'galeria', '', ''),
(13, '13.jpg', 'galeria', '', ''),
(14, '14.jpg', 'contacto', ' ', ' '),
(21, '21.jpg', 'galeria', '', ''),
(22, '22.jpg', 'galeria', ' ', ' '),
(23, '23.jpg', 'galeria', ' ', ' '),
(24, '24.jpg', 'galeria', ' ', ' '),
(25, '25.jpg', 'galeria', ' ', ' '),
(26, '26.jpg', 'galeria', ' ', ' '),
(27, '27.jpg', 'galeria', ' ', ' '),
(28, '28.jpg', 'galeria', ' ', ' '),
(31, '31.jpg', 'galeria', ' ', ' '),
(32, '32.jpg', 'encabezado', ' ', ' '),
(33, '33.jpg', 'fondo', ' ', ' '),
(34, '34.jpg', 'galeria', ' ', ' '),
(35, '35.jpg', 'galeria', ' ', ' '),
(36, '40.jpg', 'inicio', ' ', ' '),
(37, '37.jpg', 'inicio', ' ', ' '),
(38, '38.jpg', 'inicio', ' ', ' '),
(39, '39.jpg', 'inicio', ' ', ' ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos`
--

CREATE TABLE IF NOT EXISTS `textos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pagina` varchar(20) NOT NULL,
  `valor` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `textos`
--

INSERT INTO `textos` (`id`, `pagina`, `valor`) VALUES
(1, 'inicio', '"Un fotógrafo es aquel que hace de una imagen ordinaria una imagen extraordinaria"'),
(2, 'telefono', '271.710.5379'),
(3, 'direccion', 'Av. 9 Bis #1409 Colonia San José, Córdoba, Veracruz.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `password`) VALUES
('alexromero', 'alex2013romero');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
