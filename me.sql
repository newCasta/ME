-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2021 a las 01:21:43
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `me`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `idCita` int(11) NOT NULL,
  `idCitaProgramada` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `duracion` time NOT NULL,
  `idCliente` varchar(12) NOT NULL,
  `idPsicologo` varchar(12) NOT NULL,
  `observacion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`idCita`, `idCitaProgramada`, `fecha`, `duracion`, `idCliente`, `idPsicologo`, `observacion`) VALUES
(2, 2, '2021-10-24 01:21:45', '01:00:00', '1111111111', '2222222222', 'todo bien'),
(3, 4, '2021-10-24 03:32:22', '01:00:00', '3333333333', '2222222222', 'pablo estuvo muy bien');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `documentoId` varchar(12) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `edad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`documentoId`, `nombres`, `apellidos`, `telefono`, `edad`) VALUES
('1111111111', 'juan', 'castañeda burbano', '111111', 16),
('3333333333', 'pablo', 'castañeda xd', '123', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_id`
--

CREATE TABLE `documentos_id` (
  `documentoId` varchar(12) NOT NULL,
  `fechaExpedicion` date NOT NULL,
  `fechaVencimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documentos_id`
--

INSERT INTO `documentos_id` (`documentoId`, `fechaExpedicion`, `fechaVencimiento`) VALUES
('1110285776', '2018-10-03', '2022-09-14'),
('1111111111', '2021-09-07', '2021-09-08'),
('2222222222', '2021-09-03', '2021-09-15'),
('3333333333', '2021-10-06', '2021-10-07'),
('4444444444', '2021-10-02', '2021-10-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacion_citas`
--

CREATE TABLE `programacion_citas` (
  `idProgramacionC` int(11) NOT NULL,
  `fechaExpedicion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fechaRealizacion` datetime NOT NULL,
  `idCliente` varchar(12) NOT NULL,
  `idPsicologo` varchar(12) NOT NULL,
  `observada` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programacion_citas`
--

INSERT INTO `programacion_citas` (`idProgramacionC`, `fechaExpedicion`, `fechaRealizacion`, `idCliente`, `idPsicologo`, `observada`) VALUES
(1, '2021-10-23 21:18:45', '2021-10-30 00:00:00', '1111111111', '2222222222', 'no'),
(2, '2021-10-24 01:21:45', '2021-10-30 05:00:00', '1111111111', '2222222222', 'si'),
(4, '2021-10-24 03:32:22', '2021-10-30 06:00:00', '3333333333', '2222222222', 'si'),
(5, '2021-10-24 04:14:40', '2021-10-30 05:00:00', '1111111111', '2222222222', 'no'),
(6, '2021-10-24 21:34:11', '2021-10-30 05:00:00', '3333333333', '2222222222', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `psicologos`
--

CREATE TABLE `psicologos` (
  `documentoId` varchar(12) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `hojaVida` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `psicologos`
--

INSERT INTO `psicologos` (`documentoId`, `nombres`, `apellidos`, `telefono`, `hojaVida`) VALUES
('2222222222', 'juan', 'as', '111111', 'id2222222222hojavida.pdf'),
('4444444444', '123', '123', '123', 'id4444444444hojavida.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `idRegistro` int(11) NOT NULL,
  `idCitas` int(11) NOT NULL,
  `fechaExpedicion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` varchar(12) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `password`, `correo`, `tipo`) VALUES
('1110285776', 'siCasta', '827ccb0eea8a706c4c34a16891f84e7b', 'noobcastaj51@gmail.com', 'admin'),
('1111111111', 'sicasta2', '81dc9bdb52d04dc20036dbd8313ed055', 'n@gmail.com', 'cliente'),
('2222222222', 'xd123', '81dc9bdb52d04dc20036dbd8313ed055', 'xd@gmail.com', 'psicologo'),
('3333333333', 'pablo', '81dc9bdb52d04dc20036dbd8313ed055', 'n@gmail.com', 'cliente'),
('4444444444', 'xd12', '81dc9bdb52d04dc20036dbd8313ed055', 'n@gmail.com', 'psicologo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `idPsicologo` (`idPsicologo`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idCitaProgramada` (`idCitaProgramada`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`documentoId`);

--
-- Indices de la tabla `documentos_id`
--
ALTER TABLE `documentos_id`
  ADD PRIMARY KEY (`documentoId`);

--
-- Indices de la tabla `programacion_citas`
--
ALTER TABLE `programacion_citas`
  ADD PRIMARY KEY (`idProgramacionC`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idPsicologo` (`idPsicologo`);

--
-- Indices de la tabla `psicologos`
--
ALTER TABLE `psicologos`
  ADD PRIMARY KEY (`documentoId`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`idRegistro`),
  ADD KEY `idCitas` (`idCitas`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `programacion_citas`
--
ALTER TABLE `programacion_citas`
  MODIFY `idProgramacionC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`documentoId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`idPsicologo`) REFERENCES `psicologos` (`documentoId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`idCitaProgramada`) REFERENCES `programacion_citas` (`idProgramacionC`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`documentoId`) REFERENCES `usuarios` (`idUsuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `programacion_citas`
--
ALTER TABLE `programacion_citas`
  ADD CONSTRAINT `programacion_citas_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`documentoId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `programacion_citas_ibfk_2` FOREIGN KEY (`idPsicologo`) REFERENCES `psicologos` (`documentoId`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `psicologos`
--
ALTER TABLE `psicologos`
  ADD CONSTRAINT `psicologos_ibfk_1` FOREIGN KEY (`documentoId`) REFERENCES `usuarios` (`idUsuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `registros_ibfk_1` FOREIGN KEY (`idCitas`) REFERENCES `citas` (`idCita`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `documentos_id` (`documentoId`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
