<?php

function log_this($file_name, $data) {
      $file = fopen($file_name, 'a+');
      fwrite($file, $data);
      fclose($file);
  }

function file_write($file_name, $data) {
      $file = fopen($file_name, 'w');
      fwrite($file, $data);
      fclose($file);
  }


#---------------------------------------------------------------------------------------------
function fecha_conv($separador, $fecha){
      $f=explode($separador, $fecha);

      if($separador=="/"){
            $fecha=$f[2]."-".$f[1]."-".$f[0];
      }

      if($separador=="-"){
            $fecha=$f[2]."/".$f[1]."/".$f[0];
      }
return $fecha;
}
#---------------------------------------------------------------------------------------------




#---------------------------------------------------------------------------------------------
/* funcion temporal hasta que se corrija en el touchscreen para que almacene id_actividad para actualizar el id_actividad */
function normalize1(){
      $q='select distinct detalle from clientes_asistencias where id_actividad is null';
      $res=mysql_query($q);
      if(mysql_error()){echo mysql_error();}
      while($row=mysql_fetch_array($res)){
            $q='select id from actividades where actividad="'.$row[0].'"';
            $aa=mysql_result(mysql_query($q),0,0);
            $q='update clientes_asistencias set id_actividad="'.$aa.'" where detalle="'.quitar_tildes($row[0]).'"';
            mysql_query($q);
      }
}
#---------------------------------------------------------------------------------------------



#---------------------------------------------------------------------------------------------
function quitar_tildes($cadena){
      //$cadena = utf8_encode($cadena);

      $cadena = str_replace(
      array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
      array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
      $cadena
      );

      $cadena = str_replace(
      array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
      array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
      $cadena );

      $cadena = str_replace(
      array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
      array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
      $cadena );

      $cadena = str_replace(
      array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
      array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
      $cadena );

      $cadena = str_replace(
      array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
      array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
      $cadena );

      $cadena = str_replace(
      array('ñ', 'Ñ', 'ç', 'Ç'),
      array('n', 'N', 'c', 'C'),
      $cadena
      );

      return $cadena;
}
#---------------------------------------------------------------------------------------------
      



?>