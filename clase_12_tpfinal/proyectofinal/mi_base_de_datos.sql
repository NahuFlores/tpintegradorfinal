-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2024 a las 01:09:29
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
-- Base de datos: `mi_base_de_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `duracion` text NOT NULL,
  `imagen_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `duracion`, `imagen_url`) VALUES
(5, 'Reparación de Computadoras', 'Diagnóstico y reparación de problemas de hardware y software. Incluye reemplazo de componentes defectuosos.', 100, '2 horas', 'https://cdn-icons-png.flaticon.com/512/2345/2345502.png'),
(6, 'Mantenimiento Preventivo', 'Limpieza interna y externa, actualización de software y optimización del sistema.', 35, '30 minutos', 'https://cdn-icons-png.flaticon.com/512/2345/2345502.png'),
(7, 'Instalación de Software', 'Instalación y configuración de software según tus necesidades.', 50, '2 horas', 'https://cdn-icons-png.flaticon.com/512/2345/2345502.png'),
(8, 'Actualización de Hardware', 'Actualización de componentes de hardware para mejorar el rendimiento de tu equipo.', 120, '3 horas', 'https://cdn-icons-png.flaticon.com/512/2345/2345502.png'),
(10, 'Limpieza Interna de PC', 'Limpieza interna para eliminar el polvo y mejorar la ventilación de tu computadora.', 40, '2 horas', 'https://cdn-icons-png.flaticon.com/512/2345/2345502.png'),
(11, 'Soporte Técnico Remoto', 'Asistencia técnica remota para solucionar problemas de software.', 60, '30 minutos', 'https://cdn-icons-png.flaticon.com/512/8073/8073500.png'),
(17, 'Esto es una prueba', 'Holaaaa :D', 777, '2 horas', 'https://images.vexels.com/content/143350/preview/coolface-trollface-meme-368612.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `password`) VALUES
(1, 'admin', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
