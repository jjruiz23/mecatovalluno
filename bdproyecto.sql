-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2016 a las 16:37:07
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Mecato_valluno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cliente`
--

CREATE TABLE `Cliente` (
  `ID_Cli` int(11) NOT NULL,
  `Nombre_Cli` varchar(30) COLLATE utf8_bin NOT NULL,
  `Apellido_Cli` varchar(30) COLLATE utf8_bin NOT NULL,
  `Usuario_Cli` varchar(30) COLLATE utf8_bin NOT NULL,
  `Contraseña_Cli` varchar(30) COLLATE utf8_bin NOT NULL,
  `Documento_Cli` int(22) NOT NULL,
  `Fechadenaciemiento_Cli` varchar(30) COLLATE utf8_bin NOT NULL,
  `Telefono_Cli` varchar(30) COLLATE utf8_bin NOT NULL,
  `Correo_Cli` varchar(30) COLLATE utf8_bin NOT NULL,
  `Nombre_Ciu` varchar(30) COLLATE utf8_bin NOT NULL,
  `Direccion_Cli` varchar(30) COLLATE utf8_bin NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `Cliente`
--

INSERT INTO `Cliente` (`ID_Cli`, `Nombre_Cli`, `Apellido_Cli`, `Usuario_Cli`, `Contraseña_Cli`, `Documento_Cli`, `Fechadenaciemiento_Cli`, `Telefono_Cli`, `Correo_Cli`, `Nombre_Ciu`, `Direccion_Cli`) VALUES
(1, `Juan`, `David`, `jdavid`,1234, 10005559999, 07/03/2020, 9666666, `jdavid@gmail.com`, `Cali`, `Carrera 50 07 - 10`),
(2, `Jhon`, `Restrepo`, `jrest`,1234, 10005999, 01/03/2000, 8888666, `jrestrepo@gmail.com`, `Medellin`, `Carrera 50 07 - 10`),
(3, `Maria`, `Jose`, `mjose`,1234, 7759999, 02/03/1999, 7776666, `mjose@gmail.com`, `Bogota`, `Carrera 50 07 - 10`);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ciudad`
--

CREATE TABLE `Ciudad` (
  `ID_Ciu` int(11) NOT NULL,
  `Nombre_Ciu` varchar(20) COLLATE utf8_bin NOT NULL,
  `Pais_Ciu` varchar(30) COLLATE utf8_bin NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `Ciudad`
--

INSERT INTO `horarios` (`ID_Ciu`, `Nombre_Ciu`, `Pais_Ciu`) VALUES
(1, `Cali`, `Colombia`),
(2, `Bogota`, `Colombia`),
(3, `Medellin`, `Colombia`);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pais`
--

CREATE TABLE `Pais` (
  `ID_Pai` int(11) NOT NULL,
  `Nombre_Pai` varchar(20) COLLATE utf8_bin NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `Pais`
--

INSERT INTO `horarios` (`ID_Pai`, `Nombre_Pai`) VALUES
(1,`Colombia`);



-- --------------------------------------------------------



--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `horarios` (
  `id_vehiculo` int(11) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_bin NOT NULL,
  `conductor` varchar(30) COLLATE utf8_bin NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `horarios_conductor`
--

INSERT INTO `horarios` (`id_vehiculo`, `tipo`, `conductor`) VALUES
(`123`, `aereo`, `jhon`);



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` varchar(30) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `password`, `tipo`) VALUES
('mulato', '123', 'usuario'),
('mulatoadmin', '1235', 'admin'),


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosusuario`
--
ALTER TABLE `datosusuario`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
