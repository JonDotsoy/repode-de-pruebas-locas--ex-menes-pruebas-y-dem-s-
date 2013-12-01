CREATE DATABASE IF NOT EXISTS bdtutorial;
USE bdtutorial;

--
-- Creando la tabla `detalleventa`
--

DROP TABLE IF EXISTS `detalleventa`;
CREATE TABLE `detalleventa` (
  `codigoVenta` int(11) NOT NULL,
  `codigoProducto` int(11) NOT NULL,
  `cantidad` decimal(18,2) NOT NULL,
  `descuento` decimal(18,2) NOT NULL,
  PRIMARY KEY  (`codigoVenta`,`codigoProducto`),
  KEY `FK_DetalleVenta_Producto` (`codigoProducto`),
  CONSTRAINT `FK_DetalleVenta_Producto` FOREIGN KEY (`codigoProducto`) REFERENCES `producto` (`codigoProducto`),
  CONSTRAINT `FK_DetalleVenta_Venta` FOREIGN KEY (`codigoVenta`) REFERENCES `venta` (`codigoVenta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Creando la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `codigoProducto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(18,2) NOT NULL,
  PRIMARY KEY  (`codigoProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Creando la tabla venta
--

DROP TABLE IF EXISTS `venta`;
CREATE TABLE `venta` (
  `codigoVenta` int(11) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY  (`codigoVenta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
