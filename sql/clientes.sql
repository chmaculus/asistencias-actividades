DROP TABLE IF EXISTS `clientes_dalvian`;
CREATE TABLE `clientes_dalvian` (
  id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  apellido varchar(35),
  nombres varchar(35),
  cpo varchar(35),
  tipo_documento varchar(8)
  numero_documento varchar(25),
  provincia varchar(25),
  localidad varchar(25),
  manzana int(4),
  casa int(4),
  numero varchar(10),
  piso int(10),
  dpto varchar(10),
  cod_postal varchar(25),
  telefono varchar(40),
  email varchar(30),
  observaciones text,
  imagen_path varchar(30),
  imagen_nombre varchar(30),
  fecha_creado int(13),
  fecha_modificado int(13),
  PRIMARY KEY (`id`)
  );


/*
apellido
nombres


path /imagen rostro
imagen
tipo documento
dni

cuit
calle
manzana
casa
numero
piso
dpto
provincia
localidad
C.P.

observaciones

tel
email

fecha creacion
fecha modificado


*/





DROP TABLE IF EXISTS `residentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `residentes` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `dia_semana` tinyint(4) DEFAULT NULL,
  `id_actividad` int(11) DEFAULT NULL,
  `id_lugar` int(11) DEFAULT NULL,
  `id_clase` int(11) DEFAULT NULL,
  `id_profesor` int(11) DEFAULT NULL,
  `hora_desde` int(11) DEFAULT NULL,
  `hora_hasta` int(11) DEFAULT NULL,
  `creado` int(11) DEFAULT NULL,
  `modificado` int(11) DEFAULT NULL,
  `observacion` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dia_semana` (`dia_semana`),
  KEY `id_actividad` (`id_actividad`),
  KEY `id_lugar` (`id_lugar`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
