-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2023 a las 14:57:44
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursofullstack`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `primer_apellido` varchar(50) NOT NULL,
  `segundo_apellido` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contraseña` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `primer_apellido`, `segundo_apellido`, `email`, `usuario`, `contraseña`) VALUES
(1, 'Ana', 'García', 'Jimenez', 'ana.garcia@gmail.com', 'ana123', 'anajuli2'),
(2, 'Marc', 'Álvarez', 'Rodríguez', 'marc.alvarez@gmail.com', 'marquito', 'marc983'),
(3, 'Olga', 'Montenero', '', 'olgamont@gmail.com', 'olguita12', 'olguita8'),
(4, 'Aron', 'Hernández', 'Olivares', 'aronhernan@gmail.com', 'aronnn67', 'Ak098*'),
(5, 'Juan', 'Lopez', '', 'lopezz.juan@gmail.com', 'juan_09', '82piLr:'),
(6, 'Sara', 'Ramon', 'Linares', 'sarasarita@gmail.com', 'sararl23', '3dde0`+'),
(7, 'Tamara', 'Sanchez', '', 'tamarasan@gmail.com', 'tammy23', 'tyeG236*'),
(8, 'Paula', 'Gomez', 'Dantes', 'paugoda@gmail.com', 'pauuu34', '3je*t5'),
(9, 'Camila', 'Girones', '', 'camilagiro@gmail.com', 'camiii33', 'gdf34MN'),
(10, 'Jennifer', 'Fernández', '', 'jenifer@gmail.com', 'jeni_fer', 'jfdsdL*'),
(11, 'Clauda', 'Peñaranda', 'Montenegro', 'claupemon@gmail.com', 'clauuu88', 'erGF34-_');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
