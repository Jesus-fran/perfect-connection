-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.17-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para rswisp
CREATE DATABASE IF NOT EXISTS `rswisp` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `rswisp`;

-- Volcando estructura para tabla rswisp.antena
CREATE TABLE IF NOT EXISTS `antena` (
  `idantena` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `ssid` varchar(50) DEFAULT NULL,
  `pwd_red` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `pwd_acceso` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `precio_ini` decimal(20,6) DEFAULT NULL,
  `capacidad_user` varchar(50) DEFAULT NULL,
  `grados` varchar(50) DEFAULT NULL,
  `idsector` int(11) DEFAULT NULL,
  `modo` varchar(50) DEFAULT NULL,
  `estatus` int(11) DEFAULT 1,
  `fecha_compra` date DEFAULT NULL,
  `mod_operacion` varchar(50) DEFAULT NULL,
  `est_antena` int(11) DEFAULT 1,
  PRIMARY KEY (`idantena`),
  KEY `FK_antena_sector` (`idsector`),
  CONSTRAINT `FK_antena_sector` FOREIGN KEY (`idsector`) REFERENCES `sector` (`idsector`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rswisp.antena: ~1 rows (aproximadamente)
INSERT INTO `antena` (`idantena`, `nombre`, `ssid`, `pwd_red`, `usuario`, `pwd_acceso`, `ip`, `marca`, `tipo`, `descripcion`, `precio_ini`, `capacidad_user`, `grados`, `idsector`, `modo`, `estatus`, `fecha_compra`, `mod_operacion`, `est_antena`) VALUES
	(23, 'No se', 'INFINITUM0A4A_2.4', 'asdad', '07dcc1842i', '12', '192.168.1.2', 'asd', 'Sectorial', 'asd', 123.000000, '123', '123', 8, 'AP', 1, '2023-01-12', 'PTM', 0),
	(24, 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'selected', 'j', 0.000000, '', 'j', 13, 'selected', 1, '0000-00-00', 'selected', 1),
	(29, 'kk', 'TECNOLOGIA_JC', 'k', 'k', 'k', 'k', 'k', 'selected', 'k', 0.000000, '1', 'kk', 8, 'AP', 1, '2023-03-19', 'PTMP', 1);

-- Volcando estructura para tabla rswisp.bitacora
CREATE TABLE IF NOT EXISTS `bitacora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) DEFAULT NULL,
  `accion` varchar(50) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idusuario` (`idusuario`),
  CONSTRAINT `FK_bitacora_empleado` FOREIGN KEY (`idusuario`) REFERENCES `empleado` (`idempleado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rswisp.bitacora: ~0 rows (aproximadamente)
INSERT INTO `bitacora` (`id`, `idusuario`, `accion`, `fecha`) VALUES
	(64, 8, 'Agrego nueva zona', '2023-03-19 18:08:15'),
	(65, 8, 'Agrego un nuevo sector', '2023-03-19 18:09:11'),
	(66, 8, 'Agrego una nueva AP', '2023-03-19 18:10:19'),
	(67, 8, 'Agrego una nueva RouterBoard', '2023-03-19 18:10:37'),
	(68, 8, 'Agrego nuevo insumo', '2023-03-19 18:10:47'),
	(69, 8, 'Agregó nuevo servicio', '2023-03-19 18:10:55'),
	(70, 8, 'Agrego nuevo empleado', '2023-03-19 18:44:50'),
	(71, 8, 'Agrego nuevo Producto', '2023-03-19 18:45:15'),
	(72, 8, 'Agrego nuevo Prospecto', '2023-03-19 18:45:42'),
	(73, 8, 'Agrego un nuevo cliente', '2023-03-19 18:45:51');

-- Volcando estructura para tabla rswisp.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `app` varchar(50) DEFAULT NULL,
  `apm` varchar(50) DEFAULT NULL,
  `telefono1` varchar(50) DEFAULT NULL,
  `telefono2` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `referencias` varchar(50) DEFAULT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `requerimientos` varchar(50) DEFAULT NULL,
  `coordenadas` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rswisp.cliente: ~1 rows (aproximadamente)
INSERT INTO `cliente` (`idcliente`, `nombre`, `app`, `apm`, `telefono1`, `telefono2`, `direccion`, `referencias`, `fecha_solicitud`, `requerimientos`, `coordenadas`, `email`) VALUES
	(17, 'jesus', 'garcia', 'caballero', '2147483647', '2147483647', 'nose', 'nose', '2022-05-25', '', 'nose', 'jesus@email.com'),
	(26, 'k', 'k', 'k', '0', '0', 'k', 'k', '0000-00-00', 'k', '', '');

-- Volcando estructura para tabla rswisp.contrato
CREATE TABLE IF NOT EXISTS `contrato` (
  `idcontrato` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) DEFAULT NULL,
  `idzona` int(11) DEFAULT NULL,
  `idsector` int(11) DEFAULT NULL,
  `idantena` int(11) DEFAULT NULL,
  `idmikrotik` int(11) DEFAULT NULL,
  `idservicio` int(11) DEFAULT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `fecha_contrato` date DEFAULT NULL,
  `fecha_corte` varchar(50) DEFAULT NULL,
  `p_mensualidad` date DEFAULT NULL,
  `metodopago` varchar(50) DEFAULT NULL,
  `costocontrato` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idcontrato`),
  KEY `FK_contrato_cliente` (`idcliente`),
  KEY `FK_contrato_zona` (`idzona`),
  KEY `FK_contrato_sector` (`idsector`),
  KEY `FK_contrato_antena` (`idantena`),
  KEY `FK_contrato_mikrotik` (`idmikrotik`),
  KEY `FK_contrato_servicio` (`idservicio`),
  KEY `FK_contrato_producto` (`idproducto`),
  CONSTRAINT `FK_contrato_antena` FOREIGN KEY (`idantena`) REFERENCES `antena` (`idantena`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_contrato_cliente` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_contrato_mikrotik` FOREIGN KEY (`idmikrotik`) REFERENCES `mikrotik` (`idmikrotik`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_contrato_producto` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_contrato_sector` FOREIGN KEY (`idsector`) REFERENCES `sector` (`idsector`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_contrato_servicio` FOREIGN KEY (`idservicio`) REFERENCES `servicio` (`idservicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_contrato_zona` FOREIGN KEY (`idzona`) REFERENCES `zona` (`id_zona`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rswisp.contrato: ~0 rows (aproximadamente)

-- Volcando estructura para tabla rswisp.empleado
CREATE TABLE IF NOT EXISTS `empleado` (
  `idempleado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `app` varchar(50) DEFAULT NULL,
  `apm` varchar(50) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `estatus` double DEFAULT 1,
  `sueldo` int(11) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idempleado`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rswisp.empleado: ~2 rows (aproximadamente)
INSERT INTO `empleado` (`idempleado`, `nombre`, `app`, `apm`, `telefono`, `email`, `rol`, `tipo`, `estatus`, `sueldo`, `fecha_ingreso`, `foto`, `password`) VALUES
	(8, 'business', 'a', 'aa', 0, 'admin@admin', 'el jefe', 'a', 0, 2, '2023-01-01', '8.jpeg', 'admin'),
	(19, 'k', 'k', 'k', 0, '', 'k', 'k', 1, 0, '0000-00-00', NULL, 'k'),
	(20, 'K', 'K', 'K', 0, 'K', 'K', 'K', 1, 0, '0000-00-00', NULL, 'K'),
	(21, 'k', 'k', 'k', 0, 'k', 'k', 'k', 1, 0, '0000-00-00', NULL, 'k'),
	(22, 'k', 'k', 'k', 0, 'k', 'k', '', 1, 0, '0000-00-00', NULL, 'k'),
	(23, 'k', 'k', 'k', 0, '', 'k', 'k', 1, 0, '0000-00-00', NULL, 'k'),
	(24, 'k', 'k', 'k', 0, 'k', 'k', 'k', 0, 0, '0000-00-00', NULL, 'kkjjkjhjhjj'),
	(25, 'k', 'k', 'k', 0, 'k', 'k', 'k', 0, 0, '0000-00-00', NULL, 'kk'),
	(26, 'k', 'k', 'k', 0, 'k', 'k', 'k', 0, 0, '0000-00-00', NULL, 'kk'),
	(27, 'jk', 'jk', 'jk', 0, 'jk', 'jk', 'jk', 0, 0, '0000-00-00', NULL, 'jkjkj');

-- Volcando estructura para tabla rswisp.insumo_sector
CREATE TABLE IF NOT EXISTS `insumo_sector` (
  `idinsumo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `caracteristicas` varchar(50) DEFAULT NULL,
  `estatus` int(11) DEFAULT 1,
  `descripcion` varchar(50) DEFAULT NULL,
  `idsector` int(11) DEFAULT NULL,
  `fecha_compra` date DEFAULT NULL,
  PRIMARY KEY (`idinsumo`),
  KEY `idsector` (`idsector`),
  CONSTRAINT `FK_insumo_sector_sector` FOREIGN KEY (`idsector`) REFERENCES `sector` (`idsector`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rswisp.insumo_sector: ~3 rows (aproximadamente)
INSERT INTO `insumo_sector` (`idinsumo`, `nombre`, `marca`, `tipo`, `precio`, `caracteristicas`, `estatus`, `descripcion`, `idsector`, `fecha_compra`) VALUES
	(5, 'jk', 'jjk', 'jkj', 0, 'jkjk', 1, 'kjjk', 8, '2023-03-18'),
	(6, 'j', 'j', 'j', 0, 'j', 1, 'j', 13, '0000-00-00'),
	(7, 'k', 'k', 'k', 0, '', 1, 'k', 17, '0000-00-00');

-- Volcando estructura para tabla rswisp.mikrotik
CREATE TABLE IF NOT EXISTS `mikrotik` (
  `idmikrotik` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(50) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `capacidad_user` int(11) DEFAULT NULL,
  `user_admin` varchar(50) DEFAULT NULL,
  `pwd_admin` varchar(50) DEFAULT NULL,
  `ip_wan` varchar(50) DEFAULT NULL,
  `ip_lan` varchar(50) DEFAULT NULL,
  `idsector` int(11) DEFAULT NULL,
  `estatus` int(11) DEFAULT 1,
  `fecha_compra` date DEFAULT NULL,
  PRIMARY KEY (`idmikrotik`),
  KEY `FK_mikrotik_sector` (`idsector`),
  CONSTRAINT `FK_mikrotik_sector` FOREIGN KEY (`idsector`) REFERENCES `sector` (`idsector`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rswisp.mikrotik: ~1 rows (aproximadamente)
INSERT INTO `mikrotik` (`idmikrotik`, `modelo`, `precio`, `capacidad_user`, `user_admin`, `pwd_admin`, `ip_wan`, `ip_lan`, `idsector`, `estatus`, `fecha_compra`) VALUES
	(14, '123', 23, 123, '123', '123123', '123123', '123123', 8, 1, '2023-01-11'),
	(18, 'k', 1, 1, 'k', 'k', 'k', 'k', 17, 1, '2023-03-19');

-- Volcando estructura para tabla rswisp.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `idproducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `caracteristicas` varchar(50) DEFAULT NULL,
  `estatus` int(11) DEFAULT 1,
  `idservicio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `FK_producto_servicio` (`idservicio`),
  CONSTRAINT `FK_producto_servicio` FOREIGN KEY (`idservicio`) REFERENCES `servicio` (`idservicio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rswisp.producto: ~1 rows (aproximadamente)
INSERT INTO `producto` (`idproducto`, `nombre`, `precio`, `descripcion`, `caracteristicas`, `estatus`, `idservicio`) VALUES
	(7, 'd', 250, 'd', 'd', 1, 3),
	(28, 'jk', 0, 'jk', 'jk', 1, 14);

-- Volcando estructura para tabla rswisp.prospecto
CREATE TABLE IF NOT EXISTS `prospecto` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `app` varchar(50) DEFAULT NULL,
  `apm` varchar(50) DEFAULT NULL,
  `telefono1` int(10) DEFAULT NULL,
  `telefono2` int(10) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `referencias` varchar(50) DEFAULT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `requerimientos` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rswisp.prospecto: ~0 rows (aproximadamente)
INSERT INTO `prospecto` (`idcliente`, `nombre`, `app`, `apm`, `telefono1`, `telefono2`, `direccion`, `referencias`, `fecha_solicitud`, `requerimientos`) VALUES
	(20, '', '', '', 0, 0, '', '', '0000-00-00', ''),
	(21, 'jk', 'jk', 'j', 0, 0, 'jk', 'kj', '0000-00-00', 'jk');

-- Volcando estructura para tabla rswisp.sector
CREATE TABLE IF NOT EXISTS `sector` (
  `idsector` int(11) NOT NULL AUTO_INCREMENT,
  `sector` varchar(50) DEFAULT NULL,
  `altura` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `costo_inicial` int(11) DEFAULT NULL,
  `contacto` varchar(50) DEFAULT NULL,
  `estatus` int(11) DEFAULT 1,
  `idzona` int(11) DEFAULT NULL,
  `tel_contacto` varchar(50) DEFAULT NULL,
  `est_sector` int(11) DEFAULT NULL,
  PRIMARY KEY (`idsector`),
  KEY `FK_sector_zona` (`idzona`),
  CONSTRAINT `FK_sector_zona` FOREIGN KEY (`idzona`) REFERENCES `zona` (`id_zona`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rswisp.sector: ~1 rows (aproximadamente)
INSERT INTO `sector` (`idsector`, `sector`, `altura`, `tipo`, `costo_inicial`, `contacto`, `estatus`, `idzona`, `tel_contacto`, `est_sector`) VALUES
	(8, '123', '123', 'Escalable', 123, '1231', 1, 22, '123', 1),
	(13, 'j', 'j', 'Antena', 1, 'j', 1, 62, 'j', 1),
	(17, 'k', 'k', 'Antena', 1, 'k', 1, 63, 'k', 1);

-- Volcando estructura para tabla rswisp.servicio
CREATE TABLE IF NOT EXISTS `servicio` (
  `idservicio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `estatus` int(11) DEFAULT 1,
  PRIMARY KEY (`idservicio`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rswisp.servicio: ~3 rows (aproximadamente)
INSERT INTO `servicio` (`idservicio`, `nombre`, `descripcion`, `estatus`) VALUES
	(3, 's', 's', 0),
	(14, 'j', 'j', 1),
	(15, 'k', 'k', 0);

-- Volcando estructura para tabla rswisp.update_antena
CREATE TABLE IF NOT EXISTS `update_antena` (
  `potencia` varchar(50) DEFAULT NULL,
  `frecuencia` varchar(50) DEFAULT NULL,
  `tx_rx` varchar(50) DEFAULT NULL,
  `idantena` int(11) DEFAULT NULL,
  KEY `FK_update_antena_antena` (`idantena`),
  CONSTRAINT `FK_update_antena_antena` FOREIGN KEY (`idantena`) REFERENCES `antena` (`idantena`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rswisp.update_antena: ~2 rows (aproximadamente)
INSERT INTO `update_antena` (`potencia`, `frecuencia`, `tx_rx`, `idantena`) VALUES
	('123123', '123', '123123', 23),
	('123', '123345345', '12123', 23);

-- Volcando estructura para tabla rswisp.update_firmware
CREATE TABLE IF NOT EXISTS `update_firmware` (
  `firmware` varchar(50) DEFAULT NULL,
  `idempleado` int(11) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `idantena` int(11) DEFAULT NULL,
  KEY `FK_update_firmware_empleado` (`idempleado`),
  KEY `FK_update_firmware_antena` (`idantena`),
  CONSTRAINT `FK_update_firmware_antena` FOREIGN KEY (`idantena`) REFERENCES `antena` (`idantena`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_update_firmware_empleado` FOREIGN KEY (`idempleado`) REFERENCES `empleado` (`idempleado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rswisp.update_firmware: ~2 rows (aproximadamente)
INSERT INTO `update_firmware` (`firmware`, `idempleado`, `descripcion`, `idantena`) VALUES
	('asdasd', 8, '123123132', 23),
	('123123', 8, '12313123', 23);

-- Volcando estructura para tabla rswisp.update_mk
CREATE TABLE IF NOT EXISTS `update_mk` (
  `version` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `cpu` varchar(50) DEFAULT NULL,
  `ram` varchar(50) DEFAULT NULL,
  `idmikrotik` int(11) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  KEY `FK_update_mk_mikrotik` (`idmikrotik`),
  CONSTRAINT `FK_update_mk_mikrotik` FOREIGN KEY (`idmikrotik`) REFERENCES `mikrotik` (`idmikrotik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rswisp.update_mk: ~0 rows (aproximadamente)

-- Volcando estructura para tabla rswisp.zona
CREATE TABLE IF NOT EXISTS `zona` (
  `id_zona` int(11) NOT NULL AUTO_INCREMENT,
  `zona` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `codigo_zona` varchar(50) DEFAULT NULL,
  `estatus` int(11) DEFAULT 1,
  PRIMARY KEY (`id_zona`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rswisp.zona: ~1 rows (aproximadamente)
INSERT INTO `zona` (`id_zona`, `zona`, `descripcion`, `codigo_zona`, `estatus`) VALUES
	(22, 'papu', 'xd', NULL, 0),
	(62, 'j', 'j', 'j', 1),
	(63, 'k', 'k', 'k', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
