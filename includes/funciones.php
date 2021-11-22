<?php

function log_this($file_name, $data) {
      $file = fopen($file_name, 'a+');
      fwrite($file, $data);
      fclose($file);
  }
?>