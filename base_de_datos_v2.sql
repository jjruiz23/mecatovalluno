-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2021 a las 01:04:10
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idCiudad` int(11) NOT NULL,
  `nomCiudad` varchar(50) CHARACTER SET utf8 NOT NULL,
  `idPais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idCiudad`, `nomCiudad`, `idPais`) VALUES
(1, 'Cali', 1),
(2, 'Medellin', 3),
(3, 'Cali', 2),
(4, 'Roma', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocivil`
--

CREATE TABLE `estadocivil` (
  `idEstCivil` int(11) NOT NULL,
  `nomEstCivil` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estadocivil`
--

INSERT INTO `estadocivil` (`idEstCivil`, `nomEstCivil`) VALUES
(1, 'SOLTERO'),
(2, 'CASADO'),
(3, 'DIVORCIADO'),
(4, 'VIUDO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `tipoDoc` varchar(50) DEFAULT NULL,
  `numDoc` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `colegio` varchar(50) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `tipoDoc`, `numDoc`, `nombre`, `apellido`, `colegio`, `pais`, `departamento`, `ciudad`) VALUES
(1, 'Cedula', '11144126711', 'MARYURII', 'BETRAN', 'AGOSTO', 'COLOMBIA', 'VALLE DEL CAUCA', 'CALI'),
(2, 'Registro civil', '200100300', 'ERIKA FERNAND', 'JOAQUI DIAZ', 'EUSTAQUIO PALACIO', 'COLOMBIA', 'CAUCA', 'CALI'),
(3, 'Registro civil', '0101010101', 'GABRIELA', 'URIBE TOSE', 'TOMAS CARRASQUILLA', 'COLOMBIA', 'VALLE DEL CAUCA', 'CALI'),
(4, 'Cedula', '1144061777', 'JOSE JULIAN', 'RUIZ BOTINA', 'MI TIA YAMI', 'COLOMBIA', 'VALLE DEL CAUCA', 'CALI'),
(5, 'Cedula', '66666666', 'MARCO AURELIO', 'RUIZ ZEMANATE', 'SANTIAGO', 'COLOMBIA', 'ANTIOQUIA', 'CALI'),
(6, 'Cedula', '88888888', 'MARIA ISABEL', 'BOTINA ROJAS', 'LIBARDO MADRI', 'BRAZIL', 'VALLE DEL CAUCA', 'POPAYAN'),
(7, 'Cedula', '44444444', 'ROSA MIRYAM', 'SANCHEZ SANCHEZ', 'TAMBO', 'TURQUIA', 'ANTIOQUIA', 'CALI'),
(8, 'Cedula', '190812849812', 'ELIANA', 'BELTRAN CEDIEL', 'SIETE', 'BRAZIL', 'ANTIOQUIA', 'MEDELLIN'),
(9, 'Registro civil', '4444', 'sena', 'sena', 'sena', 'COLOMBIA', 'ANTIOQUIA', 'MEDELLIN'),
(10, 'Registro civil', '7777', 'siete', 'SIETE', 'S13T3', 'TURQUIA', 'CAUCA', 'POPAYAN'),
(11, 'Cedula', '9678587', 'QQ', 'QQ', 'QQ', 'COLOMBIA', 'VALLE DEL CAUCA', 'CALI'),
(12, 'Registro civil', '1231213', 'mkmkmkmk', 'mkmkmkmk', 'mkmkm', 'COLOMBIA', 'VALLE DEL CAUCA', 'CALI'),
(13, 'Cedula', '04048', 'Miro', 'Botina', 'mmknk', 'BRAZIL', 'VALLE DEL CAUCA', 'MEDELLIN'),
(14, 'Tarjeta identidad', '21523412312', 'Juan Manuel', 'Solis', 'fcecep', 'COLOMBIA', 'VALLE DEL CAUCA', 'CALI'),
(15, 'Registro civil', '43323', 'Julian', 'Ruiz', 'rdf', 'COLOMBIA', 'VALLE DEL CAUCA', 'CALI'),
(16, 'Tarjeta identidad', '04048', 'miro', 'ojfsd', 'vsd', 'COLOMBIA', 'VALLE DEL CAUCA', 'CALI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `idPais` int(11) NOT NULL,
  `nomPais` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`idPais`, `nomPais`) VALUES
(1, 'Colombia'),
(2, 'Brazil'),
(3, 'Hungria'),
(4, 'Rusia'),
(5, 'Usa'),
(6, 'Mexico'),
(7, 'España'),
(8, 'Italia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `idPer` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fechaNac` date NOT NULL,
  `idTipoDoc` int(11) NOT NULL,
  `numDocumento` int(25) NOT NULL,
  `IdEstCivil` int(11) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `idSede` int(11) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `idSalarios` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`idPer`, `nombres`, `apellidos`, `email`, `fechaNac`, `idTipoDoc`, `numDocumento`, `IdEstCivil`, `celular`, `idSede`, `telefono`, `idSalarios`, `direccion`) VALUES
(40, 'Jose', 'Ruix', 'julian.ruiz2325@gmail.com', '1993-03-23', 3, 1144000777, 1, '2131', 1, '431', 1, 'CR 42 C # 40 - 04'),
(41, 'Diego', 'Galindo', 'cheo-93@hotmail.com', '1980-02-19', 3, 123456789, 3, '3129840182', 2, '4898291', 1, 'AVN 2 # 4 - 9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nomRol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nomRol`) VALUES
(1, 'Asesor'),
(2, 'Administrador'),
(3, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_x_personal`
--

CREATE TABLE `rol_x_personal` (
  `idRolPer` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `idPer` int(11) NOT NULL,
  `fechaRolPer` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol_x_personal`
--

INSERT INTO `rol_x_personal` (`idRolPer`, `idRol`, `idPer`, `fechaRolPer`) VALUES
(6, 1, 40, '2021-04-24 23:03:32'),
(7, 3, 41, '2021-05-16 20:01:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salarios`
--

CREATE TABLE `salarios` (
  `idSalarios` int(11) NOT NULL,
  `valorSalario` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `salarios`
--

INSERT INTO `salarios` (`idSalarios`, `valorSalario`) VALUES
(1, 1500000),
(2, 2500000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `idSede` int(11) NOT NULL,
  `nomSede` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telefonoSede` varchar(25) CHARACTER SET utf8 NOT NULL,
  `direSede` varchar(50) CHARACTER SET utf8 NOT NULL,
  `idCiudad` int(11) NOT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`idSede`, `nomSede`, `telefonoSede`, `direSede`, `idCiudad`, `fechaCreacion`) VALUES
(1, 'FCECEP', '3382977', 'carrera 11 c # 03 - 34', 1, '2021-04-19 20:13:21'),
(2, 'UAO', '4494849', 'avn 6 # 40 - 32', 2, '2021-04-19 20:20:26'),
(3, 'AMD', '323432423', 'CARRERA 52 B # 09 - 94', 3, '2021-04-20 22:22:36'),
(4, 'CUATRO', '3235811493', 'cIBIKABSAD', 4, '2021-05-16 20:02:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `task`
--

INSERT INTO `task` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'test12', 'description test12 ', '2020-05-18 03:56:12'),
(15, 'test13', 'txt13', '2021-04-23 01:11:34'),
(17, 'stmc', 'dadas', '2021-04-27 14:59:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodoc`
--

CREATE TABLE `tipodoc` (
  `idTipoDoc` int(11) NOT NULL,
  `nomTipoDoc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipodoc`
--

INSERT INTO `tipodoc` (`idTipoDoc`, `nomTipoDoc`) VALUES
(1, 'Cedula'),
(2, 'Tarjeta Identida'),
(3, 'Pasaporte'),
(4, 'Cedula Extranjeria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `password`) VALUES
(1, 'julian', 'ruiz', 'jjruiz23', 'f37be93b674e3dcd988cba4a7cf66879468c3b35'),
(2, 'jose', 'botina', 'cheo', '7ef9ce42c049703e4944e63dd9f5d18c2c5bdb5d'),
(3, 'erika', 'joaqui', 'erika', 'a6f0da1b1ba6aecebb2c15af8771766d21fc471d'),
(4, 'victor', 'ruiz', 'victor', '88fa846e5f8aa198848be76e1abdcb7d7a42d292'),
(5, 'k', 'k', 'k', '13fbd79c3d390e5d6585a21e11ff5ec1970cff0c');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idCiudad`),
  ADD KEY `idPais` (`idPais`);

--
-- Indices de la tabla `estadocivil`
--
ALTER TABLE `estadocivil`
  ADD PRIMARY KEY (`idEstCivil`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`idPais`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`idPer`),
  ADD KEY `idTipoDoc` (`idTipoDoc`),
  ADD KEY `IdEstCivil` (`IdEstCivil`),
  ADD KEY `idSede` (`idSede`),
  ADD KEY `idSalarios` (`idSalarios`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `rol_x_personal`
--
ALTER TABLE `rol_x_personal`
  ADD PRIMARY KEY (`idRolPer`),
  ADD KEY `idRol` (`idRol`),
  ADD KEY `idPer` (`idPer`);

--
-- Indices de la tabla `salarios`
--
ALTER TABLE `salarios`
  ADD PRIMARY KEY (`idSalarios`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`idSede`),
  ADD KEY `idCiudad` (`idCiudad`);

--
-- Indices de la tabla `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodoc`
--
ALTER TABLE `tipodoc`
  ADD PRIMARY KEY (`idTipoDoc`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `idCiudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estadocivil`
--
ALTER TABLE `estadocivil`
  MODIFY `idEstCivil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `idPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `idPer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rol_x_personal`
--
ALTER TABLE `rol_x_personal`
  MODIFY `idRolPer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `salarios`
--
ALTER TABLE `salarios`
  MODIFY `idSalarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `idSede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tipodoc`
--
ALTER TABLE `tipodoc`
  MODIFY `idTipoDoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`idPais`) REFERENCES `pais` (`idPais`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`IdEstCivil`) REFERENCES `estadocivil` (`idEstCivil`) ON DELETE CASCADE,
  ADD CONSTRAINT `personal_ibfk_2` FOREIGN KEY (`idTipoDoc`) REFERENCES `tipodoc` (`idTipoDoc`) ON DELETE CASCADE,
  ADD CONSTRAINT `personal_ibfk_3` FOREIGN KEY (`idSalarios`) REFERENCES `salarios` (`idSalarios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `rol_x_personal`
--
ALTER TABLE `rol_x_personal`
  ADD CONSTRAINT `rol_x_personal_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE CASCADE,
  ADD CONSTRAINT `rol_x_personal_ibfk_2` FOREIGN KEY (`idPer`) REFERENCES `personal` (`idPer`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sede`
--
ALTER TABLE `sede`
  ADD CONSTRAINT `sede_ibfk_1` FOREIGN KEY (`idCiudad`) REFERENCES `ciudad` (`idCiudad`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
