-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2019 a las 15:38:15
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuesta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `Id_encuesta` int(11) NOT NULL,
  `uno` varchar(30) NOT NULL,
  `dos` varchar(30) NOT NULL,
  `tres` varchar(30) NOT NULL,
  `cuatro` varchar(30) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Documento` int(10) NOT NULL,
  `Ficha` int(11) NOT NULL,
  `resultado` enum('A','D') NOT NULL,
  `guardar_puntaje` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`Id_encuesta`, `uno`, `dos`, `tres`, `cuatro`, `Nombre`, `Documento`, `Ficha`, `resultado`, `guardar_puntaje`) VALUES
(44, 'gravisima', 'uno', 'leves, graves, muy graves', 'gravisima', 'oscar', 1234567895, 1802578, 'D', 50),
(45, 'gravisima', 'uno', 'leves, graves, muy graves', 'gravisima', 'oscar', 1234567895, 1802578, 'D', 50),
(46, 'gravisima', 'uno', 'leves, graves, muy graves', 'gravisima', 'oscar', 1234567895, 1802578, 'D', 50),
(47, 'gravisima', 'uno', 'leves, graves, muy graves', 'gravisima', 'oscar', 1234567895, 1802578, 'D', 50),
(48, 'gravisima', 'uno', 'leves, graves, muy graves', 'gravisima', 'oscar', 1234567895, 1802578, 'D', 50),
(49, 'gravisima', 'uno', 'leves, graves, muy graves', 'gravisima', 'oscar', 1234567895, 1802578, 'D', 50),
(50, '', '', '', '', '', 0, 0, 'D', 0),
(51, '', '', '', '', '', 0, 0, 'D', 0),
(52, '', '', '', '', '', 0, 0, 'D', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_pregunta` int(2) NOT NULL,
  `nombre_pregunta` varchar(100) NOT NULL,
  `respuesta_pregunta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_pregunta`, `nombre_pregunta`, `respuesta_pregunta`) VALUES
(1, '\r\n¿la condicion de matricula de indole academico se considera una falta?', 'grave'),
(2, '¿cuantos llamados de atencion academico escritos se pueden tener?', 'uno'),
(3, '¿cuales son los tipos de medidas formativas diciplinarias?\r\n', 'leves, graves, muy graves'),
(4, '¿la condicion de matricula de indole academica se considera una falta?', 'grave');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`Id_encuesta`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `Id_encuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_pregunta` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
