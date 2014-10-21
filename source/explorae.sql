-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2014 a las 00:25:30
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
  `precio_contrato` bigint(20) NOT NULL,
  `nombre_contacto` text NOT NULL,
  `telefono_contacto` bigint(20) NOT NULL,
  `correo_contacto` text NOT NULL,
  `lista_canciones` text NOT NULL,
  `tipo_artista` text NOT NULL,
  `imagen_artista` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id_artista`, `nombre_artista`, `precio_contrato`, `nombre_contacto`, `telefono_contacto`, `correo_contacto`, `lista_canciones`, `tipo_artista`, `imagen_artista`) VALUES
(1, 'Jareck', 3500000, 'Jhon Doe', 3124586, 'jhon.doe@mail.com', 'muchas cancionesmuchas cancionesmuchas cancionesmuchas canciones', 'solista', '../public/images/page/artistas/jareck.jpg'),
(2, 'Kamil', 2000000, 'Jhon Doe', 21385421, 'jhon.doe@mail.com', 'muchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas canciones', 'grupo', '../public/images/page/artistas/kamil.jpg');

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
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
`id_equipo` int(11) NOT NULL,
  `nombre_equipo` text NOT NULL,
  `precio_alquiler` bigint(20) NOT NULL,
  `nombre_contacto` text NOT NULL,
  `telefono_contacto` bigint(20) NOT NULL,
  `correo_contacto` text NOT NULL,
  `detalle` text NOT NULL,
  `imagen_equipo` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `nombre_equipo`, `precio_alquiler`, `nombre_contacto`, `telefono_contacto`, `correo_contacto`, `detalle`, `imagen_equipo`) VALUES
(1, 'Pista Luminosa', 200000, 'Pedro Pataquiva', 54812344, 'pedrito.pata@mail.com', 'Esta es una pista conformada con bombillos LED, de direfentes colores, especial para eventos sociales que se realizan en horas de la noche', '../public/images/page/equipos/pista_luminosa.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_empresariales`
--

CREATE TABLE IF NOT EXISTS `eventos_empresariales` (
`id_empresariales` int(11) NOT NULL,
  `nombre_evento` text NOT NULL,
  `precio` bigint(20) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen_empresarial` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `eventos_empresariales`
--

INSERT INTO `eventos_empresariales` (`id_empresariales`, `nombre_evento`, `precio`, `descripcion`, `imagen_empresarial`) VALUES
(1, 'Coctel', 1000000, 'Este es un evento empresarial', '../public/images/page/eventos_empresariales/salon15.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_sociales`
--

CREATE TABLE IF NOT EXISTS `eventos_sociales` (
`id_sociales` int(11) NOT NULL,
  `nombre_evento` text NOT NULL,
  `precio` bigint(20) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen_social` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `eventos_sociales`
--

INSERT INTO `eventos_sociales` (`id_sociales`, `nombre_evento`, `precio`, `descripcion`, `imagen_social`) VALUES
(1, 'Primera Comuniï¿½n ', 1200000, 'Evento social', '../public/images/page/eventos_sociales/salon4.jpg');

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
  `nombre_contacto` text NOT NULL,
  `telefono_contacto` bigint(20) NOT NULL,
  `email_contacto` text NOT NULL,
  `imagen_salon` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `salones`
--

INSERT INTO `salones` (`id_salon`, `nombre_salon`, `precio_alquiler`, `direccion_ubicacion`, `total_capacidad`, `nombre_contacto`, `telefono_contacto`, `email_contacto`, `imagen_salon`) VALUES
(1, 'Liborio Lopera', 600000, 'Cra 20 # 17-35', 110, 'Jose Ignacio Lopera', 124578936, 'jlopera33@gmail.com', '../public/images/page/salones/salon1.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `no_identificacion`, `email`, `password`, `telefono_fijo`, `telefono_movil`, `direccion_residencia`, `ciudad_residencia`, `tipo_usuario`, `estado`, `fecha_registro`) VALUES
(1, 'CRISTIAN', 'SANCHEZ', 1053829585, 'ccsanchez80@misena.edu.co', '123456', 12345, 123456, 'Cll 53 # 10-58', 'Manizales', 'admin', 'Activo', '2014-09-23'),
(2, 'DIANA', 'CIFUENTES', 75123654, 'asesoraexplora@gmail.com', '123456', 54321, 7654123, 'Cra 20 # 17-35', 'Manizales', 'asesor', 'Activo', '2014-09-25'),
(3, 'prueba', 'cliente', 75111222, 'prueba@mail.com', NULL, 127845, 14785234, 'Cll 00 # 00-00', 'manizales', 'cliente', 'Activo', '2014-09-26'),
(4, 'Juanito', 'AlimaÃ±a', 41457812, 'juanito@mail.com', NULL, 124578, 9865321, 'Cll 00 # 00-00', 'manizales', 'cliente', 'Activo', '2014-09-29'),
(5, 'Jhon ', 'Doe', 1548992, 'jhon.doe@mail.com', '', 2584657, 13245687, 'Cll 00 # 00-00', 'Manizales', 'cliente', 'Activo', '2014-10-15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
 ADD PRIMARY KEY (`id_artista`);

--
-- Indices de la tabla `cotizacion_evento`
--
ALTER TABLE `cotizacion_evento`
 ADD PRIMARY KEY (`id_cotizacion`), ADD KEY `empresariales_id` (`empresariales_id`,`artista_id`,`equipo_id`,`salon_id`,`usuario_id`), ADD KEY `sociales_id` (`sociales_id`), ADD KEY `empresariales_id_2` (`empresariales_id`), ADD KEY `artista_id` (`artista_id`), ADD KEY `equipo_id` (`equipo_id`), ADD KEY `salon_id` (`salon_id`), ADD KEY `usuario_id` (`usuario_id`);

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
-- Indices de la tabla `salones`
--
ALTER TABLE `salones`
 ADD PRIMARY KEY (`id_salon`);

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
MODIFY `id_artista` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `cotizacion_evento`
--
ALTER TABLE `cotizacion_evento`
MODIFY `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `eventos_empresariales`
--
ALTER TABLE `eventos_empresariales`
MODIFY `id_empresariales` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `eventos_sociales`
--
ALTER TABLE `eventos_sociales`
MODIFY `id_sociales` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `salones`
--
ALTER TABLE `salones`
MODIFY `id_salon` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
ADD CONSTRAINT `cotizacion_evento_ibfk_5` FOREIGN KEY (`salon_id`) REFERENCES `salones` (`id_salon`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
