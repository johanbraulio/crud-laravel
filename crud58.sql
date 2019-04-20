-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2019 a las 18:46:48
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud58`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nombres` varchar(20) DEFAULT NULL,
  `paterno` varchar(20) DEFAULT NULL,
  `materno` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `celular` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombres`, `paterno`, `materno`, `fecha_nacimiento`, `email`, `celular`) VALUES
(1, 'Johan Braulio', 'Condori', 'Perez', '1992-03-20', 'johan6119@gmail.com', '966685781'),
(3, 'Mario', 'Contreras', 'Meeros', '1992-04-15', 'mario@gmail.com', '955548751'),
(4, 'Armando', 'Estevez', 'Perez', '1996-03-20', 'marlos@gmail.com', '955542168'),
(6, 'Registrado', 'Desde', 'Sistema', '2019-04-12', 'sistema@gmail.com', '966654875'),
(7, 'Yemny Rosa', 'Condori', 'Ccallo', '1994-05-04', 'yemny@gmail.com', '987541548');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
