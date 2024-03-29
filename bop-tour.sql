-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2019 a las 03:11:44
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bop-tour`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `ID_calificacion` int(4) NOT NULL,
  `nombre_calificacion` varchar(30) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `num_estrellas` int(1) NOT NULL,
  `ID_cliente` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID_cliente` int(4) NOT NULL,
  `nombre_cliente` varchar(30) NOT NULL,
  `apellido_cliente` varchar(30) NOT NULL,
  `rut` varchar(9) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `sexo` text NOT NULL,
  `password` varchar(8) NOT NULL,
  `direccion` varchar(25) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `puntos` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_cliente`, `nombre_cliente`, `apellido_cliente`, `rut`, `correo`, `sexo`, `password`, `direccion`, `fecha_nacimiento`, `puntos`) VALUES
(1, 'oscar', 'perez', '19275195', 'operez@ing.ucsc.cl', 'm', '123', 'heras 1140', '2019-06-04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE `comuna` (
  `cut_comuna` int(2) NOT NULL,
  `nombre_comuna` varchar(30) NOT NULL,
  `cut_provincia` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locomocion`
--

CREATE TABLE `locomocion` (
  `ID_locomocion` int(4) NOT NULL,
  `vehiculo` varchar(30) NOT NULL,
  `ID_cliente` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar turistico`
--

CREATE TABLE `lugar turistico` (
  `ID_lugar_turistico` int(4) NOT NULL,
  `nombre_lugar_turistico` varchar(30) NOT NULL,
  `cut_comuna` int(4) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `latitud` varchar(20) NOT NULL,
  `longitud` varchar(20) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `descripcion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productor`
--

CREATE TABLE `productor` (
  `ID_productor` int(6) NOT NULL,
  `nombre_productor` varchar(30) NOT NULL,
  `apellido_productor` varchar(30) NOT NULL,
  `rut` varchar(9) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `password` varchar(8) NOT NULL,
  `sexo` text NOT NULL,
  `direccion` varchar(25) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `num_visitas` int(7) NOT NULL,
  `num_compras` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productor`
--

INSERT INTO `productor` (`ID_productor`, `nombre_productor`, `apellido_productor`, `rut`, `correo`, `password`, `sexo`, `direccion`, `fecha_nacimiento`, `num_visitas`, `num_compras`) VALUES
(1, 'pedro', 'ormeño', '19811237', 'pormeno@ing.ucsc.cl', '123', 'm', 'heras 1140', '2019-06-11', 34, 56),
(2, 'bayron', 'raggio', '18414626', 'braggio@ing.ucsc.cl', '123', 'm', 'chigua', '2019-01-01', 10, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_artesanal`
--

CREATE TABLE `producto_artesanal` (
  `ID_producto_artesanal` int(4) NOT NULL,
  `nombre_producto` varchar(30) NOT NULL,
  `ID_productor` int(4) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `cantidad` int(8) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio` int(10) DEFAULT NULL,
  `cut_comuna` int(4) NOT NULL,
  `cut_region` int(4) NOT NULL,
  `region` varchar(30) NOT NULL,
  `comuna` varchar(30) NOT NULL,
  `categoria_producto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto_artesanal`
--

INSERT INTO `producto_artesanal` (`ID_producto_artesanal`, `nombre_producto`, `ID_productor`, `imagen`, `cantidad`, `descripcion`, `precio`, `cut_comuna`, `cut_region`, `region`, `comuna`, `categoria_producto`) VALUES
(15, 'cermeza', 2, '', 2, 'cerveza 2', 12000, 2, 3, 'Biobio', 'Chiguayante', 'cerveza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `ID_promocion` int(4) NOT NULL,
  `nombre_promocion` varchar(30) NOT NULL,
  `ID_cliente` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `cut_provincia` int(4) NOT NULL,
  `nombre_provincia` varchar(30) NOT NULL,
  `cut_region` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `cut_region` int(2) NOT NULL,
  `nombre_region` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `ID_tienda` int(4) NOT NULL,
  `nombre_tienda` varchar(40) NOT NULL,
  `ubicacion` varchar(40) NOT NULL,
  `latitud` varchar(20) NOT NULL,
  `longitud` varchar(20) NOT NULL,
  `ID_productor` int(4) NOT NULL,
  `rubro` varchar(30) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`ID_tienda`, `nombre_tienda`, `ubicacion`, `latitud`, `longitud`, `ID_productor`, `rubro`, `imagen`) VALUES
(1, 'mall dichato', 'heras 1123', '', '', 1, 'venta', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`ID_calificacion`),
  ADD KEY `fk_cliente2` (`ID_cliente`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_cliente`);

--
-- Indices de la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD PRIMARY KEY (`cut_comuna`),
  ADD KEY `fk_provincia` (`cut_provincia`);

--
-- Indices de la tabla `locomocion`
--
ALTER TABLE `locomocion`
  ADD PRIMARY KEY (`ID_locomocion`),
  ADD KEY `fk_cliente4` (`ID_cliente`);

--
-- Indices de la tabla `lugar turistico`
--
ALTER TABLE `lugar turistico`
  ADD PRIMARY KEY (`ID_lugar_turistico`),
  ADD KEY `fk_comuna` (`cut_comuna`);

--
-- Indices de la tabla `productor`
--
ALTER TABLE `productor`
  ADD PRIMARY KEY (`ID_productor`);

--
-- Indices de la tabla `producto_artesanal`
--
ALTER TABLE `producto_artesanal`
  ADD PRIMARY KEY (`ID_producto_artesanal`),
  ADD UNIQUE KEY `cut_region` (`cut_region`),
  ADD KEY `fk_productor` (`ID_productor`),
  ADD KEY `fk_comuna` (`cut_comuna`) USING BTREE;

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`ID_promocion`),
  ADD KEY `fk_cliente` (`ID_cliente`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`cut_provincia`),
  ADD KEY `fk_region` (`cut_region`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`cut_region`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`ID_tienda`),
  ADD KEY `fk_productor2` (`ID_productor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `ID_calificacion` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_cliente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `locomocion`
--
ALTER TABLE `locomocion`
  MODIFY `ID_locomocion` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lugar turistico`
--
ALTER TABLE `lugar turistico`
  MODIFY `ID_lugar_turistico` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productor`
--
ALTER TABLE `productor`
  MODIFY `ID_productor` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto_artesanal`
--
ALTER TABLE `producto_artesanal`
  MODIFY `ID_producto_artesanal` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `ID_promocion` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `ID_tienda` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `fk_cliente2` FOREIGN KEY (`ID_cliente`) REFERENCES `cliente` (`ID_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD CONSTRAINT `fk_provincia` FOREIGN KEY (`cut_provincia`) REFERENCES `provincia` (`cut_provincia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `locomocion`
--
ALTER TABLE `locomocion`
  ADD CONSTRAINT `fk_cliente4` FOREIGN KEY (`ID_cliente`) REFERENCES `cliente` (`ID_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lugar turistico`
--
ALTER TABLE `lugar turistico`
  ADD CONSTRAINT `fk_comuna` FOREIGN KEY (`cut_comuna`) REFERENCES `comuna` (`cut_comuna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto_artesanal`
--
ALTER TABLE `producto_artesanal`
  ADD CONSTRAINT `fk_productor` FOREIGN KEY (`ID_productor`) REFERENCES `productor` (`ID_productor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`ID_cliente`) REFERENCES `cliente` (`ID_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `fk_region` FOREIGN KEY (`cut_region`) REFERENCES `region` (`cut_region`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD CONSTRAINT `fk_productor2` FOREIGN KEY (`ID_productor`) REFERENCES `productor` (`ID_productor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
