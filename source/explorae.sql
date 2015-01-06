-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2015 a las 19:53:01
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `explorae`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE IF NOT EXISTS `artistas` (
`id_artista` int(11) NOT NULL,
  `nombre_artista` text NOT NULL,
  `categoria_artista` int(11) NOT NULL,
  `precio_contrato` bigint(20) NOT NULL,
  `nombre_contacto` text NOT NULL,
  `telefono_contacto` bigint(20) NOT NULL,
  `email_contacto` text NOT NULL,
  `lista_canciones` text NOT NULL,
  `tipo_artista` text NOT NULL,
  `imagen_artista` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id_artista`, `nombre_artista`, `categoria_artista`, `precio_contrato`, `nombre_contacto`, `telefono_contacto`, `email_contacto`, `lista_canciones`, `tipo_artista`, `imagen_artista`) VALUES
(1, 'Jareck', 1, 3500000, 'Jhon Doe', 3124586, 'jhon.doe@mail.com', 'muchas canciones,\r\nmuchas canciones,\r\nmuchas canciones,\r\nmuchas canciones', 'solista', 'jareck.jpg'),
(2, 'Kamil', 2, 2000000, 'Jhon Doe', 21385421, 'jhon.doe@mail.com', 'muchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas canciones', 'grupo', 'kamil.jpg'),
(3, 'Andy Montañez', 3, 21313132123, 'Jhon Doe', 21335412, 'jhon.doe@mail.com', 'Milonga para una niña,\r\nCasi te envidio', 'solista', 'perfil1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`id_cliente` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `no_identificacion` bigint(20) NOT NULL,
  `email` text NOT NULL,
  `telefono_fijo` int(11) NOT NULL,
  `telefono_movil` bigint(20) NOT NULL,
  `direccion_residencia` text NOT NULL,
  `ciudad_residencia` text NOT NULL,
  `procedencia` text NOT NULL,
  `estado` text NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombres`, `apellidos`, `no_identificacion`, `email`, `telefono_fijo`, `telefono_movil`, `direccion_residencia`, `ciudad_residencia`, `procedencia`, `estado`, `fecha_registro`) VALUES
(1, 'prueba prueba', 'cliente', 75111222, 'prueba@mail.com', 127845, 14785234, 'Cll 00 # 00-00', 'manizales', 'formulario', 'Activo', '2014-09-26'),
(2, 'DIANA', 'CIFUENTES', 75123654, 'asesoraexplora@gmail.com', 543211, 7654123111, 'Cra 19 # 17-54', 'Manizales', '0', 'Activo', '2014-09-25'),
(3, 'Jhon ', 'Doe', 1548992, 'jhon.doe@mail.com', 2584657, 13245687, 'Cll 00 # 00-00', 'Manizales', 'web', 'Activo', '2014-10-15'),
(4, 'Camilo', 'Bermudez', 93100400608, 'cristian_sb007@hotmail.com', 23123123, 454623154, 'Cll 00 # 00-00', 'Manizales', 'web', 'Activo', '2014-12-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion_evento`
--

CREATE TABLE IF NOT EXISTS `cotizacion_evento` (
`id_cotizacion` int(11) NOT NULL,
  `fecha_evento` date NOT NULL,
  `fecha_registro` date NOT NULL,
  `total` bigint(20) NOT NULL,
  `sociales_id` int(11) NOT NULL,
  `empresariales_id` int(11) NOT NULL,
  `artista_id` int(11) NOT NULL,
  `equipo_id` int(11) NOT NULL,
  `salon_id` int(11) NOT NULL,
  `decoracion_id` int(11) NOT NULL,
  `tematica_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decoraciones`
--

CREATE TABLE IF NOT EXISTS `decoraciones` (
`id_decoracion` int(11) NOT NULL,
  `nombre_decoracion` text NOT NULL,
  `categoria_decoracion` int(11) NOT NULL,
  `precio_decoracion` int(11) NOT NULL,
  `contacto_decoracion` text NOT NULL,
  `telefono_contacto` bigint(20) NOT NULL,
  `email_contacto` text NOT NULL,
  `imagen_decoracion` text,
  `galeria_1` text,
  `galeria_2` text,
  `galeria_3` text,
  `galeria_4` text,
  `galeria_5` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `decoraciones`
--

INSERT INTO `decoraciones` (`id_decoracion`, `nombre_decoracion`, `categoria_decoracion`, `precio_decoracion`, `contacto_decoracion`, `telefono_contacto`, `email_contacto`, `imagen_decoracion`, `galeria_1`, `galeria_2`, `galeria_3`, `galeria_4`, `galeria_5`) VALUES
(1, 'Tomorrowland', 1, 250000, 'Diana Cifuentes', 21335412, 'prueba@mail.com', 'tomorowland3618.jpg', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
`id_equipo` int(11) NOT NULL,
  `nombre_equipo` text NOT NULL,
  `precio_alquiler` bigint(20) NOT NULL,
  `categoria_equipo` int(11) NOT NULL,
  `nombre_contacto` text NOT NULL,
  `telefono_contacto` bigint(20) NOT NULL,
  `email_contacto` text NOT NULL,
  `detalles` text NOT NULL,
  `imagen_equipo` text NOT NULL,
  `galeria_1` text,
  `galeria_2` text,
  `galeria_3` text,
  `galeria_4` text,
  `galeria_5` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `nombre_equipo`, `precio_alquiler`, `categoria_equipo`, `nombre_contacto`, `telefono_contacto`, `email_contacto`, `detalles`, `imagen_equipo`, `galeria_1`, `galeria_2`, `galeria_3`, `galeria_4`, `galeria_5`) VALUES
(1, 'Pista Luminosa', 200000, 1, 'Pedro Pataquiva', 54812344, 'pedrito.pata@mail.com', 'Esta es una pista conformada con bombillos LED, de direfentes colores, especial para eventos sociales que se realizan en horas de la noche.', 'pista_luminosa.jpg', NULL, NULL, NULL, NULL, NULL),
(2, 'Consola de DJ', 213321, 2, 'Jhon Doe', 21335412, 'jhon.doe@mail.com', 'este es un equipo para dj', '10568799_552509688188494_132108077939309636_n.jpg', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_empresariales`
--

CREATE TABLE IF NOT EXISTS `eventos_empresariales` (
`id_empresariales` int(11) NOT NULL,
  `nombre_evento` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen_empresarial` text NOT NULL,
  `galleria_1` text,
  `galleria_2` text,
  `galleria_3` text,
  `galleria_4` text,
  `galleria_5` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `eventos_empresariales`
--

INSERT INTO `eventos_empresariales` (`id_empresariales`, `nombre_evento`, `descripcion`, `imagen_empresarial`, `galleria_1`, `galleria_2`, `galleria_3`, `galleria_4`, `galleria_5`) VALUES
(1, 'Coctel', 'Este es un evento empresarial', 'salon15.jpg', NULL, NULL, NULL, NULL, NULL),
(2, 'Fiesta fin de año', 'Este es un evento empresarial, lorem', 'P10307451.JPG', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_sociales`
--

CREATE TABLE IF NOT EXISTS `eventos_sociales` (
`id_sociales` int(11) NOT NULL,
  `nombre_evento` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen_social` text NOT NULL,
  `galeria_1` text NOT NULL,
  `galeria_2` text NOT NULL,
  `galeria_3` text NOT NULL,
  `galeria_4` text NOT NULL,
  `galeria_5` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `eventos_sociales`
--

INSERT INTO `eventos_sociales` (`id_sociales`, `nombre_evento`, `descripcion`, `imagen_social`, `galeria_1`, `galeria_2`, `galeria_3`, `galeria_4`, `galeria_5`) VALUES
(1, 'Primera Comunión ', 'Evento social', 'salon4.jpg', '', '', '', '', ''),
(2, '15 Años', 'Este es un evento social', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id_menu` int(11) NOT NULL,
  `nombre_menu` text NOT NULL,
  `precio_menu` int(11) NOT NULL,
  `categoria_menu` int(11) NOT NULL,
  `coctel` text NOT NULL,
  `pasabocas` text NOT NULL,
  `carne` text NOT NULL,
  `arroz` text NOT NULL,
  `ensalada` text NOT NULL,
  `bocado_acompanante` text NOT NULL,
  `imagen_menu` text NOT NULL,
  `galeria_1` text NOT NULL,
  `galeria_2` text NOT NULL,
  `galeria_3` text NOT NULL,
  `galeria_4` text NOT NULL,
  `galeria_5` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id_menu`, `nombre_menu`, `precio_menu`, `categoria_menu`, `coctel`, `pasabocas`, `carne`, `arroz`, `ensalada`, `bocado_acompanante`, `imagen_menu`, `galeria_1`, `galeria_2`, `galeria_3`, `galeria_4`, `galeria_5`) VALUES
(1, 'Cualquiera', 1231546, 1, 'Cualquiera', 'Cualquiera', 'Cualquiera', 'Cualquiera', 'Cualquiera', 'Cualquiera', '531739_102753979917064_268521701_n_-_copia1.jpg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salones`
--

CREATE TABLE IF NOT EXISTS `salones` (
`id_salon` int(11) NOT NULL,
  `nombre_salon` text NOT NULL,
  `precio_alquiler` bigint(20) NOT NULL,
  `direccion_ubicacion` text NOT NULL,
  `total_capacidad` int(11) NOT NULL,
  `categoria_salon` int(11) NOT NULL,
  `nombre_contacto` text NOT NULL,
  `telefono_contacto` bigint(20) NOT NULL,
  `email_contacto` text NOT NULL,
  `imagen_salon` text NOT NULL,
  `galeria_1` text,
  `galeria_2` text,
  `galeria_3` text,
  `galeria_4` text,
  `galeria_5` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `salones`
--

INSERT INTO `salones` (`id_salon`, `nombre_salon`, `precio_alquiler`, `direccion_ubicacion`, `total_capacidad`, `categoria_salon`, `nombre_contacto`, `telefono_contacto`, `email_contacto`, `imagen_salon`, `galeria_1`, `galeria_2`, `galeria_3`, `galeria_4`, `galeria_5`) VALUES
(1, 'En cualquier parte', 520000, 'Cll 00 # 00-00', 110, 2, 'Jhon Doe', 12345462, 'jhon.doe@mail.com', 'salon81.jpg', NULL, NULL, NULL, NULL, NULL),
(2, 'Liborio Lopera', 600000, 'Cra 20 # 17-35', 110, 2, 'Jose Ignacio Lopera', 124578936, 'jlopera33@gmail.com', 'salon1.jpg', NULL, NULL, NULL, NULL, NULL),
(4, 'El cuchitri', 650000, 'Cra 20 # 17-35', 110, 1, 'Jose Ignacio Lopera', 23123456421, 'pedrito.pata@mail.com', 'salon5.jpg', NULL, NULL, NULL, NULL, NULL),
(5, 'otro salon', 560000, 'Cll 00 # 00-00', 120, 3, 'Jhon Doe', 123456, 'jhon.doe@mail.com', 'salon14.jpg', NULL, NULL, NULL, NULL, NULL),
(6, 'El hueco', 2135412, 'Cll 00 # 00-00', 105, 1, 'Jose Ignacio Lopera', 2123123123, 'prueba@mail.com', 'salon7.jpg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tematicas`
--

CREATE TABLE IF NOT EXISTS `tematicas` (
`id_tematica` int(11) NOT NULL,
  `nombre_tematica` text NOT NULL,
  `precio_tematica` int(11) NOT NULL,
  `categoria_tematica` int(11) NOT NULL,
  `imagen_tematica` text NOT NULL,
  `galeria_1` text NOT NULL,
  `galeria_2` text NOT NULL,
  `galeria_3` text NOT NULL,
  `galeria_4` text NOT NULL,
  `galeria_5` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tematicas`
--

INSERT INTO `tematicas` (`id_tematica`, `nombre_tematica`, `precio_tematica`, `categoria_tematica`, `imagen_tematica`, `galeria_1`, `galeria_2`, `galeria_3`, `galeria_4`, `galeria_5`) VALUES
(1, 'Prueba', 21354, 1, '1779319_891355474222982_251376755206676623_n.jpg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id_usuario` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `no_identificacion` bigint(20) NOT NULL,
  `email` text NOT NULL,
  `password` text,
  `telefono_fijo` bigint(20) NOT NULL,
  `telefono_movil` bigint(20) NOT NULL,
  `direccion_residencia` text NOT NULL,
  `ciudad_residencia` text NOT NULL,
  `tipo_usuario` text NOT NULL,
  `estado` text NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `no_identificacion`, `email`, `password`, `telefono_fijo`, `telefono_movil`, `direccion_residencia`, `ciudad_residencia`, `tipo_usuario`, `estado`, `fecha_registro`) VALUES
(1, 'CRISTIAN', 'SANCHEZ', 1053829585, 'ccsanchez80@misena.edu.co', '123456', 12345, 123456, 'Cll 53 # 10-58', 'Manizales', 'admin', 'Activo', '2014-09-23'),
(2, 'DIANA', 'CIFUENTES', 75123654, 'asesoraexplora@gmail.com', '123456', 543211, 7654123111, 'Cra 19 # 17-54', 'Manizales', 'asesor', 'Activo', '2014-09-25'),
(7, 'Demonoid', 'Demon', 666, 'demoinoid.demon@inferno.net', '123456', 66666, 6666666, 'Cll 66 # 6-66', 'Manizales', 'asesor', 'Activo', '2014-10-27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
 ADD PRIMARY KEY (`id_artista`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cotizacion_evento`
--
ALTER TABLE `cotizacion_evento`
 ADD PRIMARY KEY (`id_cotizacion`), ADD KEY `empresariales_id` (`empresariales_id`,`artista_id`,`equipo_id`,`salon_id`,`cliente_id`), ADD KEY `sociales_id` (`sociales_id`), ADD KEY `empresariales_id_2` (`empresariales_id`), ADD KEY `artista_id` (`artista_id`), ADD KEY `equipo_id` (`equipo_id`), ADD KEY `salon_id` (`salon_id`), ADD KEY `usuario_id` (`cliente_id`), ADD KEY `decoracion_id` (`decoracion_id`), ADD KEY `tematica_id` (`tematica_id`,`menu_id`), ADD KEY `menu_id` (`menu_id`);

--
-- Indices de la tabla `decoraciones`
--
ALTER TABLE `decoraciones`
 ADD PRIMARY KEY (`id_decoracion`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
 ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `eventos_empresariales`
--
ALTER TABLE `eventos_empresariales`
 ADD PRIMARY KEY (`id_empresariales`);

--
-- Indices de la tabla `eventos_sociales`
--
ALTER TABLE `eventos_sociales`
 ADD PRIMARY KEY (`id_sociales`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `salones`
--
ALTER TABLE `salones`
 ADD PRIMARY KEY (`id_salon`);

--
-- Indices de la tabla `tematicas`
--
ALTER TABLE `tematicas`
 ADD PRIMARY KEY (`id_tematica`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
MODIFY `id_artista` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cotizacion_evento`
--
ALTER TABLE `cotizacion_evento`
MODIFY `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `decoraciones`
--
ALTER TABLE `decoraciones`
MODIFY `id_decoracion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `eventos_empresariales`
--
ALTER TABLE `eventos_empresariales`
MODIFY `id_empresariales` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `eventos_sociales`
--
ALTER TABLE `eventos_sociales`
MODIFY `id_sociales` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `salones`
--
ALTER TABLE `salones`
MODIFY `id_salon` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tematicas`
--
ALTER TABLE `tematicas`
MODIFY `id_tematica` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cotizacion_evento`
--
ALTER TABLE `cotizacion_evento`
ADD CONSTRAINT `cotizacion_evento_ibfk_1` FOREIGN KEY (`sociales_id`) REFERENCES `eventos_sociales` (`id_sociales`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `cotizacion_evento_ibfk_2` FOREIGN KEY (`empresariales_id`) REFERENCES `eventos_empresariales` (`id_empresariales`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `cotizacion_evento_ibfk_3` FOREIGN KEY (`artista_id`) REFERENCES `artistas` (`id_artista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `cotizacion_evento_ibfk_4` FOREIGN KEY (`equipo_id`) REFERENCES `equipos` (`id_equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `cotizacion_evento_ibfk_5` FOREIGN KEY (`salon_id`) REFERENCES `salones` (`id_salon`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `cotizacion_evento_ibfk_6` FOREIGN KEY (`decoracion_id`) REFERENCES `decoraciones` (`id_decoracion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `cotizacion_evento_ibfk_7` FOREIGN KEY (`tematica_id`) REFERENCES `tematicas` (`id_tematica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `cotizacion_evento_ibfk_8` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `cotizacion_evento_ibfk_9` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
