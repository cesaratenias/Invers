-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-06-2012 a las 21:29:17
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `inversiones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cedulacli` varchar(8) NOT NULL,
  `nombrecli` varchar(15) NOT NULL,
  `apellidocli` varchar(15) NOT NULL,
  `telefonocli` varchar(15) NOT NULL,
  `direccion` varchar(15) NOT NULL,
  PRIMARY KEY  (`cedulacli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `cliente`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `idprov` int(8) NOT NULL auto_increment,
  `cedulaprov` varchar(13) NOT NULL,
  `nombreprov` varchar(15) NOT NULL,
  `apellidoprov` varchar(15) NOT NULL,
  `rifprov` varchar(15) NOT NULL,
  `empresaprov` varchar(15) NOT NULL,
  `telefonoprov` varchar(10) NOT NULL,
  `suministraprov` varchar(10) NOT NULL,
  `direccionprov` varchar(2) NOT NULL,
  PRIMARY KEY  (`idprov`,`cedulaprov`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `proveedor`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg-usuario`
--

CREATE TABLE IF NOT EXISTS `reg-usuario` (
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
-- Volcar la base de datos para la tabla `reg-usuario`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE IF NOT EXISTS `trabajador` (
  `idtra` int(8) NOT NULL,
  `cedulatra` varchar(13) NOT NULL,
  `nombretra` varchar(15) NOT NULL,
  `apellidotra` varchar(15) NOT NULL,
  `telefonotra` varchar(15) NOT NULL,
  `celulartra` varchar(15) NOT NULL,
  `direcciontra` varchar(10) NOT NULL,
  `areatra` varchar(10) NOT NULL,
  `mantenimientotra` varchar(2) NOT NULL,
  PRIMARY KEY  (`idtra`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `trabajador`
--

