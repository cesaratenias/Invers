-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-07-2012 a las 08:30:57
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inversiones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d_gestion_c`
--

CREATE TABLE IF NOT EXISTS `d_gestion_c` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_recurso` int(11) NOT NULL,
  `cant` int(10) NOT NULL,
  `id_maestro` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_recurso` (`id_recurso`,`id_maestro`),
  KEY `id_maestro` (`id_maestro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='tabla de detalle de gestion compra' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `d_gestion_c`
--

INSERT INTO `d_gestion_c` (`id`, `id_recurso`, `cant`, `id_maestro`) VALUES
(1, 1, 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_recurso` int(11) NOT NULL,
  `condicion` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_recurso` (`id_recurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='aqui esta el campo de equipo ' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `id_recurso`, `condicion`) VALUES
(1, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_recurso` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_recurso` (`id_recurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='esta es la tabla que detalla los materiales del recurso' AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`id`, `id_recurso`, `descuento`) VALUES
(1, 1, 20),
(2, 2, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_gestion_c`
--

CREATE TABLE IF NOT EXISTS `m_gestion_c` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `total` float NOT NULL,
  `id_obra` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_obra` (`id_obra`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='maestro de gestion compra' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `m_gestion_c`
--

INSERT INTO `m_gestion_c` (`id`, `fecha`, `total`, `id_obra`) VALUES
(1, '2012-07-01', 200000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra`
--

CREATE TABLE IF NOT EXISTS `obra` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `convenio` varchar(10) NOT NULL,
  `partida` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='obra q se realizan en la empresa';

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`id`, `nombre`, `descripcion`, `convenio`, `partida`) VALUES
(0, 'Edificio A', 'tendra las cosas', '021v422', 'haremos esto'),
(1, 'Edificio A', 'tendra las cosas', '021v422', 'haremos esto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(13) CHARACTER SET latin1 NOT NULL,
  `nombre` varchar(20) CHARACTER SET latin1 NOT NULL,
  `apellido` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `cedula`, `nombre`, `apellido`, `telefono`, `direccion`, `tipo`) VALUES
(5, '1444588', 'Yohan', 'maart', 2147483647, 'Guaracarima', 1),
(6, '2222656', 'Junana', 'Silva', 2147483647, 'san mateo', 1),
(7, '5787854', 'Sindy', 'Monder', 2147483647, 'Mercedes', 1),
(9, '632222', 'Inversiones Ami', NULL, 2147483647, 'Mercedes', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NOT NULL,
  `suministro` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_persona` (`id_persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `id_persona`, `suministro`) VALUES
(2, 8, 'todo'),
(3, 9, 'todo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recurso`
--

CREATE TABLE IF NOT EXISTS `recurso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` varchar(12) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `costo` int(11) NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cod` (`cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `recurso`
--

INSERT INTO `recurso` (`id`, `cod`, `descripcion`, `costo`, `tipo`) VALUES
(1, '0000', 'Cemento', 20, 1),
(2, '0001', 'Pala', 70, 1),
(3, '0002', 'Escalera', 100, 2),
(4, '5555', 'Pintor', 250, 3),
(5, '4444', 'Albanil', 400, 3),
(6, '4000', 'Andamio', 150, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE IF NOT EXISTS `trabajador` (
  `id` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `area` varchar(15) NOT NULL,
  `mantenimiento` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_persona` (`id_persona`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id`, `id_persona`, `area`, `mantenimiento`) VALUES
(0, 2, 'Todas', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `login` varchar(10) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `cedulaus` varchar(13) NOT NULL,
  `nombreu` text NOT NULL,
  `apellidou` text NOT NULL,
  `cargo` text NOT NULL,
  `pregunta` text NOT NULL,
  `respuesta` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`login`, `clave`, `cedulaus`, `nombreu`, `apellidou`, `cargo`, `pregunta`, `respuesta`) VALUES
('admin', '123456', '20200200', 'cesar', 'tenias', 'nada', 'como te llamas?', 'cesar');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `d_gestion_c`
--
ALTER TABLE `d_gestion_c`
  ADD CONSTRAINT `d_gestion_c_ibfk_1` FOREIGN KEY (`id_recurso`) REFERENCES `recurso` (`id`),
  ADD CONSTRAINT `d_gestion_c_ibfk_2` FOREIGN KEY (`id_maestro`) REFERENCES `m_gestion_c` (`id`);

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`id_recurso`) REFERENCES `recurso` (`id`);

--
-- Filtros para la tabla `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_ibfk_1` FOREIGN KEY (`id_recurso`) REFERENCES `recurso` (`id`);

--
-- Filtros para la tabla `m_gestion_c`
--
ALTER TABLE `m_gestion_c`
  ADD CONSTRAINT `m_gestion_c_ibfk_1` FOREIGN KEY (`id_obra`) REFERENCES `obra` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
