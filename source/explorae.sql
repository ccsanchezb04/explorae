-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-01-2015 a las 13:44:42
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `explorae`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `id_artista` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_artista` text NOT NULL,
  `categoria_artista` int(11) NOT NULL,
  `precio_contrato` bigint(20) NOT NULL,
  `nombre_contacto` text NOT NULL,
  `telefono_contacto` bigint(20) NOT NULL,
  `email_contacto` text NOT NULL,
  `lista_canciones` text NOT NULL,
  `tipo_artista` text NOT NULL,
  `imagen_artista` text NOT NULL,
  PRIMARY KEY (`id_artista`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id_artista`, `nombre_artista`, `categoria_artista`, `precio_contrato`, `nombre_contacto`, `telefono_contacto`, `email_contacto`, `lista_canciones`, `tipo_artista`, `imagen_artista`) VALUES
(1, 'Jareck', 1, 3500000, 'Jhon Doe', 3124586, 'jhon.doe@mail.com', 'muchas canciones,\r\nmuchas canciones,\r\nmuchas canciones,\r\nmuchas canciones', 'solista', 'jareck.jpg'),
(2, 'Kamil', 2, 2000000, 'Jhon Doe', 21385421, 'jhon.doe@mail.com', 'muchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas canciones', 'grupo', 'kamil.jpg'),
(3, 'Andy Montañez', 3, 21313132123, 'Jhon Doe', 21335412, 'jhon.doe@mail.com', 'Milonga para una niña,\r\nCasi te envidio', 'solista', 'perfil1.jpg'),
(4, 'Don Omar', 2, 135000000, 'jhon doe', 21385421, 'jhon.doe@mail.com', 'muchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas cancionesmuchas canciones', 'grupo', 'donomar.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
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
  `fecha_registro` date NOT NULL,
  PRIMARY KEY (`id_cliente`)
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

CREATE TABLE `cotizacion_evento` (
  `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_evento` date NOT NULL,
  `fecha_registro` date NOT NULL,
  `total` bigint(20) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `tipo_evento` text NOT NULL,
  `nombre_evento` text NOT NULL,
  PRIMARY KEY (`id_cotizacion`),
  KEY `empresariales_id` (`cliente_id`),
  KEY `usuario_id` (`cliente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Volcado de datos para la tabla `cotizacion_evento`
--

INSERT INTO `cotizacion_evento` (`id_cotizacion`, `fecha_evento`, `fecha_registro`, `total`, `cliente_id`, `tipo_evento`, `nombre_evento`) VALUES
(1, '2015-02-12', '2015-01-28', 150299000, 4, 'social', 'Primera Comunión ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion_items`
--

CREATE TABLE `cotizacion_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  `caracteristica` text,
  `item_id` int(11) NOT NULL,
  `cotizacion_id` int(11) NOT NULL,
  `comentario` text,
  `tipo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cotizacion_id` (`cotizacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=207 ;

--
-- Volcado de datos para la tabla `cotizacion_items`
--

INSERT INTO `cotizacion_items` (`id`, `cantidad`, `caracteristica`, `item_id`, `cotizacion_id`, `comentario`, `tipo`) VALUES
(199, 20, 'otro', 3, 1, 'conta morada', 'deco'),
(200, 1, 'Amarillo', 1, 1, 'con cintas rojas', 'deco'),
(201, 10, '', 4, 1, 'azules', 'deco'),
(202, 10, 'menu 1', 1, 1, 'con carne asada o de cerdo', 'menu'),
(203, 1, 'otro', 1, 1, 'grande espacioso', 'room'),
(204, 10, 'rojo', 1, 1, 'para visitantes', 'tema'),
(205, 1, '', 1, 1, '', 'tools'),
(206, 1, '', 4, 1, 'con canciones exitosas', 'artist');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decoraciones`
--

CREATE TABLE `decoraciones` (
  `id_decoracion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_decoracion` text NOT NULL,
  `categoria_decoracion` int(11) NOT NULL,
  `precio_decoracion` int(11) NOT NULL,
  `contacto_decoracion` text NOT NULL,
  `telefono_contacto` bigint(20) NOT NULL,
  `email_contacto` text NOT NULL,
  `imagen_decoracion` text,
  `caracteristica_1` text,
  `caracteristica_2` text,
  `caracteristica_3` text,
  `caracteristica_4` text,
  `caracteristica_5` text,
  PRIMARY KEY (`id_decoracion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `decoraciones`
--

INSERT INTO `decoraciones` (`id_decoracion`, `nombre_decoracion`, `categoria_decoracion`, `precio_decoracion`, `contacto_decoracion`, `telefono_contacto`, `email_contacto`, `imagen_decoracion`, `caracteristica_1`, `caracteristica_2`, `caracteristica_3`, `caracteristica_4`, `caracteristica_5`) VALUES
(1, 'Ramo Principal', 1, 250000, 'Diana Cifuentes', 21335412, 'prueba@mail.com', 'tomorowland3618.jpg', 'Blanco', 'Amarillo', 'Rojo', 'Azul', 'Morado'),
(2, 'Centros de mesa', 1, 10000, 'Violeta Flores', 1234509876, 'violeta@mail.com', 'centromesa.jpg', 'Azules', 'En flores', 'Flores no reales', 'Morado', 'Rosada'),
(3, 'miniramitos rosas', 2, 30000, 'Flores violestas', 1234509876, 'violeta@mail.com', 'tulipanes-rojos.jpg', 'Amarillo', 'En flores', 'Papel seda', 'Morado', 'Rosada'),
(4, 'miniramitos', 3, 120000, 'Flores violestas', 1234509876, 'violeta@mail.com', 'rosas.jpg', 'Rosadas', 'En flores', 'Papel seda', 'Morado, azules', 'Rosadas y rojas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_equipo` text NOT NULL,
  `precio_alquiler` bigint(20) NOT NULL,
  `categoria_equipo` int(11) NOT NULL,
  `nombre_contacto` text NOT NULL,
  `telefono_contacto` bigint(20) NOT NULL,
  `email_contacto` text NOT NULL,
  `detalles` text NOT NULL,
  `imagen_equipo` text NOT NULL,
  `caracteristica_1` text,
  `caracteristica_2` text,
  `caracteristica_3` text,
  `caracteristica_4` text,
  `caracteristica_5` text,
  PRIMARY KEY (`id_equipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `nombre_equipo`, `precio_alquiler`, `categoria_equipo`, `nombre_contacto`, `telefono_contacto`, `email_contacto`, `detalles`, `imagen_equipo`, `caracteristica_1`, `caracteristica_2`, `caracteristica_3`, `caracteristica_4`, `caracteristica_5`) VALUES
(1, 'Pista Luminosa', 200000, 1, 'Pedro Pataquiva', 54812344, 'pedrito.pata@mail.com', 'Esta es una pista conformada con bombillos LED, de direfentes colores, especial para eventos sociales que se realizan en horas de la noche.', 'pista_luminosa.jpg', NULL, NULL, NULL, NULL, NULL),
(2, 'Consola de DJ', 213321, 2, 'Jhon Doe', 21335412, 'jhon.doe@mail.com', 'este es un equipo para dj', '10568799_552509688188494_132108077939309636_n.jpg', NULL, NULL, 'consola grande con bafles gigantes', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_empresariales`
--

CREATE TABLE `eventos_empresariales` (
  `id_empresariales` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_evento` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen_empresarial` text NOT NULL,
  PRIMARY KEY (`id_empresariales`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `eventos_empresariales`
--

INSERT INTO `eventos_empresariales` (`id_empresariales`, `nombre_evento`, `descripcion`, `imagen_empresarial`) VALUES
(1, 'Coctel', 'Este es un evento empresarial', 'salon15.jpg'),
(2, 'Fiesta fin de año', 'Este es un evento empresarial, lorem', 'P10307451.JPG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_sociales`
--

CREATE TABLE `eventos_sociales` (
  `id_sociales` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_evento` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen_social` text NOT NULL,
  PRIMARY KEY (`id_sociales`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `eventos_sociales`
--

INSERT INTO `eventos_sociales` (`id_sociales`, `nombre_evento`, `descripcion`, `imagen_social`) VALUES
(1, 'Primera Comunión ', 'Evento social', 'salon4.jpg'),
(2, '15 Años', 'Este es un evento social', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
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
  `caracteristica_1` text NOT NULL,
  `caracteristica_2` text NOT NULL,
  `caracteristica_3` text NOT NULL,
  `caracteristica_4` text NOT NULL,
  `caracteristica_5` text NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id_menu`, `nombre_menu`, `precio_menu`, `categoria_menu`, `coctel`, `pasabocas`, `carne`, `arroz`, `ensalada`, `bocado_acompanante`, `imagen_menu`, `caracteristica_1`, `caracteristica_2`, `caracteristica_3`, `caracteristica_4`, `caracteristica_5`) VALUES
(1, 'Cualquiera', 1231546, 2, 'Cualquiera', 'Cualquiera', 'Cualquiera', 'Cualquiera', 'Cualquiera', 'Cualquiera', '531739_102753979917064_268521701_n_-_copia1.jpg', 'menu 1', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salones`
--

CREATE TABLE `salones` (
  `id_salon` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_salon` text NOT NULL,
  `precio_alquiler` bigint(20) NOT NULL,
  `direccion_ubicacion` text NOT NULL,
  `total_capacidad` int(11) NOT NULL,
  `categoria_salon` int(11) NOT NULL,
  `nombre_contacto` text NOT NULL,
  `telefono_contacto` bigint(20) NOT NULL,
  `email_contacto` text NOT NULL,
  `imagen_salon` text NOT NULL,
  `caracteristica_1` text,
  `caracteristica_2` text,
  `caracteristica_3` text,
  `caracteristica_4` text,
  `caracteristica_5` text,
  PRIMARY KEY (`id_salon`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `salones`
--

INSERT INTO `salones` (`id_salon`, `nombre_salon`, `precio_alquiler`, `direccion_ubicacion`, `total_capacidad`, `categoria_salon`, `nombre_contacto`, `telefono_contacto`, `email_contacto`, `imagen_salon`, `caracteristica_1`, `caracteristica_2`, `caracteristica_3`, `caracteristica_4`, `caracteristica_5`) VALUES
(1, 'En cualquier parte', 520000, 'Cll 00 # 00-00', 110, 2, 'Jhon Doe', 12345462, 'jhon.doe@mail.com', 'salon81.jpg', NULL, NULL, NULL, NULL, NULL),
(2, 'Liborio Lopera', 600000, 'Cra 20 # 17-35', 110, 2, 'Jose Ignacio Lopera', 124578936, 'jlopera33@gmail.com', 'salon1.jpg', 'Color rojo', NULL, NULL, NULL, NULL),
(4, 'El cuchitri', 650000, 'Cra 20 # 17-35', 110, 1, 'Jose Ignacio Lopera', 23123456421, 'pedrito.pata@mail.com', 'salon5.jpg', NULL, NULL, NULL, NULL, NULL),
(5, 'otro salon', 560000, 'Cll 00 # 00-00', 120, 3, 'Jhon Doe', 123456, 'jhon.doe@mail.com', 'salon14.jpg', NULL, NULL, NULL, NULL, NULL),
(6, 'El hueco', 2135412, 'Cll 00 # 00-00', 105, 1, 'Jose Ignacio Lopera', 2123123123, 'prueba@mail.com', 'salon7.jpg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tematicas`
--

CREATE TABLE `tematicas` (
  `id_tematica` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tematica` text NOT NULL,
  `precio_tematica` int(11) NOT NULL,
  `categoria_tematica` int(11) NOT NULL,
  `imagen_tematica` text NOT NULL,
  `caracteristica_1` text NOT NULL,
  `caracteristica_2` text NOT NULL,
  `caracteristica_3` text NOT NULL,
  `caracteristica_4` text NOT NULL,
  `caracteristica_5` text NOT NULL,
  PRIMARY KEY (`id_tematica`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tematicas`
--

INSERT INTO `tematicas` (`id_tematica`, `nombre_tematica`, `precio_tematica`, `categoria_tematica`, `imagen_tematica`, `caracteristica_1`, `caracteristica_2`, `caracteristica_3`, `caracteristica_4`, `caracteristica_5`) VALUES
(1, 'Prueba', 21354, 2, '1779319_891355474222982_251376755206676623_n.jpg', 'rojo', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
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
  `fecha_registro` date NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `no_identificacion`, `email`, `password`, `telefono_fijo`, `telefono_movil`, `direccion_residencia`, `ciudad_residencia`, `tipo_usuario`, `estado`, `fecha_registro`) VALUES
(1, 'CRISTIAN', 'SANCHEZ', 1053829585, 'ccsanchez80@misena.edu.co', '123456', 12345, 123456, 'Cll 53 # 10-58', 'Manizales', 'admin', 'Activo', '2014-09-23'),
(2, 'DIANA', 'CIFUENTES', 75123654, 'asesoraexplora@gmail.com', '123456', 543211, 7654123111, 'Cra 19 # 17-54', 'Manizales', 'asesor', 'Activo', '2014-09-25'),
(7, 'Demonoid', 'Demon', 666, 'demoinoid.demon@inferno.net', '123456', 66666, 6666666, 'Cll 66 # 6-66', 'Manizales', 'asesor', 'Activo', '2014-10-27');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cotizacion_evento`
--
ALTER TABLE `cotizacion_evento`
  ADD CONSTRAINT `cotizacion_evento_ibfk_9` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cotizacion_items`
--
ALTER TABLE `cotizacion_items`
  ADD CONSTRAINT `cotizacion_items_ibfk_1` FOREIGN KEY (`cotizacion_id`) REFERENCES `cotizacion_evento` (`id_cotizacion`) ON DELETE CASCADE ON UPDATE CASCADE;
