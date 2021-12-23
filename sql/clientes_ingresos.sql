DROP TABLE IF EXISTS `clientes_asistencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes_asistencias` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `id_cliente` mediumint(8) unsigned,
  `codigo_residente` int(11) DEFAULT NULL,
  `codigo_facturacion` int(11) DEFAULT NULL,
  `apellido` varchar(35) DEFAULT NULL,
  `nombres` varchar(35) DEFAULT NULL,
  `numero_documento` int(13) DEFAULT NULL,
  `tipo` int(2) DEFAULT NULL,
  `detalle` varchar(25),
  fecha_ingreso date,
  hora_ingreso time,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

alter table clientes_asistencias add index codigo_residente(codigo_residente);
alter table clientes_asistencias add index codigo_facturacion(codigo_facturacion);
alter table clientes_asistencias add index tipo(tipo);
alter table clientes_asistencias add index detalle(detalle);
