<?php

  require 'vendor/autoload.php';
  $conn = r\connect('52.20.101.105');
  $result = r\db("web")->table('problems')->run($conn);
  print_r($result);
  

?>
