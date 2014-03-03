-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2014 a las 19:37:23
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartera_clientes`
--

CREATE TABLE IF NOT EXISTS `cartera_clientes` (
  `idCartera_Clientes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_swedish_ci NOT NULL,
  `rut` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `direccion` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `contacto` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `observaciones` text COLLATE utf8_swedish_ci,
  `fecha_ingreso` datetime NOT NULL,
  PRIMARY KEY (`idCartera_Clientes`),
  UNIQUE KEY `rut_UNIQUE` (`rut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartera_proveedores`
--

CREATE TABLE IF NOT EXISTS `cartera_proveedores` (
  `idCartera_Proveedores` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_swedish_ci NOT NULL,
  `contacto` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `factura` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`idCartera_Proveedores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `lista_vendedores`
--
CREATE TABLE IF NOT EXISTS `lista_vendedores` (
`idVendedores` int(10) unsigned
,`nombre` varchar(60)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `codigo` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `valor_neto` int(10) unsigned NOT NULL,
  `descripcion` text COLLATE utf8_swedish_ci,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_ofrecidos`
--

CREATE TABLE IF NOT EXISTS `productos_ofrecidos` (
  `Cartera_Clientes_idCartera_Clientes` int(10) unsigned NOT NULL,
  `Productos_idProducto` int(10) unsigned NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`Cartera_Clientes_idCartera_Clientes`,`Productos_idProducto`),
  KEY `fk_Cartera_Clientes_has_Productos_Productos1_idx` (`Productos_idProducto`),
  KEY `fk_Cartera_Clientes_has_Productos_Cartera_Clientes1_idx` (`Cartera_Clientes_idCartera_Clientes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_proveedores`
--

CREATE TABLE IF NOT EXISTS `productos_proveedores` (
  `Cartera_Proveedores_idCartera_Proveedores` int(11) unsigned NOT NULL,
  `Productos_idProductos` int(11) unsigned NOT NULL,
  `valor` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`Cartera_Proveedores_idCartera_Proveedores`,`Productos_idProductos`),
  KEY `Productos_idProductos` (`Productos_idProductos`),
  KEY `Cartera_Proveedores_idCartera_Proveedores` (`Cartera_Proveedores_idCartera_Proveedores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_contactos_diarios`
--

CREATE TABLE IF NOT EXISTS `registros_contactos_diarios` (
  `idRegistros_Contactos_Diarios` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Vendedores_idVendedores` int(10) unsigned NOT NULL,
  `nombre` varchar(60) COLLATE utf8_swedish_ci NOT NULL,
  `rut` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `direccion` text COLLATE utf8_swedish_ci NOT NULL,
  `contacto` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `factura` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `fecha_ingreso` datetime NOT NULL,
  PRIMARY KEY (`idRegistros_Contactos_Diarios`),
  UNIQUE KEY `rut_UNIQUE` (`rut`),
  KEY `Vendedores_idVendedores` (`Vendedores_idVendedores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `idStock` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `Producto_idProducto` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idStock`),
  KEY `Producto_idProducto` (`Producto_idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `paterno` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `materno` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `role` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `created`, `modified`, `password`, `paterno`, `materno`, `role`) VALUES
(30, 'Ruben Eduardo', 'ripazha', 'rbntejeda@gmail.com', '2014-01-28 20:33:02', '2014-01-28 20:33:02', '5680c801e5c392cfb13992082a1412e1', 'Tejeda', 'Roa', 'admin'),
(32, 'Ismael Bernardo', 'isma7', 'ismaeltejedag@gmail.com', '2014-01-30 18:29:29', '2014-01-30 18:29:29', 'b51a3f14bdf29a854a17bd9a1431c7e9', 'Tejeda', 'Gonzalez', 'admin'),
(33, 'Margarita', 'root', 'margarita.roa0@askdfm', '2014-02-11 07:23:38', '2014-02-11 07:23:38', 'e10adc3949ba59abbe56e057f20f883e', 'Roa', 'Alvear', 'admin'),
(34, 'Dagoberto Ruben', 'dtg', 'dtejeda@salfacorp.com', '2014-02-16 02:25:14', '2014-02-16 02:25:14', '1da33616e19f532fca9bf8e3c095d11d', 'Tejeda ', 'Gonzalez', 'admin'),
(35, 'Cristian', 'cbravoc', 'cbravoc@udec.cl', '2014-02-16 18:35:36', '2014-02-16 18:35:36', 'bd093507825f3edad0327f74e07e86c4', 'Bravo', 'Casas', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE IF NOT EXISTS `vendedores` (
  `idVendedores` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_swedish_ci NOT NULL,
  `rut` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `correo` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `fecha_termino` datetime DEFAULT NULL,
  `trabajando` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `modificado` datetime NOT NULL,
  `comision` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `rutas` text COLLATE utf8_swedish_ci,
  PRIMARY KEY (`idVendedores`),
  UNIQUE KEY `rut_UNIQUE` (`rut`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`idVendedores`, `nombre`, `rut`, `correo`, `telefono`, `fecha_ingreso`, `fecha_termino`, `trabajando`, `modificado`, `comision`, `rutas`) VALUES
(1, 'Ruben Eduardo Tejeda Roa', '18108559-2', 'rbnestacontigo_182@hotmail.com', '91223304', '2014-02-01 00:00:00', NULL, 'SI', '2014-02-24 20:34:01', NULL, NULL),
(2, 'Ismael Bernardo', '14547859-6', 'asd@s.hoas', '9135498', '2014-02-24 00:00:00', NULL, 'SI', '2014-02-24 20:38:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_tienda`
--

CREATE TABLE IF NOT EXISTS `venta_tienda` (
  `idVenta_Tienda` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Productos_idProducto` int(11) unsigned NOT NULL,
  `fecha_venta` datetime NOT NULL,
  `forma_de_pago` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `monto` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`idVenta_Tienda`),
  KEY `Productos_idProducto` (`Productos_idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_vendedores`
--

CREATE TABLE IF NOT EXISTS `venta_vendedores` (
  `Producto_idProducto` int(10) unsigned NOT NULL,
  `Vendedores_idVendedores` int(10) unsigned NOT NULL,
  `Cartera_Clientes_idCartera_Clientes` int(10) unsigned DEFAULT NULL,
  `fecha_venta` datetime NOT NULL,
  `forma_de_pago` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `monto_pago` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `descuento` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`Producto_idProducto`,`Vendedores_idVendedores`),
  KEY `fk_Producto_has_Vendedores_Vendedores1_idx` (`Vendedores_idVendedores`),
  KEY `fk_Producto_has_Vendedores_Producto1_idx` (`Producto_idProducto`),
  KEY `fk_Venta_Vendedores_Cartera_Clientes1_idx` (`Cartera_Clientes_idCartera_Clientes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura para la vista `lista_vendedores`
--
DROP TABLE IF EXISTS `lista_vendedores`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lista_vendedores` AS select `vendedores`.`idVendedores` AS `idVendedores`,`vendedores`.`nombre` AS `nombre` from `vendedores` where (`vendedores`.`trabajando` like 'SI');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos_ofrecidos`
--
ALTER TABLE `productos_ofrecidos`
  ADD CONSTRAINT `productos_ofrecidos_ibfk_1` FOREIGN KEY (`Cartera_Clientes_idCartera_Clientes`) REFERENCES `cartera_clientes` (`idCartera_Clientes`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ofrecidos_ibfk_2` FOREIGN KEY (`Productos_idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos_proveedores`
--
ALTER TABLE `productos_proveedores`
  ADD CONSTRAINT `productos_proveedores_ibfk_1` FOREIGN KEY (`Cartera_Proveedores_idCartera_Proveedores`) REFERENCES `cartera_proveedores` (`idCartera_Proveedores`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_proveedores_ibfk_2` FOREIGN KEY (`Productos_idProductos`) REFERENCES `productos` (`idProducto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `registros_contactos_diarios`
--
ALTER TABLE `registros_contactos_diarios`
  ADD CONSTRAINT `registros_contactos_diarios_ibfk_1` FOREIGN KEY (`Vendedores_idVendedores`) REFERENCES `vendedores` (`idVendedores`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`Producto_idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta_tienda`
--
ALTER TABLE `venta_tienda`
  ADD CONSTRAINT `venta_tienda_ibfk_1` FOREIGN KEY (`Productos_idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta_vendedores`
--
ALTER TABLE `venta_vendedores`
  ADD CONSTRAINT `venta_vendedores_ibfk_1` FOREIGN KEY (`Producto_idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_vendedores_ibfk_2` FOREIGN KEY (`Vendedores_idVendedores`) REFERENCES `vendedores` (`idVendedores`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_vendedores_ibfk_3` FOREIGN KEY (`Cartera_Clientes_idCartera_Clientes`) REFERENCES `cartera_clientes` (`idCartera_Clientes`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
