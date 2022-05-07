-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2022 a las 22:21:18
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ut`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id_bitacora` int(11) NOT NULL,
  `cedula` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `usuario` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `operacion` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `host` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `tabla` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `cedula`, `usuario`, `operacion`, `host`, `fecha`, `hora`, `tabla`, `status`) VALUES
(1, '2', 'root@localhost', 'Se creo un nuevo rol', 'localhost', '2021-08-29', '21:34:12', ' Seguridad Roles', NULL),
(2, '7403566', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2021-08-29', '21:34:50', 'Usuario', NULL),
(3, 'GAP173', 'root@localhost', 'Se inserto un vehiculo', 'localhost', '2021-09-13', '13:04:48', 'Vehiculo', NULL),
(4, 'SAR891', 'root@localhost', 'Se inserto un vehiculo', 'localhost', '2021-09-15', '18:33:21', 'Vehiculo', NULL),
(5, '95589666', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-10-13', '21:16:22', 'Chofer', NULL),
(6, '95589666', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2021-10-13', '21:37:00', 'Chofer', NULL),
(7, '26561633', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2021-10-20', '14:22:42', 'Usuario', NULL),
(8, '123456', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-03', '10:49:08', 'Chofer', NULL),
(9, '9601788', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-03', '10:51:37', 'Chofer', NULL),
(10, '26779425', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-03', '10:52:11', 'Chofer', NULL),
(11, '3', 'root@localhost', 'Se creo un nuevo rol', 'localhost', '2021-12-03', '10:53:24', ' Seguridad Roles', NULL),
(12, '4', 'root@localhost', 'Se creo un nuevo rol', 'localhost', '2021-12-03', '10:54:34', ' Seguridad Roles', NULL),
(13, '4', 'root@localhost', 'Se modifico un rol', 'localhost', '2021-12-03', '10:54:55', 'Seguridad Roles', NULL),
(14, 'Preventi', 'root@localhost', 'Se registro un dato en la tabla tipos ', 'localhost', '2021-12-03', '10:56:49', 'Tipos', NULL),
(15, 'Cambio d', 'root@localhost', 'Se registro un dato en la tabla tipos ', 'localhost', '2021-12-03', '10:57:13', 'Tipos', NULL),
(16, 'Chequeo', 'root@localhost', 'Se registro un dato en la tabla tipos ', 'localhost', '2021-12-03', '10:57:43', 'Tipos', NULL),
(17, 'Frenos', 'root@localhost', 'Se registro un dato en la tabla tipos ', 'localhost', '2021-12-03', '10:58:07', 'Tipos', NULL),
(18, 'GAP173', 'root@localhost', 'Se inserto una nueva ruta', 'localhost', '2021-12-03', '11:00:23', 'Ruta', NULL),
(19, 'VAS123', 'root@localhost', 'Se inserto una nueva ruta', 'localhost', '2021-12-03', '11:00:42', 'Ruta', NULL),
(20, 'XAM368', 'root@localhost', 'Se inserto una nueva ruta', 'localhost', '2021-12-03', '11:01:13', 'Ruta', NULL),
(21, 'SAR891', 'root@localhost', 'Se inserto una nueva ruta', 'localhost', '2021-12-03', '11:01:50', 'Ruta', NULL),
(22, 'Cambio d', 'root@localhost', 'Se Modifico un campo de la tabla', 'localhost', '2021-12-03', '11:02:10', 'Tipos', NULL),
(23, '11456268', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-03', '11:02:49', 'Chofer', NULL),
(24, '123456', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2021-12-03', '11:02:57', 'Chofer', NULL),
(25, '27889456', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-03', '11:03:30', 'Chofer', NULL),
(26, 'GAP173', 'root@localhost', 'Se inserto un nuevo mantenimiento', 'localhost', '2021-12-03', '11:04:03', 'Mantenimiento', NULL),
(27, 'PFS982', 'root@localhost', 'Se inserto un nuevo mantenimiento', 'localhost', '2021-12-03', '11:04:36', 'Mantenimiento', NULL),
(28, 'XAM368', 'root@localhost', 'Se inserto un nuevo mantenimiento', 'localhost', '2021-12-03', '11:05:14', 'Mantenimiento', NULL),
(29, 'Cauchos', 'root@localhost', 'Se registro un dato en la tabla tipos ', 'localhost', '2021-12-03', '11:05:36', 'Tipos', NULL),
(30, 'GAP173', 'root@localhost', 'Se registro una nueva reparacion', 'localhost', '2021-12-03', '11:06:05', 'Reparaciones', NULL),
(31, '01020304', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-16', '14:16:12', 'Chofer', NULL),
(32, '$%%$$%$$', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-16', '14:18:37', 'Chofer', NULL),
(33, '$%%$$%$$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2021-12-16', '14:19:07', 'Chofer', NULL),
(34, '030201', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-17', '09:42:05', 'Chofer', NULL),
(35, '030201', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2021-12-17', '10:09:33', 'Choferes', NULL),
(36, '$%%$$%$$', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2021-12-17', '10:09:40', 'Choferes', NULL),
(37, '$%%$$$$$', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-17', '10:18:55', 'Chofer', NULL),
(38, '01020304', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2021-12-17', '10:37:50', 'Choferes', NULL),
(39, '11456268', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2021-12-17', '10:37:50', 'Choferes', NULL),
(40, '123456', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2021-12-17', '10:37:50', 'Choferes', NULL),
(41, '26779425', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2021-12-17', '10:37:50', 'Choferes', NULL),
(42, '27889456', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2021-12-17', '10:37:50', 'Choferes', NULL),
(43, '95589666', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2021-12-17', '10:37:50', 'Choferes', NULL),
(44, '9601788', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2021-12-17', '10:37:50', 'Choferes', NULL),
(48, '01020304', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2021-12-17', '11:42:23', 'Usuario', NULL),
(49, '$%%$%$$$', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-20', '10:11:31', 'Chofer', NULL),
(50, '050505', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2021-12-21', '19:43:57', 'Usuario', NULL),
(51, '$%%$$%%$', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-22', '10:38:48', 'Chofer', NULL),
(52, '$%%$%$$$', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-22', '10:39:40', 'Chofer', NULL),
(53, '$%%$$$%$', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2021-12-22', '12:29:12', 'Chofer', NULL),
(54, '$%%$$$$$', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2021-12-29', '19:07:15', 'Usuario', NULL),
(55, '$%%%$$%$', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2021-12-29', '19:10:20', 'Usuario', NULL),
(56, '$%%$$%%$', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-01-04', '19:54:40', 'Usuario', NULL),
(57, '$$%%$$%%', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-01-04', '20:03:18', 'Usuario', NULL),
(58, '$$$$$$$$', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-01-04', '20:03:39', 'Usuario', NULL),
(59, '01020304', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-01-04', '20:19:30', 'Usuario', NULL),
(60, '050505', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-01-04', '20:19:30', 'Usuario', NULL),
(61, '1234', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-01-04', '20:19:30', 'Usuario', NULL),
(62, '26561633', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-01-04', '20:19:30', 'Usuario', NULL),
(63, '7403566', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-01-04', '20:19:30', 'Usuario', NULL),
(64, '01020304', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-01-04', '20:21:19', 'Usuario', NULL),
(65, '050505', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-01-04', '20:21:19', 'Usuario', NULL),
(66, '1234', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-01-04', '20:21:19', 'Usuario', NULL),
(67, '26561633', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-01-04', '20:21:19', 'Usuario', NULL),
(68, '7403566', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-01-04', '20:21:19', 'Usuario', NULL),
(69, '$$$$$$$$', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-01-04', '20:22:46', 'Usuario', NULL),
(70, '$$%%$$%%', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-01-04', '20:22:47', 'Usuario', NULL),
(71, '$%%$$$$$', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-01-04', '20:22:47', 'Usuario', NULL),
(72, '$%%$$%%$', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-01-04', '20:22:47', 'Usuario', NULL),
(73, '$%%%$$%$', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-01-04', '20:22:47', 'Usuario', NULL),
(74, '1234', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-01-04', '20:27:58', 'Usuario', NULL),
(75, '01020304', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-01-04', '20:29:10', 'Usuario', NULL),
(76, '26561633', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-01-04', '20:30:03', 'Usuario', NULL),
(77, '050505', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-01-04', '20:30:06', 'Usuario', NULL),
(78, '7403566', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-01-04', '20:30:36', 'Usuario', NULL),
(79, '$%%$$%%$', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-01-05', '08:43:50', 'Usuario', NULL),
(80, '$%%$$$$$', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-01-05', '08:56:13', 'Usuario', NULL),
(81, '$%%$$$$$', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-01-05', '08:56:23', 'Usuario', NULL),
(82, '$%%$$$$$', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-01-05', '08:56:33', 'Usuario', NULL),
(83, '123456', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-16', '12:21:38', 'Usuario', NULL),
(84, '$%%$$$$$', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-16', '12:25:20', 'Usuario', NULL),
(85, '$%%$$$%$', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-16', '12:25:51', 'Usuario', NULL),
(87, '$%%$$%%$', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-16', '12:26:31', 'Usuario', NULL),
(88, '12345678', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-16', '12:26:49', 'Usuario', NULL),
(89, '$%%$$%%$', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-16', '12:27:41', 'Usuario', NULL),
(90, '$%%$%$$$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-02-16', '12:41:39', 'Chofer', NULL),
(91, '$%%$%$$$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-02-16', '12:41:50', 'Chofer', NULL),
(92, '26561638', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2022-02-16', '12:42:13', 'Chofer', NULL),
(93, 'OGA1703', 'root@localhost', 'Se Modifico una ruta', 'localhost', '2022-02-16', '12:42:29', 'Ruta', NULL),
(94, 'EAP685', 'root@localhost', 'Se inserto una nueva ruta', 'localhost', '2022-02-16', '12:46:38', 'Ruta', NULL),
(95, 'OGA1703', 'root@localhost', 'Se inserto un nuevo mantenimiento', 'localhost', '2022-02-16', '12:55:28', 'Mantenimiento', NULL),
(96, '10847565', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-20', '15:47:04', 'Usuario', NULL),
(97, 'KVT47V', 'root@localhost', 'Se inserto una nueva ruta', 'localhost', '2022-02-20', '15:48:07', 'Ruta', NULL),
(98, '12345678', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-20', '16:00:15', 'Usuario', NULL),
(99, '10847565', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-21', '16:38:20', 'Usuario', NULL),
(100, '4', 'root@localhost', 'Se modifico un rol', 'localhost', '2022-02-21', '16:59:25', 'Seguridad Roles', NULL),
(101, '12345678', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-21', '17:00:02', 'Usuario', NULL),
(102, '9601754', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-21', '17:35:30', 'Usuario', NULL),
(103, '$$%$$%%$', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2022-02-21', '19:11:43', 'Chofer', NULL),
(104, '10847107', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2022-02-21', '19:14:47', 'Choferes', NULL),
(105, '26561633', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2022-02-21', '19:14:48', 'Choferes', NULL),
(106, '26561638', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2022-02-21', '19:14:48', 'Choferes', NULL),
(107, '$%%$$$%$', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2022-02-21', '19:15:16', 'Chofer', NULL),
(108, '$%%$%%%$', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2022-02-21', '19:15:47', 'Chofer', NULL),
(109, '$%%$%$%$', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2022-02-21', '19:16:21', 'Chofer', NULL),
(110, '12345678', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-21', '19:19:54', 'Usuario', NULL),
(111, '17039811', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-21', '19:19:59', 'Usuario', NULL),
(112, '$%%%$$$$', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2022-02-21', '19:21:55', 'Chofer', NULL),
(113, '$%%$%$%$', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2022-02-21', '19:22:40', 'Chofer', NULL),
(114, '10847565', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-21', '19:23:09', 'Usuario', NULL),
(115, '123456', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-21', '19:23:09', 'Usuario', NULL),
(116, '9601754', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-21', '19:23:09', 'Usuario', NULL),
(117, '9601783', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-21', '19:23:09', 'Usuario', NULL),
(118, '98765432', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-21', '19:23:09', 'Usuario', NULL),
(119, '123456', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-21', '19:23:55', 'Usuario', NULL),
(120, '26561633', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-21', '19:25:17', 'Usuario', NULL),
(121, '34567891', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-21', '19:26:37', 'Usuario', NULL),
(122, '98765421', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-21', '19:29:49', 'Usuario', NULL),
(123, '123456', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-21', '19:32:34', 'Usuario', NULL),
(124, '10847565', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-21', '19:33:28', 'Usuario', NULL),
(125, '123456', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-21', '19:33:28', 'Usuario', NULL),
(126, '123456', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-21', '19:36:06', 'Usuario', NULL),
(127, '10847565', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-21', '19:36:49', 'Usuario', NULL),
(128, '26561633', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-21', '19:36:52', 'Usuario', NULL),
(129, '34567891', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-21', '19:36:54', 'Usuario', NULL),
(130, '98765421', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-21', '19:36:56', 'Usuario', NULL),
(131, '34567894', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-21', '19:39:43', 'Usuario', NULL),
(132, '26561789', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-21', '19:43:58', 'Usuario', NULL),
(133, 'VAS654', 'root@localhost', 'Se inserto una nueva ruta', 'localhost', '2022-02-21', '19:54:16', 'Ruta', NULL),
(134, 'KVT47V', 'root@localhost', 'Se inserto una nueva ruta', 'localhost', '2022-02-21', '19:54:57', 'Ruta', NULL),
(135, 'EAP685', 'root@localhost', 'Se inserto una nueva ruta', 'localhost', '2022-02-21', '19:55:58', 'Ruta', NULL),
(136, '26561789', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-21', '20:32:14', 'Usuario', NULL),
(137, '26561789', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-21', '20:32:16', 'Usuario', NULL),
(138, '26561789', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-21', '20:32:37', 'Usuario', NULL),
(139, '26561633', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-21', '20:33:18', 'Usuario', NULL),
(140, 'EAP685', 'root@localhost', 'Se inserto un nuevo mantenimiento', 'localhost', '2022-02-21', '21:36:10', 'Mantenimiento', NULL),
(141, 'Prueba', 'root@localhost', 'Se registro un dato en la tabla tipos ', 'localhost', '2022-02-23', '14:09:52', 'Tipos', NULL),
(142, '12345670', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-23', '14:20:36', 'Usuario', NULL),
(143, 'VAS654', 'root@localhost', 'Se inserto un nuevo mantenimiento', 'localhost', '2022-02-23', '14:28:50', 'Mantenimiento', NULL),
(144, 'KVT47V', 'root@localhost', 'Se inserto un nuevo mantenimiento', 'localhost', '2022-02-23', '14:29:24', 'Mantenimiento', NULL),
(145, 'YYLA891', 'root@localhost', 'Se inserto un nuevo mantenimiento', 'localhost', '2022-02-23', '14:30:06', 'Mantenimiento', NULL),
(146, 'KOWP145', 'root@localhost', 'Se inserto un nuevo mantenimiento', 'localhost', '2022-02-23', '14:30:34', 'Mantenimiento', NULL),
(147, 'EAP685', 'root@localhost', 'Se Modifico una ruta', 'localhost', '2022-02-23', '14:31:34', 'Ruta', NULL),
(149, 'VAS654', 'root@localhost', 'Se Modifico una ruta', 'localhost', '2022-02-23', '14:32:50', 'Ruta', NULL),
(153, '$%%$%%%$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-02-23', '15:05:49', 'Chofer', NULL),
(154, '$%%$%%%$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-02-23', '15:06:41', 'Chofer', NULL),
(155, '$%%$%%%$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-02-23', '15:08:55', 'Chofer', NULL),
(156, '$%%$%%%$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-02-23', '15:08:59', 'Chofer', NULL),
(157, '$%%$%%%$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-02-23', '15:10:57', 'Chofer', NULL),
(158, 'dfsdfds', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2022-02-23', '15:13:56', 'Chofer', NULL),
(159, 'dfsdfds', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-02-23', '15:16:03', 'Chofer', NULL),
(160, '$%%$%%%$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-02-23', '15:16:09', 'Chofer', NULL),
(161, '$%%$%%%$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-02-23', '15:16:16', 'Chofer', NULL),
(162, 'dfsdfds', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-02-23', '15:16:49', 'Chofer', NULL),
(163, 'dfsdfds', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2022-02-23', '15:24:04', 'Choferes', NULL),
(164, '$%%$%%%$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-02-23', '15:25:43', 'Chofer', NULL),
(165, '26561638', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2022-02-23', '15:29:50', 'Chofer', NULL),
(166, '26561638', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2022-02-23', '15:33:53', 'Choferes', NULL),
(167, '$$%$$%%$', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2022-02-23', '15:34:58', 'Chofer', NULL),
(168, '$$%$$%%$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-02-23', '15:35:08', 'Chofer', NULL),
(169, 'KOWP145', 'root@localhost', 'Se registro una nueva reparacion', 'localhost', '2022-02-23', '15:37:22', 'Reparaciones', NULL),
(170, 'KVT47V', 'root@localhost', 'Se registro una nueva reparacion', 'localhost', '2022-02-23', '15:37:40', 'Reparaciones', NULL),
(171, 'VAS654', 'root@localhost', 'Se registro una nueva reparacion', 'localhost', '2022-02-23', '15:38:28', 'Reparaciones', NULL),
(172, 'YYLA891', 'root@localhost', 'Se registro una nueva reparacion', 'localhost', '2022-02-23', '15:39:01', 'Reparaciones', NULL),
(175, '01010101', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-26', '09:29:05', 'Usuario', NULL),
(176, '01010101', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-26', '09:33:35', 'Usuario', NULL),
(177, '12345670', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-26', '09:33:39', 'Usuario', NULL),
(178, '010101', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-26', '09:34:20', 'Usuario', NULL),
(179, '010101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-26', '09:39:23', 'Usuario', NULL),
(180, '010101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-26', '09:39:35', 'Usuario', NULL),
(181, '010101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-26', '09:39:36', 'Usuario', NULL),
(182, '010101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-26', '09:39:40', 'Usuario', NULL),
(183, '010101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-26', '09:39:42', 'Usuario', NULL),
(184, '010101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-26', '09:39:44', 'Usuario', NULL),
(185, '010101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-26', '09:39:46', 'Usuario', NULL),
(186, '010101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-26', '09:39:48', 'Usuario', NULL),
(187, '010101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-26', '09:39:49', 'Usuario', NULL),
(188, '010101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-26', '09:39:57', 'Usuario', NULL),
(189, '010101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-26', '09:40:00', 'Usuario', NULL),
(190, '010101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-26', '09:58:34', 'Usuario', NULL),
(191, '010101', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-26', '09:58:41', 'Usuario', NULL),
(192, '010101', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-26', '09:59:02', 'Usuario', NULL),
(193, '010101', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-26', '10:05:18', 'Usuario', NULL),
(194, '0101', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-26', '10:05:41', 'Usuario', NULL),
(195, '123456', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-26', '10:31:25', 'Usuario', NULL),
(196, '0101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-02-26', '10:33:30', 'Usuario', NULL),
(197, '0101', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-02-26', '10:34:16', 'Usuario', NULL),
(198, '0101', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-26', '10:34:32', 'Usuario', NULL),
(199, '26577823', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-26', '10:41:57', 'Usuario', NULL),
(200, '1111', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-02-26', '10:55:34', 'Usuario', NULL),
(201, '1111', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-05', '20:01:50', 'Usuario', NULL),
(202, '123456', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-05', '20:02:58', 'Usuario', NULL),
(203, '123456', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-05', '20:03:00', 'Usuario', NULL),
(204, '1111', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-05', '20:03:05', 'Usuario', NULL),
(205, '1111', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-05', '20:03:10', 'Usuario', NULL),
(206, '1111', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-05', '20:03:24', 'Usuario', NULL),
(207, '1111', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-05', '20:05:35', 'Usuario', NULL),
(208, '1111', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-05', '20:05:39', 'Usuario', NULL),
(209, '1111', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-03-05', '20:06:11', 'Usuario', NULL),
(210, '$%%$%%%$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-03-05', '20:07:07', 'Chofer', NULL),
(211, '26577823', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-05', '20:07:19', 'Usuario', NULL),
(212, '26577823', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-05', '20:07:22', 'Usuario', NULL),
(213, '26577823', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-05', '20:09:32', 'Usuario', NULL),
(214, '26577823', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-05', '22:20:42', 'Usuario', NULL),
(215, '365874', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-03-05', '22:21:22', 'Usuario', NULL),
(216, '123456', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-05', '22:43:23', 'Usuario', NULL),
(217, '365874', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-06', '07:27:20', 'Usuario', NULL),
(218, '26561633', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-03-06', '07:31:07', 'Usuario', NULL),
(219, '34567894', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-03-06', '07:31:11', 'Usuario', NULL),
(220, '365874', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-07', '09:55:43', 'Usuario', NULL),
(221, '10847107', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-03-07', '09:56:09', 'Usuario', NULL),
(225, '365874', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-07', '14:40:55', 'Usuario', NULL),
(226, '26577823', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-07', '14:41:01', 'Usuario', NULL),
(228, '123456', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-07', '14:43:03', 'Usuario', NULL),
(229, '123456', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-07', '14:43:15', 'Usuario', NULL),
(230, '365874', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-07', '21:01:11', 'Usuario', NULL),
(233, '10847107', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-07', '21:05:18', 'Usuario', NULL),
(235, '10847107', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-07', '21:11:35', 'Usuario', NULL),
(236, '365874', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-07', '21:12:27', 'Usuario', NULL),
(237, '10847107', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-03-07', '21:15:02', 'Usuario', NULL),
(241, '$%%%$$$$', 'root@localhost', 'Se inserto un nuevo chofer', 'localhost', '2022-04-07', '19:19:05', 'Chofer', NULL),
(242, '26398488', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-07', '21:48:10', 'Usuario', NULL),
(243, '26398477', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-07', '21:50:38', 'Usuario', NULL),
(244, '26398488', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-04-07', '21:51:04', 'Usuario', NULL),
(245, '26398477', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-04-07', '21:51:08', 'Usuario', NULL),
(246, '26398477', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-07', '21:53:58', 'Usuario', NULL),
(247, '26398477', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-04-07', '21:54:53', 'Usuario', NULL),
(248, '26398488', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-07', '21:55:15', 'Usuario', NULL),
(249, '26398488', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-04-07', '21:55:22', 'Usuario', NULL),
(250, '26398488', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-07', '21:56:54', 'Usuario', NULL),
(251, '26398488', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-04-07', '21:57:20', 'Usuario', NULL),
(252, '26398488', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-07', '21:57:46', 'Usuario', NULL),
(253, '26398488', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-04-07', '21:58:04', 'Usuario', NULL),
(254, '95589666', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-12', '01:13:56', 'Usuario', NULL),
(255, '9558962', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-12', '21:19:12', 'Usuario', NULL),
(256, '26561633', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-12', '21:32:25', 'Usuario', NULL),
(257, '30868382', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-13', '21:33:08', 'Usuario', NULL),
(258, '10847107', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-13', '21:36:03', 'Usuario', NULL),
(259, 'prueba', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-13', '21:40:07', 'Usuario', NULL),
(260, 'prueba2', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-13', '21:42:40', 'Usuario', NULL),
(261, '12345647', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-13', '21:45:28', 'Usuario', NULL),
(262, '123456', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-04-13', '21:46:15', 'Usuario', NULL),
(263, '12345647', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-04-13', '21:46:16', 'Usuario', NULL),
(264, '26561633', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-04-13', '21:46:16', 'Usuario', NULL),
(265, 'prueba', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-04-13', '21:46:16', 'Usuario', NULL),
(266, 'prueba2', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-04-13', '21:46:16', 'Usuario', NULL),
(267, '10847107', 'root@localhost', 'Se elimino un usuario', 'localhost', '2022-04-13', '21:46:22', 'Usuario', NULL),
(268, '26561633', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-13', '21:53:25', 'Usuario', NULL),
(269, 'PRUEBA', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-13', '21:57:34', 'Usuario', NULL),
(270, 'HHHH', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-13', '21:59:37', 'Usuario', NULL),
(271, 'PRUEBA', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-04-17', '15:02:31', 'Usuario', NULL),
(272, '0101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-04-17', '15:02:38', 'Usuario', NULL),
(273, '10847107', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-04-17', '15:02:46', 'Usuario', NULL),
(274, '26561633', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-04-17', '15:02:52', 'Usuario', NULL),
(275, '26577823', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-04-17', '15:03:02', 'Usuario', NULL),
(276, '30868382', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-04-17', '15:03:08', 'Usuario', NULL),
(277, '365874', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-04-17', '15:04:00', 'Usuario', NULL),
(278, '95589666', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-04-17', '15:04:07', 'Usuario', NULL),
(279, '26561633', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-18', '15:55:48', 'Usuario', NULL),
(280, 'OGA1703', 'root@localhost', 'Se modifico un mantenimiento', 'localhost', '2022-04-20', '21:11:39', 'Mantenimiento', NULL),
(281, 'EAP685', 'root@localhost', 'Se modifico un mantenimiento', 'localhost', '2022-04-20', '21:11:54', 'Mantenimiento', NULL),
(282, 'OGA1703', 'root@localhost', 'Se modifico un mantenimiento', 'localhost', '2022-04-20', '21:12:40', 'Mantenimiento', NULL),
(283, 'KVT47V', 'root@localhost', 'Se modifico un mantenimiento', 'localhost', '2022-04-20', '21:12:53', 'Mantenimiento', NULL),
(284, 'VAS654', 'root@localhost', 'Se modifico un mantenimiento', 'localhost', '2022-04-20', '21:13:01', 'Mantenimiento', NULL),
(285, '30868382', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-04-24', '10:18:09', 'Usuario', NULL),
(286, 'Cambio d', 'root@localhost', 'Se Modifico un campo de la tabla', 'localhost', '2022-04-24', '16:00:23', 'Tipos', NULL),
(287, 'Chequeo', 'root@localhost', 'Se Modifico un campo de la tabla', 'localhost', '2022-04-24', '16:00:30', 'Tipos', NULL),
(288, 'EAP685', 'root@localhost', 'Se modifico un mantenimiento', 'localhost', '2022-04-24', '16:41:55', 'Mantenimiento', NULL),
(289, 'YYLA891', 'root@localhost', 'Se modifico un mantenimiento', 'localhost', '2022-04-24', '16:42:04', 'Mantenimiento', NULL),
(290, 'KOWP145', 'root@localhost', 'Se modifico un mantenimiento', 'localhost', '2022-04-24', '16:42:11', 'Mantenimiento', NULL),
(291, 'OGA1703', 'root@localhost', 'Se modifico una reparacion', 'localhost', '2022-04-24', '17:10:11', 'Reparacion', NULL),
(292, 'KOWP145', 'root@localhost', 'Se modifico una reparacion', 'localhost', '2022-04-24', '17:10:18', 'Reparacion', NULL),
(293, 'KVT47V', 'root@localhost', 'Se modifico una reparacion', 'localhost', '2022-04-24', '17:11:54', 'Reparacion', NULL),
(294, 'VAS654', 'root@localhost', 'Se modifico una reparacion', 'localhost', '2022-04-24', '17:12:01', 'Reparacion', NULL),
(295, 'YYLA891', 'root@localhost', 'Se modifico una reparacion', 'localhost', '2022-04-24', '17:12:09', 'Reparacion', NULL),
(296, '4', 'root@localhost', 'Se modifico un rol', 'localhost', '2022-04-24', '18:18:49', 'Seguridad Roles', NULL),
(297, '1', 'root@localhost', 'Se modifico un rol', 'localhost', '2022-04-24', '18:18:56', 'Seguridad Roles', NULL),
(298, '3', 'root@localhost', 'Se modifico un rol', 'localhost', '2022-04-24', '18:19:03', 'Seguridad Roles', NULL),
(299, '26561631', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-04-29', '16:06:10', 'Usuario', NULL),
(300, '0101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-04-29', '16:06:43', 'Usuario', NULL),
(301, '10847107', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-05-01', '17:25:41', 'Usuario', NULL),
(302, '95589666', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-05-02', '10:09:45', 'Usuario', NULL),
(303, '26561631', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-05-02', '10:22:03', 'Usuario', NULL),
(304, '26561631', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-05-02', '10:22:11', 'Usuario', NULL),
(305, '0101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-05-02', '10:43:54', 'Usuario', NULL),
(306, '0101', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-05-02', '10:59:45', 'Usuario', NULL),
(307, '28946711', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-05-05', '11:46:38', 'Usuario', NULL),
(308, '95589666', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-05-05', '17:46:44', 'Usuario', NULL),
(309, '95589666', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-05-05', '17:47:16', 'Usuario', NULL),
(310, '3333385', 'root@localhost', 'Se inserto un nuevo usuario', 'localhost', '2022-05-05', '17:48:59', 'Usuario', NULL),
(311, '26561633', 'root@localhost', 'Se Modifico un campo de esta tabla', 'localhost', '2022-05-05', '18:39:10', 'Usuario', NULL),
(312, '$$%$$%%$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-05-06', '15:22:36', 'Chofer', NULL),
(313, '$$%$$%%$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-05-06', '15:22:43', 'Chofer', NULL),
(314, '$%%%$$$$', 'root@localhost', 'Se Modificaron los datos de un chofer', 'localhost', '2022-05-06', '15:22:50', 'Chofer', NULL),
(315, '$%%$%$%$', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2022-05-06', '16:09:46', 'Choferes', NULL),
(316, '$%%%$$$$', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2022-05-06', '16:11:29', 'Choferes', NULL),
(317, '$%%%$$$$', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2022-05-06', '16:11:47', 'Choferes', NULL),
(318, '$$%$$%%$', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2022-05-06', '16:18:25', 'Choferes', NULL),
(319, '$%%$$$%$', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2022-05-06', '16:18:25', 'Choferes', NULL),
(320, '$%%$%%%$', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2022-05-06', '16:18:25', 'Choferes', NULL),
(321, '$%%$%$%$', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2022-05-06', '16:18:26', 'Choferes', NULL),
(322, '$$%$$%%$', 'root@localhost', 'Se elimino un Chofer del registro', 'localhost', '2022-05-06', '16:18:26', 'Choferes', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `choferes`
--

CREATE TABLE `choferes` (
  `id_choferes` int(11) NOT NULL,
  `placa` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `apellido` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `cedula` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Disparadores `choferes`
--
DELIMITER $$
CREATE TRIGGER `after_chofer_update` BEFORE UPDATE ON `choferes` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.cedula,'Chofer', 'Se Modificaron los datos de un chofer')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_chofer_insertar` AFTER INSERT ON `choferes` FOR EACH ROW INSERT INTO bitacora (host, usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),NEW.cedula, 'Chofer', 'Se inserto un nuevo chofer')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `choferes_delete` AFTER DELETE ON `choferes` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.cedula,'Choferes', 'Se elimino un Chofer del registro')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos`
--

CREATE TABLE `mantenimientos` (
  `id_mantenimiento` int(11) NOT NULL,
  `nombre_tipo` varchar(30) COLLATE utf8_bin NOT NULL,
  `tiempo` varchar(20) COLLATE utf8_bin NOT NULL,
  `placa` varchar(100) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `costo` varchar(30) COLLATE utf8_bin NOT NULL,
  `fecha` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `mantenimientos`
--

INSERT INTO `mantenimientos` (`id_mantenimiento`, `nombre_tipo`, `tiempo`, `placa`, `nombre`, `costo`, `fecha`, `status`) VALUES
(1, 'Cambio de aceite', '1', 'OGA1703', 'Fernandez ', '10,0', '2021-09-03', 1),
(2, 'Chequeo', '3', 'EAP685', 'Mcqueen', '30,0', '2021-10-02', 1),
(4, 'Frenos', '1', 'OGA1703', 'Mcqueen', '15,0', '2022-02-15', 1),
(5, 'Cambio de aceite', '1', 'EAP685', 'Las Shakiras', '30,0', '2022-02-21', 1),
(6, 'Cauchos', '3', 'VAS654', 'Michellin', '90,0', '2021-02-23', 1),
(7, 'Chequeo', '3', 'KVT47V', 'Las Shakiras', '135,0', '2022-02-15', 1),
(8, 'Preventivo', '2', 'YYLA891', 'Fernandez ', '150,0', '2020-01-01', 1),
(9, 'Cambio de aceite', '1', 'KOWP145', 'Mcqueen', '60,0', '2022-03-23', 1);

--
-- Disparadores `mantenimientos`
--
DELIMITER $$
CREATE TRIGGER `after_mantenimientos_update` BEFORE UPDATE ON `mantenimientos` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Mantenimiento', 'Se modifico un mantenimiento')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_mantenimientos_insertar` AFTER INSERT ON `mantenimientos` FOR EACH ROW INSERT INTO bitacora (host, usuario, cedula, fecha, hora, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NEW.placa, NOW(), NOW(),'Mantenimiento', 'Se inserto un nuevo mantenimiento')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mantenimientos_delete` AFTER DELETE ON `mantenimientos` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Mantenimientos', 'Se elimino un mantenimiento asociado a la placa señalada')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparaciones`
--

CREATE TABLE `reparaciones` (
  `id_reparaciones` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `placa` varchar(100) COLLATE utf8_bin NOT NULL,
  `costo` varchar(30) COLLATE utf8_bin NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `reparaciones`
--

INSERT INTO `reparaciones` (`id_reparaciones`, `nombre`, `placa`, `costo`, `fecha`, `descripcion`, `status`) VALUES
(1, 'Mcqueen', 'OGA1703', '50,0', '2021-09-03', 'Revision completa', 1),
(2, 'Las Shakiras', 'KOWP145', '60,0', '2020-02-15', 'Revision completa', 1),
(3, 'Kiara', 'KVT47V', '150,0', '2022-02-23', 'todo', 1),
(4, 'Michellin', 'VAS654', '5,0', '2022-01-15', 'Aire en cauchos', 1),
(5, 'Mcqueen', 'YYLA891', '180,0', '2019-02-17', 'Tren delantero', 1);

--
-- Disparadores `reparaciones`
--
DELIMITER $$
CREATE TRIGGER `after_reparaciones_update` BEFORE UPDATE ON `reparaciones` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Reparacion', 'Se modifico una reparacion')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_reparacion_insertar` AFTER INSERT ON `reparaciones` FOR EACH ROW INSERT INTO bitacora (host, usuario, cedula, fecha, hora, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NEW.placa, NOW(), NOW(),'Reparaciones', 'Se registro una nueva reparacion')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `reparacion_delete` AFTER DELETE ON `reparaciones` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Reparaciones', 'Se elimino una reparacion')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(15) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `permiso_usuario` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permisos_vehiculos` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permiso_choferes` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permiso_rutas` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permiso_taller` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permiso_mantenimiento` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permiso_bitacora` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permiso_seguridad` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `permiso_reportes` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`, `descripcion`, `permiso_usuario`, `permisos_vehiculos`, `permiso_choferes`, `permiso_rutas`, `permiso_taller`, `permiso_mantenimiento`, `permiso_bitacora`, `permiso_seguridad`, `permiso_reportes`, `status`) VALUES
(4, 'Administrador', 'Permiso para todo', 'todo', 'todo', 'todo', NULL, 'todo', 'todo', 'todo', 'todo', 'todo', 1),
(1, 'Root', 'Es el superusuario de este sistema.', 'todo', 'todo', 'todo', 'todo', 'todo', 'todo', 'todo', 'todo', 'todo', 1),
(2, 'Secretaria', 'Solo dispone de tres modulos', 'todo', 'todo', 'todo', NULL, 'lectura', 'lectura', 'lectura', 'restringido', 'restringido', 0),
(3, 'UsuarioEstandar', 'Solo puede consultar', 'restringido', 'lectura', 'lectura', 'lectura', 'lectura', 'lectura', 'restringido', 'restringido', 'todo', 1);

--
-- Disparadores `roles`
--
DELIMITER $$
CREATE TRIGGER `bitacora_roles_delete` AFTER DELETE ON `roles` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.id_rol,'Seguridad Roles', 'Se elimino un rol')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_roles_insertar` AFTER INSERT ON `roles` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),NEW.id_rol,' Seguridad Roles', 'Se creo un nuevo rol')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_roles_update` BEFORE UPDATE ON `roles` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),NEW.id_rol,'Seguridad Roles', 'Se modifico un rol')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id_ruta` int(11) NOT NULL,
  `placa` varchar(100) COLLATE utf8_bin NOT NULL,
  `nombre_ruta` varchar(50) COLLATE utf8_bin NOT NULL,
  `direccion_ruta` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id_ruta`, `placa`, `nombre_ruta`, `direccion_ruta`, `hora_salida`, `status`) VALUES
(5, 'KVT47V', 'BarrioUnion', 'calle 4 con 6 hasta la macias', '01:15:00', 0),
(2, 'EAP685', 'Centro', 'av.20 hasta la vargas', '12:15:00', 0),
(3, 'KVT47V', 'SantaIsabel', 'principal calle 1 con dos', '12:15:00', 0),
(4, 'VAS654', 'SantaRosa', 'calle 1 con dos', '12:15:00', 0),
(6, 'EAP685', 'ZonaEste', 'Av, Lara hasta el sambil', '07:35:00', 0),
(1, 'KOWP145', 'ZonaNorte', 'Zona norte, Yucatan', '12:30:00', 0);

--
-- Disparadores `rutas`
--
DELIMITER $$
CREATE TRIGGER `after_ruta_update` BEFORE UPDATE ON `rutas` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Ruta', 'Se Modifico una ruta')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_ruta_insertar` AFTER INSERT ON `rutas` FOR EACH ROW INSERT INTO bitacora (host, usuario, cedula, fecha, hora, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NEW.placa, NOW(), NOW(),'Ruta', 'Se inserto una nueva ruta')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `rutas_delete` AFTER DELETE ON `rutas` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.placa,'Ruta', 'Se elimino una ruta')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taller`
--

CREATE TABLE `taller` (
  `id_taller` int(11) NOT NULL,
  `rif` varchar(10) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `informacion_contacto` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `taller`
--

INSERT INTO `taller` (`id_taller`, `rif`, `nombre`, `direccion`, `informacion_contacto`, `status`) VALUES
(1, 'E-9601788 ', 'Mcqueen', 'Libertador con 37', '02514423626', 1),
(2, 'J-26561633', 'ORI', 'MACIAS', '04145448669', 1),
(3, 'E-12348369', 'Michellin', 'calle  42', '02512344589', 1),
(4, 'J-17031998', 'Fernandez ', '60 con 13', '025144778869', 1),
(6, 'J-30868368', 'Kiara', 'SantaIsabel', '02517786942', 1),
(7, 'J-78455133', 'La Ingra', 'El araguaney', '04148756312', 1),
(8, 'V-26561633', 'Las Shakiras', 'barrio Union', '04145448669', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id_tipos` int(11) NOT NULL,
  `nombre_tipo` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `tiempo` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id_tipos`, `nombre_tipo`, `descripcion`, `tiempo`, `status`) VALUES
(2, 'Cambio de aceite', 'renovacion ', '1', 1),
(5, 'Cauchos', 'Revision completa', '3', 0),
(3, 'Chequeo', 'Se revisaron los cauchos', '3', 1),
(4, 'Frenos', 'Cambio de liga de freno', '1', 0),
(1, 'Preventivo', 'Revision completa', '2', 0),
(6, 'Prueba', 'Revision completa', '3', 0);

--
-- Disparadores `tipos`
--
DELIMITER $$
CREATE TRIGGER `after_tipos_update` BEFORE UPDATE ON `tipos` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.nombre_tipo,'Tipos', 'Se Modifico un campo de la tabla')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_tipos_insertar` AFTER INSERT ON `tipos` FOR EACH ROW INSERT INTO bitacora (host, usuario, cedula, fecha, hora, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NEW.nombre_tipo, NOW(), NOW(),'Tipos', 'Se registro un dato en la tabla tipos ')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tipos_delete` AFTER DELETE ON `tipos` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.nombre_tipo,'Tipo', 'Se elimino un registro de tipos de mantenimiento')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `cedula` varchar(100) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(15) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(20) COLLATE utf8_bin NOT NULL,
  `contrasena` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `rol` varchar(20) COLLATE utf8_bin NOT NULL,
  `status` int(11) DEFAULT NULL,
  `correo` varchar(30) COLLATE utf8_bin NOT NULL,
  `fechaRecuperacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `cedula`, `usuario`, `nombre`, `apellido`, `contrasena`, `rol`, `status`, `correo`, `fechaRecuperacion`) VALUES
(7, '0101', 'admin', 'admin', 'admin', '%$%$%%$%$$%$%%$%%%$/%%$$$$%$%%$$%$$$%%$%', 'Administrador', 0, '', '2022-05-02 14:59:45'),
(8, '26577823', 'jesus', 'jesus', 'jesus', '$%%$%%%$%$%$%%%$$%%/%%$%$%$$%%$$%$%$%%%$', 'Administrador', 1, '', '2022-04-17 19:03:02'),
(9, '365874', 'usuario', 'usuario', 'usuario', '$$%$%%%$$%$$%%$%$$%$%%%$$$$/%%%$%$%$%%%$$%%$%%%$%$%$%%$$', 'UsuarioEstandar', 1, '', '2022-04-17 19:04:00'),
(10, '10847107', 'usuariog', 'usuario', 'usuario', '$%%$$%%$$%%$%$$/%%$$$%$$%%$$%$$', 'UsuarioEstandar', 0, '', '2022-05-01 21:25:41'),
(11, '95589666', 'Moises_daza_20', 'Oriana', 'ArmasP', '1234', 'Administrador', 1, '', '2022-04-17 19:04:07'),
(12, '9558962', 'root', 'Oriana', 'Armas', '1234', 'Root', 0, '', '2022-04-13 01:19:12'),
(14, '30868382', 'eliasa', 'Elias', 'Armas', '', 'UsuarioEstandar', 0, '', '2022-04-24 14:18:09'),
(15, '26561633', 'eliasA', 'Elias', 'Banderas', '1234', 'Administrador', 0, '', '2022-05-05 22:39:10'),
(16, 'PRUEBA', 'PRUEBA', 'PRUEBA', 'PRUEBA', '', 'Administrador', 1, '', '2022-04-17 19:02:31'),
(17, 'HHHH', 'rootHH', 'AntonioIH', 'HH', '1', 'Root', 0, '', '2022-04-14 01:59:37'),
(18, '265616331', 'root', 'Oriana', 'Armas', '1234', 'Administrador', 1, '', '2022-04-18 19:55:48'),
(19, '26561631', 'usuario', 'Ramirez', 'Armas', '0000', 'Root', 1, '', '2022-05-02 14:22:11'),
(20, '955896661', 'samu', 'Rafael', 'Saml', '1234', 'Administrador', 1, '', '2022-05-02 14:09:45'),
(21, '28946711', 'manuelita', 'Manuelita', 'Saenz', '1234', 'Administrador', 1, '', '2022-05-05 15:46:38'),
(22, '955896667777', 'hhhh', 'Oneida', 'Banderas', '', 'Root', 1, 'armasoriana98@gmail.comddd', '2022-05-05 21:47:16'),
(23, '3333385', 'hhhh', 'Pueblo', 'Nuevo', '1234', 'Administrador', 1, 'armasoriana98@gmail.com', '2022-05-05 21:48:59');

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `after_usuarios_update` BEFORE UPDATE ON `usuarios` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.cedula,'Usuario', 'Se Modifico un campo de esta tabla')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bitacora_usuario_insertar` AFTER INSERT ON `usuarios` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),NEW.cedula,'Usuario', 'Se inserto un nuevo usuario')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `usuarios_delete` AFTER DELETE ON `usuarios` FOR EACH ROW INSERT INTO bitacora (host,usuario, fecha, hora, cedula, tabla, operacion) VALUES (substring(USER(), (INSTR (USER(), '@')+1)),CURRENT_USER, NOW(), NOW(),OLD.cedula,'Usuario', 'Se elimino un usuario')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id_vehiculo` int(11) NOT NULL,
  `placa` varchar(100) COLLATE utf8_bin NOT NULL,
  `modelo` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `funcionamiento` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `nombre_tipo` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `id_mantenimiento` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehiculo`, `placa`, `modelo`, `funcionamiento`, `nombre_tipo`, `id_mantenimiento`, `status`) VALUES
(1, 'OGA1703', 'Encava', 'Operativo', NULL, NULL, 0),
(6, 'EAP685', 'Dodge', 'Operativo', NULL, NULL, 0),
(7, 'KVT47V', 'BEDFORD', 'Operativo', NULL, NULL, 0),
(8, '898PAJ4', 'Dodge', 'Operativo', NULL, NULL, 1),
(9, 'VAS654', 'Caio', 'Inoperante', NULL, NULL, 0),
(10, 'KOWP145', 'Encava', 'Operativo', NULL, NULL, 1),
(11, 'YYLA891', 'Kia', 'Operativo', NULL, NULL, 0),
(12, 'GAP173', 'BEDFORD', 'Operativo', NULL, NULL, 1),
(13, 'ORIANA123', 'Encava', '1', NULL, NULL, 0),
(14, 'SANTI03', 'Encava', 'Operativo', NULL, NULL, 1),
(15, 'ROA126', 'BEDFORD', 'Operativo', NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_bitacora`);

--
-- Indices de la tabla `choferes`
--
ALTER TABLE `choferes`
  ADD PRIMARY KEY (`id_choferes`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD UNIQUE KEY `placa` (`placa`);

--
-- Indices de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD PRIMARY KEY (`id_mantenimiento`),
  ADD KEY `fk_nombre_tipo` (`nombre_tipo`),
  ADD KEY `fk1_nombre` (`nombre`),
  ADD KEY `placa` (`placa`);

--
-- Indices de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD PRIMARY KEY (`id_reparaciones`),
  ADD KEY `fk_nombre` (`nombre`),
  ADD KEY `placa` (`placa`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`nombre_rol`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`nombre_ruta`),
  ADD KEY `placa` (`placa`);

--
-- Indices de la tabla `taller`
--
ALTER TABLE `taller`
  ADD PRIMARY KEY (`id_taller`),
  ADD UNIQUE KEY `rif` (`rif`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`nombre_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD KEY `fk_rol` (`rol`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id_vehiculo`),
  ADD UNIQUE KEY `placa` (`placa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;

--
-- AUTO_INCREMENT de la tabla `choferes`
--
ALTER TABLE `choferes`
  MODIFY `id_choferes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  MODIFY `id_mantenimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  MODIFY `id_reparaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `choferes`
--
ALTER TABLE `choferes`
  ADD CONSTRAINT `fk_placa` FOREIGN KEY (`placa`) REFERENCES `vehiculos` (`placa`);

--
-- Filtros para la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD CONSTRAINT `fk1_nombre` FOREIGN KEY (`nombre`) REFERENCES `taller` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nombre_tipo` FOREIGN KEY (`nombre_tipo`) REFERENCES `tipos` (`nombre_tipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mantenimientos_ibfk_1` FOREIGN KEY (`placa`) REFERENCES `vehiculos` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD CONSTRAINT `fk_nombre` FOREIGN KEY (`nombre`) REFERENCES `taller` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reparaciones_ibfk_1` FOREIGN KEY (`placa`) REFERENCES `vehiculos` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD CONSTRAINT `rutas_ibfk_1` FOREIGN KEY (`placa`) REFERENCES `vehiculos` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_rol` FOREIGN KEY (`rol`) REFERENCES `roles` (`nombre_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
