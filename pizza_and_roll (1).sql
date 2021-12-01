-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2021 a las 07:15:30
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pizza_and_roll`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `registro` int(200) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(100) COLLATE utf8_bin NOT NULL,
  `numero` int(200) NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `colonia` varchar(100) COLLATE utf8_bin NOT NULL,
  `calle` varchar(150) COLLATE utf8_bin NOT NULL,
  `numerodecasa` int(50) NOT NULL,
  `idcliente` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `registro` int(200) NOT NULL,
  `idempleado` int(100) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(50) COLLATE utf8_bin NOT NULL,
  `numero` int(200) NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `genero` varchar(150) COLLATE utf8_bin NOT NULL,
  `fechanacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizza`
--

CREATE TABLE `pizza` (
  `numero_de_pizza` int(11) NOT NULL,
  `tamaño` int(10) NOT NULL,
  `ingrediente1` varchar(50) COLLATE utf8_bin NOT NULL,
  `ingrediente2` varchar(50) COLLATE utf8_bin NOT NULL,
  `ingrediente3` varchar(50) COLLATE utf8_bin NOT NULL,
  `extras` varchar(100) COLLATE utf8_bin NOT NULL,
  `soda` tinyint(1) NOT NULL,
  `tipodesoda` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pizza`
--

INSERT INTO `pizza` (`numero_de_pizza`, `tamaño`, `ingrediente1`, `ingrediente2`, `ingrediente3`, `extras`, `soda`, `tipodesoda`) VALUES
(1, 100, 'jamon', 'piña', 'peperoni', 'nada', 1, 'pepsi'),
(4, 100, 'peperoni', 'salami', 'queso', 'nada', 0, 'pepsi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `vendedor` varchar(100) COLLATE utf8_bin NOT NULL,
  `tipodeventa` varchar(100) COLLATE utf8_bin NOT NULL,
  `precio` int(200) NOT NULL,
  `fechaventa` date NOT NULL,
  `productovendido` varchar(100) COLLATE utf8_bin NOT NULL,
  `idcliente` int(200) NOT NULL,
  `idvendedor` int(200) NOT NULL,
  `registro` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`registro`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`registro`);

--
-- Indices de la tabla `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`numero_de_pizza`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`registro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `registro` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `registro` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pizza`
--
ALTER TABLE `pizza`
  MODIFY `numero_de_pizza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `registro` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
