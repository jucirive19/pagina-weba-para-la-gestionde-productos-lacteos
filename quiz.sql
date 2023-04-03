-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2021 a las 16:25:59
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compradores`
--

CREATE TABLE `compradores` (
  `id` int(200) NOT NULL,
  `nombreC` varchar(20) NOT NULL,
  `producto` varchar(20) NOT NULL,
  `cantidad` int(200) NOT NULL,
  `costo` int(200) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compradores`
--

INSERT INTO `compradores` (`id`, `nombreC`, `producto`, `cantidad`, `costo`, `fecha`) VALUES
(14, 'ana', 'nata', 21, 700, '2021-05-12'),
(15, 'natali', 'Qcosteño', 22, 45000, '2021-05-16'),
(16, 'pancho', 'kumis', 10, 2800, '2021-05-17'),
(17, 'gustabo', 'mantequilla', 8, 750, '2021-06-02'),
(18, 'robert', 'QuesoCrema', 14, 2450, '2021-06-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cosproducto`
--

CREATE TABLE `cosproducto` (
  `id` int(200) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Costo` int(200) NOT NULL,
  `Fecha` date NOT NULL DEFAULT current_timestamp(),
  `Cantidad` int(200) NOT NULL,
  `costoPr` int(200) NOT NULL,
  `ganancia` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cosproducto`
--

INSERT INTO `cosproducto` (`id`, `Nombre`, `Costo`, `Fecha`, `Cantidad`, `costoPr`, `ganancia`) VALUES
(14, 'nata', 700, '2021-05-12', 21, 150, 14550),
(15, 'Qcosteño', 45000, '2021-05-16', 22, 46200, 943800),
(16, 'kumis', 2800, '2021-05-17', 10, 8000, 20000),
(26, 'mantequilla', 750, '2021-05-24', 8, 3700, 2300),
(28, 'QuesoCrema', 2450, '2021-06-03', 14, 6850, 27450);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuajada`
--

CREATE TABLE `cuajada` (
  `id` int(200) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cantidad` int(200) NOT NULL,
  `costoPr` int(200) NOT NULL,
  `ganancia` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuajada`
--

INSERT INTO `cuajada` (`id`, `fecha`, `cantidad`, `costoPr`, `ganancia`) VALUES
(1, '2021-05-20 21:39:43', 12, 10500, 43500),
(2, '2021-06-03 13:32:21', 16, 16500, 71500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE `insumos` (
  `id` int(200) NOT NULL,
  `NombreIN` varchar(20) NOT NULL,
  `CostoIN` int(200) NOT NULL,
  `Fecha` date NOT NULL DEFAULT current_timestamp(),
  `NombrePR` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`id`, `NombreIN`, `CostoIN`, `Fecha`, `NombrePR`) VALUES
(24, 'completo', 150, '2021-05-12', 'nata'),
(25, 'cuajo', 800, '2021-05-16', 'Qcosteño'),
(26, 'complementos', 2150, '2021-05-17', 'kumis'),
(27, 'gas', 500, '2021-05-24', 'mantequilla'),
(28, 'suero', 15000, '2021-06-02', 'queso'),
(29, 'cuajo', 1450, '2021-06-03', 'QuesoCrema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leche`
--

CREATE TABLE `leche` (
  `id` int(200) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `costo` int(200) NOT NULL,
  `cantidad` int(200) NOT NULL,
  `ganancia` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `leche`
--

INSERT INTO `leche` (`id`, `fecha`, `costo`, `cantidad`, `ganancia`) VALUES
(1, '2021-05-20', 600, 12, 7200),
(2, '2021-05-21', 600, 32, 19200),
(3, '2021-06-02', 600, 22, 13200),
(4, '2021-06-02', 600, 18, 10800),
(5, '2021-06-03', 600, 22, 13200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parcial`
--

CREATE TABLE `parcial` (
  `cd` int(12) NOT NULL,
  `nombre` varchar(48) NOT NULL,
  `apellido` varchar(11) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `cedula` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parcial`
--

INSERT INTO `parcial` (`cd`, `nombre`, `apellido`, `telefono`, `cedula`) VALUES
(2, 'juan', 'rivera', '3143940013', '12345'),
(3, 'jhon', 'cardenas', '3115689202', '753612'),
(4, 'sophia', 'vallejo', '3153592853', '123456'),
(5, 'karen', 'garcia', '3125894561', '156892'),
(6, 'ana', 'gozo', '3168514892', '7589261'),
(8, 'Rosa', '', '314892745', '7531456'),
(10, 'Eliza', 'Romero', '1321654', '36521'),
(11, 'juan rafael', ' perez niño', '3136115', '152456'),
(12, 'adriel', 'adas', '3145689', '145689');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(200) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Costo` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `Nombre`, `Costo`) VALUES
(14, 'nata', 700),
(15, 'costeño', 45000),
(16, 'kumis', 2800),
(26, 'mantequilla', 750),
(28, 'QuesoCrema', 2450);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prouser`
--

CREATE TABLE `prouser` (
  `id` int(200) NOT NULL,
  `Cedula` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Passwor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prouser`
--

INSERT INTO `prouser` (`id`, `Cedula`, `Apellido`, `Nombre`, `Usuario`, `Passwor`) VALUES
(1, '1265465', 'Rivera', 'Juan', 'jucirive@gmail.com', '123456'),
(2, '1118573960', 'perilla', 'camilo', 'jucirive19@gmail.com', 'melasuda'),
(3, '1118573960', 'pinto', 'jhon', 'jhon@gmail.com', '123456'),
(4, '1118574709', 'melano', 'robert', 'robert@gmail.com', '123456'),
(5, '10225617', 'quintero', 'robert', 'robert@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedor`
--

CREATE TABLE `provedor` (
  `id` int(200) NOT NULL,
  `provedores` varchar(20) NOT NULL,
  `cantidad` int(200) NOT NULL,
  `costo` int(200) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provedor`
--

INSERT INTO `provedor` (`id`, `provedores`, `cantidad`, `costo`, `fecha`) VALUES
(2, 'juan', 20, 200, '2021-05-16'),
(3, 'camilo', 4, 150, '2021-05-17'),
(7, 'Camilo', 12, 450, '2021-06-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `queso`
--

CREATE TABLE `queso` (
  `id` int(200) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cantidad` int(200) NOT NULL,
  `costoPr` int(200) NOT NULL,
  `ganancia` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `queso`
--

INSERT INTO `queso` (`id`, `fecha`, `cantidad`, `costoPr`, `ganancia`) VALUES
(1, '2021-05-20 22:07:53', 14, 18500, 51500);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compradores`
--
ALTER TABLE `compradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cosproducto`
--
ALTER TABLE `cosproducto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuajada`
--
ALTER TABLE `cuajada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `leche`
--
ALTER TABLE `leche`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parcial`
--
ALTER TABLE `parcial`
  ADD PRIMARY KEY (`cd`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prouser`
--
ALTER TABLE `prouser`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `provedor`
--
ALTER TABLE `provedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `queso`
--
ALTER TABLE `queso`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compradores`
--
ALTER TABLE `compradores`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `cosproducto`
--
ALTER TABLE `cosproducto`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `cuajada`
--
ALTER TABLE `cuajada`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `leche`
--
ALTER TABLE `leche`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `parcial`
--
ALTER TABLE `parcial`
  MODIFY `cd` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `prouser`
--
ALTER TABLE `prouser`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `provedor`
--
ALTER TABLE `provedor`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `queso`
--
ALTER TABLE `queso`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
