-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2024 a las 22:30:19
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
-- Base de datos: `mindset`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Genero` enum('Masculino','Femenino') NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Grado` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`ID`, `Nombre`, `Apellido`, `Fecha_Nacimiento`, `Genero`, `Correo`, `Grado`, `pass`) VALUES
(2, 'Fabiana', 'Geronimo', '2004-06-09', 'Femenino', 'fabi@gmail.com', 'Pregrado', '0987654'),
(5, 'Juan', 'Flores', '2000-12-18', 'Masculino', 'juancito@gmail.com', 'Pregrado', 'juan00'),
(7, 'Tiffany', 'Herrera', '2005-02-08', 'Femenino', 'tiffh@gmail.com', 'Pregrado', 'HERRERA'),
(8, 'Jorge', 'Ruiz', '2000-09-12', 'Masculino', 'jorge@gmail.com', 'Pregrado', 'abcdefg'),
(9, 'Maria', 'Palomino', '2004-12-02', 'Femenino', 'mar@gmail.com', 'Pregrado', 'MARIANA'),
(10, 'Sofia ', 'Diaz', '2005-02-20', 'Femenino', 'fabsdiaz20@gmail.com', 'Pregrado', 'fabiana20'),
(11, 'Pedro', 'Flores', '2000-07-20', 'Masculino', 'pedroF@gmail.com', 'Postgrado', 'pedro1245');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
