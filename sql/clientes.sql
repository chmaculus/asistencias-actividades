DROP TABLE IF EXISTS `clientes_dalvian`;
CREATE TABLE `clientes_dalvian` (
  id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  codigo_cliente int,
  apellido varchar(35),
  nombres varchar(35),
  tipo_documento varchar(2),
  numero_documento int(13),
  manzana int(4),
  casa int(4),
  calle varchar(30),
  numero varchar(10),
  piso int(10),
  dpto varchar(10),
  cod_postal varchar(25),
  telefono varchar(40),
  email varchar(30),
  observaciones text,
  imagen_nombre varchar(30),
  fecha_creado int(13),
  fecha_modificado int(13),
  PRIMARY KEY (`id`)
  );


alter table clientes_dalvian add index codigo_cliente(codigo_cliente);
alter table clientes_dalvian add index apellido(apellido);
alter table clientes_dalvian add index nombres(nombres);
alter table clientes_dalvian add index numero_documento(numero_documento);
alter table clientes_dalvian add index manzana(manzana);
alter table clientes_dalvian add index casa(casa);
alter table clientes_dalvian add index calle(calle);
alter table clientes_dalvian add index fecha_creado(fecha_creado);
alter table clientes_dalvian add index fecha_modificado(fecha_modificado);


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



