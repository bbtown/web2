<?php

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('52.20.101.105');
  //$result = r\db("web")->table('ideas')->run($conn);
  //foreach ($result as $doc) {
  //  print_r($doc);
  //}

  $idea_desc = $_POST['idea_desc']; 
  $idea_more = $_POST['idea_more']; 
  $perspective = $_POST['perspective'];  
  $url = $_POST['url'];

  $document = Array('IdeaDescription' => $idea_desc,
                    'MoreDescription' => $idea_more,
                    'Perspective' => $perspective,
                    'URL' => $url);  

  $result = r\db("web")->table('ideas')->insert($document)->run($conn);
  echo "inserted data.";
?>
