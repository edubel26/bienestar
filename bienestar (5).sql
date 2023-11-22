-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2023 a las 16:45:13
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bienestar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acompaniante`
--

CREATE TABLE `acompaniante` (
  `id_acompaniante` int(11) NOT NULL COMMENT 'id de tabla acompañante',
  `documento` varchar(20) NOT NULL COMMENT 'numero de documento del funcionario para reconocer los acompañantes ',
  `tipo_doc` varchar(50) NOT NULL COMMENT 'tipo de documento del acompañante',
  `no_documento` varchar(100) NOT NULL COMMENT 'numero de identificación del acompañante',
  `fecha_exp` varchar(10) NOT NULL COMMENT 'fecha de expedición del acompañante',
  `dpto_exp` varchar(50) NOT NULL COMMENT 'departamento de expedición del documento del acompañante',
  `mpio_exp` varchar(50) NOT NULL COMMENT 'municipio de expedición del documento del acompañante',
  `pdf_doc` varchar(255) NOT NULL COMMENT 'pdf del documento del acompañante',
  `nombre` varchar(50) NOT NULL COMMENT 'nombre del acompañante',
  `apellido` varchar(50) NOT NULL COMMENT 'apellido del acompañante ',
  `fecha_nacimiento` varchar(50) NOT NULL COMMENT 'fecha de nacimiento del acompañante',
  `dpto_nac` varchar(50) NOT NULL COMMENT 'departamento de nacimiento del acompañante',
  `mpio_nac` varchar(50) NOT NULL COMMENT 'municipio de nacimiento del acompañante',
  `eps_afiliado` varchar(50) NOT NULL COMMENT 'esp de afiliación del acompañante',
  `psco_func` varchar(50) NOT NULL COMMENT 'parentesco con el funcionario ',
  `radicado` varchar(255) NOT NULL,
  `fecha_radicado` timestamp NOT NULL DEFAULT current_timestamp(),
  `automovil` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `acompaniante`
--

INSERT INTO `acompaniante` (`id_acompaniante`, `documento`, `tipo_doc`, `no_documento`, `fecha_exp`, `dpto_exp`, `mpio_exp`, `pdf_doc`, `nombre`, `apellido`, `fecha_nacimiento`, `dpto_nac`, `mpio_nac`, `eps_afiliado`, `psco_func`, `radicado`, `fecha_radicado`, `automovil`) VALUES
(6, '1033736402', 'Cédula de ciudadanía', '1033736402', '2009-08-20', 'BOGOTA D.C.', 'BOGOTA DC', 'PAMELA BRIGITTE1033736402.pdf', 'PAMELA BRIGITTE', 'MANCHOLA', '1991-08-07', 'BOGOTA D.C.', 'BOGOTA DC', 'Nueva eps', 'funcionario', 'S.A1033736402af7088', '2023-11-20 18:30:25', ''),
(2, '123', 'Cédula de ciudadanía', '123', '2015-01-21', 'ATLANTICO', 'BARRANQUILLA', 'eduard andres123.pdf', 'eduard andres', 'beltran perez', '1997-01-16', 'BOGOTA D.C.', 'BOGOTA DC', 'Coosalud eps-s', 'funcionario', 'B123bc0a85', '2023-11-20 15:35:15', ''),
(3, '123', 'Cédula de ciudadanía', '123', '2015-01-21', 'BOGOTA D.C.', 'BOGOTA DC', 'eduard andres123.pdf', 'eduard andres', 'beltran perez', '1997-01-16', 'BOGOTA D.C.', 'BOGOTA DC', 'Coosalud eps-s', 'funcionario', 'B123d59ad6', '2023-11-20 15:37:11', ''),
(4, '123', 'Cédula de ciudadanía', '123', '2015-01-21', 'BOGOTA D.C.', 'BOGOTA DC', 'eduard andres123.pdf', 'eduard andres', 'beltran perez', '1997-01-21', 'BOGOTA D.C.', 'BOGOTA DC', 'Coosalud eps-s', 'funcionario', 'B1239dd59a', '2023-11-20 15:52:02', ''),
(5, '123', 'Cédula de ciudadanía', '123', '2015-01-21', 'BOGOTA D.C.', 'BOGOTA DC', 'eduard andres123.pdf', 'eduard andres', 'beltran perez', '1997-01-16', 'BOGOTA D.C.', 'BOGOTA DC', 'Coosalud eps-s', 'funcionario', 'B1232a8274', '2023-11-20 15:57:06', ''),
(7, '1033736402', 'Tarjeta de identidad', '1028866955', '2017-04-15', 'BOGOTA D.C.', 'BOGOTA DC', 'HAILY SAMARA 1028866955.pdf', 'HAILY SAMARA ', 'GIL MANCHOLA', '2009-04-10', 'BOGOTA D.C.', 'BOGOTA DC', 'Famisanar', 'Hijo(a)', 'S.A1033736402af7088', '2023-11-20 18:32:57', ''),
(14, '123', 'Cédula de ciudadanía', '123', '2015-01-21', 'BOGOTA D.C.', 'BOGOTA DC', 'eduard andres123.pdf', 'eduard andres', 'beltran perez', '1997-01-16', 'BOGOTA D.C.', 'BOGOTA DC', 'Fondo de pasivo social de ferrocarriles', 'funcionario', 'B123c2331a', '2023-11-21 17:11:58', ''),
(13, '123', 'Cédula de ciudadanía', '123', '2015-01-21', 'BOGOTA D.C.', 'BOGOTA DC', 'eduard andres123.pdf', 'eduard andres', 'beltran perez', '1997-01-16', 'ATLANTICO', 'BARRANQUILLA', 'Nueva eps', 'funcionario', 'C1236a0c9c', '2023-11-21 16:15:37', 'si'),
(10, '1001048005', 'Cédula de ciudadanía', '1001048005', '2015-01-21', 'BOGOTA D.C.', 'BOGOTA DC', 'Heydy1001048005.pdf', 'Heydy', 'Ardila Vargas', '1997-01-16', 'BOGOTA D.C.', 'BOGOTA DC', 'Coosalud eps-s', 'funcionario', 'B100104800532e672', '2023-11-20 21:00:36', ''),
(11, '1001048005', 'Cédula de ciudadanía', '1033794777', '2015-01-21', 'META', 'URIBE', 'rosa  1033794770.pdf', 'rosa  ', 'beltran ', '1997-01-16', 'MAGDALENA', 'PEDRAZA', 'Fondo de pasivo social de ferrocarriles', 'Sobrino(a)', 'B100104800532e672', '2023-11-20 21:02:37', ''),
(15, '1001048005', 'Cédula de ciudadanía', '1001048005', '1997-01-21', 'BOGOTA D.C.', 'BOGOTA DC', 'Heydy1001048005.pdf', 'Heydy', 'Ardila Vargas', '1997-01-16', 'BOGOTA D.C.', 'BOGOTA DC', 'Cajacopi atlantico ', 'funcionario', 'B1001048005e93ea5', '2023-11-21 17:20:09', ''),
(16, '1001048005', 'Cédula de ciudadanía', '1033794770', '2015-01-21', 'BOGOTA D.C.', 'BOGOTA DC', 'jaime alberto 1033794770.pdf', 'jaime alberto ', 'Beltran perez', '1997-01-16', 'BOGOTA D.C.', 'BOGOTA DC', 'Coosalud eps-s', 'Conyuge', 'B1001048005e93ea5', '2023-11-21 17:21:36', ''),
(17, '123', 'Cédula de ciudadanía', '123', '2035-01-21', 'MAGDALENA', 'PEDRAZA', 'eduard andres123.pdf', 'eduard andres', 'beltran perez', '2015-01-20', 'CORDOBA', 'PUEBLO NUEVO', 'Cajacopi atlantico ', 'funcionario', 'B123c71a5e', '2023-11-21 19:43:29', ''),
(18, '123', 'Cédula de ciudadanía', '1033794770', '2015-01-21', 'ANTIOQUIA', 'MEDELLIN', 'eduard  1033794770.pdf', 'eduard  ', 'perez perez', '1997-01-16', 'ATLANTICO', 'BARRANQUILLA', 'Coosalud eps-s', 'Conyuge', 'B123c71a5e', '2023-11-21 19:48:55', ''),
(21, '1001048005', 'Cédula de ciudadanía', '1001048005', '2020-09-21', 'BOGOTA D.C.', 'BOGOTA DC', 'Heydy1001048005.pdf', 'Heydy', 'Ardila Vargas', '2002-08-28', 'BOGOTA D.C.', 'BOGOTA DC', 'Cajacopi atlantico ', 'funcionario', 'B1001048005d76e82', '2023-11-21 20:31:46', ''),
(22, '1001048005', 'Cédula de ciudadanía', '1001048005', '2020-09-21', 'BOGOTA D.C.', 'BOGOTA DC', 'Heydy1001048005.pdf', 'Heydy', 'Ardila Vargas', '2002-08-28', 'BOGOTA D.C.', 'BOGOTA DC', 'Cajacopi atlantico ', 'funcionario', 'B10010480054d01f3', '2023-11-21 20:37:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `can_acomp`
--

CREATE TABLE `can_acomp` (
  `id_can` int(11) NOT NULL,
  `can_acomp` varchar(100) NOT NULL,
  `id_destino` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `can_acomp`
--

INSERT INTO `can_acomp` (`id_can`, `can_acomp`, `id_destino`) VALUES
(1, '1', 1),
(2, '2', 1),
(3, '3', 1),
(4, '1', 2),
(5, '2', 2),
(6, '3', 2),
(7, '1', 3),
(8, '2', 3),
(9, '3', 3),
(10, 'Máximo 40 invitados.', 4),
(11, '1', 5),
(12, '2', 5),
(13, '3', 5),
(14, '4', 5),
(15, '5', 5),
(16, '6', 5),
(17, '1', 6),
(18, '2', 6),
(19, '3', 6),
(20, '4', 6),
(21, '5', 6),
(22, '6', 6),
(23, '1', 7),
(24, '2', 7),
(25, '3', 7),
(26, '4', 7),
(27, '5', 7),
(28, '6', 7),
(29, '1', 8),
(30, '2', 8),
(31, '3', 8),
(32, '4', 8),
(33, '5', 8),
(34, '6', 8),
(35, '7', 8),
(36, '1', 9),
(37, '2', 9),
(38, '3', 9),
(39, '4', 9),
(40, '5', 9),
(41, '6', 9),
(42, '7', 9),
(43, '1', 10),
(44, '2', 10),
(45, '3', 10),
(46, '4', 10),
(47, '5', 10),
(48, '6', 10),
(49, '7', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_depa` int(11) NOT NULL,
  `departamentos` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_depa`, `departamentos`) VALUES
(1, 'ANTIOQUIA'),
(2, 'ATLANTICO'),
(3, 'BOGOTA D.C.'),
(4, 'BOLIVAR'),
(5, 'BOYACA'),
(6, 'CALDAS'),
(7, 'CAQUETA'),
(8, 'CAUCA'),
(9, 'CESAR'),
(10, 'CORDOBA'),
(11, 'CUNDINAMARCA'),
(12, 'CHOCO'),
(13, 'HUILA'),
(14, 'LA GUAJIRA'),
(15, 'MAGDALENA'),
(16, 'META'),
(17, 'NARINO'),
(18, 'NORTE DE SANTANDER'),
(19, 'QUINDIO'),
(20, 'RISARALDA'),
(21, 'SANTANDER'),
(22, 'SUCRE'),
(23, 'TOLIMA'),
(24, 'VALLE DEL CAUCA'),
(25, 'ARAUCA'),
(26, 'CASANARE'),
(27, 'PUTUMAYO'),
(28, 'ARCHIPIELAGO DE SAN ANDRES PROVIDENCIA Y SANTA CATALINA'),
(29, 'AMAZONAS'),
(30, 'GUAINIA'),
(31, 'GUAVIARE'),
(32, 'VAUPES'),
(33, 'VICHADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino`
--

CREATE TABLE `destino` (
  `id_destino` int(11) NOT NULL,
  `destino` varchar(100) NOT NULL,
  `id_uso` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `destino`
--

INSERT INTO `destino` (`id_destino`, `destino`, `id_uso`) VALUES
(1, 'Bogotá', 1),
(2, 'Bogotá', 2),
(3, 'Bogotá ', 3),
(4, 'Bogotá', 4),
(5, 'Cartagena', 1),
(6, 'Cartagena ', 2),
(7, 'Cartagena', 3),
(8, 'San Andrés', 1),
(9, 'San Andrés', 2),
(10, 'San Andrés', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disponibilidadhabitacion`
--

CREATE TABLE `disponibilidadhabitacion` (
  `id_disponibilidad` int(11) NOT NULL,
  `habitacionn` varchar(100) NOT NULL,
  `f_ini` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `f_fin` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `documento` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `radicado` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `disponibilidadhabitacion`
--

INSERT INTO `disponibilidadhabitacion` (`id_disponibilidad`, `habitacionn`, `f_ini`, `f_fin`, `documento`, `radicado`) VALUES
(2, 'Bogotá_H2.', '12/29/2023', '12/30/2023', '123', 'B123bc0a85'),
(3, 'Bogotá_H1.', '12/21/2023', '12/22/2023', '123', 'B123d59ad6'),
(4, 'Bogotá_H3.', '12/30/2023', '12/31/2023', '123', 'B1239dd59a'),
(5, 'Bogotá_H4.', '12/30/2023', '12/31/2023', '123', 'B1232a8274'),
(6, 'SanAndrés_H2.', '12/23/2023', '12/28/2023', '1033736402', 'S.A1033736402af7088'),
(8, 'Bogotá_H1.', '12/29/2023', '12/31/2023', '1001048005', 'B100104800532e672'),
(9, 'Cartagena_H1. ', '12/08/2023', '12/09/2023', '123', 'C1236a0c9c'),
(10, 'Bogotá_H5.', '12/30/2023', '01/01/2024', '123', 'B123c2331a'),
(11, 'Bogotá_H7.', '12/30/2023', '12/30/2023', '1001048005', 'B1001048005e93ea5'),
(12, 'Bogotá_H6.', '12/30/2023', '01/03/2024', '1001048005', 'B1001048005d76e82'),
(13, 'Bogotá_H8.', '12/30/2023', '12/31/2023', '1001048005', 'B10010480054d01f3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `epss`
--

CREATE TABLE `epss` (
  `id_eps` int(11) NOT NULL,
  `eps` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `epss`
--

INSERT INTO `epss` (`id_eps`, `eps`) VALUES
(1, 'Coosalud eps-s'),
(2, 'Nueva eps'),
(3, 'Mutual ser'),
(4, 'Aliansalud eps '),
(5, 'Salud total eps s.a'),
(6, 'Eps sanitas '),
(7, 'Eps sura'),
(8, 'Famisanar'),
(9, 'Servicio occidental de salud eps sos'),
(10, 'Salud mia'),
(11, 'Comfenalco valle'),
(12, 'Compensar eps '),
(13, 'Epm - empresas publicas de medellin '),
(14, 'Fondo de pasivo social de ferrocarriles'),
(15, 'Nacionales de colombia'),
(16, 'Cajacopi atlantico '),
(17, 'Capresoca'),
(18, 'Comfachoco '),
(19, 'Comfaoriente'),
(20, 'Eps familiar de colombia'),
(21, 'Asmet salud '),
(22, 'Emssanar e.s.s.'),
(23, 'Capital salud eps-s '),
(24, 'Savia salud eps '),
(25, 'Dusakawi epsi '),
(26, 'Asociacion indigena del cauca epsi'),
(27, 'Anas wayuu epsi '),
(28, 'Mallamas epsi'),
(29, 'Pijaos salud epsi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadodesolicitud`
--

CREATE TABLE `estadodesolicitud` (
  `id_Estado` int(11) NOT NULL,
  `radicado` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `fk_id_Estado_Solicitud` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estadodesolicitud`
--

INSERT INTO `estadodesolicitud` (`id_Estado`, `radicado`, `fk_id_Estado_Solicitud`) VALUES
(1, 'B123f19074', ''),
(2, 'B123bc0a85', ''),
(3, 'B123d59ad6', ''),
(4, 'B1239dd59a', '3'),
(5, 'B1232a8274', '3'),
(6, 'S.A1033736402af7088', '3'),
(7, 'B1001048005dd4a3a', '1'),
(8, 'B100104800532e672', '3'),
(9, 'C1236a0c9c', '3'),
(10, 'B123c2331a', '3'),
(11, 'B1001048005e93ea5', '3'),
(12, 'B1001048005d76e82', '3'),
(13, 'B10010480054d01f3', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_de_la_solicitud`
--

CREATE TABLE `estados_de_la_solicitud` (
  `id_EstadoSolicitud` int(11) NOT NULL,
  `EstadoSolicitud` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados_de_la_solicitud`
--

INSERT INTO `estados_de_la_solicitud` (`id_EstadoSolicitud`, `EstadoSolicitud`) VALUES
(1, 'Aprobado'),
(2, 'Denegado '),
(3, 'En espera '),
(4, 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_de_habitacion`
--

CREATE TABLE `estado_de_habitacion` (
  `id_estado_habitacion` int(11) NOT NULL,
  `estado_habitacion` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `estado_de_habitacion`
--

INSERT INTO `estado_de_habitacion` (`id_estado_habitacion`, `estado_habitacion`) VALUES
(1, 'DESOCUPADO'),
(2, 'OCUPADO'),
(3, 'EN mantenimiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `id_habitacion` int(11) NOT NULL,
  `habitacion` varchar(100) NOT NULL,
  `capacidad` varchar(100) NOT NULL,
  `destino` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`id_habitacion`, `habitacion`, `capacidad`, `destino`) VALUES
(1, 'Cartagena_H1. ', '6', 'Cartagena'),
(2, 'Cartagena_H2.', '6', 'Cartagena'),
(3, 'Cartagena_H3.', '6', 'Cartagena'),
(4, 'Cartagena_H4.', '6', 'Cartagena'),
(5, 'Cartagena_H5.', '6', 'Cartagena'),
(6, 'Cartagena_H6.', '6', 'Cartagena'),
(7, 'SanAndrés_H1.', '4', 'San Andrés'),
(8, 'SanAndrés_H2.', '7', 'San Andrés'),
(9, 'Bogotá_H1.', '2', 'Bogotá'),
(10, 'Bogotá_H2.', '2', 'Bogotá'),
(11, 'Bogotá_H3.', '3', 'Bogotá'),
(12, 'Bogotá_H4.', '3', 'Bogotá'),
(13, 'Bogotá_H5.', '3', 'Bogotá'),
(14, 'Bogotá_H6.', '3', 'Bogotá'),
(15, 'Bogotá_H7.', '2', 'Bogotá'),
(16, 'Bogotá_H8.', '2', 'Bogotá');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

CREATE TABLE `invitados` (
  `id_invitados` int(11) NOT NULL,
  `documento` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_doc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `no_documento` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `radicado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_radicado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `invitados`
--

INSERT INTO `invitados` (`id_invitados`, `documento`, `tipo_doc`, `no_documento`, `nombre`, `apellido`, `radicado`, `fecha_radicado`) VALUES
(13, '123', 'Cédula de ciudadanía', '1231342323', 'jaime  ', 'man ', 'B123ec3352', '2023-11-16 23:34:19'),
(14, '123', 'Cédula de ciudadanía', '1033794770', 'eduard  ', 'beltran ', 'B123ec3352', '2023-11-17 00:30:00'),
(27, '123', 'Cédula de ciudadanía', '1033794770', 'eduard  ', 'beltran ', 'B12364ebe3', '2023-11-19 03:08:40'),
(28, '123', 'Cédula de ciudadanía', '1033794770', 'eduard  ', 'beltran ', 'B123da5a36', '2023-11-19 15:00:56'),
(29, '123', 'Cédula de ciudadanía', '1033794770', 'eduard  ', 'beltran ', 'B1232a8274', '2023-11-20 15:57:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medio_trasporte`
--

CREATE TABLE `medio_trasporte` (
  `id_tras` int(11) NOT NULL,
  `medio_tras` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `documento` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `modelo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `placa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `color` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `radicado` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `medio_trasporte`
--

INSERT INTO `medio_trasporte` (`id_tras`, `medio_tras`, `documento`, `modelo`, `placa`, `color`, `radicado`) VALUES
(1, 'Automóvil', '123', '2022', 'fdfs-456', 'azul', 'C1236a0c9c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id_municipio` int(11) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `id_depa` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id_municipio`, `municipio`, `id_depa`) VALUES
(1, 'MEDELLIN', 1),
(2, 'ABEJORRAL', 1),
(3, 'ABRIAQUI', 1),
(4, 'ALEJANDRIA', 1),
(5, 'AMAGA', 1),
(6, 'AMALFI', 1),
(7, 'ANDES', 1),
(8, 'ANGELOPOLIS', 1),
(9, 'ANGOSTURA', 1),
(10, 'ANORI', 1),
(11, 'SANTA FE DE ANTIOQUIA', 1),
(12, 'ANZA', 1),
(13, 'APARTADO', 1),
(14, 'ARBOLETES', 1),
(15, 'ARGELIA', 1),
(16, 'ARMENIA', 1),
(17, 'BARBOSA', 1),
(18, 'BELMIRA', 1),
(19, 'BELLO', 1),
(20, 'BETANIA', 1),
(21, 'BETULIA', 1),
(22, 'CIUDAD BOLIVAR', 1),
(23, 'BRICENO', 1),
(24, 'BURITICA', 1),
(25, 'CACERES', 1),
(26, 'CAICEDO', 1),
(27, 'CALDAS', 1),
(28, 'CAMPAMENTO', 1),
(29, 'CANASGORDAS', 1),
(30, 'CARACOLI', 1),
(31, 'CARAMANTA', 1),
(32, 'CAREPA', 1),
(33, 'EL CARMEN DE VIBORAL', 1),
(34, 'CAROLINA', 1),
(35, 'CAUCASIA', 1),
(36, 'CHIGORODO', 1),
(37, 'CISNEROS', 1),
(38, 'COCORNA', 1),
(39, 'CONCEPCION', 1),
(40, 'CONCORDIA', 1),
(41, 'COPACABANA', 1),
(42, 'DABEIBA', 1),
(43, 'DONMATIAS', 1),
(44, 'EBEJICO', 1),
(45, 'EL BAGRE', 1),
(46, 'ENTRERRIOS', 1),
(47, 'ENVIGADO', 1),
(48, 'FREDONIA', 1),
(49, 'FRONTINO', 1),
(50, 'GIRALDO', 1),
(51, 'GIRARDOTA', 1),
(52, 'GOMEZ PLATA', 1),
(53, 'GRANADA', 1),
(54, 'GUADALUPE', 1),
(55, 'GUARNE', 1),
(56, 'GUATAPE', 1),
(57, 'HELICONIA', 1),
(58, 'HISPANIA', 1),
(59, 'ITAGUI', 1),
(60, 'ITUANGO', 1),
(61, 'JARDIN', 1),
(62, 'JERICO', 1),
(63, 'LA CEJA', 1),
(64, 'LA ESTRELLA', 1),
(65, 'LA PINTADA', 1),
(66, 'LA UNION', 1),
(67, 'LIBORINA', 1),
(68, 'MACEO', 1),
(69, 'MARINILLA', 1),
(70, 'MONTEBELLO', 1),
(71, 'MURINDO', 1),
(72, 'MUTATA', 1),
(73, 'NARINO', 1),
(74, 'NECOCLI', 1),
(75, 'NECHI', 1),
(76, 'OLAYA', 1),
(77, 'PENOL', 1),
(78, 'PEQUE', 1),
(79, 'PUEBLORRICO', 1),
(80, 'PUERTO BERRIO', 1),
(81, 'PUERTO NARE', 1),
(82, 'PUERTO TRIUNFO', 1),
(83, 'REMEDIOS', 1),
(84, 'RETIRO', 1),
(85, 'RIONEGRO', 1),
(86, 'SABANALARGA', 1),
(87, 'SABANETA', 1),
(88, 'SALGAR', 1),
(89, 'SAN ANDRES DE CUERQUIA', 1),
(90, 'SAN CARLOS', 1),
(91, 'SAN FRANCISCO', 1),
(92, 'SAN JERONIMO', 1),
(93, 'SAN JOSE DE LA MONTANA', 1),
(94, 'SAN JUAN DE URABA', 1),
(95, 'SAN LUIS', 1),
(96, 'SAN PEDRO DE LOS MILAGROS', 1),
(97, 'SAN PEDRO DE URABA', 1),
(98, 'SAN RAFAEL', 1),
(99, 'SAN ROQUE', 1),
(100, 'SAN VICENTE FERRER', 1),
(101, 'SANTA BARBARA', 1),
(102, 'SANTA ROSA DE OSOS', 1),
(103, 'SANTO DOMINGO', 1),
(104, 'EL SANTUARIO', 1),
(105, 'SEGOVIA', 1),
(106, 'SONSON', 1),
(107, 'SOPETRAN', 1),
(108, 'TAMESIS', 1),
(109, 'TARAZA', 1),
(110, 'TARSO', 1),
(111, 'TITIRIBI', 1),
(112, 'TOLEDO', 1),
(113, 'TURBO', 1),
(114, 'URAMITA', 1),
(115, 'URRAO', 1),
(116, 'VALDIVIA', 1),
(117, 'VALPARAISO', 1),
(118, 'VEGACHI', 1),
(119, 'VENECIA', 1),
(120, 'VIGIA DEL FUERTE', 1),
(121, 'YALI', 1),
(122, 'YARUMAL', 1),
(123, 'YOLOMBO', 1),
(124, 'YONDO', 1),
(125, 'ZARAGOZA', 1),
(126, 'BARRANQUILLA', 2),
(127, 'BARANOA', 2),
(128, 'CAMPO DE LA CRUZ', 2),
(129, 'CANDELARIA', 2),
(130, 'GALAPA', 2),
(131, 'JUAN DE ACOSTA', 2),
(132, 'LURUACO', 2),
(133, 'MALAMBO', 2),
(134, 'MANATI', 2),
(135, 'PALMAR DE VARELA', 2),
(136, 'PIOJO', 2),
(137, 'POLONUEVO', 2),
(138, 'PONEDERA', 2),
(139, 'PUERTO COLOMBIA', 2),
(140, 'REPELON', 2),
(141, 'SABANAGRANDE', 2),
(142, 'SABANALARGA', 2),
(143, 'SANTA LUCIA', 2),
(144, 'SANTO TOMAS', 2),
(145, 'SOLEDAD', 2),
(146, 'SUAN', 2),
(147, 'TUBARA', 2),
(148, 'USIACURI', 2),
(149, 'BOGOTA DC', 3),
(150, 'CARTAGENA DE INDIAS', 4),
(151, 'ACHI', 4),
(152, 'ALTOS DEL ROSARIO', 4),
(153, 'ARENAL', 4),
(154, 'ARJONA', 4),
(155, 'ARROYOHONDO', 4),
(156, 'BARRANCO DE LOBA', 4),
(157, 'CALAMAR', 4),
(158, 'CANTAGALLO', 4),
(159, 'CICUCO', 4),
(160, 'CORDOBA', 4),
(161, 'CLEMENCIA', 4),
(162, 'EL CARMEN DE BOLIVAR', 4),
(163, 'EL GUAMO', 4),
(164, 'EL PENON', 4),
(165, 'HATILLO DE LOBA', 4),
(166, 'MAGANGUE', 4),
(167, 'MAHATES', 4),
(168, 'MARGARITA', 4),
(169, 'MARIA LA BAJA', 4),
(170, 'MONTECRISTO', 4),
(171, 'SANTA CRUZ DE MOMPOX', 4),
(172, 'MORALES', 4),
(173, 'NOROSI', 4),
(174, 'PINILLOS', 4),
(175, 'REGIDOR', 4),
(176, 'RIO VIEJO', 4),
(177, 'SAN CRISTOBAL', 4),
(178, 'SAN ESTANISLAO', 4),
(179, 'SAN FERNANDO', 4),
(180, 'SAN JACINTO', 4),
(181, 'SAN JACINTO DEL CAUCA', 4),
(182, 'SAN JUAN NEPOMUCENO', 4),
(183, 'SAN MARTIN DE LOBA', 4),
(184, 'SAN PABLO', 4),
(185, 'SANTA CATALINA', 4),
(186, 'SANTA ROSA', 4),
(187, 'SANTA ROSA DEL SUR', 4),
(188, 'SIMITI', 4),
(189, 'SOPLAVIENTO', 4),
(190, 'TALAIGUA NUEVO', 4),
(191, 'TIQUISIO', 4),
(192, 'TURBACO', 4),
(193, 'TURBANA', 4),
(194, 'VILLANUEVA', 4),
(195, 'ZAMBRANO', 4),
(196, 'TUNJA', 5),
(197, 'ALMEIDA', 5),
(198, 'AQUITANIA', 5),
(199, 'ARCABUCO', 5),
(200, 'BELEN', 5),
(201, 'BERBEO', 5),
(202, 'BETEITIVA', 5),
(203, 'BOAVITA', 5),
(204, 'BOYACA', 5),
(205, 'BRICENO', 5),
(206, 'BUENAVISTA', 5),
(207, 'BUSBANZA', 5),
(208, 'CALDAS', 5),
(209, 'CAMPOHERMOSO', 5),
(210, 'CERINZA', 5),
(211, 'CHINAVITA', 5),
(212, 'CHIQUINQUIRA', 5),
(213, 'CHISCAS', 5),
(214, 'CHITA', 5),
(215, 'CHITARAQUE', 5),
(216, 'CHIVATA', 5),
(217, 'CIENEGA', 5),
(218, 'COMBITA', 5),
(219, 'COPER', 5),
(220, 'CORRALES', 5),
(221, 'COVARACHIA', 5),
(222, 'CUBARA', 5),
(223, 'CUCAITA', 5),
(224, 'CUITIVA', 5),
(225, 'CHIQUIZA', 5),
(226, 'CHIVOR', 5),
(227, 'DUITAMA', 5),
(228, 'EL COCUY', 5),
(229, 'EL ESPINO', 5),
(230, 'FIRAVITOBA', 5),
(231, 'FLORESTA', 5),
(232, 'GACHANTIVA', 5),
(233, 'GAMEZA', 5),
(234, 'GARAGOA', 5),
(235, 'GUACAMAYAS', 5),
(236, 'GUATEQUE', 5),
(237, 'GUAYATA', 5),
(238, 'GUICAN DE LA SIERRA', 5),
(239, 'IZA', 5),
(240, 'JENESANO', 5),
(241, 'JERICO', 5),
(242, 'LABRANZAGRANDE', 5),
(243, 'LA CAPILLA', 5),
(244, 'LA VICTORIA', 5),
(245, 'LA UVITA', 5),
(246, 'VILLA DE LEYVA', 5),
(247, 'MACANAL', 5),
(248, 'MARIPI', 5),
(249, 'MIRAFLORES', 5),
(250, 'MONGUA', 5),
(251, 'MONGUI', 5),
(252, 'MONIQUIRA', 5),
(253, 'MOTAVITA', 5),
(254, 'MUZO', 5),
(255, 'NOBSA', 5),
(256, 'NUEVO COLON', 5),
(257, 'OICATA', 5),
(258, 'OTANCHE', 5),
(259, 'PACHAVITA', 5),
(260, 'PAEZ', 5),
(261, 'PAIPA', 5),
(262, 'PAJARITO', 5),
(263, 'PANQUEBA', 5),
(264, 'PAUNA', 5),
(265, 'PAYA', 5),
(266, 'PAZ DE RIO', 5),
(267, 'PESCA', 5),
(268, 'PISBA', 5),
(269, 'PUERTO BOYACA', 5),
(270, 'QUIPAMA', 5),
(271, 'RAMIRIQUI', 5),
(272, 'RAQUIRA', 5),
(273, 'RONDON', 5),
(274, 'SABOYA', 5),
(275, 'SACHICA', 5),
(276, 'SAMACA', 5),
(277, 'SAN EDUARDO', 5),
(278, 'SAN JOSE DE PARE', 5),
(279, 'SAN LUIS DE GACENO', 5),
(280, 'SAN MATEO', 5),
(281, 'SAN MIGUEL DE SEMA', 5),
(282, 'SAN PABLO DE BORBUR', 5),
(283, 'SANTANA', 5),
(284, 'SANTA MARIA', 5),
(285, 'SANTA ROSA DE VITERBO', 5),
(286, 'SANTA SOFIA', 5),
(287, 'SATIVANORTE', 5),
(288, 'SATIVASUR', 5),
(289, 'SIACHOQUE', 5),
(290, 'SOATA', 5),
(291, 'SOCOTA', 5),
(292, 'SOCHA', 5),
(293, 'SOGAMOSO', 5),
(294, 'SOMONDOCO', 5),
(295, 'SORA', 5),
(296, 'SOTAQUIRA', 5),
(297, 'SORACA', 5),
(298, 'SUSACON', 5),
(299, 'SUTAMARCHAN', 5),
(300, 'SUTATENZA', 5),
(301, 'TASCO', 5),
(302, 'TENZA', 5),
(303, 'TIBANA', 5),
(304, 'TIBASOSA', 5),
(305, 'TINJACA', 5),
(306, 'TIPACOQUE', 5),
(307, 'TOCA', 5),
(308, 'TOGUI', 5),
(309, 'TOPAGA', 5),
(310, 'TOTA', 5),
(311, 'TUNUNGUA', 5),
(312, 'TURMEQUE', 5),
(313, 'TUTA', 5),
(314, 'TUTAZA', 5),
(315, 'UMBITA', 5),
(316, 'VENTAQUEMADA', 5),
(317, 'VIRACACHA', 5),
(318, 'ZETAQUIRA', 5),
(319, 'MANIZALES', 6),
(320, 'AGUADAS', 6),
(321, 'ANSERMA', 6),
(322, 'ARANZAZU', 6),
(323, 'BELALCAZAR', 6),
(324, 'CHINCHINA', 6),
(325, 'FILADELFIA', 6),
(326, 'LA DORADA', 6),
(327, 'LA MERCED', 6),
(328, 'MANZANARES', 6),
(329, 'MARMATO', 6),
(330, 'MARQUETALIA', 6),
(331, 'MARULANDA', 6),
(332, 'NEIRA', 6),
(333, 'NORCASIA', 6),
(334, 'PACORA', 6),
(335, 'PALESTINA', 6),
(336, 'PENSILVANIA', 6),
(337, 'RIOSUCIO', 6),
(338, 'RISARALDA', 6),
(339, 'SALAMINA', 6),
(340, 'SAMANA', 6),
(341, 'SAN JOSE', 6),
(342, 'SUPIA', 6),
(343, 'VICTORIA', 6),
(344, 'VILLAMARIA', 6),
(345, 'VITERBO', 6),
(346, 'FLORENCIA', 7),
(347, 'ALBANIA', 7),
(348, 'BELEN DE LOS ANDAQUIES', 7),
(349, 'CARTAGENA DEL CHAIRA', 7),
(350, 'CURILLO', 7),
(351, 'EL DONCELLO', 7),
(352, 'EL PAUJIL', 7),
(353, 'LA MONTANITA', 7),
(354, 'MILAN', 7),
(355, 'MORELIA', 7),
(356, 'PUERTO RICO', 7),
(357, 'SAN JOSE DEL FRAGUA', 7),
(358, 'SAN VICENTE DEL CAGUAN', 7),
(359, 'SOLANO', 7),
(360, 'SOLITA', 7),
(361, 'VALPARAISO', 7),
(362, 'POPAYAN', 8),
(363, 'ALMAGUER', 8),
(364, 'ARGELIA', 8),
(365, 'BALBOA', 8),
(366, 'BOLIVAR', 8),
(367, 'BUENOS AIRES', 8),
(368, 'CAJIBIO', 8),
(369, 'CALDONO', 8),
(370, 'CALOTO', 8),
(371, 'CORINTO', 8),
(372, 'EL TAMBO', 8),
(373, 'FLORENCIA', 8),
(374, 'GUACHENE', 8),
(375, 'GUAPI', 8),
(376, 'INZA', 8),
(377, 'JAMBALO', 8),
(378, 'LA SIERRA', 8),
(379, 'LA VEGA', 8),
(380, 'LOPEZ DE MICAY', 8),
(381, 'MERCADERES', 8),
(382, 'MIRANDA', 8),
(383, 'MORALES', 8),
(384, 'PADILLA', 8),
(385, 'PAEZ', 8),
(386, 'PATIA', 8),
(387, 'PIAMONTE', 8),
(388, 'PIENDAMO   TUNIA', 8),
(389, 'PUERTO TEJADA', 8),
(390, 'PURACE', 8),
(391, 'ROSAS', 8),
(392, 'SAN SEBASTIAN', 8),
(393, 'SANTANDER DE QUILICHAO', 8),
(394, 'SANTA ROSA', 8),
(395, 'SILVIA', 8),
(396, 'SOTARA PAISPAMBA', 8),
(397, 'SUAREZ', 8),
(398, 'SUCRE', 8),
(399, 'TIMBIO', 8),
(400, 'TIMBIQUI', 8),
(401, 'TORIBIO', 8),
(402, 'TOTORO', 8),
(403, 'VILLA RICA', 8),
(404, 'VALLEDUPAR', 9),
(405, 'AGUACHICA', 9),
(406, 'AGUSTIN CODAZZI', 9),
(407, 'ASTREA', 9),
(408, 'BECERRIL', 9),
(409, 'BOSCONIA', 9),
(410, 'CHIMICHAGUA', 9),
(411, 'CHIRIGUANA', 9),
(412, 'CURUMANI', 9),
(413, 'EL COPEY', 9),
(414, 'EL PASO', 9),
(415, 'GAMARRA', 9),
(416, 'GONZALEZ', 9),
(417, 'LA GLORIA', 9),
(418, 'LA JAGUA DE IBIRICO', 9),
(419, 'MANAURE BALCON DEL CESAR', 9),
(420, 'PAILITAS', 9),
(421, 'PELAYA', 9),
(422, 'PUEBLO BELLO', 9),
(423, 'RIO DE ORO', 9),
(424, 'LA PAZ', 9),
(425, 'SAN ALBERTO', 9),
(426, 'SAN DIEGO', 9),
(427, 'SAN MARTIN', 9),
(428, 'TAMALAMEQUE', 9),
(429, 'MONTERIA', 10),
(430, 'AYAPEL', 10),
(431, 'BUENAVISTA', 10),
(432, 'CANALETE', 10),
(433, 'CERETE', 10),
(434, 'CHIMA', 10),
(435, 'CHINU', 10),
(436, 'CIENAGA DE ORO', 10),
(437, 'COTORRA', 10),
(438, 'LA APARTADA', 10),
(439, 'LORICA', 10),
(440, 'LOS CORDOBAS', 10),
(441, 'MOMIL', 10),
(442, 'MONTELIBANO', 10),
(443, 'MONITOS', 10),
(444, 'PLANETA RICA', 10),
(445, 'PUEBLO NUEVO', 10),
(446, 'PUERTO ESCONDIDO', 10),
(447, 'PUERTO LIBERTADOR', 10),
(448, 'PURISIMA DE LA CONCEPCION', 10),
(449, 'SAHAGUN', 10),
(450, 'SAN ANDRES DE SOTAVENTO', 10),
(451, 'SAN ANTERO', 10),
(452, 'SAN BERNARDO DEL VIENTO', 10),
(453, 'SAN CARLOS', 10),
(454, 'SAN JOSE DE URE', 10),
(455, 'SAN PELAYO', 10),
(456, 'TIERRALTA', 10),
(457, 'TUCHIN', 10),
(458, 'VALENCIA', 10),
(459, 'AGUA DE DIOS', 11),
(460, 'ALBAN', 11),
(461, 'ANAPOIMA', 11),
(462, 'ANOLAIMA', 11),
(463, 'ARBELAEZ', 11),
(464, 'BELTRAN', 11),
(465, 'BITUIMA', 11),
(466, 'BOJACA', 11),
(467, 'CABRERA', 11),
(468, 'CACHIPAY', 11),
(469, 'CAJICA', 11),
(470, 'CAPARRAPI', 11),
(471, 'CAQUEZA', 11),
(472, 'CARMEN DE CARUPA', 11),
(473, 'CHAGUANI', 11),
(474, 'CHIA', 11),
(475, 'CHIPAQUE', 11),
(476, 'CHOACHI', 11),
(477, 'CHOCONTA', 11),
(478, 'COGUA', 11),
(479, 'COTA', 11),
(480, 'CUCUNUBA', 11),
(481, 'EL COLEGIO', 11),
(482, 'EL PENON', 11),
(483, 'EL ROSAL', 11),
(484, 'FACATATIVA', 11),
(485, 'FOMEQUE', 11),
(486, 'FOSCA', 11),
(487, 'FUNZA', 11),
(488, 'FUQUENE', 11),
(489, 'FUSAGASUGA', 11),
(490, 'GACHALA', 11),
(491, 'GACHANCIPA', 11),
(492, 'GACHETA', 11),
(493, 'GAMA', 11),
(494, 'GIRARDOT', 11),
(495, 'GRANADA', 11),
(496, 'GUACHETA', 11),
(497, 'GUADUAS', 11),
(498, 'GUASCA', 11),
(499, 'GUATAQUI', 11),
(500, 'GUATAVITA', 11),
(501, 'GUAYABAL DE SIQUIMA', 11),
(502, 'GUAYABETAL', 11),
(503, 'GUTIERREZ', 11),
(504, 'JERUSALEN', 11),
(505, 'JUNIN', 11),
(506, 'LA CALERA', 11),
(507, 'LA MESA', 11),
(508, 'LA PALMA', 11),
(509, 'LA PENA', 11),
(510, 'LA VEGA', 11),
(511, 'LENGUAZAQUE', 11),
(512, 'MACHETA', 11),
(513, 'MADRID', 11),
(514, 'MANTA', 11),
(515, 'MEDINA', 11),
(516, 'MOSQUERA', 11),
(517, 'NARINO', 11),
(518, 'NEMOCON', 11),
(519, 'NILO', 11),
(520, 'NIMAIMA', 11),
(521, 'NOCAIMA', 11),
(522, 'VENECIA', 11),
(523, 'PACHO', 11),
(524, 'PAIME', 11),
(525, 'PANDI', 11),
(526, 'PARATEBUENO', 11),
(527, 'PASCA', 11),
(528, 'PUERTO SALGAR', 11),
(529, 'PULI', 11),
(530, 'QUEBRADANEGRA', 11),
(531, 'QUETAME', 11),
(532, 'QUIPILE', 11),
(533, 'APULO', 11),
(534, 'RICAURTE', 11),
(535, 'SAN ANTONIO DEL TEQUENDAMA', 11),
(536, 'SAN BERNARDO', 11),
(537, 'SAN CAYETANO', 11),
(538, 'SAN FRANCISCO', 11),
(539, 'SAN JUAN DE RIOSECO', 11),
(540, 'SASAIMA', 11),
(541, 'SESQUILE', 11),
(542, 'SIBATE', 11),
(543, 'SILVANIA', 11),
(544, 'SIMIJACA', 11),
(545, 'SOACHA', 11),
(546, 'SOPO', 11),
(547, 'SUBACHOQUE', 11),
(548, 'SUESCA', 11),
(549, 'SUPATA', 11),
(550, 'SUSA', 11),
(551, 'SUTATAUSA', 11),
(552, 'TABIO', 11),
(553, 'TAUSA', 11),
(554, 'TENA', 11),
(555, 'TENJO', 11),
(556, 'TIBACUY', 11),
(557, 'TIBIRITA', 11),
(558, 'TOCAIMA', 11),
(559, 'TOCANCIPA', 11),
(560, 'TOPAIPI', 11),
(561, 'UBALA', 11),
(562, 'UBAQUE', 11),
(563, 'VILLA DE SAN DIEGO DE UBATE', 11),
(564, 'UNE', 11),
(565, 'UTICA', 11),
(566, 'VERGARA', 11),
(567, 'VIANI', 11),
(568, 'VILLAGOMEZ', 11),
(569, 'VILLAPINZON', 11),
(570, 'VILLETA', 11),
(571, 'VIOTA', 11),
(572, 'YACOPI', 11),
(573, 'ZIPACON', 11),
(574, 'ZIPAQUIRA', 11),
(575, 'QUIBDO', 12),
(576, 'ACANDI', 12),
(577, 'ALTO BAUDO', 12),
(578, 'ATRATO', 12),
(579, 'BAGADO', 12),
(580, 'BAHIA SOLANO', 12),
(581, 'BAJO BAUDO', 12),
(582, 'BOJAYA', 12),
(583, 'EL CANTON DEL SAN PABLO', 12),
(584, 'CARMEN DEL DARIEN', 12),
(585, 'CERTEGUI', 12),
(586, 'CONDOTO', 12),
(587, 'EL CARMEN DE ATRATO', 12),
(588, 'EL LITORAL DEL SAN JUAN', 12),
(589, 'ISTMINA', 12),
(590, 'JURADO', 12),
(591, 'LLORO', 12),
(592, 'MEDIO ATRATO', 12),
(593, 'MEDIO BAUDO', 12),
(594, 'MEDIO SAN JUAN', 12),
(595, 'NOVITA', 12),
(596, 'NUQUI', 12),
(597, 'RIO IRO', 12),
(598, 'RIO QUITO', 12),
(599, 'RIOSUCIO', 12),
(600, 'SAN JOSE DEL PALMAR', 12),
(601, 'SIPI', 12),
(602, 'TADO', 12),
(603, 'UNGUIA', 12),
(604, 'UNION PANAMERICANA', 12),
(605, 'NEIVA', 13),
(606, 'ACEVEDO', 13),
(607, 'AGRADO', 13),
(608, 'AIPE', 13),
(609, 'ALGECIRAS', 13),
(610, 'ALTAMIRA', 13),
(611, 'BARAYA', 13),
(612, 'CAMPOALEGRE', 13),
(613, 'COLOMBIA', 13),
(614, 'ELIAS', 13),
(615, 'GARZON', 13),
(616, 'GIGANTE', 13),
(617, 'GUADALUPE', 13),
(618, 'HOBO', 13),
(619, 'IQUIRA', 13),
(620, 'ISNOS', 13),
(621, 'LA ARGENTINA', 13),
(622, 'LA PLATA', 13),
(623, 'NATAGA', 13),
(624, 'OPORAPA', 13),
(625, 'PAICOL', 13),
(626, 'PALERMO', 13),
(627, 'PALESTINA', 13),
(628, 'PITAL', 13),
(629, 'PITALITO', 13),
(630, 'RIVERA', 13),
(631, 'SALADOBLANCO', 13),
(632, 'SAN AGUSTIN', 13),
(633, 'SANTA MARIA', 13),
(634, 'SUAZA', 13),
(635, 'TARQUI', 13),
(636, 'TESALIA', 13),
(637, 'TELLO', 13),
(638, 'TERUEL', 13),
(639, 'TIMANA', 13),
(640, 'VILLAVIEJA', 13),
(641, 'YAGUARA', 13),
(642, 'RIOHACHA', 14),
(643, 'ALBANIA', 14),
(644, 'BARRANCAS', 14),
(645, 'DIBULLA', 14),
(646, 'DISTRACCION', 14),
(647, 'EL MOLINO', 14),
(648, 'FONSECA', 14),
(649, 'HATONUEVO', 14),
(650, 'LA JAGUA DEL PILAR', 14),
(651, 'MAICAO', 14),
(652, 'MANAURE', 14),
(653, 'SAN JUAN DEL CESAR', 14),
(654, 'URIBIA', 14),
(655, 'URUMITA', 14),
(656, 'VILLANUEVA', 14),
(657, 'SANTA MARTA', 15),
(658, 'ALGARROBO', 15),
(659, 'ARACATACA', 15),
(660, 'ARIGUANI', 15),
(661, 'CERRO DE SAN ANTONIO', 15),
(662, 'CHIVOLO', 15),
(663, 'CIENAGA', 15),
(664, 'CONCORDIA', 15),
(665, 'EL BANCO', 15),
(666, 'EL PINON', 15),
(667, 'EL RETEN', 15),
(668, 'FUNDACION', 15),
(669, 'GUAMAL', 15),
(670, 'NUEVA GRANADA', 15),
(671, 'PEDRAZA', 15),
(672, 'PIJINO DEL CARMEN', 15),
(673, 'PIVIJAY', 15),
(674, 'PLATO', 15),
(675, 'PUEBLOVIEJO', 15),
(676, 'REMOLINO', 15),
(677, 'SABANAS DE SAN ANGEL', 15),
(678, 'SALAMINA', 15),
(679, 'SAN SEBASTIAN DE BUENAVISTA', 15),
(680, 'SAN ZENON', 15),
(681, 'SANTA ANA', 15),
(682, 'SANTA BARBARA DE PINTO', 15),
(683, 'SITIONUEVO', 15),
(684, 'TENERIFE', 15),
(685, 'ZAPAYAN', 15),
(686, 'ZONA BANANERA', 15),
(687, 'VILLAVICENCIO', 16),
(688, 'ACACIAS', 16),
(689, 'BARRANCA DE UPIA', 16),
(690, 'CABUYARO', 16),
(691, 'CASTILLA LA NUEVA', 16),
(692, 'CUBARRAL', 16),
(693, 'CUMARAL', 16),
(694, 'EL CALVARIO', 16),
(695, 'EL CASTILLO', 16),
(696, 'EL DORADO', 16),
(697, 'FUENTE DE ORO', 16),
(698, 'GRANADA', 16),
(699, 'GUAMAL', 16),
(700, 'MAPIRIPAN', 16),
(701, 'MESETAS', 16),
(702, 'LA MACARENA', 16),
(703, 'URIBE', 16),
(704, 'LEJANIAS', 16),
(705, 'PUERTO CONCORDIA', 16),
(706, 'PUERTO GAITAN', 16),
(707, 'PUERTO LOPEZ', 16),
(708, 'PUERTO LLERAS', 16),
(709, 'PUERTO RICO', 16),
(710, 'RESTREPO', 16),
(711, 'SAN CARLOS DE GUAROA', 16),
(712, 'SAN JUAN DE ARAMA', 16),
(713, 'SAN JUANITO', 16),
(714, 'SAN MARTIN', 16),
(715, 'VISTAHERMOSA', 16),
(716, 'PASTO', 17),
(717, 'ALBAN', 17),
(718, 'ALDANA', 17),
(719, 'ANCUYA', 17),
(720, 'ARBOLEDA', 17),
(721, 'BARBACOAS', 17),
(722, 'BELEN', 17),
(723, 'BUESACO', 17),
(724, 'COLON', 17),
(725, 'CONSACA', 17),
(726, 'CONTADERO', 17),
(727, 'CORDOBA', 17),
(728, 'CUASPUD CARLOSAMA', 17),
(729, 'CUMBAL', 17),
(730, 'CUMBITARA', 17),
(731, 'CHACHAGUI', 17),
(732, 'EL CHARCO', 17),
(733, 'EL PENOL', 17),
(734, 'EL ROSARIO', 17),
(735, 'EL TABLON DE GOMEZ', 17),
(736, 'EL TAMBO', 17),
(737, 'FUNES', 17),
(738, 'GUACHUCAL', 17),
(739, 'GUAITARILLA', 17),
(740, 'GUALMATAN', 17),
(741, 'ILES', 17),
(742, 'IMUES', 17),
(743, 'IPIALES', 17),
(744, 'LA CRUZ', 17),
(745, 'LA FLORIDA', 17),
(746, 'LA LLANADA', 17),
(747, 'LA TOLA', 17),
(748, 'LA UNION', 17),
(749, 'LEIVA', 17),
(750, 'LINARES', 17),
(751, 'LOS ANDES', 17),
(752, 'MAGUI', 17),
(753, 'MALLAMA', 17),
(754, 'MOSQUERA', 17),
(755, 'NARINO', 17),
(756, 'OLAYA HERRERA', 17),
(757, 'OSPINA', 17),
(758, 'FRANCISCO PIZARRO', 17),
(759, 'POLICARPA', 17),
(760, 'POTOSI', 17),
(761, 'PROVIDENCIA', 17),
(762, 'PUERRES', 17),
(763, 'PUPIALES', 17),
(764, 'RICAURTE', 17),
(765, 'ROBERTO PAYAN', 17),
(766, 'SAMANIEGO', 17),
(767, 'SANDONA', 17),
(768, 'SAN BERNARDO', 17),
(769, 'SAN LORENZO', 17),
(770, 'SAN PABLO', 17),
(771, 'SAN PEDRO DE CARTAGO', 17),
(772, 'SANTA BARBARA', 17),
(773, 'SANTACRUZ', 17),
(774, 'SAPUYES', 17),
(775, 'TAMINANGO', 17),
(776, 'TANGUA', 17),
(777, 'SAN ANDRES DE TUMACO', 17),
(778, 'TUQUERRES', 17),
(779, 'YACUANQUER', 17),
(780, 'SAN JOSE DE CUCUTA', 18),
(781, 'ABREGO', 18),
(782, 'ARBOLEDAS', 18),
(783, 'BOCHALEMA', 18),
(784, 'BUCARASICA', 18),
(785, 'CACOTA', 18),
(786, 'CACHIRA', 18),
(787, 'CHINACOTA', 18),
(788, 'CHITAGA', 18),
(789, 'CONVENCION', 18),
(790, 'CUCUTILLA', 18),
(791, 'DURANIA', 18),
(792, 'EL CARMEN', 18),
(793, 'EL TARRA', 18),
(794, 'EL ZULIA', 18),
(795, 'GRAMALOTE', 18),
(796, 'HACARI', 18),
(797, 'HERRAN', 18),
(798, 'LABATECA', 18),
(799, 'LA ESPERANZA', 18),
(800, 'LA PLAYA', 18),
(801, 'LOS PATIOS', 18),
(802, 'LOURDES', 18),
(803, 'MUTISCUA', 18),
(804, 'OCANA', 18),
(805, 'PAMPLONA', 18),
(806, 'PAMPLONITA', 18),
(807, 'PUERTO SANTANDER', 18),
(808, 'RAGONVALIA', 18),
(809, 'SALAZAR', 18),
(810, 'SAN CALIXTO', 18),
(811, 'SAN CAYETANO', 18),
(812, 'SANTIAGO', 18),
(813, 'SARDINATA', 18),
(814, 'SILOS', 18),
(815, 'TEORAMA', 18),
(816, 'TIBU', 18),
(817, 'TOLEDO', 18),
(818, 'VILLA CARO', 18),
(819, 'VILLA DEL ROSARIO', 18),
(820, 'ARMENIA', 19),
(821, 'BUENAVISTA', 19),
(822, 'CALARCA', 19),
(823, 'CIRCASIA', 19),
(824, 'CORDOBA', 19),
(825, 'FILANDIA', 19),
(826, 'GENOVA', 19),
(827, 'LA TEBAIDA', 19),
(828, 'MONTENEGRO', 19),
(829, 'PIJAO', 19),
(830, 'QUIMBAYA', 19),
(831, 'SALENTO', 19),
(832, 'PEREIRA', 20),
(833, 'APIA', 20),
(834, 'BALBOA', 20),
(835, 'BELEN DE UMBRIA', 20),
(836, 'DOSQUEBRADAS', 20),
(837, 'GUATICA', 20),
(838, 'LA CELIA', 20),
(839, 'LA VIRGINIA', 20),
(840, 'MARSELLA', 20),
(841, 'MISTRATO', 20),
(842, 'PUEBLO RICO', 20),
(843, 'QUINCHIA', 20),
(844, 'SANTA ROSA DE CABAL', 20),
(845, 'SANTUARIO', 20),
(846, 'BUCARAMANGA', 21),
(847, 'AGUADA', 21),
(848, 'ALBANIA', 21),
(849, 'ARATOCA', 21),
(850, 'BARBOSA', 21),
(851, 'BARICHARA', 21),
(852, 'BARRANCABERMEJA', 21),
(853, 'BETULIA', 21),
(854, 'BOLIVAR', 21),
(855, 'CABRERA', 21),
(856, 'CALIFORNIA', 21),
(857, 'CAPITANEJO', 21),
(858, 'CARCASI', 21),
(859, 'CEPITA', 21),
(860, 'CERRITO', 21),
(861, 'CHARALA', 21),
(862, 'CHARTA', 21),
(863, 'CHIMA', 21),
(864, 'CHIPATA', 21),
(865, 'CIMITARRA', 21),
(866, 'CONCEPCION', 21),
(867, 'CONFINES', 21),
(868, 'CONTRATACION', 21),
(869, 'COROMORO', 21),
(870, 'CURITI', 21),
(871, 'EL CARMEN DE CHUCURI', 21),
(872, 'EL GUACAMAYO', 21),
(873, 'EL PENON', 21),
(874, 'EL PLAYON', 21),
(875, 'ENCINO', 21),
(876, 'ENCISO', 21),
(877, 'FLORIAN', 21),
(878, 'FLORIDABLANCA', 21),
(879, 'GALAN', 21),
(880, 'GAMBITA', 21),
(881, 'GIRON', 21),
(882, 'GUACA', 21),
(883, 'GUADALUPE', 21),
(884, 'GUAPOTA', 21),
(885, 'GUAVATA', 21),
(886, 'GUEPSA', 21),
(887, 'HATO', 21),
(888, 'JESUS MARIA', 21),
(889, 'JORDAN', 21),
(890, 'LA BELLEZA', 21),
(891, 'LANDAZURI', 21),
(892, 'LA PAZ', 21),
(893, 'LEBRIJA', 21),
(894, 'LOS SANTOS', 21),
(895, 'MACARAVITA', 21),
(896, 'MALAGA', 21),
(897, 'MATANZA', 21),
(898, 'MOGOTES', 21),
(899, 'MOLAGAVITA', 21),
(900, 'OCAMONTE', 21),
(901, 'OIBA', 21),
(902, 'ONZAGA', 21),
(903, 'PALMAR', 21),
(904, 'PALMAS DEL SOCORRO', 21),
(905, 'PARAMO', 21),
(906, 'PIEDECUESTA', 21),
(907, 'PINCHOTE', 21),
(908, 'PUENTE NACIONAL', 21),
(909, 'PUERTO PARRA', 21),
(910, 'PUERTO WILCHES', 21),
(911, 'RIONEGRO', 21),
(912, 'SABANA DE TORRES', 21),
(913, 'SAN ANDRES', 21),
(914, 'SAN BENITO', 21),
(915, 'SAN GIL', 21),
(916, 'SAN JOAQUIN', 21),
(917, 'SAN JOSE DE MIRANDA', 21),
(918, 'SAN MIGUEL', 21),
(919, 'SAN VICENTE DE CHUCURI', 21),
(920, 'SANTA BARBARA', 21),
(921, 'SANTA HELENA DEL OPON', 21),
(922, 'SIMACOTA', 21),
(923, 'SOCORRO', 21),
(924, 'SUAITA', 21),
(925, 'SUCRE', 21),
(926, 'SURATA', 21),
(927, 'TONA', 21),
(928, 'VALLE DE SAN JOSE', 21),
(929, 'VELEZ', 21),
(930, 'VETAS', 21),
(931, 'VILLANUEVA', 21),
(932, 'ZAPATOCA', 21),
(933, 'SINCELEJO', 22),
(934, 'BUENAVISTA', 22),
(935, 'CAIMITO', 22),
(936, 'COLOSO', 22),
(937, 'COROZAL', 22),
(938, 'COVENAS', 22),
(939, 'CHALAN', 22),
(940, 'EL ROBLE', 22),
(941, 'GALERAS', 22),
(942, 'GUARANDA', 22),
(943, 'LA UNION', 22),
(944, 'LOS PALMITOS', 22),
(945, 'MAJAGUAL', 22),
(946, 'MORROA', 22),
(947, 'OVEJAS', 22),
(948, 'PALMITO', 22),
(949, 'SAMPUES', 22),
(950, 'SAN BENITO ABAD', 22),
(951, 'SAN JUAN DE BETULIA', 22),
(952, 'SAN MARCOS', 22),
(953, 'SAN ONOFRE', 22),
(954, 'SAN PEDRO', 22),
(955, 'SAN LUIS DE SINCE', 22),
(956, 'SUCRE', 22),
(957, 'SANTIAGO DE TOLU', 22),
(958, 'SAN JOSE DE TOLUVIEJO', 22),
(959, 'IBAGUE', 23),
(960, 'ALPUJARRA', 23),
(961, 'ALVARADO', 23),
(962, 'AMBALEMA', 23),
(963, 'ANZOATEGUI', 23),
(964, 'ARMERO', 23),
(965, 'ATACO', 23),
(966, 'CAJAMARCA', 23),
(967, 'CARMEN DE APICALA', 23),
(968, 'CASABIANCA', 23),
(969, 'CHAPARRAL', 23),
(970, 'COELLO', 23),
(971, 'COYAIMA', 23),
(972, 'CUNDAY', 23),
(973, 'DOLORES', 23),
(974, 'ESPINAL', 23),
(975, 'FALAN', 23),
(976, 'FLANDES', 23),
(977, 'FRESNO', 23),
(978, 'GUAMO', 23),
(979, 'HERVEO', 23),
(980, 'HONDA', 23),
(981, 'ICONONZO', 23),
(982, 'LERIDA', 23),
(983, 'LIBANO', 23),
(984, 'SAN SEBASTIAN DE MARIQUITA', 23),
(985, 'MELGAR', 23),
(986, 'MURILLO', 23),
(987, 'NATAGAIMA', 23),
(988, 'ORTEGA', 23),
(989, 'PALOCABILDO', 23),
(990, 'PIEDRAS', 23),
(991, 'PLANADAS', 23),
(992, 'PRADO', 23),
(993, 'PURIFICACION', 23),
(994, 'RIOBLANCO', 23),
(995, 'RONCESVALLES', 23),
(996, 'ROVIRA', 23),
(997, 'SALDANA', 23),
(998, 'SAN ANTONIO', 23),
(999, 'SAN LUIS', 23),
(1000, 'SANTA ISABEL', 23),
(1001, 'SUAREZ', 23),
(1002, 'VALLE DE SAN JUAN', 23),
(1003, 'VENADILLO', 23),
(1004, 'VILLAHERMOSA', 23),
(1005, 'VILLARRICA', 23),
(1006, 'SANTIAGO DE CALI', 24),
(1007, 'ALCALA', 24),
(1008, 'ANDALUCIA', 24),
(1009, 'ANSERMANUEVO', 24),
(1010, 'ARGELIA', 24),
(1011, 'BOLIVAR', 24),
(1012, 'BUENAVENTURA', 24),
(1013, 'GUADALAJARA DE BUGA', 24),
(1014, 'BUGALAGRANDE', 24),
(1015, 'CAICEDONIA', 24),
(1016, 'CALIMA', 24),
(1017, 'CANDELARIA', 24),
(1018, 'CARTAGO', 24),
(1019, 'DAGUA', 24),
(1020, 'EL AGUILA', 24),
(1021, 'EL CAIRO', 24),
(1022, 'EL CERRITO', 24),
(1023, 'EL DOVIO', 24),
(1024, 'FLORIDA', 24),
(1025, 'GINEBRA', 24),
(1026, 'GUACARI', 24),
(1027, 'JAMUNDI', 24),
(1028, 'LA CUMBRE', 24),
(1029, 'LA UNION', 24),
(1030, 'LA VICTORIA', 24),
(1031, 'OBANDO', 24),
(1032, 'PALMIRA', 24),
(1033, 'PRADERA', 24),
(1034, 'RESTREPO', 24),
(1035, 'RIOFRIO', 24),
(1036, 'ROLDANILLO', 24),
(1037, 'SAN PEDRO', 24),
(1038, 'SEVILLA', 24),
(1039, 'TORO', 24),
(1040, 'TRUJILLO', 24),
(1041, 'TULUA', 24),
(1042, 'ULLOA', 24),
(1043, 'VERSALLES', 24),
(1044, 'VIJES', 24),
(1045, 'YOTOCO', 24),
(1046, 'YUMBO', 24),
(1047, 'ZARZAL', 24),
(1048, 'ARAUCA', 25),
(1049, 'ARAUQUITA', 25),
(1050, 'CRAVO NORTE', 25),
(1051, 'FORTUL', 25),
(1052, 'PUERTO RONDON', 25),
(1053, 'SARAVENA', 25),
(1054, 'TAME', 25),
(1055, 'YOPAL', 26),
(1056, 'AGUAZUL', 26),
(1057, 'CHAMEZA', 26),
(1058, 'HATO COROZAL', 26),
(1059, 'LA SALINA', 26),
(1060, 'MANI', 26),
(1061, 'MONTERREY', 26),
(1062, 'NUNCHIA', 26),
(1063, 'OROCUE', 26),
(1064, 'PAZ DE ARIPORO', 26),
(1065, 'PORE', 26),
(1066, 'RECETOR', 26),
(1067, 'SABANALARGA', 26),
(1068, 'SACAMA', 26),
(1069, 'SAN LUIS DE PALENQUE', 26),
(1070, 'TAMARA', 26),
(1071, 'TAURAMENA', 26),
(1072, 'TRINIDAD', 26),
(1073, 'VILLANUEVA', 26),
(1074, 'MOCOA', 27),
(1075, 'COLON', 27),
(1076, 'ORITO', 27),
(1077, 'PUERTO ASIS', 27),
(1078, 'PUERTO CAICEDO', 27),
(1079, 'PUERTO GUZMAN', 27),
(1080, 'PUERTO LEGUIZAMO', 27),
(1081, 'SIBUNDOY', 27),
(1082, 'SAN FRANCISCO', 27),
(1083, 'SAN MIGUEL', 27),
(1084, 'SANTIAGO', 27),
(1085, 'VALLE DEL GUAMUEZ', 27),
(1086, 'VILLAGARZON', 27),
(1087, 'SAN ANDRES', 28),
(1088, 'PROVIDENCIA', 28),
(1089, 'LETICIA', 29),
(1090, 'EL ENCANTO', 29),
(1091, 'LA CHORRERA', 29),
(1092, 'LA PEDRERA', 29),
(1093, 'LA VICTORIA', 29),
(1094, 'MIRITI - PARANA', 29),
(1095, 'PUERTO ALEGRIA', 29),
(1096, 'PUERTO ARICA', 29),
(1097, 'PUERTO NARINO', 29),
(1098, 'PUERTO SANTANDER', 29),
(1099, 'TARAPACA', 29),
(1100, 'INIRIDA', 30),
(1101, 'BARRANCOMINAS', 30),
(1102, 'SAN FELIPE', 30),
(1103, 'PUERTO COLOMBIA', 30),
(1104, 'LA GUADALUPE', 30),
(1105, 'CACAHUAL', 30),
(1106, 'PANA PANA', 30),
(1107, 'MORICHAL', 30),
(1108, 'SAN JOSE DEL GUAVIARE', 31),
(1109, 'CALAMAR', 31),
(1110, 'EL RETORNO', 31),
(1111, 'MIRAFLORES', 31),
(1112, 'MITU', 32),
(1113, 'CARURU', 32),
(1114, 'PACOA', 32),
(1115, 'TARAIRA', 32),
(1116, 'PAPUNAHUA', 32),
(1117, 'YAVARATE', 32),
(1118, 'PUERTO CARRENO', 33),
(1119, 'LA PRIMAVERA', 33),
(1120, 'SANTA ROSALIA', 33),
(1121, 'CUMARIBO', 33);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentesco`
--

CREATE TABLE `parentesco` (
  `id_parentesco` int(11) NOT NULL,
  `parentesco` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `parentesco`
--

INSERT INTO `parentesco` (`id_parentesco`, `parentesco`) VALUES
(2, 'Conyuge'),
(3, 'Padre'),
(4, 'Madre'),
(5, 'Hijo(a)'),
(6, 'Hermano(a)'),
(7, 'Abuelo(a)'),
(8, 'Nieto(a)'),
(9, 'Tio(a)'),
(10, 'Primo(a)'),
(11, 'Sobrino(a)'),
(12, 'Suegro(a)'),
(13, 'Cunado(a)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `passwords`
--

CREATE TABLE `passwords` (
  `id_pass` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(200) NOT NULL,
  `codigo` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `passwords`
--

INSERT INTO `passwords` (`id_pass`, `email`, `token`, `codigo`, `fecha`) VALUES
(1, 'beltran502@hotmail.com', '132434006a', 9255, '2023-08-25 16:51:48'),
(2, 'beltran502@hotmail.com', '00db29945c', 7422, '2023-08-28 16:34:11'),
(3, 'beltran502@hotmail.com', '24a8631e9d', 1358, '2023-08-28 16:45:29'),
(4, 'beltran502@hotmail.com', '4d3d69ec4a', 1991, '2023-09-08 21:07:07'),
(5, 'beltran502@hotmail.co', '6c52b4ebd4', 5936, '2023-09-08 21:58:09'),
(6, 'beltran502@hotmail.com', '587bd6ad49', 2760, '2023-09-08 23:07:03'),
(7, 'beltran502@hotmail.co', '2f9148ca30', 2621, '2023-09-08 23:31:26'),
(8, 'beltran502@hotmail.com', '5f1b508bae', 6701, '2023-09-08 23:41:16'),
(9, 'beltran502@hotmail.com', '8c92494962', 5584, '2023-09-08 23:41:17'),
(10, 'beltran502@hotmail.co', 'c99369c2c7', 2848, '2023-09-08 23:47:17'),
(11, 'beltran502@hotmail.co', '4bd7771370', 1744, '2023-09-08 23:48:48'),
(12, 'beltran502@hotmail.co', '4474d1d4b8', 1523, '2023-09-08 23:48:57'),
(13, 'beltran502@hotmail.co', 'ae0981c8ba', 4270, '2023-09-08 23:50:50'),
(14, 'beltran502@hotmail.co', '9ea68dcc09', 5864, '2023-09-08 23:50:55'),
(15, 'beltran502@hotmail.co', 'c8278bd19a', 5562, '2023-09-08 23:52:24'),
(16, 'beltran502@hotmail.com', '364e43617e', 1257, '2023-09-29 17:00:23'),
(17, 'beltran502@hotmail.com', 'cc98a24113', 1242, '2023-11-08 22:51:16'),
(18, 'beltran502@hotmail.com', '0497f9341f', 8797, '2023-11-08 22:53:47'),
(19, 'romy472017@gmail.com', 'f59a9a4210', 3936, '2023-11-20 02:24:07'),
(20, 'romy472017@gmail.com', '478bbc204c', 7873, '2023-11-20 02:34:33'),
(21, 'romy472017@gmail.com', '63db0948f5', 3935, '2023-11-20 03:20:46'),
(22, 'romy472017@gmail.com', 'b814f03ca2', 1450, '2023-11-20 03:25:47'),
(23, 'beltran502@hotmail.com', 'b5f5bd6363', 9598, '2023-11-20 17:02:49'),
(24, 'beltran502@hotmail.com', 'a9c607e51a', 4832, '2023-11-20 17:05:46'),
(25, 'beltran502@hotmail.com', 'f53f2762d1', 9174, '2023-11-20 17:05:47'),
(26, 'eabeltran07@soy.sena.edu.co', '5a08c06ad8', 8817, '2023-11-20 17:27:15'),
(27, 'heidiardilavargas47@gmail.com', 'b2c769c94f', 5675, '2023-11-21 20:04:05'),
(28, 'heidiardilavargas47@gmail.com', '7ff3d19bf2', 5006, '2023-11-21 20:04:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id_permisos` int(11) NOT NULL,
  `documento` varchar(100) NOT NULL,
  `fk_id_rol` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`id_permisos`, `documento`, `fk_id_rol`) VALUES
(1, '123', '1'),
(2, 'bogota', '2'),
(3, 'admin', '3'),
(4, '52039956', '1'),
(5, '52039956', '1'),
(6, '52039956', '1'),
(7, '52039956', '1'),
(8, '52039956', '1'),
(9, '52039956', '1'),
(10, '52039956', '1'),
(11, '52039956', '1'),
(12, '52039956', '1'),
(13, '1033794770', '1'),
(14, '1033736402', '1'),
(15, '1001048005', '1'),
(16, '1001048005', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'usuario'),
(2, 'celador'),
(3, 'administrador ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(11) NOT NULL COMMENT 'id de solicitud de alojamiento',
  `nombre` varchar(50) NOT NULL,
  `documento` varchar(20) NOT NULL COMMENT 'numero de documento para identificar el funcionario que desea solicitar una cabaña ',
  `uso` varchar(100) NOT NULL COMMENT 'tipo de uso la cual se va a hacer la reservación',
  `destino` varchar(100) NOT NULL COMMENT 'lugar donde se van a realizar la reservación',
  `cantidad_p` varchar(20) NOT NULL COMMENT 'cantidad de acompañantes en la reserva',
  `f_ini` varchar(100) NOT NULL,
  `f_fin` varchar(100) NOT NULL,
  `dias_total` varchar(300) NOT NULL COMMENT 'días totales de la reserva ',
  `habitacion` varchar(100) NOT NULL,
  `radicado` varchar(255) NOT NULL,
  `fk_id_Estado_Solicitud` varchar(20) NOT NULL,
  `fecha_de_solicitud` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id_solicitud`, `nombre`, `documento`, `uso`, `destino`, `cantidad_p`, `f_ini`, `f_fin`, `dias_total`, `habitacion`, `radicado`, `fk_id_Estado_Solicitud`, `fecha_de_solicitud`) VALUES
(6, 'HAILY SAMARA ', '1033736402', 'Recreacion y turismo.', 'San Andrés', '2', '12/23/2023', '12/28/2023', '5', 'SanAndrés_H2.', 'S.A1033736402af7088', 'En espera ', '2023-11-20 18:33:33'),
(2, 'eduard andres', '123', 'Comision de Estudio y/o Servicio.', 'Bogotá', '1', '12/29/2023', '12/30/2023', '1', 'Bogotá_H2.', 'B123bc0a85', '', '2023-11-20 15:35:19'),
(3, 'eduard andres', '123', 'Comision de Estudio y/o Servicio.', 'Bogotá', '1', '12/21/2023', '12/22/2023', '1', 'Bogotá_H1.', 'B123d59ad6', 'En espera ', '2023-11-20 15:37:15'),
(4, 'eduard andres', '123', 'Comision de Estudio y/o Servicio.', 'Bogotá', '1', '12/30/2023', '12/31/2023', '1', 'Bogotá_H3.', 'B1239dd59a', 'En espera ', '2023-11-20 15:55:15'),
(5, 'eduard andres', '123', 'Eventos e Integracion.', 'Bogotá', 'Máximo 40 invitados.', '12/30/2023', '12/31/2023', '1', 'Bogotá_H4.', 'B1232a8274', 'En espera ', '2023-11-20 15:58:04'),
(9, 'eduard andres', '123', 'Comision de Estudio y/o Servicio.', 'Cartagena', '1', '12/08/2023', '12/09/2023', '1', 'Cartagena_H1. ', 'C1236a0c9c', 'En espera ', '2023-11-21 16:17:00'),
(8, 'rosa  ', '1001048005', 'Comision de Estudio y/o Servicio.', 'Bogotá', '2', '12/29/2023', '12/31/2023', '2', 'Bogotá_H1.', 'B100104800532e672', 'En espera ', '2023-11-20 21:14:19'),
(10, 'eduard andres', '123', 'Comision de Estudio y/o Servicio.', 'Bogotá', '1', '12/30/2023', '01/01/2024', '2', 'Bogotá_H5.', 'B123c2331a', 'En espera ', '2023-11-21 17:18:18'),
(11, 'jaime alberto ', '1001048005', 'Comision de Estudio y/o Servicio.', 'Bogotá', '2', '12/30/2023', '12/30/2023', '0', 'Bogotá_H7.', 'B1001048005e93ea5', 'En espera ', '2023-11-21 17:21:41'),
(12, 'Heydy', '1001048005', 'Comision de Estudio y/o Servicio.', 'Bogotá', '1', '12/30/2023', '01/03/2024', '4', 'Bogotá_H6.', 'B1001048005d76e82', 'En espera ', '2023-11-21 20:32:11'),
(13, 'Heydy', '1001048005', 'Comision de Estudio y/o Servicio.', 'Bogotá', '1', '12/30/2023', '12/31/2023', '1', 'Bogotá_H8.', 'B10010480054d01f3', 'Aprobado', '2023-11-21 20:37:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uso`
--

CREATE TABLE `uso` (
  `id_uso` int(11) NOT NULL,
  `uso` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `uso`
--

INSERT INTO `uso` (`id_uso`, `uso`) VALUES
(1, 'Comision de Estudio y/o Servicio.'),
(2, 'Recreacion y turismo.'),
(3, 'Reubicacion y/o traslado'),
(4, 'Eventos e Integracion.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(255) NOT NULL COMMENT 'código del usuario',
  `nombre` varchar(50) NOT NULL COMMENT 'nombre de identificación ',
  `apellido` varchar(50) NOT NULL COMMENT 'apellido de identificación ',
  `tipo_doc` varchar(100) NOT NULL COMMENT 'tipo de documento',
  `documento` varchar(20) NOT NULL COMMENT 'numero de identificación del usuario',
  `email` varchar(50) NOT NULL COMMENT 'correo del usuario',
  `password` varchar(255) NOT NULL COMMENT 'contraseña de ingreso ',
  `codigo` double NOT NULL,
  `verifico` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `tipo_doc`, `documento`, `email`, `password`, `codigo`, `verifico`) VALUES
(1, 'eduard andres', 'beltran perez', 'Cédula de ciudadanía', '123', 'beltran502@hotmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 5687, 'si'),
(2, 'eduard_admin', 'beltran_admin', 'Cédula de ciudadanía', 'admin', 'beltran5022@hotmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 2154, 'si'),
(3, 'eduard_cliente', 'beltran_cliente', 'Cédula de ciudadanía', 'bogota', 'beltran50222@hotmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 8745, 'si'),
(12, 'rosa maria', 'perez ortiz', 'Cédula de ciudadanía', '52039956', 'romy472017@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 6582, 'si'),
(13, 'eduard andres ', 'perez ortiz', 'Cédula de ciudadanía', '1033794770', 'eabeltran07@soy.sena.edu.co', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 7376, 'si'),
(14, 'PAMELA BRIGITTE', 'MANCHOLA', 'Cédula de ciudadanía', '1033736402', 'mafalda_910708@hotmail.com', '293f37779d90a872192512496fd013db6b222ecaefa7c2f0a5340a7f386ed924', 6824, 'si'),
(16, 'Heydy', 'Ardila Vargas', 'Cédula de ciudadanía', '1001048005', 'heidiardilavargas47@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 2551, 'si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acompaniante`
--
ALTER TABLE `acompaniante`
  ADD PRIMARY KEY (`id_acompaniante`);

--
-- Indices de la tabla `can_acomp`
--
ALTER TABLE `can_acomp`
  ADD PRIMARY KEY (`id_can`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_depa`);

--
-- Indices de la tabla `destino`
--
ALTER TABLE `destino`
  ADD PRIMARY KEY (`id_destino`);

--
-- Indices de la tabla `disponibilidadhabitacion`
--
ALTER TABLE `disponibilidadhabitacion`
  ADD PRIMARY KEY (`id_disponibilidad`),
  ADD KEY `id_habitacion` (`habitacionn`);

--
-- Indices de la tabla `epss`
--
ALTER TABLE `epss`
  ADD PRIMARY KEY (`id_eps`);

--
-- Indices de la tabla `estadodesolicitud`
--
ALTER TABLE `estadodesolicitud`
  ADD PRIMARY KEY (`id_Estado`);

--
-- Indices de la tabla `estados_de_la_solicitud`
--
ALTER TABLE `estados_de_la_solicitud`
  ADD PRIMARY KEY (`id_EstadoSolicitud`);

--
-- Indices de la tabla `estado_de_habitacion`
--
ALTER TABLE `estado_de_habitacion`
  ADD PRIMARY KEY (`id_estado_habitacion`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id_habitacion`);

--
-- Indices de la tabla `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`id_invitados`);

--
-- Indices de la tabla `medio_trasporte`
--
ALTER TABLE `medio_trasporte`
  ADD PRIMARY KEY (`id_tras`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id_municipio`);

--
-- Indices de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  ADD PRIMARY KEY (`id_parentesco`);

--
-- Indices de la tabla `passwords`
--
ALTER TABLE `passwords`
  ADD PRIMARY KEY (`id_pass`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id_permisos`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`);

--
-- Indices de la tabla `uso`
--
ALTER TABLE `uso`
  ADD PRIMARY KEY (`id_uso`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acompaniante`
--
ALTER TABLE `acompaniante`
  MODIFY `id_acompaniante` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de tabla acompañante', AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `can_acomp`
--
ALTER TABLE `can_acomp`
  MODIFY `id_can` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_depa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `destino`
--
ALTER TABLE `destino`
  MODIFY `id_destino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `disponibilidadhabitacion`
--
ALTER TABLE `disponibilidadhabitacion`
  MODIFY `id_disponibilidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `epss`
--
ALTER TABLE `epss`
  MODIFY `id_eps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `estadodesolicitud`
--
ALTER TABLE `estadodesolicitud`
  MODIFY `id_Estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `estados_de_la_solicitud`
--
ALTER TABLE `estados_de_la_solicitud`
  MODIFY `id_EstadoSolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estado_de_habitacion`
--
ALTER TABLE `estado_de_habitacion`
  MODIFY `id_estado_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `id_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `invitados`
--
ALTER TABLE `invitados`
  MODIFY `id_invitados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `medio_trasporte`
--
ALTER TABLE `medio_trasporte`
  MODIFY `id_tras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1122;

--
-- AUTO_INCREMENT de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `id_parentesco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `passwords`
--
ALTER TABLE `passwords`
  MODIFY `id_pass` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id_permisos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de solicitud de alojamiento', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `uso`
--
ALTER TABLE `uso`
  MODIFY `id_uso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(255) NOT NULL AUTO_INCREMENT COMMENT 'código del usuario', AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
