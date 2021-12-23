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

?>