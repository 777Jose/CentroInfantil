-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2024 a las 09:18:15
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centroinfantil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id_actividades` int(11) NOT NULL,
  `nombre_actividades` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `horario` time NOT NULL,
  `grupo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id_actividades`, `nombre_actividades`, `descripcion`, `horario`, `grupo_id`) VALUES
(1, 'Pintura', 'Actividad de pintura para los niños', '09:00:00', 1),
(2, 'Cuentacuentos', 'Lectura de cuentos para los niños', '10:00:00', 1),
(3, 'Juegos al aire libre', 'Juegos y actividades en el patio', '11:00:00', 2),
(4, 'Manualidades', 'Actividad de manualidades y artesanías', '14:00:00', 2),
(5, 'Pintura', 'Actividad de pintura para los niños', '09:00:00', 1),
(6, 'Cuentacuentos', 'Lectura de cuentos para los niños', '10:00:00', 1),
(7, 'Juegos al aire libre', 'Juegos y actividades en el patio', '11:00:00', 2),
(8, 'Manualidades', 'Actividad de manualidades y artesanías', '14:00:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `nino_id` int(11) DEFAULT NULL,
  `hora_ingreso` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` enum('presente','ausente') NOT NULL,
  `hora_salida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `nino_id`, `hora_ingreso`, `estado`, `hora_salida`) VALUES
(1, 1, '2024-06-15 18:00:00', 'presente', '16:30:00'),
(2, 2, '2024-06-17 18:00:00', 'ausente', '16:30:00'),
(3, 3, '2024-06-18 12:00:00', 'presente', '10:00:00'),
(4, 4, '2024-06-17 18:00:00', 'presente', '17:21:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `nombre_grupos` varchar(100) NOT NULL,
  `educador_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `nombre_grupos`, `educador_id`) VALUES
(1, 'Grupo 1', 2),
(2, 'Grupo 2', 3),
(3, 'Grupo 1', 2),
(4, 'Grupo 2', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninos`
--

CREATE TABLE `ninos` (
  `id_ninos` int(11) NOT NULL,
  `nombre_nino` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `grupo_id` int(11) DEFAULT NULL,
  `familiar_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ninos`
--

INSERT INTO `ninos` (`id_ninos`, `nombre_nino`, `fecha_nacimiento`, `grupo_id`, `familiar_id`) VALUES
(1, 'Niño 1', '2018-05-20', 1, 4),
(2, 'Niña 2', '2019-07-15', 1, 5),
(3, 'Niño 3', '2020-08-22', 2, 4),
(4, 'Niña 4', '2017-03-18', 2, 5),
(5, 'Niño 1', '2018-05-20', 1, 4),
(6, 'Niña 2', '2019-07-15', 1, 5),
(7, 'Niño 3', '2020-08-22', 2, 4),
(8, 'Niña 4', '2017-03-18', 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuarios` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` enum('administrador','educador','familiar') NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuarios`, `email`, `password`, `rol`, `fecha_creacion`) VALUES
(1, 'Admin', 'admin@centroinfantil.com', 'adminpassword', 'administrador', '2024-06-15 03:03:18'),
(2, 'Educador 1', 'educador1@centroinfantil.com', 'educadorpassword', 'educador', '2024-06-15 03:03:18'),
(3, 'Educador 2', 'educador2@centroinfantil.com', 'educadorpassword', 'educador', '2024-06-15 03:03:18'),
(4, 'Familiar 1', 'padre1@centroinfantil.com', 'padrepassword', 'familiar', '2024-06-15 03:03:18'),
(5, 'Familiar 2', 'padre2@centroinfantil.com', 'padrepassword', 'familiar', '2024-06-15 03:03:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id_actividades`),
  ADD KEY `grupo_id` (`grupo_id`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `nino_id` (`nino_id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `educador_id` (`educador_id`);

--
-- Indices de la tabla `ninos`
--
ALTER TABLE `ninos`
  ADD PRIMARY KEY (`id_ninos`),
  ADD KEY `grupo_id` (`grupo_id`),
  ADD KEY `padre_id` (`familiar_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id_actividades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ninos`
--
ALTER TABLE `ninos`
  MODIFY `id_ninos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `actividades_ibfk_1` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id_grupo`);

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`nino_id`) REFERENCES `ninos` (`id_ninos`);

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`educador_id`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `ninos`
--
ALTER TABLE `ninos`
  ADD CONSTRAINT `ninos_ibfk_1` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id_grupo`),
  ADD CONSTRAINT `ninos_ibfk_2` FOREIGN KEY (`familiar_id`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
