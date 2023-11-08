-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2023 a las 14:14:15
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
-- Base de datos: `medicina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `observacion` varchar(250) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `fecha`, `hora`, `id_paciente`, `id_doctor`, `id_especialidad`, `observacion`, `estado`, `fecha_registro`) VALUES
(10, '2023-08-26', '09:12:00', 6, 7, 8, 'Ninguna1', 1, '2023-08-19 15:09:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `cedula` int(50) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `correo` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `doctor`
--

INSERT INTO `doctor` (`id`, `cedula`, `nombres`, `id_especialidad`, `sexo`, `telefono`, `fecha`, `correo`, `fecha_registro`) VALUES
(6, 101, 'Alex Castillo Cervantes', 8, 'Masculino', '99111656701', '2022-09-05', 'mugarte5672@gmail.com.mx', '2022-09-05 15:56:14'),
(7, 8, 'Emmanuel Mugarte', 5, 'Masculino', '99111656701', '2023-08-19', 'lex@hotmail.com', '2023-08-19 14:54:13'),
(9, 57, 'Kelly Castillo Cervantes', 6, 'Masculino', '99111656701', '2023-08-19', 'lex@hotmail.com', '2023-08-19 14:58:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id`, `nombre`, `fecha`) VALUES
(1, 'Medicina General', '2022-08-25 01:20:04'),
(5, 'Cardiologia', '2022-08-25 01:51:36'),
(6, 'Pediatria', '2022-08-25 01:51:51'),
(7, 'Dermatologia', '2022-08-25 06:11:51'),
(8, 'Odontologia', '2022-08-25 16:46:32'),
(9, 'Fisioterapia', '2023-08-19 15:20:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `estado`) VALUES
(1, 'Atendido'),
(2, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `dias` varchar(50) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id`, `dias`, `id_doctor`, `fecha`) VALUES
(1, 'Lunes, Jueves, Sabado', 6, '2022-08-25 06:02:19'),
(4, 'Domingos, Lunes, Viernes', 7, '2022-08-25 16:44:49'),
(5, 'Martes', 9, '2023-08-19 15:22:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `tipo_id` varchar(50) NOT NULL,
  `num_id` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `plan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_medico` int(11) NOT NULL,
  `tipo_especialista` int(11) NOT NULL,
  `fecha_cita` date NOT NULL,
  `hora_cita` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `color` varchar(50) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id_reserva`, `id_usuario`, `nombre_medico`, `tipo_especialista`, `fecha_cita`, `hora_cita`, `title`, `start`, `end`, `color`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 1, 6, 6, '2023-11-01', '09:00 - 9:20am', 'Cita Pediatra', '2023-11-01', '2023-11-01', '#2324ff', '2023-11-02 02:31:34', '2023-11-02 02:31:34'),
(10, 3, 7, 7, '2023-11-12', '08:20 - 08:40', 'Cita Dermatologia', '2023-11-11', '2023-11-11', '#2324ff', '2023-11-08 13:35:57', '2023-11-08 13:35:57'),
(13, 6, 9, 5, '2023-11-20', '09:40 - 10:00', 'Cita Cardiología', '2023-11-20', '2023-11-11', '#2324ff', '2023-11-08 13:41:56', '2023-11-08 13:41:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Empleado'),
(3, 'Paciente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `correo`, `password`, `fecha`, `rol`) VALUES
(12, 'Paula', 'paula@gmail.com', '34567', '2022-08-27 16:43:37', 1),
(13, 'Administrador', 'admin@softcodepm.com', '12345', '2022-08-29 14:22:36', 1),
(14, 'Alexa', 'alexa@gmail.com', '1234', '2023-10-18 16:02:47', 1),
(15, 'Pablo', 'pablo@gmail.com', '123', '2023-10-18 16:03:10', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `tipo_id` varchar(50) NOT NULL,
  `num_id` varchar(50) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `confirm_contra` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipo_id`, `num_id`, `nombre_completo`, `apellidos`, `fecha_nacimiento`, `email`, `telefono`, `usuario`, `contrasena`, `confirm_contra`) VALUES
(1, 'CC', '23334', 'laura', 'lopera', '2023-09-15', 'laura@gmail.com', '32455', 'Laura', '123', '123'),
(3, 'CC', '122', 'sofia', 'arias', '2023-11-10', 'sofia@gmail.com', '32455', 'sofia', 'c82b8f1d225bf2f00fe91b6f238203', 'c82b8f1d225bf2f00fe91b6f238203'),
(4, 'CC', '44444', 'mari', 'lopera', '2023-11-03', 'mari@gmail.com', '3444', 'mari', 'd404559f602eab6fd602ac7680dacb', 'd404559f602eab6fd602ac7680dacb'),
(5, 'CC', '232333', 'maria', 'lopera', '2023-11-02', 'maria@gmail.com', '3333', 'Maria', '3627909a29c31381a071ec27f7c9ca', '3627909a29c31381a071ec27f7c9ca'),
(6, 'CC', '23334555', 'sofia', 'lopera', '2023-10-31', 'sofiaL@gmail.com', '44444555', 'sofiaL', 'd404559f602eab6fd602ac7680dacb', 'd404559f602eab6fd602ac7680dacb'),
(7, 'CC', '2333422', 'sofia', 'lopera', '2023-11-10', 'sofia1@gmail.com', '333322', 'sofia1', '133', '133'),
(8, 'CC', '23334223', 'andrea', 'lopera', '2023-11-08', 'andrea@gmail.com', '32455', 'andrea', '1223', '1223');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id` (`id_usuario`),
  ADD KEY `tipo_especialista` (`tipo_especialista`),
  ADD KEY `nombre_medico` (`nombre_medico`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `permisos` (`rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `num_id` (`num_id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`nombre_medico`) REFERENCES `doctor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reservas_ibfk_3` FOREIGN KEY (`tipo_especialista`) REFERENCES `especialidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `permisos` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
