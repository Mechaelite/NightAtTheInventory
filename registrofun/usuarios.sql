-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-01-2018 a las 17:50:59
-- Versión del servidor: 5.6.13
-- Versión de PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuarios`
--
CREATE DATABASE IF NOT EXISTS `usuarios` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `usuarios`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr`
--

CREATE TABLE IF NOT EXISTS `usr` (
  `USRID` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `USRName` varchar(20) NOT NULL,
  `USRPassword` char(40) NOT NULL,
  `USREmail` varchar(60) NOT NULL,
  `registration_date` datetime NOT NULL,
  PRIMARY KEY (`USRID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usr`
--

INSERT INTO `usr` (`USRID`, `USRName`, `USRPassword`, `USREmail`, `registration_date`) VALUES
(1, 'Pau', '37abe4cb3fe065f9260bad85ade7fc19eb248e2d', 'colom@gmail.com', '2018-01-11 18:44:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
