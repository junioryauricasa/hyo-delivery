-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2017 a las 02:25:04
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_hyodelivery`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `intidcodigo` int(11) NOT NULL,
  `nvchnombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `nvchdescripcion` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_categoria`
--

INSERT INTO `tb_categoria` (`intidcodigo`, `nvchnombre`, `nvchdescripcion`) VALUES
(1, 'licores', 'licores en todo'),
(2, 'perfumes', 'perfumes en general'),
(3, 'abarrotes', 'todo en bienes de consumo para el pÃºblico'),
(4, 'pasamaneria', 'todo en pasamaneria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_contactanos`
--

CREATE TABLE `tb_contactanos` (
  `intidcontacto` int(11) NOT NULL,
  `nvchnombre` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `nvchemail` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `nvchdescripcion` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_emp`
--

CREATE TABLE `tb_emp` (
  `intidcodigo` int(11) NOT NULL,
  `nvchnombre` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `nvchdescripcion` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `nvchimg` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pedido`
--

CREATE TABLE `tb_pedido` (
  `intidcodigo` int(11) NOT NULL,
  `codpedido` varchar(14) COLLATE utf8_spanish2_ci NOT NULL,
  `intiduser` int(11) NOT NULL,
  `intidproducto` int(11) NOT NULL,
  `nvchdescripcion` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto`
--

CREATE TABLE `tb_producto` (
  `intidproducto` int(11) NOT NULL,
  `intidcategoria` int(11) NOT NULL,
  `nvchnombre` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `vchdescripcion` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `nvchimg` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `dblprecio` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_producto`
--

INSERT INTO `tb_producto` (`intidproducto`, `intidcategoria`, `nvchnombre`, `vchdescripcion`, `nvchimg`, `dblprecio`) VALUES
(1, 3, 'mermelada SAO', '123', 'img/imgjabon', 12.90);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `estado` int(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_users`
--

INSERT INTO `tb_users` (`id`, `name`, `email`, `password`, `estado`) VALUES
(1, 'ariel rebel', 'arielrebel@gmail.com', '201ab27a9efe7638a3095502cd64b1fa', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`intidcodigo`);

--
-- Indices de la tabla `tb_contactanos`
--
ALTER TABLE `tb_contactanos`
  ADD PRIMARY KEY (`intidcontacto`);

--
-- Indices de la tabla `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD PRIMARY KEY (`intidcodigo`);

--
-- Indices de la tabla `tb_producto`
--
ALTER TABLE `tb_producto`
  ADD PRIMARY KEY (`intidproducto`);

--
-- Indices de la tabla `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `intidcodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tb_contactanos`
--
ALTER TABLE `tb_contactanos`
  MODIFY `intidcontacto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_pedido`
--
ALTER TABLE `tb_pedido`
  MODIFY `intidcodigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_producto`
--
ALTER TABLE `tb_producto`
  MODIFY `intidproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
