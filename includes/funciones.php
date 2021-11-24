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

?>