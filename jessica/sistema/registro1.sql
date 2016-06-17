-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2016 a las 16:42:13
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proveedores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro1`
--

CREATE TABLE `registro1` (
  `ID_Proveedor` int(11) NOT NULL,
  `Nombre_Proveedor` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `RFC_Empresa` varchar(13) NOT NULL,
  `Nombre_Empresa` varchar(50) NOT NULL,
  `Direccion_Empresa` varchar(100) NOT NULL,
  `Ciudad` varchar(50) DEFAULT NULL,
  `Telefono_Empresa` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro1`
--

INSERT INTO `registro1` (`ID_Proveedor`, `Nombre_Proveedor`, `Apellidos`, `RFC_Empresa`, `Nombre_Empresa`, `Direccion_Empresa`, `Ciudad`, `Telefono_Empresa`) VALUES
(6, 'Julio', 'Segura', 'CSJNE7', 'Almacenes Ibarra', 'Avenida Miguel Hidalgo', 'Tampico', '2-78-75-98'),
(7, 'Alberto', 'Romero', '836HBDC', 'Tecate', 'Calle:Gomez Farias ', 'Madero', '3-45-67-89'),
(8, 'Diana ', 'Carrizales', 'DSJD673', 'Carnes-Madero', 'Avenida Monterrey', 'Madero', '2-43-68-90');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro1`
--
ALTER TABLE `registro1`
  ADD PRIMARY KEY (`ID_Proveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro1`
--
ALTER TABLE `registro1`
  MODIFY `ID_Proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
