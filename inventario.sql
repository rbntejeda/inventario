-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-03-2014 a las 00:55:13
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
  `contacto` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `factura` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `observaciones` text COLLATE utf8_swedish_ci,
  PRIMARY KEY (`idCartera_Clientes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartera_proveedores`
--

CREATE TABLE IF NOT EXISTS `cartera_proveedores` (
  `idCartera_Proveedores` int(11) unsigned NOT NULL AUTO_INCREMENT,
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
`idVendedores` int(11) unsigned
,`nombre` varchar(60)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `codigo` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `valor_neto` int(10) unsigned NOT NULL,
  `descripcion` text COLLATE utf8_swedish_ci,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `codigo`, `valor_neto`, `descripcion`) VALUES
(1, 'GOMA APLEX', 'A04', 500, 'Es una goma especial para borrar Azul'),
(2, 'Sacarina Natura List Stevia', 'B64', 700, 'Endulzante Natural'),
(3, 'Pantalon Cuero ', 'A25', 900, '.'),
(4, 'Mouse Micrososft A2', 'F24', 26000, 'Es una MOuseespecial para borrar Azul'),
(5, 'Celular LG P550', 'E53', 66000, 'Celular');

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
  `Cartera_Proveedores_idCartera_Proveedores` int(11) NOT NULL,
  `Productos_idProducto` int(11) NOT NULL,
  PRIMARY KEY (`Cartera_Proveedores_idCartera_Proveedores`,`Productos_idProducto`),
  KEY `fk_Cartera_Proveedores_has_Productos_Productos1_idx` (`Productos_idProducto`),
  KEY `fk_Cartera_Proveedores_has_Productos_Cartera_Proveedores1_idx` (`Cartera_Proveedores_idCartera_Proveedores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_contactos_diarios`
--

CREATE TABLE IF NOT EXISTS `registros_contactos_diarios` (
  `idRegistros_Contactos_Diarios` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Vendedores_idVendedores` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_swedish_ci NOT NULL,
  `rut` varchar(11) COLLATE utf8_swedish_ci NOT NULL,
  `direccion` text COLLATE utf8_swedish_ci NOT NULL,
  `contacto` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `factura` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `fecha_ingreso` date NOT NULL,
  PRIMARY KEY (`idRegistros_Contactos_Diarios`),
  KEY `fk_Registros_Contactos_Diarios_Vendedores1_idx` (`Vendedores_idVendedores`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `registros_contactos_diarios`
--

INSERT INTO `registros_contactos_diarios` (`idRegistros_Contactos_Diarios`, `Vendedores_idVendedores`, `nombre`, `rut`, `direccion`, `contacto`, `correo`, `telefono`, `factura`, `fecha_ingreso`) VALUES
(3, 10, 'Ruben Eduardo Tejeda Roa', '18.108.559-', 'Calle seis,#2682 Floresta III, Hualpen', 'Ismael', 'rbnestacontigo_182@hotmail.com', '041-2984092', '456', '2014-02-28'),
(4, 1, 'qawsd', '1645546', 'asd', '', '', '', '', '2014-03-01'),
(5, 1, '0', '0', '0', '0', '0', '0', '0', '0000-00-00'),
(6, 13, 'jumbo', '81201000-k', 'asdfghj', 'Carlos', 'as@asd.asd', '5555555', '1654798654189', '2014-03-01');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `registros_stock`
--
CREATE TABLE IF NOT EXISTS `registros_stock` (
`cantidad` int(11)
,`codigo` varchar(45)
,`nombre` varchar(45)
,`fecha_ingreso` date
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `idStock` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) DEFAULT NULL,
  `fecha_ingreso` date NOT NULL,
  `Producto_idProducto` int(11) NOT NULL,
  PRIMARY KEY (`idStock`,`Producto_idProducto`),
  KEY `fk_Stock_Producto_idx` (`Producto_idProducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`idStock`, `cantidad`, `fecha_ingreso`, `Producto_idProducto`) VALUES
(1, -3, '2014-03-02', 1),
(2, 50, '2014-03-02', 2),
(3, 20, '2014-03-02', 1),
(4, 20, '2014-03-02', 1),
(6, 60, '2014-03-02', 3),
(7, 12, '2014-03-02', 1),
(8, 20, '2014-03-02', 4);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `stock_total`
--
CREATE TABLE IF NOT EXISTS `stock_total` (
`codigo` varchar(45)
,`nombre` varchar(45)
,`balance` decimal(32,0)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `paterno` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `materno` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `role` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `created`, `modified`, `password`, `paterno`, `materno`, `role`) VALUES
(30, 'Ruben Eduardo', 'ripazha', 'rbntejeda@gmail.com', '2014-01-28 23:33:02', '2014-01-28 23:33:02', '5680c801e5c392cfb13992082a1412e1', 'Tejeda', 'Roa', 'admin'),
(32, 'Ismael Bernardo', 'isma7', 'ismaeltejedag@gmail.com', '2014-01-30 21:29:29', '2014-01-30 21:29:29', 'b51a3f14bdf29a854a17bd9a1431c7e9', 'Tejeda', 'Gonzalez', 'admin'),
(33, 'Margarita', 'root', 'margarita.roa0@askdfm', '2014-02-11 10:23:38', '2014-02-11 10:23:38', 'e10adc3949ba59abbe56e057f20f883e', 'Roa', 'Alvear', 'admin'),
(34, 'Dagoberto Ruben', 'dtg', 'dtejeda@salfacorp.com', '2014-02-16 05:25:14', '2014-02-16 05:25:14', '1da33616e19f532fca9bf8e3c095d11d', 'Tejeda ', 'Gonzalez', 'admin'),
(35, 'Cristian', 'cbravoc', 'cbravoc@udec.cl', '2014-02-16 21:35:36', '2014-02-16 21:35:36', 'bd093507825f3edad0327f74e07e86c4', 'Bravo', 'Casas', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE IF NOT EXISTS `vendedores` (
  `idVendedores` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_swedish_ci NOT NULL,
  `rut` varchar(12) COLLATE utf8_swedish_ci NOT NULL,
  `correo` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_termino` datetime DEFAULT NULL,
  `trabajando` varchar(2) COLLATE utf8_swedish_ci NOT NULL,
  `modificado` datetime NOT NULL,
  PRIMARY KEY (`idVendedores`),
  UNIQUE KEY `rut_UNIQUE` (`rut`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`idVendedores`, `nombre`, `rut`, `correo`, `telefono`, `fecha_ingreso`, `fecha_termino`, `trabajando`, `modificado`) VALUES
(10, 'Ruben Eduardo Tejeda Roa', '18.108.559-2', 'rbnestacontigo_182@hotmail.com', '041-2984092', '2014-02-14', NULL, 'SI', '2014-02-16 00:19:18'),
(11, 'Ismael Bernardo|', '15584586-9', 'RubenTejedaRoa@gmail.com', '91324654987', '2014-03-01', NULL, 'SI', '2014-03-01 00:31:33'),
(13, 'Carolaine  Escarlette Saavedra Valenzuela', '18504953-1', 'carolain.saavedra@gmail.com', '97184393', '2014-03-01', NULL, 'SI', '2014-03-01 05:18:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_tienda`
--

CREATE TABLE IF NOT EXISTS `venta_tienda` (
  `idVenta_Tienda` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Productos_idProducto` int(11) NOT NULL,
  `fecha_venta` datetime NOT NULL,
  PRIMARY KEY (`idVenta_Tienda`,`Productos_idProducto`),
  KEY `fk_Venta_Tienda_Productos1_idx` (`Productos_idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_vendedores`
--

CREATE TABLE IF NOT EXISTS `venta_vendedores` (
  `Producto_idProducto` int(11) NOT NULL,
  `Vendedores_idVendedores` int(11) NOT NULL,
  `fecha_venta` datetime NOT NULL,
  `Cartera_Clientes_idCartera_Clientes` int(10) unsigned NOT NULL,
  PRIMARY KEY (`Producto_idProducto`,`Vendedores_idVendedores`),
  KEY `fk_Producto_has_Vendedores_Vendedores1_idx` (`Vendedores_idVendedores`),
  KEY `fk_Producto_has_Vendedores_Producto1_idx` (`Producto_idProducto`),
  KEY `fk_Venta_Vendedores_Cartera_Clientes1_idx` (`Cartera_Clientes_idCartera_Clientes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vercontactos`
--
CREATE TABLE IF NOT EXISTS `vercontactos` (
`idRegistros_Contactos_Diarios` int(11) unsigned
,`Vendedores_idVendedores` int(11)
,`nombre` varchar(60)
,`rut` varchar(11)
,`direccion` text
,`contacto` varchar(45)
,`correo` varchar(45)
,`telefono` varchar(45)
,`factura` varchar(45)
,`fecha_ingreso` date
,`Vendedor` varchar(60)
);
-- --------------------------------------------------------

--
-- Estructura para la vista `lista_vendedores`
--
DROP TABLE IF EXISTS `lista_vendedores`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lista_vendedores` AS select `vendedores`.`idVendedores` AS `idVendedores`,`vendedores`.`nombre` AS `nombre` from `vendedores` where (`vendedores`.`trabajando` like 'SI');

-- --------------------------------------------------------

--
-- Estructura para la vista `registros_stock`
--
DROP TABLE IF EXISTS `registros_stock`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `registros_stock` AS select `s`.`cantidad` AS `cantidad`,`p`.`codigo` AS `codigo`,`p`.`nombre` AS `nombre`,`s`.`fecha_ingreso` AS `fecha_ingreso` from (`stock` `s` left join `productos` `p` on((`s`.`Producto_idProducto` = `p`.`idProducto`))) order by `s`.`fecha_ingreso` desc,`s`.`idStock` desc;

-- --------------------------------------------------------

--
-- Estructura para la vista `stock_total`
--
DROP TABLE IF EXISTS `stock_total`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stock_total` AS select `p`.`codigo` AS `codigo`,`p`.`nombre` AS `nombre`,sum(`s`.`cantidad`) AS `balance` from (`productos` `p` left join `stock` `s` on((`p`.`idProducto` = `s`.`Producto_idProducto`))) group by `p`.`nombre`;

-- --------------------------------------------------------

--
-- Estructura para la vista `vercontactos`
--
DROP TABLE IF EXISTS `vercontactos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vercontactos` AS (select `r`.`idRegistros_Contactos_Diarios` AS `idRegistros_Contactos_Diarios`,`r`.`Vendedores_idVendedores` AS `Vendedores_idVendedores`,`r`.`nombre` AS `nombre`,`r`.`rut` AS `rut`,`r`.`direccion` AS `direccion`,`r`.`contacto` AS `contacto`,`r`.`correo` AS `correo`,`r`.`telefono` AS `telefono`,`r`.`factura` AS `factura`,`r`.`fecha_ingreso` AS `fecha_ingreso`,`v`.`nombre` AS `Vendedor` from (`registros_contactos_diarios` `r` join `vendedores` `v` on((`r`.`Vendedores_idVendedores` = `v`.`idVendedores`))));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
