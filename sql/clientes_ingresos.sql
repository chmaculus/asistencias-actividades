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
  fecha_ingreso date,
  hora_ingreso time,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=242 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

